<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_c01d4c966bfc7b6f0891f60b8f156f2c1cdaa92e2ece29f12f412584c6f501ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa2e0b230263da9b126756e9c3352963d73aa57c4ff8fac66c9f666546f26c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2e0b230263da9b126756e9c3352963d73aa57c4ff8fac66c9f666546f26c04->enter($__internal_fa2e0b230263da9b126756e9c3352963d73aa57c4ff8fac66c9f666546f26c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_1647443c3393bc150c8d51a6a49c72fa46c835625aba56206bcd30fc98a555b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1647443c3393bc150c8d51a6a49c72fa46c835625aba56206bcd30fc98a555b6->enter($__internal_1647443c3393bc150c8d51a6a49c72fa46c835625aba56206bcd30fc98a555b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_fa2e0b230263da9b126756e9c3352963d73aa57c4ff8fac66c9f666546f26c04->leave($__internal_fa2e0b230263da9b126756e9c3352963d73aa57c4ff8fac66c9f666546f26c04_prof);

        
        $__internal_1647443c3393bc150c8d51a6a49c72fa46c835625aba56206bcd30fc98a555b6->leave($__internal_1647443c3393bc150c8d51a6a49c72fa46c835625aba56206bcd30fc98a555b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
