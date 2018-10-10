<?php

/* BackOfficeBundle:Default:index3.html.twig */
class __TwigTemplate_f13961db80316b9edafff4af41dfe8a86ff08e8050f905c03d144240ca49b4fa extends Twig_Template
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
        $__internal_5824190b3499f0f59ceee15d38d171e1a8a6e32432ccf8ca67857df771a52ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5824190b3499f0f59ceee15d38d171e1a8a6e32432ccf8ca67857df771a52ee2->enter($__internal_5824190b3499f0f59ceee15d38d171e1a8a6e32432ccf8ca67857df771a52ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index3.html.twig"));

        // line 1
        echo "Bienvenue a toi jeune cir !!!
</br> libelle : ";
        // line 2
        echo twig_escape_filter($this->env, ($context["libelle"] ?? $this->getContext($context, "libelle")), "html", null, true);
        echo "
</br> value : ";
        // line 3
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
</br> nb : ";
        // line 4
        echo twig_escape_filter($this->env, ($context["nb"] ?? $this->getContext($context, "nb")), "html", null, true);
        echo "
";
        
        $__internal_5824190b3499f0f59ceee15d38d171e1a8a6e32432ccf8ca67857df771a52ee2->leave($__internal_5824190b3499f0f59ceee15d38d171e1a8a6e32432ccf8ca67857df771a52ee2_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
</br> libelle : {{libelle}}
</br> value : {{value}}
</br> nb : {{nb}}
", "BackOfficeBundle:Default:index3.html.twig", "/home/clement/cir3/TP/test00/src/BackOfficeBundle/Resources/views/Default/index3.html.twig");
    }
}
