<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1512c57dfbba3898672d605795fba0275c98f880db87021dab5992f426c051ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1512c57dfbba3898672d605795fba0275c98f880db87021dab5992f426c051ce->enter($__internal_1512c57dfbba3898672d605795fba0275c98f880db87021dab5992f426c051ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b6dafbdd7829ad4c5f77363f277d4efc19c8b08f06690bc49729ea555f6b9b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6dafbdd7829ad4c5f77363f277d4efc19c8b08f06690bc49729ea555f6b9b62->enter($__internal_b6dafbdd7829ad4c5f77363f277d4efc19c8b08f06690bc49729ea555f6b9b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1512c57dfbba3898672d605795fba0275c98f880db87021dab5992f426c051ce->leave($__internal_1512c57dfbba3898672d605795fba0275c98f880db87021dab5992f426c051ce_prof);

        
        $__internal_b6dafbdd7829ad4c5f77363f277d4efc19c8b08f06690bc49729ea555f6b9b62->leave($__internal_b6dafbdd7829ad4c5f77363f277d4efc19c8b08f06690bc49729ea555f6b9b62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
