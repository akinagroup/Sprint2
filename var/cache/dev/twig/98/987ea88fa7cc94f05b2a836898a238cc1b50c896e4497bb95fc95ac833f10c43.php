<?php

/* AkinaImmobilierBundle:Admin:listRes.html.twig */
class __TwigTemplate_7679740a50610d53b7fd4e97df8af68ba13a5c8af0add20f46537c82c0cbbd8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:listRes.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'upload' => array($this, 'block_upload'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::LayoutAdmin/integration.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9965c06376bf074c2659796a7be942467358f18881e2f99f4e6ae5a490009910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9965c06376bf074c2659796a7be942467358f18881e2f99f4e6ae5a490009910->enter($__internal_9965c06376bf074c2659796a7be942467358f18881e2f99f4e6ae5a490009910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:listRes.html.twig"));

        $__internal_5fb8e2ce9c13e23fd6aa954eb939c5e5ca37dbaea1d1363212714563e56cc506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb8e2ce9c13e23fd6aa954eb939c5e5ca37dbaea1d1363212714563e56cc506->enter($__internal_5fb8e2ce9c13e23fd6aa954eb939c5e5ca37dbaea1d1363212714563e56cc506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:listRes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9965c06376bf074c2659796a7be942467358f18881e2f99f4e6ae5a490009910->leave($__internal_9965c06376bf074c2659796a7be942467358f18881e2f99f4e6ae5a490009910_prof);

        
        $__internal_5fb8e2ce9c13e23fd6aa954eb939c5e5ca37dbaea1d1363212714563e56cc506->leave($__internal_5fb8e2ce9c13e23fd6aa954eb939c5e5ca37dbaea1d1363212714563e56cc506_prof);

    }

    // line 2
    public function block_form($context, array $blocks = array())
    {
        $__internal_051265e6c8202ccc23b1ed690bbff0a06cda7bf457ff09c84edf44cea6fbcd3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051265e6c8202ccc23b1ed690bbff0a06cda7bf457ff09c84edf44cea6fbcd3a->enter($__internal_051265e6c8202ccc23b1ed690bbff0a06cda7bf457ff09c84edf44cea6fbcd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_57049fe744c058abda20a414e8f737d60a5ec9864a194c65a2d4a39a89be134a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57049fe744c058abda20a414e8f737d60a5ec9864a194c65a2d4a39a89be134a->enter($__internal_57049fe744c058abda20a414e8f737d60a5ec9864a194c65a2d4a39a89be134a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 3
        echo "
 <h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">


</div>
  ";
        
        $__internal_57049fe744c058abda20a414e8f737d60a5ec9864a194c65a2d4a39a89be134a->leave($__internal_57049fe744c058abda20a414e8f737d60a5ec9864a194c65a2d4a39a89be134a_prof);

        
        $__internal_051265e6c8202ccc23b1ed690bbff0a06cda7bf457ff09c84edf44cea6fbcd3a->leave($__internal_051265e6c8202ccc23b1ed690bbff0a06cda7bf457ff09c84edf44cea6fbcd3a_prof);

    }

    // line 10
    public function block_upload($context, array $blocks = array())
    {
        $__internal_df8e26c7cf3f64b7d9d4fd9b38915e5569c2eeb7426ddc5e5e0db32b4432b98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8e26c7cf3f64b7d9d4fd9b38915e5569c2eeb7426ddc5e5e0db32b4432b98a->enter($__internal_df8e26c7cf3f64b7d9d4fd9b38915e5569c2eeb7426ddc5e5e0db32b4432b98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_0c4f006f82097811f9ff92923245832519811ca15958151a793573c67499236f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4f006f82097811f9ff92923245832519811ca15958151a793573c67499236f->enter($__internal_0c4f006f82097811f9ff92923245832519811ca15958151a793573c67499236f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 11
        echo "
 <div id=\"bien\">
<h3>
Liste des reservations
</h3>
 <div class=\"container\">


 <div class=\"table-responsive \">
<table class=\"table datatable table-bordred table-striped table-inverse display\" id=\"example\">
<thead>
<tr>
    <th>N° </th>
<th>Nom client</th>


<th>Date de reservation</th>
<th>Nom du bien</th>
<th>Localite</th>
<th>Proprietaire</th>
<th>Détails</th>
<th>Valider</th>
</tr>
</thead>
<tbody>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 37
            echo "<tr>
<td>


</td>

<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Nom", array()), "html", null, true);
            echo "</td>

<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["reserve"], "dateDeReservation", array()), "html", null, true);
            echo "</td>


<td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Localite", array()), "Libelle", array()), "html", null, true);
            echo "</td>

<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo "</td>
<td><a  href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($context["reserve"], "id", array()))), "html", null, true);
            echo "\">Détails</a></td>

<td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("id" => $this->getAttribute($context["reserve"], "id", array()), "bien" => $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "id", array()))), "html", null, true);
            echo "\">

Valider

</a></td>
</tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</tbody>
</table>
</div>

</div>
 </div>

";
        
        $__internal_0c4f006f82097811f9ff92923245832519811ca15958151a793573c67499236f->leave($__internal_0c4f006f82097811f9ff92923245832519811ca15958151a793573c67499236f_prof);

        
        $__internal_df8e26c7cf3f64b7d9d4fd9b38915e5569c2eeb7426ddc5e5e0db32b4432b98a->leave($__internal_df8e26c7cf3f64b7d9d4fd9b38915e5569c2eeb7426ddc5e5e0db32b4432b98a_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:listRes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 62,  147 => 54,  142 => 52,  136 => 51,  131 => 49,  127 => 48,  121 => 45,  114 => 43,  106 => 37,  102 => 36,  75 => 11,  66 => 10,  50 => 3,  41 => 2,  11 => 1,);
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
 {% block form %}

 <h1 class=\"my-4 list-group-item\">Recherche de bien</h1>
<div class=\"form-group list-group-item\">


</div>
  {% endblock %}
{% block upload %}

 <div id=\"bien\">
<h3>
Liste des reservations
</h3>
 <div class=\"container\">


 <div class=\"table-responsive \">
<table class=\"table datatable table-bordred table-striped table-inverse display\" id=\"example\">
<thead>
<tr>
    <th>N° </th>
<th>Nom client</th>


<th>Date de reservation</th>
<th>Nom du bien</th>
<th>Localite</th>
<th>Proprietaire</th>
<th>Détails</th>
<th>Valider</th>
</tr>
</thead>
<tbody>
{% for reserve in reservations %}
<tr>
<td>


</td>

<td>{{reserve.Client.Prenom}} {{reserve.Client.Nom}}</td>

<td>{{reserve.dateDeReservation}}</td>


<td>{{reserve.Bien.nomBien }}</td>
<td>{{reserve.Bien.Localite.Libelle}}</td>

<td>{{reserve.Bien.Proprietaire.Prenom}} {{reserve.Bien.Proprietaire.Nom}}</td>
<td><a  href=\"{{path('detail',{'id':reserve.id})}}\">Détails</a></td>

<td><a href=\"{{path('contrat',{'id':reserve.id,'bien':reserve.Bien.id})}}\">

Valider

</a></td>
</tr>

{% endfor %}
</tbody>
</table>
</div>

</div>
 </div>

{% endblock %}", "AkinaImmobilierBundle:Admin:listRes.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/listRes.html.twig");
    }
}
