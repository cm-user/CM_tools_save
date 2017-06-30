<?php

/* @HampeZurbInk/FoundationForEmails/2/Examples/basic.html.twig */
class __TwigTemplate_900c0bd109e7658c5ce193ead98d8b438c1a1860969c2de5dc4cd3c3e05227df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:FoundationForEmails:2/base.html.twig", "@HampeZurbInk/FoundationForEmails/2/Examples/basic.html.twig", 1);
        $this->blocks = array(
            'preHtml' => array($this, 'block_preHtml'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HampeZurbInkBundle:FoundationForEmails:2/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea4477a1640b92c779df56481ae1d22a73a8a4ae6ade3eea344bccfa7015cd16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4477a1640b92c779df56481ae1d22a73a8a4ae6ade3eea344bccfa7015cd16->enter($__internal_ea4477a1640b92c779df56481ae1d22a73a8a4ae6ade3eea344bccfa7015cd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/FoundationForEmails/2/Examples/basic.html.twig"));

        $__internal_845b7c50efeb5f775ea0445f69ecd3f2de33c2ad775d546ffb25225572ef2100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845b7c50efeb5f775ea0445f69ecd3f2de33c2ad775d546ffb25225572ef2100->enter($__internal_845b7c50efeb5f775ea0445f69ecd3f2de33c2ad775d546ffb25225572ef2100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HampeZurbInk/FoundationForEmails/2/Examples/basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea4477a1640b92c779df56481ae1d22a73a8a4ae6ade3eea344bccfa7015cd16->leave($__internal_ea4477a1640b92c779df56481ae1d22a73a8a4ae6ade3eea344bccfa7015cd16_prof);

        
        $__internal_845b7c50efeb5f775ea0445f69ecd3f2de33c2ad775d546ffb25225572ef2100->leave($__internal_845b7c50efeb5f775ea0445f69ecd3f2de33c2ad775d546ffb25225572ef2100_prof);

    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_4e2d762c59902ff0949871d96593e2841bd3e1a1ed6765b98a3bf838a68ee809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2d762c59902ff0949871d96593e2841bd3e1a1ed6765b98a3bf838a68ee809->enter($__internal_4e2d762c59902ff0949871d96593e2841bd3e1a1ed6765b98a3bf838a68ee809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_5b8712df68d91a517f15e00723193bc13ff9e9e733abd44ed8fd8f9adb90ae39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8712df68d91a517f15e00723193bc13ff9e9e733abd44ed8fd8f9adb90ae39->enter($__internal_5b8712df68d91a517f15e00723193bc13ff9e9e733abd44ed8fd8f9adb90ae39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/foundation-for-emails/2/examples/basic.css"), "method"), "html", null, true);
        echo "
";
        
        $__internal_5b8712df68d91a517f15e00723193bc13ff9e9e733abd44ed8fd8f9adb90ae39->leave($__internal_5b8712df68d91a517f15e00723193bc13ff9e9e733abd44ed8fd8f9adb90ae39_prof);

        
        $__internal_4e2d762c59902ff0949871d96593e2841bd3e1a1ed6765b98a3bf838a68ee809->leave($__internal_4e2d762c59902ff0949871d96593e2841bd3e1a1ed6765b98a3bf838a68ee809_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_07d5da2072abd9224acc92e4833a9204653ab82f2c4b2fdc7188fbc1bcbc6133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d5da2072abd9224acc92e4833a9204653ab82f2c4b2fdc7188fbc1bcbc6133->enter($__internal_07d5da2072abd9224acc92e4833a9204653ab82f2c4b2fdc7188fbc1bcbc6133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ebfd1d038dea69e7d55e8291b2cbff0f2a923cdf4067f1f9d4e57138c4b2333e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfd1d038dea69e7d55e8291b2cbff0f2a923cdf4067f1f9d4e57138c4b2333e->enter($__internal_ebfd1d038dea69e7d55e8291b2cbff0f2a923cdf4067f1f9d4e57138c4b2333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <wrapper class=\"header\">
        <container>
            <row class=\"collapse\">
                <columns small=\"6\">
                    <img src=\"http://placehold.it/200x50/663399\">
                </columns>
                <columns small=\"6\">
                    <p class=\"text-right\">BASIC</p>
                </columns>
            </row>
        </container>
    </wrapper>

    <container>

        <spacer size=\"16\"></spacer>

        <row>
            <columns small=\"12\">

                <h1>Hi, Susan Calvin</h1>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, iste, amet consequatur a veniam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut optio nulla et, fugiat. Maiores accusantium nostrum asperiores provident, quam modi ex inventore dolores id aspernatur architecto odio minima perferendis, explicabo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quos quasi itaque beatae natus fugit provident delectus, magnam laudantium odio corrupti sit quam. Optio aut ut repudiandae velit distinctio asperiores?</p>
                <callout class=\"primary\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit repellendus natus, sint ea optio dignissimos asperiores inventore a molestiae dolorum placeat repellat excepturi mollitia ducimus unde doloremque ad, alias eos!</p>
                </callout>
            </columns>
        </row>
        <wrapper class=\"secondary\">

            <spacer size=\"16\"></spacer>

            <row>
                <columns large=\"6\">
                    <h5>Connect With Us:</h5>
                    <button class=\"facebook expand\" href=\"http://zurb.com\">Facebook</button>
                    <button class=\"twitter expand\" href=\"http://zurb.com\">Twitter</button>
                    <button class=\"google expand\" href=\"http://zurb.com\">Google+</button>
                </columns>
                <columns large=\"6\">
                    <h5>Contact Info:</h5>
                    <p>Phone: 408-341-0600</p>
                    <p>Email: <a href=\"mailto:foundation@zurb.com\">foundation@zurb.com</a></p>
                </columns>
            </row>
        </wrapper>
    </container>
";
        
        $__internal_ebfd1d038dea69e7d55e8291b2cbff0f2a923cdf4067f1f9d4e57138c4b2333e->leave($__internal_ebfd1d038dea69e7d55e8291b2cbff0f2a923cdf4067f1f9d4e57138c4b2333e_prof);

        
        $__internal_07d5da2072abd9224acc92e4833a9204653ab82f2c4b2fdc7188fbc1bcbc6133->leave($__internal_07d5da2072abd9224acc92e4833a9204653ab82f2c4b2fdc7188fbc1bcbc6133_prof);

    }

    public function getTemplateName()
    {
        return "@HampeZurbInk/FoundationForEmails/2/Examples/basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HampeZurbInkBundle:FoundationForEmails:2/base.html.twig' %}
{% block preHtml %}
    {{ zurb_ink_styles.add(\"@HampeZurbInkBundle/Resources/public/css/foundation-for-emails/2/examples/basic.css\") }}
{% endblock %}
{% block content %}
    <wrapper class=\"header\">
        <container>
            <row class=\"collapse\">
                <columns small=\"6\">
                    <img src=\"http://placehold.it/200x50/663399\">
                </columns>
                <columns small=\"6\">
                    <p class=\"text-right\">BASIC</p>
                </columns>
            </row>
        </container>
    </wrapper>

    <container>

        <spacer size=\"16\"></spacer>

        <row>
            <columns small=\"12\">

                <h1>Hi, Susan Calvin</h1>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, iste, amet consequatur a veniam.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut optio nulla et, fugiat. Maiores accusantium nostrum asperiores provident, quam modi ex inventore dolores id aspernatur architecto odio minima perferendis, explicabo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quos quasi itaque beatae natus fugit provident delectus, magnam laudantium odio corrupti sit quam. Optio aut ut repudiandae velit distinctio asperiores?</p>
                <callout class=\"primary\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit repellendus natus, sint ea optio dignissimos asperiores inventore a molestiae dolorum placeat repellat excepturi mollitia ducimus unde doloremque ad, alias eos!</p>
                </callout>
            </columns>
        </row>
        <wrapper class=\"secondary\">

            <spacer size=\"16\"></spacer>

            <row>
                <columns large=\"6\">
                    <h5>Connect With Us:</h5>
                    <button class=\"facebook expand\" href=\"http://zurb.com\">Facebook</button>
                    <button class=\"twitter expand\" href=\"http://zurb.com\">Twitter</button>
                    <button class=\"google expand\" href=\"http://zurb.com\">Google+</button>
                </columns>
                <columns large=\"6\">
                    <h5>Contact Info:</h5>
                    <p>Phone: 408-341-0600</p>
                    <p>Email: <a href=\"mailto:foundation@zurb.com\">foundation@zurb.com</a></p>
                </columns>
            </row>
        </wrapper>
    </container>
{% endblock %}", "@HampeZurbInk/FoundationForEmails/2/Examples/basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle\\Resources\\views\\FoundationForEmails\\2\\Examples\\basic.html.twig");
    }
}
