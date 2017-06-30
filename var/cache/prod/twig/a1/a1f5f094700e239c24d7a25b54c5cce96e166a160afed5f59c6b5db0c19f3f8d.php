<?php

/* @ModerateReview/Default/index.html.twig */
class __TwigTemplate_5b73dee740e7faa156360e76cef3cfd75551b72f702a1538e2c3fc2aa4503722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@ModerateReview/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "    <h1>Suppression avis client</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "

    <div id=\"info_order\" class=\"alert alert-info\" role=\"alert\" style=\"display: none\">
        <p id=\"id\"></p>
        <p id=\"name\"></p>
        <p id=\"mail\"></p>
        <p id=\"date\"></p>
        <p id=\"support\"></p>
        <input type=\"hidden\" id=\"id_order\" name=\"id_order\" value=\"\"/>
        <button>Confirmer suppression avis</button>
    </div>

    <div id=\"error_order\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none\">
        La commande n'existe pas !
    </div>

    <div id=\"deleted_order\" class=\"alert alert-success\" role=\"alert\" style=\"display: none\">
        L'avis client à bien été supprimé
    </div>

    <div id=\"already_deleted_order\" class=\"alert alert-warning\" role=\"alert\" style=\"display: none\">
        L'avis client à déjà été supprimé
    </div>


";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "    <script type=\"application/javascript\">
        \$(document).ready(function () {

            \$('#delete_order button').on('click', function (e) {
                \$(\"#info_order\").hide();
                \$(\"#error_order\").hide();
                \$(\"#deleted_order\").hide();
                \$(\"#already_deleted_order\").hide();
                e.preventDefault();
                var idOrder = \$('#delete_order input').val();
                \$.post({
                    url: '";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moderate_review_order");
        echo "',
                    data: {
                        id: idOrder
                    },
                    dataType : 'json'
                }, function (data) {
                    if(data.id != 0) {
                        \$(\"#info_order #id\").html(data.id);
                        \$(\"#info_order #id_order\").val(data.id);
                        \$(\"#info_order #name\").html(data.name + \" \" + data.surname);
                        \$(\"#info_order #mail\").html(data.mail);
                        \$(\"#info_order #date\").html(data.date_add);
                        if(data.id%2 == 0){
                            \$(\"#info_order #support\").html(\"Trustpilot\");
                        }else{
                            \$(\"#info_order #support\").html(\"eKomi\");
                        }
                        \$(\"#info_order\").show();
                    }else{
                        \$(\"#error_order\").show();
                    }
                });
            });
            \$('#info_order button').on('click', function (e) {
                \$(\"#info_order\").hide();
                \$(\"#error_order\").hide();
                \$(\"#deleted_order\").hide();
                \$(\"#already_deleted_order\").hide();
                e.preventDefault();
                var idOrder = \$('#delete_order input').val();
                \$.post({
                    url: '";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moderate_review_delete");
        echo "',
                    data: {
                        id: idOrder
                    },
                    dataType : 'json'
                }, function (data) {
                    if(data.status == 1){
                        \$(\"#deleted_order\").show();
                    }else if(data.status == 2){
                        \$(\"#already_deleted_order\").show();
                    }
                });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@ModerateReview/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 76,  82 => 45,  69 => 34,  66 => 33,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ModerateReview/Default/index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\ModerateReviewBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
