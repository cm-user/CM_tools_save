<?php

/* @Marketing/newsletterproduct/index.html.twig */
class __TwigTemplate_c35623c37f3d4bb1c3139b77299b3ff8e088e3eb66ada1e27d190e98ea5abff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterproduct/index.html.twig", 1);
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
        $__internal_4d3bc967a8957b82445b34dff5368c3ca044cc13dc0d5f7b34db96ede16ec23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3bc967a8957b82445b34dff5368c3ca044cc13dc0d5f7b34db96ede16ec23a->enter($__internal_4d3bc967a8957b82445b34dff5368c3ca044cc13dc0d5f7b34db96ede16ec23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterproduct/index.html.twig"));

        $__internal_336377e88fa546ceff1f99cc2a061614d647206283c600f8ac971581574a886e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336377e88fa546ceff1f99cc2a061614d647206283c600f8ac971581574a886e->enter($__internal_336377e88fa546ceff1f99cc2a061614d647206283c600f8ac971581574a886e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterproduct/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d3bc967a8957b82445b34dff5368c3ca044cc13dc0d5f7b34db96ede16ec23a->leave($__internal_4d3bc967a8957b82445b34dff5368c3ca044cc13dc0d5f7b34db96ede16ec23a_prof);

        
        $__internal_336377e88fa546ceff1f99cc2a061614d647206283c600f8ac971581574a886e->leave($__internal_336377e88fa546ceff1f99cc2a061614d647206283c600f8ac971581574a886e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa08b935f7c212581eaa63c2e051c3935618976f376526944c74d5fbdec59f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa08b935f7c212581eaa63c2e051c3935618976f376526944c74d5fbdec59f4c->enter($__internal_fa08b935f7c212581eaa63c2e051c3935618976f376526944c74d5fbdec59f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ed51fb21a1a7264b4abc1ac06d3ff1ff6a31770e5991f99e6cd657b39f70d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed51fb21a1a7264b4abc1ac06d3ff1ff6a31770e5991f99e6cd657b39f70d39->enter($__internal_8ed51fb21a1a7264b4abc1ac06d3ff1ff6a31770e5991f99e6cd657b39f70d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterProduct list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Position</th>
                <th>Idprestashopproduct</th>
                <th>Title</th>
                <th>Price</th>
                <th>Priceold</th>
                <th>Link</th>
                <th>Picture</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsletterProducts"] ?? $this->getContext($context, "newsletterProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletterProduct"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterproduct_show", array("id" => $this->getAttribute($context["newsletterProduct"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProduct"], "position", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProduct"], "idPrestashopProduct", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProduct"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProduct"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProduct"], "priceOld", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProduct"], "link", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProduct"], "picture", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterProduct"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterproduct_show", array("id" => $this->getAttribute($context["newsletterProduct"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterproduct_edit", array("id" => $this->getAttribute($context["newsletterProduct"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletterProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

   <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterproduct_new");
        echo "\" class=\"btn btn-info\">Créer un produit</a>
";
        
        $__internal_8ed51fb21a1a7264b4abc1ac06d3ff1ff6a31770e5991f99e6cd657b39f70d39->leave($__internal_8ed51fb21a1a7264b4abc1ac06d3ff1ff6a31770e5991f99e6cd657b39f70d39_prof);

        
        $__internal_fa08b935f7c212581eaa63c2e051c3935618976f376526944c74d5fbdec59f4c->leave($__internal_fa08b935f7c212581eaa63c2e051c3935618976f376526944c74d5fbdec59f4c_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterproduct/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 46,  130 => 43,  118 => 37,  112 => 34,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterProduct list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Position</th>
                <th>Idprestashopproduct</th>
                <th>Title</th>
                <th>Price</th>
                <th>Priceold</th>
                <th>Link</th>
                <th>Picture</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for newsletterProduct in newsletterProducts %}
            <tr>
                <td><a href=\"{{ path('newsletterproduct_show', { 'id': newsletterProduct.id }) }}\">{{ newsletterProduct.position }}</a></td>
                <td>{{ newsletterProduct.idPrestashopProduct }}</td>
                <td>{{ newsletterProduct.title }}</td>
                <td>{{ newsletterProduct.price }}</td>
                <td>{{ newsletterProduct.priceOld }}</td>
                <td>{{ newsletterProduct.link }}</td>
                <td>{{ newsletterProduct.picture }}</td>
                <td>{{ newsletterProduct.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('newsletterproduct_show', { 'id': newsletterProduct.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('newsletterproduct_edit', { 'id': newsletterProduct.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

   <a href=\"{{ path('newsletterproduct_new') }}\" class=\"btn btn-info\">Créer un produit</a>
{% endblock %}
", "@Marketing/newsletterproduct/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterproduct\\index.html.twig");
    }
}
