<?php

/* @Marketing/inky/title_3_products.block.html */
class __TwigTemplate_978dd3b722100f9e6176eada4b949653c4d3343e2d60af8e5686b788eb90c540 extends Twig_Template
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
        $__internal_c74909f9633469bb857ad32bc11bd3e610362e2b81cea60d69026f4adacc943e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74909f9633469bb857ad32bc11bd3e610362e2b81cea60d69026f4adacc943e->enter($__internal_c74909f9633469bb857ad32bc11bd3e610362e2b81cea60d69026f4adacc943e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/inky/title_3_products.block.html"));

        $__internal_e10d4a332ff81830bf7902e99f3eb70d571c37e9f92cc41e7d0df7525d7c0eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10d4a332ff81830bf7902e99f3eb70d571c37e9f92cc41e7d0df7525d7c0eab->enter($__internal_e10d4a332ff81830bf7902e99f3eb70d571c37e9f92cc41e7d0df7525d7c0eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/inky/title_3_products.block.html"));

        // line 1
        if ((($this->getAttribute(($context["block"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["block"] ?? null), "title", array()))) : (""))) {
            // line 2
            echo "    <row>
        <columns small=\"12\" large=\"12\">
            <h2 class=\"no-margin ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "cssTitle", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "title", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "newsletterProduct", array()));
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "cssTitle", array()), "html", null, true);
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
        
        $__internal_c74909f9633469bb857ad32bc11bd3e610362e2b81cea60d69026f4adacc943e->leave($__internal_c74909f9633469bb857ad32bc11bd3e610362e2b81cea60d69026f4adacc943e_prof);

        
        $__internal_e10d4a332ff81830bf7902e99f3eb70d571c37e9f92cc41e7d0df7525d7c0eab->leave($__internal_e10d4a332ff81830bf7902e99f3eb70d571c37e9f92cc41e7d0df7525d7c0eab_prof);

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
        return array (  120 => 42,  109 => 37,  90 => 32,  86 => 30,  79 => 26,  75 => 24,  73 => 23,  65 => 20,  56 => 14,  52 => 13,  47 => 10,  43 => 9,  40 => 8,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if block.title|default %}
    <row>
        <columns small=\"12\" large=\"12\">
            <h2 class=\"no-margin {{ block.cssTitle }}\">{{ block.title }}</h2>
        </columns>
    </row>
{% endif %}
<row class=\"product\">
    {% for product in block.newsletterProduct %}
        <columns small=\"12\" large=\"4\">
            <row>
                <columns small=\"12\" large=\"12\" class=\"white\">
                    <a href=\"{{ product.link }}\">
                        <img class=\"text-center\" src=\"{{ product.picture }}\">
                    </a>
                </columns>
            </row>
            <row>
                <columns small=\"12\" large=\"12\" class=\"white\">
                    <p class=\"text-center title no-margin {{ product.cssTitle }}\">{{ product.title }}</p>
                </columns>
            </row>
            {% if product.description %}
            <row>
                <columns small=\"12\" large=\"12\" class=\"white\">
                    <p class=\"text-center no-margin\">{{ product.description }}</p>
                </columns>
            </row>
            {% endif %}
            <row>
                <columns small=\"12\" large=\"12\" class=\"white\">
                    <p class=\"text-center price no-margin\">{%if product.price > product.priceOld %}<span class=\"{{ block.cssTitle }}\">{{ product.priceOld }} €</span> <span class=\"barre\">{{ product.price }} €</span>{% else %}{{ product.price }} €{% endif %}</p>
                </columns>
            </row>
            <row>
                <columns small=\"12\" large=\"12\" class=\"white\">
                    <button class=\"medium btn\" href=\"{{ product.link }}\">Voir le produit</button>
                </columns>
            </row>
        </columns>
    {% endfor %}
</row>", "@Marketing/inky/title_3_products.block.html", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\inky\\title_3_products.block.html");
    }
}
