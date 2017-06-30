<?php

/* @HampeZurbInk/Examples/hero.html.twig */
class __TwigTemplate_f12731dd66866b688dd092bfe6b9b211562f278b2c92ce264241ecab923d49e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HampeZurbInkBundle::base.html.twig", "@HampeZurbInk/Examples/hero.html.twig", 1);
        $this->blocks = array(
            'preHtml' => array($this, 'block_preHtml'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'contentTop' => array($this, 'block_contentTop'),
            'contentTopInner' => array($this, 'block_contentTopInner'),
            'contentPanel' => array($this, 'block_contentPanel'),
            'contentPanelInner' => array($this, 'block_contentPanelInner'),
            'contentBottom' => array($this, 'block_contentBottom'),
            'contentBottomInner' => array($this, 'block_contentBottomInner'),
            'contentBottomButton' => array($this, 'block_contentBottomButton'),
            'contentBottomButtonLink' => array($this, 'block_contentBottomButtonLink'),
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? null), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/hero.css"), "method"), "html", null, true);
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
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 132
        echo "            <!-- container end below -->
        </td>
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
        $this->loadTemplate("@HampeZurbInk/Examples/hero.html.twig", "@HampeZurbInk/Examples/hero.html.twig", 11, "128922639")->display($context);
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "            <!-- content start -->
            ";
        // line 24
        $this->displayBlock('contentTop', $context, $blocks);
        // line 46
        echo "            ";
        $this->displayBlock('contentPanel', $context, $blocks);
        // line 68
        echo "            ";
        $this->displayBlock('contentBottom', $context, $blocks);
        // line 89
        echo "            ";
        $this->displayBlock('contentBottomButton', $context, $blocks);
        // line 117
        echo "
            ";
        // line 118
        $this->displayBlock('socialBlock', $context, $blocks);
        // line 123
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 130
        echo "
            ";
    }

    // line 24
    public function block_contentTop($context, array $blocks = array())
    {
        // line 25
        echo "            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    ";
        // line 32
        $this->displayBlock('contentTopInner', $context, $blocks);
        // line 37
        echo "                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            ";
    }

    // line 32
    public function block_contentTopInner($context, array $blocks = array())
    {
        // line 33
        echo "                                    <h1>Hi, Elijah Baily</h1>
                                    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    ";
    }

    // line 46
    public function block_contentPanel($context, array $blocks = array())
    {
        // line 47
        echo "            <table class=\"row callout\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                ";
        // line 53
        $this->displayBlock('contentPanelInner', $context, $blocks);
        // line 60
        echo "                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            ";
    }

    // line 53
    public function block_contentPanelInner($context, array $blocks = array())
    {
        // line 54
        echo "                                <td class=\"panel\">

                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>

                                </td>
                                ";
    }

    // line 68
    public function block_contentBottom($context, array $blocks = array())
    {
        // line 69
        echo "            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    ";
        // line 76
        $this->displayBlock('contentBottomInner', $context, $blocks);
        // line 80
        echo "                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            ";
    }

    // line 76
    public function block_contentBottomInner($context, array $blocks = array())
    {
        // line 77
        echo "                                    <h3>Title Ipsum <small>This is a note.</small></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    ";
    }

    // line 89
    public function block_contentBottomButton($context, array $blocks = array())
    {
        // line 90
        echo "            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"three columns\">
                            <tr>
                                <td>

                                    <table class=\"button\">
                                        <tr>
                                            <td>
                                                ";
        // line 101
        $this->displayBlock('contentBottomButtonLink', $context, $blocks);
        // line 104
        echo "                                            </td>
                                        </tr>
                                    </table>

                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            ";
    }

    // line 101
    public function block_contentBottomButtonLink($context, array $blocks = array())
    {
        // line 102
        echo "                                                <a href=\"#\">Click Me!</a>
                                                ";
    }

    // line 118
    public function block_socialBlock($context, array $blocks = array())
    {
        // line 119
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/hero.html.twig", "@HampeZurbInk/Examples/hero.html.twig", 119, "1378498793")->display($context);
        // line 122
        echo "            ";
    }

    // line 123
    public function block_footer($context, array $blocks = array())
    {
        // line 124
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/hero.html.twig", "@HampeZurbInk/Examples/hero.html.twig", 124, "1239599788")->display($context);
        // line 129
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 129,  284 => 124,  281 => 123,  277 => 122,  274 => 119,  271 => 118,  266 => 102,  263 => 101,  247 => 104,  245 => 101,  232 => 90,  229 => 89,  223 => 77,  220 => 76,  208 => 80,  206 => 76,  197 => 69,  194 => 68,  185 => 54,  182 => 53,  171 => 60,  169 => 53,  161 => 47,  158 => 46,  151 => 33,  148 => 32,  136 => 37,  134 => 32,  125 => 25,  122 => 24,  117 => 130,  114 => 123,  112 => 118,  109 => 117,  106 => 89,  103 => 68,  100 => 46,  98 => 24,  95 => 23,  92 => 22,  87 => 11,  84 => 10,  71 => 132,  69 => 22,  62 => 17,  60 => 10,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\hero.html.twig");
    }
}


