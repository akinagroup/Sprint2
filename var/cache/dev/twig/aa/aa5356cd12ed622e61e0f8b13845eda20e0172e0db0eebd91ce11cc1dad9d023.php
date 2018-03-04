<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a8354e448960c93b496bb7163f3cd5cedc8399cf5f84ebc7822cfcfaec61d192 extends Twig_Template
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
        $__internal_a7375d635241b03c18401c64ee292b9a652b1f807b45efd22914e1fbe70708b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7375d635241b03c18401c64ee292b9a652b1f807b45efd22914e1fbe70708b5->enter($__internal_a7375d635241b03c18401c64ee292b9a652b1f807b45efd22914e1fbe70708b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_be2150a015f68dbd53524b8490b10357a11551ffd8490ae0da364af61a098e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2150a015f68dbd53524b8490b10357a11551ffd8490ae0da364af61a098e21->enter($__internal_be2150a015f68dbd53524b8490b10357a11551ffd8490ae0da364af61a098e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a7375d635241b03c18401c64ee292b9a652b1f807b45efd22914e1fbe70708b5->leave($__internal_a7375d635241b03c18401c64ee292b9a652b1f807b45efd22914e1fbe70708b5_prof);

        
        $__internal_be2150a015f68dbd53524b8490b10357a11551ffd8490ae0da364af61a098e21->leave($__internal_be2150a015f68dbd53524b8490b10357a11551ffd8490ae0da364af61a098e21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
