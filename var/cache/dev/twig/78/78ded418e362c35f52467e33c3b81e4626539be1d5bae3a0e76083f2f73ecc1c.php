<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b6faaa8d0ae5aa97100ded47f20bd9f725285d7ef24a4da2f67343ed0de29976 extends Twig_Template
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
        $__internal_d31bff1a2b85a5bd64a5e7276448c8458adb4894402499f3ff0f6b1a8cd969aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31bff1a2b85a5bd64a5e7276448c8458adb4894402499f3ff0f6b1a8cd969aa->enter($__internal_d31bff1a2b85a5bd64a5e7276448c8458adb4894402499f3ff0f6b1a8cd969aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7681d78d1c4860b5709ee3f0d2d42784e9b1b84065c5f86e58423107e73c4608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7681d78d1c4860b5709ee3f0d2d42784e9b1b84065c5f86e58423107e73c4608->enter($__internal_7681d78d1c4860b5709ee3f0d2d42784e9b1b84065c5f86e58423107e73c4608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d31bff1a2b85a5bd64a5e7276448c8458adb4894402499f3ff0f6b1a8cd969aa->leave($__internal_d31bff1a2b85a5bd64a5e7276448c8458adb4894402499f3ff0f6b1a8cd969aa_prof);

        
        $__internal_7681d78d1c4860b5709ee3f0d2d42784e9b1b84065c5f86e58423107e73c4608->leave($__internal_7681d78d1c4860b5709ee3f0d2d42784e9b1b84065c5f86e58423107e73c4608_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
