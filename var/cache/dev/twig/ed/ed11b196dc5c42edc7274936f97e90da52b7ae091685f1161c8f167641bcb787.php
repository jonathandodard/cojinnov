<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_674099ca901fd8c9ca9d64eee22cba8aeb1e939a3f260cf57c0421b1596fe5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_9a6202fa364c4c3d20e4f85b3aaf886492ef05c7724f8cbc5f2a2b8f6b04fe3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6202fa364c4c3d20e4f85b3aaf886492ef05c7724f8cbc5f2a2b8f6b04fe3c->enter($__internal_9a6202fa364c4c3d20e4f85b3aaf886492ef05c7724f8cbc5f2a2b8f6b04fe3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_1f7cbef9d19c8b6664553eadf98e2afa3bc82cb7240c8ff5016dfcea01bcab43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7cbef9d19c8b6664553eadf98e2afa3bc82cb7240c8ff5016dfcea01bcab43->enter($__internal_1f7cbef9d19c8b6664553eadf98e2afa3bc82cb7240c8ff5016dfcea01bcab43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a6202fa364c4c3d20e4f85b3aaf886492ef05c7724f8cbc5f2a2b8f6b04fe3c->leave($__internal_9a6202fa364c4c3d20e4f85b3aaf886492ef05c7724f8cbc5f2a2b8f6b04fe3c_prof);

        
        $__internal_1f7cbef9d19c8b6664553eadf98e2afa3bc82cb7240c8ff5016dfcea01bcab43->leave($__internal_1f7cbef9d19c8b6664553eadf98e2afa3bc82cb7240c8ff5016dfcea01bcab43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_910ee5c5e1bf4d5b6df2c405a3a6e6e1b243d9aab8073fbb77a713c1f8894493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910ee5c5e1bf4d5b6df2c405a3a6e6e1b243d9aab8073fbb77a713c1f8894493->enter($__internal_910ee5c5e1bf4d5b6df2c405a3a6e6e1b243d9aab8073fbb77a713c1f8894493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_115a3110bbd1805e588a3da7ab61b2cec24cad93d14d53f0c6bb606567ed26c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115a3110bbd1805e588a3da7ab61b2cec24cad93d14d53f0c6bb606567ed26c8->enter($__internal_115a3110bbd1805e588a3da7ab61b2cec24cad93d14d53f0c6bb606567ed26c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_115a3110bbd1805e588a3da7ab61b2cec24cad93d14d53f0c6bb606567ed26c8->leave($__internal_115a3110bbd1805e588a3da7ab61b2cec24cad93d14d53f0c6bb606567ed26c8_prof);

        
        $__internal_910ee5c5e1bf4d5b6df2c405a3a6e6e1b243d9aab8073fbb77a713c1f8894493->leave($__internal_910ee5c5e1bf4d5b6df2c405a3a6e6e1b243d9aab8073fbb77a713c1f8894493_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
