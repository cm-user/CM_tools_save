<?php

/* @Marketing/inky/title_3_products.block.html */
class __TwigTemplate_e08a7713bd9a3abd645279db7e170531cd0f0950b6e632fb61260b6351ccc9a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array()))) : (""))) {
            // line 2
            echo "    <row>
        <columns small=\"12\" large=\"12\">
            <h2 class=\"no-margin ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cssTitle", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array()), "html", null, true);
            echo "</h2>
        </columns>
    </row>
";
        }
        // line 8
        echo "<row class=\"product\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "newsletterProduct", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "        <columns small=\"12\" large=\"4\">
            <row>
                <columns small=\"12\" large=\"12\" class=\"white\">
                    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
            echo "\">
                        <img class=\"text-center\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "picture", array()), "html", null, true);
            echo "\">
                    </a>
                </columns>
            </row>
            <row>
                <columns small=\"12\" large=\"12\" class=\"white\">
                    <p class=\"text-center title no-margin ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "cssTitle", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
            echo "</p>
                </columns>
            </row>
            ";
            // line 23
            if ($this->getAttribute($context["product"], "description", array())) {
                // line 24
                echo "            <row>
                <columns small=\"12\" large=\"12\" class=\"white\">
                    <p class=\"text-center no-margin\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
                echo "</p>
                </columns>
            </row>
            ";
            }
            // line 30
            echo "            <row>
                <columns small=\"12\" large=\"12\" class=\"white\">
                    <p class=\"text-center price no-margin\">";
            // line 32
            if (($this->getAttribute($context["product"], "price", array()) > $this->getAttribute($context["product"], "priceOld", array()))) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "cssTitle", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "priceOld", array()), "html", null, true);
                echo " €</span> <span class=\"barre\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo " €</span>";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo " €";
            }
            echo "</p>
                </columns>
            </row>
            <row>
                <columns small=\"12\" large=\"12\" class=\"white\">
                    <button class=\"medium btn\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "link", array()), "html", null, true);
            echo "\">Voir le produit</button>
                </columns>
            </row>
        </columns>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</row>";
    }

    public function getTemplateName()
    {
        return "@Marketing/inky/title_3_products.block.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  103 => 37,  84 => 32,  80 => 30,  73 => 26,  69 => 24,  67 => 23,  59 => 20,  50 => 14,  46 => 13,  41 => 10,  37 => 9,  34 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Marketing/inky/title_3_products.block.html", "/home/cadeau-maestro/tools/src/MarketingBundle/Resources/views/inky/title_3_products.block.html");
    }
}
