<?php

/* EasyAdminBundle:default:field_url.html.twig */
class __TwigTemplate_8f439e80630f3ad15973a9c9ce7b3dd1a309af6a5ed98d0b089a0acdc50f23fa extends Twig_Template
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
        $__internal_a68a37f74bd76731b3cc591cd580f491f3aa96b9385873446cf6abd45a1b71e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68a37f74bd76731b3cc591cd580f491f3aa96b9385873446cf6abd45a1b71e0->enter($__internal_a68a37f74bd76731b3cc591cd580f491f3aa96b9385873446cf6abd45a1b71e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        $__internal_41813c76abb69e4d5deb3a7252e2db1039d57e7216f1761eeb628cf2fddff0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41813c76abb69e4d5deb3a7252e2db1039d57e7216f1761eeb628cf2fddff0fc->enter($__internal_41813c76abb69e4d5deb3a7252e2db1039d57e7216f1761eeb628cf2fddff0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_replace_filter(($context["value"] ?? $this->getContext($context, "value")), array("https://" => "", "http://" => ""))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_a68a37f74bd76731b3cc591cd580f491f3aa96b9385873446cf6abd45a1b71e0->leave($__internal_a68a37f74bd76731b3cc591cd580f491f3aa96b9385873446cf6abd45a1b71e0_prof);

        
        $__internal_41813c76abb69e4d5deb3a7252e2db1039d57e7216f1761eeb628cf2fddff0fc->leave($__internal_41813c76abb69e4d5deb3a7252e2db1039d57e7216f1761eeb628cf2fddff0fc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_url.html.twig";
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
    <a target=\"_blank\" href=\"{{ value }}\">{{ value }}</a>
{% else %}
    <a target=\"_blank\" href=\"{{ value }}\">{{ value|replace({ 'https://': '', 'http://': '' })|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_url.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_url.html.twig");
    }
}
