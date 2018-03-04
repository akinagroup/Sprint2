<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_60220da87265fed2e73c1e78ece4b56bb83fe8ab2a8f3240f2caab6d3bb0a37d extends Twig_Template
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
        $__internal_3b4212725ef8a7310389f66cbf38198c7f069c9f846a3f1ceee593dcbc738d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4212725ef8a7310389f66cbf38198c7f069c9f846a3f1ceee593dcbc738d7a->enter($__internal_3b4212725ef8a7310389f66cbf38198c7f069c9f846a3f1ceee593dcbc738d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_bf29f9b36bf831a1dcbc500f7d0f2a0f76b8d5a2f774c36c2365e8ecac972b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf29f9b36bf831a1dcbc500f7d0f2a0f76b8d5a2f774c36c2365e8ecac972b4c->enter($__internal_bf29f9b36bf831a1dcbc500f7d0f2a0f76b8d5a2f774c36c2365e8ecac972b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3b4212725ef8a7310389f66cbf38198c7f069c9f846a3f1ceee593dcbc738d7a->leave($__internal_3b4212725ef8a7310389f66cbf38198c7f069c9f846a3f1ceee593dcbc738d7a_prof);

        
        $__internal_bf29f9b36bf831a1dcbc500f7d0f2a0f76b8d5a2f774c36c2365e8ecac972b4c->leave($__internal_bf29f9b36bf831a1dcbc500f7d0f2a0f76b8d5a2f774c36c2365e8ecac972b4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
