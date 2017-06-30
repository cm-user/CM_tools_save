<?php

/* MarketingBundle:newsletterblock:show.html.twig */
class __TwigTemplate_921d74def9a47bc821d942d6a0e9b845c7f77563cb847c2874cde07e3e4d2ca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newsletterblock:show.html.twig", 1);
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
        $__internal_c43f166f29bdecce5161f082bff6a03967c86c400b97b04ca87e5a9968c2b22a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43f166f29bdecce5161f082bff6a03967c86c400b97b04ca87e5a9968c2b22a->enter($__internal_c43f166f29bdecce5161f082bff6a03967c86c400b97b04ca87e5a9968c2b22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblock:show.html.twig"));

        $__internal_e34d064fc5514cb4507731c201a23545f0f5b56ed3ecb4a1aea4bf3efb4bbdd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34d064fc5514cb4507731c201a23545f0f5b56ed3ecb4a1aea4bf3efb4bbdd5->enter($__internal_e34d064fc5514cb4507731c201a23545f0f5b56ed3ecb4a1aea4bf3efb4bbdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newsletterblock:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c43f166f29bdecce5161f082bff6a03967c86c400b97b04ca87e5a9968c2b22a->leave($__internal_c43f166f29bdecce5161f082bff6a03967c86c400b97b04ca87e5a9968c2b22a_prof);

        
        $__internal_e34d064fc5514cb4507731c201a23545f0f5b56ed3ecb4a1aea4bf3efb4bbdd5->leave($__internal_e34d064fc5514cb4507731c201a23545f0f5b56ed3ecb4a1aea4bf3efb4bbdd5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6ce33c37abaa21d66d46840b09ca74793c26ed9f5ac2c65bba18a5314030226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ce33c37abaa21d66d46840b09ca74793c26ed9f5ac2c65bba18a5314030226->enter($__internal_b6ce33c37abaa21d66d46840b09ca74793c26ed9f5ac2c65bba18a5314030226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70f2deb722db57d99cb0e11ff8a6fc32925c77289d085f540d6ac52d35b0b5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f2deb722db57d99cb0e11ff8a6fc32925c77289d085f540d6ac52d35b0b5ef->enter($__internal_70f2deb722db57d99cb0e11ff8a6fc32925c77289d085f540d6ac52d35b0b5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlock</h1>

    <table>
        <tbody>
            <tr>
                <th>Type</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterBlock"] ?? $this->getContext($context, "newsletterBlock")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterBlock"] ?? $this->getContext($context, "newsletterBlock")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterBlock"] ?? $this->getContext($context, "newsletterBlock")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblock_edit", array("id" => $this->getAttribute(($context["newsletterBlock"] ?? $this->getContext($context, "newsletterBlock")), "id", array()))), "html", null, true);
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
        
        $__internal_70f2deb722db57d99cb0e11ff8a6fc32925c77289d085f540d6ac52d35b0b5ef->leave($__internal_70f2deb722db57d99cb0e11ff8a6fc32925c77289d085f540d6ac52d35b0b5ef_prof);

        
        $__internal_b6ce33c37abaa21d66d46840b09ca74793c26ed9f5ac2c65bba18a5314030226->leave($__internal_b6ce33c37abaa21d66d46840b09ca74793c26ed9f5ac2c65bba18a5314030226_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newsletterblock:show.html.twig";
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
    <h1>NewsletterBlock</h1>

    <table>
        <tbody>
            <tr>
                <th>Type</th>
                <td>{{ newsletterBlock.type }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ newsletterBlock.title }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ newsletterBlock.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('newsletterblock_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('newsletterblock_edit', { 'id': newsletterBlock.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newsletterblock:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newsletterblock/show.html.twig");
    }
}
