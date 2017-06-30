<?php

/* @HampeZurbInk/Examples/sidebar.html.twig */
class __TwigTemplate_bb8ca7a0f1f42ef47273b6738defbe184393961fc6ddb04fe61d6b8d2a66ea54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HampeZurbInkBundle::base.html.twig", "@HampeZurbInk/Examples/sidebar.html.twig", 1);
        $this->blocks = array(
            'preHtml' => array($this, 'block_preHtml'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? null), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/sidebar.css"), "method"), "html", null, true);
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

            <!-- content start -->
            ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 204
        echo "</center>
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
        $this->loadTemplate("@HampeZurbInk/Examples/sidebar.html.twig", "@HampeZurbInk/Examples/sidebar.html.twig", 12, "320673782")->display($context);
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "            <table class=\"row\">
                <tr>
                    ";
        // line 29
        $this->displayBlock('contentLeft', $context, $blocks);
        // line 76
        echo "                    ";
        $this->displayBlock('contentRight', $context, $blocks);
        // line 188
        echo "                </tr>
            </table>
            <br>
            <br>
            <!-- Legal + Unsubscribe -->
            ";
        // line 193
        $this->displayBlock('footer', $context, $blocks);
        // line 198
        echo "
            <!-- container end below -->
        </td>
    </tr>
</table>
";
    }

    // line 29
    public function block_contentLeft($context, array $blocks = array())
    {
        // line 30
        echo "                    <td class=\"wrapper\">

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

    // line 76
    public function block_contentRight($context, array $blocks = array())
    {
        // line 77
        echo "                    <td class=\"wrapper last\">

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

    // line 193
    public function block_footer($context, array $blocks = array())
    {
        // line 194
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/sidebar.html.twig", "@HampeZurbInk/Examples/sidebar.html.twig", 194, "97041753")->display($context);
        // line 197
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 197,  286 => 194,  283 => 193,  169 => 77,  166 => 76,  117 => 30,  114 => 29,  105 => 198,  103 => 193,  96 => 188,  93 => 76,  91 => 29,  87 => 27,  84 => 26,  79 => 12,  76 => 11,  68 => 204,  66 => 26,  56 => 18,  54 => 11,  47 => 6,  44 => 5,  37 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/sidebar.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\sidebar.html.twig");
    }
}


/* @HampeZurbInk/Examples/sidebar.html.twig */
class __TwigTemplate_bb8ca7a0f1f42ef47273b6738defbe184393961fc6ddb04fe61d6b8d2a66ea54_320673782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:header.html.twig", "@HampeZurbInk/Examples/sidebar.html.twig", 12);
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
        echo "            <span class=\"template-label\">Sidebar</span>
        ";
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 14,  347 => 13,  330 => 12,  289 => 197,  286 => 194,  283 => 193,  169 => 77,  166 => 76,  117 => 30,  114 => 29,  105 => 198,  103 => 193,  96 => 188,  93 => 76,  91 => 29,  87 => 27,  84 => 26,  79 => 12,  76 => 11,  68 => 204,  66 => 26,  56 => 18,  54 => 11,  47 => 6,  44 => 5,  37 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/sidebar.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\sidebar.html.twig");
    }
}


/* @HampeZurbInk/Examples/sidebar.html.twig */
class __TwigTemplate_bb8ca7a0f1f42ef47273b6738defbe184393961fc6ddb04fe61d6b8d2a66ea54_97041753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 194
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:footer.html.twig", "@HampeZurbInk/Examples/sidebar.html.twig", 194);
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
        return "@HampeZurbInk/Examples/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 194,  350 => 14,  347 => 13,  330 => 12,  289 => 197,  286 => 194,  283 => 193,  169 => 77,  166 => 76,  117 => 30,  114 => 29,  105 => 198,  103 => 193,  96 => 188,  93 => 76,  91 => 29,  87 => 27,  84 => 26,  79 => 12,  76 => 11,  68 => 204,  66 => 26,  56 => 18,  54 => 11,  47 => 6,  44 => 5,  37 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/Examples/sidebar.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\sidebar.html.twig");
    }
}
