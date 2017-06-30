<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_28dfac9d40b0d019b90aa3ab52f432b677f46946b84710d2b04d66c9d46e983f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d4f9da14b776904284dd0304adde0dce89603d43be4b7081a3822b8bc287a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4f9da14b776904284dd0304adde0dce89603d43be4b7081a3822b8bc287a49->enter($__internal_3d4f9da14b776904284dd0304adde0dce89603d43be4b7081a3822b8bc287a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d39b6601b7c90c35b12801b770c3e2ead1a524d677276444a6c357da77793dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39b6601b7c90c35b12801b770c3e2ead1a524d677276444a6c357da77793dfc->enter($__internal_d39b6601b7c90c35b12801b770c3e2ead1a524d677276444a6c357da77793dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4f9da14b776904284dd0304adde0dce89603d43be4b7081a3822b8bc287a49->leave($__internal_3d4f9da14b776904284dd0304adde0dce89603d43be4b7081a3822b8bc287a49_prof);

        
        $__internal_d39b6601b7c90c35b12801b770c3e2ead1a524d677276444a6c357da77793dfc->leave($__internal_d39b6601b7c90c35b12801b770c3e2ead1a524d677276444a6c357da77793dfc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b215eb00cc655a2ed0b3be4a0fe7dae0de50ccac3e61f4248f71e95605d663b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b215eb00cc655a2ed0b3be4a0fe7dae0de50ccac3e61f4248f71e95605d663b->enter($__internal_4b215eb00cc655a2ed0b3be4a0fe7dae0de50ccac3e61f4248f71e95605d663b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e37058adc115967252f43927d51304a9ba340449700983d2f514bdba1063c343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37058adc115967252f43927d51304a9ba340449700983d2f514bdba1063c343->enter($__internal_e37058adc115967252f43927d51304a9ba340449700983d2f514bdba1063c343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e37058adc115967252f43927d51304a9ba340449700983d2f514bdba1063c343->leave($__internal_e37058adc115967252f43927d51304a9ba340449700983d2f514bdba1063c343_prof);

        
        $__internal_4b215eb00cc655a2ed0b3be4a0fe7dae0de50ccac3e61f4248f71e95605d663b->leave($__internal_4b215eb00cc655a2ed0b3be4a0fe7dae0de50ccac3e61f4248f71e95605d663b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_60d9dc41a787481e9089bb9716255d3921aef29ddeb4335f8b8a91afc00dc62c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d9dc41a787481e9089bb9716255d3921aef29ddeb4335f8b8a91afc00dc62c->enter($__internal_60d9dc41a787481e9089bb9716255d3921aef29ddeb4335f8b8a91afc00dc62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1b3eb1fb375dda5d3b8bbccc764c502ad2e70d923ae9f6c1ca06e1289ccba57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3eb1fb375dda5d3b8bbccc764c502ad2e70d923ae9f6c1ca06e1289ccba57f->enter($__internal_1b3eb1fb375dda5d3b8bbccc764c502ad2e70d923ae9f6c1ca06e1289ccba57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1b3eb1fb375dda5d3b8bbccc764c502ad2e70d923ae9f6c1ca06e1289ccba57f->leave($__internal_1b3eb1fb375dda5d3b8bbccc764c502ad2e70d923ae9f6c1ca06e1289ccba57f_prof);

        
        $__internal_60d9dc41a787481e9089bb9716255d3921aef29ddeb4335f8b8a91afc00dc62c->leave($__internal_60d9dc41a787481e9089bb9716255d3921aef29ddeb4335f8b8a91afc00dc62c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c2a4a27a14e53020216d3bdbbbcbbdfeaa971c984fe9cc324fecc8e82397fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2a4a27a14e53020216d3bdbbbcbbdfeaa971c984fe9cc324fecc8e82397fc5->enter($__internal_4c2a4a27a14e53020216d3bdbbbcbbdfeaa971c984fe9cc324fecc8e82397fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_71a718649b30256994eb6d1455625d1411696ed486aef07f4386aa0e1d9e9c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a718649b30256994eb6d1455625d1411696ed486aef07f4386aa0e1d9e9c89->enter($__internal_71a718649b30256994eb6d1455625d1411696ed486aef07f4386aa0e1d9e9c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_71a718649b30256994eb6d1455625d1411696ed486aef07f4386aa0e1d9e9c89->leave($__internal_71a718649b30256994eb6d1455625d1411696ed486aef07f4386aa0e1d9e9c89_prof);

        
        $__internal_4c2a4a27a14e53020216d3bdbbbcbbdfeaa971c984fe9cc324fecc8e82397fc5->leave($__internal_4c2a4a27a14e53020216d3bdbbbcbbdfeaa971c984fe9cc324fecc8e82397fc5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
