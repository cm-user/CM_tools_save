<?php

/* @HampeZurbInk/Examples/sidebarHero.html.twig */
class __TwigTemplate_2986589f581b61d977ed75d0facd3dfcb96eeb2bdaf56ab7e2c61be72b305eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HampeZurbInkBundle::base.html.twig", "@HampeZurbInk/Examples/sidebarHero.html.twig", 1);
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
        $__internal_4c06f9a802a5c2bb075dc6f933068423ea12f2ba47729d465ded4ffef54ac237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c06f9a802a5c2bb075dc6f933068423ea12f2ba47729d465ded4ffef54ac237->enter($__internal_4c06f9a802a5c2bb075dc6f933068423ea12f2ba47729d465ded4ffef54ac237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebarHero.html.twig"));

        $__internal_851750c920442b419ad7eeb8811f97d6b80f8070bf59555b6f2a261e5756a2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851750c920442b419ad7eeb8811f97d6b80f8070bf59555b6f2a261e5756a2c5->enter($__internal_851750c920442b419ad7eeb8811f97d6b80f8070bf59555b6f2a261e5756a2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebarHero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c06f9a802a5c2bb075dc6f933068423ea12f2ba47729d465ded4ffef54ac237->leave($__internal_4c06f9a802a5c2bb075dc6f933068423ea12f2ba47729d465ded4ffef54ac237_prof);

        
        $__internal_851750c920442b419ad7eeb8811f97d6b80f8070bf59555b6f2a261e5756a2c5->leave($__internal_851750c920442b419ad7eeb8811f97d6b80f8070bf59555b6f2a261e5756a2c5_prof);

    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_12398b1d85157d2790a3f275466c7a4426fcf19720047284514aab86dff9fc99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12398b1d85157d2790a3f275466c7a4426fcf19720047284514aab86dff9fc99->enter($__internal_12398b1d85157d2790a3f275466c7a4426fcf19720047284514aab86dff9fc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_9ce2bc370d163969a7483a9df15eebc8df839e0e4eb34c7ea3526399be99c644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce2bc370d163969a7483a9df15eebc8df839e0e4eb34c7ea3526399be99c644->enter($__internal_9ce2bc370d163969a7483a9df15eebc8df839e0e4eb34c7ea3526399be99c644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/sidebarHero.css"), "method"), "html", null, true);
        echo "
";
        
        $__internal_9ce2bc370d163969a7483a9df15eebc8df839e0e4eb34c7ea3526399be99c644->leave($__internal_9ce2bc370d163969a7483a9df15eebc8df839e0e4eb34c7ea3526399be99c644_prof);

        
        $__internal_12398b1d85157d2790a3f275466c7a4426fcf19720047284514aab86dff9fc99->leave($__internal_12398b1d85157d2790a3f275466c7a4426fcf19720047284514aab86dff9fc99_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_89794f918d111cc53dd6ca5e5bf18b0e7cf7f7a62a1e1fde15e8d000b124d59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89794f918d111cc53dd6ca5e5bf18b0e7cf7f7a62a1e1fde15e8d000b124d59c->enter($__internal_89794f918d111cc53dd6ca5e5bf18b0e7cf7f7a62a1e1fde15e8d000b124d59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2a67dca663cac4dcbe1a8d150fcc0ce145cdf5210d07e293a56cd3f6cfb917f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a67dca663cac4dcbe1a8d150fcc0ce145cdf5210d07e293a56cd3f6cfb917f->enter($__internal_d2a67dca663cac4dcbe1a8d150fcc0ce145cdf5210d07e293a56cd3f6cfb917f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2a67dca663cac4dcbe1a8d150fcc0ce145cdf5210d07e293a56cd3f6cfb917f->leave($__internal_d2a67dca663cac4dcbe1a8d150fcc0ce145cdf5210d07e293a56cd3f6cfb917f_prof);

        
        $__internal_89794f918d111cc53dd6ca5e5bf18b0e7cf7f7a62a1e1fde15e8d000b124d59c->leave($__internal_89794f918d111cc53dd6ca5e5bf18b0e7cf7f7a62a1e1fde15e8d000b124d59c_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_700b0e9a3044a0ff96218dba70a08c9c4c542762e512dacd216feadb4b0e9337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700b0e9a3044a0ff96218dba70a08c9c4c542762e512dacd216feadb4b0e9337->enter($__internal_700b0e9a3044a0ff96218dba70a08c9c4c542762e512dacd216feadb4b0e9337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0e2361f4dbfec5c2133ffca152d8ce1639138af5337c5b456118b3164fce0054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2361f4dbfec5c2133ffca152d8ce1639138af5337c5b456118b3164fce0054->enter($__internal_0e2361f4dbfec5c2133ffca152d8ce1639138af5337c5b456118b3164fce0054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    ";
        $this->loadTemplate("@HampeZurbInk/Examples/sidebarHero.html.twig", "@HampeZurbInk/Examples/sidebarHero.html.twig", 12, "1747550019")->display($context);
        
        $__internal_0e2361f4dbfec5c2133ffca152d8ce1639138af5337c5b456118b3164fce0054->leave($__internal_0e2361f4dbfec5c2133ffca152d8ce1639138af5337c5b456118b3164fce0054_prof);

        
        $__internal_700b0e9a3044a0ff96218dba70a08c9c4c542762e512dacd216feadb4b0e9337->leave($__internal_700b0e9a3044a0ff96218dba70a08c9c4c542762e512dacd216feadb4b0e9337_prof);

    }

    // line 25
    public function block_contentTop($context, array $blocks = array())
    {
        $__internal_5db4c8e8b233432698f4ae557269539376458e913faa31abed522b88e928f268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db4c8e8b233432698f4ae557269539376458e913faa31abed522b88e928f268->enter($__internal_5db4c8e8b233432698f4ae557269539376458e913faa31abed522b88e928f268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

        $__internal_aa54389ea7419341cbf4c1e4ff18d0ee8b5873b82d9fcdbfaa2cb4225d66409c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa54389ea7419341cbf4c1e4ff18d0ee8b5873b82d9fcdbfaa2cb4225d66409c->enter($__internal_aa54389ea7419341cbf4c1e4ff18d0ee8b5873b82d9fcdbfaa2cb4225d66409c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

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
        
        $__internal_aa54389ea7419341cbf4c1e4ff18d0ee8b5873b82d9fcdbfaa2cb4225d66409c->leave($__internal_aa54389ea7419341cbf4c1e4ff18d0ee8b5873b82d9fcdbfaa2cb4225d66409c_prof);

        
        $__internal_5db4c8e8b233432698f4ae557269539376458e913faa31abed522b88e928f268->leave($__internal_5db4c8e8b233432698f4ae557269539376458e913faa31abed522b88e928f268_prof);

    }

    // line 34
    public function block_contentTopInner($context, array $blocks = array())
    {
        $__internal_bccd1c3cac32f1aaada0e1ee9adf3d1936e5cbc79d93450ae35a387e999f35ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccd1c3cac32f1aaada0e1ee9adf3d1936e5cbc79d93450ae35a387e999f35ed->enter($__internal_bccd1c3cac32f1aaada0e1ee9adf3d1936e5cbc79d93450ae35a387e999f35ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        $__internal_78818316e78ffdcfd48f9bec22f3665e3f8d6da5461da67d0d7288e445d31095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78818316e78ffdcfd48f9bec22f3665e3f8d6da5461da67d0d7288e445d31095->enter($__internal_78818316e78ffdcfd48f9bec22f3665e3f8d6da5461da67d0d7288e445d31095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        // line 35
        echo "                                    <h1>Welcome, Daneel Olivan</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    ";
        
        $__internal_78818316e78ffdcfd48f9bec22f3665e3f8d6da5461da67d0d7288e445d31095->leave($__internal_78818316e78ffdcfd48f9bec22f3665e3f8d6da5461da67d0d7288e445d31095_prof);

        
        $__internal_bccd1c3cac32f1aaada0e1ee9adf3d1936e5cbc79d93450ae35a387e999f35ed->leave($__internal_bccd1c3cac32f1aaada0e1ee9adf3d1936e5cbc79d93450ae35a387e999f35ed_prof);

    }

    // line 59
    public function block_contentBottom($context, array $blocks = array())
    {
        $__internal_3e6efe6179b5c667adc12fc7d6ad0deb198590d59e4d3cd2c26ff0e748902470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6efe6179b5c667adc12fc7d6ad0deb198590d59e4d3cd2c26ff0e748902470->enter($__internal_3e6efe6179b5c667adc12fc7d6ad0deb198590d59e4d3cd2c26ff0e748902470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottom"));

        $__internal_c8f74d5502fd868c300690f8a3157b7d6bd63f658f450e557a70e7e3d52e3adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f74d5502fd868c300690f8a3157b7d6bd63f658f450e557a70e7e3d52e3adc->enter($__internal_c8f74d5502fd868c300690f8a3157b7d6bd63f658f450e557a70e7e3d52e3adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottom"));

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
        
        $__internal_c8f74d5502fd868c300690f8a3157b7d6bd63f658f450e557a70e7e3d52e3adc->leave($__internal_c8f74d5502fd868c300690f8a3157b7d6bd63f658f450e557a70e7e3d52e3adc_prof);

        
        $__internal_3e6efe6179b5c667adc12fc7d6ad0deb198590d59e4d3cd2c26ff0e748902470->leave($__internal_3e6efe6179b5c667adc12fc7d6ad0deb198590d59e4d3cd2c26ff0e748902470_prof);

    }

    // line 62
    public function block_contentLeft($context, array $blocks = array())
    {
        $__internal_2a86376be29d1ed3a67ecb606c1ce6da5c0ab5796e666c447cdcfc31734c5c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a86376be29d1ed3a67ecb606c1ce6da5c0ab5796e666c447cdcfc31734c5c6f->enter($__internal_2a86376be29d1ed3a67ecb606c1ce6da5c0ab5796e666c447cdcfc31734c5c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentLeft"));

        $__internal_4c781d9a1d2c6f53613cf6231d92f9d1c3979321302002c0f5abde68e9ebd3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c781d9a1d2c6f53613cf6231d92f9d1c3979321302002c0f5abde68e9ebd3e0->enter($__internal_4c781d9a1d2c6f53613cf6231d92f9d1c3979321302002c0f5abde68e9ebd3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentLeft"));

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
        
        $__internal_4c781d9a1d2c6f53613cf6231d92f9d1c3979321302002c0f5abde68e9ebd3e0->leave($__internal_4c781d9a1d2c6f53613cf6231d92f9d1c3979321302002c0f5abde68e9ebd3e0_prof);

        
        $__internal_2a86376be29d1ed3a67ecb606c1ce6da5c0ab5796e666c447cdcfc31734c5c6f->leave($__internal_2a86376be29d1ed3a67ecb606c1ce6da5c0ab5796e666c447cdcfc31734c5c6f_prof);

    }

    // line 109
    public function block_contentRight($context, array $blocks = array())
    {
        $__internal_402a2d944b790b07990f7a314b9f80cf03b7b6622e19d48004bba9bc5e3d8558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402a2d944b790b07990f7a314b9f80cf03b7b6622e19d48004bba9bc5e3d8558->enter($__internal_402a2d944b790b07990f7a314b9f80cf03b7b6622e19d48004bba9bc5e3d8558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentRight"));

        $__internal_5ef634f9be13ebc9ceeb2e98d3b9676be5954eaa726cba576ba2d6c45310a761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef634f9be13ebc9ceeb2e98d3b9676be5954eaa726cba576ba2d6c45310a761->enter($__internal_5ef634f9be13ebc9ceeb2e98d3b9676be5954eaa726cba576ba2d6c45310a761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentRight"));

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
        
        $__internal_5ef634f9be13ebc9ceeb2e98d3b9676be5954eaa726cba576ba2d6c45310a761->leave($__internal_5ef634f9be13ebc9ceeb2e98d3b9676be5954eaa726cba576ba2d6c45310a761_prof);

        
        $__internal_402a2d944b790b07990f7a314b9f80cf03b7b6622e19d48004bba9bc5e3d8558->leave($__internal_402a2d944b790b07990f7a314b9f80cf03b7b6622e19d48004bba9bc5e3d8558_prof);

    }

    // line 227
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7a07ca2c1847dfc824f443eab69dc2127ee7d4a2381aaeee0431b930eb37a507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a07ca2c1847dfc824f443eab69dc2127ee7d4a2381aaeee0431b930eb37a507->enter($__internal_7a07ca2c1847dfc824f443eab69dc2127ee7d4a2381aaeee0431b930eb37a507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_9a6a68888e92b023e5e452f38b617b7cedcb1a7f43b149e224a549882bae344d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6a68888e92b023e5e452f38b617b7cedcb1a7f43b149e224a549882bae344d->enter($__internal_9a6a68888e92b023e5e452f38b617b7cedcb1a7f43b149e224a549882bae344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 228
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/sidebarHero.html.twig", "@HampeZurbInk/Examples/sidebarHero.html.twig", 228, "1655499096")->display($context);
        // line 231
        echo "            ";
        
        $__internal_9a6a68888e92b023e5e452f38b617b7cedcb1a7f43b149e224a549882bae344d->leave($__internal_9a6a68888e92b023e5e452f38b617b7cedcb1a7f43b149e224a549882bae344d_prof);

        
        $__internal_7a07ca2c1847dfc824f443eab69dc2127ee7d4a2381aaeee0431b930eb37a507->leave($__internal_7a07ca2c1847dfc824f443eab69dc2127ee7d4a2381aaeee0431b930eb37a507_prof);

    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/sidebarHero.html.twig";
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
{% endblock %}", "@HampeZurbInk/Examples/sidebarHero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\sidebarHero.html.twig");
    }
}


/* @HampeZurbInk/Examples/sidebarHero.html.twig */
class __TwigTemplate_2986589f581b61d977ed75d0facd3dfcb96eeb2bdaf56ab7e2c61be72b305eff_1747550019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:header.html.twig", "@HampeZurbInk/Examples/sidebarHero.html.twig", 12);
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
        $__internal_8e8f4939899b69e38541dcfa26836d1d7a7cc83010a4149ab121511567209459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8f4939899b69e38541dcfa26836d1d7a7cc83010a4149ab121511567209459->enter($__internal_8e8f4939899b69e38541dcfa26836d1d7a7cc83010a4149ab121511567209459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebarHero.html.twig"));

        $__internal_8644a0dcd55fc209766d89701a218766cfc7793c19817cf3cff364090e0acf81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8644a0dcd55fc209766d89701a218766cfc7793c19817cf3cff364090e0acf81->enter($__internal_8644a0dcd55fc209766d89701a218766cfc7793c19817cf3cff364090e0acf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebarHero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e8f4939899b69e38541dcfa26836d1d7a7cc83010a4149ab121511567209459->leave($__internal_8e8f4939899b69e38541dcfa26836d1d7a7cc83010a4149ab121511567209459_prof);

        
        $__internal_8644a0dcd55fc209766d89701a218766cfc7793c19817cf3cff364090e0acf81->leave($__internal_8644a0dcd55fc209766d89701a218766cfc7793c19817cf3cff364090e0acf81_prof);

    }

    // line 13
    public function block_headerColRight($context, array $blocks = array())
    {
        $__internal_f7787644ecf978f50a99e85c78092f88953fcfa1a4af3b5650425b54f97025a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7787644ecf978f50a99e85c78092f88953fcfa1a4af3b5650425b54f97025a7->enter($__internal_f7787644ecf978f50a99e85c78092f88953fcfa1a4af3b5650425b54f97025a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        $__internal_e1ca1c3a9fc2962d1aff713ff2bcecb55f2453ff18eb74b9756f3a9f96f02f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ca1c3a9fc2962d1aff713ff2bcecb55f2453ff18eb74b9756f3a9f96f02f12->enter($__internal_e1ca1c3a9fc2962d1aff713ff2bcecb55f2453ff18eb74b9756f3a9f96f02f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        // line 14
        echo "            <span class=\"template-label\">Sidebar Hero</span>
        ";
        
        $__internal_e1ca1c3a9fc2962d1aff713ff2bcecb55f2453ff18eb74b9756f3a9f96f02f12->leave($__internal_e1ca1c3a9fc2962d1aff713ff2bcecb55f2453ff18eb74b9756f3a9f96f02f12_prof);

        
        $__internal_f7787644ecf978f50a99e85c78092f88953fcfa1a4af3b5650425b54f97025a7->leave($__internal_f7787644ecf978f50a99e85c78092f88953fcfa1a4af3b5650425b54f97025a7_prof);

    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/sidebarHero.html.twig";
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
{% endblock %}", "@HampeZurbInk/Examples/sidebarHero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\sidebarHero.html.twig");
    }
}


/* @HampeZurbInk/Examples/sidebarHero.html.twig */
class __TwigTemplate_2986589f581b61d977ed75d0facd3dfcb96eeb2bdaf56ab7e2c61be72b305eff_1655499096 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 228
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:footer.html.twig", "@HampeZurbInk/Examples/sidebarHero.html.twig", 228);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "HampeZurbInkBundle:Partials:footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e7889cd1e269c861c76f3897422d60e8a2934215dc151499f470f65dff18b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7889cd1e269c861c76f3897422d60e8a2934215dc151499f470f65dff18b77->enter($__internal_6e7889cd1e269c861c76f3897422d60e8a2934215dc151499f470f65dff18b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebarHero.html.twig"));

        $__internal_f955ed59fdc6b0177556da6a327e8998b1e08d8c4f6228ef90a6d8f635020509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f955ed59fdc6b0177556da6a327e8998b1e08d8c4f6228ef90a6d8f635020509->enter($__internal_f955ed59fdc6b0177556da6a327e8998b1e08d8c4f6228ef90a6d8f635020509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/sidebarHero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e7889cd1e269c861c76f3897422d60e8a2934215dc151499f470f65dff18b77->leave($__internal_6e7889cd1e269c861c76f3897422d60e8a2934215dc151499f470f65dff18b77_prof);

        
        $__internal_f955ed59fdc6b0177556da6a327e8998b1e08d8c4f6228ef90a6d8f635020509->leave($__internal_f955ed59fdc6b0177556da6a327e8998b1e08d8c4f6228ef90a6d8f635020509_prof);

    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/Examples/sidebarHero.html.twig";
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
{% endblock %}", "@HampeZurbInk/Examples/sidebarHero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\sidebarHero.html.twig");
    }
}
