<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e0c8f5776eaa8c42f66228f2cf8817874bc9d28eb4d699b5be15677db671b321 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb1a7508717ab144f07604f280870bd6146cc8cf597da05613789aa669e41613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1a7508717ab144f07604f280870bd6146cc8cf597da05613789aa669e41613->enter($__internal_cb1a7508717ab144f07604f280870bd6146cc8cf597da05613789aa669e41613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_27cbdbf10c7e4b258982360761bd4a2fd0b1b25fcc0b1ef197e7d554cc1a074c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cbdbf10c7e4b258982360761bd4a2fd0b1b25fcc0b1ef197e7d554cc1a074c->enter($__internal_27cbdbf10c7e4b258982360761bd4a2fd0b1b25fcc0b1ef197e7d554cc1a074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1a7508717ab144f07604f280870bd6146cc8cf597da05613789aa669e41613->leave($__internal_cb1a7508717ab144f07604f280870bd6146cc8cf597da05613789aa669e41613_prof);

        
        $__internal_27cbdbf10c7e4b258982360761bd4a2fd0b1b25fcc0b1ef197e7d554cc1a074c->leave($__internal_27cbdbf10c7e4b258982360761bd4a2fd0b1b25fcc0b1ef197e7d554cc1a074c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1bed79077efc7dc6462c24ccd0e0e13da68478641eecfc5c9cb5a91b03dbd1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1bed79077efc7dc6462c24ccd0e0e13da68478641eecfc5c9cb5a91b03dbd1b->enter($__internal_c1bed79077efc7dc6462c24ccd0e0e13da68478641eecfc5c9cb5a91b03dbd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ade7864ce5232a4d2b435c9b6ebd3bdca770080f4a318aff57f4725903523b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade7864ce5232a4d2b435c9b6ebd3bdca770080f4a318aff57f4725903523b83->enter($__internal_ade7864ce5232a4d2b435c9b6ebd3bdca770080f4a318aff57f4725903523b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_ade7864ce5232a4d2b435c9b6ebd3bdca770080f4a318aff57f4725903523b83->leave($__internal_ade7864ce5232a4d2b435c9b6ebd3bdca770080f4a318aff57f4725903523b83_prof);

        
        $__internal_c1bed79077efc7dc6462c24ccd0e0e13da68478641eecfc5c9cb5a91b03dbd1b->leave($__internal_c1bed79077efc7dc6462c24ccd0e0e13da68478641eecfc5c9cb5a91b03dbd1b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
