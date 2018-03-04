<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_326f777d38e951b76c8c5ab01a75a2c3d41ebbe68313b24301d4ae7e8750d379 extends Twig_Template
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
        $__internal_02fd7a3680b305c7f6e59e1b5c59c23cf9b907f890858cd867db39bd824263d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fd7a3680b305c7f6e59e1b5c59c23cf9b907f890858cd867db39bd824263d6->enter($__internal_02fd7a3680b305c7f6e59e1b5c59c23cf9b907f890858cd867db39bd824263d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_4be41076feb1b34695b0b770e20f8409a01df03f995fae097b42547056a60d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be41076feb1b34695b0b770e20f8409a01df03f995fae097b42547056a60d6e->enter($__internal_4be41076feb1b34695b0b770e20f8409a01df03f995fae097b42547056a60d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_02fd7a3680b305c7f6e59e1b5c59c23cf9b907f890858cd867db39bd824263d6->leave($__internal_02fd7a3680b305c7f6e59e1b5c59c23cf9b907f890858cd867db39bd824263d6_prof);

        
        $__internal_4be41076feb1b34695b0b770e20f8409a01df03f995fae097b42547056a60d6e->leave($__internal_4be41076feb1b34695b0b770e20f8409a01df03f995fae097b42547056a60d6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
