<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_3a56e3746058e0421b49502f0698d4b7e2de428370830e58fd6cb4a94259737b extends Twig_Template
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
        $__internal_e892f191d5188549e933b37cb6fded3ff047839490e6d2ee0732fdf05551be20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e892f191d5188549e933b37cb6fded3ff047839490e6d2ee0732fdf05551be20->enter($__internal_e892f191d5188549e933b37cb6fded3ff047839490e6d2ee0732fdf05551be20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_ae06b1558e4f18699748638791d32b0cfbb88e1787dfc877bc5c51e73f1a9500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae06b1558e4f18699748638791d32b0cfbb88e1787dfc877bc5c51e73f1a9500->enter($__internal_ae06b1558e4f18699748638791d32b0cfbb88e1787dfc877bc5c51e73f1a9500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_e892f191d5188549e933b37cb6fded3ff047839490e6d2ee0732fdf05551be20->leave($__internal_e892f191d5188549e933b37cb6fded3ff047839490e6d2ee0732fdf05551be20_prof);

        
        $__internal_ae06b1558e4f18699748638791d32b0cfbb88e1787dfc877bc5c51e73f1a9500->leave($__internal_ae06b1558e4f18699748638791d32b0cfbb88e1787dfc877bc5c51e73f1a9500_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
", "EasyAdminBundle:default:field_float.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_float.html.twig");
    }
}
