<?php

/* MarketingBundle:modelnewsletter:show.html.twig */
class __TwigTemplate_1b2dae63f262dd6d0d4f5298ffcf6135ba3d60b51e4c0461c0226adac179cfa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:modelnewsletter:show.html.twig", 1);
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
        $__internal_4a3fc9be50d560d4f5c3c096601c4c0b8e28b964539acdddd2b2e95fbb5d0112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a3fc9be50d560d4f5c3c096601c4c0b8e28b964539acdddd2b2e95fbb5d0112->enter($__internal_4a3fc9be50d560d4f5c3c096601c4c0b8e28b964539acdddd2b2e95fbb5d0112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:modelnewsletter:show.html.twig"));

        $__internal_ad7b0a3fe8ad8237cb7521ba0bf35b8a1df93dd24e20896e250fccf6dc0ff4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7b0a3fe8ad8237cb7521ba0bf35b8a1df93dd24e20896e250fccf6dc0ff4d2->enter($__internal_ad7b0a3fe8ad8237cb7521ba0bf35b8a1df93dd24e20896e250fccf6dc0ff4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:modelnewsletter:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a3fc9be50d560d4f5c3c096601c4c0b8e28b964539acdddd2b2e95fbb5d0112->leave($__internal_4a3fc9be50d560d4f5c3c096601c4c0b8e28b964539acdddd2b2e95fbb5d0112_prof);

        
        $__internal_ad7b0a3fe8ad8237cb7521ba0bf35b8a1df93dd24e20896e250fccf6dc0ff4d2->leave($__internal_ad7b0a3fe8ad8237cb7521ba0bf35b8a1df93dd24e20896e250fccf6dc0ff4d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f99d5e9620b824b00d349b9e8d3b6547d4a5fbad22c947384bbdf79114e022c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f99d5e9620b824b00d349b9e8d3b6547d4a5fbad22c947384bbdf79114e022c->enter($__internal_8f99d5e9620b824b00d349b9e8d3b6547d4a5fbad22c947384bbdf79114e022c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebca9adee6323772c0b47144438e882a18b4ca87674d4d7fa55d463ca4b911ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebca9adee6323772c0b47144438e882a18b4ca87674d4d7fa55d463ca4b911ef->enter($__internal_ebca9adee6323772c0b47144438e882a18b4ca87674d4d7fa55d463ca4b911ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ModelNewsletter</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modelNewsletter"] ?? $this->getContext($context, "modelNewsletter")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modelNewsletter"] ?? $this->getContext($context, "modelNewsletter")), "path", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["modelNewsletter"] ?? $this->getContext($context, "modelNewsletter")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_edit", array("id" => $this->getAttribute(($context["modelNewsletter"] ?? $this->getContext($context, "modelNewsletter")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ebca9adee6323772c0b47144438e882a18b4ca87674d4d7fa55d463ca4b911ef->leave($__internal_ebca9adee6323772c0b47144438e882a18b4ca87674d4d7fa55d463ca4b911ef_prof);

        
        $__internal_8f99d5e9620b824b00d349b9e8d3b6547d4a5fbad22c947384bbdf79114e022c->leave($__internal_8f99d5e9620b824b00d349b9e8d3b6547d4a5fbad22c947384bbdf79114e022c_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:modelnewsletter:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>ModelNewsletter</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ modelNewsletter.name }}</td>
            </tr>
            <tr>
                <th>Path</th>
                <td>{{ modelNewsletter.path }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ modelNewsletter.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('modelnewsletter_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('modelnewsletter_edit', { 'id': modelNewsletter.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:modelnewsletter:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/modelnewsletter/show.html.twig");
    }
}
