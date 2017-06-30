<?php

/* @HampeZurbInk/FoundationForEmails/2/base.html.twig */
class __TwigTemplate_25c509a1b66513af8fe94360275345eda78f06b3237d58f3f96cfc763b174be6 extends Twig_Template
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
        $__internal_f170c15a479e61de02806ec4cee3f8799b0a191344f9347f44841342570514ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f170c15a479e61de02806ec4cee3f8799b0a191344f9347f44841342570514ba->enter($__internal_f170c15a479e61de02806ec4cee3f8799b0a191344f9347f44841342570514ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/FoundationForEmails/2/base.html.twig"));

        $__internal_9bbd7149d0c2c919a8e2448dec63f98434ef5b7dcd5fc03d95c60b1bde2e8ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbd7149d0c2c919a8e2448dec63f98434ef5b7dcd5fc03d95c60b1bde2e8ea3->enter($__internal_9bbd7149d0c2c919a8e2448dec63f98434ef5b7dcd5fc03d95c60b1bde2e8ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/FoundationForEmails/2/base.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/foundation-for-emails/2/foundation.min.css"), "method"), "html", null, true);
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
        
        $__internal_f170c15a479e61de02806ec4cee3f8799b0a191344f9347f44841342570514ba->leave($__internal_f170c15a479e61de02806ec4cee3f8799b0a191344f9347f44841342570514ba_prof);

        
        $__internal_9bbd7149d0c2c919a8e2448dec63f98434ef5b7dcd5fc03d95c60b1bde2e8ea3->leave($__internal_9bbd7149d0c2c919a8e2448dec63f98434ef5b7dcd5fc03d95c60b1bde2e8ea3_prof);

    }

    // line 3
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_eedc207faee72929bb2b8d43e4db31319c80ec47daab1c8b31ac2786e3599e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedc207faee72929bb2b8d43e4db31319c80ec47daab1c8b31ac2786e3599e86->enter($__internal_eedc207faee72929bb2b8d43e4db31319c80ec47daab1c8b31ac2786e3599e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_3b02baabd684ad2ed6290aaf91044e19bbe3c7a37a7c584842af157755203605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b02baabd684ad2ed6290aaf91044e19bbe3c7a37a7c584842af157755203605->enter($__internal_3b02baabd684ad2ed6290aaf91044e19bbe3c7a37a7c584842af157755203605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        
        $__internal_3b02baabd684ad2ed6290aaf91044e19bbe3c7a37a7c584842af157755203605->leave($__internal_3b02baabd684ad2ed6290aaf91044e19bbe3c7a37a7c584842af157755203605_prof);

        
        $__internal_eedc207faee72929bb2b8d43e4db31319c80ec47daab1c8b31ac2786e3599e86->leave($__internal_eedc207faee72929bb2b8d43e4db31319c80ec47daab1c8b31ac2786e3599e86_prof);

    }

    // line 10
    public function block_headStyles($context, array $blocks = array())
    {
        $__internal_dbd32d28d51698c08d0e72fda62980a772ec53ceaeb44aad25a815e17adf373a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd32d28d51698c08d0e72fda62980a772ec53ceaeb44aad25a815e17adf373a->enter($__internal_dbd32d28d51698c08d0e72fda62980a772ec53ceaeb44aad25a815e17adf373a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headStyles"));

        $__internal_dbc1d7abb665a1ef35788f6938b1d95ea4472e08ac7534f7d1fe4573ea388461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc1d7abb665a1ef35788f6938b1d95ea4472e08ac7534f7d1fe4573ea388461->enter($__internal_dbc1d7abb665a1ef35788f6938b1d95ea4472e08ac7534f7d1fe4573ea388461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headStyles"));

        // line 11
        echo "        <style type=\"text/css\">
            ";
        // line 13
        echo "            ";
        echo $this->env->getExtension('Hampe\Bundle\ZurbInkBundle\Twig\InlineCssExtension')->includeStyles(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")));
        echo "
            ";
        // line 14
        $this->displayBlock('aaditionalStyles', $context, $blocks);
        // line 15
        echo "            ";
        // line 16
        echo "        </style>
    ";
        
        $__internal_dbc1d7abb665a1ef35788f6938b1d95ea4472e08ac7534f7d1fe4573ea388461->leave($__internal_dbc1d7abb665a1ef35788f6938b1d95ea4472e08ac7534f7d1fe4573ea388461_prof);

        
        $__internal_dbd32d28d51698c08d0e72fda62980a772ec53ceaeb44aad25a815e17adf373a->leave($__internal_dbd32d28d51698c08d0e72fda62980a772ec53ceaeb44aad25a815e17adf373a_prof);

    }

    // line 14
    public function block_aaditionalStyles($context, array $blocks = array())
    {
        $__internal_4ea12db953687cd00c22e6f499d8ca4fb428f76ab061a0143f77c67bf2269a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea12db953687cd00c22e6f499d8ca4fb428f76ab061a0143f77c67bf2269a02->enter($__internal_4ea12db953687cd00c22e6f499d8ca4fb428f76ab061a0143f77c67bf2269a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aaditionalStyles"));

        $__internal_856a4b1bfab3e487ac44e485815f6ebe7cd89c86d17de0e37515aa3e726353c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856a4b1bfab3e487ac44e485815f6ebe7cd89c86d17de0e37515aa3e726353c9->enter($__internal_856a4b1bfab3e487ac44e485815f6ebe7cd89c86d17de0e37515aa3e726353c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aaditionalStyles"));

        
        $__internal_856a4b1bfab3e487ac44e485815f6ebe7cd89c86d17de0e37515aa3e726353c9->leave($__internal_856a4b1bfab3e487ac44e485815f6ebe7cd89c86d17de0e37515aa3e726353c9_prof);

        
        $__internal_4ea12db953687cd00c22e6f499d8ca4fb428f76ab061a0143f77c67bf2269a02->leave($__internal_4ea12db953687cd00c22e6f499d8ca4fb428f76ab061a0143f77c67bf2269a02_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_92946f3bf13597a274fa8082f774d4ef5ccea80d7d650b8c5b5275327225ec76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92946f3bf13597a274fa8082f774d4ef5ccea80d7d650b8c5b5275327225ec76->enter($__internal_92946f3bf13597a274fa8082f774d4ef5ccea80d7d650b8c5b5275327225ec76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efa8049ba72f80d0d1a7b51661384a6ca4b7ef2a85ee636751de593ba81acaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa8049ba72f80d0d1a7b51661384a6ca4b7ef2a85ee636751de593ba81acaed->enter($__internal_efa8049ba72f80d0d1a7b51661384a6ca4b7ef2a85ee636751de593ba81acaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_efa8049ba72f80d0d1a7b51661384a6ca4b7ef2a85ee636751de593ba81acaed->leave($__internal_efa8049ba72f80d0d1a7b51661384a6ca4b7ef2a85ee636751de593ba81acaed_prof);

        
        $__internal_92946f3bf13597a274fa8082f774d4ef5ccea80d7d650b8c5b5275327225ec76->leave($__internal_92946f3bf13597a274fa8082f774d4ef5ccea80d7d650b8c5b5275327225ec76_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_7867f6515530c2c9c2d0a2f06fb45cd27146a078926eb1f9332669449061cb0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7867f6515530c2c9c2d0a2f06fb45cd27146a078926eb1f9332669449061cb0e->enter($__internal_7867f6515530c2c9c2d0a2f06fb45cd27146a078926eb1f9332669449061cb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_42665e42786482052380674e8696119730fe4c8b37fa78a9a22e23a33cf68c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42665e42786482052380674e8696119730fe4c8b37fa78a9a22e23a33cf68c5f->enter($__internal_42665e42786482052380674e8696119730fe4c8b37fa78a9a22e23a33cf68c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "
                            ";
        
        $__internal_42665e42786482052380674e8696119730fe4c8b37fa78a9a22e23a33cf68c5f->leave($__internal_42665e42786482052380674e8696119730fe4c8b37fa78a9a22e23a33cf68c5f_prof);

        
        $__internal_7867f6515530c2c9c2d0a2f06fb45cd27146a078926eb1f9332669449061cb0e->leave($__internal_7867f6515530c2c9c2d0a2f06fb45cd27146a078926eb1f9332669449061cb0e_prof);

    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/FoundationForEmails/2/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 27,  174 => 26,  158 => 29,  156 => 26,  150 => 22,  141 => 21,  124 => 14,  113 => 16,  111 => 15,  109 => 14,  104 => 13,  101 => 11,  92 => 10,  75 => 3,  63 => 38,  58 => 36,  56 => 21,  53 => 20,  51 => 19,  48 => 18,  46 => 10,  39 => 5,  36 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
{{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/foundation-for-emails/2/foundation.min.css\") }}
{% block preHtml %}{% endblock %}
{% inlinestyle %}
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width\"/>
    {% block headStyles %}
        <style type=\"text/css\">
            {% autoescape false %}
            {{ includeStyles(zurb_ink_styles) }}
            {% block aaditionalStyles %}{% endblock %}
            {% endautoescape %}
        </style>
    {% endblock %}
</head>
    {% inky %}
        <body>
        {% block body %}
            <table class=\"body\">
                <tr>
                    <td class=\"center\" align=\"center\" valign=\"top\">
                        <center>
                            {% block content %}

                            {% endblock %}
                        </center>
                    </td>
                </tr>
            </table>
            <!-- prevent Gmail on iOS font size manipulation -->
            <div style=\"display:none; white-space:nowrap; font:15px courier; line-height:0;\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
        {% endblock %}
        </body>
    {% endinky %}
</html>
{% endinlinestyle %}
{% endspaceless %}", "@HampeZurbInk/FoundationForEmails/2/base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\FoundationForEmails\\2\\base.html.twig");
    }
}
