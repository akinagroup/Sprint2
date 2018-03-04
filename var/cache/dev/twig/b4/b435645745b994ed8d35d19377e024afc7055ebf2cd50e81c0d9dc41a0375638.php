<?php

/* AkinaImmobilierBundle:Front:search.html.twig */
class __TwigTemplate_7d5b6d12fbddd272a174f30f94a83f38818674387f26357509434c3002dae3f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout/layout.html.twig", "AkinaImmobilierBundle:Front:search.html.twig", 1);
        $this->blocks = array(
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c847347066b1ea7dadd54472f7d85f18432412141a4805fea2dcfe612a78f166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c847347066b1ea7dadd54472f7d85f18432412141a4805fea2dcfe612a78f166->enter($__internal_c847347066b1ea7dadd54472f7d85f18432412141a4805fea2dcfe612a78f166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:search.html.twig"));

        $__internal_febb018e2c5b8eb20bce6d2e7b8e7d1026b2cc1e732c921d40b80b7b8123c13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febb018e2c5b8eb20bce6d2e7b8e7d1026b2cc1e732c921d40b80b7b8123c13d->enter($__internal_febb018e2c5b8eb20bce6d2e7b8e7d1026b2cc1e732c921d40b80b7b8123c13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Front:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c847347066b1ea7dadd54472f7d85f18432412141a4805fea2dcfe612a78f166->leave($__internal_c847347066b1ea7dadd54472f7d85f18432412141a4805fea2dcfe612a78f166_prof);

        
        $__internal_febb018e2c5b8eb20bce6d2e7b8e7d1026b2cc1e732c921d40b80b7b8123c13d->leave($__internal_febb018e2c5b8eb20bce6d2e7b8e7d1026b2cc1e732c921d40b80b7b8123c13d_prof);

    }

    // line 3
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_5c1443c1cc92080ecbb6b5fdd2f83a31f39500b6ce5fcd51a273e401b063971b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1443c1cc92080ecbb6b5fdd2f83a31f39500b6ce5fcd51a273e401b063971b->enter($__internal_5c1443c1cc92080ecbb6b5fdd2f83a31f39500b6ce5fcd51a273e401b063971b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_68ccfeda582e1500b387a34b785ddfa12f0522f44371cde23ec83292309d3cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ccfeda582e1500b387a34b785ddfa12f0522f44371cde23ec83292309d3cdd->enter($__internal_68ccfeda582e1500b387a34b785ddfa12f0522f44371cde23ec83292309d3cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 4
        echo "  
  <div class=\"row\">
 ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 7
            echo "            
                    <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"card h-100\">
                <a href=\"#\"><img class=\"card-img-top\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Subu-Design-08.jpg"), "html", null, true);
            echo "\" alt=\"\"></a>
                <div class=\"card-body\">
                  <h4 class=\"card-title\">
                    <a href=\"#\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "NomBien", array()), "html", null, true);
            echo "</a>
                  </h4>
                  <h5>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "Prix", array()), "html", null, true);
            echo " Fcfa</h5>
                  <p class=\"card-text\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "Description", array()), "html", null, true);
            echo "...<br/>
                  </p>
                  <h4> Type: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Type", array()), "Libelle", array()), "html", null, true);
            echo "</h4>
                  <h4> Localité: ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Localite", array()), "Libelle", array()), "html", null, true);
            echo "</h4>
                  <a href=\"";
            // line 20
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
        // line 29
        echo " <div class=\"text-center\" style=\"margin-left:450px\">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["reservations"] ?? $this->getContext($context, "reservations")));
        echo "</div>

   </div>
   
          <!-- /.row -->
           ";
        
        $__internal_68ccfeda582e1500b387a34b785ddfa12f0522f44371cde23ec83292309d3cdd->leave($__internal_68ccfeda582e1500b387a34b785ddfa12f0522f44371cde23ec83292309d3cdd_prof);

        
        $__internal_5c1443c1cc92080ecbb6b5fdd2f83a31f39500b6ce5fcd51a273e401b063971b->leave($__internal_5c1443c1cc92080ecbb6b5fdd2f83a31f39500b6ce5fcd51a273e401b063971b_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Front:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  90 => 20,  86 => 19,  82 => 18,  77 => 16,  73 => 15,  68 => 13,  62 => 10,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

   {% block catalogue %}
  
  <div class=\"row\">
 {%for bien in reservations%}
            
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
 <div class=\"text-center\" style=\"margin-left:450px\">{{ knp_pagination_render(reservations) }}</div>

   </div>
   
          <!-- /.row -->
           {% endblock %}", "AkinaImmobilierBundle:Front:search.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Front/search.html.twig");
    }
}
