<?php

/* MailSignatureBundle:ImageCommande:index.html.twig */
class __TwigTemplate_9bb9e3e71ab6fb99658b9c3382bffedc1220976a781302c956b010ae2186fba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MailSignatureBundle:ImageCommande:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <h1>Modification image de fin de commande</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "


    <p>Url en cours : ";
        // line 10
        echo twig_escape_filter($this->env, ($context["url_actuelle"] ?? null), "html", null, true);
        echo "</p>
    <p>Image en cours : <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["img_actuelle"] ?? null), "html", null, true);
        echo "\" /></p>

";
    }

    public function getTemplateName()
    {
        return "MailSignatureBundle:ImageCommande:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 10,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MailSignatureBundle:ImageCommande:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MailSignatureBundle/Resources/views/ImageCommande/index.html.twig");
    }
}
