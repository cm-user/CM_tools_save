<?php

/* @Shop/CarouselPicture/edit.html.twig */
class __TwigTemplate_7ab555170382bf382ba5341d5d4b0a505355501b3fc3eb5f857937573d88dbff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselPicture/edit.html.twig", 1);
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
        $__internal_238af67a88f6a7958f022c81dd6e7e31562849a6386efe68beddc304f6c2b85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238af67a88f6a7958f022c81dd6e7e31562849a6386efe68beddc304f6c2b85a->enter($__internal_238af67a88f6a7958f022c81dd6e7e31562849a6386efe68beddc304f6c2b85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselPicture/edit.html.twig"));

        $__internal_a8e914c50a02973e2cd689f4ea75baaaa20bb68d778cba2175d24c6741d2d07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e914c50a02973e2cd689f4ea75baaaa20bb68d778cba2175d24c6741d2d07c->enter($__internal_a8e914c50a02973e2cd689f4ea75baaaa20bb68d778cba2175d24c6741d2d07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Shop/CarouselPicture/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_238af67a88f6a7958f022c81dd6e7e31562849a6386efe68beddc304f6c2b85a->leave($__internal_238af67a88f6a7958f022c81dd6e7e31562849a6386efe68beddc304f6c2b85a_prof);

        
        $__internal_a8e914c50a02973e2cd689f4ea75baaaa20bb68d778cba2175d24c6741d2d07c->leave($__internal_a8e914c50a02973e2cd689f4ea75baaaa20bb68d778cba2175d24c6741d2d07c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69ce3208d6a1552d7a074c39aed3d4720e35df0872de1e780ee1e2fbd04866a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ce3208d6a1552d7a074c39aed3d4720e35df0872de1e780ee1e2fbd04866a0->enter($__internal_69ce3208d6a1552d7a074c39aed3d4720e35df0872de1e780ee1e2fbd04866a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d2b907b58d81775dd99ad48cbbef4d2481ad1ead04b321e693636f1bfb4b35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2b907b58d81775dd99ad48cbbef4d2481ad1ead04b321e693636f1bfb4b35b->enter($__internal_6d2b907b58d81775dd99ad48cbbef4d2481ad1ead04b321e693636f1bfb4b35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier l'image</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_index");
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
        
        $__internal_6d2b907b58d81775dd99ad48cbbef4d2481ad1ead04b321e693636f1bfb4b35b->leave($__internal_6d2b907b58d81775dd99ad48cbbef4d2481ad1ead04b321e693636f1bfb4b35b_prof);

        
        $__internal_69ce3208d6a1552d7a074c39aed3d4720e35df0872de1e780ee1e2fbd04866a0->leave($__internal_69ce3208d6a1552d7a074c39aed3d4720e35df0872de1e780ee1e2fbd04866a0_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d2eba6e854475ba81559f2ba0d198eea7e2aba1d86d8b037b18e2dac6601044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2eba6e854475ba81559f2ba0d198eea7e2aba1d86d8b037b18e2dac6601044->enter($__internal_8d2eba6e854475ba81559f2ba0d198eea7e2aba1d86d8b037b18e2dac6601044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dfa745c34429848726d7646179b9012fe44d980b44b8c96995304d7351c32d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa745c34429848726d7646179b9012fe44d980b44b8c96995304d7351c32d5e->enter($__internal_dfa745c34429848726d7646179b9012fe44d980b44b8c96995304d7351c32d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_dfa745c34429848726d7646179b9012fe44d980b44b8c96995304d7351c32d5e->leave($__internal_dfa745c34429848726d7646179b9012fe44d980b44b8c96995304d7351c32d5e_prof);

        
        $__internal_8d2eba6e854475ba81559f2ba0d198eea7e2aba1d86d8b037b18e2dac6601044->leave($__internal_8d2eba6e854475ba81559f2ba0d198eea7e2aba1d86d8b037b18e2dac6601044_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_562e62ffbc8b22000aee262480ffd4091e840114546255db4ce2626a6442697e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562e62ffbc8b22000aee262480ffd4091e840114546255db4ce2626a6442697e->enter($__internal_562e62ffbc8b22000aee262480ffd4091e840114546255db4ce2626a6442697e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0c69d0b51f17d351a03fcafb63ece62294f3c28784e6eabe29cf303d82eb84d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c69d0b51f17d351a03fcafb63ece62294f3c28784e6eabe29cf303d82eb84d5->enter($__internal_0c69d0b51f17d351a03fcafb63ece62294f3c28784e6eabe29cf303d82eb84d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 38
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
        
        $__internal_0c69d0b51f17d351a03fcafb63ece62294f3c28784e6eabe29cf303d82eb84d5->leave($__internal_0c69d0b51f17d351a03fcafb63ece62294f3c28784e6eabe29cf303d82eb84d5_prof);

        
        $__internal_562e62ffbc8b22000aee262480ffd4091e840114546255db4ce2626a6442697e->leave($__internal_562e62ffbc8b22000aee262480ffd4091e840114546255db4ce2626a6442697e_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/CarouselPicture/edit.html.twig";
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
    <h1>Modifier l'image</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    {{ form_end(edit_form) }}

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('carousel_picture_index') }}\">
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
", "@Shop/CarouselPicture/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\CarouselPicture\\edit.html.twig");
    }
}
