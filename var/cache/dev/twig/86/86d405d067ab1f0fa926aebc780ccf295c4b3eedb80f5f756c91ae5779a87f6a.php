<?php

/* @FaultyProduct/mail/report.html.twig */
class __TwigTemplate_7f7e2fb8f15537a0441cc2c7a8abe0d1861ea44b77ab6151f280d87baa299b1e extends Twig_Template
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
        $__internal_affc8938c805c8d1c03365505ea005478bbeba230b4be0c693f2afa2b11677f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_affc8938c805c8d1c03365505ea005478bbeba230b4be0c693f2afa2b11677f4->enter($__internal_affc8938c805c8d1c03365505ea005478bbeba230b4be0c693f2afa2b11677f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/mail/report.html.twig"));

        $__internal_7e077e8155b50eac7b2f577ab05c65f6a40ab42a76dd8b1d741e55b91bdd2f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e077e8155b50eac7b2f577ab05c65f6a40ab42a76dd8b1d741e55b91bdd2f51->enter($__internal_7e077e8155b50eac7b2f577ab05c65f6a40ab42a76dd8b1d741e55b91bdd2f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FaultyProduct/mail/report.html.twig"));

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
        
        $__internal_affc8938c805c8d1c03365505ea005478bbeba230b4be0c693f2afa2b11677f4->leave($__internal_affc8938c805c8d1c03365505ea005478bbeba230b4be0c693f2afa2b11677f4_prof);

        
        $__internal_7e077e8155b50eac7b2f577ab05c65f6a40ab42a76dd8b1d741e55b91bdd2f51->leave($__internal_7e077e8155b50eac7b2f577ab05c65f6a40ab42a76dd8b1d741e55b91bdd2f51_prof);

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
Merci :)", "@FaultyProduct/mail/report.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle\\Resources\\views\\mail\\report.html.twig");
    }
}
