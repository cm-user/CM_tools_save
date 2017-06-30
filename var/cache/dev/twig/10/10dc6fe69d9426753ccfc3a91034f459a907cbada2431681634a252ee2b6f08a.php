<?php

/* @Marketing/newslettermenu/edit.html.twig */
class __TwigTemplate_38d91d770560a7666bae8c36bc358c37e6f6ecd86a5d5efae683a2933dbaa54b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newslettermenu/edit.html.twig", 1);
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
        $__internal_7c42a317200e509cf41e06472eaf74389142a99687ee99f1f205f40e232d97a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c42a317200e509cf41e06472eaf74389142a99687ee99f1f205f40e232d97a1->enter($__internal_7c42a317200e509cf41e06472eaf74389142a99687ee99f1f205f40e232d97a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newslettermenu/edit.html.twig"));

        $__internal_9afdea02ac913532e0f6f467e8704b3550df0b6312370e1ed9c9be825e231476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afdea02ac913532e0f6f467e8704b3550df0b6312370e1ed9c9be825e231476->enter($__internal_9afdea02ac913532e0f6f467e8704b3550df0b6312370e1ed9c9be825e231476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newslettermenu/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c42a317200e509cf41e06472eaf74389142a99687ee99f1f205f40e232d97a1->leave($__internal_7c42a317200e509cf41e06472eaf74389142a99687ee99f1f205f40e232d97a1_prof);

        
        $__internal_9afdea02ac913532e0f6f467e8704b3550df0b6312370e1ed9c9be825e231476->leave($__internal_9afdea02ac913532e0f6f467e8704b3550df0b6312370e1ed9c9be825e231476_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76b28d6dc8e7752a92e624a14634edb1eef2b7d8a7648f4910dc8b8d154dca36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b28d6dc8e7752a92e624a14634edb1eef2b7d8a7648f4910dc8b8d154dca36->enter($__internal_76b28d6dc8e7752a92e624a14634edb1eef2b7d8a7648f4910dc8b8d154dca36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c1dddea70cedb8e5b660b6280b621026e8a9ebd2b55fad334889fa2e270edbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1dddea70cedb8e5b660b6280b621026e8a9ebd2b55fad334889fa2e270edbc->enter($__internal_1c1dddea70cedb8e5b660b6280b621026e8a9ebd2b55fad334889fa2e270edbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c1dddea70cedb8e5b660b6280b621026e8a9ebd2b55fad334889fa2e270edbc->leave($__internal_1c1dddea70cedb8e5b660b6280b621026e8a9ebd2b55fad334889fa2e270edbc_prof);

        
        $__internal_76b28d6dc8e7752a92e624a14634edb1eef2b7d8a7648f4910dc8b8d154dca36->leave($__internal_76b28d6dc8e7752a92e624a14634edb1eef2b7d8a7648f4910dc8b8d154dca36_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newslettermenu/edit.html.twig";
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
", "@Marketing/newslettermenu/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newslettermenu\\edit.html.twig");
    }
}
