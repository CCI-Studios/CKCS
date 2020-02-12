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

/* themes/ckcs/templates/field--paragraph--field-title--acc.html.twig */
class __TwigTemplate_e6907947fc2851f480f273ac77b5c33be95a6b8f31bbf4933f5f242cdd54b3a7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "for" => 56];
        $filters = ["clean_class" => 43, "t" => 59];
        $functions = ["attach_library" => 54];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['clean_class', 't'],
                ['attach_library']
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
        // line 41
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
(isset($context["field_name"]) ? $context["field_name"] : null)))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
(isset($context["field_type"]) ? $context["field_type"] : null)))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 45
(isset($context["label_display"]) ? $context["label_display"] : null)))];
        // line 49
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 51
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("ckcs/accordion"), "html", null, true);
        echo "

";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 57
            echo "  <a";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", [0 => (isset($context["classes"]) ? $context["classes"] : null), 1 => "field__item"], "method")), "html", null, true);
            echo " href=\"#\">
    ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
            echo "
    <span class=\"accordion-toggle accordion-toggle--expand\">";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Click to Expand"));
            echo "</span>
    <span class=\"accordion-toggle accordion-toggle--collapse\">";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Click to Collapse"));
            echo "</span>
  </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/ckcs/templates/field--paragraph--field-title--acc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 60,  81 => 59,  77 => 58,  72 => 57,  68 => 56,  63 => 54,  61 => 51,  60 => 49,  58 => 45,  57 => 44,  56 => 43,  55 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ckcs/templates/field--paragraph--field-title--acc.html.twig", "/home/xoidh0wq0zy4/public_html/themes/ckcs/templates/field--paragraph--field-title--acc.html.twig");
    }
}
