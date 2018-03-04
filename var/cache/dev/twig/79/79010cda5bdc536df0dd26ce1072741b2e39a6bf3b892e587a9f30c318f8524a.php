<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b2a540c71357ba150653332b83da4b69fd5bccef75d685536e78a9e2212a4791 extends Twig_Template
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
        $__internal_35970112ee0a6a90bed09e6e119041a108bfaf66459c7e2e44d66c76b760010a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35970112ee0a6a90bed09e6e119041a108bfaf66459c7e2e44d66c76b760010a->enter($__internal_35970112ee0a6a90bed09e6e119041a108bfaf66459c7e2e44d66c76b760010a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_23b70d9e329ef53243ff46208982f89c63e86ce6fce71db47d71333328670297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b70d9e329ef53243ff46208982f89c63e86ce6fce71db47d71333328670297->enter($__internal_23b70d9e329ef53243ff46208982f89c63e86ce6fce71db47d71333328670297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_35970112ee0a6a90bed09e6e119041a108bfaf66459c7e2e44d66c76b760010a->leave($__internal_35970112ee0a6a90bed09e6e119041a108bfaf66459c7e2e44d66c76b760010a_prof);

        
        $__internal_23b70d9e329ef53243ff46208982f89c63e86ce6fce71db47d71333328670297->leave($__internal_23b70d9e329ef53243ff46208982f89c63e86ce6fce71db47d71333328670297_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
