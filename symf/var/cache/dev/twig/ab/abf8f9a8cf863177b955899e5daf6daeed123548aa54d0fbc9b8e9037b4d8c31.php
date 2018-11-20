<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b20fc69ba4f57fb2809126128e7ecedde9153b789fd21bab8162e92c35f8525d extends Twig_Template
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
        $__internal_1f85fc8338fcbb3d43081f7fedfc5f683392583bc493fb946f22075e06af3fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f85fc8338fcbb3d43081f7fedfc5f683392583bc493fb946f22075e06af3fb5->enter($__internal_1f85fc8338fcbb3d43081f7fedfc5f683392583bc493fb946f22075e06af3fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f85fc8338fcbb3d43081f7fedfc5f683392583bc493fb946f22075e06af3fb5->leave($__internal_1f85fc8338fcbb3d43081f7fedfc5f683392583bc493fb946f22075e06af3fb5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_764bc002e0633eca6a1a56a7901c7eda76e58c2fd5dbfeb4156eee08d7aa4338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764bc002e0633eca6a1a56a7901c7eda76e58c2fd5dbfeb4156eee08d7aa4338->enter($__internal_764bc002e0633eca6a1a56a7901c7eda76e58c2fd5dbfeb4156eee08d7aa4338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_764bc002e0633eca6a1a56a7901c7eda76e58c2fd5dbfeb4156eee08d7aa4338->leave($__internal_764bc002e0633eca6a1a56a7901c7eda76e58c2fd5dbfeb4156eee08d7aa4338_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8af754b7ad422c58ce119fa1f23764285d6188f7315f23bed70ca00a81e6ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8af754b7ad422c58ce119fa1f23764285d6188f7315f23bed70ca00a81e6ebc->enter($__internal_e8af754b7ad422c58ce119fa1f23764285d6188f7315f23bed70ca00a81e6ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8af754b7ad422c58ce119fa1f23764285d6188f7315f23bed70ca00a81e6ebc->leave($__internal_e8af754b7ad422c58ce119fa1f23764285d6188f7315f23bed70ca00a81e6ebc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e6ec4f655797f8577d563fa8298a65fd95fceceacc3f1c17c99c41adfe119c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6ec4f655797f8577d563fa8298a65fd95fceceacc3f1c17c99c41adfe119c1->enter($__internal_7e6ec4f655797f8577d563fa8298a65fd95fceceacc3f1c17c99c41adfe119c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7e6ec4f655797f8577d563fa8298a65fd95fceceacc3f1c17c99c41adfe119c1->leave($__internal_7e6ec4f655797f8577d563fa8298a65fd95fceceacc3f1c17c99c41adfe119c1_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/clement/cir3/projet/symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
