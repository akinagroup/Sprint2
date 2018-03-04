<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_cb8480f1b5da76c99cc0d8576db14f300481ceaf6db6832402aaad7fd92d0dce extends Twig_Template
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
        $__internal_631bd17d0ece26995589757500a843f4105a9f69724f309f5df254a36e343c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631bd17d0ece26995589757500a843f4105a9f69724f309f5df254a36e343c5a->enter($__internal_631bd17d0ece26995589757500a843f4105a9f69724f309f5df254a36e343c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_2b50d413099c12e6769830b1493f575c095d9323d05b76dba9c06ebd4d85d3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b50d413099c12e6769830b1493f575c095d9323d05b76dba9c06ebd4d85d3ed->enter($__internal_2b50d413099c12e6769830b1493f575c095d9323d05b76dba9c06ebd4d85d3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_631bd17d0ece26995589757500a843f4105a9f69724f309f5df254a36e343c5a->leave($__internal_631bd17d0ece26995589757500a843f4105a9f69724f309f5df254a36e343c5a_prof);

        
        $__internal_2b50d413099c12e6769830b1493f575c095d9323d05b76dba9c06ebd4d85d3ed->leave($__internal_2b50d413099c12e6769830b1493f575c095d9323d05b76dba9c06ebd4d85d3ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
