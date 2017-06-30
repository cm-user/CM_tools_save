<?php

/* @Shop/Form/field.html.twig */
class __TwigTemplate_254e38f089ce36a5a865d890161463a3fc17a0891dc2cdc6425e094f84e3a56b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "@Shop/Form/field.html.twig", 1);
        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
            'view_widget' => array($this, 'block_view_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1953c6fb4b4865ced1ce4afbac17a062c4ed3c5f01356ae6f09b8609d5a4a942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1953c6fb4b4865ced1ce4afbac17a062c4ed3c5f01356ae6f09b8609d5a4a942->enter($__internal_1953c6fb4b4865ced1ce4afbac17a062c4ed3c5f01356ae6f09b8609d5a4a942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/Form/field.html.twig"));

        $__internal_c7172478b9d0daa7dc15d0005c0365d51593725b465123e63ae2b7ba6db46eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7172478b9d0daa7dc15d0005c0365d51593725b465123e63ae2b7ba6db46eb7->enter($__internal_c7172478b9d0daa7dc15d0005c0365d51593725b465123e63ae2b7ba6db46eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/Form/field.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1953c6fb4b4865ced1ce4afbac17a062c4ed3c5f01356ae6f09b8609d5a4a942->leave($__internal_1953c6fb4b4865ced1ce4afbac17a062c4ed3c5f01356ae6f09b8609d5a4a942_prof);

        
        $__internal_c7172478b9d0daa7dc15d0005c0365d51593725b465123e63ae2b7ba6db46eb7->leave($__internal_c7172478b9d0daa7dc15d0005c0365d51593725b465123e63ae2b7ba6db46eb7_prof);

    }

    // line 24
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e11535c9a6d463fa63add5cd31293f35e4c06d3be1a00c60b9f7e659232a345e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11535c9a6d463fa63add5cd31293f35e4c06d3be1a00c60b9f7e659232a345e->enter($__internal_e11535c9a6d463fa63add5cd31293f35e4c06d3be1a00c60b9f7e659232a345e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_3253de5c7de6f483a510f19a5bcd8a026b4963eafa174f1c56b1cb8de16e23c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3253de5c7de6f483a510f19a5bcd8a026b4963eafa174f1c56b1cb8de16e23c3->enter($__internal_3253de5c7de6f483a510f19a5bcd8a026b4963eafa174f1c56b1cb8de16e23c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 25
        echo "    ";
        ob_start();
        // line 26
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 27
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
            // line 28
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? $this->getContext($context, "prototype")), "vars", array()), "name", array())));
            // line 29
            echo "        ";
        }
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-allow-add" => ((($context["allow_add"] ?? $this->getContext($context, "allow_add"))) ? (1) : (0))));
        // line 31
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-allow-remove" => ((($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) ? (1) : (0))));
        // line 32
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-name-prefix" => ($context["full_name"] ?? $this->getContext($context, "full_name"))));
        // line 33
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3253de5c7de6f483a510f19a5bcd8a026b4963eafa174f1c56b1cb8de16e23c3->leave($__internal_3253de5c7de6f483a510f19a5bcd8a026b4963eafa174f1c56b1cb8de16e23c3_prof);

        
        $__internal_e11535c9a6d463fa63add5cd31293f35e4c06d3be1a00c60b9f7e659232a345e->leave($__internal_e11535c9a6d463fa63add5cd31293f35e4c06d3be1a00c60b9f7e659232a345e_prof);

    }

    // line 37
    public function block_view_widget($context, array $blocks = array())
    {
        $__internal_048eb9e262c9271594a552f8dc85c8b67d3012a2157cc32301cbf9ff84a8e327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048eb9e262c9271594a552f8dc85c8b67d3012a2157cc32301cbf9ff84a8e327->enter($__internal_048eb9e262c9271594a552f8dc85c8b67d3012a2157cc32301cbf9ff84a8e327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "view_widget"));

        $__internal_4ad8573da2379a70eb2458ba8cd1ee8a0c8f72dbf6c5632f7c8718483cf45551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad8573da2379a70eb2458ba8cd1ee8a0c8f72dbf6c5632f7c8718483cf45551->enter($__internal_4ad8573da2379a70eb2458ba8cd1ee8a0c8f72dbf6c5632f7c8718483cf45551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "view_widget"));

        // line 38
        echo "<p class=\"form-control-static\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</p>";
        
        $__internal_4ad8573da2379a70eb2458ba8cd1ee8a0c8f72dbf6c5632f7c8718483cf45551->leave($__internal_4ad8573da2379a70eb2458ba8cd1ee8a0c8f72dbf6c5632f7c8718483cf45551_prof);

        
        $__internal_048eb9e262c9271594a552f8dc85c8b67d3012a2157cc32301cbf9ff84a8e327->leave($__internal_048eb9e262c9271594a552f8dc85c8b67d3012a2157cc32301cbf9ff84a8e327_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/Form/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  88 => 37,  74 => 33,  71 => 32,  68 => 31,  65 => 30,  62 => 29,  59 => 28,  56 => 27,  53 => 26,  50 => 25,  41 => 24,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"bootstrap_3_horizontal_layout.html.twig\" %}

{#
# jquery.collection.html.twig
#
# Adds the following html attributes to the root node of your collection fields:
#
# - data-prototype-name: placeholder used in the prototype to replace element indexes on the collection
# - data-allow-add: if set to false, plugin will automatically set allow_add option to false
# - data-allow-delete: if set to false, plugin will automatically set allow_remove option to false
# - data-name-prefix: contains the collection's prefix used in descendant field names
#
# Those information let you configure the plugin options automatically.
#
# If you are already using a form theme, you can use both by using:
# {%
#   form_theme myForm
#       'FuzAppBundle::my-form-theme.html.twig'
#       'FuzAppBundle::jquery.collection.html.twig'
#       ...
# %}
#}

{% block collection_widget %}
    {% spaceless %}
        {% if prototype is defined %}
            {% set attr = attr|merge({'data-prototype': form_row(prototype)}) %}
            {% set attr = attr|merge({'data-prototype-name': prototype.vars.name}) %}
        {% endif %}
        {% set attr = attr|merge({'data-allow-add': allow_add ? 1 : 0}) %}
        {% set attr = attr|merge({'data-allow-remove': allow_delete ? 1 : 0 }) %}
        {% set attr = attr|merge({'data-name-prefix': full_name}) %}
        {{ block('form_widget') }}
    {% endspaceless %}
{% endblock collection_widget %}

{%- block view_widget -%}
    <p class=\"form-control-static\" {{ block('widget_attributes') }}>{{ value }}</p>
{%- endblock view_widget -%}", "@Shop/Form/field.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\Form\\field.html.twig");
    }
}
