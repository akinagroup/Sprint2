<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2c87de648b3c4e934b6f2d216ccbbc0dc82c2df1c2fb2a9bd7e201d559d9cb9b extends Twig_Template
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
        $__internal_cb860dc5782b5036d2c168b77c77b8fc596daeb4dd6c6085a43b5986427a2987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb860dc5782b5036d2c168b77c77b8fc596daeb4dd6c6085a43b5986427a2987->enter($__internal_cb860dc5782b5036d2c168b77c77b8fc596daeb4dd6c6085a43b5986427a2987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_96f212e926a636357589e6416dfb9ed3a80564857a065235f7926035e223f4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f212e926a636357589e6416dfb9ed3a80564857a065235f7926035e223f4aa->enter($__internal_96f212e926a636357589e6416dfb9ed3a80564857a065235f7926035e223f4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cb860dc5782b5036d2c168b77c77b8fc596daeb4dd6c6085a43b5986427a2987->leave($__internal_cb860dc5782b5036d2c168b77c77b8fc596daeb4dd6c6085a43b5986427a2987_prof);

        
        $__internal_96f212e926a636357589e6416dfb9ed3a80564857a065235f7926035e223f4aa->leave($__internal_96f212e926a636357589e6416dfb9ed3a80564857a065235f7926035e223f4aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
