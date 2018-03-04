<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_04649b5845a19b2ba85c1fe6c08cf6b16329d00dd070f0e170cfbc3460a67b4e extends Twig_Template
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
        $__internal_57300e5e589e91f76eda761f438a90d2094e6e35bcd6ab8497a5d0de6d0d9c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57300e5e589e91f76eda761f438a90d2094e6e35bcd6ab8497a5d0de6d0d9c6b->enter($__internal_57300e5e589e91f76eda761f438a90d2094e6e35bcd6ab8497a5d0de6d0d9c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_79726f5c1a04df5692b8deeef3a3250bbdaed82df7f4c2a287f85c7cf3c5a743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79726f5c1a04df5692b8deeef3a3250bbdaed82df7f4c2a287f85c7cf3c5a743->enter($__internal_79726f5c1a04df5692b8deeef3a3250bbdaed82df7f4c2a287f85c7cf3c5a743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_57300e5e589e91f76eda761f438a90d2094e6e35bcd6ab8497a5d0de6d0d9c6b->leave($__internal_57300e5e589e91f76eda761f438a90d2094e6e35bcd6ab8497a5d0de6d0d9c6b_prof);

        
        $__internal_79726f5c1a04df5692b8deeef3a3250bbdaed82df7f4c2a287f85c7cf3c5a743->leave($__internal_79726f5c1a04df5692b8deeef3a3250bbdaed82df7f4c2a287f85c7cf3c5a743_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
