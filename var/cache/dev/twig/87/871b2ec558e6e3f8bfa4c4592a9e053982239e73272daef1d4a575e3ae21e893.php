<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_3798aa16b51e905608ec5164de8ef8449b2feb6b8ceed351d644bf309842a918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3798aa16b51e905608ec5164de8ef8449b2feb6b8ceed351d644bf309842a918->enter($__internal_3798aa16b51e905608ec5164de8ef8449b2feb6b8ceed351d644bf309842a918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d348fa9d053c4192f7bbe4fb039175370f90e5177c621756856fefc0cf4fa0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d348fa9d053c4192f7bbe4fb039175370f90e5177c621756856fefc0cf4fa0b4->enter($__internal_d348fa9d053c4192f7bbe4fb039175370f90e5177c621756856fefc0cf4fa0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3798aa16b51e905608ec5164de8ef8449b2feb6b8ceed351d644bf309842a918->leave($__internal_3798aa16b51e905608ec5164de8ef8449b2feb6b8ceed351d644bf309842a918_prof);

        
        $__internal_d348fa9d053c4192f7bbe4fb039175370f90e5177c621756856fefc0cf4fa0b4->leave($__internal_d348fa9d053c4192f7bbe4fb039175370f90e5177c621756856fefc0cf4fa0b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
