<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_f5a8238af9e3fe03dde5c8247ddda9e410255ca70afb6190bf63d2fdb2777201 extends Twig_Template
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
        $__internal_a7859f089c368f96c41dafcc3f900a8dfc51369390ea9ea9a349ac2e09550ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7859f089c368f96c41dafcc3f900a8dfc51369390ea9ea9a349ac2e09550ca9->enter($__internal_a7859f089c368f96c41dafcc3f900a8dfc51369390ea9ea9a349ac2e09550ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_a47c9b4521fd467dfbeecb7f8aab702c24ea1553b49449afe3c24eddfdecd229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47c9b4521fd467dfbeecb7f8aab702c24ea1553b49449afe3c24eddfdecd229->enter($__internal_a47c9b4521fd467dfbeecb7f8aab702c24ea1553b49449afe3c24eddfdecd229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_a7859f089c368f96c41dafcc3f900a8dfc51369390ea9ea9a349ac2e09550ca9->leave($__internal_a7859f089c368f96c41dafcc3f900a8dfc51369390ea9ea9a349ac2e09550ca9_prof);

        
        $__internal_a47c9b4521fd467dfbeecb7f8aab702c24ea1553b49449afe3c24eddfdecd229->leave($__internal_a47c9b4521fd467dfbeecb7f8aab702c24ea1553b49449afe3c24eddfdecd229_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
