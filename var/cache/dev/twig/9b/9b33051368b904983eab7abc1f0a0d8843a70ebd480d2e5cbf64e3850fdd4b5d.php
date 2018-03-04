<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3f29b116b7b2d5d49c2926a6692b507519c874051a9360e096285a33ced6b068 extends Twig_Template
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
        $__internal_03ee12e807a5a190d221025372ed2240f3b68664d29bd1c1d8a902bff4f914b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ee12e807a5a190d221025372ed2240f3b68664d29bd1c1d8a902bff4f914b8->enter($__internal_03ee12e807a5a190d221025372ed2240f3b68664d29bd1c1d8a902bff4f914b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9b72988c648813c0b73704a8ff6cff6e28e9a13f06e8b8e947883515fb9ec737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b72988c648813c0b73704a8ff6cff6e28e9a13f06e8b8e947883515fb9ec737->enter($__internal_9b72988c648813c0b73704a8ff6cff6e28e9a13f06e8b8e947883515fb9ec737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_03ee12e807a5a190d221025372ed2240f3b68664d29bd1c1d8a902bff4f914b8->leave($__internal_03ee12e807a5a190d221025372ed2240f3b68664d29bd1c1d8a902bff4f914b8_prof);

        
        $__internal_9b72988c648813c0b73704a8ff6cff6e28e9a13f06e8b8e947883515fb9ec737->leave($__internal_9b72988c648813c0b73704a8ff6cff6e28e9a13f06e8b8e947883515fb9ec737_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
