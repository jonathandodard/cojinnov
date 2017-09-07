<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_8959ce6cf14e459c5a04d0ca613aa9fc4b804222885bbc43584360ded3d07fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8959ce6cf14e459c5a04d0ca613aa9fc4b804222885bbc43584360ded3d07fdc->enter($__internal_8959ce6cf14e459c5a04d0ca613aa9fc4b804222885bbc43584360ded3d07fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_47593e3a330f64394f02fba00b48716edf060319e1c652740dc951e83d65ee02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47593e3a330f64394f02fba00b48716edf060319e1c652740dc951e83d65ee02->enter($__internal_47593e3a330f64394f02fba00b48716edf060319e1c652740dc951e83d65ee02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8959ce6cf14e459c5a04d0ca613aa9fc4b804222885bbc43584360ded3d07fdc->leave($__internal_8959ce6cf14e459c5a04d0ca613aa9fc4b804222885bbc43584360ded3d07fdc_prof);

        
        $__internal_47593e3a330f64394f02fba00b48716edf060319e1c652740dc951e83d65ee02->leave($__internal_47593e3a330f64394f02fba00b48716edf060319e1c652740dc951e83d65ee02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
