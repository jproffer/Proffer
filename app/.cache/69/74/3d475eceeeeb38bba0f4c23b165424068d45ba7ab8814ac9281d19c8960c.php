<?php

/* layout.phtml */
class __TwigTemplate_69743d475eceeeeb38bba0f4c23b165424068d45ba7ab8814ac9281d19c8960c extends Twig_Template
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
        // line 1
        $this->env->loadTemplate("includes/head.tpl")->display($context);
        // line 2
        $this->env->resolveTemplate((isset($context["content"]) ? $context["content"] : null))->display($context);
        // line 3
        $this->env->loadTemplate("includes/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "layout.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }
}
