<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d2a768e8d244a97ac1918d04e896b3a8a41bffdfe8b3a479c42fa239c0c9fbac extends Twig_Template
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
        $__internal_78761aa308749acc0bf15814ec85ff067852e45f7c232dc5b2db773dd49676d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78761aa308749acc0bf15814ec85ff067852e45f7c232dc5b2db773dd49676d0->enter($__internal_78761aa308749acc0bf15814ec85ff067852e45f7c232dc5b2db773dd49676d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_59a6ee5f255850ae3eca2ce73c6791913746aba5e397e853c2e831bf478db9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a6ee5f255850ae3eca2ce73c6791913746aba5e397e853c2e831bf478db9d8->enter($__internal_59a6ee5f255850ae3eca2ce73c6791913746aba5e397e853c2e831bf478db9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_78761aa308749acc0bf15814ec85ff067852e45f7c232dc5b2db773dd49676d0->leave($__internal_78761aa308749acc0bf15814ec85ff067852e45f7c232dc5b2db773dd49676d0_prof);

        
        $__internal_59a6ee5f255850ae3eca2ce73c6791913746aba5e397e853c2e831bf478db9d8->leave($__internal_59a6ee5f255850ae3eca2ce73c6791913746aba5e397e853c2e831bf478db9d8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_561e261d267e3e02d419d4710a9c238ed46651cbb0eb18e82a3b4e09c47e0e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561e261d267e3e02d419d4710a9c238ed46651cbb0eb18e82a3b4e09c47e0e11->enter($__internal_561e261d267e3e02d419d4710a9c238ed46651cbb0eb18e82a3b4e09c47e0e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8abe36c40fce7483653151c6a638496d15e00b93c966cb6c3dce8174647f708f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abe36c40fce7483653151c6a638496d15e00b93c966cb6c3dce8174647f708f->enter($__internal_8abe36c40fce7483653151c6a638496d15e00b93c966cb6c3dce8174647f708f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8abe36c40fce7483653151c6a638496d15e00b93c966cb6c3dce8174647f708f->leave($__internal_8abe36c40fce7483653151c6a638496d15e00b93c966cb6c3dce8174647f708f_prof);

        
        $__internal_561e261d267e3e02d419d4710a9c238ed46651cbb0eb18e82a3b4e09c47e0e11->leave($__internal_561e261d267e3e02d419d4710a9c238ed46651cbb0eb18e82a3b4e09c47e0e11_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a0912ae1a3eb10552633d32276bd9ba57c117082940b111ba7972313876f68cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0912ae1a3eb10552633d32276bd9ba57c117082940b111ba7972313876f68cd->enter($__internal_a0912ae1a3eb10552633d32276bd9ba57c117082940b111ba7972313876f68cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bafe091d1b218c4dd07f56cf5f5f9549da78b367582c12472acf7a413149e179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bafe091d1b218c4dd07f56cf5f5f9549da78b367582c12472acf7a413149e179->enter($__internal_bafe091d1b218c4dd07f56cf5f5f9549da78b367582c12472acf7a413149e179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bafe091d1b218c4dd07f56cf5f5f9549da78b367582c12472acf7a413149e179->leave($__internal_bafe091d1b218c4dd07f56cf5f5f9549da78b367582c12472acf7a413149e179_prof);

        
        $__internal_a0912ae1a3eb10552633d32276bd9ba57c117082940b111ba7972313876f68cd->leave($__internal_a0912ae1a3eb10552633d32276bd9ba57c117082940b111ba7972313876f68cd_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5b3125c427e317dddaf045fdb411780038cff863df6d3ea17bc0561a19660195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3125c427e317dddaf045fdb411780038cff863df6d3ea17bc0561a19660195->enter($__internal_5b3125c427e317dddaf045fdb411780038cff863df6d3ea17bc0561a19660195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3ce0e3fa2238e661038a47759eed5e2bc8f8e2287e3e2682ba067b59386aa60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce0e3fa2238e661038a47759eed5e2bc8f8e2287e3e2682ba067b59386aa60f->enter($__internal_3ce0e3fa2238e661038a47759eed5e2bc8f8e2287e3e2682ba067b59386aa60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3ce0e3fa2238e661038a47759eed5e2bc8f8e2287e3e2682ba067b59386aa60f->leave($__internal_3ce0e3fa2238e661038a47759eed5e2bc8f8e2287e3e2682ba067b59386aa60f_prof);

        
        $__internal_5b3125c427e317dddaf045fdb411780038cff863df6d3ea17bc0561a19660195->leave($__internal_5b3125c427e317dddaf045fdb411780038cff863df6d3ea17bc0561a19660195_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
