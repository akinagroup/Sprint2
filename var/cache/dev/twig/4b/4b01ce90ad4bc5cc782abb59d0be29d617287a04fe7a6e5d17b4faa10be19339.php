<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_83ccf517b436b7cfae28c8eaaa64a4de3556e9cc17767e7ae5c1d3b27236d094 extends Twig_Template
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
        $__internal_f9159d31fd298911a03401df7138e0c9548b2626c8ffe6ccfc53703afa411276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9159d31fd298911a03401df7138e0c9548b2626c8ffe6ccfc53703afa411276->enter($__internal_f9159d31fd298911a03401df7138e0c9548b2626c8ffe6ccfc53703afa411276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_89e83601830e6e857a522473e20013806179a38afa6f9654f2bf333a57033f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e83601830e6e857a522473e20013806179a38afa6f9654f2bf333a57033f79->enter($__internal_89e83601830e6e857a522473e20013806179a38afa6f9654f2bf333a57033f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f9159d31fd298911a03401df7138e0c9548b2626c8ffe6ccfc53703afa411276->leave($__internal_f9159d31fd298911a03401df7138e0c9548b2626c8ffe6ccfc53703afa411276_prof);

        
        $__internal_89e83601830e6e857a522473e20013806179a38afa6f9654f2bf333a57033f79->leave($__internal_89e83601830e6e857a522473e20013806179a38afa6f9654f2bf333a57033f79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
