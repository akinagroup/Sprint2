<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_293b520342ad0c7470588c016d35706775b587eb6ca67d00146a4607a9c8b2ad extends Twig_Template
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
        $__internal_2c8e132a682af76dd9fc65ac0612c2126259d28aba27f2714bf7360a4b29b55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8e132a682af76dd9fc65ac0612c2126259d28aba27f2714bf7360a4b29b55f->enter($__internal_2c8e132a682af76dd9fc65ac0612c2126259d28aba27f2714bf7360a4b29b55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_64113be857e94f26da3f3d84671cfe00f576fe78f7b09a5d02a86d0b44f9f310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64113be857e94f26da3f3d84671cfe00f576fe78f7b09a5d02a86d0b44f9f310->enter($__internal_64113be857e94f26da3f3d84671cfe00f576fe78f7b09a5d02a86d0b44f9f310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2c8e132a682af76dd9fc65ac0612c2126259d28aba27f2714bf7360a4b29b55f->leave($__internal_2c8e132a682af76dd9fc65ac0612c2126259d28aba27f2714bf7360a4b29b55f_prof);

        
        $__internal_64113be857e94f26da3f3d84671cfe00f576fe78f7b09a5d02a86d0b44f9f310->leave($__internal_64113be857e94f26da3f3d84671cfe00f576fe78f7b09a5d02a86d0b44f9f310_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
