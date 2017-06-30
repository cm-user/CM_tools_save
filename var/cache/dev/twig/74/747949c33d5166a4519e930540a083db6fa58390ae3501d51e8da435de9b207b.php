<?php

/* @Marketing/newsletterheader/show.html.twig */
class __TwigTemplate_a55f9e25831777f0b9e8c42dd28df734eb92e1eacaf850b493d2c448a7249a38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterheader/show.html.twig", 1);
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
        $__internal_e279437e13388edcb49e1cac999530b740aef9b6c0da98e165a761ea0883b5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e279437e13388edcb49e1cac999530b740aef9b6c0da98e165a761ea0883b5ad->enter($__internal_e279437e13388edcb49e1cac999530b740aef9b6c0da98e165a761ea0883b5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterheader/show.html.twig"));

        $__internal_f5e7496ad8261865f3eef2c29f6492363651321925d56c86e0407b706cf5ccf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e7496ad8261865f3eef2c29f6492363651321925d56c86e0407b706cf5ccf9->enter($__internal_f5e7496ad8261865f3eef2c29f6492363651321925d56c86e0407b706cf5ccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterheader/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e279437e13388edcb49e1cac999530b740aef9b6c0da98e165a761ea0883b5ad->leave($__internal_e279437e13388edcb49e1cac999530b740aef9b6c0da98e165a761ea0883b5ad_prof);

        
        $__internal_f5e7496ad8261865f3eef2c29f6492363651321925d56c86e0407b706cf5ccf9->leave($__internal_f5e7496ad8261865f3eef2c29f6492363651321925d56c86e0407b706cf5ccf9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaa5e0b73d4fbdede03196b5d655775a17349f919e43bd397d5859595c1d8ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa5e0b73d4fbdede03196b5d655775a17349f919e43bd397d5859595c1d8ed4->enter($__internal_aaa5e0b73d4fbdede03196b5d655775a17349f919e43bd397d5859595c1d8ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_745935f3a1c450c0392c2a78aafd90ed3dfb6e34e083008bf3e1a5b9e012a54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745935f3a1c450c0392c2a78aafd90ed3dfb6e34e083008bf3e1a5b9e012a54a->enter($__internal_745935f3a1c450c0392c2a78aafd90ed3dfb6e34e083008bf3e1a5b9e012a54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterHeader</h1>

    <table>
        <tbody>
            <tr>
                <th>Texttop</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "textTop", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Textintro</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "textIntro", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Textdescription</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "textDescription", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Picture</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "picture", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "link", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterheader_edit", array("id" => $this->getAttribute(($context["newsletterHeader"] ?? $this->getContext($context, "newsletterHeader")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_745935f3a1c450c0392c2a78aafd90ed3dfb6e34e083008bf3e1a5b9e012a54a->leave($__internal_745935f3a1c450c0392c2a78aafd90ed3dfb6e34e083008bf3e1a5b9e012a54a_prof);

        
        $__internal_aaa5e0b73d4fbdede03196b5d655775a17349f919e43bd397d5859595c1d8ed4->leave($__internal_aaa5e0b73d4fbdede03196b5d655775a17349f919e43bd397d5859595c1d8ed4_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterheader/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  114 => 43,  108 => 40,  102 => 37,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>NewsletterHeader</h1>

    <table>
        <tbody>
            <tr>
                <th>Texttop</th>
                <td>{{ newsletterHeader.textTop }}</td>
            </tr>
            <tr>
                <th>Textintro</th>
                <td>{{ newsletterHeader.textIntro }}</td>
            </tr>
            <tr>
                <th>Textdescription</th>
                <td>{{ newsletterHeader.textDescription }}</td>
            </tr>
            <tr>
                <th>Picture</th>
                <td>{{ newsletterHeader.picture }}</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>{{ newsletterHeader.link }}</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>{{ newsletterHeader.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('newsletterheader_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('newsletterheader_edit', { 'id': newsletterHeader.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterheader/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterheader\\show.html.twig");
    }
}
