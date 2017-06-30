<?php

/* ShopBundle:CarouselVideo:index.html.twig */
class __TwigTemplate_1f8a15fb75641bb15f63b092f98a49e4a48ceb1fc37f58285619f3f3f173e5db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ShopBundle:CarouselVideo:index.html.twig", 1);
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
        echo "    <h1>Liste des vidéos du carrousel</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Vidéo ID</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carouselVideos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["carouselVideo"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselVideo"], "id", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_show", array("id" => $this->getAttribute($context["carouselVideo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselVideo"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselVideo"], "videoId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carouselVideo"], "dateStart", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carouselVideo"], "dateEnd", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_show", array("id" => $this->getAttribute($context["carouselVideo"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_edit", array("id" => $this->getAttribute($context["carouselVideo"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                    - <a class=\"btn btn-danger\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_delete", array("id" => $this->getAttribute($context["carouselVideo"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-remove\"></span>
                        Supprimer
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carouselVideo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <div class=\"navigation\">
        ";
        // line 46
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["carouselVideos"] ?? null));
        echo "
    </div>

    <a class=\"btn btn-success\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_video_new");
        echo "\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter une vidéo
    </a>
";
    }

    public function getTemplateName()
    {
        return "ShopBundle:CarouselVideo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  111 => 46,  105 => 42,  92 => 35,  85 => 31,  77 => 26,  72 => 24,  68 => 23,  64 => 22,  58 => 21,  54 => 20,  51 => 19,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ShopBundle:CarouselVideo:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle/Resources/views/CarouselVideo/index.html.twig");
    }
}
