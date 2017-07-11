<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8da44bcdea30fb3bce82794837dbb5297a9a1ca912ab6945a5c0372627a7abcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_f2f18cdd75e303c216a0eb353dfedaad0258c52afd40d74bb7a4e82bda9ee1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f18cdd75e303c216a0eb353dfedaad0258c52afd40d74bb7a4e82bda9ee1e3->enter($__internal_f2f18cdd75e303c216a0eb353dfedaad0258c52afd40d74bb7a4e82bda9ee1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_1b6ca147fe8e088e968a3bea1d658abbb9b96cebcb846d361c159bb5376cf93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6ca147fe8e088e968a3bea1d658abbb9b96cebcb846d361c159bb5376cf93c->enter($__internal_1b6ca147fe8e088e968a3bea1d658abbb9b96cebcb846d361c159bb5376cf93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f18cdd75e303c216a0eb353dfedaad0258c52afd40d74bb7a4e82bda9ee1e3->leave($__internal_f2f18cdd75e303c216a0eb353dfedaad0258c52afd40d74bb7a4e82bda9ee1e3_prof);

        
        $__internal_1b6ca147fe8e088e968a3bea1d658abbb9b96cebcb846d361c159bb5376cf93c->leave($__internal_1b6ca147fe8e088e968a3bea1d658abbb9b96cebcb846d361c159bb5376cf93c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_524688327fa21c9e4e3125d605bda8c3263654638083a000fdaf1fc5d9983970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524688327fa21c9e4e3125d605bda8c3263654638083a000fdaf1fc5d9983970->enter($__internal_524688327fa21c9e4e3125d605bda8c3263654638083a000fdaf1fc5d9983970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f888f60e407a4afeab69d62344a1ef7831239db89b77487a49b725d1f62cfb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f888f60e407a4afeab69d62344a1ef7831239db89b77487a49b725d1f62cfb05->enter($__internal_f888f60e407a4afeab69d62344a1ef7831239db89b77487a49b725d1f62cfb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f888f60e407a4afeab69d62344a1ef7831239db89b77487a49b725d1f62cfb05->leave($__internal_f888f60e407a4afeab69d62344a1ef7831239db89b77487a49b725d1f62cfb05_prof);

        
        $__internal_524688327fa21c9e4e3125d605bda8c3263654638083a000fdaf1fc5d9983970->leave($__internal_524688327fa21c9e4e3125d605bda8c3263654638083a000fdaf1fc5d9983970_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
