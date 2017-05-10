<?php

/* modules/group/templates/group.html.twig */
class __TwigTemplate_8a7572e2bb967256263a011d5bfc93f73ba5f54db569d0a6369912894461530a extends Twig_Template
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
        $tags = array("if" => 45);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 42
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">

    ";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    ";
        // line 45
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 46
            echo "        <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">
            <a href=\"";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
        </h2>
    ";
        }
        // line 50
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

    <div";
        // line 52
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">
        ";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/group/templates/group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 53,  74 => 52,  68 => 50,  60 => 47,  55 => 46,  53 => 45,  49 => 44,  43 => 42,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a group.
 *
 * Available variables:
 * - group: The group entity with limited access to object properties and
 *   methods. Only \"getter\" methods (method names starting with \"get\", \"has\",
 *   or \"is\") and a few common methods such as \"id\" and \"label\" are available.
 *   Calling other methods (such as group.delete) will result in an exception.
 * - label: The title of the group.
 * - content: All group items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the
 *   printing of a given child element.
 * - url: Direct URL of the current group.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - group: The current template type (also known as a \"theming hook\").
 *   - group--[type]: The current group type. For example, if the group is a
 *     \"Classroom\" it would result in \"group--classroom\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - group--[view_mode]: The View Mode of the group; for example, a
 *     teaser would result in: \"group--teaser\", and full: \"group--full\".
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 *
 * @see template_preprocess_group()
 *
 * @ingroup themeable
 */
#}
<div{{ attributes }}>

    {{ title_prefix }}
    {% if not page %}
        <h2{{ title_attributes }}>
            <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h2>
    {% endif %}
    {{ title_suffix }}

    <div{{ content_attributes }}>
        {{ content }}
    </div>

</div>
";
    }
}
