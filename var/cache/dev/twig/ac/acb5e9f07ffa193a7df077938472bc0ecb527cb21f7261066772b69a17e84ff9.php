<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_46ada882147b85e5bab64a2d34ef2b8562b7f4dad5c9bd8484e56effbf18c503 extends Twig_Template
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
        $__internal_82e8fdadcc18603e34b5a79d602bc598b6b45767f13e89b810072536e4ae0d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e8fdadcc18603e34b5a79d602bc598b6b45767f13e89b810072536e4ae0d14->enter($__internal_82e8fdadcc18603e34b5a79d602bc598b6b45767f13e89b810072536e4ae0d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_74c894f6ccdb63c2d1b71664d09da61ebefc3d8d2b3a043fccb3ccb1e2494092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c894f6ccdb63c2d1b71664d09da61ebefc3d8d2b3a043fccb3ccb1e2494092->enter($__internal_74c894f6ccdb63c2d1b71664d09da61ebefc3d8d2b3a043fccb3ccb1e2494092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_82e8fdadcc18603e34b5a79d602bc598b6b45767f13e89b810072536e4ae0d14->leave($__internal_82e8fdadcc18603e34b5a79d602bc598b6b45767f13e89b810072536e4ae0d14_prof);

        
        $__internal_74c894f6ccdb63c2d1b71664d09da61ebefc3d8d2b3a043fccb3ccb1e2494092->leave($__internal_74c894f6ccdb63c2d1b71664d09da61ebefc3d8d2b3a043fccb3ccb1e2494092_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
