<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_8f5877d15107892bad44f13e91ca5e6cd6b733a48699adf62b1ee857919352d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5877d15107892bad44f13e91ca5e6cd6b733a48699adf62b1ee857919352d6->enter($__internal_8f5877d15107892bad44f13e91ca5e6cd6b733a48699adf62b1ee857919352d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_965866e5fab3bd0fcdbc8064faacd2409cead640e6598804d2e99e9b9a83e31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965866e5fab3bd0fcdbc8064faacd2409cead640e6598804d2e99e9b9a83e31b->enter($__internal_965866e5fab3bd0fcdbc8064faacd2409cead640e6598804d2e99e9b9a83e31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_8f5877d15107892bad44f13e91ca5e6cd6b733a48699adf62b1ee857919352d6->leave($__internal_8f5877d15107892bad44f13e91ca5e6cd6b733a48699adf62b1ee857919352d6_prof);

        
        $__internal_965866e5fab3bd0fcdbc8064faacd2409cead640e6598804d2e99e9b9a83e31b->leave($__internal_965866e5fab3bd0fcdbc8064faacd2409cead640e6598804d2e99e9b9a83e31b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
