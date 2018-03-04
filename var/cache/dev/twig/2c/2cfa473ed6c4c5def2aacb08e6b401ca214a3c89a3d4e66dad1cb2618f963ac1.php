<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8857cc77000100cb7fea74a0030de8b3e61fe23591f38b6c4671f85aa164409b extends Twig_Template
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
        $__internal_f85b9664380e868248cbbf9ccfc2fa46d57a64bab5038f0b05e753c1e9202bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85b9664380e868248cbbf9ccfc2fa46d57a64bab5038f0b05e753c1e9202bf0->enter($__internal_f85b9664380e868248cbbf9ccfc2fa46d57a64bab5038f0b05e753c1e9202bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a4d7680935d0d20b20e7c7e31ab6b134ff56a9f146f7e3e41e5e32e35a986c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d7680935d0d20b20e7c7e31ab6b134ff56a9f146f7e3e41e5e32e35a986c09->enter($__internal_a4d7680935d0d20b20e7c7e31ab6b134ff56a9f146f7e3e41e5e32e35a986c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f85b9664380e868248cbbf9ccfc2fa46d57a64bab5038f0b05e753c1e9202bf0->leave($__internal_f85b9664380e868248cbbf9ccfc2fa46d57a64bab5038f0b05e753c1e9202bf0_prof);

        
        $__internal_a4d7680935d0d20b20e7c7e31ab6b134ff56a9f146f7e3e41e5e32e35a986c09->leave($__internal_a4d7680935d0d20b20e7c7e31ab6b134ff56a9f146f7e3e41e5e32e35a986c09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
