<?php

/* @FaultyProduct/faultymail/index.html.twig */
class __TwigTemplate_dcedebdd0e140f41d09cc5fe50a1b79f34655a6d1d53573770e1179b956ad176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FaultyProduct/faultymail/index.html.twig", 1);
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
        $__internal_d95fcbb3b4c601c1a60bb48e11ec68ccf7b1c256899f586e23ec3dbee2e875a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95fcbb3b4c601c1a60bb48e11ec68ccf7b1c256899f586e23ec3dbee2e875a5->enter($__internal_d95fcbb3b4c601c1a60bb48e11ec68ccf7b1c256899f586e23ec3dbee2e875a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faultymail/index.html.twig"));

        $__internal_f4a789c1b2e8560137490291df710df6f2d4671b9f571f7ea2aa6ede85f78152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a789c1b2e8560137490291df710df6f2d4671b9f571f7ea2aa6ede85f78152->enter($__internal_f4a789c1b2e8560137490291df710df6f2d4671b9f571f7ea2aa6ede85f78152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/faultymail/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95fcbb3b4c601c1a60bb48e11ec68ccf7b1c256899f586e23ec3dbee2e875a5->leave($__internal_d95fcbb3b4c601c1a60bb48e11ec68ccf7b1c256899f586e23ec3dbee2e875a5_prof);

        
        $__internal_f4a789c1b2e8560137490291df710df6f2d4671b9f571f7ea2aa6ede85f78152->leave($__internal_f4a789c1b2e8560137490291df710df6f2d4671b9f571f7ea2aa6ede85f78152_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ba3c493f79e464303ee0e31c8028767ae32bf2daa03a8431ee4cd82405464bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba3c493f79e464303ee0e31c8028767ae32bf2daa03a8431ee4cd82405464bb->enter($__internal_3ba3c493f79e464303ee0e31c8028767ae32bf2daa03a8431ee4cd82405464bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dec5f05be638405cdd18e654dc4c9a2c8f1132fb85d3adcb529dd38ddc8f2eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec5f05be638405cdd18e654dc4c9a2c8f1132fb85d3adcb529dd38ddc8f2eed->enter($__internal_dec5f05be638405cdd18e654dc4c9a2c8f1132fb85d3adcb529dd38ddc8f2eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des mails</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Mail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faultyMails"] ?? $this->getContext($context, "faultyMails")));
        foreach ($context['_seq'] as $context["_key"] => $context["faultyMail"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faultymail_show", array("id" => $this->getAttribute($context["faultyMail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["faultyMail"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["faultyMail"], "mail", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faultymail_show", array("id" => $this->getAttribute($context["faultyMail"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faultymail_edit", array("id" => $this->getAttribute($context["faultyMail"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faultyMail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faultymail_new");
        echo "\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter un nouveau mail
    </a>

";
        
        $__internal_dec5f05be638405cdd18e654dc4c9a2c8f1132fb85d3adcb529dd38ddc8f2eed->leave($__internal_dec5f05be638405cdd18e654dc4c9a2c8f1132fb85d3adcb529dd38ddc8f2eed_prof);

        
        $__internal_3ba3c493f79e464303ee0e31c8028767ae32bf2daa03a8431ee4cd82405464bb->leave($__internal_3ba3c493f79e464303ee0e31c8028767ae32bf2daa03a8431ee4cd82405464bb_prof);

    }

    public function getTemplateName()
    {
        return "@FaultyProduct/faultymail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  101 => 32,  88 => 25,  80 => 20,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Liste des mails</h1>

    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Mail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for faultyMail in faultyMails %}
            <tr>
                <td><a href=\"{{ path('faultymail_show', { 'id': faultyMail.id }) }}\">{{ faultyMail.id }}</a></td>
                <td>{{ faultyMail.mail }}</td>
                <td>
                    <a class=\"btn btn-info\" href=\"{{ path('faultymail_show', { 'id': faultyMail.id }) }}\">
                        <span class=\"glyphicon glyphicon-search\"></span>
                        Voir
                    </a>
                    -
                    <a class=\"btn btn-warning\" href=\"{{ path('faultymail_edit', { 'id': faultyMail.id }) }}\">
                        <span class=\"glyphicon glyphicon-pencil\"></span>
                        Modifier
                    </a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"{{ path('faultymail_new') }}\">
        <span class=\"glyphicon glyphicon-plus\"></span>
        Ajouter un nouveau mail
    </a>

{% endblock %}
", "@FaultyProduct/faultymail/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\faultymail\\index.html.twig");
    }
}
