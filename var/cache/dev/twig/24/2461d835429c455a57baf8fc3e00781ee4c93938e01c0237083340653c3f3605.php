<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_011ad4f9d381489003ed2eca3794d3aa5212da126fbe86eaee63dd727edcebdb extends Twig_Template
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
        $__internal_058fcf33326bb7f193a44c38617834d05917b05e0fe668015643fb8e79db35ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058fcf33326bb7f193a44c38617834d05917b05e0fe668015643fb8e79db35ea->enter($__internal_058fcf33326bb7f193a44c38617834d05917b05e0fe668015643fb8e79db35ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_47c9d1f75e034730dd75169369fe22b4e1d82e160016527d9b3cc3ab0f66b464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c9d1f75e034730dd75169369fe22b4e1d82e160016527d9b3cc3ab0f66b464->enter($__internal_47c9d1f75e034730dd75169369fe22b4e1d82e160016527d9b3cc3ab0f66b464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_058fcf33326bb7f193a44c38617834d05917b05e0fe668015643fb8e79db35ea->leave($__internal_058fcf33326bb7f193a44c38617834d05917b05e0fe668015643fb8e79db35ea_prof);

        
        $__internal_47c9d1f75e034730dd75169369fe22b4e1d82e160016527d9b3cc3ab0f66b464->leave($__internal_47c9d1f75e034730dd75169369fe22b4e1d82e160016527d9b3cc3ab0f66b464_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
