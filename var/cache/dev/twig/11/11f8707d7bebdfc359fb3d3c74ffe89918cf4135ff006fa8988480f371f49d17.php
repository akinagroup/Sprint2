<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_5610b703a3e760acc28378df3e767a8f8233a538e9f02360729958afe22bcdcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a70d407c8cfc13e4e3e1261020a8e01321241169b42ce5140092d20ceee51741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70d407c8cfc13e4e3e1261020a8e01321241169b42ce5140092d20ceee51741->enter($__internal_a70d407c8cfc13e4e3e1261020a8e01321241169b42ce5140092d20ceee51741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_3101c3a564a6cb9f0208faa8c98cbdf719dc4cfeb4d1be78d4361acac649124e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3101c3a564a6cb9f0208faa8c98cbdf719dc4cfeb4d1be78d4361acac649124e->enter($__internal_3101c3a564a6cb9f0208faa8c98cbdf719dc4cfeb4d1be78d4361acac649124e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_a70d407c8cfc13e4e3e1261020a8e01321241169b42ce5140092d20ceee51741->leave($__internal_a70d407c8cfc13e4e3e1261020a8e01321241169b42ce5140092d20ceee51741_prof);

        
        $__internal_3101c3a564a6cb9f0208faa8c98cbdf719dc4cfeb4d1be78d4361acac649124e->leave($__internal_3101c3a564a6cb9f0208faa8c98cbdf719dc4cfeb4d1be78d4361acac649124e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_cd5fec5753376f37c3d88559b4fc03cdb306a0a9ba36f4b4cfbddc6192eca9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5fec5753376f37c3d88559b4fc03cdb306a0a9ba36f4b4cfbddc6192eca9de->enter($__internal_cd5fec5753376f37c3d88559b4fc03cdb306a0a9ba36f4b4cfbddc6192eca9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c05fc8e17ab0ea9fe7579b9d1d81b41282fb5d50526d362b7e3ddb73ec57e467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05fc8e17ab0ea9fe7579b9d1d81b41282fb5d50526d362b7e3ddb73ec57e467->enter($__internal_c05fc8e17ab0ea9fe7579b9d1d81b41282fb5d50526d362b7e3ddb73ec57e467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c05fc8e17ab0ea9fe7579b9d1d81b41282fb5d50526d362b7e3ddb73ec57e467->leave($__internal_c05fc8e17ab0ea9fe7579b9d1d81b41282fb5d50526d362b7e3ddb73ec57e467_prof);

        
        $__internal_cd5fec5753376f37c3d88559b4fc03cdb306a0a9ba36f4b4cfbddc6192eca9de->leave($__internal_cd5fec5753376f37c3d88559b4fc03cdb306a0a9ba36f4b4cfbddc6192eca9de_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_22405f26939245a923e2322a18e9332771eaabf4dbf37457596c274bb0885363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22405f26939245a923e2322a18e9332771eaabf4dbf37457596c274bb0885363->enter($__internal_22405f26939245a923e2322a18e9332771eaabf4dbf37457596c274bb0885363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_3c982ff5349475a3a8703d83f9e08d818faa488b5f277c249b66e93d898c22d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c982ff5349475a3a8703d83f9e08d818faa488b5f277c249b66e93d898c22d8->enter($__internal_3c982ff5349475a3a8703d83f9e08d818faa488b5f277c249b66e93d898c22d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_3c982ff5349475a3a8703d83f9e08d818faa488b5f277c249b66e93d898c22d8->leave($__internal_3c982ff5349475a3a8703d83f9e08d818faa488b5f277c249b66e93d898c22d8_prof);

        
        $__internal_22405f26939245a923e2322a18e9332771eaabf4dbf37457596c274bb0885363->leave($__internal_22405f26939245a923e2322a18e9332771eaabf4dbf37457596c274bb0885363_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c0e942ef01972212dcc6e9f711109475d75dc284826ea005b33240d870705cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e942ef01972212dcc6e9f711109475d75dc284826ea005b33240d870705cac->enter($__internal_c0e942ef01972212dcc6e9f711109475d75dc284826ea005b33240d870705cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_38396247f5b300d95d4ebb25343850c5536275ca43c1dc8ed7df0d1a747e98e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38396247f5b300d95d4ebb25343850c5536275ca43c1dc8ed7df0d1a747e98e8->enter($__internal_38396247f5b300d95d4ebb25343850c5536275ca43c1dc8ed7df0d1a747e98e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_38396247f5b300d95d4ebb25343850c5536275ca43c1dc8ed7df0d1a747e98e8->leave($__internal_38396247f5b300d95d4ebb25343850c5536275ca43c1dc8ed7df0d1a747e98e8_prof);

        
        $__internal_c0e942ef01972212dcc6e9f711109475d75dc284826ea005b33240d870705cac->leave($__internal_c0e942ef01972212dcc6e9f711109475d75dc284826ea005b33240d870705cac_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_263fa223646d4bd1cac1b771329bfc1d09e498a169f47bb32f8676d55372975e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263fa223646d4bd1cac1b771329bfc1d09e498a169f47bb32f8676d55372975e->enter($__internal_263fa223646d4bd1cac1b771329bfc1d09e498a169f47bb32f8676d55372975e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_56ccdb2dc83406ba2bce0f6b7e05b6a3e749ae415298b5ea65901d961c0cf783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ccdb2dc83406ba2bce0f6b7e05b6a3e749ae415298b5ea65901d961c0cf783->enter($__internal_56ccdb2dc83406ba2bce0f6b7e05b6a3e749ae415298b5ea65901d961c0cf783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_8a93964f4b539c701a4e1447e466105a2e8725ef9e088223c408fce4ec9b4807 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_bfcc11fd6095f7df009df5b4aa0962545fb749153e9f8a87d569a9318767c91d = "{{") && ('' === $__internal_bfcc11fd6095f7df009df5b4aa0962545fb749153e9f8a87d569a9318767c91d || 0 === strpos($__internal_8a93964f4b539c701a4e1447e466105a2e8725ef9e088223c408fce4ec9b4807, $__internal_bfcc11fd6095f7df009df5b4aa0962545fb749153e9f8a87d569a9318767c91d)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_56ccdb2dc83406ba2bce0f6b7e05b6a3e749ae415298b5ea65901d961c0cf783->leave($__internal_56ccdb2dc83406ba2bce0f6b7e05b6a3e749ae415298b5ea65901d961c0cf783_prof);

        
        $__internal_263fa223646d4bd1cac1b771329bfc1d09e498a169f47bb32f8676d55372975e->leave($__internal_263fa223646d4bd1cac1b771329bfc1d09e498a169f47bb32f8676d55372975e_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_bb54cc5a12268cea76993072e5993860a6bc848d1d87d268e321c7110143798d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb54cc5a12268cea76993072e5993860a6bc848d1d87d268e321c7110143798d->enter($__internal_bb54cc5a12268cea76993072e5993860a6bc848d1d87d268e321c7110143798d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_7c4874370a7b61e7dcd0a8b70b4959cccae51802666b19ab7d226ed730d4449c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4874370a7b61e7dcd0a8b70b4959cccae51802666b19ab7d226ed730d4449c->enter($__internal_7c4874370a7b61e7dcd0a8b70b4959cccae51802666b19ab7d226ed730d4449c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_7c4874370a7b61e7dcd0a8b70b4959cccae51802666b19ab7d226ed730d4449c->leave($__internal_7c4874370a7b61e7dcd0a8b70b4959cccae51802666b19ab7d226ed730d4449c_prof);

        
        $__internal_bb54cc5a12268cea76993072e5993860a6bc848d1d87d268e321c7110143798d->leave($__internal_bb54cc5a12268cea76993072e5993860a6bc848d1d87d268e321c7110143798d_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_3c2e866a06654d39e9f7f88a4ea8355aa02e3607873fd4511edcaaa51a6f9bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2e866a06654d39e9f7f88a4ea8355aa02e3607873fd4511edcaaa51a6f9bd6->enter($__internal_3c2e866a06654d39e9f7f88a4ea8355aa02e3607873fd4511edcaaa51a6f9bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6fb95fa17aa7b71764b40c87655e9b668ac2759ee1c0364b9a072418b5302ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb95fa17aa7b71764b40c87655e9b668ac2759ee1c0364b9a072418b5302ab8->enter($__internal_6fb95fa17aa7b71764b40c87655e9b668ac2759ee1c0364b9a072418b5302ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_6fb95fa17aa7b71764b40c87655e9b668ac2759ee1c0364b9a072418b5302ab8->leave($__internal_6fb95fa17aa7b71764b40c87655e9b668ac2759ee1c0364b9a072418b5302ab8_prof);

        
        $__internal_3c2e866a06654d39e9f7f88a4ea8355aa02e3607873fd4511edcaaa51a6f9bd6->leave($__internal_3c2e866a06654d39e9f7f88a4ea8355aa02e3607873fd4511edcaaa51a6f9bd6_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9b5dfa6d5f9d8afe76a244b82a3d074019e39e12e863b8af436b521b54d7f7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5dfa6d5f9d8afe76a244b82a3d074019e39e12e863b8af436b521b54d7f7d9->enter($__internal_9b5dfa6d5f9d8afe76a244b82a3d074019e39e12e863b8af436b521b54d7f7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_96fdd8accadc7c4671d38809c7718edbc14a34dd5898f32f1076ec862820f539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fdd8accadc7c4671d38809c7718edbc14a34dd5898f32f1076ec862820f539->enter($__internal_96fdd8accadc7c4671d38809c7718edbc14a34dd5898f32f1076ec862820f539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_96fdd8accadc7c4671d38809c7718edbc14a34dd5898f32f1076ec862820f539->leave($__internal_96fdd8accadc7c4671d38809c7718edbc14a34dd5898f32f1076ec862820f539_prof);

        
        $__internal_9b5dfa6d5f9d8afe76a244b82a3d074019e39e12e863b8af436b521b54d7f7d9->leave($__internal_9b5dfa6d5f9d8afe76a244b82a3d074019e39e12e863b8af436b521b54d7f7d9_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_00e814c6242790c9ba5f23c12352746b30641a66c2743d14b0ce6a2a665795ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e814c6242790c9ba5f23c12352746b30641a66c2743d14b0ce6a2a665795ad->enter($__internal_00e814c6242790c9ba5f23c12352746b30641a66c2743d14b0ce6a2a665795ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c8194c3954896ac37af44bbdfe33760d9cd78d655dc81a98e7cf155b2d10383e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8194c3954896ac37af44bbdfe33760d9cd78d655dc81a98e7cf155b2d10383e->enter($__internal_c8194c3954896ac37af44bbdfe33760d9cd78d655dc81a98e7cf155b2d10383e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_c8194c3954896ac37af44bbdfe33760d9cd78d655dc81a98e7cf155b2d10383e->leave($__internal_c8194c3954896ac37af44bbdfe33760d9cd78d655dc81a98e7cf155b2d10383e_prof);

        
        $__internal_00e814c6242790c9ba5f23c12352746b30641a66c2743d14b0ce6a2a665795ad->leave($__internal_00e814c6242790c9ba5f23c12352746b30641a66c2743d14b0ce6a2a665795ad_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_5e7080a4e3760ce9377ff257a5f9fd55aa045521fdedef4d0a6badfb3016c919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7080a4e3760ce9377ff257a5f9fd55aa045521fdedef4d0a6badfb3016c919->enter($__internal_5e7080a4e3760ce9377ff257a5f9fd55aa045521fdedef4d0a6badfb3016c919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_843c50399a40b5b0fabd8e5ec000c6d73812d409e766cbf5c73e8b13fecf3910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843c50399a40b5b0fabd8e5ec000c6d73812d409e766cbf5c73e8b13fecf3910->enter($__internal_843c50399a40b5b0fabd8e5ec000c6d73812d409e766cbf5c73e8b13fecf3910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_843c50399a40b5b0fabd8e5ec000c6d73812d409e766cbf5c73e8b13fecf3910->leave($__internal_843c50399a40b5b0fabd8e5ec000c6d73812d409e766cbf5c73e8b13fecf3910_prof);

        
        $__internal_5e7080a4e3760ce9377ff257a5f9fd55aa045521fdedef4d0a6badfb3016c919->leave($__internal_5e7080a4e3760ce9377ff257a5f9fd55aa045521fdedef4d0a6badfb3016c919_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_cdecd2a8ca98d3e2a3595c4f8160a17da32bf1706c48c483d85440c70f43caf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdecd2a8ca98d3e2a3595c4f8160a17da32bf1706c48c483d85440c70f43caf1->enter($__internal_cdecd2a8ca98d3e2a3595c4f8160a17da32bf1706c48c483d85440c70f43caf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f787d24ada9f09b9ddc2d5649ba8f663b6e00a1c42178d691e8a790e0cf86133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f787d24ada9f09b9ddc2d5649ba8f663b6e00a1c42178d691e8a790e0cf86133->enter($__internal_f787d24ada9f09b9ddc2d5649ba8f663b6e00a1c42178d691e8a790e0cf86133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_f787d24ada9f09b9ddc2d5649ba8f663b6e00a1c42178d691e8a790e0cf86133->leave($__internal_f787d24ada9f09b9ddc2d5649ba8f663b6e00a1c42178d691e8a790e0cf86133_prof);

        
        $__internal_cdecd2a8ca98d3e2a3595c4f8160a17da32bf1706c48c483d85440c70f43caf1->leave($__internal_cdecd2a8ca98d3e2a3595c4f8160a17da32bf1706c48c483d85440c70f43caf1_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b6868b148d72c0831f314301540300de5a36ea5e0545b2f29d4199dda271b9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6868b148d72c0831f314301540300de5a36ea5e0545b2f29d4199dda271b9ba->enter($__internal_b6868b148d72c0831f314301540300de5a36ea5e0545b2f29d4199dda271b9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3564a5c48e8f6d6663efd6626985279ee0bdb6235eb99322677c02c805af624c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3564a5c48e8f6d6663efd6626985279ee0bdb6235eb99322677c02c805af624c->enter($__internal_3564a5c48e8f6d6663efd6626985279ee0bdb6235eb99322677c02c805af624c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_3564a5c48e8f6d6663efd6626985279ee0bdb6235eb99322677c02c805af624c->leave($__internal_3564a5c48e8f6d6663efd6626985279ee0bdb6235eb99322677c02c805af624c_prof);

        
        $__internal_b6868b148d72c0831f314301540300de5a36ea5e0545b2f29d4199dda271b9ba->leave($__internal_b6868b148d72c0831f314301540300de5a36ea5e0545b2f29d4199dda271b9ba_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b9139f2361598647047cff69ee5f5dbc755d9829ace762595f3eced858885cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9139f2361598647047cff69ee5f5dbc755d9829ace762595f3eced858885cfb->enter($__internal_b9139f2361598647047cff69ee5f5dbc755d9829ace762595f3eced858885cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_0549deed798411278799d2c1725cd7bd57aec16495ef887d373389b9686c54c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0549deed798411278799d2c1725cd7bd57aec16495ef887d373389b9686c54c9->enter($__internal_0549deed798411278799d2c1725cd7bd57aec16495ef887d373389b9686c54c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_0549deed798411278799d2c1725cd7bd57aec16495ef887d373389b9686c54c9->leave($__internal_0549deed798411278799d2c1725cd7bd57aec16495ef887d373389b9686c54c9_prof);

        
        $__internal_b9139f2361598647047cff69ee5f5dbc755d9829ace762595f3eced858885cfb->leave($__internal_b9139f2361598647047cff69ee5f5dbc755d9829ace762595f3eced858885cfb_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_123f77d38d487c561c4ae201f687d6435db240316d7641af98c242e3838fe6f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_123f77d38d487c561c4ae201f687d6435db240316d7641af98c242e3838fe6f1->enter($__internal_123f77d38d487c561c4ae201f687d6435db240316d7641af98c242e3838fe6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_2b61f7a27f6851389c74f200f62823a9d8f37ead51f61261a7e6875ebd4901f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b61f7a27f6851389c74f200f62823a9d8f37ead51f61261a7e6875ebd4901f4->enter($__internal_2b61f7a27f6851389c74f200f62823a9d8f37ead51f61261a7e6875ebd4901f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_2b61f7a27f6851389c74f200f62823a9d8f37ead51f61261a7e6875ebd4901f4->leave($__internal_2b61f7a27f6851389c74f200f62823a9d8f37ead51f61261a7e6875ebd4901f4_prof);

        
        $__internal_123f77d38d487c561c4ae201f687d6435db240316d7641af98c242e3838fe6f1->leave($__internal_123f77d38d487c561c4ae201f687d6435db240316d7641af98c242e3838fe6f1_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_924eb09213860102d5bc1586df12a803f56131a627eed21bdf7e446b4ca53908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924eb09213860102d5bc1586df12a803f56131a627eed21bdf7e446b4ca53908->enter($__internal_924eb09213860102d5bc1586df12a803f56131a627eed21bdf7e446b4ca53908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_980d6622c778dae73cd8e3370a424976380b90b78186340666e9605b3d777a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980d6622c778dae73cd8e3370a424976380b90b78186340666e9605b3d777a20->enter($__internal_980d6622c778dae73cd8e3370a424976380b90b78186340666e9605b3d777a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_980d6622c778dae73cd8e3370a424976380b90b78186340666e9605b3d777a20->leave($__internal_980d6622c778dae73cd8e3370a424976380b90b78186340666e9605b3d777a20_prof);

        
        $__internal_924eb09213860102d5bc1586df12a803f56131a627eed21bdf7e446b4ca53908->leave($__internal_924eb09213860102d5bc1586df12a803f56131a627eed21bdf7e446b4ca53908_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_8826559047c1e1e749d61b0a3822131af428aefde3ead6f155ce8a59c752964c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8826559047c1e1e749d61b0a3822131af428aefde3ead6f155ce8a59c752964c->enter($__internal_8826559047c1e1e749d61b0a3822131af428aefde3ead6f155ce8a59c752964c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_39e408bcc52bfa1135a4e58f989b773f0570f421251f4918dcd80a7880a2d3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e408bcc52bfa1135a4e58f989b773f0570f421251f4918dcd80a7880a2d3da->enter($__internal_39e408bcc52bfa1135a4e58f989b773f0570f421251f4918dcd80a7880a2d3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_39e408bcc52bfa1135a4e58f989b773f0570f421251f4918dcd80a7880a2d3da->leave($__internal_39e408bcc52bfa1135a4e58f989b773f0570f421251f4918dcd80a7880a2d3da_prof);

        
        $__internal_8826559047c1e1e749d61b0a3822131af428aefde3ead6f155ce8a59c752964c->leave($__internal_8826559047c1e1e749d61b0a3822131af428aefde3ead6f155ce8a59c752964c_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8ef87407c153f975c6d50a7f1a9261d34b57ed2f28cfeb80a713834315d82018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef87407c153f975c6d50a7f1a9261d34b57ed2f28cfeb80a713834315d82018->enter($__internal_8ef87407c153f975c6d50a7f1a9261d34b57ed2f28cfeb80a713834315d82018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_fc9c55a5c01f9cc930044f13c5260e4d18242bc99048cc6b60eb5f6f8cc159d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9c55a5c01f9cc930044f13c5260e4d18242bc99048cc6b60eb5f6f8cc159d2->enter($__internal_fc9c55a5c01f9cc930044f13c5260e4d18242bc99048cc6b60eb5f6f8cc159d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_fc9c55a5c01f9cc930044f13c5260e4d18242bc99048cc6b60eb5f6f8cc159d2->leave($__internal_fc9c55a5c01f9cc930044f13c5260e4d18242bc99048cc6b60eb5f6f8cc159d2_prof);

        
        $__internal_8ef87407c153f975c6d50a7f1a9261d34b57ed2f28cfeb80a713834315d82018->leave($__internal_8ef87407c153f975c6d50a7f1a9261d34b57ed2f28cfeb80a713834315d82018_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_5f4448aa121a5990634bb14b0ed9b93d2711d88b57130213106cb7b9d0e53f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4448aa121a5990634bb14b0ed9b93d2711d88b57130213106cb7b9d0e53f89->enter($__internal_5f4448aa121a5990634bb14b0ed9b93d2711d88b57130213106cb7b9d0e53f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_67aa6ed184a6e3de4bebab0139e0447740ee6e95983d0f2498c967437128124f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67aa6ed184a6e3de4bebab0139e0447740ee6e95983d0f2498c967437128124f->enter($__internal_67aa6ed184a6e3de4bebab0139e0447740ee6e95983d0f2498c967437128124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_67aa6ed184a6e3de4bebab0139e0447740ee6e95983d0f2498c967437128124f->leave($__internal_67aa6ed184a6e3de4bebab0139e0447740ee6e95983d0f2498c967437128124f_prof);

        
        $__internal_5f4448aa121a5990634bb14b0ed9b93d2711d88b57130213106cb7b9d0e53f89->leave($__internal_5f4448aa121a5990634bb14b0ed9b93d2711d88b57130213106cb7b9d0e53f89_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_3a1a8d0b7a527daf20685b43f1c875b1f71b8e119d585691e3cbe7017d6fc60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1a8d0b7a527daf20685b43f1c875b1f71b8e119d585691e3cbe7017d6fc60c->enter($__internal_3a1a8d0b7a527daf20685b43f1c875b1f71b8e119d585691e3cbe7017d6fc60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e820eec0014023dfe82b35d62a842fc42d74756c6d57b1aad84c2fdd84d38283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e820eec0014023dfe82b35d62a842fc42d74756c6d57b1aad84c2fdd84d38283->enter($__internal_e820eec0014023dfe82b35d62a842fc42d74756c6d57b1aad84c2fdd84d38283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_e820eec0014023dfe82b35d62a842fc42d74756c6d57b1aad84c2fdd84d38283->leave($__internal_e820eec0014023dfe82b35d62a842fc42d74756c6d57b1aad84c2fdd84d38283_prof);

        
        $__internal_3a1a8d0b7a527daf20685b43f1c875b1f71b8e119d585691e3cbe7017d6fc60c->leave($__internal_3a1a8d0b7a527daf20685b43f1c875b1f71b8e119d585691e3cbe7017d6fc60c_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5e33350cd7a596507881df02e87ed00fd406ea6708d1d423bb26d5123ba650da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e33350cd7a596507881df02e87ed00fd406ea6708d1d423bb26d5123ba650da->enter($__internal_5e33350cd7a596507881df02e87ed00fd406ea6708d1d423bb26d5123ba650da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_5c33edbbb4f07b348aa3f109e35318e4e08bb60b7d310c95154d372a9dead2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c33edbbb4f07b348aa3f109e35318e4e08bb60b7d310c95154d372a9dead2f0->enter($__internal_5c33edbbb4f07b348aa3f109e35318e4e08bb60b7d310c95154d372a9dead2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_5c33edbbb4f07b348aa3f109e35318e4e08bb60b7d310c95154d372a9dead2f0->leave($__internal_5c33edbbb4f07b348aa3f109e35318e4e08bb60b7d310c95154d372a9dead2f0_prof);

        
        $__internal_5e33350cd7a596507881df02e87ed00fd406ea6708d1d423bb26d5123ba650da->leave($__internal_5e33350cd7a596507881df02e87ed00fd406ea6708d1d423bb26d5123ba650da_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_38411cee760bf5516e47ebce98032709fe823f968687acfa0293915daa4fee75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38411cee760bf5516e47ebce98032709fe823f968687acfa0293915daa4fee75->enter($__internal_38411cee760bf5516e47ebce98032709fe823f968687acfa0293915daa4fee75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_09ba4b4e07cef4484afd101454dd87ad128b47c9159b837132c8f87f9ae799ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ba4b4e07cef4484afd101454dd87ad128b47c9159b837132c8f87f9ae799ad->enter($__internal_09ba4b4e07cef4484afd101454dd87ad128b47c9159b837132c8f87f9ae799ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_09ba4b4e07cef4484afd101454dd87ad128b47c9159b837132c8f87f9ae799ad->leave($__internal_09ba4b4e07cef4484afd101454dd87ad128b47c9159b837132c8f87f9ae799ad_prof);

        
        $__internal_38411cee760bf5516e47ebce98032709fe823f968687acfa0293915daa4fee75->leave($__internal_38411cee760bf5516e47ebce98032709fe823f968687acfa0293915daa4fee75_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_deaf8894949d1659f7233572d9425e0e8cb7a2c6f4cfdca7cba83a798506c408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deaf8894949d1659f7233572d9425e0e8cb7a2c6f4cfdca7cba83a798506c408->enter($__internal_deaf8894949d1659f7233572d9425e0e8cb7a2c6f4cfdca7cba83a798506c408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_da69ccf76412c5f394ec98e7e89db0d37c4c20c09fa3a0242be3826d241de88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da69ccf76412c5f394ec98e7e89db0d37c4c20c09fa3a0242be3826d241de88a->enter($__internal_da69ccf76412c5f394ec98e7e89db0d37c4c20c09fa3a0242be3826d241de88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_da69ccf76412c5f394ec98e7e89db0d37c4c20c09fa3a0242be3826d241de88a->leave($__internal_da69ccf76412c5f394ec98e7e89db0d37c4c20c09fa3a0242be3826d241de88a_prof);

        
        $__internal_deaf8894949d1659f7233572d9425e0e8cb7a2c6f4cfdca7cba83a798506c408->leave($__internal_deaf8894949d1659f7233572d9425e0e8cb7a2c6f4cfdca7cba83a798506c408_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d024b73d1684ff6d7eb9cd03cef3f6e9ed0e09894c2d5206e0e847aeee283c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d024b73d1684ff6d7eb9cd03cef3f6e9ed0e09894c2d5206e0e847aeee283c1b->enter($__internal_d024b73d1684ff6d7eb9cd03cef3f6e9ed0e09894c2d5206e0e847aeee283c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d796c2d94520738c756083621afdc36c513a55de7701513f8da925a8eb750e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d796c2d94520738c756083621afdc36c513a55de7701513f8da925a8eb750e98->enter($__internal_d796c2d94520738c756083621afdc36c513a55de7701513f8da925a8eb750e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d796c2d94520738c756083621afdc36c513a55de7701513f8da925a8eb750e98->leave($__internal_d796c2d94520738c756083621afdc36c513a55de7701513f8da925a8eb750e98_prof);

        
        $__internal_d024b73d1684ff6d7eb9cd03cef3f6e9ed0e09894c2d5206e0e847aeee283c1b->leave($__internal_d024b73d1684ff6d7eb9cd03cef3f6e9ed0e09894c2d5206e0e847aeee283c1b_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_5da28e623acc662f7e570c62cc69b7e48c8c93062598f152ef36d1386b0ddad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da28e623acc662f7e570c62cc69b7e48c8c93062598f152ef36d1386b0ddad8->enter($__internal_5da28e623acc662f7e570c62cc69b7e48c8c93062598f152ef36d1386b0ddad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_655e1a75b1d24fde2c2c8a72ec6ad96ecf8582d1e6a2a9778059bc2095a24ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655e1a75b1d24fde2c2c8a72ec6ad96ecf8582d1e6a2a9778059bc2095a24ee5->enter($__internal_655e1a75b1d24fde2c2c8a72ec6ad96ecf8582d1e6a2a9778059bc2095a24ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_655e1a75b1d24fde2c2c8a72ec6ad96ecf8582d1e6a2a9778059bc2095a24ee5->leave($__internal_655e1a75b1d24fde2c2c8a72ec6ad96ecf8582d1e6a2a9778059bc2095a24ee5_prof);

        
        $__internal_5da28e623acc662f7e570c62cc69b7e48c8c93062598f152ef36d1386b0ddad8->leave($__internal_5da28e623acc662f7e570c62cc69b7e48c8c93062598f152ef36d1386b0ddad8_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_0881402cac941a2c936e03b38e811faea34234d698e8f5d5b256078c60b2acb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0881402cac941a2c936e03b38e811faea34234d698e8f5d5b256078c60b2acb9->enter($__internal_0881402cac941a2c936e03b38e811faea34234d698e8f5d5b256078c60b2acb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_835edbf25d0fc5c89ae8ac3545899a2be2fd21db2f967aa0e9e711ab22ff400b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835edbf25d0fc5c89ae8ac3545899a2be2fd21db2f967aa0e9e711ab22ff400b->enter($__internal_835edbf25d0fc5c89ae8ac3545899a2be2fd21db2f967aa0e9e711ab22ff400b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_835edbf25d0fc5c89ae8ac3545899a2be2fd21db2f967aa0e9e711ab22ff400b->leave($__internal_835edbf25d0fc5c89ae8ac3545899a2be2fd21db2f967aa0e9e711ab22ff400b_prof);

        
        $__internal_0881402cac941a2c936e03b38e811faea34234d698e8f5d5b256078c60b2acb9->leave($__internal_0881402cac941a2c936e03b38e811faea34234d698e8f5d5b256078c60b2acb9_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0ba61a3d8827967fd18440936d27b2edb1bf49155e2475ac12cea5a2e9c54155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba61a3d8827967fd18440936d27b2edb1bf49155e2475ac12cea5a2e9c54155->enter($__internal_0ba61a3d8827967fd18440936d27b2edb1bf49155e2475ac12cea5a2e9c54155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0b50a5379688612ea11ca89404d832abd15de7be0c96a387a6a5f4f08c8ad0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b50a5379688612ea11ca89404d832abd15de7be0c96a387a6a5f4f08c8ad0f5->enter($__internal_0b50a5379688612ea11ca89404d832abd15de7be0c96a387a6a5f4f08c8ad0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_0b50a5379688612ea11ca89404d832abd15de7be0c96a387a6a5f4f08c8ad0f5->leave($__internal_0b50a5379688612ea11ca89404d832abd15de7be0c96a387a6a5f4f08c8ad0f5_prof);

        
        $__internal_0ba61a3d8827967fd18440936d27b2edb1bf49155e2475ac12cea5a2e9c54155->leave($__internal_0ba61a3d8827967fd18440936d27b2edb1bf49155e2475ac12cea5a2e9c54155_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9dcca84b82834d41b32e30c5218b64ca059d1261567b176a67867963eb329d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dcca84b82834d41b32e30c5218b64ca059d1261567b176a67867963eb329d32->enter($__internal_9dcca84b82834d41b32e30c5218b64ca059d1261567b176a67867963eb329d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e7f8ef1ebc8a05058606944f781506157116a0b1d59db05d9c9503ab0efc4e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f8ef1ebc8a05058606944f781506157116a0b1d59db05d9c9503ab0efc4e39->enter($__internal_e7f8ef1ebc8a05058606944f781506157116a0b1d59db05d9c9503ab0efc4e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_e7f8ef1ebc8a05058606944f781506157116a0b1d59db05d9c9503ab0efc4e39->leave($__internal_e7f8ef1ebc8a05058606944f781506157116a0b1d59db05d9c9503ab0efc4e39_prof);

        
        $__internal_9dcca84b82834d41b32e30c5218b64ca059d1261567b176a67867963eb329d32->leave($__internal_9dcca84b82834d41b32e30c5218b64ca059d1261567b176a67867963eb329d32_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_062ad68585e32b60cd0c05f03e5739f21ba63cdd3c7ac70a5a14a69490aef334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062ad68585e32b60cd0c05f03e5739f21ba63cdd3c7ac70a5a14a69490aef334->enter($__internal_062ad68585e32b60cd0c05f03e5739f21ba63cdd3c7ac70a5a14a69490aef334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_f9c8e5952b03e7ca0662f341123e908ebed4a295e6aeb6e1c959bece4ce9ed84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c8e5952b03e7ca0662f341123e908ebed4a295e6aeb6e1c959bece4ce9ed84->enter($__internal_f9c8e5952b03e7ca0662f341123e908ebed4a295e6aeb6e1c959bece4ce9ed84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_f9c8e5952b03e7ca0662f341123e908ebed4a295e6aeb6e1c959bece4ce9ed84->leave($__internal_f9c8e5952b03e7ca0662f341123e908ebed4a295e6aeb6e1c959bece4ce9ed84_prof);

        
        $__internal_062ad68585e32b60cd0c05f03e5739f21ba63cdd3c7ac70a5a14a69490aef334->leave($__internal_062ad68585e32b60cd0c05f03e5739f21ba63cdd3c7ac70a5a14a69490aef334_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/GroupJoob/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
