<?php

/* ::tagmanager.html.twig */
class __TwigTemplate_83f6d0ae29482c9479344c1beb212a1d9a432f0e3a7b81e9503efd9bbdd6ab71 extends Twig_Template
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
        $__internal_9e1d3529c7a0576e7bee6917f223ddcb1c5b259164a9b5e8ab40e005ff90ed5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1d3529c7a0576e7bee6917f223ddcb1c5b259164a9b5e8ab40e005ff90ed5c->enter($__internal_9e1d3529c7a0576e7bee6917f223ddcb1c5b259164a9b5e8ab40e005ff90ed5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::tagmanager.html.twig"));

        $__internal_7abfe7059a51d446ea131300885b29b092d4232f2cc28cd532fadad77afb5197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abfe7059a51d446ea131300885b29b092d4232f2cc28cd532fadad77afb5197->enter($__internal_7abfe7059a51d446ea131300885b29b092d4232f2cc28cd532fadad77afb5197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::tagmanager.html.twig"));

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
        
        $__internal_9e1d3529c7a0576e7bee6917f223ddcb1c5b259164a9b5e8ab40e005ff90ed5c->leave($__internal_9e1d3529c7a0576e7bee6917f223ddcb1c5b259164a9b5e8ab40e005ff90ed5c_prof);

        
        $__internal_7abfe7059a51d446ea131300885b29b092d4232f2cc28cd532fadad77afb5197->leave($__internal_7abfe7059a51d446ea131300885b29b092d4232f2cc28cd532fadad77afb5197_prof);

    }

    public function getTemplateName()
    {
        return "::tagmanager.html.twig";
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
<!-- End Google Tag Manager -->", "::tagmanager.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\app/Resources\\views/tagmanager.html.twig");
    }
}
