<?php

/* modules/ubercart/uc_store/templates/uc-price.html.twig */
class __TwigTemplate_ff48bef4f20a3616e9c2116b7bfc0897bc1796266f39549de752e9b85fc44fbe extends Twig_Template
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
        $tags = array("spaceless" => 14, "if" => 16);
        $filters = array("join" => 17);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'if'),
                array('join'),
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

        // line 14
        ob_start();
        // line 15
        echo "<span class=\"uc-price\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true));
        echo "</span>
";
        // line 16
        if ( !twig_test_empty((isset($context["suffixes"]) ? $context["suffixes"] : null))) {
            // line 17
            echo "  <span class=\"price-suffixes\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_join_filter((isset($context["suffixes"]) ? $context["suffixes"] : null), " "), "html", null, true));
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/ubercart/uc_store/templates/uc-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  45 => 15,  43 => 14,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a price.
 *
 * Displays a price in the standard format and with consistent markup.
 *
 * Available variables:
 * - price: A formatted price.
 * - suffixes: An array of suffixes to be attached to this price.
 *
 * @ingroup themeable
#}
{% spaceless %}
<span class=\"uc-price\">{{ price }}</span>
{% if suffixes is not empty %}
  <span class=\"price-suffixes\">{{ suffixes|join(' ') }}</span>
{% endif %}
{% endspaceless %}
";
    }
}
