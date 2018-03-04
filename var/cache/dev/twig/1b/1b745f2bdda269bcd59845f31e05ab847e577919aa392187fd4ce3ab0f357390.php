<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_8b30f7dac08b8408f8379ae4845e03848b45c4cb01c00855c502ffae3d5b6092 extends Twig_Template
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
        $__internal_ac6deabdb2f1e7d71541824a64e3a2ebbf5363fa5393d63f123e875457afa368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6deabdb2f1e7d71541824a64e3a2ebbf5363fa5393d63f123e875457afa368->enter($__internal_ac6deabdb2f1e7d71541824a64e3a2ebbf5363fa5393d63f123e875457afa368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_988cb392ac61564581b991f0b7963686076e819e770f1d18a8e0b562731bd0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988cb392ac61564581b991f0b7963686076e819e770f1d18a8e0b562731bd0e7->enter($__internal_988cb392ac61564581b991f0b7963686076e819e770f1d18a8e0b562731bd0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ac6deabdb2f1e7d71541824a64e3a2ebbf5363fa5393d63f123e875457afa368->leave($__internal_ac6deabdb2f1e7d71541824a64e3a2ebbf5363fa5393d63f123e875457afa368_prof);

        
        $__internal_988cb392ac61564581b991f0b7963686076e819e770f1d18a8e0b562731bd0e7->leave($__internal_988cb392ac61564581b991f0b7963686076e819e770f1d18a8e0b562731bd0e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
