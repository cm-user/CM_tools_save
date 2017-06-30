<?php

/* @HampeZurbInk/base.html.twig */
class __TwigTemplate_2ed328d538674ee05a17f2d85258e27c98d6bea17761f0de01771242348aa409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'preHtml' => array($this, 'block_preHtml'),
            'headStyles' => array($this, 'block_headStyles'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        echo " 
";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? null), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/ink.css"), "method"), "html", null, true);
        echo "
";
        // line 3
        $this->displayBlock('preHtml', $context, $blocks);
        ob_start();
        // line 5
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width\"/>
    ";
        // line 10
        $this->displayBlock('headStyles', $context, $blocks);
        // line 17
        echo "</head>
<body>
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "</body>
</html>
";
        $zurbCss = "";        foreach($context["zurb_ink_styles"] as $cssFile){        $path = $context["zurb_ink_locator"]->locate($cssFile);        if($path){$zurbCss .= "\n".file_get_contents($path);}        }        $context["zurb_ink_inlinecss"]->setHtml(ob_get_clean());        $context["zurb_ink_inlinecss"]->setCSS($zurbCss);        echo $context["zurb_ink_inlinecss"]->convert();        $context["zurb_ink_styles"]->removeAll();        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 3
    public function block_preHtml($context, array $blocks = array())
    {
    }

    // line 10
    public function block_headStyles($context, array $blocks = array())
    {
        // line 11
        echo "    <style type=\"text/css\">
        ";
        // line 13
        echo "            ";
        echo $this->env->getExtension('Hampe\Bundle\ZurbInkBundle\Twig\InlineCssExtension')->includeStyles(($context["zurb_ink_styles"] ?? null));
        echo "
        ";
        // line 15
        echo "    </style>
    ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  76 => 19,  71 => 15,  66 => 13,  63 => 11,  60 => 10,  55 => 3,  48 => 22,  46 => 19,  42 => 17,  40 => 10,  33 => 5,  30 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HampeZurbInk/base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\base.html.twig");
    }
}
