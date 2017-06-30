<?php

/* MarketingBundle:newslettermenu:edit.html.twig */
class __TwigTemplate_afc41a06049088d86a5505ac4a4555fd5a774205b743d983b2105e02443ebac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newslettermenu:edit.html.twig", 1);
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
        $__internal_c4918e17a18556ad14bffa4163460467c3176a46fad3adf97ed7c780d9f82744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4918e17a18556ad14bffa4163460467c3176a46fad3adf97ed7c780d9f82744->enter($__internal_c4918e17a18556ad14bffa4163460467c3176a46fad3adf97ed7c780d9f82744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newslettermenu:edit.html.twig"));

        $__internal_0dea23ce959ccae6e58cf40e5a1bd43dc13a98a3672e195db258adcd2c8bafd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dea23ce959ccae6e58cf40e5a1bd43dc13a98a3672e195db258adcd2c8bafd5->enter($__internal_0dea23ce959ccae6e58cf40e5a1bd43dc13a98a3672e195db258adcd2c8bafd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newslettermenu:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4918e17a18556ad14bffa4163460467c3176a46fad3adf97ed7c780d9f82744->leave($__internal_c4918e17a18556ad14bffa4163460467c3176a46fad3adf97ed7c780d9f82744_prof);

        
        $__internal_0dea23ce959ccae6e58cf40e5a1bd43dc13a98a3672e195db258adcd2c8bafd5->leave($__internal_0dea23ce959ccae6e58cf40e5a1bd43dc13a98a3672e195db258adcd2c8bafd5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a36084029fd284793d281038cbbf6e4ac75ccbc03f4f2adadfb5163eb9690f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a36084029fd284793d281038cbbf6e4ac75ccbc03f4f2adadfb5163eb9690f0->enter($__internal_5a36084029fd284793d281038cbbf6e4ac75ccbc03f4f2adadfb5163eb9690f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_620a41c5dd7bbc45500dd3dfe83b0a9b2928452252e5c44a896a59456ad56df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620a41c5dd7bbc45500dd3dfe83b0a9b2928452252e5c44a896a59456ad56df4->enter($__internal_620a41c5dd7bbc45500dd3dfe83b0a9b2928452252e5c44a896a59456ad56df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterMenu edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_620a41c5dd7bbc45500dd3dfe83b0a9b2928452252e5c44a896a59456ad56df4->leave($__internal_620a41c5dd7bbc45500dd3dfe83b0a9b2928452252e5c44a896a59456ad56df4_prof);

        
        $__internal_5a36084029fd284793d281038cbbf6e4ac75ccbc03f4f2adadfb5163eb9690f0->leave($__internal_5a36084029fd284793d281038cbbf6e4ac75ccbc03f4f2adadfb5163eb9690f0_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newslettermenu:edit.html.twig";
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
    <h1>NewsletterMenu edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('newslettermenu_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newslettermenu:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newslettermenu/edit.html.twig");
    }
}
