<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_187982bea571144ede6e3570020a4aacc07342e5ebf255f1d0672760997caa12 extends Twig_Template
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
        $__internal_4efaaa97712ab41b2bb4047557e6d6a9343d1fd7ad9bbaa752c8e807c03d76d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efaaa97712ab41b2bb4047557e6d6a9343d1fd7ad9bbaa752c8e807c03d76d4->enter($__internal_4efaaa97712ab41b2bb4047557e6d6a9343d1fd7ad9bbaa752c8e807c03d76d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_61f8d912f1b921e071b19feabdb11d62901998628432813731bc1bdeb3673586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f8d912f1b921e071b19feabdb11d62901998628432813731bc1bdeb3673586->enter($__internal_61f8d912f1b921e071b19feabdb11d62901998628432813731bc1bdeb3673586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_4efaaa97712ab41b2bb4047557e6d6a9343d1fd7ad9bbaa752c8e807c03d76d4->leave($__internal_4efaaa97712ab41b2bb4047557e6d6a9343d1fd7ad9bbaa752c8e807c03d76d4_prof);

        
        $__internal_61f8d912f1b921e071b19feabdb11d62901998628432813731bc1bdeb3673586->leave($__internal_61f8d912f1b921e071b19feabdb11d62901998628432813731bc1bdeb3673586_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
