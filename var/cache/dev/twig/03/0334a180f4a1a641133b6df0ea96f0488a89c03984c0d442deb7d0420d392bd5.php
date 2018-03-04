<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_165d13e4556b5f6f147e8daf6fc1d250ad44dbeb5fc8be27e7542f47b712c0da extends Twig_Template
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
        $__internal_20f697233d0aec69428aa2738e4b0eddfc45fcb1425959d40c4f07233f767c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f697233d0aec69428aa2738e4b0eddfc45fcb1425959d40c4f07233f767c31->enter($__internal_20f697233d0aec69428aa2738e4b0eddfc45fcb1425959d40c4f07233f767c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_f36fe1fbce8027ff4621ba972a325c6a96b4de710a616f6ac6683070e5511372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36fe1fbce8027ff4621ba972a325c6a96b4de710a616f6ac6683070e5511372->enter($__internal_f36fe1fbce8027ff4621ba972a325c6a96b4de710a616f6ac6683070e5511372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_20f697233d0aec69428aa2738e4b0eddfc45fcb1425959d40c4f07233f767c31->leave($__internal_20f697233d0aec69428aa2738e4b0eddfc45fcb1425959d40c4f07233f767c31_prof);

        
        $__internal_f36fe1fbce8027ff4621ba972a325c6a96b4de710a616f6ac6683070e5511372->leave($__internal_f36fe1fbce8027ff4621ba972a325c6a96b4de710a616f6ac6683070e5511372_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
