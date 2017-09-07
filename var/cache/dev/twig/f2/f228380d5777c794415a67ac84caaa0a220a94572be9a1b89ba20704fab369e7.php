<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ee0b9a07052e647824c699b41000c0c7aede5d7db4cf09bb119a7ad196d664c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee0b9a07052e647824c699b41000c0c7aede5d7db4cf09bb119a7ad196d664c->enter($__internal_3ee0b9a07052e647824c699b41000c0c7aede5d7db4cf09bb119a7ad196d664c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_80ff0932c0c8d88a17a400e3f99a4ca78b770f3b7141ce83a25b4bb78e3240d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ff0932c0c8d88a17a400e3f99a4ca78b770f3b7141ce83a25b4bb78e3240d0->enter($__internal_80ff0932c0c8d88a17a400e3f99a4ca78b770f3b7141ce83a25b4bb78e3240d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee0b9a07052e647824c699b41000c0c7aede5d7db4cf09bb119a7ad196d664c->leave($__internal_3ee0b9a07052e647824c699b41000c0c7aede5d7db4cf09bb119a7ad196d664c_prof);

        
        $__internal_80ff0932c0c8d88a17a400e3f99a4ca78b770f3b7141ce83a25b4bb78e3240d0->leave($__internal_80ff0932c0c8d88a17a400e3f99a4ca78b770f3b7141ce83a25b4bb78e3240d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_690f610e6c932f373e01a6a7796104dcf73caec1d5f3ff3b38b1255c06d28483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690f610e6c932f373e01a6a7796104dcf73caec1d5f3ff3b38b1255c06d28483->enter($__internal_690f610e6c932f373e01a6a7796104dcf73caec1d5f3ff3b38b1255c06d28483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0408f4537e9c6fa7d57f22f62cad248269b5a1a96495670d073068be01c0c285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0408f4537e9c6fa7d57f22f62cad248269b5a1a96495670d073068be01c0c285->enter($__internal_0408f4537e9c6fa7d57f22f62cad248269b5a1a96495670d073068be01c0c285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0408f4537e9c6fa7d57f22f62cad248269b5a1a96495670d073068be01c0c285->leave($__internal_0408f4537e9c6fa7d57f22f62cad248269b5a1a96495670d073068be01c0c285_prof);

        
        $__internal_690f610e6c932f373e01a6a7796104dcf73caec1d5f3ff3b38b1255c06d28483->leave($__internal_690f610e6c932f373e01a6a7796104dcf73caec1d5f3ff3b38b1255c06d28483_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43169f7336f8b8a284653f511070093bc0994ecac8555386a35016dc66bc9f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43169f7336f8b8a284653f511070093bc0994ecac8555386a35016dc66bc9f6d->enter($__internal_43169f7336f8b8a284653f511070093bc0994ecac8555386a35016dc66bc9f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_57bce5ad2252e20bee0d21c3ffaea98dc04bacaefb38215b39e53b84cc3e4ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bce5ad2252e20bee0d21c3ffaea98dc04bacaefb38215b39e53b84cc3e4ec3->enter($__internal_57bce5ad2252e20bee0d21c3ffaea98dc04bacaefb38215b39e53b84cc3e4ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57bce5ad2252e20bee0d21c3ffaea98dc04bacaefb38215b39e53b84cc3e4ec3->leave($__internal_57bce5ad2252e20bee0d21c3ffaea98dc04bacaefb38215b39e53b84cc3e4ec3_prof);

        
        $__internal_43169f7336f8b8a284653f511070093bc0994ecac8555386a35016dc66bc9f6d->leave($__internal_43169f7336f8b8a284653f511070093bc0994ecac8555386a35016dc66bc9f6d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2d031bbe54a9cc30d5d460043f4b43275624ca5110333f112b4feb8b59b80b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d031bbe54a9cc30d5d460043f4b43275624ca5110333f112b4feb8b59b80b6->enter($__internal_b2d031bbe54a9cc30d5d460043f4b43275624ca5110333f112b4feb8b59b80b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1417f6a6bf413ea5f412f6e6a99e8c0b3caa7b74f3516c39ce0af4ae40fdc5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1417f6a6bf413ea5f412f6e6a99e8c0b3caa7b74f3516c39ce0af4ae40fdc5d4->enter($__internal_1417f6a6bf413ea5f412f6e6a99e8c0b3caa7b74f3516c39ce0af4ae40fdc5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1417f6a6bf413ea5f412f6e6a99e8c0b3caa7b74f3516c39ce0af4ae40fdc5d4->leave($__internal_1417f6a6bf413ea5f412f6e6a99e8c0b3caa7b74f3516c39ce0af4ae40fdc5d4_prof);

        
        $__internal_b2d031bbe54a9cc30d5d460043f4b43275624ca5110333f112b4feb8b59b80b6->leave($__internal_b2d031bbe54a9cc30d5d460043f4b43275624ca5110333f112b4feb8b59b80b6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
