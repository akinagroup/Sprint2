<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_75e5d4ea772213851a234015d0177339746dc38120374b7661c9c22d1182733d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5215660b5d8e62d2cfe6d061d77f3da61415bb943435017ef6316c2546882a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5215660b5d8e62d2cfe6d061d77f3da61415bb943435017ef6316c2546882a4->enter($__internal_c5215660b5d8e62d2cfe6d061d77f3da61415bb943435017ef6316c2546882a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3e664b54a7275cf7e92d64b257c60dbf5feb9fe7b18f4de2bd59ad999653b815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e664b54a7275cf7e92d64b257c60dbf5feb9fe7b18f4de2bd59ad999653b815->enter($__internal_3e664b54a7275cf7e92d64b257c60dbf5feb9fe7b18f4de2bd59ad999653b815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c5215660b5d8e62d2cfe6d061d77f3da61415bb943435017ef6316c2546882a4->leave($__internal_c5215660b5d8e62d2cfe6d061d77f3da61415bb943435017ef6316c2546882a4_prof);

        
        $__internal_3e664b54a7275cf7e92d64b257c60dbf5feb9fe7b18f4de2bd59ad999653b815->leave($__internal_3e664b54a7275cf7e92d64b257c60dbf5feb9fe7b18f4de2bd59ad999653b815_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_31c3ed99f2c0d702f510b7cab9b78d091468af52f4f7fd2b0a32be31c26f6f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c3ed99f2c0d702f510b7cab9b78d091468af52f4f7fd2b0a32be31c26f6f40->enter($__internal_31c3ed99f2c0d702f510b7cab9b78d091468af52f4f7fd2b0a32be31c26f6f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d9acdcfb7d2adf4848603f9fc9e9f1e3f11a25ffcffa1d8ad6802e5d86adeaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9acdcfb7d2adf4848603f9fc9e9f1e3f11a25ffcffa1d8ad6802e5d86adeaf->enter($__internal_3d9acdcfb7d2adf4848603f9fc9e9f1e3f11a25ffcffa1d8ad6802e5d86adeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3d9acdcfb7d2adf4848603f9fc9e9f1e3f11a25ffcffa1d8ad6802e5d86adeaf->leave($__internal_3d9acdcfb7d2adf4848603f9fc9e9f1e3f11a25ffcffa1d8ad6802e5d86adeaf_prof);

        
        $__internal_31c3ed99f2c0d702f510b7cab9b78d091468af52f4f7fd2b0a32be31c26f6f40->leave($__internal_31c3ed99f2c0d702f510b7cab9b78d091468af52f4f7fd2b0a32be31c26f6f40_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
