<?php

/* @Shop/CarouselPicture/edit.html.twig */
class __TwigTemplate_907905b1b535eca7762c1b5f618317ef5935047487957d5a0047f4a5fbbe92f3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Modifier l'image</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form_end');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
    </p>
";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 38
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css\" />
";
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
        return array (  93 => 38,  90 => 37,  73 => 22,  70 => 21,  63 => 17,  58 => 15,  52 => 12,  46 => 9,  41 => 7,  37 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Shop/CarouselPicture/edit.html.twig", "/home/cadeau-maestro/tools/src/ShopBundle/Resources/views/CarouselPicture/edit.html.twig");
    }
}
