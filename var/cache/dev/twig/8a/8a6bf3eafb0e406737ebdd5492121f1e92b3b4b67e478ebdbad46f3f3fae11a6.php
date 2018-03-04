<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_c60a6d7a63935e7007fce600857ee7be0ccacd13a6d966c1c22a99aa49cc3a42 extends Twig_Template
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
        $__internal_7402c2d4e41e92096ec946b458e13d0a72a9d0067117d7cbb99cd49be3a9f0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7402c2d4e41e92096ec946b458e13d0a72a9d0067117d7cbb99cd49be3a9f0e3->enter($__internal_7402c2d4e41e92096ec946b458e13d0a72a9d0067117d7cbb99cd49be3a9f0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_ac78e79a89b9125b93cf8c517d727abe8028a9d1719eeca6d8f0922edab89534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac78e79a89b9125b93cf8c517d727abe8028a9d1719eeca6d8f0922edab89534->enter($__internal_ac78e79a89b9125b93cf8c517d727abe8028a9d1719eeca6d8f0922edab89534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_7402c2d4e41e92096ec946b458e13d0a72a9d0067117d7cbb99cd49be3a9f0e3->leave($__internal_7402c2d4e41e92096ec946b458e13d0a72a9d0067117d7cbb99cd49be3a9f0e3_prof);

        
        $__internal_ac78e79a89b9125b93cf8c517d727abe8028a9d1719eeca6d8f0922edab89534->leave($__internal_ac78e79a89b9125b93cf8c517d727abe8028a9d1719eeca6d8f0922edab89534_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
