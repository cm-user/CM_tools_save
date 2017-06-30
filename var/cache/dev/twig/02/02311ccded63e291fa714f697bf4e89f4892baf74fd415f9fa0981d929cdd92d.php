<?php

/* UserBundle:Google:tagmanager.html.twig */
class __TwigTemplate_f4090e2db85d576864111d23621423b59d6559562e5e89a28b7ae54df9de301f extends Twig_Template
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
        $__internal_4c2a800f481ff208f955e5b3b28c12a6d8d12cb02195afa972ad7c0395c39e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2a800f481ff208f955e5b3b28c12a6d8d12cb02195afa972ad7c0395c39e71->enter($__internal_4c2a800f481ff208f955e5b3b28c12a6d8d12cb02195afa972ad7c0395c39e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Google:tagmanager.html.twig"));

        $__internal_7ec584d9cfa7e782cf28b3936cef81620f6d60825e99b2229586d684330ad1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec584d9cfa7e782cf28b3936cef81620f6d60825e99b2229586d684330ad1a6->enter($__internal_7ec584d9cfa7e782cf28b3936cef81620f6d60825e99b2229586d684330ad1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Google:tagmanager.html.twig"));

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
        
        $__internal_4c2a800f481ff208f955e5b3b28c12a6d8d12cb02195afa972ad7c0395c39e71->leave($__internal_4c2a800f481ff208f955e5b3b28c12a6d8d12cb02195afa972ad7c0395c39e71_prof);

        
        $__internal_7ec584d9cfa7e782cf28b3936cef81620f6d60825e99b2229586d684330ad1a6->leave($__internal_7ec584d9cfa7e782cf28b3936cef81620f6d60825e99b2229586d684330ad1a6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Google:tagmanager.html.twig";
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
<!-- End Google Tag Manager -->", "UserBundle:Google:tagmanager.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle/Resources/views/Google/tagmanager.html.twig");
    }
}
