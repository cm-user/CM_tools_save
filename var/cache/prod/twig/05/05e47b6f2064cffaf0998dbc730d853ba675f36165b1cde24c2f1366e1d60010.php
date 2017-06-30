<?php

/* @Shop/Showing/base.html.twig */
class __TwigTemplate_7a2e97c1d5831f3daffce28fd7c7fe944a7c1f61b921daa76d4968affcb4cfb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Affichage TV Boutique</title>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/shop/js/app.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
</head>
<body style=\"width: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? null), "width", array()), "html", null, true);
        echo "px; height: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? null), "height", array()), "html", null, true);
        echo "px;margin: auto;overflow: hidden;\">
    ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "
    <script type=\"application/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/user/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "</body>
</html>


";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@Shop/Showing/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 15,  73 => 12,  68 => 8,  60 => 16,  58 => 15,  54 => 14,  51 => 13,  49 => 12,  43 => 11,  39 => 9,  37 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Shop/Showing/base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\Showing\\base.html.twig");
    }
}
