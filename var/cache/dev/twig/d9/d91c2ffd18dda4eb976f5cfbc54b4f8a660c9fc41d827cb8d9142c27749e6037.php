<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_87d4094b0be40b2b39c8f3abe805194a9224e0db37b726108f2e62ea0efbd011 extends Twig_Template
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
        $__internal_0624d42cb9e155e12c008ff1a0c56773fd3c341d8fb5e0922cf5e8a53e0e3a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0624d42cb9e155e12c008ff1a0c56773fd3c341d8fb5e0922cf5e8a53e0e3a2f->enter($__internal_0624d42cb9e155e12c008ff1a0c56773fd3c341d8fb5e0922cf5e8a53e0e3a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_aafa3eb3cd97beab8e27d412a345e60b46528bafde6f73c2c5cf8c12f098cfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafa3eb3cd97beab8e27d412a345e60b46528bafde6f73c2c5cf8c12f098cfca->enter($__internal_aafa3eb3cd97beab8e27d412a345e60b46528bafde6f73c2c5cf8c12f098cfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_0624d42cb9e155e12c008ff1a0c56773fd3c341d8fb5e0922cf5e8a53e0e3a2f->leave($__internal_0624d42cb9e155e12c008ff1a0c56773fd3c341d8fb5e0922cf5e8a53e0e3a2f_prof);

        
        $__internal_aafa3eb3cd97beab8e27d412a345e60b46528bafde6f73c2c5cf8c12f098cfca->leave($__internal_aafa3eb3cd97beab8e27d412a345e60b46528bafde6f73c2c5cf8c12f098cfca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
