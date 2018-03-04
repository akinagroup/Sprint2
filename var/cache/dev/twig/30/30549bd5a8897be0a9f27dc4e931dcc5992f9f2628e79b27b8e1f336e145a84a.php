<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_3e09d06a6784910d562ac13e22e0338ad041f16ce6ebd7b514757ab629839824 extends Twig_Template
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
        $__internal_2c6e95a6f3b71b4beda6d30a87c9a81dd05e17344894b0c96a3337d120080426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6e95a6f3b71b4beda6d30a87c9a81dd05e17344894b0c96a3337d120080426->enter($__internal_2c6e95a6f3b71b4beda6d30a87c9a81dd05e17344894b0c96a3337d120080426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_cb1993147a0b2ade8282957ff1840078e91c8ac0aab1c29728b2c3532b7bcf09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1993147a0b2ade8282957ff1840078e91c8ac0aab1c29728b2c3532b7bcf09->enter($__internal_cb1993147a0b2ade8282957ff1840078e91c8ac0aab1c29728b2c3532b7bcf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_2c6e95a6f3b71b4beda6d30a87c9a81dd05e17344894b0c96a3337d120080426->leave($__internal_2c6e95a6f3b71b4beda6d30a87c9a81dd05e17344894b0c96a3337d120080426_prof);

        
        $__internal_cb1993147a0b2ade8282957ff1840078e91c8ac0aab1c29728b2c3532b7bcf09->leave($__internal_cb1993147a0b2ade8282957ff1840078e91c8ac0aab1c29728b2c3532b7bcf09_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_object.html.twig");
    }
}
