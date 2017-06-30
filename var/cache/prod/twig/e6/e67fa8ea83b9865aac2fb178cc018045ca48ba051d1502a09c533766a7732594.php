<?php

/* HampeZurbInkBundle:FoundationForEmails/2:base.html.twig */
class __TwigTemplate_cc4f03edfc812b36403004caa8ef8de238bee8242ea25b8d658f50ec3eed023f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'preHtml' => array($this, 'block_preHtml'),
            'headStyles' => array($this, 'block_headStyles'),
            'aaditionalStyles' => array($this, 'block_aaditionalStyles'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? null), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/foundation-for-emails/2/foundation.min.css"), "method"), "html", null, true);
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
        // line 18
        echo "</head>
    ";
        // line 19
        ob_start();
        // line 20
        echo "        <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        </body>
    ";
        $inkyHtml = ob_get_clean();
        echo $this->env->getExtension('Hampe\Bundle\ZurbInkBundle\Twig\InkyExtension')->parse($inkyHtml);
        // line 38
        echo "</html>
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
        echo "        <style type=\"text/css\">
            ";
        // line 13
        echo "            ";
        echo $this->env->getExtension('Hampe\Bundle\ZurbInkBundle\Twig\InlineCssExtension')->includeStyles(($context["zurb_ink_styles"] ?? null));
        echo "
            ";
        // line 14
        $this->displayBlock('aaditionalStyles', $context, $blocks);
        // line 15
        echo "            ";
        // line 16
        echo "        </style>
    ";
    }

    // line 14
    public function block_aaditionalStyles($context, array $blocks = array())
    {
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "            <table class=\"body\">
                <tr>
                    <td class=\"center\" align=\"center\" valign=\"top\">
                        <center>
                            ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "                        </center>
                    </td>
                </tr>
            </table>
            <!-- prevent Gmail on iOS font size manipulation -->
            <div style=\"display:none; white-space:nowrap; font:15px courier; line-height:0;\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
        ";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:FoundationForEmails/2:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  114 => 26,  104 => 29,  102 => 26,  96 => 22,  93 => 21,  88 => 14,  83 => 16,  81 => 15,  79 => 14,  74 => 13,  71 => 11,  68 => 10,  63 => 3,  57 => 38,  52 => 36,  50 => 21,  47 => 20,  45 => 19,  42 => 18,  40 => 10,  33 => 5,  30 => 3,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HampeZurbInkBundle:FoundationForEmails/2:base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/FoundationForEmails/2/base.html.twig");
    }
}
