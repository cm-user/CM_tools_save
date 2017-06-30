<?php

/* MarketingBundle:newslettermenu:show.html.twig */
class __TwigTemplate_87ccb052fb4547a4c8fcdae78a99cd5aea6b51096d51a9dff78231ce3ba2d6f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newslettermenu:show.html.twig", 1);
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
        $__internal_1b45b13a07897f040651f45456c43b4d533211a96517eb313a64ed270a82b439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b45b13a07897f040651f45456c43b4d533211a96517eb313a64ed270a82b439->enter($__internal_1b45b13a07897f040651f45456c43b4d533211a96517eb313a64ed270a82b439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newslettermenu:show.html.twig"));

        $__internal_6b541c5f332ed664301cbf79ddf89cb5072c032fc5ba3c1cc0e7b533ad909e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b541c5f332ed664301cbf79ddf89cb5072c032fc5ba3c1cc0e7b533ad909e7e->enter($__internal_6b541c5f332ed664301cbf79ddf89cb5072c032fc5ba3c1cc0e7b533ad909e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:newslettermenu:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b45b13a07897f040651f45456c43b4d533211a96517eb313a64ed270a82b439->leave($__internal_1b45b13a07897f040651f45456c43b4d533211a96517eb313a64ed270a82b439_prof);

        
        $__internal_6b541c5f332ed664301cbf79ddf89cb5072c032fc5ba3c1cc0e7b533ad909e7e->leave($__internal_6b541c5f332ed664301cbf79ddf89cb5072c032fc5ba3c1cc0e7b533ad909e7e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75911ad36c368470289545492a2b895912e983ae2d44a7ff26c3dd4c6c34414b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75911ad36c368470289545492a2b895912e983ae2d44a7ff26c3dd4c6c34414b->enter($__internal_75911ad36c368470289545492a2b895912e983ae2d44a7ff26c3dd4c6c34414b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97142c3f0ba4829ba555cf170da265738a96487cda691e21ad10b1a74607ef35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97142c3f0ba4829ba555cf170da265738a96487cda691e21ad10b1a74607ef35->enter($__internal_97142c3f0ba4829ba555cf170da265738a96487cda691e21ad10b1a74607ef35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterMenu</h1>

    <table>
        <tbody>
            <tr>
                <th>Title</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? $this->getContext($context, "newsletterMenu")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? $this->getContext($context, "newsletterMenu")), "link", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? $this->getContext($context, "newsletterMenu")), "position", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? $this->getContext($context, "newsletterMenu")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_edit", array("id" => $this->getAttribute(($context["newsletterMenu"] ?? $this->getContext($context, "newsletterMenu")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_97142c3f0ba4829ba555cf170da265738a96487cda691e21ad10b1a74607ef35->leave($__internal_97142c3f0ba4829ba555cf170da265738a96487cda691e21ad10b1a74607ef35_prof);

        
        $__internal_75911ad36c368470289545492a2b895912e983ae2d44a7ff26c3dd4c6c34414b->leave($__internal_75911ad36c368470289545492a2b895912e983ae2d44a7ff26c3dd4c6c34414b_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:newslettermenu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterMenu</h1>

    <table>
        <tbody>
            <tr>
                <th>Title</th>
                <td>{{ newsletterMenu.title }}</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>{{ newsletterMenu.link }}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>{{ newsletterMenu.position }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ newsletterMenu.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('newslettermenu_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('newslettermenu_edit', { 'id': newsletterMenu.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:newslettermenu:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newslettermenu/show.html.twig");
    }
}
