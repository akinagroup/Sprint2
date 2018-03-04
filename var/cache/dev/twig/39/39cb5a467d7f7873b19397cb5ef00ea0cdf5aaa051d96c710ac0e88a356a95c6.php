<?php

/* ::LayoutAdmin/integration.html.twig */
class __TwigTemplate_5a0b1a74d0f32c821ceb5be82f455e5a3c9bf1c39742ee5bbe9a6ae0ac47dd14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'PanelLeft' => array($this, 'block_PanelLeft'),
            'logo' => array($this, 'block_logo'),
            'contenuMenu' => array($this, 'block_contenuMenu'),
            'content' => array($this, 'block_content'),
            'header' => array($this, 'block_header'),
            'entete' => array($this, 'block_entete'),
            'upload' => array($this, 'block_upload'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac063e739b172f8ca62e1727a923778871dcebb6d991d7f3fe634515b50e4e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac063e739b172f8ca62e1727a923778871dcebb6d991d7f3fe634515b50e4e4e->enter($__internal_ac063e739b172f8ca62e1727a923778871dcebb6d991d7f3fe634515b50e4e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::LayoutAdmin/integration.html.twig"));

        $__internal_e46e7eb320d37e14c1def8c81086f1d270b1a61485293b7dce297cc1e697fd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46e7eb320d37e14c1def8c81086f1d270b1a61485293b7dce297cc1e697fd34->enter($__internal_e46e7eb320d37e14c1def8c81086f1d270b1a61485293b7dce297cc1e697fd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::LayoutAdmin/integration.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "</head>
<body>
";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 347
        echo "
</body>
</html>
";
        
        $__internal_ac063e739b172f8ca62e1727a923778871dcebb6d991d7f3fe634515b50e4e4e->leave($__internal_ac063e739b172f8ca62e1727a923778871dcebb6d991d7f3fe634515b50e4e4e_prof);

        
        $__internal_e46e7eb320d37e14c1def8c81086f1d270b1a61485293b7dce297cc1e697fd34->leave($__internal_e46e7eb320d37e14c1def8c81086f1d270b1a61485293b7dce297cc1e697fd34_prof);

    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf92c8b39988b33703a6395a6526f7439847a4934fe2b6b851639684252d8b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf92c8b39988b33703a6395a6526f7439847a4934fe2b6b851639684252d8b0b->enter($__internal_cf92c8b39988b33703a6395a6526f7439847a4934fe2b6b851639684252d8b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c719af4003e04bbd99919d6b8c50af623a231a9cb72ae4de7ae5c1a22fada01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c719af4003e04bbd99919d6b8c50af623a231a9cb72ae4de7ae5c1a22fada01b->enter($__internal_c719af4003e04bbd99919d6b8c50af623a231a9cb72ae4de7ae5c1a22fada01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 8
        echo "

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 15
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 31
        echo "    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->
";
        
        $__internal_c719af4003e04bbd99919d6b8c50af623a231a9cb72ae4de7ae5c1a22fada01b->leave($__internal_c719af4003e04bbd99919d6b8c50af623a231a9cb72ae4de7ae5c1a22fada01b_prof);

        
        $__internal_cf92c8b39988b33703a6395a6526f7439847a4934fe2b6b851639684252d8b0b->leave($__internal_cf92c8b39988b33703a6395a6526f7439847a4934fe2b6b851639684252d8b0b_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5a2af7795c275c595c296e43f4d7c3344f6920bfbc8b5e9acb6276b7e37a665a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2af7795c275c595c296e43f4d7c3344f6920bfbc8b5e9acb6276b7e37a665a->enter($__internal_5a2af7795c275c595c296e43f4d7c3344f6920bfbc8b5e9acb6276b7e37a665a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_9d28c04a15d1e89b7c39690b89e2e84109229b5214707a4c474ff9a4614fc308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d28c04a15d1e89b7c39690b89e2e84109229b5214707a4c474ff9a4614fc308->enter($__internal_9d28c04a15d1e89b7c39690b89e2e84109229b5214707a4c474ff9a4614fc308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 16
        echo "    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/flag-icon.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/cs-skin-elastic.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"assets/css/bootstrap-select.less\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/scss/style.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/lib/vector-map/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
";
        
        $__internal_9d28c04a15d1e89b7c39690b89e2e84109229b5214707a4c474ff9a4614fc308->leave($__internal_9d28c04a15d1e89b7c39690b89e2e84109229b5214707a4c474ff9a4614fc308_prof);

        
        $__internal_5a2af7795c275c595c296e43f4d7c3344f6920bfbc8b5e9acb6276b7e37a665a->leave($__internal_5a2af7795c275c595c296e43f4d7c3344f6920bfbc8b5e9acb6276b7e37a665a_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1668947094eb057f4e6135deb608c6e7737757bc9da8cfb02fd0dd88461cf13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1668947094eb057f4e6135deb608c6e7737757bc9da8cfb02fd0dd88461cf13->enter($__internal_a1668947094eb057f4e6135deb608c6e7737757bc9da8cfb02fd0dd88461cf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5dcb295bab719b15c9e0c7cfecdee829795b19d2bef764d8e89ffd3f4337274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5dcb295bab719b15c9e0c7cfecdee829795b19d2bef764d8e89ffd3f4337274->enter($__internal_f5dcb295bab719b15c9e0c7cfecdee829795b19d2bef764d8e89ffd3f4337274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
        <!-- Left Panel -->
";
        // line 38
        $this->displayBlock('PanelLeft', $context, $blocks);
        // line 132
        echo "    <!-- Left Panel -->

    <!-- Right Panel -->
";
        // line 135
        $this->displayBlock('content', $context, $blocks);
        // line 307
        echo "

    <!-- Right Panel -->
";
        // line 310
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_f5dcb295bab719b15c9e0c7cfecdee829795b19d2bef764d8e89ffd3f4337274->leave($__internal_f5dcb295bab719b15c9e0c7cfecdee829795b19d2bef764d8e89ffd3f4337274_prof);

        
        $__internal_a1668947094eb057f4e6135deb608c6e7737757bc9da8cfb02fd0dd88461cf13->leave($__internal_a1668947094eb057f4e6135deb608c6e7737757bc9da8cfb02fd0dd88461cf13_prof);

    }

    // line 38
    public function block_PanelLeft($context, array $blocks = array())
    {
        $__internal_e1046b565f87be36938dd05ec3f4a506084d4a326410a8c1af8fb4d39672707d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1046b565f87be36938dd05ec3f4a506084d4a326410a8c1af8fb4d39672707d->enter($__internal_e1046b565f87be36938dd05ec3f4a506084d4a326410a8c1af8fb4d39672707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PanelLeft"));

        $__internal_c5a00755e500869077ab7551b69312824928d83a534ce91cee42f1aa14c982e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a00755e500869077ab7551b69312824928d83a534ce91cee42f1aa14c982e1->enter($__internal_c5a00755e500869077ab7551b69312824928d83a534ce91cee42f1aa14c982e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PanelLeft"));

        // line 39
        echo "    <aside id=\"left-panel\" class=\"left-panel\">
        <nav class=\"navbar navbar-expand-sm navbar-default\">
";
        // line 41
        $this->displayBlock('logo', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('contenuMenu', $context, $blocks);
        // line 129
        echo "        </nav>
    </aside><!-- /#left-panel -->
";
        
        $__internal_c5a00755e500869077ab7551b69312824928d83a534ce91cee42f1aa14c982e1->leave($__internal_c5a00755e500869077ab7551b69312824928d83a534ce91cee42f1aa14c982e1_prof);

        
        $__internal_e1046b565f87be36938dd05ec3f4a506084d4a326410a8c1af8fb4d39672707d->leave($__internal_e1046b565f87be36938dd05ec3f4a506084d4a326410a8c1af8fb4d39672707d_prof);

    }

    // line 41
    public function block_logo($context, array $blocks = array())
    {
        $__internal_60aa238709a847bf51880e224f1742ea5b19b30f5a43f642a5097c44cf5934a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60aa238709a847bf51880e224f1742ea5b19b30f5a43f642a5097c44cf5934a3->enter($__internal_60aa238709a847bf51880e224f1742ea5b19b30f5a43f642a5097c44cf5934a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_91a2a9bdacab77600665a73f4d7cb7f8a8080f058ddf33b0d094e42a65930399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a2a9bdacab77600665a73f4d7cb7f8a8080f058ddf33b0d094e42a65930399->enter($__internal_91a2a9bdacab77600665a73f4d7cb7f8a8080f058ddf33b0d094e42a65930399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 42
        echo "            <div class=\"navbar-header\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"./\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo change.png"), "html", null, true);
        echo "\" style=\"width:90px\" alt=\"Logo\"></a>
                <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo change.png"), "html", null, true);
        echo "\" alt=\"Logo\"></a>
            </div>
";
        
        $__internal_91a2a9bdacab77600665a73f4d7cb7f8a8080f058ddf33b0d094e42a65930399->leave($__internal_91a2a9bdacab77600665a73f4d7cb7f8a8080f058ddf33b0d094e42a65930399_prof);

        
        $__internal_60aa238709a847bf51880e224f1742ea5b19b30f5a43f642a5097c44cf5934a3->leave($__internal_60aa238709a847bf51880e224f1742ea5b19b30f5a43f642a5097c44cf5934a3_prof);

    }

    // line 51
    public function block_contenuMenu($context, array $blocks = array())
    {
        $__internal_42b575c4a4714a06f392af1917d0b70d4e96201cf315539c29812ef6d54ae4cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b575c4a4714a06f392af1917d0b70d4e96201cf315539c29812ef6d54ae4cd->enter($__internal_42b575c4a4714a06f392af1917d0b70d4e96201cf315539c29812ef6d54ae4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuMenu"));

        $__internal_42c6a97f4425a6256ae00d3d602e6d5fb6f8605c51283f94ef4504de8b512413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c6a97f4425a6256ae00d3d602e6d5fb6f8605c51283f94ef4504de8b512413->enter($__internal_42c6a97f4425a6256ae00d3d602e6d5fb6f8605c51283f94ef4504de8b512413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenuMenu"));

        // line 52
        echo "            <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"index.html\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                    </li>
                    <h3 class=\"menu-title\">Biens</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"list.html.twig\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-laptop\"></i>Opérations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Res");
        echo "\">Liste des biens</a></li>
                            <li><i class=\"fa fa-id-badge\"></i><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponi");
        echo "\">Nouveaux</a></li>
                            <li><i class=\"fa fa-bars\"></i><a href=\"ui-tabs.html\">Les localités</a></li>
                            <li><i class=\"fa fa-share-square-o\"></i><a href=\"ui-social-buttons.html\">Les types</a></li>
                            <li><i class=\"fa fa-id-card-o\"></i><a href=\"ui-cards.html\">Les clients</a></li>
                            <li><i class=\"fa fa-exclamation-triangle\"></i><a href=\"ui-alerts.html\">Alerts</a></li>
                            <li><i class=\"fa fa-spinner\"></i><a href=\"ui-progressbar.html\">Progress Bars</a></li>
                            <li><i class=\"fa fa-fire\"></i><a href=\"ui-modals.html\">Modals</a></li>
                            <li><i class=\"fa fa-book\"></i><a href=\"ui-switches.html\">Switches</a></li>
                            <li><i class=\"fa fa-th\"></i><a href=\"ui-grids.html\">Grids</a></li>
                            <li><i class=\"fa fa-file-word-o\"></i><a href=\"ui-typgraphy.html\">Typography</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-table\"></i>Les reservations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-table\"></i><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("poni");
        echo "\">Liste des reservations</a></li>
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-data.html\">Nouveaux</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-th\"></i>Les contrats</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("disponi");
        echo "\">Liste des contrats</a></li>
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-advanced.html\">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class=\"menu-title\">Icons</h3><!-- /.menu-title -->

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-tasks\"></i>Icons</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-fort-awesome\"></i><a href=\"font-fontawesome.html\">Font Awesome</a></li>
                            <li><i class=\"menu-icon ti-themify-logo\"></i><a href=\"font-themify.html\">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"widgets.html\"> <i class=\"menu-icon ti-email\"></i>Widgets </a>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-bar-chart\"></i>Charts</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-line-chart\"></i><a href=\"charts-chartjs.html\">Chart JS</a></li>
                            <li><i class=\"menu-icon fa fa-area-chart\"></i><a href=\"charts-flot.html\">Flot Chart</a></li>
                            <li><i class=\"menu-icon fa fa-pie-chart\"></i><a href=\"charts-peity.html\">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-area-chart\"></i>Maps</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-map-o\"></i><a href=\"maps-gmap.html\">Google Maps</a></li>
                            <li><i class=\"menu-icon fa fa-street-view\"></i><a href=\"maps-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class=\"menu-title\">Extras</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-glass\"></i>Pages</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-login.html\">Login</a></li>
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-register.html\">Register</a></li>
                            <li><i class=\"menu-icon fa fa-paper-plane\"></i><a href=\"pages-forget.html\">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            ";
        
        $__internal_42c6a97f4425a6256ae00d3d602e6d5fb6f8605c51283f94ef4504de8b512413->leave($__internal_42c6a97f4425a6256ae00d3d602e6d5fb6f8605c51283f94ef4504de8b512413_prof);

        
        $__internal_42b575c4a4714a06f392af1917d0b70d4e96201cf315539c29812ef6d54ae4cd->leave($__internal_42b575c4a4714a06f392af1917d0b70d4e96201cf315539c29812ef6d54ae4cd_prof);

    }

    // line 135
    public function block_content($context, array $blocks = array())
    {
        $__internal_2bfce9fde7a0f3cacafbb273eea0c865d8ea4d6a095674bbaccb1006e1b30c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfce9fde7a0f3cacafbb273eea0c865d8ea4d6a095674bbaccb1006e1b30c74->enter($__internal_2bfce9fde7a0f3cacafbb273eea0c865d8ea4d6a095674bbaccb1006e1b30c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7e21f140153586a35e516c62ba9e100cf23e96925fa97fbcf89ec5254bdd07fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e21f140153586a35e516c62ba9e100cf23e96925fa97fbcf89ec5254bdd07fb->enter($__internal_7e21f140153586a35e516c62ba9e100cf23e96925fa97fbcf89ec5254bdd07fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 136
        echo "    <div id=\"right-panel\" class=\"right-panel\">

        <!-- Header-->
        ";
        // line 139
        $this->displayBlock('header', $context, $blocks);
        // line 266
        $this->displayBlock('entete', $context, $blocks);
        // line 298
        echo "
";
        // line 299
        $this->displayBlock('upload', $context, $blocks);
        // line 304
        echo "          </div> <!-- .content -->
    </div><!-- /#right-panel -->
 ";
        
        $__internal_7e21f140153586a35e516c62ba9e100cf23e96925fa97fbcf89ec5254bdd07fb->leave($__internal_7e21f140153586a35e516c62ba9e100cf23e96925fa97fbcf89ec5254bdd07fb_prof);

        
        $__internal_2bfce9fde7a0f3cacafbb273eea0c865d8ea4d6a095674bbaccb1006e1b30c74->leave($__internal_2bfce9fde7a0f3cacafbb273eea0c865d8ea4d6a095674bbaccb1006e1b30c74_prof);

    }

    // line 139
    public function block_header($context, array $blocks = array())
    {
        $__internal_5477c93de15145db52a8ee2e8a76201017d27929b1dac7d48707408c2e35b079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5477c93de15145db52a8ee2e8a76201017d27929b1dac7d48707408c2e35b079->enter($__internal_5477c93de15145db52a8ee2e8a76201017d27929b1dac7d48707408c2e35b079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_193ccc09700610edb1331c2a6a8c6139c97e5478cdb891a1d56a8986a409d4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193ccc09700610edb1331c2a6a8c6139c97e5478cdb891a1d56a8986a409d4b5->enter($__internal_193ccc09700610edb1331c2a6a8c6139c97e5478cdb891a1d56a8986a409d4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 140
        echo "        <header id=\"header\" class=\"header\">

            <div class=\"header-menu\">

                <div class=\"col-sm-7\">
                    <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
                    <div class=\"header-left\">
                        <button class=\"search-trigger\"><i class=\"fa fa-search\"></i></button>
                        <div class=\"form-inline\">
                            <form class=\"search-form\">
                                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search ...\" aria-label=\"Search\">
                                <button class=\"search-close\" type=\"submit\"><i class=\"fa fa-close\"></i></button>
                            </form>
                        </div>

                        <div class=\"dropdown for-notification\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"notification\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-bell\"></i>
                            <span class=\"count bg-danger\">5</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"notification\">
                            <p class=\"red\">You have 3 Notification</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <i class=\"fa fa-check\"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <i class=\"fa fa-info\"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <i class=\"fa fa-warning\"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class=\"dropdown for-message\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                id=\"message\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"ti-email\"></i>
                            <span class=\"count bg-primary\">9</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"message\">
                            <p class=\"red\">You have 4 Mails</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/avatar/1.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jonathan Smith</span>
                                    <span class=\"time float-right\">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/avatar/2.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jack Sanders</span>
                                    <span class=\"time float-right\">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/avatar/3.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Cheryl Wheeler</span>
                                    <span class=\"time float-right\">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-3\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/avatar/4.jpg"), "html", null, true);
        echo "\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Rachel Santos</span>
                                    <span class=\"time float-right\">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-5\">
                    <div class=\"user-area dropdown float-right\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"user-avatar rounded-circle\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/admin.jpg"), "html", null, true);
        echo "\" alt=\"User Avatar\">
                        </a>

                        <div class=\"user-menu dropdown-menu\">
                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>Notifications <span class=\"count\">13</span></a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                        </div>
                    </div>

                    <div class=\"language-select dropdown\" id=\"language-select\">
                        <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                            <div class=\"dropdown-item\">
                                <span class=\"flag-icon flag-icon-fr\"></span>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-es\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-us\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-it\"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
";
        
        $__internal_193ccc09700610edb1331c2a6a8c6139c97e5478cdb891a1d56a8986a409d4b5->leave($__internal_193ccc09700610edb1331c2a6a8c6139c97e5478cdb891a1d56a8986a409d4b5_prof);

        
        $__internal_5477c93de15145db52a8ee2e8a76201017d27929b1dac7d48707408c2e35b079->leave($__internal_5477c93de15145db52a8ee2e8a76201017d27929b1dac7d48707408c2e35b079_prof);

    }

    // line 266
    public function block_entete($context, array $blocks = array())
    {
        $__internal_55e8ca719a70498562a5d5e36e4ef662aac0729278c9e5bd10815e3c90e2d5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e8ca719a70498562a5d5e36e4ef662aac0729278c9e5bd10815e3c90e2d5d5->enter($__internal_55e8ca719a70498562a5d5e36e4ef662aac0729278c9e5bd10815e3c90e2d5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        $__internal_6407e5346da72e774d7f402ae08eafeda89b56c60ab148e3ec6cf85dd357f673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6407e5346da72e774d7f402ae08eafeda89b56c60ab148e3ec6cf85dd357f673->enter($__internal_6407e5346da72e774d7f402ae08eafeda89b56c60ab148e3ec6cf85dd357f673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 267
        echo "        <div class=\"breadcrumbs\">
            <div class=\"col-sm-4\">
                <div class=\"page-header float-left\">
                    <div class=\"page-title\">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"page-header float-right\">
                    <div class=\"page-title\">
                        <ol class=\"breadcrumb text-right\">
                            <li class=\"active\">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"content mt-3\">

            <div class=\"col-sm-12\">
                <div class=\"alert  alert-success alert-dismissible fade show\" role=\"alert\">
                  <span class=\"badge badge-pill badge-success\">Success</span> You successfully read this important alert message.
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            </div>

";
        
        $__internal_6407e5346da72e774d7f402ae08eafeda89b56c60ab148e3ec6cf85dd357f673->leave($__internal_6407e5346da72e774d7f402ae08eafeda89b56c60ab148e3ec6cf85dd357f673_prof);

        
        $__internal_55e8ca719a70498562a5d5e36e4ef662aac0729278c9e5bd10815e3c90e2d5d5->leave($__internal_55e8ca719a70498562a5d5e36e4ef662aac0729278c9e5bd10815e3c90e2d5d5_prof);

    }

    // line 299
    public function block_upload($context, array $blocks = array())
    {
        $__internal_032cd6ea77787c04b55633ddbd156a928a59564724ffbd9a2b6328cbad432541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032cd6ea77787c04b55633ddbd156a928a59564724ffbd9a2b6328cbad432541->enter($__internal_032cd6ea77787c04b55633ddbd156a928a59564724ffbd9a2b6328cbad432541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        $__internal_f502b3aeb73ea27526ffff97f5bcc24cf3134090cd62b1d681d3c8de22efcc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f502b3aeb73ea27526ffff97f5bcc24cf3134090cd62b1d681d3c8de22efcc9a->enter($__internal_f502b3aeb73ea27526ffff97f5bcc24cf3134090cd62b1d681d3c8de22efcc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "upload"));

        // line 300
        echo "


";
        
        $__internal_f502b3aeb73ea27526ffff97f5bcc24cf3134090cd62b1d681d3c8de22efcc9a->leave($__internal_f502b3aeb73ea27526ffff97f5bcc24cf3134090cd62b1d681d3c8de22efcc9a_prof);

        
        $__internal_032cd6ea77787c04b55633ddbd156a928a59564724ffbd9a2b6328cbad432541->leave($__internal_032cd6ea77787c04b55633ddbd156a928a59564724ffbd9a2b6328cbad432541_prof);

    }

    // line 310
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8d0d7f4dc8d171a28d6f9669c68f5ec24c00efb6486fd1c4417021b15f48fc62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0d7f4dc8d171a28d6f9669c68f5ec24c00efb6486fd1c4417021b15f48fc62->enter($__internal_8d0d7f4dc8d171a28d6f9669c68f5ec24c00efb6486fd1c4417021b15f48fc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_5689aa5a1dc2cc72b4feb25a2dbb646f8ee74ad7ec28de1562050220d7fdd38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5689aa5a1dc2cc72b4feb25a2dbb646f8ee74ad7ec28de1562050220d7fdd38e->enter($__internal_5689aa5a1dc2cc72b4feb25a2dbb646f8ee74ad7ec28de1562050220d7fdd38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 311
        echo "   
    <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>


  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/FrontJs.js"), "html", null, true);
        echo "\"></script>

      
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/chart-js/Chart.bundle.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/vector-map/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/vector-map/jquery.vmap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/vector-map/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lib/vector-map/country/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>

    <script>
        ( function ( \$ ) {
            \"use strict\";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    ";
        
        $__internal_5689aa5a1dc2cc72b4feb25a2dbb646f8ee74ad7ec28de1562050220d7fdd38e->leave($__internal_5689aa5a1dc2cc72b4feb25a2dbb646f8ee74ad7ec28de1562050220d7fdd38e_prof);

        
        $__internal_8d0d7f4dc8d171a28d6f9669c68f5ec24c00efb6486fd1c4417021b15f48fc62->leave($__internal_8d0d7f4dc8d171a28d6f9669c68f5ec24c00efb6486fd1c4417021b15f48fc62_prof);

    }

    public function getTemplateName()
    {
        return "::LayoutAdmin/integration.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  675 => 325,  671 => 324,  667 => 323,  663 => 322,  659 => 321,  655 => 320,  649 => 317,  642 => 313,  638 => 312,  635 => 311,  626 => 310,  613 => 300,  604 => 299,  564 => 267,  555 => 266,  505 => 226,  487 => 211,  476 => 203,  465 => 195,  454 => 187,  405 => 140,  396 => 139,  384 => 304,  382 => 299,  379 => 298,  377 => 266,  375 => 139,  370 => 136,  361 => 135,  306 => 84,  296 => 77,  278 => 62,  274 => 61,  263 => 52,  254 => 51,  241 => 47,  237 => 46,  231 => 42,  222 => 41,  210 => 129,  208 => 51,  205 => 50,  203 => 41,  199 => 39,  190 => 38,  180 => 310,  175 => 307,  173 => 135,  168 => 132,  166 => 38,  162 => 36,  153 => 35,  139 => 27,  135 => 26,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  114 => 20,  110 => 19,  105 => 16,  96 => 15,  85 => 31,  83 => 15,  74 => 8,  65 => 7,  52 => 347,  50 => 35,  46 => 33,  44 => 7,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
<head>
{% block head %}


    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name=\"description\" content=\"Sufee Admin - HTML5 Admin Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
{% block stylesheet %}
    <link rel=\"apple-touch-icon\" href=\"apple-icon.png\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/normalize.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/flag-icon.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/cs-skin-elastic.css') }}\">
    <!-- <link rel=\"stylesheet\" href=\"assets/css/bootstrap-select.less\"> -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/scss/style.css') }}\">
    <link href=\"{{ asset('assets/css/lib/vector-map/jqvmap.min.css') }}\" rel=\"stylesheet\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
{% endblock %}
    <!-- <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js\"></script> -->
{% endblock %}
</head>
<body>
{% block body %}

        <!-- Left Panel -->
{% block PanelLeft %}
    <aside id=\"left-panel\" class=\"left-panel\">
        <nav class=\"navbar navbar-expand-sm navbar-default\">
{% block logo %}
            <div class=\"navbar-header\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"./\"><img src=\"{{ asset('img/logo change.png')}}\" style=\"width:90px\" alt=\"Logo\"></a>
                <a class=\"navbar-brand hidden\" href=\"./\"><img src=\"{{ asset('img/logo change.png')}}\" alt=\"Logo\"></a>
            </div>
{% endblock %}

{% block contenuMenu %}
            <div id=\"main-menu\" class=\"main-menu collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\">
                        <a href=\"index.html\"> <i class=\"menu-icon fa fa-dashboard\"></i>Dashboard </a>
                    </li>
                    <h3 class=\"menu-title\">Biens</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"list.html.twig\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-laptop\"></i>Opérations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-puzzle-piece\"></i><a href=\"{{path('Res')}}\">Liste des biens</a></li>
                            <li><i class=\"fa fa-id-badge\"></i><a href=\"{{path('disponi')}}\">Nouveaux</a></li>
                            <li><i class=\"fa fa-bars\"></i><a href=\"ui-tabs.html\">Les localités</a></li>
                            <li><i class=\"fa fa-share-square-o\"></i><a href=\"ui-social-buttons.html\">Les types</a></li>
                            <li><i class=\"fa fa-id-card-o\"></i><a href=\"ui-cards.html\">Les clients</a></li>
                            <li><i class=\"fa fa-exclamation-triangle\"></i><a href=\"ui-alerts.html\">Alerts</a></li>
                            <li><i class=\"fa fa-spinner\"></i><a href=\"ui-progressbar.html\">Progress Bars</a></li>
                            <li><i class=\"fa fa-fire\"></i><a href=\"ui-modals.html\">Modals</a></li>
                            <li><i class=\"fa fa-book\"></i><a href=\"ui-switches.html\">Switches</a></li>
                            <li><i class=\"fa fa-th\"></i><a href=\"ui-grids.html\">Grids</a></li>
                            <li><i class=\"fa fa-file-word-o\"></i><a href=\"ui-typgraphy.html\">Typography</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-table\"></i>Les reservations</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"fa fa-table\"></i><a href=\"{{path('poni')}}\">Liste des reservations</a></li>
                            <li><i class=\"fa fa-table\"></i><a href=\"tables-data.html\">Nouveaux</a></li>
                        </ul>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-th\"></i>Les contrats</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"{{path('disponi')}}\">Liste des contrats</a></li>
                            <li><i class=\"menu-icon fa fa-th\"></i><a href=\"forms-advanced.html\">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class=\"menu-title\">Icons</h3><!-- /.menu-title -->

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-tasks\"></i>Icons</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-fort-awesome\"></i><a href=\"font-fontawesome.html\">Font Awesome</a></li>
                            <li><i class=\"menu-icon ti-themify-logo\"></i><a href=\"font-themify.html\">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"widgets.html\"> <i class=\"menu-icon ti-email\"></i>Widgets </a>
                    </li>
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-bar-chart\"></i>Charts</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-line-chart\"></i><a href=\"charts-chartjs.html\">Chart JS</a></li>
                            <li><i class=\"menu-icon fa fa-area-chart\"></i><a href=\"charts-flot.html\">Flot Chart</a></li>
                            <li><i class=\"menu-icon fa fa-pie-chart\"></i><a href=\"charts-peity.html\">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-area-chart\"></i>Maps</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-map-o\"></i><a href=\"maps-gmap.html\">Google Maps</a></li>
                            <li><i class=\"menu-icon fa fa-street-view\"></i><a href=\"maps-vector.html\">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class=\"menu-title\">Extras</h3><!-- /.menu-title -->
                    <li class=\"menu-item-has-children dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"menu-icon fa fa-glass\"></i>Pages</a>
                        <ul class=\"sub-menu children dropdown-menu\">
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-login.html\">Login</a></li>
                            <li><i class=\"menu-icon fa fa-sign-in\"></i><a href=\"page-register.html\">Register</a></li>
                            <li><i class=\"menu-icon fa fa-paper-plane\"></i><a href=\"pages-forget.html\">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            {% endblock %}
        </nav>
    </aside><!-- /#left-panel -->
{% endblock %}
    <!-- Left Panel -->

    <!-- Right Panel -->
{% block content %}
    <div id=\"right-panel\" class=\"right-panel\">

        <!-- Header-->
        {% block header %}
        <header id=\"header\" class=\"header\">

            <div class=\"header-menu\">

                <div class=\"col-sm-7\">
                    <a id=\"menuToggle\" class=\"menutoggle pull-left\"><i class=\"fa fa fa-tasks\"></i></a>
                    <div class=\"header-left\">
                        <button class=\"search-trigger\"><i class=\"fa fa-search\"></i></button>
                        <div class=\"form-inline\">
                            <form class=\"search-form\">
                                <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search ...\" aria-label=\"Search\">
                                <button class=\"search-close\" type=\"submit\"><i class=\"fa fa-close\"></i></button>
                            </form>
                        </div>

                        <div class=\"dropdown for-notification\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"notification\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-bell\"></i>
                            <span class=\"count bg-danger\">5</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"notification\">
                            <p class=\"red\">You have 3 Notification</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <i class=\"fa fa-check\"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <i class=\"fa fa-info\"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <i class=\"fa fa-warning\"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class=\"dropdown for-message\">
                          <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                id=\"message\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"ti-email\"></i>
                            <span class=\"count bg-primary\">9</span>
                          </button>
                          <div class=\"dropdown-menu\" aria-labelledby=\"message\">
                            <p class=\"red\">You have 4 Mails</p>
                            <a class=\"dropdown-item media bg-flat-color-1\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"{{asset('images/avatar/1.jpg')}}\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jonathan Smith</span>
                                    <span class=\"time float-right\">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-4\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"{{asset('images/avatar/2.jpg')}}\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Jack Sanders</span>
                                    <span class=\"time float-right\">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-5\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"{{ asset('images/avatar/3.jpg')}}\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Cheryl Wheeler</span>
                                    <span class=\"time float-right\">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class=\"dropdown-item media bg-flat-color-3\" href=\"#\">
                                <span class=\"photo media-left\"><img alt=\"avatar\" src=\"{{ asset('images/avatar/4.jpg')}}\"></span>
                                <span class=\"message media-body\">
                                    <span class=\"name float-left\">Rachel Santos</span>
                                    <span class=\"time float-right\">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-sm-5\">
                    <div class=\"user-area dropdown float-right\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"user-avatar rounded-circle\" src=\"{{asset('images/admin.jpg')}}\" alt=\"User Avatar\">
                        </a>

                        <div class=\"user-menu dropdown-menu\">
                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>My Profile</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa- user\"></i>Notifications <span class=\"count\">13</span></a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa -cog\"></i>Settings</a>

                                <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-power -off\"></i>Logout</a>
                        </div>
                    </div>

                    <div class=\"language-select dropdown\" id=\"language-select\">
                        <a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\"  id=\"language\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            <i class=\"flag-icon flag-icon-us\"></i>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"language\" >
                            <div class=\"dropdown-item\">
                                <span class=\"flag-icon flag-icon-fr\"></span>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-es\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-us\"></i>
                            </div>
                            <div class=\"dropdown-item\">
                                <i class=\"flag-icon flag-icon-it\"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
{% endblock %}
{% block entete %}
        <div class=\"breadcrumbs\">
            <div class=\"col-sm-4\">
                <div class=\"page-header float-left\">
                    <div class=\"page-title\">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                <div class=\"page-header float-right\">
                    <div class=\"page-title\">
                        <ol class=\"breadcrumb text-right\">
                            <li class=\"active\">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"content mt-3\">

            <div class=\"col-sm-12\">
                <div class=\"alert  alert-success alert-dismissible fade show\" role=\"alert\">
                  <span class=\"badge badge-pill badge-success\">Success</span> You successfully read this important alert message.
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            </div>

{% endblock %}

{% block upload %}



{% endblock %}
          </div> <!-- .content -->
    </div><!-- /#right-panel -->
 {% endblock %}


    <!-- Right Panel -->
{% block javascript %}
   
    <script src=\"{{ asset('assets/js/plugins.js') }}\"></script>
    <script src=\"{{ asset('assets/js/main.js') }}\"></script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>


  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"{{ asset('js/FrontJs.js') }}\"></script>

      
    <script src=\"{{ asset('assets/js/lib/chart-js/Chart.bundle.js') }}\"></script>
    <script src=\"{{ asset('assets/js/dashboard.js') }}\"></script>
    <script src=\"{{ asset('assets/js/lib/vector-map/jquery.vmap.js') }}\"></script>
    <script src=\"{{ asset('assets/js/lib/vector-map/jquery.vmap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js') }}\"></script>
    <script src=\"{{ asset('assets/js/lib/vector-map/country/jquery.vmap.world.js') }}\"></script>

    <script>
        ( function ( \$ ) {
            \"use strict\";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
    {% endblock %}
{% endblock %}

</body>
</html>
", "::LayoutAdmin/integration.html.twig", "/var/www/html/GroupJoob/app/Resources/views/LayoutAdmin/integration.html.twig");
    }
}
