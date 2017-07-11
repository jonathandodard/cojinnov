<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_190e907d4b7ee6d4ac61992e783e487e3b913241aa603a2c688bbd6344960e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190e907d4b7ee6d4ac61992e783e487e3b913241aa603a2c688bbd6344960e94->enter($__internal_190e907d4b7ee6d4ac61992e783e487e3b913241aa603a2c688bbd6344960e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f061e61ea623c1110201d2132d669e25ecf07bf07619901a1fff0cbfb22be93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f061e61ea623c1110201d2132d669e25ecf07bf07619901a1fff0cbfb22be93d->enter($__internal_f061e61ea623c1110201d2132d669e25ecf07bf07619901a1fff0cbfb22be93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_190e907d4b7ee6d4ac61992e783e487e3b913241aa603a2c688bbd6344960e94->leave($__internal_190e907d4b7ee6d4ac61992e783e487e3b913241aa603a2c688bbd6344960e94_prof);

        
        $__internal_f061e61ea623c1110201d2132d669e25ecf07bf07619901a1fff0cbfb22be93d->leave($__internal_f061e61ea623c1110201d2132d669e25ecf07bf07619901a1fff0cbfb22be93d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b53295921c2f62eb775ba4c52df5902a83da09b4e3338cb64285f056135f24f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53295921c2f62eb775ba4c52df5902a83da09b4e3338cb64285f056135f24f2->enter($__internal_b53295921c2f62eb775ba4c52df5902a83da09b4e3338cb64285f056135f24f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ef55fdfc93312445aa1d6cf999bcaf1422a2fd53be7a939a52c954bad5150852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef55fdfc93312445aa1d6cf999bcaf1422a2fd53be7a939a52c954bad5150852->enter($__internal_ef55fdfc93312445aa1d6cf999bcaf1422a2fd53be7a939a52c954bad5150852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ef55fdfc93312445aa1d6cf999bcaf1422a2fd53be7a939a52c954bad5150852->leave($__internal_ef55fdfc93312445aa1d6cf999bcaf1422a2fd53be7a939a52c954bad5150852_prof);

        
        $__internal_b53295921c2f62eb775ba4c52df5902a83da09b4e3338cb64285f056135f24f2->leave($__internal_b53295921c2f62eb775ba4c52df5902a83da09b4e3338cb64285f056135f24f2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00607f9880599a0a072188dd2418d3441209c4081d0e3f3060ab9df76e8f6c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00607f9880599a0a072188dd2418d3441209c4081d0e3f3060ab9df76e8f6c17->enter($__internal_00607f9880599a0a072188dd2418d3441209c4081d0e3f3060ab9df76e8f6c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dc234cfdc959ed85ba922d03cff031645815d276b3056290eafefd27899e1cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc234cfdc959ed85ba922d03cff031645815d276b3056290eafefd27899e1cf8->enter($__internal_dc234cfdc959ed85ba922d03cff031645815d276b3056290eafefd27899e1cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dc234cfdc959ed85ba922d03cff031645815d276b3056290eafefd27899e1cf8->leave($__internal_dc234cfdc959ed85ba922d03cff031645815d276b3056290eafefd27899e1cf8_prof);

        
        $__internal_00607f9880599a0a072188dd2418d3441209c4081d0e3f3060ab9df76e8f6c17->leave($__internal_00607f9880599a0a072188dd2418d3441209c4081d0e3f3060ab9df76e8f6c17_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3b614e8ec080842b2a41bd4fa34cccebf66cf4de238f5e55e886e187f45cc22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b614e8ec080842b2a41bd4fa34cccebf66cf4de238f5e55e886e187f45cc22->enter($__internal_d3b614e8ec080842b2a41bd4fa34cccebf66cf4de238f5e55e886e187f45cc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5aa42e4f5c775878f85134549ba0ced04802412aefe5ff172c4ce7ae37f0e9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa42e4f5c775878f85134549ba0ced04802412aefe5ff172c4ce7ae37f0e9d6->enter($__internal_5aa42e4f5c775878f85134549ba0ced04802412aefe5ff172c4ce7ae37f0e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5aa42e4f5c775878f85134549ba0ced04802412aefe5ff172c4ce7ae37f0e9d6->leave($__internal_5aa42e4f5c775878f85134549ba0ced04802412aefe5ff172c4ce7ae37f0e9d6_prof);

        
        $__internal_d3b614e8ec080842b2a41bd4fa34cccebf66cf4de238f5e55e886e187f45cc22->leave($__internal_d3b614e8ec080842b2a41bd4fa34cccebf66cf4de238f5e55e886e187f45cc22_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
