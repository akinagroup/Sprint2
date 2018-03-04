<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_014db6d716187aa15a124adc90ad0e3cc7e514454a001e4e39585b269758965b extends Twig_Template
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
        $__internal_462ffc48e7037a6ac30897116e378e20753cb3e27535fdd3ef2179d0a8fc52d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462ffc48e7037a6ac30897116e378e20753cb3e27535fdd3ef2179d0a8fc52d7->enter($__internal_462ffc48e7037a6ac30897116e378e20753cb3e27535fdd3ef2179d0a8fc52d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_371614b6cdfe0d36a516514247a78b16b75cb30daebe3ca500f7585b9e6a111c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371614b6cdfe0d36a516514247a78b16b75cb30daebe3ca500f7585b9e6a111c->enter($__internal_371614b6cdfe0d36a516514247a78b16b75cb30daebe3ca500f7585b9e6a111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_462ffc48e7037a6ac30897116e378e20753cb3e27535fdd3ef2179d0a8fc52d7->leave($__internal_462ffc48e7037a6ac30897116e378e20753cb3e27535fdd3ef2179d0a8fc52d7_prof);

        
        $__internal_371614b6cdfe0d36a516514247a78b16b75cb30daebe3ca500f7585b9e6a111c->leave($__internal_371614b6cdfe0d36a516514247a78b16b75cb30daebe3ca500f7585b9e6a111c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
