<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c142126fd18313ba74a1cf00ee116a3c9da832336b23073fc5d8d6d102f9c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c142126fd18313ba74a1cf00ee116a3c9da832336b23073fc5d8d6d102f9c56->enter($__internal_6c142126fd18313ba74a1cf00ee116a3c9da832336b23073fc5d8d6d102f9c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_40ae75a79d938093bd3135bad362eff532614eb9fcea47cca697031bcf390cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ae75a79d938093bd3135bad362eff532614eb9fcea47cca697031bcf390cba->enter($__internal_40ae75a79d938093bd3135bad362eff532614eb9fcea47cca697031bcf390cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c142126fd18313ba74a1cf00ee116a3c9da832336b23073fc5d8d6d102f9c56->leave($__internal_6c142126fd18313ba74a1cf00ee116a3c9da832336b23073fc5d8d6d102f9c56_prof);

        
        $__internal_40ae75a79d938093bd3135bad362eff532614eb9fcea47cca697031bcf390cba->leave($__internal_40ae75a79d938093bd3135bad362eff532614eb9fcea47cca697031bcf390cba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27e81b79cf5900cc6044ba5564296eac7b711dfa61c975788dc0a1ec7ee28186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e81b79cf5900cc6044ba5564296eac7b711dfa61c975788dc0a1ec7ee28186->enter($__internal_27e81b79cf5900cc6044ba5564296eac7b711dfa61c975788dc0a1ec7ee28186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_44cd0808af26b1129f44fae433cf50e0fa6c54bdaa61181dfe5aae4e3909ab9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cd0808af26b1129f44fae433cf50e0fa6c54bdaa61181dfe5aae4e3909ab9c->enter($__internal_44cd0808af26b1129f44fae433cf50e0fa6c54bdaa61181dfe5aae4e3909ab9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_44cd0808af26b1129f44fae433cf50e0fa6c54bdaa61181dfe5aae4e3909ab9c->leave($__internal_44cd0808af26b1129f44fae433cf50e0fa6c54bdaa61181dfe5aae4e3909ab9c_prof);

        
        $__internal_27e81b79cf5900cc6044ba5564296eac7b711dfa61c975788dc0a1ec7ee28186->leave($__internal_27e81b79cf5900cc6044ba5564296eac7b711dfa61c975788dc0a1ec7ee28186_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_98ed562221539c95fa4f3020857f891cac5c406455c3e8917f31ab27b058ec32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ed562221539c95fa4f3020857f891cac5c406455c3e8917f31ab27b058ec32->enter($__internal_98ed562221539c95fa4f3020857f891cac5c406455c3e8917f31ab27b058ec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e5b5df328b6c1ea4425d585116856ccc37c0cedaf2bed31ceeea425345fa87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5b5df328b6c1ea4425d585116856ccc37c0cedaf2bed31ceeea425345fa87a->enter($__internal_1e5b5df328b6c1ea4425d585116856ccc37c0cedaf2bed31ceeea425345fa87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_1e5b5df328b6c1ea4425d585116856ccc37c0cedaf2bed31ceeea425345fa87a->leave($__internal_1e5b5df328b6c1ea4425d585116856ccc37c0cedaf2bed31ceeea425345fa87a_prof);

        
        $__internal_98ed562221539c95fa4f3020857f891cac5c406455c3e8917f31ab27b058ec32->leave($__internal_98ed562221539c95fa4f3020857f891cac5c406455c3e8917f31ab27b058ec32_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
