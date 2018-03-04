<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_99f82e962d26da1f4843c59bfb26066fe115629a5ca4c98eed87b1abeecdf83c extends Twig_Template
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
        $__internal_2bd69b49bd7ddffead02bf544bd7a073ed368c6a3bf0f3f6869ebc4cfa0d9f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd69b49bd7ddffead02bf544bd7a073ed368c6a3bf0f3f6869ebc4cfa0d9f6c->enter($__internal_2bd69b49bd7ddffead02bf544bd7a073ed368c6a3bf0f3f6869ebc4cfa0d9f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e69112e6755ffbb6d21c43472efe7a58821bbd8aad1d955c9cef133aa535e03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69112e6755ffbb6d21c43472efe7a58821bbd8aad1d955c9cef133aa535e03a->enter($__internal_e69112e6755ffbb6d21c43472efe7a58821bbd8aad1d955c9cef133aa535e03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2bd69b49bd7ddffead02bf544bd7a073ed368c6a3bf0f3f6869ebc4cfa0d9f6c->leave($__internal_2bd69b49bd7ddffead02bf544bd7a073ed368c6a3bf0f3f6869ebc4cfa0d9f6c_prof);

        
        $__internal_e69112e6755ffbb6d21c43472efe7a58821bbd8aad1d955c9cef133aa535e03a->leave($__internal_e69112e6755ffbb6d21c43472efe7a58821bbd8aad1d955c9cef133aa535e03a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
