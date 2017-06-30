<?php

/* @User/Google/tagmanager.html.twig */
class __TwigTemplate_1c1502072d6e3907070fc181d11a079b67615dd9ad8e10ad77b9f1f06d034777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e07181a4b37f08abd251a1f73345ff77bd73efc3152bc163a5fe6c9f7b06c545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07181a4b37f08abd251a1f73345ff77bd73efc3152bc163a5fe6c9f7b06c545->enter($__internal_e07181a4b37f08abd251a1f73345ff77bd73efc3152bc163a5fe6c9f7b06c545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Google/tagmanager.html.twig"));

        $__internal_ca6b357094062c6a87ca1d5243918f4e3acd14601033b95aaea79479d8b3470c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6b357094062c6a87ca1d5243918f4e3acd14601033b95aaea79479d8b3470c->enter($__internal_ca6b357094062c6a87ca1d5243918f4e3acd14601033b95aaea79479d8b3470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Google/tagmanager.html.twig"));

        // line 1
        echo "<!-- Google Tag Manager -->
<noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=";
        // line 2
        echo twig_escape_filter($this->env, ($context["tag_manager"] ?? $this->getContext($context, "tag_manager")), "html", null, true);
        echo "\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','";
        // line 7
        echo twig_escape_filter($this->env, ($context["tag_manager"] ?? $this->getContext($context, "tag_manager")), "html", null, true);
        echo "');</script>
<!-- End Google Tag Manager -->";
        
        $__internal_e07181a4b37f08abd251a1f73345ff77bd73efc3152bc163a5fe6c9f7b06c545->leave($__internal_e07181a4b37f08abd251a1f73345ff77bd73efc3152bc163a5fe6c9f7b06c545_prof);

        
        $__internal_ca6b357094062c6a87ca1d5243918f4e3acd14601033b95aaea79479d8b3470c->leave($__internal_ca6b357094062c6a87ca1d5243918f4e3acd14601033b95aaea79479d8b3470c_prof);

    }

    public function getTemplateName()
    {
        return "@User/Google/tagmanager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Google Tag Manager -->
<noscript><iframe src=\"//www.googletagmanager.com/ns.html?id={{ tag_manager }}\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ tag_manager }}');</script>
<!-- End Google Tag Manager -->", "@User/Google/tagmanager.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle\\Resources\\views\\Google\\tagmanager.html.twig");
    }
}
