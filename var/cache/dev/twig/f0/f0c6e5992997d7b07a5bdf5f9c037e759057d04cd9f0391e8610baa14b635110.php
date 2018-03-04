<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_355f80c0b0eb4f6b9371b3019a87c2c5b9b1badb09a221fe7afd05c10f51f464 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ba01481871b013b106b5029d96fb1eeaffea82cdb5515053ce46c854d05303d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba01481871b013b106b5029d96fb1eeaffea82cdb5515053ce46c854d05303d4->enter($__internal_ba01481871b013b106b5029d96fb1eeaffea82cdb5515053ce46c854d05303d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_71714e93e51b0e5f09b00d1630b940ec0dc5e1393ad0ff98bc79fe36577c5dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71714e93e51b0e5f09b00d1630b940ec0dc5e1393ad0ff98bc79fe36577c5dc3->enter($__internal_71714e93e51b0e5f09b00d1630b940ec0dc5e1393ad0ff98bc79fe36577c5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba01481871b013b106b5029d96fb1eeaffea82cdb5515053ce46c854d05303d4->leave($__internal_ba01481871b013b106b5029d96fb1eeaffea82cdb5515053ce46c854d05303d4_prof);

        
        $__internal_71714e93e51b0e5f09b00d1630b940ec0dc5e1393ad0ff98bc79fe36577c5dc3->leave($__internal_71714e93e51b0e5f09b00d1630b940ec0dc5e1393ad0ff98bc79fe36577c5dc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9382e04f698e56c08cbcbae5b40bc8303592bf652a4c8c54a18722d496c7a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9382e04f698e56c08cbcbae5b40bc8303592bf652a4c8c54a18722d496c7a8b->enter($__internal_d9382e04f698e56c08cbcbae5b40bc8303592bf652a4c8c54a18722d496c7a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6b20cfbe2270f6e66aefa15a219285bfa23c7abed6d1eaeec5826f9d418235d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b20cfbe2270f6e66aefa15a219285bfa23c7abed6d1eaeec5826f9d418235d->enter($__internal_c6b20cfbe2270f6e66aefa15a219285bfa23c7abed6d1eaeec5826f9d418235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c6b20cfbe2270f6e66aefa15a219285bfa23c7abed6d1eaeec5826f9d418235d->leave($__internal_c6b20cfbe2270f6e66aefa15a219285bfa23c7abed6d1eaeec5826f9d418235d_prof);

        
        $__internal_d9382e04f698e56c08cbcbae5b40bc8303592bf652a4c8c54a18722d496c7a8b->leave($__internal_d9382e04f698e56c08cbcbae5b40bc8303592bf652a4c8c54a18722d496c7a8b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
