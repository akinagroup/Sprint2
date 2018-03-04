<?php

/* AkinaImmobilierBundle:Front:valide.html.twig */
class __TwigTemplate_3f32b839320448e1f8fc182d6b806fc768e883107c3943e3041729cc093a9ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "AkinaImmobilierBundle:Front:valide.html.twig", 1);
        $this->blocks = array(
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab432924d71be5431881ad639a5f6369c01321f2362310d428379ebf8f501b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab432924d71be5431881ad639a5f6369c01321f2362310d428379ebf8f501b51->enter($__internal_ab432924d71be5431881ad639a5f6369c01321f2362310d428379ebf8f501b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:valide.html.twig"));

        $__internal_ea8415775bc0861274e205c02074eb53ab01b47b5b997cdbbf4d95759fce94c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8415775bc0861274e205c02074eb53ab01b47b5b997cdbbf4d95759fce94c5->enter($__internal_ea8415775bc0861274e205c02074eb53ab01b47b5b997cdbbf4d95759fce94c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:valide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab432924d71be5431881ad639a5f6369c01321f2362310d428379ebf8f501b51->leave($__internal_ab432924d71be5431881ad639a5f6369c01321f2362310d428379ebf8f501b51_prof);

        
        $__internal_ea8415775bc0861274e205c02074eb53ab01b47b5b997cdbbf4d95759fce94c5->leave($__internal_ea8415775bc0861274e205c02074eb53ab01b47b5b997cdbbf4d95759fce94c5_prof);

    }

    // line 2
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_14437698e82daa6d7e8056da918c24b5ec915e2ce67050668d512b7dfe5cb5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14437698e82daa6d7e8056da918c24b5ec915e2ce67050668d512b7dfe5cb5fb->enter($__internal_14437698e82daa6d7e8056da918c24b5ec915e2ce67050668d512b7dfe5cb5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_007ff2fcdd051911773c6e2a7bd8f63ad67b1a9dca8462228ae781691c76f32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007ff2fcdd051911773c6e2a7bd8f63ad67b1a9dca8462228ae781691c76f32c->enter($__internal_007ff2fcdd051911773c6e2a7bd8f63ad67b1a9dca8462228ae781691c76f32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 3
        echo "
 <h1>Bravos votre réservation a été enregistrer avec succés</h1>
          <!-- /.row -->
           ";
        
        $__internal_007ff2fcdd051911773c6e2a7bd8f63ad67b1a9dca8462228ae781691c76f32c->leave($__internal_007ff2fcdd051911773c6e2a7bd8f63ad67b1a9dca8462228ae781691c76f32c_prof);

        
        $__internal_14437698e82daa6d7e8056da918c24b5ec915e2ce67050668d512b7dfe5cb5fb->leave($__internal_14437698e82daa6d7e8056da918c24b5ec915e2ce67050668d512b7dfe5cb5fb_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:valide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}
 {% block catalogue %}

 <h1>Bravos votre réservation a été enregistrer avec succés</h1>
          <!-- /.row -->
           {% endblock %}
          ", "AkinaImmobilierBundle:Front:valide.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Front/valide.html.twig");
    }
}
