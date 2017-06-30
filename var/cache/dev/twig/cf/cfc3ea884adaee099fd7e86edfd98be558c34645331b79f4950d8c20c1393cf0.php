<?php

/* @MailSignature/ImageCommande/index.html.twig */
class __TwigTemplate_a797f2d682f3a963641820aa5c98c7666f49d82ce49bdc6b6cd0ed310d2ace1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@MailSignature/ImageCommande/index.html.twig", 1);
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
        $__internal_6f119a26a7d253aabeaed81b582a62214c5790db879e8388ce953b492dca5029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f119a26a7d253aabeaed81b582a62214c5790db879e8388ce953b492dca5029->enter($__internal_6f119a26a7d253aabeaed81b582a62214c5790db879e8388ce953b492dca5029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MailSignature/ImageCommande/index.html.twig"));

        $__internal_6218bf7a1f5367aaa52bd95ea765af6794800d5eb878cdfd1c32e21f1840d460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6218bf7a1f5367aaa52bd95ea765af6794800d5eb878cdfd1c32e21f1840d460->enter($__internal_6218bf7a1f5367aaa52bd95ea765af6794800d5eb878cdfd1c32e21f1840d460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MailSignature/ImageCommande/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f119a26a7d253aabeaed81b582a62214c5790db879e8388ce953b492dca5029->leave($__internal_6f119a26a7d253aabeaed81b582a62214c5790db879e8388ce953b492dca5029_prof);

        
        $__internal_6218bf7a1f5367aaa52bd95ea765af6794800d5eb878cdfd1c32e21f1840d460->leave($__internal_6218bf7a1f5367aaa52bd95ea765af6794800d5eb878cdfd1c32e21f1840d460_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eb6498569778e948615e27dac615322eb4ee944ae34290731922ee2b8735811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb6498569778e948615e27dac615322eb4ee944ae34290731922ee2b8735811->enter($__internal_1eb6498569778e948615e27dac615322eb4ee944ae34290731922ee2b8735811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7071b17466a822577c289bdc7090f27bcb726db8a4777cdbad56e6170ffe46bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7071b17466a822577c289bdc7090f27bcb726db8a4777cdbad56e6170ffe46bc->enter($__internal_7071b17466a822577c289bdc7090f27bcb726db8a4777cdbad56e6170ffe46bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>Modification image de fin de commande</h1>

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
        
        $__internal_7071b17466a822577c289bdc7090f27bcb726db8a4777cdbad56e6170ffe46bc->leave($__internal_7071b17466a822577c289bdc7090f27bcb726db8a4777cdbad56e6170ffe46bc_prof);

        
        $__internal_1eb6498569778e948615e27dac615322eb4ee944ae34290731922ee2b8735811->leave($__internal_1eb6498569778e948615e27dac615322eb4ee944ae34290731922ee2b8735811_prof);

    }

    public function getTemplateName()
    {
        return "@MailSignature/ImageCommande/index.html.twig";
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

    <h1>Modification image de fin de commande</h1>

    {{ form(form) }}


    <p>Url en cours : {{ url_actuelle }}</p>
    <p>Image en cours : <img src=\"{{ img_actuelle }}\" /></p>

{% endblock %}", "@MailSignature/ImageCommande/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MailSignatureBundle\\Resources\\views\\ImageCommande\\index.html.twig");
    }
}
