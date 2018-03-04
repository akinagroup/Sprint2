<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2c6b15b79903a986973eb9471626cbd0ab626710872a81efcf66d17b24e09288 extends Twig_Template
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
        $__internal_1cd8d7df21de0663125836db3bfd1d16a1616b10e9703612ece4f1235a5db2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd8d7df21de0663125836db3bfd1d16a1616b10e9703612ece4f1235a5db2a7->enter($__internal_1cd8d7df21de0663125836db3bfd1d16a1616b10e9703612ece4f1235a5db2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2ee7870eaf5ec7e516f6bfd04a73a2f48392daa26ba301d9020660de4afdf88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee7870eaf5ec7e516f6bfd04a73a2f48392daa26ba301d9020660de4afdf88c->enter($__internal_2ee7870eaf5ec7e516f6bfd04a73a2f48392daa26ba301d9020660de4afdf88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1cd8d7df21de0663125836db3bfd1d16a1616b10e9703612ece4f1235a5db2a7->leave($__internal_1cd8d7df21de0663125836db3bfd1d16a1616b10e9703612ece4f1235a5db2a7_prof);

        
        $__internal_2ee7870eaf5ec7e516f6bfd04a73a2f48392daa26ba301d9020660de4afdf88c->leave($__internal_2ee7870eaf5ec7e516f6bfd04a73a2f48392daa26ba301d9020660de4afdf88c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
