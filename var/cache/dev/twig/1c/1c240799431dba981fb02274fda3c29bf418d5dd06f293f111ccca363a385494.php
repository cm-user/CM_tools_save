<?php

/* @FaultyProduct/faultymail/show.html.twig */
class __TwigTemplate_3db9b4de574e0c7b2a31760d1d7d194c9b4e23a13085f0d5913870abced46e04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FaultyProduct/faultymail/show.html.twig", 1);
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
        $__internal_dfd5343ab8ea433a1738a385ad58bb2c10350e6d22c35d47994357ab80496988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd5343ab8ea433a1738a385ad58bb2c10350e6d22c35d47994357ab80496988->enter($__internal_dfd5343ab8ea433a1738a385ad58bb2c10350e6d22c35d47994357ab80496988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faultymail/show.html.twig"));

        $__internal_01b5e9751ac2d31b8f38669c2764820d956ae62c382fa8b1aac0807d195ef24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b5e9751ac2d31b8f38669c2764820d956ae62c382fa8b1aac0807d195ef24d->enter($__internal_01b5e9751ac2d31b8f38669c2764820d956ae62c382fa8b1aac0807d195ef24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faultymail/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd5343ab8ea433a1738a385ad58bb2c10350e6d22c35d47994357ab80496988->leave($__internal_dfd5343ab8ea433a1738a385ad58bb2c10350e6d22c35d47994357ab80496988_prof);

        
        $__internal_01b5e9751ac2d31b8f38669c2764820d956ae62c382fa8b1aac0807d195ef24d->leave($__internal_01b5e9751ac2d31b8f38669c2764820d956ae62c382fa8b1aac0807d195ef24d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c3a1aac4a753606b281f10135355545d84fd05ffe03f99b70130c7e366d56ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3a1aac4a753606b281f10135355545d84fd05ffe03f99b70130c7e366d56ff->enter($__internal_1c3a1aac4a753606b281f10135355545d84fd05ffe03f99b70130c7e366d56ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f73184052953e8719692387f87f87f87c386ef7acbaded6a2c62aef7ab945b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73184052953e8719692387f87f87f87c386ef7acbaded6a2c62aef7ab945b8d->enter($__internal_f73184052953e8719692387f87f87f87c386ef7acbaded6a2c62aef7ab945b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Faultymail</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faultyMail"] ?? $this->getContext($context, "faultyMail")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["faultyMail"] ?? $this->getContext($context, "faultyMail")), "mail", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <p>
        <a class=\"btn btn-default\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faultymail_index");
        echo "\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faultymail_edit", array("id" => $this->getAttribute(($context["faultyMail"] ?? $this->getContext($context, "faultyMail")), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>

";
        
        $__internal_f73184052953e8719692387f87f87f87c386ef7acbaded6a2c62aef7ab945b8d->leave($__internal_f73184052953e8719692387f87f87f87c386ef7acbaded6a2c62aef7ab945b8d_prof);

        
        $__internal_1c3a1aac4a753606b281f10135355545d84fd05ffe03f99b70130c7e366d56ff->leave($__internal_1c3a1aac4a753606b281f10135355545d84fd05ffe03f99b70130c7e366d56ff_prof);

    }

    public function getTemplateName()
    {
        return "@FaultyProduct/faultymail/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  87 => 28,  80 => 24,  73 => 20,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Faultymail</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ faultyMail.id }}</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>{{ faultyMail.mail }}</td>
            </tr>
        </tbody>
    </table>

    <p>
        <a class=\"btn btn-default\" href=\"{{ path('faultymail_index') }}\">
            Retour à la liste
        </a>
        -
        <a class=\"btn btn-warning\" href=\"{{ path('faultymail_edit', { 'id': faultyMail.id }) }}\">
            <span class=\"glyphicon glyphicon-pencil\"></span>
            Modifier
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
    </p>

{% endblock %}
", "@FaultyProduct/faultymail/show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\faultymail\\show.html.twig");
    }
}
