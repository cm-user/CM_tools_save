<?php

/* @HampeZurbInk/Examples/sidebar.html.twig */
class __TwigTemplate_ace0e085bb0e3af90af3f55bcbb90bc4f716eeb38d6a19e9819d05677662f4b2 extends Twig_Template
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
        $__internal_cc81d99aa207825d2f729c1d7b9f849cdf461df31a4dc3c75ea6ef012361c004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc81d99aa207825d2f729c1d7b9f849cdf461df31a4dc3c75ea6ef012361c004->enter($__internal_cc81d99aa207825d2f729c1d7b9f849cdf461df31a4dc3c75ea6ef012361c004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebar.html.twig"));

        $__internal_cbba60ed5e5ff8583b5c6a3fda07c3e8949fd5798adeb1aed400e240ae772c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbba60ed5e5ff8583b5c6a3fda07c3e8949fd5798adeb1aed400e240ae772c56->enter($__internal_cbba60ed5e5ff8583b5c6a3fda07c3e8949fd5798adeb1aed400e240ae772c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc81d99aa207825d2f729c1d7b9f849cdf461df31a4dc3c75ea6ef012361c004->leave($__internal_cc81d99aa207825d2f729c1d7b9f849cdf461df31a4dc3c75ea6ef012361c004_prof);

        
        $__internal_cbba60ed5e5ff8583b5c6a3fda07c3e8949fd5798adeb1aed400e240ae772c56->leave($__internal_cbba60ed5e5ff8583b5c6a3fda07c3e8949fd5798adeb1aed400e240ae772c56_prof);

    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_286892edbd244e1c1b48339848694ad70f7e2c8a5c1db71cdf3b607d564f8bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286892edbd244e1c1b48339848694ad70f7e2c8a5c1db71cdf3b607d564f8bbf->enter($__internal_286892edbd244e1c1b48339848694ad70f7e2c8a5c1db71cdf3b607d564f8bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_1a18de3d369163e55ab781099e65d88a20188959962fb2a87e3496a674ce8371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a18de3d369163e55ab781099e65d88a20188959962fb2a87e3496a674ce8371->enter($__internal_1a18de3d369163e55ab781099e65d88a20188959962fb2a87e3496a674ce8371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/sidebar.css"), "method"), "html", null, true);
        echo "
";
        
        $__internal_1a18de3d369163e55ab781099e65d88a20188959962fb2a87e3496a674ce8371->leave($__internal_1a18de3d369163e55ab781099e65d88a20188959962fb2a87e3496a674ce8371_prof);

        
        $__internal_286892edbd244e1c1b48339848694ad70f7e2c8a5c1db71cdf3b607d564f8bbf->leave($__internal_286892edbd244e1c1b48339848694ad70f7e2c8a5c1db71cdf3b607d564f8bbf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba989790bc48178255c60d4215eefeab26557aa68138fbf39f7a97a83eea54b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba989790bc48178255c60d4215eefeab26557aa68138fbf39f7a97a83eea54b6->enter($__internal_ba989790bc48178255c60d4215eefeab26557aa68138fbf39f7a97a83eea54b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e87bae6b62623a997717e2dfb2a0bd99a48d7e96831b47f00aa8e8abef1cfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e87bae6b62623a997717e2dfb2a0bd99a48d7e96831b47f00aa8e8abef1cfb4->enter($__internal_8e87bae6b62623a997717e2dfb2a0bd99a48d7e96831b47f00aa8e8abef1cfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8e87bae6b62623a997717e2dfb2a0bd99a48d7e96831b47f00aa8e8abef1cfb4->leave($__internal_8e87bae6b62623a997717e2dfb2a0bd99a48d7e96831b47f00aa8e8abef1cfb4_prof);

        
        $__internal_ba989790bc48178255c60d4215eefeab26557aa68138fbf39f7a97a83eea54b6->leave($__internal_ba989790bc48178255c60d4215eefeab26557aa68138fbf39f7a97a83eea54b6_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_ca7728b81704e4180b4cd77da56df52ddb5bcebd9c6372abe2fdfe2ae0872c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7728b81704e4180b4cd77da56df52ddb5bcebd9c6372abe2fdfe2ae0872c48->enter($__internal_ca7728b81704e4180b4cd77da56df52ddb5bcebd9c6372abe2fdfe2ae0872c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_aa02828fcfd37aca28d45d6cfac12ef363be98de4ed8ac01ab665c18634af685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa02828fcfd37aca28d45d6cfac12ef363be98de4ed8ac01ab665c18634af685->enter($__internal_aa02828fcfd37aca28d45d6cfac12ef363be98de4ed8ac01ab665c18634af685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    ";
        $this->loadTemplate("@HampeZurbInk/Examples/sidebar.html.twig", "@HampeZurbInk/Examples/sidebar.html.twig", 12, "2064826878")->display($context);
        
        $__internal_aa02828fcfd37aca28d45d6cfac12ef363be98de4ed8ac01ab665c18634af685->leave($__internal_aa02828fcfd37aca28d45d6cfac12ef363be98de4ed8ac01ab665c18634af685_prof);

        
        $__internal_ca7728b81704e4180b4cd77da56df52ddb5bcebd9c6372abe2fdfe2ae0872c48->leave($__internal_ca7728b81704e4180b4cd77da56df52ddb5bcebd9c6372abe2fdfe2ae0872c48_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_f63166b50b12f2581c6857d62f129ea827ba2e5b8696a4fb8636016c46d98d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63166b50b12f2581c6857d62f129ea827ba2e5b8696a4fb8636016c46d98d0c->enter($__internal_f63166b50b12f2581c6857d62f129ea827ba2e5b8696a4fb8636016c46d98d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6d7535066cb4fff8d08ee9408d2aa182a9bf7abb93f03908b175a236e617d3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7535066cb4fff8d08ee9408d2aa182a9bf7abb93f03908b175a236e617d3de->enter($__internal_6d7535066cb4fff8d08ee9408d2aa182a9bf7abb93f03908b175a236e617d3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6d7535066cb4fff8d08ee9408d2aa182a9bf7abb93f03908b175a236e617d3de->leave($__internal_6d7535066cb4fff8d08ee9408d2aa182a9bf7abb93f03908b175a236e617d3de_prof);

        
        $__internal_f63166b50b12f2581c6857d62f129ea827ba2e5b8696a4fb8636016c46d98d0c->leave($__internal_f63166b50b12f2581c6857d62f129ea827ba2e5b8696a4fb8636016c46d98d0c_prof);

    }

    // line 29
    public function block_contentLeft($context, array $blocks = array())
    {
        $__internal_28bfad9dc1fc42d15beaa5a05a0858595dd7d00075cdecbd07b557a3c50e31ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28bfad9dc1fc42d15beaa5a05a0858595dd7d00075cdecbd07b557a3c50e31ef->enter($__internal_28bfad9dc1fc42d15beaa5a05a0858595dd7d00075cdecbd07b557a3c50e31ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentLeft"));

        $__internal_b4bd98048071ba742f739308487d5551a6248d1812fb1d4b70296872fdbfe5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bd98048071ba742f739308487d5551a6248d1812fb1d4b70296872fdbfe5b7->enter($__internal_b4bd98048071ba742f739308487d5551a6248d1812fb1d4b70296872fdbfe5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentLeft"));

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
        
        $__internal_b4bd98048071ba742f739308487d5551a6248d1812fb1d4b70296872fdbfe5b7->leave($__internal_b4bd98048071ba742f739308487d5551a6248d1812fb1d4b70296872fdbfe5b7_prof);

        
        $__internal_28bfad9dc1fc42d15beaa5a05a0858595dd7d00075cdecbd07b557a3c50e31ef->leave($__internal_28bfad9dc1fc42d15beaa5a05a0858595dd7d00075cdecbd07b557a3c50e31ef_prof);

    }

    // line 76
    public function block_contentRight($context, array $blocks = array())
    {
        $__internal_5dcc8249b4ca8726032f2819f4d1e48cc873708ee45d31decb0ccc02fc0e6108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcc8249b4ca8726032f2819f4d1e48cc873708ee45d31decb0ccc02fc0e6108->enter($__internal_5dcc8249b4ca8726032f2819f4d1e48cc873708ee45d31decb0ccc02fc0e6108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentRight"));

        $__internal_62140ae01c38fcc9b161b9800489127ce4708eeccd010d4e3aa113c1b564694c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62140ae01c38fcc9b161b9800489127ce4708eeccd010d4e3aa113c1b564694c->enter($__internal_62140ae01c38fcc9b161b9800489127ce4708eeccd010d4e3aa113c1b564694c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentRight"));

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
        
        $__internal_62140ae01c38fcc9b161b9800489127ce4708eeccd010d4e3aa113c1b564694c->leave($__internal_62140ae01c38fcc9b161b9800489127ce4708eeccd010d4e3aa113c1b564694c_prof);

        
        $__internal_5dcc8249b4ca8726032f2819f4d1e48cc873708ee45d31decb0ccc02fc0e6108->leave($__internal_5dcc8249b4ca8726032f2819f4d1e48cc873708ee45d31decb0ccc02fc0e6108_prof);

    }

    // line 193
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bd5c29716bf05203c04d945c02395f6936b7517b3e9ae9fa775d69e7e0e102cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5c29716bf05203c04d945c02395f6936b7517b3e9ae9fa775d69e7e0e102cb->enter($__internal_bd5c29716bf05203c04d945c02395f6936b7517b3e9ae9fa775d69e7e0e102cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1a4458efd74346c9edf5502cf41135367d8addf2f79e16cb5eb4bafaa04f5b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4458efd74346c9edf5502cf41135367d8addf2f79e16cb5eb4bafaa04f5b01->enter($__internal_1a4458efd74346c9edf5502cf41135367d8addf2f79e16cb5eb4bafaa04f5b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 194
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/sidebar.html.twig", "@HampeZurbInk/Examples/sidebar.html.twig", 194, "1817342834")->display($context);
        // line 197
        echo "            ";
        
        $__internal_1a4458efd74346c9edf5502cf41135367d8addf2f79e16cb5eb4bafaa04f5b01->leave($__internal_1a4458efd74346c9edf5502cf41135367d8addf2f79e16cb5eb4bafaa04f5b01_prof);

        
        $__internal_bd5c29716bf05203c04d945c02395f6936b7517b3e9ae9fa775d69e7e0e102cb->leave($__internal_bd5c29716bf05203c04d945c02395f6936b7517b3e9ae9fa775d69e7e0e102cb_prof);

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
        return array (  379 => 197,  376 => 194,  367 => 193,  247 => 77,  238 => 76,  183 => 30,  174 => 29,  159 => 198,  157 => 193,  150 => 188,  147 => 76,  145 => 29,  141 => 27,  132 => 26,  121 => 12,  112 => 11,  98 => 204,  96 => 26,  86 => 18,  84 => 11,  77 => 6,  68 => 5,  55 => 3,  46 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HampeZurbInkBundle::base.html.twig' %}
{% block preHtml %}
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/sidebar.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>

{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Sidebar</span>
        {% endblock %}
    {% endembed %}
{% endblock %}

<br>

<table class=\"container\">
    <tr>
        <td>

            <!-- content start -->
            {% block content %}
            <table class=\"row\">
                <tr>
                    {% block contentLeft %}
                    <td class=\"wrapper\">

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
                    {% endblock %}
                    {% block contentRight %}
                    <td class=\"wrapper last\">

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
                    {% endblock %}
                </tr>
            </table>
            <br>
            <br>
            <!-- Legal + Unsubscribe -->
            {% block footer %}
                {% embed 'HampeZurbInkBundle:Partials:footer.html.twig' %}

                {% endembed %}
            {% endblock %}

            <!-- container end below -->
        </td>
    </tr>
</table>
{% endblock %}
</center>
</td>
</tr>
</table>
{% endblock %}", "@HampeZurbInk/Examples/sidebar.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\sidebar.html.twig");
    }
}


/* @HampeZurbInk/Examples/sidebar.html.twig */
class __TwigTemplate_ace0e085bb0e3af90af3f55bcbb90bc4f716eeb38d6a19e9819d05677662f4b2_2064826878 extends Twig_Template
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
        $__internal_0ddf77ec82b6c3cee4246b6ea15660b25f28691821faecb5b2b5ba362b2e77e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ddf77ec82b6c3cee4246b6ea15660b25f28691821faecb5b2b5ba362b2e77e8->enter($__internal_0ddf77ec82b6c3cee4246b6ea15660b25f28691821faecb5b2b5ba362b2e77e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebar.html.twig"));

        $__internal_9901af8d883d4e8bf6bed98b60bb6b5d6a1be6bb3d86586076c05355bf3edcab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9901af8d883d4e8bf6bed98b60bb6b5d6a1be6bb3d86586076c05355bf3edcab->enter($__internal_9901af8d883d4e8bf6bed98b60bb6b5d6a1be6bb3d86586076c05355bf3edcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ddf77ec82b6c3cee4246b6ea15660b25f28691821faecb5b2b5ba362b2e77e8->leave($__internal_0ddf77ec82b6c3cee4246b6ea15660b25f28691821faecb5b2b5ba362b2e77e8_prof);

        
        $__internal_9901af8d883d4e8bf6bed98b60bb6b5d6a1be6bb3d86586076c05355bf3edcab->leave($__internal_9901af8d883d4e8bf6bed98b60bb6b5d6a1be6bb3d86586076c05355bf3edcab_prof);

    }

    // line 13
    public function block_headerColRight($context, array $blocks = array())
    {
        $__internal_cc403762b2895f9f6dae4910adb3314da8f68aaed28094603c53480a40c95c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc403762b2895f9f6dae4910adb3314da8f68aaed28094603c53480a40c95c98->enter($__internal_cc403762b2895f9f6dae4910adb3314da8f68aaed28094603c53480a40c95c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        $__internal_cd69416d6ddedb7809a852dc0d6b35732ef7c14c6e2bdb38f8b8fd09038598bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd69416d6ddedb7809a852dc0d6b35732ef7c14c6e2bdb38f8b8fd09038598bf->enter($__internal_cd69416d6ddedb7809a852dc0d6b35732ef7c14c6e2bdb38f8b8fd09038598bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        // line 14
        echo "            <span class=\"template-label\">Sidebar</span>
        ";
        
        $__internal_cd69416d6ddedb7809a852dc0d6b35732ef7c14c6e2bdb38f8b8fd09038598bf->leave($__internal_cd69416d6ddedb7809a852dc0d6b35732ef7c14c6e2bdb38f8b8fd09038598bf_prof);

        
        $__internal_cc403762b2895f9f6dae4910adb3314da8f68aaed28094603c53480a40c95c98->leave($__internal_cc403762b2895f9f6dae4910adb3314da8f68aaed28094603c53480a40c95c98_prof);

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
        return array (  671 => 14,  662 => 13,  633 => 12,  379 => 197,  376 => 194,  367 => 193,  247 => 77,  238 => 76,  183 => 30,  174 => 29,  159 => 198,  157 => 193,  150 => 188,  147 => 76,  145 => 29,  141 => 27,  132 => 26,  121 => 12,  112 => 11,  98 => 204,  96 => 26,  86 => 18,  84 => 11,  77 => 6,  68 => 5,  55 => 3,  46 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HampeZurbInkBundle::base.html.twig' %}
{% block preHtml %}
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/sidebar.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>

{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Sidebar</span>
        {% endblock %}
    {% endembed %}
{% endblock %}

<br>

<table class=\"container\">
    <tr>
        <td>

            <!-- content start -->
            {% block content %}
            <table class=\"row\">
                <tr>
                    {% block contentLeft %}
                    <td class=\"wrapper\">

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
                    {% endblock %}
                    {% block contentRight %}
                    <td class=\"wrapper last\">

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
                    {% endblock %}
                </tr>
            </table>
            <br>
            <br>
            <!-- Legal + Unsubscribe -->
            {% block footer %}
                {% embed 'HampeZurbInkBundle:Partials:footer.html.twig' %}

                {% endembed %}
            {% endblock %}

            <!-- container end below -->
        </td>
    </tr>
</table>
{% endblock %}
</center>
</td>
</tr>
</table>
{% endblock %}", "@HampeZurbInk/Examples/sidebar.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\sidebar.html.twig");
    }
}


/* @HampeZurbInk/Examples/sidebar.html.twig */
class __TwigTemplate_ace0e085bb0e3af90af3f55bcbb90bc4f716eeb38d6a19e9819d05677662f4b2_1817342834 extends Twig_Template
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
        $__internal_ebedcb9da86d45748d7313a905fa24d5613a90f7f03021bd2f8e1ee908277aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebedcb9da86d45748d7313a905fa24d5613a90f7f03021bd2f8e1ee908277aac->enter($__internal_ebedcb9da86d45748d7313a905fa24d5613a90f7f03021bd2f8e1ee908277aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebar.html.twig"));

        $__internal_d5acd62f1ca74fac1feb4cc857a8b08d0215148954b23d9995baf6b9ea85d702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5acd62f1ca74fac1feb4cc857a8b08d0215148954b23d9995baf6b9ea85d702->enter($__internal_d5acd62f1ca74fac1feb4cc857a8b08d0215148954b23d9995baf6b9ea85d702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebedcb9da86d45748d7313a905fa24d5613a90f7f03021bd2f8e1ee908277aac->leave($__internal_ebedcb9da86d45748d7313a905fa24d5613a90f7f03021bd2f8e1ee908277aac_prof);

        
        $__internal_d5acd62f1ca74fac1feb4cc857a8b08d0215148954b23d9995baf6b9ea85d702->leave($__internal_d5acd62f1ca74fac1feb4cc857a8b08d0215148954b23d9995baf6b9ea85d702_prof);

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
        return array (  926 => 194,  671 => 14,  662 => 13,  633 => 12,  379 => 197,  376 => 194,  367 => 193,  247 => 77,  238 => 76,  183 => 30,  174 => 29,  159 => 198,  157 => 193,  150 => 188,  147 => 76,  145 => 29,  141 => 27,  132 => 26,  121 => 12,  112 => 11,  98 => 204,  96 => 26,  86 => 18,  84 => 11,  77 => 6,  68 => 5,  55 => 3,  46 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HampeZurbInkBundle::base.html.twig' %}
{% block preHtml %}
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/sidebar.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>

{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Sidebar</span>
        {% endblock %}
    {% endembed %}
{% endblock %}

<br>

<table class=\"container\">
    <tr>
        <td>

            <!-- content start -->
            {% block content %}
            <table class=\"row\">
                <tr>
                    {% block contentLeft %}
                    <td class=\"wrapper\">

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
                    {% endblock %}
                    {% block contentRight %}
                    <td class=\"wrapper last\">

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
                    {% endblock %}
                </tr>
            </table>
            <br>
            <br>
            <!-- Legal + Unsubscribe -->
            {% block footer %}
                {% embed 'HampeZurbInkBundle:Partials:footer.html.twig' %}

                {% endembed %}
            {% endblock %}

            <!-- container end below -->
        </td>
    </tr>
</table>
{% endblock %}
</center>
</td>
</tr>
</table>
{% endblock %}", "@HampeZurbInk/Examples/sidebar.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\sidebar.html.twig");
    }
}
