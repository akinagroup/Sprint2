<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6ea85dfc7d59201a573f0f64c5c34e55fd1f9b4a54b270b254ff08e8d13ae84b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_37669584c511459da58452f8b800871761b81b60d907843476225d8873e24237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37669584c511459da58452f8b800871761b81b60d907843476225d8873e24237->enter($__internal_37669584c511459da58452f8b800871761b81b60d907843476225d8873e24237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_7aa6c7530b1ec4ed542f1886b89e1d0b1b42b9479e68cb2a241bf928e600bd53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa6c7530b1ec4ed542f1886b89e1d0b1b42b9479e68cb2a241bf928e600bd53->enter($__internal_7aa6c7530b1ec4ed542f1886b89e1d0b1b42b9479e68cb2a241bf928e600bd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37669584c511459da58452f8b800871761b81b60d907843476225d8873e24237->leave($__internal_37669584c511459da58452f8b800871761b81b60d907843476225d8873e24237_prof);

        
        $__internal_7aa6c7530b1ec4ed542f1886b89e1d0b1b42b9479e68cb2a241bf928e600bd53->leave($__internal_7aa6c7530b1ec4ed542f1886b89e1d0b1b42b9479e68cb2a241bf928e600bd53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45440b6e66753eb70fdd5c5b1c9e11bf6d9f310a07bbfd2d3cb27818450f5b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45440b6e66753eb70fdd5c5b1c9e11bf6d9f310a07bbfd2d3cb27818450f5b7d->enter($__internal_45440b6e66753eb70fdd5c5b1c9e11bf6d9f310a07bbfd2d3cb27818450f5b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eaabc5c15556b45908201741ee7064d72552237d93e5a2580e6c7c9fc359e729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaabc5c15556b45908201741ee7064d72552237d93e5a2580e6c7c9fc359e729->enter($__internal_eaabc5c15556b45908201741ee7064d72552237d93e5a2580e6c7c9fc359e729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_eaabc5c15556b45908201741ee7064d72552237d93e5a2580e6c7c9fc359e729->leave($__internal_eaabc5c15556b45908201741ee7064d72552237d93e5a2580e6c7c9fc359e729_prof);

        
        $__internal_45440b6e66753eb70fdd5c5b1c9e11bf6d9f310a07bbfd2d3cb27818450f5b7d->leave($__internal_45440b6e66753eb70fdd5c5b1c9e11bf6d9f310a07bbfd2d3cb27818450f5b7d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
