<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9703befe48f5b980d2812c6e5e4080f6e5a19f07317488aea6aa7411e0325466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_339d0a9c91d4751a0f04f986da1e96f53470a83364759c293d840262f9bdc282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339d0a9c91d4751a0f04f986da1e96f53470a83364759c293d840262f9bdc282->enter($__internal_339d0a9c91d4751a0f04f986da1e96f53470a83364759c293d840262f9bdc282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_90b7ec6d72eccc554140913eca7bef73ae6b73aa6a8581ca2a8c2a3f1edaa08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b7ec6d72eccc554140913eca7bef73ae6b73aa6a8581ca2a8c2a3f1edaa08c->enter($__internal_90b7ec6d72eccc554140913eca7bef73ae6b73aa6a8581ca2a8c2a3f1edaa08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_339d0a9c91d4751a0f04f986da1e96f53470a83364759c293d840262f9bdc282->leave($__internal_339d0a9c91d4751a0f04f986da1e96f53470a83364759c293d840262f9bdc282_prof);

        
        $__internal_90b7ec6d72eccc554140913eca7bef73ae6b73aa6a8581ca2a8c2a3f1edaa08c->leave($__internal_90b7ec6d72eccc554140913eca7bef73ae6b73aa6a8581ca2a8c2a3f1edaa08c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_68332cdca0f51626409b6ca5b5d18dac5f6ad8c3ef44b36133135de14f194ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68332cdca0f51626409b6ca5b5d18dac5f6ad8c3ef44b36133135de14f194ad9->enter($__internal_68332cdca0f51626409b6ca5b5d18dac5f6ad8c3ef44b36133135de14f194ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_abb56a9235919e273643f751ea81e221fc2dc71ab1722cb1788b8eab94077855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb56a9235919e273643f751ea81e221fc2dc71ab1722cb1788b8eab94077855->enter($__internal_abb56a9235919e273643f751ea81e221fc2dc71ab1722cb1788b8eab94077855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_abb56a9235919e273643f751ea81e221fc2dc71ab1722cb1788b8eab94077855->leave($__internal_abb56a9235919e273643f751ea81e221fc2dc71ab1722cb1788b8eab94077855_prof);

        
        $__internal_68332cdca0f51626409b6ca5b5d18dac5f6ad8c3ef44b36133135de14f194ad9->leave($__internal_68332cdca0f51626409b6ca5b5d18dac5f6ad8c3ef44b36133135de14f194ad9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1bab5e965b2ba5f8fa6ae24aee494695ce89cc1f9d6cf0df8be5db66fcfd7d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bab5e965b2ba5f8fa6ae24aee494695ce89cc1f9d6cf0df8be5db66fcfd7d6d->enter($__internal_1bab5e965b2ba5f8fa6ae24aee494695ce89cc1f9d6cf0df8be5db66fcfd7d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_08fc1219be168b5bdf36e8d3d44b39e225383bb315d1beafea70900e8c9c7b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fc1219be168b5bdf36e8d3d44b39e225383bb315d1beafea70900e8c9c7b1c->enter($__internal_08fc1219be168b5bdf36e8d3d44b39e225383bb315d1beafea70900e8c9c7b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_08fc1219be168b5bdf36e8d3d44b39e225383bb315d1beafea70900e8c9c7b1c->leave($__internal_08fc1219be168b5bdf36e8d3d44b39e225383bb315d1beafea70900e8c9c7b1c_prof);

        
        $__internal_1bab5e965b2ba5f8fa6ae24aee494695ce89cc1f9d6cf0df8be5db66fcfd7d6d->leave($__internal_1bab5e965b2ba5f8fa6ae24aee494695ce89cc1f9d6cf0df8be5db66fcfd7d6d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_261a96b09e9ae3375d672455b706535bc263984e7051cca93d83da94ffd4ea3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261a96b09e9ae3375d672455b706535bc263984e7051cca93d83da94ffd4ea3d->enter($__internal_261a96b09e9ae3375d672455b706535bc263984e7051cca93d83da94ffd4ea3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c21edae3b817355d140fa61ecf1c23d0eea7f7b3124f8bd216b5362108653630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21edae3b817355d140fa61ecf1c23d0eea7f7b3124f8bd216b5362108653630->enter($__internal_c21edae3b817355d140fa61ecf1c23d0eea7f7b3124f8bd216b5362108653630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c21edae3b817355d140fa61ecf1c23d0eea7f7b3124f8bd216b5362108653630->leave($__internal_c21edae3b817355d140fa61ecf1c23d0eea7f7b3124f8bd216b5362108653630_prof);

        
        $__internal_261a96b09e9ae3375d672455b706535bc263984e7051cca93d83da94ffd4ea3d->leave($__internal_261a96b09e9ae3375d672455b706535bc263984e7051cca93d83da94ffd4ea3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
