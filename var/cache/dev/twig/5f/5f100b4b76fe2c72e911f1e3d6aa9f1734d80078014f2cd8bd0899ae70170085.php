<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_eb8f8a076a69d2b21ba2600f9f5647fdaf2f94343daa677eb9891bccf7fd20a6 extends Twig_Template
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
        $__internal_1231687e033ef453394e0a0b2f8b8b4c46d9a09963e5e7eb3b58b45ef5ecfc8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1231687e033ef453394e0a0b2f8b8b4c46d9a09963e5e7eb3b58b45ef5ecfc8d->enter($__internal_1231687e033ef453394e0a0b2f8b8b4c46d9a09963e5e7eb3b58b45ef5ecfc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_e3adcdbc1deef1e1b61a7f806138540dcd9d81631616399129437011a034183b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3adcdbc1deef1e1b61a7f806138540dcd9d81631616399129437011a034183b->enter($__internal_e3adcdbc1deef1e1b61a7f806138540dcd9d81631616399129437011a034183b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1231687e033ef453394e0a0b2f8b8b4c46d9a09963e5e7eb3b58b45ef5ecfc8d->leave($__internal_1231687e033ef453394e0a0b2f8b8b4c46d9a09963e5e7eb3b58b45ef5ecfc8d_prof);

        
        $__internal_e3adcdbc1deef1e1b61a7f806138540dcd9d81631616399129437011a034183b->leave($__internal_e3adcdbc1deef1e1b61a7f806138540dcd9d81631616399129437011a034183b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new_content.html.twig");
    }
}
