<?php

/* BackOfficeBundle::tp3/toolbar.html.twig */
class __TwigTemplate_812c739004b11d71ed1f4e3dbe348573e19533bcaf92000e78c98308a4f117ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_752d71c8b0376b33bf2f105316e162b9ade08719e34b71a625db88308c664ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752d71c8b0376b33bf2f105316e162b9ade08719e34b71a625db88308c664ebb->enter($__internal_752d71c8b0376b33bf2f105316e162b9ade08719e34b71a625db88308c664ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::tp3/toolbar.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_752d71c8b0376b33bf2f105316e162b9ade08719e34b71a625db88308c664ebb->leave($__internal_752d71c8b0376b33bf2f105316e162b9ade08719e34b71a625db88308c664ebb_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_c5e7e4a7209677d9acc3813d1c173263f304649bef6336c5932e43f25cc1124b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e7e4a7209677d9acc3813d1c173263f304649bef6336c5932e43f25cc1124b->enter($__internal_c5e7e4a7209677d9acc3813d1c173263f304649bef6336c5932e43f25cc1124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "<ul>
  <li><a class=\"active\" href=\"#home\">Home</a></li>
  <li><a href=\"#news\">News</a></li>
  <li><a href=\"#contact\">Contact</a></li>
  <li><a href=\"#about\">About</a></li>
</ul>
";
        
        $__internal_c5e7e4a7209677d9acc3813d1c173263f304649bef6336c5932e43f25cc1124b->leave($__internal_c5e7e4a7209677d9acc3813d1c173263f304649bef6336c5932e43f25cc1124b_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::tp3/toolbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block header %}
<ul>
  <li><a class=\"active\" href=\"#home\">Home</a></li>
  <li><a href=\"#news\">News</a></li>
  <li><a href=\"#contact\">Contact</a></li>
  <li><a href=\"#about\">About</a></li>
</ul>
{% endblock %}
", "BackOfficeBundle::tp3/toolbar.html.twig", "/home/clement/cir3/TP/test00/src/BackOfficeBundle/Resources/views/tp3/toolbar.html.twig");
    }
}
