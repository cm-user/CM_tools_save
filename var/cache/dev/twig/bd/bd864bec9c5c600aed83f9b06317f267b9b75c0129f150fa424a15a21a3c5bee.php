<?php

/* MarketingBundle:newsletterblock:new.html.twig */
class __TwigTemplate_034e536f906b47ac41383a78cc66a34f56e67dac77b679f151fc2b87f07c287a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterblock:new.html.twig", 1);
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
        $__internal_29165ce3d2eeaf532e2012f9115556c9336cc3df923e82fe9be025a87ed3285c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29165ce3d2eeaf532e2012f9115556c9336cc3df923e82fe9be025a87ed3285c->enter($__internal_29165ce3d2eeaf532e2012f9115556c9336cc3df923e82fe9be025a87ed3285c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblock:new.html.twig"));

        $__internal_809adc6c737bb917ef372b8be57b4e46f0eecf9f5542a18c50b3dddb98efa3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809adc6c737bb917ef372b8be57b4e46f0eecf9f5542a18c50b3dddb98efa3af->enter($__internal_809adc6c737bb917ef372b8be57b4e46f0eecf9f5542a18c50b3dddb98efa3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblock:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29165ce3d2eeaf532e2012f9115556c9336cc3df923e82fe9be025a87ed3285c->leave($__internal_29165ce3d2eeaf532e2012f9115556c9336cc3df923e82fe9be025a87ed3285c_prof);

        
        $__internal_809adc6c737bb917ef372b8be57b4e46f0eecf9f5542a18c50b3dddb98efa3af->leave($__internal_809adc6c737bb917ef372b8be57b4e46f0eecf9f5542a18c50b3dddb98efa3af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91d93b84472d8260b6c2621544e79b6a8b20fb9e4913574618116a926118a61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d93b84472d8260b6c2621544e79b6a8b20fb9e4913574618116a926118a61d->enter($__internal_91d93b84472d8260b6c2621544e79b6a8b20fb9e4913574618116a926118a61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8848025528ab53d43c72cf90d99074b8328f5811eb1e29019f2c5d46532bcbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8848025528ab53d43c72cf90d99074b8328f5811eb1e29019f2c5d46532bcbe4->enter($__internal_8848025528ab53d43c72cf90d99074b8328f5811eb1e29019f2c5d46532bcbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlock creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8848025528ab53d43c72cf90d99074b8328f5811eb1e29019f2c5d46532bcbe4->leave($__internal_8848025528ab53d43c72cf90d99074b8328f5811eb1e29019f2c5d46532bcbe4_prof);

        
        $__internal_91d93b84472d8260b6c2621544e79b6a8b20fb9e4913574618116a926118a61d->leave($__internal_91d93b84472d8260b6c2621544e79b6a8b20fb9e4913574618116a926118a61d_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterblock:new.html.twig";
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
    <h1>NewsletterBlock creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterblock_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newsletterblock:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterblock/new.html.twig");
    }
}
