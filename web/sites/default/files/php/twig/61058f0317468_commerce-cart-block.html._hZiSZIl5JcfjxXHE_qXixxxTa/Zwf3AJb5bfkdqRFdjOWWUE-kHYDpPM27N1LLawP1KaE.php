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

/* themes/contrib/estore/templates/block/commerce-cart-block.html.twig */
class __TwigTemplate_2e519b50a5677edd9e59f760c05db27db27c4208bdfd9abf1f336cc6e3ca4dd8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = [0 => "block", 1 => "cart-block-wrapper", 2 => "has-dropdown", 3 => "clearfix"];
        // line 9
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 9), 9, $this->source), "html", null, true);
        echo ">
  <a href=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("commerce_cart.page"));
        echo "\" class=\"cart-icon\">
    <i class=\"fa fa-shopping-cart\"></i>
    <span class=\"cart-value\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 12, $this->source), "html", null, true);
        echo "</span>
  </a>

  <div class=\"my-cart-wrap\">
    <div class=\"my-cart\">Total</div>
    <div class=\"cart-total\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\commerce_price\TwigExtension\PriceTwigExtension']->formatPrice($this->sandbox->ensureToStringAllowed(($context["total"] ?? null), 17, $this->source)), "html", null, true);
        echo "</div>
  </div>

  <div class=\"cart-contents\">
    ";
        // line 21
        if (($context["content"] ?? null)) {
            // line 22
            echo "      <div class=\"cart-block-content\">
        ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 23, $this->source), "html", null, true);
            echo "
      </div>

      <div class=\"cart-block-links\">
        ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["links"] ?? null), 27, $this->source), "html", null, true);
            echo "
      </div>
    ";
        } else {
            // line 30
            echo "      <div class=\"cart-block-empty\">
        ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Cart is empty."));
            echo "
      </div>
    ";
        }
        // line 34
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/estore/templates/block/commerce-cart-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  87 => 31,  84 => 30,  78 => 27,  71 => 23,  68 => 22,  66 => 21,  59 => 17,  51 => 12,  46 => 10,  41 => 9,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/estore/templates/block/commerce-cart-block.html.twig", "D:\\xampp\\htdocs\\hoshi\\web\\themes\\contrib\\estore\\templates\\block\\commerce-cart-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 21);
        static $filters = array("escape" => 9, "commerce_price_format" => 17, "t" => 31);
        static $functions = array("url" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'commerce_price_format', 't'],
                ['url']
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
