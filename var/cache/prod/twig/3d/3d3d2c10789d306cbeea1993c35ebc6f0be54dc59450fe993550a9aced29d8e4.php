<?php

/* MarketingBundle:newslettermenu:show.html.twig */
class __TwigTemplate_07fc466ed8579b4499948e804aab28c8dba7b3c741ed323eb91816c20e6f9ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MarketingBundle:newslettermenu:show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>NewsletterMenu</h1>

    <table>
        <tbody>
            <tr>
                <th>Title</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? null), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? null), "link", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? null), "position", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["newsletterMenu"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("newslettermenu_edit", array("id" => $this->getAttribute(($context["newsletterMenu"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "MarketingBundle:newslettermenu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  82 => 35,  76 => 32,  70 => 29,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MarketingBundle:newslettermenu:show.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle/Resources/views/newslettermenu/show.html.twig");
    }
}
