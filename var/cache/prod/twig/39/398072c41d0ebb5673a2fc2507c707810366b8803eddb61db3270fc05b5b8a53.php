<?php

/* MarketingBundle:Form:field.html.twig */
class __TwigTemplate_e6624056ca6c2b9eeb910021ad1227ae4cadbd2ac8e2f2b6bf86f5ac656333fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "MarketingBundle:Form:field.html.twig", 1);
        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
            'search_button_widget' => array($this, 'block_search_button_widget'),
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
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'row')));
            // line 28
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "vars", array()), "name", array())));
            // line 29
            echo "        ";
        }
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-allow-add" => (((isset($context["allow_add"]) ? $context["allow_add"] : null)) ? (1) : (0))));
        // line 31
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-allow-remove" => (((isset($context["allow_delete"]) ? $context["allow_delete"] : null)) ? (1) : (0))));
        // line 32
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-name-prefix" => (isset($context["full_name"]) ? $context["full_name"] : null)));
        // line 33
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 37
    public function block_search_button_widget($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"input-group\">";
        // line 39
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 40
        echo "<span class=\"input-group-btn\">
            <button class=\"btn btn-default";
        // line 41
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array())) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "html", null, true);
        }
        echo "\" type=\"button\">";
        echo twig_escape_filter($this->env, (isset($context["search_button_word"]) ? $context["search_button_word"] : null), "html", null, true);
        echo "</button>
        </span>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MarketingBundle:Form:field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 41,  71 => 40,  69 => 39,  67 => 38,  64 => 37,  56 => 33,  53 => 32,  50 => 31,  47 => 30,  44 => 29,  41 => 28,  38 => 27,  35 => 26,  32 => 25,  29 => 24,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MarketingBundle:Form:field.html.twig", "/home/cadeau-maestro/tools/src/MarketingBundle/Resources/views/Form/field.html.twig");
    }
}
