<?php

/* HampeZurbInkBundle:FoundationForEmails/2:base.html.twig */
class __TwigTemplate_3adb67450c44c7b12b0cc788f85127755621e52514bf2b55bac6b197c86ae2bb extends Twig_Template
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
        $__internal_eb3491b12fea2a99130ae3713cf5065649a0d0a330919285fe320acfef56af6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3491b12fea2a99130ae3713cf5065649a0d0a330919285fe320acfef56af6c->enter($__internal_eb3491b12fea2a99130ae3713cf5065649a0d0a330919285fe320acfef56af6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:FoundationForEmails/2:base.html.twig"));

        $__internal_cac3b330b4c9009a73a0fe6d7b1d9ff92018ea85f4463d1fc1ed78f6619aaec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac3b330b4c9009a73a0fe6d7b1d9ff92018ea85f4463d1fc1ed78f6619aaec8->enter($__internal_cac3b330b4c9009a73a0fe6d7b1d9ff92018ea85f4463d1fc1ed78f6619aaec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:FoundationForEmails/2:base.html.twig"));

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
        
        $__internal_eb3491b12fea2a99130ae3713cf5065649a0d0a330919285fe320acfef56af6c->leave($__internal_eb3491b12fea2a99130ae3713cf5065649a0d0a330919285fe320acfef56af6c_prof);

        
        $__internal_cac3b330b4c9009a73a0fe6d7b1d9ff92018ea85f4463d1fc1ed78f6619aaec8->leave($__internal_cac3b330b4c9009a73a0fe6d7b1d9ff92018ea85f4463d1fc1ed78f6619aaec8_prof);

    }

    // line 3
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_450401d63603814880aab716184cd0e50655a66f3e51159a6e415260c76cfaed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450401d63603814880aab716184cd0e50655a66f3e51159a6e415260c76cfaed->enter($__internal_450401d63603814880aab716184cd0e50655a66f3e51159a6e415260c76cfaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_1494a87f2dbd73634ccc14a0bfffc1a22b93e756a9115a66b811f193986640e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1494a87f2dbd73634ccc14a0bfffc1a22b93e756a9115a66b811f193986640e1->enter($__internal_1494a87f2dbd73634ccc14a0bfffc1a22b93e756a9115a66b811f193986640e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        
        $__internal_1494a87f2dbd73634ccc14a0bfffc1a22b93e756a9115a66b811f193986640e1->leave($__internal_1494a87f2dbd73634ccc14a0bfffc1a22b93e756a9115a66b811f193986640e1_prof);

        
        $__internal_450401d63603814880aab716184cd0e50655a66f3e51159a6e415260c76cfaed->leave($__internal_450401d63603814880aab716184cd0e50655a66f3e51159a6e415260c76cfaed_prof);

    }

    // line 10
    public function block_headStyles($context, array $blocks = array())
    {
        $__internal_c4a17e7bea1ec099f5e143910dec7ebdb64677d2c095e16780c4e92a19b1c70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a17e7bea1ec099f5e143910dec7ebdb64677d2c095e16780c4e92a19b1c70b->enter($__internal_c4a17e7bea1ec099f5e143910dec7ebdb64677d2c095e16780c4e92a19b1c70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headStyles"));

        $__internal_88c6b9ee1fd8ac50562b012ffe3ffdda4c51ecabc026864b3e81046121c4c99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c6b9ee1fd8ac50562b012ffe3ffdda4c51ecabc026864b3e81046121c4c99e->enter($__internal_88c6b9ee1fd8ac50562b012ffe3ffdda4c51ecabc026864b3e81046121c4c99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headStyles"));

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
        
        $__internal_88c6b9ee1fd8ac50562b012ffe3ffdda4c51ecabc026864b3e81046121c4c99e->leave($__internal_88c6b9ee1fd8ac50562b012ffe3ffdda4c51ecabc026864b3e81046121c4c99e_prof);

        
        $__internal_c4a17e7bea1ec099f5e143910dec7ebdb64677d2c095e16780c4e92a19b1c70b->leave($__internal_c4a17e7bea1ec099f5e143910dec7ebdb64677d2c095e16780c4e92a19b1c70b_prof);

    }

    // line 14
    public function block_aaditionalStyles($context, array $blocks = array())
    {
        $__internal_bb5911122bcc283bf6c553d90e760edbd243bb2aa3ff63fde4b9c0dc698ef0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5911122bcc283bf6c553d90e760edbd243bb2aa3ff63fde4b9c0dc698ef0e3->enter($__internal_bb5911122bcc283bf6c553d90e760edbd243bb2aa3ff63fde4b9c0dc698ef0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aaditionalStyles"));

        $__internal_b47d14055ba177f0d81ed214b3cb77336ae68c5914f89b06c0069e441f860331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47d14055ba177f0d81ed214b3cb77336ae68c5914f89b06c0069e441f860331->enter($__internal_b47d14055ba177f0d81ed214b3cb77336ae68c5914f89b06c0069e441f860331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aaditionalStyles"));

        
        $__internal_b47d14055ba177f0d81ed214b3cb77336ae68c5914f89b06c0069e441f860331->leave($__internal_b47d14055ba177f0d81ed214b3cb77336ae68c5914f89b06c0069e441f860331_prof);

        
        $__internal_bb5911122bcc283bf6c553d90e760edbd243bb2aa3ff63fde4b9c0dc698ef0e3->leave($__internal_bb5911122bcc283bf6c553d90e760edbd243bb2aa3ff63fde4b9c0dc698ef0e3_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_625b7bb64d2aa4d206eb0bcd332d1d9b3879fb03c32fd58b81f4dd7320cd5c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625b7bb64d2aa4d206eb0bcd332d1d9b3879fb03c32fd58b81f4dd7320cd5c07->enter($__internal_625b7bb64d2aa4d206eb0bcd332d1d9b3879fb03c32fd58b81f4dd7320cd5c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89dbcb59e3142d94cda7bc56ef3821fd8729ffe710119ac9e41946899ca09d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89dbcb59e3142d94cda7bc56ef3821fd8729ffe710119ac9e41946899ca09d51->enter($__internal_89dbcb59e3142d94cda7bc56ef3821fd8729ffe710119ac9e41946899ca09d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89dbcb59e3142d94cda7bc56ef3821fd8729ffe710119ac9e41946899ca09d51->leave($__internal_89dbcb59e3142d94cda7bc56ef3821fd8729ffe710119ac9e41946899ca09d51_prof);

        
        $__internal_625b7bb64d2aa4d206eb0bcd332d1d9b3879fb03c32fd58b81f4dd7320cd5c07->leave($__internal_625b7bb64d2aa4d206eb0bcd332d1d9b3879fb03c32fd58b81f4dd7320cd5c07_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5b54f6b5f3ef061552c9254448785f9b9fa6a475988aff55610332c70e5051b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b54f6b5f3ef061552c9254448785f9b9fa6a475988aff55610332c70e5051b->enter($__internal_a5b54f6b5f3ef061552c9254448785f9b9fa6a475988aff55610332c70e5051b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c998b560bb985b95bca225d73bc10a343f56a0345fbc2c1e2317c68870153708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c998b560bb985b95bca225d73bc10a343f56a0345fbc2c1e2317c68870153708->enter($__internal_c998b560bb985b95bca225d73bc10a343f56a0345fbc2c1e2317c68870153708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "
                            ";
        
        $__internal_c998b560bb985b95bca225d73bc10a343f56a0345fbc2c1e2317c68870153708->leave($__internal_c998b560bb985b95bca225d73bc10a343f56a0345fbc2c1e2317c68870153708_prof);

        
        $__internal_a5b54f6b5f3ef061552c9254448785f9b9fa6a475988aff55610332c70e5051b->leave($__internal_a5b54f6b5f3ef061552c9254448785f9b9fa6a475988aff55610332c70e5051b_prof);

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
{% endspaceless %}", "HampeZurbInkBundle:FoundationForEmails/2:base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/FoundationForEmails/2/base.html.twig");
    }
}
