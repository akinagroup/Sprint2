<?php

/* EasyAdminBundle:default:field_toggle.html.twig */
class __TwigTemplate_bc9cddefff855969b14f69fb329e41370c9ad0e92d2dd49c07bb19e6611bc5b1 extends Twig_Template
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
        $__internal_c374660777ab421f3a414231f2f96403d38df608cbd5bd6b81a6c3968c6f4d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c374660777ab421f3a414231f2f96403d38df608cbd5bd6b81a6c3968c6f4d17->enter($__internal_c374660777ab421f3a414231f2f96403d38df608cbd5bd6b81a6c3968c6f4d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        $__internal_113e247fa8ab3a3258c19029d9336c5ff98aaf9338aefec378e1547f0b50666b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113e247fa8ab3a3258c19029d9336c5ff98aaf9338aefec378e1547f0b50666b->enter($__internal_113e247fa8ab3a3258c19029d9336c5ff98aaf9338aefec378e1547f0b50666b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((($context["view"] ?? $this->getContext($context, "view")) == "show") || twig_in_filter("edit", $this->getAttribute(($context["backend_config"] ?? $this->getContext($context, "backend_config")), "disabled_actions", array())))) {
            // line 4
            echo "    ";
            if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo (((($context["value"] ?? $this->getContext($context, "value")) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_c374660777ab421f3a414231f2f96403d38df608cbd5bd6b81a6c3968c6f4d17->leave($__internal_c374660777ab421f3a414231f2f96403d38df608cbd5bd6b81a6c3968c6f4d17_prof);

        
        $__internal_113e247fa8ab3a3258c19029d9336c5ff98aaf9338aefec378e1547f0b50666b->leave($__internal_113e247fa8ab3a3258c19029d9336c5ff98aaf9338aefec378e1547f0b50666b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 10,  39 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if view == 'show' or ('edit' in backend_config.disabled_actions) %}
    {% if value == true %}
        <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <input type=\"checkbox\" {{ value == true ? 'checked' : '' }}
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"{{ 'label.true'|trans }}\" data-off=\"{{ 'label.false'|trans }}\">
{% endif %}
", "EasyAdminBundle:default:field_toggle.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_toggle.html.twig");
    }
}
