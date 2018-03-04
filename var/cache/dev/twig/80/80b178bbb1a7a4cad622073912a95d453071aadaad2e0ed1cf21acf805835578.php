<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_450c1d6ccb906ecb0a8b7422d520ea18a5f09a1f64620cf0b72b86bfbc002b09 extends Twig_Template
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
        $__internal_37f28424f5b61c16cbb8ccca1efe9ea649220b377c870f1c4579be590a289d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f28424f5b61c16cbb8ccca1efe9ea649220b377c870f1c4579be590a289d5f->enter($__internal_37f28424f5b61c16cbb8ccca1efe9ea649220b377c870f1c4579be590a289d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_93b58867017aa0a5d41c6205e4760fafc5cde8828e034bbf2f105a3cf7cb8656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b58867017aa0a5d41c6205e4760fafc5cde8828e034bbf2f105a3cf7cb8656->enter($__internal_93b58867017aa0a5d41c6205e4760fafc5cde8828e034bbf2f105a3cf7cb8656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_37f28424f5b61c16cbb8ccca1efe9ea649220b377c870f1c4579be590a289d5f->leave($__internal_37f28424f5b61c16cbb8ccca1efe9ea649220b377c870f1c4579be590a289d5f_prof);

        
        $__internal_93b58867017aa0a5d41c6205e4760fafc5cde8828e034bbf2f105a3cf7cb8656->leave($__internal_93b58867017aa0a5d41c6205e4760fafc5cde8828e034bbf2f105a3cf7cb8656_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "EasyAdminBundle:default:field_tel.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}
