<?php

/* FaultyProductBundle:supplier:index.html.twig */
class __TwigTemplate_29a1e1f078f9bd1de0cc1c7d7a294a95017abeccd5f45153c74d6f572508d412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FaultyProductBundle:supplier:index.html.twig", 1);
        $this->blocks = array(
            'product_date_send' => array($this, 'block_product_date_send'),
            'product_balance' => array($this, 'block_product_balance'),
            'product' => array($this, 'block_product'),
            'table_head' => array($this, 'block_table_head'),
            'table_head_date_send' => array($this, 'block_table_head_date_send'),
            'table_foot' => array($this, 'block_table_foot'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a42c7cb94df14b2602e37a3b573822aff7db8349a9a18766982373ef24f6a63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a42c7cb94df14b2602e37a3b573822aff7db8349a9a18766982373ef24f6a63->enter($__internal_3a42c7cb94df14b2602e37a3b573822aff7db8349a9a18766982373ef24f6a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:supplier:index.html.twig"));

        $__internal_b25191245097bda94571a655fd6dfece8ad04ca5aaa8cc3d8b83e5132bde4321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25191245097bda94571a655fd6dfece8ad04ca5aaa8cc3d8b83e5132bde4321->enter($__internal_b25191245097bda94571a655fd6dfece8ad04ca5aaa8cc3d8b83e5132bde4321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FaultyProductBundle:supplier:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a42c7cb94df14b2602e37a3b573822aff7db8349a9a18766982373ef24f6a63->leave($__internal_3a42c7cb94df14b2602e37a3b573822aff7db8349a9a18766982373ef24f6a63_prof);

        
        $__internal_b25191245097bda94571a655fd6dfece8ad04ca5aaa8cc3d8b83e5132bde4321->leave($__internal_b25191245097bda94571a655fd6dfece8ad04ca5aaa8cc3d8b83e5132bde4321_prof);

    }

    // line 3
    public function block_product_date_send($context, array $blocks = array())
    {
        $__internal_e4a4e701c7a6b85feae80d8a383ab99d00eef99538e0c26f17dd3b26a5e1d7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a4e701c7a6b85feae80d8a383ab99d00eef99538e0c26f17dd3b26a5e1d7de->enter($__internal_e4a4e701c7a6b85feae80d8a383ab99d00eef99538e0c26f17dd3b26a5e1d7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_date_send"));

        $__internal_aa3f3b3e3a229e373dcaf540c18931ca1a3078230a80b8321ba47cf332c21c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3f3b3e3a229e373dcaf540c18931ca1a3078230a80b8321ba47cf332c21c84->enter($__internal_aa3f3b3e3a229e373dcaf540c18931ca1a3078230a80b8321ba47cf332c21c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_date_send"));

        // line 4
        echo "    <tr>
        <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantity", array()), "html", null, true);
        echo "</td>
        <td><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_show", array("id" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</a></td>
        <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "supplierReference", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 8
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "costPrice", array()), 2), "html", null, true);
        echo " €</td>
        <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "formattedLocation", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "user", array()), "name", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "reason", array()), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "productImages", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["productImages"]) {
            // line 14
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productImages"], "picture", array()), "html", null, true);
            echo "\">image ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</a><br/>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </td>
        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "sendMailAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        <td>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Modifier le statut <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "new", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">A déclarer</a></li>
                    <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "mail_send", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">Mail envoyé</a></li>
                    <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "balance", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">Renvoi du fournisseur</a></li>
                    <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "refunded", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">Terminé / Remboursé</a></li>
                </ul>
            </div>
        </td>
    </tr>
";
        
        $__internal_aa3f3b3e3a229e373dcaf540c18931ca1a3078230a80b8321ba47cf332c21c84->leave($__internal_aa3f3b3e3a229e373dcaf540c18931ca1a3078230a80b8321ba47cf332c21c84_prof);

        
        $__internal_e4a4e701c7a6b85feae80d8a383ab99d00eef99538e0c26f17dd3b26a5e1d7de->leave($__internal_e4a4e701c7a6b85feae80d8a383ab99d00eef99538e0c26f17dd3b26a5e1d7de_prof);

    }

    // line 36
    public function block_product_balance($context, array $blocks = array())
    {
        $__internal_8149d6189197e5a1421733a8cb74a6f36629e3b01c3f988a8a03b357213ab4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8149d6189197e5a1421733a8cb74a6f36629e3b01c3f988a8a03b357213ab4ad->enter($__internal_8149d6189197e5a1421733a8cb74a6f36629e3b01c3f988a8a03b357213ab4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_balance"));

        $__internal_75317a6d6e52afc8b94417fd3e2f160c0990274bf9b4ea8920e0648e3dc7356c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75317a6d6e52afc8b94417fd3e2f160c0990274bf9b4ea8920e0648e3dc7356c->enter($__internal_75317a6d6e52afc8b94417fd3e2f160c0990274bf9b4ea8920e0648e3dc7356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_balance"));

        // line 37
        echo "    ";
        // line 38
        echo "    ";
        if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "sendMailAt", array()), "+3 month"), "Y-m-d") < twig_date_format_filter($this->env, ($context["now"] ?? $this->getContext($context, "now")), "Y-m-d"))) {
            // line 39
            echo "        <tr class=\"danger\">
    ";
        } else {
            // line 41
            echo "        <tr>
    ";
        }
        // line 43
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantity", array()), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_show", array("id" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</a></td>
    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "supplierReference", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "costPrice", array()), 2), "html", null, true);
        echo " €</td>
    <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "formattedLocation", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "user", array()), "name", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "reason", array()), "html", null, true);
        echo "</td>
    <td>
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "productImages", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["productImages"]) {
            // line 52
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productImages"], "picture", array()), "html", null, true);
            echo "\">image ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</a><br/>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </td>
    <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "sendMailAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
    <td>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Modifier le statut <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "new", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">A déclarer</a></li>
                <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "mail_send", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">Mail envoyé</a></li>
                <li><a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "balance", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">Renvoi du fournisseur</a></li>
                <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "refunded", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">Terminé / Remboursé</a></li>
            </ul>
        </div>
    </td>
    </tr>
";
        
        $__internal_75317a6d6e52afc8b94417fd3e2f160c0990274bf9b4ea8920e0648e3dc7356c->leave($__internal_75317a6d6e52afc8b94417fd3e2f160c0990274bf9b4ea8920e0648e3dc7356c_prof);

        
        $__internal_8149d6189197e5a1421733a8cb74a6f36629e3b01c3f988a8a03b357213ab4ad->leave($__internal_8149d6189197e5a1421733a8cb74a6f36629e3b01c3f988a8a03b357213ab4ad_prof);

    }

    // line 73
    public function block_product($context, array $blocks = array())
    {
        $__internal_2f5158035518a12adde71c3721dde63ec7ac626066c46fbc45d56a0b73683640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5158035518a12adde71c3721dde63ec7ac626066c46fbc45d56a0b73683640->enter($__internal_2f5158035518a12adde71c3721dde63ec7ac626066c46fbc45d56a0b73683640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product"));

        $__internal_f597b8afc90f1fd299b83c33ac95d9f6bbca54897077401af2325b785dc0b71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f597b8afc90f1fd299b83c33ac95d9f6bbca54897077401af2325b785dc0b71a->enter($__internal_f597b8afc90f1fd299b83c33ac95d9f6bbca54897077401af2325b785dc0b71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product"));

        // line 74
        echo "    <tr>
        <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "quantity", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "supplierReference", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "costPrice", array()), 2), "html", null, true);
        echo " €</td>
        <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "formattedLocation", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "user", array()), "name", array()), "html", null, true);
        echo "</td>
        <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "reason", array()), "html", null, true);
        echo "</td>
        <td>
            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "productImages", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["productImages"]) {
            // line 84
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["productImages"], "picture", array()), "html", null, true);
            echo "\">image ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</a><br/>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </td>
        <td>";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        <td>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Modifier le statut <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "new", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">A déclarer</a></li>
                    <li><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "mail_send", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">Mail envoyé</a></li>
                    <li><a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "balance", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">Renvoi du fournisseur</a></li>
                    <li><a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_faulty", array("faulty" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "faulty", array()), "id", array()), "to" => "refunded", "return" => ($context["status"] ?? $this->getContext($context, "status")), "supplier" => $this->getAttribute(($context["supplier"] ?? $this->getContext($context, "supplier")), "id", array()))), "html", null, true);
        echo "\">Terminé / Remboursé</a></li>
                </ul>
            </div>
        </td>
    </tr>
