<?php

/* @Marketing/newsletterblock/edit.html.twig */
class __TwigTemplate_fdbc7978190a32695debbeae1aa0c9fa074e2911148bb5b11eefd807f2d184eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterblock/edit.html.twig", 1);
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
        $__internal_23b37efa1d71283bfbf59c6fb40c2a92691ff3153ab09dbbbf00ded2602ccf42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b37efa1d71283bfbf59c6fb40c2a92691ff3153ab09dbbbf00ded2602ccf42->enter($__internal_23b37efa1d71283bfbf59c6fb40c2a92691ff3153ab09dbbbf00ded2602ccf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblock/edit.html.twig"));

        $__internal_e045c4fedcfb2bb7d356d1c855bb4aac640e7e8892e6805c137d0c586c4a6757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e045c4fedcfb2bb7d356d1c855bb4aac640e7e8892e6805c137d0c586c4a6757->enter($__internal_e045c4fedcfb2bb7d356d1c855bb4aac640e7e8892e6805c137d0c586c4a6757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblock/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23b37efa1d71283bfbf59c6fb40c2a92691ff3153ab09dbbbf00ded2602ccf42->leave($__internal_23b37efa1d71283bfbf59c6fb40c2a92691ff3153ab09dbbbf00ded2602ccf42_prof);

        
        $__internal_e045c4fedcfb2bb7d356d1c855bb4aac640e7e8892e6805c137d0c586c4a6757->leave($__internal_e045c4fedcfb2bb7d356d1c855bb4aac640e7e8892e6805c137d0c586c4a6757_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbdb955fcd4ff401076a436b4b553118af41e3d0e6f5f24d4b7db85146bf8abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbdb955fcd4ff401076a436b4b553118af41e3d0e6f5f24d4b7db85146bf8abb->enter($__internal_bbdb955fcd4ff401076a436b4b553118af41e3d0e6f5f24d4b7db85146bf8abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4a0f8992bfac81f16bc5736df9295632d2b6e5740700ecf7a0492adc4eedf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a0f8992bfac81f16bc5736df9295632d2b6e5740700ecf7a0492adc4eedf98->enter($__internal_e4a0f8992bfac81f16bc5736df9295632d2b6e5740700ecf7a0492adc4eedf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlock edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_index");
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
        
        $__internal_e4a0f8992bfac81f16bc5736df9295632d2b6e5740700ecf7a0492adc4eedf98->leave($__internal_e4a0f8992bfac81f16bc5736df9295632d2b6e5740700ecf7a0492adc4eedf98_prof);

        
        $__internal_bbdb955fcd4ff401076a436b4b553118af41e3d0e6f5f24d4b7db85146bf8abb->leave($__internal_bbdb955fcd4ff401076a436b4b553118af41e3d0e6f5f24d4b7db85146bf8abb_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterblock/edit.html.twig";
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
    <h1>NewsletterBlock edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterblock_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterblock/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterblock\\edit.html.twig");
    }
}
