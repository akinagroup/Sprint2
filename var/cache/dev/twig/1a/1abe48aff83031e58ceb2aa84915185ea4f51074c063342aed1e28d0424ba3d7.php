<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_a0565f80d2cf0fbb0f833c012d59a4b57769595ff4f0e94f299dfa1a0d9943e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_75d9b1c8d13a0a8da61ae7e94caf50f7c832c490512df310943aad7ad1c3371d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d9b1c8d13a0a8da61ae7e94caf50f7c832c490512df310943aad7ad1c3371d->enter($__internal_75d9b1c8d13a0a8da61ae7e94caf50f7c832c490512df310943aad7ad1c3371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_91c707409c147338f18bc78ca8c91d0eff482bfcf1e62b075ed60d195d7bfb86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c707409c147338f18bc78ca8c91d0eff482bfcf1e62b075ed60d195d7bfb86->enter($__internal_91c707409c147338f18bc78ca8c91d0eff482bfcf1e62b075ed60d195d7bfb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75d9b1c8d13a0a8da61ae7e94caf50f7c832c490512df310943aad7ad1c3371d->leave($__internal_75d9b1c8d13a0a8da61ae7e94caf50f7c832c490512df310943aad7ad1c3371d_prof);

        
        $__internal_91c707409c147338f18bc78ca8c91d0eff482bfcf1e62b075ed60d195d7bfb86->leave($__internal_91c707409c147338f18bc78ca8c91d0eff482bfcf1e62b075ed60d195d7bfb86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13825c6237038aca67b27f317281849763c2e280d371455c73c3b31b7b23273d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13825c6237038aca67b27f317281849763c2e280d371455c73c3b31b7b23273d->enter($__internal_13825c6237038aca67b27f317281849763c2e280d371455c73c3b31b7b23273d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9d8b720d7490bbd79bcdcf76601e5e26dc55932fbe8a0d0cb387412d186fd72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d8b720d7490bbd79bcdcf76601e5e26dc55932fbe8a0d0cb387412d186fd72->enter($__internal_e9d8b720d7490bbd79bcdcf76601e5e26dc55932fbe8a0d0cb387412d186fd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e9d8b720d7490bbd79bcdcf76601e5e26dc55932fbe8a0d0cb387412d186fd72->leave($__internal_e9d8b720d7490bbd79bcdcf76601e5e26dc55932fbe8a0d0cb387412d186fd72_prof);

        
        $__internal_13825c6237038aca67b27f317281849763c2e280d371455c73c3b31b7b23273d->leave($__internal_13825c6237038aca67b27f317281849763c2e280d371455c73c3b31b7b23273d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
