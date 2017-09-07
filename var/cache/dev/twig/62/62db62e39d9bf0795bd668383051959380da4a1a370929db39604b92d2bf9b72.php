<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_fac2cd2cb48adeec7a352e45e4fa68536b79a0459a7683f6195b94f54ac4cefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac2cd2cb48adeec7a352e45e4fa68536b79a0459a7683f6195b94f54ac4cefc->enter($__internal_fac2cd2cb48adeec7a352e45e4fa68536b79a0459a7683f6195b94f54ac4cefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_caab45aea55e222e40f130068aac82ed81fca2455c0e947afbb72bc428d7292e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caab45aea55e222e40f130068aac82ed81fca2455c0e947afbb72bc428d7292e->enter($__internal_caab45aea55e222e40f130068aac82ed81fca2455c0e947afbb72bc428d7292e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fac2cd2cb48adeec7a352e45e4fa68536b79a0459a7683f6195b94f54ac4cefc->leave($__internal_fac2cd2cb48adeec7a352e45e4fa68536b79a0459a7683f6195b94f54ac4cefc_prof);

        
        $__internal_caab45aea55e222e40f130068aac82ed81fca2455c0e947afbb72bc428d7292e->leave($__internal_caab45aea55e222e40f130068aac82ed81fca2455c0e947afbb72bc428d7292e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
