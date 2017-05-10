<?php

/* {# inline_template_start #}destination=/admin/structure/views/view/group_nodes/preview/page_1%3F_wrapper_format%3Ddrupal_ajax */
class __TwigTemplate_4ee2b8c6d701eb73da9cd1133207089f0ce0c74186f9afb4a8cffc6f674d6f1d extends Twig_Template
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
        echo "destination=/admin/structure/views/view/group_nodes/preview/page_1%3F_wrapper_format%3Ddrupal_ajax";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}destination=/admin/structure/views/view/group_nodes/preview/page_1%3F_wrapper_format%3Ddrupal_ajax";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}destination=/admin/structure/views/view/group_nodes/preview/page_1%3F_wrapper_format%3Ddrupal_ajax";
    }
}
