<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_11c18c676b344029c17f4a2dc3f55f73b1114cacfcc072361bb4862595a8b225 extends Twig_Template
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
        $__internal_c65418ca358907fad0f0a7cf5fba1de608753b2db3c3134c71a69ce5971993fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65418ca358907fad0f0a7cf5fba1de608753b2db3c3134c71a69ce5971993fa->enter($__internal_c65418ca358907fad0f0a7cf5fba1de608753b2db3c3134c71a69ce5971993fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_e720df328505481afe40e08d265978fd94efc3e3d66b1b5113dfb4a9b4a82c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e720df328505481afe40e08d265978fd94efc3e3d66b1b5113dfb4a9b4a82c2a->enter($__internal_e720df328505481afe40e08d265978fd94efc3e3d66b1b5113dfb4a9b4a82c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_c65418ca358907fad0f0a7cf5fba1de608753b2db3c3134c71a69ce5971993fa->leave($__internal_c65418ca358907fad0f0a7cf5fba1de608753b2db3c3134c71a69ce5971993fa_prof);

        
        $__internal_e720df328505481afe40e08d265978fd94efc3e3d66b1b5113dfb4a9b4a82c2a->leave($__internal_e720df328505481afe40e08d265978fd94efc3e3d66b1b5113dfb4a9b4a82c2a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
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

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
