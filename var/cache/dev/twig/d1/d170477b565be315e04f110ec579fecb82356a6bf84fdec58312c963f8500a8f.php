<?php

/* MarketingBundle:newsletterproduct:index.html.twig */
class __TwigTemplate_95a039c1670f369d4923c0b1ba6f3e9961928c43ae820674caffdbb6117a3062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterproduct:index.html.twig", 1);
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
        $__internal_f5d985b38bcd6c5765ca0337cefcdd0f9867efea33ce62f6974bf3a31ee38e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d985b38bcd6c5765ca0337cefcdd0f9867efea33ce62f6974bf3a31ee38e96->enter($__internal_f5d985b38bcd6c5765ca0337cefcdd0f9867efea33ce62f6974bf3a31ee38e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterproduct:index.html.twig"));

        $__internal_503c949fa19d12ff996fdf9d9f06e3d99e37085fc0398d694d91c04fc877fd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503c949fa19d12ff996fdf9d9f06e3d99e37085fc0398d694d91c04fc877fd14->enter($__internal_503c949fa19d12ff996fdf9d9f06e3d99e37085fc0398d694d91c04fc877fd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterproduct:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5d985b38bcd6c5765ca0337cefcdd0f9867efea33ce62f6974bf3a31ee38e96->leave($__internal_f5d985b38bcd6c5765ca0337cefcdd0f9867efea33ce62f6974bf3a31ee38e96_prof);

        
        $__internal_503c949fa19d12ff996fdf9d9f06e3d99e37085fc0398d694d91c04fc877fd14->leave($__internal_503c949fa19d12ff996fdf9d9f06e3d99e37085fc0398d694d91c04fc877fd14_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec7dfc6974698a27c9be6ca7ba19278af02c42bab8f30e7e4d9c632ac5be1a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7dfc6974698a27c9be6ca7ba19278af02c42bab8f30e7e4d9c632ac5be1a0f->enter($__internal_ec7dfc6974698a27c9be6ca7ba19278af02c42bab8f30e7e4d9c632ac5be1a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72b6a07f52580d95efae14e057b36c1fbe2d91ea5c5c54436ad60fde8a0bdd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b6a07f52580d95efae14e057b36c1fbe2d91ea5c5c54436ad60fde8a0bdd16->enter($__internal_72b6a07f52580d95efae14e057b36c1fbe2d91ea5c5c54436ad60fde8a0bdd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_72b6a07f52580d95efae14e057b36c1fbe2d91ea5c5c54436ad60fde8a0bdd16->leave($__internal_72b6a07f52580d95efae14e057b36c1fbe2d91ea5c5c54436ad60fde8a0bdd16_prof);

        
        $__internal_ec7dfc6974698a27c9be6ca7ba19278af02c42bab8f30e7e4d9c632ac5be1a0f->leave($__internal_ec7dfc6974698a27c9be6ca7ba19278af02c42bab8f30e7e4d9c632ac5be1a0f_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterproduct:index.html.twig";
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
", "MarketingBundle:newsletterproduct:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterproduct/index.html.twig");
    }
}
