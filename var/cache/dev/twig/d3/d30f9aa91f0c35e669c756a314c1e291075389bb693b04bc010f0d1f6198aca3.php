<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1d70fea35953abb93ad86f4fa80c391a05283698993232d5fb4b1002001f0cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_84d97db27ce77f9164c6ae59d497ee5322936e1c2083a96b74804d39cfb3c1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d97db27ce77f9164c6ae59d497ee5322936e1c2083a96b74804d39cfb3c1c6->enter($__internal_84d97db27ce77f9164c6ae59d497ee5322936e1c2083a96b74804d39cfb3c1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_0cce174c68e0def8b3002f52f0e0c32ccd6ad834ee52556ea1017450895941b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cce174c68e0def8b3002f52f0e0c32ccd6ad834ee52556ea1017450895941b6->enter($__internal_0cce174c68e0def8b3002f52f0e0c32ccd6ad834ee52556ea1017450895941b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84d97db27ce77f9164c6ae59d497ee5322936e1c2083a96b74804d39cfb3c1c6->leave($__internal_84d97db27ce77f9164c6ae59d497ee5322936e1c2083a96b74804d39cfb3c1c6_prof);

        
        $__internal_0cce174c68e0def8b3002f52f0e0c32ccd6ad834ee52556ea1017450895941b6->leave($__internal_0cce174c68e0def8b3002f52f0e0c32ccd6ad834ee52556ea1017450895941b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc3827ffec41538c5bd46e426bae42d4a6e86148ee41297376b9f11353325d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3827ffec41538c5bd46e426bae42d4a6e86148ee41297376b9f11353325d41->enter($__internal_dc3827ffec41538c5bd46e426bae42d4a6e86148ee41297376b9f11353325d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc5626ba9138fab560cb92f6b2696631605c3275e7e27e2ab0d8b5378007d7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc5626ba9138fab560cb92f6b2696631605c3275e7e27e2ab0d8b5378007d7cb->enter($__internal_fc5626ba9138fab560cb92f6b2696631605c3275e7e27e2ab0d8b5378007d7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_fc5626ba9138fab560cb92f6b2696631605c3275e7e27e2ab0d8b5378007d7cb->leave($__internal_fc5626ba9138fab560cb92f6b2696631605c3275e7e27e2ab0d8b5378007d7cb_prof);

        
        $__internal_dc3827ffec41538c5bd46e426bae42d4a6e86148ee41297376b9f11353325d41->leave($__internal_dc3827ffec41538c5bd46e426bae42d4a6e86148ee41297376b9f11353325d41_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
