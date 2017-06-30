<?php

/* HampeZurbInkBundle::base.html.twig */
class __TwigTemplate_af8662081a972f89e42023f8a34ff7d4c729a4560ae1bf3a4daecc518c352f15 extends Twig_Template
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
        $__internal_7602a8a83ef9a2246cf71fceef968f7ff40c8a5008cfe7eaf4358a283dfc54b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7602a8a83ef9a2246cf71fceef968f7ff40c8a5008cfe7eaf4358a283dfc54b3->enter($__internal_7602a8a83ef9a2246cf71fceef968f7ff40c8a5008cfe7eaf4358a283dfc54b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle::base.html.twig"));

        $__internal_7fe8f0b107275daebd3dece1adbcdd43b7b0726e46c8ef05728e3646b536642f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe8f0b107275daebd3dece1adbcdd43b7b0726e46c8ef05728e3646b536642f->enter($__internal_7fe8f0b107275daebd3dece1adbcdd43b7b0726e46c8ef05728e3646b536642f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle::base.html.twig"));

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
        
        $__internal_7602a8a83ef9a2246cf71fceef968f7ff40c8a5008cfe7eaf4358a283dfc54b3->leave($__internal_7602a8a83ef9a2246cf71fceef968f7ff40c8a5008cfe7eaf4358a283dfc54b3_prof);

        
        $__internal_7fe8f0b107275daebd3dece1adbcdd43b7b0726e46c8ef05728e3646b536642f->leave($__internal_7fe8f0b107275daebd3dece1adbcdd43b7b0726e46c8ef05728e3646b536642f_prof);

    }

    // line 3
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_313d5d78e956fcb0be35c765884762631cf058f1848fa1d438cbf87a81ec0c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313d5d78e956fcb0be35c765884762631cf058f1848fa1d438cbf87a81ec0c02->enter($__internal_313d5d78e956fcb0be35c765884762631cf058f1848fa1d438cbf87a81ec0c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_0051e2ce82e268eaade6b1a80d9ef4731dc86a47bcdc34bbf3020652c11af890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0051e2ce82e268eaade6b1a80d9ef4731dc86a47bcdc34bbf3020652c11af890->enter($__internal_0051e2ce82e268eaade6b1a80d9ef4731dc86a47bcdc34bbf3020652c11af890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        
        $__internal_0051e2ce82e268eaade6b1a80d9ef4731dc86a47bcdc34bbf3020652c11af890->leave($__internal_0051e2ce82e268eaade6b1a80d9ef4731dc86a47bcdc34bbf3020652c11af890_prof);

        
        $__internal_313d5d78e956fcb0be35c765884762631cf058f1848fa1d438cbf87a81ec0c02->leave($__internal_313d5d78e956fcb0be35c765884762631cf058f1848fa1d438cbf87a81ec0c02_prof);

    }

    // line 10
    public function block_headStyles($context, array $blocks = array())
    {
        $__internal_78d991c300e6ddd4059241fe781bd62cbe896397ffd80fa00eaf7fdd0165e6e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d991c300e6ddd4059241fe781bd62cbe896397ffd80fa00eaf7fdd0165e6e3->enter($__internal_78d991c300e6ddd4059241fe781bd62cbe896397ffd80fa00eaf7fdd0165e6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headStyles"));

        $__internal_d0d0d2a1aeff63b6e2034c4744a840d1fcd15933594bb682a6913b9025c6ee64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d0d2a1aeff63b6e2034c4744a840d1fcd15933594bb682a6913b9025c6ee64->enter($__internal_d0d0d2a1aeff63b6e2034c4744a840d1fcd15933594bb682a6913b9025c6ee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headStyles"));

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
        
        $__internal_d0d0d2a1aeff63b6e2034c4744a840d1fcd15933594bb682a6913b9025c6ee64->leave($__internal_d0d0d2a1aeff63b6e2034c4744a840d1fcd15933594bb682a6913b9025c6ee64_prof);

        
        $__internal_78d991c300e6ddd4059241fe781bd62cbe896397ffd80fa00eaf7fdd0165e6e3->leave($__internal_78d991c300e6ddd4059241fe781bd62cbe896397ffd80fa00eaf7fdd0165e6e3_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a8f781a364ba84e17c3e97f54d08020726b27c5635c3a56b1f50c08d732bc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8f781a364ba84e17c3e97f54d08020726b27c5635c3a56b1f50c08d732bc4c->enter($__internal_1a8f781a364ba84e17c3e97f54d08020726b27c5635c3a56b1f50c08d732bc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a98339d137b9568e0c9dac0487edd8a880523036cc3aa45ea285d2a6e9d4ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a98339d137b9568e0c9dac0487edd8a880523036cc3aa45ea285d2a6e9d4ad8->enter($__internal_9a98339d137b9568e0c9dac0487edd8a880523036cc3aa45ea285d2a6e9d4ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
";
        
        $__internal_9a98339d137b9568e0c9dac0487edd8a880523036cc3aa45ea285d2a6e9d4ad8->leave($__internal_9a98339d137b9568e0c9dac0487edd8a880523036cc3aa45ea285d2a6e9d4ad8_prof);

        
        $__internal_1a8f781a364ba84e17c3e97f54d08020726b27c5635c3a56b1f50c08d732bc4c->leave($__internal_1a8f781a364ba84e17c3e97f54d08020726b27c5635c3a56b1f50c08d732bc4c_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle::base.html.twig";
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
", "HampeZurbInkBundle::base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/base.html.twig");
    }
}
