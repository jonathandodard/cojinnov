<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_48b2d38b5c157a8399f158f3230765c77bffcd984f6306dd587fdc0ea3226e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b2d38b5c157a8399f158f3230765c77bffcd984f6306dd587fdc0ea3226e04->enter($__internal_48b2d38b5c157a8399f158f3230765c77bffcd984f6306dd587fdc0ea3226e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_ce8d707ac8ab96e8d586edc1d0f2f84a1668d585e9ff2a9393a7326be3fdb4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8d707ac8ab96e8d586edc1d0f2f84a1668d585e9ff2a9393a7326be3fdb4ca->enter($__internal_ce8d707ac8ab96e8d586edc1d0f2f84a1668d585e9ff2a9393a7326be3fdb4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_48b2d38b5c157a8399f158f3230765c77bffcd984f6306dd587fdc0ea3226e04->leave($__internal_48b2d38b5c157a8399f158f3230765c77bffcd984f6306dd587fdc0ea3226e04_prof);

        
        $__internal_ce8d707ac8ab96e8d586edc1d0f2f84a1668d585e9ff2a9393a7326be3fdb4ca->leave($__internal_ce8d707ac8ab96e8d586edc1d0f2f84a1668d585e9ff2a9393a7326be3fdb4ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
