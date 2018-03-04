<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_f62e838e04d71d8bfbce3c1eead75fc530f437042a2c22b762fa2f750e5763a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c32a3b5778693019b588125cf7c5c01fae5ce9f5c224742f54abdd2c375fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c32a3b5778693019b588125cf7c5c01fae5ce9f5c224742f54abdd2c375fbd->enter($__internal_62c32a3b5778693019b588125cf7c5c01fae5ce9f5c224742f54abdd2c375fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_61efc7a7820add1b4c48011f7a0e0b6e3ff3ae43ea47f5d5944f57f60cade703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61efc7a7820add1b4c48011f7a0e0b6e3ff3ae43ea47f5d5944f57f60cade703->enter($__internal_61efc7a7820add1b4c48011f7a0e0b6e3ff3ae43ea47f5d5944f57f60cade703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_62c32a3b5778693019b588125cf7c5c01fae5ce9f5c224742f54abdd2c375fbd->leave($__internal_62c32a3b5778693019b588125cf7c5c01fae5ce9f5c224742f54abdd2c375fbd_prof);

        
        $__internal_61efc7a7820add1b4c48011f7a0e0b6e3ff3ae43ea47f5d5944f57f60cade703->leave($__internal_61efc7a7820add1b4c48011f7a0e0b6e3ff3ae43ea47f5d5944f57f60cade703_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_15ca5a3132519e499d9e294e4303903ecbe58500be25a100e5c4082676a04bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ca5a3132519e499d9e294e4303903ecbe58500be25a100e5c4082676a04bbf->enter($__internal_15ca5a3132519e499d9e294e4303903ecbe58500be25a100e5c4082676a04bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91d01941d15a4452680c17e0ad4c49a766648ef8f40bb86a0208125a6935babd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d01941d15a4452680c17e0ad4c49a766648ef8f40bb86a0208125a6935babd->enter($__internal_91d01941d15a4452680c17e0ad4c49a766648ef8f40bb86a0208125a6935babd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_91d01941d15a4452680c17e0ad4c49a766648ef8f40bb86a0208125a6935babd->leave($__internal_91d01941d15a4452680c17e0ad4c49a766648ef8f40bb86a0208125a6935babd_prof);

        
        $__internal_15ca5a3132519e499d9e294e4303903ecbe58500be25a100e5c4082676a04bbf->leave($__internal_15ca5a3132519e499d9e294e4303903ecbe58500be25a100e5c4082676a04bbf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9112526f3eb93501502ae7bc6fbf6f29d0e997d5d45995cfa9711828cbd9505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9112526f3eb93501502ae7bc6fbf6f29d0e997d5d45995cfa9711828cbd9505->enter($__internal_c9112526f3eb93501502ae7bc6fbf6f29d0e997d5d45995cfa9711828cbd9505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afdbeeb421928a74084472a528d82b306e8e1b994e2d9745af30ca714dcddb9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afdbeeb421928a74084472a528d82b306e8e1b994e2d9745af30ca714dcddb9b->enter($__internal_afdbeeb421928a74084472a528d82b306e8e1b994e2d9745af30ca714dcddb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_afdbeeb421928a74084472a528d82b306e8e1b994e2d9745af30ca714dcddb9b->leave($__internal_afdbeeb421928a74084472a528d82b306e8e1b994e2d9745af30ca714dcddb9b_prof);

        
        $__internal_c9112526f3eb93501502ae7bc6fbf6f29d0e997d5d45995cfa9711828cbd9505->leave($__internal_c9112526f3eb93501502ae7bc6fbf6f29d0e997d5d45995cfa9711828cbd9505_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_547e0a7d2163a77e486dc035db129fd6df95be972753be6403317206fcc8db0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547e0a7d2163a77e486dc035db129fd6df95be972753be6403317206fcc8db0c->enter($__internal_547e0a7d2163a77e486dc035db129fd6df95be972753be6403317206fcc8db0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b040bc3c3582b3b094e61a9099419657a74fc5db0248e2da56767509802902e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b040bc3c3582b3b094e61a9099419657a74fc5db0248e2da56767509802902e0->enter($__internal_b040bc3c3582b3b094e61a9099419657a74fc5db0248e2da56767509802902e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b040bc3c3582b3b094e61a9099419657a74fc5db0248e2da56767509802902e0->leave($__internal_b040bc3c3582b3b094e61a9099419657a74fc5db0248e2da56767509802902e0_prof);

        
        $__internal_547e0a7d2163a77e486dc035db129fd6df95be972753be6403317206fcc8db0c->leave($__internal_547e0a7d2163a77e486dc035db129fd6df95be972753be6403317206fcc8db0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
