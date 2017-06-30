<?php

/* analytics.html.twig */
class __TwigTemplate_c0854688334b3ded76a10c020c95c598eb14896266798169d8a175bf45ffa42e extends Twig_Template
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
        $__internal_a02fbe0d920c0821900bd11606461411c75c576a9337e27d854a3bac39ef5799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02fbe0d920c0821900bd11606461411c75c576a9337e27d854a3bac39ef5799->enter($__internal_a02fbe0d920c0821900bd11606461411c75c576a9337e27d854a3bac39ef5799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "analytics.html.twig"));

        $__internal_027660542cecefe66d0e81474b405f8f40ca99d9fa8a570cd76dc733cc6193fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027660542cecefe66d0e81474b405f8f40ca99d9fa8a570cd76dc733cc6193fc->enter($__internal_027660542cecefe66d0e81474b405f8f40ca99d9fa8a570cd76dc733cc6193fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "analytics.html.twig"));

        // line 1
        echo "<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '";
        // line 7
        echo twig_escape_filter($this->env, ($context["ga_tracking"] ?? $this->getContext($context, "ga_tracking")), "html", null, true);
        echo "', 'auto');
    ga('send', 'pageview');

</script>";
        
        $__internal_a02fbe0d920c0821900bd11606461411c75c576a9337e27d854a3bac39ef5799->leave($__internal_a02fbe0d920c0821900bd11606461411c75c576a9337e27d854a3bac39ef5799_prof);

        
        $__internal_027660542cecefe66d0e81474b405f8f40ca99d9fa8a570cd76dc733cc6193fc->leave($__internal_027660542cecefe66d0e81474b405f8f40ca99d9fa8a570cd76dc733cc6193fc_prof);

    }

    public function getTemplateName()
    {
        return "analytics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '{{ ga_tracking }}', 'auto');
    ga('send', 'pageview');

</script>", "analytics.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\app\\Resources\\views\\analytics.html.twig");
    }
}
