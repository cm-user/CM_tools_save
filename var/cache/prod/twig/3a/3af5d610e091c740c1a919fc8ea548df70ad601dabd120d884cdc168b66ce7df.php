<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_6a074494ca52bf020330d9a4eb9e4fbce460f047d0e26f89e8e2fa08af813864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@KnpMenu/menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        // line 4
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute(($context["item"] ?? null), "label", array());
        // line 6
        if ( !(($context["translation_domain"] ?? null) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? null));
        }
        // line 9
        if (($this->getAttribute(($context["options"] ?? null), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo ($context["label"] ?? null);
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "@KnpMenu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  37 => 7,  35 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@KnpMenu/menu.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\knplabs\\knp-menu-bundle\\Resources\\views\\menu.html.twig");
    }
}
