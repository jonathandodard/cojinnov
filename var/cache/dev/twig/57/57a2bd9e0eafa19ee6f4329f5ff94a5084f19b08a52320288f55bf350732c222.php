<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c4f59bb411bf08e47a2b47008f757a48f67e5e529f28980527914954ca778905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65d7115d3fd6e118fb4b903f7b9ebdc27d0f53ef7908b5895eef1e21977b4624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d7115d3fd6e118fb4b903f7b9ebdc27d0f53ef7908b5895eef1e21977b4624->enter($__internal_65d7115d3fd6e118fb4b903f7b9ebdc27d0f53ef7908b5895eef1e21977b4624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d576742c4bbdb523216f91853d1361df0ccb05748d90297a4c5f88dc2eabb298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d576742c4bbdb523216f91853d1361df0ccb05748d90297a4c5f88dc2eabb298->enter($__internal_d576742c4bbdb523216f91853d1361df0ccb05748d90297a4c5f88dc2eabb298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65d7115d3fd6e118fb4b903f7b9ebdc27d0f53ef7908b5895eef1e21977b4624->leave($__internal_65d7115d3fd6e118fb4b903f7b9ebdc27d0f53ef7908b5895eef1e21977b4624_prof);

        
        $__internal_d576742c4bbdb523216f91853d1361df0ccb05748d90297a4c5f88dc2eabb298->leave($__internal_d576742c4bbdb523216f91853d1361df0ccb05748d90297a4c5f88dc2eabb298_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_337a1b0698e9787e39bf3afeb6b6fc19f568464889bac423fc87c76b5f004015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337a1b0698e9787e39bf3afeb6b6fc19f568464889bac423fc87c76b5f004015->enter($__internal_337a1b0698e9787e39bf3afeb6b6fc19f568464889bac423fc87c76b5f004015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8596f8e96a1cccba63f72623e36d50745276d99aced17232bd3cd3e5a907e32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8596f8e96a1cccba63f72623e36d50745276d99aced17232bd3cd3e5a907e32f->enter($__internal_8596f8e96a1cccba63f72623e36d50745276d99aced17232bd3cd3e5a907e32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8596f8e96a1cccba63f72623e36d50745276d99aced17232bd3cd3e5a907e32f->leave($__internal_8596f8e96a1cccba63f72623e36d50745276d99aced17232bd3cd3e5a907e32f_prof);

        
        $__internal_337a1b0698e9787e39bf3afeb6b6fc19f568464889bac423fc87c76b5f004015->leave($__internal_337a1b0698e9787e39bf3afeb6b6fc19f568464889bac423fc87c76b5f004015_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
