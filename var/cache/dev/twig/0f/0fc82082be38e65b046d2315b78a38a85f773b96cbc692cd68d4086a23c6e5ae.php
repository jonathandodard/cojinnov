<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_8cd5dabb7cddbd7f59e9a5b25cf09cec64bc1b5497841330beb92929706f1da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a8d13334443d701f9c155a32e1ce36268fa45db48ebedb02cfa2988f2c2d28f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d13334443d701f9c155a32e1ce36268fa45db48ebedb02cfa2988f2c2d28f0->enter($__internal_a8d13334443d701f9c155a32e1ce36268fa45db48ebedb02cfa2988f2c2d28f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_e42112790f9c6038d872abab303f678496fa9df554a21204b5d2376bba3c1387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42112790f9c6038d872abab303f678496fa9df554a21204b5d2376bba3c1387->enter($__internal_e42112790f9c6038d872abab303f678496fa9df554a21204b5d2376bba3c1387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8d13334443d701f9c155a32e1ce36268fa45db48ebedb02cfa2988f2c2d28f0->leave($__internal_a8d13334443d701f9c155a32e1ce36268fa45db48ebedb02cfa2988f2c2d28f0_prof);

        
        $__internal_e42112790f9c6038d872abab303f678496fa9df554a21204b5d2376bba3c1387->leave($__internal_e42112790f9c6038d872abab303f678496fa9df554a21204b5d2376bba3c1387_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f56cb506af36562ee16dc96715a05dfbb8f7ee0a515d659d3bbd24f053578906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56cb506af36562ee16dc96715a05dfbb8f7ee0a515d659d3bbd24f053578906->enter($__internal_f56cb506af36562ee16dc96715a05dfbb8f7ee0a515d659d3bbd24f053578906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_377f64c499a6e3b765381f5df90c7af9ffa389088fdceff7cc1cd457729eb2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377f64c499a6e3b765381f5df90c7af9ffa389088fdceff7cc1cd457729eb2bc->enter($__internal_377f64c499a6e3b765381f5df90c7af9ffa389088fdceff7cc1cd457729eb2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_377f64c499a6e3b765381f5df90c7af9ffa389088fdceff7cc1cd457729eb2bc->leave($__internal_377f64c499a6e3b765381f5df90c7af9ffa389088fdceff7cc1cd457729eb2bc_prof);

        
        $__internal_f56cb506af36562ee16dc96715a05dfbb8f7ee0a515d659d3bbd24f053578906->leave($__internal_f56cb506af36562ee16dc96715a05dfbb8f7ee0a515d659d3bbd24f053578906_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
