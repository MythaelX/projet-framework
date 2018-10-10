<?php

/* BackOfficeBundle:Default:index5.html.twig */
class __TwigTemplate_74504dc26ef7d80f14884579ddebf6719c7c7fd963ae059bb1254f98b4e9ccdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99ebfd9b7eb2c97ee8bfdb22e90ddf5751a12a38b9d9a8675df0cffe9a500eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ebfd9b7eb2c97ee8bfdb22e90ddf5751a12a38b9d9a8675df0cffe9a500eee->enter($__internal_99ebfd9b7eb2c97ee8bfdb22e90ddf5751a12a38b9d9a8675df0cffe9a500eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index5.html.twig"));

        // line 1
        echo "Bienvenue a toi jeune cir !!!
<head>  
    ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "</head>
<h1>Test</h1>
<ul>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabTest"] ?? $this->getContext($context, "tabTest")));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 10
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "libelle", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "value", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "nb", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
";
        
        $__internal_99ebfd9b7eb2c97ee8bfdb22e90ddf5751a12a38b9d9a8675df0cffe9a500eee->leave($__internal_99ebfd9b7eb2c97ee8bfdb22e90ddf5751a12a38b9d9a8675df0cffe9a500eee_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc1196e45d3a69825c0ca33f1c2d416a23dd28af88daa465ef394db23d5e9b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1196e45d3a69825c0ca33f1c2d416a23dd28af88daa465ef394db23d5e9b87->enter($__internal_dc1196e45d3a69825c0ca33f1c2d416a23dd28af88daa465ef394db23d5e9b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styleTest6.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_dc1196e45d3a69825c0ca33f1c2d416a23dd28af88daa465ef394db23d5e9b87->leave($__internal_dc1196e45d3a69825c0ca33f1c2d416a23dd28af88daa465ef394db23d5e9b87_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 4,  63 => 3,  55 => 14,  47 => 12,  43 => 11,  38 => 10,  34 => 9,  29 => 6,  27 => 3,  23 => 1,);
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
<head>  
    {% block stylesheets %}
        <link href=\"{{ asset('styleTest6.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
</head>
<h1>Test</h1>
<ul>
    {% for instance in tabTest %}
        <li>{{ instance.libelle }}</li>
        <li>{{ instance.value }}</li>
        <li>{{ instance.nb }}</li>
    {% endfor %}
</ul>
", "BackOfficeBundle:Default:index5.html.twig", "/home/clement/cir3/TP/test00/src/BackOfficeBundle/Resources/views/Default/index5.html.twig");
    }
}
