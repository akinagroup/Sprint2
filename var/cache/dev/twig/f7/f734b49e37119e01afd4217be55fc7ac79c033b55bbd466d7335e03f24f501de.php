<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_fb0b41e8e80bacb89eb46bd73dd921f40aa5102b9e83d6b4532b40f9399d2a84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_c1addacf77693da375134a360d1204651b33c8920fed192282336f4de2b471a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1addacf77693da375134a360d1204651b33c8920fed192282336f4de2b471a4->enter($__internal_c1addacf77693da375134a360d1204651b33c8920fed192282336f4de2b471a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_296b4955d3d9bdc7b2ef807af7b62a410b4fc16b03c5334ddce34bc0c531ee4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296b4955d3d9bdc7b2ef807af7b62a410b4fc16b03c5334ddce34bc0c531ee4a->enter($__internal_296b4955d3d9bdc7b2ef807af7b62a410b4fc16b03c5334ddce34bc0c531ee4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1addacf77693da375134a360d1204651b33c8920fed192282336f4de2b471a4->leave($__internal_c1addacf77693da375134a360d1204651b33c8920fed192282336f4de2b471a4_prof);

        
        $__internal_296b4955d3d9bdc7b2ef807af7b62a410b4fc16b03c5334ddce34bc0c531ee4a->leave($__internal_296b4955d3d9bdc7b2ef807af7b62a410b4fc16b03c5334ddce34bc0c531ee4a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_869e303a5dfd8a54541d263af7c9784004068af7df98297ae180c0fbad983348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869e303a5dfd8a54541d263af7c9784004068af7df98297ae180c0fbad983348->enter($__internal_869e303a5dfd8a54541d263af7c9784004068af7df98297ae180c0fbad983348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5186fa1badf7c3cb5652ff7431ac736465bad1bfeb909c927558c9518cf19c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5186fa1badf7c3cb5652ff7431ac736465bad1bfeb909c927558c9518cf19c71->enter($__internal_5186fa1badf7c3cb5652ff7431ac736465bad1bfeb909c927558c9518cf19c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_5186fa1badf7c3cb5652ff7431ac736465bad1bfeb909c927558c9518cf19c71->leave($__internal_5186fa1badf7c3cb5652ff7431ac736465bad1bfeb909c927558c9518cf19c71_prof);

        
        $__internal_869e303a5dfd8a54541d263af7c9784004068af7df98297ae180c0fbad983348->leave($__internal_869e303a5dfd8a54541d263af7c9784004068af7df98297ae180c0fbad983348_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
