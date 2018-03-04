<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_3a6d010d0c3e50bb1f229abfbe8d516a57f574095061ea019fcf010a9429bf94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_3427d6ffdb00525d24ef38a5b0f6311d26ed14ada7438942b6961d716d20f3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3427d6ffdb00525d24ef38a5b0f6311d26ed14ada7438942b6961d716d20f3ec->enter($__internal_3427d6ffdb00525d24ef38a5b0f6311d26ed14ada7438942b6961d716d20f3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_fb39ed45bdb36352bb3df8fac107433b502f2de51e5b79b2cb2e80dc4996199c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb39ed45bdb36352bb3df8fac107433b502f2de51e5b79b2cb2e80dc4996199c->enter($__internal_fb39ed45bdb36352bb3df8fac107433b502f2de51e5b79b2cb2e80dc4996199c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3427d6ffdb00525d24ef38a5b0f6311d26ed14ada7438942b6961d716d20f3ec->leave($__internal_3427d6ffdb00525d24ef38a5b0f6311d26ed14ada7438942b6961d716d20f3ec_prof);

        
        $__internal_fb39ed45bdb36352bb3df8fac107433b502f2de51e5b79b2cb2e80dc4996199c->leave($__internal_fb39ed45bdb36352bb3df8fac107433b502f2de51e5b79b2cb2e80dc4996199c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa6acc23fbce2e145cd0372d60143edf829b658977b730ac97c7939f7b63d3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6acc23fbce2e145cd0372d60143edf829b658977b730ac97c7939f7b63d3cc->enter($__internal_aa6acc23fbce2e145cd0372d60143edf829b658977b730ac97c7939f7b63d3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8b55a9c9a943ea539265843d3d4fe0bba9ad819eec230fcacedbe206238eb7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b55a9c9a943ea539265843d3d4fe0bba9ad819eec230fcacedbe206238eb7b9->enter($__internal_8b55a9c9a943ea539265843d3d4fe0bba9ad819eec230fcacedbe206238eb7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8b55a9c9a943ea539265843d3d4fe0bba9ad819eec230fcacedbe206238eb7b9->leave($__internal_8b55a9c9a943ea539265843d3d4fe0bba9ad819eec230fcacedbe206238eb7b9_prof);

        
        $__internal_aa6acc23fbce2e145cd0372d60143edf829b658977b730ac97c7939f7b63d3cc->leave($__internal_aa6acc23fbce2e145cd0372d60143edf829b658977b730ac97c7939f7b63d3cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
