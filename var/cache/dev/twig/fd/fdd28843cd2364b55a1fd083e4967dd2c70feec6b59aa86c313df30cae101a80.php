<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9a2149ac2c040d3388c79b803fca7cd9813f0477c1f0d35ecd25f1f3a45af415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_ab651a7958007ebf01263d55b562e5421527e005e9032811062ade6f400bccc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab651a7958007ebf01263d55b562e5421527e005e9032811062ade6f400bccc3->enter($__internal_ab651a7958007ebf01263d55b562e5421527e005e9032811062ade6f400bccc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_7bb4fb178195fe29f06be20469e47f493ead77db054c2fb2ab74f2d4ad126ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb4fb178195fe29f06be20469e47f493ead77db054c2fb2ab74f2d4ad126ba6->enter($__internal_7bb4fb178195fe29f06be20469e47f493ead77db054c2fb2ab74f2d4ad126ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab651a7958007ebf01263d55b562e5421527e005e9032811062ade6f400bccc3->leave($__internal_ab651a7958007ebf01263d55b562e5421527e005e9032811062ade6f400bccc3_prof);

        
        $__internal_7bb4fb178195fe29f06be20469e47f493ead77db054c2fb2ab74f2d4ad126ba6->leave($__internal_7bb4fb178195fe29f06be20469e47f493ead77db054c2fb2ab74f2d4ad126ba6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22bc3f343e84e9197654665dbefcde131529093ea797fe4a75fa6993df93fda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22bc3f343e84e9197654665dbefcde131529093ea797fe4a75fa6993df93fda6->enter($__internal_22bc3f343e84e9197654665dbefcde131529093ea797fe4a75fa6993df93fda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1cdea0a752961d127b3d710b47f772327add6b02c108333f4039037262dc48be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdea0a752961d127b3d710b47f772327add6b02c108333f4039037262dc48be->enter($__internal_1cdea0a752961d127b3d710b47f772327add6b02c108333f4039037262dc48be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1cdea0a752961d127b3d710b47f772327add6b02c108333f4039037262dc48be->leave($__internal_1cdea0a752961d127b3d710b47f772327add6b02c108333f4039037262dc48be_prof);

        
        $__internal_22bc3f343e84e9197654665dbefcde131529093ea797fe4a75fa6993df93fda6->leave($__internal_22bc3f343e84e9197654665dbefcde131529093ea797fe4a75fa6993df93fda6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
