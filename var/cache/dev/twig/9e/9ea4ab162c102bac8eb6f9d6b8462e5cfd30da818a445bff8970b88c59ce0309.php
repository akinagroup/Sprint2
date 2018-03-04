<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c6ee99e68d929aa2a7588ce4df242baa5ca56645428a8d51ac62abda691fecca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_97e9a377b45ef8176220aa9a39fae9e9f174dc5ad1333f70f0978e80900ce340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e9a377b45ef8176220aa9a39fae9e9f174dc5ad1333f70f0978e80900ce340->enter($__internal_97e9a377b45ef8176220aa9a39fae9e9f174dc5ad1333f70f0978e80900ce340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_2da4b49f5b673bb6157e9e27d1bab92f4874e186967e070ac3fdb00f6ae3e114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da4b49f5b673bb6157e9e27d1bab92f4874e186967e070ac3fdb00f6ae3e114->enter($__internal_2da4b49f5b673bb6157e9e27d1bab92f4874e186967e070ac3fdb00f6ae3e114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97e9a377b45ef8176220aa9a39fae9e9f174dc5ad1333f70f0978e80900ce340->leave($__internal_97e9a377b45ef8176220aa9a39fae9e9f174dc5ad1333f70f0978e80900ce340_prof);

        
        $__internal_2da4b49f5b673bb6157e9e27d1bab92f4874e186967e070ac3fdb00f6ae3e114->leave($__internal_2da4b49f5b673bb6157e9e27d1bab92f4874e186967e070ac3fdb00f6ae3e114_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c604d8180303290da801874de394ed7a9b34cd29b70c067a1baf8b1e948959c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c604d8180303290da801874de394ed7a9b34cd29b70c067a1baf8b1e948959c->enter($__internal_6c604d8180303290da801874de394ed7a9b34cd29b70c067a1baf8b1e948959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f473956d36dd3cc861829e6f1178844834d6a593dbd130f2cf3ace130a5af8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f473956d36dd3cc861829e6f1178844834d6a593dbd130f2cf3ace130a5af8b->enter($__internal_6f473956d36dd3cc861829e6f1178844834d6a593dbd130f2cf3ace130a5af8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6f473956d36dd3cc861829e6f1178844834d6a593dbd130f2cf3ace130a5af8b->leave($__internal_6f473956d36dd3cc861829e6f1178844834d6a593dbd130f2cf3ace130a5af8b_prof);

        
        $__internal_6c604d8180303290da801874de394ed7a9b34cd29b70c067a1baf8b1e948959c->leave($__internal_6c604d8180303290da801874de394ed7a9b34cd29b70c067a1baf8b1e948959c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
