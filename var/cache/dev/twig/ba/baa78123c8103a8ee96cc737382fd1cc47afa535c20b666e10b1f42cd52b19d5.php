<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0804d3060f7b52fd6756e33096bf0a2113de816daea1c48a5804e9a39c86558d extends Twig_Template
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
        $__internal_cf2fff88f841804d224bc035933e87c743c6905e38256b8e2ea3ef05a570e435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2fff88f841804d224bc035933e87c743c6905e38256b8e2ea3ef05a570e435->enter($__internal_cf2fff88f841804d224bc035933e87c743c6905e38256b8e2ea3ef05a570e435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_bf79c6d40869b4ea3b2a241dd77cd5dec9f3a68ed98808e17c5b0100c17f52c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf79c6d40869b4ea3b2a241dd77cd5dec9f3a68ed98808e17c5b0100c17f52c9->enter($__internal_bf79c6d40869b4ea3b2a241dd77cd5dec9f3a68ed98808e17c5b0100c17f52c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cf2fff88f841804d224bc035933e87c743c6905e38256b8e2ea3ef05a570e435->leave($__internal_cf2fff88f841804d224bc035933e87c743c6905e38256b8e2ea3ef05a570e435_prof);

        
        $__internal_bf79c6d40869b4ea3b2a241dd77cd5dec9f3a68ed98808e17c5b0100c17f52c9->leave($__internal_bf79c6d40869b4ea3b2a241dd77cd5dec9f3a68ed98808e17c5b0100c17f52c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
