<?php

/* ShopBundle:CarouselVideo:new.html.twig */
class __TwigTemplate_feb1f51334bbee677f8f1e0139ab0487e84eb8724ac46a2d408f8b6bab425af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselVideo:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c0dc9fe685d5135c98b5af190b4b79038eb1047b0deb61aabfd850f4e0d4e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0dc9fe685d5135c98b5af190b4b79038eb1047b0deb61aabfd850f4e0d4e28->enter($__internal_0c0dc9fe685d5135c98b5af190b4b79038eb1047b0deb61aabfd850f4e0d4e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselVideo:new.html.twig"));

        $__internal_f34b318b68f7c8d7e2e94aaa4e373933e00af5b4a62ddd8ab2fc7bcd73c8e62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34b318b68f7c8d7e2e94aaa4e373933e00af5b4a62ddd8ab2fc7bcd73c8e62d->enter($__internal_f34b318b68f7c8d7e2e94aaa4e373933e00af5b4a62ddd8ab2fc7bcd73c8e62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselVideo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c0dc9fe685d5135c98b5af190b4b79038eb1047b0deb61aabfd850f4e0d4e28->leave($__internal_0c0dc9fe685d5135c98b5af190b4b79038eb1047b0deb61aabfd850f4e0d4e28_prof);

        
        $__internal_f34b318b68f7c8d7e2e94aaa4e373933e00af5b4a62ddd8ab2fc7bcd73c8e62d->leave($__internal_f34b318b68f7c8d7e2e94aaa4e373933e00af5b4a62ddd8ab2fc7bcd73c8e62d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29e6c618473650f999067ec7009a7f0302553454e5e03cdefac7f9ba62e01079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e6c618473650f999067ec7009a7f0302553454e5e03cdefac7f9ba62e01079->enter($__internal_29e6c618473650f999067ec7009a7f0302553454e5e03cdefac7f9ba62e01079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6bc9f0fd31132a5c787c461239eee5e3e0b991ff47fb229e0875d0515284dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bc9f0fd31132a5c787c461239eee5e3e0b991ff47fb229e0875d0515284dfd->enter($__internal_c6bc9f0fd31132a5c787c461239eee5e3e0b991ff47fb229e0875d0515284dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ajouter une vidéo au carrousel</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Créer\" /></p>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_index");
        echo "\">
            Retour à la liste
        </a>
    </p>
";
        
        $__internal_c6bc9f0fd31132a5c787c461239eee5e3e0b991ff47fb229e0875d0515284dfd->leave($__internal_c6bc9f0fd31132a5c787c461239eee5e3e0b991ff47fb229e0875d0515284dfd_prof);

        
        $__internal_29e6c618473650f999067ec7009a7f0302553454e5e03cdefac7f9ba62e01079->leave($__internal_29e6c618473650f999067ec7009a7f0302553454e5e03cdefac7f9ba62e01079_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_783d5f2aedb643d3f3ff59f5bda1342455b75d7fbf0d8f36672a8e1b402eabc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_783d5f2aedb643d3f3ff59f5bda1342455b75d7fbf0d8f36672a8e1b402eabc4->enter($__internal_783d5f2aedb643d3f3ff59f5bda1342455b75d7fbf0d8f36672a8e1b402eabc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e530e7b5d92ba15b723824739ec962a8c6ac81a8638aaba33653eb899f258a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e530e7b5d92ba15b723824739ec962a8c6ac81a8638aaba33653eb899f258a61->enter($__internal_e530e7b5d92ba15b723824739ec962a8c6ac81a8638aaba33653eb899f258a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js\" type=\"application/javascript\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.fr.min.js\" type=\"application/javascript\"></script>
<script>
    \$(document).ready(function() {
        \$('.js-datepicker').datepicker({
            format: 'yyyy-mm-dd',
            language: 'fr',
            autoclose: true,
            todayHighlight: true,
            orientation: \"bottom auto\"
        });
    });
</script>
";
        
        $__internal_e530e7b5d92ba15b723824739ec962a8c6ac81a8638aaba33653eb899f258a61->leave($__internal_e530e7b5d92ba15b723824739ec962a8c6ac81a8638aaba33653eb899f258a61_prof);

        
        $__internal_783d5f2aedb643d3f3ff59f5bda1342455b75d7fbf0d8f36672a8e1b402eabc4->leave($__internal_783d5f2aedb643d3f3ff59f5bda1342455b75d7fbf0d8f36672a8e1b402eabc4_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f56e104937193ee341f46021c4c7418f4c0871fda9eaec73f1477138c1be2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f56e104937193ee341f46021c4c7418f4c0871fda9eaec73f1477138c1be2a8->enter($__internal_9f56e104937193ee341f46021c4c7418f4c0871fda9eaec73f1477138c1be2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d6af04497590db3863db56511544a011c86e014423798db39950e52a80de2208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6af04497590db3863db56511544a011c86e014423798db39950e52a80de2208->enter($__internal_d6af04497590db3863db56511544a011c86e014423798db39950e52a80de2208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_d6af04497590db3863db56511544a011c86e014423798db39950e52a80de2208->leave($__internal_d6af04497590db3863db56511544a011c86e014423798db39950e52a80de2208_prof);

        
        $__internal_9f56e104937193ee341f46021c4c7418f4c0871fda9eaec73f1477138c1be2a8->leave($__internal_9f56e104937193ee341f46021c4c7418f4c0871fda9eaec73f1477138c1be2a8_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselVideo:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  117 => 34,  94 => 19,  85 => 18,  70 => 12,  64 => 9,  59 => 7,  55 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
    <h1>Ajouter une vidéo au carrousel</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <p class=\"text-center\"><input class=\"btn btn-success\" type=\"submit\" value=\"Créer\" /></p>
    {{ form_end(form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('carousel_video_index') }}\">
            Retour à la liste
        </a>
    </p>
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js\" type=\"application/javascript\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.fr.min.js\" type=\"application/javascript\"></script>
<script>
    \$(document).ready(function() {
        \$('.js-datepicker').datepicker({
            format: 'yyyy-mm-dd',
            language: 'fr',
            autoclose: true,
            todayHighlight: true,
            orientation: \"bottom auto\"
        });
    });
</script>
{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
{% endblock %}
", "ShopBundle:CarouselVideo:new.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselVideo/new.html.twig");
    }
}
