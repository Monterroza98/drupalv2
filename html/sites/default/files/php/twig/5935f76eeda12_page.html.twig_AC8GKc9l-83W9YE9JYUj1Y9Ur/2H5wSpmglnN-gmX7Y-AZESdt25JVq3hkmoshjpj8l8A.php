<?php

/* themes/drupal8_custom_theme/templates/layout/page.html.twig */
class __TwigTemplate_af0d0b4740c285720731fc7c7d27acbe7ebe862726f7482b3ae20057ff5d6fef extends Twig_Template
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
        $tags = array("if" => 74, "for" => 118);
        $filters = array("raw" => 119, "date" => 323);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 'date'),
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

        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"\">
      <div class=\"\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 75
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 77
        echo "      </div>

      <!-- Navigation -->
      <div class=\"\">
        ";
        // line 81
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 82
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 84
        echo "      </div>
      <!--End Navigation -->

      <!-- Navigation -->
      <div class=\"\">
        <!--Search-->
          ";
        // line 90
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
            // line 91
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
            echo "
          ";
        }
        // line 93
        echo "        <!--End Search-->
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 102
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()))) {
            echo "  
    <div class=\"slideshow\">
      ";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 107
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->

<div class=\"main-content-wrap\">

  <!-- Start Slider -->
  ";
        // line 115
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 116
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider_content"]) ? $context["slider_content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 119
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "      </ul>
    </div>
  ";
        }
        // line 124
        echo "  <!-- End Slider -->

  <!--Home page message-->
  ";
        // line 127
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepagemessage", array()))) {
            // line 128
            echo "    <div class=\"container-sub\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 131
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepagemessage", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 136
        echo "  <!--End Highlighted-->

  <!-- Page Title -->
  ";
        // line 139
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 140
            echo "    <div id=\"page-title\">
      <div id=\"page-title-inner\">
        <!-- start: Container-sub -->
        <div class=\"container-sub\">
          ";
            // line 144
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 149
        echo "  <!-- End Page Title -- >


  <!-- layout -->
  ";
        // line 153
        if ( !(isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 154
            echo "    <div id=\"wrapper\" class=\"main-container\">

      <!--Highlighted-->
      ";
            // line 157
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
                // line 158
                echo "        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
                // line 160
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
                echo "
          </div>
        </div>
      ";
            }
            // line 164
            echo "      <!--End Highlighted-->

      <!-- start: Container-sub -->
      <div class=\"container-sub\">
                
        <!--start:content -->
        ";
            // line 170
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array())) {
                // line 171
                echo "          <div class=\"breadcrumb-wrap\">
            <div class=\"breadcrumb-subwrap\">";
                // line 172
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
                echo "</div>
          </div>
        ";
            }
            // line 175
            echo "
        <div class=\"row layout\">

          <!--- Start Left SideBar -->
          ";
            // line 179
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 180
                echo "            <div class=\"sidebar\" >
              <div class = ";
                // line 181
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
                echo " >
                ";
                // line 182
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 186
            echo "          <!---End Right SideBar -->

          <!--- Start content -->
          ";
            // line 189
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
                // line 190
                echo "            <div class=\"content_layout\">
              <div class=";
                // line 191
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
                echo ">
                ";
                // line 192
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 196
            echo "          <!---End content -->

          <!--- Start Right SideBar -->
          ";
            // line 199
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 200
                echo "            <div class=\"sidebar\">
              <div class=";
                // line 201
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
                echo ">
                ";
                // line 202
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
              </div>
            </div>
          ";
            }
            // line 206
            echo "          <!---End Right SideBar -->
          
        </div>
        <!--End Content -->

        <!--Start Content Bottom-->
        ";
            // line 212
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
                // line 213
                echo "          <div class=\"row\">
            ";
                // line 214
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 217
            echo "        <!--End Content Bottom-->

      </div>
    </div>
  ";
        }
        // line 222
        echo "  <!-- End layout -->


  <!-- Start Google Map -->
  ";
        // line 226
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array())) {
            // line 227
            echo "    <div class=\"google-map\">
      ";
            // line 228
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 231
        echo "  <!-- End Google Map -->


  <!-- Start bottom -->
  ";
        // line 235
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            echo "  
    ";
            // line 236
            if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()))) {
                // line 237
                echo "      <div class=\"bottom-widgets\">
        <div class=\"container-sub\">        
          <div class=\"row-sub clearfix\">

            <!-- Start Bottom First Region -->          
            ";
                // line 242
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                    // line 243
                    echo "              <div class = ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                    echo ">
                ";
                    // line 244
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                    echo "
              </div>
            ";
                }
                // line 246
                echo "          
            <!-- End Bottom First Region -->

            <!-- Start Bottom Second Region -->
            ";
                // line 250
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) {
                    // line 251
                    echo "              <div class = ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                    echo ">
                ";
                    // line 252
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array()), "html", null, true));
                    echo "
              </div>
            ";
                }
                // line 254
                echo "          
            <!-- End Bottom Second Region -->

            <!-- Start Bottom third Region -->          
            ";
                // line 258
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) {
                    // line 259
                    echo "              <div class = ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                    echo ">
                ";
                    // line 260
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()), "html", null, true));
                    echo "
              </div>
            ";
                }
                // line 262
                echo "          
            <!-- End Bottom Third Region -->

            ";
                // line 265
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())) {
                    // line 266
                    echo "            <div class = ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                    echo ">
              ";
                    // line 267
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()), "html", null, true));
                    echo "
            </div>
            ";
                }
                // line 270
                echo "
          </div>
        </div>
      </div>
    ";
            }
            // line 275
            echo "  ";
        }
        // line 276
        echo "  <!--End Bottom -->


  <!-- Start Footer Menu -->
  ";
        // line 280
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array())) {
            // line 281
            echo "    <div class=\"footer-menu\">
      <div class=\"container-sub\">
        <div class=\"row-sub clearfix\">
          <div class=\"col-sm-6\">
            ";
            // line 285
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_menu", array()), "html", null, true));
            echo "
          </div>
          ";
            // line 287
            if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
                // line 288
                echo "          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              ";
                // line 290
                if ((isset($context["facebook_url"]) ? $context["facebook_url"] : null)) {
                    // line 291
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["facebook_url"]) ? $context["facebook_url"] : null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 293
                echo "              ";
                if ((isset($context["google_plus_url"]) ? $context["google_plus_url"] : null)) {
                    // line 294
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["google_plus_url"]) ? $context["google_plus_url"] : null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 296
                echo "              ";
                if ((isset($context["twitter_url"]) ? $context["twitter_url"] : null)) {
                    // line 297
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["twitter_url"]) ? $context["twitter_url"] : null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 299
                echo "              ";
                if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                    // line 300
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 302
                echo "              ";
                if ((isset($context["pinterest_url"]) ? $context["pinterest_url"] : null)) {
                    // line 303
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pinterest_url"]) ? $context["pinterest_url"] : null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 305
                echo "              ";
                if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                    // line 306
                    echo "                <a href=\"";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 308
                echo "            </div>
          </div>
          ";
            }
            // line 311
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 315
        echo "  <!-- End Footer Menu -->

  <div class=\"copyright\">
    <div class=\"container-sub\">
      <div class=\"row-sub clearfix\">

        <!-- Copyright -->
        <div class=\"col-sm-6\">
          <p class=\"copyright\">Copyright © ";
        // line 323
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved</p>
        </div>
        <!-- End Copyright -->

        <!-- Credit link -->
        ";
        // line 328
        if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
            // line 329
            echo "          <div class=\"col-sm-6\">
            <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
          </div>
        ";
        }
        // line 333
        echo "        <!-- End Credit link -->
        
      </div>
    </div>
  </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_custom_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 333,  553 => 329,  551 => 328,  543 => 323,  533 => 315,  527 => 311,  522 => 308,  516 => 306,  513 => 305,  507 => 303,  504 => 302,  498 => 300,  495 => 299,  489 => 297,  486 => 296,  480 => 294,  477 => 293,  471 => 291,  469 => 290,  465 => 288,  463 => 287,  458 => 285,  452 => 281,  450 => 280,  444 => 276,  441 => 275,  434 => 270,  428 => 267,  423 => 266,  421 => 265,  416 => 262,  410 => 260,  405 => 259,  403 => 258,  397 => 254,  391 => 252,  386 => 251,  384 => 250,  378 => 246,  372 => 244,  367 => 243,  365 => 242,  358 => 237,  356 => 236,  352 => 235,  346 => 231,  340 => 228,  337 => 227,  335 => 226,  329 => 222,  322 => 217,  316 => 214,  313 => 213,  311 => 212,  303 => 206,  296 => 202,  292 => 201,  289 => 200,  287 => 199,  282 => 196,  275 => 192,  271 => 191,  268 => 190,  266 => 189,  261 => 186,  254 => 182,  250 => 181,  247 => 180,  245 => 179,  239 => 175,  233 => 172,  230 => 171,  228 => 170,  220 => 164,  213 => 160,  209 => 158,  207 => 157,  202 => 154,  200 => 153,  194 => 149,  186 => 144,  180 => 140,  178 => 139,  173 => 136,  165 => 131,  160 => 128,  158 => 127,  153 => 124,  148 => 121,  139 => 119,  135 => 118,  131 => 116,  129 => 115,  119 => 107,  113 => 104,  108 => 102,  97 => 93,  91 => 91,  89 => 90,  81 => 84,  75 => 82,  73 => 81,  67 => 77,  61 => 75,  59 => 74,  43 => 60,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:copyright
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}


