<?php

/* HampeZurbInkBundle:Examples:sidebarHero.html.twig */
class __TwigTemplate_7c1317ed88422c48fa21890f48d3cbf7b43a9a8036146edd2ce8812430976bcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HampeZurbInkBundle::base.html.twig", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", 1);
        $this->blocks = array(
            'preHtml' => array($this, 'block_preHtml'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'contentTop' => array($this, 'block_contentTop'),
            'contentTopInner' => array($this, 'block_contentTopInner'),
            'contentBottom' => array($this, 'block_contentBottom'),
            'contentLeft' => array($this, 'block_contentLeft'),
            'contentRight' => array($this, 'block_contentRight'),
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? null), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/sidebarHero.css"), "method"), "html", null, true);
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
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 18
        echo "

<br>

<table class=\"container\">
    <tr>
        <td>
            ";
        // line 25
        $this->displayBlock('contentTop', $context, $blocks);
        // line 57
        echo "
            <br>  <!-- Break Tag for row -->
            ";
        // line 59
        $this->displayBlock('contentBottom', $context, $blocks);
        // line 224
        echo "            <br>
            <br>
            <!-- Legal + Unsubscribe -->
            ";
        // line 227
        $this->displayBlock('footer', $context, $blocks);
        // line 232
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

    // line 11
    public function block_header($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:sidebarHero.html.twig", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", 12, "23604879")->display($context);
    }

    // line 25
    public function block_contentTop($context, array $blocks = array())
    {
        // line 26
        echo "            <!-- content start -->
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    ";
        // line 34
        $this->displayBlock('contentTopInner', $context, $blocks);
        // line 39
        echo "                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                        <table class=\"twelve columns\">
                            <tr>
                                <td class=\"panel\">
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>
                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            ";
    }

    // line 34
    public function block_contentTopInner($context, array $blocks = array())
    {
        // line 35
        echo "                                    <h1>Welcome, Daneel Olivan</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    ";
    }

    // line 59
    public function block_contentBottom($context, array $blocks = array())
    {
        // line 60
        echo "            <table class=\"row\">
                <tr>
                    ";
        // line 62
        $this->displayBlock('contentLeft', $context, $blocks);
        // line 109
        echo "                    ";
        $this->displayBlock('contentRight', $context, $blocks);
        // line 221
        echo "                </tr>
            </table>
            ";
    }

    // line 62
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 63
        echo "                        <td class=\"wrapper\">

                            <table class=\"six columns\">
                                <tr>
                                    <td>
                                        <h2>Hello,<br> Han Fastolfe</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet.</p>
                                    </td>
                                    <td class=\"expander\"></td>
                                </tr>
                            </table>

                            <table class=\"six columns\">
                                <tr>
                                    <td class=\"panel\">
                                        <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>
                                    </td>

                                    <td class=\"expander\"></td>
                                </tr>
                            </table>

                            <table class=\"six columns\">
                                <tr>
                                    <td>
                                        <br>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet.</p>

                                        <table class=\"button\">
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Click Me!</a>
                                                </td>
                                            </tr>
                                        </table>

                                    </td>
                                    <td class=\"expander\"></td>
                                </tr>
                            </table>

                        </td>
                    ";
    }

    // line 109
    public function block_contentRight($context, array $blocks = array())
    {
        // line 110
        echo "                        <td class=\"wrapper last\">

                            <table class=\"six columns\">
                                <tr>
                                    <td class=\"panel\">
                                        <h6>Header Thing</h6>
                                        <p>Sub-head or something</p>
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Just a Plain Link &raquo;</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Just a Plain Link &raquo;</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Just a Plain Link &raquo;</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Just a Plain Link &raquo;</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Just a Plain Link &raquo;</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Just a Plain Link &raquo;</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Just a Plain Link &raquo;</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class=\"expander\"></td>
                                </tr>
                            </table>

                            <br>

                            <table class=\"six columns\">
                                <tr>
                                    <td class=\"panel\">
                                        <h6 style=\"margin-bottom:5px;\">Connect With Us:</h6>
                                        <table class=\"tiny-button facebook\">
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Facebook</a>
                                                </td>
                                            </tr>
                                        </table>

                                        <hr>

                                        <table class=\"tiny-button twitter\">
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Twitter</a>
                                                </td>
                                            </tr>
                                        </table>

                                        <hr>

                                        <table class=\"tiny-button google-plus\">
                                            <tr>
                                                <td>
                                                    <a href=\"#\">Google +</a>
                                                </td>
                                            </tr>
                                        </table>
                                        <br>
                                        <h6 style=\"margin-bottom:5px;\">Contact Info:</h6>
                                        <p>Phone: <b>408.341.0600</b></p>
                                        <p>Email: <a href=\"mailto:hseldon@trantor.com\">hseldon@trantor.com</a></p>
                                    </td>
                                    <td class=\"expander\"></td>
                                </tr>
                            </table>

                        </td>
                    ";
    }

    // line 227
    public function block_footer($context, array $blocks = array())
    {
        // line 228
        echo "                ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:sidebarHero.html.twig", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", 228, "1632340938")->display($context);
        // line 231
        echo "            ";
    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:sidebarHero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 231,  339 => 228,  336 => 227,  222 => 110,  219 => 109,  170 => 63,  167 => 62,  161 => 221,  158 => 109,  156 => 62,  152 => 60,  149 => 59,  142 => 35,  139 => 34,  118 => 39,  116 => 34,  106 => 26,  103 => 25,  98 => 12,  95 => 11,  82 => 232,  80 => 227,  75 => 224,  73 => 59,  69 => 57,  67 => 25,  58 => 18,  56 => 11,  49 => 6,  46 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/sidebarHero.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:sidebarHero.html.twig */
class __TwigTemplate_7c1317ed88422c48fa21890f48d3cbf7b43a9a8036146edd2ce8812430976bcc_23604879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:header.html.twig", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", 12);
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

    // line 13
    public function block_headerColRight($context, array $blocks = array())
    {
        // line 14
        echo "            <span class=\"template-label\">Sidebar Hero</span>
        ";
    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:sidebarHero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 14,  400 => 13,  383 => 12,  342 => 231,  339 => 228,  336 => 227,  222 => 110,  219 => 109,  170 => 63,  167 => 62,  161 => 221,  158 => 109,  156 => 62,  152 => 60,  149 => 59,  142 => 35,  139 => 34,  118 => 39,  116 => 34,  106 => 26,  103 => 25,  98 => 12,  95 => 11,  82 => 232,  80 => 227,  75 => 224,  73 => 59,  69 => 57,  67 => 25,  58 => 18,  56 => 11,  49 => 6,  46 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/sidebarHero.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:sidebarHero.html.twig */
class __TwigTemplate_7c1317ed88422c48fa21890f48d3cbf7b43a9a8036146edd2ce8812430976bcc_1632340938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 228
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:footer.html.twig", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", 228);
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
        return "HampeZurbInkBundle:Examples:sidebarHero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 228,  403 => 14,  400 => 13,  383 => 12,  342 => 231,  339 => 228,  336 => 227,  222 => 110,  219 => 109,  170 => 63,  167 => 62,  161 => 221,  158 => 109,  156 => 62,  152 => 60,  149 => 59,  142 => 35,  139 => 34,  118 => 39,  116 => 34,  106 => 26,  103 => 25,  98 => 12,  95 => 11,  82 => 232,  80 => 227,  75 => 224,  73 => 59,  69 => 57,  67 => 25,  58 => 18,  56 => 11,  49 => 6,  46 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/sidebarHero.html.twig");
    }
}
