<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_f140b2346f01ea7702f0d42d6fa01314b51e7a373692d8caf9a763e08b1e58ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10375a43aff3799f2bd59a7bdc65796582a56c2453724b00325c0ae9cc1e7226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10375a43aff3799f2bd59a7bdc65796582a56c2453724b00325c0ae9cc1e7226->enter($__internal_10375a43aff3799f2bd59a7bdc65796582a56c2453724b00325c0ae9cc1e7226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_96f91f1f949c2d75789b889dd60330b38e5814a9d7ff21ef636ad2e51272f04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f91f1f949c2d75789b889dd60330b38e5814a9d7ff21ef636ad2e51272f04e->enter($__internal_96f91f1f949c2d75789b889dd60330b38e5814a9d7ff21ef636ad2e51272f04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_10375a43aff3799f2bd59a7bdc65796582a56c2453724b00325c0ae9cc1e7226->leave($__internal_10375a43aff3799f2bd59a7bdc65796582a56c2453724b00325c0ae9cc1e7226_prof);

        
        $__internal_96f91f1f949c2d75789b889dd60330b38e5814a9d7ff21ef636ad2e51272f04e->leave($__internal_96f91f1f949c2d75789b889dd60330b38e5814a9d7ff21ef636ad2e51272f04e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
