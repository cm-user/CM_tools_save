<?php

/* @Marketing/inky/menu.html */
class __TwigTemplate_97f285c57138702c6b26c889c915a5df6dc6d1ae2aa1414c68fcd03727419ed0 extends Twig_Template
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
        echo "<row>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 3
            echo "        <columns small=\"12\" large=\"4\">
            <button class=\"large expand grey no-margin\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "title", array()), "html", null, true);
            echo "</button>
        </columns>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</row>";
    }

    public function getTemplateName()
    {
        return "@Marketing/inky/menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Marketing/inky/menu.html", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\inky\\menu.html");
    }
}
