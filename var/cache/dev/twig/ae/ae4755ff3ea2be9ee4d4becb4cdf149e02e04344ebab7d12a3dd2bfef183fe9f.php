<?php

/* AkinaImmobilierBundle:Admin:contrat.html.twig */
class __TwigTemplate_820268f1bafeb4079279d0e7b67e7c014453db214cebdb454abcf6893e6aa40e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:contrat.html.twig", 1);
        $this->blocks = array(
            'upload' => array($this, 'block_upload'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::LayoutAdmin/integration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbf25f3cc3aaa83a0ab638fd46a3d977ddb31387cb8dfcca320f31276f06d23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf25f3cc3aaa83a0ab638fd46a3d977ddb31387cb8dfcca320f31276f06d23e->enter($__internal_dbf25f3cc3aaa83a0ab638fd46a3d977ddb31387cb8dfcca320f31276f06d23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:contrat.html.twig"));

        $__internal_3066a020324dd68d1119cfe88b177a3406210db39da8f33d27cb77a9807b4fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3066a020324dd68d1119cfe88b177a3406210db39da8f33d27cb77a9807b4fa3->enter($__internal_3066a020324dd68d1119cfe88b177a3406210db39da8f33d27cb77a9807b4fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf25f3cc3aaa83a0ab638fd46a3d977ddb31387cb8dfcca320f31276f06d23e->leave($__internal_dbf25f3cc3aaa83a0ab638fd46a3d977ddb31387cb8dfcca320f31276f06d23e_prof);

        
        $__internal_3066a020324dd68d1119cfe88b177a3406210db39da8f33d27cb77a9807b4fa3->leave($__internal_3066a020324dd68d1119cfe88b177a3406210db39da8f33d27cb77a9807b4fa3_prof);

    }

    // line 2
    public function block_upload($context, array $blocks = array())
    {
        $__internal_533808a0d3da685d7c0c2419742062131b9a65ee8690f181668f12744520d0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533808a0d3da685d7c0c2419742062131b9a65ee8690f181668f12744520d0e4->enter($__internal_533808a0d3da685d7c0c2419742062131b9a65ee8690f181668f12744520d0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_0390dba53aea87284374f12772ba84fd678fa020e9e2263a947599d0114e23cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0390dba53aea87284374f12772ba84fd678fa020e9e2263a947599d0114e23cb->enter($__internal_0390dba53aea87284374f12772ba84fd678fa020e9e2263a947599d0114e23cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 3
        echo "  <style>
  .btn{
      float:right;
  }
  </style>
<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">

<h1>Contrat</h1>

<h2>Infos client</h2>
 ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservation"] ?? $this->getContext($context, "reservation")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 14
            echo "            <div class=\"form-group\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du client    </strong></td><td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Nom", array()), "html", null, true);
            echo "
 </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "numeroPiece", array()), "html", null, true);
            echo "
 </td></tr>
    <tr><td><strong>Addresse         </strong></td><td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Addresse", array()), "html", null, true);
            echo "
 </td></tr>
    <tr><td><strong>Email            </strong></td><td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "email", array()), "html", null, true);
            echo "
 </td></tr>
       <tr><td><strong>Téléphone         </strong></td><td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "telephone", array()), "html", null, true);
            echo "
 </td></tr>

  </div>
 <tr><td> <h2>Infos du bien</h2></td></tr>
 <div class=\"form-group\">
    <tr><td><strong>Nom du bien    </strong></td><td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "
 </td></tr>

    <tr><td><strong>Prix        </strong></td><td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()), "html", null, true);
            echo "
 </td></tr>
    <tr><td><strong>Proprietaire           </strong></td><td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo " </td></tr
    >   <tr><td><strong>Localite         </strong></td><td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo "
 </td></tr>
<tr><td><strong>Type         </strong></td><td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Type", array()), "libelle", array()), "html", null, true);
            echo "
 </td></tr>
<tr><td> ";
            // line 41
            echo "<strong>
    La mensualité
</strong>
            </td> <td>





      ";
            // line 51
            echo "
      ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()), "html", null, true);
            echo "



 </td></tr>
<tr><td> ";
            // line 58
            echo "<strong>

La caution
</strong>
            </td> <td>


 ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()), "html", null, true);
            echo "


      ";
            // line 69
            echo "


</td></tr>
<tr><td> ";
            // line 74
            echo "<strong>

La totale
</strong>
            </td> <td>


 ";
            // line 81
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()) + $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array())), "html", null, true);
            echo "


      ";
            // line 85
            echo "


</td></tr>
  </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "




";
        // line 96
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
           <tr><td> ";
        // line 98
        echo "<strong>

    <label>
    Les termes du contrat
    </label>
</strong>
            </td> <td>




