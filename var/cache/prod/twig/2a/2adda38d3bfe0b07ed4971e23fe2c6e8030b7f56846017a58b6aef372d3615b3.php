<?php

/* @Shop/CarouselPicture/show.html.twig */
class __TwigTemplate_29708927b394dc21324817ec4fe47dbd4c970f3fdf0d6c3802e6f6b0cb945ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/CarouselPicture/show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Image du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carouselPicture"]) ? $context["carouselPicture"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carouselPicture"]) ? $context["carouselPicture"] : null), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carouselPicture"]) ? $context["carouselPicture"] : null), "length", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de début</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["carouselPicture"]) ? $context["carouselPicture"] : null), "dateStart", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date de fin</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["carouselPicture"]) ? $context["carouselPicture"] : null), "dateEnd", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <h2>Image</h2>
    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["carouselPicture"]) ? $context["carouselPicture"] : null), "picture", array()), "html", null, true);
        echo "\" class=\"img-rounded\">

    <p>
        <a class=\"btn btn-default\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_index");
        echo "\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_picture_edit", array("id" => $this->getAttribute((isset($context["carouselPicture"]) ? $context["carouselPicture"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
    </p>
";
    }

    public function getTemplateName()
    {
        return "@Shop/CarouselPicture/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 45,  96 => 43,  89 => 39,  82 => 35,  76 => 32,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Shop/CarouselPicture/show.html.twig", "/home/cadeau-maestro/tools/src/ShopBundle/Resources/views/CarouselPicture/show.html.twig");
    }
}
