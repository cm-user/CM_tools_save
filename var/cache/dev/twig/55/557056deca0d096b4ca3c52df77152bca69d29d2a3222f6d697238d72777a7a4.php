<?php

/* MarketingBundle:newsletterheader:new.html.twig */
class __TwigTemplate_3306f18c051c8ae86c3938be73ef4e00ab0dbf4c9d187d1d75bfbba219d0efde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterheader:new.html.twig", 1);
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
        $__internal_fa351119e221e8a5e8853d0f1c01d26132730b6f42a4662995cb5ddc79775c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa351119e221e8a5e8853d0f1c01d26132730b6f42a4662995cb5ddc79775c50->enter($__internal_fa351119e221e8a5e8853d0f1c01d26132730b6f42a4662995cb5ddc79775c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterheader:new.html.twig"));

        $__internal_89134957485ce4b5d333eee3606f66a0003f3268b6937a3909b6bc563bd8c9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89134957485ce4b5d333eee3606f66a0003f3268b6937a3909b6bc563bd8c9fd->enter($__internal_89134957485ce4b5d333eee3606f66a0003f3268b6937a3909b6bc563bd8c9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterheader:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa351119e221e8a5e8853d0f1c01d26132730b6f42a4662995cb5ddc79775c50->leave($__internal_fa351119e221e8a5e8853d0f1c01d26132730b6f42a4662995cb5ddc79775c50_prof);

        
        $__internal_89134957485ce4b5d333eee3606f66a0003f3268b6937a3909b6bc563bd8c9fd->leave($__internal_89134957485ce4b5d333eee3606f66a0003f3268b6937a3909b6bc563bd8c9fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c41128e628841b3027f0259a7490271edb15dd89d8820bb7443b37531a9d2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c41128e628841b3027f0259a7490271edb15dd89d8820bb7443b37531a9d2ce->enter($__internal_6c41128e628841b3027f0259a7490271edb15dd89d8820bb7443b37531a9d2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e75ee379fc968773f9c5a2b7e7ffcf1d3ef9c42b70b06ed8542618c93f4eeb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75ee379fc968773f9c5a2b7e7ffcf1d3ef9c42b70b06ed8542618c93f4eeb97->enter($__internal_e75ee379fc968773f9c5a2b7e7ffcf1d3ef9c42b70b06ed8542618c93f4eeb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterHeader creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e75ee379fc968773f9c5a2b7e7ffcf1d3ef9c42b70b06ed8542618c93f4eeb97->leave($__internal_e75ee379fc968773f9c5a2b7e7ffcf1d3ef9c42b70b06ed8542618c93f4eeb97_prof);

        
        $__internal_6c41128e628841b3027f0259a7490271edb15dd89d8820bb7443b37531a9d2ce->leave($__internal_6c41128e628841b3027f0259a7490271edb15dd89d8820bb7443b37531a9d2ce_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterheader:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterHeader creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterheader_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newsletterheader:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterheader/new.html.twig");
    }
}
