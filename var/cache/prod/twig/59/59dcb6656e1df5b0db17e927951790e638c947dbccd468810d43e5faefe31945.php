<?php

/* @Shop/Showing/index.html.twig */
class __TwigTemplate_7036a0a6f7e6206532f72c3625b77e8b865763d2adcef9a1fb3727c510b52716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Shop/Showing/base.html.twig", "@Shop/Showing/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Shop/Showing/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div id=\"carousel\" class=\"carousel slide\">
        <div class=\"carousel-inner\" role=\"listbox\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                ";
            if ((($this->getAttribute($context["item"], "type", array()) == "video") && ($this->getAttribute(($context["shopConfiguration"] ?? null), "showVideo", array()) == 1))) {
                // line 9
                echo "                    <div class=\"item\" data-video=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "videoId", array()), "html", null, true);
                echo "\" data-id=\"player";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\" data-number=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\">
                        <div id=\"player";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\"></div>
                    </div>
                ";
            } elseif (($this->getAttribute(            // line 12
$context["item"], "type", array()) == "picture")) {
                // line 13
                echo "                    <div class=\"item\" data-duration=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "length", array()), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "picture", array()), "html", null, true);
                echo "\">
                    </div>
                ";
            }
            // line 17
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            <div class=\"item active\" data-duration=\"20\">
                <div id=\"ephemeride\">
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/shop/image/ephemeride.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\"/>
                    <div id=\"today\">
                        <p class=\"today misobold\"></p>
                    </div>
                    <div id=\"tomorrow\">
                        <p class=\"intro misolight\">Demain nous fêterons</p>
                        <p class=\"tomorrow misobold\"></p>
                    </div>
                    <div id=\"aftertomorrow\">
                        <p class=\"intro misolight\">Après-demain nous fêterons</p>
                        <p class=\"aftertomorrow misobold\"></p>
                    </div>
                </div>
            </div>
            <div class=\"item\" data-duration=\"20\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"fb-page\" data-href=\"https://www.facebook.com/cadeaumaestro\" data-small-header=\"true\" data-width=\"470\" data-height=\"670\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"false\" data-show-posts=\"true\">
                                <div class=\"fb-xfbml-parse-ignore\">
                                    <blockquote cite=\"https://www.facebook.com/cadeaumaestro\">
                                        <a href=\"https://www.facebook.com/cadeaumaestro\">Cadeau, Maestro!</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                                        <div class=\"fader\">
                                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carouselProducts"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["carouselProduct"]) {
            // line 49
            echo "                                                <div style=\"background: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselProduct"], "picture", array()), "html", null, true);
            echo ") center center;";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " display: block;";
            }
            echo "\">
                                                    <h1 class=\"misobold\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselProduct"], "name", array()), "html", null, true);
            echo "</h1>
                                                    <p class=\"misobold\">
                                                        ";
            // line 52
            if (($this->getAttribute($context["carouselProduct"], "priceOld", array()) > $this->getAttribute($context["carouselProduct"], "price", array()))) {
                // line 53
                echo "                                                            <span class=\"price_old\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["carouselProduct"], "priceOld", array()), "html", null, true);
                echo " €</span>
                                                        ";
            }
            // line 55
            echo "                                                        <span class=\"price\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["carouselProduct"], "price", array()), "html", null, true);
            echo " €</span>

                                                    </p>
                                    </div>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carouselProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <a class=\"twitter-timeline\" href=\"https://twitter.com/search?q=%22cadeau%20maestro%22\" data-widget-id=\"589463499992129536\" data-chrome=\"nofooter noscrollbar transparent\">Tweets sur cadeau maestro</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div id=\"newsHeader\">
                                <span id=\"newsLogo\"></span>
                                <h2 class=\"pacifico\">Le Maestro Blog</h2>
                            </div>
                            <div id=\"newsContent\">
                                <p id=\"titreBlog\" class=\"miso_bold\"></p>
                                <p id=\"lisezPlus\">Lisez cet article sur notre blog Cadeau-Maestro.Com/Blog !</p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div id=\"instaHeader\">
                                <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/shop/image/instagram.png"), "html", null, true);
        echo "\" alt=\"Logo instagram\" class=\"logo\">
                            </div>
                            <iframe src=\"//widgets-code.websta.me/w/7a9b2dd1a965?ck=MjAxNi0wNS0xMVQwODozMDowMi4wMDBa\" id=\"websta-widgets\" class=\"websta-widgets\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"no\" style=\"border:none;overflow:hidden;width:840px; height: 210px; margin-left:4%; margin-top: 2%\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
    }

    // line 94
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 95
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/shop/css/app.css"), "html", null, true);
        echo "\" />
";
    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        // line 99
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/shop/js/ephemeride.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/shop/js/app.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://www.youtube.com/player_api\"></script>
    <script>
        var api_blog_feed = '";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("showing_api_blog");
        echo "';
        var playerList = [];
        var i = 0;
        var height = 0;

        function onYouTubeIframeAPIReady(){
            app.load.player_yt();
        }

        \$(document).ready(function () {
            app.load.carousel();
            app.ajax.blog_feed();
            app.load.ephemeride();
            app.tools.carousel();

            \$('.carousel').on('slid.bs.carousel', function (e) {
                app.load.carousel();
            });

            var refreshId2 = setInterval(app.scroll.twitter, 15000);

        });
    </script>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4&appId=404144079757052\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
";
    }

    public function getTemplateName()
    {
        return "@Shop/Showing/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 103,  250 => 100,  245 => 99,  242 => 98,  235 => 95,  232 => 94,  216 => 81,  193 => 60,  173 => 55,  167 => 53,  165 => 52,  160 => 50,  151 => 49,  134 => 48,  103 => 20,  99 => 18,  85 => 17,  79 => 14,  74 => 13,  72 => 12,  67 => 10,  58 => 9,  55 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Shop/Showing/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ShopBundle\\Resources\\views\\Showing\\index.html.twig");
    }
}
