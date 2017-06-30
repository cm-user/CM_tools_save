<?php

/* ShopBundle:ShopConfiguration:new.html.twig */
class __TwigTemplate_75c0e33578a794f6d7aead5619cea65032f6fa54caad969a33cdf4cbd45c7718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:ShopConfiguration:new.html.twig", 1);
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
        $__internal_4aa887c80fd6360440e314215efb3346cb438cc8310263b47ea8b27792aecc96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa887c80fd6360440e314215efb3346cb438cc8310263b47ea8b27792aecc96->enter($__internal_4aa887c80fd6360440e314215efb3346cb438cc8310263b47ea8b27792aecc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:ShopConfiguration:new.html.twig"));

        $__internal_960928729455dd12246734975e3fc0d4b472c8e42a9ab49f7972b7796790ec83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960928729455dd12246734975e3fc0d4b472c8e42a9ab49f7972b7796790ec83->enter($__internal_960928729455dd12246734975e3fc0d4b472c8e42a9ab49f7972b7796790ec83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:ShopConfiguration:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aa887c80fd6360440e314215efb3346cb438cc8310263b47ea8b27792aecc96->leave($__internal_4aa887c80fd6360440e314215efb3346cb438cc8310263b47ea8b27792aecc96_prof);

        
        $__internal_960928729455dd12246734975e3fc0d4b472c8e42a9ab49f7972b7796790ec83->leave($__internal_960928729455dd12246734975e3fc0d4b472c8e42a9ab49f7972b7796790ec83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9edffa4f4c42fb42bc6b93f1b25640c86cc6771e5b1f71d6d51214b0ef0208f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9edffa4f4c42fb42bc6b93f1b25640c86cc6771e5b1f71d6d51214b0ef0208f4->enter($__internal_9edffa4f4c42fb42bc6b93f1b25640c86cc6771e5b1f71d6d51214b0ef0208f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cbd42b1e43832f1746ab7cdb5875fdf87890501b00ceee61cb16c59def74328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbd42b1e43832f1746ab7cdb5875fdf87890501b00ceee61cb16c59def74328->enter($__internal_7cbd42b1e43832f1746ab7cdb5875fdf87890501b00ceee61cb16c59def74328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ajouter Shopconfiguration</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Créer\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_index");
        echo "\">Retourner à la liste</a>
        </li>
    </ul>
";
        
        $__internal_7cbd42b1e43832f1746ab7cdb5875fdf87890501b00ceee61cb16c59def74328->leave($__internal_7cbd42b1e43832f1746ab7cdb5875fdf87890501b00ceee61cb16c59def74328_prof);

        
        $__internal_9edffa4f4c42fb42bc6b93f1b25640c86cc6771e5b1f71d6d51214b0ef0208f4->leave($__internal_9edffa4f4c42fb42bc6b93f1b25640c86cc6771e5b1f71d6d51214b0ef0208f4_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:ShopConfiguration:new.html.twig";
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
    <h1>Ajouter Shopconfiguration</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Créer\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('carousel_shopconfiguration_index') }}\">Retourner à la liste</a>
        </li>
    </ul>
{% endblock %}
", "ShopBundle:ShopConfiguration:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/ShopConfiguration/new.html.twig");
    }
}
