<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ac44763d877a4adc3545b3fcfba5e3a1b06a697f515fc493b18b61314ae58694 extends Twig_Template
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
        $__internal_cd490449bdefa3ca37299ffbe4bbc7436877a5f4e70377ba29b21afcad005790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd490449bdefa3ca37299ffbe4bbc7436877a5f4e70377ba29b21afcad005790->enter($__internal_cd490449bdefa3ca37299ffbe4bbc7436877a5f4e70377ba29b21afcad005790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_6a68809058744bd3304ba1aa0bc9f1d4384bb3e554ae3470dbac5daa721dc258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a68809058744bd3304ba1aa0bc9f1d4384bb3e554ae3470dbac5daa721dc258->enter($__internal_6a68809058744bd3304ba1aa0bc9f1d4384bb3e554ae3470dbac5daa721dc258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cd490449bdefa3ca37299ffbe4bbc7436877a5f4e70377ba29b21afcad005790->leave($__internal_cd490449bdefa3ca37299ffbe4bbc7436877a5f4e70377ba29b21afcad005790_prof);

        
        $__internal_6a68809058744bd3304ba1aa0bc9f1d4384bb3e554ae3470dbac5daa721dc258->leave($__internal_6a68809058744bd3304ba1aa0bc9f1d4384bb3e554ae3470dbac5daa721dc258_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
