<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_429a627fc445420ec7f98c3d8cd9a7b9b9132b30682063399aba9c0ff094b391 extends Twig_Template
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
        $__internal_9165e84c109bbdc1a13f5346dc1eec38127fb0c0adabdd9f695881c0454470a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9165e84c109bbdc1a13f5346dc1eec38127fb0c0adabdd9f695881c0454470a4->enter($__internal_9165e84c109bbdc1a13f5346dc1eec38127fb0c0adabdd9f695881c0454470a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9165e84c109bbdc1a13f5346dc1eec38127fb0c0adabdd9f695881c0454470a4->leave($__internal_9165e84c109bbdc1a13f5346dc1eec38127fb0c0adabdd9f695881c0454470a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/media/christophe/HDDLNX/www/test-smf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
