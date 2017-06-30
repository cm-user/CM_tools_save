<?php

/* @Marketing/provider/edit.html.twig */
class __TwigTemplate_727d6f6d3c85a6460c869a8a4e43a608a9745018b76cb8cdcbc856e618070d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/provider/edit.html.twig", 1);
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
        $__internal_fe66393c259a0f5bc7b3d654bd59d5f4ecbc4fba14e979aa1297e7665175a009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe66393c259a0f5bc7b3d654bd59d5f4ecbc4fba14e979aa1297e7665175a009->enter($__internal_fe66393c259a0f5bc7b3d654bd59d5f4ecbc4fba14e979aa1297e7665175a009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/provider/edit.html.twig"));

        $__internal_5a82b928efca28930ba78b26df821a96a9cb9498c8ba6de3d194e4418e30f6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a82b928efca28930ba78b26df821a96a9cb9498c8ba6de3d194e4418e30f6d4->enter($__internal_5a82b928efca28930ba78b26df821a96a9cb9498c8ba6de3d194e4418e30f6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/provider/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe66393c259a0f5bc7b3d654bd59d5f4ecbc4fba14e979aa1297e7665175a009->leave($__internal_fe66393c259a0f5bc7b3d654bd59d5f4ecbc4fba14e979aa1297e7665175a009_prof);

        
        $__internal_5a82b928efca28930ba78b26df821a96a9cb9498c8ba6de3d194e4418e30f6d4->leave($__internal_5a82b928efca28930ba78b26df821a96a9cb9498c8ba6de3d194e4418e30f6d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcea54ff462b165d3cc1afc70c92fce2f890ec88c4bc1271122b8d76e69f23e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcea54ff462b165d3cc1afc70c92fce2f890ec88c4bc1271122b8d76e69f23e4->enter($__internal_dcea54ff462b165d3cc1afc70c92fce2f890ec88c4bc1271122b8d76e69f23e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c686b555e27cd380471634e804793f82de5c4df33db977dcde6f0ed57dd308b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c686b555e27cd380471634e804793f82de5c4df33db977dcde6f0ed57dd308b5->enter($__internal_c686b555e27cd380471634e804793f82de5c4df33db977dcde6f0ed57dd308b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provider edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_index");
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
        
        $__internal_c686b555e27cd380471634e804793f82de5c4df33db977dcde6f0ed57dd308b5->leave($__internal_c686b555e27cd380471634e804793f82de5c4df33db977dcde6f0ed57dd308b5_prof);

        
        $__internal_dcea54ff462b165d3cc1afc70c92fce2f890ec88c4bc1271122b8d76e69f23e4->leave($__internal_dcea54ff462b165d3cc1afc70c92fce2f890ec88c4bc1271122b8d76e69f23e4_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/provider/edit.html.twig";
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
    <h1>Provider edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('provider_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/provider/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\provider\\edit.html.twig");
    }
}
