<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_58a6c698f20a3559957ac34209f76d2440f49eca689b721ae682eef53dc24009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_874c4a0506481c6e4f6cade268ec1c8cb342c900f1a0fcbbc4b3b66444815a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874c4a0506481c6e4f6cade268ec1c8cb342c900f1a0fcbbc4b3b66444815a00->enter($__internal_874c4a0506481c6e4f6cade268ec1c8cb342c900f1a0fcbbc4b3b66444815a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ae80b143ea149207bea7e8b502623b977132b75c33ab09a0178e0982bcd8287f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae80b143ea149207bea7e8b502623b977132b75c33ab09a0178e0982bcd8287f->enter($__internal_ae80b143ea149207bea7e8b502623b977132b75c33ab09a0178e0982bcd8287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_874c4a0506481c6e4f6cade268ec1c8cb342c900f1a0fcbbc4b3b66444815a00->leave($__internal_874c4a0506481c6e4f6cade268ec1c8cb342c900f1a0fcbbc4b3b66444815a00_prof);

        
        $__internal_ae80b143ea149207bea7e8b502623b977132b75c33ab09a0178e0982bcd8287f->leave($__internal_ae80b143ea149207bea7e8b502623b977132b75c33ab09a0178e0982bcd8287f_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bbe420f07b2a5566069d938b790b0bd2648372f704a2befa200231da07c0aaf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe420f07b2a5566069d938b790b0bd2648372f704a2befa200231da07c0aaf9->enter($__internal_bbe420f07b2a5566069d938b790b0bd2648372f704a2befa200231da07c0aaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_981715276b0378f8fa7dca258f2ffb4a294032cb7d33af2d4d65778ca2080354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981715276b0378f8fa7dca258f2ffb4a294032cb7d33af2d4d65778ca2080354->enter($__internal_981715276b0378f8fa7dca258f2ffb4a294032cb7d33af2d4d65778ca2080354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_981715276b0378f8fa7dca258f2ffb4a294032cb7d33af2d4d65778ca2080354->leave($__internal_981715276b0378f8fa7dca258f2ffb4a294032cb7d33af2d4d65778ca2080354_prof);

        
        $__internal_bbe420f07b2a5566069d938b790b0bd2648372f704a2befa200231da07c0aaf9->leave($__internal_bbe420f07b2a5566069d938b790b0bd2648372f704a2befa200231da07c0aaf9_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_863b46a86ff1d5ad455bd531549990cf61b9986d1b91cc2124a23a33a94c96ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863b46a86ff1d5ad455bd531549990cf61b9986d1b91cc2124a23a33a94c96ea->enter($__internal_863b46a86ff1d5ad455bd531549990cf61b9986d1b91cc2124a23a33a94c96ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2a6d7cc88c7023ddc290993f7ec39025ad06a6314716ac5f2b86cc3f89d2d97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6d7cc88c7023ddc290993f7ec39025ad06a6314716ac5f2b86cc3f89d2d97b->enter($__internal_2a6d7cc88c7023ddc290993f7ec39025ad06a6314716ac5f2b86cc3f89d2d97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2a6d7cc88c7023ddc290993f7ec39025ad06a6314716ac5f2b86cc3f89d2d97b->leave($__internal_2a6d7cc88c7023ddc290993f7ec39025ad06a6314716ac5f2b86cc3f89d2d97b_prof);

        
        $__internal_863b46a86ff1d5ad455bd531549990cf61b9986d1b91cc2124a23a33a94c96ea->leave($__internal_863b46a86ff1d5ad455bd531549990cf61b9986d1b91cc2124a23a33a94c96ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
