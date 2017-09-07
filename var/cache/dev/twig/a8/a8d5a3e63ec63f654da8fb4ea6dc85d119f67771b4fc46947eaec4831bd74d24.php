<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_75866f4485a8bfb35e6c9dbf66837a9f8f5a66990ce27bf5d9e13685e0dfcabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75866f4485a8bfb35e6c9dbf66837a9f8f5a66990ce27bf5d9e13685e0dfcabf->enter($__internal_75866f4485a8bfb35e6c9dbf66837a9f8f5a66990ce27bf5d9e13685e0dfcabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_401a41ef9719fd66c5550fb729c0587b41666774a8e79f2d05028bee0a1d08a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401a41ef9719fd66c5550fb729c0587b41666774a8e79f2d05028bee0a1d08a2->enter($__internal_401a41ef9719fd66c5550fb729c0587b41666774a8e79f2d05028bee0a1d08a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_75866f4485a8bfb35e6c9dbf66837a9f8f5a66990ce27bf5d9e13685e0dfcabf->leave($__internal_75866f4485a8bfb35e6c9dbf66837a9f8f5a66990ce27bf5d9e13685e0dfcabf_prof);

        
        $__internal_401a41ef9719fd66c5550fb729c0587b41666774a8e79f2d05028bee0a1d08a2->leave($__internal_401a41ef9719fd66c5550fb729c0587b41666774a8e79f2d05028bee0a1d08a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
