<?php

/* base.html.twig */
class __TwigTemplate_afea76426c755ee0d28e39ddec799dcec2848989ce2ca75456ce2ca4579c196e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebe39af96c7e3bf1cd4fa36c021c28ed6ff711c934d170627a345e25f50b39e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe39af96c7e3bf1cd4fa36c021c28ed6ff711c934d170627a345e25f50b39e6->enter($__internal_ebe39af96c7e3bf1cd4fa36c021c28ed6ff711c934d170627a345e25f50b39e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ebe39af96c7e3bf1cd4fa36c021c28ed6ff711c934d170627a345e25f50b39e6->leave($__internal_ebe39af96c7e3bf1cd4fa36c021c28ed6ff711c934d170627a345e25f50b39e6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f91e94e48f65b16fb291ecfa195895888843fc68d49e651a154367bf09543f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91e94e48f65b16fb291ecfa195895888843fc68d49e651a154367bf09543f99->enter($__internal_f91e94e48f65b16fb291ecfa195895888843fc68d49e651a154367bf09543f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f91e94e48f65b16fb291ecfa195895888843fc68d49e651a154367bf09543f99->leave($__internal_f91e94e48f65b16fb291ecfa195895888843fc68d49e651a154367bf09543f99_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee72769693f0f11b67fd71ebb8f9b595dcd3af84d148d63534920b751cc5a894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee72769693f0f11b67fd71ebb8f9b595dcd3af84d148d63534920b751cc5a894->enter($__internal_ee72769693f0f11b67fd71ebb8f9b595dcd3af84d148d63534920b751cc5a894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ee72769693f0f11b67fd71ebb8f9b595dcd3af84d148d63534920b751cc5a894->leave($__internal_ee72769693f0f11b67fd71ebb8f9b595dcd3af84d148d63534920b751cc5a894_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_65644234a53ec88937d9ef8f8e86397d2ecfa5430734c438d1bb3c421ad079b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65644234a53ec88937d9ef8f8e86397d2ecfa5430734c438d1bb3c421ad079b2->enter($__internal_65644234a53ec88937d9ef8f8e86397d2ecfa5430734c438d1bb3c421ad079b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65644234a53ec88937d9ef8f8e86397d2ecfa5430734c438d1bb3c421ad079b2->leave($__internal_65644234a53ec88937d9ef8f8e86397d2ecfa5430734c438d1bb3c421ad079b2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c07e89f426cb882ed06f3f7b68f724f5b5329546e40fa4f7627b867232b75d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c07e89f426cb882ed06f3f7b68f724f5b5329546e40fa4f7627b867232b75d6->enter($__internal_8c07e89f426cb882ed06f3f7b68f724f5b5329546e40fa4f7627b867232b75d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8c07e89f426cb882ed06f3f7b68f724f5b5329546e40fa4f7627b867232b75d6->leave($__internal_8c07e89f426cb882ed06f3f7b68f724f5b5329546e40fa4f7627b867232b75d6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/clement/cir3/projet/symf/app/Resources/views/base.html.twig");
    }
}
