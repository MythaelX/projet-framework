<?php

/* base.html.twig */
class __TwigTemplate_dc53f82fb40b4263af3a4dba5889ce3e30c17dcaced85210be3d0669fd207800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cebcecb126587455a91dbc75e6d7a6e14c1b8618b5f73cdb8b2031fa7a238232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebcecb126587455a91dbc75e6d7a6e14c1b8618b5f73cdb8b2031fa7a238232->enter($__internal_cebcecb126587455a91dbc75e6d7a6e14c1b8618b5f73cdb8b2031fa7a238232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.title"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_cebcecb126587455a91dbc75e6d7a6e14c1b8618b5f73cdb8b2031fa7a238232->leave($__internal_cebcecb126587455a91dbc75e6d7a6e14c1b8618b5f73cdb8b2031fa7a238232_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e322e5efa83e12e5f1fece75fb14a66d7f9cf8ab8031fd5a6043432a3ed425f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e322e5efa83e12e5f1fece75fb14a66d7f9cf8ab8031fd5a6043432a3ed425f->enter($__internal_5e322e5efa83e12e5f1fece75fb14a66d7f9cf8ab8031fd5a6043432a3ed425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony";
        
        $__internal_5e322e5efa83e12e5f1fece75fb14a66d7f9cf8ab8031fd5a6043432a3ed425f->leave($__internal_5e322e5efa83e12e5f1fece75fb14a66d7f9cf8ab8031fd5a6043432a3ed425f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90a5fb93ce6a5935185728bb81c605e97fc032d57824f8fa7adf339f5a033bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a5fb93ce6a5935185728bb81c605e97fc032d57824f8fa7adf339f5a033bb0->enter($__internal_90a5fb93ce6a5935185728bb81c605e97fc032d57824f8fa7adf339f5a033bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styleTest6.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_90a5fb93ce6a5935185728bb81c605e97fc032d57824f8fa7adf339f5a033bb0->leave($__internal_90a5fb93ce6a5935185728bb81c605e97fc032d57824f8fa7adf339f5a033bb0_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_01363a9c2f45f1e8eb664342388cae78f94727ff9c391ab56f74bcf3a68828d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01363a9c2f45f1e8eb664342388cae78f94727ff9c391ab56f74bcf3a68828d4->enter($__internal_01363a9c2f45f1e8eb664342388cae78f94727ff9c391ab56f74bcf3a68828d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_01363a9c2f45f1e8eb664342388cae78f94727ff9c391ab56f74bcf3a68828d4->leave($__internal_01363a9c2f45f1e8eb664342388cae78f94727ff9c391ab56f74bcf3a68828d4_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_56fbaac99a21caa3f9b520e07af4f88ffd475eb005c73781b3de1a221433c094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fbaac99a21caa3f9b520e07af4f88ffd475eb005c73781b3de1a221433c094->enter($__internal_56fbaac99a21caa3f9b520e07af4f88ffd475eb005c73781b3de1a221433c094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56fbaac99a21caa3f9b520e07af4f88ffd475eb005c73781b3de1a221433c094->leave($__internal_56fbaac99a21caa3f9b520e07af4f88ffd475eb005c73781b3de1a221433c094_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72b2121698aa55402b1e97efad4993f089a328a03815273d7f76fa25fb45b2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b2121698aa55402b1e97efad4993f089a328a03815273d7f76fa25fb45b2ca->enter($__internal_72b2121698aa55402b1e97efad4993f089a328a03815273d7f76fa25fb45b2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_72b2121698aa55402b1e97efad4993f089a328a03815273d7f76fa25fb45b2ca->leave($__internal_72b2121698aa55402b1e97efad4993f089a328a03815273d7f76fa25fb45b2ca_prof);

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
        return array (  125 => 17,  114 => 16,  103 => 15,  93 => 11,  87 => 10,  75 => 6,  66 => 18,  63 => 17,  60 => 16,  58 => 15,  54 => 13,  52 => 10,  47 => 8,  41 => 7,  37 => 6,  30 => 2,  27 => 1,);
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
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Symfony{% endblock %}</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ 'rss.title'|trans }}\" href=\"{{ path('blog_rss') }}\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        
        {% block stylesheets %}
        <link href=\"{{ asset('styleTest6.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    <body>
        {% block header %}{% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/clement/cir3/TP/test00/app/Resources/views/base.html.twig");
    }
}
