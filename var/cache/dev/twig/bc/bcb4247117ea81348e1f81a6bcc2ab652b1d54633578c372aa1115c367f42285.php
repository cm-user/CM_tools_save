<?php

/* @KnpPaginator/Pagination/twitter_bootstrap_pagination.html.twig */
class __TwigTemplate_54199ad15f733d8231bf4da68c0edfa8d95f9339c787f9d7ab2b41787e16b37c extends Twig_Template
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
        $__internal_574a9f69d862c68d473e822378fac924b09eb8477d0be903b7b7f52229cbab33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574a9f69d862c68d473e822378fac924b09eb8477d0be903b7b7f52229cbab33->enter($__internal_574a9f69d862c68d473e822378fac924b09eb8477d0be903b7b7f52229cbab33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_pagination.html.twig"));

        $__internal_bd275b0b92a9cfe3e82e333ffcf5d2139a9b58cb53a9ca1170a2a4a6e48228ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd275b0b92a9cfe3e82e333ffcf5d2139a9b58cb53a9ca1170a2a4a6e48228ac->enter($__internal_bd275b0b92a9cfe3e82e333ffcf5d2139a9b58cb53a9ca1170a2a4a6e48228ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_pagination.html.twig"));

        // line 19
        echo "
";
        // line 20
        if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > 1)) {
            // line 21
            echo "<div class=\"pagination\">
    <ul>

    ";
            // line 24
            if (array_key_exists("previous", $context)) {
                // line 25
                echo "        <li>
            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["previous"] ?? $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 29
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Previous"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((($context["startPage"] ?? $this->getContext($context, "startPage")) > 1)) {
                // line 35
                echo "        <li>
            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 38
                if ((($context["startPage"] ?? $this->getContext($context, "startPage")) == 3)) {
                    // line 39
                    echo "            <li>
                <a href=\"";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif ((                // line 42
($context["startPage"] ?? $this->getContext($context, "startPage")) != 2)) {
                    // line 43
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 47
                echo "    ";
            }
            // line 48
            echo "
    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "        ";
                if (($context["page"] != ($context["current"] ?? $this->getContext($context, "current")))) {
                    // line 51
                    echo "            <li>
                <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 55
                    echo "            <li class=\"active\">
                <span>";
                    // line 56
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 59
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
    ";
            // line 62
            if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > ($context["endPage"] ?? $this->getContext($context, "endPage")))) {
                // line 63
                echo "        ";
                if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > (($context["endPage"] ?? $this->getContext($context, "endPage")) + 1))) {
                    // line 64
                    echo "            ";
                    if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > (($context["endPage"] ?? $this->getContext($context, "endPage")) + 2))) {
                        // line 65
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 69
                        echo "                <li>
                    <a href=\"";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => (($context["pageCount"] ?? $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 73
                    echo "        ";
                }
                // line 74
                echo "        <li>
            <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["pageCount"] ?? $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 78
            echo "
    ";
            // line 79
            if (array_key_exists("next", $context)) {
                // line 80
                echo "        <li>
            <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["next"] ?? $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 84
                echo "        <li class=\"disabled\">
            <span>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Next"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 88
            echo "    </ul>
</div>
";
        }
        
        $__internal_574a9f69d862c68d473e822378fac924b09eb8477d0be903b7b7f52229cbab33->leave($__internal_574a9f69d862c68d473e822378fac924b09eb8477d0be903b7b7f52229cbab33_prof);

        
        $__internal_bd275b0b92a9cfe3e82e333ffcf5d2139a9b58cb53a9ca1170a2a4a6e48228ac->leave($__internal_bd275b0b92a9cfe3e82e333ffcf5d2139a9b58cb53a9ca1170a2a4a6e48228ac_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 88,  189 => 85,  186 => 84,  178 => 81,  175 => 80,  173 => 79,  170 => 78,  162 => 75,  159 => 74,  156 => 73,  148 => 70,  145 => 69,  139 => 65,  136 => 64,  133 => 63,  131 => 62,  128 => 61,  121 => 59,  115 => 56,  112 => 55,  104 => 52,  101 => 51,  98 => 50,  94 => 49,  91 => 48,  88 => 47,  82 => 43,  80 => 42,  75 => 40,  72 => 39,  70 => 38,  65 => 36,  62 => 35,  60 => 34,  57 => 33,  51 => 30,  48 => 29,  40 => 26,  37 => 25,  35 => 24,  30 => 21,  28 => 20,  25 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Twitter Bootstrap Sliding pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Twitter Bootstrap CSS Toolkit
 * http://twitter.github.com/bootstrap/
 *
 * This view has been ported from Pagerfanta progect
 * https://github.com/whiteoctober/Pagerfanta/
 * https://github.com/whiteoctober/Pagerfanta/blob/master/src/Pagerfanta/View/TwitterBootstrapView.php
 *
 * @author Pablo Díez <pablodip@gmail.com>
 * @author Jan Sorgalla <jsorgalla@gmail.com>
 * @author Artem Ponomarenko <imenem@inbox.ru>
 */
#}

{% if pageCount > 1 %}
<div class=\"pagination\">
    <ul>

    {% if previous is defined %}
        <li>
            <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&laquo;&nbsp;{{ 'Previous'|trans }}</a>
        </li>
    {% else %}
        <li class=\"disabled\">
            <span>&laquo;&nbsp;{{ 'Previous'|trans }}</span>
        </li>
    {% endif %}

    {% if startPage > 1 %}
        <li>
            <a href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>
        </li>
        {% if startPage == 3 %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>
            </li>
        {% elseif startPage != 2 %}
        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        {% endif %}
    {% endif %}

    {% for page in pagesInRange %}
        {% if page != current %}
            <li>
                <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
            </li>
        {% else %}
            <li class=\"active\">
                <span>{{ page }}</span>
            </li>
        {% endif %}

    {% endfor %}

    {% if pageCount > endPage %}
        {% if pageCount > (endPage + 1) %}
            {% if pageCount > (endPage + 2) %}
                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            {% else %}
                <li>
                    <a href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">{{ pageCount -1 }}</a>
                </li>
            {% endif %}
        {% endif %}
        <li>
            <a href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>
        </li>
    {% endif %}

    {% if next is defined %}
        <li>
            <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ 'Next'|trans }}&nbsp;&raquo;</a>
        </li>
    {% else %}
        <li class=\"disabled\">
            <span>{{ 'Next'|trans }}&nbsp;&raquo;</span>
        </li>
    {% endif %}
    </ul>
</div>
{% endif %}
", "@KnpPaginator/Pagination/twitter_bootstrap_pagination.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\twitter_bootstrap_pagination.html.twig");
    }
}
