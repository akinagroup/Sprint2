<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_db39cf906c87d9b4785053a1cccc5697a2824a3ce9fa4317b20ca241e6afb47e extends Twig_Template
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
        $__internal_9a27955821c46ab12fd64d61065ad33184448a620785c295a32713aea8edf7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a27955821c46ab12fd64d61065ad33184448a620785c295a32713aea8edf7f1->enter($__internal_9a27955821c46ab12fd64d61065ad33184448a620785c295a32713aea8edf7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_eaaad089625fa26bfc3139de4cce4d66356822e6444d695c7ab57624b171c35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaaad089625fa26bfc3139de4cce4d66356822e6444d695c7ab57624b171c35e->enter($__internal_eaaad089625fa26bfc3139de4cce4d66356822e6444d695c7ab57624b171c35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_9a27955821c46ab12fd64d61065ad33184448a620785c295a32713aea8edf7f1->leave($__internal_9a27955821c46ab12fd64d61065ad33184448a620785c295a32713aea8edf7f1_prof);

        
        $__internal_eaaad089625fa26bfc3139de4cce4d66356822e6444d695c7ab57624b171c35e->leave($__internal_eaaad089625fa26bfc3139de4cce4d66356822e6444d695c7ab57624b171c35e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
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
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_text.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_text.html.twig");
    }
}
