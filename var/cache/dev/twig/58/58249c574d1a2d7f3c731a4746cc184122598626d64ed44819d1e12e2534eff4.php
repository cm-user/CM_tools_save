<?php

/* @MailSignature/MailSignature/index.html.twig */
class __TwigTemplate_e6a56bcea09dda501304393c8431ac58c07cd9368119864c33c70a9a057ae367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@MailSignature/MailSignature/index.html.twig", 1);
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
        $__internal_bf4f891b7ddf45c84c5fc9a2d310fd50b551536c2e65b023c4d758b96fc3de69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4f891b7ddf45c84c5fc9a2d310fd50b551536c2e65b023c4d758b96fc3de69->enter($__internal_bf4f891b7ddf45c84c5fc9a2d310fd50b551536c2e65b023c4d758b96fc3de69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MailSignature/MailSignature/index.html.twig"));

        $__internal_e564c083951ed0b5b4bafc339b964e91f2a83b873cff30048e2ea5dfdf6e311a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e564c083951ed0b5b4bafc339b964e91f2a83b873cff30048e2ea5dfdf6e311a->enter($__internal_e564c083951ed0b5b4bafc339b964e91f2a83b873cff30048e2ea5dfdf6e311a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MailSignature/MailSignature/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf4f891b7ddf45c84c5fc9a2d310fd50b551536c2e65b023c4d758b96fc3de69->leave($__internal_bf4f891b7ddf45c84c5fc9a2d310fd50b551536c2e65b023c4d758b96fc3de69_prof);

        
        $__internal_e564c083951ed0b5b4bafc339b964e91f2a83b873cff30048e2ea5dfdf6e311a->leave($__internal_e564c083951ed0b5b4bafc339b964e91f2a83b873cff30048e2ea5dfdf6e311a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76b245407e924d5d7f0d2fe14f6fdae4ccfc3457db0a9767684c1163fe6a9005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b245407e924d5d7f0d2fe14f6fdae4ccfc3457db0a9767684c1163fe6a9005->enter($__internal_76b245407e924d5d7f0d2fe14f6fdae4ccfc3457db0a9767684c1163fe6a9005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b415cc4017dac4455e02c1a3ada9b83fc16ae80fd60b4ba26584a106d304a5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b415cc4017dac4455e02c1a3ada9b83fc16ae80fd60b4ba26584a106d304a5ed->enter($__internal_b415cc4017dac4455e02c1a3ada9b83fc16ae80fd60b4ba26584a106d304a5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Modification Signature de Mail</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "


    <p>Url en cours : ";
        // line 10
        echo twig_escape_filter($this->env, ($context["url_actuelle"] ?? $this->getContext($context, "url_actuelle")), "html", null, true);
        echo "</p>
    <p>Image en cours : <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["img_actuelle"] ?? $this->getContext($context, "img_actuelle")), "html", null, true);
        echo "\" /></p>

";
        
        $__internal_b415cc4017dac4455e02c1a3ada9b83fc16ae80fd60b4ba26584a106d304a5ed->leave($__internal_b415cc4017dac4455e02c1a3ada9b83fc16ae80fd60b4ba26584a106d304a5ed_prof);

        
        $__internal_76b245407e924d5d7f0d2fe14f6fdae4ccfc3457db0a9767684c1163fe6a9005->leave($__internal_76b245407e924d5d7f0d2fe14f6fdae4ccfc3457db0a9767684c1163fe6a9005_prof);

    }

    public function getTemplateName()
    {
        return "@MailSignature/MailSignature/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

    <h1>Modification Signature de Mail</h1>

    {{ form(form) }}


    <p>Url en cours : {{ url_actuelle }}</p>
    <p>Image en cours : <img src=\"{{ img_actuelle }}\" /></p>

{% endblock %}", "@MailSignature/MailSignature/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MailSignatureBundle\\Resources\\views\\MailSignature\\index.html.twig");
    }
}
