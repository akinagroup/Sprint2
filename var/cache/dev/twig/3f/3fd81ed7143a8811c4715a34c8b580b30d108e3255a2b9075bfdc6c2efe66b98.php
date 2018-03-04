<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_73fb841ce96a2a4820ce42760f62119b27f7bc550ca4eeb49cb34e82d97a88c6 extends Twig_Template
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
        $__internal_9cb2b150026ef14eeb68b75d9abaca05e2d22daccf8e40f53702c8f68b895cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb2b150026ef14eeb68b75d9abaca05e2d22daccf8e40f53702c8f68b895cd7->enter($__internal_9cb2b150026ef14eeb68b75d9abaca05e2d22daccf8e40f53702c8f68b895cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_144265b81df5de96fd9d914b9f13686accdd11462f2ad952fbbb64ee20df1d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144265b81df5de96fd9d914b9f13686accdd11462f2ad952fbbb64ee20df1d9c->enter($__internal_144265b81df5de96fd9d914b9f13686accdd11462f2ad952fbbb64ee20df1d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9cb2b150026ef14eeb68b75d9abaca05e2d22daccf8e40f53702c8f68b895cd7->leave($__internal_9cb2b150026ef14eeb68b75d9abaca05e2d22daccf8e40f53702c8f68b895cd7_prof);

        
        $__internal_144265b81df5de96fd9d914b9f13686accdd11462f2ad952fbbb64ee20df1d9c->leave($__internal_144265b81df5de96fd9d914b9f13686accdd11462f2ad952fbbb64ee20df1d9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