";
        
        $__internal_f597b8afc90f1fd299b83c33ac95d9f6bbca54897077401af2325b785dc0b71a->leave($__internal_f597b8afc90f1fd299b83c33ac95d9f6bbca54897077401af2325b785dc0b71a_prof);

        
        $__internal_2f5158035518a12adde71c3721dde63ec7ac626066c46fbc45d56a0b73683640->leave($__internal_2f5158035518a12adde71c3721dde63ec7ac626066c46fbc45d56a0b73683640_prof);

    }

    // line 104
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_8b5f702b1aeb9539244885e801e4cd4a328c178ffc8b0f969b4e7e925e1b84ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5f702b1aeb9539244885e801e4cd4a328c178ffc8b0f969b4e7e925e1b84ee->enter($__internal_8b5f702b1aeb9539244885e801e4cd4a328c178ffc8b0f969b4e7e925e1b84ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_8369a1e5b7f2bfeba623ed00d41fdfae5f4cb31d6a8afcb356928913fbc983a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8369a1e5b7f2bfeba623ed00d41fdfae5f4cb31d6a8afcb356928913fbc983a0->enter($__internal_8369a1e5b7f2bfeba623ed00d41fdfae5f4cb31d6a8afcb356928913fbc983a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 105
        echo "    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Quantité</th>
                <th>Nom du produit</th>
                <th>Référence fournisseur</th>
                <th>Prix</th>
                <th>Lieu</th>
                <th>Déclarant</th>
                <th>Raison</th>
                <th>Image</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
";
        
        $__internal_8369a1e5b7f2bfeba623ed00d41fdfae5f4cb31d6a8afcb356928913fbc983a0->leave($__internal_8369a1e5b7f2bfeba623ed00d41fdfae5f4cb31d6a8afcb356928913fbc983a0_prof);

        
        $__internal_8b5f702b1aeb9539244885e801e4cd4a328c178ffc8b0f969b4e7e925e1b84ee->leave($__internal_8b5f702b1aeb9539244885e801e4cd4a328c178ffc8b0f969b4e7e925e1b84ee_prof);

    }

    // line 123
    public function block_table_head_date_send($context, array $blocks = array())
    {
        $__internal_57e5273f53f9e8e87f79a2ef44f775b4534db94089df95e2682514d64e7ce5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e5273f53f9e8e87f79a2ef44f775b4534db94089df95e2682514d64e7ce5bb->enter($__internal_57e5273f53f9e8e87f79a2ef44f775b4534db94089df95e2682514d64e7ce5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head_date_send"));

        $__internal_0007a0896a6df0e29d3674bb8caddae0a62bcf12882e2b4da8e0598a87d34741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0007a0896a6df0e29d3674bb8caddae0a62bcf12882e2b4da8e0598a87d34741->enter($__internal_0007a0896a6df0e29d3674bb8caddae0a62bcf12882e2b4da8e0598a87d34741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head_date_send"));

        // line 124
        echo "    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Quantité</th>
                <th>Nom du produit</th>
                <th>Référence fournisseur</th>
                <th>Prix</th>
                <th>Lieu</th>
                <th>Déclarant</th>
                <th>Raison</th>
                <th>Image</th>
                <th>Date</th>
                <th>Date envoi de mail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
";
        
        $__internal_0007a0896a6df0e29d3674bb8caddae0a62bcf12882e2b4da8e0598a87d34741->leave($__internal_0007a0896a6df0e29d3674bb8caddae0a62bcf12882e2b4da8e0598a87d34741_prof);

        
        $__internal_57e5273f53f9e8e87f79a2ef44f775b4534db94089df95e2682514d64e7ce5bb->leave($__internal_57e5273f53f9e8e87f79a2ef44f775b4534db94089df95e2682514d64e7ce5bb_prof);

    }

    // line 143
    public function block_table_foot($context, array $blocks = array())
    {
        $__internal_7e9370b07797c8a737a06335a56be1e5cd61ae7ebf5726d93868d61a81fcd923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9370b07797c8a737a06335a56be1e5cd61ae7ebf5726d93868d61a81fcd923->enter($__internal_7e9370b07797c8a737a06335a56be1e5cd61ae7ebf5726d93868d61a81fcd923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_foot"));

        $__internal_68e66455b50653d1baa36c7f7a63dede9597c252987632fad3e6d5a72c357fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e66455b50653d1baa36c7f7a63dede9597c252987632fad3e6d5a72c357fb3->enter($__internal_68e66455b50653d1baa36c7f7a63dede9597c252987632fad3e6d5a72c357fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_foot"));

        // line 144
        echo "        </tbody>
    </table>
";
        
        $__internal_68e66455b50653d1baa36c7f7a63dede9597c252987632fad3e6d5a72c357fb3->leave($__internal_68e66455b50653d1baa36c7f7a63dede9597c252987632fad3e6d5a72c357fb3_prof);

        
        $__internal_7e9370b07797c8a737a06335a56be1e5cd61ae7ebf5726d93868d61a81fcd923->leave($__internal_7e9370b07797c8a737a06335a56be1e5cd61ae7ebf5726d93868d61a81fcd923_prof);

    }

    // line 148
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4486de99ff2206ff6a2f4266c71562dd8bf0bf7eb64acb07e7e5464d6b86545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4486de99ff2206ff6a2f4266c71562dd8bf0bf7eb64acb07e7e5464d6b86545->enter($__internal_b4486de99ff2206ff6a2f4266c71562dd8bf0bf7eb64acb07e7e5464d6b86545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c16970a80f3dec8bfda5b55a6fa1db93de5f7ac017cdf8e6fd5b268336247523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16970a80f3dec8bfda5b55a6fa1db93de5f7ac017cdf8e6fd5b268336247523->enter($__internal_c16970a80f3dec8bfda5b55a6fa1db93de5f7ac017cdf8e6fd5b268336247523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 149
        echo "    <h1>Liste des produits défectueux trié par fournisseurs</h1>

    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers"] ?? $this->getContext($context, "suppliers")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 152
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["supplier"], "products", array())) > 0)) {
                // line 153
                echo "            ";
                list($context["new"], $context["mail_send"], $context["refunded"], $context["balance"]) =                 array("", "", "", "");
                // line 154
                echo "            ";
                list($context["new_size"], $context["mail_send_size"], $context["refunded_size"], $context["balance_size"]) =                 array(0, 0, 0, 0);
                // line 155
                echo "
            ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["supplier"], "products", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 157
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "status", array()) == "new")) {
                        // line 158
                        echo "                    ";
                        ob_start();
                        // line 159
                        echo "                        ";
                        echo twig_escape_filter($this->env, ($context["new"] ?? $this->getContext($context, "new")), "html", null, true);
                        echo "
                        ";
                        // line 160
                        $this->displayBlock("product", $context, $blocks);
                        echo "
                    ";
                        $context["new"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 162
                        echo "                    ";
                        $context["new_size"] = (($context["new_size"] ?? $this->getContext($context, "new_size")) + 1);
                        // line 163
                        echo "                ";
                    }
                    // line 164
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "status", array()) == "mail_send")) {
                        // line 165
                        echo "                    ";
                        ob_start();
                        // line 166
                        echo "                        ";
                        echo twig_escape_filter($this->env, ($context["mail_send"] ?? $this->getContext($context, "mail_send")), "html", null, true);
                        echo "
                        ";
                        // line 167
                        $this->displayBlock("product_date_send", $context, $blocks);
                        echo "
                    ";
                        $context["mail_send"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 169
                        echo "                    ";
                        $context["mail_send_size"] = (($context["mail_send_size"] ?? $this->getContext($context, "mail_send_size")) + 1);
                        // line 170
                        echo "                ";
                    }
                    // line 171
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "status", array()) == "balance")) {
                        // line 172
                        echo "                    ";
                        ob_start();
                        // line 173
                        echo "                        ";
                        echo twig_escape_filter($this->env, ($context["balance"] ?? $this->getContext($context, "balance")), "html", null, true);
                        echo "
                        ";
                        // line 174
                        $this->displayBlock("product_balance", $context, $blocks);
                        echo "
                    ";
                        $context["balance"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 176
                        echo "                    ";
                        $context["balance_size"] = (($context["balance_size"] ?? $this->getContext($context, "balance_size")) + 1);
                        // line 177
                        echo "                ";
                    }
                    // line 178
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["product"], "faulty", array()), "status", array()) == "refunded")) {
                        // line 179
                        echo "                    ";
                        ob_start();
                        // line 180
                        echo "                        ";
                        echo twig_escape_filter($this->env, ($context["refunded"] ?? $this->getContext($context, "refunded")), "html", null, true);
                        echo "
                        ";
                        // line 181
                        $this->displayBlock("product_date_send", $context, $blocks);
                        echo "
                    ";
                        $context["refunded"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 183
                        echo "                    ";
                        $context["refunded_size"] = (($context["refunded_size"] ?? $this->getContext($context, "refunded_size")) + 1);
                        // line 184
                        echo "                ";
                    }
                    // line 185
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "
            ";
                // line 187
                if ((((((($context["new_size"] ?? $this->getContext($context, "new_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "new")) || ((($context["mail_send_size"] ?? $this->getContext($context, "mail_send_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "mail_send"))) || ((($context["balance_size"] ?? $this->getContext($context, "balance_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "balance"))) || ((($context["refunded_size"] ?? $this->getContext($context, "refunded_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "refunded")))) {
                    // line 188
                    echo "                <h1 id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "idPrestashopSupplier", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "name", array()), "html", null, true);
                    echo "</h1>

                ";
                    // line 190
                    $context["supplier_name_link"] = twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute($context["supplier"], "name", array())), array(" " => "_"));
                    // line 191
                    echo "
                <div>
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        ";
                    // line 194
                    $context["active"] = true;
                    // line 195
                    echo "                        ";
                    if (((($context["new_size"] ?? $this->getContext($context, "new_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "new"))) {
                        // line 196
                        echo "                            <li role=\"presentation\"";
                        if (($context["active"] ?? $this->getContext($context, "active"))) {
                            echo " class=\"active\"";
                        }
                        echo ">
                                <a href=\"#";
                        // line 197
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? $this->getContext($context, "supplier_name_link")), "html", null, true);
                        echo "new\" aria-controls=\"new\" role=\"tab\" data-toggle=\"tab\">A déclarer</a>
                            </li>
                            ";
                        // line 199
                        $context["active"] = false;
                        // line 200
                        echo "                        ";
                    }
                    // line 201
                    echo "                        ";
                    if (((($context["mail_send_size"] ?? $this->getContext($context, "mail_send_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "mail_send"))) {
                        // line 202
                        echo "                            <li role=\"presentation\"";
                        if (($context["active"] ?? $this->getContext($context, "active"))) {
                            echo " class=\"active\"";
                        }
                        echo ">
                                <a href=\"#";
                        // line 203
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? $this->getContext($context, "supplier_name_link")), "html", null, true);
                        echo "mail_send\" aria-controls=\"mail_send\" role=\"tab\" data-toggle=\"tab\">Mail envoyé</a>
                            </li>
                            ";
                        // line 205
                        $context["active"] = false;
                        // line 206
                        echo "                        ";
                    }
                    // line 207
                    echo "                        ";
                    if (((($context["balance_size"] ?? $this->getContext($context, "balance_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "balance"))) {
                        // line 208
                        echo "                            <li role=\"presentation\"";
                        if (($context["active"] ?? $this->getContext($context, "active"))) {
                            echo " class=\"active\"";
                        }
                        echo ">
                                <a href=\"#";
                        // line 209
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? $this->getContext($context, "supplier_name_link")), "html", null, true);
                        echo "balance\" aria-controls=\"balance\" role=\"tab\" data-toggle=\"tab\">Renvoi du fournisseur</a>
                            </li>
                            ";
                        // line 211
                        $context["active"] = false;
                        // line 212
                        echo "                        ";
                    }
                    // line 213
                    echo "                        ";
                    if (((($context["refunded_size"] ?? $this->getContext($context, "refunded_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "refunded"))) {
                        // line 214
                        echo "                            <li role=\"presentation\"";
                        if (($context["active"] ?? $this->getContext($context, "active"))) {
                            echo " class=\"active\"";
                        }
                        echo ">
                                <a href=\"#";
                        // line 215
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? $this->getContext($context, "supplier_name_link")), "html", null, true);
                        echo "refunded\" aria-controls=\"refunded\" role=\"tab\" data-toggle=\"tab\">Terminé / Remboursé</a>
                            </li>
                            ";
                        // line 217
                        $context["active"] = false;
                        // line 218
                        echo "                        ";
                    }
                    // line 219
                    echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
                    // line 221
                    $context["active"] = true;
                    // line 222
                    echo "                        ";
                    if (((($context["new_size"] ?? $this->getContext($context, "new_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "new"))) {
                        // line 223
                        echo "                            <div role=\"tabpanel\" class=\"tab-pane";
                        if (($context["active"] ?? $this->getContext($context, "active"))) {
                            echo " active";
                        }
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? $this->getContext($context, "supplier_name_link")), "html", null, true);
                        echo "new\">
                                ";
                        // line 224
                        $this->displayBlock("table_head", $context, $blocks);
                        echo twig_escape_filter($this->env, ($context["new"] ?? $this->getContext($context, "new")), "html", null, true);
                        $this->displayBlock("table_foot", $context, $blocks);
                        echo "
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                        // line 230
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "new", "to" => "mail_send", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">Mail envoyé</a></li>
                                        <li><a href=\"";
                        // line 231
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "new", "to" => "balance", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">Renvoi du fournisseur</a></li>
                                        <li><a href=\"";
                        // line 232
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "new", "to" => "refunded", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">Terminé / Remboursé</a></li>
                                    </ul>
                                </div>
                            </div>
                            ";
                        // line 236
                        $context["active"] = false;
                        // line 237
                        echo "                        ";
                    }
                    // line 238
                    echo "                        ";
                    if (((($context["mail_send_size"] ?? $this->getContext($context, "mail_send_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "mail_send"))) {
                        // line 239
                        echo "                            <div role=\"tabpanel\" class=\"tab-pane";
                        if (($context["active"] ?? $this->getContext($context, "active"))) {
                            echo " active";
                        }
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? $this->getContext($context, "supplier_name_link")), "html", null, true);
                        echo "mail_send\">
                                ";
                        // line 240
                        $this->displayBlock("table_head_date_send", $context, $blocks);
                        echo twig_escape_filter($this->env, ($context["mail_send"] ?? $this->getContext($context, "mail_send")), "html", null, true);
                        $this->displayBlock("table_foot", $context, $blocks);
                        echo "
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                        // line 246
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "mail_send", "to" => "new", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">A déclarer</a></li>
                                        <li><a href=\"";
                        // line 247
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "mail_send", "to" => "balance", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">Renvoi du fournisseur</a></li>
                                        <li><a href=\"";
                        // line 248
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "mail_send", "to" => "refunded", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">Terminé / Remboursé</a></li>
                                    </ul>
                                </div>
                            </div>
                            ";
                        // line 252
                        $context["active"] = false;
                        // line 253
                        echo "                        ";
                    }
                    // line 254
                    echo "                        ";
                    if (((($context["balance_size"] ?? $this->getContext($context, "balance_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "balance"))) {
                        // line 255
                        echo "                            <div role=\"tabpanel\" class=\"tab-pane";
                        if (($context["active"] ?? $this->getContext($context, "active"))) {
                            echo " active";
                        }
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? $this->getContext($context, "supplier_name_link")), "html", null, true);
                        echo "balance\">
                                ";
                        // line 256
                        $this->displayBlock("table_head_date_send", $context, $blocks);
                        echo twig_escape_filter($this->env, ($context["balance"] ?? $this->getContext($context, "balance")), "html", null, true);
                        $this->displayBlock("table_foot", $context, $blocks);
                        echo "
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                        // line 262
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "balance", "to" => "new", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">A déclarer</a></li>
                                        <li><a href=\"";
                        // line 263
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "balance", "to" => "mail_send", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">Mail envoyé</a></li>
                                        <li><a href=\"";
                        // line 264
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "balance", "to" => "refunded", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">Terminé / Remboursé</a></li>
                                    </ul>
                                </div>
                            </div>
                            ";
                        // line 268
                        $context["active"] = false;
                        // line 269
                        echo "                        ";
                    }
                    // line 270
                    echo "                        ";
                    if (((($context["refunded_size"] ?? $this->getContext($context, "refunded_size")) > 0) && (($context["status"] ?? $this->getContext($context, "status")) == "refunded"))) {
                        // line 271
                        echo "                            <div role=\"tabpanel\" class=\"tab-pane";
                        if (($context["active"] ?? $this->getContext($context, "active"))) {
                            echo " active";
                        }
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, ($context["supplier_name_link"] ?? $this->getContext($context, "supplier_name_link")), "html", null, true);
                        echo "refunded\">
                                ";
                        // line 272
                        $this->displayBlock("table_head_date_send", $context, $blocks);
                        echo twig_escape_filter($this->env, ($context["refunded"] ?? $this->getContext($context, "refunded")), "html", null, true);
                        $this->displayBlock("table_foot", $context, $blocks);
                        echo "
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
                        // line 278
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "refunded", "to" => "new", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">A déclarer</a></li>
                                        <li><a href=\"";
                        // line 279
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "refunded", "to" => "mail_send", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">Mail envoyé</a></li>
                                        <li><a href=\"";
                        // line 280
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faulty_status_supplier", array("supplier" => $this->getAttribute($context["supplier"], "id", array()), "from" => "refunded", "to" => "balance", "return" => ($context["status"] ?? $this->getContext($context, "status")))), "html", null, true);
                        echo "\">Renvoi du fournisseur</a></li>
                                    </ul>
                                </div>
                            </div>
                            ";
                        // line 284
                        $context["active"] = false;
                        // line 285
                        echo "                        ";
                    }
                    // line 286
                    echo "                    </div>
                </div>
            ";
                }
                // line 289
                echo "        ";
            }
            // line 290
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c16970a80f3dec8bfda5b55a6fa1db93de5f7ac017cdf8e6fd5b268336247523->leave($__internal_c16970a80f3dec8bfda5b55a6fa1db93de5f7ac017cdf8e6fd5b268336247523_prof);

        
        $__internal_b4486de99ff2206ff6a2f4266c71562dd8bf0bf7eb64acb07e7e5464d6b86545->leave($__internal_b4486de99ff2206ff6a2f4266c71562dd8bf0bf7eb64acb07e7e5464d6b86545_prof);

    }

    public function getTemplateName()
    {
        return "FaultyProductBundle:supplier:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  964 => 290,  961 => 289,  956 => 286,  953 => 285,  951 => 284,  944 => 280,  940 => 279,  936 => 278,  925 => 272,  916 => 271,  913 => 270,  910 => 269,  908 => 268,  901 => 264,  897 => 263,  893 => 262,  882 => 256,  873 => 255,  870 => 254,  867 => 253,  865 => 252,  858 => 248,  854 => 247,  850 => 246,  839 => 240,  830 => 239,  827 => 238,  824 => 237,  822 => 236,  815 => 232,  811 => 231,  807 => 230,  796 => 224,  787 => 223,  784 => 222,  782 => 221,  778 => 219,  775 => 218,  773 => 217,  768 => 215,  761 => 214,  758 => 213,  755 => 212,  753 => 211,  748 => 209,  741 => 208,  738 => 207,  735 => 206,  733 => 205,  728 => 203,  721 => 202,  718 => 201,  715 => 200,  713 => 199,  708 => 197,  701 => 196,  698 => 195,  696 => 194,  691 => 191,  689 => 190,  681 => 188,  679 => 187,  676 => 186,  662 => 185,  659 => 184,  656 => 183,  651 => 181,  646 => 180,  643 => 179,  640 => 178,  637 => 177,  634 => 176,  629 => 174,  624 => 173,  621 => 172,  618 => 171,  615 => 170,  612 => 169,  607 => 167,  602 => 166,  599 => 165,  596 => 164,  593 => 163,  590 => 162,  585 => 160,  580 => 159,  577 => 158,  574 => 157,  557 => 156,  554 => 155,  551 => 154,  548 => 153,  545 => 152,  528 => 151,  524 => 149,  515 => 148,  503 => 144,  494 => 143,  467 => 124,  458 => 123,  432 => 105,  423 => 104,  407 => 97,  403 => 96,  399 => 95,  395 => 94,  385 => 87,  382 => 86,  363 => 84,  346 => 83,  341 => 81,  337 => 80,  333 => 79,  329 => 78,  325 => 77,  321 => 76,  317 => 75,  314 => 74,  305 => 73,  289 => 66,  285 => 65,  281 => 64,  277 => 63,  267 => 56,  263 => 55,  260 => 54,  241 => 52,  224 => 51,  219 => 49,  215 => 48,  211 => 47,  207 => 46,  203 => 45,  197 => 44,  192 => 43,  188 => 41,  184 => 39,  181 => 38,  179 => 37,  170 => 36,  154 => 28,  150 => 27,  146 => 26,  142 => 25,  132 => 18,  128 => 17,  125 => 16,  106 => 14,  89 => 13,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  68 => 7,  62 => 6,  58 => 5,  55 => 4,  46 => 3,  11 => 1,);
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

{% block product_date_send %}
    <tr>
        <td>{{ product.quantity }}</td>
        <td><a href=\"{{ path('faulty_show', {'id': product.faulty.id}) }}\">{{ product.name }}</a></td>
        <td>{{ product.supplierReference }}</td>
        <td>{{ product.costPrice|number_format(2) }} €</td>
        <td>{{ product.formattedLocation }}</td>
        <td>{{ product.faulty.user.name }}</td>
        <td>{{ product.faulty.reason }}</td>
        <td>
            {% for productImages in product.productImages %}
                <a href=\"{{ productImages.picture }}\">image {{ loop.index }}</a><br/>
            {% endfor %}
        </td>
        <td>{{ product.faulty.createdAt|date(\"Y-m-d H:i:s\") }}</td>
        <td>{{ product.faulty.sendMailAt|date(\"Y-m-d H:i:s\") }}</td>
        <td>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Modifier le statut <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'new', 'return':status, 'supplier':supplier.id}) }}\">A déclarer</a></li>
                    <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'mail_send', 'return':status, 'supplier':supplier.id}) }}\">Mail envoyé</a></li>
                    <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'balance', 'return':status, 'supplier':supplier.id}) }}\">Renvoi du fournisseur</a></li>
                    <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'refunded', 'return':status, 'supplier':supplier.id}) }}\">Terminé / Remboursé</a></li>
                </ul>
            </div>
        </td>
    </tr>
{% endblock %}

{#Block concernant les renvois fournisseurs#}
{% block product_balance %}
    {#Si la date de l'envoi du mail a dépassé 3 mois, la ligne devient rouge#}
    {% if product.faulty.sendMailAt|date_modify(\"+3 month\")|date(\"Y-m-d\") < now|date(\"Y-m-d\") %}
        <tr class=\"danger\">
    {% else %}
        <tr>
    {% endif %}
    <td>{{ product.quantity }}</td>
    <td><a href=\"{{ path('faulty_show', {'id': product.faulty.id}) }}\">{{ product.name }}</a></td>
    <td>{{ product.supplierReference }}</td>
    <td>{{ product.costPrice|number_format(2) }} €</td>
    <td>{{ product.formattedLocation }}</td>
    <td>{{ product.faulty.user.name }}</td>
    <td>{{ product.faulty.reason }}</td>
    <td>
        {% for productImages in product.productImages %}
            <a href=\"{{ productImages.picture }}\">image {{ loop.index }}</a><br/>
        {% endfor %}
    </td>
    <td>{{ product.faulty.createdAt|date(\"Y-m-d H:i:s\") }}</td>
    <td>{{ product.faulty.sendMailAt|date(\"Y-m-d H:i:s\") }}</td>
    <td>
        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Modifier le statut <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'new', 'return':status, 'supplier':supplier.id}) }}\">A déclarer</a></li>
                <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'mail_send', 'return':status, 'supplier':supplier.id}) }}\">Mail envoyé</a></li>
                <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'balance', 'return':status, 'supplier':supplier.id}) }}\">Renvoi du fournisseur</a></li>
                <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'refunded', 'return':status, 'supplier':supplier.id}) }}\">Terminé / Remboursé</a></li>
            </ul>
        </div>
    </td>
    </tr>
{% endblock %}

