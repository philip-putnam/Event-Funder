<?php

/* {# inline_template_start #}<div class="item-list"><ul><li>&lt;none&gt;</li></ul></div> */
class __TwigTemplate_2b4b4ebf67048f5cf9c70ac2fb83e7e3620be81b533b5e52a20624a0b2a9cb7d extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"item-list\"><ul><li>&lt;none&gt;</li></ul></div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"item-list\"><ul><li>&lt;none&gt;</li></ul></div>";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"item-list\"><ul><li>&lt;none&gt;</li></ul></div>";
    }
}
