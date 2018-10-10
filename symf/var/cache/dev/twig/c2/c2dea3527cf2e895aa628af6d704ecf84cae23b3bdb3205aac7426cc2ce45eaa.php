<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cb9258f9537aeee01321b6d71ca64217b1512493f0bcb849a951765df05015ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecb093162b90582f92113bc1314dbbac6c50a16930496648298aaf5fc804cdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb093162b90582f92113bc1314dbbac6c50a16930496648298aaf5fc804cdf7->enter($__internal_ecb093162b90582f92113bc1314dbbac6c50a16930496648298aaf5fc804cdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecb093162b90582f92113bc1314dbbac6c50a16930496648298aaf5fc804cdf7->leave($__internal_ecb093162b90582f92113bc1314dbbac6c50a16930496648298aaf5fc804cdf7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22ef7330722aae6f43ac2c511a2aba2a3d41fe041b876d6322a359e00278c3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ef7330722aae6f43ac2c511a2aba2a3d41fe041b876d6322a359e00278c3cc->enter($__internal_22ef7330722aae6f43ac2c511a2aba2a3d41fe041b876d6322a359e00278c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22ef7330722aae6f43ac2c511a2aba2a3d41fe041b876d6322a359e00278c3cc->leave($__internal_22ef7330722aae6f43ac2c511a2aba2a3d41fe041b876d6322a359e00278c3cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2c2d68ce62bc772989e57b70d30d1b04c45e8823a6dd968c9f79e532a48d7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c2d68ce62bc772989e57b70d30d1b04c45e8823a6dd968c9f79e532a48d7cd->enter($__internal_c2c2d68ce62bc772989e57b70d30d1b04c45e8823a6dd968c9f79e532a48d7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2c2d68ce62bc772989e57b70d30d1b04c45e8823a6dd968c9f79e532a48d7cd->leave($__internal_c2c2d68ce62bc772989e57b70d30d1b04c45e8823a6dd968c9f79e532a48d7cd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec947afb6e367e7298b14ae42eadc561c387e8a2df0af7633262cbb15f4f1392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec947afb6e367e7298b14ae42eadc561c387e8a2df0af7633262cbb15f4f1392->enter($__internal_ec947afb6e367e7298b14ae42eadc561c387e8a2df0af7633262cbb15f4f1392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec947afb6e367e7298b14ae42eadc561c387e8a2df0af7633262cbb15f4f1392->leave($__internal_ec947afb6e367e7298b14ae42eadc561c387e8a2df0af7633262cbb15f4f1392_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/clement/cir3/TP/test00/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
