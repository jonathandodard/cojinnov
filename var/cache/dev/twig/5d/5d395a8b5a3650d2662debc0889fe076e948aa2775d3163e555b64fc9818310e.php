<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a5c8d6d4c9dddecdabcaebb193989c6d212e511f40565b9d9d4f7ac5db97348e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_08bad34f48c5c3dceebd68d757ae74e0a881a08d5acf4e06806f6bdf34778fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08bad34f48c5c3dceebd68d757ae74e0a881a08d5acf4e06806f6bdf34778fec->enter($__internal_08bad34f48c5c3dceebd68d757ae74e0a881a08d5acf4e06806f6bdf34778fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_ff267044cfa12cabc34b16e1d5b69a1aea0c34b48c60ef5395e9ca1b41055cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff267044cfa12cabc34b16e1d5b69a1aea0c34b48c60ef5395e9ca1b41055cac->enter($__internal_ff267044cfa12cabc34b16e1d5b69a1aea0c34b48c60ef5395e9ca1b41055cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08bad34f48c5c3dceebd68d757ae74e0a881a08d5acf4e06806f6bdf34778fec->leave($__internal_08bad34f48c5c3dceebd68d757ae74e0a881a08d5acf4e06806f6bdf34778fec_prof);

        
        $__internal_ff267044cfa12cabc34b16e1d5b69a1aea0c34b48c60ef5395e9ca1b41055cac->leave($__internal_ff267044cfa12cabc34b16e1d5b69a1aea0c34b48c60ef5395e9ca1b41055cac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3af46ca808d308458603c5e5774bb5f8fa442e8bb4045d8be5ae94c700a433e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af46ca808d308458603c5e5774bb5f8fa442e8bb4045d8be5ae94c700a433e3->enter($__internal_3af46ca808d308458603c5e5774bb5f8fa442e8bb4045d8be5ae94c700a433e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5da6f08df766f214b8a59c29ebfc9dcd729688473a9a55a113efa77a5d33cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5da6f08df766f214b8a59c29ebfc9dcd729688473a9a55a113efa77a5d33cbb->enter($__internal_f5da6f08df766f214b8a59c29ebfc9dcd729688473a9a55a113efa77a5d33cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f5da6f08df766f214b8a59c29ebfc9dcd729688473a9a55a113efa77a5d33cbb->leave($__internal_f5da6f08df766f214b8a59c29ebfc9dcd729688473a9a55a113efa77a5d33cbb_prof);

        
        $__internal_3af46ca808d308458603c5e5774bb5f8fa442e8bb4045d8be5ae94c700a433e3->leave($__internal_3af46ca808d308458603c5e5774bb5f8fa442e8bb4045d8be5ae94c700a433e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
