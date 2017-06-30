<?php

/* MarketingBundle:newslettermenu:index.html.twig */
class __TwigTemplate_51ad68f7ffcce6436e56e01b88ca74978841a4264733f77773f4ecaab07e65d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newslettermenu:index.html.twig", 1);
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
        $__internal_daf790e1c121cfc8d950b9b8c6d0656f7cb91822202a937e85c2cb522a19282a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf790e1c121cfc8d950b9b8c6d0656f7cb91822202a937e85c2cb522a19282a->enter($__internal_daf790e1c121cfc8d950b9b8c6d0656f7cb91822202a937e85c2cb522a19282a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newslettermenu:index.html.twig"));

        $__internal_1bb7d1c4ee1e455fefdcadf0b054e55a191a28e68fa4617a40d200829885918d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb7d1c4ee1e455fefdcadf0b054e55a191a28e68fa4617a40d200829885918d->enter($__internal_1bb7d1c4ee1e455fefdcadf0b054e55a191a28e68fa4617a40d200829885918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newslettermenu:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daf790e1c121cfc8d950b9b8c6d0656f7cb91822202a937e85c2cb522a19282a->leave($__internal_daf790e1c121cfc8d950b9b8c6d0656f7cb91822202a937e85c2cb522a19282a_prof);

        
        $__internal_1bb7d1c4ee1e455fefdcadf0b054e55a191a28e68fa4617a40d200829885918d->leave($__internal_1bb7d1c4ee1e455fefdcadf0b054e55a191a28e68fa4617a40d200829885918d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6da0a6ca21d21d769c837280eee8e5bb87d523f0b99bcc3b23ffbd14cca3339f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da0a6ca21d21d769c837280eee8e5bb87d523f0b99bcc3b23ffbd14cca3339f->enter($__internal_6da0a6ca21d21d769c837280eee8e5bb87d523f0b99bcc3b23ffbd14cca3339f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8c3a62049a4d049cbfbdff88afcbc6c8121c8dc58689b9478b5d67f9355bbb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c3a62049a4d049cbfbdff88afcbc6c8121c8dc58689b9478b5d67f9355bbb0->enter($__internal_e8c3a62049a4d049cbfbdff88afcbc6c8121c8dc58689b9478b5d67f9355bbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterMenu list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Link</th>
                <th>Position</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsletterMenus"] ?? $this->getContext($context, "newsletterMenus")));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletterMenu"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_show", array("id" => $this->getAttribute($context["newsletterMenu"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterMenu"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterMenu"], "link", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterMenu"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterMenu"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_show", array("id" => $this->getAttribute($context["newsletterMenu"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_edit", array("id" => $this->getAttribute($context["newsletterMenu"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletterMenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_new");
        echo "\" class=\"btn btn-info\">Ajouter un menu</a>
";
        
        $__internal_e8c3a62049a4d049cbfbdff88afcbc6c8121c8dc58689b9478b5d67f9355bbb0->leave($__internal_e8c3a62049a4d049cbfbdff88afcbc6c8121c8dc58689b9478b5d67f9355bbb0_prof);

        
        $__internal_6da0a6ca21d21d769c837280eee8e5bb87d523f0b99bcc3b23ffbd14cca3339f->leave($__internal_6da0a6ca21d21d769c837280eee8e5bb87d523f0b99bcc3b23ffbd14cca3339f_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newslettermenu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 38,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterMenu list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Title</th>
                <th>Link</th>
                <th>Position</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for newsletterMenu in newsletterMenus %}
            <tr>
                <td><a href=\"{{ path('newslettermenu_show', { 'id': newsletterMenu.id }) }}\">{{ newsletterMenu.title }}</a></td>
                <td>{{ newsletterMenu.link }}</td>
                <td>{{ newsletterMenu.position }}</td>
                <td>{{ newsletterMenu.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('newslettermenu_show', { 'id': newsletterMenu.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('newslettermenu_edit', { 'id': newsletterMenu.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('newslettermenu_new') }}\" class=\"btn btn-info\">Ajouter un menu</a>
{% endblock %}
", "MarketingBundle:newslettermenu:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newslettermenu/index.html.twig");
    }
}
