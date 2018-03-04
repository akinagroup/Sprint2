<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_8da2ce6aee6055ad81089c38890c34b10643124d719d6da3108b7bc205f011e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f437fd46b82cb3815f67ae90d8e407d36f56a60a58b94c574b3f14b0b501fe8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f437fd46b82cb3815f67ae90d8e407d36f56a60a58b94c574b3f14b0b501fe8d->enter($__internal_f437fd46b82cb3815f67ae90d8e407d36f56a60a58b94c574b3f14b0b501fe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7d9d59b97d865f2e63212e6d26a2ec309bc58d148fee44ad2f8b387c62b130f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9d59b97d865f2e63212e6d26a2ec309bc58d148fee44ad2f8b387c62b130f3->enter($__internal_7d9d59b97d865f2e63212e6d26a2ec309bc58d148fee44ad2f8b387c62b130f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f437fd46b82cb3815f67ae90d8e407d36f56a60a58b94c574b3f14b0b501fe8d->leave($__internal_f437fd46b82cb3815f67ae90d8e407d36f56a60a58b94c574b3f14b0b501fe8d_prof);

        
        $__internal_7d9d59b97d865f2e63212e6d26a2ec309bc58d148fee44ad2f8b387c62b130f3->leave($__internal_7d9d59b97d865f2e63212e6d26a2ec309bc58d148fee44ad2f8b387c62b130f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c01ab6a30479cd9ebf98d6fc386c039fafa97ba6c384fd9e3b8ffb49ccec3d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01ab6a30479cd9ebf98d6fc386c039fafa97ba6c384fd9e3b8ffb49ccec3d9b->enter($__internal_c01ab6a30479cd9ebf98d6fc386c039fafa97ba6c384fd9e3b8ffb49ccec3d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_82e6867e92806a058857e35ee1e25071d04407349488459e24fe233f61e1ae22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e6867e92806a058857e35ee1e25071d04407349488459e24fe233f61e1ae22->enter($__internal_82e6867e92806a058857e35ee1e25071d04407349488459e24fe233f61e1ae22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_82e6867e92806a058857e35ee1e25071d04407349488459e24fe233f61e1ae22->leave($__internal_82e6867e92806a058857e35ee1e25071d04407349488459e24fe233f61e1ae22_prof);

        
        $__internal_c01ab6a30479cd9ebf98d6fc386c039fafa97ba6c384fd9e3b8ffb49ccec3d9b->leave($__internal_c01ab6a30479cd9ebf98d6fc386c039fafa97ba6c384fd9e3b8ffb49ccec3d9b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_23a5765e17e08c7fb13900783552265793f52c054dcd8f3fb4ffc988246f1cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a5765e17e08c7fb13900783552265793f52c054dcd8f3fb4ffc988246f1cf7->enter($__internal_23a5765e17e08c7fb13900783552265793f52c054dcd8f3fb4ffc988246f1cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43a77cbbb0dc10f36931f528ce57bb4eb1c997452c9141ab9a1169ef66e65ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a77cbbb0dc10f36931f528ce57bb4eb1c997452c9141ab9a1169ef66e65ba5->enter($__internal_43a77cbbb0dc10f36931f528ce57bb4eb1c997452c9141ab9a1169ef66e65ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_43a77cbbb0dc10f36931f528ce57bb4eb1c997452c9141ab9a1169ef66e65ba5->leave($__internal_43a77cbbb0dc10f36931f528ce57bb4eb1c997452c9141ab9a1169ef66e65ba5_prof);

        
        $__internal_23a5765e17e08c7fb13900783552265793f52c054dcd8f3fb4ffc988246f1cf7->leave($__internal_23a5765e17e08c7fb13900783552265793f52c054dcd8f3fb4ffc988246f1cf7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
