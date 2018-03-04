<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_d1fc08b3bf8217e637a7ae25e1d804aa5b0015d0d0c111e4e5d2623cbf373e9a extends Twig_Template
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
        $__internal_f02a99d43e61582b7332ca060a66e033d896970d27cec3bef9773b38154c97e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02a99d43e61582b7332ca060a66e033d896970d27cec3bef9773b38154c97e1->enter($__internal_f02a99d43e61582b7332ca060a66e033d896970d27cec3bef9773b38154c97e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_040b9f8340072c7cbf0a0ab5a3b71166671a87595026444363c9e70d52f0a7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040b9f8340072c7cbf0a0ab5a3b71166671a87595026444363c9e70d52f0a7bc->enter($__internal_040b9f8340072c7cbf0a0ab5a3b71166671a87595026444363c9e70d52f0a7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_f02a99d43e61582b7332ca060a66e033d896970d27cec3bef9773b38154c97e1->leave($__internal_f02a99d43e61582b7332ca060a66e033d896970d27cec3bef9773b38154c97e1_prof);

        
        $__internal_040b9f8340072c7cbf0a0ab5a3b71166671a87595026444363c9e70d52f0a7bc->leave($__internal_040b9f8340072c7cbf0a0ab5a3b71166671a87595026444363c9e70d52f0a7bc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_decimal.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_decimal.html.twig");
    }
}
