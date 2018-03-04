<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_ef2a942123bf56291077719de0d6347b3a2fe24f4db46f33b3b65bc4705cc0f0 extends Twig_Template
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
        $__internal_e46d9aed5b77f82797fe8368a62bdefed0ff783df5c17479651892d0969b33c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46d9aed5b77f82797fe8368a62bdefed0ff783df5c17479651892d0969b33c3->enter($__internal_e46d9aed5b77f82797fe8368a62bdefed0ff783df5c17479651892d0969b33c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_9c538e7a287320d7b5460fc8d06ab99d7128cb24c36765cfdf7448c5c54e3d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c538e7a287320d7b5460fc8d06ab99d7128cb24c36765cfdf7448c5c54e3d8f->enter($__internal_9c538e7a287320d7b5460fc8d06ab99d7128cb24c36765cfdf7448c5c54e3d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_e46d9aed5b77f82797fe8368a62bdefed0ff783df5c17479651892d0969b33c3->leave($__internal_e46d9aed5b77f82797fe8368a62bdefed0ff783df5c17479651892d0969b33c3_prof);

        
        $__internal_9c538e7a287320d7b5460fc8d06ab99d7128cb24c36765cfdf7448c5c54e3d8f->leave($__internal_9c538e7a287320d7b5460fc8d06ab99d7128cb24c36765cfdf7448c5c54e3d8f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
", "EasyAdminBundle:default:field_datetime.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
