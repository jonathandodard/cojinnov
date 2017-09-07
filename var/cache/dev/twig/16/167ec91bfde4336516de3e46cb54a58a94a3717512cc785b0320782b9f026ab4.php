<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8dc97cf982de83ce712e19fd38c1cd014de31b89068b9fd68a467092345ec68c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_feff3caea48f664e9e43bfacbcc8703465d476eaef76612af0703c83bdbd0c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feff3caea48f664e9e43bfacbcc8703465d476eaef76612af0703c83bdbd0c37->enter($__internal_feff3caea48f664e9e43bfacbcc8703465d476eaef76612af0703c83bdbd0c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_4cdef369b424e579e39e5968f1a3dc4d9ffd52bd10b3510660f548affad065c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdef369b424e579e39e5968f1a3dc4d9ffd52bd10b3510660f548affad065c7->enter($__internal_4cdef369b424e579e39e5968f1a3dc4d9ffd52bd10b3510660f548affad065c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feff3caea48f664e9e43bfacbcc8703465d476eaef76612af0703c83bdbd0c37->leave($__internal_feff3caea48f664e9e43bfacbcc8703465d476eaef76612af0703c83bdbd0c37_prof);

        
        $__internal_4cdef369b424e579e39e5968f1a3dc4d9ffd52bd10b3510660f548affad065c7->leave($__internal_4cdef369b424e579e39e5968f1a3dc4d9ffd52bd10b3510660f548affad065c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8dfe923e96692e0bb0fcff1fd06da326858d18eef1e1b8c86ca2790a274e0fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dfe923e96692e0bb0fcff1fd06da326858d18eef1e1b8c86ca2790a274e0fa3->enter($__internal_8dfe923e96692e0bb0fcff1fd06da326858d18eef1e1b8c86ca2790a274e0fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6799daf7d706d01617742fb5711a8a1555b1cb3b6c89c0472b2360cd6907d8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6799daf7d706d01617742fb5711a8a1555b1cb3b6c89c0472b2360cd6907d8a7->enter($__internal_6799daf7d706d01617742fb5711a8a1555b1cb3b6c89c0472b2360cd6907d8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6799daf7d706d01617742fb5711a8a1555b1cb3b6c89c0472b2360cd6907d8a7->leave($__internal_6799daf7d706d01617742fb5711a8a1555b1cb3b6c89c0472b2360cd6907d8a7_prof);

        
        $__internal_8dfe923e96692e0bb0fcff1fd06da326858d18eef1e1b8c86ca2790a274e0fa3->leave($__internal_8dfe923e96692e0bb0fcff1fd06da326858d18eef1e1b8c86ca2790a274e0fa3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
