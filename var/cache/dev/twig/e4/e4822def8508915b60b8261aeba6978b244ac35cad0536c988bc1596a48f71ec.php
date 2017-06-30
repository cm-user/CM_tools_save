<?php

/* ShopBundle:Showing:base.html.twig */
class __TwigTemplate_720044553a00d43c8426b695202f01441b62b1d7791adf023eec114549977bbb extends Twig_Template
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
        $__internal_7da2f19067605f4b37dfb04986692568e9ba320cb7d3e72ae613d923e7ee69d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da2f19067605f4b37dfb04986692568e9ba320cb7d3e72ae613d923e7ee69d0->enter($__internal_7da2f19067605f4b37dfb04986692568e9ba320cb7d3e72ae613d923e7ee69d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Showing:base.html.twig"));

        $__internal_926fd51c37dea4d22c5106d7828b260761bc85838d4795935d5bcdcbc54dc2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926fd51c37dea4d22c5106d7828b260761bc85838d4795935d5bcdcbc54dc2fe->enter($__internal_926fd51c37dea4d22c5106d7828b260761bc85838d4795935d5bcdcbc54dc2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Showing:base.html.twig"));

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
        
        $__internal_7da2f19067605f4b37dfb04986692568e9ba320cb7d3e72ae613d923e7ee69d0->leave($__internal_7da2f19067605f4b37dfb04986692568e9ba320cb7d3e72ae613d923e7ee69d0_prof);

        
        $__internal_926fd51c37dea4d22c5106d7828b260761bc85838d4795935d5bcdcbc54dc2fe->leave($__internal_926fd51c37dea4d22c5106d7828b260761bc85838d4795935d5bcdcbc54dc2fe_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d99cc3b6b235e31ca5509a46993385aa8ab930457197311712e59bb507c1c1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99cc3b6b235e31ca5509a46993385aa8ab930457197311712e59bb507c1c1f5->enter($__internal_d99cc3b6b235e31ca5509a46993385aa8ab930457197311712e59bb507c1c1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_82f7a7c50bcf3608adbf9eed4c561440269da5d60c5515d4c319c7643d595214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f7a7c50bcf3608adbf9eed4c561440269da5d60c5515d4c319c7643d595214->enter($__internal_82f7a7c50bcf3608adbf9eed4c561440269da5d60c5515d4c319c7643d595214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_82f7a7c50bcf3608adbf9eed4c561440269da5d60c5515d4c319c7643d595214->leave($__internal_82f7a7c50bcf3608adbf9eed4c561440269da5d60c5515d4c319c7643d595214_prof);

        
        $__internal_d99cc3b6b235e31ca5509a46993385aa8ab930457197311712e59bb507c1c1f5->leave($__internal_d99cc3b6b235e31ca5509a46993385aa8ab930457197311712e59bb507c1c1f5_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5c6cf798739f489a5172144595efa657059e1448f3677c5e35829708e6c7da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c6cf798739f489a5172144595efa657059e1448f3677c5e35829708e6c7da4->enter($__internal_e5c6cf798739f489a5172144595efa657059e1448f3677c5e35829708e6c7da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2ed5476175c168b4d655e195c315816cfda6e9c039ea4a8b0ae8f9e8439d202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ed5476175c168b4d655e195c315816cfda6e9c039ea4a8b0ae8f9e8439d202->enter($__internal_f2ed5476175c168b4d655e195c315816cfda6e9c039ea4a8b0ae8f9e8439d202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f2ed5476175c168b4d655e195c315816cfda6e9c039ea4a8b0ae8f9e8439d202->leave($__internal_f2ed5476175c168b4d655e195c315816cfda6e9c039ea4a8b0ae8f9e8439d202_prof);

        
        $__internal_e5c6cf798739f489a5172144595efa657059e1448f3677c5e35829708e6c7da4->leave($__internal_e5c6cf798739f489a5172144595efa657059e1448f3677c5e35829708e6c7da4_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8ad77b514b3cc41836194fbf2dffd0aef87c5a7bbf3a4c8a8c5b8575d6d23cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ad77b514b3cc41836194fbf2dffd0aef87c5a7bbf3a4c8a8c5b8575d6d23cf->enter($__internal_c8ad77b514b3cc41836194fbf2dffd0aef87c5a7bbf3a4c8a8c5b8575d6d23cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5b5641364172843bc75bc53852e7544fc1d6a7512688b9e9d31966c4729c546b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5641364172843bc75bc53852e7544fc1d6a7512688b9e9d31966c4729c546b->enter($__internal_5b5641364172843bc75bc53852e7544fc1d6a7512688b9e9d31966c4729c546b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5b5641364172843bc75bc53852e7544fc1d6a7512688b9e9d31966c4729c546b->leave($__internal_5b5641364172843bc75bc53852e7544fc1d6a7512688b9e9d31966c4729c546b_prof);

        
        $__internal_c8ad77b514b3cc41836194fbf2dffd0aef87c5a7bbf3a4c8a8c5b8575d6d23cf->leave($__internal_c8ad77b514b3cc41836194fbf2dffd0aef87c5a7bbf3a4c8a8c5b8575d6d23cf_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Showing:base.html.twig";
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


", "ShopBundle:Showing:base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/Showing/base.html.twig");
    }
}
