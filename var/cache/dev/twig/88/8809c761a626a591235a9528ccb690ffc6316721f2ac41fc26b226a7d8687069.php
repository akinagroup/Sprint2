<?php

/* EasyAdminBundle:default:menu.html.twig */
class __TwigTemplate_838bbbd4cc1d2cfa6e2064d7baad89125fe18baf4efe3d506206ffa7370fa108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'menu_item' => array($this, 'block_menu_item'),
            'menu_subitem' => array($this, 'block_menu_subitem'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a44026b183e7ed8a52ab2b7b8eaa3fe708297725a22c0e62f61740c599624060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44026b183e7ed8a52ab2b7b8eaa3fe708297725a22c0e62f61740c599624060->enter($__internal_a44026b183e7ed8a52ab2b7b8eaa3fe708297725a22c0e62f61740c599624060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        $__internal_0b5c9afe0cd93165cd11f10fb5e1b1af620a52d623ece9489f127179a7622b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5c9afe0cd93165cd11f10fb5e1b1af620a52d623ece9489f127179a7622b5e->enter($__internal_0b5c9afe0cd93165cd11f10fb5e1b1af620a52d623ece9489f127179a7622b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $context["_menu_items"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu");
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('main_menu', $context, $blocks);
        // line 57
        echo "</ul>

";
        // line 59
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_a44026b183e7ed8a52ab2b7b8eaa3fe708297725a22c0e62f61740c599624060->leave($__internal_a44026b183e7ed8a52ab2b7b8eaa3fe708297725a22c0e62f61740c599624060_prof);

        
        $__internal_0b5c9afe0cd93165cd11f10fb5e1b1af620a52d623ece9489f127179a7622b5e->leave($__internal_0b5c9afe0cd93165cd11f10fb5e1b1af620a52d623ece9489f127179a7622b5e_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_93184ea4e476b071f9f15832290931eeadb3e06565f4e6f9871847405ee7363c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93184ea4e476b071f9f15832290931eeadb3e06565f4e6f9871847405ee7363c->enter($__internal_93184ea4e476b071f9f15832290931eeadb3e06565f4e6f9871847405ee7363c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_ef8a732a2d6fb7ec95a9ba5dc9503099ae534444437122e58b2df42c019f4c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8a732a2d6fb7ec95a9ba5dc9503099ae534444437122e58b2df42c019f4c14->enter($__internal_ef8a732a2d6fb7ec95a9ba5dc9503099ae534444437122e58b2df42c019f4c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_ef8a732a2d6fb7ec95a9ba5dc9503099ae534444437122e58b2df42c019f4c14->leave($__internal_ef8a732a2d6fb7ec95a9ba5dc9503099ae534444437122e58b2df42c019f4c14_prof);

        
        $__internal_93184ea4e476b071f9f15832290931eeadb3e06565f4e6f9871847405ee7363c->leave($__internal_93184ea4e476b071f9f15832290931eeadb3e06565f4e6f9871847405ee7363c_prof);

    }

    // line 36
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_2a9581de2545fb0e846a5317a00f55577fd71e4e040afa379adc0974a949a4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a9581de2545fb0e846a5317a00f55577fd71e4e040afa379adc0974a949a4c8->enter($__internal_2a9581de2545fb0e846a5317a00f55577fd71e4e040afa379adc0974a949a4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_064bdf90b6f869135bea00bf1bdb441691a303dc1ab6401af14a002ddc433a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064bdf90b6f869135bea00bf1bdb441691a303dc1ab6401af14a002ddc433a52->enter($__internal_064bdf90b6f869135bea00bf1bdb441691a303dc1ab6401af14a002ddc433a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 37
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["_menu_items"] ?? $this->getContext($context, "_menu_items")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 55
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        
        $__internal_064bdf90b6f869135bea00bf1bdb441691a303dc1ab6401af14a002ddc433a52->leave($__internal_064bdf90b6f869135bea00bf1bdb441691a303dc1ab6401af14a002ddc433a52_prof);

        
        $__internal_2a9581de2545fb0e846a5317a00f55577fd71e4e040afa379adc0974a949a4c8->leave($__internal_2a9581de2545fb0e846a5317a00f55577fd71e4e040afa379adc0974a949a4c8_prof);

    }

    // line 38
    public function block_menu_item($context, array $blocks = array())
    {
        $__internal_8e352c2288f1f264151835cbb32aac032bd91dc019779335098a7c3b11ef7ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e352c2288f1f264151835cbb32aac032bd91dc019779335098a7c3b11ef7ac6->enter($__internal_8e352c2288f1f264151835cbb32aac032bd91dc019779335098a7c3b11ef7ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        $__internal_bd17bd8921c23ea2a35b4b25e1f3c2d665e1de7a8c6cd7f407ff78b8981e6a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd17bd8921c23ea2a35b4b25e1f3c2d665e1de7a8c6cd7f407ff78b8981e6a53->enter($__internal_bd17bd8921c23ea2a35b4b25e1f3c2d665e1de7a8c6cd7f407ff78b8981e6a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_item"));

        // line 39
        echo "                <li class=\"";
        echo ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()))) ? ("treeview") : (""));
        echo " ";
        echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index0", array()))) ? ("active") : (""));
        echo " ";
        echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
        echo "\">
                    ";
        // line 40
        echo $context["helper"]->getrender_menu_item(($context["item"] ?? $this->getContext($context, "item")), (($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "

                    ";
        // line 42
        if ( !twig_test_empty((($this->getAttribute(($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "children", array()), array())) : (array())))) {
            // line 43
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                // line 45
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 50
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </ul>
                    ";
        }
        // line 53
        echo "                </li>
            ";
        
        $__internal_bd17bd8921c23ea2a35b4b25e1f3c2d665e1de7a8c6cd7f407ff78b8981e6a53->leave($__internal_bd17bd8921c23ea2a35b4b25e1f3c2d665e1de7a8c6cd7f407ff78b8981e6a53_prof);

        
        $__internal_8e352c2288f1f264151835cbb32aac032bd91dc019779335098a7c3b11ef7ac6->leave($__internal_8e352c2288f1f264151835cbb32aac032bd91dc019779335098a7c3b11ef7ac6_prof);

    }

    // line 45
    public function block_menu_subitem($context, array $blocks = array())
    {
        $__internal_e845396de041b9ec0d0401a8796896f0e16e029861053e4d826737c0488826a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e845396de041b9ec0d0401a8796896f0e16e029861053e4d826737c0488826a5->enter($__internal_e845396de041b9ec0d0401a8796896f0e16e029861053e4d826737c0488826a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        $__internal_61b36ed015d8dec492f04fefcd7dbecad5c24d3c806f6d456477e42c69b49059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b36ed015d8dec492f04fefcd7dbecad5c24d3c806f6d456477e42c69b49059->enter($__internal_61b36ed015d8dec492f04fefcd7dbecad5c24d3c806f6d456477e42c69b49059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_subitem"));

        // line 46
        echo "                                    <li class=\"";
        echo ((($this->getAttribute(($context["subitem"] ?? $this->getContext($context, "subitem")), "type", array()) == "divider")) ? ("header") : (""));
        echo " ";
        echo (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index0", array())))) ? ("active") : (""));
        echo "\">
                                        ";
        // line 47
        echo $context["helper"]->getrender_menu_item(($context["subitem"] ?? $this->getContext($context, "subitem")), (($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
        echo "
                                    </li>
                                ";
        
        $__internal_61b36ed015d8dec492f04fefcd7dbecad5c24d3c806f6d456477e42c69b49059->leave($__internal_61b36ed015d8dec492f04fefcd7dbecad5c24d3c806f6d456477e42c69b49059_prof);

        
        $__internal_e845396de041b9ec0d0401a8796896f0e16e029861053e4d826737c0488826a5->leave($__internal_e845396de041b9ec0d0401a8796896f0e16e029861053e4d826737c0488826a5_prof);

    }

    // line 59
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_50d4d2bc1a4c9d7fe60577bd79ce426b941c294bcbca58061f992de47e44c4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d4d2bc1a4c9d7fe60577bd79ce426b941c294bcbca58061f992de47e44c4ab->enter($__internal_50d4d2bc1a4c9d7fe60577bd79ce426b941c294bcbca58061f992de47e44c4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_48c276dd5c65ae9e41da47951d1c940ba93cee91ba2860a27e5285e5452e50f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c276dd5c65ae9e41da47951d1c940ba93cee91ba2860a27e5285e5452e50f3->enter($__internal_48c276dd5c65ae9e41da47951d1c940ba93cee91ba2860a27e5285e5452e50f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_48c276dd5c65ae9e41da47951d1c940ba93cee91ba2860a27e5285e5452e50f3->leave($__internal_48c276dd5c65ae9e41da47951d1c940ba93cee91ba2860a27e5285e5452e50f3_prof);

        
        $__internal_50d4d2bc1a4c9d7fe60577bd79ce426b941c294bcbca58061f992de47e44c4ab->leave($__internal_50d4d2bc1a4c9d7fe60577bd79ce426b941c294bcbca58061f992de47e44c4ab_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_dd18b9b693337eaf8b36645d6bc5089686959149b2c08c84ff46479e315fea5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_dd18b9b693337eaf8b36645d6bc5089686959149b2c08c84ff46479e315fea5b->enter($__internal_dd18b9b693337eaf8b36645d6bc5089686959149b2c08c84ff46479e315fea5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_00c7d0c8e4f9197b5728fa893682848a28553f947dbba635650ffd3776c9f559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_00c7d0c8e4f9197b5728fa893682848a28553f947dbba635650ffd3776c9f559->enter($__internal_00c7d0c8e4f9197b5728fa893682848a28553f947dbba635650ffd3776c9f559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array()))) : (((($this->getAttribute(                // line 9
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "entity", array()), "action" => "list"), ($context["menu_params"] ?? $this->getContext($context, "menu_params"))), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_1bcf71b99f222afa5d41e8f0ba2ae1ffa5314366b534f5dd294d3b15848d79e0 = ($context["path"] ?? $this->getContext($context, "path"))) && is_string($__internal_d46ff6a6db35a70b86f0268fa8b1e78a9adfc4f741a2325824b6ca48980fe976 = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_d46ff6a6db35a70b86f0268fa8b1e78a9adfc4f741a2325824b6ca48980fe976 || 0 === strpos($__internal_1bcf71b99f222afa5d41e8f0ba2ae1ffa5314366b534f5dd294d3b15848d79e0, $__internal_d46ff6a6db35a70b86f0268fa8b1e78a9adfc4f741a2325824b6ca48980fe976))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), twig_array_merge(($context["menu_params"] ?? $this->getContext($context, "menu_params")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute(($context["item"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute(($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_00c7d0c8e4f9197b5728fa893682848a28553f947dbba635650ffd3776c9f559->leave($__internal_00c7d0c8e4f9197b5728fa893682848a28553f947dbba635650ffd3776c9f559_prof);

            
            $__internal_dd18b9b693337eaf8b36645d6bc5089686959149b2c08c84ff46479e315fea5b->leave($__internal_dd18b9b693337eaf8b36645d6bc5089686959149b2c08c84ff46479e315fea5b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 25,  335 => 24,  330 => 23,  324 => 22,  314 => 21,  311 => 20,  308 => 19,  305 => 18,  302 => 17,  299 => 12,  297 => 10,  296 => 9,  295 => 8,  294 => 7,  292 => 6,  289 => 5,  283 => 3,  280 => 2,  261 => 1,  244 => 59,  231 => 47,  224 => 46,  215 => 45,  204 => 53,  200 => 51,  186 => 50,  183 => 45,  166 => 44,  163 => 43,  161 => 42,  156 => 40,  145 => 39,  136 => 38,  126 => 56,  112 => 55,  109 => 38,  91 => 37,  82 => 36,  65 => 31,  55 => 59,  51 => 57,  49 => 36,  46 => 35,  44 => 34,  40 => 32,  38 => 31,  35 => 30,  33 => 29,  30 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% set _menu_items = easyadmin_config('design.menu') %}

    {% block main_menu %}
        {% for item in _menu_items %}
            {% block menu_item %}
                <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                    {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                    {% if item.children|default([]) is not empty %}
                        <ul class=\"treeview-menu\">
                            {% for subitem in item.children %}
                                {% block menu_subitem %}
                                    <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                        {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                                    </li>
                                {% endblock menu_subitem %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                </li>
            {% endblock menu_item %}
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "EasyAdminBundle:default:menu.html.twig", "/var/www/html/GroupJoob/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/menu.html.twig");
    }
}
