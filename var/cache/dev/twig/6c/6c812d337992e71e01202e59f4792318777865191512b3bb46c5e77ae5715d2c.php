<?php

/* @User/Menu/knp_menu.html.twig */
class __TwigTemplate_9585dabad36c369f860a8ef6a2783820746262cdc2c45d83a13156eb746668fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@User/Menu/knp_menu.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9750513a33ef785c72add8565619ab5fecf496a91d6509480bca4c5513e4041e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9750513a33ef785c72add8565619ab5fecf496a91d6509480bca4c5513e4041e->enter($__internal_9750513a33ef785c72add8565619ab5fecf496a91d6509480bca4c5513e4041e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Menu/knp_menu.html.twig"));

        $__internal_c5f505634579ecfd06b75b0100dfe439a3068731c0cc6858d5677d33aefa79ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f505634579ecfd06b75b0100dfe439a3068731c0cc6858d5677d33aefa79ba->enter($__internal_c5f505634579ecfd06b75b0100dfe439a3068731c0cc6858d5677d33aefa79ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Menu/knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9750513a33ef785c72add8565619ab5fecf496a91d6509480bca4c5513e4041e->leave($__internal_9750513a33ef785c72add8565619ab5fecf496a91d6509480bca4c5513e4041e_prof);

        
        $__internal_c5f505634579ecfd06b75b0100dfe439a3068731c0cc6858d5677d33aefa79ba->leave($__internal_c5f505634579ecfd06b75b0100dfe439a3068731c0cc6858d5677d33aefa79ba_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_c529d36cf9df96400544061bce2f25a0470265dd350f8d8b43d5a6753d8848e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c529d36cf9df96400544061bce2f25a0470265dd350f8d8b43d5a6753d8848e8->enter($__internal_c529d36cf9df96400544061bce2f25a0470265dd350f8d8b43d5a6753d8848e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_ab17a0ad360394d84b0129252f3a6ce09d3470acde41cd6c160325d9b153dc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab17a0ad360394d84b0129252f3a6ce09d3470acde41cd6c160325d9b153dc6f->enter($__internal_ab17a0ad360394d84b0129252f3a6ce09d3470acde41cd6c160325d9b153dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        echo "\t";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@User/Menu/knp_menu.html.twig", 4);
        // line 5
        echo "\t";
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute(($context["attributes"] ?? null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
\t\t";
            // line 12
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if (($context["divider_prepend"] ?? $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "\t\t\t";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
\t\t";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 20
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 21
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 22
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 23
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 25
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 26
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 28
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 29
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 31
            echo "
\t\t";
            // line 33
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 34
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 35
            echo "
\t\t";
            // line 37
            if (($context["is_dropdown"] ?? $this->getContext($context, "is_dropdown"))) {
                // line 38
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 39
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 41
            echo "
\t\t";
            // line 43
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 44
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 46
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 47
            echo "
\t\t";
            // line 49
            echo "\t\t<li";
            echo $context["macros"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 50
            if (($context["is_dropdown"] ?? $this->getContext($context, "is_dropdown"))) {
                // line 51
                echo "\t\t\t\t";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 52
($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array()) || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 53
                echo "\t\t\t\t";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 55
                echo "\t\t\t\t";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 57
            echo "\t\t\t";
            // line 58
            echo "\t\t\t";
            $this->displayBlock("list", $context, $blocks);
            echo "
\t\t</li>";
            // line 61
            if (($context["divider_append"] ?? $this->getContext($context, "divider_append"))) {
                // line 62
                echo "\t\t\t";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 64
            echo "\t";
        }
        
        $__internal_ab17a0ad360394d84b0129252f3a6ce09d3470acde41cd6c160325d9b153dc6f->leave($__internal_ab17a0ad360394d84b0129252f3a6ce09d3470acde41cd6c160325d9b153dc6f_prof);

        
        $__internal_c529d36cf9df96400544061bce2f25a0470265dd350f8d8b43d5a6753d8848e8->leave($__internal_c529d36cf9df96400544061bce2f25a0470265dd350f8d8b43d5a6753d8848e8_prof);

    }

    // line 67
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_6b38fa2d8565658dff7db308cb0793141a1620dd8326eb7add252fd66f778399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b38fa2d8565658dff7db308cb0793141a1620dd8326eb7add252fd66f778399->enter($__internal_6b38fa2d8565658dff7db308cb0793141a1620dd8326eb7add252fd66f778399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_c6a4ef6e118b8b244a0f6b10448f4e435d502d2d30f080b890d12fb266785b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a4ef6e118b8b244a0f6b10448f4e435d502d2d30f080b890d12fb266785b7c->enter($__internal_c6a4ef6e118b8b244a0f6b10448f4e435d502d2d30f080b890d12fb266785b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 68
        echo "\t";
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 69
            echo "\t\t<li class=\"divider-vertical\"></li>
\t";
        } else {
            // line 71
            echo "\t\t<li class=\"divider\"></li>
\t";
        }
        
        $__internal_c6a4ef6e118b8b244a0f6b10448f4e435d502d2d30f080b890d12fb266785b7c->leave($__internal_c6a4ef6e118b8b244a0f6b10448f4e435d502d2d30f080b890d12fb266785b7c_prof);

        
        $__internal_6b38fa2d8565658dff7db308cb0793141a1620dd8326eb7add252fd66f778399->leave($__internal_6b38fa2d8565658dff7db308cb0793141a1620dd8326eb7add252fd66f778399_prof);

    }

    // line 75
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_f8e6ed85925181d09b946d8663e3274194286e5495edbfbd6647dfabc3b89aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e6ed85925181d09b946d8663e3274194286e5495edbfbd6647dfabc3b89aca->enter($__internal_f8e6ed85925181d09b946d8663e3274194286e5495edbfbd6647dfabc3b89aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_41a850edb8391cfde3800aceb800220e3c0c3b40b5380bdf6e8ffacdbc6e17bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a850edb8391cfde3800aceb800220e3c0c3b40b5380bdf6e8ffacdbc6e17bb->enter($__internal_41a850edb8391cfde3800aceb800220e3c0c3b40b5380bdf6e8ffacdbc6e17bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 76
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array())), "method");
        echo ">
\t\t";
        // line 77
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 78
            echo "\t\t\t<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
\t\t";
        }
        // line 80
        echo "\t\t";
        $this->displayBlock("label", $context, $blocks);
        echo "
\t</a>
";
        
        $__internal_41a850edb8391cfde3800aceb800220e3c0c3b40b5380bdf6e8ffacdbc6e17bb->leave($__internal_41a850edb8391cfde3800aceb800220e3c0c3b40b5380bdf6e8ffacdbc6e17bb_prof);

        
        $__internal_f8e6ed85925181d09b946d8663e3274194286e5495edbfbd6647dfabc3b89aca->leave($__internal_f8e6ed85925181d09b946d8663e3274194286e5495edbfbd6647dfabc3b89aca_prof);

    }

    // line 84
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_0c4e6c9218a1e647fe3bda7faab4af3821d94a5fb5001930ec5162d2429ab311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4e6c9218a1e647fe3bda7faab4af3821d94a5fb5001930ec5162d2429ab311->enter($__internal_0c4e6c9218a1e647fe3bda7faab4af3821d94a5fb5001930ec5162d2429ab311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_455d3057d5a209b1de8954cd80251e785ac16fe0a4158ed630197d00ac1468af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455d3057d5a209b1de8954cd80251e785ac16fe0a4158ed630197d00ac1468af->enter($__internal_455d3057d5a209b1de8954cd80251e785ac16fe0a4158ed630197d00ac1468af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 85
        echo "\t<span>";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array())), "method");
        echo ">
\t\t";
        // line 86
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 87
            echo "\t\t\t<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
\t\t";
        }
        // line 89
        echo "\t\t";
        $this->displayBlock("label", $context, $blocks);
        echo "
\t</span>
";
        
        $__internal_455d3057d5a209b1de8954cd80251e785ac16fe0a4158ed630197d00ac1468af->leave($__internal_455d3057d5a209b1de8954cd80251e785ac16fe0a4158ed630197d00ac1468af_prof);

        
        $__internal_0c4e6c9218a1e647fe3bda7faab4af3821d94a5fb5001930ec5162d2429ab311->leave($__internal_0c4e6c9218a1e647fe3bda7faab4af3821d94a5fb5001930ec5162d2429ab311_prof);

    }

    // line 93
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_837e8088a4d7aa2a4f1b9414017096098f56f88341295658a29f2fed038f8dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837e8088a4d7aa2a4f1b9414017096098f56f88341295658a29f2fed038f8dfb->enter($__internal_837e8088a4d7aa2a4f1b9414017096098f56f88341295658a29f2fed038f8dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_b064b3c067cc5477c5fe546c09ebec0b6030995c80152977c9d3f2e56830c9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b064b3c067cc5477c5fe546c09ebec0b6030995c80152977c9d3f2e56830c9bc->enter($__internal_b064b3c067cc5477c5fe546c09ebec0b6030995c80152977c9d3f2e56830c9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 94
        $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 95
        $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 96
        $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array());
        // line 97
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
        // line 98
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 99
        echo "\t<a href=\"#\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => ($context["attributes"] ?? $this->getContext($context, "attributes"))), "method");
        echo ">
\t\t";
        // line 100
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 101
            echo "\t\t\t<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
\t\t";
        }
        // line 103
        echo "\t\t";
        $this->displayBlock("label", $context, $blocks);
        echo "
\t\t<b class=\"caret\"></b>
\t</a>
";
        
        $__internal_b064b3c067cc5477c5fe546c09ebec0b6030995c80152977c9d3f2e56830c9bc->leave($__internal_b064b3c067cc5477c5fe546c09ebec0b6030995c80152977c9d3f2e56830c9bc_prof);

        
        $__internal_837e8088a4d7aa2a4f1b9414017096098f56f88341295658a29f2fed038f8dfb->leave($__internal_837e8088a4d7aa2a4f1b9414017096098f56f88341295658a29f2fed038f8dfb_prof);

    }

    // line 108
    public function block_label($context, array $blocks = array())
    {
        $__internal_9a22e51eb119fa5729c16da4ee06d890069e8cb221adb059924bd490c782f69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a22e51eb119fa5729c16da4ee06d890069e8cb221adb059924bd490c782f69c->enter($__internal_9a22e51eb119fa5729c16da4ee06d890069e8cb221adb059924bd490c782f69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_6f40068bbba3d35026b40f570f45fbf5cd1f2172cbbf5e6438fdbeb520a37d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f40068bbba3d35026b40f570f45fbf5cd1f2172cbbf5e6438fdbeb520a37d7d->enter($__internal_6f40068bbba3d35026b40f570f45fbf5cd1f2172cbbf5e6438fdbeb520a37d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())), "html", null, true);
        
        $__internal_6f40068bbba3d35026b40f570f45fbf5cd1f2172cbbf5e6438fdbeb520a37d7d->leave($__internal_6f40068bbba3d35026b40f570f45fbf5cd1f2172cbbf5e6438fdbeb520a37d7d_prof);

        
        $__internal_9a22e51eb119fa5729c16da4ee06d890069e8cb221adb059924bd490c782f69c->leave($__internal_9a22e51eb119fa5729c16da4ee06d890069e8cb221adb059924bd490c782f69c_prof);

    }

    public function getTemplateName()
    {
        return "@User/Menu/knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 108,  310 => 103,  304 => 101,  302 => 100,  297 => 99,  295 => 98,  293 => 97,  291 => 96,  289 => 95,  287 => 94,  278 => 93,  264 => 89,  258 => 87,  256 => 86,  251 => 85,  242 => 84,  228 => 80,  222 => 78,  220 => 77,  213 => 76,  204 => 75,  192 => 71,  188 => 69,  185 => 68,  176 => 67,  165 => 64,  161 => 62,  159 => 61,  154 => 58,  152 => 57,  148 => 55,  144 => 53,  142 => 52,  139 => 51,  137 => 50,  133 => 49,  130 => 47,  128 => 46,  125 => 44,  123 => 43,  120 => 41,  117 => 39,  115 => 38,  113 => 37,  110 => 35,  108 => 34,  106 => 33,  103 => 31,  100 => 29,  98 => 28,  95 => 26,  93 => 25,  90 => 23,  88 => 22,  86 => 21,  84 => 20,  82 => 19,  79 => 17,  75 => 15,  73 => 14,  71 => 12,  68 => 10,  66 => 9,  64 => 8,  62 => 7,  60 => 6,  57 => 5,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block item %}
\t{% import \"knp_menu.html.twig\" as macros %}
\t{% if item.displayed %}
\t\t{%- set attributes = item.attributes %}
\t\t{%- set is_dropdown = attributes.dropdown|default(false) %}
\t\t{%- set divider_prepend = attributes.divider_prepend|default(false) %}
\t\t{%- set divider_append = attributes.divider_append|default(false) %}

\t\t{# unset bootstrap specific attributes #}
\t\t{%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

\t\t{%- if divider_prepend %}
\t\t\t{{ block('dividerElement') }}
\t\t{%- endif %}

\t\t{# building the class of the item #}
\t\t{%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
\t\t{%- if matcher.isCurrent(item) %}
\t\t\t{%- set classes = classes|merge([options.currentClass]) %}
\t\t{%- elseif matcher.isAncestor(item, options.depth) %}
\t\t\t{%- set classes = classes|merge([options.ancestorClass]) %}
\t\t{%- endif %}
\t\t{%- if item.actsLikeFirst %}
\t\t\t{%- set classes = classes|merge([options.firstClass]) %}
\t\t{%- endif %}
\t\t{%- if item.actsLikeLast %}
\t\t\t{%- set classes = classes|merge([options.lastClass]) %}
\t\t{%- endif %}

\t\t{# building the class of the children #}
\t\t{%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
\t\t{%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

\t\t{# adding classes for dropdown #}
\t\t{%- if is_dropdown %}
\t\t\t{%- set classes = classes|merge(['dropdown']) %}
\t\t\t{%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}
\t\t{%- endif %}

\t\t{# putting classes together #}
\t\t{%- if classes is not empty %}
\t\t\t{%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
\t\t{%- endif %}
\t\t{%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}

\t\t{# displaying the item #}
\t\t<li{{ macros.attributes(attributes) }}>
\t\t\t{%- if is_dropdown %}
\t\t\t\t{{ block('dropdownElement') }}
\t\t\t{%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}
\t\t\t\t{{ block('linkElement') }}
\t\t\t{%- else %}
\t\t\t\t{{ block('spanElement') }}
\t\t\t{%- endif %}
\t\t\t{# render the list of children#}
\t\t\t{{ block('list') }}
\t\t</li>

\t\t{%- if divider_append %}
\t\t\t{{ block('dividerElement') }}
\t\t{%- endif %}
\t{% endif %}
{% endblock %}

{% block dividerElement %}
\t{% if item.level == 1 %}
\t\t<li class=\"divider-vertical\"></li>
\t{% else %}
\t\t<li class=\"divider\"></li>
\t{% endif %}
{% endblock %}

{% block linkElement %}
\t<a href=\"{{ item.uri }}\"{{ macros.attributes(item.linkAttributes) }}>
\t\t{% if item.attribute('icon') is not empty  %}
\t\t\t<i class=\"{{ item.attribute('icon') }}\"></i>
\t\t{% endif %}
\t\t{{ block('label') }}
\t</a>
{% endblock %}

{% block spanElement %}
\t<span>{{ macros.attributes(item.labelAttributes) }}>
\t\t{% if item.attribute('icon') is not empty  %}
\t\t\t<i class=\"{{ item.attribute('icon') }}\"></i>
\t\t{% endif %}
\t\t{{ block('label') }}
\t</span>
{% endblock %}

{% block dropdownElement %}
\t{%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}
\t{%- set classes = classes|merge(['dropdown-toggle']) %}
\t{%- set attributes = item.linkAttributes %}
\t{%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
\t{%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}
\t<a href=\"#\"{{ macros.attributes(attributes) }}>
\t\t{% if item.attribute('icon') is not empty  %}
\t\t\t<i class=\"{{ item.attribute('icon') }}\"></i>
\t\t{% endif %}
\t\t{{ block('label') }}
\t\t<b class=\"caret\"></b>
\t</a>
{% endblock %}

{% block label %}{{ item.label|trans }}{% endblock %}
", "@User/Menu/knp_menu.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle\\Resources\\views\\Menu\\knp_menu.html.twig");
    }
}
