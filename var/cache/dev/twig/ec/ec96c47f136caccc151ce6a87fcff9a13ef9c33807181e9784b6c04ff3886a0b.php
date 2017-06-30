<?php

/* @Marketing/newsletter/index.html.twig */
class __TwigTemplate_d866a4932a8c2488ef72af604adcba178516818c09b8e763dd8bfb79d959c93e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletter/index.html.twig", 1);
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
        $__internal_712e18d76bb4790eec083d9fd09a781b8b1641be760a7bcf566053e82c84f492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712e18d76bb4790eec083d9fd09a781b8b1641be760a7bcf566053e82c84f492->enter($__internal_712e18d76bb4790eec083d9fd09a781b8b1641be760a7bcf566053e82c84f492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletter/index.html.twig"));

        $__internal_2e8a598b8c4b2b82e385ac2ea72a982ab6e8607c68dea706e14d7076eddc8430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8a598b8c4b2b82e385ac2ea72a982ab6e8607c68dea706e14d7076eddc8430->enter($__internal_2e8a598b8c4b2b82e385ac2ea72a982ab6e8607c68dea706e14d7076eddc8430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletter/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_712e18d76bb4790eec083d9fd09a781b8b1641be760a7bcf566053e82c84f492->leave($__internal_712e18d76bb4790eec083d9fd09a781b8b1641be760a7bcf566053e82c84f492_prof);

        
        $__internal_2e8a598b8c4b2b82e385ac2ea72a982ab6e8607c68dea706e14d7076eddc8430->leave($__internal_2e8a598b8c4b2b82e385ac2ea72a982ab6e8607c68dea706e14d7076eddc8430_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2445fd18b0c560d6c9287e9f8290094706f7c83b999511d64c05ebfd2c5614c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2445fd18b0c560d6c9287e9f8290094706f7c83b999511d64c05ebfd2c5614c8->enter($__internal_2445fd18b0c560d6c9287e9f8290094706f7c83b999511d64c05ebfd2c5614c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_257f89b55978b9609ccef45430367ff889fb9580b6b60e331b7b87c0706d2a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257f89b55978b9609ccef45430367ff889fb9580b6b60e331b7b87c0706d2a9c->enter($__internal_257f89b55978b9609ccef45430367ff889fb9580b6b60e331b7b87c0706d2a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Newsletter list</h1>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter_new");
        echo "\" class=\"btn btn-info\">Créer une newsletter</a>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date de création</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsletters"] ?? $this->getContext($context, "newsletters")));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter_edit", array("id" => $this->getAttribute($context["newsletter"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "createdAt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter_edit", array("id" => $this->getAttribute($context["newsletter"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                    - <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Télécharger <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shops"] ?? $this->getContext($context, "shops")));
            foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                // line 30
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter_download", array("id" => $this->getAttribute($context["newsletter"], "id", array()), "shop" => $this->getAttribute($context["shop"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["shop"], "name", array()), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        </ul>
                    </div>
                    - <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter_show", array("id" => $this->getAttribute($context["newsletter"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
    <div class=\"navigation\">
        ";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["newsletters"] ?? $this->getContext($context, "newsletters")));
        echo "
    </div>

    <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletter_new");
        echo "\" class=\"btn btn-info\">Créer une newsletter</a>
";
        
        $__internal_257f89b55978b9609ccef45430367ff889fb9580b6b60e331b7b87c0706d2a9c->leave($__internal_257f89b55978b9609ccef45430367ff889fb9580b6b60e331b7b87c0706d2a9c_prof);

        
        $__internal_2445fd18b0c560d6c9287e9f8290094706f7c83b999511d64c05ebfd2c5614c8->leave($__internal_2445fd18b0c560d6c9287e9f8290094706f7c83b999511d64c05ebfd2c5614c8_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 44,  132 => 41,  127 => 38,  117 => 34,  113 => 32,  102 => 30,  98 => 29,  89 => 23,  84 => 21,  80 => 20,  74 => 19,  71 => 18,  67 => 17,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Newsletter list</h1>
    <a href=\"{{ path('newsletter_new') }}\" class=\"btn btn-info\">Créer une newsletter</a>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date de création</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for newsletter in newsletters %}
            <tr>
                <td><a href=\"{{ path('newsletter_edit', { 'id': newsletter.id }) }}\">{{ newsletter.title }}</a></td>
                <td>{{ newsletter.createdAt }}</td>
                <td>{{ newsletter.id }}</td>
                <td>
                    <a href=\"{{ path('newsletter_edit', { 'id': newsletter.id }) }}\" class=\"btn btn-warning\">Modifier</a>
                    - <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Télécharger <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            {% for shop in shops %}
                                <li><a href=\"{{ path('newsletter_download', { 'id': newsletter.id, 'shop': shop.id }) }}\">{{ shop.name }}</a></li>
                            {% endfor %}
                        </ul>
                    </div>
                    - <a href=\"{{ path('newsletter_show', { 'id': newsletter.id }) }}\">Supprimer</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"navigation\">
        {{ knp_pagination_render(newsletters) }}
    </div>

    <a href=\"{{ path('newsletter_new') }}\" class=\"btn btn-info\">Créer une newsletter</a>
{% endblock %}
", "@Marketing/newsletter/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletter\\index.html.twig");
    }
}
