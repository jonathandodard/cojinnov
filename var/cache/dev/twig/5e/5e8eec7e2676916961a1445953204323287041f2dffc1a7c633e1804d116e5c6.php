<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_bd77595e72a018c6e8b672f7fc4012e5520f91fe36f0af56c712d97c59b5aaf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd77595e72a018c6e8b672f7fc4012e5520f91fe36f0af56c712d97c59b5aaf0->enter($__internal_bd77595e72a018c6e8b672f7fc4012e5520f91fe36f0af56c712d97c59b5aaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_7ce08819f8de583cc22a18dd3ab68a827f46d0d6a6db49493f969155a182d1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce08819f8de583cc22a18dd3ab68a827f46d0d6a6db49493f969155a182d1f4->enter($__internal_7ce08819f8de583cc22a18dd3ab68a827f46d0d6a6db49493f969155a182d1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_bd77595e72a018c6e8b672f7fc4012e5520f91fe36f0af56c712d97c59b5aaf0->leave($__internal_bd77595e72a018c6e8b672f7fc4012e5520f91fe36f0af56c712d97c59b5aaf0_prof);

        
        $__internal_7ce08819f8de583cc22a18dd3ab68a827f46d0d6a6db49493f969155a182d1f4->leave($__internal_7ce08819f8de583cc22a18dd3ab68a827f46d0d6a6db49493f969155a182d1f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
