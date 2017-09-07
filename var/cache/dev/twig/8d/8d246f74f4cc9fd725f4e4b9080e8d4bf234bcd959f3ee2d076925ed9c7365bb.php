<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6217e166b994556adba263301db96e59c16bbb339fedd6cb1926679508bc20e extends Twig_Template
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
        $__internal_e30b0ec94d311b89de1ed37d2af2940359e9bfd69c3658a8f7a70bb2f3b92935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30b0ec94d311b89de1ed37d2af2940359e9bfd69c3658a8f7a70bb2f3b92935->enter($__internal_e30b0ec94d311b89de1ed37d2af2940359e9bfd69c3658a8f7a70bb2f3b92935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_91c545fd2c83fd29a8c249e966c6d811d035bc3f09c0b6672d0d3eace80dd851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c545fd2c83fd29a8c249e966c6d811d035bc3f09c0b6672d0d3eace80dd851->enter($__internal_91c545fd2c83fd29a8c249e966c6d811d035bc3f09c0b6672d0d3eace80dd851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e30b0ec94d311b89de1ed37d2af2940359e9bfd69c3658a8f7a70bb2f3b92935->leave($__internal_e30b0ec94d311b89de1ed37d2af2940359e9bfd69c3658a8f7a70bb2f3b92935_prof);

        
        $__internal_91c545fd2c83fd29a8c249e966c6d811d035bc3f09c0b6672d0d3eace80dd851->leave($__internal_91c545fd2c83fd29a8c249e966c6d811d035bc3f09c0b6672d0d3eace80dd851_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
