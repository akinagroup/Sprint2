<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bdd4f1d350b06edecb2df83b3aeecfa3c61dfe73b039a1b67ccf28553c0a49cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5ae225cdec41fef1cc39886252551db6abbf025bef43158a6a3549cb6c55cf43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae225cdec41fef1cc39886252551db6abbf025bef43158a6a3549cb6c55cf43->enter($__internal_5ae225cdec41fef1cc39886252551db6abbf025bef43158a6a3549cb6c55cf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_8677cb9d217937920503699e95a5a0d8fbfe0f63f50e8b55303229396bf8e269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8677cb9d217937920503699e95a5a0d8fbfe0f63f50e8b55303229396bf8e269->enter($__internal_8677cb9d217937920503699e95a5a0d8fbfe0f63f50e8b55303229396bf8e269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ae225cdec41fef1cc39886252551db6abbf025bef43158a6a3549cb6c55cf43->leave($__internal_5ae225cdec41fef1cc39886252551db6abbf025bef43158a6a3549cb6c55cf43_prof);

        
        $__internal_8677cb9d217937920503699e95a5a0d8fbfe0f63f50e8b55303229396bf8e269->leave($__internal_8677cb9d217937920503699e95a5a0d8fbfe0f63f50e8b55303229396bf8e269_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65862c8627ed1a1d335ae625260968113bc06603e6b72c952bda23beb426a259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65862c8627ed1a1d335ae625260968113bc06603e6b72c952bda23beb426a259->enter($__internal_65862c8627ed1a1d335ae625260968113bc06603e6b72c952bda23beb426a259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_464b02f735e735c250f325eb945006caa6ad3553ca782c24cda734dcf42129d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464b02f735e735c250f325eb945006caa6ad3553ca782c24cda734dcf42129d4->enter($__internal_464b02f735e735c250f325eb945006caa6ad3553ca782c24cda734dcf42129d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_464b02f735e735c250f325eb945006caa6ad3553ca782c24cda734dcf42129d4->leave($__internal_464b02f735e735c250f325eb945006caa6ad3553ca782c24cda734dcf42129d4_prof);

        
        $__internal_65862c8627ed1a1d335ae625260968113bc06603e6b72c952bda23beb426a259->leave($__internal_65862c8627ed1a1d335ae625260968113bc06603e6b72c952bda23beb426a259_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
