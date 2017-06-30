<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_673350576131d714aa19f9a3c198309278d680cb5afdd5b3b94dcf1d8420c07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_52d3cd0b56fc72ca1c9aa8d5a6562051cf92a398f12a0ea2396566d29021af06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d3cd0b56fc72ca1c9aa8d5a6562051cf92a398f12a0ea2396566d29021af06->enter($__internal_52d3cd0b56fc72ca1c9aa8d5a6562051cf92a398f12a0ea2396566d29021af06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_43584dab0375f2f5f76bfbcd1bda7b7708cd4ee79137d2d53bc7d0efef37d972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43584dab0375f2f5f76bfbcd1bda7b7708cd4ee79137d2d53bc7d0efef37d972->enter($__internal_43584dab0375f2f5f76bfbcd1bda7b7708cd4ee79137d2d53bc7d0efef37d972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d3cd0b56fc72ca1c9aa8d5a6562051cf92a398f12a0ea2396566d29021af06->leave($__internal_52d3cd0b56fc72ca1c9aa8d5a6562051cf92a398f12a0ea2396566d29021af06_prof);

        
        $__internal_43584dab0375f2f5f76bfbcd1bda7b7708cd4ee79137d2d53bc7d0efef37d972->leave($__internal_43584dab0375f2f5f76bfbcd1bda7b7708cd4ee79137d2d53bc7d0efef37d972_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6dec2ca8a692633eb82b691da6f37ea13501f156096b6f7e96b8b983c0d7b4cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dec2ca8a692633eb82b691da6f37ea13501f156096b6f7e96b8b983c0d7b4cd->enter($__internal_6dec2ca8a692633eb82b691da6f37ea13501f156096b6f7e96b8b983c0d7b4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6ed8e9d84b967eaf641ced7a615fdf6c436daf32cbb9ba5cf08f0901591a35c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed8e9d84b967eaf641ced7a615fdf6c436daf32cbb9ba5cf08f0901591a35c8->enter($__internal_6ed8e9d84b967eaf641ced7a615fdf6c436daf32cbb9ba5cf08f0901591a35c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6ed8e9d84b967eaf641ced7a615fdf6c436daf32cbb9ba5cf08f0901591a35c8->leave($__internal_6ed8e9d84b967eaf641ced7a615fdf6c436daf32cbb9ba5cf08f0901591a35c8_prof);

        
        $__internal_6dec2ca8a692633eb82b691da6f37ea13501f156096b6f7e96b8b983c0d7b4cd->leave($__internal_6dec2ca8a692633eb82b691da6f37ea13501f156096b6f7e96b8b983c0d7b4cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
