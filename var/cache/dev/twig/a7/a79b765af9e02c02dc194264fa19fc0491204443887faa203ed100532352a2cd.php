<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_84999c639211c07dc85e91f94aaa35080ee577841bbc765122182461dc2b05e5 extends Twig_Template
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
        $__internal_fd7b8b28c391aef60238f99a28e77984214393849a79d3e0a1e2c7a2128fd9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd7b8b28c391aef60238f99a28e77984214393849a79d3e0a1e2c7a2128fd9d0->enter($__internal_fd7b8b28c391aef60238f99a28e77984214393849a79d3e0a1e2c7a2128fd9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_aa308dad6ba0f8bfa6cbdefd3264ee539383e5bd0b1f28bb39b094496a96bc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa308dad6ba0f8bfa6cbdefd3264ee539383e5bd0b1f28bb39b094496a96bc05->enter($__internal_aa308dad6ba0f8bfa6cbdefd3264ee539383e5bd0b1f28bb39b094496a96bc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_fd7b8b28c391aef60238f99a28e77984214393849a79d3e0a1e2c7a2128fd9d0->leave($__internal_fd7b8b28c391aef60238f99a28e77984214393849a79d3e0a1e2c7a2128fd9d0_prof);

        
        $__internal_aa308dad6ba0f8bfa6cbdefd3264ee539383e5bd0b1f28bb39b094496a96bc05->leave($__internal_aa308dad6ba0f8bfa6cbdefd3264ee539383e5bd0b1f28bb39b094496a96bc05_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_guid.html.twig");
    }
}
