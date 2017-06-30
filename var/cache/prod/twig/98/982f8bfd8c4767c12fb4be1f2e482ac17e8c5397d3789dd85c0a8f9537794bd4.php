<?php

/* @Shop/ShopConfiguration/index.html.twig */
class __TwigTemplate_528042494ff3f9386927f53ba801ef1ac3789aa20f30effbc8bb4dafdc35b045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Shop/ShopConfiguration/index.html.twig", 1);
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
        echo "    <h1>Shopconfigurations list</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Width</th>
                <th>Height</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shopConfigurations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shopConfiguration"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_show", array("id" => $this->getAttribute($context["shopConfiguration"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "width", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["shopConfiguration"], "height", array()), "html", null, true);
            echo "</td>
                <td>                                                        <a class=\"btn btn-info\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_show", array("id" => $this->getAttribute($context["shopConfiguration"], "id", array()))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-search\"></span>
                                    show
                                </a>
                                                                                <a class=\"btn btn-warning\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_edit", array("id" => $this->getAttribute($context["shopConfiguration"], "id", array()))), "html", null, true);
            echo "\">
                                    <span class=\"glyphicon glyphicon-pencil\"></span>
                                    edit
                                </a>
                        
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shopConfiguration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a class=\"btn btn-success\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carousel_shopconfiguration_new");
        echo "\">
                <span class=\"glyphicon glyphicon-plus\"></span>
                Ajouter shopConfiguration</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "@Shop/ShopConfiguration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 41,  93 => 36,  78 => 27,  71 => 23,  67 => 22,  63 => 21,  59 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Shop/ShopConfiguration/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\ShopConfiguration\\index.html.twig");
    }
}
