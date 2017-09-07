<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f423f2843e5d1c0d130d905c1bed80167d69872a5c423eb802e4ec14d12432ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5283e75863ea9f00dc9d57c2f2a63d4fabdc49a2e55da9528e3fe999b56d93d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5283e75863ea9f00dc9d57c2f2a63d4fabdc49a2e55da9528e3fe999b56d93d4->enter($__internal_5283e75863ea9f00dc9d57c2f2a63d4fabdc49a2e55da9528e3fe999b56d93d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_79100093c643a882bb3e7a6c36be886a3fefe3dc7441a2aaa36fa6ab2b53d0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79100093c643a882bb3e7a6c36be886a3fefe3dc7441a2aaa36fa6ab2b53d0c7->enter($__internal_79100093c643a882bb3e7a6c36be886a3fefe3dc7441a2aaa36fa6ab2b53d0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5283e75863ea9f00dc9d57c2f2a63d4fabdc49a2e55da9528e3fe999b56d93d4->leave($__internal_5283e75863ea9f00dc9d57c2f2a63d4fabdc49a2e55da9528e3fe999b56d93d4_prof);

        
        $__internal_79100093c643a882bb3e7a6c36be886a3fefe3dc7441a2aaa36fa6ab2b53d0c7->leave($__internal_79100093c643a882bb3e7a6c36be886a3fefe3dc7441a2aaa36fa6ab2b53d0c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ea1208fa879f88d7d84fefced1f6dee2df919f2613a45a16a3dc5d1ee321368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea1208fa879f88d7d84fefced1f6dee2df919f2613a45a16a3dc5d1ee321368->enter($__internal_2ea1208fa879f88d7d84fefced1f6dee2df919f2613a45a16a3dc5d1ee321368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_23055e14d70e636be555024ff03ce802f2f4a9f87c52ca9a7d3c8259aaf35001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23055e14d70e636be555024ff03ce802f2f4a9f87c52ca9a7d3c8259aaf35001->enter($__internal_23055e14d70e636be555024ff03ce802f2f4a9f87c52ca9a7d3c8259aaf35001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_23055e14d70e636be555024ff03ce802f2f4a9f87c52ca9a7d3c8259aaf35001->leave($__internal_23055e14d70e636be555024ff03ce802f2f4a9f87c52ca9a7d3c8259aaf35001_prof);

        
        $__internal_2ea1208fa879f88d7d84fefced1f6dee2df919f2613a45a16a3dc5d1ee321368->leave($__internal_2ea1208fa879f88d7d84fefced1f6dee2df919f2613a45a16a3dc5d1ee321368_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
