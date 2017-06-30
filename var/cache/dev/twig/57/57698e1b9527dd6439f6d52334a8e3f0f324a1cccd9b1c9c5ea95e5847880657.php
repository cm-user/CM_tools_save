<?php

/* HampeZurbInkBundle:Partials:footer.html.twig */
class __TwigTemplate_41c57ceea67b2446e89591a6b45928a3432438ae1fc4964a4559fdd56421c698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footerInner' => array($this, 'block_footerInner'),
            'footerLinks' => array($this, 'block_footerLinks'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b634e0d3b0076cba02f6db89d91cb21b87fe19e78b28465e1a41bee566b0ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b634e0d3b0076cba02f6db89d91cb21b87fe19e78b28465e1a41bee566b0ed8->enter($__internal_4b634e0d3b0076cba02f6db89d91cb21b87fe19e78b28465e1a41bee566b0ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Partials:footer.html.twig"));

        $__internal_6e9202fb50232db78a7815db36a48d438cf868086acef0ddb8041c57949c1f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9202fb50232db78a7815db36a48d438cf868086acef0ddb8041c57949c1f50->enter($__internal_6e9202fb50232db78a7815db36a48d438cf868086acef0ddb8041c57949c1f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:Partials:footer.html.twig"));

        // line 1
        echo "<table class=\"row\">
    <tr>
        <td class=\"wrapper last\">

            <table class=\"twelve columns\">
                <tr>
                    <td align=\"center\">
                        ";
        // line 8
        $this->displayBlock('footerInner', $context, $blocks);
        // line 17
        echo "                    </td>
                    <td class=\"expander\"></td>
                </tr>
            </table>

        </td>
    </tr>
</table>";
        
        $__internal_4b634e0d3b0076cba02f6db89d91cb21b87fe19e78b28465e1a41bee566b0ed8->leave($__internal_4b634e0d3b0076cba02f6db89d91cb21b87fe19e78b28465e1a41bee566b0ed8_prof);

        
        $__internal_6e9202fb50232db78a7815db36a48d438cf868086acef0ddb8041c57949c1f50->leave($__internal_6e9202fb50232db78a7815db36a48d438cf868086acef0ddb8041c57949c1f50_prof);

    }

    // line 8
    public function block_footerInner($context, array $blocks = array())
    {
        $__internal_4846274e70ce9b75aa8558f2a08e003aaa48bc2a9404adf7786eeb3379c3fc67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4846274e70ce9b75aa8558f2a08e003aaa48bc2a9404adf7786eeb3379c3fc67->enter($__internal_4846274e70ce9b75aa8558f2a08e003aaa48bc2a9404adf7786eeb3379c3fc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerInner"));

        $__internal_54c57358c0e04ac2de9850fb6ad0c55cd743a9f10526b6884fb4ad1ea3ecb018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c57358c0e04ac2de9850fb6ad0c55cd743a9f10526b6884fb4ad1ea3ecb018->enter($__internal_54c57358c0e04ac2de9850fb6ad0c55cd743a9f10526b6884fb4ad1ea3ecb018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerInner"));

        // line 9
        echo "                            <center>
                                <p style=\"text-align:center;\">
                                    ";
        // line 11
        $this->displayBlock('footerLinks', $context, $blocks);
        // line 14
        echo "                                </p>
                            </center>
                        ";
        
        $__internal_54c57358c0e04ac2de9850fb6ad0c55cd743a9f10526b6884fb4ad1ea3ecb018->leave($__internal_54c57358c0e04ac2de9850fb6ad0c55cd743a9f10526b6884fb4ad1ea3ecb018_prof);

        
        $__internal_4846274e70ce9b75aa8558f2a08e003aaa48bc2a9404adf7786eeb3379c3fc67->leave($__internal_4846274e70ce9b75aa8558f2a08e003aaa48bc2a9404adf7786eeb3379c3fc67_prof);

    }

    // line 11
    public function block_footerLinks($context, array $blocks = array())
    {
        $__internal_6a21c4f4f5aa5f3d3e4cc78a70132e136d48ea4aa3a9d419ed80227fabccd958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a21c4f4f5aa5f3d3e4cc78a70132e136d48ea4aa3a9d419ed80227fabccd958->enter($__internal_6a21c4f4f5aa5f3d3e4cc78a70132e136d48ea4aa3a9d419ed80227fabccd958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerLinks"));

        $__internal_370025323713aedde81c9a57560e14e802791a217ec3de56ecd4f697bc8ca1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370025323713aedde81c9a57560e14e802791a217ec3de56ecd4f697bc8ca1a4->enter($__internal_370025323713aedde81c9a57560e14e802791a217ec3de56ecd4f697bc8ca1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footerLinks"));

        // line 12
        echo "                                    <a href=\"#\">Terms</a> | <a href=\"#\">Privacy</a> | <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                                    ";
        
        $__internal_370025323713aedde81c9a57560e14e802791a217ec3de56ecd4f697bc8ca1a4->leave($__internal_370025323713aedde81c9a57560e14e802791a217ec3de56ecd4f697bc8ca1a4_prof);

        
        $__internal_6a21c4f4f5aa5f3d3e4cc78a70132e136d48ea4aa3a9d419ed80227fabccd958->leave($__internal_6a21c4f4f5aa5f3d3e4cc78a70132e136d48ea4aa3a9d419ed80227fabccd958_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:Partials:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 12,  82 => 11,  70 => 14,  68 => 11,  64 => 9,  55 => 8,  38 => 17,  36 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"row\">
    <tr>
        <td class=\"wrapper last\">

            <table class=\"twelve columns\">
                <tr>
                    <td align=\"center\">
                        {% block footerInner %}
                            <center>
                                <p style=\"text-align:center;\">
                                    {%block footerLinks %}
                                    <a href=\"#\">Terms</a> | <a href=\"#\">Privacy</a> | <a href=\"#\"><unsubscribe>Unsubscribe</unsubscribe></a>
                                    {% endblock %}
                                </p>
                            </center>
                        {% endblock %}
                    </td>
                    <td class=\"expander\"></td>
                </tr>
            </table>

        </td>
    </tr>
</table>", "HampeZurbInkBundle:Partials:footer.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/Partials/footer.html.twig");
    }
}
