<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7a39d2ff98a2d1b866e84dbbaed7144b7c78186f9bf4b00766f21fd4e2f7708a extends Twig_Template
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
        $__internal_ec7f6eee4232f0eeefc5a09d8d031d01891c4c115a71ac546367d1843251e2c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7f6eee4232f0eeefc5a09d8d031d01891c4c115a71ac546367d1843251e2c7->enter($__internal_ec7f6eee4232f0eeefc5a09d8d031d01891c4c115a71ac546367d1843251e2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_505d4932ba9e865daad842a4aecabac170853915d52552bc5c465e7019a73735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505d4932ba9e865daad842a4aecabac170853915d52552bc5c465e7019a73735->enter($__internal_505d4932ba9e865daad842a4aecabac170853915d52552bc5c465e7019a73735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ec7f6eee4232f0eeefc5a09d8d031d01891c4c115a71ac546367d1843251e2c7->leave($__internal_ec7f6eee4232f0eeefc5a09d8d031d01891c4c115a71ac546367d1843251e2c7_prof);

        
        $__internal_505d4932ba9e865daad842a4aecabac170853915d52552bc5c465e7019a73735->leave($__internal_505d4932ba9e865daad842a4aecabac170853915d52552bc5c465e7019a73735_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
