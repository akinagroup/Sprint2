<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_95c8f0697dcfa00cb62e51b1ea2dc83e98a33c3ecad4fa2f8e23b040facf9990 extends Twig_Template
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
        $__internal_3b788716ebc62f1e42b51795aa812905d271c2d5380b340cc3a5f094e78bc178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b788716ebc62f1e42b51795aa812905d271c2d5380b340cc3a5f094e78bc178->enter($__internal_3b788716ebc62f1e42b51795aa812905d271c2d5380b340cc3a5f094e78bc178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_0de00e094784fc3b177bd15eb20dc524b537dbbd1d2f53bc2357453026ab1f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de00e094784fc3b177bd15eb20dc524b537dbbd1d2f53bc2357453026ab1f96->enter($__internal_0de00e094784fc3b177bd15eb20dc524b537dbbd1d2f53bc2357453026ab1f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_3b788716ebc62f1e42b51795aa812905d271c2d5380b340cc3a5f094e78bc178->leave($__internal_3b788716ebc62f1e42b51795aa812905d271c2d5380b340cc3a5f094e78bc178_prof);

        
        $__internal_0de00e094784fc3b177bd15eb20dc524b537dbbd1d2f53bc2357453026ab1f96->leave($__internal_0de00e094784fc3b177bd15eb20dc524b537dbbd1d2f53bc2357453026ab1f96_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
