<?php

/* MarketingBundle:shopconfiguration:edit.html.twig */
class __TwigTemplate_7a80de6ba2094986f10183df09a50f92f0d9112dba65446be8d406c05b6e4f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:shopconfiguration:edit.html.twig", 1);
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
        $__internal_8c2ecb568d6da003bbdf233c81b2beab5884ef573ce593f0272f6f2a07543731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2ecb568d6da003bbdf233c81b2beab5884ef573ce593f0272f6f2a07543731->enter($__internal_8c2ecb568d6da003bbdf233c81b2beab5884ef573ce593f0272f6f2a07543731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shopconfiguration:edit.html.twig"));

        $__internal_70aae58f19c364709e8ad2fd60b7329f2e2d4ebbc2a825923b5e0ef825e71b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70aae58f19c364709e8ad2fd60b7329f2e2d4ebbc2a825923b5e0ef825e71b89->enter($__internal_70aae58f19c364709e8ad2fd60b7329f2e2d4ebbc2a825923b5e0ef825e71b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:shopconfiguration:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c2ecb568d6da003bbdf233c81b2beab5884ef573ce593f0272f6f2a07543731->leave($__internal_8c2ecb568d6da003bbdf233c81b2beab5884ef573ce593f0272f6f2a07543731_prof);

        
        $__internal_70aae58f19c364709e8ad2fd60b7329f2e2d4ebbc2a825923b5e0ef825e71b89->leave($__internal_70aae58f19c364709e8ad2fd60b7329f2e2d4ebbc2a825923b5e0ef825e71b89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0543665c7aca23c198f423f44a4bd4401ad1e4f41f869325c1c4ac7315b43ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0543665c7aca23c198f423f44a4bd4401ad1e4f41f869325c1c4ac7315b43ea->enter($__internal_b0543665c7aca23c198f423f44a4bd4401ad1e4f41f869325c1c4ac7315b43ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39e753248c8832810097685882bd2b3c7fd2729e1cdd4889db05d9d7fbf90d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e753248c8832810097685882bd2b3c7fd2729e1cdd4889db05d9d7fbf90d15->enter($__internal_39e753248c8832810097685882bd2b3c7fd2729e1cdd4889db05d9d7fbf90d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ShopConfiguration edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopconfiguration_index");
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
        
        $__internal_39e753248c8832810097685882bd2b3c7fd2729e1cdd4889db05d9d7fbf90d15->leave($__internal_39e753248c8832810097685882bd2b3c7fd2729e1cdd4889db05d9d7fbf90d15_prof);

        
        $__internal_b0543665c7aca23c198f423f44a4bd4401ad1e4f41f869325c1c4ac7315b43ea->leave($__internal_b0543665c7aca23c198f423f44a4bd4401ad1e4f41f869325c1c4ac7315b43ea_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:shopconfiguration:edit.html.twig";
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
    <h1>ShopConfiguration edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('shopconfiguration_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:shopconfiguration:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/shopconfiguration/edit.html.twig");
    }
}
