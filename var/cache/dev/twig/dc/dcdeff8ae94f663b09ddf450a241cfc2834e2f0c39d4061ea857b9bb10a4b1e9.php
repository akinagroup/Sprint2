<?php

/* AkinaImmobilierBundle:Front:list.html.twig */
class __TwigTemplate_cda1c5699a66a204aa9ae7939320f7d2bf9b2fcf5c0827354c7f1c6c04c1ddef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "AkinaImmobilierBundle:Front:list.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'formu' => array($this, 'block_formu'),
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c1e9cffed400aea024638cfe87d764213e75675a4c2cc7394f2f338e13f65a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1e9cffed400aea024638cfe87d764213e75675a4c2cc7394f2f338e13f65a5->enter($__internal_6c1e9cffed400aea024638cfe87d764213e75675a4c2cc7394f2f338e13f65a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:list.html.twig"));

        $__internal_dc54d6b29e95903822e30bac1954e47246bef98d44c94eb68f1608351217c87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc54d6b29e95903822e30bac1954e47246bef98d44c94eb68f1608351217c87d->enter($__internal_dc54d6b29e95903822e30bac1954e47246bef98d44c94eb68f1608351217c87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c1e9cffed400aea024638cfe87d764213e75675a4c2cc7394f2f338e13f65a5->leave($__internal_6c1e9cffed400aea024638cfe87d764213e75675a4c2cc7394f2f338e13f65a5_prof);

        
        $__internal_dc54d6b29e95903822e30bac1954e47246bef98d44c94eb68f1608351217c87d->leave($__internal_dc54d6b29e95903822e30bac1954e47246bef98d44c94eb68f1608351217c87d_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_54124fad722075b6ca4a1aff9872945165e09e88ace107cfea3e09a3b292a39e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54124fad722075b6ca4a1aff9872945165e09e88ace107cfea3e09a3b292a39e->enter($__internal_54124fad722075b6ca4a1aff9872945165e09e88ace107cfea3e09a3b292a39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f1f1037a25e91f92de17417e6e1d7aa4819a6bbe7df4cecef2f96dfe53362915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f1037a25e91f92de17417e6e1d7aa4819a6bbe7df4cecef2f96dfe53362915->enter($__internal_f1f1037a25e91f92de17417e6e1d7aa4819a6bbe7df4cecef2f96dfe53362915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "<h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" methode=\"post\">
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Prix</label>
    <input type=\"number\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter un montant\" name=\"prix\">
    
  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect1\">Localité</label>
    <select class=\"form-control\" id=\"exampleSelect1\" name=\"Localite\"> 
      <option>--Choisir une localité--</option>
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Localite"] ?? $this->getContext($context, "Localite")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 16
            echo "      <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </select>
  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect2\">Type</label>
    <select class=\"form-control\" id=\"exampleSelect2\" name=\"Type\">
      <option>--Choisir un type--</option>
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Type"] ?? $this->getContext($context, "Type")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "<option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</option> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </select>
  </div>
 
  
  <button type=\"submit\" class=\"btn btn-dark\" name=\"chercher\">Rechercher</button>
</form>

</div>
 ";
        
        $__internal_f1f1037a25e91f92de17417e6e1d7aa4819a6bbe7df4cecef2f96dfe53362915->leave($__internal_f1f1037a25e91f92de17417e6e1d7aa4819a6bbe7df4cecef2f96dfe53362915_prof);

        
        $__internal_54124fad722075b6ca4a1aff9872945165e09e88ace107cfea3e09a3b292a39e->leave($__internal_54124fad722075b6ca4a1aff9872945165e09e88ace107cfea3e09a3b292a39e_prof);

    }

    // line 33
    public function block_formu($context, array $blocks = array())
    {
        $__internal_226d457c6a65842b7d0dc1bee3a7ef0ed753caefc7329806ad8fb3c6aba3f9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226d457c6a65842b7d0dc1bee3a7ef0ed753caefc7329806ad8fb3c6aba3f9d8->enter($__internal_226d457c6a65842b7d0dc1bee3a7ef0ed753caefc7329806ad8fb3c6aba3f9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        $__internal_6a3ebac5e96fb0b4f3c147d557013f4d71d0162f2e021b5d3fc87e23df91d41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3ebac5e96fb0b4f3c147d557013f4d71d0162f2e021b5d3fc87e23df91d41b->enter($__internal_6a3ebac5e96fb0b4f3c147d557013f4d71d0162f2e021b5d3fc87e23df91d41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        // line 34
        echo "
 ";
        
        $__internal_6a3ebac5e96fb0b4f3c147d557013f4d71d0162f2e021b5d3fc87e23df91d41b->leave($__internal_6a3ebac5e96fb0b4f3c147d557013f4d71d0162f2e021b5d3fc87e23df91d41b_prof);

        
        $__internal_226d457c6a65842b7d0dc1bee3a7ef0ed753caefc7329806ad8fb3c6aba3f9d8->leave($__internal_226d457c6a65842b7d0dc1bee3a7ef0ed753caefc7329806ad8fb3c6aba3f9d8_prof);

    }

    // line 36
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_f311776a2aeb04d1cba3307a97dde0a3cc6785065a5e4adeb40563ba86aa9c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f311776a2aeb04d1cba3307a97dde0a3cc6785065a5e4adeb40563ba86aa9c95->enter($__internal_f311776a2aeb04d1cba3307a97dde0a3cc6785065a5e4adeb40563ba86aa9c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_c3a8295b4eb7c531e50ae7bfe0908e4c116e2fb86b466e64fd895d93482cc683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a8295b4eb7c531e50ae7bfe0908e4c116e2fb86b466e64fd895d93482cc683->enter($__internal_c3a8295b4eb7c531e50ae7bfe0908e4c116e2fb86b466e64fd895d93482cc683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 37
        echo "
  <div class=\"row\">
 ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 40
            echo "            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Subu-Design-08.jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "NomBien", array()), "html", null, true);
            echo "</a>
                  </h4>
                  <h5>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "Prix", array()), "html", null, true);
            echo " Fcfa</h5>
                  <p class=\"card-text\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "Description", array()), "html", null, true);
            echo "...<br/>
                  </p>
                  <h4> Type: ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Type", array()), "Libelle", array()), "html", null, true);
            echo "</h4>
                  <h4> Localité: ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Localite", array()), "Libelle", array()), "html", null, true);
            echo "</h4>
                  <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reserve", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">Reserver</a>
                  
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
   </div>
   <div class=\"text-center\" style=\"margin-left:450px\">";
        // line 64
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["reservations"] ?? $this->getContext($context, "reservations")));
        echo "</div>

          <!-- /.row -->
           ";
        
        $__internal_c3a8295b4eb7c531e50ae7bfe0908e4c116e2fb86b466e64fd895d93482cc683->leave($__internal_c3a8295b4eb7c531e50ae7bfe0908e4c116e2fb86b466e64fd895d93482cc683_prof);

        
        $__internal_f311776a2aeb04d1cba3307a97dde0a3cc6785065a5e4adeb40563ba86aa9c95->leave($__internal_f311776a2aeb04d1cba3307a97dde0a3cc6785065a5e4adeb40563ba86aa9c95_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 64,  202 => 62,  186 => 52,  182 => 51,  178 => 50,  173 => 48,  169 => 47,  164 => 45,  158 => 42,  154 => 40,  150 => 39,  146 => 37,  137 => 36,  126 => 34,  117 => 33,  99 => 24,  88 => 23,  80 => 17,  72 => 16,  68 => 15,  55 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout/layout.html.twig\" %}
 {% block form %}
<h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">
<form action=\"{{path('search')}}\" methode=\"post\">
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Prix</label>
    <input type=\"number\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter un montant\" name=\"prix\">
    
  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect1\">Localité</label>
    <select class=\"form-control\" id=\"exampleSelect1\" name=\"Localite\"> 
      <option>--Choisir une localité--</option>
      {%for localite in Localite%}
      <option>{{localite.libelle}}</option>{%endfor%}
    </select>
  </div>
  <div class=\"form-group\">
    <label for=\"exampleSelect2\">Type</label>
    <select class=\"form-control\" id=\"exampleSelect2\" name=\"Type\">
      <option>--Choisir un type--</option>
      {%for type in Type%}<option>{{type.libelle}}</option> {%endfor%}
    </select>
  </div>
 
  
  <button type=\"submit\" class=\"btn btn-dark\" name=\"chercher\">Rechercher</button>
</form>

</div>
 {% endblock %}
 {% block formu %}

 {% endblock %}
   {% block catalogue %}

  <div class=\"row\">
 {% for bien in reservations %}
            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset('img/Subu-Design-08.jpg') }}\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">{{bien.NomBien}}</a>
                  </h4>
                  <h5>{{bien.Prix}} Fcfa</h5>
                  <p class=\"card-text\">{{bien.Description}}...<br/>
                  </p>
                  <h4> Type: {{bien.Type.Libelle}}</h4>
                  <h4> Localité: {{bien.Localite.Libelle}}</h4>
                  <a href=\"{{path('Reserve',{'id':bien.id})}}\">Reserver</a>
                  
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

   {%endfor%}

   </div>
   <div class=\"text-center\" style=\"margin-left:450px\">{{ knp_pagination_render(reservations) }}</div>

          <!-- /.row -->
           {% endblock %}", "AkinaImmobilierBundle:Front:list.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Front/list.html.twig");
    }
}
