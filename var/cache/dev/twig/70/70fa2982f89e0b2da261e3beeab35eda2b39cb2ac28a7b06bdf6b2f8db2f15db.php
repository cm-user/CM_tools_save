<?php

/* @Marketing/inky/newsletter.model.html */
class __TwigTemplate_58e9020b50986134c21672b5cecc2dac2abc18feba566ef2b0ad0b71cfa5d3c2 extends Twig_Template
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
        $__internal_a538b748ac38766914e86d11fc414a738f939ec6f88ed43d93de2d9eeebd5b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a538b748ac38766914e86d11fc414a738f939ec6f88ed43d93de2d9eeebd5b91->enter($__internal_a538b748ac38766914e86d11fc414a738f939ec6f88ed43d93de2d9eeebd5b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/inky/newsletter.model.html"));

        $__internal_406e75afc7d7ab7c86f6b633c6ad67e7572b4c47e5b61e003eb819e6356cffba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406e75afc7d7ab7c86f6b633c6ad67e7572b4c47e5b61e003eb819e6356cffba->enter($__internal_406e75afc7d7ab7c86f6b633c6ad67e7572b4c47e5b61e003eb819e6356cffba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Marketing/inky/newsletter.model.html"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"fr\" xml:lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "title", array()), "html", null, true);
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
                            <p class=\"small-size no-margin grey text-center\">##PRENOM## : ";
        // line 20
        echo $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "textTop", array());
        echo "</p>
                        </columns>

                    </row>
                    <row>
                        <columns small=\"12\" large=\"12\" class=\"no-padding\">
                            <p class=\"small-size no-margin text-center\"><a class=\"grey\" href=\"##NAVIGATEUR##\">Voir la version navigateur</a></p>
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
                            <p class=\"bold\">##PRENOM## : ";
        // line 55
        echo $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "textIntro", array());
        echo "</p>
                        </columns>
                    </row>
                    <row>
                        <columns small=\"12\" large=\"12\">
                            ";
        // line 60
        echo $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "textDescription", array());
        echo "
                        </columns>
                    </row>
                    ";
        // line 63
        if ((($this->getAttribute(($context["header"] ?? null), "picture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["header"] ?? null), "picture", array()))) : (""))) {
            // line 64
            echo "                    <row>
                        <columns small=\"12\" large=\"12\">
                            <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "picture", array()), "html", null, true);
            echo "\">
                        </columns>
                    </row>
                    ";
        }
        // line 70
        echo "                    ";
        if ((($this->getAttribute(($context["header"] ?? null), "link", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["header"] ?? null), "link", array()))) : (""))) {
            // line 71
            echo "                    <row>
                        <columns small=\"12\" large=\"12\">
                            <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? $this->getContext($context, "header")), "link", array()), "html", null, true);
            echo "\" >
                                <img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/profite.gif\" alt=\"J'en profite\">
                            </a>
                        </columns>
                    </row>
                    ";
        }
        // line 79
        echo "                    ";
        echo ($context["menu"] ?? $this->getContext($context, "menu"));
        echo "
                    ";
        // line 80
        echo ($context["products"] ?? $this->getContext($context, "products"));
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
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "phone", array()), "html", null, true);
        echo "</a></p>
                            <p>Par e-mail à <a class=\"red\" href=\"mailto:";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "mail", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "mail", array()), "html", null, true);
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
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "name", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "address1", array()), "html", null, true);
        echo " ";
        if (($this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "address2", array()) != "")) {
            echo "- ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "address2", array()), "html", null, true);
        }
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "postalCode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["shop"] ?? $this->getContext($context, "shop")), "city", array()), "html", null, true);
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
                    <row>
                        <columns small=\"12\" large=\"12\" class=\"no-padding\">
                            <p class=\"small-size no-margin text-center\"><a class=\"grey\" href=\"##DESINSCRIPTION##\">Me désinscrire</a></p>
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
        
        $__internal_a538b748ac38766914e86d11fc414a738f939ec6f88ed43d93de2d9eeebd5b91->leave($__internal_a538b748ac38766914e86d11fc414a738f939ec6f88ed43d93de2d9eeebd5b91_prof);

        
        $__internal_406e75afc7d7ab7c86f6b633c6ad67e7572b4c47e5b61e003eb819e6356cffba->leave($__internal_406e75afc7d7ab7c86f6b633c6ad67e7572b4c47e5b61e003eb819e6356cffba_prof);

    }

    public function getTemplateName()
    {
        return "@Marketing/inky/newsletter.model.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 128,  168 => 105,  162 => 104,  135 => 80,  130 => 79,  121 => 73,  117 => 71,  114 => 70,  107 => 66,  103 => 64,  101 => 63,  95 => 60,  87 => 55,  49 => 20,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"fr\" xml:lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <title>{{ header.title }}</title>
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
                            <p class=\"small-size no-margin grey text-center\">##PRENOM## : {{ header.textTop | raw }}</p>
                        </columns>

                    </row>
                    <row>
                        <columns small=\"12\" large=\"12\" class=\"no-padding\">
                            <p class=\"small-size no-margin text-center\"><a class=\"grey\" href=\"##NAVIGATEUR##\">Voir la version navigateur</a></p>
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
                            <p class=\"bold\">##PRENOM## : {{ header.textIntro | raw }}</p>
                        </columns>
                    </row>
                    <row>
                        <columns small=\"12\" large=\"12\">
                            {{ header.textDescription | raw }}
                        </columns>
                    </row>
                    {% if header.picture|default %}
                    <row>
                        <columns small=\"12\" large=\"12\">
                            <img src=\"{{ header.picture }}\">
                        </columns>
                    </row>
                    {% endif %}
                    {% if header.link|default %}
                    <row>
                        <columns small=\"12\" large=\"12\">
                            <a href=\"{{ header.link }}\" >
                                <img class=\"text-center\" src=\"http://www.cadeau-maestro.com/img/newsletter/profite.gif\" alt=\"J'en profite\">
                            </a>
                        </columns>
                    </row>
                    {% endif %}
                    {{ menu | raw }}
                    {{ products | raw }}
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
                            <p>Par téléphone au <a class=\"red\" href=\"tel:{{ shop.phone }}\">{{ shop.phone }}</a></p>
                            <p>Par e-mail à <a class=\"red\" href=\"mailto:{{ shop.mail }}\">{{ shop.mail }}</a></p>
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
                            <p class=\"text-center\">{{ shop.name }}, {{ shop.address1 }} {%if shop.address2 != '' %}- {{ shop.address2 }}{% endif %} - {{ shop.postalCode }} {{ shop.city }}</p>
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
                    <row>
                        <columns small=\"12\" large=\"12\" class=\"no-padding\">
                            <p class=\"small-size no-margin text-center\"><a class=\"grey\" href=\"##DESINSCRIPTION##\">Me désinscrire</a></p>
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
</html>", "@Marketing/inky/newsletter.model.html", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\MarketingBundle\\Resources\\views\\inky\\newsletter.model.html");
    }
}
