<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d2a2752bed110047e84254c187f69bde3971879caa92d6fde3485afca941a698 extends Twig_Template
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
        $__internal_24291efbec789f56dedda377c9d540c5798d4345e9ecf09a51e58ab966021d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24291efbec789f56dedda377c9d540c5798d4345e9ecf09a51e58ab966021d52->enter($__internal_24291efbec789f56dedda377c9d540c5798d4345e9ecf09a51e58ab966021d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9585ecbdfc8036d3e4e375a5b5bcf44a93f0f54ba40818ddfec48f74666fc8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9585ecbdfc8036d3e4e375a5b5bcf44a93f0f54ba40818ddfec48f74666fc8e3->enter($__internal_9585ecbdfc8036d3e4e375a5b5bcf44a93f0f54ba40818ddfec48f74666fc8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_24291efbec789f56dedda377c9d540c5798d4345e9ecf09a51e58ab966021d52->leave($__internal_24291efbec789f56dedda377c9d540c5798d4345e9ecf09a51e58ab966021d52_prof);

        
        $__internal_9585ecbdfc8036d3e4e375a5b5bcf44a93f0f54ba40818ddfec48f74666fc8e3->leave($__internal_9585ecbdfc8036d3e4e375a5b5bcf44a93f0f54ba40818ddfec48f74666fc8e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
