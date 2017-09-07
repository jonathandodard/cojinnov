<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_8d4b7eb359beabde00363abfa54c222061db4d8d8c81bd7a4ac54fff0458b344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_3b8f06cb3a5f9075be1f1211aab87a2183fbfb07a7db800f54c9069a78684592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8f06cb3a5f9075be1f1211aab87a2183fbfb07a7db800f54c9069a78684592->enter($__internal_3b8f06cb3a5f9075be1f1211aab87a2183fbfb07a7db800f54c9069a78684592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_30843a1dad658626a8e58696395d21e2b8cd6f0d46ed73944e75ae4ef1595a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30843a1dad658626a8e58696395d21e2b8cd6f0d46ed73944e75ae4ef1595a34->enter($__internal_30843a1dad658626a8e58696395d21e2b8cd6f0d46ed73944e75ae4ef1595a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b8f06cb3a5f9075be1f1211aab87a2183fbfb07a7db800f54c9069a78684592->leave($__internal_3b8f06cb3a5f9075be1f1211aab87a2183fbfb07a7db800f54c9069a78684592_prof);

        
        $__internal_30843a1dad658626a8e58696395d21e2b8cd6f0d46ed73944e75ae4ef1595a34->leave($__internal_30843a1dad658626a8e58696395d21e2b8cd6f0d46ed73944e75ae4ef1595a34_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fba7f0a0da59adc2eba249874ad963b0cca761f97f3c06b154b047c2e8043aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba7f0a0da59adc2eba249874ad963b0cca761f97f3c06b154b047c2e8043aae->enter($__internal_fba7f0a0da59adc2eba249874ad963b0cca761f97f3c06b154b047c2e8043aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d1dbaac554fcfd084e72c4ae385ebb788bf8b63fa89c88c7152a11947d0cad46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1dbaac554fcfd084e72c4ae385ebb788bf8b63fa89c88c7152a11947d0cad46->enter($__internal_d1dbaac554fcfd084e72c4ae385ebb788bf8b63fa89c88c7152a11947d0cad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d1dbaac554fcfd084e72c4ae385ebb788bf8b63fa89c88c7152a11947d0cad46->leave($__internal_d1dbaac554fcfd084e72c4ae385ebb788bf8b63fa89c88c7152a11947d0cad46_prof);

        
        $__internal_fba7f0a0da59adc2eba249874ad963b0cca761f97f3c06b154b047c2e8043aae->leave($__internal_fba7f0a0da59adc2eba249874ad963b0cca761f97f3c06b154b047c2e8043aae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
