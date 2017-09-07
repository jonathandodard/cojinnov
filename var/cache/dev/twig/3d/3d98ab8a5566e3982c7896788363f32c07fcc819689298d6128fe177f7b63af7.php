<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ffab92275824e73ac33adcd297be5b98e43b623c6007dcbde585b2925ecca0d1 extends Twig_Template
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
        $__internal_bde0434b5359ffe3165ff6bd0f47dfd971b862ab5c335a29afde7ebdc5b33981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde0434b5359ffe3165ff6bd0f47dfd971b862ab5c335a29afde7ebdc5b33981->enter($__internal_bde0434b5359ffe3165ff6bd0f47dfd971b862ab5c335a29afde7ebdc5b33981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_8d5d64c6b3d773e02f8b9d62edf897318d7a3d431843d28e491c23a47b714785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5d64c6b3d773e02f8b9d62edf897318d7a3d431843d28e491c23a47b714785->enter($__internal_8d5d64c6b3d773e02f8b9d62edf897318d7a3d431843d28e491c23a47b714785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bde0434b5359ffe3165ff6bd0f47dfd971b862ab5c335a29afde7ebdc5b33981->leave($__internal_bde0434b5359ffe3165ff6bd0f47dfd971b862ab5c335a29afde7ebdc5b33981_prof);

        
        $__internal_8d5d64c6b3d773e02f8b9d62edf897318d7a3d431843d28e491c23a47b714785->leave($__internal_8d5d64c6b3d773e02f8b9d62edf897318d7a3d431843d28e491c23a47b714785_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
