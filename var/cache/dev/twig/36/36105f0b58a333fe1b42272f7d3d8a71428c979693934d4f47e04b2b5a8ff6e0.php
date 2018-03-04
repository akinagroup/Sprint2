<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a1715026b98898f55a178bda5364ab896a21177dfbf21fa5585e36ac545afca2 extends Twig_Template
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
        $__internal_b78b325811962cd14b83a89fe69ccd865f86062df87d29a64f0e022a43699972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78b325811962cd14b83a89fe69ccd865f86062df87d29a64f0e022a43699972->enter($__internal_b78b325811962cd14b83a89fe69ccd865f86062df87d29a64f0e022a43699972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_87d673c5b12283002f3ae3b1a6c097e439e7f819660586d0b37f197b0c2b7a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d673c5b12283002f3ae3b1a6c097e439e7f819660586d0b37f197b0c2b7a28->enter($__internal_87d673c5b12283002f3ae3b1a6c097e439e7f819660586d0b37f197b0c2b7a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b78b325811962cd14b83a89fe69ccd865f86062df87d29a64f0e022a43699972->leave($__internal_b78b325811962cd14b83a89fe69ccd865f86062df87d29a64f0e022a43699972_prof);

        
        $__internal_87d673c5b12283002f3ae3b1a6c097e439e7f819660586d0b37f197b0c2b7a28->leave($__internal_87d673c5b12283002f3ae3b1a6c097e439e7f819660586d0b37f197b0c2b7a28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
