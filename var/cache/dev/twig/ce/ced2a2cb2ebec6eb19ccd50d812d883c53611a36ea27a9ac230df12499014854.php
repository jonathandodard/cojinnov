<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_23258d24abe9c8bbbb0610c03898c8c281600ce981b68160704042a1027f84ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_09024e145a9c9e9380267c873f70f0d82f0bd54831cac5f4059521f08d40157d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09024e145a9c9e9380267c873f70f0d82f0bd54831cac5f4059521f08d40157d->enter($__internal_09024e145a9c9e9380267c873f70f0d82f0bd54831cac5f4059521f08d40157d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_ce515b229a48096a02ea0a615f01255aa30e072d71688a8040d0d4d796551617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce515b229a48096a02ea0a615f01255aa30e072d71688a8040d0d4d796551617->enter($__internal_ce515b229a48096a02ea0a615f01255aa30e072d71688a8040d0d4d796551617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09024e145a9c9e9380267c873f70f0d82f0bd54831cac5f4059521f08d40157d->leave($__internal_09024e145a9c9e9380267c873f70f0d82f0bd54831cac5f4059521f08d40157d_prof);

        
        $__internal_ce515b229a48096a02ea0a615f01255aa30e072d71688a8040d0d4d796551617->leave($__internal_ce515b229a48096a02ea0a615f01255aa30e072d71688a8040d0d4d796551617_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b9cf6b2094ea2a75ff6fdd9aaf0169cc5604ef1d9157d3046b8bde4d5db83a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9cf6b2094ea2a75ff6fdd9aaf0169cc5604ef1d9157d3046b8bde4d5db83a7->enter($__internal_1b9cf6b2094ea2a75ff6fdd9aaf0169cc5604ef1d9157d3046b8bde4d5db83a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1d3e324a6150db8605b89e2c8cb91cd31d96684f3521aa6090567ce2e218ca2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3e324a6150db8605b89e2c8cb91cd31d96684f3521aa6090567ce2e218ca2e->enter($__internal_1d3e324a6150db8605b89e2c8cb91cd31d96684f3521aa6090567ce2e218ca2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1d3e324a6150db8605b89e2c8cb91cd31d96684f3521aa6090567ce2e218ca2e->leave($__internal_1d3e324a6150db8605b89e2c8cb91cd31d96684f3521aa6090567ce2e218ca2e_prof);

        
        $__internal_1b9cf6b2094ea2a75ff6fdd9aaf0169cc5604ef1d9157d3046b8bde4d5db83a7->leave($__internal_1b9cf6b2094ea2a75ff6fdd9aaf0169cc5604ef1d9157d3046b8bde4d5db83a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
