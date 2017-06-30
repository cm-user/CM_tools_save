<?php

/* UserBundle:Menu:knp_menu.html.twig */
class __TwigTemplate_5fb8a6b7585648644e36d664f27aa3b64b7824655b952f706b0f1ce19a7b0b63 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "UserBundle:Menu:knp_menu.html.twig", 4);
        // line 5
        echo "\t";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
\t\t";
            // line 12
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if ((isset($context["divider_prepend"]) ? $context["divider_prepend"] : null)) {
                // line 15
                echo "\t\t\t";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
\t\t";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 20
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) {
                // line 21
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 22
(isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth", array())), "method")) {
                // line 23
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass", array())));
            }
            // line 25
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst", array())) {
                // line 26
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass", array())));
            }
            // line 28
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast", array())) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass", array())));
            }
            // line 31
            echo "
\t\t";
            // line 33
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 34
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()))));
            // line 35
            echo "
\t\t";
            // line 37
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : null)) {
                // line 38
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "dropdown"));
                // line 39
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => "dropdown-menu"));
            }
            // line 41
            echo "
\t\t";
            // line 43
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : null))) {
                // line 44
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 46
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 47
            echo "
\t\t";
            // line 49
            echo "\t\t<li";
            echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 50
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : null)) {
                // line 51
                echo "\t\t\t\t";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 52
(isset($context["item"]) ? $context["item"] : null), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink", array())))) {
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
            if ((isset($context["divider_append"]) ? $context["divider_append"] : null)) {
                // line 62
                echo "\t\t\t";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 64
            echo "\t";
        }
    }

    // line 67
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 68
        echo "\t";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) == 1)) {
            // line 69
            echo "\t\t<li class=\"divider-vertical\"></li>
\t";
        } else {
            // line 71
            echo "\t\t<li class=\"divider\"></li>
\t";
        }
    }

    // line 75
    public function block_linkElement($context, array $blocks = array())
    {
        // line 76
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", array())), "method");
        echo ">
\t\t";
        // line 77
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method"))) {
            // line 78
            echo "\t\t\t<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
\t\t";
        }
        // line 80
        echo "\t\t";
        $this->displayBlock("label", $context, $blocks);
        echo "
\t</a>
";
    }

    // line 84
    public function block_spanElement($context, array $blocks = array())
    {
        // line 85
        echo "\t<span>";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes", array())), "method");
        echo ">
\t\t";
        // line 86
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method"))) {
            // line 87
            echo "\t\t\t<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
\t\t";
        }
        // line 89
        echo "\t\t";
        $this->displayBlock("label", $context, $blocks);
        echo "
\t</span>
";
    }

    // line 93
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 94
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 95
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => "dropdown-toggle"));
        // line 96
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", array());
        // line 97
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
        // line 98
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("data-toggle" => "dropdown"));
        // line 99
        echo "\t<a href=\"#\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : null)), "method");
        echo ">
\t\t";
        // line 100
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method"))) {
            // line 101
            echo "\t\t\t<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method"), "html", null, true);
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
    }

    // line 108
    public function block_label($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array())), "html", null, true);
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
        return array (  253 => 108,  244 => 103,  238 => 101,  236 => 100,  231 => 99,  229 => 98,  227 => 97,  225 => 96,  223 => 95,  221 => 94,  218 => 93,  210 => 89,  204 => 87,  202 => 86,  197 => 85,  194 => 84,  186 => 80,  180 => 78,  178 => 77,  171 => 76,  168 => 75,  162 => 71,  158 => 69,  155 => 68,  152 => 67,  147 => 64,  143 => 62,  141 => 61,  136 => 58,  134 => 57,  130 => 55,  126 => 53,  124 => 52,  121 => 51,  119 => 50,  115 => 49,  112 => 47,  110 => 46,  107 => 44,  105 => 43,  102 => 41,  99 => 39,  97 => 38,  95 => 37,  92 => 35,  90 => 34,  88 => 33,  85 => 31,  82 => 29,  80 => 28,  77 => 26,  75 => 25,  72 => 23,  70 => 22,  68 => 21,  66 => 20,  64 => 19,  61 => 17,  57 => 15,  55 => 14,  53 => 12,  50 => 10,  48 => 9,  46 => 8,  44 => 7,  42 => 6,  39 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Menu:knp_menu.html.twig", "/home/cadeau-maestro/tools/vendor/unicorn/user-bundle/Unicorn/Bundle/UserBundle/Resources/views/Menu/knp_menu.html.twig");
    }
}
