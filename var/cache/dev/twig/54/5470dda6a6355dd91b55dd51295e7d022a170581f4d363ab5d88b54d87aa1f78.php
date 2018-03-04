<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ae5ec6511213065fe117fada0794e1961eb474af5f4bc0be99d2e99fea39f8b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_37d497e826af84037c8798e57c64e8d4f5a8655c92676037b1a69866ca068f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d497e826af84037c8798e57c64e8d4f5a8655c92676037b1a69866ca068f1f->enter($__internal_37d497e826af84037c8798e57c64e8d4f5a8655c92676037b1a69866ca068f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_a82cbb83026775b7da52882d37db945951a6d84f5547b57b3132e32cdc3cbf0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82cbb83026775b7da52882d37db945951a6d84f5547b57b3132e32cdc3cbf0c->enter($__internal_a82cbb83026775b7da52882d37db945951a6d84f5547b57b3132e32cdc3cbf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37d497e826af84037c8798e57c64e8d4f5a8655c92676037b1a69866ca068f1f->leave($__internal_37d497e826af84037c8798e57c64e8d4f5a8655c92676037b1a69866ca068f1f_prof);

        
        $__internal_a82cbb83026775b7da52882d37db945951a6d84f5547b57b3132e32cdc3cbf0c->leave($__internal_a82cbb83026775b7da52882d37db945951a6d84f5547b57b3132e32cdc3cbf0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50b49036ac829a2c032b74a4b86477508f46732a93417ca673dfb3707f31e401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b49036ac829a2c032b74a4b86477508f46732a93417ca673dfb3707f31e401->enter($__internal_50b49036ac829a2c032b74a4b86477508f46732a93417ca673dfb3707f31e401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6dc113338a2ee6fca13a5088f2674008dd1039c60a7b0755e1c63728f822f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dc113338a2ee6fca13a5088f2674008dd1039c60a7b0755e1c63728f822f2d->enter($__internal_d6dc113338a2ee6fca13a5088f2674008dd1039c60a7b0755e1c63728f822f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d6dc113338a2ee6fca13a5088f2674008dd1039c60a7b0755e1c63728f822f2d->leave($__internal_d6dc113338a2ee6fca13a5088f2674008dd1039c60a7b0755e1c63728f822f2d_prof);

        
        $__internal_50b49036ac829a2c032b74a4b86477508f46732a93417ca673dfb3707f31e401->leave($__internal_50b49036ac829a2c032b74a4b86477508f46732a93417ca673dfb3707f31e401_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
