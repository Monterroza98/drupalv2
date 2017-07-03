<?php

/* modules/ubercart/uc_order/templates/uc-order-invoice.html.twig */
class __TwigTemplate_71ba7ebc11ba36591d9cd4c23f16be2dbdb75941cd25cc049d654007af993710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 43, "for" => 199);
        $filters = array("t" => 70);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 39
        echo "<table width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\" align=\"center\" bgcolor=\"#006699\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
  <tr>
    <td>
      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" align=\"center\" bgcolor=\"#FFFFFF\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
        ";
        // line 43
        if ((isset($context["business_header"]) ? $context["business_header"] : null)) {
            // line 44
            echo "        <tr valign=\"top\">
          <td>
            <table width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
              <tr>
                <td>
                  ";
            // line 49
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "
                </td>
                <td width=\"98%\">
                  <div style=\"padding-left: 1em;\">
                  <span style=\"font-size: large;\">";
            // line 53
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["store_name"]) ? $context["store_name"] : null), "html", null, true));
            echo "</span><br />
                  ";
            // line 54
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "
                  </div>
                </td>
                <td nowrap=\"nowrap\">
                  ";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["store_address"]) ? $context["store_address"] : null), "html", null, true));
            echo "<br />";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["store_phone"]) ? $context["store_phone"] : null), "html", null, true));
            echo "
                </td>
              </tr>
            </table>
          </td>
        </tr>
        ";
        }
        // line 65
        echo "
        <tr valign=\"top\">
          <td>

            ";
        // line 69
        if ((isset($context["thank_you_message"]) ? $context["thank_you_message"] : null)) {
            // line 70
            echo "            <p><b>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Thanks for your order, @order_first_name!", array("@order_first_name" => (isset($context["order_first_name"]) ? $context["order_first_name"] : null)))));
            echo "</b></p>

            ";
            // line 72
            if ($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "data", array()), "new_user_name", array())) {
                // line 73
                echo "            <p><b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("An account has been created for you with the following details:")));
                echo "</b></p>
            <p><b>";
                // line 74
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Username:")));
                echo "</b> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_new_username"]) ? $context["order_new_username"] : null), "html", null, true));
                echo "<br />
            <b>";
                // line 75
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Password:")));
                echo "</b> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_new_password"]) ? $context["order_new_password"] : null), "html", null, true));
                echo "</p>
            ";
            }
            // line 77
            echo "
            <p><b>";
            // line 78
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Want to manage your order online?")));
            echo "</b><br />
            ";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("If you need to check the status of your order, please visit our home page at @store_link and click on \"My account\" in the menu or login with the following link:", array("@store_link" => (isset($context["store_link"]) ? $context["store_link"] : null)))));
            echo "
            <br /><br />";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_login_link"]) ? $context["site_login_link"] : null), "html", null, true));
            echo "</p>
            ";
        }
        // line 82
        echo "
            <table cellpadding=\"4\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
              <tr>
                <td colspan=\"2\" bgcolor=\"#006699\" style=\"color: white;\">
                  <b>";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Purchasing Information:")));
        echo "</b>
                </td>
              </tr>
              <tr>
                <td nowrap=\"nowrap\">
                  <b>";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("E-mail Address:")));
        echo "</b>
                </td>
                <td width=\"98%\">
                  ";
        // line 94
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_email"]) ? $context["order_email"] : null), "html", null, true));
        echo "
                </td>
              </tr>
              <tr>
                <td colspan=\"2\">

                  <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
                    <tr>
                      <td valign=\"top\" width=\"50%\">
                        <b>";
        // line 103
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Billing Address:")));
        echo "</b><br />
                        ";
        // line 104
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_billing_address"]) ? $context["order_billing_address"] : null), "html", null, true));
        echo "<br />
                        <br />
                        <b>";
        // line 106
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Billing Phone:")));
        echo "</b><br />
                        ";
        // line 107
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_billing_phone"]) ? $context["order_billing_phone"] : null), "html", null, true));
        echo "<br />
                      </td>
                      ";
        // line 109
        if ((isset($context["shippable"]) ? $context["shippable"] : null)) {
            // line 110
            echo "                      <td valign=\"top\" width=\"50%\">
                        <b>";
            // line 111
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Shipping Address:")));
            echo "</b><br />
                        ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_shipping_address"]) ? $context["order_shipping_address"] : null), "html", null, true));
            echo "<br />
                        <br />
                        <b>";
            // line 114
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Shipping Phone:")));
            echo "</b><br />
                        ";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_shipping_phone"]) ? $context["order_shipping_phone"] : null), "html", null, true));
            echo "<br />
                      </td>
                      ";
        }
        // line 118
        echo "                    </tr>
                  </table>

                </td>
              </tr>
              <tr>
                <td nowrap=\"nowrap\">
                  <b>";
        // line 125
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Order Grand Total:")));
        echo "</b>
                </td>
                <td width=\"98%\">
                  <b>";
        // line 128
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_total"]) ? $context["order_total"] : null), "html", null, true));
        echo "</b>
                </td>
              </tr>

              ";
        // line 132
        if ((isset($context["order_payment_method"]) ? $context["order_payment_method"] : null)) {
            // line 133
            echo "              <tr>
                <td nowrap=\"nowrap\">
                  <b>";
            // line 135
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Payment Method:")));
            echo "</b>
                </td>
                <td width=\"98%\">
                  ";
            // line 138
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_payment_method"]) ? $context["order_payment_method"] : null), "html", null, true));
            echo "
                </td>
              </tr>
              ";
        }
        // line 142
        echo "
              <tr>
                <td colspan=\"2\" bgcolor=\"#006699\" style=\"color: white;\">
                  <b>";
        // line 145
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Order Summary:")));
        echo "</b>
                </td>
              </tr>

              ";
        // line 149
        if ((isset($context["shippable"]) ? $context["shippable"] : null)) {
            // line 150
            echo "              <tr>
                <td colspan=\"2\" bgcolor=\"#EEEEEE\">
                  <font color=\"#CC6600\"><b>";
            // line 152
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Shipping Details:")));
            echo "</b></font>
                </td>
              </tr>
              ";
        }
        // line 156
        echo "
              <tr>
                <td colspan=\"2\">

                  <table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
        // line 163
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Order #:")));
        echo "</b>
                      </td>
                      <td width=\"98%\">
                        ";
        // line 166
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_link"]) ? $context["order_link"] : null), "html", null, true));
        echo "
                      </td>
                    </tr>

                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
        // line 172
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Order Date: ")));
        echo "</b>
                      </td>
                      <td width=\"98%\">
                        ";
        // line 175
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_created"]) ? $context["order_created"] : null), "html", null, true));
        echo "
                      </td>
                    </tr>

                    ";
        // line 179
        if (((isset($context["shipping_method"]) ? $context["shipping_method"] : null) && (isset($context["shippable"]) ? $context["shippable"] : null))) {
            // line 180
            echo "                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
            // line 182
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Shipping Method:")));
            echo "</b>
                      </td>
                      <td width=\"98%\">
                        ";
            // line 185
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_shipping_method"]) ? $context["order_shipping_method"] : null), "html", null, true));
            echo "
                      </td>
                    </tr>
                    ";
        }
        // line 189
        echo "
                    <tr>
                      <td nowrap=\"nowrap\">
                        ";
        // line 192
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Products Subtotal:")));
        echo "&nbsp;
                      </td>
                      <td width=\"98%\">
                        ";
        // line 195
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_subtotal"]) ? $context["order_subtotal"] : null), "html", null, true));
        echo "
                      </td>
                    </tr>

                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["line_items"]) ? $context["line_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ((($this->getAttribute($context["item"], "type", array()) != "subtotal") && ($this->getAttribute($context["item"], "type", array()) != "total"))) {
                // line 200
                echo "
                    <tr>
                      <td nowrap=\"nowrap\">
                        ";
                // line 203
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                echo ":
                      </td>
                      <td>
                        ";
                // line 206
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "formatted_amount", array()), "html", null, true));
                echo "
                      </td>
                    </tr>

                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "
                    <tr>
                      <td>&nbsp;</td>
                      <td>------</td>
                    </tr>

                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>";
        // line 219
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Total for this Order:")));
        echo "&nbsp;</b>
                      </td>
                      <td>
                        <b>";
        // line 222
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["order_total"]) ? $context["order_total"] : null), "html", null, true));
        echo "</b>
                      </td>
                    </tr>

                    <tr>
                      <td colspan=\"2\">
                        <br /><br /><b>";
        // line 228
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Products on order:")));
        echo "&nbsp;</b>

                        <table width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">

                          ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 233
            echo "                          <tr>
                            <td valign=\"top\" nowrap=\"nowrap\">
                              <b>";
            // line 235
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["product"], "qty", array()), "html", null, true));
            echo " x </b>
                            </td>
                            <td width=\"98%\">
                              <b>";
            // line 238
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true));
            echo " - ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["product"], "total_price", array()), "html", null, true));
            echo "</b>
                              ";
            // line 239
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["product"], "individual_price", array()), "html", null, true));
            echo "<br />
                              ";
            // line 240
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("SKU")));
            echo ": ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["product"], "model", array()), "html", null, true));
            echo "<br />
                              ";
            // line 241
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["product"], "details", array()), "html", null, true));
            echo "
                            </td>
                          </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "                        </table>

                      </td>
                    </tr>
                  </table>

                </td>
              </tr>

              ";
        // line 254
        if ((((isset($context["help_text"]) ? $context["help_text"] : null) || (isset($context["email_text"]) ? $context["email_text"] : null)) || (isset($context["store_footer"]) ? $context["store_footer"] : null))) {
            // line 255
            echo "              <tr>
                <td colspan=\"2\">
                  <hr noshade=\"noshade\" size=\"1\" /><br />

                  ";
            // line 259
            if ((isset($context["help_text"]) ? $context["help_text"] : null)) {
                // line 260
                echo "                  <p><b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Where can I get help with reviewing my order?")));
                echo "</b><br />
                  ";
                // line 261
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("To learn more about managing your orders on @store_link, please visit our <a href=\"@store_help_url\">help page</a>.", array("@store_link" => (isset($context["store_link"]) ? $context["store_link"] : null), "@store_help_url" => (isset($context["store_help_url"]) ? $context["store_help_url"] : null)))));
                echo "
                  <br /></p>
                  ";
            }
            // line 264
            echo "
                  ";
            // line 265
            if ((isset($context["email_text"]) ? $context["email_text"] : null)) {
                // line 266
                echo "                  <p>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Please note: This e-mail message is an automated notification. Please do not reply to this message.")));
                echo "</p>

                  <p>";
                // line 268
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Thanks again for shopping with us.")));
                echo "</p>
                  ";
            }
            // line 270
            echo "
                  ";
            // line 271
            if ((isset($context["store_footer"]) ? $context["store_footer"] : null)) {
                // line 272
                echo "                  <p><b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["store_link"]) ? $context["store_link"] : null), "html", null, true));
                echo "</b><br /><b>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</b></p>
                  ";
            }
            // line 274
            echo "                </td>
              </tr>
              ";
        }
        // line 277
        echo "
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_order/templates/uc-order-invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 277,  513 => 274,  505 => 272,  503 => 271,  500 => 270,  495 => 268,  489 => 266,  487 => 265,  484 => 264,  478 => 261,  473 => 260,  471 => 259,  465 => 255,  463 => 254,  452 => 245,  442 => 241,  436 => 240,  432 => 239,  426 => 238,  420 => 235,  416 => 233,  412 => 232,  405 => 228,  396 => 222,  390 => 219,  380 => 211,  368 => 206,  362 => 203,  357 => 200,  352 => 199,  345 => 195,  339 => 192,  334 => 189,  327 => 185,  321 => 182,  317 => 180,  315 => 179,  308 => 175,  302 => 172,  293 => 166,  287 => 163,  278 => 156,  271 => 152,  267 => 150,  265 => 149,  258 => 145,  253 => 142,  246 => 138,  240 => 135,  236 => 133,  234 => 132,  227 => 128,  221 => 125,  212 => 118,  206 => 115,  202 => 114,  197 => 112,  193 => 111,  190 => 110,  188 => 109,  183 => 107,  179 => 106,  174 => 104,  170 => 103,  158 => 94,  152 => 91,  144 => 86,  138 => 82,  133 => 80,  129 => 79,  125 => 78,  122 => 77,  115 => 75,  109 => 74,  104 => 73,  102 => 72,  96 => 70,  94 => 69,  88 => 65,  76 => 58,  69 => 54,  65 => 53,  58 => 49,  51 => 44,  49 => 43,  43 => 39,);
    }

    public function getSource()
    {
        return "{#
 * This file is the default customer invoice template for Ubercart.
 *
 * Available variables:
 * - products: An array of product objects in the order, with the following
 *   members:
 *   - title: The product title.
 *   - model: The product SKU.
 *   - qty: The quantity ordered.
 *   - total_price: The formatted total price for the quantity ordered.
 *   - individual_price: If quantity is more than 1, the formatted product
 *     price of a single item.
 *   - details: Any extra details about the product, such as attributes.
 * - line_items: An array of line item arrays attached to the order, each with
 *   the following keys:
 *   - type: The type of line item (subtotal, shipping, etc.).
 *   - title: The line item display title.
 *   - formatted_amount: The formatted amount of the line item.
 * - shippable: TRUE if the order is shippable.
 *
 * Tokens: All site, store and order tokens are also available as
 * variables, such as site_logo, store_name and order_first_name.
 *
 * Display options:
 * - op: 'view', 'print', 'checkout-mail' or 'admin-mail', depending on
 *   which variant of the invoice is being rendered.
 * - business_header: TRUE if the invoice header should be displayed.
 * - shipping_method: TRUE if shipping information should be displayed.
 * - help_text: TRUE if the store help message should be displayed.
 * - email_text: TRUE if the \"do not reply to this email\" message should
 *   be displayed.
 * - store_footer: TRUE if the store URL should be displayed.
 * - thank_you_message: TRUE if the 'thank you for your order' message
 *   should be displayed.
 *
 * @see template_preprocess_uc_order()
 */
#}
<table width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\" align=\"center\" bgcolor=\"#006699\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
  <tr>
    <td>
      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\" align=\"center\" bgcolor=\"#FFFFFF\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
        {% if business_header %}
        <tr valign=\"top\">
          <td>
            <table width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
              <tr>
                <td>
                  {{ site_logo }}
                </td>
                <td width=\"98%\">
                  <div style=\"padding-left: 1em;\">
                  <span style=\"font-size: large;\">{{ store_name }}</span><br />
                  {{ site_slogan }}
                  </div>
                </td>
                <td nowrap=\"nowrap\">
                  {{ store_address }}<br />{{ store_phone }}
                </td>
              </tr>
            </table>
          </td>
        </tr>
        {% endif %}

        <tr valign=\"top\">
          <td>

            {% if thank_you_message %}
            <p><b>{{ 'Thanks for your order, @order_first_name!'|t({'@order_first_name': order_first_name}) }}</b></p>

            {% if order.data.new_user_name %}
            <p><b>{{ 'An account has been created for you with the following details:'|t }}</b></p>
            <p><b>{{ 'Username:'|t }}</b> {{ order_new_username }}<br />
            <b>{{ 'Password:'|t }}</b> {{ order_new_password }}</p>
            {% endif %}

            <p><b>{{ 'Want to manage your order online?'|t }}</b><br />
            {{ 'If you need to check the status of your order, please visit our home page at @store_link and click on \"My account\" in the menu or login with the following link:'|t({'@store_link': store_link}) }}
            <br /><br />{{ site_login_link }}</p>
            {% endif %}

            <table cellpadding=\"4\" cellspacing=\"0\" border=\"0\" width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
              <tr>
                <td colspan=\"2\" bgcolor=\"#006699\" style=\"color: white;\">
                  <b>{{ 'Purchasing Information:'|t }}</b>
                </td>
              </tr>
              <tr>
                <td nowrap=\"nowrap\">
                  <b>{{ 'E-mail Address:'|t }}</b>
                </td>
                <td width=\"98%\">
                  {{ order_email }}
                </td>
              </tr>
              <tr>
                <td colspan=\"2\">

                  <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
                    <tr>
                      <td valign=\"top\" width=\"50%\">
                        <b>{{ 'Billing Address:'|t }}</b><br />
                        {{ order_billing_address }}<br />
                        <br />
                        <b>{{ 'Billing Phone:'|t }}</b><br />
                        {{ order_billing_phone }}<br />
                      </td>
                      {% if shippable %}
                      <td valign=\"top\" width=\"50%\">
                        <b>{{ 'Shipping Address:'|t }}</b><br />
                        {{ order_shipping_address }}<br />
                        <br />
                        <b>{{ 'Shipping Phone:'|t }}</b><br />
                        {{ order_shipping_phone }}<br />
                      </td>
                      {% endif %}
                    </tr>
                  </table>

                </td>
              </tr>
              <tr>
                <td nowrap=\"nowrap\">
                  <b>{{ 'Order Grand Total:'|t }}</b>
                </td>
                <td width=\"98%\">
                  <b>{{ order_total }}</b>
                </td>
              </tr>

              {% if order_payment_method %}
              <tr>
                <td nowrap=\"nowrap\">
                  <b>{{ 'Payment Method:'|t }}</b>
                </td>
                <td width=\"98%\">
                  {{ order_payment_method }}
                </td>
              </tr>
              {% endif %}

              <tr>
                <td colspan=\"2\" bgcolor=\"#006699\" style=\"color: white;\">
                  <b>{{ 'Order Summary:'|t }}</b>
                </td>
              </tr>

              {% if shippable %}
              <tr>
                <td colspan=\"2\" bgcolor=\"#EEEEEE\">
                  <font color=\"#CC6600\"><b>{{ 'Shipping Details:'|t }}</b></font>
                </td>
              </tr>
              {% endif %}

              <tr>
                <td colspan=\"2\">

                  <table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">
                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>{{ 'Order #:'|t }}</b>
                      </td>
                      <td width=\"98%\">
                        {{ order_link }}
                      </td>
                    </tr>

                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>{{ 'Order Date: '|t }}</b>
                      </td>
                      <td width=\"98%\">
                        {{ order_created }}
                      </td>
                    </tr>

                    {% if shipping_method and shippable %}
                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>{{ 'Shipping Method:'|t }}</b>
                      </td>
                      <td width=\"98%\">
                        {{ order_shipping_method }}
                      </td>
                    </tr>
                    {% endif %}

                    <tr>
                      <td nowrap=\"nowrap\">
                        {{ 'Products Subtotal:'|t }}&nbsp;
                      </td>
                      <td width=\"98%\">
                        {{ order_subtotal }}
                      </td>
                    </tr>

                    {% for item in line_items if item.type != 'subtotal' and item.type != 'total' %}

                    <tr>
                      <td nowrap=\"nowrap\">
                        {{ item.title }}:
                      </td>
                      <td>
                        {{ item.formatted_amount }}
                      </td>
                    </tr>

                    {% endfor %}

                    <tr>
                      <td>&nbsp;</td>
                      <td>------</td>
                    </tr>

                    <tr>
                      <td nowrap=\"nowrap\">
                        <b>{{ 'Total for this Order:'|t }}&nbsp;</b>
                      </td>
                      <td>
                        <b>{{ order_total }}</b>
                      </td>
                    </tr>

                    <tr>
                      <td colspan=\"2\">
                        <br /><br /><b>{{ 'Products on order:'|t }}&nbsp;</b>

                        <table width=\"100%\" style=\"font-family: verdana, arial, helvetica; font-size: small;\">

                          {% for product in products %}
                          <tr>
                            <td valign=\"top\" nowrap=\"nowrap\">
                              <b>{{ product.qty }} x </b>
                            </td>
                            <td width=\"98%\">
                              <b>{{ product.title }} - {{ product.total_price }}</b>
                              {{ product.individual_price }}<br />
                              {{ 'SKU'|t }}: {{ product.model }}<br />
                              {{ product.details }}
                            </td>
                          </tr>
                          {% endfor %}
                        </table>

                      </td>
                    </tr>
                  </table>

                </td>
              </tr>

              {% if help_text or email_text or store_footer %}
              <tr>
                <td colspan=\"2\">
                  <hr noshade=\"noshade\" size=\"1\" /><br />

                  {% if help_text %}
                  <p><b>{{ 'Where can I get help with reviewing my order?'|t }}</b><br />
                  {{ 'To learn more about managing your orders on @store_link, please visit our <a href=\"@store_help_url\">help page</a>.'|t({'@store_link': store_link, '@store_help_url': store_help_url}) }}
                  <br /></p>
                  {% endif %}

                  {% if email_text %}
                  <p>{{ 'Please note: This e-mail message is an automated notification. Please do not reply to this message.'|t }}</p>

                  <p>{{ 'Thanks again for shopping with us.'|t }}</p>
                  {% endif %}

                  {% if store_footer %}
                  <p><b>{{ store_link }}</b><br /><b>{{ site_slogan }}</b></p>
                  {% endif %}
                </td>
              </tr>
              {% endif %}

            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
";
    }
}
