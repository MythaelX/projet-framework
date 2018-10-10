<?php

/* BackOfficeBundle:Default:index2.html.twig */
class __TwigTemplate_058baba3b524e667963be1beea0597436bd52129b9b63d9b7ab8c7aa8224ea15 extends Twig_Template
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
        $__internal_bb60fa84aafcced5ac754dc970dc5fb6fff534f4dcebded8b37b61dade7e3070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb60fa84aafcced5ac754dc970dc5fb6fff534f4dcebded8b37b61dade7e3070->enter($__internal_bb60fa84aafcced5ac754dc970dc5fb6fff534f4dcebded8b37b61dade7e3070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index2.html.twig"));

        // line 1
        echo "Bienvenue a toi jeune cir !!!
";
        // line 2
        echo twig_escape_filter($this->env, ($context["test"] ?? $this->getContext($context, "test")), "html", null, true);
        echo "
";
        
        $__internal_bb60fa84aafcced5ac754dc970dc5fb6fff534f4dcebded8b37b61dade7e3070->leave($__internal_bb60fa84aafcced5ac754dc970dc5fb6fff534f4dcebded8b37b61dade7e3070_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index2.html.twig";
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
{{test}}
", "BackOfficeBundle:Default:index2.html.twig", "/home/clement/cir3/TP/test00/src/BackOfficeBundle/Resources/views/Default/index2.html.twig");
    }
}
