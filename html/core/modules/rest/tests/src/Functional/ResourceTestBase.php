<?php

namespace Drupal\Tests\rest\Functional;

use Behat\Mink\Driver\BrowserKitDriver;
use Drupal\Core\Url;
use Drupal\rest\RestResourceConfigInterface;
use Drupal\Tests\BrowserTestBase;
use Drupal\user\Entity\Role;
use Drupal\user\RoleInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

/**
 * Subclass this for every REST resource, every format and every auth provider.
 *
 * For more guidance see
 * \Drupal\Tests\rest\Functional\EntityResource\EntityResourceTestBase
 * which has recommendations for testing the
 * \Drupal\rest\Plugin\rest\resource\EntityResource REST resource for every
 * format and every auth provider. It's a special case (because that single REST
 * resource generates supports not just one thing, but many things — multiple
 * entity types), but the same principles apply.
 */
abstract class ResourceTestBase extends BrowserTestBase {

  /**
   * The format to use in this test.
   *
   * A format is the combination of a certain normalizer and a certain
   * serializer.
   *
   * @see https://www.drupal.org/developing/api/8/serialization
   *
   * (The default is 'json' because that doesn't depend on any module.)
   *
   * @var string
   */
  protected static $format = 'json';

  /**
   * The MIME type that corresponds to $format.
   *
   * (Sadly this cannot be computed automatically yet.)
   *
   * @var string
   */
  protected static $mimeType = 'application/json';

  /**
   * The authentication mechanism to use in this test.
   *
   * (The default is 'cookie' because that doesn't depend on any module.)
   *
   * @var string
   */
  protected static $auth = FALSE;

  /**
   * The REST Resource Config entity ID under test (i.e. a resource type).
   *
   * The REST Resource plugin ID can be calculated from this.
   *
   * @var string
   */
  protected static $resourceConfigId = NULL;

  /**
   * The account to use for authentication, if any.
   *
   * @var null|\Drupal\Core\Session\AccountInterface
   */
  protected $account = NULL;

  /**
   * The REST resource config entity storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $resourceConfigStorage;

  /**
   * The serializer service.
   *
   * @var \Symfony\Component\Serializer\Serializer
   */
  protected $serializer;

  /**
   * Modules to install.
   *
   * @var array
   */
  public static $modules = ['rest'];

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    // Ensure the anonymous user role has no permissions at all.
    $user_role = Role::load(RoleInterface::ANONYMOUS_ID);
    foreach ($user_role->getPermissions() as $permission) {
      $user_role->revokePermission($permission);
    }
    $user_role->save();
    assert('[] === $user_role->getPermissions()', 'The anonymous user role has no permissions at all.');

    if (static::$auth !== FALSE) {
      // Ensure the authenticated user role has no permissions at all.
      $user_role = Role::load(RoleInterface::AUTHENTICATED_ID);
      foreach ($user_role->getPermissions() as $permission) {
        $user_role->revokePermission($permission);
      }
      $user_role->save();
      assert('[] === $user_role->getPermissions()', 'The authenticated user role has no permissions at all.');

      // Create an account.
      $this->account = $this->createUser();
    }
    else {
      // Otherwise, also create an account, so that any test involving User
      // entities will have the same user IDs regardless of authentication.
      $this->createUser();
    }

    $this->resourceConfigStorage = $this->container->get('entity_type.manager')->getStorage('rest_resource_config');

