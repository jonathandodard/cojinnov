<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_306d8c1287dba13eba70879d837fab9d6fc302c15cd37e999bc70914b04791e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306d8c1287dba13eba70879d837fab9d6fc302c15cd37e999bc70914b04791e4->enter($__internal_306d8c1287dba13eba70879d837fab9d6fc302c15cd37e999bc70914b04791e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e2f698702de3b0520b502500858406ba6ba4a27083275b51462401e78f10b309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f698702de3b0520b502500858406ba6ba4a27083275b51462401e78f10b309->enter($__internal_e2f698702de3b0520b502500858406ba6ba4a27083275b51462401e78f10b309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_306d8c1287dba13eba70879d837fab9d6fc302c15cd37e999bc70914b04791e4->leave($__internal_306d8c1287dba13eba70879d837fab9d6fc302c15cd37e999bc70914b04791e4_prof);

        
        $__internal_e2f698702de3b0520b502500858406ba6ba4a27083275b51462401e78f10b309->leave($__internal_e2f698702de3b0520b502500858406ba6ba4a27083275b51462401e78f10b309_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_552ef5a4d17880f412e42d0047dd760fc13923cacc71009e3ebabd3b528f1f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552ef5a4d17880f412e42d0047dd760fc13923cacc71009e3ebabd3b528f1f3a->enter($__internal_552ef5a4d17880f412e42d0047dd760fc13923cacc71009e3ebabd3b528f1f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0aac3754b8e9f0df80c089b7d4279c1107c6cb5c57f46b27ad3928346f896827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aac3754b8e9f0df80c089b7d4279c1107c6cb5c57f46b27ad3928346f896827->enter($__internal_0aac3754b8e9f0df80c089b7d4279c1107c6cb5c57f46b27ad3928346f896827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0aac3754b8e9f0df80c089b7d4279c1107c6cb5c57f46b27ad3928346f896827->leave($__internal_0aac3754b8e9f0df80c089b7d4279c1107c6cb5c57f46b27ad3928346f896827_prof);

        
        $__internal_552ef5a4d17880f412e42d0047dd760fc13923cacc71009e3ebabd3b528f1f3a->leave($__internal_552ef5a4d17880f412e42d0047dd760fc13923cacc71009e3ebabd3b528f1f3a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b2a2836560bad8f67d11c5df18f494f5c052c7ac785c12cc64c413b6dc35718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2a2836560bad8f67d11c5df18f494f5c052c7ac785c12cc64c413b6dc35718->enter($__internal_0b2a2836560bad8f67d11c5df18f494f5c052c7ac785c12cc64c413b6dc35718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7e200f646eb4665a62a06b6c394446816ee344ccbc50884489c8ca55f703cf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e200f646eb4665a62a06b6c394446816ee344ccbc50884489c8ca55f703cf5d->enter($__internal_7e200f646eb4665a62a06b6c394446816ee344ccbc50884489c8ca55f703cf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7e200f646eb4665a62a06b6c394446816ee344ccbc50884489c8ca55f703cf5d->leave($__internal_7e200f646eb4665a62a06b6c394446816ee344ccbc50884489c8ca55f703cf5d_prof);

        
        $__internal_0b2a2836560bad8f67d11c5df18f494f5c052c7ac785c12cc64c413b6dc35718->leave($__internal_0b2a2836560bad8f67d11c5df18f494f5c052c7ac785c12cc64c413b6dc35718_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_73159c696b95f24f20bb7efa6845cf16b0ae753ced0eeccac611c52efbc0801f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73159c696b95f24f20bb7efa6845cf16b0ae753ced0eeccac611c52efbc0801f->enter($__internal_73159c696b95f24f20bb7efa6845cf16b0ae753ced0eeccac611c52efbc0801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb444f54abb8af5b65c12da328eb1307fc6f642df1a50dad2408c193faf0389e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb444f54abb8af5b65c12da328eb1307fc6f642df1a50dad2408c193faf0389e->enter($__internal_fb444f54abb8af5b65c12da328eb1307fc6f642df1a50dad2408c193faf0389e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fb444f54abb8af5b65c12da328eb1307fc6f642df1a50dad2408c193faf0389e->leave($__internal_fb444f54abb8af5b65c12da328eb1307fc6f642df1a50dad2408c193faf0389e_prof);

        
        $__internal_73159c696b95f24f20bb7efa6845cf16b0ae753ced0eeccac611c52efbc0801f->leave($__internal_73159c696b95f24f20bb7efa6845cf16b0ae753ced0eeccac611c52efbc0801f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3191ea95b98b58e6f09f92febd227a5a1dcaf9dc798d77ab39b60ffba150dbd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3191ea95b98b58e6f09f92febd227a5a1dcaf9dc798d77ab39b60ffba150dbd1->enter($__internal_3191ea95b98b58e6f09f92febd227a5a1dcaf9dc798d77ab39b60ffba150dbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_187711fdc573c3ad2b3a2456f0cbfd553a17c69bd4c3252be76bb98ff94b86ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187711fdc573c3ad2b3a2456f0cbfd553a17c69bd4c3252be76bb98ff94b86ed->enter($__internal_187711fdc573c3ad2b3a2456f0cbfd553a17c69bd4c3252be76bb98ff94b86ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_187711fdc573c3ad2b3a2456f0cbfd553a17c69bd4c3252be76bb98ff94b86ed->leave($__internal_187711fdc573c3ad2b3a2456f0cbfd553a17c69bd4c3252be76bb98ff94b86ed_prof);

        
        $__internal_3191ea95b98b58e6f09f92febd227a5a1dcaf9dc798d77ab39b60ffba150dbd1->leave($__internal_3191ea95b98b58e6f09f92febd227a5a1dcaf9dc798d77ab39b60ffba150dbd1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/jonathan/Documents/Projets/cojinnov/app/Resources/views/base.html.twig");
    }
}
