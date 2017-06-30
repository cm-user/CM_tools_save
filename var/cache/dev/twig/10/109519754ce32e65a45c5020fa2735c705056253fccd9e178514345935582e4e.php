<?php

/* knp_menu.html.twig */
class __TwigTemplate_b574d2b6ece239f75261c112a0ee6e2d249d3c736067665dd00e96aedc531139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9244d7d02ce3e6c939fa04fa781387d983bf76bb2a9b1807db21acd17a9f99c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9244d7d02ce3e6c939fa04fa781387d983bf76bb2a9b1807db21acd17a9f99c4->enter($__internal_9244d7d02ce3e6c939fa04fa781387d983bf76bb2a9b1807db21acd17a9f99c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_8078ad3830f3b0572d95a347406623b1136eaee49e4de9288a223bb031fa6c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8078ad3830f3b0572d95a347406623b1136eaee49e4de9288a223bb031fa6c10->enter($__internal_8078ad3830f3b0572d95a347406623b1136eaee49e4de9288a223bb031fa6c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9244d7d02ce3e6c939fa04fa781387d983bf76bb2a9b1807db21acd17a9f99c4->leave($__internal_9244d7d02ce3e6c939fa04fa781387d983bf76bb2a9b1807db21acd17a9f99c4_prof);

        
        $__internal_8078ad3830f3b0572d95a347406623b1136eaee49e4de9288a223bb031fa6c10->leave($__internal_8078ad3830f3b0572d95a347406623b1136eaee49e4de9288a223bb031fa6c10_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_b4e83b97c83774bce1d1c53fa6c135c96e226824d01e9278b2b14c400b3459f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e83b97c83774bce1d1c53fa6c135c96e226824d01e9278b2b14c400b3459f2->enter($__internal_b4e83b97c83774bce1d1c53fa6c135c96e226824d01e9278b2b14c400b3459f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_fc456bb032b8c6447dd236d4d980d1fe5710ca66f28e75cdcc4b659c35b39470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc456bb032b8c6447dd236d4d980d1fe5710ca66f28e75cdcc4b659c35b39470->enter($__internal_fc456bb032b8c6447dd236d4d980d1fe5710ca66f28e75cdcc4b659c35b39470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fc456bb032b8c6447dd236d4d980d1fe5710ca66f28e75cdcc4b659c35b39470->leave($__internal_fc456bb032b8c6447dd236d4d980d1fe5710ca66f28e75cdcc4b659c35b39470_prof);

        
        $__internal_b4e83b97c83774bce1d1c53fa6c135c96e226824d01e9278b2b14c400b3459f2->leave($__internal_b4e83b97c83774bce1d1c53fa6c135c96e226824d01e9278b2b14c400b3459f2_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_3fce49f31335b45c091cf0471f5e7c5adce35031644912e370481be20f216fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fce49f31335b45c091cf0471f5e7c5adce35031644912e370481be20f216fd3->enter($__internal_3fce49f31335b45c091cf0471f5e7c5adce35031644912e370481be20f216fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_7b9fcc663bc66d9300cf3de6ec975e2feb0cb2f04369489a0bd3ebd41b087251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9fcc663bc66d9300cf3de6ec975e2feb0cb2f04369489a0bd3ebd41b087251->enter($__internal_7b9fcc663bc66d9300cf3de6ec975e2feb0cb2f04369489a0bd3ebd41b087251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_7b9fcc663bc66d9300cf3de6ec975e2feb0cb2f04369489a0bd3ebd41b087251->leave($__internal_7b9fcc663bc66d9300cf3de6ec975e2feb0cb2f04369489a0bd3ebd41b087251_prof);

        
        $__internal_3fce49f31335b45c091cf0471f5e7c5adce35031644912e370481be20f216fd3->leave($__internal_3fce49f31335b45c091cf0471f5e7c5adce35031644912e370481be20f216fd3_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_75f9a1643050033745823628396f26e8f786cd88b5b3e939daa17ef6942203b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f9a1643050033745823628396f26e8f786cd88b5b3e939daa17ef6942203b3->enter($__internal_75f9a1643050033745823628396f26e8f786cd88b5b3e939daa17ef6942203b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_b047e482aa3b1f6549d0989c55e1789481e49893e636619c641253cc3952053e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b047e482aa3b1f6549d0989c55e1789481e49893e636619c641253cc3952053e->enter($__internal_b047e482aa3b1f6549d0989c55e1789481e49893e636619c641253cc3952053e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_b047e482aa3b1f6549d0989c55e1789481e49893e636619c641253cc3952053e->leave($__internal_b047e482aa3b1f6549d0989c55e1789481e49893e636619c641253cc3952053e_prof);

        
        $__internal_75f9a1643050033745823628396f26e8f786cd88b5b3e939daa17ef6942203b3->leave($__internal_75f9a1643050033745823628396f26e8f786cd88b5b3e939daa17ef6942203b3_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_8ea67b83bdaf4fe10a7d731b4e49088f7e666aa86a08a847db6240931680e9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea67b83bdaf4fe10a7d731b4e49088f7e666aa86a08a847db6240931680e9c9->enter($__internal_8ea67b83bdaf4fe10a7d731b4e49088f7e666aa86a08a847db6240931680e9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_c83ae56824d40059ded3e82145f16d7eb119dcf81cc3390ceb41a1bf65e9490a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83ae56824d40059ded3e82145f16d7eb119dcf81cc3390ceb41a1bf65e9490a->enter($__internal_c83ae56824d40059ded3e82145f16d7eb119dcf81cc3390ceb41a1bf65e9490a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = ($context["options"] ?? $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = ($context["item"] ?? $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("depth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute(($context["currentOptions"] ?? $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentItem"] ?? $this->getContext($context, "currentItem")), "children", array()));
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
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        // line 47
        $context["item"] = ($context["currentItem"] ?? $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = ($context["currentOptions"] ?? $this->getContext($context, "currentOptions"));
        
        $__internal_c83ae56824d40059ded3e82145f16d7eb119dcf81cc3390ceb41a1bf65e9490a->leave($__internal_c83ae56824d40059ded3e82145f16d7eb119dcf81cc3390ceb41a1bf65e9490a_prof);

        
        $__internal_8ea67b83bdaf4fe10a7d731b4e49088f7e666aa86a08a847db6240931680e9c9->leave($__internal_8ea67b83bdaf4fe10a7d731b4e49088f7e666aa86a08a847db6240931680e9c9_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_ec4d2b97fd7fd058bc84ae97fd83b42dd9c6bde7229dc12c50e10414a3c812e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4d2b97fd7fd058bc84ae97fd83b42dd9c6bde7229dc12c50e10414a3c812e5->enter($__internal_ec4d2b97fd7fd058bc84ae97fd83b42dd9c6bde7229dc12c50e10414a3c812e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_6561fba2fb0623be3f87d13586a9b0e96786d3166533ed3b8855383d086145ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6561fba2fb0623be3f87d13586a9b0e96786d3166533ed3b8855383d086145ff->enter($__internal_6561fba2fb0623be3f87d13586a9b0e96786d3166533ed3b8855383d086145ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method") || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_6561fba2fb0623be3f87d13586a9b0e96786d3166533ed3b8855383d086145ff->leave($__internal_6561fba2fb0623be3f87d13586a9b0e96786d3166533ed3b8855383d086145ff_prof);

        
        $__internal_ec4d2b97fd7fd058bc84ae97fd83b42dd9c6bde7229dc12c50e10414a3c812e5->leave($__internal_ec4d2b97fd7fd058bc84ae97fd83b42dd9c6bde7229dc12c50e10414a3c812e5_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_f1140b0b9161db232db595ac24657691e7fd15292253b207ccda4e9f04156217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1140b0b9161db232db595ac24657691e7fd15292253b207ccda4e9f04156217->enter($__internal_f1140b0b9161db232db595ac24657691e7fd15292253b207ccda4e9f04156217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_f088aaf8c38fa51b3955ab71e69b6736a5028d0bf5102c619f58cf7827abc3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f088aaf8c38fa51b3955ab71e69b6736a5028d0bf5102c619f58cf7827abc3f9->enter($__internal_f088aaf8c38fa51b3955ab71e69b6736a5028d0bf5102c619f58cf7827abc3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_f088aaf8c38fa51b3955ab71e69b6736a5028d0bf5102c619f58cf7827abc3f9->leave($__internal_f088aaf8c38fa51b3955ab71e69b6736a5028d0bf5102c619f58cf7827abc3f9_prof);

        
        $__internal_f1140b0b9161db232db595ac24657691e7fd15292253b207ccda4e9f04156217->leave($__internal_f1140b0b9161db232db595ac24657691e7fd15292253b207ccda4e9f04156217_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_2e0f6b1b937cfded6a45b704c07c3eec4b0347441a37dd7c3cfe7d04aba4d396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0f6b1b937cfded6a45b704c07c3eec4b0347441a37dd7c3cfe7d04aba4d396->enter($__internal_2e0f6b1b937cfded6a45b704c07c3eec4b0347441a37dd7c3cfe7d04aba4d396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_c250a62e5d9842401271b6f6cce274a667395a479b2a8b2ea209a622c3350a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c250a62e5d9842401271b6f6cce274a667395a479b2a8b2ea209a622c3350a92->enter($__internal_c250a62e5d9842401271b6f6cce274a667395a479b2a8b2ea209a622c3350a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_c250a62e5d9842401271b6f6cce274a667395a479b2a8b2ea209a622c3350a92->leave($__internal_c250a62e5d9842401271b6f6cce274a667395a479b2a8b2ea209a622c3350a92_prof);

        
        $__internal_2e0f6b1b937cfded6a45b704c07c3eec4b0347441a37dd7c3cfe7d04aba4d396->leave($__internal_2e0f6b1b937cfded6a45b704c07c3eec4b0347441a37dd7c3cfe7d04aba4d396_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_2d3329f080324738a295f237b6fff2ccb101d51f74593c125f72126e2ff4009c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3329f080324738a295f237b6fff2ccb101d51f74593c125f72126e2ff4009c->enter($__internal_2d3329f080324738a295f237b6fff2ccb101d51f74593c125f72126e2ff4009c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d065e64a9c6553bc89c090a045b789ba8072ab0246e00c6950791cf18e09111c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d065e64a9c6553bc89c090a045b789ba8072ab0246e00c6950791cf18e09111c->enter($__internal_d065e64a9c6553bc89c090a045b789ba8072ab0246e00c6950791cf18e09111c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_d065e64a9c6553bc89c090a045b789ba8072ab0246e00c6950791cf18e09111c->leave($__internal_d065e64a9c6553bc89c090a045b789ba8072ab0246e00c6950791cf18e09111c_prof);

        
        $__internal_2d3329f080324738a295f237b6fff2ccb101d51f74593c125f72126e2ff4009c->leave($__internal_2d3329f080324738a295f237b6fff2ccb101d51f74593c125f72126e2ff4009c_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cb057caf3f286ddff306a0b6e196343e3170d613c19c367a7e87311d3fb5b773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cb057caf3f286ddff306a0b6e196343e3170d613c19c367a7e87311d3fb5b773->enter($__internal_cb057caf3f286ddff306a0b6e196343e3170d613c19c367a7e87311d3fb5b773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_ecb708c7cc1587417c1e5f4b7b4454bcb1d8a6ab7101059711abb61c1f39d0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ecb708c7cc1587417c1e5f4b7b4454bcb1d8a6ab7101059711abb61c1f39d0d4->enter($__internal_ecb708c7cc1587417c1e5f4b7b4454bcb1d8a6ab7101059711abb61c1f39d0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_ecb708c7cc1587417c1e5f4b7b4454bcb1d8a6ab7101059711abb61c1f39d0d4->leave($__internal_ecb708c7cc1587417c1e5f4b7b4454bcb1d8a6ab7101059711abb61c1f39d0d4_prof);

            
            $__internal_cb057caf3f286ddff306a0b6e196343e3170d613c19c367a7e87311d3fb5b773->leave($__internal_cb057caf3f286ddff306a0b6e196343e3170d613c19c367a7e87311d3fb5b773_prof);

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
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
