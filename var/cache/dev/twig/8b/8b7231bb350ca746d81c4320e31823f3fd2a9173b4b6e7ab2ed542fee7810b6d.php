<?php

/* MarketingBundle:newsletterheader:edit.html.twig */
class __TwigTemplate_cb97e48fa9b3128228f7c0551c74b29a9269aaaf5dd803eacd49555403a9eac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterheader:edit.html.twig", 1);
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
        $__internal_9d32fdddfec8b2608c16587c55d1c9c22b0063ef775702f13128de80e8e6fa16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d32fdddfec8b2608c16587c55d1c9c22b0063ef775702f13128de80e8e6fa16->enter($__internal_9d32fdddfec8b2608c16587c55d1c9c22b0063ef775702f13128de80e8e6fa16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterheader:edit.html.twig"));

        $__internal_3c63a38ca386ea38c56740388daffd51875d022272ec3a29c3fc1f533212d134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c63a38ca386ea38c56740388daffd51875d022272ec3a29c3fc1f533212d134->enter($__internal_3c63a38ca386ea38c56740388daffd51875d022272ec3a29c3fc1f533212d134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterheader:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d32fdddfec8b2608c16587c55d1c9c22b0063ef775702f13128de80e8e6fa16->leave($__internal_9d32fdddfec8b2608c16587c55d1c9c22b0063ef775702f13128de80e8e6fa16_prof);

        
        $__internal_3c63a38ca386ea38c56740388daffd51875d022272ec3a29c3fc1f533212d134->leave($__internal_3c63a38ca386ea38c56740388daffd51875d022272ec3a29c3fc1f533212d134_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9812933f4ef5d9b9182b7cf9899386591119a500e896236d5ed3836efcc67ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9812933f4ef5d9b9182b7cf9899386591119a500e896236d5ed3836efcc67ab->enter($__internal_e9812933f4ef5d9b9182b7cf9899386591119a500e896236d5ed3836efcc67ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_96cd09c78b98a100f850d5108b1885b700bba8c1c30570a0327f4e0b49e3de0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cd09c78b98a100f850d5108b1885b700bba8c1c30570a0327f4e0b49e3de0d->enter($__internal_96cd09c78b98a100f850d5108b1885b700bba8c1c30570a0327f4e0b49e3de0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_96cd09c78b98a100f850d5108b1885b700bba8c1c30570a0327f4e0b49e3de0d->leave($__internal_96cd09c78b98a100f850d5108b1885b700bba8c1c30570a0327f4e0b49e3de0d_prof);

        
        $__internal_e9812933f4ef5d9b9182b7cf9899386591119a500e896236d5ed3836efcc67ab->leave($__internal_e9812933f4ef5d9b9182b7cf9899386591119a500e896236d5ed3836efcc67ab_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterheader:edit.html.twig";
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
", "MarketingBundle:newsletterheader:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterheader/edit.html.twig");
    }
}
