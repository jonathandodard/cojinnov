<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_9c73dd7088a3784e6baed922fef0174c312499d7da8fd69eb3463049c30a2a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_eec9911c221096c3eae9b6cf0271a79077434669845de9517d6d3411746937bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec9911c221096c3eae9b6cf0271a79077434669845de9517d6d3411746937bf->enter($__internal_eec9911c221096c3eae9b6cf0271a79077434669845de9517d6d3411746937bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_8c78413e7547c066ed6e202ca33e086dae7973c40bfc65220c687fca10d39c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c78413e7547c066ed6e202ca33e086dae7973c40bfc65220c687fca10d39c23->enter($__internal_8c78413e7547c066ed6e202ca33e086dae7973c40bfc65220c687fca10d39c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eec9911c221096c3eae9b6cf0271a79077434669845de9517d6d3411746937bf->leave($__internal_eec9911c221096c3eae9b6cf0271a79077434669845de9517d6d3411746937bf_prof);

        
        $__internal_8c78413e7547c066ed6e202ca33e086dae7973c40bfc65220c687fca10d39c23->leave($__internal_8c78413e7547c066ed6e202ca33e086dae7973c40bfc65220c687fca10d39c23_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c7bc7f1c80c0586347cd57eb8eb9aad27f5318b25ec46bff4b252e16b5d87be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7bc7f1c80c0586347cd57eb8eb9aad27f5318b25ec46bff4b252e16b5d87be->enter($__internal_4c7bc7f1c80c0586347cd57eb8eb9aad27f5318b25ec46bff4b252e16b5d87be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a2deb8bd3a39fe117aa4f60b8aa8947100d6e30befbf37a3191e5a628a8b4e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2deb8bd3a39fe117aa4f60b8aa8947100d6e30befbf37a3191e5a628a8b4e68->enter($__internal_a2deb8bd3a39fe117aa4f60b8aa8947100d6e30befbf37a3191e5a628a8b4e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a2deb8bd3a39fe117aa4f60b8aa8947100d6e30befbf37a3191e5a628a8b4e68->leave($__internal_a2deb8bd3a39fe117aa4f60b8aa8947100d6e30befbf37a3191e5a628a8b4e68_prof);

        
        $__internal_4c7bc7f1c80c0586347cd57eb8eb9aad27f5318b25ec46bff4b252e16b5d87be->leave($__internal_4c7bc7f1c80c0586347cd57eb8eb9aad27f5318b25ec46bff4b252e16b5d87be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
