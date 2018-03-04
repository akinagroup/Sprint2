<?php

/* AkinaImmobilierBundle:Admin:Detail.html.twig */
class __TwigTemplate_323b1ea076743227c72e8816edbb86fc86ff2bae9047881c98afaa87c9f620cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:Detail.html.twig", 1);
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
        $__internal_f92db389aacbe26465d84821dc119daeb96c8652313338c871bb904705f6baa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92db389aacbe26465d84821dc119daeb96c8652313338c871bb904705f6baa8->enter($__internal_f92db389aacbe26465d84821dc119daeb96c8652313338c871bb904705f6baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:Detail.html.twig"));

        $__internal_8520f57850429909019e9a9a5f59b343e3653e20e14f1b3702bb20822171c4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8520f57850429909019e9a9a5f59b343e3653e20e14f1b3702bb20822171c4da->enter($__internal_8520f57850429909019e9a9a5f59b343e3653e20e14f1b3702bb20822171c4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:Detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f92db389aacbe26465d84821dc119daeb96c8652313338c871bb904705f6baa8->leave($__internal_f92db389aacbe26465d84821dc119daeb96c8652313338c871bb904705f6baa8_prof);

        
        $__internal_8520f57850429909019e9a9a5f59b343e3653e20e14f1b3702bb20822171c4da->leave($__internal_8520f57850429909019e9a9a5f59b343e3653e20e14f1b3702bb20822171c4da_prof);

    }

    // line 4
    public function block_upload($context, array $blocks = array())
    {
        $__internal_d271eac5f285eb6ebc9b1140f3f6174f8f6708194d5a97f89a6a0b7c2736ebca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d271eac5f285eb6ebc9b1140f3f6174f8f6708194d5a97f89a6a0b7c2736ebca->enter($__internal_d271eac5f285eb6ebc9b1140f3f6174f8f6708194d5a97f89a6a0b7c2736ebca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_57ef45c7c66f5bf76e9eba972e9c771d7765e96a6dbe40c38dfcebecdaff4737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ef45c7c66f5bf76e9eba972e9c771d7765e96a6dbe40c38dfcebecdaff4737->enter($__internal_57ef45c7c66f5bf76e9eba972e9c771d7765e96a6dbe40c38dfcebecdaff4737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 5
        echo "
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">

  <style>

.tabu {

    border-radius:3px;

    height:400px;


}
span{


}
#lirelasuite {display:none;}


</style>
<h3>
Voir les détails sur :
</h3>


    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detail"] ?? $this->getContext($context, "detail")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 34
            echo "

<div class=\"\">
              <div class=\"card \">
                <div class=\"card-body\">
                <table class=\"table table-bordred table-striped table-inverse display\">

    <tr><td><strong>Nom du bien    </strong></td><td><span>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "nomBien", array()), "html", null, true);
            echo "        </span>     </td></tr>
    <tr><td><strong>Description    </strong></td><td><p><p id=\"lirelasuite\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "description", array()), "html", null, true);
            echo " </p> <a href=\"#nogo\" onclick=\"document.getElementById('lirelasuite').style.display = 'block'; this.style.display = 'none';\">Lire la suite...</a></p>
      </td></tr>
    <tr><td><strong>Prix           </strong></td><td><span>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "prix", array()), "html", null, true);
            echo "              </span>  </td></tr>

   <tr><td><strong>Localite        </strong></td><td><span>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo " </span>   </td></tr>
   <tr><td> <strong>Type           </strong></td><td><span> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Type", array()), "libelle", array()), "html", null, true);
            echo "     </span>   </td></tr>

  </table>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

              <div class=\"card h-100\">
               <div class=\"card-body\">
                 <table class=\"table table-bordred table-striped table-inverse display\">
  <tr><td><strong>Nom du propriétaire</strong></td><td><span>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo "     </span>    </td></tr>
    <tr><td><strong>Numéro CNI       </strong></td><td><span>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "numeroPiece", array()), "html", null, true);
            echo " </span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "Addresse", array()), "html", null, true);
            echo "   </span>    </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Bien", array()), "Proprietaire", array()), "email", array()), "html", null, true);
            echo "   </span></td></tr>
    </table>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>



            <div class=\"card h-100\">
                <div class=\"card-body\">
                 <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du client    </strong></td><td><span>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Nom", array()), "html", null, true);
            echo "</span>  </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td><span>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "numeroPiece", array()), "html", null, true);
            echo "</span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "Addresse", array()), "html", null, true);
            echo "    </span>  </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "email", array()), "html", null, true);
            echo "   </span></td></tr>
       <tr><td><strong>Téléphone         </strong></td><td><span>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Client", array()), "telephone", array()), "html", null, true);
            echo "   </span></td></tr>
