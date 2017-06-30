<?php

/* @Marketing/newsletterheader/index.html.twig */
class __TwigTemplate_7c8bf1ccb9190711946b349111ccfdf14de6267f64999fc557fb4f41309530cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterheader/index.html.twig", 1);
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
        $__internal_70d93821ae03f76c644a6d4d8d2f43959d300665d7945e4a44180bce549e975c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d93821ae03f76c644a6d4d8d2f43959d300665d7945e4a44180bce549e975c->enter($__internal_70d93821ae03f76c644a6d4d8d2f43959d300665d7945e4a44180bce549e975c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterheader/index.html.twig"));

        $__internal_94e71a7ad5367111e845cc7f5132acad79eb2d6507c70d88c265dd78761dff47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e71a7ad5367111e845cc7f5132acad79eb2d6507c70d88c265dd78761dff47->enter($__internal_94e71a7ad5367111e845cc7f5132acad79eb2d6507c70d88c265dd78761dff47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterheader/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d93821ae03f76c644a6d4d8d2f43959d300665d7945e4a44180bce549e975c->leave($__internal_70d93821ae03f76c644a6d4d8d2f43959d300665d7945e4a44180bce549e975c_prof);

        
        $__internal_94e71a7ad5367111e845cc7f5132acad79eb2d6507c70d88c265dd78761dff47->leave($__internal_94e71a7ad5367111e845cc7f5132acad79eb2d6507c70d88c265dd78761dff47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_136ab069042fb3d2896124c388c1e3d2325fa3fca2f4889b3df727b7d0598b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136ab069042fb3d2896124c388c1e3d2325fa3fca2f4889b3df727b7d0598b99->enter($__internal_136ab069042fb3d2896124c388c1e3d2325fa3fca2f4889b3df727b7d0598b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_220b357e9d5ddd53318e0f1300299f7289f32d141919557fdf6ae7e3c1ef8adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220b357e9d5ddd53318e0f1300299f7289f32d141919557fdf6ae7e3c1ef8adf->enter($__internal_220b357e9d5ddd53318e0f1300299f7289f32d141919557fdf6ae7e3c1ef8adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterHeader list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Texttop</th>
                <th>Textintro</th>
                <th>Textdescription</th>
                <th>Picture</th>
                <th>Link</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newsletterHeaders"] ?? $this->getContext($context, "newsletterHeaders")));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletterHeader"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_show", array("id" => $this->getAttribute($context["newsletterHeader"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "textTop", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "textIntro", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "textDescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "picture", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "link", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletterHeader"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_show", array("id" => $this->getAttribute($context["newsletterHeader"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_edit", array("id" => $this->getAttribute($context["newsletterHeader"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletterHeader'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_new");
        echo "\" class=\"btn btn-info\">Ajouter une en-tête</a>
";
        
        $__internal_220b357e9d5ddd53318e0f1300299f7289f32d141919557fdf6ae7e3c1ef8adf->leave($__internal_220b357e9d5ddd53318e0f1300299f7289f32d141919557fdf6ae7e3c1ef8adf_prof);

        
        $__internal_136ab069042fb3d2896124c388c1e3d2325fa3fca2f4889b3df727b7d0598b99->leave($__internal_136ab069042fb3d2896124c388c1e3d2325fa3fca2f4889b3df727b7d0598b99_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterheader/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  120 => 39,  108 => 33,  102 => 30,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterHeader list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Texttop</th>
                <th>Textintro</th>
                <th>Textdescription</th>
                <th>Picture</th>
                <th>Link</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for newsletterHeader in newsletterHeaders %}
            <tr>
                <td><a href=\"{{ path('newsletterheader_show', { 'id': newsletterHeader.id }) }}\">{{ newsletterHeader.textTop }}</a></td>
                <td>{{ newsletterHeader.textIntro }}</td>
                <td>{{ newsletterHeader.textDescription }}</td>
                <td>{{ newsletterHeader.picture }}</td>
                <td>{{ newsletterHeader.link }}</td>
                <td>{{ newsletterHeader.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('newsletterheader_show', { 'id': newsletterHeader.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('newsletterheader_edit', { 'id': newsletterHeader.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('newsletterheader_new') }}\" class=\"btn btn-info\">Ajouter une en-tête</a>
{% endblock %}
", "@Marketing/newsletterheader/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterheader\\index.html.twig");
    }
}
