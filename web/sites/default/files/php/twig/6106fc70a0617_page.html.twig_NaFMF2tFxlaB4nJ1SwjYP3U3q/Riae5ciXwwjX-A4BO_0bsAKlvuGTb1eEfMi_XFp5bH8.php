<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/estore/templates/system/page.html.twig */
class __TwigTemplate_cfa7b5ec2c87c6fda7c55237bbcce5d7d617aabec1e2b7961b6bec1f4fc8b3c2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 55
        echo "
";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 57) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 57))) {
            // line 58
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 167
        echo "
";
        // line 169
        $this->displayBlock('main', $context, $blocks);
        // line 239
        echo "

";
        // line 241
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 58
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "    ";
        // line 60
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_inverse", [], "any", false, false, true, 62)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "navbar_position", [], "any", false, false, true, 63)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "navbar_position", [], "any", false, false, true, 63), 63, $this->source)))) : (""))];
        // line 66
        echo "    <div class=\"top-header-wrapper clearfix\">
      <div class=\"container-fluid\">
        <div class=\"left-top-header\">
            <div class=\"site-email\">
              <i class=\"fa fa-envelope\"></i>
              nilamohammadi1371@gmail.com
            </div>

          ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_phone", [], "any", false, false, true, 74)) {
            // line 75
            echo "            <div class=\"site-phone\">
              <i class=\"fa fa-phone\"></i>

              ";
            // line 78
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_phone", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 81
        echo "

            <div class=\"site-map-marker\">
              <i class=\"fa fa-map-marker\"></i>

             Sannadaj,Kurdistan
            </div>
        

          ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_shop_opens", [], "any", false, false, true, 90)) {
            // line 91
            echo "            <div class=\"site-clock-o\">
              <i class=\"fa fa-clock-o\"></i>

              ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_shop_opens", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 97
        echo "        </div>

        <div class=\"right-top-header\">
          ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_right", [], "any", false, false, true, 100)) {
            // line 101
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_right", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 103
        echo "        </div>
      </div>
    </div>

    <div class=\"middle-header-wrapper clearfix\">
      <div class=\"container-fluid\">
        <div class=\"col-md-3\">
          ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_middle_header", [], "any", false, false, true, 110)) {
            // line 111
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_middle_header", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 113
        echo "        </div>

        <div class=\"col-md-6 text-center hidden-sm hidden-xs\">
          ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header", [], "any", false, false, true, 116)) {
            // line 117
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 119
        echo "        </div>

        <div class=\"col-md-3\">
          ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_middle_header", [], "any", false, false, true, 122)) {
            // line 123
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_middle_header", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 125
        echo "        </div>
      </div>
    </div>

    <header id=\"navbar\" role=\"banner\"
      ";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 130), 130, $this->source), "html", null, true);
        echo ">

      ";
        // line 132
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 132)) {
            // line 133
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 133, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 135
        echo "
      <div class=\"navbar-header\">
        ";
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "

        ";
        // line 140
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 140)) {
            // line 141
            echo "          <button type=\"button\"
                  class=\"navbar-toggle\"
                  data-toggle=\"collapse\"
                  data-target=\"#navbar-collapse\">

            <span class=\"sr-only\">";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 152
        echo "      </div>

      ";
        // line 155
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 155)) {
            // line 156
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 157
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 160
        echo "
      ";
        // line 161
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 161)) {
            // line 162
            echo "        </div>
      ";
        }
        // line 164
        echo "    </header>
  ";
    }

    // line 169
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        echo "  ";
        // line 171
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 171)) {
            // line 172
            echo "    ";
            $this->displayBlock('header', $context, $blocks);
            // line 181
            echo "  ";
        }
        // line 182
        echo "
  <div role=\"main\"
       class=\"main-container ";
        // line 184
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 184, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">

    <div class=\"main-container-inner\">
      ";
        // line 188
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 188)) {
            // line 189
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 194
            echo "      ";
        }
        // line 195
        echo "
      ";
        // line 197
        echo "      ";
        // line 198
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 199
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 199) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 199))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 200
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 200) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 200)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 201
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 201) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 201)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 202
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 202)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 202)))) ? ("col-sm-12") : (""))];
        // line 205
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 205), 205, $this->source), "html", null, true);
        echo ">

        ";
        // line 208
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 208)) {
            // line 209
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 212
            echo "        ";
        }
        // line 213
        echo "
        ";
        // line 215
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 215)) {
            // line 216
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 219
            echo "        ";
        }
        // line 220
        echo "
        ";
        // line 222
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 226
        echo "      </section>

      ";
        // line 229
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 229)) {
            // line 230
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 235
            echo "      ";
        }
        // line 236
        echo "    </div>
  </div>
