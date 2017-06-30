<?php

/* @HampeZurbInk/base.html.twig */
class __TwigTemplate_e2d8781978ba731adc2e185b4d97b86fe34e3ffd2fa0dd64216be7cb647792f5 extends Twig_Template
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
        $__internal_1611ee09860fc7565552163c48c95fee6f149605e5cd7763072757a63a15f8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1611ee09860fc7565552163c48c95fee6f149605e5cd7763072757a63a15f8de->enter($__internal_1611ee09860fc7565552163c48c95fee6f149605e5cd7763072757a63a15f8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/base.html.twig"));

        $__internal_7f22b9410f2f8f42404bcda51bf13018d03f114a924273909ea4d4a335787d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f22b9410f2f8f42404bcda51bf13018d03f114a924273909ea4d4a335787d72->enter($__internal_7f22b9410f2f8f42404bcda51bf13018d03f114a924273909ea4d4a335787d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/base.html.twig"));

        // line 1
        ob_start();
        echo " 
";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/ink.css"), "method"), "html", null, true);
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
        
        $__internal_1611ee09860fc7565552163c48c95fee6f149605e5cd7763072757a63a15f8de->leave($__internal_1611ee09860fc7565552163c48c95fee6f149605e5cd7763072757a63a15f8de_prof);

        
        $__internal_7f22b9410f2f8f42404bcda51bf13018d03f114a924273909ea4d4a335787d72->leave($__internal_7f22b9410f2f8f42404bcda51bf13018d03f114a924273909ea4d4a335787d72_prof);

    }

    // line 3
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_5c436aaf65c668d4305bb64027a83fbac8f9da7c94da6e2d79ca775d6e6af36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c436aaf65c668d4305bb64027a83fbac8f9da7c94da6e2d79ca775d6e6af36c->enter($__internal_5c436aaf65c668d4305bb64027a83fbac8f9da7c94da6e2d79ca775d6e6af36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_25a38965f48f840f8456e0ce69ff7aea0f2b15081b63f4cff9c8c352ee87e5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a38965f48f840f8456e0ce69ff7aea0f2b15081b63f4cff9c8c352ee87e5c9->enter($__internal_25a38965f48f840f8456e0ce69ff7aea0f2b15081b63f4cff9c8c352ee87e5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        
        $__internal_25a38965f48f840f8456e0ce69ff7aea0f2b15081b63f4cff9c8c352ee87e5c9->leave($__internal_25a38965f48f840f8456e0ce69ff7aea0f2b15081b63f4cff9c8c352ee87e5c9_prof);

        
        $__internal_5c436aaf65c668d4305bb64027a83fbac8f9da7c94da6e2d79ca775d6e6af36c->leave($__internal_5c436aaf65c668d4305bb64027a83fbac8f9da7c94da6e2d79ca775d6e6af36c_prof);

    }

    // line 10
    public function block_headStyles($context, array $blocks = array())
    {
        $__internal_ef531b8b5df6ab97108183413deb60cf8a7ee5ef51ec5773131bfa35fa78bc67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef531b8b5df6ab97108183413deb60cf8a7ee5ef51ec5773131bfa35fa78bc67->enter($__internal_ef531b8b5df6ab97108183413deb60cf8a7ee5ef51ec5773131bfa35fa78bc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headStyles"));

        $__internal_68995e5b6b520bf4b8871184348629f975cce5fbe2acab2cd331304e37cd3b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68995e5b6b520bf4b8871184348629f975cce5fbe2acab2cd331304e37cd3b73->enter($__internal_68995e5b6b520bf4b8871184348629f975cce5fbe2acab2cd331304e37cd3b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headStyles"));

        // line 11
        echo "    <style type=\"text/css\">
        ";
        // line 13
        echo "            ";
        echo $this->env->getExtension('Hampe\Bundle\ZurbInkBundle\Twig\InlineCssExtension')->includeStyles(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")));
        echo "
        ";
        // line 15
        echo "    </style>
    ";
        
        $__internal_68995e5b6b520bf4b8871184348629f975cce5fbe2acab2cd331304e37cd3b73->leave($__internal_68995e5b6b520bf4b8871184348629f975cce5fbe2acab2cd331304e37cd3b73_prof);

        
        $__internal_ef531b8b5df6ab97108183413deb60cf8a7ee5ef51ec5773131bfa35fa78bc67->leave($__internal_ef531b8b5df6ab97108183413deb60cf8a7ee5ef51ec5773131bfa35fa78bc67_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e5e1e296afe1f8a766736dc848da78099f1d7190460e9179f269dcce2a44393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5e1e296afe1f8a766736dc848da78099f1d7190460e9179f269dcce2a44393->enter($__internal_3e5e1e296afe1f8a766736dc848da78099f1d7190460e9179f269dcce2a44393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ff44d938bdabf777ccb4dfe9b6d5ff3bb62e33237a9b47f669a0e75107c673e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff44d938bdabf777ccb4dfe9b6d5ff3bb62e33237a9b47f669a0e75107c673e->enter($__internal_5ff44d938bdabf777ccb4dfe9b6d5ff3bb62e33237a9b47f669a0e75107c673e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
";
        
        $__internal_5ff44d938bdabf777ccb4dfe9b6d5ff3bb62e33237a9b47f669a0e75107c673e->leave($__internal_5ff44d938bdabf777ccb4dfe9b6d5ff3bb62e33237a9b47f669a0e75107c673e_prof);

        
        $__internal_3e5e1e296afe1f8a766736dc848da78099f1d7190460e9179f269dcce2a44393->leave($__internal_3e5e1e296afe1f8a766736dc848da78099f1d7190460e9179f269dcce2a44393_prof);

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
        return array (  121 => 20,  112 => 19,  101 => 15,  96 => 13,  93 => 11,  84 => 10,  67 => 3,  54 => 22,  52 => 19,  48 => 17,  46 => 10,  39 => 5,  36 => 3,  32 => 2,  28 => 1,);
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
{{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/ink.css\") }}
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
        {% endautoescape %}
    </style>
    {% endblock %}
</head>
<body>
{% block body %}

{% endblock %}
</body>
</html>
{% endinlinestyle %}
{% endspaceless %}
", "@HampeZurbInk/base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\base.html.twig");
    }
}
