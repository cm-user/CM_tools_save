<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_15b4dcea755ca1300c62469855ac16001629db241890beab1c6f60f480132e7c extends Twig_Template
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
        $__internal_2a56309fc23e2d75c157073e6a2c404e9190053b078319c28fcbacef814f3d9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a56309fc23e2d75c157073e6a2c404e9190053b078319c28fcbacef814f3d9a->enter($__internal_2a56309fc23e2d75c157073e6a2c404e9190053b078319c28fcbacef814f3d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        $__internal_de24c479fda8dd6d773da7476f61983932b5de02119a880ad81e1f57819b8cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de24c479fda8dd6d773da7476f61983932b5de02119a880ad81e1f57819b8cf7->enter($__internal_de24c479fda8dd6d773da7476f61983932b5de02119a880ad81e1f57819b8cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_2a56309fc23e2d75c157073e6a2c404e9190053b078319c28fcbacef814f3d9a->leave($__internal_2a56309fc23e2d75c157073e6a2c404e9190053b078319c28fcbacef814f3d9a_prof);

        
        $__internal_de24c479fda8dd6d773da7476f61983932b5de02119a880ad81e1f57819b8cf7->leave($__internal_de24c479fda8dd6d773da7476f61983932b5de02119a880ad81e1f57819b8cf7_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "@KnpPaginator/Pagination/sortable_link.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\sortable_link.html.twig");
    }
}
