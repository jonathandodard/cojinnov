<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_c254f2cb3b1b63c81c449b5df36199ba3636e4f1b02adf94cf205cb477db8dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c254f2cb3b1b63c81c449b5df36199ba3636e4f1b02adf94cf205cb477db8dab->enter($__internal_c254f2cb3b1b63c81c449b5df36199ba3636e4f1b02adf94cf205cb477db8dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_17cae3324f8078b56aa3fd26ace8c727946b126379d46b0400f53c1a3e51a447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cae3324f8078b56aa3fd26ace8c727946b126379d46b0400f53c1a3e51a447->enter($__internal_17cae3324f8078b56aa3fd26ace8c727946b126379d46b0400f53c1a3e51a447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c254f2cb3b1b63c81c449b5df36199ba3636e4f1b02adf94cf205cb477db8dab->leave($__internal_c254f2cb3b1b63c81c449b5df36199ba3636e4f1b02adf94cf205cb477db8dab_prof);

        
        $__internal_17cae3324f8078b56aa3fd26ace8c727946b126379d46b0400f53c1a3e51a447->leave($__internal_17cae3324f8078b56aa3fd26ace8c727946b126379d46b0400f53c1a3e51a447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
