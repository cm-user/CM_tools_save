<?php

/* @HampeZurbInk/Examples/hero.html.twig */
class __TwigTemplate_fea892508a57e3947efcd2e9b6c56865104525b13dea882cffceb90da41939d0 extends Twig_Template
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
        $__internal_a7e2ad61ac1e7b3e5b8eb331d66160f6ce2a7902111ad84cdec47c5648da94d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e2ad61ac1e7b3e5b8eb331d66160f6ce2a7902111ad84cdec47c5648da94d3->enter($__internal_a7e2ad61ac1e7b3e5b8eb331d66160f6ce2a7902111ad84cdec47c5648da94d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/hero.html.twig"));

        $__internal_0939e2d7eec49c73b037787182a3a15fbd3bac92473148d25e28ab84b2f94766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0939e2d7eec49c73b037787182a3a15fbd3bac92473148d25e28ab84b2f94766->enter($__internal_0939e2d7eec49c73b037787182a3a15fbd3bac92473148d25e28ab84b2f94766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/hero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e2ad61ac1e7b3e5b8eb331d66160f6ce2a7902111ad84cdec47c5648da94d3->leave($__internal_a7e2ad61ac1e7b3e5b8eb331d66160f6ce2a7902111ad84cdec47c5648da94d3_prof);

        
        $__internal_0939e2d7eec49c73b037787182a3a15fbd3bac92473148d25e28ab84b2f94766->leave($__internal_0939e2d7eec49c73b037787182a3a15fbd3bac92473148d25e28ab84b2f94766_prof);

    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_eb4569cbde31c92265b080192b27bcb138331392b43bda901ae98f36c0575b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4569cbde31c92265b080192b27bcb138331392b43bda901ae98f36c0575b8f->enter($__internal_eb4569cbde31c92265b080192b27bcb138331392b43bda901ae98f36c0575b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_87785120bae36dcf2f3c1d692ce06f8c19742b942e9bb8575896da6ee218710a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87785120bae36dcf2f3c1d692ce06f8c19742b942e9bb8575896da6ee218710a->enter($__internal_87785120bae36dcf2f3c1d692ce06f8c19742b942e9bb8575896da6ee218710a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/hero.css"), "method"), "html", null, true);
        echo "
";
        
        $__internal_87785120bae36dcf2f3c1d692ce06f8c19742b942e9bb8575896da6ee218710a->leave($__internal_87785120bae36dcf2f3c1d692ce06f8c19742b942e9bb8575896da6ee218710a_prof);

        
        $__internal_eb4569cbde31c92265b080192b27bcb138331392b43bda901ae98f36c0575b8f->leave($__internal_eb4569cbde31c92265b080192b27bcb138331392b43bda901ae98f36c0575b8f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_38bd9be90c56b6a894dfd6ed5cc89218c97bc97f09739dbb41b231f04fc713c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38bd9be90c56b6a894dfd6ed5cc89218c97bc97f09739dbb41b231f04fc713c9->enter($__internal_38bd9be90c56b6a894dfd6ed5cc89218c97bc97f09739dbb41b231f04fc713c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d24c974c69fd1a0459d835fd195207c6b89ff4370b5f2ece347f63a83ebdfc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24c974c69fd1a0459d835fd195207c6b89ff4370b5f2ece347f63a83ebdfc97->enter($__internal_d24c974c69fd1a0459d835fd195207c6b89ff4370b5f2ece347f63a83ebdfc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d24c974c69fd1a0459d835fd195207c6b89ff4370b5f2ece347f63a83ebdfc97->leave($__internal_d24c974c69fd1a0459d835fd195207c6b89ff4370b5f2ece347f63a83ebdfc97_prof);

        
        $__internal_38bd9be90c56b6a894dfd6ed5cc89218c97bc97f09739dbb41b231f04fc713c9->leave($__internal_38bd9be90c56b6a894dfd6ed5cc89218c97bc97f09739dbb41b231f04fc713c9_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_03187a5f333630e592d7e1b53338a3deb043d4e486a7f2bb62270e7ae7fbce16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03187a5f333630e592d7e1b53338a3deb043d4e486a7f2bb62270e7ae7fbce16->enter($__internal_03187a5f333630e592d7e1b53338a3deb043d4e486a7f2bb62270e7ae7fbce16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0090148faab5ffd6117208ceb591344929a985a30b1755ef2b2dad07bb5230ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0090148faab5ffd6117208ceb591344929a985a30b1755ef2b2dad07bb5230ac->enter($__internal_0090148faab5ffd6117208ceb591344929a985a30b1755ef2b2dad07bb5230ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    ";
        $this->loadTemplate("@HampeZurbInk/Examples/hero.html.twig", "@HampeZurbInk/Examples/hero.html.twig", 11, "1934243358")->display($context);
        
        $__internal_0090148faab5ffd6117208ceb591344929a985a30b1755ef2b2dad07bb5230ac->leave($__internal_0090148faab5ffd6117208ceb591344929a985a30b1755ef2b2dad07bb5230ac_prof);

        
        $__internal_03187a5f333630e592d7e1b53338a3deb043d4e486a7f2bb62270e7ae7fbce16->leave($__internal_03187a5f333630e592d7e1b53338a3deb043d4e486a7f2bb62270e7ae7fbce16_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0d0a16fbfc4ea23b762d72c4cbaaeb6b90ae01cbaa003818ce6277df1388e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d0a16fbfc4ea23b762d72c4cbaaeb6b90ae01cbaa003818ce6277df1388e49->enter($__internal_f0d0a16fbfc4ea23b762d72c4cbaaeb6b90ae01cbaa003818ce6277df1388e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_984d23216c11f810e404b23bf5aff356d62364b41c9e83cb2c328d33fe88a65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984d23216c11f810e404b23bf5aff356d62364b41c9e83cb2c328d33fe88a65a->enter($__internal_984d23216c11f810e404b23bf5aff356d62364b41c9e83cb2c328d33fe88a65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_984d23216c11f810e404b23bf5aff356d62364b41c9e83cb2c328d33fe88a65a->leave($__internal_984d23216c11f810e404b23bf5aff356d62364b41c9e83cb2c328d33fe88a65a_prof);

        
        $__internal_f0d0a16fbfc4ea23b762d72c4cbaaeb6b90ae01cbaa003818ce6277df1388e49->leave($__internal_f0d0a16fbfc4ea23b762d72c4cbaaeb6b90ae01cbaa003818ce6277df1388e49_prof);

    }

    // line 24
    public function block_contentTop($context, array $blocks = array())
    {
        $__internal_e72d0f83d1d7309f26afd44d233f1623311aec0405d6c59b410f9df5c7a3b763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72d0f83d1d7309f26afd44d233f1623311aec0405d6c59b410f9df5c7a3b763->enter($__internal_e72d0f83d1d7309f26afd44d233f1623311aec0405d6c59b410f9df5c7a3b763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

        $__internal_84d04f219044331a0ed9a8856c4cd0065f5da92ecc6a5d21b6661aef959fe566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d04f219044331a0ed9a8856c4cd0065f5da92ecc6a5d21b6661aef959fe566->enter($__internal_84d04f219044331a0ed9a8856c4cd0065f5da92ecc6a5d21b6661aef959fe566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

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
        
        $__internal_84d04f219044331a0ed9a8856c4cd0065f5da92ecc6a5d21b6661aef959fe566->leave($__internal_84d04f219044331a0ed9a8856c4cd0065f5da92ecc6a5d21b6661aef959fe566_prof);

        
        $__internal_e72d0f83d1d7309f26afd44d233f1623311aec0405d6c59b410f9df5c7a3b763->leave($__internal_e72d0f83d1d7309f26afd44d233f1623311aec0405d6c59b410f9df5c7a3b763_prof);

    }

    // line 32
    public function block_contentTopInner($context, array $blocks = array())
    {
        $__internal_4b6f8f47ea39b4abc362fe4c22e0480dd95074abcf84ac60b08ca814c70c4ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6f8f47ea39b4abc362fe4c22e0480dd95074abcf84ac60b08ca814c70c4ae0->enter($__internal_4b6f8f47ea39b4abc362fe4c22e0480dd95074abcf84ac60b08ca814c70c4ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        $__internal_6962127a4146311c6569dfc80e40c50e3e2bb3f75e9b8c49395816dc68835bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6962127a4146311c6569dfc80e40c50e3e2bb3f75e9b8c49395816dc68835bb7->enter($__internal_6962127a4146311c6569dfc80e40c50e3e2bb3f75e9b8c49395816dc68835bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        // line 33
        echo "                                    <h1>Hi, Elijah Baily</h1>
                                    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <img width=\"580\" height=\"300\" src=\"http://placehold.it/580x300\">
                                    ";
        
        $__internal_6962127a4146311c6569dfc80e40c50e3e2bb3f75e9b8c49395816dc68835bb7->leave($__internal_6962127a4146311c6569dfc80e40c50e3e2bb3f75e9b8c49395816dc68835bb7_prof);

        
        $__internal_4b6f8f47ea39b4abc362fe4c22e0480dd95074abcf84ac60b08ca814c70c4ae0->leave($__internal_4b6f8f47ea39b4abc362fe4c22e0480dd95074abcf84ac60b08ca814c70c4ae0_prof);

    }

    // line 46
    public function block_contentPanel($context, array $blocks = array())
    {
        $__internal_853336910e7e32eb6abce849bb0faad75a34ba0de8f7fea6be73ccadc98f1204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_853336910e7e32eb6abce849bb0faad75a34ba0de8f7fea6be73ccadc98f1204->enter($__internal_853336910e7e32eb6abce849bb0faad75a34ba0de8f7fea6be73ccadc98f1204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanel"));

        $__internal_a0d1688dac75300fe1d77bbe23c13adc70905a91c94a5d6382c1006cdac872d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d1688dac75300fe1d77bbe23c13adc70905a91c94a5d6382c1006cdac872d1->enter($__internal_a0d1688dac75300fe1d77bbe23c13adc70905a91c94a5d6382c1006cdac872d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanel"));

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
        
        $__internal_a0d1688dac75300fe1d77bbe23c13adc70905a91c94a5d6382c1006cdac872d1->leave($__internal_a0d1688dac75300fe1d77bbe23c13adc70905a91c94a5d6382c1006cdac872d1_prof);

        
        $__internal_853336910e7e32eb6abce849bb0faad75a34ba0de8f7fea6be73ccadc98f1204->leave($__internal_853336910e7e32eb6abce849bb0faad75a34ba0de8f7fea6be73ccadc98f1204_prof);

    }

    // line 53
    public function block_contentPanelInner($context, array $blocks = array())
    {
        $__internal_d555ad858f33f5ab40a051d2dad8f96d9b184617b1a172d08b4d95d47a96cdf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d555ad858f33f5ab40a051d2dad8f96d9b184617b1a172d08b4d95d47a96cdf8->enter($__internal_d555ad858f33f5ab40a051d2dad8f96d9b184617b1a172d08b4d95d47a96cdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanelInner"));

        $__internal_f7870dac86d8368ed2835c2ab0995ea45930545b65f5987519ebd1c66bf75de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7870dac86d8368ed2835c2ab0995ea45930545b65f5987519ebd1c66bf75de5->enter($__internal_f7870dac86d8368ed2835c2ab0995ea45930545b65f5987519ebd1c66bf75de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanelInner"));

        // line 54
        echo "                                <td class=\"panel\">

                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>

                                </td>
                                ";
        
        $__internal_f7870dac86d8368ed2835c2ab0995ea45930545b65f5987519ebd1c66bf75de5->leave($__internal_f7870dac86d8368ed2835c2ab0995ea45930545b65f5987519ebd1c66bf75de5_prof);

        
        $__internal_d555ad858f33f5ab40a051d2dad8f96d9b184617b1a172d08b4d95d47a96cdf8->leave($__internal_d555ad858f33f5ab40a051d2dad8f96d9b184617b1a172d08b4d95d47a96cdf8_prof);

    }

    // line 68
    public function block_contentBottom($context, array $blocks = array())
    {
        $__internal_2d3a3fd00ac28c38fc7785ca2bba87844c9e73af3bf7d6b7fb79b271dc9512e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3a3fd00ac28c38fc7785ca2bba87844c9e73af3bf7d6b7fb79b271dc9512e3->enter($__internal_2d3a3fd00ac28c38fc7785ca2bba87844c9e73af3bf7d6b7fb79b271dc9512e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottom"));

        $__internal_d02cf698332da0fe1895392a6e878317cd74a2412291e7754c207776953b045e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02cf698332da0fe1895392a6e878317cd74a2412291e7754c207776953b045e->enter($__internal_d02cf698332da0fe1895392a6e878317cd74a2412291e7754c207776953b045e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottom"));

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
        
        $__internal_d02cf698332da0fe1895392a6e878317cd74a2412291e7754c207776953b045e->leave($__internal_d02cf698332da0fe1895392a6e878317cd74a2412291e7754c207776953b045e_prof);

        
        $__internal_2d3a3fd00ac28c38fc7785ca2bba87844c9e73af3bf7d6b7fb79b271dc9512e3->leave($__internal_2d3a3fd00ac28c38fc7785ca2bba87844c9e73af3bf7d6b7fb79b271dc9512e3_prof);

    }

    // line 76
    public function block_contentBottomInner($context, array $blocks = array())
    {
        $__internal_e015d0d0571202a557bd2c2f2d90e1c31e1ca99ce6594eafabca56c736159f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e015d0d0571202a557bd2c2f2d90e1c31e1ca99ce6594eafabca56c736159f2b->enter($__internal_e015d0d0571202a557bd2c2f2d90e1c31e1ca99ce6594eafabca56c736159f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomInner"));

        $__internal_326d0fc62831778c939c878ef544a77b07ca18e3f3c7ccff9e754f190674c1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326d0fc62831778c939c878ef544a77b07ca18e3f3c7ccff9e754f190674c1ba->enter($__internal_326d0fc62831778c939c878ef544a77b07ca18e3f3c7ccff9e754f190674c1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomInner"));

        // line 77
        echo "                                    <h3>Title Ipsum <small>This is a note.</small></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    ";
        
        $__internal_326d0fc62831778c939c878ef544a77b07ca18e3f3c7ccff9e754f190674c1ba->leave($__internal_326d0fc62831778c939c878ef544a77b07ca18e3f3c7ccff9e754f190674c1ba_prof);

        
        $__internal_e015d0d0571202a557bd2c2f2d90e1c31e1ca99ce6594eafabca56c736159f2b->leave($__internal_e015d0d0571202a557bd2c2f2d90e1c31e1ca99ce6594eafabca56c736159f2b_prof);

    }

    // line 89
    public function block_contentBottomButton($context, array $blocks = array())
    {
        $__internal_e530ec603d7059c105ca51c0baa70ac4e36a6b7cb16db4d7eaadde863ae2e232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e530ec603d7059c105ca51c0baa70ac4e36a6b7cb16db4d7eaadde863ae2e232->enter($__internal_e530ec603d7059c105ca51c0baa70ac4e36a6b7cb16db4d7eaadde863ae2e232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomButton"));

        $__internal_f3785f7c74efc2f063e1d09441876f9a977ce44fbeb2405ee62f078dca1d897a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3785f7c74efc2f063e1d09441876f9a977ce44fbeb2405ee62f078dca1d897a->enter($__internal_f3785f7c74efc2f063e1d09441876f9a977ce44fbeb2405ee62f078dca1d897a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomButton"));

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
        
        $__internal_f3785f7c74efc2f063e1d09441876f9a977ce44fbeb2405ee62f078dca1d897a->leave($__internal_f3785f7c74efc2f063e1d09441876f9a977ce44fbeb2405ee62f078dca1d897a_prof);

        
        $__internal_e530ec603d7059c105ca51c0baa70ac4e36a6b7cb16db4d7eaadde863ae2e232->leave($__internal_e530ec603d7059c105ca51c0baa70ac4e36a6b7cb16db4d7eaadde863ae2e232_prof);

    }

    // line 101
    public function block_contentBottomButtonLink($context, array $blocks = array())
    {
        $__internal_1ddac414c4ed6e23862d1174e4067ae5de47bb3655e3478cb46e32f6c5d55a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ddac414c4ed6e23862d1174e4067ae5de47bb3655e3478cb46e32f6c5d55a5f->enter($__internal_1ddac414c4ed6e23862d1174e4067ae5de47bb3655e3478cb46e32f6c5d55a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomButtonLink"));

        $__internal_af2351e2fbf936aed4ecb550e26518acce72c32db19cf2abb23b5fdc9a2e636b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2351e2fbf936aed4ecb550e26518acce72c32db19cf2abb23b5fdc9a2e636b->enter($__internal_af2351e2fbf936aed4ecb550e26518acce72c32db19cf2abb23b5fdc9a2e636b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentBottomButtonLink"));

        // line 102
        echo "                                                <a href=\"#\">Click Me!</a>
                                                ";
        
        $__internal_af2351e2fbf936aed4ecb550e26518acce72c32db19cf2abb23b5fdc9a2e636b->leave($__internal_af2351e2fbf936aed4ecb550e26518acce72c32db19cf2abb23b5fdc9a2e636b_prof);

        
        $__internal_1ddac414c4ed6e23862d1174e4067ae5de47bb3655e3478cb46e32f6c5d55a5f->leave($__internal_1ddac414c4ed6e23862d1174e4067ae5de47bb3655e3478cb46e32f6c5d55a5f_prof);

    }

    // line 118
    public function block_socialBlock($context, array $blocks = array())
    {
        $__internal_6fd20aa493e5d51dadf86bbbd8febdd8d673aed63e0c233d7c777ba476bd9bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd20aa493e5d51dadf86bbbd8febdd8d673aed63e0c233d7c777ba476bd9bdb->enter($__internal_6fd20aa493e5d51dadf86bbbd8febdd8d673aed63e0c233d7c777ba476bd9bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "socialBlock"));

        $__internal_04720805e504641d1c458caa722be69f942187268ee609cbc41c71b996ba1387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04720805e504641d1c458caa722be69f942187268ee609cbc41c71b996ba1387->enter($__internal_04720805e504641d1c458caa722be69f942187268ee609cbc41c71b996ba1387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "socialBlock"));

        // line 119
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/hero.html.twig", "@HampeZurbInk/Examples/hero.html.twig", 119, "1496926575")->display($context);
        // line 122
        echo "            ";
        
        $__internal_04720805e504641d1c458caa722be69f942187268ee609cbc41c71b996ba1387->leave($__internal_04720805e504641d1c458caa722be69f942187268ee609cbc41c71b996ba1387_prof);

        
        $__internal_6fd20aa493e5d51dadf86bbbd8febdd8d673aed63e0c233d7c777ba476bd9bdb->leave($__internal_6fd20aa493e5d51dadf86bbbd8febdd8d673aed63e0c233d7c777ba476bd9bdb_prof);

    }

    // line 123
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a7300ee9e4f478627c0b074b5816c530dcc99e3e62e11dfeaf0161c3d7ddbb88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7300ee9e4f478627c0b074b5816c530dcc99e3e62e11dfeaf0161c3d7ddbb88->enter($__internal_a7300ee9e4f478627c0b074b5816c530dcc99e3e62e11dfeaf0161c3d7ddbb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_063b7aad401bc2103f648e524db9ab92570a4995fc28f831d57cc9d307a91d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063b7aad401bc2103f648e524db9ab92570a4995fc28f831d57cc9d307a91d1e->enter($__internal_063b7aad401bc2103f648e524db9ab92570a4995fc28f831d57cc9d307a91d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 124
        echo "                ";
        $this->loadTemplate("@HampeZurbInk/Examples/hero.html.twig", "@HampeZurbInk/Examples/hero.html.twig", 124, "349224060")->display($context);
        // line 129
        echo "            ";
        
        $__internal_063b7aad401bc2103f648e524db9ab92570a4995fc28f831d57cc9d307a91d1e->leave($__internal_063b7aad401bc2103f648e524db9ab92570a4995fc28f831d57cc9d307a91d1e_prof);

        
        $__internal_a7300ee9e4f478627c0b074b5816c530dcc99e3e62e11dfeaf0161c3d7ddbb88->leave($__internal_a7300ee9e4f478627c0b074b5816c530dcc99e3e62e11dfeaf0161c3d7ddbb88_prof);

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
{% endblock %}", "@HampeZurbInk/Examples/hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\hero.html.twig");
    }
}


/* @HampeZurbInk/Examples/hero.html.twig */
class __TwigTemplate_fea892508a57e3947efcd2e9b6c56865104525b13dea882cffceb90da41939d0_1934243358 extends Twig_Template
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
        $__internal_52ac00d114c164f904a2bfa912e72daebd84ce2d788b32ad1cac98cee8c5b804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ac00d114c164f904a2bfa912e72daebd84ce2d788b32ad1cac98cee8c5b804->enter($__internal_52ac00d114c164f904a2bfa912e72daebd84ce2d788b32ad1cac98cee8c5b804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/hero.html.twig"));

        $__internal_b3bc64343bd0d27d1b57168d7412498fee295bdf5818e01f0d82519b53a83c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bc64343bd0d27d1b57168d7412498fee295bdf5818e01f0d82519b53a83c8d->enter($__internal_b3bc64343bd0d27d1b57168d7412498fee295bdf5818e01f0d82519b53a83c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/hero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ac00d114c164f904a2bfa912e72daebd84ce2d788b32ad1cac98cee8c5b804->leave($__internal_52ac00d114c164f904a2bfa912e72daebd84ce2d788b32ad1cac98cee8c5b804_prof);

        
        $__internal_b3bc64343bd0d27d1b57168d7412498fee295bdf5818e01f0d82519b53a83c8d->leave($__internal_b3bc64343bd0d27d1b57168d7412498fee295bdf5818e01f0d82519b53a83c8d_prof);

    }

    // line 12
    public function block_headerColRight($context, array $blocks = array())
    {
        $__internal_f77795055d3feb97e1eba2e89a3ca34426b3fbb55096d56f450cfbffb570952f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77795055d3feb97e1eba2e89a3ca34426b3fbb55096d56f450cfbffb570952f->enter($__internal_f77795055d3feb97e1eba2e89a3ca34426b3fbb55096d56f450cfbffb570952f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        $__internal_0e6b06c0221403b7d14f8fb88444738fae840c96fd8f4159df43fa210c646ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6b06c0221403b7d14f8fb88444738fae840c96fd8f4159df43fa210c646ed3->enter($__internal_0e6b06c0221403b7d14f8fb88444738fae840c96fd8f4159df43fa210c646ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        // line 13
        echo "            <span class=\"template-label\">Hero</span>
        ";
        
        $__internal_0e6b06c0221403b7d14f8fb88444738fae840c96fd8f4159df43fa210c646ed3->leave($__internal_0e6b06c0221403b7d14f8fb88444738fae840c96fd8f4159df43fa210c646ed3_prof);

        
        $__internal_f77795055d3feb97e1eba2e89a3ca34426b3fbb55096d56f450cfbffb570952f->leave($__internal_f77795055d3feb97e1eba2e89a3ca34426b3fbb55096d56f450cfbffb570952f_prof);

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
{% endblock %}", "@HampeZurbInk/Examples/hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\hero.html.twig");
    }
}


/* @HampeZurbInk/Examples/hero.html.twig */
class __TwigTemplate_fea892508a57e3947efcd2e9b6c56865104525b13dea882cffceb90da41939d0_1496926575 extends Twig_Template
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
        $__internal_e795f7a5aeaee72ac5f6df8fd8f2af2c6bdfaa5b535020a1f34ec3e1df598129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e795f7a5aeaee72ac5f6df8fd8f2af2c6bdfaa5b535020a1f34ec3e1df598129->enter($__internal_e795f7a5aeaee72ac5f6df8fd8f2af2c6bdfaa5b535020a1f34ec3e1df598129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/hero.html.twig"));

        $__internal_8c0730bed01ca3dbe32afd473e4d3ccc21d911e4e88c40934b335eb5f89de4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0730bed01ca3dbe32afd473e4d3ccc21d911e4e88c40934b335eb5f89de4de->enter($__internal_8c0730bed01ca3dbe32afd473e4d3ccc21d911e4e88c40934b335eb5f89de4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/hero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e795f7a5aeaee72ac5f6df8fd8f2af2c6bdfaa5b535020a1f34ec3e1df598129->leave($__internal_e795f7a5aeaee72ac5f6df8fd8f2af2c6bdfaa5b535020a1f34ec3e1df598129_prof);

        
        $__internal_8c0730bed01ca3dbe32afd473e4d3ccc21d911e4e88c40934b335eb5f89de4de->leave($__internal_8c0730bed01ca3dbe32afd473e4d3ccc21d911e4e88c40934b335eb5f89de4de_prof);

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
{% endblock %}", "@HampeZurbInk/Examples/hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\hero.html.twig");
    }
}


/* @HampeZurbInk/Examples/hero.html.twig */
class __TwigTemplate_fea892508a57e3947efcd2e9b6c56865104525b13dea882cffceb90da41939d0_349224060 extends Twig_Template
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
        $__internal_d02e78908fbbfb38a4b2899410f3c301d3da65ba5021142ea1b7367b7261c8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02e78908fbbfb38a4b2899410f3c301d3da65ba5021142ea1b7367b7261c8f1->enter($__internal_d02e78908fbbfb38a4b2899410f3c301d3da65ba5021142ea1b7367b7261c8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/hero.html.twig"));

        $__internal_cfba8d086ddcfbb9ff239e808e8d518750f819037552e2e8e35b7820960b52da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfba8d086ddcfbb9ff239e808e8d518750f819037552e2e8e35b7820960b52da->enter($__internal_cfba8d086ddcfbb9ff239e808e8d518750f819037552e2e8e35b7820960b52da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/Examples/hero.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d02e78908fbbfb38a4b2899410f3c301d3da65ba5021142ea1b7367b7261c8f1->leave($__internal_d02e78908fbbfb38a4b2899410f3c301d3da65ba5021142ea1b7367b7261c8f1_prof);

        
        $__internal_cfba8d086ddcfbb9ff239e808e8d518750f819037552e2e8e35b7820960b52da->leave($__internal_cfba8d086ddcfbb9ff239e808e8d518750f819037552e2e8e35b7820960b52da_prof);

    }

    // line 125
    public function block_footerLinks($context, array $blocks = array())
    {
        $__internal_34c44f20338f9b0edbd0e039256f0b64e34457d9f1e95847b7106b3224342357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c44f20338f9b0edbd0e039256f0b64e34457d9f1e95847b7106b3224342357->enter($__internal_34c44f20338f9b0edbd0e039256f0b64e34457d9f1e95847b7106b3224342357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerLinks"));

        $__internal_d8787b6c8feb82575ebd7d178852929b2ddbfc5d159fe0c055d93ede0113eca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8787b6c8feb82575ebd7d178852929b2ddbfc5d159fe0c055d93ede0113eca4->enter($__internal_d8787b6c8feb82575ebd7d178852929b2ddbfc5d159fe0c055d93ede0113eca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerLinks"));

        // line 126
        echo "                    <a href=\"#1\">Link1</a> | <a href=\"#2\">Link2</a> | <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                    ";
        
        $__internal_d8787b6c8feb82575ebd7d178852929b2ddbfc5d159fe0c055d93ede0113eca4->leave($__internal_d8787b6c8feb82575ebd7d178852929b2ddbfc5d159fe0c055d93ede0113eca4_prof);

        
        $__internal_34c44f20338f9b0edbd0e039256f0b64e34457d9f1e95847b7106b3224342357->leave($__internal_34c44f20338f9b0edbd0e039256f0b64e34457d9f1e95847b7106b3224342357_prof);

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
{% endblock %}", "@HampeZurbInk/Examples/hero.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\Examples\\hero.html.twig");
    }
}
