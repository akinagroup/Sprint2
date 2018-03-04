<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_0a495d50ad46095387967ae7b5e4f411f374683f3681f376cc2e058a4fdd2bb5 extends Twig_Template
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
        $__internal_51321d54199d8e234bf5c0550bee87118f4acef26188daa6d5d6518b20a07ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51321d54199d8e234bf5c0550bee87118f4acef26188daa6d5d6518b20a07ad3->enter($__internal_51321d54199d8e234bf5c0550bee87118f4acef26188daa6d5d6518b20a07ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_a3c0c63bb88701651c301e66f1219e73c88025defda077fc41de74fac47f23fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c0c63bb88701651c301e66f1219e73c88025defda077fc41de74fac47f23fb->enter($__internal_a3c0c63bb88701651c301e66f1219e73c88025defda077fc41de74fac47f23fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_51321d54199d8e234bf5c0550bee87118f4acef26188daa6d5d6518b20a07ad3->leave($__internal_51321d54199d8e234bf5c0550bee87118f4acef26188daa6d5d6518b20a07ad3_prof);

        
        $__internal_a3c0c63bb88701651c301e66f1219e73c88025defda077fc41de74fac47f23fb->leave($__internal_a3c0c63bb88701651c301e66f1219e73c88025defda077fc41de74fac47f23fb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}
