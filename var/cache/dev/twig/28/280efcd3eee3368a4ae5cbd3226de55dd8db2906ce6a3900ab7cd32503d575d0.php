<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_68554521a4ff68edf532fc7d0220ecb547378bfff350a100485dcf084d9da98d extends Twig_Template
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
        $__internal_f0f1b90388f46bc6dc1e20c97f63f50883d2b82bb8b6846046f2f37a3597b295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f1b90388f46bc6dc1e20c97f63f50883d2b82bb8b6846046f2f37a3597b295->enter($__internal_f0f1b90388f46bc6dc1e20c97f63f50883d2b82bb8b6846046f2f37a3597b295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_3fc1f28680cd766a0fa85700d30b700e8bd706f4c8d02de8dae308fb7ad24968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc1f28680cd766a0fa85700d30b700e8bd706f4c8d02de8dae308fb7ad24968->enter($__internal_3fc1f28680cd766a0fa85700d30b700e8bd706f4c8d02de8dae308fb7ad24968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f0f1b90388f46bc6dc1e20c97f63f50883d2b82bb8b6846046f2f37a3597b295->leave($__internal_f0f1b90388f46bc6dc1e20c97f63f50883d2b82bb8b6846046f2f37a3597b295_prof);

        
        $__internal_3fc1f28680cd766a0fa85700d30b700e8bd706f4c8d02de8dae308fb7ad24968->leave($__internal_3fc1f28680cd766a0fa85700d30b700e8bd706f4c8d02de8dae308fb7ad24968_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
