<?php

/* FaultyProductBundle:faultymail:show.html.twig */
class __TwigTemplate_b13019b29d6f24cc78ac126f57113035d501fc65a5dc0268747850772a73c2d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FaultyProductBundle:faultymail:show.html.twig", 1);
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
        $__internal_644ac48f73612736c57437cfab1fc3db0e241053885550f7540be90de7467160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644ac48f73612736c57437cfab1fc3db0e241053885550f7540be90de7467160->enter($__internal_644ac48f73612736c57437cfab1fc3db0e241053885550f7540be90de7467160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faultymail:show.html.twig"));

        $__internal_fdff438164e28ca15d0ce80e1b0b91dc7e9dccf913fb93dfcdb57d940e78b2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdff438164e28ca15d0ce80e1b0b91dc7e9dccf913fb93dfcdb57d940e78b2ff->enter($__internal_fdff438164e28ca15d0ce80e1b0b91dc7e9dccf913fb93dfcdb57d940e78b2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faultymail:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644ac48f73612736c57437cfab1fc3db0e241053885550f7540be90de7467160->leave($__internal_644ac48f73612736c57437cfab1fc3db0e241053885550f7540be90de7467160_prof);

        
        $__internal_fdff438164e28ca15d0ce80e1b0b91dc7e9dccf913fb93dfcdb57d940e78b2ff->leave($__internal_fdff438164e28ca15d0ce80e1b0b91dc7e9dccf913fb93dfcdb57d940e78b2ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b9e817192eefd484879eccd659e35cce5e6aadb1c5cc221510df44d4662ab44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9e817192eefd484879eccd659e35cce5e6aadb1c5cc221510df44d4662ab44->enter($__internal_6b9e817192eefd484879eccd659e35cce5e6aadb1c5cc221510df44d4662ab44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4cdb45fb03e2ee65588f9c8d2f4ad9af245edacf92534ac3c341e0f0e9ccedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cdb45fb03e2ee65588f9c8d2f4ad9af245edacf92534ac3c341e0f0e9ccedb->enter($__internal_d4cdb45fb03e2ee65588f9c8d2f4ad9af245edacf92534ac3c341e0f0e9ccedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d4cdb45fb03e2ee65588f9c8d2f4ad9af245edacf92534ac3c341e0f0e9ccedb->leave($__internal_d4cdb45fb03e2ee65588f9c8d2f4ad9af245edacf92534ac3c341e0f0e9ccedb_prof);

        
        $__internal_6b9e817192eefd484879eccd659e35cce5e6aadb1c5cc221510df44d4662ab44->leave($__internal_6b9e817192eefd484879eccd659e35cce5e6aadb1c5cc221510df44d4662ab44_prof);

    }

    public function getTemplateName()
    {
        return "FaultyProductBundle:faultymail:show.html.twig";
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
", "FaultyProductBundle:faultymail:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/faultymail/show.html.twig");
    }
}
