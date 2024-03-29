<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/sitemap/templates/sitemap.html.twig */
class __TwigTemplate_86ac191a9080f45a27ead153d707dfed387a96a8c8b92d413830edba34587e1e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 27, "for" => 34];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<div class=\"sitemap\">
  ";
        // line 27
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 28
            echo "    <div class=\"sitemap-message\">
      ";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["message"]) ? $context["message"] : null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if ((isset($context["sitemap_items"]) ? $context["sitemap_items"] : null)) {
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sitemap_items"]) ? $context["sitemap_items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "      ";
                if ( !twig_test_empty($this->getAttribute($context["item"], "content", []))) {
                    // line 36
                    echo "      <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "sitemap-box"], "method")), "html", null, true);
                    echo ">
        ";
                    // line 37
                    if ($this->getAttribute($this->getAttribute($context["item"], "options", []), "show_titles", [])) {
                        // line 38
                        echo "          <h2>";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "</h2>
        ";
                    }
                    // line 40
                    echo "        <div class=\"content\">
          ";
                    // line 41
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    echo "
        </div>
      </div>
      ";
                }
                // line 45
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "  ";
        }
        // line 47
        echo "
  ";
        // line 48
        if ((isset($context["additional"]) ? $context["additional"] : null)) {
            // line 49
            echo "    <div class=\"sitemap-additional\">
      ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["additional"]) ? $context["additional"] : null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 53
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/sitemap/templates/sitemap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  123 => 50,  120 => 49,  118 => 48,  115 => 47,  112 => 46,  106 => 45,  99 => 41,  96 => 40,  90 => 38,  88 => 37,  83 => 36,  80 => 35,  75 => 34,  73 => 33,  70 => 32,  64 => 29,  61 => 28,  59 => 27,  55 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/sitemap/templates/sitemap.html.twig", "/home/xoidh0wq0zy4/public_html/modules/sitemap/templates/sitemap.html.twig");
    }
}
