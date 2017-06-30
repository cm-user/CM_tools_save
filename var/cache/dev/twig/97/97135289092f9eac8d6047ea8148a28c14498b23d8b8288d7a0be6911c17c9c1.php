<?php

/* @Shop/Showing/base.html.twig */
class __TwigTemplate_254750df939b420f386e6132e4db0501a058600ecdd15afc7059a4c2209bda14 extends Twig_Template
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
        $__internal_0ba363da7630db88f9fb88d93109457f86ca423fecfe9b171551fb28761278d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba363da7630db88f9fb88d93109457f86ca423fecfe9b171551fb28761278d7->enter($__internal_0ba363da7630db88f9fb88d93109457f86ca423fecfe9b171551fb28761278d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/Showing/base.html.twig"));

        $__internal_93bc951f5515ce16a4e4ccd4bffcaff6f9a76dc09275fc66371beb28059faab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93bc951f5515ce16a4e4ccd4bffcaff6f9a76dc09275fc66371beb28059faab9->enter($__internal_93bc951f5515ce16a4e4ccd4bffcaff6f9a76dc09275fc66371beb28059faab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/Showing/base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "width", array()), "html", null, true);
        echo "px; height: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shopConfiguration"] ?? $this->getContext($context, "shopConfiguration")), "height", array()), "html", null, true);
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
        
        $__internal_0ba363da7630db88f9fb88d93109457f86ca423fecfe9b171551fb28761278d7->leave($__internal_0ba363da7630db88f9fb88d93109457f86ca423fecfe9b171551fb28761278d7_prof);

        
        $__internal_93bc951f5515ce16a4e4ccd4bffcaff6f9a76dc09275fc66371beb28059faab9->leave($__internal_93bc951f5515ce16a4e4ccd4bffcaff6f9a76dc09275fc66371beb28059faab9_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f578ca18059b9ce47401bc9652632e1716ec06fea2119e543d55c59f77158992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f578ca18059b9ce47401bc9652632e1716ec06fea2119e543d55c59f77158992->enter($__internal_f578ca18059b9ce47401bc9652632e1716ec06fea2119e543d55c59f77158992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_352e2c518ea5877a8436963384d7b6c638a6ab2cef5e9cccda28196937372d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352e2c518ea5877a8436963384d7b6c638a6ab2cef5e9cccda28196937372d68->enter($__internal_352e2c518ea5877a8436963384d7b6c638a6ab2cef5e9cccda28196937372d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_352e2c518ea5877a8436963384d7b6c638a6ab2cef5e9cccda28196937372d68->leave($__internal_352e2c518ea5877a8436963384d7b6c638a6ab2cef5e9cccda28196937372d68_prof);

        
        $__internal_f578ca18059b9ce47401bc9652632e1716ec06fea2119e543d55c59f77158992->leave($__internal_f578ca18059b9ce47401bc9652632e1716ec06fea2119e543d55c59f77158992_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d7f5f1231a8c8ee941c8654e939180c7c1b2b0d820c24e0545b4c36a1fb2a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7f5f1231a8c8ee941c8654e939180c7c1b2b0d820c24e0545b4c36a1fb2a8c->enter($__internal_8d7f5f1231a8c8ee941c8654e939180c7c1b2b0d820c24e0545b4c36a1fb2a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c126af9c85c2c327b7e37c3d38ba49359a72e290bee3a0c8e6de49958359373b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c126af9c85c2c327b7e37c3d38ba49359a72e290bee3a0c8e6de49958359373b->enter($__internal_c126af9c85c2c327b7e37c3d38ba49359a72e290bee3a0c8e6de49958359373b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c126af9c85c2c327b7e37c3d38ba49359a72e290bee3a0c8e6de49958359373b->leave($__internal_c126af9c85c2c327b7e37c3d38ba49359a72e290bee3a0c8e6de49958359373b_prof);

        
        $__internal_8d7f5f1231a8c8ee941c8654e939180c7c1b2b0d820c24e0545b4c36a1fb2a8c->leave($__internal_8d7f5f1231a8c8ee941c8654e939180c7c1b2b0d820c24e0545b4c36a1fb2a8c_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ac17dd61bebe54ef179245f3f458099ba42b53aef46a2d5bb27060293ed0c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac17dd61bebe54ef179245f3f458099ba42b53aef46a2d5bb27060293ed0c8d->enter($__internal_4ac17dd61bebe54ef179245f3f458099ba42b53aef46a2d5bb27060293ed0c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d1d4beb83609e46e46847874762e0b77cede8126e42fb008abb88ca3afa15941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d4beb83609e46e46847874762e0b77cede8126e42fb008abb88ca3afa15941->enter($__internal_d1d4beb83609e46e46847874762e0b77cede8126e42fb008abb88ca3afa15941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d1d4beb83609e46e46847874762e0b77cede8126e42fb008abb88ca3afa15941->leave($__internal_d1d4beb83609e46e46847874762e0b77cede8126e42fb008abb88ca3afa15941_prof);

        
        $__internal_4ac17dd61bebe54ef179245f3f458099ba42b53aef46a2d5bb27060293ed0c8d->leave($__internal_4ac17dd61bebe54ef179245f3f458099ba42b53aef46a2d5bb27060293ed0c8d_prof);

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
        return array (  114 => 15,  97 => 12,  80 => 8,  66 => 16,  64 => 15,  60 => 14,  57 => 13,  55 => 12,  49 => 11,  45 => 9,  43 => 8,  39 => 7,  35 => 6,  28 => 1,);
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
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Affichage TV Boutique</title>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/shop/js/app.js') }}\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/user/css/bootstrap.min.css') }}\" />
    {% block stylesheets %}{% endblock %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
</head>
<body style=\"width: {{ shopConfiguration.width }}px; height: {{ shopConfiguration.height }}px;margin: auto;overflow: hidden;\">
    {% block body %}{% endblock %}

    <script type=\"application/javascript\" src=\"{{ asset('bundles/user/js/bootstrap.min.js') }}\"></script>
    {% block javascripts %}{% endblock %}
</body>
</html>


", "@Shop/Showing/base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\Showing\\base.html.twig");
    }
}
