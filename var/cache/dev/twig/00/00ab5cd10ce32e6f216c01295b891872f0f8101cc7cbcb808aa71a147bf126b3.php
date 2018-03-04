<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_43d38908d30dbf5d1f3cbd545f6ca6bd85724040ae271d48c4af16a0cf3ea814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8a7d718e91ddf2feaae4debb96f78bd60ebe9d7f924cd1da6058da649f5f085d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7d718e91ddf2feaae4debb96f78bd60ebe9d7f924cd1da6058da649f5f085d->enter($__internal_8a7d718e91ddf2feaae4debb96f78bd60ebe9d7f924cd1da6058da649f5f085d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_4d17da8910d990c945918c2e7097bf64292af6e5f77626449f16267998a20513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d17da8910d990c945918c2e7097bf64292af6e5f77626449f16267998a20513->enter($__internal_4d17da8910d990c945918c2e7097bf64292af6e5f77626449f16267998a20513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a7d718e91ddf2feaae4debb96f78bd60ebe9d7f924cd1da6058da649f5f085d->leave($__internal_8a7d718e91ddf2feaae4debb96f78bd60ebe9d7f924cd1da6058da649f5f085d_prof);

        
        $__internal_4d17da8910d990c945918c2e7097bf64292af6e5f77626449f16267998a20513->leave($__internal_4d17da8910d990c945918c2e7097bf64292af6e5f77626449f16267998a20513_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db48d766681e033e8d08ecdad9ec0e32e2164bcf2c96a77a1cb0f8363a6f5ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db48d766681e033e8d08ecdad9ec0e32e2164bcf2c96a77a1cb0f8363a6f5ae2->enter($__internal_db48d766681e033e8d08ecdad9ec0e32e2164bcf2c96a77a1cb0f8363a6f5ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bd645ff35c9fd5594ac307547e8d8be057d4dd160adc9c0d471db33b83eba413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd645ff35c9fd5594ac307547e8d8be057d4dd160adc9c0d471db33b83eba413->enter($__internal_bd645ff35c9fd5594ac307547e8d8be057d4dd160adc9c0d471db33b83eba413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_bd645ff35c9fd5594ac307547e8d8be057d4dd160adc9c0d471db33b83eba413->leave($__internal_bd645ff35c9fd5594ac307547e8d8be057d4dd160adc9c0d471db33b83eba413_prof);

        
        $__internal_db48d766681e033e8d08ecdad9ec0e32e2164bcf2c96a77a1cb0f8363a6f5ae2->leave($__internal_db48d766681e033e8d08ecdad9ec0e32e2164bcf2c96a77a1cb0f8363a6f5ae2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
