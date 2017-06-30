<?php

/* FaultyProductBundle:faulty:edit.html.twig */
class __TwigTemplate_525e22daafaf9e5e286465d1e078ac43f478133bc639e2cce38fdd3fe48e168d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FaultyProductBundle:faulty:edit.html.twig", 1);
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
        $__internal_f8a032957cc302e1bd2f72ecaba59dc589c7e98354e7361eff7e845e907bf2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a032957cc302e1bd2f72ecaba59dc589c7e98354e7361eff7e845e907bf2f0->enter($__internal_f8a032957cc302e1bd2f72ecaba59dc589c7e98354e7361eff7e845e907bf2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faulty:edit.html.twig"));

        $__internal_db03840cfd785a96df775fd45f19ccc3bdca2928b6920b4b4346a36bbb5daeb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db03840cfd785a96df775fd45f19ccc3bdca2928b6920b4b4346a36bbb5daeb1->enter($__internal_db03840cfd785a96df775fd45f19ccc3bdca2928b6920b4b4346a36bbb5daeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:faulty:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a032957cc302e1bd2f72ecaba59dc589c7e98354e7361eff7e845e907bf2f0->leave($__internal_f8a032957cc302e1bd2f72ecaba59dc589c7e98354e7361eff7e845e907bf2f0_prof);

        
        $__internal_db03840cfd785a96df775fd45f19ccc3bdca2928b6920b4b4346a36bbb5daeb1->leave($__internal_db03840cfd785a96df775fd45f19ccc3bdca2928b6920b4b4346a36bbb5daeb1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2ab3094097393e8167618b1b4cf14fbd8cfa188214f53a99a0938e7b4a9ee2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ab3094097393e8167618b1b4cf14fbd8cfa188214f53a99a0938e7b4a9ee2b->enter($__internal_b2ab3094097393e8167618b1b4cf14fbd8cfa188214f53a99a0938e7b4a9ee2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e61b6647e2e4ac27208438977ca3448aaa3621c43a22ff80ea4ea3a8c4122a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61b6647e2e4ac27208438977ca3448aaa3621c43a22ff80ea4ea3a8c4122a90->enter($__internal_e61b6647e2e4ac27208438977ca3448aaa3621c43a22ff80ea4ea3a8c4122a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier le défectueux</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <div id=\"searchProduct\" class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"title\"></h4>
                </div>
                <div class=\"modal-body\"></div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_index");
        echo "\">
            Retour à la liste
        </a>
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </p>
";
        
        $__internal_e61b6647e2e4ac27208438977ca3448aaa3621c43a22ff80ea4ea3a8c4122a90->leave($__internal_e61b6647e2e4ac27208438977ca3448aaa3621c43a22ff80ea4ea3a8c4122a90_prof);

        
        $__internal_b2ab3094097393e8167618b1b4cf14fbd8cfa188214f53a99a0938e7b4a9ee2b->leave($__internal_b2ab3094097393e8167618b1b4cf14fbd8cfa188214f53a99a0938e7b4a9ee2b_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be1215eea488e9de6143116f83823286c65662a876343cd16d5424b7fe97b0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1215eea488e9de6143116f83823286c65662a876343cd16d5424b7fe97b0e3->enter($__internal_be1215eea488e9de6143116f83823286c65662a876343cd16d5424b7fe97b0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fbae370aaac27f9a4acb4d92601a79ac932a179d85674228fb2315d11130f289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbae370aaac27f9a4acb4d92601a79ac932a179d85674228fb2315d11130f289->enter($__internal_fbae370aaac27f9a4acb4d92601a79ac932a179d85674228fb2315d11130f289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/faultyproduct/js/jquery.collection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/faultyproduct/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/faultyproduct/js/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fbae370aaac27f9a4acb4d92601a79ac932a179d85674228fb2315d11130f289->leave($__internal_fbae370aaac27f9a4acb4d92601a79ac932a179d85674228fb2315d11130f289_prof);

        
        $__internal_be1215eea488e9de6143116f83823286c65662a876343cd16d5424b7fe97b0e3->leave($__internal_be1215eea488e9de6143116f83823286c65662a876343cd16d5424b7fe97b0e3_prof);

    }

    public function getTemplateName()
    {
        return "FaultyProductBundle:faulty:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  130 => 40,  126 => 39,  122 => 38,  117 => 37,  108 => 36,  95 => 32,  90 => 30,  84 => 27,  63 => 9,  58 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Modifier le défectueux</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
    <p class=\"text-center\"><input class=\"btn btn-warning\" type=\"submit\" value=\"Modifier\" /></p>
    {{ form_end(edit_form) }}

    <div id=\"searchProduct\" class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"title\"></h4>
                </div>
                <div class=\"modal-body\"></div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <p class=\"text-right\">
        <a class=\"btn btn-default\" href=\"{{ path('faulty_index') }}\">
            Retour à la liste
        </a>
        {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
    </p>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('bundles/faultyproduct/js/jquery.collection.js') }}\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('bundles/faultyproduct/js/imagesloaded.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/faultyproduct/js/app.js') }}\"></script>
{% endblock %}", "FaultyProductBundle:faulty:edit.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/faulty/edit.html.twig");
    }
}
