<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d2a27e050786ae0f5d97a6e780861fe9f260066d91c99a307e863f0d766e5a37 extends Twig_Template
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
        $__internal_9213cb6d1933dc3d874119a9120f8819d26822efec9d3ccd03f9e75b31e59c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9213cb6d1933dc3d874119a9120f8819d26822efec9d3ccd03f9e75b31e59c21->enter($__internal_9213cb6d1933dc3d874119a9120f8819d26822efec9d3ccd03f9e75b31e59c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7b660f506fc4ef76cc92354f63c671944800cf758d838dc3f8600c2903402f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b660f506fc4ef76cc92354f63c671944800cf758d838dc3f8600c2903402f84->enter($__internal_7b660f506fc4ef76cc92354f63c671944800cf758d838dc3f8600c2903402f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9213cb6d1933dc3d874119a9120f8819d26822efec9d3ccd03f9e75b31e59c21->leave($__internal_9213cb6d1933dc3d874119a9120f8819d26822efec9d3ccd03f9e75b31e59c21_prof);

        
        $__internal_7b660f506fc4ef76cc92354f63c671944800cf758d838dc3f8600c2903402f84->leave($__internal_7b660f506fc4ef76cc92354f63c671944800cf758d838dc3f8600c2903402f84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
