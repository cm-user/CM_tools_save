<?php

/* UserBundle:Menu:knp_menu.html.twig */
class __TwigTemplate_89c5564e1c084ff552c3550ce7086aa1ce9ea8b2b40fb07a3c1b4a4c2b693b1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "UserBundle:Menu:knp_menu.html.twig", 1);
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
        $__internal_af5c3be0a4fa2e57200c577a207a36001cbf6c7834e47f186a0ef4ffb1887d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5c3be0a4fa2e57200c577a207a36001cbf6c7834e47f186a0ef4ffb1887d9a->enter($__internal_af5c3be0a4fa2e57200c577a207a36001cbf6c7834e47f186a0ef4ffb1887d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Menu:knp_menu.html.twig"));

        $__internal_43ca806141ca15ebd4dd8c28bb58da1a02f6e2ed6dd02614ca0e26b42f1782a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ca806141ca15ebd4dd8c28bb58da1a02f6e2ed6dd02614ca0e26b42f1782a9->enter($__internal_43ca806141ca15ebd4dd8c28bb58da1a02f6e2ed6dd02614ca0e26b42f1782a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Menu:knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af5c3be0a4fa2e57200c577a207a36001cbf6c7834e47f186a0ef4ffb1887d9a->leave($__internal_af5c3be0a4fa2e57200c577a207a36001cbf6c7834e47f186a0ef4ffb1887d9a_prof);

        
        $__internal_43ca806141ca15ebd4dd8c28bb58da1a02f6e2ed6dd02614ca0e26b42f1782a9->leave($__internal_43ca806141ca15ebd4dd8c28bb58da1a02f6e2ed6dd02614ca0e26b42f1782a9_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_6541008ff7ff9134d9ad999c0559b4d1632e2da744e9bd2f20ce329398a2147c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6541008ff7ff9134d9ad999c0559b4d1632e2da744e9bd2f20ce329398a2147c->enter($__internal_6541008ff7ff9134d9ad999c0559b4d1632e2da744e9bd2f20ce329398a2147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_60acb91f895d1f99f64663bb8fc95c754ba9a1d9176b31900ef3008a374a6704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60acb91f895d1f99f64663bb8fc95c754ba9a1d9176b31900ef3008a374a6704->enter($__internal_60acb91f895d1f99f64663bb8fc95c754ba9a1d9176b31900ef3008a374a6704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        echo "\t";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "UserBundle:Menu:knp_menu.html.twig", 4);
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
        
        $__internal_60acb91f895d1f99f64663bb8fc95c754ba9a1d9176b31900ef3008a374a6704->leave($__internal_60acb91f895d1f99f64663bb8fc95c754ba9a1d9176b31900ef3008a374a6704_prof);

        
        $__internal_6541008ff7ff9134d9ad999c0559b4d1632e2da744e9bd2f20ce329398a2147c->leave($__internal_6541008ff7ff9134d9ad999c0559b4d1632e2da744e9bd2f20ce329398a2147c_prof);

    }

    // line 67
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_288abd6f1bebb3b12df2383aa04f030192b53318aa42b6f06f7cb75adf860ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288abd6f1bebb3b12df2383aa04f030192b53318aa42b6f06f7cb75adf860ff2->enter($__internal_288abd6f1bebb3b12df2383aa04f030192b53318aa42b6f06f7cb75adf860ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_e54c4ee73ea9371350e8c459437638227ab17257a2dc55eaa15ad09d047271bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54c4ee73ea9371350e8c459437638227ab17257a2dc55eaa15ad09d047271bd->enter($__internal_e54c4ee73ea9371350e8c459437638227ab17257a2dc55eaa15ad09d047271bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

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
        
        $__internal_e54c4ee73ea9371350e8c459437638227ab17257a2dc55eaa15ad09d047271bd->leave($__internal_e54c4ee73ea9371350e8c459437638227ab17257a2dc55eaa15ad09d047271bd_prof);

        
        $__internal_288abd6f1bebb3b12df2383aa04f030192b53318aa42b6f06f7cb75adf860ff2->leave($__internal_288abd6f1bebb3b12df2383aa04f030192b53318aa42b6f06f7cb75adf860ff2_prof);

    }

    // line 75
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_4949cadc0e168980932a47d60726158661fffe5c1a82947a9cf33ebbc8c002e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4949cadc0e168980932a47d60726158661fffe5c1a82947a9cf33ebbc8c002e9->enter($__internal_4949cadc0e168980932a47d60726158661fffe5c1a82947a9cf33ebbc8c002e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_91e43f3f48d0b40ec7fb506bbd13af4a9f8b7393dedc62860fd47b01819725c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e43f3f48d0b40ec7fb506bbd13af4a9f8b7393dedc62860fd47b01819725c6->enter($__internal_91e43f3f48d0b40ec7fb506bbd13af4a9f8b7393dedc62860fd47b01819725c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

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
        
        $__internal_91e43f3f48d0b40ec7fb506bbd13af4a9f8b7393dedc62860fd47b01819725c6->leave($__internal_91e43f3f48d0b40ec7fb506bbd13af4a9f8b7393dedc62860fd47b01819725c6_prof);

        
        $__internal_4949cadc0e168980932a47d60726158661fffe5c1a82947a9cf33ebbc8c002e9->leave($__internal_4949cadc0e168980932a47d60726158661fffe5c1a82947a9cf33ebbc8c002e9_prof);

    }

    // line 84
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_a89161f81d77a568541cb0870b289a38e967ad4578865a06107663643dfb87fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89161f81d77a568541cb0870b289a38e967ad4578865a06107663643dfb87fd->enter($__internal_a89161f81d77a568541cb0870b289a38e967ad4578865a06107663643dfb87fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_5a1437976a64be4da8cb3043dcd60f227e7e59a0282e5b425f016a8ae2dcd98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1437976a64be4da8cb3043dcd60f227e7e59a0282e5b425f016a8ae2dcd98c->enter($__internal_5a1437976a64be4da8cb3043dcd60f227e7e59a0282e5b425f016a8ae2dcd98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

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
        
        $__internal_5a1437976a64be4da8cb3043dcd60f227e7e59a0282e5b425f016a8ae2dcd98c->leave($__internal_5a1437976a64be4da8cb3043dcd60f227e7e59a0282e5b425f016a8ae2dcd98c_prof);

        
        $__internal_a89161f81d77a568541cb0870b289a38e967ad4578865a06107663643dfb87fd->leave($__internal_a89161f81d77a568541cb0870b289a38e967ad4578865a06107663643dfb87fd_prof);

    }

    // line 93
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_25aec46ef7aacfb1c0be33f87bb415192f3c6f57109dd75aa1d68bff922d7811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25aec46ef7aacfb1c0be33f87bb415192f3c6f57109dd75aa1d68bff922d7811->enter($__internal_25aec46ef7aacfb1c0be33f87bb415192f3c6f57109dd75aa1d68bff922d7811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_719b4d7fbee73a252655156e629cb74538a123012385fdf94467f4e6450bb2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719b4d7fbee73a252655156e629cb74538a123012385fdf94467f4e6450bb2e4->enter($__internal_719b4d7fbee73a252655156e629cb74538a123012385fdf94467f4e6450bb2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

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
        
        $__internal_719b4d7fbee73a252655156e629cb74538a123012385fdf94467f4e6450bb2e4->leave($__internal_719b4d7fbee73a252655156e629cb74538a123012385fdf94467f4e6450bb2e4_prof);

        
        $__internal_25aec46ef7aacfb1c0be33f87bb415192f3c6f57109dd75aa1d68bff922d7811->leave($__internal_25aec46ef7aacfb1c0be33f87bb415192f3c6f57109dd75aa1d68bff922d7811_prof);

    }

    // line 108
    public function block_label($context, array $blocks = array())
    {
        $__internal_727a433588bd3fa5cad732ab49ca8d39c0c7bf81b2f71b1a9ba0c51b439277bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727a433588bd3fa5cad732ab49ca8d39c0c7bf81b2f71b1a9ba0c51b439277bd->enter($__internal_727a433588bd3fa5cad732ab49ca8d39c0c7bf81b2f71b1a9ba0c51b439277bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_03085b353397cdbc3c97f9a930059d40d26acd0859935f4bd62b8f811cd4d21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03085b353397cdbc3c97f9a930059d40d26acd0859935f4bd62b8f811cd4d21a->enter($__internal_03085b353397cdbc3c97f9a930059d40d26acd0859935f4bd62b8f811cd4d21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array())), "html", null, true);
        
        $__internal_03085b353397cdbc3c97f9a930059d40d26acd0859935f4bd62b8f811cd4d21a->leave($__internal_03085b353397cdbc3c97f9a930059d40d26acd0859935f4bd62b8f811cd4d21a_prof);

        
        $__internal_727a433588bd3fa5cad732ab49ca8d39c0c7bf81b2f71b1a9ba0c51b439277bd->leave($__internal_727a433588bd3fa5cad732ab49ca8d39c0c7bf81b2f71b1a9ba0c51b439277bd_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Menu:knp_menu.html.twig";
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
", "UserBundle:Menu:knp_menu.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle/Resources/views/Menu/knp_menu.html.twig");
    }
}
