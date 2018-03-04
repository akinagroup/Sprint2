<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_375b7c228bff38661672c44e2ccd8491eb911f14b202b78e50860122ce69bc6b extends Twig_Template
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
        $__internal_1e476e267ff3c64639ee5f61a39ed7ddd0a2fc7d717554af00ddfec20168c5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e476e267ff3c64639ee5f61a39ed7ddd0a2fc7d717554af00ddfec20168c5ba->enter($__internal_1e476e267ff3c64639ee5f61a39ed7ddd0a2fc7d717554af00ddfec20168c5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e255884dda147191e2515c86b339c28bb5a9af100b26c68248a98e59e0425ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e255884dda147191e2515c86b339c28bb5a9af100b26c68248a98e59e0425ee2->enter($__internal_e255884dda147191e2515c86b339c28bb5a9af100b26c68248a98e59e0425ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1e476e267ff3c64639ee5f61a39ed7ddd0a2fc7d717554af00ddfec20168c5ba->leave($__internal_1e476e267ff3c64639ee5f61a39ed7ddd0a2fc7d717554af00ddfec20168c5ba_prof);

        
        $__internal_e255884dda147191e2515c86b339c28bb5a9af100b26c68248a98e59e0425ee2->leave($__internal_e255884dda147191e2515c86b339c28bb5a9af100b26c68248a98e59e0425ee2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
