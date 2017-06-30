<?php

/* ::tagmanager.html.twig */
class __TwigTemplate_5eda14ed072bdf1d95e05fd700ed2714d7622647e0f4f67e1c7fb194d5c0dea2 extends Twig_Template
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
        // line 1
        echo "<!-- Google Tag Manager -->
<noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=";
        // line 2
        echo twig_escape_filter($this->env, ($context["tag_manager"] ?? null), "html", null, true);
        echo "\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','";
        // line 7
        echo twig_escape_filter($this->env, ($context["tag_manager"] ?? null), "html", null, true);
        echo "');</script>
<!-- End Google Tag Manager -->";
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
        return array (  30 => 7,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::tagmanager.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\app/Resources\\views/tagmanager.html.twig");
    }
}
