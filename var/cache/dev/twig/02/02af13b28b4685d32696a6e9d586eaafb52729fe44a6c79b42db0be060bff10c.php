<?php

/* ::base.html.twig */
class __TwigTemplate_5547527edef0cc399f01137df1b3ccae4a72cc88d42e34ed85ab1d3231b2d12e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81d4f1135d03424c74c5157ee98906d18bb6ecaf4e058a64b5f6a8f011a65c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d4f1135d03424c74c5157ee98906d18bb6ecaf4e058a64b5f6a8f011a65c7c->enter($__internal_81d4f1135d03424c74c5157ee98906d18bb6ecaf4e058a64b5f6a8f011a65c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8e90bd147940a088db8d9eaa80e61b2bac28b79b5c6c1e840adde74e7956daab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e90bd147940a088db8d9eaa80e61b2bac28b79b5c6c1e840adde74e7956daab->enter($__internal_8e90bd147940a088db8d9eaa80e61b2bac28b79b5c6c1e840adde74e7956daab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    </head>
    <body>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "



        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    </body>
</html>

";
        
        $__internal_81d4f1135d03424c74c5157ee98906d18bb6ecaf4e058a64b5f6a8f011a65c7c->leave($__internal_81d4f1135d03424c74c5157ee98906d18bb6ecaf4e058a64b5f6a8f011a65c7c_prof);

        
        $__internal_8e90bd147940a088db8d9eaa80e61b2bac28b79b5c6c1e840adde74e7956daab->leave($__internal_8e90bd147940a088db8d9eaa80e61b2bac28b79b5c6c1e840adde74e7956daab_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d41a18b4eeaac7a0d464ad760eab3b24156958cedc7696e3e596e7d035964bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d41a18b4eeaac7a0d464ad760eab3b24156958cedc7696e3e596e7d035964bb->enter($__internal_1d41a18b4eeaac7a0d464ad760eab3b24156958cedc7696e3e596e7d035964bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ae0a89d755700bdb40e1a84d1886213ec0472ae332797e4cd241a8fdc6d4ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae0a89d755700bdb40e1a84d1886213ec0472ae332797e4cd241a8fdc6d4ded->enter($__internal_9ae0a89d755700bdb40e1a84d1886213ec0472ae332797e4cd241a8fdc6d4ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Welcome! ";
        
        $__internal_9ae0a89d755700bdb40e1a84d1886213ec0472ae332797e4cd241a8fdc6d4ded->leave($__internal_9ae0a89d755700bdb40e1a84d1886213ec0472ae332797e4cd241a8fdc6d4ded_prof);

        
        $__internal_1d41a18b4eeaac7a0d464ad760eab3b24156958cedc7696e3e596e7d035964bb->leave($__internal_1d41a18b4eeaac7a0d464ad760eab3b24156958cedc7696e3e596e7d035964bb_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef65aafb29830648da4c523573d6773c956a15b39a2b07c8893d5e099325f4e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef65aafb29830648da4c523573d6773c956a15b39a2b07c8893d5e099325f4e6->enter($__internal_ef65aafb29830648da4c523573d6773c956a15b39a2b07c8893d5e099325f4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_92c5c63536310a16fb16514aac09dcb4ae1f6e991b139c59a1916a1258f0cc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c5c63536310a16fb16514aac09dcb4ae1f6e991b139c59a1916a1258f0cc7d->enter($__internal_92c5c63536310a16fb16514aac09dcb4ae1f6e991b139c59a1916a1258f0cc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <style>

.fa-angle-right{

    float:right;

}
</style>
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/css/shop-homepage.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

        ";
        
        $__internal_92c5c63536310a16fb16514aac09dcb4ae1f6e991b139c59a1916a1258f0cc7d->leave($__internal_92c5c63536310a16fb16514aac09dcb4ae1f6e991b139c59a1916a1258f0cc7d_prof);

        
        $__internal_ef65aafb29830648da4c523573d6773c956a15b39a2b07c8893d5e099325f4e6->leave($__internal_ef65aafb29830648da4c523573d6773c956a15b39a2b07c8893d5e099325f4e6_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f1092dda0abe5aabff550470bd8f1217b6b0e9194ba44202b07255e86899eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1092dda0abe5aabff550470bd8f1217b6b0e9194ba44202b07255e86899eb7->enter($__internal_3f1092dda0abe5aabff550470bd8f1217b6b0e9194ba44202b07255e86899eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f57abcbded09a90d2d5a4a0716b09c54111473300d252a9c646bdca2d8d8715c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57abcbded09a90d2d5a4a0716b09c54111473300d252a9c646bdca2d8d8715c->enter($__internal_f57abcbded09a90d2d5a4a0716b09c54111473300d252a9c646bdca2d8d8715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f57abcbded09a90d2d5a4a0716b09c54111473300d252a9c646bdca2d8d8715c->leave($__internal_f57abcbded09a90d2d5a4a0716b09c54111473300d252a9c646bdca2d8d8715c_prof);

        
        $__internal_3f1092dda0abe5aabff550470bd8f1217b6b0e9194ba44202b07255e86899eb7->leave($__internal_3f1092dda0abe5aabff550470bd8f1217b6b0e9194ba44202b07255e86899eb7_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d541c40e31d855516e62c105405e1f723593eda4883c8797492fa7f28b8c5952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d541c40e31d855516e62c105405e1f723593eda4883c8797492fa7f28b8c5952->enter($__internal_d541c40e31d855516e62c105405e1f723593eda4883c8797492fa7f28b8c5952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4fba0689760e18078648d4ca3d0f61fb0900ff0bf353a32c6a8088b7df7bcae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fba0689760e18078648d4ca3d0f61fb0900ff0bf353a32c6a8088b7df7bcae2->enter($__internal_4fba0689760e18078648d4ca3d0f61fb0900ff0bf353a32c6a8088b7df7bcae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>

<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>

  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/FrontJs.js"), "html", null, true);
        echo "\"></script>


  <script>
  \$( function() {
    var tabs = \$( \"#tabs\" ).tabs();
    tabs.find( \".ui-tabs-nav\" ).sortable({
      axis: \"x\",
      stop: function() {
        tabs.tabs( \"refresh\" );
      }
    });
  } );


  // Ici, le DOM est entièrement défini



 </script>
        ";
        
        $__internal_4fba0689760e18078648d4ca3d0f61fb0900ff0bf353a32c6a8088b7df7bcae2->leave($__internal_4fba0689760e18078648d4ca3d0f61fb0900ff0bf353a32c6a8088b7df7bcae2_prof);

        
        $__internal_d541c40e31d855516e62c105405e1f723593eda4883c8797492fa7f28b8c5952->leave($__internal_d541c40e31d855516e62c105405e1f723593eda4883c8797492fa7f28b8c5952_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 39,  164 => 38,  156 => 32,  147 => 31,  130 => 26,  114 => 18,  110 => 17,  106 => 16,  96 => 8,  87 => 7,  69 => 6,  56 => 60,  54 => 31,  48 => 27,  46 => 26,  42 => 24,  40 => 7,  36 => 6,  29 => 1,);
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

        <meta charset=\"UTF-8\" />
        <title>{% block title %} Welcome! {% endblock %}</title>
        {% block stylesheets %}
        <style>

.fa-angle-right{

    float:right;

}
</style>
  <link rel=\"stylesheet\" href=\"{{ asset('style/css/bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('style/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('style/css/shop-homepage.css') }}\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

        {% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}




        {% block javascripts %}

        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>

<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>

  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/FrontJs.js') }}\"></script>


  <script>
  \$( function() {
    var tabs = \$( \"#tabs\" ).tabs();
    tabs.find( \".ui-tabs-nav\" ).sortable({
      axis: \"x\",
      stop: function() {
        tabs.tabs( \"refresh\" );
      }
    });
  } );


  // Ici, le DOM est entièrement défini



 </script>
        {% endblock %}
    </body>
</html>

", "::base.html.twig", "/var/www/html/GroupJoob/app/Resources/views/base.html.twig");
    }
}
