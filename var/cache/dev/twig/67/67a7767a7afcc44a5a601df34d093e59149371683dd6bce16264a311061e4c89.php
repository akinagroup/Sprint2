<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_783f076abfe02d4732a69544eb060b08af6cdc8e259f6a0bac5a848b728cb61f extends Twig_Template
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
        $__internal_504871d275133c248fe9180e54b2f191f6ad6d6bf5f62af626321ca3945f2c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504871d275133c248fe9180e54b2f191f6ad6d6bf5f62af626321ca3945f2c64->enter($__internal_504871d275133c248fe9180e54b2f191f6ad6d6bf5f62af626321ca3945f2c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_28ccead9061513990f83b85346728c9ad8254b8b76debd35b66a50d541b7b9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ccead9061513990f83b85346728c9ad8254b8b76debd35b66a50d541b7b9a5->enter($__internal_28ccead9061513990f83b85346728c9ad8254b8b76debd35b66a50d541b7b9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_504871d275133c248fe9180e54b2f191f6ad6d6bf5f62af626321ca3945f2c64->leave($__internal_504871d275133c248fe9180e54b2f191f6ad6d6bf5f62af626321ca3945f2c64_prof);

        
        $__internal_28ccead9061513990f83b85346728c9ad8254b8b76debd35b66a50d541b7b9a5->leave($__internal_28ccead9061513990f83b85346728c9ad8254b8b76debd35b66a50d541b7b9a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
