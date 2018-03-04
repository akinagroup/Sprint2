<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18f915a6b04d1009ea3a8b40bb7860c8353970254c826685253b7ce4d3987120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8549667725f36c731cbd2215b50a776e995863d70b894d39e7b36edd05e9093c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8549667725f36c731cbd2215b50a776e995863d70b894d39e7b36edd05e9093c->enter($__internal_8549667725f36c731cbd2215b50a776e995863d70b894d39e7b36edd05e9093c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b88ee76ca957c46f486483eaeaa9e6cdd4c46cac3d4473ca299b368e6738c874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88ee76ca957c46f486483eaeaa9e6cdd4c46cac3d4473ca299b368e6738c874->enter($__internal_b88ee76ca957c46f486483eaeaa9e6cdd4c46cac3d4473ca299b368e6738c874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8549667725f36c731cbd2215b50a776e995863d70b894d39e7b36edd05e9093c->leave($__internal_8549667725f36c731cbd2215b50a776e995863d70b894d39e7b36edd05e9093c_prof);

        
        $__internal_b88ee76ca957c46f486483eaeaa9e6cdd4c46cac3d4473ca299b368e6738c874->leave($__internal_b88ee76ca957c46f486483eaeaa9e6cdd4c46cac3d4473ca299b368e6738c874_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c331a57a845826187c24af3b1d1cb7fb970743b49f2dde15ada9507d2f6c2fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c331a57a845826187c24af3b1d1cb7fb970743b49f2dde15ada9507d2f6c2fcd->enter($__internal_c331a57a845826187c24af3b1d1cb7fb970743b49f2dde15ada9507d2f6c2fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa7310d52b1ae3706c6cf8f59f89bdc0207ad28118bbf882c7ee1ae658c9df6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7310d52b1ae3706c6cf8f59f89bdc0207ad28118bbf882c7ee1ae658c9df6f->enter($__internal_fa7310d52b1ae3706c6cf8f59f89bdc0207ad28118bbf882c7ee1ae658c9df6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_fa7310d52b1ae3706c6cf8f59f89bdc0207ad28118bbf882c7ee1ae658c9df6f->leave($__internal_fa7310d52b1ae3706c6cf8f59f89bdc0207ad28118bbf882c7ee1ae658c9df6f_prof);

        
        $__internal_c331a57a845826187c24af3b1d1cb7fb970743b49f2dde15ada9507d2f6c2fcd->leave($__internal_c331a57a845826187c24af3b1d1cb7fb970743b49f2dde15ada9507d2f6c2fcd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_692625c5fc9b58d6dd98ff9d4b3c6b2ac11cc656ff5103cda603f544aed9d5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692625c5fc9b58d6dd98ff9d4b3c6b2ac11cc656ff5103cda603f544aed9d5d4->enter($__internal_692625c5fc9b58d6dd98ff9d4b3c6b2ac11cc656ff5103cda603f544aed9d5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18a5dfc85a022f169bb786d1014d9cf795f81452283798bd8777eb913b64499c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a5dfc85a022f169bb786d1014d9cf795f81452283798bd8777eb913b64499c->enter($__internal_18a5dfc85a022f169bb786d1014d9cf795f81452283798bd8777eb913b64499c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_18a5dfc85a022f169bb786d1014d9cf795f81452283798bd8777eb913b64499c->leave($__internal_18a5dfc85a022f169bb786d1014d9cf795f81452283798bd8777eb913b64499c_prof);

        
        $__internal_692625c5fc9b58d6dd98ff9d4b3c6b2ac11cc656ff5103cda603f544aed9d5d4->leave($__internal_692625c5fc9b58d6dd98ff9d4b3c6b2ac11cc656ff5103cda603f544aed9d5d4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2153b371686a251edb660af278b961a04020bfd9bafc79968d13305cf1ff1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2153b371686a251edb660af278b961a04020bfd9bafc79968d13305cf1ff1f9->enter($__internal_e2153b371686a251edb660af278b961a04020bfd9bafc79968d13305cf1ff1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_808ac2007f677024a128f67cd1c395aca2b7ad24665eb9110f86baa0b267709d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808ac2007f677024a128f67cd1c395aca2b7ad24665eb9110f86baa0b267709d->enter($__internal_808ac2007f677024a128f67cd1c395aca2b7ad24665eb9110f86baa0b267709d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_808ac2007f677024a128f67cd1c395aca2b7ad24665eb9110f86baa0b267709d->leave($__internal_808ac2007f677024a128f67cd1c395aca2b7ad24665eb9110f86baa0b267709d_prof);

        
        $__internal_e2153b371686a251edb660af278b961a04020bfd9bafc79968d13305cf1ff1f9->leave($__internal_e2153b371686a251edb660af278b961a04020bfd9bafc79968d13305cf1ff1f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