    // Ensure there's a clean slate: delete all REST resource config entities.
    $this->resourceConfigStorage->delete($this->resourceConfigStorage->loadMultiple());
    $this->refreshTestStateAfterRestConfigChange();
  }

  /**
   * Provisions the REST resource under test.
   *
   * @param string[] $formats
   *   The allowed formats for this resource.
   * @param string[] $authentication
   *   The allowed authentication providers for this resource.
   */
  protected function provisionResource($formats = [], $authentication = []) {
    $this->resourceConfigStorage->create([
      'id' => static::$resourceConfigId,
      'granularity' => RestResourceConfigInterface::RESOURCE_GRANULARITY,
      'configuration' => [
        'methods' => ['GET', 'POST', 'PATCH', 'DELETE'],
        'formats' => $formats,
        'authentication' => $authentication,
      ],
      'status' => TRUE,
    ])->save();
    $this->refreshTestStateAfterRestConfigChange();
  }

  /**
   * Refreshes the state of the tester to be in sync with the testee.
   *
   * Should be called after every change made to:
   * - RestResourceConfig entities
   * - the 'rest.settings' simple configuration
   */
  protected function refreshTestStateAfterRestConfigChange() {
    // Ensure that the cache tags invalidator has its internal values reset.
    // Otherwise the http_response cache tag invalidation won't work.
    $this->refreshVariables();

    // Tests using this base class may trigger route rebuilds due to changes to
    // RestResourceConfig entities or 'rest.settings'. Ensure the test generates
    // routes using an up-to-date router.
    \Drupal::service('router.builder')->rebuildIfNeeded();
  }

  /**
   * Sets up the necessary authorization.
   *
   * In case of a test verifying publicly accessible REST resources: grant
   * permissions to the anonymous user role.
   *
   * In case of a test verifying behavior when using a particular authentication
   * provider: create a user with a particular set of permissions.
   *
   * Because of the $method parameter, it's possible to first set up
   * authentication for only GET, then add POST, et cetera. This then also
   * allows for verifying a 403 in case of missing authorization.
   *
   * @param string $method
   *   The HTTP method for which to set up authentication.
   *
   * @see ::grantPermissionsToAnonymousRole()
   * @see ::grantPermissionsToAuthenticatedRole()
   */
  abstract protected function setUpAuthorization($method);

  /**
   * Verifies the error response in case of missing authentication.
   */
  abstract protected function assertResponseWhenMissingAuthentication(ResponseInterface $response);

  /**
   * Asserts normalization-specific edge cases.
   *
   * (Should be called before sending a well-formed request.)
   *
   * @see \GuzzleHttp\ClientInterface::request()
   *
   * @param string $method
   *   HTTP method.
   * @param \Drupal\Core\Url $url
   *   URL to request.
   * @param array $request_options
   *   Request options to apply.
   */
  abstract protected function assertNormalizationEdgeCases($method, Url $url, array $request_options);

  /**
   * Asserts authentication provider-specific edge cases.
   *
   * (Should be called before sending a well-formed request.)
   *
   * @see \GuzzleHttp\ClientInterface::request()
   *
   * @param string $method
   *   HTTP method.
   * @param \Drupal\Core\Url $url
   *   URL to request.
   * @param array $request_options
   *   Request options to apply.
   */
  abstract protected function assertAuthenticationEdgeCases($method, Url $url, array $request_options);

  /**
   * Return the expected error message.
   *
   * @param string $method
   *   The HTTP method (GET, POST, PATCH, DELETE).
   *
   * @return string
   *    The error string.
   */
  abstract protected function getExpectedUnauthorizedAccessMessage($method);

  /**
   * Return the default expected error message if the
   * bc_entity_resource_permissions is true.
   *
   * @param string $method
   *   The HTTP method (GET, POST, PATCH, DELETE).
   *
   * @return string
   *   The error string.
   */
  abstract protected function getExpectedBcUnauthorizedAccessMessage($method);

  /**
   * Initializes authentication.
   *
   * E.g. for cookie authentication, we first need to get a cookie.
   */
  protected function initAuthentication() {}

  /**
   * Returns Guzzle request options for authentication.
   *
   * @param string $method
   *   The HTTP method for this authenticated request.
   *
   * @return array
   *   Guzzle request options to use for authentication.
   *
   * @see \GuzzleHttp\ClientInterface::request()
   */
  protected function getAuthenticationRequestOptions($method) {
    return [];
  }

  /**
   * Grants permissions to the anonymous role.
   *
   * @param string[] $permissions
   *   Permissions to grant.
   */
  protected function grantPermissionsToAnonymousRole(array $permissions) {
    $this->grantPermissions(Role::load(RoleInterface::ANONYMOUS_ID), $permissions);
  }

  /**
   * Grants permissions to the authenticated role.
   *
   * @param string[] $permissions
   *   Permissions to grant.
   */
  protected function grantPermissionsToAuthenticatedRole(array $permissions) {
    $this->grantPermissions(Role::load(RoleInterface::AUTHENTICATED_ID), $permissions);
  }

  /**
   * Grants permissions to the tested role: anonymous or authenticated.
   *
   * @param string[] $permissions
   *   Permissions to grant.
   *
   * @see ::grantPermissionsToAuthenticatedRole()
   * @see ::grantPermissionsToAnonymousRole()
   */
  protected function grantPermissionsToTestedRole(array $permissions) {
    if (static::$auth) {
      $this->grantPermissionsToAuthenticatedRole($permissions);
    }
    else {
      $this->grantPermissionsToAnonymousRole($permissions);
    }
  }

  /**
   * Performs a HTTP request. Wraps the Guzzle HTTP client.
   *
   * Why wrap the Guzzle HTTP client? Because we want to keep the actual test
   * code as simple as possible, and hence not require them to specify the
   * 'http_errors = FALSE' request option, nor do we want them to have to
   * convert Drupal Url objects to strings.
   *
   * @see \GuzzleHttp\ClientInterface::request()
   *
   * @param string $method
   *   HTTP method.
   * @param \Drupal\Core\Url $url
   *   URL to request.
   * @param array $request_options
   *   Request options to apply.
   *
   * @return \Psr\Http\Message\ResponseInterface
   */
  protected function request($method, Url $url, array $request_options) {
    $request_options[RequestOptions::HTTP_ERRORS] = FALSE;
    $request_options = $this->decorateWithXdebugCookie($request_options);
    $client = $this->getSession()->getDriver()->getClient()->getClient();
    return $client->request($method, $url->setAbsolute(TRUE)->toString(), $request_options);
  }

  /**
   * Asserts that a resource response has the given status code and body.
   *
   * @param int $expected_status_code
   *   The expected response status.
   * @param string|false $expected_body
   *   The expected response body. FALSE in case this should not be asserted.
   * @param \Psr\Http\Message\ResponseInterface $response
   *   The response to assert.
   */
  protected function assertResourceResponse($expected_status_code, $expected_body, ResponseInterface $response) {
    $this->assertSame($expected_status_code, $response->getStatusCode());
    if ($expected_status_code < 400) {
      $this->assertSame([static::$mimeType], $response->getHeader('Content-Type'));
    }
    else {
      $this->assertSame([static::$mimeType], $response->getHeader('Content-Type'));
    }
    if ($expected_body !== FALSE) {
      $this->assertSame($expected_body, (string) $response->getBody());
    }
  }

  /**
   * Asserts that a resource error response has the given message.
   *
   * @param int $expected_status_code
   *   The expected response status.
   * @param string $expected_message
   *   The expected error message.
   * @param \Psr\Http\Message\ResponseInterface $response
   *   The error response to assert.
   */
  protected function assertResourceErrorResponse($expected_status_code, $expected_message, ResponseInterface $response) {
    $expected_body = ($expected_message !== FALSE) ? $this->serializer->encode(['message' => $expected_message], static::$format) : FALSE;
    $this->assertResourceResponse($expected_status_code, $expected_body, $response);
  }

  /**
   * Adds the Xdebug cookie to the request options.
   *
   * @param array $request_options
   *   The request options.
   *
   * @return array
   *   Request options updated with the Xdebug cookie if present.
   */
  protected function decorateWithXdebugCookie(array $request_options) {
    $session = $this->getSession();
    $driver = $session->getDriver();
    if ($driver instanceof BrowserKitDriver) {
      $client = $driver->getClient();
      foreach ($client->getCookieJar()->all() as $cookie) {
        if (isset($request_options[RequestOptions::HEADERS]['Cookie'])) {
          $request_options[RequestOptions::HEADERS]['Cookie'] .= '; ' . $cookie->getName() . '=' . $cookie->getValue();
        }
        else {
          $request_options[RequestOptions::HEADERS]['Cookie'] = $cookie->getName() . '=' . $cookie->getValue();
        }
      }
    }
    return $request_options;
  }

}