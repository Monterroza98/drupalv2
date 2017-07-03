<?php

/* modules/ubercart/uc_cart/templates/uc-cart-complete-sale.html.twig */
class __TwigTemplate_b806c7b69942649f7b6cd8d3bcb74c6f94aa32e30d9ba7d3a7ee9a793630f1e7 extends Twig_Template
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
        $tags = array();
        $filters = array("t" => 14);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 13
        echo "
<p>";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Your order is complete! Your order number is @number.", array("@number" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array())))));
        echo "</p>

";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true));
        echo "

<p><a href=\"";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Return to the front page.")));
        echo "</a></p>
";
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_cart/templates/uc-cart-complete-sale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  51 => 16,  46 => 14,  43 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display the checkout completion page.
 *
 * Available variables:
 * - order: The order that was completed.
 * - message: A message to display to the user.
 * - front_page: The URL of the front page.
 *
 * @ingroup themeable
#}

<p>{{ 'Your order is complete! Your order number is @number.'|t({'@number': order.id}) }}</p>

{{ message }}

<p><a href=\"{{ front_page }}\">{{ 'Return to the front page.'|t }}</a></p>
";
    }
}
