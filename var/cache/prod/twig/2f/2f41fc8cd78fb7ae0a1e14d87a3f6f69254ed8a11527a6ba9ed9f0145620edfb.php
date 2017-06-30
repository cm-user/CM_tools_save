<?php

/* @HampeZurbInk/Partials/header.html.twig */
class __TwigTemplate_804f53962053f097624621e118d21eb6d722684170d38b455b03e6d635bbf816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headerInner' => array($this, 'block_headerInner'),
            'headerColLeft' => array($this, 'block_headerColLeft'),
            'headerColRight' => array($this, 'block_headerColRight'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table class=\"row header\">
    <tr>
        <td class=\"center\" align=\"center\">
            <center>

                <table class=\"container\">
                    <tr>
                        <td class=\"wrapper last\">

                            <table class=\"twelve columns\">
                                <tr>
                                    ";
        // line 12
        $this->displayBlock('headerInner', $context, $blocks);
        // line 25
        echo "                                </tr>
                            </table>

                        </td>
                    </tr>
                </table>

            </center>
        </td>
    </tr>
</table>
";
    }

    // line 12
    public function block_headerInner($context, array $blocks = array())
    {
        // line 13
        echo "                                        <td class=\"six sub-columns\">
                                            ";
        // line 14
        $this->displayBlock('headerColLeft', $context, $blocks);
        // line 17
        echo "                                        </td>
                                        <td class=\"six sub-columns last\" align=\"right\" style=\"text-align:right; vertical-align:middle;\">
                                            ";
        // line 19
        $this->displayBlock('headerColRight', $context, $blocks);
        // line 22
        echo "                                        </td>
                                        <td class=\"expander\"></td>
                                    ";
    }

    // line 14
    public function block_headerColLeft($context, array $blocks = array())
    {
        // line 15
        echo "                                                <img src=\"http://placehold.it/200x50\">
                                            ";
    }

    // line 19
    public function block_headerColRight($context, array $blocks = array())
    {
        // line 20
        echo "                                                <span class=\"template-label\">HERO</span>
                                            ";
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Partials/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  80 => 19,  75 => 15,  72 => 14,  66 => 22,  64 => 19,  60 => 17,  58 => 14,  55 => 13,  52 => 12,  37 => 25,  35 => 12,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Partials/header.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Partials\\header.html.twig");
    }
}
