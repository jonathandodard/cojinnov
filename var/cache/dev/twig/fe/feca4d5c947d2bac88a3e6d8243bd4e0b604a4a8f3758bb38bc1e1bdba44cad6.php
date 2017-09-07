<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_b158ebd6f9f041842f66db0ee9e5e1ea7f378f80c75f8fadd57780db70a3fd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b158ebd6f9f041842f66db0ee9e5e1ea7f378f80c75f8fadd57780db70a3fd9a->enter($__internal_b158ebd6f9f041842f66db0ee9e5e1ea7f378f80c75f8fadd57780db70a3fd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_1d3886d368ebc1b8c8b36c61feeea9d61626f8b97728b2f617662d35ffb02df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3886d368ebc1b8c8b36c61feeea9d61626f8b97728b2f617662d35ffb02df4->enter($__internal_1d3886d368ebc1b8c8b36c61feeea9d61626f8b97728b2f617662d35ffb02df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b158ebd6f9f041842f66db0ee9e5e1ea7f378f80c75f8fadd57780db70a3fd9a->leave($__internal_b158ebd6f9f041842f66db0ee9e5e1ea7f378f80c75f8fadd57780db70a3fd9a_prof);

        
        $__internal_1d3886d368ebc1b8c8b36c61feeea9d61626f8b97728b2f617662d35ffb02df4->leave($__internal_1d3886d368ebc1b8c8b36c61feeea9d61626f8b97728b2f617662d35ffb02df4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