{% block product %}
    <tr>
        <td>{{ product.quantity }}</td>
        <td>{{ product.name }}</td>
        <td>{{ product.supplierReference }}</td>
        <td>{{ product.costPrice|number_format(2) }} €</td>
        <td>{{ product.formattedLocation }}</td>
        <td>{{ product.faulty.user.name }}</td>
        <td>{{ product.faulty.reason }}</td>
        <td>
            {% for productImages in product.productImages %}
                <a href=\"{{ productImages.picture }}\">image {{ loop.index }}</a><br/>
            {% endfor %}
        </td>
        <td>{{ product.faulty.createdAt|date(\"Y-m-d H:i:s\") }}</td>
        <td>
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Modifier le statut <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'new', 'return':status, 'supplier':supplier.id}) }}\">A déclarer</a></li>
                    <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'mail_send', 'return':status, 'supplier':supplier.id}) }}\">Mail envoyé</a></li>
                    <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'balance', 'return':status, 'supplier':supplier.id}) }}\">Renvoi du fournisseur</a></li>
                    <li><a href=\"{{ path('faulty_status_faulty', {'faulty':product.faulty.id, 'to':'refunded', 'return':status, 'supplier':supplier.id}) }}\">Terminé / Remboursé</a></li>
                </ul>
            </div>
        </td>
    </tr>
{% endblock %}

