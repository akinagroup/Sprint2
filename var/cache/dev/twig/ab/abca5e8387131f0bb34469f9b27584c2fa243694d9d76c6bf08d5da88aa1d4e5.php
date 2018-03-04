<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_7dab70c62c10f9c32fb15beb8ba237762ea337a1369f03b15956369279bd01b6 extends Twig_Template
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
        $__internal_99d2f022ed0da744e9003a07917b5505e2136249c5a78c5a2046cf3edf065247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d2f022ed0da744e9003a07917b5505e2136249c5a78c5a2046cf3edf065247->enter($__internal_99d2f022ed0da744e9003a07917b5505e2136249c5a78c5a2046cf3edf065247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        $__internal_0dce33b68d9b42ceedcb6b1892ef9470d279fa4133580c2d832371e43e0ed15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dce33b68d9b42ceedcb6b1892ef9470d279fa4133580c2d832371e43e0ed15f->enter($__internal_0dce33b68d9b42ceedcb6b1892ef9470d279fa4133580c2d832371e43e0ed15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo ($context["value"] ?? $this->getContext($context, "value"));
        echo "
";
        
        $__internal_99d2f022ed0da744e9003a07917b5505e2136249c5a78c5a2046cf3edf065247->leave($__internal_99d2f022ed0da744e9003a07917b5505e2136249c5a78c5a2046cf3edf065247_prof);

        
        $__internal_0dce33b68d9b42ceedcb6b1892ef9470d279fa4133580c2d832371e43e0ed15f->leave($__internal_0dce33b68d9b42ceedcb6b1892ef9470d279fa4133580c2d832371e43e0ed15f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
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
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_raw.html.twig");
    }
}
