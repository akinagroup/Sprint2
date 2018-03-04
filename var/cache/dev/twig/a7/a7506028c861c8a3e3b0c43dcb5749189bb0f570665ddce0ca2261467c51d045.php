<?php

/* AkinaImmobilierBundle:Admin:add.html.twig */
class __TwigTemplate_1680c018ab30b61f6e0f3faea8c52bd2d680fe1b8724bc65a823b20425690cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::LayoutAdmin/integration.html.twig", "AkinaImmobilierBundle:Admin:add.html.twig", 1);
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
        $__internal_4be5719f882bca1d7b8c1df3bb34788f8387e63d68d25932aae32a290353262c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be5719f882bca1d7b8c1df3bb34788f8387e63d68d25932aae32a290353262c->enter($__internal_4be5719f882bca1d7b8c1df3bb34788f8387e63d68d25932aae32a290353262c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:add.html.twig"));

        $__internal_fb230133a15ac7a6c8a7bd995b50f70fdab239fc1b0ea437255145fffcc6359a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb230133a15ac7a6c8a7bd995b50f70fdab239fc1b0ea437255145fffcc6359a->enter($__internal_fb230133a15ac7a6c8a7bd995b50f70fdab239fc1b0ea437255145fffcc6359a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AkinaImmobilierBundle:Admin:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be5719f882bca1d7b8c1df3bb34788f8387e63d68d25932aae32a290353262c->leave($__internal_4be5719f882bca1d7b8c1df3bb34788f8387e63d68d25932aae32a290353262c_prof);

        
        $__internal_fb230133a15ac7a6c8a7bd995b50f70fdab239fc1b0ea437255145fffcc6359a->leave($__internal_fb230133a15ac7a6c8a7bd995b50f70fdab239fc1b0ea437255145fffcc6359a_prof);

    }

    // line 2
    public function block_upload($context, array $blocks = array())
    {
        $__internal_9f1001ff7bc1c54cbd2751245c4f9514c59c5f9fc6c80ebb7739e20641fe42c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1001ff7bc1c54cbd2751245c4f9514c59c5f9fc6c80ebb7739e20641fe42c8->enter($__internal_9f1001ff7bc1c54cbd2751245c4f9514c59c5f9fc6c80ebb7739e20641fe42c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_a77f5955d9d2697d1a2754c4268aecac5498e5972521f1802c2e99e8e1bb6eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77f5955d9d2697d1a2754c4268aecac5498e5972521f1802c2e99e8e1bb6eb0->enter($__internal_a77f5955d9d2697d1a2754c4268aecac5498e5972521f1802c2e99e8e1bb6eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 3
        echo "
        <!-- Dropzone css -->
        <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">






  <div class=\"col-lg-11\">
                    <div class=\"card\">
                     <form action=\"\" method=\"post\" class=\"form\" id=\"form\" >
                      <div class=\"card-header\">

<h1>Ajout de bien avec ses photos</h1>
                      </div>

                      <div class=\"card-body \">

                  <table class=\"table table-bordred table-striped table-inverse display\">

 <tr><td> <h2>Les infos du bien</h2></td><td></td></tr>

    <tr><td><strong>  ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "nomBien", array()), 'label');
        echo "

    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "nomBien", array()), 'errors');
        echo "   </strong></td><td> ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "nomBien", array()), 'widget');
        echo "


 </td></tr>

    <tr><td><strong>
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "prix", array()), 'label', array("attr" => array("class" => "row")));
        echo "

    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "prix", array()), 'errors');
        echo "     </strong></td><td>";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

 </td></tr>
    <tr><td><strong> ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "bienParent", array()), 'label', array("attr" => array("class" => "row"), "label" => "Parent"));
        echo "

    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "bienParent", array()), 'errors');
        echo "       </strong></td><td>";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "bienParent", array()), 'widget');
        echo "

 </td></tr>
<tr><td><strong>
    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "Proprietaire", array()), 'label', array("attr" => array("class" => "row")));
        echo "

    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "Proprietaire", array()), 'errors');
        echo "      </strong></td><td>";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "Proprietaire", array()), 'widget');
        echo "
 </td></tr>
<tr><td> ";
        // line 50
        echo "<strong>
   ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "Type", array()), 'label', array("attr" => array("class" => "row")));
        echo "

    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "Type", array()), 'errors');
        echo "
</strong>
            </td> <td>





      ";
        // line 62
        echo "
      ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "Type", array()), 'widget');
        echo "



 </td></tr>
