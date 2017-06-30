<?php

/* MarketingBundle:newslettermenu:new.html.twig */
class __TwigTemplate_bf0402690b53bf5539097e456d1e1a2d35bca8a0922858149dcceb767d1a3536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newslettermenu:new.html.twig", 1);
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
        $__internal_89f073f92c1a157821942a8dd587fc6d0b498abb693886574b5ebdeb6caf4c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f073f92c1a157821942a8dd587fc6d0b498abb693886574b5ebdeb6caf4c04->enter($__internal_89f073f92c1a157821942a8dd587fc6d0b498abb693886574b5ebdeb6caf4c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newslettermenu:new.html.twig"));

        $__internal_60dd85be517152c1e81c13ac079ff2db44a90a7f2733a26130e08936d92a5295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dd85be517152c1e81c13ac079ff2db44a90a7f2733a26130e08936d92a5295->enter($__internal_60dd85be517152c1e81c13ac079ff2db44a90a7f2733a26130e08936d92a5295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newslettermenu:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89f073f92c1a157821942a8dd587fc6d0b498abb693886574b5ebdeb6caf4c04->leave($__internal_89f073f92c1a157821942a8dd587fc6d0b498abb693886574b5ebdeb6caf4c04_prof);

        
        $__internal_60dd85be517152c1e81c13ac079ff2db44a90a7f2733a26130e08936d92a5295->leave($__internal_60dd85be517152c1e81c13ac079ff2db44a90a7f2733a26130e08936d92a5295_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35c6cc9ebe7f7fa730bae6af5f86f882b8e8293708a6172448042650493da8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c6cc9ebe7f7fa730bae6af5f86f882b8e8293708a6172448042650493da8ca->enter($__internal_35c6cc9ebe7f7fa730bae6af5f86f882b8e8293708a6172448042650493da8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_630ddb7f5f7843a14faf4123a80215f6c309418b96511335e078de88ce264521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630ddb7f5f7843a14faf4123a80215f6c309418b96511335e078de88ce264521->enter($__internal_630ddb7f5f7843a14faf4123a80215f6c309418b96511335e078de88ce264521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterMenu creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_630ddb7f5f7843a14faf4123a80215f6c309418b96511335e078de88ce264521->leave($__internal_630ddb7f5f7843a14faf4123a80215f6c309418b96511335e078de88ce264521_prof);

        
        $__internal_35c6cc9ebe7f7fa730bae6af5f86f882b8e8293708a6172448042650493da8ca->leave($__internal_35c6cc9ebe7f7fa730bae6af5f86f882b8e8293708a6172448042650493da8ca_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newslettermenu:new.html.twig";
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
    <h1>NewsletterMenu creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newslettermenu_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newslettermenu:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newslettermenu/new.html.twig");
    }
}
