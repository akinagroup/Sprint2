<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_5bffafef06f91c3f4b0bbbf8c83419acd8f8c109d28933c6891c1c9face646a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_523ea7b50d1023668518b78bb2a0e77691687bcb49c8202a60c9bd08dbf39d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523ea7b50d1023668518b78bb2a0e77691687bcb49c8202a60c9bd08dbf39d9b->enter($__internal_523ea7b50d1023668518b78bb2a0e77691687bcb49c8202a60c9bd08dbf39d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_971f8378f6c719306a2f0de335ef96b19655b4412eac032cf9f00b69d5904a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971f8378f6c719306a2f0de335ef96b19655b4412eac032cf9f00b69d5904a0f->enter($__internal_971f8378f6c719306a2f0de335ef96b19655b4412eac032cf9f00b69d5904a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"))) : (""));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_523ea7b50d1023668518b78bb2a0e77691687bcb49c8202a60c9bd08dbf39d9b->leave($__internal_523ea7b50d1023668518b78bb2a0e77691687bcb49c8202a60c9bd08dbf39d9b_prof);

        
        $__internal_971f8378f6c719306a2f0de335ef96b19655b4412eac032cf9f00b69d5904a0f->leave($__internal_971f8378f6c719306a2f0de335ef96b19655b4412eac032cf9f00b69d5904a0f_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_3f0432f898bbed971c480dbf2a9e5748b18aa02585b496b4cd24da9bd3212b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0432f898bbed971c480dbf2a9e5748b18aa02585b496b4cd24da9bd3212b92->enter($__internal_3f0432f898bbed971c480dbf2a9e5748b18aa02585b496b4cd24da9bd3212b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_c11670abc08fa895304b8f8bb240b6fc34cc8037fd5643082a06a94b1c5a318f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11670abc08fa895304b8f8bb240b6fc34cc8037fd5643082a06a94b1c5a318f->enter($__internal_c11670abc08fa895304b8f8bb240b6fc34cc8037fd5643082a06a94b1c5a318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_c11670abc08fa895304b8f8bb240b6fc34cc8037fd5643082a06a94b1c5a318f->leave($__internal_c11670abc08fa895304b8f8bb240b6fc34cc8037fd5643082a06a94b1c5a318f_prof);

        
        $__internal_3f0432f898bbed971c480dbf2a9e5748b18aa02585b496b4cd24da9bd3212b92->leave($__internal_3f0432f898bbed971c480dbf2a9e5748b18aa02585b496b4cd24da9bd3212b92_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9481d6a7f26a016b03388d00343f78f912656790513da48d06b2b68e4f26ace7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9481d6a7f26a016b03388d00343f78f912656790513da48d06b2b68e4f26ace7->enter($__internal_9481d6a7f26a016b03388d00343f78f912656790513da48d06b2b68e4f26ace7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_a2fb8da7685a57ad592ad3d16d470c3e9fcb53c14e4daa210bb727b20f81669e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fb8da7685a57ad592ad3d16d470c3e9fcb53c14e4daa210bb727b20f81669e->enter($__internal_a2fb8da7685a57ad592ad3d16d470c3e9fcb53c14e4daa210bb727b20f81669e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_a2fb8da7685a57ad592ad3d16d470c3e9fcb53c14e4daa210bb727b20f81669e->leave($__internal_a2fb8da7685a57ad592ad3d16d470c3e9fcb53c14e4daa210bb727b20f81669e_prof);

        
        $__internal_9481d6a7f26a016b03388d00343f78f912656790513da48d06b2b68e4f26ace7->leave($__internal_9481d6a7f26a016b03388d00343f78f912656790513da48d06b2b68e4f26ace7_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_28666b0c987366858775b5c729485274e38240b2bfbb11ff92c51e4d3fc2b446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28666b0c987366858775b5c729485274e38240b2bfbb11ff92c51e4d3fc2b446->enter($__internal_28666b0c987366858775b5c729485274e38240b2bfbb11ff92c51e4d3fc2b446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0563aaac6103fce6f99093fbd334a9555e44936a1992115a0b1ada2e013176dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0563aaac6103fce6f99093fbd334a9555e44936a1992115a0b1ada2e013176dc->enter($__internal_0563aaac6103fce6f99093fbd334a9555e44936a1992115a0b1ada2e013176dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_0563aaac6103fce6f99093fbd334a9555e44936a1992115a0b1ada2e013176dc->leave($__internal_0563aaac6103fce6f99093fbd334a9555e44936a1992115a0b1ada2e013176dc_prof);

        
        $__internal_28666b0c987366858775b5c729485274e38240b2bfbb11ff92c51e4d3fc2b446->leave($__internal_28666b0c987366858775b5c729485274e38240b2bfbb11ff92c51e4d3fc2b446_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = app.request.query.get('entity') ? easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/exception.html.twig");
    }
}
