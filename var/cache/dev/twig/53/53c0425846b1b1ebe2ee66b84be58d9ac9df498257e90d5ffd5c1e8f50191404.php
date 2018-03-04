<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cd265a4e93ea1e6a453e9382bf18bdb823e8ddefa2088289173efdf8fd94c4d3 extends Twig_Template
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
        $__internal_22c7adf6106dd07e431792ab70dfe70968310718a09237b89e4d8010455bce46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c7adf6106dd07e431792ab70dfe70968310718a09237b89e4d8010455bce46->enter($__internal_22c7adf6106dd07e431792ab70dfe70968310718a09237b89e4d8010455bce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_fbb0e9f367ba55d341517d35e18abff11dc5004a050b279d9dd2903cf3469e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb0e9f367ba55d341517d35e18abff11dc5004a050b279d9dd2903cf3469e7c->enter($__internal_fbb0e9f367ba55d341517d35e18abff11dc5004a050b279d9dd2903cf3469e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_22c7adf6106dd07e431792ab70dfe70968310718a09237b89e4d8010455bce46->leave($__internal_22c7adf6106dd07e431792ab70dfe70968310718a09237b89e4d8010455bce46_prof);

        
        $__internal_fbb0e9f367ba55d341517d35e18abff11dc5004a050b279d9dd2903cf3469e7c->leave($__internal_fbb0e9f367ba55d341517d35e18abff11dc5004a050b279d9dd2903cf3469e7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
