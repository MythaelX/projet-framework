<?php

/* toolbar.html.twig */
class __TwigTemplate_777bb49150401d81ff59d0406d68dbed52629dec92f560a777152c81a3c90362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "toolbar.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b7ddf5f045ab769b86cc3d0721d79c9d699fe21d7f3773640a829a6794624ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7ddf5f045ab769b86cc3d0721d79c9d699fe21d7f3773640a829a6794624ea->enter($__internal_1b7ddf5f045ab769b86cc3d0721d79c9d699fe21d7f3773640a829a6794624ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b7ddf5f045ab769b86cc3d0721d79c9d699fe21d7f3773640a829a6794624ea->leave($__internal_1b7ddf5f045ab769b86cc3d0721d79c9d699fe21d7f3773640a829a6794624ea_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_0ca3c407ae8deb616bd5d6f814cf32c82267cc5e3a73b0b87063592f501312db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca3c407ae8deb616bd5d6f814cf32c82267cc5e3a73b0b87063592f501312db->enter($__internal_0ca3c407ae8deb616bd5d6f814cf32c82267cc5e3a73b0b87063592f501312db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "<ul>
  <li><a class=\"active\" href=\"#home\">Home</a></li>
  <li><a href=\"#news\">News</a></li>
  <li><a href=\"#contact\">Contact</a></li>
  <li><a href=\"#about\">About</a></li>
</ul>
";
        
        $__internal_0ca3c407ae8deb616bd5d6f814cf32c82267cc5e3a73b0b87063592f501312db->leave($__internal_0ca3c407ae8deb616bd5d6f814cf32c82267cc5e3a73b0b87063592f501312db_prof);

    }

    public function getTemplateName()
    {
        return "toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackOfficeBundle::base.html.twig' %}
{% block header %}
<ul>
  <li><a class=\"active\" href=\"#home\">Home</a></li>
  <li><a href=\"#news\">News</a></li>
  <li><a href=\"#contact\">Contact</a></li>
  <li><a href=\"#about\">About</a></li>
</ul>
{% endblock %}
", "toolbar.html.twig", "/home/clement/cir3/TP/test00/app/Resources/views/toolbar.html.twig");
    }
}
