<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bdb7e898bc0c541eef5c9495e259e9e2d1c70cd639912754bf9bdb3c131dffec extends Twig_Template
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
        $__internal_5c06e27b34a0ca7d5ce9da0306301db128e16bd9f916d06bbd4960db4f3db8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c06e27b34a0ca7d5ce9da0306301db128e16bd9f916d06bbd4960db4f3db8dc->enter($__internal_5c06e27b34a0ca7d5ce9da0306301db128e16bd9f916d06bbd4960db4f3db8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f4c06d0ad3c65f2dc58916b104a3920e1743a9c98f9b69e4a9281c136861952a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c06d0ad3c65f2dc58916b104a3920e1743a9c98f9b69e4a9281c136861952a->enter($__internal_f4c06d0ad3c65f2dc58916b104a3920e1743a9c98f9b69e4a9281c136861952a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5c06e27b34a0ca7d5ce9da0306301db128e16bd9f916d06bbd4960db4f3db8dc->leave($__internal_5c06e27b34a0ca7d5ce9da0306301db128e16bd9f916d06bbd4960db4f3db8dc_prof);

        
        $__internal_f4c06d0ad3c65f2dc58916b104a3920e1743a9c98f9b69e4a9281c136861952a->leave($__internal_f4c06d0ad3c65f2dc58916b104a3920e1743a9c98f9b69e4a9281c136861952a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
