<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_39b5a910d22cf6d5989b8dce684901f3b841afe33857b92ca528537cc8d215c6 extends Twig_Template
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
        $__internal_cd4e444a25c4a04581d558dbdc5c6af21df8b3e2a7f399c9d8c997bc01f10320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4e444a25c4a04581d558dbdc5c6af21df8b3e2a7f399c9d8c997bc01f10320->enter($__internal_cd4e444a25c4a04581d558dbdc5c6af21df8b3e2a7f399c9d8c997bc01f10320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f7031636cc8210e41ad2374fe68129fa2bb091b06a9f8540c59c404dd998f245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7031636cc8210e41ad2374fe68129fa2bb091b06a9f8540c59c404dd998f245->enter($__internal_f7031636cc8210e41ad2374fe68129fa2bb091b06a9f8540c59c404dd998f245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cd4e444a25c4a04581d558dbdc5c6af21df8b3e2a7f399c9d8c997bc01f10320->leave($__internal_cd4e444a25c4a04581d558dbdc5c6af21df8b3e2a7f399c9d8c997bc01f10320_prof);

        
        $__internal_f7031636cc8210e41ad2374fe68129fa2bb091b06a9f8540c59c404dd998f245->leave($__internal_f7031636cc8210e41ad2374fe68129fa2bb091b06a9f8540c59c404dd998f245_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
