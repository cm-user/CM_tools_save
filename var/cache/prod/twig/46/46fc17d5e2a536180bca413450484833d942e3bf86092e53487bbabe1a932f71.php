<?php

/* HampeZurbInkBundle:FoundationForEmails/2/Examples:basic.html.twig */
class __TwigTemplate_421acaef6e61e329015d9b7d81f60538b63ac72413ae323ec918c84136945576 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_preHtml($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["zurb_ink_styles"] ?? null), "add", array(0 => "@HampeZurbInkBundle/Resources/public/css/foundation-for-emails/2/examples/basic.css"), "method"), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
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
        return array (  42 => 6,  39 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HampeZurbInkBundle:FoundationForEmails/2/Examples:basic.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\hampe\\zurb-ink-bundle\\Hampe\\Bundle\\ZurbInkBundle/Resources/views/FoundationForEmails/2/Examples/basic.html.twig");
    }
}
