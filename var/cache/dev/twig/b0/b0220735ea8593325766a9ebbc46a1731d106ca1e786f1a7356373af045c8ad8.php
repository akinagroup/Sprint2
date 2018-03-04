<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_f0fed0b80bab445e75404bc75476c2d3fe735db75a52e73f510d56eaab251cf5 extends Twig_Template
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
        $__internal_8ee33b923d539430afe565ded2da94af6ecbc3ca841221366eb79c4184902a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee33b923d539430afe565ded2da94af6ecbc3ca841221366eb79c4184902a36->enter($__internal_8ee33b923d539430afe565ded2da94af6ecbc3ca841221366eb79c4184902a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_4d86227b928d47bb696ea808e51c70f4c8334d559fc28ee523026c65f8d04a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d86227b928d47bb696ea808e51c70f4c8334d559fc28ee523026c65f8d04a9a->enter($__internal_4d86227b928d47bb696ea808e51c70f4c8334d559fc28ee523026c65f8d04a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_8ee33b923d539430afe565ded2da94af6ecbc3ca841221366eb79c4184902a36->leave($__internal_8ee33b923d539430afe565ded2da94af6ecbc3ca841221366eb79c4184902a36_prof);

        
        $__internal_4d86227b928d47bb696ea808e51c70f4c8334d559fc28ee523026c65f8d04a9a->leave($__internal_4d86227b928d47bb696ea808e51c70f4c8334d559fc28ee523026c65f8d04a9a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_integer.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
