<?php

/* HampeZurbInkBundle:Examples:basic.html.twig */
class __TwigTemplate_2d1a82911dd3641506d7d89abb8e9191b4f9282951088a477bd068b1cae825f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HampeZurbInkBundle::base.html.twig", "HampeZurbInkBundle:Examples:basic.html.twig", 1);
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
        $__internal_0f9c29e9b789755b3fd8627968cba7193dbc9c4f707d7711ab94826858991626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9c29e9b789755b3fd8627968cba7193dbc9c4f707d7711ab94826858991626->enter($__internal_0f9c29e9b789755b3fd8627968cba7193dbc9c4f707d7711ab94826858991626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:basic.html.twig"));

        $__internal_a9c4a4908c79941517e38bb777b85b14f32eacef1d994a852db4773b2c0b501a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c4a4908c79941517e38bb777b85b14f32eacef1d994a852db4773b2c0b501a->enter($__internal_a9c4a4908c79941517e38bb777b85b14f32eacef1d994a852db4773b2c0b501a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9c29e9b789755b3fd8627968cba7193dbc9c4f707d7711ab94826858991626->leave($__internal_0f9c29e9b789755b3fd8627968cba7193dbc9c4f707d7711ab94826858991626_prof);

        
        $__internal_a9c4a4908c79941517e38bb777b85b14f32eacef1d994a852db4773b2c0b501a->leave($__internal_a9c4a4908c79941517e38bb777b85b14f32eacef1d994a852db4773b2c0b501a_prof);

    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_3559d06cf9e62fcfa2911afec1f34f4605bb376209641ff329f2dc9c1550eece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3559d06cf9e62fcfa2911afec1f34f4605bb376209641ff329f2dc9c1550eece->enter($__internal_3559d06cf9e62fcfa2911afec1f34f4605bb376209641ff329f2dc9c1550eece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_df216708dd0ad47396ce3037cedbd13597b0865da719a991f8346a7cc647a485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df216708dd0ad47396ce3037cedbd13597b0865da719a991f8346a7cc647a485->enter($__internal_df216708dd0ad47396ce3037cedbd13597b0865da719a991f8346a7cc647a485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/basic.css"), "method"), "html", null, true);
        echo "
";
        
        $__internal_df216708dd0ad47396ce3037cedbd13597b0865da719a991f8346a7cc647a485->leave($__internal_df216708dd0ad47396ce3037cedbd13597b0865da719a991f8346a7cc647a485_prof);

        
        $__internal_3559d06cf9e62fcfa2911afec1f34f4605bb376209641ff329f2dc9c1550eece->leave($__internal_3559d06cf9e62fcfa2911afec1f34f4605bb376209641ff329f2dc9c1550eece_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_410cc1e8e30175b9f8b3fc31cdb2f52d51ba14a0274f76d0b52e88cd71e1da80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410cc1e8e30175b9f8b3fc31cdb2f52d51ba14a0274f76d0b52e88cd71e1da80->enter($__internal_410cc1e8e30175b9f8b3fc31cdb2f52d51ba14a0274f76d0b52e88cd71e1da80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a191c1eee3a7780e82ebe9c1c2dbb8f4edd2bf79d6e2bd7040e6a886b89e087c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a191c1eee3a7780e82ebe9c1c2dbb8f4edd2bf79d6e2bd7040e6a886b89e087c->enter($__internal_a191c1eee3a7780e82ebe9c1c2dbb8f4edd2bf79d6e2bd7040e6a886b89e087c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a191c1eee3a7780e82ebe9c1c2dbb8f4edd2bf79d6e2bd7040e6a886b89e087c->leave($__internal_a191c1eee3a7780e82ebe9c1c2dbb8f4edd2bf79d6e2bd7040e6a886b89e087c_prof);

        
        $__internal_410cc1e8e30175b9f8b3fc31cdb2f52d51ba14a0274f76d0b52e88cd71e1da80->leave($__internal_410cc1e8e30175b9f8b3fc31cdb2f52d51ba14a0274f76d0b52e88cd71e1da80_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_e9335fe8994a27e58549f8539270dd236241ec3b4d55df03f8c12057981fd7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9335fe8994a27e58549f8539270dd236241ec3b4d55df03f8c12057981fd7b3->enter($__internal_e9335fe8994a27e58549f8539270dd236241ec3b4d55df03f8c12057981fd7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8919682cad33d1b7056c10033b528e066a944b51b987537eac2e9bb62121d7c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8919682cad33d1b7056c10033b528e066a944b51b987537eac2e9bb62121d7c6->enter($__internal_8919682cad33d1b7056c10033b528e066a944b51b987537eac2e9bb62121d7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:basic.html.twig", "HampeZurbInkBundle:Examples:basic.html.twig", 11, "961649762")->display($context);
        
        $__internal_8919682cad33d1b7056c10033b528e066a944b51b987537eac2e9bb62121d7c6->leave($__internal_8919682cad33d1b7056c10033b528e066a944b51b987537eac2e9bb62121d7c6_prof);

        
        $__internal_e9335fe8994a27e58549f8539270dd236241ec3b4d55df03f8c12057981fd7b3->leave($__internal_e9335fe8994a27e58549f8539270dd236241ec3b4d55df03f8c12057981fd7b3_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_5264bbcde6cb64b4f1a03af096a5304d676bb43ec42b8a99ac9268503a2b5c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5264bbcde6cb64b4f1a03af096a5304d676bb43ec42b8a99ac9268503a2b5c9f->enter($__internal_5264bbcde6cb64b4f1a03af096a5304d676bb43ec42b8a99ac9268503a2b5c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_efa27f376742848ac8092acc2d5efa7a60c11a4dfa842cebe45af0db43cd905d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa27f376742848ac8092acc2d5efa7a60c11a4dfa842cebe45af0db43cd905d->enter($__internal_efa27f376742848ac8092acc2d5efa7a60c11a4dfa842cebe45af0db43cd905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_efa27f376742848ac8092acc2d5efa7a60c11a4dfa842cebe45af0db43cd905d->leave($__internal_efa27f376742848ac8092acc2d5efa7a60c11a4dfa842cebe45af0db43cd905d_prof);

        
        $__internal_5264bbcde6cb64b4f1a03af096a5304d676bb43ec42b8a99ac9268503a2b5c9f->leave($__internal_5264bbcde6cb64b4f1a03af096a5304d676bb43ec42b8a99ac9268503a2b5c9f_prof);

    }

    // line 22
    public function block_contentTop($context, array $blocks = array())
    {
        $__internal_088804f02d03076b411f4c5d1eae83e91394ea95e272037772dab1eceaf37ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088804f02d03076b411f4c5d1eae83e91394ea95e272037772dab1eceaf37ba1->enter($__internal_088804f02d03076b411f4c5d1eae83e91394ea95e272037772dab1eceaf37ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

        $__internal_0408ff9c13c2bf5bf90bfba89bb8a437507327cdd6bf5a5971a295491f3f30a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0408ff9c13c2bf5bf90bfba89bb8a437507327cdd6bf5a5971a295491f3f30a3->enter($__internal_0408ff9c13c2bf5bf90bfba89bb8a437507327cdd6bf5a5971a295491f3f30a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTop"));

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
        
        $__internal_0408ff9c13c2bf5bf90bfba89bb8a437507327cdd6bf5a5971a295491f3f30a3->leave($__internal_0408ff9c13c2bf5bf90bfba89bb8a437507327cdd6bf5a5971a295491f3f30a3_prof);

        
        $__internal_088804f02d03076b411f4c5d1eae83e91394ea95e272037772dab1eceaf37ba1->leave($__internal_088804f02d03076b411f4c5d1eae83e91394ea95e272037772dab1eceaf37ba1_prof);

    }

    // line 30
    public function block_contentTopInner($context, array $blocks = array())
    {
        $__internal_452cb9fb6b3a0748af8292e87b9dfd6c55183defcea7c57a6606187ae9491ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452cb9fb6b3a0748af8292e87b9dfd6c55183defcea7c57a6606187ae9491ae4->enter($__internal_452cb9fb6b3a0748af8292e87b9dfd6c55183defcea7c57a6606187ae9491ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        $__internal_7109f804124b1204114be79360d12abbd0e798a7bcb1f41d3d6c448f84ffc6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7109f804124b1204114be79360d12abbd0e798a7bcb1f41d3d6c448f84ffc6b1->enter($__internal_7109f804124b1204114be79360d12abbd0e798a7bcb1f41d3d6c448f84ffc6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentTopInner"));

        // line 31
        echo "                                    <h1>Hi, Susan Calvin</h1>
                                    <p class=\"lead\">Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae.</p>
                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. consequat vel lacus. Sed iaculis pulvinar ligula, ornare fringilla ante viverra et. In hac habitasse platea dictumst. Donec vel orci mi, eu congue justo. Integer eget odio est, eget malesuada lorem. Aenean sed tellus dui, vitae viverra risus. Nullam massa sapien, pulvinar eleifend fringilla id, convallis eget nisi. Mauris a sagittis dui. Pellentesque non lacinia mi. Fusce sit amet libero sit amet erat venenatis sollicitudin vitae vel eros. Cras nunc sapien, interdum sit amet porttitor ut, congue quis urna.</p>
                                    ";
        
        $__internal_7109f804124b1204114be79360d12abbd0e798a7bcb1f41d3d6c448f84ffc6b1->leave($__internal_7109f804124b1204114be79360d12abbd0e798a7bcb1f41d3d6c448f84ffc6b1_prof);

        
        $__internal_452cb9fb6b3a0748af8292e87b9dfd6c55183defcea7c57a6606187ae9491ae4->leave($__internal_452cb9fb6b3a0748af8292e87b9dfd6c55183defcea7c57a6606187ae9491ae4_prof);

    }

    // line 44
    public function block_contentPanel($context, array $blocks = array())
    {
        $__internal_ce380e6740eaa61e6ed61b7b9a4ad13e22b1d60cde8559ea43de1c35e6ac2250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce380e6740eaa61e6ed61b7b9a4ad13e22b1d60cde8559ea43de1c35e6ac2250->enter($__internal_ce380e6740eaa61e6ed61b7b9a4ad13e22b1d60cde8559ea43de1c35e6ac2250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanel"));

        $__internal_f15a1733d29e0928a9c2eb77945273c222ca0ae8c2189095bf5183c15444b36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15a1733d29e0928a9c2eb77945273c222ca0ae8c2189095bf5183c15444b36d->enter($__internal_f15a1733d29e0928a9c2eb77945273c222ca0ae8c2189095bf5183c15444b36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanel"));

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
        
        $__internal_f15a1733d29e0928a9c2eb77945273c222ca0ae8c2189095bf5183c15444b36d->leave($__internal_f15a1733d29e0928a9c2eb77945273c222ca0ae8c2189095bf5183c15444b36d_prof);

        
        $__internal_ce380e6740eaa61e6ed61b7b9a4ad13e22b1d60cde8559ea43de1c35e6ac2250->leave($__internal_ce380e6740eaa61e6ed61b7b9a4ad13e22b1d60cde8559ea43de1c35e6ac2250_prof);

    }

    // line 52
    public function block_contentPanelInner($context, array $blocks = array())
    {
        $__internal_d90246df49bb849d51d72096219db3d22ecc71c8f57cfd29b12fadefae9019eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90246df49bb849d51d72096219db3d22ecc71c8f57cfd29b12fadefae9019eb->enter($__internal_d90246df49bb849d51d72096219db3d22ecc71c8f57cfd29b12fadefae9019eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanelInner"));

        $__internal_f77384996833e435c45210920acb1a873dc381ee8e7c0f57ab75cb48b2ab63dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77384996833e435c45210920acb1a873dc381ee8e7c0f57ab75cb48b2ab63dc->enter($__internal_f77384996833e435c45210920acb1a873dc381ee8e7c0f57ab75cb48b2ab63dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentPanelInner"));

        // line 53
        echo "                                    <p>Phasellus dictum sapien a neque luctus cursus. Pellentesque sem dolor, fringilla et pharetra vitae. <a href=\"#\">Click it! »</a></p>
                                    ";
        
        $__internal_f77384996833e435c45210920acb1a873dc381ee8e7c0f57ab75cb48b2ab63dc->leave($__internal_f77384996833e435c45210920acb1a873dc381ee8e7c0f57ab75cb48b2ab63dc_prof);

        
        $__internal_d90246df49bb849d51d72096219db3d22ecc71c8f57cfd29b12fadefae9019eb->leave($__internal_d90246df49bb849d51d72096219db3d22ecc71c8f57cfd29b12fadefae9019eb_prof);

    }

    // line 65
    public function block_socialBlock($context, array $blocks = array())
    {
        $__internal_2bcacd60dc8c243ec2bce7e20e85b02c5e4b4206f2aadf899622aa916849066e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcacd60dc8c243ec2bce7e20e85b02c5e4b4206f2aadf899622aa916849066e->enter($__internal_2bcacd60dc8c243ec2bce7e20e85b02c5e4b4206f2aadf899622aa916849066e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "socialBlock"));

        $__internal_b13559fee0544278fdbee95ed1e2f7ced0119b52a4df9737a911b25b8e57e438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13559fee0544278fdbee95ed1e2f7ced0119b52a4df9737a911b25b8e57e438->enter($__internal_b13559fee0544278fdbee95ed1e2f7ced0119b52a4df9737a911b25b8e57e438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "socialBlock"));

        // line 66
        echo "                ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:basic.html.twig", "HampeZurbInkBundle:Examples:basic.html.twig", 66, "61860141")->display($context);
        // line 69
        echo "            ";
        
        $__internal_b13559fee0544278fdbee95ed1e2f7ced0119b52a4df9737a911b25b8e57e438->leave($__internal_b13559fee0544278fdbee95ed1e2f7ced0119b52a4df9737a911b25b8e57e438_prof);

        
        $__internal_2bcacd60dc8c243ec2bce7e20e85b02c5e4b4206f2aadf899622aa916849066e->leave($__internal_2bcacd60dc8c243ec2bce7e20e85b02c5e4b4206f2aadf899622aa916849066e_prof);

    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        $__internal_668bbac2cdfa303c36ba189487404ae2aefbd7581b950c283ec2fcb27079a58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668bbac2cdfa303c36ba189487404ae2aefbd7581b950c283ec2fcb27079a58e->enter($__internal_668bbac2cdfa303c36ba189487404ae2aefbd7581b950c283ec2fcb27079a58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_524a9004f0c871f328ef005f46202e6639aefe0f2ae3338c6a67c9a5b3787310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524a9004f0c871f328ef005f46202e6639aefe0f2ae3338c6a67c9a5b3787310->enter($__internal_524a9004f0c871f328ef005f46202e6639aefe0f2ae3338c6a67c9a5b3787310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 71
        echo "                ";
        $this->loadTemplate("HampeZurbInkBundle:Examples:basic.html.twig", "HampeZurbInkBundle:Examples:basic.html.twig", 71, "72351330")->display($context);
        // line 74
        echo "            ";
        
        $__internal_524a9004f0c871f328ef005f46202e6639aefe0f2ae3338c6a67c9a5b3787310->leave($__internal_524a9004f0c871f328ef005f46202e6639aefe0f2ae3338c6a67c9a5b3787310_prof);

        
        $__internal_668bbac2cdfa303c36ba189487404ae2aefbd7581b950c283ec2fcb27079a58e->leave($__internal_668bbac2cdfa303c36ba189487404ae2aefbd7581b950c283ec2fcb27079a58e_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:basic.html.twig";
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
{% endblock %}", "HampeZurbInkBundle:Examples:basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/basic.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:basic.html.twig */
class __TwigTemplate_2d1a82911dd3641506d7d89abb8e9191b4f9282951088a477bd068b1cae825f9_961649762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:header.html.twig", "HampeZurbInkBundle:Examples:basic.html.twig", 11);
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
        $__internal_1808341f12d4116d3274237805d512a683f517723a273321b7c599fcf8a3b99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1808341f12d4116d3274237805d512a683f517723a273321b7c599fcf8a3b99d->enter($__internal_1808341f12d4116d3274237805d512a683f517723a273321b7c599fcf8a3b99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:basic.html.twig"));

        $__internal_33ca43fc3f1c2d405bec0a0e089cbfb9c977c62a16ce6ec65993ca37c25b5782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ca43fc3f1c2d405bec0a0e089cbfb9c977c62a16ce6ec65993ca37c25b5782->enter($__internal_33ca43fc3f1c2d405bec0a0e089cbfb9c977c62a16ce6ec65993ca37c25b5782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1808341f12d4116d3274237805d512a683f517723a273321b7c599fcf8a3b99d->leave($__internal_1808341f12d4116d3274237805d512a683f517723a273321b7c599fcf8a3b99d_prof);

        
        $__internal_33ca43fc3f1c2d405bec0a0e089cbfb9c977c62a16ce6ec65993ca37c25b5782->leave($__internal_33ca43fc3f1c2d405bec0a0e089cbfb9c977c62a16ce6ec65993ca37c25b5782_prof);

    }

    // line 12
    public function block_headerColRight($context, array $blocks = array())
    {
        $__internal_5e6d983f4baf08777e887c54b687e8eb8b3f5d7ecd6561d116d796e68639a9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6d983f4baf08777e887c54b687e8eb8b3f5d7ecd6561d116d796e68639a9dc->enter($__internal_5e6d983f4baf08777e887c54b687e8eb8b3f5d7ecd6561d116d796e68639a9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        $__internal_b3d7715d181dc5a6faa25b4237fa38ecd815a41bce06582da599fedb10d309d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d7715d181dc5a6faa25b4237fa38ecd815a41bce06582da599fedb10d309d5->enter($__internal_b3d7715d181dc5a6faa25b4237fa38ecd815a41bce06582da599fedb10d309d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerColRight"));

        // line 13
        echo "            <span class=\"template-label\">Basic</span>
        ";
        
        $__internal_b3d7715d181dc5a6faa25b4237fa38ecd815a41bce06582da599fedb10d309d5->leave($__internal_b3d7715d181dc5a6faa25b4237fa38ecd815a41bce06582da599fedb10d309d5_prof);

        
        $__internal_5e6d983f4baf08777e887c54b687e8eb8b3f5d7ecd6561d116d796e68639a9dc->leave($__internal_5e6d983f4baf08777e887c54b687e8eb8b3f5d7ecd6561d116d796e68639a9dc_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:basic.html.twig";
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
{% endblock %}", "HampeZurbInkBundle:Examples:basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/basic.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:basic.html.twig */
class __TwigTemplate_2d1a82911dd3641506d7d89abb8e9191b4f9282951088a477bd068b1cae825f9_61860141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 66
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:socialPanel.html.twig", "HampeZurbInkBundle:Examples:basic.html.twig", 66);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "HampeZurbInkBundle:Partials:socialPanel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84dc518902c4ebcc7966c10835ee48af27c9241a850aaca2f574c855c5482ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84dc518902c4ebcc7966c10835ee48af27c9241a850aaca2f574c855c5482ee2->enter($__internal_84dc518902c4ebcc7966c10835ee48af27c9241a850aaca2f574c855c5482ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:basic.html.twig"));

        $__internal_ec60184bcba949fa590ebe668d973855ccd81f7a5368aa702bad2a7d9e487f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec60184bcba949fa590ebe668d973855ccd81f7a5368aa702bad2a7d9e487f98->enter($__internal_ec60184bcba949fa590ebe668d973855ccd81f7a5368aa702bad2a7d9e487f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84dc518902c4ebcc7966c10835ee48af27c9241a850aaca2f574c855c5482ee2->leave($__internal_84dc518902c4ebcc7966c10835ee48af27c9241a850aaca2f574c855c5482ee2_prof);

        
        $__internal_ec60184bcba949fa590ebe668d973855ccd81f7a5368aa702bad2a7d9e487f98->leave($__internal_ec60184bcba949fa590ebe668d973855ccd81f7a5368aa702bad2a7d9e487f98_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:basic.html.twig";
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
{% endblock %}", "HampeZurbInkBundle:Examples:basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/basic.html.twig");
    }
}


/* HampeZurbInkBundle:Examples:basic.html.twig */
class __TwigTemplate_2d1a82911dd3641506d7d89abb8e9191b4f9282951088a477bd068b1cae825f9_72351330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 71
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:Partials:footer.html.twig", "HampeZurbInkBundle:Examples:basic.html.twig", 71);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "HampeZurbInkBundle:Partials:footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25bf920dafad12f54087c3b7b25ca412969722cf9a049ce79c1da5d3b6a98587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bf920dafad12f54087c3b7b25ca412969722cf9a049ce79c1da5d3b6a98587->enter($__internal_25bf920dafad12f54087c3b7b25ca412969722cf9a049ce79c1da5d3b6a98587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:basic.html.twig"));

        $__internal_6bfde76ba70526d9470e3fbbb8493e26777066d4aa5ce2638ac820fa231e1950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfde76ba70526d9470e3fbbb8493e26777066d4aa5ce2638ac820fa231e1950->enter($__internal_6bfde76ba70526d9470e3fbbb8493e26777066d4aa5ce2638ac820fa231e1950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Examples:basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25bf920dafad12f54087c3b7b25ca412969722cf9a049ce79c1da5d3b6a98587->leave($__internal_25bf920dafad12f54087c3b7b25ca412969722cf9a049ce79c1da5d3b6a98587_prof);

        
        $__internal_6bfde76ba70526d9470e3fbbb8493e26777066d4aa5ce2638ac820fa231e1950->leave($__internal_6bfde76ba70526d9470e3fbbb8493e26777066d4aa5ce2638ac820fa231e1950_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Examples:basic.html.twig";
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
{% endblock %}", "HampeZurbInkBundle:Examples:basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Examples/basic.html.twig");
    }
}
