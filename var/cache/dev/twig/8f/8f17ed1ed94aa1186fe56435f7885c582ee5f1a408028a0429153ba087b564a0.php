<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6916a12985da089da77e650094816988845de06d5c0da9944807ad405763c39a extends Twig_Template
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
        $__internal_e291b71441c7bc67d482bf057f5237298ceb5ea793fea3957cc22f91d042adc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e291b71441c7bc67d482bf057f5237298ceb5ea793fea3957cc22f91d042adc1->enter($__internal_e291b71441c7bc67d482bf057f5237298ceb5ea793fea3957cc22f91d042adc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_84e3fa159e7d66542417f9240f3f396092f567a541c5cae351baddcda169aea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e3fa159e7d66542417f9240f3f396092f567a541c5cae351baddcda169aea3->enter($__internal_84e3fa159e7d66542417f9240f3f396092f567a541c5cae351baddcda169aea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e291b71441c7bc67d482bf057f5237298ceb5ea793fea3957cc22f91d042adc1->leave($__internal_e291b71441c7bc67d482bf057f5237298ceb5ea793fea3957cc22f91d042adc1_prof);

        
        $__internal_84e3fa159e7d66542417f9240f3f396092f567a541c5cae351baddcda169aea3->leave($__internal_84e3fa159e7d66542417f9240f3f396092f567a541c5cae351baddcda169aea3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
