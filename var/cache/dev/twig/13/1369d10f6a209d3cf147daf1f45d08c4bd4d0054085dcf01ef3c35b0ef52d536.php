<?php

/* @Shop/ShopConfiguration/edit.html.twig */
class __TwigTemplate_d984f9f67df7d3c9dbaf4bf96ba592bdcde631fa67dd9a40208c4695d648a004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/ShopConfiguration/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43592b2688196dfa3e8ea3def3bc3a148162d9873a9eab043a86ea7bfa9c8bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43592b2688196dfa3e8ea3def3bc3a148162d9873a9eab043a86ea7bfa9c8bad->enter($__internal_43592b2688196dfa3e8ea3def3bc3a148162d9873a9eab043a86ea7bfa9c8bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/ShopConfiguration/edit.html.twig"));

        $__internal_59eee5203a13fc3dc0f200f2690427e62fb2e9202faa67647a7bcceee55f634d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59eee5203a13fc3dc0f200f2690427e62fb2e9202faa67647a7bcceee55f634d->enter($__internal_59eee5203a13fc3dc0f200f2690427e62fb2e9202faa67647a7bcceee55f634d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/ShopConfiguration/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43592b2688196dfa3e8ea3def3bc3a148162d9873a9eab043a86ea7bfa9c8bad->leave($__internal_43592b2688196dfa3e8ea3def3bc3a148162d9873a9eab043a86ea7bfa9c8bad_prof);

        
        $__internal_59eee5203a13fc3dc0f200f2690427e62fb2e9202faa67647a7bcceee55f634d->leave($__internal_59eee5203a13fc3dc0f200f2690427e62fb2e9202faa67647a7bcceee55f634d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_426da92774965bf034ac7d944545243823183054c38c01258dd83ca56845250f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426da92774965bf034ac7d944545243823183054c38c01258dd83ca56845250f->enter($__internal_426da92774965bf034ac7d944545243823183054c38c01258dd83ca56845250f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb3c35953a38acf21696366766261ceb1a006b46c98631e4c850bccf96d9fb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3c35953a38acf21696366766261ceb1a006b46c98631e4c850bccf96d9fb5a->enter($__internal_eb3c35953a38acf21696366766261ceb1a006b46c98631e4c850bccf96d9fb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Shopconfiguration Modifier</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_index");
        echo "\">Retourner à la liste</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_eb3c35953a38acf21696366766261ceb1a006b46c98631e4c850bccf96d9fb5a->leave($__internal_eb3c35953a38acf21696366766261ceb1a006b46c98631e4c850bccf96d9fb5a_prof);

        
        $__internal_426da92774965bf034ac7d944545243823183054c38c01258dd83ca56845250f->leave($__internal_426da92774965bf034ac7d944545243823183054c38c01258dd83ca56845250f_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/ShopConfiguration/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Shopconfiguration Modifier</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('carousel_shopconfiguration_index') }}\">Retourner à la liste</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Shop/ShopConfiguration/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\ShopConfiguration\\edit.html.twig");
    }
}
