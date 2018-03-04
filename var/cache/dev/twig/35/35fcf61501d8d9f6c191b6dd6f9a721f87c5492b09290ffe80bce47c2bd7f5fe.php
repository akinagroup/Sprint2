<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_dda10f12c330d6b9a17ef4845a9155d8b20d9e8e284eaedd2c64b9a258fe8510 extends Twig_Template
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
        $__internal_4ac51e78212aaeeada17cf42be8bfa9e6b2dfe6838b0817e910a7954d7d475bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac51e78212aaeeada17cf42be8bfa9e6b2dfe6838b0817e910a7954d7d475bf->enter($__internal_4ac51e78212aaeeada17cf42be8bfa9e6b2dfe6838b0817e910a7954d7d475bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_bde7d97ae4dd4893cc16ef104d5d7713a3a52f312b8c5aaf8e247a12d3be2530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde7d97ae4dd4893cc16ef104d5d7713a3a52f312b8c5aaf8e247a12d3be2530->enter($__internal_bde7d97ae4dd4893cc16ef104d5d7713a3a52f312b8c5aaf8e247a12d3be2530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4ac51e78212aaeeada17cf42be8bfa9e6b2dfe6838b0817e910a7954d7d475bf->leave($__internal_4ac51e78212aaeeada17cf42be8bfa9e6b2dfe6838b0817e910a7954d7d475bf_prof);

        
        $__internal_bde7d97ae4dd4893cc16ef104d5d7713a3a52f312b8c5aaf8e247a12d3be2530->leave($__internal_bde7d97ae4dd4893cc16ef104d5d7713a3a52f312b8c5aaf8e247a12d3be2530_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
