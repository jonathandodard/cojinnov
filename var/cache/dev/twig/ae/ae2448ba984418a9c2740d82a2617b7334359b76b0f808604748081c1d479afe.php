<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_1ca90f6d8ad35cec270f9c3c509c10bc01b17c69839ada53543d17b8d44f91d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca90f6d8ad35cec270f9c3c509c10bc01b17c69839ada53543d17b8d44f91d8->enter($__internal_1ca90f6d8ad35cec270f9c3c509c10bc01b17c69839ada53543d17b8d44f91d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d2ff67bdf85bcc11df83e239c7504ca34eb22a31729e0a4269fc069edba94905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ff67bdf85bcc11df83e239c7504ca34eb22a31729e0a4269fc069edba94905->enter($__internal_d2ff67bdf85bcc11df83e239c7504ca34eb22a31729e0a4269fc069edba94905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1ca90f6d8ad35cec270f9c3c509c10bc01b17c69839ada53543d17b8d44f91d8->leave($__internal_1ca90f6d8ad35cec270f9c3c509c10bc01b17c69839ada53543d17b8d44f91d8_prof);

        
        $__internal_d2ff67bdf85bcc11df83e239c7504ca34eb22a31729e0a4269fc069edba94905->leave($__internal_d2ff67bdf85bcc11df83e239c7504ca34eb22a31729e0a4269fc069edba94905_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
