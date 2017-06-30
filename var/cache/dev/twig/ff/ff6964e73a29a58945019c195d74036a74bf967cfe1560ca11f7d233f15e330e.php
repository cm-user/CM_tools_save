<?php

/* MarketingBundle:provider:show.html.twig */
class __TwigTemplate_97803c9edceb647fd500d5a4d0b4f4c2183abd60f78e9a65a62754666002b55f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:provider:show.html.twig", 1);
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
        $__internal_c9a36aa640476b9798f31f2c430756e56e92446af868de2e28b1b3e84a6e6d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a36aa640476b9798f31f2c430756e56e92446af868de2e28b1b3e84a6e6d51->enter($__internal_c9a36aa640476b9798f31f2c430756e56e92446af868de2e28b1b3e84a6e6d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:provider:show.html.twig"));

        $__internal_92e3e895af6f410254dd2d892b5888f8f8ce963e9dd7272e13ed3dfc3a006d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e3e895af6f410254dd2d892b5888f8f8ce963e9dd7272e13ed3dfc3a006d4f->enter($__internal_92e3e895af6f410254dd2d892b5888f8f8ce963e9dd7272e13ed3dfc3a006d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarketingBundle:provider:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9a36aa640476b9798f31f2c430756e56e92446af868de2e28b1b3e84a6e6d51->leave($__internal_c9a36aa640476b9798f31f2c430756e56e92446af868de2e28b1b3e84a6e6d51_prof);

        
        $__internal_92e3e895af6f410254dd2d892b5888f8f8ce963e9dd7272e13ed3dfc3a006d4f->leave($__internal_92e3e895af6f410254dd2d892b5888f8f8ce963e9dd7272e13ed3dfc3a006d4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_382905da3328f5b8f4e2414d1168dd4413835b9f008a4c29925801860b5af8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382905da3328f5b8f4e2414d1168dd4413835b9f008a4c29925801860b5af8ab->enter($__internal_382905da3328f5b8f4e2414d1168dd4413835b9f008a4c29925801860b5af8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68af1b5d0b622aeb2dca3c55d94ed13b795ff429ac8e68b5b29bc155e5130abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68af1b5d0b622aeb2dca3c55d94ed13b795ff429ac8e68b5b29bc155e5130abc->enter($__internal_68af1b5d0b622aeb2dca3c55d94ed13b795ff429ac8e68b5b29bc155e5130abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provider</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["provider"] ?? $this->getContext($context, "provider")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isdefault</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["provider"] ?? $this->getContext($context, "provider")), "isDefault", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["provider"] ?? $this->getContext($context, "provider")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("provider_edit", array("id" => $this->getAttribute(($context["provider"] ?? $this->getContext($context, "provider")), "id", array()))), "html", null, true);
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
        
        $__internal_68af1b5d0b622aeb2dca3c55d94ed13b795ff429ac8e68b5b29bc155e5130abc->leave($__internal_68af1b5d0b622aeb2dca3c55d94ed13b795ff429ac8e68b5b29bc155e5130abc_prof);

        
        $__internal_382905da3328f5b8f4e2414d1168dd4413835b9f008a4c29925801860b5af8ab->leave($__internal_382905da3328f5b8f4e2414d1168dd4413835b9f008a4c29925801860b5af8ab_prof);

    }

    public function getTemplateName()
    {
        return "MarketingBundle:provider:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  97 => 31,  91 => 28,  85 => 25,  75 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Provider</h1>

    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ provider.name }}</td>
            </tr>
            <tr>
                <th>Isdefault</th>
                <td>{% if provider.isDefault %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ provider.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('provider_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('provider_edit', { 'id': provider.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "MarketingBundle:provider:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/provider/show.html.twig");
    }
}
