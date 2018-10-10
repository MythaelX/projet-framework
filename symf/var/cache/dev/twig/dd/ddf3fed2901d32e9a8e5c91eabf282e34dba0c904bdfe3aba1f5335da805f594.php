<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_67e7bf7407afe5a53b4ff613c2f63633bd7879096ed797758f4a3989f059c6f2 extends Twig_Template
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
        $__internal_70e476eecac21044c5bcab34178e290719536abbae7853e338c52a18b1240ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e476eecac21044c5bcab34178e290719536abbae7853e338c52a18b1240ea8->enter($__internal_70e476eecac21044c5bcab34178e290719536abbae7853e338c52a18b1240ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Bienvenue a toi jeune cir !!!
";
        // line 2
        echo twig_escape_filter($this->env, ($context["ip"] ?? $this->getContext($context, "ip")), "html", null, true);
        echo "
";
        
        $__internal_70e476eecac21044c5bcab34178e290719536abbae7853e338c52a18b1240ea8->leave($__internal_70e476eecac21044c5bcab34178e290719536abbae7853e338c52a18b1240ea8_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Bienvenue a toi jeune cir !!!
{{ip}}
", "BackOfficeBundle:Default:index.html.twig", "/home/clement/cir3/TP/test00/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
