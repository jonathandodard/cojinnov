<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c6d98632d4052ab5d69d8296de4d5a45bccb0c9aad8d3dc088a13097861e3386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_e0261a07fb30c5164c734c26f3b4a8bd857280f201df76779020a76da05572aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0261a07fb30c5164c734c26f3b4a8bd857280f201df76779020a76da05572aa->enter($__internal_e0261a07fb30c5164c734c26f3b4a8bd857280f201df76779020a76da05572aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_5de91526033af39f72f9f6cf39044dd2ad0e185c6373b130dba4fbd63119d80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de91526033af39f72f9f6cf39044dd2ad0e185c6373b130dba4fbd63119d80d->enter($__internal_5de91526033af39f72f9f6cf39044dd2ad0e185c6373b130dba4fbd63119d80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0261a07fb30c5164c734c26f3b4a8bd857280f201df76779020a76da05572aa->leave($__internal_e0261a07fb30c5164c734c26f3b4a8bd857280f201df76779020a76da05572aa_prof);

        
        $__internal_5de91526033af39f72f9f6cf39044dd2ad0e185c6373b130dba4fbd63119d80d->leave($__internal_5de91526033af39f72f9f6cf39044dd2ad0e185c6373b130dba4fbd63119d80d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66568d9a120dc6ca4ddf2373d031f5a18aa83e1f7ad2c177b37b28c0493b5b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66568d9a120dc6ca4ddf2373d031f5a18aa83e1f7ad2c177b37b28c0493b5b94->enter($__internal_66568d9a120dc6ca4ddf2373d031f5a18aa83e1f7ad2c177b37b28c0493b5b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74e1a0d444f70b56c3b94eeed32ad54e0fb69462bfeb2d1e3877a1287433f9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e1a0d444f70b56c3b94eeed32ad54e0fb69462bfeb2d1e3877a1287433f9b7->enter($__internal_74e1a0d444f70b56c3b94eeed32ad54e0fb69462bfeb2d1e3877a1287433f9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_74e1a0d444f70b56c3b94eeed32ad54e0fb69462bfeb2d1e3877a1287433f9b7->leave($__internal_74e1a0d444f70b56c3b94eeed32ad54e0fb69462bfeb2d1e3877a1287433f9b7_prof);

        
        $__internal_66568d9a120dc6ca4ddf2373d031f5a18aa83e1f7ad2c177b37b28c0493b5b94->leave($__internal_66568d9a120dc6ca4ddf2373d031f5a18aa83e1f7ad2c177b37b28c0493b5b94_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
