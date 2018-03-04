<?php

/* EasyAdminBundle:default:field_file.html.twig */
class __TwigTemplate_dc8fb5c9e75a83ce5adff485b03c48ee76878ca01480aa26fb72da6e9588e21c extends Twig_Template
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
        $__internal_fbe30af107796fad228f4c3de02caae93cf909019920cfccd6ee126cf9325a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe30af107796fad228f4c3de02caae93cf909019920cfccd6ee126cf9325a22->enter($__internal_fbe30af107796fad228f4c3de02caae93cf909019920cfccd6ee126cf9325a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        $__internal_3a3452a096ec5074c4bb4d666ccce8b711ef7e3e241132cb52dcd363582d8757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3452a096ec5074c4bb4d666ccce8b711ef7e3e241132cb52dcd363582d8757->enter($__internal_3a3452a096ec5074c4bb4d666ccce8b711ef7e3e241132cb52dcd363582d8757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_file.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\" target=\"_blank\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["filename"] ?? $this->getContext($context, "filename"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_fbe30af107796fad228f4c3de02caae93cf909019920cfccd6ee126cf9325a22->leave($__internal_fbe30af107796fad228f4c3de02caae93cf909019920cfccd6ee126cf9325a22_prof);

        
        $__internal_3a3452a096ec5074c4bb4d666ccce8b711ef7e3e241132cb52dcd363582d8757->leave($__internal_3a3452a096ec5074c4bb4d666ccce8b711ef7e3e241132cb52dcd363582d8757_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ asset(value) }}\" target=\"_blank\">
    {{ filename|easyadmin_truncate }}
</a>
", "EasyAdminBundle:default:field_file.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_file.html.twig");
    }
}
