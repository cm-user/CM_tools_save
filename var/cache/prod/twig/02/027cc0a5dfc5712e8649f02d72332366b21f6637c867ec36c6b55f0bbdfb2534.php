<?php

/* @HampeZurbInk/Partials/footer.html.twig */
class __TwigTemplate_62cbca86e4196067dbf487433577e3960ba4f4f9bda05155faa2b7e5a1558b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footerInner' => array($this, 'block_footerInner'),
            'footerLinks' => array($this, 'block_footerLinks'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table class=\"row\">
    <tr>
        <td class=\"wrapper last\">

            <table class=\"twelve columns\">
                <tr>
                    <td align=\"center\">
                        ";
        // line 8
        $this->displayBlock('footerInner', $context, $blocks);
        // line 17
        echo "                    </td>
                    <td class=\"expander\"></td>
                </tr>
            </table>

        </td>
    </tr>
</table>";
    }

    // line 8
    public function block_footerInner($context, array $blocks = array())
    {
        // line 9
        echo "                            <center>
                                <p style=\"text-align:center;\">
                                    ";
        // line 11
        $this->displayBlock('footerLinks', $context, $blocks);
        // line 14
        echo "                                </p>
                            </center>
                        ";
    }

    // line 11
    public function block_footerLinks($context, array $blocks = array())
    {
        // line 12
        echo "                                    <a href=\"#\">Terms</a> | <a href=\"#\">Privacy</a> | <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                                    ";
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  58 => 11,  52 => 14,  50 => 11,  46 => 9,  43 => 8,  32 => 17,  30 => 8,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Partials/footer.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Partials\\footer.html.twig");
    }
}