{% block table_head %}
    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Quantité</th>
                <th>Nom du produit</th>
                <th>Référence fournisseur</th>
                <th>Prix</th>
                <th>Lieu</th>
                <th>Déclarant</th>
                <th>Raison</th>
                <th>Image</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
{% endblock %}

{% block table_head_date_send %}
    <table class=\"table table-bordered table-hover\">
        <thead>
            <tr>
                <th>Quantité</th>
                <th>Nom du produit</th>
                <th>Référence fournisseur</th>
                <th>Prix</th>
                <th>Lieu</th>
                <th>Déclarant</th>
                <th>Raison</th>
                <th>Image</th>
                <th>Date</th>
                <th>Date envoi de mail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
{% endblock %}

{% block table_foot %}
        </tbody>
    </table>
{% endblock %}

{% block body %}
    <h1>Liste des produits défectueux trié par fournisseurs</h1>

    {% for supplier in suppliers %}
        {% if supplier.products|length > 0 %}
            {% set new, mail_send, refunded, balance = '', '', '', '' %}
            {% set new_size, mail_send_size, refunded_size, balance_size = 0,0,0,0 %}

            {% for product in supplier.products %}
                {% if product.faulty.status == 'new' %}
                    {% set new %}
                        {{ new }}
                        {{ block('product') }}
                    {% endset %}
                    {% set new_size = new_size+1 %}
                {% endif %}
                {% if product.faulty.status == 'mail_send' %}
                    {% set mail_send %}
                        {{ mail_send }}
                        {{ block('product_date_send') }}
                    {% endset %}
                    {% set mail_send_size = mail_send_size+1 %}
                {% endif %}
                {% if product.faulty.status == 'balance' %}
                    {% set balance %}
                        {{ balance }}
                        {{ block('product_balance') }}
                    {% endset %}
                    {% set balance_size = balance_size+1 %}
                {% endif %}
                {% if product.faulty.status == 'refunded' %}
                    {% set refunded %}
                        {{ refunded }}
                        {{ block('product_date_send') }}
                    {% endset %}
                    {% set refunded_size = refunded_size+1 %}
                {% endif %}
            {% endfor %}

            {% if (new_size > 0 and status == 'new') or (mail_send_size > 0 and status == 'mail_send') or (balance_size > 0 and status == 'balance') or (refunded_size > 0 and status == 'refunded') %}
                <h1 id=\"{{ supplier.idPrestashopSupplier }}\">{{ supplier.name }}</h1>

                {% set supplier_name_link = supplier.name|escape|replace({' ': '_'}) %}

                <div>
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        {% set active = true %}
                        {% if new_size > 0 and status == 'new' %}
                            <li role=\"presentation\"{% if active %} class=\"active\"{% endif %}>
                                <a href=\"#{{ supplier_name_link }}new\" aria-controls=\"new\" role=\"tab\" data-toggle=\"tab\">A déclarer</a>
                            </li>
                            {% set active = false %}
                        {% endif %}
                        {% if mail_send_size > 0 and status == 'mail_send' %}
                            <li role=\"presentation\"{% if active %} class=\"active\"{% endif %}>
                                <a href=\"#{{ supplier_name_link }}mail_send\" aria-controls=\"mail_send\" role=\"tab\" data-toggle=\"tab\">Mail envoyé</a>
                            </li>
                            {% set active = false %}
                        {% endif %}
                        {% if balance_size > 0 and status == 'balance' %}
                            <li role=\"presentation\"{% if active %} class=\"active\"{% endif %}>
                                <a href=\"#{{ supplier_name_link }}balance\" aria-controls=\"balance\" role=\"tab\" data-toggle=\"tab\">Renvoi du fournisseur</a>
                            </li>
                            {% set active = false %}
                        {% endif %}
                        {% if refunded_size > 0 and status == 'refunded' %}
                            <li role=\"presentation\"{% if active %} class=\"active\"{% endif %}>
                                <a href=\"#{{ supplier_name_link }}refunded\" aria-controls=\"refunded\" role=\"tab\" data-toggle=\"tab\">Terminé / Remboursé</a>
                            </li>
                            {% set active = false %}
                        {% endif %}
                    </ul>
                    <div class=\"tab-content\">
                        {% set active = true %}
                        {% if new_size > 0 and status == 'new' %}
                            <div role=\"tabpanel\" class=\"tab-pane{% if active %} active{% endif %}\" id=\"{{ supplier_name_link }}new\">
                                {{ block('table_head') }}{{ new }}{{ block('table_foot') }}
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'new', 'to':'mail_send', 'return':status}) }}\">Mail envoyé</a></li>
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'new', 'to':'balance', 'return':status}) }}\">Renvoi du fournisseur</a></li>
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'new', 'to':'refunded', 'return':status}) }}\">Terminé / Remboursé</a></li>
                                    </ul>
                                </div>
                            </div>
                            {% set active = false %}
                        {% endif %}
                        {% if mail_send_size > 0 and status == 'mail_send' %}
                            <div role=\"tabpanel\" class=\"tab-pane{% if active %} active{% endif %}\" id=\"{{ supplier_name_link }}mail_send\">
                                {{ block('table_head_date_send') }}{{ mail_send }}{{ block('table_foot') }}
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'mail_send', 'to':'new', 'return':status}) }}\">A déclarer</a></li>
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'mail_send', 'to':'balance', 'return':status}) }}\">Renvoi du fournisseur</a></li>
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'mail_send', 'to':'refunded', 'return':status}) }}\">Terminé / Remboursé</a></li>
                                    </ul>
                                </div>
                            </div>
                            {% set active = false %}
                        {% endif %}
                        {% if balance_size > 0 and status == 'balance' %}
                            <div role=\"tabpanel\" class=\"tab-pane{% if active %} active{% endif %}\" id=\"{{ supplier_name_link }}balance\">
                                {{ block('table_head_date_send') }}{{ balance }}{{ block('table_foot') }}
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'balance', 'to':'new', 'return':status}) }}\">A déclarer</a></li>
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'balance', 'to':'mail_send', 'return':status}) }}\">Mail envoyé</a></li>
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'balance', 'to':'refunded', 'return':status}) }}\">Terminé / Remboursé</a></li>
                                    </ul>
                                </div>
                            </div>
                            {% set active = false %}
                        {% endif %}
                        {% if refunded_size > 0 and status == 'refunded' %}
                            <div role=\"tabpanel\" class=\"tab-pane{% if active %} active{% endif %}\" id=\"{{ supplier_name_link }}refunded\">
                                {{ block('table_head_date_send') }}{{ refunded }}{{ block('table_foot') }}
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Modifier le statut de tous les produits <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'refunded', 'to':'new', 'return':status}) }}\">A déclarer</a></li>
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'refunded', 'to':'mail_send', 'return':status}) }}\">Mail envoyé</a></li>
                                        <li><a href=\"{{ path('faulty_status_supplier', {'supplier':supplier.id, 'from':'refunded', 'to':'balance', 'return':status}) }}\">Renvoi du fournisseur</a></li>
                                    </ul>
                                </div>
                            </div>
                            {% set active = false %}
                        {% endif %}
                    </div>
                </div>
            {% endif %}
        {% endif %}
    {% endfor %}
{% endblock %}", "FaultyProductBundle:supplier:index.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\src\\FaultyProductBundle/Resources/views/supplier/index.html.twig");
    }
}
