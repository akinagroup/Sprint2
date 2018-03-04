<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7633b64ad65263d03089075fb24159ec362f37b0c2b73e6ce98407ed15d0926e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58e3d5f9f7f13ce310cf236f44ec305cc269b7c0f2578bee71f927f9a022c13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e3d5f9f7f13ce310cf236f44ec305cc269b7c0f2578bee71f927f9a022c13e->enter($__internal_58e3d5f9f7f13ce310cf236f44ec305cc269b7c0f2578bee71f927f9a022c13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_69b79f75515d8bf22bafdd34a962a05b000ed83ca65736d05926de691dc019a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b79f75515d8bf22bafdd34a962a05b000ed83ca65736d05926de691dc019a4->enter($__internal_69b79f75515d8bf22bafdd34a962a05b000ed83ca65736d05926de691dc019a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58e3d5f9f7f13ce310cf236f44ec305cc269b7c0f2578bee71f927f9a022c13e->leave($__internal_58e3d5f9f7f13ce310cf236f44ec305cc269b7c0f2578bee71f927f9a022c13e_prof);

        
        $__internal_69b79f75515d8bf22bafdd34a962a05b000ed83ca65736d05926de691dc019a4->leave($__internal_69b79f75515d8bf22bafdd34a962a05b000ed83ca65736d05926de691dc019a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b06f43a7b9eff54045849afd9b8333e1f4946db690c544063df7d8c04f1162e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06f43a7b9eff54045849afd9b8333e1f4946db690c544063df7d8c04f1162e7->enter($__internal_b06f43a7b9eff54045849afd9b8333e1f4946db690c544063df7d8c04f1162e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_922282db0f5185cd9714849909d646bbdeb6aec49e2ff2280cc3c5f91afcf8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922282db0f5185cd9714849909d646bbdeb6aec49e2ff2280cc3c5f91afcf8ed->enter($__internal_922282db0f5185cd9714849909d646bbdeb6aec49e2ff2280cc3c5f91afcf8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_922282db0f5185cd9714849909d646bbdeb6aec49e2ff2280cc3c5f91afcf8ed->leave($__internal_922282db0f5185cd9714849909d646bbdeb6aec49e2ff2280cc3c5f91afcf8ed_prof);

        
        $__internal_b06f43a7b9eff54045849afd9b8333e1f4946db690c544063df7d8c04f1162e7->leave($__internal_b06f43a7b9eff54045849afd9b8333e1f4946db690c544063df7d8c04f1162e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b145de62ea47a3036dede0f6b67450d9da83376b665e2a77676ce9a0b9ffed15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b145de62ea47a3036dede0f6b67450d9da83376b665e2a77676ce9a0b9ffed15->enter($__internal_b145de62ea47a3036dede0f6b67450d9da83376b665e2a77676ce9a0b9ffed15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a3dbc8b0550db2044e86ec8b7b256df07f04ff46969a04502c1967aae1b6fbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3dbc8b0550db2044e86ec8b7b256df07f04ff46969a04502c1967aae1b6fbc4->enter($__internal_a3dbc8b0550db2044e86ec8b7b256df07f04ff46969a04502c1967aae1b6fbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a3dbc8b0550db2044e86ec8b7b256df07f04ff46969a04502c1967aae1b6fbc4->leave($__internal_a3dbc8b0550db2044e86ec8b7b256df07f04ff46969a04502c1967aae1b6fbc4_prof);

        
        $__internal_b145de62ea47a3036dede0f6b67450d9da83376b665e2a77676ce9a0b9ffed15->leave($__internal_b145de62ea47a3036dede0f6b67450d9da83376b665e2a77676ce9a0b9ffed15_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ce48a94bf8d4f31e547fd043b20e23f01d1075c35209486431dfe4604782102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce48a94bf8d4f31e547fd043b20e23f01d1075c35209486431dfe4604782102->enter($__internal_5ce48a94bf8d4f31e547fd043b20e23f01d1075c35209486431dfe4604782102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_19f036a436ea435c5262a22c1559cc6dc15c0a338c2d1a1775e7a148ce6bf495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f036a436ea435c5262a22c1559cc6dc15c0a338c2d1a1775e7a148ce6bf495->enter($__internal_19f036a436ea435c5262a22c1559cc6dc15c0a338c2d1a1775e7a148ce6bf495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_19f036a436ea435c5262a22c1559cc6dc15c0a338c2d1a1775e7a148ce6bf495->leave($__internal_19f036a436ea435c5262a22c1559cc6dc15c0a338c2d1a1775e7a148ce6bf495_prof);

        
        $__internal_5ce48a94bf8d4f31e547fd043b20e23f01d1075c35209486431dfe4604782102->leave($__internal_5ce48a94bf8d4f31e547fd043b20e23f01d1075c35209486431dfe4604782102_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
