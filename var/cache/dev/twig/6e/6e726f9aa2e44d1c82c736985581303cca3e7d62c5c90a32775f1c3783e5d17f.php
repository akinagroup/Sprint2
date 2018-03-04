<?php

/* :LayoutAdmin:layout.html.twig */
class __TwigTemplate_8e35406ad4cc0fd8abc7702e1bb923a71d73af40a2999217b76a58878b2e991c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":LayoutAdmin:layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'Content' => array($this, 'block_Content'),
            'header' => array($this, 'block_header'),
            'connexion' => array($this, 'block_connexion'),
            'contenu' => array($this, 'block_contenu'),
            'formu' => array($this, 'block_formu'),
            'carrousel' => array($this, 'block_carrousel'),
            'biens' => array($this, 'block_biens'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7e61a8d6b5209ed0e66e382c201627f5b9f2c513f3e845f2aa3ab244c678846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e61a8d6b5209ed0e66e382c201627f5b9f2c513f3e845f2aa3ab244c678846->enter($__internal_b7e61a8d6b5209ed0e66e382c201627f5b9f2c513f3e845f2aa3ab244c678846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":LayoutAdmin:layout.html.twig"));

        $__internal_ea6b2dba0ae04622fe625e8374a5fece47536fbbe333f175ebbcbc41fc9c422f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6b2dba0ae04622fe625e8374a5fece47536fbbe333f175ebbcbc41fc9c422f->enter($__internal_ea6b2dba0ae04622fe625e8374a5fece47536fbbe333f175ebbcbc41fc9c422f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":LayoutAdmin:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7e61a8d6b5209ed0e66e382c201627f5b9f2c513f3e845f2aa3ab244c678846->leave($__internal_b7e61a8d6b5209ed0e66e382c201627f5b9f2c513f3e845f2aa3ab244c678846_prof);

        
        $__internal_ea6b2dba0ae04622fe625e8374a5fece47536fbbe333f175ebbcbc41fc9c422f->leave($__internal_ea6b2dba0ae04622fe625e8374a5fece47536fbbe333f175ebbcbc41fc9c422f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_057dc5443bb1a1ea432e310ed58d7fa66ed9c49a415733bcf7695f49d4038463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057dc5443bb1a1ea432e310ed58d7fa66ed9c49a415733bcf7695f49d4038463->enter($__internal_057dc5443bb1a1ea432e310ed58d7fa66ed9c49a415733bcf7695f49d4038463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_414b6adc25c8f4c1484b2a003246264cec56d292df0bd96f8547f802cb051e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414b6adc25c8f4c1484b2a003246264cec56d292df0bd96f8547f802cb051e3a->enter($__internal_414b6adc25c8f4c1484b2a003246264cec56d292df0bd96f8547f802cb051e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
   
   
    ";
        // line 7
        $this->displayBlock('Content', $context, $blocks);
        // line 94
        echo " 

";
        
        $__internal_414b6adc25c8f4c1484b2a003246264cec56d292df0bd96f8547f802cb051e3a->leave($__internal_414b6adc25c8f4c1484b2a003246264cec56d292df0bd96f8547f802cb051e3a_prof);

        
        $__internal_057dc5443bb1a1ea432e310ed58d7fa66ed9c49a415733bcf7695f49d4038463->leave($__internal_057dc5443bb1a1ea432e310ed58d7fa66ed9c49a415733bcf7695f49d4038463_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_6a8130d7842567f0c48a083547da1e4b3231fb72ff70dbf73eb7676b55fa79d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8130d7842567f0c48a083547da1e4b3231fb72ff70dbf73eb7676b55fa79d5->enter($__internal_6a8130d7842567f0c48a083547da1e4b3231fb72ff70dbf73eb7676b55fa79d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_35036f7e218f9f58a65c56f6b37b5c24127af50a5ddfde1dde2be8869cc9b8d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35036f7e218f9f58a65c56f6b37b5c24127af50a5ddfde1dde2be8869cc9b8d1->enter($__internal_35036f7e218f9f58a65c56f6b37b5c24127af50a5ddfde1dde2be8869cc9b8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 8
        echo "    
          ";
        // line 9
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "           ";
        $this->displayBlock('contenu', $context, $blocks);
        // line 80
        echo "
    <!-- Footer -->
    ";
        // line 82
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "
    <!-- Bootstrap core JavaScript -->    

   ";
        
        $__internal_35036f7e218f9f58a65c56f6b37b5c24127af50a5ddfde1dde2be8869cc9b8d1->leave($__internal_35036f7e218f9f58a65c56f6b37b5c24127af50a5ddfde1dde2be8869cc9b8d1_prof);

        
        $__internal_6a8130d7842567f0c48a083547da1e4b3231fb72ff70dbf73eb7676b55fa79d5->leave($__internal_6a8130d7842567f0c48a083547da1e4b3231fb72ff70dbf73eb7676b55fa79d5_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_f5cdb7e39e5b8d0d310aef136051d64b98dd65896b3c52330c2ddcd7f01e8667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5cdb7e39e5b8d0d310aef136051d64b98dd65896b3c52330c2ddcd7f01e8667->enter($__internal_f5cdb7e39e5b8d0d310aef136051d64b98dd65896b3c52330c2ddcd7f01e8667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7af1a072963c6b60c2b8468bf780afbbb429d3acee170cdfba7c536b0e972137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af1a072963c6b60c2b8468bf780afbbb429d3acee170cdfba7c536b0e972137->enter($__internal_7af1a072963c6b60c2b8468bf780afbbb429d3acee170cdfba7c536b0e972137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "        <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" >
      <div class=\"container\">
       <div class=\"row\">
         
          <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo change.png"), "html", null, true);
        echo "\" style=\"width:60px\">
           <h1 class=\"my-4\" style=\"color:white\">Immobilier</h1>
           </div> 

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\" >
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
             ";
        // line 38
        $this->displayBlock('connexion', $context, $blocks);
        // line 41
        echo "          </ul>
        </div>
      </div>
    </nav>
          ";
        
        $__internal_7af1a072963c6b60c2b8468bf780afbbb429d3acee170cdfba7c536b0e972137->leave($__internal_7af1a072963c6b60c2b8468bf780afbbb429d3acee170cdfba7c536b0e972137_prof);

        
        $__internal_f5cdb7e39e5b8d0d310aef136051d64b98dd65896b3c52330c2ddcd7f01e8667->leave($__internal_f5cdb7e39e5b8d0d310aef136051d64b98dd65896b3c52330c2ddcd7f01e8667_prof);

    }

    // line 38
    public function block_connexion($context, array $blocks = array())
    {
        $__internal_3e8c9d44584d55bdc90f9694999b15a496ee823a87abe0f8a175669c1d21f90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8c9d44584d55bdc90f9694999b15a496ee823a87abe0f8a175669c1d21f90f->enter($__internal_3e8c9d44584d55bdc90f9694999b15a496ee823a87abe0f8a175669c1d21f90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        $__internal_58c4c0180fb85aec4ec0e2d7552a9df8a7638ad699bb3be6e1284f394c62f0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c4c0180fb85aec4ec0e2d7552a9df8a7638ad699bb3be6e1284f394c62f0b6->enter($__internal_58c4c0180fb85aec4ec0e2d7552a9df8a7638ad699bb3be6e1284f394c62f0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connexion"));

        // line 39
        echo "                                <li class=\"nav-item\" style=\"margin-left:100px;border:2px solid white;height:20px;padding-top:-10px\"><a class=\"btn nav-link btn-dark btn-xs\" href=\"#\">Compte / Deconnexion</a></li>
 ";
        
        $__internal_58c4c0180fb85aec4ec0e2d7552a9df8a7638ad699bb3be6e1284f394c62f0b6->leave($__internal_58c4c0180fb85aec4ec0e2d7552a9df8a7638ad699bb3be6e1284f394c62f0b6_prof);

        
        $__internal_3e8c9d44584d55bdc90f9694999b15a496ee823a87abe0f8a175669c1d21f90f->leave($__internal_3e8c9d44584d55bdc90f9694999b15a496ee823a87abe0f8a175669c1d21f90f_prof);

    }

    // line 46
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_2799aaa664949d78c442f7e770325bbf8407eda7ceaec1fb82afbc3fcdd9bbea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2799aaa664949d78c442f7e770325bbf8407eda7ceaec1fb82afbc3fcdd9bbea->enter($__internal_2799aaa664949d78c442f7e770325bbf8407eda7ceaec1fb82afbc3fcdd9bbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_b089f9a35488fccbf4cedb5fde6747dbe20543d712f5a2b6d8686689d8dcfcdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b089f9a35488fccbf4cedb5fde6747dbe20543d712f5a2b6d8686689d8dcfcdc->enter($__internal_b089f9a35488fccbf4cedb5fde6747dbe20543d712f5a2b6d8686689d8dcfcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 47
        echo "             <div class=\"container\" style=\"margin-top:40px\">
              ";
        // line 48
        $this->displayBlock('formu', $context, $blocks);
        // line 49
        echo "          ";
        $this->displayBlock('carrousel', $context, $blocks);
        // line 69
        echo "      ";
        $this->displayBlock('biens', $context, $blocks);
        // line 72
        echo "        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
     
</div>
     ";
        
        $__internal_b089f9a35488fccbf4cedb5fde6747dbe20543d712f5a2b6d8686689d8dcfcdc->leave($__internal_b089f9a35488fccbf4cedb5fde6747dbe20543d712f5a2b6d8686689d8dcfcdc_prof);

        
        $__internal_2799aaa664949d78c442f7e770325bbf8407eda7ceaec1fb82afbc3fcdd9bbea->leave($__internal_2799aaa664949d78c442f7e770325bbf8407eda7ceaec1fb82afbc3fcdd9bbea_prof);

    }

    // line 48
    public function block_formu($context, array $blocks = array())
    {
        $__internal_86df8501ea906f91f82c1a367bcb9357f6d9a5a3df92c64b4c06b0ccf8234ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86df8501ea906f91f82c1a367bcb9357f6d9a5a3df92c64b4c06b0ccf8234ce3->enter($__internal_86df8501ea906f91f82c1a367bcb9357f6d9a5a3df92c64b4c06b0ccf8234ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        $__internal_1bc8df559beba40f82e34e65d2d207f1d1991d0b4d1be2a6533fec5f123261fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc8df559beba40f82e34e65d2d207f1d1991d0b4d1be2a6533fec5f123261fe->enter($__internal_1bc8df559beba40f82e34e65d2d207f1d1991d0b4d1be2a6533fec5f123261fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formu"));

        
        $__internal_1bc8df559beba40f82e34e65d2d207f1d1991d0b4d1be2a6533fec5f123261fe->leave($__internal_1bc8df559beba40f82e34e65d2d207f1d1991d0b4d1be2a6533fec5f123261fe_prof);

        
        $__internal_86df8501ea906f91f82c1a367bcb9357f6d9a5a3df92c64b4c06b0ccf8234ce3->leave($__internal_86df8501ea906f91f82c1a367bcb9357f6d9a5a3df92c64b4c06b0ccf8234ce3_prof);

    }

    // line 49
    public function block_carrousel($context, array $blocks = array())
    {
        $__internal_0448af43ddca7257b37b21606f1dab535b811dad4e8fc76da87323fc5008fe70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0448af43ddca7257b37b21606f1dab535b811dad4e8fc76da87323fc5008fe70->enter($__internal_0448af43ddca7257b37b21606f1dab535b811dad4e8fc76da87323fc5008fe70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carrousel"));

        $__internal_cdf23d2d018a23d3fce467cea641c7a408a7575da534ca4135cea545ec57d9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf23d2d018a23d3fce467cea641c7a408a7575da534ca4135cea545ec57d9a9->enter($__internal_cdf23d2d018a23d3fce467cea641c7a408a7575da534ca4135cea545ec57d9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carrousel"));

        // line 50
        echo "   
      <div class=\"row\">

        <div class=\"col-lg-3\" >
         <div class=\"list-group\">
            <li class=\"list-group-item\"> <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ret.png"), "html", null, true);
        echo "\" style=\"width:190px\"></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Res");
        echo "\">Les propriétaires<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Res");
        echo "\">Les biens<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
                        <li class=\"list-group-item\"><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("poni");
        echo "\">Les reservations<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
                                    <li class=\"list-group-item\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponi");
        echo "\">Les contrats<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
<li class=\"list-group-item\"><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponi");
        echo "\">Nouveaux<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>


          </div>
          </div>
        <!-- /.col-lg-3 -->

        <div class=\"col-lg-9\">
        ";
        
        $__internal_cdf23d2d018a23d3fce467cea641c7a408a7575da534ca4135cea545ec57d9a9->leave($__internal_cdf23d2d018a23d3fce467cea641c7a408a7575da534ca4135cea545ec57d9a9_prof);

        
        $__internal_0448af43ddca7257b37b21606f1dab535b811dad4e8fc76da87323fc5008fe70->leave($__internal_0448af43ddca7257b37b21606f1dab535b811dad4e8fc76da87323fc5008fe70_prof);

    }

    // line 69
    public function block_biens($context, array $blocks = array())
    {
        $__internal_a9d167e90de00e24dcc6fef40f74959b44baac736f57b9c92eeb92ecfa74dd5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d167e90de00e24dcc6fef40f74959b44baac736f57b9c92eeb92ecfa74dd5f->enter($__internal_a9d167e90de00e24dcc6fef40f74959b44baac736f57b9c92eeb92ecfa74dd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        $__internal_e1a12cdf107617905ed8a68f8c9647499bbdf78baa2ac3cf9f507dd536d05425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a12cdf107617905ed8a68f8c9647499bbdf78baa2ac3cf9f507dd536d05425->enter($__internal_e1a12cdf107617905ed8a68f8c9647499bbdf78baa2ac3cf9f507dd536d05425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "biens"));

        // line 70
        echo "     
 ";
        
        $__internal_e1a12cdf107617905ed8a68f8c9647499bbdf78baa2ac3cf9f507dd536d05425->leave($__internal_e1a12cdf107617905ed8a68f8c9647499bbdf78baa2ac3cf9f507dd536d05425_prof);

        
        $__internal_a9d167e90de00e24dcc6fef40f74959b44baac736f57b9c92eeb92ecfa74dd5f->leave($__internal_a9d167e90de00e24dcc6fef40f74959b44baac736f57b9c92eeb92ecfa74dd5f_prof);

    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        $__internal_66235d5afa65173859d423750b4c93b470c709042af38d7229f4533b40e2f7c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66235d5afa65173859d423750b4c93b470c709042af38d7229f4533b40e2f7c4->enter($__internal_66235d5afa65173859d423750b4c93b470c709042af38d7229f4533b40e2f7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_fa54f83e17c921d0ca2fbd1f9145cc5ad62a3d4fe808d3c776e5d313f084d385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa54f83e17c921d0ca2fbd1f9145cc5ad62a3d4fe808d3c776e5d313f084d385->enter($__internal_fa54f83e17c921d0ca2fbd1f9145cc5ad62a3d4fe808d3c776e5d313f084d385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 83
        echo "<footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Akina Group 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    ";
        
        $__internal_fa54f83e17c921d0ca2fbd1f9145cc5ad62a3d4fe808d3c776e5d313f084d385->leave($__internal_fa54f83e17c921d0ca2fbd1f9145cc5ad62a3d4fe808d3c776e5d313f084d385_prof);

        
        $__internal_66235d5afa65173859d423750b4c93b470c709042af38d7229f4533b40e2f7c4->leave($__internal_66235d5afa65173859d423750b4c93b470c709042af38d7229f4533b40e2f7c4_prof);

    }

    public function getTemplateName()
    {
        return ":LayoutAdmin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 83,  319 => 82,  308 => 70,  299 => 69,  280 => 60,  276 => 59,  272 => 58,  268 => 57,  264 => 56,  260 => 55,  253 => 50,  244 => 49,  227 => 48,  210 => 72,  207 => 69,  204 => 49,  202 => 48,  199 => 47,  190 => 46,  179 => 39,  170 => 38,  156 => 41,  154 => 38,  128 => 15,  121 => 10,  112 => 9,  99 => 91,  97 => 82,  93 => 80,  90 => 46,  88 => 9,  85 => 8,  76 => 7,  64 => 94,  62 => 7,  57 => 4,  48 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}

   
   
    {% block Content %}
    
          {% block header %}
        <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" >
      <div class=\"container\">
       <div class=\"row\">
         
          <img src=\"{{ asset('img/logo change.png')}}\" style=\"width:60px\">
           <h1 class=\"my-4\" style=\"color:white\">Immobilier</h1>
           </div> 

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\" >
              <a class=\"nav-link\" href=\"#\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\" style=\"margin-left:10px\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
             {% block connexion %}
                                <li class=\"nav-item\" style=\"margin-left:100px;border:2px solid white;height:20px;padding-top:-10px\"><a class=\"btn nav-link btn-dark btn-xs\" href=\"#\">Compte / Deconnexion</a></li>
 {% endblock %}
          </ul>
        </div>
      </div>
    </nav>
          {% endblock %}
           {% block contenu %}
             <div class=\"container\" style=\"margin-top:40px\">
              {% block formu %}{% endblock %}
          {% block carrousel %}
   
      <div class=\"row\">

        <div class=\"col-lg-3\" >
         <div class=\"list-group\">
            <li class=\"list-group-item\"> <img src=\"{{ asset('img/ret.png')}}\" style=\"width:190px\"></li>
            <li class=\"list-group-item\"><a href=\"{{path('Res')}}\">Les propriétaires<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
            <li class=\"list-group-item\"><a href=\"{{path('Res')}}\">Les biens<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
                        <li class=\"list-group-item\"><a href=\"{{path('poni')}}\">Les reservations<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
                                    <li class=\"list-group-item\"><a href=\"{{path('disponi')}}\">Les contrats<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>
<li class=\"list-group-item\"><a href=\"{{path('disponi')}}\">Nouveaux<i class=\"fa fa-angle-right fa-lg\" aria-hidden=\"false\"></i></a></li>


          </div>
          </div>
        <!-- /.col-lg-3 -->

        <div class=\"col-lg-9\">
        {% endblock %}
      {% block biens %}
     
 {% endblock %}
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
     
</div>
     {% endblock %}

    <!-- Footer -->
    {% block footer %}
<footer class=\"py-5 bg-dark\">
      <div class=\"container\">
        <p class=\"m-0 text-center text-white\">Copyright &copy; Akina Group 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    {% endblock %}

    <!-- Bootstrap core JavaScript -->    

   {% endblock %} 

{% endblock %}
", ":LayoutAdmin:layout.html.twig", "/var/www/html/GroupJoob/app/Resources/views/LayoutAdmin/layout.html.twig");
    }
}
