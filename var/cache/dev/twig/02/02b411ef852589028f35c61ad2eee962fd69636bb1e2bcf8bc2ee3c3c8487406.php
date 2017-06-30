<?php

/* MarketingBundle:newsletterblock:edit.html.twig */
class __TwigTemplate_35f4a200af381014949bbed2fa5fabd93fe736f9c72cc8773c0f46ab104fe296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterblock:edit.html.twig", 1);
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
        $__internal_48c2c7a42df678e483ec7242cfd8787da835eb68f51aa3f832437fd197f724f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c2c7a42df678e483ec7242cfd8787da835eb68f51aa3f832437fd197f724f6->enter($__internal_48c2c7a42df678e483ec7242cfd8787da835eb68f51aa3f832437fd197f724f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblock:edit.html.twig"));

        $__internal_d003a3c264f3cd92802b3e5b97509a8fedfd2b26f2771728819979271e0bbcd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d003a3c264f3cd92802b3e5b97509a8fedfd2b26f2771728819979271e0bbcd0->enter($__internal_d003a3c264f3cd92802b3e5b97509a8fedfd2b26f2771728819979271e0bbcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblock:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48c2c7a42df678e483ec7242cfd8787da835eb68f51aa3f832437fd197f724f6->leave($__internal_48c2c7a42df678e483ec7242cfd8787da835eb68f51aa3f832437fd197f724f6_prof);

        
        $__internal_d003a3c264f3cd92802b3e5b97509a8fedfd2b26f2771728819979271e0bbcd0->leave($__internal_d003a3c264f3cd92802b3e5b97509a8fedfd2b26f2771728819979271e0bbcd0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de5bad103822b2ed2cc24be4844e2ddf97d21c7eee0174ba2866e8973337b8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5bad103822b2ed2cc24be4844e2ddf97d21c7eee0174ba2866e8973337b8a3->enter($__internal_de5bad103822b2ed2cc24be4844e2ddf97d21c7eee0174ba2866e8973337b8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b92f7e4d142cdf6c8660051301a5ab9397fbabe0b4ba41713f7fc78e711783b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92f7e4d142cdf6c8660051301a5ab9397fbabe0b4ba41713f7fc78e711783b1->enter($__internal_b92f7e4d142cdf6c8660051301a5ab9397fbabe0b4ba41713f7fc78e711783b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b92f7e4d142cdf6c8660051301a5ab9397fbabe0b4ba41713f7fc78e711783b1->leave($__internal_b92f7e4d142cdf6c8660051301a5ab9397fbabe0b4ba41713f7fc78e711783b1_prof);

        
        $__internal_de5bad103822b2ed2cc24be4844e2ddf97d21c7eee0174ba2866e8973337b8a3->leave($__internal_de5bad103822b2ed2cc24be4844e2ddf97d21c7eee0174ba2866e8973337b8a3_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterblock:edit.html.twig";
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
", "MarketingBundle:newsletterblock:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterblock/edit.html.twig");
    }
}
