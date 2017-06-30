<?php

/* @Marketing/Form/field.html.twig */
class __TwigTemplate_74cb9f75fa4f19499860434a8cd8d4d495eb7365ff7d875eb4ce0cd3f8697294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("bootstrap_3_horizontal_layout.html.twig", "@Marketing/Form/field.html.twig", 1);
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
        $__internal_36ed9171137afb134c259b9df9eb9155c9698c1aae9c52b5e6770c182fcf634a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ed9171137afb134c259b9df9eb9155c9698c1aae9c52b5e6770c182fcf634a->enter($__internal_36ed9171137afb134c259b9df9eb9155c9698c1aae9c52b5e6770c182fcf634a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/Form/field.html.twig"));

        $__internal_f37e37e02ee7e62b205874c3af041dffe7b5c568be40af022814c1c4415687f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37e37e02ee7e62b205874c3af041dffe7b5c568be40af022814c1c4415687f6->enter($__internal_f37e37e02ee7e62b205874c3af041dffe7b5c568be40af022814c1c4415687f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/Form/field.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36ed9171137afb134c259b9df9eb9155c9698c1aae9c52b5e6770c182fcf634a->leave($__internal_36ed9171137afb134c259b9df9eb9155c9698c1aae9c52b5e6770c182fcf634a_prof);

        
        $__internal_f37e37e02ee7e62b205874c3af041dffe7b5c568be40af022814c1c4415687f6->leave($__internal_f37e37e02ee7e62b205874c3af041dffe7b5c568be40af022814c1c4415687f6_prof);

    }

    // line 24
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_37497ed748ecb586150305a8b284c0073d8045364cdff2593171a87975c7f00f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37497ed748ecb586150305a8b284c0073d8045364cdff2593171a87975c7f00f->enter($__internal_37497ed748ecb586150305a8b284c0073d8045364cdff2593171a87975c7f00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_2b775adeb7cc2341b0b1dfa51dd373cf28885d677e0b521a2ceee6daefc9fda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b775adeb7cc2341b0b1dfa51dd373cf28885d677e0b521a2ceee6daefc9fda4->enter($__internal_2b775adeb7cc2341b0b1dfa51dd373cf28885d677e0b521a2ceee6daefc9fda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_2b775adeb7cc2341b0b1dfa51dd373cf28885d677e0b521a2ceee6daefc9fda4->leave($__internal_2b775adeb7cc2341b0b1dfa51dd373cf28885d677e0b521a2ceee6daefc9fda4_prof);

        
        $__internal_37497ed748ecb586150305a8b284c0073d8045364cdff2593171a87975c7f00f->leave($__internal_37497ed748ecb586150305a8b284c0073d8045364cdff2593171a87975c7f00f_prof);

    }

    // line 37
    public function block_search_button_widget($context, array $blocks = array())
    {
        $__internal_78f4e6d907f312acf1cf37e9760bf5912a1fad4e53b53757542ba677f326f601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f4e6d907f312acf1cf37e9760bf5912a1fad4e53b53757542ba677f326f601->enter($__internal_78f4e6d907f312acf1cf37e9760bf5912a1fad4e53b53757542ba677f326f601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_button_widget"));

        $__internal_9013d6678a18649cbed13461c57b8e6a93ef6d70471c497fa03a43f1d0a2dfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9013d6678a18649cbed13461c57b8e6a93ef6d70471c497fa03a43f1d0a2dfa5->enter($__internal_9013d6678a18649cbed13461c57b8e6a93ef6d70471c497fa03a43f1d0a2dfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_button_widget"));

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
        
        $__internal_9013d6678a18649cbed13461c57b8e6a93ef6d70471c497fa03a43f1d0a2dfa5->leave($__internal_9013d6678a18649cbed13461c57b8e6a93ef6d70471c497fa03a43f1d0a2dfa5_prof);

        
        $__internal_78f4e6d907f312acf1cf37e9760bf5912a1fad4e53b53757542ba677f326f601->leave($__internal_78f4e6d907f312acf1cf37e9760bf5912a1fad4e53b53757542ba677f326f601_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/Form/field.html.twig";
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
{% endblock search_button_widget %}", "@Marketing/Form/field.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\Form\\field.html.twig");
    }
}
