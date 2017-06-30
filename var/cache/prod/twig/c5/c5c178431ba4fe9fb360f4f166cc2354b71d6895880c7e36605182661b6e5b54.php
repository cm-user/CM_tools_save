<?php

/* @HampeZurbInk/Examples/basic.html.twig */
class __TwigTemplate_79da0a8b8cd80ea1b251a11e14639761b8f475db602b8f5733c950b6bdd33651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HampeZurbInkBundle::base.html.twig", "@HampeZurbInk/Examples/basic.html.twig", 1);
        $this->blocks = array(
            'preHtml' => array($this, 'block_preHtml'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'contentTop' => array($this, 'block_contentTop'),
            'contentTopInner' => array($this, 'block_contentTopInner'),
            'contentPanel' => array($this, 'block_contentPanel'),
            'contentPanelInner' => array($this, 'block_contentPanelInner'),
            'socialBlock' => array($this, 'block_socialBlock'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HampeZurbInkBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? null), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/basic.css"), "method"), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>
";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "<br>
<table class=\"container\">
    <tr>
        <td>
        ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "        </td>
    </tr>
</table>

</center>
</td>
</tr>
</table>
";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->loadTemplate("@HampeZurbInk/Examples/basic.html.twig", "@HampeZurbInk/Examples/basic.html.twig", 11, "2146999257")->display($context);
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        $this->displayBlock('contentTop', $context, $blocks);
        // line 44
        echo "            ";
        $this->displayBlock('contentPanel', $context, $blocks);
        // line 64
        echo "
            ";
        // line 65
        $this->displayBlock('socialBlock', $context, $blocks);
        // line 70
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "
            <!-- container end below -->
        ";
    }

    // line 22
    public function block_contentTop($context, array $blocks = array())
    {
        // line 23
        echo "            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    ";
        // line 30
        $this->displayBlock('contentTopInner', $context, $blocks);
        // line 35
        echo "                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            ";
    }

    // line 30
    public function block_contentTopInner($context, array $blocks = array())
    {
        // line 31
        echo "                                    <h1>Hi, Susan Calvin</h1>
                                    <p class=\"lead\">Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae.</p>
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. consequat vel lacus. Sed iaculis pulvinar ligula, ornare fringilla ante viverra et. In hac habitasse platea dictumst. Donec vel orci mi, eu congue justo. Integer eget odio est, eget malesuada lorem. Aenean sed tellus dui, vitae viverra risus. Nullam massa sapien, pulvinar eleifend fringilla id, convallis eget nisi. Mauris a sagittis dui. Pellentesque non lacinia mi. Fusce sit amet libero sit amet erat venenatis sollicitudin vitae vel eros. Cras nunc sapien, interdum sit amet porttitor ut, congue quis urna.</p>
                                    ";
    }

    // line 44
    public function block_contentPanel($context, array $blocks = array())
    {
        // line 45
        echo "            <table class=\"row callout\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td class=\"panel\">
                                    ";
        // line 52
        $this->displayBlock('contentPanelInner', $context, $blocks);
        // line 55
        echo "                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            ";
    }

    // line 52
    public function block_contentPanelInner($context, array $blocks = array())
    {
        // line 53
        echo "                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>
                                    ";
    }

    // line 65
    public function block_socialBlock($context, array $blocks = array())
    {
        // line 66
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/basic.html.twig", "@HampeZurbInk/Examples/basic.html.twig", 66, "1703775799")->display($context);
        // line 69
        echo "            ";
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/basic.html.twig", "@HampeZurbInk/Examples/basic.html.twig", 71, "1426584927")->display($context);
        // line 74
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 74,  192 => 71,  189 => 70,  185 => 69,  182 => 66,  179 => 65,  174 => 53,  171 => 52,  159 => 55,  157 => 52,  148 => 45,  145 => 44,  138 => 31,  135 => 30,  123 => 35,  121 => 30,  112 => 23,  109 => 22,  103 => 75,  100 => 70,  98 => 65,  95 => 64,  92 => 44,  89 => 22,  86 => 21,  81 => 11,  78 => 10,  66 => 78,  64 => 21,  58 => 17,  56 => 10,  50 => 6,  47 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\basic.html.twig");
    }
}


/* @HampeZurbInk/Examples/basic.html.twig */
class __TwigTemplate_79da0a8b8cd80ea1b251a11e14639761b8f475db602b8f5733c950b6bdd33651_2146999257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:header.html.twig", "@HampeZurbInk/Examples/basic.html.twig", 11);
        $this->blocks = array(
            'headerColRight' => array($this, 'block_headerColRight'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HampeZurbInkBundle:Partials:header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_headerColRight($context, array $blocks = array())
    {
        // line 13
        echo "            <span class=\"template-label\">Basic</span>
        ";
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 13,  253 => 12,  236 => 11,  195 => 74,  192 => 71,  189 => 70,  185 => 69,  182 => 66,  179 => 65,  174 => 53,  171 => 52,  159 => 55,  157 => 52,  148 => 45,  145 => 44,  138 => 31,  135 => 30,  123 => 35,  121 => 30,  112 => 23,  109 => 22,  103 => 75,  100 => 70,  98 => 65,  95 => 64,  92 => 44,  89 => 22,  86 => 21,  81 => 11,  78 => 10,  66 => 78,  64 => 21,  58 => 17,  56 => 10,  50 => 6,  47 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\basic.html.twig");
    }
}


/* @HampeZurbInk/Examples/basic.html.twig */
class __TwigTemplate_79da0a8b8cd80ea1b251a11e14639761b8f475db602b8f5733c950b6bdd33651_1703775799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 66
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:socialPanel.html.twig", "@HampeZurbInk/Examples/basic.html.twig", 66);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "HampeZurbInkBundle:Partials:socialPanel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 66,  256 => 13,  253 => 12,  236 => 11,  195 => 74,  192 => 71,  189 => 70,  185 => 69,  182 => 66,  179 => 65,  174 => 53,  171 => 52,  159 => 55,  157 => 52,  148 => 45,  145 => 44,  138 => 31,  135 => 30,  123 => 35,  121 => 30,  112 => 23,  109 => 22,  103 => 75,  100 => 70,  98 => 65,  95 => 64,  92 => 44,  89 => 22,  86 => 21,  81 => 11,  78 => 10,  66 => 78,  64 => 21,  58 => 17,  56 => 10,  50 => 6,  47 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\basic.html.twig");
    }
}


/* @HampeZurbInk/Examples/basic.html.twig */
class __TwigTemplate_79da0a8b8cd80ea1b251a11e14639761b8f475db602b8f5733c950b6bdd33651_1426584927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 71
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:footer.html.twig", "@HampeZurbInk/Examples/basic.html.twig", 71);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "HampeZurbInkBundle:Partials:footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 71,  298 => 66,  256 => 13,  253 => 12,  236 => 11,  195 => 74,  192 => 71,  189 => 70,  185 => 69,  182 => 66,  179 => 65,  174 => 53,  171 => 52,  159 => 55,  157 => 52,  148 => 45,  145 => 44,  138 => 31,  135 => 30,  123 => 35,  121 => 30,  112 => 23,  109 => 22,  103 => 75,  100 => 70,  98 => 65,  95 => 64,  92 => 44,  89 => 22,  86 => 21,  81 => 11,  78 => 10,  66 => 78,  64 => 21,  58 => 17,  56 => 10,  50 => 6,  47 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\basic.html.twig");
    }
}
