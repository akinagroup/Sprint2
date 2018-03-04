<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_731e582d81976f20e4556d927a7543f8c3f756dcc0e876f1dddfc3b176d632f5 extends Twig_Template
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
        $__internal_4321fcbce2da928431458083eb04aa53552d55f55e4a70d61c9fc9b65ab91d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4321fcbce2da928431458083eb04aa53552d55f55e4a70d61c9fc9b65ab91d94->enter($__internal_4321fcbce2da928431458083eb04aa53552d55f55e4a70d61c9fc9b65ab91d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6c649b7f583c502ad3bb98bdb6628291ec66f70912fd5e6b5b4ec5ea9e689c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c649b7f583c502ad3bb98bdb6628291ec66f70912fd5e6b5b4ec5ea9e689c8d->enter($__internal_6c649b7f583c502ad3bb98bdb6628291ec66f70912fd5e6b5b4ec5ea9e689c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4321fcbce2da928431458083eb04aa53552d55f55e4a70d61c9fc9b65ab91d94->leave($__internal_4321fcbce2da928431458083eb04aa53552d55f55e4a70d61c9fc9b65ab91d94_prof);

        
        $__internal_6c649b7f583c502ad3bb98bdb6628291ec66f70912fd5e6b5b4ec5ea9e689c8d->leave($__internal_6c649b7f583c502ad3bb98bdb6628291ec66f70912fd5e6b5b4ec5ea9e689c8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
