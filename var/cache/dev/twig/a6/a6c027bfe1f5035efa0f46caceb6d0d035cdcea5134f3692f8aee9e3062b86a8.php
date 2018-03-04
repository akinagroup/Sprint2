<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_f00d5e9f5d38f07f295d95ae1135513456130218fa9e01158e1be4b18d5f6d4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c86079a8afdb4a7295d7d12ff1aed9ab7c58b50a6049992f297760d6b725dd18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86079a8afdb4a7295d7d12ff1aed9ab7c58b50a6049992f297760d6b725dd18->enter($__internal_c86079a8afdb4a7295d7d12ff1aed9ab7c58b50a6049992f297760d6b725dd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_49161abcb3e93e468816737c104a232f7355294813ef693dec9d2225a20c4123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49161abcb3e93e468816737c104a232f7355294813ef693dec9d2225a20c4123->enter($__internal_49161abcb3e93e468816737c104a232f7355294813ef693dec9d2225a20c4123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_c86079a8afdb4a7295d7d12ff1aed9ab7c58b50a6049992f297760d6b725dd18->leave($__internal_c86079a8afdb4a7295d7d12ff1aed9ab7c58b50a6049992f297760d6b725dd18_prof);

        
        $__internal_49161abcb3e93e468816737c104a232f7355294813ef693dec9d2225a20c4123->leave($__internal_49161abcb3e93e468816737c104a232f7355294813ef693dec9d2225a20c4123_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_99bfd241e72b56f1a99fa4626805f2115ef6d4166742fe798f9aeb139caf5602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99bfd241e72b56f1a99fa4626805f2115ef6d4166742fe798f9aeb139caf5602->enter($__internal_99bfd241e72b56f1a99fa4626805f2115ef6d4166742fe798f9aeb139caf5602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_f2697bbac66c06ca32acc03fed081ce00b7e5065b212eccaa3f2da06970d361c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2697bbac66c06ca32acc03fed081ce00b7e5065b212eccaa3f2da06970d361c->enter($__internal_f2697bbac66c06ca32acc03fed081ce00b7e5065b212eccaa3f2da06970d361c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_f2697bbac66c06ca32acc03fed081ce00b7e5065b212eccaa3f2da06970d361c->leave($__internal_f2697bbac66c06ca32acc03fed081ce00b7e5065b212eccaa3f2da06970d361c_prof);

        
        $__internal_99bfd241e72b56f1a99fa4626805f2115ef6d4166742fe798f9aeb139caf5602->leave($__internal_99bfd241e72b56f1a99fa4626805f2115ef6d4166742fe798f9aeb139caf5602_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_92bf50d410fcef272fdc2338cd3c33ce5c4b14997682c7dd5cfe2b621095db9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92bf50d410fcef272fdc2338cd3c33ce5c4b14997682c7dd5cfe2b621095db9d->enter($__internal_92bf50d410fcef272fdc2338cd3c33ce5c4b14997682c7dd5cfe2b621095db9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_a8a37c680d49954cc41dff4d3bcfd67330cfdc94448d5895db0da80c15cfae0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a37c680d49954cc41dff4d3bcfd67330cfdc94448d5895db0da80c15cfae0c->enter($__internal_a8a37c680d49954cc41dff4d3bcfd67330cfdc94448d5895db0da80c15cfae0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_a8a37c680d49954cc41dff4d3bcfd67330cfdc94448d5895db0da80c15cfae0c->leave($__internal_a8a37c680d49954cc41dff4d3bcfd67330cfdc94448d5895db0da80c15cfae0c_prof);

        
        $__internal_92bf50d410fcef272fdc2338cd3c33ce5c4b14997682c7dd5cfe2b621095db9d->leave($__internal_92bf50d410fcef272fdc2338cd3c33ce5c4b14997682c7dd5cfe2b621095db9d_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_e91c5b3ea1875142411baee6c17f5eb6984e8e5c2b175de0731b7657deca16b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91c5b3ea1875142411baee6c17f5eb6984e8e5c2b175de0731b7657deca16b2->enter($__internal_e91c5b3ea1875142411baee6c17f5eb6984e8e5c2b175de0731b7657deca16b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_e441a22057758b025c3d133eabc72f07704665fab14b314d08ab65e254c23231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e441a22057758b025c3d133eabc72f07704665fab14b314d08ab65e254c23231->enter($__internal_e441a22057758b025c3d133eabc72f07704665fab14b314d08ab65e254c23231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e441a22057758b025c3d133eabc72f07704665fab14b314d08ab65e254c23231->leave($__internal_e441a22057758b025c3d133eabc72f07704665fab14b314d08ab65e254c23231_prof);

        
        $__internal_e91c5b3ea1875142411baee6c17f5eb6984e8e5c2b175de0731b7657deca16b2->leave($__internal_e91c5b3ea1875142411baee6c17f5eb6984e8e5c2b175de0731b7657deca16b2_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_11cbd001c95f1f916430cc10bf3fab3b529a94db02e31bea095f093a7fb262a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cbd001c95f1f916430cc10bf3fab3b529a94db02e31bea095f093a7fb262a6->enter($__internal_11cbd001c95f1f916430cc10bf3fab3b529a94db02e31bea095f093a7fb262a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_6acdf70058736fb3d7a5204fcdd05dfea91631d543528934e6c03caeac0aa8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acdf70058736fb3d7a5204fcdd05dfea91631d543528934e6c03caeac0aa8e2->enter($__internal_6acdf70058736fb3d7a5204fcdd05dfea91631d543528934e6c03caeac0aa8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6acdf70058736fb3d7a5204fcdd05dfea91631d543528934e6c03caeac0aa8e2->leave($__internal_6acdf70058736fb3d7a5204fcdd05dfea91631d543528934e6c03caeac0aa8e2_prof);

        
        $__internal_11cbd001c95f1f916430cc10bf3fab3b529a94db02e31bea095f093a7fb262a6->leave($__internal_11cbd001c95f1f916430cc10bf3fab3b529a94db02e31bea095f093a7fb262a6_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_c113169e4666c9398584694512e9d01e31e4a3ccb33ecb7122868f9c14ee3553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c113169e4666c9398584694512e9d01e31e4a3ccb33ecb7122868f9c14ee3553->enter($__internal_c113169e4666c9398584694512e9d01e31e4a3ccb33ecb7122868f9c14ee3553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_f93f2a1f0f0577b07109cb688838d06ffde99ea452f1b7ca10fd3176b05b49cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93f2a1f0f0577b07109cb688838d06ffde99ea452f1b7ca10fd3176b05b49cd->enter($__internal_f93f2a1f0f0577b07109cb688838d06ffde99ea452f1b7ca10fd3176b05b49cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_f93f2a1f0f0577b07109cb688838d06ffde99ea452f1b7ca10fd3176b05b49cd->leave($__internal_f93f2a1f0f0577b07109cb688838d06ffde99ea452f1b7ca10fd3176b05b49cd_prof);

        
        $__internal_c113169e4666c9398584694512e9d01e31e4a3ccb33ecb7122868f9c14ee3553->leave($__internal_c113169e4666c9398584694512e9d01e31e4a3ccb33ecb7122868f9c14ee3553_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_86538618bab87860ee324523674ff8e555730d1d3b953f4f3e603004c4deb052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86538618bab87860ee324523674ff8e555730d1d3b953f4f3e603004c4deb052->enter($__internal_86538618bab87860ee324523674ff8e555730d1d3b953f4f3e603004c4deb052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f727cfbca4d49e781b1435c432258994cd8e359f6a921fb642cf3912987b1e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f727cfbca4d49e781b1435c432258994cd8e359f6a921fb642cf3912987b1e88->enter($__internal_f727cfbca4d49e781b1435c432258994cd8e359f6a921fb642cf3912987b1e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_f727cfbca4d49e781b1435c432258994cd8e359f6a921fb642cf3912987b1e88->leave($__internal_f727cfbca4d49e781b1435c432258994cd8e359f6a921fb642cf3912987b1e88_prof);

        
        $__internal_86538618bab87860ee324523674ff8e555730d1d3b953f4f3e603004c4deb052->leave($__internal_86538618bab87860ee324523674ff8e555730d1d3b953f4f3e603004c4deb052_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1ce9f0b2490461637b9034b6241b32429d55b2f70e24a1cecc91a1669313121a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce9f0b2490461637b9034b6241b32429d55b2f70e24a1cecc91a1669313121a->enter($__internal_1ce9f0b2490461637b9034b6241b32429d55b2f70e24a1cecc91a1669313121a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_702ade5a5b79ea5d69f4350b3075d1462f4aa099b99d8f0780e78e5a607c3b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702ade5a5b79ea5d69f4350b3075d1462f4aa099b99d8f0780e78e5a607c3b15->enter($__internal_702ade5a5b79ea5d69f4350b3075d1462f4aa099b99d8f0780e78e5a607c3b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_702ade5a5b79ea5d69f4350b3075d1462f4aa099b99d8f0780e78e5a607c3b15->leave($__internal_702ade5a5b79ea5d69f4350b3075d1462f4aa099b99d8f0780e78e5a607c3b15_prof);

        
        $__internal_1ce9f0b2490461637b9034b6241b32429d55b2f70e24a1cecc91a1669313121a->leave($__internal_1ce9f0b2490461637b9034b6241b32429d55b2f70e24a1cecc91a1669313121a_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c5cbb9dd61ac41e381e9db79dad0144cf204539572623b2dcf5aeeb79a0201de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5cbb9dd61ac41e381e9db79dad0144cf204539572623b2dcf5aeeb79a0201de->enter($__internal_c5cbb9dd61ac41e381e9db79dad0144cf204539572623b2dcf5aeeb79a0201de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_97f53365eaca92a2c1c97891dc28638f1039bf8784abe3fa1f36be2ead7791d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f53365eaca92a2c1c97891dc28638f1039bf8784abe3fa1f36be2ead7791d4->enter($__internal_97f53365eaca92a2c1c97891dc28638f1039bf8784abe3fa1f36be2ead7791d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_97f53365eaca92a2c1c97891dc28638f1039bf8784abe3fa1f36be2ead7791d4->leave($__internal_97f53365eaca92a2c1c97891dc28638f1039bf8784abe3fa1f36be2ead7791d4_prof);

        
        $__internal_c5cbb9dd61ac41e381e9db79dad0144cf204539572623b2dcf5aeeb79a0201de->leave($__internal_c5cbb9dd61ac41e381e9db79dad0144cf204539572623b2dcf5aeeb79a0201de_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_c9ebbb85fc91166e5ca93d53275c2009e3558655bb4ae5351b39d1b3cc578a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9ebbb85fc91166e5ca93d53275c2009e3558655bb4ae5351b39d1b3cc578a93->enter($__internal_c9ebbb85fc91166e5ca93d53275c2009e3558655bb4ae5351b39d1b3cc578a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_2423a99b05d57755dc765f0329d2ab1b2dc4f849f682648e51e86709c44b4aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2423a99b05d57755dc765f0329d2ab1b2dc4f849f682648e51e86709c44b4aba->enter($__internal_2423a99b05d57755dc765f0329d2ab1b2dc4f849f682648e51e86709c44b4aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_2423a99b05d57755dc765f0329d2ab1b2dc4f849f682648e51e86709c44b4aba->leave($__internal_2423a99b05d57755dc765f0329d2ab1b2dc4f849f682648e51e86709c44b4aba_prof);

        
        $__internal_c9ebbb85fc91166e5ca93d53275c2009e3558655bb4ae5351b39d1b3cc578a93->leave($__internal_c9ebbb85fc91166e5ca93d53275c2009e3558655bb4ae5351b39d1b3cc578a93_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_408eb8e6696a5804b5c1983da73fe6d2f07df58d2e40fa41abfadd1e11f075bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408eb8e6696a5804b5c1983da73fe6d2f07df58d2e40fa41abfadd1e11f075bb->enter($__internal_408eb8e6696a5804b5c1983da73fe6d2f07df58d2e40fa41abfadd1e11f075bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fead888067084b0884769df641645794ebfb2352a297f9470454102ace085e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fead888067084b0884769df641645794ebfb2352a297f9470454102ace085e13->enter($__internal_fead888067084b0884769df641645794ebfb2352a297f9470454102ace085e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_fead888067084b0884769df641645794ebfb2352a297f9470454102ace085e13->leave($__internal_fead888067084b0884769df641645794ebfb2352a297f9470454102ace085e13_prof);

        
        $__internal_408eb8e6696a5804b5c1983da73fe6d2f07df58d2e40fa41abfadd1e11f075bb->leave($__internal_408eb8e6696a5804b5c1983da73fe6d2f07df58d2e40fa41abfadd1e11f075bb_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_68775bbb6f887378a567c5812e23e5eef5bdecd16c7f122864204081082f0208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68775bbb6f887378a567c5812e23e5eef5bdecd16c7f122864204081082f0208->enter($__internal_68775bbb6f887378a567c5812e23e5eef5bdecd16c7f122864204081082f0208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_55c02d346c74615e6d116736054496105322a5941cbd94ec5a5b29f9185a6d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c02d346c74615e6d116736054496105322a5941cbd94ec5a5b29f9185a6d35->enter($__internal_55c02d346c74615e6d116736054496105322a5941cbd94ec5a5b29f9185a6d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_55c02d346c74615e6d116736054496105322a5941cbd94ec5a5b29f9185a6d35->leave($__internal_55c02d346c74615e6d116736054496105322a5941cbd94ec5a5b29f9185a6d35_prof);

        
        $__internal_68775bbb6f887378a567c5812e23e5eef5bdecd16c7f122864204081082f0208->leave($__internal_68775bbb6f887378a567c5812e23e5eef5bdecd16c7f122864204081082f0208_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_3d128aa0a12791e8b8d20f4ce4e5c0a579ee9ece04093d09332f210b29f90642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d128aa0a12791e8b8d20f4ce4e5c0a579ee9ece04093d09332f210b29f90642->enter($__internal_3d128aa0a12791e8b8d20f4ce4e5c0a579ee9ece04093d09332f210b29f90642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_10d99cb9297117aa07feeb45d827556544b9b7c8c21d3147aaf740f6f7857d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d99cb9297117aa07feeb45d827556544b9b7c8c21d3147aaf740f6f7857d86->enter($__internal_10d99cb9297117aa07feeb45d827556544b9b7c8c21d3147aaf740f6f7857d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_10d99cb9297117aa07feeb45d827556544b9b7c8c21d3147aaf740f6f7857d86->leave($__internal_10d99cb9297117aa07feeb45d827556544b9b7c8c21d3147aaf740f6f7857d86_prof);

        
        $__internal_3d128aa0a12791e8b8d20f4ce4e5c0a579ee9ece04093d09332f210b29f90642->leave($__internal_3d128aa0a12791e8b8d20f4ce4e5c0a579ee9ece04093d09332f210b29f90642_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_7f3eb2d5c7273fb25cd8a9de5ee4b230642d15e3c13548b1e253365c89c24fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3eb2d5c7273fb25cd8a9de5ee4b230642d15e3c13548b1e253365c89c24fdc->enter($__internal_7f3eb2d5c7273fb25cd8a9de5ee4b230642d15e3c13548b1e253365c89c24fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_f1fbaa51a63b3b79a15f6f0b4fff2a2821b7a6517fa2cf597c5b1fe76a1cc21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fbaa51a63b3b79a15f6f0b4fff2a2821b7a6517fa2cf597c5b1fe76a1cc21d->enter($__internal_f1fbaa51a63b3b79a15f6f0b4fff2a2821b7a6517fa2cf597c5b1fe76a1cc21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_f1fbaa51a63b3b79a15f6f0b4fff2a2821b7a6517fa2cf597c5b1fe76a1cc21d->leave($__internal_f1fbaa51a63b3b79a15f6f0b4fff2a2821b7a6517fa2cf597c5b1fe76a1cc21d_prof);

        
        $__internal_7f3eb2d5c7273fb25cd8a9de5ee4b230642d15e3c13548b1e253365c89c24fdc->leave($__internal_7f3eb2d5c7273fb25cd8a9de5ee4b230642d15e3c13548b1e253365c89c24fdc_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_8cf5ff6915c62e7b6cca0c48c00ff9b76f0317a0317686386f74335d2a78245e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf5ff6915c62e7b6cca0c48c00ff9b76f0317a0317686386f74335d2a78245e->enter($__internal_8cf5ff6915c62e7b6cca0c48c00ff9b76f0317a0317686386f74335d2a78245e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_df6a412a32c2272bc5b95cee2c5b67484768e209511857e48e6bdc231120b423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6a412a32c2272bc5b95cee2c5b67484768e209511857e48e6bdc231120b423->enter($__internal_df6a412a32c2272bc5b95cee2c5b67484768e209511857e48e6bdc231120b423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_df6a412a32c2272bc5b95cee2c5b67484768e209511857e48e6bdc231120b423->leave($__internal_df6a412a32c2272bc5b95cee2c5b67484768e209511857e48e6bdc231120b423_prof);

        
        $__internal_8cf5ff6915c62e7b6cca0c48c00ff9b76f0317a0317686386f74335d2a78245e->leave($__internal_8cf5ff6915c62e7b6cca0c48c00ff9b76f0317a0317686386f74335d2a78245e_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a31eb3d0cb18d19bd62b410b1901cfb36af18cebd4425945711fb3182fa7ea9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31eb3d0cb18d19bd62b410b1901cfb36af18cebd4425945711fb3182fa7ea9f->enter($__internal_a31eb3d0cb18d19bd62b410b1901cfb36af18cebd4425945711fb3182fa7ea9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_493ea3e01668db58cd7008e54c578dfcb1c39effd010d604079881985b4ade96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493ea3e01668db58cd7008e54c578dfcb1c39effd010d604079881985b4ade96->enter($__internal_493ea3e01668db58cd7008e54c578dfcb1c39effd010d604079881985b4ade96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_493ea3e01668db58cd7008e54c578dfcb1c39effd010d604079881985b4ade96->leave($__internal_493ea3e01668db58cd7008e54c578dfcb1c39effd010d604079881985b4ade96_prof);

        
        $__internal_a31eb3d0cb18d19bd62b410b1901cfb36af18cebd4425945711fb3182fa7ea9f->leave($__internal_a31eb3d0cb18d19bd62b410b1901cfb36af18cebd4425945711fb3182fa7ea9f_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_5764d32b5400af90fbb6ccf8dd448406439d48e90c9fbf5181b16aed4affff11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5764d32b5400af90fbb6ccf8dd448406439d48e90c9fbf5181b16aed4affff11->enter($__internal_5764d32b5400af90fbb6ccf8dd448406439d48e90c9fbf5181b16aed4affff11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_85440e263c3df3f14283909146f0a89995c98ff197a4aaefde214ad38157c511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85440e263c3df3f14283909146f0a89995c98ff197a4aaefde214ad38157c511->enter($__internal_85440e263c3df3f14283909146f0a89995c98ff197a4aaefde214ad38157c511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_85440e263c3df3f14283909146f0a89995c98ff197a4aaefde214ad38157c511->leave($__internal_85440e263c3df3f14283909146f0a89995c98ff197a4aaefde214ad38157c511_prof);

        
        $__internal_5764d32b5400af90fbb6ccf8dd448406439d48e90c9fbf5181b16aed4affff11->leave($__internal_5764d32b5400af90fbb6ccf8dd448406439d48e90c9fbf5181b16aed4affff11_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_dfe8970e382acd2ff72a162894eaa39848dae7ad8d94d840e6f0a9dde03af084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe8970e382acd2ff72a162894eaa39848dae7ad8d94d840e6f0a9dde03af084->enter($__internal_dfe8970e382acd2ff72a162894eaa39848dae7ad8d94d840e6f0a9dde03af084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a392d9ca9aa25e1c9fc121bd7cf323f11f133d9ca174e41dd1b4c464b97b1c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a392d9ca9aa25e1c9fc121bd7cf323f11f133d9ca174e41dd1b4c464b97b1c22->enter($__internal_a392d9ca9aa25e1c9fc121bd7cf323f11f133d9ca174e41dd1b4c464b97b1c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_a392d9ca9aa25e1c9fc121bd7cf323f11f133d9ca174e41dd1b4c464b97b1c22->leave($__internal_a392d9ca9aa25e1c9fc121bd7cf323f11f133d9ca174e41dd1b4c464b97b1c22_prof);

        
        $__internal_dfe8970e382acd2ff72a162894eaa39848dae7ad8d94d840e6f0a9dde03af084->leave($__internal_dfe8970e382acd2ff72a162894eaa39848dae7ad8d94d840e6f0a9dde03af084_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_6a29e2568e07e2f704c3ffcc9b1f1c26f0b0de945fe40408624d5ddfc817fe05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a29e2568e07e2f704c3ffcc9b1f1c26f0b0de945fe40408624d5ddfc817fe05->enter($__internal_6a29e2568e07e2f704c3ffcc9b1f1c26f0b0de945fe40408624d5ddfc817fe05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_b14d34dc0a9cf33a82edb4c2485ecb55a2add695f8ae232ce9fde1c51d53031f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14d34dc0a9cf33a82edb4c2485ecb55a2add695f8ae232ce9fde1c51d53031f->enter($__internal_b14d34dc0a9cf33a82edb4c2485ecb55a2add695f8ae232ce9fde1c51d53031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_b14d34dc0a9cf33a82edb4c2485ecb55a2add695f8ae232ce9fde1c51d53031f->leave($__internal_b14d34dc0a9cf33a82edb4c2485ecb55a2add695f8ae232ce9fde1c51d53031f_prof);

        
        $__internal_6a29e2568e07e2f704c3ffcc9b1f1c26f0b0de945fe40408624d5ddfc817fe05->leave($__internal_6a29e2568e07e2f704c3ffcc9b1f1c26f0b0de945fe40408624d5ddfc817fe05_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_8b6f83cec9c298473269ae66d8884624cbf71cac9bdae1f9e35c34765ed271a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6f83cec9c298473269ae66d8884624cbf71cac9bdae1f9e35c34765ed271a5->enter($__internal_8b6f83cec9c298473269ae66d8884624cbf71cac9bdae1f9e35c34765ed271a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_06063732293c67e1ee0cd5cbf515a07fef43b81d5ec8261a9b0cb978209a4e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06063732293c67e1ee0cd5cbf515a07fef43b81d5ec8261a9b0cb978209a4e87->enter($__internal_06063732293c67e1ee0cd5cbf515a07fef43b81d5ec8261a9b0cb978209a4e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_06063732293c67e1ee0cd5cbf515a07fef43b81d5ec8261a9b0cb978209a4e87->leave($__internal_06063732293c67e1ee0cd5cbf515a07fef43b81d5ec8261a9b0cb978209a4e87_prof);

        
        $__internal_8b6f83cec9c298473269ae66d8884624cbf71cac9bdae1f9e35c34765ed271a5->leave($__internal_8b6f83cec9c298473269ae66d8884624cbf71cac9bdae1f9e35c34765ed271a5_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4928a0eb93c200daf03d934d5828ae211e6195711890dcfc0ec07f63d463c218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4928a0eb93c200daf03d934d5828ae211e6195711890dcfc0ec07f63d463c218->enter($__internal_4928a0eb93c200daf03d934d5828ae211e6195711890dcfc0ec07f63d463c218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_4a57a9f409af469c0efbab2b12271cbab2b58757789b039163ee2dbe4955346e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a57a9f409af469c0efbab2b12271cbab2b58757789b039163ee2dbe4955346e->enter($__internal_4a57a9f409af469c0efbab2b12271cbab2b58757789b039163ee2dbe4955346e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_4a57a9f409af469c0efbab2b12271cbab2b58757789b039163ee2dbe4955346e->leave($__internal_4a57a9f409af469c0efbab2b12271cbab2b58757789b039163ee2dbe4955346e_prof);

        
        $__internal_4928a0eb93c200daf03d934d5828ae211e6195711890dcfc0ec07f63d463c218->leave($__internal_4928a0eb93c200daf03d934d5828ae211e6195711890dcfc0ec07f63d463c218_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_45ae12cc32df47ba3158fe27ec91d32cb18434abb973b6480ed25a5c82fe14e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ae12cc32df47ba3158fe27ec91d32cb18434abb973b6480ed25a5c82fe14e6->enter($__internal_45ae12cc32df47ba3158fe27ec91d32cb18434abb973b6480ed25a5c82fe14e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_b27ec5e32417dfcbeab84748eee5b16d01d011d04d6a35c20dca30a9b78e45bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27ec5e32417dfcbeab84748eee5b16d01d011d04d6a35c20dca30a9b78e45bc->enter($__internal_b27ec5e32417dfcbeab84748eee5b16d01d011d04d6a35c20dca30a9b78e45bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_b27ec5e32417dfcbeab84748eee5b16d01d011d04d6a35c20dca30a9b78e45bc->leave($__internal_b27ec5e32417dfcbeab84748eee5b16d01d011d04d6a35c20dca30a9b78e45bc_prof);

        
        $__internal_45ae12cc32df47ba3158fe27ec91d32cb18434abb973b6480ed25a5c82fe14e6->leave($__internal_45ae12cc32df47ba3158fe27ec91d32cb18434abb973b6480ed25a5c82fe14e6_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_2d83122f2a3807e5023584f56a0f52fd111ac0bef66f6923b15366f76e14e648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d83122f2a3807e5023584f56a0f52fd111ac0bef66f6923b15366f76e14e648->enter($__internal_2d83122f2a3807e5023584f56a0f52fd111ac0bef66f6923b15366f76e14e648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7fb16e41914e01b86a564a16eb0b8c3dd72eb59dabfda91f150ce5bc6c893f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb16e41914e01b86a564a16eb0b8c3dd72eb59dabfda91f150ce5bc6c893f77->enter($__internal_7fb16e41914e01b86a564a16eb0b8c3dd72eb59dabfda91f150ce5bc6c893f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_7fb16e41914e01b86a564a16eb0b8c3dd72eb59dabfda91f150ce5bc6c893f77->leave($__internal_7fb16e41914e01b86a564a16eb0b8c3dd72eb59dabfda91f150ce5bc6c893f77_prof);

        
        $__internal_2d83122f2a3807e5023584f56a0f52fd111ac0bef66f6923b15366f76e14e648->leave($__internal_2d83122f2a3807e5023584f56a0f52fd111ac0bef66f6923b15366f76e14e648_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_7533df6ed59017f503f2a103181763f995bed714646320cd1c36ba43325aa4b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7533df6ed59017f503f2a103181763f995bed714646320cd1c36ba43325aa4b5->enter($__internal_7533df6ed59017f503f2a103181763f995bed714646320cd1c36ba43325aa4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_0bc599e7351283f1ee66a2f4c68da7a4591bcd96ef3df10168eb9efd6b91e249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc599e7351283f1ee66a2f4c68da7a4591bcd96ef3df10168eb9efd6b91e249->enter($__internal_0bc599e7351283f1ee66a2f4c68da7a4591bcd96ef3df10168eb9efd6b91e249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_0bc599e7351283f1ee66a2f4c68da7a4591bcd96ef3df10168eb9efd6b91e249->leave($__internal_0bc599e7351283f1ee66a2f4c68da7a4591bcd96ef3df10168eb9efd6b91e249_prof);

        
        $__internal_7533df6ed59017f503f2a103181763f995bed714646320cd1c36ba43325aa4b5->leave($__internal_7533df6ed59017f503f2a103181763f995bed714646320cd1c36ba43325aa4b5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
