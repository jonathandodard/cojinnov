<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_b0457fe89e19b65b704ab8a5da3f3b81ca9106f0cf87581f178fb6e1a5aabba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0457fe89e19b65b704ab8a5da3f3b81ca9106f0cf87581f178fb6e1a5aabba4->enter($__internal_b0457fe89e19b65b704ab8a5da3f3b81ca9106f0cf87581f178fb6e1a5aabba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_c274180a4bf72907b68f3109336080901eae5a3fb7801d74fad22549caf130c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c274180a4bf72907b68f3109336080901eae5a3fb7801d74fad22549caf130c5->enter($__internal_c274180a4bf72907b68f3109336080901eae5a3fb7801d74fad22549caf130c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b0457fe89e19b65b704ab8a5da3f3b81ca9106f0cf87581f178fb6e1a5aabba4->leave($__internal_b0457fe89e19b65b704ab8a5da3f3b81ca9106f0cf87581f178fb6e1a5aabba4_prof);

        
        $__internal_c274180a4bf72907b68f3109336080901eae5a3fb7801d74fad22549caf130c5->leave($__internal_c274180a4bf72907b68f3109336080901eae5a3fb7801d74fad22549caf130c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
