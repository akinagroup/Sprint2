<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_aa6d6a46ab6c9fd2188c73acfb587722daa75bb0ecfbee46f3f32a80138c2f9d extends Twig_Template
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
        $__internal_b9a7f16c8e99da1786de88a2b2c42fa10c53c28c02f8b9938de192a13ff45ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a7f16c8e99da1786de88a2b2c42fa10c53c28c02f8b9938de192a13ff45ebc->enter($__internal_b9a7f16c8e99da1786de88a2b2c42fa10c53c28c02f8b9938de192a13ff45ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4acd202c2c7ed8a2f1e4f3b4e3dd6c5f06faea64f297023e9406a693d7f06874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acd202c2c7ed8a2f1e4f3b4e3dd6c5f06faea64f297023e9406a693d7f06874->enter($__internal_4acd202c2c7ed8a2f1e4f3b4e3dd6c5f06faea64f297023e9406a693d7f06874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b9a7f16c8e99da1786de88a2b2c42fa10c53c28c02f8b9938de192a13ff45ebc->leave($__internal_b9a7f16c8e99da1786de88a2b2c42fa10c53c28c02f8b9938de192a13ff45ebc_prof);

        
        $__internal_4acd202c2c7ed8a2f1e4f3b4e3dd6c5f06faea64f297023e9406a693d7f06874->leave($__internal_4acd202c2c7ed8a2f1e4f3b4e3dd6c5f06faea64f297023e9406a693d7f06874_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
