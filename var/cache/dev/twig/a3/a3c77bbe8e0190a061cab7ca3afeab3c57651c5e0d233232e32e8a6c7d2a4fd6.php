<?php

/* HampeZurbInkBundle:Examples:hero.html.twig */
class __TwigTemplate_21a78d71680a5fcc7e1bfb86002f643b57b3f03f4c6322a6676c94d933afc9a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HampeZurbInkBundle::base.html.twig", "HampeZurbInkBundle:Examples:hero.html.twig", 1);
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
        $__internal_4c1e41cfe6669b3bcba95667b30731b587ad4764cb2320ee4fea3032a7da2371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1e41cfe6669b3bcba95667b30731b587ad4764cb2320ee4fea3032a7da2371->enter($__internal_4c1e41cfe6669b3bcba95667b30731b587ad4764cb2320ee4fea3032a7da2371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:hero.html.twig"));

        $__internal_eb257784db406801948f543297674de539c80349db713b5f7d9f183e97e15e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb257784db406801948f543297674de539c80349db713b5f7d9f183e97e15e29->enter($__internal_eb257784db406801948f543297674de539c80349db713b5f7d9f183e97e15e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:hero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c1e41cfe6669b3bcba95667b30731b587ad4764cb2320ee4fea3032a7da2371->leave($__internal_4c1e41cfe6669b3bcba95667b30731b587ad4764cb2320ee4fea3032a7da2371_prof);

        
        $__internal_eb257784db406801948f543297674de539c80349db713b5f7d9f183e97e15e29->leave($__internal_eb257784db406801948f543297674de539c80349db713b5f7d9f183e97e15e29_prof);

    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_893421294662f715cec8fba23fad17d3dd888797d913c3e2e636fb5b3e4d46b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893421294662f715cec8fba23fad17d3dd888797d913c3e2e636fb5b3e4d46b7->enter($__internal_893421294662f715cec8fba23fad17d3dd888797d913c3e2e636fb5b3e4d46b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_fd62dd5adbe7cb77e2fea70d028c7371ea1b172c9a258ae274951dc88f2c70ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd62dd5adbe7cb77e2fea70d028c7371ea1b172c9a258ae274951dc88f2c70ad->enter($__internal_fd62dd5adbe7cb77e2fea70d028c7371ea1b172c9a258ae274951dc88f2c70ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/hero.css"), "method"), "html", null, true);
        echo "
";
        
        $__internal_fd62dd5adbe7cb77e2fea70d028c7371ea1b172c9a258ae274951dc88f2c70ad->leave($__internal_fd62dd5adbe7cb77e2fea70d028c7371ea1b172c9a258ae274951dc88f2c70ad_prof);

        
        $__internal_893421294662f715cec8fba23fad17d3dd888797d913c3e2e636fb5b3e4d46b7->leave($__internal_893421294662f715cec8fba23fad17d3dd888797d913c3e2e636fb5b3e4d46b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cac9ead2c078a50ea045b198b5d63a99636e02e83c842ce3dc3436a7d3b9cb54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac9ead2c078a50ea045b198b5d63a99636e02e83c842ce3dc3436a7d3b9cb54->enter($__internal_cac9ead2c078a50ea045b198b5d63a99636e02e83c842ce3dc3436a7d3b9cb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a6b0c3be65d43560aab9500a399bd21bdf469a4769ac5603aa179f87e677af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6b0c3be65d43560aab9500a399bd21bdf469a4769ac5603aa179f87e677af8->enter($__internal_2a6b0c3be65d43560aab9500a399bd21bdf469a4769ac5603aa179f87e677af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2a6b0c3be65d43560aab9500a399bd21bdf469a4769ac5603aa179f87e677af8->leave($__internal_2a6b0c3be65d43560aab9500a399bd21bdf469a4769ac5603aa179f87e677af8_prof);

        
        $__internal_cac9ead2c078a50ea045b198b5d63a99636e02e83c842ce3dc3436a7d3b9cb54->leave($__internal_cac9ead2c078a50ea045b198b5d63a99636e02e83c842ce3dc3436a7d3b9cb54_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_ea1c95e23a4af35a8cd4f7f106559d5739748dc1a4895a5a56ebf6afdb03d620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1c95e23a4af35a8cd4f7f106559d5739748dc1a4895a5a56ebf6afdb03d620->enter($__internal_ea1c95e23a4af35a8cd4f7f106559d5739748dc1a4895a5a56ebf6afdb03d620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_67fc3ede9ba4eb262ff52beb4804bd352e176d8a603db7bcaede8b7589e56cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fc3ede9ba4eb262ff52beb4804bd352e176d8a603db7bcaede8b7589e56cc5->enter($__internal_67fc3ede9ba4eb262ff52beb4804bd352e176d8a603db7bcaede8b7589e56cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:hero.html.twig", "HampeZurbInkBundle:Examples:hero.html.twig", 11, "304823810")->display($context);
        
        $__internal_67fc3ede9ba4eb262ff52beb4804bd352e176d8a603db7bcaede8b7589e56cc5->leave($__internal_67fc3ede9ba4eb262ff52beb4804bd352e176d8a603db7bcaede8b7589e56cc5_prof);

        
        $__internal_ea1c95e23a4af35a8cd4f7f106559d5739748dc1a4895a5a56ebf6afdb03d620->leave($__internal_ea1c95e23a4af35a8cd4f7f106559d5739748dc1a4895a5a56ebf6afdb03d620_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_c06da2d29854e41e58679ec9974ae0f49119b8272a49f768f36412ea759ee05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06da2d29854e41e58679ec9974ae0f49119b8272a49f768f36412ea759ee05f->enter($__internal_c06da2d29854e41e58679ec9974ae0f49119b8272a49f768f36412ea759ee05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_264b62c198585ac5940a14a21ca714fa953a86e1e857d56c91a24addcc8abf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264b62c198585ac5940a14a21ca714fa953a86e1e857d56c91a24addcc8abf7e->enter($__internal_264b62c198585ac5940a14a21ca714fa953a86e1e857d56c91a24addcc8abf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_264b62c198585ac5940a14a21ca714fa953a86e1e857d56c91a24addcc8abf7e->leave($__internal_264b62c198585ac5940a14a21ca714fa953a86e1e857d56c91a24addcc8abf7e_prof);

        
        $__internal_c06da2d29854e41e58679ec9974ae0f49119b8272a49f768f36412ea759ee05f->leave($__internal_c06da2d29854e41e58679ec9974ae0f49119b8272a49f768f36412ea759ee05f_prof);

    }

    // line 24
    public function block_contentTop($context, array $blocks = array())
    {
        $__internal_a7cf832921cd5ca95b85107a1224bd3754f47fb1da1b0753132a3160e80ddf59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7cf832921cd5ca95b85107a1224bd3754f47fb1da1b0753132a3160e80ddf59->enter($__internal_a7cf832921cd5ca95b85107a1224bd3754f47fb1da1b0753132a3160e80ddf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

        $__internal_11510c1cb9010a89c7c07f908be868ade581ec93550a35258a735265856ce0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11510c1cb9010a89c7c07f908be868ade581ec93550a35258a735265856ce0f2->enter($__internal_11510c1cb9010a89c7c07f908be868ade581ec93550a35258a735265856ce0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

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
        
        $__internal_11510c1cb9010a89c7c07f908be868ade581ec93550a35258a735265856ce0f2->leave($__internal_11510c1cb9010a89c7c07f908be868ade581ec93550a35258a735265856ce0f2_prof);

        
        $__internal_a7cf832921cd5ca95b85107a1224bd3754f47fb1da1b0753132a3160e80ddf59->leave($__internal_a7cf832921cd5ca95b85107a1224bd3754f47fb1da1b0753132a3160e80ddf59_prof);

    }

    // line 32
    public function block_contentTopInner($context, array $blocks = array())
    {
        $__internal_9ea0b7a5949f67d6687a1cf77dd6c75d7546b9217a15ec2d4e201a1471170996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea0b7a5949f67d6687a1cf77dd6c75d7546b9217a15ec2d4e201a1471170996->enter($__internal_9ea0b7a5949f67d6687a1cf77dd6c75d7546b9217a15ec2d4e201a1471170996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        $__internal_de9c9b5a19af1dca96732110b89a7ff7b20503910f7ca20aeafe4d0dcad4a24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9c9b5a19af1dca96732110b89a7ff7b20503910f7ca20aeafe4d0dcad4a24f->enter($__internal_de9c9b5a19af1dca96732110b89a7ff7b20503910f7ca20aeafe4d0dcad4a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        // line 33
        echo "                                    <h1>Hi, Elijah Baily</h1>
                                    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    ";
        
        $__internal_de9c9b5a19af1dca96732110b89a7ff7b20503910f7ca20aeafe4d0dcad4a24f->leave($__internal_de9c9b5a19af1dca96732110b89a7ff7b20503910f7ca20aeafe4d0dcad4a24f_prof);

        
        $__internal_9ea0b7a5949f67d6687a1cf77dd6c75d7546b9217a15ec2d4e201a1471170996->leave($__internal_9ea0b7a5949f67d6687a1cf77dd6c75d7546b9217a15ec2d4e201a1471170996_prof);

    }

    // line 46
    public function block_contentPanel($context, array $blocks = array())
    {
        $__internal_17760b780807a6ab498513f6fef62bd49d6893a0f7914b453c38047805d862cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17760b780807a6ab498513f6fef62bd49d6893a0f7914b453c38047805d862cb->enter($__internal_17760b780807a6ab498513f6fef62bd49d6893a0f7914b453c38047805d862cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanel"));

        $__internal_3e69fa19bdcd30de41ba3913258f636fc4bdb419f2d41bfcc9496ff83327cd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e69fa19bdcd30de41ba3913258f636fc4bdb419f2d41bfcc9496ff83327cd85->enter($__internal_3e69fa19bdcd30de41ba3913258f636fc4bdb419f2d41bfcc9496ff83327cd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanel"));

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
        
        $__internal_3e69fa19bdcd30de41ba3913258f636fc4bdb419f2d41bfcc9496ff83327cd85->leave($__internal_3e69fa19bdcd30de41ba3913258f636fc4bdb419f2d41bfcc9496ff83327cd85_prof);

        
        $__internal_17760b780807a6ab498513f6fef62bd49d6893a0f7914b453c38047805d862cb->leave($__internal_17760b780807a6ab498513f6fef62bd49d6893a0f7914b453c38047805d862cb_prof);

    }

    // line 53
    public function block_contentPanelInner($context, array $blocks = array())
    {
        $__internal_8b7b1f88efc69d37c66ea868cf075f5e34c57646455824b9354d99489353816b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b7b1f88efc69d37c66ea868cf075f5e34c57646455824b9354d99489353816b->enter($__internal_8b7b1f88efc69d37c66ea868cf075f5e34c57646455824b9354d99489353816b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanelInner"));

        $__internal_3096c20bbda199f41067a4b954cbce2494bbd00c26a9fc5fdd11e6b43bf69a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3096c20bbda199f41067a4b954cbce2494bbd00c26a9fc5fdd11e6b43bf69a48->enter($__internal_3096c20bbda199f41067a4b954cbce2494bbd00c26a9fc5fdd11e6b43bf69a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanelInner"));

        // line 54
        echo "                                <td class=\"panel\">

                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>

                                </td>
                                ";
        
        $__internal_3096c20bbda199f41067a4b954cbce2494bbd00c26a9fc5fdd11e6b43bf69a48->leave($__internal_3096c20bbda199f41067a4b954cbce2494bbd00c26a9fc5fdd11e6b43bf69a48_prof);

        
        $__internal_8b7b1f88efc69d37c66ea868cf075f5e34c57646455824b9354d99489353816b->leave($__internal_8b7b1f88efc69d37c66ea868cf075f5e34c57646455824b9354d99489353816b_prof);

    }

    // line 68
    public function block_contentBottom($context, array $blocks = array())
    {
        $__internal_98f6729bcb0d7ebd51f56b41d1db8859709cd996faec656dc4d8f1c77f9618cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f6729bcb0d7ebd51f56b41d1db8859709cd996faec656dc4d8f1c77f9618cd->enter($__internal_98f6729bcb0d7ebd51f56b41d1db8859709cd996faec656dc4d8f1c77f9618cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottom"));

        $__internal_b2951381e65efbc9804c26b77ee7198d9a8e5dea0aac9edb2cdfd99eac360b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2951381e65efbc9804c26b77ee7198d9a8e5dea0aac9edb2cdfd99eac360b5f->enter($__internal_b2951381e65efbc9804c26b77ee7198d9a8e5dea0aac9edb2cdfd99eac360b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottom"));

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
        
        $__internal_b2951381e65efbc9804c26b77ee7198d9a8e5dea0aac9edb2cdfd99eac360b5f->leave($__internal_b2951381e65efbc9804c26b77ee7198d9a8e5dea0aac9edb2cdfd99eac360b5f_prof);

        
        $__internal_98f6729bcb0d7ebd51f56b41d1db8859709cd996faec656dc4d8f1c77f9618cd->leave($__internal_98f6729bcb0d7ebd51f56b41d1db8859709cd996faec656dc4d8f1c77f9618cd_prof);

    }

    // line 76
    public function block_contentBottomInner($context, array $blocks = array())
    {
        $__internal_be80f435e73122e925a31d7994e98fb6afa20ddd2c23ab954cba05022bb99ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be80f435e73122e925a31d7994e98fb6afa20ddd2c23ab954cba05022bb99ab8->enter($__internal_be80f435e73122e925a31d7994e98fb6afa20ddd2c23ab954cba05022bb99ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomInner"));

        $__internal_7877a77d2b859a86ef598442c21ef9beba9a28ed1cc9c9886b14458c4638e099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7877a77d2b859a86ef598442c21ef9beba9a28ed1cc9c9886b14458c4638e099->enter($__internal_7877a77d2b859a86ef598442c21ef9beba9a28ed1cc9c9886b14458c4638e099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomInner"));

        // line 77
        echo "                                    <h3>Title Ipsum <small>This is a note.</small></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    ";
        
        $__internal_7877a77d2b859a86ef598442c21ef9beba9a28ed1cc9c9886b14458c4638e099->leave($__internal_7877a77d2b859a86ef598442c21ef9beba9a28ed1cc9c9886b14458c4638e099_prof);

        
        $__internal_be80f435e73122e925a31d7994e98fb6afa20ddd2c23ab954cba05022bb99ab8->leave($__internal_be80f435e73122e925a31d7994e98fb6afa20ddd2c23ab954cba05022bb99ab8_prof);

    }

    // line 89
    public function block_contentBottomButton($context, array $blocks = array())
    {
        $__internal_46d97e3169204ecf6676acd15316da2a24dcf76af359411c4eff849370a26ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d97e3169204ecf6676acd15316da2a24dcf76af359411c4eff849370a26ae5->enter($__internal_46d97e3169204ecf6676acd15316da2a24dcf76af359411c4eff849370a26ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomButton"));

        $__internal_cf69d7306061c0d631519fb7bd10e4678f97b1264dfad4aae8e0df247ef42efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf69d7306061c0d631519fb7bd10e4678f97b1264dfad4aae8e0df247ef42efa->enter($__internal_cf69d7306061c0d631519fb7bd10e4678f97b1264dfad4aae8e0df247ef42efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomButton"));

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
        
        $__internal_cf69d7306061c0d631519fb7bd10e4678f97b1264dfad4aae8e0df247ef42efa->leave($__internal_cf69d7306061c0d631519fb7bd10e4678f97b1264dfad4aae8e0df247ef42efa_prof);

        
        $__internal_46d97e3169204ecf6676acd15316da2a24dcf76af359411c4eff849370a26ae5->leave($__internal_46d97e3169204ecf6676acd15316da2a24dcf76af359411c4eff849370a26ae5_prof);

    }

    // line 101
    public function block_contentBottomButtonLink($context, array $blocks = array())
    {
        $__internal_c3bb91595c063a9f69d0d2d1bdbee66613f9f97c5b08ff271aab54248e877562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3bb91595c063a9f69d0d2d1bdbee66613f9f97c5b08ff271aab54248e877562->enter($__internal_c3bb91595c063a9f69d0d2d1bdbee66613f9f97c5b08ff271aab54248e877562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomButtonLink"));

        $__internal_3c88e470ac3895070c914e9fa3a0f459f681a8074eb36403264d84910e5b9477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c88e470ac3895070c914e9fa3a0f459f681a8074eb36403264d84910e5b9477->enter($__internal_3c88e470ac3895070c914e9fa3a0f459f681a8074eb36403264d84910e5b9477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomButtonLink"));

        // line 102
        echo "                                                <a href=\"#\">Click Me!</a>
                                                ";
        
        $__internal_3c88e470ac3895070c914e9fa3a0f459f681a8074eb36403264d84910e5b9477->leave($__internal_3c88e470ac3895070c914e9fa3a0f459f681a8074eb36403264d84910e5b9477_prof);

        
        $__internal_c3bb91595c063a9f69d0d2d1bdbee66613f9f97c5b08ff271aab54248e877562->leave($__internal_c3bb91595c063a9f69d0d2d1bdbee66613f9f97c5b08ff271aab54248e877562_prof);

    }

    // line 118
    public function block_socialBlock($context, array $blocks = array())
    {
        $__internal_2a1d159472147aec41e099a7a2781d07d8033b23aef93ad5594a762af8facad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1d159472147aec41e099a7a2781d07d8033b23aef93ad5594a762af8facad6->enter($__internal_2a1d159472147aec41e099a7a2781d07d8033b23aef93ad5594a762af8facad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "socialBlock"));

        $__internal_694af4aebc26d95082b9011b7b9a9dceb1483f4ebbf2ebb0cd79dc68c623d5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694af4aebc26d95082b9011b7b9a9dceb1483f4ebbf2ebb0cd79dc68c623d5d8->enter($__internal_694af4aebc26d95082b9011b7b9a9dceb1483f4ebbf2ebb0cd79dc68c623d5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "socialBlock"));

        // line 119
        echo "                ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:hero.html.twig", "HampeZurbInkBundle:Examples:hero.html.twig", 119, "445383268")->display($context);
        // line 122
        echo "            ";
        
        $__internal_694af4aebc26d95082b9011b7b9a9dceb1483f4ebbf2ebb0cd79dc68c623d5d8->leave($__internal_694af4aebc26d95082b9011b7b9a9dceb1483f4ebbf2ebb0cd79dc68c623d5d8_prof);

        
        $__internal_2a1d159472147aec41e099a7a2781d07d8033b23aef93ad5594a762af8facad6->leave($__internal_2a1d159472147aec41e099a7a2781d07d8033b23aef93ad5594a762af8facad6_prof);

    }

    // line 123
    public function block_footer($context, array $blocks = array())
    {
        $__internal_94f6cb18e9c6f2428a3142a682bd896234c8bfeb6c78bd950738e997391e5319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f6cb18e9c6f2428a3142a682bd896234c8bfeb6c78bd950738e997391e5319->enter($__internal_94f6cb18e9c6f2428a3142a682bd896234c8bfeb6c78bd950738e997391e5319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_88a199acc799252b8bbe389df0c2b44c8a2aebe7663489fb250919a6f6713964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a199acc799252b8bbe389df0c2b44c8a2aebe7663489fb250919a6f6713964->enter($__internal_88a199acc799252b8bbe389df0c2b44c8a2aebe7663489fb250919a6f6713964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 124
        echo "                ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:hero.html.twig", "HampeZurbInkBundle:Examples:hero.html.twig", 124, "1668047936")->display($context);
        // line 129
        echo "            ";
        
        $__internal_88a199acc799252b8bbe389df0c2b44c8a2aebe7663489fb250919a6f6713964->leave($__internal_88a199acc799252b8bbe389df0c2b44c8a2aebe7663489fb250919a6f6713964_prof);

        
        $__internal_94f6cb18e9c6f2428a3142a682bd896234c8bfeb6c78bd950738e997391e5319->leave($__internal_94f6cb18e9c6f2428a3142a682bd896234c8bfeb6c78bd950738e997391e5319_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 129,  458 => 124,  449 => 123,  439 => 122,  436 => 119,  427 => 118,  416 => 102,  407 => 101,  385 => 104,  383 => 101,  370 => 90,  361 => 89,  349 => 77,  340 => 76,  322 => 80,  320 => 76,  311 => 69,  302 => 68,  287 => 54,  278 => 53,  261 => 60,  259 => 53,  251 => 47,  242 => 46,  229 => 33,  220 => 32,  202 => 37,  200 => 32,  191 => 25,  182 => 24,  171 => 130,  168 => 123,  166 => 118,  163 => 117,  160 => 89,  157 => 68,  154 => 46,  152 => 24,  149 => 23,  140 => 22,  129 => 11,  120 => 10,  101 => 132,  99 => 22,  92 => 17,  90 => 10,  84 => 6,  75 => 5,  62 => 3,  53 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/hero.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>
{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Hero</span>
        {% endblock %}
    {% endembed %}
{% endblock %}
<br>

<table class=\"container\">
    <tr>
        <td>
            {% block content %}
            <!-- content start -->
            {% block contentTop %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Hi, Elijah Baily</h1>
                                    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    {% endblock %}
                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentPanel %}
            <table class=\"row callout\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                {% block contentPanelInner %}
                                <td class=\"panel\">

                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>

                                </td>
                                {% endblock %}
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentBottom %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentBottomInner %}
                                    <h3>Title Ipsum <small>This is a note.</small></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    {% endblock %}
                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentBottomButton %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"three columns\">
                            <tr>
                                <td>

                                    <table class=\"button\">
                                        <tr>
                                            <td>
                                                {% block contentBottomButtonLink %}
                                                <a href=\"#\">Click Me!</a>
                                                {% endblock %}
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}

            {% block socialBlock %}
                {% embed 'HampeZurbInkBundle:Partials:socialPanel.html.twig' %}

                {% endembed %}
            {% endblock %}
            {% block footer %}
                {% embed 'HampeZurbInkBundle:Partials:footer.html.twig' %}
                    {% block footerLinks %}
                    <a href=\"#1\">Link1</a> | <a href=\"#2\">Link2</a> | <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                    {%  endblock %}
                {% endembed %}
            {% endblock %}

            {% endblock %}
            <!-- container end below -->
        </td>
    </tr>
</table>

</center>
</td>
</tr>
</table>
{% endblock %}", "HampeZurbInkBundle:Examples:hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/hero.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:hero.html.twig */
class __TwigTemplate_21a78d71680a5fcc7e1bfb86002f643b57b3f03f4c6322a6676c94d933afc9a6_304823810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:header.html.twig", "HampeZurbInkBundle:Examples:hero.html.twig", 11);
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
        $__internal_6b6930c38f6068be3e706feab5fabf2f168f7105713b1173f013e08850cf860f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6930c38f6068be3e706feab5fabf2f168f7105713b1173f013e08850cf860f->enter($__internal_6b6930c38f6068be3e706feab5fabf2f168f7105713b1173f013e08850cf860f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:hero.html.twig"));

        $__internal_753aa3881f5d67ac4ba2c00b620d9969c791c9b4eff644e489b024ab0566d2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753aa3881f5d67ac4ba2c00b620d9969c791c9b4eff644e489b024ab0566d2ef->enter($__internal_753aa3881f5d67ac4ba2c00b620d9969c791c9b4eff644e489b024ab0566d2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:hero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b6930c38f6068be3e706feab5fabf2f168f7105713b1173f013e08850cf860f->leave($__internal_6b6930c38f6068be3e706feab5fabf2f168f7105713b1173f013e08850cf860f_prof);

        
        $__internal_753aa3881f5d67ac4ba2c00b620d9969c791c9b4eff644e489b024ab0566d2ef->leave($__internal_753aa3881f5d67ac4ba2c00b620d9969c791c9b4eff644e489b024ab0566d2ef_prof);

    }

    // line 12
    public function block_headerColRight($context, array $blocks = array())
    {
        $__internal_8a5ef5998841c977103a2a39a880dd9263bf3c5e3d573ae7351d43507f75b161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5ef5998841c977103a2a39a880dd9263bf3c5e3d573ae7351d43507f75b161->enter($__internal_8a5ef5998841c977103a2a39a880dd9263bf3c5e3d573ae7351d43507f75b161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        $__internal_adf6f7f6f1ec4013424eb17f9c99dd44271dbdd466657489539473626c99d637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf6f7f6f1ec4013424eb17f9c99dd44271dbdd466657489539473626c99d637->enter($__internal_adf6f7f6f1ec4013424eb17f9c99dd44271dbdd466657489539473626c99d637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        // line 13
        echo "            <span class=\"template-label\">Hero</span>
        ";
        
        $__internal_adf6f7f6f1ec4013424eb17f9c99dd44271dbdd466657489539473626c99d637->leave($__internal_adf6f7f6f1ec4013424eb17f9c99dd44271dbdd466657489539473626c99d637_prof);

        
        $__internal_8a5ef5998841c977103a2a39a880dd9263bf3c5e3d573ae7351d43507f75b161->leave($__internal_8a5ef5998841c977103a2a39a880dd9263bf3c5e3d573ae7351d43507f75b161_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  686 => 13,  677 => 12,  648 => 11,  461 => 129,  458 => 124,  449 => 123,  439 => 122,  436 => 119,  427 => 118,  416 => 102,  407 => 101,  385 => 104,  383 => 101,  370 => 90,  361 => 89,  349 => 77,  340 => 76,  322 => 80,  320 => 76,  311 => 69,  302 => 68,  287 => 54,  278 => 53,  261 => 60,  259 => 53,  251 => 47,  242 => 46,  229 => 33,  220 => 32,  202 => 37,  200 => 32,  191 => 25,  182 => 24,  171 => 130,  168 => 123,  166 => 118,  163 => 117,  160 => 89,  157 => 68,  154 => 46,  152 => 24,  149 => 23,  140 => 22,  129 => 11,  120 => 10,  101 => 132,  99 => 22,  92 => 17,  90 => 10,  84 => 6,  75 => 5,  62 => 3,  53 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/hero.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>
{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Hero</span>
        {% endblock %}
    {% endembed %}
{% endblock %}
<br>

<table class=\"container\">
    <tr>
        <td>
            {% block content %}
            <!-- content start -->
            {% block contentTop %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Hi, Elijah Baily</h1>
                                    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    {% endblock %}
                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentPanel %}
            <table class=\"row callout\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                {% block contentPanelInner %}
                                <td class=\"panel\">

                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>

                                </td>
                                {% endblock %}
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentBottom %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentBottomInner %}
                                    <h3>Title Ipsum <small>This is a note.</small></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    {% endblock %}
                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentBottomButton %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"three columns\">
                            <tr>
                                <td>

                                    <table class=\"button\">
                                        <tr>
                                            <td>
                                                {% block contentBottomButtonLink %}
                                                <a href=\"#\">Click Me!</a>
                                                {% endblock %}
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}

            {% block socialBlock %}
                {% embed 'HampeZurbInkBundle:Partials:socialPanel.html.twig' %}

                {% endembed %}
            {% endblock %}
            {% block footer %}
                {% embed 'HampeZurbInkBundle:Partials:footer.html.twig' %}
                    {% block footerLinks %}
                    <a href=\"#1\">Link1</a> | <a href=\"#2\">Link2</a> | <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                    {%  endblock %}
                {% endembed %}
            {% endblock %}

            {% endblock %}
            <!-- container end below -->
        </td>
    </tr>
</table>

</center>
</td>
</tr>
</table>
{% endblock %}", "HampeZurbInkBundle:Examples:hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/hero.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:hero.html.twig */
class __TwigTemplate_21a78d71680a5fcc7e1bfb86002f643b57b3f03f4c6322a6676c94d933afc9a6_445383268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 119
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:socialPanel.html.twig", "HampeZurbInkBundle:Examples:hero.html.twig", 119);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "HampeZurbInkBundle:Partials:socialPanel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c407c813da34a51073252df231c9ccb3247622fa910b5a103f5c6314b21ea8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c407c813da34a51073252df231c9ccb3247622fa910b5a103f5c6314b21ea8b->enter($__internal_1c407c813da34a51073252df231c9ccb3247622fa910b5a103f5c6314b21ea8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:hero.html.twig"));

        $__internal_9c65b0e411e01530fe144b959bfd0cae04f88abe3e3b0d5c4d4e30e43751d783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c65b0e411e01530fe144b959bfd0cae04f88abe3e3b0d5c4d4e30e43751d783->enter($__internal_9c65b0e411e01530fe144b959bfd0cae04f88abe3e3b0d5c4d4e30e43751d783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:hero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c407c813da34a51073252df231c9ccb3247622fa910b5a103f5c6314b21ea8b->leave($__internal_1c407c813da34a51073252df231c9ccb3247622fa910b5a103f5c6314b21ea8b_prof);

        
        $__internal_9c65b0e411e01530fe144b959bfd0cae04f88abe3e3b0d5c4d4e30e43751d783->leave($__internal_9c65b0e411e01530fe144b959bfd0cae04f88abe3e3b0d5c4d4e30e43751d783_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  874 => 119,  686 => 13,  677 => 12,  648 => 11,  461 => 129,  458 => 124,  449 => 123,  439 => 122,  436 => 119,  427 => 118,  416 => 102,  407 => 101,  385 => 104,  383 => 101,  370 => 90,  361 => 89,  349 => 77,  340 => 76,  322 => 80,  320 => 76,  311 => 69,  302 => 68,  287 => 54,  278 => 53,  261 => 60,  259 => 53,  251 => 47,  242 => 46,  229 => 33,  220 => 32,  202 => 37,  200 => 32,  191 => 25,  182 => 24,  171 => 130,  168 => 123,  166 => 118,  163 => 117,  160 => 89,  157 => 68,  154 => 46,  152 => 24,  149 => 23,  140 => 22,  129 => 11,  120 => 10,  101 => 132,  99 => 22,  92 => 17,  90 => 10,  84 => 6,  75 => 5,  62 => 3,  53 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/hero.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>
{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Hero</span>
        {% endblock %}
    {% endembed %}
{% endblock %}
<br>

<table class=\"container\">
    <tr>
        <td>
            {% block content %}
            <!-- content start -->
            {% block contentTop %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Hi, Elijah Baily</h1>
                                    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    {% endblock %}
                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentPanel %}
            <table class=\"row callout\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                {% block contentPanelInner %}
                                <td class=\"panel\">

                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>

                                </td>
                                {% endblock %}
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentBottom %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentBottomInner %}
                                    <h3>Title Ipsum <small>This is a note.</small></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    {% endblock %}
                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentBottomButton %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"three columns\">
                            <tr>
                                <td>

                                    <table class=\"button\">
                                        <tr>
                                            <td>
                                                {% block contentBottomButtonLink %}
                                                <a href=\"#\">Click Me!</a>
                                                {% endblock %}
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}

            {% block socialBlock %}
                {% embed 'HampeZurbInkBundle:Partials:socialPanel.html.twig' %}

                {% endembed %}
            {% endblock %}
            {% block footer %}
                {% embed 'HampeZurbInkBundle:Partials:footer.html.twig' %}
                    {% block footerLinks %}
                    <a href=\"#1\">Link1</a> | <a href=\"#2\">Link2</a> | <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                    {%  endblock %}
                {% endembed %}
            {% endblock %}

            {% endblock %}
            <!-- container end below -->
        </td>
    </tr>
</table>

</center>
</td>
</tr>
</table>
{% endblock %}", "HampeZurbInkBundle:Examples:hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/hero.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:hero.html.twig */
class __TwigTemplate_21a78d71680a5fcc7e1bfb86002f643b57b3f03f4c6322a6676c94d933afc9a6_1668047936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 124
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:footer.html.twig", "HampeZurbInkBundle:Examples:hero.html.twig", 124);
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
        $__internal_2eb25bda784fb1ef9cf70ad81c82d7a36921aa643b533ef04f3f43f65cc63af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb25bda784fb1ef9cf70ad81c82d7a36921aa643b533ef04f3f43f65cc63af4->enter($__internal_2eb25bda784fb1ef9cf70ad81c82d7a36921aa643b533ef04f3f43f65cc63af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:hero.html.twig"));

        $__internal_e111460239f9d9923c606c7b66f8e4e555eec2c4ce8c225b0ecb30a4a0dc9a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e111460239f9d9923c606c7b66f8e4e555eec2c4ce8c225b0ecb30a4a0dc9a64->enter($__internal_e111460239f9d9923c606c7b66f8e4e555eec2c4ce8c225b0ecb30a4a0dc9a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:hero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eb25bda784fb1ef9cf70ad81c82d7a36921aa643b533ef04f3f43f65cc63af4->leave($__internal_2eb25bda784fb1ef9cf70ad81c82d7a36921aa643b533ef04f3f43f65cc63af4_prof);

        
        $__internal_e111460239f9d9923c606c7b66f8e4e555eec2c4ce8c225b0ecb30a4a0dc9a64->leave($__internal_e111460239f9d9923c606c7b66f8e4e555eec2c4ce8c225b0ecb30a4a0dc9a64_prof);

    }

    // line 125
    public function block_footerLinks($context, array $blocks = array())
    {
        $__internal_ae0057472674461cf4a9d9552ef22edf29b783290a8c0b6dcbd68ca311e7ad97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0057472674461cf4a9d9552ef22edf29b783290a8c0b6dcbd68ca311e7ad97->enter($__internal_ae0057472674461cf4a9d9552ef22edf29b783290a8c0b6dcbd68ca311e7ad97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerLinks"));

        $__internal_04c65767bec8790090ed5c3c93f8ef8112e8c666ae76b3938587376fb1ed0dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c65767bec8790090ed5c3c93f8ef8112e8c666ae76b3938587376fb1ed0dd0->enter($__internal_04c65767bec8790090ed5c3c93f8ef8112e8c666ae76b3938587376fb1ed0dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerLinks"));

        // line 126
        echo "                    <a href=\"#1\">Link1</a> | <a href=\"#2\">Link2</a> | <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                    ";
        
        $__internal_04c65767bec8790090ed5c3c93f8ef8112e8c666ae76b3938587376fb1ed0dd0->leave($__internal_04c65767bec8790090ed5c3c93f8ef8112e8c666ae76b3938587376fb1ed0dd0_prof);

        
        $__internal_ae0057472674461cf4a9d9552ef22edf29b783290a8c0b6dcbd68ca311e7ad97->leave($__internal_ae0057472674461cf4a9d9552ef22edf29b783290a8c0b6dcbd68ca311e7ad97_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1117 => 126,  1108 => 125,  1079 => 124,  874 => 119,  686 => 13,  677 => 12,  648 => 11,  461 => 129,  458 => 124,  449 => 123,  439 => 122,  436 => 119,  427 => 118,  416 => 102,  407 => 101,  385 => 104,  383 => 101,  370 => 90,  361 => 89,  349 => 77,  340 => 76,  322 => 80,  320 => 76,  311 => 69,  302 => 68,  287 => 54,  278 => 53,  261 => 60,  259 => 53,  251 => 47,  242 => 46,  229 => 33,  220 => 32,  202 => 37,  200 => 32,  191 => 25,  182 => 24,  171 => 130,  168 => 123,  166 => 118,  163 => 117,  160 => 89,  157 => 68,  154 => 46,  152 => 24,  149 => 23,  140 => 22,  129 => 11,  120 => 10,  101 => 132,  99 => 22,  92 => 17,  90 => 10,  84 => 6,  75 => 5,  62 => 3,  53 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/hero.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>
{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Hero</span>
        {% endblock %}
    {% endembed %}
{% endblock %}
<br>

<table class=\"container\">
    <tr>
        <td>
            {% block content %}
            <!-- content start -->
            {% block contentTop %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Hi, Elijah Baily</h1>
                                    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    {% endblock %}
                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentPanel %}
            <table class=\"row callout\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                {% block contentPanelInner %}
                                <td class=\"panel\">

                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>

                                </td>
                                {% endblock %}
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentBottom %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentBottomInner %}
                                    <h3>Title Ipsum <small>This is a note.</small></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    {% endblock %}
                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}
            {% block contentBottomButton %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"three columns\">
                            <tr>
                                <td>

                                    <table class=\"button\">
                                        <tr>
                                            <td>
                                                {% block contentBottomButtonLink %}
                                                <a href=\"#\">Click Me!</a>
                                                {% endblock %}
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                                <td class=\"expander\"></td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
            {% endblock %}

            {% block socialBlock %}
                {% embed 'HampeZurbInkBundle:Partials:socialPanel.html.twig' %}

                {% endembed %}
            {% endblock %}
            {% block footer %}
                {% embed 'HampeZurbInkBundle:Partials:footer.html.twig' %}
                    {% block footerLinks %}
                    <a href=\"#1\">Link1</a> | <a href=\"#2\">Link2</a> | <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                    {%  endblock %}
                {% endembed %}
            {% endblock %}

            {% endblock %}
            <!-- container end below -->
        </td>
    </tr>
</table>

</center>
</td>
</tr>
</table>
{% endblock %}", "HampeZurbInkBundle:Examples:hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/hero.html.twig");
    }
}
