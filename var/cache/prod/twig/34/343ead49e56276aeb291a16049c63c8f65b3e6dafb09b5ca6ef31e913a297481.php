<?php

/* FaultyProductBundle:mail:report.html.twig */
class __TwigTemplate_4ddb02796e7d1ea696b577ef49810009a75406ae64adbccc3b272652ca079586 extends Twig_Template
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
        // line 1
        echo "<h3>Bonjour Sylvain,</h3>

<p>Voici la liste du jour des produits à déclarer :</p>

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faulties"] ?? null));
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
        return array (  40 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FaultyProductBundle:mail:report.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/mail/report.html.twig");
    }
}
