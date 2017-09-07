<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_8cf4ee99b467970b4e888fd93f7769d1f846b4d6133688821280d0a0701d7f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_e181631e09e9fe85da008ba7b962b77406bc3f8b9303578ad2be7598599eddbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e181631e09e9fe85da008ba7b962b77406bc3f8b9303578ad2be7598599eddbc->enter($__internal_e181631e09e9fe85da008ba7b962b77406bc3f8b9303578ad2be7598599eddbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_a93d18587c54b1b309f9d5d1616861343ed835ad5b2af9644413581200f56e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93d18587c54b1b309f9d5d1616861343ed835ad5b2af9644413581200f56e7a->enter($__internal_a93d18587c54b1b309f9d5d1616861343ed835ad5b2af9644413581200f56e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e181631e09e9fe85da008ba7b962b77406bc3f8b9303578ad2be7598599eddbc->leave($__internal_e181631e09e9fe85da008ba7b962b77406bc3f8b9303578ad2be7598599eddbc_prof);

        
        $__internal_a93d18587c54b1b309f9d5d1616861343ed835ad5b2af9644413581200f56e7a->leave($__internal_a93d18587c54b1b309f9d5d1616861343ed835ad5b2af9644413581200f56e7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b4ad15f23ddde818450af4d55d98c42d7b67adba55a93317b0e7398de722ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b4ad15f23ddde818450af4d55d98c42d7b67adba55a93317b0e7398de722ef7->enter($__internal_6b4ad15f23ddde818450af4d55d98c42d7b67adba55a93317b0e7398de722ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_09efb81b24b424a01e6b651ce17d9560905508d5a9aaa74098a6e98b668e5070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09efb81b24b424a01e6b651ce17d9560905508d5a9aaa74098a6e98b668e5070->enter($__internal_09efb81b24b424a01e6b651ce17d9560905508d5a9aaa74098a6e98b668e5070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_09efb81b24b424a01e6b651ce17d9560905508d5a9aaa74098a6e98b668e5070->leave($__internal_09efb81b24b424a01e6b651ce17d9560905508d5a9aaa74098a6e98b668e5070_prof);

        
        $__internal_6b4ad15f23ddde818450af4d55d98c42d7b67adba55a93317b0e7398de722ef7->leave($__internal_6b4ad15f23ddde818450af4d55d98c42d7b67adba55a93317b0e7398de722ef7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
