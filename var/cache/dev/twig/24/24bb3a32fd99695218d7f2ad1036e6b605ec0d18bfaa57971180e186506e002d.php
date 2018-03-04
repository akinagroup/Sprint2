<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_060975e5a119249745720daa779c49fe281b2192b42a1a983abe3c6f9b3bf5c7 extends Twig_Template
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
        $__internal_ba7a9be2c6ff41541f153a136b0325c6d515fbfff4ceb339033bbbf904225ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7a9be2c6ff41541f153a136b0325c6d515fbfff4ceb339033bbbf904225ea5->enter($__internal_ba7a9be2c6ff41541f153a136b0325c6d515fbfff4ceb339033bbbf904225ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5d0919fc0e0f1dc7b5328e4210f2e03c648530e95c55be327f551bf8554eba22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0919fc0e0f1dc7b5328e4210f2e03c648530e95c55be327f551bf8554eba22->enter($__internal_5d0919fc0e0f1dc7b5328e4210f2e03c648530e95c55be327f551bf8554eba22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ba7a9be2c6ff41541f153a136b0325c6d515fbfff4ceb339033bbbf904225ea5->leave($__internal_ba7a9be2c6ff41541f153a136b0325c6d515fbfff4ceb339033bbbf904225ea5_prof);

        
        $__internal_5d0919fc0e0f1dc7b5328e4210f2e03c648530e95c55be327f551bf8554eba22->leave($__internal_5d0919fc0e0f1dc7b5328e4210f2e03c648530e95c55be327f551bf8554eba22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
