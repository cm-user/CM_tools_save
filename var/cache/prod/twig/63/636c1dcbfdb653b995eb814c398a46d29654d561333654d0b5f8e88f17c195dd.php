<?php

/* @User/Security/login.html.twig */
class __TwigTemplate_6f094ca55f56c9222963699b3657a436926cf350c4bad2a449ddda5b4f00670b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@User/Security/login.html.twig", 1);
        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
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
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 3
    public function block_meta_description($context, array $blocks = array())
    {
        echo "Login page";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\">
            <h1>Connexion</h1>
            <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input class=\"form-control\" type=\"text\" placeholder=\"Pseudo\" id=\"username\" name=\"_username\"
                               value=\"";
        // line 13
        if (array_key_exists("last_username", $context)) {
            echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        }
        echo "\"/>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                        <input class=\"form-control\" type=\"password\" placeholder=\"Mot de passe\" id=\"passsword\" name=\"_password\" />
                    </div>
                </div>
                <button type=\"submit\" class=\"btn btn-success btn-block\">Connexion</button>
            </form>
        </div>
    </div>

    ";
        // line 27
        if (($context["error"] ?? null)) {
            // line 28
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "@User/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  79 => 28,  77 => 27,  58 => 13,  50 => 8,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/Security/login.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
