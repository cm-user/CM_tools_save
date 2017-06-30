<?php

/* @Marketing/modelnewsletter/edit.html.twig */
class __TwigTemplate_468ceada3da1413d95f5e3d4a572d0e9d7e4f4902e9306b1df2f228011ad4047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/modelnewsletter/edit.html.twig", 1);
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
        $__internal_e884b2f80c894d8a2fcc383a2a5939fad14c4b0909efc336a7f7d0aa208acd1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e884b2f80c894d8a2fcc383a2a5939fad14c4b0909efc336a7f7d0aa208acd1e->enter($__internal_e884b2f80c894d8a2fcc383a2a5939fad14c4b0909efc336a7f7d0aa208acd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/modelnewsletter/edit.html.twig"));

        $__internal_ac8295dd3c86d05b92537d8f359b43945a7216b4ddd9f6c2441026725d0a76d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8295dd3c86d05b92537d8f359b43945a7216b4ddd9f6c2441026725d0a76d4->enter($__internal_ac8295dd3c86d05b92537d8f359b43945a7216b4ddd9f6c2441026725d0a76d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/modelnewsletter/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e884b2f80c894d8a2fcc383a2a5939fad14c4b0909efc336a7f7d0aa208acd1e->leave($__internal_e884b2f80c894d8a2fcc383a2a5939fad14c4b0909efc336a7f7d0aa208acd1e_prof);

        
        $__internal_ac8295dd3c86d05b92537d8f359b43945a7216b4ddd9f6c2441026725d0a76d4->leave($__internal_ac8295dd3c86d05b92537d8f359b43945a7216b4ddd9f6c2441026725d0a76d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10f83c2391bf373311c90ee9ef8cc897066a1d0fe00fc92b39329a3339f1ff98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f83c2391bf373311c90ee9ef8cc897066a1d0fe00fc92b39329a3339f1ff98->enter($__internal_10f83c2391bf373311c90ee9ef8cc897066a1d0fe00fc92b39329a3339f1ff98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fa88053e574424bf1c8e10e008d6d975b13a0887c00fb8c7f7af90e462adfa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa88053e574424bf1c8e10e008d6d975b13a0887c00fb8c7f7af90e462adfa0->enter($__internal_4fa88053e574424bf1c8e10e008d6d975b13a0887c00fb8c7f7af90e462adfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ModelNewsletter edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modelnewsletter_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4fa88053e574424bf1c8e10e008d6d975b13a0887c00fb8c7f7af90e462adfa0->leave($__internal_4fa88053e574424bf1c8e10e008d6d975b13a0887c00fb8c7f7af90e462adfa0_prof);

        
        $__internal_10f83c2391bf373311c90ee9ef8cc897066a1d0fe00fc92b39329a3339f1ff98->leave($__internal_10f83c2391bf373311c90ee9ef8cc897066a1d0fe00fc92b39329a3339f1ff98_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/modelnewsletter/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>ModelNewsletter edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('modelnewsletter_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/modelnewsletter/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\modelnewsletter\\edit.html.twig");
    }
}
