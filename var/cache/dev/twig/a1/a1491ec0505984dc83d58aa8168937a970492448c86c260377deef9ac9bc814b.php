<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9cd85d7422cba5b66c6349eb5e6c25f638e6f1ac6d683a37a946119eda7a8ec1 extends Twig_Template
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
        $__internal_1e785a464aeec5421b857ba5868c4d85ad1b7a53cec30b24a582cd4292510f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e785a464aeec5421b857ba5868c4d85ad1b7a53cec30b24a582cd4292510f95->enter($__internal_1e785a464aeec5421b857ba5868c4d85ad1b7a53cec30b24a582cd4292510f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_76f78eff80a362c6c2c100cc03c4cf97c634c0829548ea5bf36d0535d4a5b7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f78eff80a362c6c2c100cc03c4cf97c634c0829548ea5bf36d0535d4a5b7d5->enter($__internal_76f78eff80a362c6c2c100cc03c4cf97c634c0829548ea5bf36d0535d4a5b7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1e785a464aeec5421b857ba5868c4d85ad1b7a53cec30b24a582cd4292510f95->leave($__internal_1e785a464aeec5421b857ba5868c4d85ad1b7a53cec30b24a582cd4292510f95_prof);

        
        $__internal_76f78eff80a362c6c2c100cc03c4cf97c634c0829548ea5bf36d0535d4a5b7d5->leave($__internal_76f78eff80a362c6c2c100cc03c4cf97c634c0829548ea5bf36d0535d4a5b7d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
