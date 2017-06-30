<?php

/* HampeZurbInkBundle:FoundationForEmails/2/Examples:basic.html.twig */
class __TwigTemplate_619929e169ef50e63492d85e995ff4211d7cf1637c457c19675a4a88f535ec12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HampeZurbInkBundle:FoundationForEmails:2/base.html.twig", "HampeZurbInkBundle:FoundationForEmails/2/Examples:basic.html.twig", 1);
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
        $__internal_d7ee0f1b2b20aa185bdcb9de246cf1b8858a5228a7a83fa02ea1cb8a88540610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ee0f1b2b20aa185bdcb9de246cf1b8858a5228a7a83fa02ea1cb8a88540610->enter($__internal_d7ee0f1b2b20aa185bdcb9de246cf1b8858a5228a7a83fa02ea1cb8a88540610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:FoundationForEmails/2/Examples:basic.html.twig"));

        $__internal_5289c424734b411e5fee99d1e4cc3840d3c1f0581aeb572c92f60775a5aab08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5289c424734b411e5fee99d1e4cc3840d3c1f0581aeb572c92f60775a5aab08b->enter($__internal_5289c424734b411e5fee99d1e4cc3840d3c1f0581aeb572c92f60775a5aab08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HampeZurbInkBundle:FoundationForEmails/2/Examples:basic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7ee0f1b2b20aa185bdcb9de246cf1b8858a5228a7a83fa02ea1cb8a88540610->leave($__internal_d7ee0f1b2b20aa185bdcb9de246cf1b8858a5228a7a83fa02ea1cb8a88540610_prof);

        
        $__internal_5289c424734b411e5fee99d1e4cc3840d3c1f0581aeb572c92f60775a5aab08b->leave($__internal_5289c424734b411e5fee99d1e4cc3840d3c1f0581aeb572c92f60775a5aab08b_prof);

    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        $__internal_5e1c3db7e23a7c1aad2d8cbcf29c05109ecb649fe178c5f01fa3beaeaa7c2598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1c3db7e23a7c1aad2d8cbcf29c05109ecb649fe178c5f01fa3beaeaa7c2598->enter($__internal_5e1c3db7e23a7c1aad2d8cbcf29c05109ecb649fe178c5f01fa3beaeaa7c2598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        $__internal_e97abd96ef08eb43d7e24ee692fefc16ca74ebb3d1b42253e79fee3bd8b2e726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97abd96ef08eb43d7e24ee692fefc16ca74ebb3d1b42253e79fee3bd8b2e726->enter($__internal_e97abd96ef08eb43d7e24ee692fefc16ca74ebb3d1b42253e79fee3bd8b2e726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preHtml"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? $this->getContext($context, "zurb_ink_styles")), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/foundation-for-emails/2/examples/basic.css"), "method"), "html", null, true);
        echo "
";
        
        $__internal_e97abd96ef08eb43d7e24ee692fefc16ca74ebb3d1b42253e79fee3bd8b2e726->leave($__internal_e97abd96ef08eb43d7e24ee692fefc16ca74ebb3d1b42253e79fee3bd8b2e726_prof);

        
        $__internal_5e1c3db7e23a7c1aad2d8cbcf29c05109ecb649fe178c5f01fa3beaeaa7c2598->leave($__internal_5e1c3db7e23a7c1aad2d8cbcf29c05109ecb649fe178c5f01fa3beaeaa7c2598_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_9deb55a2208014654b41b1e4da1ac5f1864063dc2ad7f75dbe18f2a9b221ab75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9deb55a2208014654b41b1e4da1ac5f1864063dc2ad7f75dbe18f2a9b221ab75->enter($__internal_9deb55a2208014654b41b1e4da1ac5f1864063dc2ad7f75dbe18f2a9b221ab75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bf5b691756dc8793579183326a38914b9fef393bd667a999464e4a96f9ff4226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5b691756dc8793579183326a38914b9fef393bd667a999464e4a96f9ff4226->enter($__internal_bf5b691756dc8793579183326a38914b9fef393bd667a999464e4a96f9ff4226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bf5b691756dc8793579183326a38914b9fef393bd667a999464e4a96f9ff4226->leave($__internal_bf5b691756dc8793579183326a38914b9fef393bd667a999464e4a96f9ff4226_prof);

        
        $__internal_9deb55a2208014654b41b1e4da1ac5f1864063dc2ad7f75dbe18f2a9b221ab75->leave($__internal_9deb55a2208014654b41b1e4da1ac5f1864063dc2ad7f75dbe18f2a9b221ab75_prof);

    }

    public function getTemplateName()
    {
        return "HampeZurbInkBundle:FoundationForEmails/2/Examples:basic.html.twig";
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
{% endblock %}", "HampeZurbInkBundle:FoundationForEmails/2/Examples:basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/FoundationForEmails/2/Examples/basic.html.twig");
    }
}
