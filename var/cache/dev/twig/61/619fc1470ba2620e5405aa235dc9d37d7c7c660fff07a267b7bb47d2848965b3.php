<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5ce3fea27167d9a079d8defbf064b617b7c44794ecde80242744b0159a2c515f extends Twig_Template
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
        $__internal_8f7003bf85760e13a28657715b8b0a6a8dcd8053b4568872cbfc13049e4d8026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7003bf85760e13a28657715b8b0a6a8dcd8053b4568872cbfc13049e4d8026->enter($__internal_8f7003bf85760e13a28657715b8b0a6a8dcd8053b4568872cbfc13049e4d8026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_be8437e8999517c9fd6e354ef3e4045ef069f0d767c69c590cccab52b0561117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8437e8999517c9fd6e354ef3e4045ef069f0d767c69c590cccab52b0561117->enter($__internal_be8437e8999517c9fd6e354ef3e4045ef069f0d767c69c590cccab52b0561117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8f7003bf85760e13a28657715b8b0a6a8dcd8053b4568872cbfc13049e4d8026->leave($__internal_8f7003bf85760e13a28657715b8b0a6a8dcd8053b4568872cbfc13049e4d8026_prof);

        
        $__internal_be8437e8999517c9fd6e354ef3e4045ef069f0d767c69c590cccab52b0561117->leave($__internal_be8437e8999517c9fd6e354ef3e4045ef069f0d767c69c590cccab52b0561117_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
