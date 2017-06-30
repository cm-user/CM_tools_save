<?php

/* @CoreSphereConsole/base.html.twig */
class __TwigTemplate_a043f25cc7e3a022dd2966912aa6b94f07da7a7e25d6267ae3772eb1e1edc44e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5baa12ba2de74a97390065dbcc8fbc91f33445ace71d49e91dd556a39676a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5baa12ba2de74a97390065dbcc8fbc91f33445ace71d49e91dd556a39676a95->enter($__internal_a5baa12ba2de74a97390065dbcc8fbc91f33445ace71d49e91dd556a39676a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/base.html.twig"));

        $__internal_fb7b64b46194594561f0e6e5e3b0e659dbd46cb72462082fbe3bb534b247e03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7b64b46194594561f0e6e5e3b0e659dbd46cb72462082fbe3bb534b247e03c->enter($__internal_fb7b64b46194594561f0e6e5e3b0e659dbd46cb72462082fbe3bb534b247e03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_a5baa12ba2de74a97390065dbcc8fbc91f33445ace71d49e91dd556a39676a95->leave($__internal_a5baa12ba2de74a97390065dbcc8fbc91f33445ace71d49e91dd556a39676a95_prof);

        
        $__internal_fb7b64b46194594561f0e6e5e3b0e659dbd46cb72462082fbe3bb534b247e03c->leave($__internal_fb7b64b46194594561f0e6e5e3b0e659dbd46cb72462082fbe3bb534b247e03c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cecc6a8a41d9472ccaca9e31b932ea6b9cd9f10484150754b60409225e1b00a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecc6a8a41d9472ccaca9e31b932ea6b9cd9f10484150754b60409225e1b00a4->enter($__internal_cecc6a8a41d9472ccaca9e31b932ea6b9cd9f10484150754b60409225e1b00a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee9fd99a36516549d251d6f3ee8935f10c168f778ac245cace75bec029ffdf35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9fd99a36516549d251d6f3ee8935f10c168f778ac245cace75bec029ffdf35->enter($__internal_ee9fd99a36516549d251d6f3ee8935f10c168f778ac245cace75bec029ffdf35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_ee9fd99a36516549d251d6f3ee8935f10c168f778ac245cace75bec029ffdf35->leave($__internal_ee9fd99a36516549d251d6f3ee8935f10c168f778ac245cace75bec029ffdf35_prof);

        
        $__internal_cecc6a8a41d9472ccaca9e31b932ea6b9cd9f10484150754b60409225e1b00a4->leave($__internal_cecc6a8a41d9472ccaca9e31b932ea6b9cd9f10484150754b60409225e1b00a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e11f89443d607de1eda2033ff9c0221aed15a746fefd7219c117297019656362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11f89443d607de1eda2033ff9c0221aed15a746fefd7219c117297019656362->enter($__internal_e11f89443d607de1eda2033ff9c0221aed15a746fefd7219c117297019656362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f26b2b97e91d731b09534d7650426fafe47a00254546d8be7128e7262b583922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26b2b97e91d731b09534d7650426fafe47a00254546d8be7128e7262b583922->enter($__internal_f26b2b97e91d731b09534d7650426fafe47a00254546d8be7128e7262b583922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_f26b2b97e91d731b09534d7650426fafe47a00254546d8be7128e7262b583922->leave($__internal_f26b2b97e91d731b09534d7650426fafe47a00254546d8be7128e7262b583922_prof);

        
        $__internal_e11f89443d607de1eda2033ff9c0221aed15a746fefd7219c117297019656362->leave($__internal_e11f89443d607de1eda2033ff9c0221aed15a746fefd7219c117297019656362_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a03107707ed4e50a15b016f4175bf9a43421ef3af8bf7f06e86a3bacd48b83f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a03107707ed4e50a15b016f4175bf9a43421ef3af8bf7f06e86a3bacd48b83f->enter($__internal_6a03107707ed4e50a15b016f4175bf9a43421ef3af8bf7f06e86a3bacd48b83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82a41b9213c2cd33a98d005f9e9ae03a3a1906a1cafa168be22f26a4a388a295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a41b9213c2cd33a98d005f9e9ae03a3a1906a1cafa168be22f26a4a388a295->enter($__internal_82a41b9213c2cd33a98d005f9e9ae03a3a1906a1cafa168be22f26a4a388a295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_82a41b9213c2cd33a98d005f9e9ae03a3a1906a1cafa168be22f26a4a388a295->leave($__internal_82a41b9213c2cd33a98d005f9e9ae03a3a1906a1cafa168be22f26a4a388a295_prof);

        
        $__internal_6a03107707ed4e50a15b016f4175bf9a43421ef3af8bf7f06e86a3bacd48b83f->leave($__internal_6a03107707ed4e50a15b016f4175bf9a43421ef3af8bf7f06e86a3bacd48b83f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d38f97b609c20ed40ca9cec20f7b79e0045fb5f6d039768a298537683c024e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38f97b609c20ed40ca9cec20f7b79e0045fb5f6d039768a298537683c024e96->enter($__internal_d38f97b609c20ed40ca9cec20f7b79e0045fb5f6d039768a298537683c024e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0806660bfb7c993e1ba21d7ecdfa342aa937d67d2553f7e6816d653cf2c79924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0806660bfb7c993e1ba21d7ecdfa342aa937d67d2553f7e6816d653cf2c79924->enter($__internal_0806660bfb7c993e1ba21d7ecdfa342aa937d67d2553f7e6816d653cf2c79924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_0806660bfb7c993e1ba21d7ecdfa342aa937d67d2553f7e6816d653cf2c79924->leave($__internal_0806660bfb7c993e1ba21d7ecdfa342aa937d67d2553f7e6816d653cf2c79924_prof);

        
        $__internal_d38f97b609c20ed40ca9cec20f7b79e0045fb5f6d039768a298537683c024e96->leave($__internal_d38f97b609c20ed40ca9cec20f7b79e0045fb5f6d039768a298537683c024e96_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  134 => 15,  132 => 14,  123 => 13,  105 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 22,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "@CoreSphereConsole/base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\coresphere\\console-bundle\\Resources\\views\\base.html.twig");
    }
}
