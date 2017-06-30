<?php

/* ShopBundle:Form:field.html.twig */
class __TwigTemplate_376b3439fdbe85fe2826750f8e82bced3973ea9dee4fdc0ee4aba24ab8352f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "ShopBundle:Form:field.html.twig", 1);
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
        $__internal_67da6b9c4e023750cd7d96a3838e37376b4eb3672dfd38880f3ba60cf653d765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67da6b9c4e023750cd7d96a3838e37376b4eb3672dfd38880f3ba60cf653d765->enter($__internal_67da6b9c4e023750cd7d96a3838e37376b4eb3672dfd38880f3ba60cf653d765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Form:field.html.twig"));

        $__internal_55be82691aa04fb4ca4240de1a07502066c04af983778bd095eb9e0d0c287e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55be82691aa04fb4ca4240de1a07502066c04af983778bd095eb9e0d0c287e1d->enter($__internal_55be82691aa04fb4ca4240de1a07502066c04af983778bd095eb9e0d0c287e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:Form:field.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67da6b9c4e023750cd7d96a3838e37376b4eb3672dfd38880f3ba60cf653d765->leave($__internal_67da6b9c4e023750cd7d96a3838e37376b4eb3672dfd38880f3ba60cf653d765_prof);

        
        $__internal_55be82691aa04fb4ca4240de1a07502066c04af983778bd095eb9e0d0c287e1d->leave($__internal_55be82691aa04fb4ca4240de1a07502066c04af983778bd095eb9e0d0c287e1d_prof);

    }

    // line 24
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_02ba42ee23ced252b57b001e02594ba6f6e82e7cbfec2bff16dda2eb967b55ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ba42ee23ced252b57b001e02594ba6f6e82e7cbfec2bff16dda2eb967b55ee->enter($__internal_02ba42ee23ced252b57b001e02594ba6f6e82e7cbfec2bff16dda2eb967b55ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_9315b7853aeb03fd8c89f9fa1bce1ea822142f18d9c7ad475ecf55a318674315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9315b7853aeb03fd8c89f9fa1bce1ea822142f18d9c7ad475ecf55a318674315->enter($__internal_9315b7853aeb03fd8c89f9fa1bce1ea822142f18d9c7ad475ecf55a318674315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_9315b7853aeb03fd8c89f9fa1bce1ea822142f18d9c7ad475ecf55a318674315->leave($__internal_9315b7853aeb03fd8c89f9fa1bce1ea822142f18d9c7ad475ecf55a318674315_prof);

        
        $__internal_02ba42ee23ced252b57b001e02594ba6f6e82e7cbfec2bff16dda2eb967b55ee->leave($__internal_02ba42ee23ced252b57b001e02594ba6f6e82e7cbfec2bff16dda2eb967b55ee_prof);

    }

    // line 37
    public function block_view_widget($context, array $blocks = array())
    {
        $__internal_8f9d776286346b314a875ecf66c32629764fafd380df635d387768eb0a4a2cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9d776286346b314a875ecf66c32629764fafd380df635d387768eb0a4a2cc4->enter($__internal_8f9d776286346b314a875ecf66c32629764fafd380df635d387768eb0a4a2cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "view_widget"));

        $__internal_8d06f131422bdc577b51b01330dd41d53fd4302a057aef75f25d9b4d4a48b5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d06f131422bdc577b51b01330dd41d53fd4302a057aef75f25d9b4d4a48b5b8->enter($__internal_8d06f131422bdc577b51b01330dd41d53fd4302a057aef75f25d9b4d4a48b5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "view_widget"));

        // line 38
        echo "<p class=\"form-control-static\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</p>";
        
        $__internal_8d06f131422bdc577b51b01330dd41d53fd4302a057aef75f25d9b4d4a48b5b8->leave($__internal_8d06f131422bdc577b51b01330dd41d53fd4302a057aef75f25d9b4d4a48b5b8_prof);

        
        $__internal_8f9d776286346b314a875ecf66c32629764fafd380df635d387768eb0a4a2cc4->leave($__internal_8f9d776286346b314a875ecf66c32629764fafd380df635d387768eb0a4a2cc4_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Form:field.html.twig";
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
{%- endblock view_widget -%}", "ShopBundle:Form:field.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/Form/field.html.twig");
    }
}
