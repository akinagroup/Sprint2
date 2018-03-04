<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e16a29ab777ce29781df1d5821d47257aa2da5f6fdb916607347ecca8f620ebf extends Twig_Template
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
        $__internal_53e3abe15824337f30845d6d990944c5fbb6959a3a5bea709e706d58c8bcfb68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e3abe15824337f30845d6d990944c5fbb6959a3a5bea709e706d58c8bcfb68->enter($__internal_53e3abe15824337f30845d6d990944c5fbb6959a3a5bea709e706d58c8bcfb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a8bfb07c2a3332511b9526737e2c6c7d4b8048ad0f9704215c56f5e458b6928d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bfb07c2a3332511b9526737e2c6c7d4b8048ad0f9704215c56f5e458b6928d->enter($__internal_a8bfb07c2a3332511b9526737e2c6c7d4b8048ad0f9704215c56f5e458b6928d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_53e3abe15824337f30845d6d990944c5fbb6959a3a5bea709e706d58c8bcfb68->leave($__internal_53e3abe15824337f30845d6d990944c5fbb6959a3a5bea709e706d58c8bcfb68_prof);

        
        $__internal_a8bfb07c2a3332511b9526737e2c6c7d4b8048ad0f9704215c56f5e458b6928d->leave($__internal_a8bfb07c2a3332511b9526737e2c6c7d4b8048ad0f9704215c56f5e458b6928d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
