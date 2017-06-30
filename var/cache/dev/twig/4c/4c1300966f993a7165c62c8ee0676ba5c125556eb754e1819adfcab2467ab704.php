<?php

/* @Marketing/newsletterheader/edit.html.twig */
class __TwigTemplate_8e9217621857e52c2a0515444b323d6f757c3185fb12ec8b7cdefdca3f925a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterheader/edit.html.twig", 1);
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
        $__internal_e9b712b0449627e1b8d13c05ce514e538c8557cb9e24be8975d107cf93da503b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b712b0449627e1b8d13c05ce514e538c8557cb9e24be8975d107cf93da503b->enter($__internal_e9b712b0449627e1b8d13c05ce514e538c8557cb9e24be8975d107cf93da503b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterheader/edit.html.twig"));

        $__internal_9e8fcf34ed993794cb53fd454ae0ee18792d6134e7fd029b8abf6abb485a8058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8fcf34ed993794cb53fd454ae0ee18792d6134e7fd029b8abf6abb485a8058->enter($__internal_9e8fcf34ed993794cb53fd454ae0ee18792d6134e7fd029b8abf6abb485a8058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterheader/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9b712b0449627e1b8d13c05ce514e538c8557cb9e24be8975d107cf93da503b->leave($__internal_e9b712b0449627e1b8d13c05ce514e538c8557cb9e24be8975d107cf93da503b_prof);

        
        $__internal_9e8fcf34ed993794cb53fd454ae0ee18792d6134e7fd029b8abf6abb485a8058->leave($__internal_9e8fcf34ed993794cb53fd454ae0ee18792d6134e7fd029b8abf6abb485a8058_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_64836cfa10f13eea65e2ba90b21e9d2232ed380bc8d9cf4a61ab1fc23a9dfd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64836cfa10f13eea65e2ba90b21e9d2232ed380bc8d9cf4a61ab1fc23a9dfd6d->enter($__internal_64836cfa10f13eea65e2ba90b21e9d2232ed380bc8d9cf4a61ab1fc23a9dfd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f14147e679cd4afaf82c93bf73e2ce9970d997b5d547b70a8d4e650774ec3166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14147e679cd4afaf82c93bf73e2ce9970d997b5d547b70a8d4e650774ec3166->enter($__internal_f14147e679cd4afaf82c93bf73e2ce9970d997b5d547b70a8d4e650774ec3166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterHeader edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_index");
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
        
        $__internal_f14147e679cd4afaf82c93bf73e2ce9970d997b5d547b70a8d4e650774ec3166->leave($__internal_f14147e679cd4afaf82c93bf73e2ce9970d997b5d547b70a8d4e650774ec3166_prof);

        
        $__internal_64836cfa10f13eea65e2ba90b21e9d2232ed380bc8d9cf4a61ab1fc23a9dfd6d->leave($__internal_64836cfa10f13eea65e2ba90b21e9d2232ed380bc8d9cf4a61ab1fc23a9dfd6d_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterheader/edit.html.twig";
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
    <h1>NewsletterHeader edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterheader_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterheader/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterheader\\edit.html.twig");
    }
}