<tr><td> ";
        // line 69
        echo "<strong>

";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "Localite", array()), 'label', array("attr" => array("class" => "row")));
        echo "

    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "Localite", array()), 'errors');
        echo "

</strong>
            </td> <td>

  ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "Localite", array()), 'widget');
        echo "


      ";
        // line 82
        echo "


</td></tr>
 <tr><td><strong> ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "description", array()), 'label', array("attr" => array("class" => "row")));
        echo "

    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "description", array()), 'errors');
        echo "       </strong></td><td>
      ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["formB"] ?? $this->getContext($context, "formB")), "description", array()), 'widget');
        echo "
 </td></tr
    >
<tr><td> ";
        // line 93
        echo "<strong id=\"in\">Insérer ici des images

</strong>
            </td> <td>
            ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["formI"] ?? $this->getContext($context, "formI")), 'form');
        echo "
   <div class=\"row\" >
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\" class=\"dropzone\" id=\"dropzone\" >
                                      <div class=\"fallback\" id=\"photos\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\" >
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>


      ";
        // line 113
        echo "


</td></tr>









        </table>


                      </div>
                      <div class=\"card-footer\" id=\"preview\">
                        <button type=\"submit\" class=\"btn btn-dark btn-sm\">
                          <i class=\"fa fa-dot-circle-o\"></i> Enregistrer
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                          <i class=\"fa fa-ban\"></i> Reset
                        </button>
                      </div>
                       ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["formB"] ?? $this->getContext($context, "formB")), 'rest');
        echo "
 </form>


                    </div>




        </div>
         <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script>
