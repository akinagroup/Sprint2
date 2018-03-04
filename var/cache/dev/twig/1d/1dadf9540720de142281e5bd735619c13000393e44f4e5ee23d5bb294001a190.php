<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e81470e0dbe6364c101497918c88934632b98687e446aea690c74f2181c064c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_59b68610816cf029689925bf6b6715c445e34f283d955122f4070757bdcef62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b68610816cf029689925bf6b6715c445e34f283d955122f4070757bdcef62e->enter($__internal_59b68610816cf029689925bf6b6715c445e34f283d955122f4070757bdcef62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_dbbb45291ab8fcf9308d554f0b1914cfbce3150737c6583bdcebd75c657eef91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbb45291ab8fcf9308d554f0b1914cfbce3150737c6583bdcebd75c657eef91->enter($__internal_dbbb45291ab8fcf9308d554f0b1914cfbce3150737c6583bdcebd75c657eef91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59b68610816cf029689925bf6b6715c445e34f283d955122f4070757bdcef62e->leave($__internal_59b68610816cf029689925bf6b6715c445e34f283d955122f4070757bdcef62e_prof);

        
        $__internal_dbbb45291ab8fcf9308d554f0b1914cfbce3150737c6583bdcebd75c657eef91->leave($__internal_dbbb45291ab8fcf9308d554f0b1914cfbce3150737c6583bdcebd75c657eef91_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f820920d337a5317a415065bb9c86ae8c01d6e9097a154cc776b029370891c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f820920d337a5317a415065bb9c86ae8c01d6e9097a154cc776b029370891c3f->enter($__internal_f820920d337a5317a415065bb9c86ae8c01d6e9097a154cc776b029370891c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8425971061f58be6949a98d1bd725aaee8c04f6c4601b716794e484ab4f2123d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8425971061f58be6949a98d1bd725aaee8c04f6c4601b716794e484ab4f2123d->enter($__internal_8425971061f58be6949a98d1bd725aaee8c04f6c4601b716794e484ab4f2123d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8425971061f58be6949a98d1bd725aaee8c04f6c4601b716794e484ab4f2123d->leave($__internal_8425971061f58be6949a98d1bd725aaee8c04f6c4601b716794e484ab4f2123d_prof);

        
        $__internal_f820920d337a5317a415065bb9c86ae8c01d6e9097a154cc776b029370891c3f->leave($__internal_f820920d337a5317a415065bb9c86ae8c01d6e9097a154cc776b029370891c3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
