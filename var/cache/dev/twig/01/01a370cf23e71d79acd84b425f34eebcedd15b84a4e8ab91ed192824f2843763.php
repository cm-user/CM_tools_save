<?php

/* @HampeZurbInk/Examples/basic.html.twig */
class __TwigTemplate_eba31727afb39066987bcea939d00758cd952895dd4c04f3ebbc967227695dc1 extends Twig_Template
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
        $__internal_593bf75a0dc3cb3976c9fc99792400db3294a3da0b7d25d0adddc01e8a9d0318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593bf75a0dc3cb3976c9fc99792400db3294a3da0b7d25d0adddc01e8a9d0318->enter($__internal_593bf75a0dc3cb3976c9fc99792400db3294a3da0b7d25d0adddc01e8a9d0318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/basic.html.twig"));

        $__internal_2100cc8203f5af35f3af2f81a12d79c6b6deaca76ad51f8af1cbbad8d8e7ee97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2100cc8203f5af35f3af2f81a12d79c6b6deaca76ad51f8af1cbbad8d8e7ee97->enter($__internal_2100cc8203f5af35f3af2f81a12d79c6b6deaca76ad51f8af1cbbad8d8e7ee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_593bf75a0dc3cb3976c9fc99792400db3294a3da0b7d25d0adddc01e8a9d0318->leave($__internal_593bf75a0dc3cb3976c9fc99792400db3294a3da0b7d25d0adddc01e8a9d0318_prof);

        
        $__internal_2100cc8203f5af35f3af2f81a12d79c6b6deaca76ad51f8af1cbbad8d8e7ee97->leave($__internal_2100cc8203f5af35f3af2f81a12d79c6b6deaca76ad51f8af1cbbad8d8e7ee97_prof);

    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_8d44295dac85052128f4ed440abe0f51146b6262d129ed1aa8b89c9318856ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d44295dac85052128f4ed440abe0f51146b6262d129ed1aa8b89c9318856ddf->enter($__internal_8d44295dac85052128f4ed440abe0f51146b6262d129ed1aa8b89c9318856ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_eacc89f9f37b0b99d6b8232436bd0d56ae5e399e2c32c03a9f8971aa7fdfd1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacc89f9f37b0b99d6b8232436bd0d56ae5e399e2c32c03a9f8971aa7fdfd1f4->enter($__internal_eacc89f9f37b0b99d6b8232436bd0d56ae5e399e2c32c03a9f8971aa7fdfd1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/basic.css"), "method"), "html", null, true);
        echo "
";
        
        $__internal_eacc89f9f37b0b99d6b8232436bd0d56ae5e399e2c32c03a9f8971aa7fdfd1f4->leave($__internal_eacc89f9f37b0b99d6b8232436bd0d56ae5e399e2c32c03a9f8971aa7fdfd1f4_prof);

        
        $__internal_8d44295dac85052128f4ed440abe0f51146b6262d129ed1aa8b89c9318856ddf->leave($__internal_8d44295dac85052128f4ed440abe0f51146b6262d129ed1aa8b89c9318856ddf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b7f67ca6ece5155cdfd7092493cada0f34da3b7c5440e3c844cd12f38ddf2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7f67ca6ece5155cdfd7092493cada0f34da3b7c5440e3c844cd12f38ddf2f8->enter($__internal_9b7f67ca6ece5155cdfd7092493cada0f34da3b7c5440e3c844cd12f38ddf2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6410c3e318a24d0c5e8d883d5ee770b8f987a2298f3c119894133ea978b83635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6410c3e318a24d0c5e8d883d5ee770b8f987a2298f3c119894133ea978b83635->enter($__internal_6410c3e318a24d0c5e8d883d5ee770b8f987a2298f3c119894133ea978b83635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6410c3e318a24d0c5e8d883d5ee770b8f987a2298f3c119894133ea978b83635->leave($__internal_6410c3e318a24d0c5e8d883d5ee770b8f987a2298f3c119894133ea978b83635_prof);

        
        $__internal_9b7f67ca6ece5155cdfd7092493cada0f34da3b7c5440e3c844cd12f38ddf2f8->leave($__internal_9b7f67ca6ece5155cdfd7092493cada0f34da3b7c5440e3c844cd12f38ddf2f8_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_573f85b84e2964ef4a23d863f2ba2c36918f2a478d6603a83e3762779c67a305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573f85b84e2964ef4a23d863f2ba2c36918f2a478d6603a83e3762779c67a305->enter($__internal_573f85b84e2964ef4a23d863f2ba2c36918f2a478d6603a83e3762779c67a305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_9fc2bc12d3b6c30b872faebbd44440cb396ae00849805e8b6f000a45f336ac1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc2bc12d3b6c30b872faebbd44440cb396ae00849805e8b6f000a45f336ac1f->enter($__internal_9fc2bc12d3b6c30b872faebbd44440cb396ae00849805e8b6f000a45f336ac1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    ";
        $this->loadTemplate("@HampeZurbInk/Examples/basic.html.twig", "@HampeZurbInk/Examples/basic.html.twig", 11, "1089482545")->display($context);
        
        $__internal_9fc2bc12d3b6c30b872faebbd44440cb396ae00849805e8b6f000a45f336ac1f->leave($__internal_9fc2bc12d3b6c30b872faebbd44440cb396ae00849805e8b6f000a45f336ac1f_prof);

        
        $__internal_573f85b84e2964ef4a23d863f2ba2c36918f2a478d6603a83e3762779c67a305->leave($__internal_573f85b84e2964ef4a23d863f2ba2c36918f2a478d6603a83e3762779c67a305_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_3527bd4a94da91a697c9175b7602d90d171babc6dccceae4b8aef85168713ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3527bd4a94da91a697c9175b7602d90d171babc6dccceae4b8aef85168713ab8->enter($__internal_3527bd4a94da91a697c9175b7602d90d171babc6dccceae4b8aef85168713ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d819bb80ba33c74b840a6ef43b8d5066e4501c1118da80972e1552dffb84245d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d819bb80ba33c74b840a6ef43b8d5066e4501c1118da80972e1552dffb84245d->enter($__internal_d819bb80ba33c74b840a6ef43b8d5066e4501c1118da80972e1552dffb84245d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d819bb80ba33c74b840a6ef43b8d5066e4501c1118da80972e1552dffb84245d->leave($__internal_d819bb80ba33c74b840a6ef43b8d5066e4501c1118da80972e1552dffb84245d_prof);

        
        $__internal_3527bd4a94da91a697c9175b7602d90d171babc6dccceae4b8aef85168713ab8->leave($__internal_3527bd4a94da91a697c9175b7602d90d171babc6dccceae4b8aef85168713ab8_prof);

    }

    // line 22
    public function block_contentTop($context, array $blocks = array())
    {
        $__internal_797256f139aaf088a539dc95f26880ad0de46a478b69112f5273953b3ecec608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_797256f139aaf088a539dc95f26880ad0de46a478b69112f5273953b3ecec608->enter($__internal_797256f139aaf088a539dc95f26880ad0de46a478b69112f5273953b3ecec608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

        $__internal_ef4b9e296ca3adfa2e1980cbe350e480ea4904a7237ecc6a038b94f7f60d4248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4b9e296ca3adfa2e1980cbe350e480ea4904a7237ecc6a038b94f7f60d4248->enter($__internal_ef4b9e296ca3adfa2e1980cbe350e480ea4904a7237ecc6a038b94f7f60d4248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

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
        
        $__internal_ef4b9e296ca3adfa2e1980cbe350e480ea4904a7237ecc6a038b94f7f60d4248->leave($__internal_ef4b9e296ca3adfa2e1980cbe350e480ea4904a7237ecc6a038b94f7f60d4248_prof);

        
        $__internal_797256f139aaf088a539dc95f26880ad0de46a478b69112f5273953b3ecec608->leave($__internal_797256f139aaf088a539dc95f26880ad0de46a478b69112f5273953b3ecec608_prof);

    }

    // line 30
    public function block_contentTopInner($context, array $blocks = array())
    {
        $__internal_69715085a8b1ac5c7bcfe5a22510d103b90e087ccf602a4ea4354291bbb2ca35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69715085a8b1ac5c7bcfe5a22510d103b90e087ccf602a4ea4354291bbb2ca35->enter($__internal_69715085a8b1ac5c7bcfe5a22510d103b90e087ccf602a4ea4354291bbb2ca35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        $__internal_7b4bde3e89e4b792f821228773cf6a1c10186c4b572491bb8d85d43426fba532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4bde3e89e4b792f821228773cf6a1c10186c4b572491bb8d85d43426fba532->enter($__internal_7b4bde3e89e4b792f821228773cf6a1c10186c4b572491bb8d85d43426fba532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        // line 31
        echo "                                    <h1>Hi, Susan Calvin</h1>
                                    <p class=\"lead\">Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae.</p>
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. consequat vel lacus. Sed iaculis pulvinar ligula, ornare fringilla ante viverra et. In hac habitasse platea dictumst. Donec vel orci mi, eu congue justo. Integer eget odio est, eget malesuada lorem. Aenean sed tellus dui, vitae viverra risus. Nullam massa sapien, pulvinar eleifend fringilla id, convallis eget nisi. Mauris a sagittis dui. Pellentesque non lacinia mi. Fusce sit amet libero sit amet erat venenatis sollicitudin vitae vel eros. Cras nunc sapien, interdum sit amet porttitor ut, congue quis urna.</p>
                                    ";
        
        $__internal_7b4bde3e89e4b792f821228773cf6a1c10186c4b572491bb8d85d43426fba532->leave($__internal_7b4bde3e89e4b792f821228773cf6a1c10186c4b572491bb8d85d43426fba532_prof);

        
        $__internal_69715085a8b1ac5c7bcfe5a22510d103b90e087ccf602a4ea4354291bbb2ca35->leave($__internal_69715085a8b1ac5c7bcfe5a22510d103b90e087ccf602a4ea4354291bbb2ca35_prof);

    }

    // line 44
    public function block_contentPanel($context, array $blocks = array())
    {
        $__internal_cc722f5e42e46dc24378d358cdc750d6c15d4fba2326ab0f601f9bdd5fdebafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc722f5e42e46dc24378d358cdc750d6c15d4fba2326ab0f601f9bdd5fdebafa->enter($__internal_cc722f5e42e46dc24378d358cdc750d6c15d4fba2326ab0f601f9bdd5fdebafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanel"));

        $__internal_b703d2755ac27eb80bfe1563e97ca33d180ce9fd38760e954cfbec564b87614f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b703d2755ac27eb80bfe1563e97ca33d180ce9fd38760e954cfbec564b87614f->enter($__internal_b703d2755ac27eb80bfe1563e97ca33d180ce9fd38760e954cfbec564b87614f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanel"));

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
        
        $__internal_b703d2755ac27eb80bfe1563e97ca33d180ce9fd38760e954cfbec564b87614f->leave($__internal_b703d2755ac27eb80bfe1563e97ca33d180ce9fd38760e954cfbec564b87614f_prof);

        
        $__internal_cc722f5e42e46dc24378d358cdc750d6c15d4fba2326ab0f601f9bdd5fdebafa->leave($__internal_cc722f5e42e46dc24378d358cdc750d6c15d4fba2326ab0f601f9bdd5fdebafa_prof);

    }

    // line 52
    public function block_contentPanelInner($context, array $blocks = array())
    {
        $__internal_868ba79cb9b29c248cd3111b089679b296612a60c05bbbf2ee69df81fa6e250d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868ba79cb9b29c248cd3111b089679b296612a60c05bbbf2ee69df81fa6e250d->enter($__internal_868ba79cb9b29c248cd3111b089679b296612a60c05bbbf2ee69df81fa6e250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanelInner"));

        $__internal_81f11807309ca21ea7975fa364f8b6742ce09b95e3f4fa7833fbc06f2ca9a274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f11807309ca21ea7975fa364f8b6742ce09b95e3f4fa7833fbc06f2ca9a274->enter($__internal_81f11807309ca21ea7975fa364f8b6742ce09b95e3f4fa7833fbc06f2ca9a274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanelInner"));

        // line 53
        echo "                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>
                                    ";
        
        $__internal_81f11807309ca21ea7975fa364f8b6742ce09b95e3f4fa7833fbc06f2ca9a274->leave($__internal_81f11807309ca21ea7975fa364f8b6742ce09b95e3f4fa7833fbc06f2ca9a274_prof);

        
        $__internal_868ba79cb9b29c248cd3111b089679b296612a60c05bbbf2ee69df81fa6e250d->leave($__internal_868ba79cb9b29c248cd3111b089679b296612a60c05bbbf2ee69df81fa6e250d_prof);

    }

    // line 65
    public function block_socialBlock($context, array $blocks = array())
    {
        $__internal_0d02132d6caa177a8cc59f7e080f6d73f6d9a4a979a07051fdf4bbff86cb3205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d02132d6caa177a8cc59f7e080f6d73f6d9a4a979a07051fdf4bbff86cb3205->enter($__internal_0d02132d6caa177a8cc59f7e080f6d73f6d9a4a979a07051fdf4bbff86cb3205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "socialBlock"));

        $__internal_4ef2ab19dd3daecb91f2a6ef700de8b4c621bab743553752f06667b24e595920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef2ab19dd3daecb91f2a6ef700de8b4c621bab743553752f06667b24e595920->enter($__internal_4ef2ab19dd3daecb91f2a6ef700de8b4c621bab743553752f06667b24e595920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "socialBlock"));

        // line 66
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/basic.html.twig", "@HampeZurbInk/Examples/basic.html.twig", 66, "574666525")->display($context);
        // line 69
        echo "            ";
        
        $__internal_4ef2ab19dd3daecb91f2a6ef700de8b4c621bab743553752f06667b24e595920->leave($__internal_4ef2ab19dd3daecb91f2a6ef700de8b4c621bab743553752f06667b24e595920_prof);

        
        $__internal_0d02132d6caa177a8cc59f7e080f6d73f6d9a4a979a07051fdf4bbff86cb3205->leave($__internal_0d02132d6caa177a8cc59f7e080f6d73f6d9a4a979a07051fdf4bbff86cb3205_prof);

    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        $__internal_34c0cf94f265c7c542a03ac98dfee32f63d1c922c1a3f40cc0bd9025ead7c9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c0cf94f265c7c542a03ac98dfee32f63d1c922c1a3f40cc0bd9025ead7c9f5->enter($__internal_34c0cf94f265c7c542a03ac98dfee32f63d1c922c1a3f40cc0bd9025ead7c9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a1aee24a513fd7251c2bd719dd771675bc6462ad678c48eaaf0cdd0b8a9a6d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1aee24a513fd7251c2bd719dd771675bc6462ad678c48eaaf0cdd0b8a9a6d03->enter($__internal_a1aee24a513fd7251c2bd719dd771675bc6462ad678c48eaaf0cdd0b8a9a6d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 71
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/basic.html.twig", "@HampeZurbInk/Examples/basic.html.twig", 71, "298797483")->display($context);
        // line 74
        echo "            ";
        
        $__internal_a1aee24a513fd7251c2bd719dd771675bc6462ad678c48eaaf0cdd0b8a9a6d03->leave($__internal_a1aee24a513fd7251c2bd719dd771675bc6462ad678c48eaaf0cdd0b8a9a6d03_prof);

        
        $__internal_34c0cf94f265c7c542a03ac98dfee32f63d1c922c1a3f40cc0bd9025ead7c9f5->leave($__internal_34c0cf94f265c7c542a03ac98dfee32f63d1c922c1a3f40cc0bd9025ead7c9f5_prof);

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
        return array (  321 => 74,  318 => 71,  309 => 70,  299 => 69,  296 => 66,  287 => 65,  276 => 53,  267 => 52,  249 => 55,  247 => 52,  238 => 45,  229 => 44,  216 => 31,  207 => 30,  189 => 35,  187 => 30,  178 => 23,  169 => 22,  157 => 75,  154 => 70,  152 => 65,  149 => 64,  146 => 44,  143 => 22,  134 => 21,  123 => 11,  114 => 10,  96 => 78,  94 => 21,  88 => 17,  86 => 10,  80 => 6,  71 => 5,  58 => 3,  49 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/basic.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>
{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Basic</span>
        {% endblock %}
    {% endembed %}
{% endblock %}
<br>
<table class=\"container\">
    <tr>
        <td>
        {% block content %}
            {% block contentTop %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Hi, Susan Calvin</h1>
                                    <p class=\"lead\">Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae.</p>
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. consequat vel lacus. Sed iaculis pulvinar ligula, ornare fringilla ante viverra et. In hac habitasse platea dictumst. Donec vel orci mi, eu congue justo. Integer eget odio est, eget malesuada lorem. Aenean sed tellus dui, vitae viverra risus. Nullam massa sapien, pulvinar eleifend fringilla id, convallis eget nisi. Mauris a sagittis dui. Pellentesque non lacinia mi. Fusce sit amet libero sit amet erat venenatis sollicitudin vitae vel eros. Cras nunc sapien, interdum sit amet porttitor ut, congue quis urna.</p>
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
                                <td class=\"panel\">
                                    {% block contentPanelInner %}
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>
                                    {% endblock %}
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

                {% endembed %}
            {% endblock %}

            <!-- container end below -->
        {% endblock %}
        </td>
    </tr>
</table>

</center>
</td>
</tr>
</table>
{% endblock %}", "@HampeZurbInk/Examples/basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\basic.html.twig");
    }
}


/* @HampeZurbInk/Examples/basic.html.twig */
class __TwigTemplate_eba31727afb39066987bcea939d00758cd952895dd4c04f3ebbc967227695dc1_1089482545 extends Twig_Template
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
        $__internal_21fee8b261d6a495c6fcd14a36bb1aa698a0c7c6640385ca6d051485da6f982b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fee8b261d6a495c6fcd14a36bb1aa698a0c7c6640385ca6d051485da6f982b->enter($__internal_21fee8b261d6a495c6fcd14a36bb1aa698a0c7c6640385ca6d051485da6f982b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/basic.html.twig"));

        $__internal_38b740005dabd102b8bcbcad58783417f41fd77568b2baed2ff781ac1d305a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b740005dabd102b8bcbcad58783417f41fd77568b2baed2ff781ac1d305a44->enter($__internal_38b740005dabd102b8bcbcad58783417f41fd77568b2baed2ff781ac1d305a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21fee8b261d6a495c6fcd14a36bb1aa698a0c7c6640385ca6d051485da6f982b->leave($__internal_21fee8b261d6a495c6fcd14a36bb1aa698a0c7c6640385ca6d051485da6f982b_prof);

        
        $__internal_38b740005dabd102b8bcbcad58783417f41fd77568b2baed2ff781ac1d305a44->leave($__internal_38b740005dabd102b8bcbcad58783417f41fd77568b2baed2ff781ac1d305a44_prof);

    }

    // line 12
    public function block_headerColRight($context, array $blocks = array())
    {
        $__internal_626a0183673cb7b7f2b14b420044ebbabba127ed12890aa963de6a93379ec68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626a0183673cb7b7f2b14b420044ebbabba127ed12890aa963de6a93379ec68b->enter($__internal_626a0183673cb7b7f2b14b420044ebbabba127ed12890aa963de6a93379ec68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        $__internal_1f318b49580c1ef64edd064dc69d3f3e36f37066b74b8191965812470c439e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f318b49580c1ef64edd064dc69d3f3e36f37066b74b8191965812470c439e07->enter($__internal_1f318b49580c1ef64edd064dc69d3f3e36f37066b74b8191965812470c439e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        // line 13
        echo "            <span class=\"template-label\">Basic</span>
        ";
        
        $__internal_1f318b49580c1ef64edd064dc69d3f3e36f37066b74b8191965812470c439e07->leave($__internal_1f318b49580c1ef64edd064dc69d3f3e36f37066b74b8191965812470c439e07_prof);

        
        $__internal_626a0183673cb7b7f2b14b420044ebbabba127ed12890aa963de6a93379ec68b->leave($__internal_626a0183673cb7b7f2b14b420044ebbabba127ed12890aa963de6a93379ec68b_prof);

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
        return array (  491 => 13,  482 => 12,  453 => 11,  321 => 74,  318 => 71,  309 => 70,  299 => 69,  296 => 66,  287 => 65,  276 => 53,  267 => 52,  249 => 55,  247 => 52,  238 => 45,  229 => 44,  216 => 31,  207 => 30,  189 => 35,  187 => 30,  178 => 23,  169 => 22,  157 => 75,  154 => 70,  152 => 65,  149 => 64,  146 => 44,  143 => 22,  134 => 21,  123 => 11,  114 => 10,  96 => 78,  94 => 21,  88 => 17,  86 => 10,  80 => 6,  71 => 5,  58 => 3,  49 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/basic.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>
{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Basic</span>
        {% endblock %}
    {% endembed %}
{% endblock %}
<br>
<table class=\"container\">
    <tr>
        <td>
        {% block content %}
            {% block contentTop %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Hi, Susan Calvin</h1>
                                    <p class=\"lead\">Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae.</p>
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. consequat vel lacus. Sed iaculis pulvinar ligula, ornare fringilla ante viverra et. In hac habitasse platea dictumst. Donec vel orci mi, eu congue justo. Integer eget odio est, eget malesuada lorem. Aenean sed tellus dui, vitae viverra risus. Nullam massa sapien, pulvinar eleifend fringilla id, convallis eget nisi. Mauris a sagittis dui. Pellentesque non lacinia mi. Fusce sit amet libero sit amet erat venenatis sollicitudin vitae vel eros. Cras nunc sapien, interdum sit amet porttitor ut, congue quis urna.</p>
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
                                <td class=\"panel\">
                                    {% block contentPanelInner %}
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>
                                    {% endblock %}
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

                {% endembed %}
            {% endblock %}

            <!-- container end below -->
        {% endblock %}
        </td>
    </tr>
</table>

</center>
</td>
</tr>
</table>
{% endblock %}", "@HampeZurbInk/Examples/basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\basic.html.twig");
    }
}


/* @HampeZurbInk/Examples/basic.html.twig */
class __TwigTemplate_eba31727afb39066987bcea939d00758cd952895dd4c04f3ebbc967227695dc1_574666525 extends Twig_Template
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
        $__internal_6a08dde237e5da7df12f5ec7cd99be4abc166aa90bbccb1dc10ae9f8ee3631be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a08dde237e5da7df12f5ec7cd99be4abc166aa90bbccb1dc10ae9f8ee3631be->enter($__internal_6a08dde237e5da7df12f5ec7cd99be4abc166aa90bbccb1dc10ae9f8ee3631be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/basic.html.twig"));

        $__internal_fe23f05db0d43c19edd2b844e21b9117325d5860399a1110cd049ba7a57b2687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe23f05db0d43c19edd2b844e21b9117325d5860399a1110cd049ba7a57b2687->enter($__internal_fe23f05db0d43c19edd2b844e21b9117325d5860399a1110cd049ba7a57b2687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a08dde237e5da7df12f5ec7cd99be4abc166aa90bbccb1dc10ae9f8ee3631be->leave($__internal_6a08dde237e5da7df12f5ec7cd99be4abc166aa90bbccb1dc10ae9f8ee3631be_prof);

        
        $__internal_fe23f05db0d43c19edd2b844e21b9117325d5860399a1110cd049ba7a57b2687->leave($__internal_fe23f05db0d43c19edd2b844e21b9117325d5860399a1110cd049ba7a57b2687_prof);

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
        return array (  624 => 66,  491 => 13,  482 => 12,  453 => 11,  321 => 74,  318 => 71,  309 => 70,  299 => 69,  296 => 66,  287 => 65,  276 => 53,  267 => 52,  249 => 55,  247 => 52,  238 => 45,  229 => 44,  216 => 31,  207 => 30,  189 => 35,  187 => 30,  178 => 23,  169 => 22,  157 => 75,  154 => 70,  152 => 65,  149 => 64,  146 => 44,  143 => 22,  134 => 21,  123 => 11,  114 => 10,  96 => 78,  94 => 21,  88 => 17,  86 => 10,  80 => 6,  71 => 5,  58 => 3,  49 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/basic.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>
{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Basic</span>
        {% endblock %}
    {% endembed %}
{% endblock %}
<br>
<table class=\"container\">
    <tr>
        <td>
        {% block content %}
            {% block contentTop %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Hi, Susan Calvin</h1>
                                    <p class=\"lead\">Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae.</p>
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. consequat vel lacus. Sed iaculis pulvinar ligula, ornare fringilla ante viverra et. In hac habitasse platea dictumst. Donec vel orci mi, eu congue justo. Integer eget odio est, eget malesuada lorem. Aenean sed tellus dui, vitae viverra risus. Nullam massa sapien, pulvinar eleifend fringilla id, convallis eget nisi. Mauris a sagittis dui. Pellentesque non lacinia mi. Fusce sit amet libero sit amet erat venenatis sollicitudin vitae vel eros. Cras nunc sapien, interdum sit amet porttitor ut, congue quis urna.</p>
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
                                <td class=\"panel\">
                                    {% block contentPanelInner %}
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>
                                    {% endblock %}
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

                {% endembed %}
            {% endblock %}

            <!-- container end below -->
        {% endblock %}
        </td>
    </tr>
</table>

</center>
</td>
</tr>
</table>
{% endblock %}", "@HampeZurbInk/Examples/basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\basic.html.twig");
    }
}


/* @HampeZurbInk/Examples/basic.html.twig */
class __TwigTemplate_eba31727afb39066987bcea939d00758cd952895dd4c04f3ebbc967227695dc1_298797483 extends Twig_Template
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
        $__internal_a97a55f53bf6ea32031bb5c6e97dc47be2888e8783ce4e09e010aaf9f3c8b637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97a55f53bf6ea32031bb5c6e97dc47be2888e8783ce4e09e010aaf9f3c8b637->enter($__internal_a97a55f53bf6ea32031bb5c6e97dc47be2888e8783ce4e09e010aaf9f3c8b637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/basic.html.twig"));

        $__internal_169b67dd26b0d1cba200f4a7ef15ffcb4b718c0683815625ebec5db92dc4008f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169b67dd26b0d1cba200f4a7ef15ffcb4b718c0683815625ebec5db92dc4008f->enter($__internal_169b67dd26b0d1cba200f4a7ef15ffcb4b718c0683815625ebec5db92dc4008f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97a55f53bf6ea32031bb5c6e97dc47be2888e8783ce4e09e010aaf9f3c8b637->leave($__internal_a97a55f53bf6ea32031bb5c6e97dc47be2888e8783ce4e09e010aaf9f3c8b637_prof);

        
        $__internal_169b67dd26b0d1cba200f4a7ef15ffcb4b718c0683815625ebec5db92dc4008f->leave($__internal_169b67dd26b0d1cba200f4a7ef15ffcb4b718c0683815625ebec5db92dc4008f_prof);

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
        return array (  774 => 71,  624 => 66,  491 => 13,  482 => 12,  453 => 11,  321 => 74,  318 => 71,  309 => 70,  299 => 69,  296 => 66,  287 => 65,  276 => 53,  267 => 52,  249 => 55,  247 => 52,  238 => 45,  229 => 44,  216 => 31,  207 => 30,  189 => 35,  187 => 30,  178 => 23,  169 => 22,  157 => 75,  154 => 70,  152 => 65,  149 => 64,  146 => 44,  143 => 22,  134 => 21,  123 => 11,  114 => 10,  96 => 78,  94 => 21,  88 => 17,  86 => 10,  80 => 6,  71 => 5,  58 => 3,  49 => 2,  11 => 1,);
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
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/basic.css\") }}
{% endblock %}
{% block body %}
<table class=\"body\">
<tr>
<td class=\"center\" align=\"center\" valign=\"top\">
<center>
{% block header %}
    {% embed 'HampeZurbInkBundle:Partials:header.html.twig' %}
        {% block headerColRight %}
            <span class=\"template-label\">Basic</span>
        {% endblock %}
    {% endembed %}
{% endblock %}
<br>
<table class=\"container\">
    <tr>
        <td>
        {% block content %}
            {% block contentTop %}
            <table class=\"row\">
                <tr>
                    <td class=\"wrapper last\">

                        <table class=\"twelve columns\">
                            <tr>
                                <td>
                                    {% block contentTopInner %}
                                    <h1>Hi, Susan Calvin</h1>
                                    <p class=\"lead\">Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae.</p>
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. consequat vel lacus. Sed iaculis pulvinar ligula, ornare fringilla ante viverra et. In hac habitasse platea dictumst. Donec vel orci mi, eu congue justo. Integer eget odio est, eget malesuada lorem. Aenean sed tellus dui, vitae viverra risus. Nullam massa sapien, pulvinar eleifend fringilla id, convallis eget nisi. Mauris a sagittis dui. Pellentesque non lacinia mi. Fusce sit amet libero sit amet erat venenatis sollicitudin vitae vel eros. Cras nunc sapien, interdum sit amet porttitor ut, congue quis urna.</p>
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
                                <td class=\"panel\">
                                    {% block contentPanelInner %}
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>
                                    {% endblock %}
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

                {% endembed %}
            {% endblock %}

            <!-- container end below -->
        {% endblock %}
        </td>
    </tr>
</table>

</center>
</td>
</tr>
</table>
{% endblock %}", "@HampeZurbInk/Examples/basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\basic.html.twig");
    }
}
