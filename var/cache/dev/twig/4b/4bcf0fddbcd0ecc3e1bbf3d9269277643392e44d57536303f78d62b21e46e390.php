<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_245a2614aece07a5cbc571ebdbb2778c4352e98d2b979660260ab76b5ee7c45a extends Twig_Template
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
        $__internal_31c4288ba74e7510cf6a427c165f768850216a240868cbda078da61073d07b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c4288ba74e7510cf6a427c165f768850216a240868cbda078da61073d07b0d->enter($__internal_31c4288ba74e7510cf6a427c165f768850216a240868cbda078da61073d07b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_afede418f2eecff9af910e349a7cf98c65dcace9917c90ade18020591310a5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afede418f2eecff9af910e349a7cf98c65dcace9917c90ade18020591310a5de->enter($__internal_afede418f2eecff9af910e349a7cf98c65dcace9917c90ade18020591310a5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_31c4288ba74e7510cf6a427c165f768850216a240868cbda078da61073d07b0d->leave($__internal_31c4288ba74e7510cf6a427c165f768850216a240868cbda078da61073d07b0d_prof);

        
        $__internal_afede418f2eecff9af910e349a7cf98c65dcace9917c90ade18020591310a5de->leave($__internal_afede418f2eecff9af910e349a7cf98c65dcace9917c90ade18020591310a5de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
