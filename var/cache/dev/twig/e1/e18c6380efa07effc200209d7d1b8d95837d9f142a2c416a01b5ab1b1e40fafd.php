<?php

/* ::analytics.html.twig */
class __TwigTemplate_85a2d52f284a0d5405ee2cfaa6c5ff493869c25cde56d97a3f6ce36c9f38511e extends Twig_Template
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
        $__internal_ae5b1790c2d424f674b048ae4523643c4ffa915b0e32aa05c4cdc11bbd88e810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5b1790c2d424f674b048ae4523643c4ffa915b0e32aa05c4cdc11bbd88e810->enter($__internal_ae5b1790c2d424f674b048ae4523643c4ffa915b0e32aa05c4cdc11bbd88e810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::analytics.html.twig"));

        $__internal_ebd1c8888122f800c7e76d630d6ece6481cd96bc04fb3d69ff97cbcd502498f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd1c8888122f800c7e76d630d6ece6481cd96bc04fb3d69ff97cbcd502498f8->enter($__internal_ebd1c8888122f800c7e76d630d6ece6481cd96bc04fb3d69ff97cbcd502498f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::analytics.html.twig"));

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
        
        $__internal_ae5b1790c2d424f674b048ae4523643c4ffa915b0e32aa05c4cdc11bbd88e810->leave($__internal_ae5b1790c2d424f674b048ae4523643c4ffa915b0e32aa05c4cdc11bbd88e810_prof);

        
        $__internal_ebd1c8888122f800c7e76d630d6ece6481cd96bc04fb3d69ff97cbcd502498f8->leave($__internal_ebd1c8888122f800c7e76d630d6ece6481cd96bc04fb3d69ff97cbcd502498f8_prof);

    }

    public function getTemplateName()
    {
        return "::analytics.html.twig";
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

</script>", "::analytics.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\app/Resources\\views/analytics.html.twig");
    }
}
