<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_38e1217776ad2fbbb6604ab104fc8ab3fe341eb8604d8906e6416bebd42ce6ea extends Twig_Template
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
        $__internal_650fcdef44b3c4d676d764388b10941bda9ed116073236c528ed9e9fc3d8f812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650fcdef44b3c4d676d764388b10941bda9ed116073236c528ed9e9fc3d8f812->enter($__internal_650fcdef44b3c4d676d764388b10941bda9ed116073236c528ed9e9fc3d8f812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a063fe5581dcbb6ad680056c0f8e28b6bd2e8373f93767abc01555547232f785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a063fe5581dcbb6ad680056c0f8e28b6bd2e8373f93767abc01555547232f785->enter($__internal_a063fe5581dcbb6ad680056c0f8e28b6bd2e8373f93767abc01555547232f785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_650fcdef44b3c4d676d764388b10941bda9ed116073236c528ed9e9fc3d8f812->leave($__internal_650fcdef44b3c4d676d764388b10941bda9ed116073236c528ed9e9fc3d8f812_prof);

        
        $__internal_a063fe5581dcbb6ad680056c0f8e28b6bd2e8373f93767abc01555547232f785->leave($__internal_a063fe5581dcbb6ad680056c0f8e28b6bd2e8373f93767abc01555547232f785_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
