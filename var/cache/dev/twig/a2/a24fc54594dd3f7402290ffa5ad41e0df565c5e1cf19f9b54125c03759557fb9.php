<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0529ce5ee97f955ae38e5ee691c318006e820f84cc463cc84c8b48d3763321bd extends Twig_Template
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
        $__internal_40ed9c13413055ffe4d7aa32e35c1159e3ecf38df19c7066b7729cf56c52b515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ed9c13413055ffe4d7aa32e35c1159e3ecf38df19c7066b7729cf56c52b515->enter($__internal_40ed9c13413055ffe4d7aa32e35c1159e3ecf38df19c7066b7729cf56c52b515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6d109bc6ad56f50fcd5c5fc04d78df71c427d9e3d62e6a36bd3878f87817d9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d109bc6ad56f50fcd5c5fc04d78df71c427d9e3d62e6a36bd3878f87817d9a5->enter($__internal_6d109bc6ad56f50fcd5c5fc04d78df71c427d9e3d62e6a36bd3878f87817d9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_40ed9c13413055ffe4d7aa32e35c1159e3ecf38df19c7066b7729cf56c52b515->leave($__internal_40ed9c13413055ffe4d7aa32e35c1159e3ecf38df19c7066b7729cf56c52b515_prof);

        
        $__internal_6d109bc6ad56f50fcd5c5fc04d78df71c427d9e3d62e6a36bd3878f87817d9a5->leave($__internal_6d109bc6ad56f50fcd5c5fc04d78df71c427d9e3d62e6a36bd3878f87817d9a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