<textarea disabled=\"disabled\" >
";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["terme"] ?? $this->getContext($context, "terme")));
        foreach ($context['_seq'] as $context["_key"] => $context["termes"]) {
            // line 111
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["termes"], "texte", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['termes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "</textarea>




</td></tr>
  <tr><td> </td><td>
  <input id=\"checkBox\" name=\"checkBox\" id=\"oui\" type=\"radio\">Accepter
  <input id=\"checkBox\" name=\"checkBox\" id=\"non\" type=\"radio\" style=\"margin-left:20px;\">Refuser
  </td></tr>
            <tr><td>
        </td><td><input class=\"btn btn-dark\" type=\"submit\" id=\"soumet\" value=\"Enregistrer\" />
        </td></tr>
        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

        </table>
        </div>

  ";
        
        $__internal_0390dba53aea87284374f12772ba84fd678fa020e9e2263a947599d0114e23cb->leave($__internal_0390dba53aea87284374f12772ba84fd678fa020e9e2263a947599d0114e23cb_prof);

        
        $__internal_533808a0d3da685d7c0c2419742062131b9a65ee8690f181668f12744520d0e4->leave($__internal_533808a0d3da685d7c0c2419742062131b9a65ee8690f181668f12744520d0e4_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 126,  234 => 113,  225 => 111,  221 => 110,  207 => 98,  203 => 96,  196 => 91,  185 => 85,  179 => 81,  170 => 74,  164 => 69,  158 => 65,  149 => 58,  141 => 52,  138 => 51,  127 => 41,  122 => 38,  117 => 36,  111 => 35,  106 => 33,  100 => 30,  91 => 24,  86 => 22,  81 => 20,  76 => 18,  69 => 16,  65 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::LayoutAdmin/integration.html.twig\" %}
  {% block upload %}
  <style>
  .btn{
      float:right;
  }
  </style>
<div class=\"form-group list-group-item\" style=\"padding-bottom:30px\">

<h1>Contrat</h1>

<h2>Infos client</h2>
 {% for reserve in reservation %}
            <div class=\"form-group\">
  <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du client    </strong></td><td>{{reserve.Client.Prenom}} {{reserve.Client.Nom}}
 </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td>{{reserve.Client.numeroPiece}}
 </td></tr>
    <tr><td><strong>Addresse         </strong></td><td>{{reserve.Client.Addresse}}
 </td></tr>
    <tr><td><strong>Email            </strong></td><td>{{reserve.Client.email}}
 </td></tr>
       <tr><td><strong>Téléphone         </strong></td><td>{{reserve.Client.telephone}}
 </td></tr>

  </div>
 <tr><td> <h2>Infos du bien</h2></td></tr>
 <div class=\"form-group\">
    <tr><td><strong>Nom du bien    </strong></td><td>{{reserve.Bien.nomBien }}
 </td></tr>

    <tr><td><strong>Prix        </strong></td><td>{{reserve.Bien.prix }}
 </td></tr>
    <tr><td><strong>Proprietaire           </strong></td><td>{{reserve.Bien.Proprietaire.Prenom}} {{reserve.Bien.Proprietaire.Nom}} </td></tr
    >   <tr><td><strong>Localite         </strong></td><td>{{reserve.Bien.Localite.libelle }}
 </td></tr>
<tr><td><strong>Type         </strong></td><td>{{reserve.Bien.Type.libelle }}
 </td></tr>
<tr><td> {# Génération du label. #}
<strong>
    La mensualité
</strong>
            </td> <td>





      {# Génération de l'input. #}

      {{reserve.Bien.prix }}



 </td></tr>
<tr><td> {# Génération du label. #}
<strong>

La caution
</strong>
            </td> <td>


 {{reserve.Bien.prix }}


      {# Génération de l'input. #}



</td></tr>
<tr><td> {# Génération du label. #}
<strong>

La totale
</strong>
            </td> <td>


 {{reserve.Bien.prix + reserve.Bien.prix}}


      {# Génération de l'input. #}



</td></tr>
  </div>
   {% endfor %}





{{ form_start(form)}}
           <tr><td> {# Génération du label. #}
<strong>

    <label>
    Les termes du contrat
    </label>
</strong>
            </td> <td>




<textarea disabled=\"disabled\" >
{% for termes in terme %}
    {{ termes.texte}}
{% endfor %}
</textarea>




</td></tr>
  <tr><td> </td><td>
  <input id=\"checkBox\" name=\"checkBox\" id=\"oui\" type=\"radio\">Accepter
  <input id=\"checkBox\" name=\"checkBox\" id=\"non\" type=\"radio\" style=\"margin-left:20px;\">Refuser
  </td></tr>
            <tr><td>
        </td><td><input class=\"btn btn-dark\" type=\"submit\" id=\"soumet\" value=\"Enregistrer\" />
        </td></tr>
        {{form_end(form)}}

        </table>
        </div>

  {% endblock %}", "AkinaImmobilierBundle:Admin:contrat.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/contrat.html.twig");
    }
}
