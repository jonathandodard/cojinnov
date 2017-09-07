<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_124d9dd75c929b55d18962f6bf938051c898074126861dbd40238066259d66b2 extends Twig_Template
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
        $__internal_af2bcf231322d1a101c528a27dbe2ec9a7da30bbd56baf6fa223dc17cb4c3db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2bcf231322d1a101c528a27dbe2ec9a7da30bbd56baf6fa223dc17cb4c3db7->enter($__internal_af2bcf231322d1a101c528a27dbe2ec9a7da30bbd56baf6fa223dc17cb4c3db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_78159ded3b76bf6657d2f3343061d93847accc2b6271d6fda6179a86e8cf9a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78159ded3b76bf6657d2f3343061d93847accc2b6271d6fda6179a86e8cf9a9b->enter($__internal_78159ded3b76bf6657d2f3343061d93847accc2b6271d6fda6179a86e8cf9a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_af2bcf231322d1a101c528a27dbe2ec9a7da30bbd56baf6fa223dc17cb4c3db7->leave($__internal_af2bcf231322d1a101c528a27dbe2ec9a7da30bbd56baf6fa223dc17cb4c3db7_prof);

        
        $__internal_78159ded3b76bf6657d2f3343061d93847accc2b6271d6fda6179a86e8cf9a9b->leave($__internal_78159ded3b76bf6657d2f3343061d93847accc2b6271d6fda6179a86e8cf9a9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
