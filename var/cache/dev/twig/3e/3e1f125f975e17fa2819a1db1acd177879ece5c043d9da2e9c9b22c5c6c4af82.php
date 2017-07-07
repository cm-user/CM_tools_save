<?php

/* @FaultyProduct/mail/report.html.twig */
class __TwigTemplate_ea0b01286a6142f3359e056b1d87d891074b7698a257fc5c1bc13b80f22d107a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55e8740b34eda9b138591b7fefaf5067851756a4e6ecc0b3325ef66bf5e8c015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e8740b34eda9b138591b7fefaf5067851756a4e6ecc0b3325ef66bf5e8c015->enter($__internal_55e8740b34eda9b138591b7fefaf5067851756a4e6ecc0b3325ef66bf5e8c015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/mail/report.html.twig"));

        $__internal_764e3fb0903123bff29dd499f77caa3f19291c74f91f88820801feb6c1ae3638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764e3fb0903123bff29dd499f77caa3f19291c74f91f88820801feb6c1ae3638->enter($__internal_764e3fb0903123bff29dd499f77caa3f19291c74f91f88820801feb6c1ae3638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/mail/report.html.twig"));

        // line 1
        echo "<h3>Bonjour Sylvain,</h3>

<p>Voici la liste du jour des produits à déclarer :</p>

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["faulties"]) ? $context["faulties"] : $this->getContext($context, "faulties")));
        foreach ($context['_seq'] as $context["_key"] => $context["faulty"]) {
            // line 6
            echo "    - <a href=\"http://tools.cadeau-maestro.com/faulty/faulty/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["faulty"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["faulty"], "product", array()), "name", array()), "html", null, true);
            echo "</a><br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faulty'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "<br/><br/>
C'est tout pour aujourd'hui !<br/>
Merci :)";
        
        $__internal_55e8740b34eda9b138591b7fefaf5067851756a4e6ecc0b3325ef66bf5e8c015->leave($__internal_55e8740b34eda9b138591b7fefaf5067851756a4e6ecc0b3325ef66bf5e8c015_prof);

        
        $__internal_764e3fb0903123bff29dd499f77caa3f19291c74f91f88820801feb6c1ae3638->leave($__internal_764e3fb0903123bff29dd499f77caa3f19291c74f91f88820801feb6c1ae3638_prof);

    }

    public function getTemplateName()
    {
        return "@FaultyProduct/mail/report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Bonjour Sylvain,</h3>

<p>Voici la liste du jour des produits à déclarer :</p>

{% for faulty in faulties %}
    - <a href=\"http://tools.cadeau-maestro.com/faulty/faulty/{{ faulty.id }}\">{{ faulty.product.name }}</a><br/>
{% endfor %}
<br/><br/>
C'est tout pour aujourd'hui !<br/>
Merci :)", "@FaultyProduct/mail/report.html.twig", "/home/cadeau-maestro/tools/src/FaultyProductBundle/Resources/views/mail/report.html.twig");
    }
}
