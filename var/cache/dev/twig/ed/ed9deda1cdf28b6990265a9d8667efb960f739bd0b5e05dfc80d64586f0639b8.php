<?php

/* @Marketing/newsletterblocktype/edit.html.twig */
class __TwigTemplate_9054caaca1c8dd6a0fd5fc1e2564b4627425a70d3c2a6b1f8fb3a98e17654a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Marketing/newsletterblocktype/edit.html.twig", 1);
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
        $__internal_d2f7ee0039fa876cc8db0c1f215d230ec3b13a700693ea1c2838a8a1b62620f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f7ee0039fa876cc8db0c1f215d230ec3b13a700693ea1c2838a8a1b62620f7->enter($__internal_d2f7ee0039fa876cc8db0c1f215d230ec3b13a700693ea1c2838a8a1b62620f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblocktype/edit.html.twig"));

        $__internal_f5ea3ea4288ac32950acba1619f66c02a891c95a9f774696f3c91f82bf5c362e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ea3ea4288ac32950acba1619f66c02a891c95a9f774696f3c91f82bf5c362e->enter($__internal_f5ea3ea4288ac32950acba1619f66c02a891c95a9f774696f3c91f82bf5c362e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/newsletterblocktype/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f7ee0039fa876cc8db0c1f215d230ec3b13a700693ea1c2838a8a1b62620f7->leave($__internal_d2f7ee0039fa876cc8db0c1f215d230ec3b13a700693ea1c2838a8a1b62620f7_prof);

        
        $__internal_f5ea3ea4288ac32950acba1619f66c02a891c95a9f774696f3c91f82bf5c362e->leave($__internal_f5ea3ea4288ac32950acba1619f66c02a891c95a9f774696f3c91f82bf5c362e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3328f14c6557f9d72c0ba720867fc7eaf8eedb501047088055c66eb8ed62ac08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3328f14c6557f9d72c0ba720867fc7eaf8eedb501047088055c66eb8ed62ac08->enter($__internal_3328f14c6557f9d72c0ba720867fc7eaf8eedb501047088055c66eb8ed62ac08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_251db22c551e3c41e2abd249e758c2b977db1ccc1706f9c257d222bcaefffbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251db22c551e3c41e2abd249e758c2b977db1ccc1706f9c257d222bcaefffbb2->enter($__internal_251db22c551e3c41e2abd249e758c2b977db1ccc1706f9c257d222bcaefffbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>NewsletterBlockType edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newsletterblocktype_index");
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
        
        $__internal_251db22c551e3c41e2abd249e758c2b977db1ccc1706f9c257d222bcaefffbb2->leave($__internal_251db22c551e3c41e2abd249e758c2b977db1ccc1706f9c257d222bcaefffbb2_prof);

        
        $__internal_3328f14c6557f9d72c0ba720867fc7eaf8eedb501047088055c66eb8ed62ac08->leave($__internal_3328f14c6557f9d72c0ba720867fc7eaf8eedb501047088055c66eb8ed62ac08_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/newsletterblocktype/edit.html.twig";
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
    <h1>NewsletterBlockType edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('newsletterblocktype_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Marketing/newsletterblocktype/edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\newsletterblocktype\\edit.html.twig");
    }
}
