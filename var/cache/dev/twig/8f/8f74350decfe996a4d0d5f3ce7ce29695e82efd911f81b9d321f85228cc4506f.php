<?php

/* @Shop/ShopConfiguration/new.html.twig */
class __TwigTemplate_fbff885b3f64476136798fc7837e5961077c7826076f190e018142958b3b607e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/ShopConfiguration/new.html.twig", 1);
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
        $__internal_4fbbe552268eb65fdca8d19daeff0934675d95adb95002a8ed6e4cb25130fc6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbbe552268eb65fdca8d19daeff0934675d95adb95002a8ed6e4cb25130fc6d->enter($__internal_4fbbe552268eb65fdca8d19daeff0934675d95adb95002a8ed6e4cb25130fc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/ShopConfiguration/new.html.twig"));

        $__internal_08f409f2ba2811d03fb75d12e4cc2fee88bfe579c60d51e0a0ba7a2e91451a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f409f2ba2811d03fb75d12e4cc2fee88bfe579c60d51e0a0ba7a2e91451a4a->enter($__internal_08f409f2ba2811d03fb75d12e4cc2fee88bfe579c60d51e0a0ba7a2e91451a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/ShopConfiguration/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fbbe552268eb65fdca8d19daeff0934675d95adb95002a8ed6e4cb25130fc6d->leave($__internal_4fbbe552268eb65fdca8d19daeff0934675d95adb95002a8ed6e4cb25130fc6d_prof);

        
        $__internal_08f409f2ba2811d03fb75d12e4cc2fee88bfe579c60d51e0a0ba7a2e91451a4a->leave($__internal_08f409f2ba2811d03fb75d12e4cc2fee88bfe579c60d51e0a0ba7a2e91451a4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9338c3c04667fd64adf246b15b9fed83c540399167c22cdd3c4ecc0114bf287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9338c3c04667fd64adf246b15b9fed83c540399167c22cdd3c4ecc0114bf287->enter($__internal_d9338c3c04667fd64adf246b15b9fed83c540399167c22cdd3c4ecc0114bf287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c03e4014f951ce67b4ec593c03f81ac70b058c66ee0b7371b3fc34f36e522380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03e4014f951ce67b4ec593c03f81ac70b058c66ee0b7371b3fc34f36e522380->enter($__internal_c03e4014f951ce67b4ec593c03f81ac70b058c66ee0b7371b3fc34f36e522380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c03e4014f951ce67b4ec593c03f81ac70b058c66ee0b7371b3fc34f36e522380->leave($__internal_c03e4014f951ce67b4ec593c03f81ac70b058c66ee0b7371b3fc34f36e522380_prof);

        
        $__internal_d9338c3c04667fd64adf246b15b9fed83c540399167c22cdd3c4ecc0114bf287->leave($__internal_d9338c3c04667fd64adf246b15b9fed83c540399167c22cdd3c4ecc0114bf287_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/ShopConfiguration/new.html.twig";
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
", "@Shop/ShopConfiguration/new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\ShopConfiguration\\new.html.twig");
    }
}
