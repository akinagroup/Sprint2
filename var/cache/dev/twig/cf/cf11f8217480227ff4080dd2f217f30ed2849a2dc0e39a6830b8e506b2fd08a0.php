<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_cd4ffb4fee75486100ff41658d1dd50f1a1c9a1c49dd2b8095a72d519d9b19b9 extends Twig_Template
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
        $__internal_c859dde3354647d48bb432a03c89a38c530aa5e56cfa82cbd47ef3d07355d62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c859dde3354647d48bb432a03c89a38c530aa5e56cfa82cbd47ef3d07355d62d->enter($__internal_c859dde3354647d48bb432a03c89a38c530aa5e56cfa82cbd47ef3d07355d62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_e8f28de558ca065c1c58732d8477967c9fb69b4ef1d9ef7057d8dff914524dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f28de558ca065c1c58732d8477967c9fb69b4ef1d9ef7057d8dff914524dae->enter($__internal_e8f28de558ca065c1c58732d8477967c9fb69b4ef1d9ef7057d8dff914524dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c859dde3354647d48bb432a03c89a38c530aa5e56cfa82cbd47ef3d07355d62d->leave($__internal_c859dde3354647d48bb432a03c89a38c530aa5e56cfa82cbd47ef3d07355d62d_prof);

        
        $__internal_e8f28de558ca065c1c58732d8477967c9fb69b4ef1d9ef7057d8dff914524dae->leave($__internal_e8f28de558ca065c1c58732d8477967c9fb69b4ef1d9ef7057d8dff914524dae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
