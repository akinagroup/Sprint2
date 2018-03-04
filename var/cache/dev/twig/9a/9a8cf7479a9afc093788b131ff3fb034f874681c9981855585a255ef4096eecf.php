<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_8788d53e14e226eeee095cc5ad453b978ec260f88f1d297017f974c953601deb extends Twig_Template
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
        $__internal_68321f7df2bf7d1b83483d88662b5a923dcdb943a9ba710613656bcc39f32b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68321f7df2bf7d1b83483d88662b5a923dcdb943a9ba710613656bcc39f32b6b->enter($__internal_68321f7df2bf7d1b83483d88662b5a923dcdb943a9ba710613656bcc39f32b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_dce84aaec946189757adc50a78efc4d6d79b0e2712dc5fdbba7772b4652c3227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce84aaec946189757adc50a78efc4d6d79b0e2712dc5fdbba7772b4652c3227->enter($__internal_dce84aaec946189757adc50a78efc4d6d79b0e2712dc5fdbba7772b4652c3227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_68321f7df2bf7d1b83483d88662b5a923dcdb943a9ba710613656bcc39f32b6b->leave($__internal_68321f7df2bf7d1b83483d88662b5a923dcdb943a9ba710613656bcc39f32b6b_prof);

        
        $__internal_dce84aaec946189757adc50a78efc4d6d79b0e2712dc5fdbba7772b4652c3227->leave($__internal_dce84aaec946189757adc50a78efc4d6d79b0e2712dc5fdbba7772b4652c3227_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_datetimetz.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_datetimetz.html.twig");
    }
}
