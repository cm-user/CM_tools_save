<?php

/* tagmanager.html.twig */
class __TwigTemplate_d47edae40d9b6716b026d7294a975e7105f274d6c2a6d888e8cc528ba593640b extends Twig_Template
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
        $__internal_d0e46e1736b81768edc31157ca5fac2b853d6b064de3bfcd2580b79457c76ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e46e1736b81768edc31157ca5fac2b853d6b064de3bfcd2580b79457c76ab9->enter($__internal_d0e46e1736b81768edc31157ca5fac2b853d6b064de3bfcd2580b79457c76ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tagmanager.html.twig"));

        $__internal_9f55ad7b0d88575850d170368d0c6f0c71e71238a8aa504b415a24e912ec0d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f55ad7b0d88575850d170368d0c6f0c71e71238a8aa504b415a24e912ec0d5e->enter($__internal_9f55ad7b0d88575850d170368d0c6f0c71e71238a8aa504b415a24e912ec0d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tagmanager.html.twig"));

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
        
        $__internal_d0e46e1736b81768edc31157ca5fac2b853d6b064de3bfcd2580b79457c76ab9->leave($__internal_d0e46e1736b81768edc31157ca5fac2b853d6b064de3bfcd2580b79457c76ab9_prof);

        
        $__internal_9f55ad7b0d88575850d170368d0c6f0c71e71238a8aa504b415a24e912ec0d5e->leave($__internal_9f55ad7b0d88575850d170368d0c6f0c71e71238a8aa504b415a24e912ec0d5e_prof);

    }

    public function getTemplateName()
    {
        return "tagmanager.html.twig";
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
<!-- End Google Tag Manager -->", "tagmanager.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\app\\Resources\\views\\tagmanager.html.twig");
    }
}