</table>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>



 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
  </div>
</div>

  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
";
        
        $__internal_57ef45c7c66f5bf76e9eba972e9c771d7765e96a6dbe40c38dfcebecdaff4737->leave($__internal_57ef45c7c66f5bf76e9eba972e9c771d7765e96a6dbe40c38dfcebecdaff4737_prof);

        
        $__internal_d271eac5f285eb6ebc9b1140f3f6174f8f6708194d5a97f89a6a0b7c2736ebca->leave($__internal_d271eac5f285eb6ebc9b1140f3f6174f8f6708194d5a97f89a6a0b7c2736ebca_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:Detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 92,  174 => 80,  170 => 79,  166 => 78,  162 => 77,  156 => 76,  140 => 63,  136 => 62,  132 => 61,  126 => 60,  110 => 47,  106 => 46,  101 => 44,  96 => 42,  92 => 41,  83 => 34,  79 => 33,  49 => 5,  40 => 4,  11 => 1,);
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

  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">

  <style>

.tabu {

    border-radius:3px;

    height:400px;


}
span{


}
#lirelasuite {display:none;}


</style>
<h3>
Voir les détails sur :
</h3>


    {% for reserve in detail %}


<div class=\"\">
              <div class=\"card \">
                <div class=\"card-body\">
                <table class=\"table table-bordred table-striped table-inverse display\">

    <tr><td><strong>Nom du bien    </strong></td><td><span>{{reserve.Bien.nomBien }}        </span>     </td></tr>
    <tr><td><strong>Description    </strong></td><td><p><p id=\"lirelasuite\">{{reserve.Bien.description }} </p> <a href=\"#nogo\" onclick=\"document.getElementById('lirelasuite').style.display = 'block'; this.style.display = 'none';\">Lire la suite...</a></p>
      </td></tr>
    <tr><td><strong>Prix           </strong></td><td><span>{{reserve.Bien.prix }}              </span>  </td></tr>

   <tr><td><strong>Localite        </strong></td><td><span>{{reserve.Bien.Localite.libelle }} </span>   </td></tr>
   <tr><td> <strong>Type           </strong></td><td><span> {{reserve.Bien.Type.libelle }}     </span>   </td></tr>

  </table>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

              <div class=\"card h-100\">
               <div class=\"card-body\">
                 <table class=\"table table-bordred table-striped table-inverse display\">
  <tr><td><strong>Nom du propriétaire</strong></td><td><span>{{reserve.Bien.Proprietaire.Prenom}} {{reserve.Bien.Proprietaire.Nom}}     </span>    </td></tr>
    <tr><td><strong>Numéro CNI       </strong></td><td><span>{{reserve.Bien.Proprietaire.numeroPiece}} </span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>{{reserve.Bien.Proprietaire.Addresse}}   </span>    </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>{{reserve.Bien.Proprietaire.email}}   </span></td></tr>
    </table>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>



            <div class=\"card h-100\">
                <div class=\"card-body\">
                 <table class=\"table table-bordred table-striped table-inverse display\">
    <tr><td><strong>Nom du client    </strong></td><td><span>{{reserve.Client.Prenom}} {{reserve.Client.Nom}}</span>  </td></tr>
   <tr><td><strong>Numéro CNI        </strong></td><td><span>{{reserve.Client.numeroPiece}}</span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>{{reserve.Client.Addresse}}    </span>  </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>{{reserve.Client.email}}   </span></td></tr>
       <tr><td><strong>Téléphone         </strong></td><td><span>{{reserve.Client.telephone}}   </span></td></tr>
</table>
                </div>
                <div class=\"card-footer\">
                  <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>



 {% endfor %}

  </div>
</div>

  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
{% endblock %}", "AkinaImmobilierBundle:Admin:Detail.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/Detail.html.twig");
    }
}
