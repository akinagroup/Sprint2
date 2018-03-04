<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_de7803d3253888d31d9f500f35e372f6bc1b89ffd9be5f084bf1982cb8390727 extends Twig_Template
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
        $__internal_6ae6b8054e74bc09a1506a007d3a3b697b1eac373777b9eae7120d415ef84e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae6b8054e74bc09a1506a007d3a3b697b1eac373777b9eae7120d415ef84e99->enter($__internal_6ae6b8054e74bc09a1506a007d3a3b697b1eac373777b9eae7120d415ef84e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_94fad7c5e365239196d2dcf90d698b94aa68d8488a6dbf6f8825201431da1a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fad7c5e365239196d2dcf90d698b94aa68d8488a6dbf6f8825201431da1a93->enter($__internal_94fad7c5e365239196d2dcf90d698b94aa68d8488a6dbf6f8825201431da1a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_6ae6b8054e74bc09a1506a007d3a3b697b1eac373777b9eae7120d415ef84e99->leave($__internal_6ae6b8054e74bc09a1506a007d3a3b697b1eac373777b9eae7120d415ef84e99_prof);

        
        $__internal_94fad7c5e365239196d2dcf90d698b94aa68d8488a6dbf6f8825201431da1a93->leave($__internal_94fad7c5e365239196d2dcf90d698b94aa68d8488a6dbf6f8825201431da1a93_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_time.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_time.html.twig");
    }
}
