<?php

/* ShopBundle:CarouselVideo:edit.html.twig */
class __TwigTemplate_c1706aab857ef4d92c2501334f99f3a646538b7b79dec9387454be82ae7eb101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselVideo:edit.html.twig", 1);
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
        $__internal_4446ee4a0eedff40490aaddeee10b53b3b2ef2df22eca8e08e87b2bfb2add406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4446ee4a0eedff40490aaddeee10b53b3b2ef2df22eca8e08e87b2bfb2add406->enter($__internal_4446ee4a0eedff40490aaddeee10b53b3b2ef2df22eca8e08e87b2bfb2add406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselVideo:edit.html.twig"));

        $__internal_a001b1d606d42ba416998636fc8188e089c1ca3af88903a7cf9f8f1ce61ace60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a001b1d606d42ba416998636fc8188e089c1ca3af88903a7cf9f8f1ce61ace60->enter($__internal_a001b1d606d42ba416998636fc8188e089c1ca3af88903a7cf9f8f1ce61ace60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ShopBundle:CarouselVideo:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4446ee4a0eedff40490aaddeee10b53b3b2ef2df22eca8e08e87b2bfb2add406->leave($__internal_4446ee4a0eedff40490aaddeee10b53b3b2ef2df22eca8e08e87b2bfb2add406_prof);

        
        $__internal_a001b1d606d42ba416998636fc8188e089c1ca3af88903a7cf9f8f1ce61ace60->leave($__internal_a001b1d606d42ba416998636fc8188e089c1ca3af88903a7cf9f8f1ce61ace60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e643f1e5984d12f07d981c4cf606cfe3087ace28d9ed440503ecf0547ee7e09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e643f1e5984d12f07d981c4cf606cfe3087ace28d9ed440503ecf0547ee7e09a->enter($__internal_e643f1e5984d12f07d981c4cf606cfe3087ace28d9ed440503ecf0547ee7e09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1be3959623f375f7d93367b6b75f363c2506729a383e50321b525a94f0be13d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be3959623f375f7d93367b6b75f363c2506729a383e50321b525a94f0be13d3->enter($__internal_1be3959623f375f7d93367b6b75f363c2506729a383e50321b525a94f0be13d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier la vidéo</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_index");
        echo "\">
            Retour à la liste
        </a>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>
";
        
        $__internal_1be3959623f375f7d93367b6b75f363c2506729a383e50321b525a94f0be13d3->leave($__internal_1be3959623f375f7d93367b6b75f363c2506729a383e50321b525a94f0be13d3_prof);

        
        $__internal_e643f1e5984d12f07d981c4cf606cfe3087ace28d9ed440503ecf0547ee7e09a->leave($__internal_e643f1e5984d12f07d981c4cf606cfe3087ace28d9ed440503ecf0547ee7e09a_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e791f34168ebd867f51be30adbe813c1b5e4ece98b5e44d538923051e1670cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e791f34168ebd867f51be30adbe813c1b5e4ece98b5e44d538923051e1670cb->enter($__internal_0e791f34168ebd867f51be30adbe813c1b5e4ece98b5e44d538923051e1670cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_073d4a6f649dcf5e4591fd7e9ce4a2473a6f60fbc9d25a3c86de8249618b53ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073d4a6f649dcf5e4591fd7e9ce4a2473a6f60fbc9d25a3c86de8249618b53ac->enter($__internal_073d4a6f649dcf5e4591fd7e9ce4a2473a6f60fbc9d25a3c86de8249618b53ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
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
        
        $__internal_073d4a6f649dcf5e4591fd7e9ce4a2473a6f60fbc9d25a3c86de8249618b53ac->leave($__internal_073d4a6f649dcf5e4591fd7e9ce4a2473a6f60fbc9d25a3c86de8249618b53ac_prof);

        
        $__internal_0e791f34168ebd867f51be30adbe813c1b5e4ece98b5e44d538923051e1670cb->leave($__internal_0e791f34168ebd867f51be30adbe813c1b5e4ece98b5e44d538923051e1670cb_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58b4ee6d37fed6e9fd4aa22f3503c04d852ca9729879759f6624bbc0e8703d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b4ee6d37fed6e9fd4aa22f3503c04d852ca9729879759f6624bbc0e8703d49->enter($__internal_58b4ee6d37fed6e9fd4aa22f3503c04d852ca9729879759f6624bbc0e8703d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7c0ba295f7f552bd3cbd16f018f71308f8add73486c1903b52d6b45807ec27e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0ba295f7f552bd3cbd16f018f71308f8add73486c1903b52d6b45807ec27e8->enter($__internal_7c0ba295f7f552bd3cbd16f018f71308f8add73486c1903b52d6b45807ec27e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 38
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_7c0ba295f7f552bd3cbd16f018f71308f8add73486c1903b52d6b45807ec27e8->leave($__internal_7c0ba295f7f552bd3cbd16f018f71308f8add73486c1903b52d6b45807ec27e8_prof);

        
        $__internal_58b4ee6d37fed6e9fd4aa22f3503c04d852ca9729879759f6624bbc0e8703d49->leave($__internal_58b4ee6d37fed6e9fd4aa22f3503c04d852ca9729879759f6624bbc0e8703d49_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselVideo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  126 => 37,  103 => 22,  94 => 21,  81 => 17,  76 => 15,  70 => 12,  64 => 9,  59 => 7,  55 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
    <h1>Modifier la vidéo</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    {{ form_end(edit_form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('carousel_video_index') }}\">
            Retour à la liste
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
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
", "ShopBundle:CarouselVideo:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselVideo/edit.html.twig");
    }
}
