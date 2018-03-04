<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_b6913dd84cf525731333305a18476de6980593f7583e17ddf2e91a650aced8be extends Twig_Template
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
        $__internal_543551bd51e2b6661a222cc6b3b537cc5b7a6dcbd1c73e7ee5a13395da5630dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543551bd51e2b6661a222cc6b3b537cc5b7a6dcbd1c73e7ee5a13395da5630dd->enter($__internal_543551bd51e2b6661a222cc6b3b537cc5b7a6dcbd1c73e7ee5a13395da5630dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c6773c541e0969bda7a0afe76f477fd0ef8166c40d78a97193b595a77955069f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6773c541e0969bda7a0afe76f477fd0ef8166c40d78a97193b595a77955069f->enter($__internal_c6773c541e0969bda7a0afe76f477fd0ef8166c40d78a97193b595a77955069f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_543551bd51e2b6661a222cc6b3b537cc5b7a6dcbd1c73e7ee5a13395da5630dd->leave($__internal_543551bd51e2b6661a222cc6b3b537cc5b7a6dcbd1c73e7ee5a13395da5630dd_prof);

        
        $__internal_c6773c541e0969bda7a0afe76f477fd0ef8166c40d78a97193b595a77955069f->leave($__internal_c6773c541e0969bda7a0afe76f477fd0ef8166c40d78a97193b595a77955069f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
