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

/* themes/ckcs/templates/node--home-widget.html.twig */
class __TwigTemplate_06c45f2cce3074e0e68a0ff3ae30782a239d5e300f05cf28fef189ab16d997ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 74];
        $filters = ["clean_class" => 76, "join" => 84];
        $functions = ["attach_library" => 83];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'join'],
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
        // line 74
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 76
(isset($context["node"]) ? $context["node"] : null), "bundle", [])))), 2 => (($this->getAttribute(        // line 77
(isset($context["node"]) ? $context["node"] : null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 78
(isset($context["node"]) ? $context["node"] : null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 79
(isset($context["node"]) ? $context["node"] : null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 80
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed((isset($context["view_mode"]) ? $context["view_mode"] : null))))) : (""))];
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true);
        echo "
<div class=\"";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed((isset($context["classes"]) ? $context["classes"] : null)), " "), "html", null, true);
        echo "\">

  ";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_widget_image", [])), "html", null, true);
        echo "

  <div";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", [0 => "node__content"], "method")), "html", null, true);
        echo "><div>
    ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_prefix"]) ? $context["title_prefix"] : null)), "html", null, true);
        echo "
    <h2";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_attributes"]) ? $context["title_attributes"] : null)), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "</h2>
    ";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_suffix"]) ? $context["title_suffix"] : null)), "html", null, true);
        echo "
    ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", [])), "html", null, true);
        echo "
    ";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_link", [])), "html", null, true);
        echo "
  </div></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/ckcs/templates/node--home-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 93,  94 => 92,  90 => 91,  84 => 90,  80 => 89,  76 => 88,  71 => 86,  66 => 84,  62 => 83,  60 => 80,  59 => 79,  58 => 78,  57 => 77,  56 => 76,  55 => 74,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ckcs/templates/node--home-widget.html.twig", "/home/xoidh0wq0zy4/public_html/themes/ckcs/templates/node--home-widget.html.twig");
    }
}
