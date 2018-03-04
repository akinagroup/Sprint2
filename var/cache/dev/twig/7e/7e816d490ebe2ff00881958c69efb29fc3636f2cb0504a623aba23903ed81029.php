<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ffb427563da76341010b4a2439336b762f4abf01c45d1c1a0c8bafdf9ac6658f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0b7f783117e56dae9e35090edb12dc6614abfa07e09c0bbd4f759d1fe58e617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b7f783117e56dae9e35090edb12dc6614abfa07e09c0bbd4f759d1fe58e617->enter($__internal_e0b7f783117e56dae9e35090edb12dc6614abfa07e09c0bbd4f759d1fe58e617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_420e029995ea057f1e0cdce25189f1ecc18d7d2efbd82ba78b3b812fa184a3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420e029995ea057f1e0cdce25189f1ecc18d7d2efbd82ba78b3b812fa184a3b7->enter($__internal_420e029995ea057f1e0cdce25189f1ecc18d7d2efbd82ba78b3b812fa184a3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b7f783117e56dae9e35090edb12dc6614abfa07e09c0bbd4f759d1fe58e617->leave($__internal_e0b7f783117e56dae9e35090edb12dc6614abfa07e09c0bbd4f759d1fe58e617_prof);

        
        $__internal_420e029995ea057f1e0cdce25189f1ecc18d7d2efbd82ba78b3b812fa184a3b7->leave($__internal_420e029995ea057f1e0cdce25189f1ecc18d7d2efbd82ba78b3b812fa184a3b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_228ed4b5fd3365e02b8da6fd365bee1a71877e304eab418d53085fd20389b4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228ed4b5fd3365e02b8da6fd365bee1a71877e304eab418d53085fd20389b4a3->enter($__internal_228ed4b5fd3365e02b8da6fd365bee1a71877e304eab418d53085fd20389b4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2933e00c3b7afa38f049110c464ff7f5f86ed36c56ca36eef477c1938719b1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2933e00c3b7afa38f049110c464ff7f5f86ed36c56ca36eef477c1938719b1db->enter($__internal_2933e00c3b7afa38f049110c464ff7f5f86ed36c56ca36eef477c1938719b1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2933e00c3b7afa38f049110c464ff7f5f86ed36c56ca36eef477c1938719b1db->leave($__internal_2933e00c3b7afa38f049110c464ff7f5f86ed36c56ca36eef477c1938719b1db_prof);

        
        $__internal_228ed4b5fd3365e02b8da6fd365bee1a71877e304eab418d53085fd20389b4a3->leave($__internal_228ed4b5fd3365e02b8da6fd365bee1a71877e304eab418d53085fd20389b4a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c3ea3a00d1bbeeff538027b83b551e8f2b315ac00d1553b7dec2c48199b2980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3ea3a00d1bbeeff538027b83b551e8f2b315ac00d1553b7dec2c48199b2980->enter($__internal_3c3ea3a00d1bbeeff538027b83b551e8f2b315ac00d1553b7dec2c48199b2980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8eca340df23ee2566ec2b6aacba21c404fc463929b23ea572aec9d0b569559f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eca340df23ee2566ec2b6aacba21c404fc463929b23ea572aec9d0b569559f1->enter($__internal_8eca340df23ee2566ec2b6aacba21c404fc463929b23ea572aec9d0b569559f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8eca340df23ee2566ec2b6aacba21c404fc463929b23ea572aec9d0b569559f1->leave($__internal_8eca340df23ee2566ec2b6aacba21c404fc463929b23ea572aec9d0b569559f1_prof);

        
        $__internal_3c3ea3a00d1bbeeff538027b83b551e8f2b315ac00d1553b7dec2c48199b2980->leave($__internal_3c3ea3a00d1bbeeff538027b83b551e8f2b315ac00d1553b7dec2c48199b2980_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
