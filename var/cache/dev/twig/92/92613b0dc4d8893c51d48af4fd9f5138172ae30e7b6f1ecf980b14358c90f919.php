<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_45958aac54a509d27b47a1137669fa96ad1facc43bc87a27cbd14bccbdaa753e extends Twig_Template
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
        $__internal_cc59d9a11c336f661aefa1b9b2dfed314759a69e1d38bbcd8d62cb91d3095c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc59d9a11c336f661aefa1b9b2dfed314759a69e1d38bbcd8d62cb91d3095c77->enter($__internal_cc59d9a11c336f661aefa1b9b2dfed314759a69e1d38bbcd8d62cb91d3095c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_ad82e24f3bb65d99a20196e2468339eeb96807c9b91ae941f47e6dff7d34da11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad82e24f3bb65d99a20196e2468339eeb96807c9b91ae941f47e6dff7d34da11->enter($__internal_ad82e24f3bb65d99a20196e2468339eeb96807c9b91ae941f47e6dff7d34da11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_cc59d9a11c336f661aefa1b9b2dfed314759a69e1d38bbcd8d62cb91d3095c77->leave($__internal_cc59d9a11c336f661aefa1b9b2dfed314759a69e1d38bbcd8d62cb91d3095c77_prof);

        
        $__internal_ad82e24f3bb65d99a20196e2468339eeb96807c9b91ae941f47e6dff7d34da11->leave($__internal_ad82e24f3bb65d99a20196e2468339eeb96807c9b91ae941f47e6dff7d34da11_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_email.html.twig");
    }
}
