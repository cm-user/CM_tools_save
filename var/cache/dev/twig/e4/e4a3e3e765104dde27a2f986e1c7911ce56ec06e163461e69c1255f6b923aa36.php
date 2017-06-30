<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_af9676e3c7c0cd64ec8e274d9d86cfe2cecb352383ead1eda40dfd4394d6d9ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Security:login.html.twig", 1);
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
        $__internal_b8c36519c6e1391bbbfa27f5965d82a299b75261289bea49b74ed23ba104a317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c36519c6e1391bbbfa27f5965d82a299b75261289bea49b74ed23ba104a317->enter($__internal_b8c36519c6e1391bbbfa27f5965d82a299b75261289bea49b74ed23ba104a317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_256592a195f3957e490fcb1d5b525092707f7a185e2a3e1cdcfaec8296529c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256592a195f3957e490fcb1d5b525092707f7a185e2a3e1cdcfaec8296529c56->enter($__internal_256592a195f3957e490fcb1d5b525092707f7a185e2a3e1cdcfaec8296529c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8c36519c6e1391bbbfa27f5965d82a299b75261289bea49b74ed23ba104a317->leave($__internal_b8c36519c6e1391bbbfa27f5965d82a299b75261289bea49b74ed23ba104a317_prof);

        
        $__internal_256592a195f3957e490fcb1d5b525092707f7a185e2a3e1cdcfaec8296529c56->leave($__internal_256592a195f3957e490fcb1d5b525092707f7a185e2a3e1cdcfaec8296529c56_prof);

    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        $__internal_cd97e4693d99f809646174b62e367ad20b166b0fa61522101dca32c701523e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd97e4693d99f809646174b62e367ad20b166b0fa61522101dca32c701523e00->enter($__internal_cd97e4693d99f809646174b62e367ad20b166b0fa61522101dca32c701523e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_a19f5616e0148137c0c26f5438fdb02e7f2f50acaf9b81322c4e486d3b55c68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19f5616e0148137c0c26f5438fdb02e7f2f50acaf9b81322c4e486d3b55c68b->enter($__internal_a19f5616e0148137c0c26f5438fdb02e7f2f50acaf9b81322c4e486d3b55c68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_title"));

        echo "Login";
        
        $__internal_a19f5616e0148137c0c26f5438fdb02e7f2f50acaf9b81322c4e486d3b55c68b->leave($__internal_a19f5616e0148137c0c26f5438fdb02e7f2f50acaf9b81322c4e486d3b55c68b_prof);

        
        $__internal_cd97e4693d99f809646174b62e367ad20b166b0fa61522101dca32c701523e00->leave($__internal_cd97e4693d99f809646174b62e367ad20b166b0fa61522101dca32c701523e00_prof);

    }

    // line 3
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_33f36e2736769d22a5d16a7f5af7ff17b404e4e31ac559fc4555f9ff0813afd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f36e2736769d22a5d16a7f5af7ff17b404e4e31ac559fc4555f9ff0813afd4->enter($__internal_33f36e2736769d22a5d16a7f5af7ff17b404e4e31ac559fc4555f9ff0813afd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        $__internal_5ba377d945ceec4b1aafcfd5c1353267a9841d6c384833327c87e0e1b5c8e625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba377d945ceec4b1aafcfd5c1353267a9841d6c384833327c87e0e1b5c8e625->enter($__internal_5ba377d945ceec4b1aafcfd5c1353267a9841d6c384833327c87e0e1b5c8e625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo "Login page";
        
        $__internal_5ba377d945ceec4b1aafcfd5c1353267a9841d6c384833327c87e0e1b5c8e625->leave($__internal_5ba377d945ceec4b1aafcfd5c1353267a9841d6c384833327c87e0e1b5c8e625_prof);

        
        $__internal_33f36e2736769d22a5d16a7f5af7ff17b404e4e31ac559fc4555f9ff0813afd4->leave($__internal_33f36e2736769d22a5d16a7f5af7ff17b404e4e31ac559fc4555f9ff0813afd4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_57274c41dc44c1a58c259e4c9b2a5a6a126a8162c5418addb26ee78111628ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57274c41dc44c1a58c259e4c9b2a5a6a126a8162c5418addb26ee78111628ef1->enter($__internal_57274c41dc44c1a58c259e4c9b2a5a6a126a8162c5418addb26ee78111628ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb439a13a307700417f3244d7dcbb703fdf9c587d6379e840c3057f855caab63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb439a13a307700417f3244d7dcbb703fdf9c587d6379e840c3057f855caab63->enter($__internal_fb439a13a307700417f3244d7dcbb703fdf9c587d6379e840c3057f855caab63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
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
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 28
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 30
        echo "
";
        
        $__internal_fb439a13a307700417f3244d7dcbb703fdf9c587d6379e840c3057f855caab63->leave($__internal_fb439a13a307700417f3244d7dcbb703fdf9c587d6379e840c3057f855caab63_prof);

        
        $__internal_57274c41dc44c1a58c259e4c9b2a5a6a126a8162c5418addb26ee78111628ef1->leave($__internal_57274c41dc44c1a58c259e4c9b2a5a6a126a8162c5418addb26ee78111628ef1_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  121 => 28,  119 => 27,  100 => 13,  92 => 8,  87 => 5,  78 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block meta_title %}Login{% endblock %}
{% block meta_description %}Login page{% endblock %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-5 col-sm-5 col-md-5 col-lg-5\">
            <h1>Connexion</h1>
            <form action=\"{{ path('user_login') }}\" method=\"post\">
                <div class=\"form-group\">
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input class=\"form-control\" type=\"text\" placeholder=\"Pseudo\" id=\"username\" name=\"_username\"
                               value=\"{% if last_username is defined %}{{ last_username }}{% endif %}\"/>
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

    {% if error %}
        <div>{{ error.message }}</div>
    {% endif %}

{% endblock %}", "UserBundle:Security:login.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
