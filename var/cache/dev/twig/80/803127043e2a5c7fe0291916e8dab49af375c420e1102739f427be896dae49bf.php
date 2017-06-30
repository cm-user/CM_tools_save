<?php

/* HampeZurbInkBundle:Examples:sidebarHero.html.twig */
class __TwigTemplate_297f54969da019b6bfe3a32a027d64cb4c8059c7c3380691a8ed6541b764bac1 extends Twig_Template
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
        $__internal_8cbdd332ed4cf5f21f93746e178734807ef13f7970c05827896836bf38c6f8bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbdd332ed4cf5f21f93746e178734807ef13f7970c05827896836bf38c6f8bb->enter($__internal_8cbdd332ed4cf5f21f93746e178734807ef13f7970c05827896836bf38c6f8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebarHero.html.twig"));

        $__internal_3695536c160c59f772ad1fc751d3bc068e0671bc127cfc4b1952a1f9c3810df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3695536c160c59f772ad1fc751d3bc068e0671bc127cfc4b1952a1f9c3810df8->enter($__internal_3695536c160c59f772ad1fc751d3bc068e0671bc127cfc4b1952a1f9c3810df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebarHero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cbdd332ed4cf5f21f93746e178734807ef13f7970c05827896836bf38c6f8bb->leave($__internal_8cbdd332ed4cf5f21f93746e178734807ef13f7970c05827896836bf38c6f8bb_prof);

        
        $__internal_3695536c160c59f772ad1fc751d3bc068e0671bc127cfc4b1952a1f9c3810df8->leave($__internal_3695536c160c59f772ad1fc751d3bc068e0671bc127cfc4b1952a1f9c3810df8_prof);

    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_98e69f5440811aa59bece3775c37e759991bcbe1999711f67cafa0ffddca7d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e69f5440811aa59bece3775c37e759991bcbe1999711f67cafa0ffddca7d99->enter($__internal_98e69f5440811aa59bece3775c37e759991bcbe1999711f67cafa0ffddca7d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_9544e6e665c2721eee4f070b461449001062362a11f0c66695fddeca83b7fcdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9544e6e665c2721eee4f070b461449001062362a11f0c66695fddeca83b7fcdb->enter($__internal_9544e6e665c2721eee4f070b461449001062362a11f0c66695fddeca83b7fcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/sidebarHero.css"), "method"), "html", null, true);
        echo "
";
        
        $__internal_9544e6e665c2721eee4f070b461449001062362a11f0c66695fddeca83b7fcdb->leave($__internal_9544e6e665c2721eee4f070b461449001062362a11f0c66695fddeca83b7fcdb_prof);

        
        $__internal_98e69f5440811aa59bece3775c37e759991bcbe1999711f67cafa0ffddca7d99->leave($__internal_98e69f5440811aa59bece3775c37e759991bcbe1999711f67cafa0ffddca7d99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a23f2fd1395435012ae4a7d8f9348265cf8aee8b896743f0a7bf9af3969e957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a23f2fd1395435012ae4a7d8f9348265cf8aee8b896743f0a7bf9af3969e957->enter($__internal_0a23f2fd1395435012ae4a7d8f9348265cf8aee8b896743f0a7bf9af3969e957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a59a1fdf1dcc7995766e6c9ce0b3c93406bfe0f948c7f3f2624f0023fa132798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59a1fdf1dcc7995766e6c9ce0b3c93406bfe0f948c7f3f2624f0023fa132798->enter($__internal_a59a1fdf1dcc7995766e6c9ce0b3c93406bfe0f948c7f3f2624f0023fa132798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a59a1fdf1dcc7995766e6c9ce0b3c93406bfe0f948c7f3f2624f0023fa132798->leave($__internal_a59a1fdf1dcc7995766e6c9ce0b3c93406bfe0f948c7f3f2624f0023fa132798_prof);

        
        $__internal_0a23f2fd1395435012ae4a7d8f9348265cf8aee8b896743f0a7bf9af3969e957->leave($__internal_0a23f2fd1395435012ae4a7d8f9348265cf8aee8b896743f0a7bf9af3969e957_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_e142f596d3006536a160d319819d528dbed5e9f5bdb9c2c29178df4f4afc55c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e142f596d3006536a160d319819d528dbed5e9f5bdb9c2c29178df4f4afc55c2->enter($__internal_e142f596d3006536a160d319819d528dbed5e9f5bdb9c2c29178df4f4afc55c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a393ff6000a1f9dceca49d55c8ab0731de9be7f39efe39064fe101130c503bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a393ff6000a1f9dceca49d55c8ab0731de9be7f39efe39064fe101130c503bec->enter($__internal_a393ff6000a1f9dceca49d55c8ab0731de9be7f39efe39064fe101130c503bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:sidebarHero.html.twig", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", 12, "690690267")->display($context);
        
        $__internal_a393ff6000a1f9dceca49d55c8ab0731de9be7f39efe39064fe101130c503bec->leave($__internal_a393ff6000a1f9dceca49d55c8ab0731de9be7f39efe39064fe101130c503bec_prof);

        
        $__internal_e142f596d3006536a160d319819d528dbed5e9f5bdb9c2c29178df4f4afc55c2->leave($__internal_e142f596d3006536a160d319819d528dbed5e9f5bdb9c2c29178df4f4afc55c2_prof);

    }

    // line 25
    public function block_contentTop($context, array $blocks = array())
    {
        $__internal_de1cb45f5e377daf8e09534757797e345521beab4378f1cdfac166bd37b050c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1cb45f5e377daf8e09534757797e345521beab4378f1cdfac166bd37b050c9->enter($__internal_de1cb45f5e377daf8e09534757797e345521beab4378f1cdfac166bd37b050c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

        $__internal_8aab6f97920ab1020a1de40871af3cc883760b6e79164828da827b14c334d56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aab6f97920ab1020a1de40871af3cc883760b6e79164828da827b14c334d56b->enter($__internal_8aab6f97920ab1020a1de40871af3cc883760b6e79164828da827b14c334d56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

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
        
        $__internal_8aab6f97920ab1020a1de40871af3cc883760b6e79164828da827b14c334d56b->leave($__internal_8aab6f97920ab1020a1de40871af3cc883760b6e79164828da827b14c334d56b_prof);

        
        $__internal_de1cb45f5e377daf8e09534757797e345521beab4378f1cdfac166bd37b050c9->leave($__internal_de1cb45f5e377daf8e09534757797e345521beab4378f1cdfac166bd37b050c9_prof);

    }

    // line 34
    public function block_contentTopInner($context, array $blocks = array())
    {
        $__internal_642292d5e3136784c7110ff34bbd8c18ca43e1181a6d13ccb333968a6b5f8808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642292d5e3136784c7110ff34bbd8c18ca43e1181a6d13ccb333968a6b5f8808->enter($__internal_642292d5e3136784c7110ff34bbd8c18ca43e1181a6d13ccb333968a6b5f8808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        $__internal_c2565a2e99e6318f94aeb4a976daa8812d81bdec552cb794b4be04e71119f1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2565a2e99e6318f94aeb4a976daa8812d81bdec552cb794b4be04e71119f1db->enter($__internal_c2565a2e99e6318f94aeb4a976daa8812d81bdec552cb794b4be04e71119f1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        // line 35
        echo "                                    <h1>Welcome, Daneel Olivan</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    ";
        
        $__internal_c2565a2e99e6318f94aeb4a976daa8812d81bdec552cb794b4be04e71119f1db->leave($__internal_c2565a2e99e6318f94aeb4a976daa8812d81bdec552cb794b4be04e71119f1db_prof);

        
        $__internal_642292d5e3136784c7110ff34bbd8c18ca43e1181a6d13ccb333968a6b5f8808->leave($__internal_642292d5e3136784c7110ff34bbd8c18ca43e1181a6d13ccb333968a6b5f8808_prof);

    }

    // line 59
    public function block_contentBottom($context, array $blocks = array())
    {
        $__internal_64b360834d0fd51e5b9a68e9599fa739e3152d711c8d858ff6ba574e4f95bdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b360834d0fd51e5b9a68e9599fa739e3152d711c8d858ff6ba574e4f95bdc3->enter($__internal_64b360834d0fd51e5b9a68e9599fa739e3152d711c8d858ff6ba574e4f95bdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottom"));

        $__internal_00a029ec47a84a33babe53a866accdf550e1fe66a98819f3174f6ef0f197af7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a029ec47a84a33babe53a866accdf550e1fe66a98819f3174f6ef0f197af7f->enter($__internal_00a029ec47a84a33babe53a866accdf550e1fe66a98819f3174f6ef0f197af7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottom"));

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
        
        $__internal_00a029ec47a84a33babe53a866accdf550e1fe66a98819f3174f6ef0f197af7f->leave($__internal_00a029ec47a84a33babe53a866accdf550e1fe66a98819f3174f6ef0f197af7f_prof);

        
        $__internal_64b360834d0fd51e5b9a68e9599fa739e3152d711c8d858ff6ba574e4f95bdc3->leave($__internal_64b360834d0fd51e5b9a68e9599fa739e3152d711c8d858ff6ba574e4f95bdc3_prof);

    }

    // line 62
    public function block_contentLeft($context, array $blocks = array())
    {
        $__internal_23d4672330752ffd91405d4b3633c3ca41964f5d736512532a8d3b2fb3db6ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23d4672330752ffd91405d4b3633c3ca41964f5d736512532a8d3b2fb3db6ea3->enter($__internal_23d4672330752ffd91405d4b3633c3ca41964f5d736512532a8d3b2fb3db6ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentLeft"));

        $__internal_1a64d6d9a1708085b131055d1d95979a63790661b02d29cd1d0587ddee11c191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a64d6d9a1708085b131055d1d95979a63790661b02d29cd1d0587ddee11c191->enter($__internal_1a64d6d9a1708085b131055d1d95979a63790661b02d29cd1d0587ddee11c191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentLeft"));

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
        
        $__internal_1a64d6d9a1708085b131055d1d95979a63790661b02d29cd1d0587ddee11c191->leave($__internal_1a64d6d9a1708085b131055d1d95979a63790661b02d29cd1d0587ddee11c191_prof);

        
        $__internal_23d4672330752ffd91405d4b3633c3ca41964f5d736512532a8d3b2fb3db6ea3->leave($__internal_23d4672330752ffd91405d4b3633c3ca41964f5d736512532a8d3b2fb3db6ea3_prof);

    }

    // line 109
    public function block_contentRight($context, array $blocks = array())
    {
        $__internal_91ebb68922c976b42fefcb3b31321d6c9c0519f7c152353a6c8dd25b9e62351d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ebb68922c976b42fefcb3b31321d6c9c0519f7c152353a6c8dd25b9e62351d->enter($__internal_91ebb68922c976b42fefcb3b31321d6c9c0519f7c152353a6c8dd25b9e62351d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentRight"));

        $__internal_60941e44c6d2b199c5c0b90b15773a86e4bca3dfebb3abb243714ca38b8f93fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60941e44c6d2b199c5c0b90b15773a86e4bca3dfebb3abb243714ca38b8f93fc->enter($__internal_60941e44c6d2b199c5c0b90b15773a86e4bca3dfebb3abb243714ca38b8f93fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentRight"));

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
        
        $__internal_60941e44c6d2b199c5c0b90b15773a86e4bca3dfebb3abb243714ca38b8f93fc->leave($__internal_60941e44c6d2b199c5c0b90b15773a86e4bca3dfebb3abb243714ca38b8f93fc_prof);

        
        $__internal_91ebb68922c976b42fefcb3b31321d6c9c0519f7c152353a6c8dd25b9e62351d->leave($__internal_91ebb68922c976b42fefcb3b31321d6c9c0519f7c152353a6c8dd25b9e62351d_prof);

    }

    // line 227
    public function block_footer($context, array $blocks = array())
    {
        $__internal_25681f420e7e05a004c2a5bcb918f6d661d3eaae87c641a8b3d27d791f95637c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25681f420e7e05a004c2a5bcb918f6d661d3eaae87c641a8b3d27d791f95637c->enter($__internal_25681f420e7e05a004c2a5bcb918f6d661d3eaae87c641a8b3d27d791f95637c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ba6e4dd242258e6f54654bd5648c82eba26dea10370e95b4562662b74562209f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6e4dd242258e6f54654bd5648c82eba26dea10370e95b4562662b74562209f->enter($__internal_ba6e4dd242258e6f54654bd5648c82eba26dea10370e95b4562662b74562209f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 228
        echo "                ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:sidebarHero.html.twig", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", 228, "1943960645")->display($context);
        // line 231
        echo "            ";
        
        $__internal_ba6e4dd242258e6f54654bd5648c82eba26dea10370e95b4562662b74562209f->leave($__internal_ba6e4dd242258e6f54654bd5648c82eba26dea10370e95b4562662b74562209f_prof);

        
        $__internal_25681f420e7e05a004c2a5bcb918f6d661d3eaae87c641a8b3d27d791f95637c->leave($__internal_25681f420e7e05a004c2a5bcb918f6d661d3eaae87c641a8b3d27d791f95637c_prof);

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
        return array (  456 => 231,  453 => 228,  444 => 227,  324 => 110,  315 => 109,  260 => 63,  251 => 62,  239 => 221,  236 => 109,  234 => 62,  230 => 60,  221 => 59,  208 => 35,  199 => 34,  172 => 39,  170 => 34,  160 => 26,  151 => 25,  140 => 12,  131 => 11,  112 => 232,  110 => 227,  105 => 224,  103 => 59,  99 => 57,  97 => 25,  88 => 18,  86 => 11,  79 => 6,  70 => 5,  57 => 3,  48 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/sidebarHero.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>

{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Sidebar Hero</span>
        {% endblock %}
    {% endembed %}
{% endblock %}


<br>

<table class=\"container\">
    <tr>
        <td>
            {% block contentTop %}
            <!-- content start -->
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Welcome, Daneel Olivan</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    {% endblock %}
                                </td>
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
            {% endblock %}

            <br>  <!-- Break Tag for row -->
            {% block contentBottom %}
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
            {% endblock %}
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

</center>
</td>
</tr>
</table>
{% endblock %}", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/sidebarHero.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:sidebarHero.html.twig */
class __TwigTemplate_297f54969da019b6bfe3a32a027d64cb4c8059c7c3380691a8ed6541b764bac1_690690267 extends Twig_Template
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
        $__internal_14dc3aaa4978a24d3e3ad7f4c3c6bb4fc062b71f3ae8b1b04b4dea6387246532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14dc3aaa4978a24d3e3ad7f4c3c6bb4fc062b71f3ae8b1b04b4dea6387246532->enter($__internal_14dc3aaa4978a24d3e3ad7f4c3c6bb4fc062b71f3ae8b1b04b4dea6387246532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebarHero.html.twig"));

        $__internal_366e7fc75f14282c5d52674c66753308bd95ac70436980d4f60c4f28378ea709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366e7fc75f14282c5d52674c66753308bd95ac70436980d4f60c4f28378ea709->enter($__internal_366e7fc75f14282c5d52674c66753308bd95ac70436980d4f60c4f28378ea709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebarHero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14dc3aaa4978a24d3e3ad7f4c3c6bb4fc062b71f3ae8b1b04b4dea6387246532->leave($__internal_14dc3aaa4978a24d3e3ad7f4c3c6bb4fc062b71f3ae8b1b04b4dea6387246532_prof);

        
        $__internal_366e7fc75f14282c5d52674c66753308bd95ac70436980d4f60c4f28378ea709->leave($__internal_366e7fc75f14282c5d52674c66753308bd95ac70436980d4f60c4f28378ea709_prof);

    }

    // line 13
    public function block_headerColRight($context, array $blocks = array())
    {
        $__internal_966666569f22d8d6444ddfff94a7c522e6853560e61ee522079b3d8b94152eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_966666569f22d8d6444ddfff94a7c522e6853560e61ee522079b3d8b94152eab->enter($__internal_966666569f22d8d6444ddfff94a7c522e6853560e61ee522079b3d8b94152eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        $__internal_4b2ac6f9164a15c32c13cf14072212f1df4bae685f4f3045415bc30f52997bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2ac6f9164a15c32c13cf14072212f1df4bae685f4f3045415bc30f52997bca->enter($__internal_4b2ac6f9164a15c32c13cf14072212f1df4bae685f4f3045415bc30f52997bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        // line 14
        echo "            <span class=\"template-label\">Sidebar Hero</span>
        ";
        
        $__internal_4b2ac6f9164a15c32c13cf14072212f1df4bae685f4f3045415bc30f52997bca->leave($__internal_4b2ac6f9164a15c32c13cf14072212f1df4bae685f4f3045415bc30f52997bca_prof);

        
        $__internal_966666569f22d8d6444ddfff94a7c522e6853560e61ee522079b3d8b94152eab->leave($__internal_966666569f22d8d6444ddfff94a7c522e6853560e61ee522079b3d8b94152eab_prof);

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
        return array (  781 => 14,  772 => 13,  743 => 12,  456 => 231,  453 => 228,  444 => 227,  324 => 110,  315 => 109,  260 => 63,  251 => 62,  239 => 221,  236 => 109,  234 => 62,  230 => 60,  221 => 59,  208 => 35,  199 => 34,  172 => 39,  170 => 34,  160 => 26,  151 => 25,  140 => 12,  131 => 11,  112 => 232,  110 => 227,  105 => 224,  103 => 59,  99 => 57,  97 => 25,  88 => 18,  86 => 11,  79 => 6,  70 => 5,  57 => 3,  48 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/sidebarHero.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>

{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Sidebar Hero</span>
        {% endblock %}
    {% endembed %}
{% endblock %}


<br>

<table class=\"container\">
    <tr>
        <td>
            {% block contentTop %}
            <!-- content start -->
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Welcome, Daneel Olivan</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    {% endblock %}
                                </td>
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
            {% endblock %}

            <br>  <!-- Break Tag for row -->
            {% block contentBottom %}
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
            {% endblock %}
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

</center>
</td>
</tr>
</table>
{% endblock %}", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/sidebarHero.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:sidebarHero.html.twig */
class __TwigTemplate_297f54969da019b6bfe3a32a027d64cb4c8059c7c3380691a8ed6541b764bac1_1943960645 extends Twig_Template
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
        $__internal_ba4768c17f16b61a42cf55502a9466298c991d6bde577c84a3a8b5628733c4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4768c17f16b61a42cf55502a9466298c991d6bde577c84a3a8b5628733c4fc->enter($__internal_ba4768c17f16b61a42cf55502a9466298c991d6bde577c84a3a8b5628733c4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebarHero.html.twig"));

        $__internal_f02deb0ab46a9f82e98eafa516725b10c178fe5c51381602ffaa1a56f08da17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02deb0ab46a9f82e98eafa516725b10c178fe5c51381602ffaa1a56f08da17f->enter($__internal_f02deb0ab46a9f82e98eafa516725b10c178fe5c51381602ffaa1a56f08da17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:sidebarHero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba4768c17f16b61a42cf55502a9466298c991d6bde577c84a3a8b5628733c4fc->leave($__internal_ba4768c17f16b61a42cf55502a9466298c991d6bde577c84a3a8b5628733c4fc_prof);

        
        $__internal_f02deb0ab46a9f82e98eafa516725b10c178fe5c51381602ffaa1a56f08da17f->leave($__internal_f02deb0ab46a9f82e98eafa516725b10c178fe5c51381602ffaa1a56f08da17f_prof);

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
        return array (  1069 => 228,  781 => 14,  772 => 13,  743 => 12,  456 => 231,  453 => 228,  444 => 227,  324 => 110,  315 => 109,  260 => 63,  251 => 62,  239 => 221,  236 => 109,  234 => 62,  230 => 60,  221 => 59,  208 => 35,  199 => 34,  172 => 39,  170 => 34,  160 => 26,  151 => 25,  140 => 12,  131 => 11,  112 => 232,  110 => 227,  105 => 224,  103 => 59,  99 => 57,  97 => 25,  88 => 18,  86 => 11,  79 => 6,  70 => 5,  57 => 3,  48 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/sidebarHero.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>

{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Sidebar Hero</span>
        {% endblock %}
    {% endembed %}
{% endblock %}


<br>

<table class=\"container\">
    <tr>
        <td>
            {% block contentTop %}
            <!-- content start -->
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Welcome, Daneel Olivan</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    {% endblock %}
                                </td>
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
            {% endblock %}

            <br>  <!-- Break Tag for row -->
            {% block contentBottom %}
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
            {% endblock %}
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

</center>
</td>
</tr>
</table>
{% endblock %}", "HampeZurbInkBundle:Examples:sidebarHero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/sidebarHero.html.twig");
    }
}
