<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d599e78673aafc722f9d52a3cf6838097ef8d784a9466cf99558947bb9d65088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_aead60457d18652db5b39a53abb446484fb67642ca18e9faad0e8ee2840bbc82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aead60457d18652db5b39a53abb446484fb67642ca18e9faad0e8ee2840bbc82->enter($__internal_aead60457d18652db5b39a53abb446484fb67642ca18e9faad0e8ee2840bbc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_36d3f6d84a7e14bda9542e6c7dbf8b6aed7fc8d7977fc07ae6a464a1dd6e8e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d3f6d84a7e14bda9542e6c7dbf8b6aed7fc8d7977fc07ae6a464a1dd6e8e4a->enter($__internal_36d3f6d84a7e14bda9542e6c7dbf8b6aed7fc8d7977fc07ae6a464a1dd6e8e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aead60457d18652db5b39a53abb446484fb67642ca18e9faad0e8ee2840bbc82->leave($__internal_aead60457d18652db5b39a53abb446484fb67642ca18e9faad0e8ee2840bbc82_prof);

        
        $__internal_36d3f6d84a7e14bda9542e6c7dbf8b6aed7fc8d7977fc07ae6a464a1dd6e8e4a->leave($__internal_36d3f6d84a7e14bda9542e6c7dbf8b6aed7fc8d7977fc07ae6a464a1dd6e8e4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1723bf5782afa7b00575699fb12cf9d0570cd3e1c4471355b5126fde86d52c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1723bf5782afa7b00575699fb12cf9d0570cd3e1c4471355b5126fde86d52c6->enter($__internal_b1723bf5782afa7b00575699fb12cf9d0570cd3e1c4471355b5126fde86d52c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b2d4c020a660dff8e9c89ddd9c058f5011dfe76ecedd0394101fba929c91c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2d4c020a660dff8e9c89ddd9c058f5011dfe76ecedd0394101fba929c91c52->enter($__internal_4b2d4c020a660dff8e9c89ddd9c058f5011dfe76ecedd0394101fba929c91c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_4b2d4c020a660dff8e9c89ddd9c058f5011dfe76ecedd0394101fba929c91c52->leave($__internal_4b2d4c020a660dff8e9c89ddd9c058f5011dfe76ecedd0394101fba929c91c52_prof);

        
        $__internal_b1723bf5782afa7b00575699fb12cf9d0570cd3e1c4471355b5126fde86d52c6->leave($__internal_b1723bf5782afa7b00575699fb12cf9d0570cd3e1c4471355b5126fde86d52c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
