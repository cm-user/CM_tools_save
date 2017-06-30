<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_78f3ee62e410d6aba065f9e4b871a6cb5223a49d110a0978eb520ff577bae3d9 extends Twig_Template
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
        $__internal_74b335160bd7dbf5df042c4b6659e5cdd0d347930826ad1f4913fe3b19ebfcad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b335160bd7dbf5df042c4b6659e5cdd0d347930826ad1f4913fe3b19ebfcad->enter($__internal_74b335160bd7dbf5df042c4b6659e5cdd0d347930826ad1f4913fe3b19ebfcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_43d6e345f245715990a6c44c2ab8752a46f7ca21d0c84a4e1a30845feff95f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d6e345f245715990a6c44c2ab8752a46f7ca21d0c84a4e1a30845feff95f7e->enter($__internal_43d6e345f245715990a6c44c2ab8752a46f7ca21d0c84a4e1a30845feff95f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_74b335160bd7dbf5df042c4b6659e5cdd0d347930826ad1f4913fe3b19ebfcad->leave($__internal_74b335160bd7dbf5df042c4b6659e5cdd0d347930826ad1f4913fe3b19ebfcad_prof);

        
        $__internal_43d6e345f245715990a6c44c2ab8752a46f7ca21d0c84a4e1a30845feff95f7e->leave($__internal_43d6e345f245715990a6c44c2ab8752a46f7ca21d0c84a4e1a30845feff95f7e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