\$('#dropzone').change(function() {
    console.log(\"changer\");


    /*  \$(\"#preview\").each(function(e) {
        this.remove();
    });
    var file = \$(this);
    var reader = new FileReader;
    reader.onload = function(event) {
        var img = new Image();
        img.onload = function() {
            var width = 140;
            var height = 90
            var canvas = \$('<canvas id=\"preview\"></canvas>').attr({ width: width, height: height });
            file.after(canvas);
            var context = canvas[0].getContext('2d');
            context.drawImage(img, 0, 0, width, height);
        };
        img.src = event.target.result;
    };
    reader.readAsDataURL(file[0].files[1]);
*/
});

</script>
        <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

        <!-- Page Specific JS Libraries -->
        <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("java/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_a77f5955d9d2697d1a2754c4268aecac5498e5972521f1802c2e99e8e1bb6eb0->leave($__internal_a77f5955d9d2697d1a2754c4268aecac5498e5972521f1802c2e99e8e1bb6eb0_prof);

        
        $__internal_9f1001ff7bc1c54cbd2751245c4f9514c59c5f9fc6c80ebb7739e20641fe42c8->leave($__internal_9f1001ff7bc1c54cbd2751245c4f9514c59c5f9fc6c80ebb7739e20641fe42c8_prof);

    }

    public function getTemplateName()
    {
        return "AkinaImmobilierBundle:Admin:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 194,  346 => 191,  315 => 163,  311 => 162,  307 => 161,  303 => 160,  299 => 159,  295 => 158,  291 => 157,  287 => 156,  283 => 155,  279 => 154,  275 => 153,  257 => 138,  230 => 113,  212 => 97,  206 => 93,  200 => 89,  196 => 88,  191 => 86,  185 => 82,  179 => 78,  171 => 73,  166 => 71,  162 => 69,  154 => 63,  151 => 62,  140 => 53,  135 => 51,  132 => 50,  125 => 47,  120 => 45,  111 => 41,  106 => 39,  98 => 36,  93 => 34,  82 => 28,  77 => 26,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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

        <!-- Dropzone css -->
        <link href=\"{{asset('java/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">






  <div class=\"col-lg-11\">
                    <div class=\"card\">
                     <form action=\"\" method=\"post\" class=\"form\" id=\"form\" >
                      <div class=\"card-header\">

<h1>Ajout de bien avec ses photos</h1>
                      </div>

                      <div class=\"card-body \">

                  <table class=\"table table-bordred table-striped table-inverse display\">

 <tr><td> <h2>Les infos du bien</h2></td><td></td></tr>

    <tr><td><strong>  {{ form_label(formB.nomBien, \"\") }}

    {{ form_errors(formB.nomBien) }}   </strong></td><td> {{ form_widget(formB.nomBien) }}


 </td></tr>

    <tr><td><strong>
    {{ form_label(formB.prix, \"\",{'attr': {'class': 'row'}})}}

    {{ form_errors(formB.prix) }}     </strong></td><td>{{ form_widget(formB.prix,{'attr': {'class': 'form-control'}}) }}

 </td></tr>
    <tr><td><strong> {{ form_label(formB.bienParent, \"Parent\",{'attr': {'class': 'row'}}) }}

    {{ form_errors(formB.bienParent) }}       </strong></td><td>{{ form_widget(formB.bienParent) }}

 </td></tr>
<tr><td><strong>
    {{ form_label(formB.Proprietaire, \"\",{'attr': {'class': 'row'}}) }}

    {{ form_errors(formB.Proprietaire) }}      </strong></td><td>{{ form_widget(formB.Proprietaire) }}
 </td></tr>
<tr><td> {# Génération du label. #}
<strong>
   {{ form_label(formB.Type, \"\",{'attr': {'class': 'row'}}) }}

    {{ form_errors(formB.Type) }}
</strong>
            </td> <td>





      {# Génération de l'input. #}

      {{ form_widget(formB.Type) }}



 </td></tr>
<tr><td> {# Génération du label. #}
<strong>

{{ form_label(formB.Localite ,\"\",{'attr': {'class': 'row'}}) }}

    {{ form_errors(formB.Localite) }}

</strong>
            </td> <td>

  {{ form_widget(formB.Localite) }}


      {# Génération de l'input. #}



</td></tr>
 <tr><td><strong> {{ form_label(formB.description, \"\",{'attr': {'class': 'row'}}) }}

    {{ form_errors(formB.description) }}       </strong></td><td>
      {{ form_widget(formB.description) }}
 </td></tr
    >
<tr><td> {# Génération du label. #}
<strong id=\"in\">Insérer ici des images

</strong>
            </td> <td>
            {{ form(formI)}}
   <div class=\"row\" >
                            <div class=\"col-md-12 portlets\">
                                <!-- Your awesome content goes here -->
                                <div class=\"m-b-30\">
                                    <form action=\"#\" class=\"dropzone\" id=\"dropzone\" >
                                      <div class=\"fallback\" id=\"photos\">
                                        <input name=\"file\" type=\"file\" multiple=\"multiple\" >
                                      </div>
                                    </form>
                                </div>
                            </div>
                        </div>


      {# Génération de l'input. #}



</td></tr>









        </table>


                      </div>
                      <div class=\"card-footer\" id=\"preview\">
                        <button type=\"submit\" class=\"btn btn-dark btn-sm\">
                          <i class=\"fa fa-dot-circle-o\"></i> Enregistrer
                        </button>
                        <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                          <i class=\"fa fa-ban\"></i> Reset
                        </button>
                      </div>
                       {{ form_rest(formB) }}
 </form>


                    </div>




        </div>
         <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"{{asset('java/js/modernizr.min.js')}}\"></script>
        <script src=\"{{asset('java/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('java/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('java/js/detect.js')}}\"></script>
        <script src=\"{{asset('java/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('java/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('java/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('java/js/waves.js')}}\"></script>
        <script src=\"{{asset('java/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('java/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('java/js/jquery.scrollTo.min.js')}}\"></script>
<script>
\$('#dropzone').change(function() {
    console.log(\"changer\");


    /*  \$(\"#preview\").each(function(e) {
        this.remove();
    });
    var file = \$(this);
    var reader = new FileReader;
    reader.onload = function(event) {
        var img = new Image();
        img.onload = function() {
            var width = 140;
            var height = 90
            var canvas = \$('<canvas id=\"preview\"></canvas>').attr({ width: width, height: height });
            file.after(canvas);
            var context = canvas[0].getContext('2d');
            context.drawImage(img, 0, 0, width, height);
        };
        img.src = event.target.result;
    };
    reader.readAsDataURL(file[0].files[1]);
*/
});

</script>
        <script src=\"{{asset('java/js/jquery.app.js')}}\"></script>

        <!-- Page Specific JS Libraries -->
        <script src=\"{{asset('java/plugins/dropzone/dist/dropzone.js')}}\"></script>


{% endblock %}

", "AkinaImmobilierBundle:Admin:add.html.twig", "/var/www/html/GroupJoob/src/Akina/ImmobilierBundle/Resources/views/Admin/add.html.twig");
    }
}
