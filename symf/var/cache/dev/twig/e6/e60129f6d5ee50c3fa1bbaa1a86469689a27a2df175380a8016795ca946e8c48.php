<?php

/* BackOfficeBundle:Default:index4.html.twig */
class __TwigTemplate_43daa522d6b106229c6f6cf56c9cecdeb221531e1bcc4042896712d14bf32903 extends Twig_Template
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
        $__internal_c76a651c03b3234a112af3915fa5efd20c03233d653aca3b4a6b5e93f25daeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76a651c03b3234a112af3915fa5efd20c03233d653aca3b4a6b5e93f25daeff->enter($__internal_c76a651c03b3234a112af3915fa5efd20c03233d653aca3b4a6b5e93f25daeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index4.html.twig"));

        // line 1
        echo "Bienvenue a toi jeune cir !!!
<h1>Test</h1>
<ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabTest"] ?? $this->getContext($context, "tabTest")));
        foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
            // line 5
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "libelle", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "value", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "nb", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
";
        
        $__internal_c76a651c03b3234a112af3915fa5efd20c03233d653aca3b4a6b5e93f25daeff->leave($__internal_c76a651c03b3234a112af3915fa5efd20c03233d653aca3b4a6b5e93f25daeff_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  40 => 7,  36 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
<h1>Test</h1>
<ul>
    {% for instance in tabTest %}
        <li>{{ instance.libelle }}</li>
        <li>{{ instance.value }}</li>
        <li>{{ instance.nb }}</li>
    {% endfor %}
</ul>
", "BackOfficeBundle:Default:index4.html.twig", "/home/clement/cir3/TP/test00/src/BackOfficeBundle/Resources/views/Default/index4.html.twig");
    }
}
