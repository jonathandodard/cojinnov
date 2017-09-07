<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa087ed5c0137f84bd35d16b3d5ecd4cae53d729111b05d8d202c9ac190323da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa087ed5c0137f84bd35d16b3d5ecd4cae53d729111b05d8d202c9ac190323da->enter($__internal_fa087ed5c0137f84bd35d16b3d5ecd4cae53d729111b05d8d202c9ac190323da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_52025a8185ab77f19909b5ec93a249a02aeada96714b47c44c24ca8587b31aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52025a8185ab77f19909b5ec93a249a02aeada96714b47c44c24ca8587b31aed->enter($__internal_52025a8185ab77f19909b5ec93a249a02aeada96714b47c44c24ca8587b31aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa087ed5c0137f84bd35d16b3d5ecd4cae53d729111b05d8d202c9ac190323da->leave($__internal_fa087ed5c0137f84bd35d16b3d5ecd4cae53d729111b05d8d202c9ac190323da_prof);

        
        $__internal_52025a8185ab77f19909b5ec93a249a02aeada96714b47c44c24ca8587b31aed->leave($__internal_52025a8185ab77f19909b5ec93a249a02aeada96714b47c44c24ca8587b31aed_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_aae09d39575b338d91c070a002905f59d54eea6a2c3448e1637ffd4316a90598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae09d39575b338d91c070a002905f59d54eea6a2c3448e1637ffd4316a90598->enter($__internal_aae09d39575b338d91c070a002905f59d54eea6a2c3448e1637ffd4316a90598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_837432553f792da5ea82832e608f5f26c31e6a8df69e9b2fa2610bf46fe84605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837432553f792da5ea82832e608f5f26c31e6a8df69e9b2fa2610bf46fe84605->enter($__internal_837432553f792da5ea82832e608f5f26c31e6a8df69e9b2fa2610bf46fe84605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_837432553f792da5ea82832e608f5f26c31e6a8df69e9b2fa2610bf46fe84605->leave($__internal_837432553f792da5ea82832e608f5f26c31e6a8df69e9b2fa2610bf46fe84605_prof);

        
        $__internal_aae09d39575b338d91c070a002905f59d54eea6a2c3448e1637ffd4316a90598->leave($__internal_aae09d39575b338d91c070a002905f59d54eea6a2c3448e1637ffd4316a90598_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
