<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_34c3a0643dfc7d72a581e0e6090842eda852bb909c6261b5861c9eda5e28b623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b18571e3b8d82348fec055eccf8aca4d05a8806285d83313f98e56d3f1bdf0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18571e3b8d82348fec055eccf8aca4d05a8806285d83313f98e56d3f1bdf0d6->enter($__internal_b18571e3b8d82348fec055eccf8aca4d05a8806285d83313f98e56d3f1bdf0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_161dca878786b2cb170f82b4f64a407d735cdfc5f9ab64e70d4507f858022645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161dca878786b2cb170f82b4f64a407d735cdfc5f9ab64e70d4507f858022645->enter($__internal_161dca878786b2cb170f82b4f64a407d735cdfc5f9ab64e70d4507f858022645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b18571e3b8d82348fec055eccf8aca4d05a8806285d83313f98e56d3f1bdf0d6->leave($__internal_b18571e3b8d82348fec055eccf8aca4d05a8806285d83313f98e56d3f1bdf0d6_prof);

        
        $__internal_161dca878786b2cb170f82b4f64a407d735cdfc5f9ab64e70d4507f858022645->leave($__internal_161dca878786b2cb170f82b4f64a407d735cdfc5f9ab64e70d4507f858022645_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_58823c8cd18f2f6b8f08798987936051c326f62e144131ff2daa56217640dc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58823c8cd18f2f6b8f08798987936051c326f62e144131ff2daa56217640dc6f->enter($__internal_58823c8cd18f2f6b8f08798987936051c326f62e144131ff2daa56217640dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8878c36dabd83bb5cdadf61825a7a2aa5d1b4a7ecbe0da088c639d7bad20214b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8878c36dabd83bb5cdadf61825a7a2aa5d1b4a7ecbe0da088c639d7bad20214b->enter($__internal_8878c36dabd83bb5cdadf61825a7a2aa5d1b4a7ecbe0da088c639d7bad20214b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_8878c36dabd83bb5cdadf61825a7a2aa5d1b4a7ecbe0da088c639d7bad20214b->leave($__internal_8878c36dabd83bb5cdadf61825a7a2aa5d1b4a7ecbe0da088c639d7bad20214b_prof);

        
        $__internal_58823c8cd18f2f6b8f08798987936051c326f62e144131ff2daa56217640dc6f->leave($__internal_58823c8cd18f2f6b8f08798987936051c326f62e144131ff2daa56217640dc6f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5d1149130b3bb0547424e28027a6bc78a4795339c5f871d87bfbfbec05acefe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1149130b3bb0547424e28027a6bc78a4795339c5f871d87bfbfbec05acefe6->enter($__internal_5d1149130b3bb0547424e28027a6bc78a4795339c5f871d87bfbfbec05acefe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_92e4852b3ec65bfcedf03b31feb6b5da537842887d8c85e8a433adacdf4edb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e4852b3ec65bfcedf03b31feb6b5da537842887d8c85e8a433adacdf4edb0f->enter($__internal_92e4852b3ec65bfcedf03b31feb6b5da537842887d8c85e8a433adacdf4edb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_92e4852b3ec65bfcedf03b31feb6b5da537842887d8c85e8a433adacdf4edb0f->leave($__internal_92e4852b3ec65bfcedf03b31feb6b5da537842887d8c85e8a433adacdf4edb0f_prof);

        
        $__internal_5d1149130b3bb0547424e28027a6bc78a4795339c5f871d87bfbfbec05acefe6->leave($__internal_5d1149130b3bb0547424e28027a6bc78a4795339c5f871d87bfbfbec05acefe6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2ad3100cf44a2f3c1f1dee905ab2a2c897ea61396407591576c454c82f0babe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad3100cf44a2f3c1f1dee905ab2a2c897ea61396407591576c454c82f0babe0->enter($__internal_2ad3100cf44a2f3c1f1dee905ab2a2c897ea61396407591576c454c82f0babe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_938e8288314e773dabab7cd1db84c75c398e6e6cc33918ab8dea6a5a4aa7a805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938e8288314e773dabab7cd1db84c75c398e6e6cc33918ab8dea6a5a4aa7a805->enter($__internal_938e8288314e773dabab7cd1db84c75c398e6e6cc33918ab8dea6a5a4aa7a805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_938e8288314e773dabab7cd1db84c75c398e6e6cc33918ab8dea6a5a4aa7a805->leave($__internal_938e8288314e773dabab7cd1db84c75c398e6e6cc33918ab8dea6a5a4aa7a805_prof);

        
        $__internal_2ad3100cf44a2f3c1f1dee905ab2a2c897ea61396407591576c454c82f0babe0->leave($__internal_2ad3100cf44a2f3c1f1dee905ab2a2c897ea61396407591576c454c82f0babe0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
