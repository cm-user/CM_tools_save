<?php

/* @Marketing/inky/presse.model.html */
class __TwigTemplate_abc1e3373dfe5230cbd2120a790d5919489f67cd96cc724a0cf7d33f7cca086d extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"fr\" xml:lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html", null, true);
        echo "</title>
    ##CSS##
</head>
<body>
<!-- <style> -->
<table class=\"body\">
    <tr>
        <td class=\"center\" align=\"center\" valign=\"top\">
            <center>
                <container class=\"grey no-margin\">
                    <row>
                        <columns small=\"12\" large=\"12\" class=\"no-padding\">
                            <p class=\"small-size no-margin grey text-center\">";
        // line 20
        echo $this->getAttribute(($context["header"] ?? null), "textTop", array());
        echo "</p>
                        </columns>

                    </row>
                </container>
                <container>
                    <row>
                        <columns small=\"12\" large=\"6\">
                            <a href=\"http://www.cadeau-maestro.com/\"><img src=\"http://www.cadeau-maestro.com/img/newsletter/maestro.png\" alt=\"Cadeau Maestro\"></a>
                        </columns>
                        <columns small=\"12\" large=\"6\" class=\"middle\">
                            <row>
                                <columns small=\"12\" large=\"12\">
                                    <p class=\"text-center bold\">Offrez en connaisseur !</p>
                                </columns>
                            </row>
                            <row class=\"show-for-large\">
                                <columns small=\"12\" large=\"12\">
                                    <p class=\"text-center bold\"><img class=\"inline middle\" src=\"##IMG_TOP_1##\" alt=\"##TXT_TOP_1##\"> ##TXT_TOP_1##</p>
                                </columns>
                            </row>
                            <row class=\"show-for-large\">
                                <columns small=\"12\" large=\"12\">
                                    <p class=\"text-center bold\"><img class=\"inline middle\" src=\"##IMG_TOP_2##\" alt=\"##TXT_TOP_2##\"> ##TXT_TOP_2##</p>
                                </columns>
                            </row>
                        </columns>
                    </row>
                    <row>
                        <columns small=\"12\" large=\"12\" class=\"no-padding-bottom\">
                            <p class=\"bold\">";
        // line 50
        echo $this->getAttribute(($context["header"] ?? null), "textIntro", array());
        echo "</p>
                        </columns>
                    </row>
                    <row>
                        <columns small=\"12\" large=\"12\">
                            ";
        // line 55
        echo $this->getAttribute(($context["header"] ?? null), "textDescription", array());
        echo "
                        </columns>
                    </row>
                    ";
        // line 58
        if ((($this->getAttribute(($context["header"] ?? null), "picture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["header"] ?? null), "picture", array()))) : (""))) {
            // line 59
            echo "                    <row>
                        <columns small=\"12\" large=\"12\">
                            <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "picture", array()), "html", null, true);
            echo "\">
                        </columns>
                    </row>
                    ";
        }
        // line 65
        echo "                    ";
        if ((($this->getAttribute(($context["header"] ?? null), "link", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["header"] ?? null), "link", array()))) : (""))) {
            // line 66
            echo "                    <row>
                        <columns small=\"12\" large=\"12\">
                            <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "link", array()), "html", null, true);
            echo "\" >
                                <img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/profite.gif\" alt=\"J'en profite\">
                            </a>
                        </columns>
                    </row>
                    ";
        }
        // line 74
        echo "                    ";
        echo ($context["menu"] ?? null);
        echo "
                    ";
        // line 75
        echo ($context["products"] ?? null);
        echo "
                </container>
                <container>
                    <row>
                        <columns small=\"5\" large=\"3\" class=\"padding-top\">
                            <a href=\"http://www.cadeau-maestro.com/idee/5-paiement-securise\"><img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/cadenas.png\" alt=\"Paiement sécurisé\"></a>
                            <p class=\"text-center\"><a href=\"http://www.cadeau-maestro.com/idee/5-paiement-securise\" class=\"grey\">Paiement sécurisé</a></p>
                        </columns>
                        <columns small=\"6\" large=\"3\" class=\"padding-top\">
                            <a href=\"http://www.cadeau-maestro.com/idee/1-livraison-rapide-de-vos-cadeaux\"><img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/fusee.png\" alt=\"Livraison rapide 24/48H\"></a>
                            <p class=\"text-center\"><a href=\"http://www.cadeau-maestro.com/idee/1-livraison-rapide-de-vos-cadeaux\" class=\"grey\">Livraison rapide 24/48H</a></p>
                        </columns>
                        <columns small=\"5\" large=\"3\" class=\"padding-top\">
                            <a href=\"http://www.cadeau-maestro.com/idee/22-paquets-cadeaux\"><img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/ciseau.png\" alt=\"Paquet cadeau : 0,99€\">
                                <p class=\"text-center\"><a href=\"http://www.cadeau-maestro.com/idee/22-paquets-cadeaux\" class=\"grey\">Paquet cadeau : 2,50€</a></p>
                        </columns>
                        <columns small=\"6\" large=\"3\" class=\"padding-top\">
                            <a href=\"http://www.cadeau-maestro.com/idee/8-engagements\"><img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/smile.png\" alt=\"Satisfait ou remboursé\">
                                <p class=\"text-center\"><a href=\"http://www.cadeau-maestro.com/idee/8-engagements\" class=\"grey\">Satisfait ou remboursé</a></p>
                        </columns>
                    </row>
                    <row>
                        <columns small=\"12\" large=\"6\">
                            <h4>Contactez-nous</h4>
                            <p>Par téléphone au <a class=\"red\" href=\"tel:";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? null), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? null), "phone", array()), "html", null, true);
        echo "</a></p>
                            <p>Par e-mail à <a class=\"red\" href=\"mailto:";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? null), "mail", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? null), "mail", array()), "html", null, true);
        echo "</a></p>
                        </columns>
                        <columns small=\"12\" large=\"6\">
                            <h4>Suivez-nous</h4>
                            <row>
                                <columns small=\"5\" large=\"3\">
                                    <a href=\"https://www.facebook.com/cadeaumaestro\"><img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/facebook.png\" alt=\"Facebook\"></a>
                                </columns>
                                <columns small=\"6\" large=\"3\">
                                    <a href=\"https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fwww.cadeau-maestro.com%2Fcontent%2F5-paiement-securise&screen_name=cadeaumaestro&tw_p=followbutton&variant=2.0&xd_token=f04c547e5a8da\"><img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/twitter.png\" alt=\"Twitter\"></a>
                                </columns>
                                <columns small=\"5\" large=\"3\">
                                    <a href=\"https://www.youtube.com/user/cadeaumaestro\"><img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/youtube.png\" alt=\"Youtube\"></a>
                                </columns>
                                <columns small=\"6\" large=\"3\">
                                    <a href=\"https://www.instagram.com/cadeaumaestro/\"><img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/instagram.png\" alt=\"Instagram\"></a>
                                </columns>
                            </row>
                        </columns>
                    </row>
                    <row>
                        <columns small=\"12\" large=\"12\">
                            <p class=\"text-center\">Vous recevez cette Newsletter suite à votre demande lors de votre visite sur le site cadeau-maestro.com</p>
                            <p class=\"text-center\">";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? null), "name", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? null), "address1", array()), "html", null, true);
        echo " ";
        if (($this->getAttribute(($context["shop"] ?? null), "address2", array()) != "")) {
            echo "- ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? null), "address2", array()), "html", null, true);
        }
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? null), "postalCode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? null), "city", array()), "html", null, true);
        echo "</p>
                        </columns>
                    </row>
                </container>
                <container class=\"grey\">
                    <row>
                        <columns small=\"12\" large=\"12\">
                            <p>
                            <ul>
                                <li>Des idées cadeaux pour toute la famille choisies par Charline et Sylvain</li>
                                <li>Entreprise Française fondée en 2008 située dans la Loire ainsi qu'une boutique à Saint-Étienne</li>
                                <li>Colis expédié le jour même pour les commandes passées avant 16 heures. L'intégralité de nos produits est en stock</li>
                                <li>Livraison à partir de 1,50€ et emballage de vos cadeaux pour 2,50€</li>
                                <li>Notre savoir faire boutique apporté au web</li>
                                <li>En achetant vos présents chez nous, vous avez un mois pour changer d'avis</li>
                                <li>Retrouvez les avis de nos clients qui ont acheté des cadeaux sur notre site</li>
                                <li>Tous nos produits sont garantis un an</li>
                            </ul>
                            </p>
                        </columns>
                    </row>
                </container>

            </center>
        </td>
    </tr>
</table>
<!-- prevent Gmail on iOS font size manipulation -->
<div style=\"display:none; white-space:nowrap; font:15px courier; line-height:0;\"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@Marketing/inky/presse.model.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 123,  157 => 100,  151 => 99,  124 => 75,  119 => 74,  110 => 68,  106 => 66,  103 => 65,  96 => 61,  92 => 59,  90 => 58,  84 => 55,  76 => 50,  43 => 20,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Marketing/inky/presse.model.html", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\inky\\presse.model.html");
    }
}
