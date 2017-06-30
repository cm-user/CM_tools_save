<?php

/* UserBundle:Default:base.html.twig */
class __TwigTemplate_98e333c4d55e2af3993a8c6b8e7473db953117bad33a478776329a8e348c606f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Default:base.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30726c0f4681dc3cac626f1c605bf47da1a9d8057971edcfc3012e67deeeca52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30726c0f4681dc3cac626f1c605bf47da1a9d8057971edcfc3012e67deeeca52->enter($__internal_30726c0f4681dc3cac626f1c605bf47da1a9d8057971edcfc3012e67deeeca52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:base.html.twig"));

        $__internal_95d034f291da0b9b2ec002c4f39759dba29e72cb762343fbf39eb1c593a951df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d034f291da0b9b2ec002c4f39759dba29e72cb762343fbf39eb1c593a951df->enter($__internal_95d034f291da0b9b2ec002c4f39759dba29e72cb762343fbf39eb1c593a951df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30726c0f4681dc3cac626f1c605bf47da1a9d8057971edcfc3012e67deeeca52->leave($__internal_30726c0f4681dc3cac626f1c605bf47da1a9d8057971edcfc3012e67deeeca52_prof);

        
        $__internal_95d034f291da0b9b2ec002c4f39759dba29e72cb762343fbf39eb1c593a951df->leave($__internal_95d034f291da0b9b2ec002c4f39759dba29e72cb762343fbf39eb1c593a951df_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_70b44e77576d134b6dc25ee4f4de63204ca775a86b09ea372b27c6fb41ba467a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b44e77576d134b6dc25ee4f4de63204ca775a86b09ea372b27c6fb41ba467a->enter($__internal_70b44e77576d134b6dc25ee4f4de63204ca775a86b09ea372b27c6fb41ba467a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cfd407f7ab2694fe2954986c3e6df6f132e3fac291fe749fb3c2042cc0f7cfdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd407f7ab2694fe2954986c3e6df6f132e3fac291fe749fb3c2042cc0f7cfdf->enter($__internal_cfd407f7ab2694fe2954986c3e6df6f132e3fac291fe749fb3c2042cc0f7cfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Coucou !";
        
        $__internal_cfd407f7ab2694fe2954986c3e6df6f132e3fac291fe749fb3c2042cc0f7cfdf->leave($__internal_cfd407f7ab2694fe2954986c3e6df6f132e3fac291fe749fb3c2042cc0f7cfdf_prof);

        
        $__internal_70b44e77576d134b6dc25ee4f4de63204ca775a86b09ea372b27c6fb41ba467a->leave($__internal_70b44e77576d134b6dc25ee4f4de63204ca775a86b09ea372b27c6fb41ba467a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}Coucou !{% endblock %}", "UserBundle:Default:base.html.twig", "C:\\Users\\Okaou\\Downloads\\SAVE1\\CM_tools_save\\vendor\\unicorn\\user-bundle\\Unicorn\\Bundle\\UserBundle/Resources/views/Default/base.html.twig");
    }
}
