<?php

/* AkinaImmobilierBundle:Front:reserve.html.twig */
class __TwigTemplate_80729167dfb63c2fca7a8c1131ee53e049618b2a36c49de901995789f1dc7e38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "AkinaImmobilierBundle:Front:reserve.html.twig", 1);
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
        $__internal_09ba4e438945c4b575a6e7ce0b6b4bfa295e21df1b374d2be280513427c70e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ba4e438945c4b575a6e7ce0b6b4bfa295e21df1b374d2be280513427c70e6d->enter($__internal_09ba4e438945c4b575a6e7ce0b6b4bfa295e21df1b374d2be280513427c70e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:reserve.html.twig"));

        $__internal_20cb3481c23fc708efbf6660d8dfd0ddc1aef4260eaea9ee27e2081d917510bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cb3481c23fc708efbf6660d8dfd0ddc1aef4260eaea9ee27e2081d917510bc->enter($__internal_20cb3481c23fc708efbf6660d8dfd0ddc1aef4260eaea9ee27e2081d917510bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:reserve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09ba4e438945c4b575a6e7ce0b6b4bfa295e21df1b374d2be280513427c70e6d->leave($__internal_09ba4e438945c4b575a6e7ce0b6b4bfa295e21df1b374d2be280513427c70e6d_prof);

        
        $__internal_20cb3481c23fc708efbf6660d8dfd0ddc1aef4260eaea9ee27e2081d917510bc->leave($__internal_20cb3481c23fc708efbf6660d8dfd0ddc1aef4260eaea9ee27e2081d917510bc_prof);

    }

    // line 2
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_0d7134b96c82e2b0a47abe6c3f1b244d61bf99e9a67f3eb6a6b27c892c9d53cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7134b96c82e2b0a47abe6c3f1b244d61bf99e9a67f3eb6a6b27c892c9d53cf->enter($__internal_0d7134b96c82e2b0a47abe6c3f1b244d61bf99e9a67f3eb6a6b27c892c9d53cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_4012dedf0569aad1916cffd14ed45cb3e5fde1d1913a9739ae2e4cf187a65a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4012dedf0569aad1916cffd14ed45cb3e5fde1d1913a9739ae2e4cf187a65a17->enter($__internal_4012dedf0569aad1916cffd14ed45cb3e5fde1d1913a9739ae2e4cf187a65a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 3
        echo " <strong>Cliquer ici pour valider</strong>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<input class=\"btn btn-dark\" type=\"submit\" id=\"soumet\" value=\"Valider\" />

        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
 ";
        
        $__internal_4012dedf0569aad1916cffd14ed45cb3e5fde1d1913a9739ae2e4cf187a65a17->leave($__internal_4012dedf0569aad1916cffd14ed45cb3e5fde1d1913a9739ae2e4cf187a65a17_prof);

        
        $__internal_0d7134b96c82e2b0a47abe6c3f1b244d61bf99e9a67f3eb6a6b27c892c9d53cf->leave($__internal_0d7134b96c82e2b0a47abe6c3f1b244d61bf99e9a67f3eb6a6b27c892c9d53cf_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:reserve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
 {% block catalogue  %}
 <strong>Cliquer ici pour valider</strong>
{{ form_start(form)}}
<input class=\"btn btn-dark\" type=\"submit\" id=\"soumet\" value=\"Valider\" />

        {{form_end(form)}}
 {% endblock %}", "AkinaImmobilierBundle:Front:reserve.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Front/reserve.html.twig");
    }
}
