<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_1c5d06e3c8a9100b04282e29b9a10df6c565567bfbf7421c003e8d9e8107c53d extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba48e73c2fef7b6efed357cc9e4aaad2debe473ef86115468f0030a1892f8f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba48e73c2fef7b6efed357cc9e4aaad2debe473ef86115468f0030a1892f8f13->enter($__internal_ba48e73c2fef7b6efed357cc9e4aaad2debe473ef86115468f0030a1892f8f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_75941d9ad08feca5ca91dbf1783bad23bcd98bce00ebe435a50d69b785a7fc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75941d9ad08feca5ca91dbf1783bad23bcd98bce00ebe435a50d69b785a7fc08->enter($__internal_75941d9ad08feca5ca91dbf1783bad23bcd98bce00ebe435a50d69b785a7fc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_86fc6e33c586dafca7d4fa620e5b34ebfd6f4bd2a93829348aab49839d0af92d"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_86fc6e33c586dafca7d4fa620e5b34ebfd6f4bd2a93829348aab49839d0af92d"] ?? $this->getContext($context, "__internal_86fc6e33c586dafca7d4fa620e5b34ebfd6f4bd2a93829348aab49839d0af92d"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_86fc6e33c586dafca7d4fa620e5b34ebfd6f4bd2a93829348aab49839d0af92d"] ?? $this->getContext($context, "__internal_86fc6e33c586dafca7d4fa620e5b34ebfd6f4bd2a93829348aab49839d0af92d"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba48e73c2fef7b6efed357cc9e4aaad2debe473ef86115468f0030a1892f8f13->leave($__internal_ba48e73c2fef7b6efed357cc9e4aaad2debe473ef86115468f0030a1892f8f13_prof);

        
        $__internal_75941d9ad08feca5ca91dbf1783bad23bcd98bce00ebe435a50d69b785a7fc08->leave($__internal_75941d9ad08feca5ca91dbf1783bad23bcd98bce00ebe435a50d69b785a7fc08_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f687c0fda50f398a39fd2bb3ba4550272432d35309b22b41d944d0d339adda9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f687c0fda50f398a39fd2bb3ba4550272432d35309b22b41d944d0d339adda9f->enter($__internal_f687c0fda50f398a39fd2bb3ba4550272432d35309b22b41d944d0d339adda9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6b94de2c25c0e2fb26c5b9d6500512096056e34b57bc4a5436ef53a24906f0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b94de2c25c0e2fb26c5b9d6500512096056e34b57bc4a5436ef53a24906f0d5->enter($__internal_6b94de2c25c0e2fb26c5b9d6500512096056e34b57bc4a5436ef53a24906f0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_6b94de2c25c0e2fb26c5b9d6500512096056e34b57bc4a5436ef53a24906f0d5->leave($__internal_6b94de2c25c0e2fb26c5b9d6500512096056e34b57bc4a5436ef53a24906f0d5_prof);

        
        $__internal_f687c0fda50f398a39fd2bb3ba4550272432d35309b22b41d944d0d339adda9f->leave($__internal_f687c0fda50f398a39fd2bb3ba4550272432d35309b22b41d944d0d339adda9f_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_61c340c5dc9fb4fa1aea313b2d6848f82d93816b74123fe7149bb1f26b892aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c340c5dc9fb4fa1aea313b2d6848f82d93816b74123fe7149bb1f26b892aa8->enter($__internal_61c340c5dc9fb4fa1aea313b2d6848f82d93816b74123fe7149bb1f26b892aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_3a2e2821b2da8680eb385b32286efd4ca2494aaa06654c50ad3b06a688c4b840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2e2821b2da8680eb385b32286efd4ca2494aaa06654c50ad3b06a688c4b840->enter($__internal_3a2e2821b2da8680eb385b32286efd4ca2494aaa06654c50ad3b06a688c4b840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_3a2e2821b2da8680eb385b32286efd4ca2494aaa06654c50ad3b06a688c4b840->leave($__internal_3a2e2821b2da8680eb385b32286efd4ca2494aaa06654c50ad3b06a688c4b840_prof);

        
        $__internal_61c340c5dc9fb4fa1aea313b2d6848f82d93816b74123fe7149bb1f26b892aa8->leave($__internal_61c340c5dc9fb4fa1aea313b2d6848f82d93816b74123fe7149bb1f26b892aa8_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_dbac1517adbb817649a2ba5ab575a3e56bda5c88decceb919e62d41057f5342f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbac1517adbb817649a2ba5ab575a3e56bda5c88decceb919e62d41057f5342f->enter($__internal_dbac1517adbb817649a2ba5ab575a3e56bda5c88decceb919e62d41057f5342f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_7c1b279292caedb9a09e09d9b112c7d0684cbfb1fb75c6d9630c12a051549a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1b279292caedb9a09e09d9b112c7d0684cbfb1fb75c6d9630c12a051549a20->enter($__internal_7c1b279292caedb9a09e09d9b112c7d0684cbfb1fb75c6d9630c12a051549a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_86fc6e33c586dafca7d4fa620e5b34ebfd6f4bd2a93829348aab49839d0af92d"] ?? $this->getContext($context, "__internal_86fc6e33c586dafca7d4fa620e5b34ebfd6f4bd2a93829348aab49839d0af92d")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7c1b279292caedb9a09e09d9b112c7d0684cbfb1fb75c6d9630c12a051549a20->leave($__internal_7c1b279292caedb9a09e09d9b112c7d0684cbfb1fb75c6d9630c12a051549a20_prof);

        
        $__internal_dbac1517adbb817649a2ba5ab575a3e56bda5c88decceb919e62d41057f5342f->leave($__internal_dbac1517adbb817649a2ba5ab575a3e56bda5c88decceb919e62d41057f5342f_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_06ce644a0d7dc77b7a380a4a8199b6ba12b1883e73a9484ad16d50184e32997d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ce644a0d7dc77b7a380a4a8199b6ba12b1883e73a9484ad16d50184e32997d->enter($__internal_06ce644a0d7dc77b7a380a4a8199b6ba12b1883e73a9484ad16d50184e32997d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_c7ff98fc9dd7aefb9ea3347ee750407acc315491afcde34931a46ffc0ada6413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ff98fc9dd7aefb9ea3347ee750407acc315491afcde34931a46ffc0ada6413->enter($__internal_c7ff98fc9dd7aefb9ea3347ee750407acc315491afcde34931a46ffc0ada6413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_c7ff98fc9dd7aefb9ea3347ee750407acc315491afcde34931a46ffc0ada6413->leave($__internal_c7ff98fc9dd7aefb9ea3347ee750407acc315491afcde34931a46ffc0ada6413_prof);

        
        $__internal_06ce644a0d7dc77b7a380a4a8199b6ba12b1883e73a9484ad16d50184e32997d->leave($__internal_06ce644a0d7dc77b7a380a4a8199b6ba12b1883e73a9484ad16d50184e32997d_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_3dcef5e9cb25bece751c685788f2ff77074ca04568bf42676c0314ecd28e996e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dcef5e9cb25bece751c685788f2ff77074ca04568bf42676c0314ecd28e996e->enter($__internal_3dcef5e9cb25bece751c685788f2ff77074ca04568bf42676c0314ecd28e996e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_d094019157e05fd6bea22d036e5fff807820321de9bcf5e1f7f707ebccf4f044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d094019157e05fd6bea22d036e5fff807820321de9bcf5e1f7f707ebccf4f044->enter($__internal_d094019157e05fd6bea22d036e5fff807820321de9bcf5e1f7f707ebccf4f044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_d094019157e05fd6bea22d036e5fff807820321de9bcf5e1f7f707ebccf4f044->leave($__internal_d094019157e05fd6bea22d036e5fff807820321de9bcf5e1f7f707ebccf4f044_prof);

        
        $__internal_3dcef5e9cb25bece751c685788f2ff77074ca04568bf42676c0314ecd28e996e->leave($__internal_3dcef5e9cb25bece751c685788f2ff77074ca04568bf42676c0314ecd28e996e_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_5c3db63832d5f1789c65ee952e645f8693dacb61a3ef1e5bb2efac3e63d59429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3db63832d5f1789c65ee952e645f8693dacb61a3ef1e5bb2efac3e63d59429->enter($__internal_5c3db63832d5f1789c65ee952e645f8693dacb61a3ef1e5bb2efac3e63d59429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_07c1393d18f959da869a4c659026f202c09595e087862bab732e118a3bdd183c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c1393d18f959da869a4c659026f202c09595e087862bab732e118a3bdd183c->enter($__internal_07c1393d18f959da869a4c659026f202c09595e087862bab732e118a3bdd183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_07c1393d18f959da869a4c659026f202c09595e087862bab732e118a3bdd183c->leave($__internal_07c1393d18f959da869a4c659026f202c09595e087862bab732e118a3bdd183c_prof);

        
        $__internal_5c3db63832d5f1789c65ee952e645f8693dacb61a3ef1e5bb2efac3e63d59429->leave($__internal_5c3db63832d5f1789c65ee952e645f8693dacb61a3ef1e5bb2efac3e63d59429_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_4aa4896de291dfdecc1296ea3b63193430d53bd4229f3e340f0318356e1de733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa4896de291dfdecc1296ea3b63193430d53bd4229f3e340f0318356e1de733->enter($__internal_4aa4896de291dfdecc1296ea3b63193430d53bd4229f3e340f0318356e1de733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_106aabf04d054bd1bba211011c8e52727b4c95362d3ffc99d125d2996246d52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106aabf04d054bd1bba211011c8e52727b4c95362d3ffc99d125d2996246d52f->enter($__internal_106aabf04d054bd1bba211011c8e52727b4c95362d3ffc99d125d2996246d52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_106aabf04d054bd1bba211011c8e52727b4c95362d3ffc99d125d2996246d52f->leave($__internal_106aabf04d054bd1bba211011c8e52727b4c95362d3ffc99d125d2996246d52f_prof);

        
        $__internal_4aa4896de291dfdecc1296ea3b63193430d53bd4229f3e340f0318356e1de733->leave($__internal_4aa4896de291dfdecc1296ea3b63193430d53bd4229f3e340f0318356e1de733_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:edit.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
