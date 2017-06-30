<?php

/* @Marketing/inky/menu.html */
class __TwigTemplate_106fe876c12fdf5fc6ff334afe0d52922ca45f8d203091931bf9e260c6de7fa5 extends Twig_Template
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
        $__internal_46d17bfb028c35a8661b02b72d0bc48d66872231366635e3d90fa1e3bdbb686f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d17bfb028c35a8661b02b72d0bc48d66872231366635e3d90fa1e3bdbb686f->enter($__internal_46d17bfb028c35a8661b02b72d0bc48d66872231366635e3d90fa1e3bdbb686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/inky/menu.html"));

        $__internal_4200dbc74076aa38b63e0a1026ac45b2be2db736c80f6e47a4884b3f17ffbb0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4200dbc74076aa38b63e0a1026ac45b2be2db736c80f6e47a4884b3f17ffbb0b->enter($__internal_4200dbc74076aa38b63e0a1026ac45b2be2db736c80f6e47a4884b3f17ffbb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/inky/menu.html"));

        // line 1
        echo "<row>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 3
            echo "        <columns small=\"12\" large=\"4\">
            <button class=\"large expand grey no-margin\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "title", array()), "html", null, true);
            echo "</button>
        </columns>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</row>";
        
        $__internal_46d17bfb028c35a8661b02b72d0bc48d66872231366635e3d90fa1e3bdbb686f->leave($__internal_46d17bfb028c35a8661b02b72d0bc48d66872231366635e3d90fa1e3bdbb686f_prof);

        
        $__internal_4200dbc74076aa38b63e0a1026ac45b2be2db736c80f6e47a4884b3f17ffbb0b->leave($__internal_4200dbc74076aa38b63e0a1026ac45b2be2db736c80f6e47a4884b3f17ffbb0b_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/inky/menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<row>
    {% for menu in menus %}
        <columns small=\"12\" large=\"4\">
            <button class=\"large expand grey no-margin\" href=\"{{ menu.link }}\">{{ menu.title }}</button>
        </columns>
    {% endfor %}
</row>", "@Marketing/inky/menu.html", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\inky\\menu.html");
    }
}
