<?php

/* BackOfficeBundle:tp3:detail.html.twig */
class __TwigTemplate_f7758b0d5541302ce5558f085239df969e7ae37e9b880aad039545f30864a8ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::tp3/toolbar.html.twig", "BackOfficeBundle:tp3:detail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle::tp3/toolbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aaf85c05c58d8c1bb03b5cd5047cdb75de2bf9f03b4fbd4a0788d0098c73798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aaf85c05c58d8c1bb03b5cd5047cdb75de2bf9f03b4fbd4a0788d0098c73798->enter($__internal_3aaf85c05c58d8c1bb03b5cd5047cdb75de2bf9f03b4fbd4a0788d0098c73798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:tp3:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aaf85c05c58d8c1bb03b5cd5047cdb75de2bf9f03b4fbd4a0788d0098c73798->leave($__internal_3aaf85c05c58d8c1bb03b5cd5047cdb75de2bf9f03b4fbd4a0788d0098c73798_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_25e244f1731ac4cfd6b8d2fb434e74693961b4f3f4d802ac8f8df3638d79edb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e244f1731ac4cfd6b8d2fb434e74693961b4f3f4d802ac8f8df3638d79edb7->enter($__internal_25e244f1731ac4cfd6b8d2fb434e74693961b4f3f4d802ac8f8df3638d79edb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
Information de l'utilisateur : <br/>
Nom : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "nom", array()), "html", null, true);
        echo " <br/>
Prenom : ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "prenom", array()), "html", null, true);
        echo " <br/>
Mail : ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "mail", array()), "html", null, true);
        echo " <br/>
Tel: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "tel", array()), "html", null, true);
        echo " <br/>
actif : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["internaute"] ?? $this->getContext($context, "internaute")), "actif", array()), "html", null, true);
        echo " <br/>
<br/>
<br/>

";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\">
";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

<a href=\"http://127.0.0.1:8000/admin/list\"> Back </a>
";
        
        $__internal_25e244f1731ac4cfd6b8d2fb434e74693961b4f3f4d802ac8f8df3638d79edb7->leave($__internal_25e244f1731ac4cfd6b8d2fb434e74693961b4f3f4d802ac8f8df3638d79edb7_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:tp3:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  71 => 14,  67 => 13,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackOfficeBundle::tp3/toolbar.html.twig' %}
{% block body %}

Information de l'utilisateur : <br/>
Nom : {{ internaute.nom }} <br/>
Prenom : {{ internaute.prenom }} <br/>
Mail : {{ internaute.mail }} <br/>
Tel: {{ internaute.tel }} <br/>
actif : {{ internaute.actif }} <br/>
<br/>
<br/>

{{form_start(form)}}
{{form_widget(form)}}
<input type=\"submit\">
{{form_end(form)}}

<a href=\"http://127.0.0.1:8000/admin/list\"> Back </a>
{% endblock %}
", "BackOfficeBundle:tp3:detail.html.twig", "/home/clement/cir3/TP/test00/src/BackOfficeBundle/Resources/views/tp3/detail.html.twig");
    }
}