<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"\">
      <div class=\"\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        {% if page.header %}
          {{ page.header }}
        {% endif %}
      </div>

      <!-- Navigation -->
      <div class=\"\">
        {% if page.primary_menu %}
          {{ page.primary_menu }}
        {% endif %}
      </div>
      <!--End Navigation -->

      <!-- Navigation -->
      <div class=\"\">
        <!--Search-->
          {% if page.search %}
            {{ page.search }}
          {% endif %}
        <!--End Search-->
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  {% if is_front and page.slideshow %}  
    <div class=\"slideshow\">
      {{ page.slideshow }}
    </div>
  {% endif %}
  <!-- End Banner -->

</header>
<!--End Header & Navbar -->

<div class=\"main-content-wrap\">

  <!-- Start Slider -->
  {% if is_front %}
    <div class=\"flexslider\">
      <ul class=\"slides\">
        {% for slider_contents in slider_content %}
          {{ slider_contents | raw }}
        {% endfor %}
      </ul>
    </div>
  {% endif %}
  <!-- End Slider -->

  <!--Home page message-->
  {% if is_front and page.homepagemessage %}
    <div class=\"container-sub\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ page.homepagemessage }}
        </div>
      </div>
    </div>
  {% endif %}
  <!--End Highlighted-->

  <!-- Page Title -->
  {%  if page.page_title and not is_front %}
    <div id=\"page-title\">
      <div id=\"page-title-inner\">
        <!-- start: Container-sub -->
        <div class=\"container-sub\">
          {{ page.page_title }}
        </div>
      </div>
    </div>
  {% endif %}
  <!-- End Page Title -- >


  <!-- layout -->
  {% if not is_front %}
    <div id=\"wrapper\" class=\"main-container\">

      <!--Highlighted-->
      {% if page.highlighted %}
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.highlighted }}
          </div>
        </div>
      {% endif %}
      <!--End Highlighted-->

      <!-- start: Container-sub -->
      <div class=\"container-sub\">
                
        <!--start:content -->
        {% if page.breadcrumb %}
          <div class=\"breadcrumb-wrap\">
            <div class=\"breadcrumb-subwrap\">{{ page.breadcrumb }}</div>
          </div>
        {% endif %}

        <div class=\"row layout\">

          <!--- Start Left SideBar -->
          {% if page.sidebar_first %}
            <div class=\"sidebar\" >
              <div class = {{sidebarfirst}} >
                {{ page.sidebar_first }}
              </div>
            </div>
          {% endif %}
          <!---End Right SideBar -->

          <!--- Start content -->
          {% if page.content and not is_front %}
            <div class=\"content_layout\">
              <div class={{contentlayout}}>
                {{ page.content }}
              </div>
            </div>
          {% endif %}
          <!---End content -->

          <!--- Start Right SideBar -->
          {% if page.sidebar_second %}
            <div class=\"sidebar\">
              <div class={{sidebarsecond}}>
                {{ page.sidebar_second }}
              </div>
            </div>
          {% endif %}
          <!---End Right SideBar -->
          
        </div>
        <!--End Content -->

        <!--Start Content Bottom-->
        {% if page.content_bottom %}
          <div class=\"row\">
            {{ page.content_bottom }}
          </div>
        {% endif %}
        <!--End Content Bottom-->

      </div>
    </div>
  {% endif %}
  <!-- End layout -->


  <!-- Start Google Map -->
  {% if page.google_map %}
    <div class=\"google-map\">
      {{ page.google_map }}
    </div>
  {% endif %}
  <!-- End Google Map -->


  <!-- Start bottom -->
  {% if is_front %}  
    {% if page.bottom_first or page.bottom_second or page.bottom_third %}
      <div class=\"bottom-widgets\">
        <div class=\"container-sub\">        
          <div class=\"row-sub clearfix\">

            <!-- Start Bottom First Region -->          
            {% if page.bottom_first %}
              <div class = {{ bottom_class }}>
                {{ page.bottom_first }}
              </div>
            {% endif %}          
            <!-- End Bottom First Region -->

            <!-- Start Bottom Second Region -->
            {% if page.bottom_second %}
              <div class = {{ bottom_class }}>
                {{ page.bottom_second }}
              </div>
            {% endif %}          
            <!-- End Bottom Second Region -->

            <!-- Start Bottom third Region -->          
            {% if page.bottom_third %}
              <div class = {{ bottom_class }}>
                {{ page.bottom_third }}
              </div>
            {% endif %}          
            <!-- End Bottom Third Region -->

            {% if page.bottom_forth %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_forth }}
            </div>
            {% endif %}

          </div>
        </div>
      </div>
    {% endif %}
  {% endif %}
  <!--End Bottom -->


  <!-- Start Footer Menu -->
  {% if page.footer_menu %}
    <div class=\"footer-menu\">
      <div class=\"container-sub\">
        <div class=\"row-sub clearfix\">
          <div class=\"col-sm-6\">
            {{ page.footer_menu }}
          </div>
          {% if show_social_icon %}
          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              {% if facebook_url %}
                <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              {% endif %}
              {% if google_plus_url %}
                <a href=\"{{ google_plus_url }}\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              {% endif %}
              {% if twitter_url %}
                <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              {% endif %}
              {% if linkedin_url %}
                <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              {% endif %}
              {% if pinterest_url %}
                <a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              {% endif %}
              {% if rss_url %}
                <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              {% endif %}
            </div>
          </div>
          {% endif %}
        </div>
      </div>
    </div>
  {% endif %}
  <!-- End Footer Menu -->

  <div class=\"copyright\">
    <div class=\"container-sub\">
      <div class=\"row-sub clearfix\">

        <!-- Copyright -->
        <div class=\"col-sm-6\">
          <p class=\"copyright\">Copyright © {{ \"now\"|date(\"Y\") }}. All rights reserved</p>
        </div>
        <!-- End Copyright -->

        <!-- Credit link -->
        {% if show_credit_link %}
          <div class=\"col-sm-6\">
            <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
          </div>
        {% endif %}
        <!-- End Credit link -->
        
      </div>
    </div>
  </div>

</div>


";
    }
}
