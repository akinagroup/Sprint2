<?php

/* AkinaImmobilierBundle:Admin:detailBien.html.twig */
class __TwigTemplate_4c8d9f787ff7c5d712b5029c01bdc02699c77b501454722198125e2e10501581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:detailBien.html.twig", 1);
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
        $__internal_a895102b6905cffb89e51516dc67331b80c597923ade785598fa47671ad1aecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a895102b6905cffb89e51516dc67331b80c597923ade785598fa47671ad1aecb->enter($__internal_a895102b6905cffb89e51516dc67331b80c597923ade785598fa47671ad1aecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:detailBien.html.twig"));

        $__internal_f0294b77a2bddf61637533b219b051de5242826ce92dce68034452c0f1ba7039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0294b77a2bddf61637533b219b051de5242826ce92dce68034452c0f1ba7039->enter($__internal_f0294b77a2bddf61637533b219b051de5242826ce92dce68034452c0f1ba7039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:detailBien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a895102b6905cffb89e51516dc67331b80c597923ade785598fa47671ad1aecb->leave($__internal_a895102b6905cffb89e51516dc67331b80c597923ade785598fa47671ad1aecb_prof);

        
        $__internal_f0294b77a2bddf61637533b219b051de5242826ce92dce68034452c0f1ba7039->leave($__internal_f0294b77a2bddf61637533b219b051de5242826ce92dce68034452c0f1ba7039_prof);

    }

    // line 4
    public function block_upload($context, array $blocks = array())
    {
        $__internal_7ac369d6cb3d1cccb5949ad46c40e6f99ea7a0632a757ad951cff4c366019967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac369d6cb3d1cccb5949ad46c40e6f99ea7a0632a757ad951cff4c366019967->enter($__internal_7ac369d6cb3d1cccb5949ad46c40e6f99ea7a0632a757ad951cff4c366019967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_5541fa3d3b002b1fb634d1c6b4d58bae6289b09fe415f4f4a3371349bceb4e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5541fa3d3b002b1fb634d1c6b4d58bae6289b09fe415f4f4a3371349bceb4e86->enter($__internal_5541fa3d3b002b1fb634d1c6b4d58bae6289b09fe415f4f4a3371349bceb4e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 5
        echo "
  
  <style>



</style>
<h3>
Voir les détails sur :
</h3>


    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detail"] ?? $this->getContext($context, "detail")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve"]) {
            // line 18
            echo "

<div class=\"\">
              <div class=\"card \">
                <div class=\"card-body\">
                <table class=\"table table-bordred table-striped table-inverse display\">

    <tr><td><strong>Nom du bien    </strong></td><td><span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "nomBien", array()), "html", null, true);
            echo "        </span>     </td></tr>
    <tr><td><strong>Description    </strong></td><td><span>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "description", array()), "html", null, true);
            echo "        </span> </td></tr>
    <tr><td><strong>Prix           </strong></td><td><span>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "prix", array()), "html", null, true);
            echo "              </span>  </td></tr>

   <tr><td><strong>Localite        </strong></td><td><span>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Localite", array()), "libelle", array()), "html", null, true);
            echo " </span>   </td></tr>
   <tr><td> <strong>Type           </strong></td><td><span> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Type", array()), "libelle", array()), "html", null, true);
            echo "     </span>   </td></tr>
<tr><td> <strong>Images          </strong></td><td><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["reserve"], "image", array()))), "html", null, true);
            echo "\" height=\"100px\" width=\"250px\">
   </td></tr>

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
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Proprietaire", array()), "Prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Proprietaire", array()), "Nom", array()), "html", null, true);
            echo "     </span>    </td></tr>
    <tr><td><strong>Numéro CNI       </strong></td><td><span>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Proprietaire", array()), "numeroPiece", array()), "html", null, true);
            echo " </span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Proprietaire", array()), "Addresse", array()), "html", null, true);
            echo "   </span>    </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reserve"], "Biens", array()), "Proprietaire", array()), "email", array()), "html", null, true);
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
        // line 62
        echo "
  </div>
</div>

  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
";
        
        $__internal_5541fa3d3b002b1fb634d1c6b4d58bae6289b09fe415f4f4a3371349bceb4e86->leave($__internal_5541fa3d3b002b1fb634d1c6b4d58bae6289b09fe415f4f4a3371349bceb4e86_prof);

        
        $__internal_7ac369d6cb3d1cccb5949ad46c40e6f99ea7a0632a757ad951cff4c366019967->leave($__internal_7ac369d6cb3d1cccb5949ad46c40e6f99ea7a0632a757ad951cff4c366019967_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:detailBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 62,  128 => 48,  124 => 47,  120 => 46,  114 => 45,  97 => 31,  93 => 30,  89 => 29,  84 => 27,  80 => 26,  76 => 25,  67 => 18,  63 => 17,  49 => 5,  40 => 4,  11 => 1,);
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



</style>
<h3>
Voir les détails sur :
</h3>


    {% for reserve in detail %}


<div class=\"\">
              <div class=\"card \">
                <div class=\"card-body\">
                <table class=\"table table-bordred table-striped table-inverse display\">

    <tr><td><strong>Nom du bien    </strong></td><td><span>{{reserve.Biens.nomBien }}        </span>     </td></tr>
    <tr><td><strong>Description    </strong></td><td><span>{{reserve.Biens.description }}        </span> </td></tr>
    <tr><td><strong>Prix           </strong></td><td><span>{{reserve.Biens.prix }}              </span>  </td></tr>

   <tr><td><strong>Localite        </strong></td><td><span>{{reserve.Biens.Localite.libelle }} </span>   </td></tr>
   <tr><td> <strong>Type           </strong></td><td><span> {{reserve.Biens.Type.libelle }}     </span>   </td></tr>
<tr><td> <strong>Images          </strong></td><td><img src=\"{{ asset('uploads/images/' ~ reserve.image) }}\" height=\"100px\" width=\"250px\">
   </td></tr>

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
  <tr><td><strong>Nom du propriétaire</strong></td><td><span>{{reserve.Biens.Proprietaire.Prenom}} {{reserve.Biens.Proprietaire.Nom}}     </span>    </td></tr>
    <tr><td><strong>Numéro CNI       </strong></td><td><span>{{reserve.Biens.Proprietaire.numeroPiece}} </span> </td></tr>
    <tr><td><strong>Addresse         </strong></td><td><span>{{reserve.Biens.Proprietaire.Addresse}}   </span>    </td></tr>
    <tr><td><strong>Email            </strong></td><td><span>{{reserve.Biens.Proprietaire.email}}   </span></td></tr>
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
{% endblock %}", "AkinaImmobilierBundle:Admin:detailBien.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/detailBien.html.twig");
    }
}
