<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_4de304dda5bcdd483d38cd40e3db27799056a11234f0b3322bc323655e038158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de304dda5bcdd483d38cd40e3db27799056a11234f0b3322bc323655e038158->enter($__internal_4de304dda5bcdd483d38cd40e3db27799056a11234f0b3322bc323655e038158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a971eb10997af39371b4a2ec586681295adc412e4a566972d04c5f176cd10adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a971eb10997af39371b4a2ec586681295adc412e4a566972d04c5f176cd10adb->enter($__internal_a971eb10997af39371b4a2ec586681295adc412e4a566972d04c5f176cd10adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4de304dda5bcdd483d38cd40e3db27799056a11234f0b3322bc323655e038158->leave($__internal_4de304dda5bcdd483d38cd40e3db27799056a11234f0b3322bc323655e038158_prof);

        
        $__internal_a971eb10997af39371b4a2ec586681295adc412e4a566972d04c5f176cd10adb->leave($__internal_a971eb10997af39371b4a2ec586681295adc412e4a566972d04c5f176cd10adb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
