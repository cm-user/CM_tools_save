<?php

/* @User/Security/validation.html.twig */
class __TwigTemplate_92d3f060383ff78d3f8980fd3e41c617105c71ded57dcf2b56a1101b974b2174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@User/Security/validation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        echo "Login page";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\">
            <h1>Validation de compte</h1>
            ";
        // line 8
        if (($context["validation_account"] ?? null)) {
            // line 9
            echo "                <p>Votre compté à été validé avec succès</p>
            ";
        } else {
            // line 11
            echo "                <p>Une erreur est survenu, la validation de votre compte à échoué.</p>
            ";
        }
        // line 13
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@User/Security/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 11,  52 => 9,  50 => 8,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/Security/validation.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle\\Resources\\views\\Security\\validation.html.twig");
    }
}
