<?php

/* UserBundle:Google:analytics.html.twig */
class __TwigTemplate_a36970306455b1cdcdb5614903dd666ee9d698aecaee1a09cd500856b05ba6c7 extends Twig_Template
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
        $__internal_5c0ef85870ee3ebcd52231a2f46425b79b656af896bfc0c90a37f876d74cbcdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0ef85870ee3ebcd52231a2f46425b79b656af896bfc0c90a37f876d74cbcdb->enter($__internal_5c0ef85870ee3ebcd52231a2f46425b79b656af896bfc0c90a37f876d74cbcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Google:analytics.html.twig"));

        $__internal_0b46e92e2b05585a80440096df27b305a3aeb68f7f17acb9b5e9861b9da0c1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b46e92e2b05585a80440096df27b305a3aeb68f7f17acb9b5e9861b9da0c1f9->enter($__internal_0b46e92e2b05585a80440096df27b305a3aeb68f7f17acb9b5e9861b9da0c1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Google:analytics.html.twig"));

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
        
        $__internal_5c0ef85870ee3ebcd52231a2f46425b79b656af896bfc0c90a37f876d74cbcdb->leave($__internal_5c0ef85870ee3ebcd52231a2f46425b79b656af896bfc0c90a37f876d74cbcdb_prof);

        
        $__internal_0b46e92e2b05585a80440096df27b305a3aeb68f7f17acb9b5e9861b9da0c1f9->leave($__internal_0b46e92e2b05585a80440096df27b305a3aeb68f7f17acb9b5e9861b9da0c1f9_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Google:analytics.html.twig";
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

</script>", "UserBundle:Google:analytics.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle/Resources/views/Google/analytics.html.twig");
    }
}
