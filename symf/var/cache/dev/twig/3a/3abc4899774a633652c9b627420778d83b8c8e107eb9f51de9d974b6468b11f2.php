<?php

/* BackOfficeBundle:tp3:new.html.twig */
class __TwigTemplate_4092808e900af59772db4c32a559d6454efb33331f063870c14d80d87f9f7985 extends Twig_Template
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
        $__internal_1935892c5fabef5e03cbef89dd0d3ffea5422c4a2daf329f7bebb7302f68436f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1935892c5fabef5e03cbef89dd0d3ffea5422c4a2daf329f7bebb7302f68436f->enter($__internal_1935892c5fabef5e03cbef89dd0d3ffea5422c4a2daf329f7bebb7302f68436f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:tp3:new.html.twig"));

        // line 1
        echo "Bienvenue a toi mr X !!!

";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\">
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1935892c5fabef5e03cbef89dd0d3ffea5422c4a2daf329f7bebb7302f68436f->leave($__internal_1935892c5fabef5e03cbef89dd0d3ffea5422c4a2daf329f7bebb7302f68436f_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:tp3:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Bienvenue a toi mr X !!!

{{form_start(form)}}
{{form_widget(form)}}
<input type=\"submit\">
{{form_end(form)}}
", "BackOfficeBundle:tp3:new.html.twig", "/home/clement/cir3/TP/test00/src/BackOfficeBundle/Resources/views/tp3/new.html.twig");
    }
}