";
    }

    // line 172
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "      <div class=\"header-region clearfix\" role=\"heading\">
        <div class=\"container-fluid\">
          <div class=\"header-inner text-center\">
            ";
        // line 176
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    ";
    }

    // line 189
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 191
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 209
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 216
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 217
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 217), 217, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 222
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 223
        echo "          <a id=\"main-content\"></a>
          ";
        // line 224
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 224), 224, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 230
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 232
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 241
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        echo "  <footer class=\"footer\" role=\"contentinfo\">
    <div class=\"footer-top clearfix\">
      <div class=\"container-fluid\">
        ";
        // line 245
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 245)) {
            // line 246
            echo "          <div class=\"footer-first col-sm-6 col-md-3\">
            ";
            // line 247
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 247), 247, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 250
        echo "
        ";
        // line 251
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 251)) {
            // line 252
            echo "          <div class=\"footer-second col-sm-6 col-md-3\">
            ";
            // line 253
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 253), 253, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 256
        echo "
        ";
        // line 257
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 257)) {
            // line 258
            echo "          <div class=\"footer-third col-sm-6 col-md-3\">
            ";
            // line 259
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 259), 259, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 262
        echo "
        ";
        // line 263
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 263)) {
            // line 264
            echo "          <div class=\"footer-fourth col-sm-6 col-md-3\">
            ";
            // line 265
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 265), 265, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 268
        echo "      </div>
    </div>

    <div class=\"footer-bottom clearfix\">
      <div class=\"container-fluid\">
        <div class=\"footer-bottom-left\">
          ";
        // line 274
        if (($context["copyright_text"] ?? null)) {
            // line 275
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 275, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 277
        echo "
          ";
        // line 278
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 278)) {
            // line 279
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 279), 279, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 281
        echo "        </div>
        <div class=\"footer-bottom-right\">
          ";
        // line 283
        if (($context["theme_credits"] ?? null)) {
            // line 284
            echo "            <div class=\"theme-credits\">
              ";
            // line 285
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_credits"] ?? null), 285, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 288
        echo "
          ";
        // line 289
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 289)) {
            // line 290
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 290), 290, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 292
        echo "        </div>
      </div>
    </div>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/estore/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 292,  550 => 290,  548 => 289,  545 => 288,  539 => 285,  536 => 284,  534 => 283,  530 => 281,  524 => 279,  522 => 278,  519 => 277,  513 => 275,  511 => 274,  503 => 268,  497 => 265,  494 => 264,  492 => 263,  489 => 262,  483 => 259,  480 => 258,  478 => 257,  475 => 256,  469 => 253,  466 => 252,  464 => 251,  461 => 250,  455 => 247,  452 => 246,  450 => 245,  445 => 242,  441 => 241,  434 => 232,  431 => 231,  427 => 230,  421 => 224,  418 => 223,  414 => 222,  407 => 217,  403 => 216,  396 => 210,  392 => 209,  385 => 191,  382 => 190,  378 => 189,  369 => 176,  364 => 173,  360 => 172,  354 => 236,  351 => 235,  348 => 230,  345 => 229,  341 => 226,  338 => 222,  335 => 220,  332 => 219,  329 => 216,  326 => 215,  323 => 213,  320 => 212,  317 => 209,  314 => 208,  308 => 205,  306 => 202,  305 => 201,  304 => 200,  303 => 199,  302 => 198,  300 => 197,  297 => 195,  294 => 194,  291 => 189,  288 => 188,  282 => 184,  278 => 182,  275 => 181,  272 => 172,  269 => 171,  267 => 170,  263 => 169,  258 => 164,  254 => 162,  252 => 161,  249 => 160,  243 => 157,  240 => 156,  237 => 155,  233 => 152,  224 => 146,  217 => 141,  214 => 140,  209 => 137,  205 => 135,  199 => 133,  197 => 132,  192 => 130,  185 => 125,  179 => 123,  177 => 122,  172 => 119,  166 => 117,  164 => 116,  159 => 113,  153 => 111,  151 => 110,  142 => 103,  136 => 101,  134 => 100,  129 => 97,  123 => 94,  118 => 91,  116 => 90,  105 => 81,  99 => 78,  94 => 75,  92 => 74,  82 => 66,  80 => 63,  79 => 62,  78 => 60,  76 => 59,  72 => 58,  68 => 241,  64 => 239,  62 => 169,  59 => 167,  55 => 58,  53 => 57,  50 => 55,  48 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/estore/templates/system/page.html.twig", "D:\\xampp\\htdocs\\hoshi\\web\\themes\\contrib\\estore\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 57, "block" => 58);
        static $filters = array("clean_class" => 63, "escape" => 78, "t" => 146);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
