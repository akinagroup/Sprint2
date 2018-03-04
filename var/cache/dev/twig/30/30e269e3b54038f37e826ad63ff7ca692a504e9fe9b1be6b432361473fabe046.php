<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a1068cd051b89256a1cb55fd5218727d38cf0aff19bb20260a9c488c88ce452b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_a6abe2405b96abf52d518cf747ca3b02fe01989d8ae0e02d8c1e3de851b1dcf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6abe2405b96abf52d518cf747ca3b02fe01989d8ae0e02d8c1e3de851b1dcf8->enter($__internal_a6abe2405b96abf52d518cf747ca3b02fe01989d8ae0e02d8c1e3de851b1dcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_6b6150c9cf8e4dd90d1a8d0d08e9c42f42a8250120f6a77df4706aae227879c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6150c9cf8e4dd90d1a8d0d08e9c42f42a8250120f6a77df4706aae227879c4->enter($__internal_6b6150c9cf8e4dd90d1a8d0d08e9c42f42a8250120f6a77df4706aae227879c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6abe2405b96abf52d518cf747ca3b02fe01989d8ae0e02d8c1e3de851b1dcf8->leave($__internal_a6abe2405b96abf52d518cf747ca3b02fe01989d8ae0e02d8c1e3de851b1dcf8_prof);

        
        $__internal_6b6150c9cf8e4dd90d1a8d0d08e9c42f42a8250120f6a77df4706aae227879c4->leave($__internal_6b6150c9cf8e4dd90d1a8d0d08e9c42f42a8250120f6a77df4706aae227879c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8ac3776ded6c6fdf07f2f9ba188d5f8225b751a3fc7cbb8daffb3d588825de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ac3776ded6c6fdf07f2f9ba188d5f8225b751a3fc7cbb8daffb3d588825de0->enter($__internal_f8ac3776ded6c6fdf07f2f9ba188d5f8225b751a3fc7cbb8daffb3d588825de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e73dfa84bfde811c64742c9f5b3f85f982a2f173e7125dae9a11b6ac48b8df63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73dfa84bfde811c64742c9f5b3f85f982a2f173e7125dae9a11b6ac48b8df63->enter($__internal_e73dfa84bfde811c64742c9f5b3f85f982a2f173e7125dae9a11b6ac48b8df63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e73dfa84bfde811c64742c9f5b3f85f982a2f173e7125dae9a11b6ac48b8df63->leave($__internal_e73dfa84bfde811c64742c9f5b3f85f982a2f173e7125dae9a11b6ac48b8df63_prof);

        
        $__internal_f8ac3776ded6c6fdf07f2f9ba188d5f8225b751a3fc7cbb8daffb3d588825de0->leave($__internal_f8ac3776ded6c6fdf07f2f9ba188d5f8225b751a3fc7cbb8daffb3d588825de0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
