<?php

/* AkinaImmobilierBundle:Default:index.html.twig */
class __TwigTemplate_690eac623ca34f8c87dde3c016a9f2945bcca45f998a0ad33e080431c382d754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AkinaImmobilierBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53c694d8779a1d6a174503372d4de90cdbae6d4509d75ba7f36ce86632e80c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c694d8779a1d6a174503372d4de90cdbae6d4509d75ba7f36ce86632e80c98->enter($__internal_53c694d8779a1d6a174503372d4de90cdbae6d4509d75ba7f36ce86632e80c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Default:index.html.twig"));

        $__internal_80fabbcc8116e49a4bab4625f61af01948733be7769621829e8c9c06c09b9990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fabbcc8116e49a4bab4625f61af01948733be7769621829e8c9c06c09b9990->enter($__internal_80fabbcc8116e49a4bab4625f61af01948733be7769621829e8c9c06c09b9990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53c694d8779a1d6a174503372d4de90cdbae6d4509d75ba7f36ce86632e80c98->leave($__internal_53c694d8779a1d6a174503372d4de90cdbae6d4509d75ba7f36ce86632e80c98_prof);

        
        $__internal_80fabbcc8116e49a4bab4625f61af01948733be7769621829e8c9c06c09b9990->leave($__internal_80fabbcc8116e49a4bab4625f61af01948733be7769621829e8c9c06c09b9990_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}
", "AkinaImmobilierBundle:Default:index.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Default/index.html.twig");
    }
}
