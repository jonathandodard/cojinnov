<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_16462c7a8659a968d476fa7661933ad7e9d934c0b30e7a62537d5858f8ece364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16462c7a8659a968d476fa7661933ad7e9d934c0b30e7a62537d5858f8ece364->enter($__internal_16462c7a8659a968d476fa7661933ad7e9d934c0b30e7a62537d5858f8ece364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_89561fdbfd88a940e8de7113e8382e36bfe55ef3d855bf09ef534f30e44b0085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89561fdbfd88a940e8de7113e8382e36bfe55ef3d855bf09ef534f30e44b0085->enter($__internal_89561fdbfd88a940e8de7113e8382e36bfe55ef3d855bf09ef534f30e44b0085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16462c7a8659a968d476fa7661933ad7e9d934c0b30e7a62537d5858f8ece364->leave($__internal_16462c7a8659a968d476fa7661933ad7e9d934c0b30e7a62537d5858f8ece364_prof);

        
        $__internal_89561fdbfd88a940e8de7113e8382e36bfe55ef3d855bf09ef534f30e44b0085->leave($__internal_89561fdbfd88a940e8de7113e8382e36bfe55ef3d855bf09ef534f30e44b0085_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0cb26c19ddb994f490e127fdaab79f8e4d28b963ff588197b2245c346a34d8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb26c19ddb994f490e127fdaab79f8e4d28b963ff588197b2245c346a34d8e0->enter($__internal_0cb26c19ddb994f490e127fdaab79f8e4d28b963ff588197b2245c346a34d8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a80af9e157744b8cd68c9ca9d311afbfc6d7df34f0ba6441c29102b9a9c0cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a80af9e157744b8cd68c9ca9d311afbfc6d7df34f0ba6441c29102b9a9c0cbc->enter($__internal_5a80af9e157744b8cd68c9ca9d311afbfc6d7df34f0ba6441c29102b9a9c0cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5a80af9e157744b8cd68c9ca9d311afbfc6d7df34f0ba6441c29102b9a9c0cbc->leave($__internal_5a80af9e157744b8cd68c9ca9d311afbfc6d7df34f0ba6441c29102b9a9c0cbc_prof);

        
        $__internal_0cb26c19ddb994f490e127fdaab79f8e4d28b963ff588197b2245c346a34d8e0->leave($__internal_0cb26c19ddb994f490e127fdaab79f8e4d28b963ff588197b2245c346a34d8e0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2551d970e0249bfe3e676f762dfad96f84465f1a0f5b3e29cb9a997a55dd07c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2551d970e0249bfe3e676f762dfad96f84465f1a0f5b3e29cb9a997a55dd07c4->enter($__internal_2551d970e0249bfe3e676f762dfad96f84465f1a0f5b3e29cb9a997a55dd07c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf23eb849c3cdd995bbf212b3b586d11acdfdf2848a6604a38f2517fc6de43a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf23eb849c3cdd995bbf212b3b586d11acdfdf2848a6604a38f2517fc6de43a0->enter($__internal_cf23eb849c3cdd995bbf212b3b586d11acdfdf2848a6604a38f2517fc6de43a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf23eb849c3cdd995bbf212b3b586d11acdfdf2848a6604a38f2517fc6de43a0->leave($__internal_cf23eb849c3cdd995bbf212b3b586d11acdfdf2848a6604a38f2517fc6de43a0_prof);

        
        $__internal_2551d970e0249bfe3e676f762dfad96f84465f1a0f5b3e29cb9a997a55dd07c4->leave($__internal_2551d970e0249bfe3e676f762dfad96f84465f1a0f5b3e29cb9a997a55dd07c4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_293e32c3f12b2c04967dc691f0989a5330b3c4e91a5e362d0a65669449c2b618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293e32c3f12b2c04967dc691f0989a5330b3c4e91a5e362d0a65669449c2b618->enter($__internal_293e32c3f12b2c04967dc691f0989a5330b3c4e91a5e362d0a65669449c2b618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3075dfa0d08459765780d2bf08637f5cfae8138356a650a30c4b08f4277ce92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3075dfa0d08459765780d2bf08637f5cfae8138356a650a30c4b08f4277ce92->enter($__internal_c3075dfa0d08459765780d2bf08637f5cfae8138356a650a30c4b08f4277ce92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c3075dfa0d08459765780d2bf08637f5cfae8138356a650a30c4b08f4277ce92->leave($__internal_c3075dfa0d08459765780d2bf08637f5cfae8138356a650a30c4b08f4277ce92_prof);

        
        $__internal_293e32c3f12b2c04967dc691f0989a5330b3c4e91a5e362d0a65669449c2b618->leave($__internal_293e32c3f12b2c04967dc691f0989a5330b3c4e91a5e362d0a65669449c2b618_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
