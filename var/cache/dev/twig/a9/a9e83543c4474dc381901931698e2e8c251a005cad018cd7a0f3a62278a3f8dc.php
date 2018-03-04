<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_4713242b2055c30da4ec265426b795b34a51efc65825e94d113bfa00ec580cce extends Twig_Template
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
        $__internal_dce4d9559324a773672b7025084fa804c02e3f9f9fb77b61f32121165a27feff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce4d9559324a773672b7025084fa804c02e3f9f9fb77b61f32121165a27feff->enter($__internal_dce4d9559324a773672b7025084fa804c02e3f9f9fb77b61f32121165a27feff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_02ba7faaaf1b07a6bfd1cd23b4905b44d6381d65a9e47dd24bf0b595b6def71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ba7faaaf1b07a6bfd1cd23b4905b44d6381d65a9e47dd24bf0b595b6def71e->enter($__internal_02ba7faaaf1b07a6bfd1cd23b4905b44d6381d65a9e47dd24bf0b595b6def71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_dce4d9559324a773672b7025084fa804c02e3f9f9fb77b61f32121165a27feff->leave($__internal_dce4d9559324a773672b7025084fa804c02e3f9f9fb77b61f32121165a27feff_prof);

        
        $__internal_02ba7faaaf1b07a6bfd1cd23b4905b44d6381d65a9e47dd24bf0b595b6def71e->leave($__internal_02ba7faaaf1b07a6bfd1cd23b4905b44d6381d65a9e47dd24bf0b595b6def71e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
", "EasyAdminBundle:default:field_smallint.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_smallint.html.twig");
    }
}
