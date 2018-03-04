<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_6b853f1fd0f2e4bbbda864e694cadf93bf320f8a9ca2cd1f508951dcd1407e7c extends Twig_Template
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
        $__internal_5146d47b795e72f5ca467c5fe91358d5c7e88083409f17a8b061ef4763cf8b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5146d47b795e72f5ca467c5fe91358d5c7e88083409f17a8b061ef4763cf8b98->enter($__internal_5146d47b795e72f5ca467c5fe91358d5c7e88083409f17a8b061ef4763cf8b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ba786774f568504feaf1c656189bebc2a2ce2c6bc7bc9580096473d819d3121d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba786774f568504feaf1c656189bebc2a2ce2c6bc7bc9580096473d819d3121d->enter($__internal_ba786774f568504feaf1c656189bebc2a2ce2c6bc7bc9580096473d819d3121d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5146d47b795e72f5ca467c5fe91358d5c7e88083409f17a8b061ef4763cf8b98->leave($__internal_5146d47b795e72f5ca467c5fe91358d5c7e88083409f17a8b061ef4763cf8b98_prof);

        
        $__internal_ba786774f568504feaf1c656189bebc2a2ce2c6bc7bc9580096473d819d3121d->leave($__internal_ba786774f568504feaf1c656189bebc2a2ce2c6bc7bc9580096473d819d3121d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
