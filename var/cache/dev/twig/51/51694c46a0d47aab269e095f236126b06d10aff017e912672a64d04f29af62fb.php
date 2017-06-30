<?php

/* @Marketing/newsletterprovider/edit.html.twig */
class __TwigTemplate_4ff44416d555ca563b49bd873d087a374ffabae0c930c25e7d56877889653fa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterprovider/edit.html.twig", 1);
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
        $__internal_b701cc523beba113211a0e0bd65cd5aa96766e9404835ca3d6009a743c20e4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b701cc523beba113211a0e0bd65cd5aa96766e9404835ca3d6009a743c20e4ce->enter($__internal_b701cc523beba113211a0e0bd65cd5aa96766e9404835ca3d6009a743c20e4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterprovider/edit.html.twig"));

        $__internal_3e8b9affaed982db3d79601757b0a6ca22e4502ec6432f350456dbd01f4db993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8b9affaed982db3d79601757b0a6ca22e4502ec6432f350456dbd01f4db993->enter($__internal_3e8b9affaed982db3d79601757b0a6ca22e4502ec6432f350456dbd01f4db993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterprovider/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b701cc523beba113211a0e0bd65cd5aa96766e9404835ca3d6009a743c20e4ce->leave($__internal_b701cc523beba113211a0e0bd65cd5aa96766e9404835ca3d6009a743c20e4ce_prof);

        
        $__internal_3e8b9affaed982db3d79601757b0a6ca22e4502ec6432f350456dbd01f4db993->leave($__internal_3e8b9affaed982db3d79601757b0a6ca22e4502ec6432f350456dbd01f4db993_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5482fb127d1405df927ec2a42e6ccbc847ebdcef7f76a75faa0c3156a925bda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5482fb127d1405df927ec2a42e6ccbc847ebdcef7f76a75faa0c3156a925bda6->enter($__internal_5482fb127d1405df927ec2a42e6ccbc847ebdcef7f76a75faa0c3156a925bda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4183fe12d82af65d9f8fb033981c4a990d31273fbfe818689b3549f02a81eed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4183fe12d82af65d9f8fb033981c4a990d31273fbfe818689b3549f02a81eed4->enter($__internal_4183fe12d82af65d9f8fb033981c4a990d31273fbfe818689b3549f02a81eed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProvider edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterprovider_index");
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
        
        $__internal_4183fe12d82af65d9f8fb033981c4a990d31273fbfe818689b3549f02a81eed4->leave($__internal_4183fe12d82af65d9f8fb033981c4a990d31273fbfe818689b3549f02a81eed4_prof);

        
        $__internal_5482fb127d1405df927ec2a42e6ccbc847ebdcef7f76a75faa0c3156a925bda6->leave($__internal_5482fb127d1405df927ec2a42e6ccbc847ebdcef7f76a75faa0c3156a925bda6_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterprovider/edit.html.twig";
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
    <h1>NewsletterProvider edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterprovider_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterprovider/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterprovider\\edit.html.twig");
    }
}
