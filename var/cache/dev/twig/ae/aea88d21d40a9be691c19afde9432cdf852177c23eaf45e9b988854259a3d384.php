<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1d88e3f7a9ff7a5e84313546984b85079c7d48fd2721bc0d6b170daffe0f7044 extends Twig_Template
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
        $__internal_4d5e84bd0fa92fd6cccf815443a36ef067b74d8d80788e8110083b5890273288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5e84bd0fa92fd6cccf815443a36ef067b74d8d80788e8110083b5890273288->enter($__internal_4d5e84bd0fa92fd6cccf815443a36ef067b74d8d80788e8110083b5890273288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4cf6d77ceeea6e69b0257def204a29ee0b3b47d6f6b1f4ed59309bdebdf93225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf6d77ceeea6e69b0257def204a29ee0b3b47d6f6b1f4ed59309bdebdf93225->enter($__internal_4cf6d77ceeea6e69b0257def204a29ee0b3b47d6f6b1f4ed59309bdebdf93225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4d5e84bd0fa92fd6cccf815443a36ef067b74d8d80788e8110083b5890273288->leave($__internal_4d5e84bd0fa92fd6cccf815443a36ef067b74d8d80788e8110083b5890273288_prof);

        
        $__internal_4cf6d77ceeea6e69b0257def204a29ee0b3b47d6f6b1f4ed59309bdebdf93225->leave($__internal_4cf6d77ceeea6e69b0257def204a29ee0b3b47d6f6b1f4ed59309bdebdf93225_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
