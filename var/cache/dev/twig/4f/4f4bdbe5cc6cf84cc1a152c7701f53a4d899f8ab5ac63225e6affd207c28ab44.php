<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7c18554adf80b2e5e25ccab4d742bf8f74c27ccffa1a7e601138522b9169bab5 extends Twig_Template
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
        $__internal_bbbf091302b0633a1c871e26f5cca663b01041ce4cfacbd748dbe3cecc1b8729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbbf091302b0633a1c871e26f5cca663b01041ce4cfacbd748dbe3cecc1b8729->enter($__internal_bbbf091302b0633a1c871e26f5cca663b01041ce4cfacbd748dbe3cecc1b8729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_41845cc18bc6ea18791fa777cc47f01f4345af48411ca1d1f587a131ffc609df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41845cc18bc6ea18791fa777cc47f01f4345af48411ca1d1f587a131ffc609df->enter($__internal_41845cc18bc6ea18791fa777cc47f01f4345af48411ca1d1f587a131ffc609df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bbbf091302b0633a1c871e26f5cca663b01041ce4cfacbd748dbe3cecc1b8729->leave($__internal_bbbf091302b0633a1c871e26f5cca663b01041ce4cfacbd748dbe3cecc1b8729_prof);

        
        $__internal_41845cc18bc6ea18791fa777cc47f01f4345af48411ca1d1f587a131ffc609df->leave($__internal_41845cc18bc6ea18791fa777cc47f01f4345af48411ca1d1f587a131ffc609df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
