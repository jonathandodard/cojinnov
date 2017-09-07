<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_ca96b87641e34d262f6d61a8e51efc62d4f91b9ef5031acad8c2a9dcefc7b8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca96b87641e34d262f6d61a8e51efc62d4f91b9ef5031acad8c2a9dcefc7b8f7->enter($__internal_ca96b87641e34d262f6d61a8e51efc62d4f91b9ef5031acad8c2a9dcefc7b8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d9c448ebb0b7478f6840cc94380d062df2eaa39e9dc3b5e52f6da0adfd9fa21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c448ebb0b7478f6840cc94380d062df2eaa39e9dc3b5e52f6da0adfd9fa21d->enter($__internal_d9c448ebb0b7478f6840cc94380d062df2eaa39e9dc3b5e52f6da0adfd9fa21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_ca96b87641e34d262f6d61a8e51efc62d4f91b9ef5031acad8c2a9dcefc7b8f7->leave($__internal_ca96b87641e34d262f6d61a8e51efc62d4f91b9ef5031acad8c2a9dcefc7b8f7_prof);

        
        $__internal_d9c448ebb0b7478f6840cc94380d062df2eaa39e9dc3b5e52f6da0adfd9fa21d->leave($__internal_d9c448ebb0b7478f6840cc94380d062df2eaa39e9dc3b5e52f6da0adfd9fa21d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
