<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_0e18eb776f314c32a35f9783a385e68cf29d46e999f5f4e17295411f1aa7deb9 extends Twig_Template
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
        $__internal_6f71134444b2736222e85a6cf5b83ce0245d4f16a52b02595b134721b38840a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f71134444b2736222e85a6cf5b83ce0245d4f16a52b02595b134721b38840a5->enter($__internal_6f71134444b2736222e85a6cf5b83ce0245d4f16a52b02595b134721b38840a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        $__internal_efc81e9c3c3d371d5377a6864e15e00fdd9d173de22683ecd45235db81347ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc81e9c3c3d371d5377a6864e15e00fdd9d173de22683ecd45235db81347ad7->enter($__internal_efc81e9c3c3d371d5377a6864e15e00fdd9d173de22683ecd45235db81347ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_6f71134444b2736222e85a6cf5b83ce0245d4f16a52b02595b134721b38840a5->leave($__internal_6f71134444b2736222e85a6cf5b83ce0245d4f16a52b02595b134721b38840a5_prof);

        
        $__internal_efc81e9c3c3d371d5377a6864e15e00fdd9d173de22683ecd45235db81347ad7->leave($__internal_efc81e9c3c3d371d5377a6864e15e00fdd9d173de22683ecd45235db81347ad7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b9e6a9a996b11ee0322cf6674909c1b048a5439f80844a74951e447097c77ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9e6a9a996b11ee0322cf6674909c1b048a5439f80844a74951e447097c77ab->enter($__internal_8b9e6a9a996b11ee0322cf6674909c1b048a5439f80844a74951e447097c77ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71279c5533d961fb8a2df0021d5566f73844c7440b409f128e83425b6db0c16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71279c5533d961fb8a2df0021d5566f73844c7440b409f128e83425b6db0c16e->enter($__internal_71279c5533d961fb8a2df0021d5566f73844c7440b409f128e83425b6db0c16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_71279c5533d961fb8a2df0021d5566f73844c7440b409f128e83425b6db0c16e->leave($__internal_71279c5533d961fb8a2df0021d5566f73844c7440b409f128e83425b6db0c16e_prof);

        
        $__internal_8b9e6a9a996b11ee0322cf6674909c1b048a5439f80844a74951e447097c77ab->leave($__internal_8b9e6a9a996b11ee0322cf6674909c1b048a5439f80844a74951e447097c77ab_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be52f9608ad924c32251b97974ac04e568f70af8be5a9f262789e13b9a6c7554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be52f9608ad924c32251b97974ac04e568f70af8be5a9f262789e13b9a6c7554->enter($__internal_be52f9608ad924c32251b97974ac04e568f70af8be5a9f262789e13b9a6c7554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_75530f00788dece5f2c489c0709caf9076f8a9222fc5886ec9ef0c6debd8b207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75530f00788dece5f2c489c0709caf9076f8a9222fc5886ec9ef0c6debd8b207->enter($__internal_75530f00788dece5f2c489c0709caf9076f8a9222fc5886ec9ef0c6debd8b207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_75530f00788dece5f2c489c0709caf9076f8a9222fc5886ec9ef0c6debd8b207->leave($__internal_75530f00788dece5f2c489c0709caf9076f8a9222fc5886ec9ef0c6debd8b207_prof);

        
        $__internal_be52f9608ad924c32251b97974ac04e568f70af8be5a9f262789e13b9a6c7554->leave($__internal_be52f9608ad924c32251b97974ac04e568f70af8be5a9f262789e13b9a6c7554_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_44385e23d6f6fc43f847d20643e6233610ec4a62f9d5a87b8b7b70cae81a476e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44385e23d6f6fc43f847d20643e6233610ec4a62f9d5a87b8b7b70cae81a476e->enter($__internal_44385e23d6f6fc43f847d20643e6233610ec4a62f9d5a87b8b7b70cae81a476e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf02229182a269baaf382d0de73018daf3a81fd112239f39d42aee5502d24f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf02229182a269baaf382d0de73018daf3a81fd112239f39d42aee5502d24f39->enter($__internal_cf02229182a269baaf382d0de73018daf3a81fd112239f39d42aee5502d24f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_cf02229182a269baaf382d0de73018daf3a81fd112239f39d42aee5502d24f39->leave($__internal_cf02229182a269baaf382d0de73018daf3a81fd112239f39d42aee5502d24f39_prof);

        
        $__internal_44385e23d6f6fc43f847d20643e6233610ec4a62f9d5a87b8b7b70cae81a476e->leave($__internal_44385e23d6f6fc43f847d20643e6233610ec4a62f9d5a87b8b7b70cae81a476e_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e73a393e2108066e2ebe2a283f816ec767d529fc72650280d8c0057c7ab917a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e73a393e2108066e2ebe2a283f816ec767d529fc72650280d8c0057c7ab917a->enter($__internal_1e73a393e2108066e2ebe2a283f816ec767d529fc72650280d8c0057c7ab917a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca0054441b9d46d994addf1c73b3402f33bc5f32cb9b895a98edab61a5ea2127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0054441b9d46d994addf1c73b3402f33bc5f32cb9b895a98edab61a5ea2127->enter($__internal_ca0054441b9d46d994addf1c73b3402f33bc5f32cb9b895a98edab61a5ea2127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ca0054441b9d46d994addf1c73b3402f33bc5f32cb9b895a98edab61a5ea2127->leave($__internal_ca0054441b9d46d994addf1c73b3402f33bc5f32cb9b895a98edab61a5ea2127_prof);

        
        $__internal_1e73a393e2108066e2ebe2a283f816ec767d529fc72650280d8c0057c7ab917a->leave($__internal_1e73a393e2108066e2ebe2a283f816ec767d529fc72650280d8c0057c7ab917a_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
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
", "CoreSphereConsoleBundle::base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\coresphere\\console-bundle/Resources/views/base.html.twig");
    }
}
