<?php

/* FontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_bcfe17695b164098f108fc9996165b4fb8649bd8b617a93bab6a9946f82fafb1 extends Twig_Template
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
        $__internal_5f6085ef7c3004830804c88df1ea0a4117d6cb9f42bd47c3961c91b499b015f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6085ef7c3004830804c88df1ea0a4117d6cb9f42bd47c3961c91b499b015f9->enter($__internal_5f6085ef7c3004830804c88df1ea0a4117d6cb9f42bd47c3961c91b499b015f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "front office !!! ";
        echo twig_escape_filter($this->env, ($context["msg"] ?? $this->getContext($context, "msg")), "html", null, true);
        echo "
";
        
        $__internal_5f6085ef7c3004830804c88df1ea0a4117d6cb9f42bd47c3961c91b499b015f9->leave($__internal_5f6085ef7c3004830804c88df1ea0a4117d6cb9f42bd47c3961c91b499b015f9_prof);

    }

    public function getTemplateName()
    {
        return "FontOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("front office !!! {{msg}}
", "FontOfficeBundle:Default:index.html.twig", "/home/clement/cir3/TP/test00/src/FontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
