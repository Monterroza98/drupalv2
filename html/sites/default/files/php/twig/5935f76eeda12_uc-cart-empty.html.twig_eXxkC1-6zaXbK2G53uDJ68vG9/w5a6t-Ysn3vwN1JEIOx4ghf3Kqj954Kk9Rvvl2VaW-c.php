<?php

/* modules/ubercart/uc_cart/templates/uc-cart-empty.html.twig */
class __TwigTemplate_c9cf24b1a1abcb479e1bea654d526a8f13a25e8e7fc50ae69122d93055b2045b extends Twig_Template
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
        $tags = array("trans" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('trans'),
                array(),
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

        // line 8
        echo "<p class=\"uc-cart-empty\">
  ";
        // line 9
        echo t("There are no products in your shopping cart.", array());
        // line 12
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_cart/templates/uc-cart-empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  46 => 9,  43 => 8,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display for an empty shopping cart page.
 *
 * @ingroup themeable
#}
<p class=\"uc-cart-empty\">
  {% trans %}
    There are no products in your shopping cart.
  {% endtrans %}
</p>
";
    }
}
