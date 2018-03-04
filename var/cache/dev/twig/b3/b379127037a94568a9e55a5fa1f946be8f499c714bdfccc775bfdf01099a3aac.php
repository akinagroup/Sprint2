<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0fe20f09064f92fa5d658e51e9d268205be4c1d1e4980398df36bba4357854ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c653a8fc6515a6885824ae1859db155b6217980fa8dff569537c42cce46aeae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c653a8fc6515a6885824ae1859db155b6217980fa8dff569537c42cce46aeae->enter($__internal_5c653a8fc6515a6885824ae1859db155b6217980fa8dff569537c42cce46aeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_4aa61bd71566fecf3e70b8b246b3da6d6a6860efc062f00fe3e23dc2dce987df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa61bd71566fecf3e70b8b246b3da6d6a6860efc062f00fe3e23dc2dce987df->enter($__internal_4aa61bd71566fecf3e70b8b246b3da6d6a6860efc062f00fe3e23dc2dce987df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c653a8fc6515a6885824ae1859db155b6217980fa8dff569537c42cce46aeae->leave($__internal_5c653a8fc6515a6885824ae1859db155b6217980fa8dff569537c42cce46aeae_prof);

        
        $__internal_4aa61bd71566fecf3e70b8b246b3da6d6a6860efc062f00fe3e23dc2dce987df->leave($__internal_4aa61bd71566fecf3e70b8b246b3da6d6a6860efc062f00fe3e23dc2dce987df_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1defcc6625230cdaf758cb80e74174f77c036364d2c4f9d650ce7599e079f58a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1defcc6625230cdaf758cb80e74174f77c036364d2c4f9d650ce7599e079f58a->enter($__internal_1defcc6625230cdaf758cb80e74174f77c036364d2c4f9d650ce7599e079f58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7c4e53fe5e8989744b13884ff8fadaa2551bc1eeb2a05ecd60ef5173ca842921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4e53fe5e8989744b13884ff8fadaa2551bc1eeb2a05ecd60ef5173ca842921->enter($__internal_7c4e53fe5e8989744b13884ff8fadaa2551bc1eeb2a05ecd60ef5173ca842921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7c4e53fe5e8989744b13884ff8fadaa2551bc1eeb2a05ecd60ef5173ca842921->leave($__internal_7c4e53fe5e8989744b13884ff8fadaa2551bc1eeb2a05ecd60ef5173ca842921_prof);

        
        $__internal_1defcc6625230cdaf758cb80e74174f77c036364d2c4f9d650ce7599e079f58a->leave($__internal_1defcc6625230cdaf758cb80e74174f77c036364d2c4f9d650ce7599e079f58a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
