<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_92c189038082cf34ceba5f2250c54ba08a64a955c4028cd921258934991e5f41 extends Twig_Template
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
        $__internal_3a99ca3d57f822da3e9bbe0280941d13822e975ebaa8ab934391d2e674e5b539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a99ca3d57f822da3e9bbe0280941d13822e975ebaa8ab934391d2e674e5b539->enter($__internal_3a99ca3d57f822da3e9bbe0280941d13822e975ebaa8ab934391d2e674e5b539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_9d1c8d69aa1de2d471a5e895e678c19acf9a6de61b572baaa927e2c1cd2abd9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1c8d69aa1de2d471a5e895e678c19acf9a6de61b572baaa927e2c1cd2abd9d->enter($__internal_9d1c8d69aa1de2d471a5e895e678c19acf9a6de61b572baaa927e2c1cd2abd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_3a99ca3d57f822da3e9bbe0280941d13822e975ebaa8ab934391d2e674e5b539->leave($__internal_3a99ca3d57f822da3e9bbe0280941d13822e975ebaa8ab934391d2e674e5b539_prof);

        
        $__internal_9d1c8d69aa1de2d471a5e895e678c19acf9a6de61b572baaa927e2c1cd2abd9d->leave($__internal_9d1c8d69aa1de2d471a5e895e678c19acf9a6de61b572baaa927e2c1cd2abd9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
