<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f7f7f39a06cb36415eb31e84ea008d6095e314c43b269fd6110cb34ebd8665e7 extends Twig_Template
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
        $__internal_1450ca4cc2029fe7b3d4b5c6b7c64068910ddebe53734605e237a22708f63a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1450ca4cc2029fe7b3d4b5c6b7c64068910ddebe53734605e237a22708f63a33->enter($__internal_1450ca4cc2029fe7b3d4b5c6b7c64068910ddebe53734605e237a22708f63a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_123bbff35ef0dcd4f3c0ada0be6c4e8db2a7f59a712fbf12971c498f85ff977d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123bbff35ef0dcd4f3c0ada0be6c4e8db2a7f59a712fbf12971c498f85ff977d->enter($__internal_123bbff35ef0dcd4f3c0ada0be6c4e8db2a7f59a712fbf12971c498f85ff977d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1450ca4cc2029fe7b3d4b5c6b7c64068910ddebe53734605e237a22708f63a33->leave($__internal_1450ca4cc2029fe7b3d4b5c6b7c64068910ddebe53734605e237a22708f63a33_prof);

        
        $__internal_123bbff35ef0dcd4f3c0ada0be6c4e8db2a7f59a712fbf12971c498f85ff977d->leave($__internal_123bbff35ef0dcd4f3c0ada0be6c4e8db2a7f59a712fbf12971c498f85ff977d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
