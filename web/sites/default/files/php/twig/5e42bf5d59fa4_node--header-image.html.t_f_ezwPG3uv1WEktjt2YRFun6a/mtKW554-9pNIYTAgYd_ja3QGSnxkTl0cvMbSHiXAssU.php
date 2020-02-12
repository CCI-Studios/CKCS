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

/* themes/ckcs/templates/node--header-image.html.twig */
class __TwigTemplate_e3d323a2b4dd63a31e1c20f094f285a545e8f74cdc9028e5f6e4045c51e9e87b extends \Twig\Template
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
        echo "\" style=\"background-image:url('";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_header_image", []), 0, [])), "html", null, true);
        echo "');\">

  <div";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", [0 => "node__content"], "method")), "html", null, true);
        echo "><div><div><div>
    ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_prefix"]) ? $context["title_prefix"] : null)), "html", null, true);
        echo "
    <h2";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_attributes"]) ? $context["title_attributes"] : null)), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["label"]) ? $context["label"] : null)), "html", null, true);
        echo "</h2>
    ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title_suffix"]) ? $context["title_suffix"] : null)), "html", null, true);
        echo "
    
    ";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_link", [])), "html", null, true);
        echo "
  </div></div></div></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/ckcs/templates/node--header-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 91,  87 => 89,  81 => 88,  77 => 87,  73 => 86,  66 => 84,  62 => 83,  60 => 80,  59 => 79,  58 => 78,  57 => 77,  56 => 76,  55 => 74,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ckcs/templates/node--header-image.html.twig", "/home/xoidh0wq0zy4/public_html/themes/ckcs/templates/node--header-image.html.twig");
    }
}
