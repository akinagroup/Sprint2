<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_4dd53c250c18b18037ce0c0303b219eb9eb5a4071007dbe0f216b2d122cb0477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6710df8fc78f88dc79f64ed6d5ffdce3f4032a9a8ef9a9eb825f9e5b5c177cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6710df8fc78f88dc79f64ed6d5ffdce3f4032a9a8ef9a9eb825f9e5b5c177cde->enter($__internal_6710df8fc78f88dc79f64ed6d5ffdce3f4032a9a8ef9a9eb825f9e5b5c177cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_98040a0b2b7fc27b6ac12d94065d420d917c3a3d66cf10363c5bf322c73a5dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98040a0b2b7fc27b6ac12d94065d420d917c3a3d66cf10363c5bf322c73a5dc6->enter($__internal_98040a0b2b7fc27b6ac12d94065d420d917c3a3d66cf10363c5bf322c73a5dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_05d30a976016a829b548f5fff9da99ae8d5aca11fd5d248f483db01e83beeba7"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_05d30a976016a829b548f5fff9da99ae8d5aca11fd5d248f483db01e83beeba7"] ?? $this->getContext($context, "__internal_05d30a976016a829b548f5fff9da99ae8d5aca11fd5d248f483db01e83beeba7"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_05d30a976016a829b548f5fff9da99ae8d5aca11fd5d248f483db01e83beeba7"] ?? $this->getContext($context, "__internal_05d30a976016a829b548f5fff9da99ae8d5aca11fd5d248f483db01e83beeba7"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6710df8fc78f88dc79f64ed6d5ffdce3f4032a9a8ef9a9eb825f9e5b5c177cde->leave($__internal_6710df8fc78f88dc79f64ed6d5ffdce3f4032a9a8ef9a9eb825f9e5b5c177cde_prof);

        
        $__internal_98040a0b2b7fc27b6ac12d94065d420d917c3a3d66cf10363c5bf322c73a5dc6->leave($__internal_98040a0b2b7fc27b6ac12d94065d420d917c3a3d66cf10363c5bf322c73a5dc6_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_9509395e8149cb482e39c52aca1f77d4aa5feae941c5ba504820d8a4e3ae256f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9509395e8149cb482e39c52aca1f77d4aa5feae941c5ba504820d8a4e3ae256f->enter($__internal_9509395e8149cb482e39c52aca1f77d4aa5feae941c5ba504820d8a4e3ae256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_d4a967889c105c6cbfabb250d340458b007de85dab65b0a0f6abda876bc5c3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a967889c105c6cbfabb250d340458b007de85dab65b0a0f6abda876bc5c3bb->enter($__internal_d4a967889c105c6cbfabb250d340458b007de85dab65b0a0f6abda876bc5c3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_d4a967889c105c6cbfabb250d340458b007de85dab65b0a0f6abda876bc5c3bb->leave($__internal_d4a967889c105c6cbfabb250d340458b007de85dab65b0a0f6abda876bc5c3bb_prof);

        
        $__internal_9509395e8149cb482e39c52aca1f77d4aa5feae941c5ba504820d8a4e3ae256f->leave($__internal_9509395e8149cb482e39c52aca1f77d4aa5feae941c5ba504820d8a4e3ae256f_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_e08ee12814a5f257d0aec75a1b34161a62742eba5a71220f771b2cb70c7ecc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08ee12814a5f257d0aec75a1b34161a62742eba5a71220f771b2cb70c7ecc1e->enter($__internal_e08ee12814a5f257d0aec75a1b34161a62742eba5a71220f771b2cb70c7ecc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_c0e9a178d735b04c200d54423095425ca9c6f74eda2a87678daeb94b12aca4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e9a178d735b04c200d54423095425ca9c6f74eda2a87678daeb94b12aca4e2->enter($__internal_c0e9a178d735b04c200d54423095425ca9c6f74eda2a87678daeb94b12aca4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_c0e9a178d735b04c200d54423095425ca9c6f74eda2a87678daeb94b12aca4e2->leave($__internal_c0e9a178d735b04c200d54423095425ca9c6f74eda2a87678daeb94b12aca4e2_prof);

        
        $__internal_e08ee12814a5f257d0aec75a1b34161a62742eba5a71220f771b2cb70c7ecc1e->leave($__internal_e08ee12814a5f257d0aec75a1b34161a62742eba5a71220f771b2cb70c7ecc1e_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_80e1716f9d4f758336da99f4335b4e86288676360b41691ffd70e8d6f419649a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e1716f9d4f758336da99f4335b4e86288676360b41691ffd70e8d6f419649a->enter($__internal_80e1716f9d4f758336da99f4335b4e86288676360b41691ffd70e8d6f419649a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_2029e926443a0aa6d673aad8e25c5e3dec7a79ab8fe55f661fac1c72b47d0627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2029e926443a0aa6d673aad8e25c5e3dec7a79ab8fe55f661fac1c72b47d0627->enter($__internal_2029e926443a0aa6d673aad8e25c5e3dec7a79ab8fe55f661fac1c72b47d0627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_05d30a976016a829b548f5fff9da99ae8d5aca11fd5d248f483db01e83beeba7"] ?? $this->getContext($context, "__internal_05d30a976016a829b548f5fff9da99ae8d5aca11fd5d248f483db01e83beeba7")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2029e926443a0aa6d673aad8e25c5e3dec7a79ab8fe55f661fac1c72b47d0627->leave($__internal_2029e926443a0aa6d673aad8e25c5e3dec7a79ab8fe55f661fac1c72b47d0627_prof);

        
        $__internal_80e1716f9d4f758336da99f4335b4e86288676360b41691ffd70e8d6f419649a->leave($__internal_80e1716f9d4f758336da99f4335b4e86288676360b41691ffd70e8d6f419649a_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_5fceffbfa8293564a96214a2aae287346e89038638dcc5553ca5c2279fe02577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fceffbfa8293564a96214a2aae287346e89038638dcc5553ca5c2279fe02577->enter($__internal_5fceffbfa8293564a96214a2aae287346e89038638dcc5553ca5c2279fe02577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_35efac2ab43641e01bcd5c2f5e3813b67d70ae0e07387bf78b456077a3fc928f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35efac2ab43641e01bcd5c2f5e3813b67d70ae0e07387bf78b456077a3fc928f->enter($__internal_35efac2ab43641e01bcd5c2f5e3813b67d70ae0e07387bf78b456077a3fc928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_35efac2ab43641e01bcd5c2f5e3813b67d70ae0e07387bf78b456077a3fc928f->leave($__internal_35efac2ab43641e01bcd5c2f5e3813b67d70ae0e07387bf78b456077a3fc928f_prof);

        
        $__internal_5fceffbfa8293564a96214a2aae287346e89038638dcc5553ca5c2279fe02577->leave($__internal_5fceffbfa8293564a96214a2aae287346e89038638dcc5553ca5c2279fe02577_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_b1db763f45193ada749953c2804875c311a2476fa7169168fe740db47e01ffb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1db763f45193ada749953c2804875c311a2476fa7169168fe740db47e01ffb8->enter($__internal_b1db763f45193ada749953c2804875c311a2476fa7169168fe740db47e01ffb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_7c91a9b25c141dbada0f239f3aecf44aaa898cb63b584de3e3b44e16d74c93ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c91a9b25c141dbada0f239f3aecf44aaa898cb63b584de3e3b44e16d74c93ad->enter($__internal_7c91a9b25c141dbada0f239f3aecf44aaa898cb63b584de3e3b44e16d74c93ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_7c91a9b25c141dbada0f239f3aecf44aaa898cb63b584de3e3b44e16d74c93ad->leave($__internal_7c91a9b25c141dbada0f239f3aecf44aaa898cb63b584de3e3b44e16d74c93ad_prof);

        
        $__internal_b1db763f45193ada749953c2804875c311a2476fa7169168fe740db47e01ffb8->leave($__internal_b1db763f45193ada749953c2804875c311a2476fa7169168fe740db47e01ffb8_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_b0d9ec8bf881eb725a7986b03ccf3e8fa880ae9a9a01f7c35b0f3656f2cc8858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d9ec8bf881eb725a7986b03ccf3e8fa880ae9a9a01f7c35b0f3656f2cc8858->enter($__internal_b0d9ec8bf881eb725a7986b03ccf3e8fa880ae9a9a01f7c35b0f3656f2cc8858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_ad4951f77e07f673e53599ba9b5bc4582c2ad26cebf5c5c92bd8b86520ea3355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4951f77e07f673e53599ba9b5bc4582c2ad26cebf5c5c92bd8b86520ea3355->enter($__internal_ad4951f77e07f673e53599ba9b5bc4582c2ad26cebf5c5c92bd8b86520ea3355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_ad4951f77e07f673e53599ba9b5bc4582c2ad26cebf5c5c92bd8b86520ea3355->leave($__internal_ad4951f77e07f673e53599ba9b5bc4582c2ad26cebf5c5c92bd8b86520ea3355_prof);

        
        $__internal_b0d9ec8bf881eb725a7986b03ccf3e8fa880ae9a9a01f7c35b0f3656f2cc8858->leave($__internal_b0d9ec8bf881eb725a7986b03ccf3e8fa880ae9a9a01f7c35b0f3656f2cc8858_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:new.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/new.html.twig");
    }
}
