<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_22229193154ed7c98404178450e62de5ee3a694d84d1888647027cacf2c60669 extends Twig_Template
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
        $__internal_f2f0d43b65144bb1eebc00a24d8bbd834b90a7b4079ee47d51fede971abfddb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f0d43b65144bb1eebc00a24d8bbd834b90a7b4079ee47d51fede971abfddb0->enter($__internal_f2f0d43b65144bb1eebc00a24d8bbd834b90a7b4079ee47d51fede971abfddb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_6844127791096895e0efe96823f8720632f060974e8a7024793e29308c7aed31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6844127791096895e0efe96823f8720632f060974e8a7024793e29308c7aed31->enter($__internal_6844127791096895e0efe96823f8720632f060974e8a7024793e29308c7aed31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f2f0d43b65144bb1eebc00a24d8bbd834b90a7b4079ee47d51fede971abfddb0->leave($__internal_f2f0d43b65144bb1eebc00a24d8bbd834b90a7b4079ee47d51fede971abfddb0_prof);

        
        $__internal_6844127791096895e0efe96823f8720632f060974e8a7024793e29308c7aed31->leave($__internal_6844127791096895e0efe96823f8720632f060974e8a7024793e29308c7aed31_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_78d26a7fac71094ae1302784112238fc1f57616d867a972b8a90482568733ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d26a7fac71094ae1302784112238fc1f57616d867a972b8a90482568733ee7->enter($__internal_78d26a7fac71094ae1302784112238fc1f57616d867a972b8a90482568733ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_213e32f3acbd27b2f42a8face3ecd5f37f3ef36f00ed757d092dc08893ad7a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213e32f3acbd27b2f42a8face3ecd5f37f3ef36f00ed757d092dc08893ad7a7d->enter($__internal_213e32f3acbd27b2f42a8face3ecd5f37f3ef36f00ed757d092dc08893ad7a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_213e32f3acbd27b2f42a8face3ecd5f37f3ef36f00ed757d092dc08893ad7a7d->leave($__internal_213e32f3acbd27b2f42a8face3ecd5f37f3ef36f00ed757d092dc08893ad7a7d_prof);

        
        $__internal_78d26a7fac71094ae1302784112238fc1f57616d867a972b8a90482568733ee7->leave($__internal_78d26a7fac71094ae1302784112238fc1f57616d867a972b8a90482568733ee7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4164440db990b518ee86b06880e798cef1d6bbafc34aed698e11e7aa358b2119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4164440db990b518ee86b06880e798cef1d6bbafc34aed698e11e7aa358b2119->enter($__internal_4164440db990b518ee86b06880e798cef1d6bbafc34aed698e11e7aa358b2119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_52fa4011266ee21e41473abff07e2b1b4798da5d95f6135aa6636b667067991d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52fa4011266ee21e41473abff07e2b1b4798da5d95f6135aa6636b667067991d->enter($__internal_52fa4011266ee21e41473abff07e2b1b4798da5d95f6135aa6636b667067991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_52fa4011266ee21e41473abff07e2b1b4798da5d95f6135aa6636b667067991d->leave($__internal_52fa4011266ee21e41473abff07e2b1b4798da5d95f6135aa6636b667067991d_prof);

        
        $__internal_4164440db990b518ee86b06880e798cef1d6bbafc34aed698e11e7aa358b2119->leave($__internal_4164440db990b518ee86b06880e798cef1d6bbafc34aed698e11e7aa358b2119_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_74abc24773bc7b08a8cffb6d6b571d9b46efad5375719f7fa645f49a90aaea61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74abc24773bc7b08a8cffb6d6b571d9b46efad5375719f7fa645f49a90aaea61->enter($__internal_74abc24773bc7b08a8cffb6d6b571d9b46efad5375719f7fa645f49a90aaea61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_19902ed1c8293ec7be787e8c4fc8afcb0540c713b9b89e77bcba95894b9d37a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19902ed1c8293ec7be787e8c4fc8afcb0540c713b9b89e77bcba95894b9d37a8->enter($__internal_19902ed1c8293ec7be787e8c4fc8afcb0540c713b9b89e77bcba95894b9d37a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_19902ed1c8293ec7be787e8c4fc8afcb0540c713b9b89e77bcba95894b9d37a8->leave($__internal_19902ed1c8293ec7be787e8c4fc8afcb0540c713b9b89e77bcba95894b9d37a8_prof);

        
        $__internal_74abc24773bc7b08a8cffb6d6b571d9b46efad5375719f7fa645f49a90aaea61->leave($__internal_74abc24773bc7b08a8cffb6d6b571d9b46efad5375719f7fa645f49a90aaea61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
