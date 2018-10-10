<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a5b3181ca70064a2ab961b6797ca2172f155ab8d66ee0c52fcc517e24395440b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1e02434871e61e6a615f54cb1d62537315ec47db9b9e036c14e7d7d5060ad7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e02434871e61e6a615f54cb1d62537315ec47db9b9e036c14e7d7d5060ad7f->enter($__internal_f1e02434871e61e6a615f54cb1d62537315ec47db9b9e036c14e7d7d5060ad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1e02434871e61e6a615f54cb1d62537315ec47db9b9e036c14e7d7d5060ad7f->leave($__internal_f1e02434871e61e6a615f54cb1d62537315ec47db9b9e036c14e7d7d5060ad7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bae118935d077034b3d80e75100807641eea1cdf1487f9e4494c36a1288a9ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae118935d077034b3d80e75100807641eea1cdf1487f9e4494c36a1288a9ffc->enter($__internal_bae118935d077034b3d80e75100807641eea1cdf1487f9e4494c36a1288a9ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bae118935d077034b3d80e75100807641eea1cdf1487f9e4494c36a1288a9ffc->leave($__internal_bae118935d077034b3d80e75100807641eea1cdf1487f9e4494c36a1288a9ffc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b768ff5400144570ce2e957eb58e49c23cea5db54e5e551b76965b3f370df66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b768ff5400144570ce2e957eb58e49c23cea5db54e5e551b76965b3f370df66->enter($__internal_0b768ff5400144570ce2e957eb58e49c23cea5db54e5e551b76965b3f370df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0b768ff5400144570ce2e957eb58e49c23cea5db54e5e551b76965b3f370df66->leave($__internal_0b768ff5400144570ce2e957eb58e49c23cea5db54e5e551b76965b3f370df66_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbb23a545c789d34bd580d083f7a22944a63d957ec8e3ee035fbd38b1cb7e911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb23a545c789d34bd580d083f7a22944a63d957ec8e3ee035fbd38b1cb7e911->enter($__internal_bbb23a545c789d34bd580d083f7a22944a63d957ec8e3ee035fbd38b1cb7e911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bbb23a545c789d34bd580d083f7a22944a63d957ec8e3ee035fbd38b1cb7e911->leave($__internal_bbb23a545c789d34bd580d083f7a22944a63d957ec8e3ee035fbd38b1cb7e911_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/clement/cir3/TP/test00/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
