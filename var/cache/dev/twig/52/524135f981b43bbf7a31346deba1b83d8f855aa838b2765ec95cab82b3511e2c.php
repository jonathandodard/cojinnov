<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_780dd083e4b9d74627ea61386fdd379b91d75792a6c879ba92eae26626fd0203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780dd083e4b9d74627ea61386fdd379b91d75792a6c879ba92eae26626fd0203->enter($__internal_780dd083e4b9d74627ea61386fdd379b91d75792a6c879ba92eae26626fd0203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e049a97ad2bd1cf31e31ab8ab53a20d2ca647b1c37c177097b88f1a7d67fc7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e049a97ad2bd1cf31e31ab8ab53a20d2ca647b1c37c177097b88f1a7d67fc7aa->enter($__internal_e049a97ad2bd1cf31e31ab8ab53a20d2ca647b1c37c177097b88f1a7d67fc7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780dd083e4b9d74627ea61386fdd379b91d75792a6c879ba92eae26626fd0203->leave($__internal_780dd083e4b9d74627ea61386fdd379b91d75792a6c879ba92eae26626fd0203_prof);

        
        $__internal_e049a97ad2bd1cf31e31ab8ab53a20d2ca647b1c37c177097b88f1a7d67fc7aa->leave($__internal_e049a97ad2bd1cf31e31ab8ab53a20d2ca647b1c37c177097b88f1a7d67fc7aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f937f633900b10102d4ee7eb1ca8b03409441dfade4804bb6cbca79513b4f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f937f633900b10102d4ee7eb1ca8b03409441dfade4804bb6cbca79513b4f7d->enter($__internal_7f937f633900b10102d4ee7eb1ca8b03409441dfade4804bb6cbca79513b4f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af08148a6949a925c9a4430761c8028b7629ac3e88b1b90cd713efd590400954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af08148a6949a925c9a4430761c8028b7629ac3e88b1b90cd713efd590400954->enter($__internal_af08148a6949a925c9a4430761c8028b7629ac3e88b1b90cd713efd590400954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_af08148a6949a925c9a4430761c8028b7629ac3e88b1b90cd713efd590400954->leave($__internal_af08148a6949a925c9a4430761c8028b7629ac3e88b1b90cd713efd590400954_prof);

        
        $__internal_7f937f633900b10102d4ee7eb1ca8b03409441dfade4804bb6cbca79513b4f7d->leave($__internal_7f937f633900b10102d4ee7eb1ca8b03409441dfade4804bb6cbca79513b4f7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebd03643a15567b5de73d8146c7a74863f3568079e30f007ca76ebb3ef48ee5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd03643a15567b5de73d8146c7a74863f3568079e30f007ca76ebb3ef48ee5c->enter($__internal_ebd03643a15567b5de73d8146c7a74863f3568079e30f007ca76ebb3ef48ee5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7c726169aa84f4cee87c78618f96f1828399fd893a60e892237541c70fe74dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c726169aa84f4cee87c78618f96f1828399fd893a60e892237541c70fe74dd->enter($__internal_b7c726169aa84f4cee87c78618f96f1828399fd893a60e892237541c70fe74dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b7c726169aa84f4cee87c78618f96f1828399fd893a60e892237541c70fe74dd->leave($__internal_b7c726169aa84f4cee87c78618f96f1828399fd893a60e892237541c70fe74dd_prof);

        
        $__internal_ebd03643a15567b5de73d8146c7a74863f3568079e30f007ca76ebb3ef48ee5c->leave($__internal_ebd03643a15567b5de73d8146c7a74863f3568079e30f007ca76ebb3ef48ee5c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
