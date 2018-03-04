<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ad38ee7ad7c45447b950b141e1382fe2f5b3b78282c31482e854e0d852d27206 extends Twig_Template
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
        $__internal_5cc4010e1822a58b11b4c15a99932d43dd49d883e1477ab877b731e3c1e1e013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc4010e1822a58b11b4c15a99932d43dd49d883e1477ab877b731e3c1e1e013->enter($__internal_5cc4010e1822a58b11b4c15a99932d43dd49d883e1477ab877b731e3c1e1e013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2ebea7de7a585c35143d0e42f073f3cb5e394c377093126fee7fa1318afa125c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebea7de7a585c35143d0e42f073f3cb5e394c377093126fee7fa1318afa125c->enter($__internal_2ebea7de7a585c35143d0e42f073f3cb5e394c377093126fee7fa1318afa125c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_5cc4010e1822a58b11b4c15a99932d43dd49d883e1477ab877b731e3c1e1e013->leave($__internal_5cc4010e1822a58b11b4c15a99932d43dd49d883e1477ab877b731e3c1e1e013_prof);

        
        $__internal_2ebea7de7a585c35143d0e42f073f3cb5e394c377093126fee7fa1318afa125c->leave($__internal_2ebea7de7a585c35143d0e42f073f3cb5e394c377093126fee7fa1318afa125c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
