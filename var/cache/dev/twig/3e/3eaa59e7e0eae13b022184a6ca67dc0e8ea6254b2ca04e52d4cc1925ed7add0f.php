<?php

/* @User/Google/analytics.html.twig */
class __TwigTemplate_8afb6b1578761f9085f6f0c02e320cf49ffffe6d17dcfb2e4611dd31b4e8c758 extends Twig_Template
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
        $__internal_ab940372ec14027703c7629f9576765d497d9700252f2bc5a0370784100f7d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab940372ec14027703c7629f9576765d497d9700252f2bc5a0370784100f7d53->enter($__internal_ab940372ec14027703c7629f9576765d497d9700252f2bc5a0370784100f7d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Google/analytics.html.twig"));

        $__internal_fddb53ef18eddb8d8e29217a8140853ebad05e96a50076f91fc83a5b034af626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddb53ef18eddb8d8e29217a8140853ebad05e96a50076f91fc83a5b034af626->enter($__internal_fddb53ef18eddb8d8e29217a8140853ebad05e96a50076f91fc83a5b034af626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Google/analytics.html.twig"));

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
        
        $__internal_ab940372ec14027703c7629f9576765d497d9700252f2bc5a0370784100f7d53->leave($__internal_ab940372ec14027703c7629f9576765d497d9700252f2bc5a0370784100f7d53_prof);

        
        $__internal_fddb53ef18eddb8d8e29217a8140853ebad05e96a50076f91fc83a5b034af626->leave($__internal_fddb53ef18eddb8d8e29217a8140853ebad05e96a50076f91fc83a5b034af626_prof);

    }

    public function getTemplateName()
    {
        return "@User/Google/analytics.html.twig";
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

</script>", "@User/Google/analytics.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle\\Resources\\views\\Google\\analytics.html.twig");
    }
}
