<?php

/* MarketingBundle:Form:field.html.twig */
class __TwigTemplate_a8047700f2507cbcb55f9d1155593b60de10f826f680afb33157c13c1826c203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "MarketingBundle:Form:field.html.twig", 1);
        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
            'search_button_widget' => array($this, 'block_search_button_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7108246934333a595bf7102515a74a558afb762cb786ddd4684b4e94ba5bfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7108246934333a595bf7102515a74a558afb762cb786ddd4684b4e94ba5bfda->enter($__internal_b7108246934333a595bf7102515a74a558afb762cb786ddd4684b4e94ba5bfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:Form:field.html.twig"));

        $__internal_c03f87a4d6f8de9a3abd7dafc86244c0e36c0d884870e08e114b05f590652e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03f87a4d6f8de9a3abd7dafc86244c0e36c0d884870e08e114b05f590652e70->enter($__internal_c03f87a4d6f8de9a3abd7dafc86244c0e36c0d884870e08e114b05f590652e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:Form:field.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7108246934333a595bf7102515a74a558afb762cb786ddd4684b4e94ba5bfda->leave($__internal_b7108246934333a595bf7102515a74a558afb762cb786ddd4684b4e94ba5bfda_prof);

        
        $__internal_c03f87a4d6f8de9a3abd7dafc86244c0e36c0d884870e08e114b05f590652e70->leave($__internal_c03f87a4d6f8de9a3abd7dafc86244c0e36c0d884870e08e114b05f590652e70_prof);

    }

    // line 24
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_9187a3371e839353570955a3af1f031d1816267563ac1b4e170d8fd8df8e8195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9187a3371e839353570955a3af1f031d1816267563ac1b4e170d8fd8df8e8195->enter($__internal_9187a3371e839353570955a3af1f031d1816267563ac1b4e170d8fd8df8e8195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_cb84c27bc98985c75ed02c9ba699dc03d9ab94d84fc94316e00731e275ed7780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb84c27bc98985c75ed02c9ba699dc03d9ab94d84fc94316e00731e275ed7780->enter($__internal_cb84c27bc98985c75ed02c9ba699dc03d9ab94d84fc94316e00731e275ed7780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_cb84c27bc98985c75ed02c9ba699dc03d9ab94d84fc94316e00731e275ed7780->leave($__internal_cb84c27bc98985c75ed02c9ba699dc03d9ab94d84fc94316e00731e275ed7780_prof);

        
        $__internal_9187a3371e839353570955a3af1f031d1816267563ac1b4e170d8fd8df8e8195->leave($__internal_9187a3371e839353570955a3af1f031d1816267563ac1b4e170d8fd8df8e8195_prof);

    }

    // line 37
    public function block_search_button_widget($context, array $blocks = array())
    {
        $__internal_df35b8d6d0413fee6bb07a2e2e5562b6883ab2a1c3bc03c6b4164eefc70e6d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df35b8d6d0413fee6bb07a2e2e5562b6883ab2a1c3bc03c6b4164eefc70e6d66->enter($__internal_df35b8d6d0413fee6bb07a2e2e5562b6883ab2a1c3bc03c6b4164eefc70e6d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_button_widget"));

        $__internal_65d5b2aca81be4d155d622a7e449878b5e2521d5402f0b8b7abc07d828308a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d5b2aca81be4d155d622a7e449878b5e2521d5402f0b8b7abc07d828308a83->enter($__internal_65d5b2aca81be4d155d622a7e449878b5e2521d5402f0b8b7abc07d828308a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_button_widget"));

        // line 38
        echo "    <div class=\"input-group\">";
        // line 39
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 40
        echo "<span class=\"input-group-btn\">
            <button class=\"btn btn-default";
        // line 41
        if ((twig_length_filter($this->env, $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array())) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()), "html", null, true);
        }
        echo "\" type=\"button\">";
        echo twig_escape_filter($this->env, ($context["search_button_word"] ?? $this->getContext($context, "search_button_word")), "html", null, true);
        echo "</button>
        </span>
    </div>
";
        
        $__internal_65d5b2aca81be4d155d622a7e449878b5e2521d5402f0b8b7abc07d828308a83->leave($__internal_65d5b2aca81be4d155d622a7e449878b5e2521d5402f0b8b7abc07d828308a83_prof);

        
        $__internal_df35b8d6d0413fee6bb07a2e2e5562b6883ab2a1c3bc03c6b4164eefc70e6d66->leave($__internal_df35b8d6d0413fee6bb07a2e2e5562b6883ab2a1c3bc03c6b4164eefc70e6d66_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:Form:field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 41,  101 => 40,  99 => 39,  97 => 38,  88 => 37,  74 => 33,  71 => 32,  68 => 31,  65 => 30,  62 => 29,  59 => 28,  56 => 27,  53 => 26,  50 => 25,  41 => 24,  11 => 1,);
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

{% block search_button_widget %}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-btn\">
            <button class=\"btn btn-default{% if attr.class|length > 0 %} {{ attr.class }}{% endif %}\" type=\"button\">{{ search_button_word }}</button>
        </span>
    </div>
{% endblock search_button_widget %}", "MarketingBundle:Form:field.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/Form/field.html.twig");
    }
}
