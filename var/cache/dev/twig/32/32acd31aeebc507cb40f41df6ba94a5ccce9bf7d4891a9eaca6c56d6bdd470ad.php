<?php

/* @CoreSphereConsole/Toolbar/toolbar.html.twig */
class __TwigTemplate_e5d3a4d5c14a5d236be20db33e681d1a0c2664aa61c4d815036739d4b016bf8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "@CoreSphereConsole/Toolbar/toolbar.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f9abbd3e2d01eb42c5d497af1ed8bbfa69837843bc5709a0d98443a58012a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9abbd3e2d01eb42c5d497af1ed8bbfa69837843bc5709a0d98443a58012a02->enter($__internal_9f9abbd3e2d01eb42c5d497af1ed8bbfa69837843bc5709a0d98443a58012a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $__internal_c50b8442222a4635ae9bd61266118238d6c116d9b79a0371cb43e542bf578ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50b8442222a4635ae9bd61266118238d6c116d9b79a0371cb43e542bf578ffa->enter($__internal_c50b8442222a4635ae9bd61266118238d6c116d9b79a0371cb43e542bf578ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreSphereConsole/Toolbar/toolbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9abbd3e2d01eb42c5d497af1ed8bbfa69837843bc5709a0d98443a58012a02->leave($__internal_9f9abbd3e2d01eb42c5d497af1ed8bbfa69837843bc5709a0d98443a58012a02_prof);

        
        $__internal_c50b8442222a4635ae9bd61266118238d6c116d9b79a0371cb43e542bf578ffa->leave($__internal_c50b8442222a4635ae9bd61266118238d6c116d9b79a0371cb43e542bf578ffa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c669ebece8b632b0935a8419a85b26063588e92c83d88f62068db3137406c39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c669ebece8b632b0935a8419a85b26063588e92c83d88f62068db3137406c39a->enter($__internal_c669ebece8b632b0935a8419a85b26063588e92c83d88f62068db3137406c39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_12b902e40e76a11e6591418c178d571e33e867ad84ff617d9259180ef827d585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b902e40e76a11e6591418c178d571e33e867ad84ff617d9259180ef827d585->enter($__internal_12b902e40e76a11e6591418c178d571e33e867ad84ff617d9259180ef827d585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("console");
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "@CoreSphereConsole/Toolbar/toolbar.html.twig", 14)->display(array_merge($context, array("link" => false)));
        
        $__internal_12b902e40e76a11e6591418c178d571e33e867ad84ff617d9259180ef827d585->leave($__internal_12b902e40e76a11e6591418c178d571e33e867ad84ff617d9259180ef827d585_prof);

        
        $__internal_c669ebece8b632b0935a8419a85b26063588e92c83d88f62068db3137406c39a->leave($__internal_c669ebece8b632b0935a8419a85b26063588e92c83d88f62068db3137406c39a_prof);

    }

    public function getTemplateName()
    {
        return "@CoreSphereConsole/Toolbar/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  63 => 12,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('console') }}\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    {% endset %}
    {% set text %}Console{% endset %}

    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': false } %}
{% endblock %}
", "@CoreSphereConsole/Toolbar/toolbar.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\coresphere\\console-bundle\\Resources\\views\\Toolbar\\toolbar.html.twig");
    }
}
