<?php

/* @Shop/Form/field.html.twig */
class __TwigTemplate_6c866f15a40ddd89b59cbe4e3f432acae68e0f5b9f8c34f828db15b5c122408c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "@Shop/Form/field.html.twig", 1);
        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
            'view_widget' => array($this, 'block_view_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        ob_start();
        // line 26
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 27
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')));
            // line 28
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? null), "vars", array()), "name", array())));
            // line 29
            echo "        ";
        }
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-allow-add" => ((($context["allow_add"] ?? null)) ? (1) : (0))));
        // line 31
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-allow-remove" => ((($context["allow_delete"] ?? null)) ? (1) : (0))));
        // line 32
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-name-prefix" => ($context["full_name"] ?? null)));
        // line 33
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 37
    public function block_view_widget($context, array $blocks = array())
    {
        // line 38
        echo "<p class=\"form-control-static\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "@Shop/Form/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 38,  64 => 37,  56 => 33,  53 => 32,  50 => 31,  47 => 30,  44 => 29,  41 => 28,  38 => 27,  35 => 26,  32 => 25,  29 => 24,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Shop/Form/field.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\Form\\field.html.twig");
    }
}
