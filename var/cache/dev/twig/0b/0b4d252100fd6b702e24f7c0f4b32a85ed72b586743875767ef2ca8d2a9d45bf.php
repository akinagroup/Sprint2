<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b702744f701c8ce1707062fca683449962710fd61b03b4dc3427879e6c382668 extends Twig_Template
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
        $__internal_ae9f76e0ac28acb70fc1ef956c7114b677c3031a73580fb820d1247089a195da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9f76e0ac28acb70fc1ef956c7114b677c3031a73580fb820d1247089a195da->enter($__internal_ae9f76e0ac28acb70fc1ef956c7114b677c3031a73580fb820d1247089a195da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e48e36941c8b7660a1355a9bbccf1f96813c21f5ce6e87e05328c1c52a129b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48e36941c8b7660a1355a9bbccf1f96813c21f5ce6e87e05328c1c52a129b6b->enter($__internal_e48e36941c8b7660a1355a9bbccf1f96813c21f5ce6e87e05328c1c52a129b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ae9f76e0ac28acb70fc1ef956c7114b677c3031a73580fb820d1247089a195da->leave($__internal_ae9f76e0ac28acb70fc1ef956c7114b677c3031a73580fb820d1247089a195da_prof);

        
        $__internal_e48e36941c8b7660a1355a9bbccf1f96813c21f5ce6e87e05328c1c52a129b6b->leave($__internal_e48e36941c8b7660a1355a9bbccf1f96813c21f5ce6e87e05328c1c52a129b6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
