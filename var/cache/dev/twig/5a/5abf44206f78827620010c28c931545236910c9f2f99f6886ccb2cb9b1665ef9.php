<?php

/* AkinaImmobilierBundle:Admin:list.html.twig */
class __TwigTemplate_9f05cb994a0b9ca56939874ca4740deee01bef3459258535f902cbf6e9e302ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:list.html.twig", 1);
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
        $__internal_08c5aceaecddd72f7172a1bb6108bacb72b47037f8589a25ee8870130f4a6e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c5aceaecddd72f7172a1bb6108bacb72b47037f8589a25ee8870130f4a6e3e->enter($__internal_08c5aceaecddd72f7172a1bb6108bacb72b47037f8589a25ee8870130f4a6e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:list.html.twig"));

        $__internal_3373d2cdd4b90b8aa016a4620ee226786a7a43c5084bcad28723e73210dee381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3373d2cdd4b90b8aa016a4620ee226786a7a43c5084bcad28723e73210dee381->enter($__internal_3373d2cdd4b90b8aa016a4620ee226786a7a43c5084bcad28723e73210dee381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c5aceaecddd72f7172a1bb6108bacb72b47037f8589a25ee8870130f4a6e3e->leave($__internal_08c5aceaecddd72f7172a1bb6108bacb72b47037f8589a25ee8870130f4a6e3e_prof);

        
        $__internal_3373d2cdd4b90b8aa016a4620ee226786a7a43c5084bcad28723e73210dee381->leave($__internal_3373d2cdd4b90b8aa016a4620ee226786a7a43c5084bcad28723e73210dee381_prof);

    }

    // line 4
    public function block_upload($context, array $blocks = array())
    {
        $__internal_295499aeaeaa3cfc7b5ff879cf12096019f6a85f01a68c06b4c482ff1f8183b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295499aeaeaa3cfc7b5ff879cf12096019f6a85f01a68c06b4c482ff1f8183b1->enter($__internal_295499aeaeaa3cfc7b5ff879cf12096019f6a85f01a68c06b4c482ff1f8183b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_3d50ca3635b2fc29d9a3d26578338c45f4c259968666f220648ffae52e2618b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d50ca3635b2fc29d9a3d26578338c45f4c259968666f220648ffae52e2618b7->enter($__internal_3d50ca3635b2fc29d9a3d26578338c45f4c259968666f220648ffae52e2618b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 5
        echo "<div class=\"col-lg-6\">
                    <div class=\"card\">
                      <div class=\"card-header\">
                        <strong>Basic Form</strong> Elements
                      </div>
                      <div class=\"card-body card-block\">
                        
                      </div>
                      <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                          <i class=\"fa fa-dot-circle-o\"></i> Submit
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                          <i class=\"fa fa-ban\"></i> Reset
                        </button>
                      </div>
                    </div>
                    </div>

 <div class=\"container\">
<h3>
Liste des biens
</h3>

 <div class=\"table-responsive \">
<table class=\"table table-bordred table-striped table-inverse display\" id=\"myTable\">
<thead>
<tr>
    <th>N° </th>
<th>Nom Bien</th>
<th>Etat</th>

<th>Description</th>
<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 46
            echo "<tr>
<td>

</td>

<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponibilite", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">
";
            // line 53
            if (($this->getAttribute($context["bien"], "etat", array()) == 1)) {
                // line 54
                echo "Occupé
";
            } else {
                // line 56
                echo "Disponible
";
            }
            // line 58
            echo "</a></td>
<td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>


<td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
<td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Type", array()), "libelle", array()), "html", null, true);
            echo "</td>

<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "Proprietaire", array()), "numeroPiece", array()), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailBien", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\">Détails</a></td>
<td></td>
</tr>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</tbody>
</table>
</div>

</div>


";
        
        $__internal_3d50ca3635b2fc29d9a3d26578338c45f4c259968666f220648ffae52e2618b7->leave($__internal_3d50ca3635b2fc29d9a3d26578338c45f4c259968666f220648ffae52e2618b7_prof);

        
        $__internal_295499aeaeaa3cfc7b5ff879cf12096019f6a85f01a68c06b4c482ff1f8183b1->leave($__internal_295499aeaeaa3cfc7b5ff879cf12096019f6a85f01a68c06b4c482ff1f8183b1_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 73,  153 => 71,  143 => 66,  139 => 65,  134 => 63,  130 => 62,  124 => 59,  121 => 58,  117 => 56,  113 => 54,  111 => 53,  107 => 52,  103 => 51,  96 => 46,  91 => 45,  49 => 5,  40 => 4,  11 => 1,);
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
<div class=\"col-lg-6\">
                    <div class=\"card\">
                      <div class=\"card-header\">
                        <strong>Basic Form</strong> Elements
                      </div>
                      <div class=\"card-body card-block\">
                        
                      </div>
                      <div class=\"card-footer\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                          <i class=\"fa fa-dot-circle-o\"></i> Submit
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                          <i class=\"fa fa-ban\"></i> Reset
                        </button>
                      </div>
                    </div>
                    </div>

 <div class=\"container\">
<h3>
Liste des biens
</h3>

 <div class=\"table-responsive \">
<table class=\"table table-bordred table-striped table-inverse display\" id=\"myTable\">
<thead>
<tr>
    <th>N° </th>
<th>Nom Bien</th>
<th>Etat</th>

<th>Description</th>
<th>Localite</th>
<th>Type</th>
<th>Proprietaire</th>
<th>Détails</th>
</tr>
</thead>
<tbody>
{%for bien in reservations%}
<tr>
<td>

</td>

<td>{{bien.nomBien}}</td>
<td><a href=\"{{path('disponibilite',{'id':bien.id})}}\">
{%if bien.etat == 1%}
Occupé
{% else %}
Disponible
{% endif%}
</a></td>
<td>{{bien.description}}</td>


<td>{{bien.Localite.libelle }}</td>
<td>{{bien.Type.libelle}}</td>

<td>{{bien.Proprietaire.numeroPiece}}</td>
<td><a href=\"{{path('detailBien',{'id':bien.id})}}\">Détails</a></td>
<td></td>
</tr>

{%else%}

{%endfor%}
</tbody>
</table>
</div>

</div>


{% endblock %}", "AkinaImmobilierBundle:Admin:list.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/list.html.twig");
    }
}
