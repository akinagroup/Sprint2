<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7c87748acaecf2cca85bbc47cf61bd18106718887ebfa50d0e6ef89a794f6fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_3fd5db8def998e290e4924e635ad09a2c5c5b15af5aed9f297148c2cbed34a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd5db8def998e290e4924e635ad09a2c5c5b15af5aed9f297148c2cbed34a28->enter($__internal_3fd5db8def998e290e4924e635ad09a2c5c5b15af5aed9f297148c2cbed34a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_5c14f2311d99d2bd4560fb3f39db78dc1298731556ce3c7b3908596d4c784b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c14f2311d99d2bd4560fb3f39db78dc1298731556ce3c7b3908596d4c784b0f->enter($__internal_5c14f2311d99d2bd4560fb3f39db78dc1298731556ce3c7b3908596d4c784b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd5db8def998e290e4924e635ad09a2c5c5b15af5aed9f297148c2cbed34a28->leave($__internal_3fd5db8def998e290e4924e635ad09a2c5c5b15af5aed9f297148c2cbed34a28_prof);

        
        $__internal_5c14f2311d99d2bd4560fb3f39db78dc1298731556ce3c7b3908596d4c784b0f->leave($__internal_5c14f2311d99d2bd4560fb3f39db78dc1298731556ce3c7b3908596d4c784b0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85a93924688b69ebd484b6f4bebec36245861e5b930372838d531665574dec00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a93924688b69ebd484b6f4bebec36245861e5b930372838d531665574dec00->enter($__internal_85a93924688b69ebd484b6f4bebec36245861e5b930372838d531665574dec00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9fee4ee709f037ad88ced95429f1e0135ffbb0eccd9c12a1290134f473d78eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fee4ee709f037ad88ced95429f1e0135ffbb0eccd9c12a1290134f473d78eeb->enter($__internal_9fee4ee709f037ad88ced95429f1e0135ffbb0eccd9c12a1290134f473d78eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_9fee4ee709f037ad88ced95429f1e0135ffbb0eccd9c12a1290134f473d78eeb->leave($__internal_9fee4ee709f037ad88ced95429f1e0135ffbb0eccd9c12a1290134f473d78eeb_prof);

        
        $__internal_85a93924688b69ebd484b6f4bebec36245861e5b930372838d531665574dec00->leave($__internal_85a93924688b69ebd484b6f4bebec36245861e5b930372838d531665574dec00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/GroupJoob/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
