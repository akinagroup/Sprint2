<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9526a47db9342c064c71662a15656350a841555f5b0cf80e1f9daaaa1b531d92 extends Twig_Template
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
        $__internal_e77f048872f6ab7a6c69f979f8db92de8ac254383117808b31a119e9cc398a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77f048872f6ab7a6c69f979f8db92de8ac254383117808b31a119e9cc398a88->enter($__internal_e77f048872f6ab7a6c69f979f8db92de8ac254383117808b31a119e9cc398a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_91f50a823ba7db17e648e691690a0a6ae20d3e08b8edf7661d7aa9394f815a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f50a823ba7db17e648e691690a0a6ae20d3e08b8edf7661d7aa9394f815a0f->enter($__internal_91f50a823ba7db17e648e691690a0a6ae20d3e08b8edf7661d7aa9394f815a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e77f048872f6ab7a6c69f979f8db92de8ac254383117808b31a119e9cc398a88->leave($__internal_e77f048872f6ab7a6c69f979f8db92de8ac254383117808b31a119e9cc398a88_prof);

        
        $__internal_91f50a823ba7db17e648e691690a0a6ae20d3e08b8edf7661d7aa9394f815a0f->leave($__internal_91f50a823ba7db17e648e691690a0a6ae20d3e08b8edf7661d7aa9394f815a0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
