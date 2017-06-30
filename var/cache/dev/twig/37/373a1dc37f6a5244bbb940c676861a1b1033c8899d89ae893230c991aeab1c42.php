<?php

/* HampeZurbInkBundle:Examples:sidebar.html.twig */
class __TwigTemplate_04fe9c01043c4b3eb78441cfa335f42e4e41d7a011cb794c8886363e9de85c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HampeZurbInkBundle::base.html.twig", "HampeZurbInkBundle:Examples:sidebar.html.twig", 1);
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
        $__internal_4a3f0fc2c9ce477ac5ec692f42924a824cb0cf9353472eeeaf3d435b46a5bb10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3f0fc2c9ce477ac5ec692f42924a824cb0cf9353472eeeaf3d435b46a5bb10->enter($__internal_4a3f0fc2c9ce477ac5ec692f42924a824cb0cf9353472eeeaf3d435b46a5bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebar.html.twig"));

        $__internal_4fd21a17b5ca35386397311cf537bbb06029a9c158d496ceb9cea4f445f9ab1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd21a17b5ca35386397311cf537bbb06029a9c158d496ceb9cea4f445f9ab1f->enter($__internal_4fd21a17b5ca35386397311cf537bbb06029a9c158d496ceb9cea4f445f9ab1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a3f0fc2c9ce477ac5ec692f42924a824cb0cf9353472eeeaf3d435b46a5bb10->leave($__internal_4a3f0fc2c9ce477ac5ec692f42924a824cb0cf9353472eeeaf3d435b46a5bb10_prof);

        
        $__internal_4fd21a17b5ca35386397311cf537bbb06029a9c158d496ceb9cea4f445f9ab1f->leave($__internal_4fd21a17b5ca35386397311cf537bbb06029a9c158d496ceb9cea4f445f9ab1f_prof);

    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_7105e727f3f93149e18da884b45a258ac73a615945fb2b33ef580a8b95e17c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7105e727f3f93149e18da884b45a258ac73a615945fb2b33ef580a8b95e17c11->enter($__internal_7105e727f3f93149e18da884b45a258ac73a615945fb2b33ef580a8b95e17c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_aa52c030272630a0e77b15b5447d3dd5aeb1c9fa6e05a27970a296bb8858980c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa52c030272630a0e77b15b5447d3dd5aeb1c9fa6e05a27970a296bb8858980c->enter($__internal_aa52c030272630a0e77b15b5447d3dd5aeb1c9fa6e05a27970a296bb8858980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/sidebar.css"), "method"), "html", null, true);
        echo "
";
        
        $__internal_aa52c030272630a0e77b15b5447d3dd5aeb1c9fa6e05a27970a296bb8858980c->leave($__internal_aa52c030272630a0e77b15b5447d3dd5aeb1c9fa6e05a27970a296bb8858980c_prof);

        
        $__internal_7105e727f3f93149e18da884b45a258ac73a615945fb2b33ef580a8b95e17c11->leave($__internal_7105e727f3f93149e18da884b45a258ac73a615945fb2b33ef580a8b95e17c11_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4bf70f9cd740d3e4f24057765057fe72f76e24b0fa5d2cf51d1d052cae4dc87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bf70f9cd740d3e4f24057765057fe72f76e24b0fa5d2cf51d1d052cae4dc87->enter($__internal_b4bf70f9cd740d3e4f24057765057fe72f76e24b0fa5d2cf51d1d052cae4dc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ff50226c322129df1aff0781699945ed6eda0a47c930d9edf094e6320071ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff50226c322129df1aff0781699945ed6eda0a47c930d9edf094e6320071ca8->enter($__internal_5ff50226c322129df1aff0781699945ed6eda0a47c930d9edf094e6320071ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5ff50226c322129df1aff0781699945ed6eda0a47c930d9edf094e6320071ca8->leave($__internal_5ff50226c322129df1aff0781699945ed6eda0a47c930d9edf094e6320071ca8_prof);

        
        $__internal_b4bf70f9cd740d3e4f24057765057fe72f76e24b0fa5d2cf51d1d052cae4dc87->leave($__internal_b4bf70f9cd740d3e4f24057765057fe72f76e24b0fa5d2cf51d1d052cae4dc87_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_4f04f23000dd7fed316ed2455588adb18d1afc9718b6d7c3c4d1220f487ca63b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f04f23000dd7fed316ed2455588adb18d1afc9718b6d7c3c4d1220f487ca63b->enter($__internal_4f04f23000dd7fed316ed2455588adb18d1afc9718b6d7c3c4d1220f487ca63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_bb3fb88805ed9712df9e64e9ffe3a2a5054242e2fccc0e57aa1d917e1d096675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3fb88805ed9712df9e64e9ffe3a2a5054242e2fccc0e57aa1d917e1d096675->enter($__internal_bb3fb88805ed9712df9e64e9ffe3a2a5054242e2fccc0e57aa1d917e1d096675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:sidebar.html.twig", "HampeZurbInkBundle:Examples:sidebar.html.twig", 12, "1868427529")->display($context);
        
        $__internal_bb3fb88805ed9712df9e64e9ffe3a2a5054242e2fccc0e57aa1d917e1d096675->leave($__internal_bb3fb88805ed9712df9e64e9ffe3a2a5054242e2fccc0e57aa1d917e1d096675_prof);

        
        $__internal_4f04f23000dd7fed316ed2455588adb18d1afc9718b6d7c3c4d1220f487ca63b->leave($__internal_4f04f23000dd7fed316ed2455588adb18d1afc9718b6d7c3c4d1220f487ca63b_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_712e2c386f2d4cb59f8646f03acada6c396d75aa0b6868a5778d26ad6a6bed0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712e2c386f2d4cb59f8646f03acada6c396d75aa0b6868a5778d26ad6a6bed0b->enter($__internal_712e2c386f2d4cb59f8646f03acada6c396d75aa0b6868a5778d26ad6a6bed0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_69e7e9ec2f8bef63a1ceffc9ce81f77d98af19f7722c58a822b23e50d82529af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e7e9ec2f8bef63a1ceffc9ce81f77d98af19f7722c58a822b23e50d82529af->enter($__internal_69e7e9ec2f8bef63a1ceffc9ce81f77d98af19f7722c58a822b23e50d82529af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_69e7e9ec2f8bef63a1ceffc9ce81f77d98af19f7722c58a822b23e50d82529af->leave($__internal_69e7e9ec2f8bef63a1ceffc9ce81f77d98af19f7722c58a822b23e50d82529af_prof);

        
        $__internal_712e2c386f2d4cb59f8646f03acada6c396d75aa0b6868a5778d26ad6a6bed0b->leave($__internal_712e2c386f2d4cb59f8646f03acada6c396d75aa0b6868a5778d26ad6a6bed0b_prof);

    }

    // line 29
    public function block_contentLeft($context, array $blocks = array())
    {
        $__internal_019350b465bb5a0b0061654062b3dfffa949f277502d02ffdf753544b1a9a8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019350b465bb5a0b0061654062b3dfffa949f277502d02ffdf753544b1a9a8cf->enter($__internal_019350b465bb5a0b0061654062b3dfffa949f277502d02ffdf753544b1a9a8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentLeft"));

        $__internal_45b12d794d2199c55901484669fa701d907d4d87b6837f62a1e0bf1595d727db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b12d794d2199c55901484669fa701d907d4d87b6837f62a1e0bf1595d727db->enter($__internal_45b12d794d2199c55901484669fa701d907d4d87b6837f62a1e0bf1595d727db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentLeft"));

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
        
        $__internal_45b12d794d2199c55901484669fa701d907d4d87b6837f62a1e0bf1595d727db->leave($__internal_45b12d794d2199c55901484669fa701d907d4d87b6837f62a1e0bf1595d727db_prof);

        
        $__internal_019350b465bb5a0b0061654062b3dfffa949f277502d02ffdf753544b1a9a8cf->leave($__internal_019350b465bb5a0b0061654062b3dfffa949f277502d02ffdf753544b1a9a8cf_prof);

    }

    // line 76
    public function block_contentRight($context, array $blocks = array())
    {
        $__internal_804ba4aa01170fdaa95ebe0a8e7b0ca8eec3c11ce573691faa47975c4005467b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804ba4aa01170fdaa95ebe0a8e7b0ca8eec3c11ce573691faa47975c4005467b->enter($__internal_804ba4aa01170fdaa95ebe0a8e7b0ca8eec3c11ce573691faa47975c4005467b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentRight"));

        $__internal_79d0f541e341a7c4f3ce9aaf52ea0f1f12043ba080317f5c03de3b32eccd5cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d0f541e341a7c4f3ce9aaf52ea0f1f12043ba080317f5c03de3b32eccd5cf3->enter($__internal_79d0f541e341a7c4f3ce9aaf52ea0f1f12043ba080317f5c03de3b32eccd5cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentRight"));

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
        
        $__internal_79d0f541e341a7c4f3ce9aaf52ea0f1f12043ba080317f5c03de3b32eccd5cf3->leave($__internal_79d0f541e341a7c4f3ce9aaf52ea0f1f12043ba080317f5c03de3b32eccd5cf3_prof);

        
        $__internal_804ba4aa01170fdaa95ebe0a8e7b0ca8eec3c11ce573691faa47975c4005467b->leave($__internal_804ba4aa01170fdaa95ebe0a8e7b0ca8eec3c11ce573691faa47975c4005467b_prof);

    }

    // line 193
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e8bbb7d180197f9b207d2d97386cd01fbf24ac19e0fc260dc5d5ab6ae3bf9796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bbb7d180197f9b207d2d97386cd01fbf24ac19e0fc260dc5d5ab6ae3bf9796->enter($__internal_e8bbb7d180197f9b207d2d97386cd01fbf24ac19e0fc260dc5d5ab6ae3bf9796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_63e623fdd0efb4b7e11f9b4e5a229bab02e9d6ae927885f748af9ee3a06d519a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e623fdd0efb4b7e11f9b4e5a229bab02e9d6ae927885f748af9ee3a06d519a->enter($__internal_63e623fdd0efb4b7e11f9b4e5a229bab02e9d6ae927885f748af9ee3a06d519a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 194
        echo "                ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:sidebar.html.twig", "HampeZurbInkBundle:Examples:sidebar.html.twig", 194, "778238013")->display($context);
        // line 197
        echo "            ";
        
        $__internal_63e623fdd0efb4b7e11f9b4e5a229bab02e9d6ae927885f748af9ee3a06d519a->leave($__internal_63e623fdd0efb4b7e11f9b4e5a229bab02e9d6ae927885f748af9ee3a06d519a_prof);

        
        $__internal_e8bbb7d180197f9b207d2d97386cd01fbf24ac19e0fc260dc5d5ab6ae3bf9796->leave($__internal_e8bbb7d180197f9b207d2d97386cd01fbf24ac19e0fc260dc5d5ab6ae3bf9796_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:sidebar.html.twig";
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
{% endblock %}", "HampeZurbInkBundle:Examples:sidebar.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/sidebar.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:sidebar.html.twig */
class __TwigTemplate_04fe9c01043c4b3eb78441cfa335f42e4e41d7a011cb794c8886363e9de85c72_1868427529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:header.html.twig", "HampeZurbInkBundle:Examples:sidebar.html.twig", 12);
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
        $__internal_beb81f06684b8d7246c11a2bdc49b631cf17e037264a1e6ed5a75bb18ba57b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb81f06684b8d7246c11a2bdc49b631cf17e037264a1e6ed5a75bb18ba57b1d->enter($__internal_beb81f06684b8d7246c11a2bdc49b631cf17e037264a1e6ed5a75bb18ba57b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebar.html.twig"));

        $__internal_ebf8fc39b846e88088d1b17d00051bcf04d605a05d28945ce2d8ee1f66035592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf8fc39b846e88088d1b17d00051bcf04d605a05d28945ce2d8ee1f66035592->enter($__internal_ebf8fc39b846e88088d1b17d00051bcf04d605a05d28945ce2d8ee1f66035592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_beb81f06684b8d7246c11a2bdc49b631cf17e037264a1e6ed5a75bb18ba57b1d->leave($__internal_beb81f06684b8d7246c11a2bdc49b631cf17e037264a1e6ed5a75bb18ba57b1d_prof);

        
        $__internal_ebf8fc39b846e88088d1b17d00051bcf04d605a05d28945ce2d8ee1f66035592->leave($__internal_ebf8fc39b846e88088d1b17d00051bcf04d605a05d28945ce2d8ee1f66035592_prof);

    }

    // line 13
    public function block_headerColRight($context, array $blocks = array())
    {
        $__internal_f13bd77c22849516c9d0339bd8f9793fb4357a9ddf0394367602332c1f02191e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13bd77c22849516c9d0339bd8f9793fb4357a9ddf0394367602332c1f02191e->enter($__internal_f13bd77c22849516c9d0339bd8f9793fb4357a9ddf0394367602332c1f02191e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        $__internal_eb6fd48f73f8aa4affeb3e6e1a9f3437cecb5205177076513c5880c68a506130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6fd48f73f8aa4affeb3e6e1a9f3437cecb5205177076513c5880c68a506130->enter($__internal_eb6fd48f73f8aa4affeb3e6e1a9f3437cecb5205177076513c5880c68a506130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        // line 14
        echo "            <span class=\"template-label\">Sidebar</span>
        ";
        
        $__internal_eb6fd48f73f8aa4affeb3e6e1a9f3437cecb5205177076513c5880c68a506130->leave($__internal_eb6fd48f73f8aa4affeb3e6e1a9f3437cecb5205177076513c5880c68a506130_prof);

        
        $__internal_f13bd77c22849516c9d0339bd8f9793fb4357a9ddf0394367602332c1f02191e->leave($__internal_f13bd77c22849516c9d0339bd8f9793fb4357a9ddf0394367602332c1f02191e_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:sidebar.html.twig";
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
{% endblock %}", "HampeZurbInkBundle:Examples:sidebar.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/sidebar.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:sidebar.html.twig */
class __TwigTemplate_04fe9c01043c4b3eb78441cfa335f42e4e41d7a011cb794c8886363e9de85c72_778238013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 194
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:footer.html.twig", "HampeZurbInkBundle:Examples:sidebar.html.twig", 194);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "HampeZurbInkBundle:Partials:footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce383f406c8de5d3aee4c50ffb99d298dd3f8ed7f7ee1555532f9911efa09ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce383f406c8de5d3aee4c50ffb99d298dd3f8ed7f7ee1555532f9911efa09ea2->enter($__internal_ce383f406c8de5d3aee4c50ffb99d298dd3f8ed7f7ee1555532f9911efa09ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebar.html.twig"));

        $__internal_d9bc76e5f97b0f293c2a7014d235121a5d027651206894657878cf6988993b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bc76e5f97b0f293c2a7014d235121a5d027651206894657878cf6988993b49->enter($__internal_d9bc76e5f97b0f293c2a7014d235121a5d027651206894657878cf6988993b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce383f406c8de5d3aee4c50ffb99d298dd3f8ed7f7ee1555532f9911efa09ea2->leave($__internal_ce383f406c8de5d3aee4c50ffb99d298dd3f8ed7f7ee1555532f9911efa09ea2_prof);

        
        $__internal_d9bc76e5f97b0f293c2a7014d235121a5d027651206894657878cf6988993b49->leave($__internal_d9bc76e5f97b0f293c2a7014d235121a5d027651206894657878cf6988993b49_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:sidebar.html.twig";
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
{% endblock %}", "HampeZurbInkBundle:Examples:sidebar.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/sidebar.html.twig");
    }
}
