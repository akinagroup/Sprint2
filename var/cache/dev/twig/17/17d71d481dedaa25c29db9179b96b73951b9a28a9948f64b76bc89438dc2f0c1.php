<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_aed3585bb55fe08ab4d6df120716b3b2ea8a7f2a5853f372f07a74d3f8d96c67 extends Twig_Template
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
        $__internal_8e428578870630aa8ebadbdceea6f4e0d73dd91b8a0417a463767f14bc642379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e428578870630aa8ebadbdceea6f4e0d73dd91b8a0417a463767f14bc642379->enter($__internal_8e428578870630aa8ebadbdceea6f4e0d73dd91b8a0417a463767f14bc642379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_57d2e66b9ed9166e8d1de4ae6500e162355a49662559740a68abb13b47ee15a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d2e66b9ed9166e8d1de4ae6500e162355a49662559740a68abb13b47ee15a2->enter($__internal_57d2e66b9ed9166e8d1de4ae6500e162355a49662559740a68abb13b47ee15a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

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
        
        $__internal_8e428578870630aa8ebadbdceea6f4e0d73dd91b8a0417a463767f14bc642379->leave($__internal_8e428578870630aa8ebadbdceea6f4e0d73dd91b8a0417a463767f14bc642379_prof);

        
        $__internal_57d2e66b9ed9166e8d1de4ae6500e162355a49662559740a68abb13b47ee15a2->leave($__internal_57d2e66b9ed9166e8d1de4ae6500e162355a49662559740a68abb13b47ee15a2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
", "EasyAdminBundle:default:field_string.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
