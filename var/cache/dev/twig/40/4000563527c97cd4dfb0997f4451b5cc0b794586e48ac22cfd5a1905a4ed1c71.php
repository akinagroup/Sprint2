<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_225441d31597c2a04a46e86a4a04efc76cf4ded382830f8a9b96ba44d64ef524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54101e13cf8368b87be2ee48d595f38551ae2eaa69e98ced74616aa6f857ee24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54101e13cf8368b87be2ee48d595f38551ae2eaa69e98ced74616aa6f857ee24->enter($__internal_54101e13cf8368b87be2ee48d595f38551ae2eaa69e98ced74616aa6f857ee24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_82aa3aad078a0a1e657381b17a522be1078f590ff651c9cbc33f84829ddf1cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82aa3aad078a0a1e657381b17a522be1078f590ff651c9cbc33f84829ddf1cc4->enter($__internal_82aa3aad078a0a1e657381b17a522be1078f590ff651c9cbc33f84829ddf1cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54101e13cf8368b87be2ee48d595f38551ae2eaa69e98ced74616aa6f857ee24->leave($__internal_54101e13cf8368b87be2ee48d595f38551ae2eaa69e98ced74616aa6f857ee24_prof);

        
        $__internal_82aa3aad078a0a1e657381b17a522be1078f590ff651c9cbc33f84829ddf1cc4->leave($__internal_82aa3aad078a0a1e657381b17a522be1078f590ff651c9cbc33f84829ddf1cc4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73c1cb5379e180d7ae04a81ef392f13f71036661b6bdbd809405b4c502297e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c1cb5379e180d7ae04a81ef392f13f71036661b6bdbd809405b4c502297e57->enter($__internal_73c1cb5379e180d7ae04a81ef392f13f71036661b6bdbd809405b4c502297e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0c91198a335f18c4ccad52fae3a7cecb47066073aeb67908203b9c6d1097f426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c91198a335f18c4ccad52fae3a7cecb47066073aeb67908203b9c6d1097f426->enter($__internal_0c91198a335f18c4ccad52fae3a7cecb47066073aeb67908203b9c6d1097f426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0c91198a335f18c4ccad52fae3a7cecb47066073aeb67908203b9c6d1097f426->leave($__internal_0c91198a335f18c4ccad52fae3a7cecb47066073aeb67908203b9c6d1097f426_prof);

        
        $__internal_73c1cb5379e180d7ae04a81ef392f13f71036661b6bdbd809405b4c502297e57->leave($__internal_73c1cb5379e180d7ae04a81ef392f13f71036661b6bdbd809405b4c502297e57_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eea047a8da9dd2f0435c022835b705aaaf5754bf76293c75521f32a050ccbd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea047a8da9dd2f0435c022835b705aaaf5754bf76293c75521f32a050ccbd02->enter($__internal_eea047a8da9dd2f0435c022835b705aaaf5754bf76293c75521f32a050ccbd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fedf97e72cdbd4d2788984e4465cb1bd420b90302a76d2b51fb2e66a2565252f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fedf97e72cdbd4d2788984e4465cb1bd420b90302a76d2b51fb2e66a2565252f->enter($__internal_fedf97e72cdbd4d2788984e4465cb1bd420b90302a76d2b51fb2e66a2565252f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fedf97e72cdbd4d2788984e4465cb1bd420b90302a76d2b51fb2e66a2565252f->leave($__internal_fedf97e72cdbd4d2788984e4465cb1bd420b90302a76d2b51fb2e66a2565252f_prof);

        
        $__internal_eea047a8da9dd2f0435c022835b705aaaf5754bf76293c75521f32a050ccbd02->leave($__internal_eea047a8da9dd2f0435c022835b705aaaf5754bf76293c75521f32a050ccbd02_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40276792206b56fe0688cac33162805e824ecab62cd6365f6304287abe7f0330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40276792206b56fe0688cac33162805e824ecab62cd6365f6304287abe7f0330->enter($__internal_40276792206b56fe0688cac33162805e824ecab62cd6365f6304287abe7f0330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_29b07fbb918a9f893d977ffa329728e3216bb69de8bb26ad8f41c7267863fbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b07fbb918a9f893d977ffa329728e3216bb69de8bb26ad8f41c7267863fbe4->enter($__internal_29b07fbb918a9f893d977ffa329728e3216bb69de8bb26ad8f41c7267863fbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_29b07fbb918a9f893d977ffa329728e3216bb69de8bb26ad8f41c7267863fbe4->leave($__internal_29b07fbb918a9f893d977ffa329728e3216bb69de8bb26ad8f41c7267863fbe4_prof);

        
        $__internal_40276792206b56fe0688cac33162805e824ecab62cd6365f6304287abe7f0330->leave($__internal_40276792206b56fe0688cac33162805e824ecab62cd6365f6304287abe7f0330_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
