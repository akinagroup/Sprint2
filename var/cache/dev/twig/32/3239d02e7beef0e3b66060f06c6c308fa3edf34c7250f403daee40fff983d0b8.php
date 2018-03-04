<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_217135b103e88ee906da066686765cb63b530f313122206a0125267349437c40 extends Twig_Template
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
        $__internal_7d891c1eaf99166b2c7e13086fba434390c78e0d6857e2b1c037b04ee8a5741d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d891c1eaf99166b2c7e13086fba434390c78e0d6857e2b1c037b04ee8a5741d->enter($__internal_7d891c1eaf99166b2c7e13086fba434390c78e0d6857e2b1c037b04ee8a5741d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f80889186ec624f5de974d6939ff3b497421295a13367fb5383b732295a1a441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80889186ec624f5de974d6939ff3b497421295a13367fb5383b732295a1a441->enter($__internal_f80889186ec624f5de974d6939ff3b497421295a13367fb5383b732295a1a441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7d891c1eaf99166b2c7e13086fba434390c78e0d6857e2b1c037b04ee8a5741d->leave($__internal_7d891c1eaf99166b2c7e13086fba434390c78e0d6857e2b1c037b04ee8a5741d_prof);

        
        $__internal_f80889186ec624f5de974d6939ff3b497421295a13367fb5383b732295a1a441->leave($__internal_f80889186ec624f5de974d6939ff3b497421295a13367fb5383b732295a1a441_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