/* @HampeZurbInk/Examples/hero.html.twig */
class __TwigTemplate_f12731dd66866b688dd092bfe6b9b211562f278b2c92ce264241ecab923d49e2_128922639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:header.html.twig", "@HampeZurbInk/Examples/hero.html.twig", 11);
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
        echo "            <span class=\"template-label\">Hero</span>
        ";
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 13,  345 => 12,  328 => 11,  287 => 129,  284 => 124,  281 => 123,  277 => 122,  274 => 119,  271 => 118,  266 => 102,  263 => 101,  247 => 104,  245 => 101,  232 => 90,  229 => 89,  223 => 77,  220 => 76,  208 => 80,  206 => 76,  197 => 69,  194 => 68,  185 => 54,  182 => 53,  171 => 60,  169 => 53,  161 => 47,  158 => 46,  151 => 33,  148 => 32,  136 => 37,  134 => 32,  125 => 25,  122 => 24,  117 => 130,  114 => 123,  112 => 118,  109 => 117,  106 => 89,  103 => 68,  100 => 46,  98 => 24,  95 => 23,  92 => 22,  87 => 11,  84 => 10,  71 => 132,  69 => 22,  62 => 17,  60 => 10,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\hero.html.twig");
    }
}


/* @HampeZurbInk/Examples/hero.html.twig */
class __TwigTemplate_f12731dd66866b688dd092bfe6b9b211562f278b2c92ce264241ecab923d49e2_1378498793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 119
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:socialPanel.html.twig", "@HampeZurbInk/Examples/hero.html.twig", 119);
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
        return "@HampeZurbInk/Examples/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 119,  348 => 13,  345 => 12,  328 => 11,  287 => 129,  284 => 124,  281 => 123,  277 => 122,  274 => 119,  271 => 118,  266 => 102,  263 => 101,  247 => 104,  245 => 101,  232 => 90,  229 => 89,  223 => 77,  220 => 76,  208 => 80,  206 => 76,  197 => 69,  194 => 68,  185 => 54,  182 => 53,  171 => 60,  169 => 53,  161 => 47,  158 => 46,  151 => 33,  148 => 32,  136 => 37,  134 => 32,  125 => 25,  122 => 24,  117 => 130,  114 => 123,  112 => 118,  109 => 117,  106 => 89,  103 => 68,  100 => 46,  98 => 24,  95 => 23,  92 => 22,  87 => 11,  84 => 10,  71 => 132,  69 => 22,  62 => 17,  60 => 10,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\hero.html.twig");
    }
}


/* @HampeZurbInk/Examples/hero.html.twig */
class __TwigTemplate_f12731dd66866b688dd092bfe6b9b211562f278b2c92ce264241ecab923d49e2_1239599788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 124
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:footer.html.twig", "@HampeZurbInk/Examples/hero.html.twig", 124);
        $this->blocks = array(
            'footerLinks' => array($this, 'block_footerLinks'),
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

    // line 125
    public function block_footerLinks($context, array $blocks = array())
    {
        // line 126
        echo "                    <a href=\"#1\">Link1</a> | <a href=\"#2\">Link2</a> | <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                    ";
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 126,  460 => 125,  443 => 124,  390 => 119,  348 => 13,  345 => 12,  328 => 11,  287 => 129,  284 => 124,  281 => 123,  277 => 122,  274 => 119,  271 => 118,  266 => 102,  263 => 101,  247 => 104,  245 => 101,  232 => 90,  229 => 89,  223 => 77,  220 => 76,  208 => 80,  206 => 76,  197 => 69,  194 => 68,  185 => 54,  182 => 53,  171 => 60,  169 => 53,  161 => 47,  158 => 46,  151 => 33,  148 => 32,  136 => 37,  134 => 32,  125 => 25,  122 => 24,  117 => 130,  114 => 123,  112 => 118,  109 => 117,  106 => 89,  103 => 68,  100 => 46,  98 => 24,  95 => 23,  92 => 22,  87 => 11,  84 => 10,  71 => 132,  69 => 22,  62 => 17,  60 => 10,  54 => 6,  51 => 5,  44 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\hero.html.twig");
    }
}
