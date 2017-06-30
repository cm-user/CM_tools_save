<?php

/* FaultyProductBundle:mail:report.html.twig */
class __TwigTemplate_bc7a73c995a1b48d1e8c7c1de12dad1729d7b0a5f0f4e0acc0e0afd3e0f924ac extends Twig_Template
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
        $__internal_11ca766fe0f2913e42a666eefbf8ca889c7e6ea468037d6817ad52b44df83133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ca766fe0f2913e42a666eefbf8ca889c7e6ea468037d6817ad52b44df83133->enter($__internal_11ca766fe0f2913e42a666eefbf8ca889c7e6ea468037d6817ad52b44df83133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:mail:report.html.twig"));

        $__internal_23b3f0132cb5ea4404020b6edc8ede921746bce5ec7c488c9e76c81f54c34795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b3f0132cb5ea4404020b6edc8ede921746bce5ec7c488c9e76c81f54c34795->enter($__internal_23b3f0132cb5ea4404020b6edc8ede921746bce5ec7c488c9e76c81f54c34795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:mail:report.html.twig"));

        // line 1
        echo "<h3>Bonjour Sylvain,</h3>

<p>Voici la liste du jour des produits à déclarer :</p>

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faulties"] ?? $this->getContext($context, "faulties")));
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
        
        $__internal_11ca766fe0f2913e42a666eefbf8ca889c7e6ea468037d6817ad52b44df83133->leave($__internal_11ca766fe0f2913e42a666eefbf8ca889c7e6ea468037d6817ad52b44df83133_prof);

        
        $__internal_23b3f0132cb5ea4404020b6edc8ede921746bce5ec7c488c9e76c81f54c34795->leave($__internal_23b3f0132cb5ea4404020b6edc8ede921746bce5ec7c488c9e76c81f54c34795_prof);

    }

    public function getTemplateName()
    {
        return "FaultyProductBundle:mail:report.html.twig";
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
Merci :)", "FaultyProductBundle:mail:report.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/mail/report.html.twig");
    }
}
