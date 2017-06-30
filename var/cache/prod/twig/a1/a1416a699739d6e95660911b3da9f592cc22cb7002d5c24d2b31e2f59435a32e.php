<?php

/* HampeZurbInkBundle:Partials:socialPanel.html.twig */
class __TwigTemplate_e8cf38dedc94d29a4a5e6db22ca57d0440e62e2cc7ab003349e1343341968052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'socialPanelLeft' => array($this, 'block_socialPanelLeft'),
            'socialPanelFacbook' => array($this, 'block_socialPanelFacbook'),
            'socialPanelFacbookLink' => array($this, 'block_socialPanelFacbookLink'),
            'socialPanelTwitter' => array($this, 'block_socialPanelTwitter'),
            'socialPanelTwitterLink' => array($this, 'block_socialPanelTwitterLink'),
            'socialPanelGPlus' => array($this, 'block_socialPanelGPlus'),
            'socialPanelGPlusLink' => array($this, 'block_socialPanelGPlusLink'),
            'contentFooterRight' => array($this, 'block_contentFooterRight'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table class=\"row footer\">
    <tr>
        <td class=\"wrapper\">

            <table class=\"six columns\">
                <tr>
                    <td class=\"left-text-pad\">
                        ";
        // line 8
        $this->displayBlock('socialPanelLeft', $context, $blocks);
        // line 48
        echo "                    </td>
                    <td class=\"expander\"></td>
                </tr>
            </table>

        </td>
        <td class=\"wrapper last\">

            <table class=\"six columns\">
                <tr>
                    <td class=\"last right-text-pad\">
                        ";
        // line 59
        $this->displayBlock('contentFooterRight', $context, $blocks);
        // line 64
        echo "                    </td>
                    <td class=\"expander\"></td>
                </tr>
            </table>

        </td>
    </tr>
</table>";
    }

    // line 8
    public function block_socialPanelLeft($context, array $blocks = array())
    {
        // line 9
        echo "                            <h5>Connect With Us:</h5>
                            ";
        // line 10
        $this->displayBlock('socialPanelFacbook', $context, $blocks);
        // line 21
        echo "                            <br>
                            ";
        // line 22
        $this->displayBlock('socialPanelTwitter', $context, $blocks);
        // line 33
        echo "
                            <br>
                            ";
        // line 35
        $this->displayBlock('socialPanelGPlus', $context, $blocks);
        // line 46
        echo "
                        ";
    }

    // line 10
    public function block_socialPanelFacbook($context, array $blocks = array())
    {
        // line 11
        echo "                            <table class=\"tiny-button facebook\">
                                <tr>
                                    <td>
                                        ";
        // line 14
        $this->displayBlock('socialPanelFacbookLink', $context, $blocks);
        // line 17
        echo "                                    </td>
                                </tr>
                            </table>
                            ";
    }

    // line 14
    public function block_socialPanelFacbookLink($context, array $blocks = array())
    {
        // line 15
        echo "                                        <a href=\"#\">Facebook</a>
                                        ";
    }

    // line 22
    public function block_socialPanelTwitter($context, array $blocks = array())
    {
        // line 23
        echo "                            <table class=\"tiny-button twitter\">
                                <tr>
                                    <td>
                                        ";
        // line 26
        $this->displayBlock('socialPanelTwitterLink', $context, $blocks);
        // line 29
        echo "                                    </td>
                                </tr>
                            </table>
                            ";
    }

    // line 26
    public function block_socialPanelTwitterLink($context, array $blocks = array())
    {
        // line 27
        echo "                                        <a href=\"#\">Twitter</a>
                                        ";
    }

    // line 35
    public function block_socialPanelGPlus($context, array $blocks = array())
    {
        // line 36
        echo "                            <table class=\"tiny-button google-plus\">
                                <tr>
                                    <td>
                                        ";
        // line 39
        $this->displayBlock('socialPanelGPlusLink', $context, $blocks);
        // line 42
        echo "                                    </td>
                                </tr>
                            </table>
                            ";
    }

    // line 39
    public function block_socialPanelGPlusLink($context, array $blocks = array())
    {
        // line 40
        echo "                                        <a href=\"#\">Google +</a>
                                        ";
    }

    // line 59
    public function block_contentFooterRight($context, array $blocks = array())
    {
        // line 60
        echo "                            <h5>Contact Info:</h5>
                            <p>Phone: 408.341.0600</p>
                            <p>Email: <a href=\"mailto:hseldon@trantor.com\">hseldon@trantor.com</a></p>
                        ";
    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Partials:socialPanel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  163 => 59,  158 => 40,  155 => 39,  148 => 42,  146 => 39,  141 => 36,  138 => 35,  133 => 27,  130 => 26,  123 => 29,  121 => 26,  116 => 23,  113 => 22,  108 => 15,  105 => 14,  98 => 17,  96 => 14,  91 => 11,  88 => 10,  83 => 46,  81 => 35,  77 => 33,  75 => 22,  72 => 21,  70 => 10,  67 => 9,  64 => 8,  53 => 64,  51 => 59,  38 => 48,  36 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HampeZurbInkBundle:Partials:socialPanel.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Partials/socialPanel.html.twig");
    }
}
