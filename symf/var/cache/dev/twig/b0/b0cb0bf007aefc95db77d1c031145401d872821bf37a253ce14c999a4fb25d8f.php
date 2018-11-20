<?php

/* BackOfficeBundle:tp3:index.html.twig */
class __TwigTemplate_af241410e72e85940370b58a05cb231470d03d43f92b67d5c63572f0e300f36a extends Twig_Template
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
        $__internal_f60447030763b3a5f03f904c25ed086678b9d63e40c009963d074e47bae27127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60447030763b3a5f03f904c25ed086678b9d63e40c009963d074e47bae27127->enter($__internal_f60447030763b3a5f03f904c25ed086678b9d63e40c009963d074e47bae27127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:tp3:index.html.twig"));

        // line 1
        echo "Bienvenue a toi jeune cir !!!
liste de la table :
<table style=\"width:100%\">
    <tr>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 6
            echo "    <tr>
        <th>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "nom", array()), "html", null, true);
            echo "</th>
        <th>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "prenom", array()), "html", null, true);
            echo "</th>
        <th><a href=\"list/";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "id", array()), "html", null, true);
            echo "\">détails</a></th>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</table>

<a href=\"http://127.0.0.1:8000/admin/internaute\"> Créer </a>
";
        
        $__internal_f60447030763b3a5f03f904c25ed086678b9d63e40c009963d074e47bae27127->leave($__internal_f60447030763b3a5f03f904c25ed086678b9d63e40c009963d074e47bae27127_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:tp3:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  43 => 9,  39 => 8,  35 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
liste de la table :
<table style=\"width:100%\">
    <tr>
    {% for instance in data %}
    <tr>
        <th>{{ instance.nom }}</th>
        <th>{{ instance.prenom }}</th>
        <th><a href=\"list/{{ instance.id }}\">détails</a></th>
    </tr>
    {% endfor %}
</table>

<a href=\"http://127.0.0.1:8000/admin/internaute\"> Créer </a>
", "BackOfficeBundle:tp3:index.html.twig", "/home/clement/cir3/TP/test00/src/BackOfficeBundle/Resources/views/tp3/index.html.twig");
    }
}
