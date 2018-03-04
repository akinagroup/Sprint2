<?php

/* AkinaImmobilierBundle:Admin:paiement.html.twig */
class __TwigTemplate_36eaf9c33c0311b7c4de8403a288c83e159b3df0f9fb2140900baebdba49ca39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:paiement.html.twig", 1);
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
        $__internal_89d2d62d1d478fd01b20eaec0cb95203cdd3f1a3107347dbdf2868426f908840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d2d62d1d478fd01b20eaec0cb95203cdd3f1a3107347dbdf2868426f908840->enter($__internal_89d2d62d1d478fd01b20eaec0cb95203cdd3f1a3107347dbdf2868426f908840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:paiement.html.twig"));

        $__internal_ab3381387fd68bd6a1ce2a7321b2f8d21c9e757f8f03c322584263695fae962c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3381387fd68bd6a1ce2a7321b2f8d21c9e757f8f03c322584263695fae962c->enter($__internal_ab3381387fd68bd6a1ce2a7321b2f8d21c9e757f8f03c322584263695fae962c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89d2d62d1d478fd01b20eaec0cb95203cdd3f1a3107347dbdf2868426f908840->leave($__internal_89d2d62d1d478fd01b20eaec0cb95203cdd3f1a3107347dbdf2868426f908840_prof);

        
        $__internal_ab3381387fd68bd6a1ce2a7321b2f8d21c9e757f8f03c322584263695fae962c->leave($__internal_ab3381387fd68bd6a1ce2a7321b2f8d21c9e757f8f03c322584263695fae962c_prof);

    }

    // line 3
    public function block_upload($context, array $blocks = array())
    {
        $__internal_d7f5b7b3546742369311f850f8974ef55d812e6483b8669d6c7f35fa8a3ecc60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f5b7b3546742369311f850f8974ef55d812e6483b8669d6c7f35fa8a3ecc60->enter($__internal_d7f5b7b3546742369311f850f8974ef55d812e6483b8669d6c7f35fa8a3ecc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_1c75f7c72cdcbdd9fb6af407db722be8bea4be3da8c5bc51c0c9ab13c5e43a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c75f7c72cdcbdd9fb6af407db722be8bea4be3da8c5bc51c0c9ab13c5e43a4a->enter($__internal_1c75f7c72cdcbdd9fb6af407db722be8bea4be3da8c5bc51c0c9ab13c5e43a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 4
        echo "<!-- Responsive extension -->

        <script
\t\t\t  src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
\t\t\t  integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"
\t\t\t  crossorigin=\"anonymous\"></script>


<h3>
Liste des reservations
</h3>
 <div class=\"container\">


 <div class=\"table-responsive \" id=\"example\">
<table class=\"table datatable table-bordred table-striped table-inverse display\" >
<thead>
<tr>
    <th>N° </th>
<th >Nom du client</th>
<th>Montant total payer</th>

<th>Durée</th>
<th>Nom du bien</th>
<th>Localite</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 35
            echo "<tr>
<td>


</td>

<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "client", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "client", array()), "Nom", array()), "html", null, true);
            echo "</td>

<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "montantPayer", array()), "html", null, true);
            echo "</td>
<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "duree", array()), "html", null, true);
            echo "</td>

<td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "Bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "Bien", array()), "Localite", array()), "Libelle", array()), "html", null, true);
            echo "</td>

<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "Bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Contrat", array()), "Bien", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo "</td>
<td><a href=\"#\" >Détails</a></td>
<td></td>
</tr>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "<td colspan=\"6\">Aucun utilisateur</td>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</tbody>
</table>
</div>

</div>


";
        
        $__internal_1c75f7c72cdcbdd9fb6af407db722be8bea4be3da8c5bc51c0c9ab13c5e43a4a->leave($__internal_1c75f7c72cdcbdd9fb6af407db722be8bea4be3da8c5bc51c0c9ab13c5e43a4a_prof);

        
        $__internal_d7f5b7b3546742369311f850f8974ef55d812e6483b8669d6c7f35fa8a3ecc60->leave($__internal_d7f5b7b3546742369311f850f8974ef55d812e6483b8669d6c7f35fa8a3ecc60_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 58,  132 => 55,  119 => 49,  114 => 47,  110 => 46,  105 => 44,  101 => 43,  94 => 41,  86 => 35,  81 => 34,  49 => 4,  40 => 3,  11 => 1,);
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
<!-- Responsive extension -->

        <script
\t\t\t  src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
\t\t\t  integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"
\t\t\t  crossorigin=\"anonymous\"></script>


<h3>
Liste des reservations
</h3>
 <div class=\"container\">


 <div class=\"table-responsive \" id=\"example\">
<table class=\"table datatable table-bordred table-striped table-inverse display\" >
<thead>
<tr>
    <th>N° </th>
<th >Nom du client</th>
<th>Montant total payer</th>

<th>Durée</th>
<th>Nom du bien</th>
<th>Localite</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
{%for reserve in reservations%}
<tr>
<td>


</td>

<td>{{reserve.Contrat.client.Prenom}} {{reserve.Contrat.client.Nom}}</td>

<td>{{reserve.montantPayer}}</td>
<td>{{reserve.duree}}</td>

<td>{{reserve.Contrat.Bien.nomBien }}</td>
<td>{{reserve.Contrat.Bien.Localite.Libelle}}</td>

<td>{{reserve.Contrat.Bien.Proprietaire.Prenom}} {{reserve.Contrat.Bien.Proprietaire.Nom}}</td>
<td><a href=\"#\" >Détails</a></td>
<td></td>
</tr>

{%else%}
<td colspan=\"6\">Aucun utilisateur</td>

{%endfor%}
</tbody>
</table>
</div>

</div>


{% endblock %}", "AkinaImmobilierBundle:Admin:paiement.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/paiement.html.twig");
    }
}
