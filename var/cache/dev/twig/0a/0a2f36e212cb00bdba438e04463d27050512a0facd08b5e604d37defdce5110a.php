<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4c16c19f8f2434e75928f1a7ab60aa30c50591555f8553767133b1a1101f476 extends Twig_Template
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
        $__internal_677c2edc6abe543c1e18a88de52877a907e9ab9c2b2e52e0049f9df55c04f1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677c2edc6abe543c1e18a88de52877a907e9ab9c2b2e52e0049f9df55c04f1d0->enter($__internal_677c2edc6abe543c1e18a88de52877a907e9ab9c2b2e52e0049f9df55c04f1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8aa8e6b57de4c4f368d58db21f6b122eac0ccdaf4d0cd513beb386d5a086dfec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa8e6b57de4c4f368d58db21f6b122eac0ccdaf4d0cd513beb386d5a086dfec->enter($__internal_8aa8e6b57de4c4f368d58db21f6b122eac0ccdaf4d0cd513beb386d5a086dfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_677c2edc6abe543c1e18a88de52877a907e9ab9c2b2e52e0049f9df55c04f1d0->leave($__internal_677c2edc6abe543c1e18a88de52877a907e9ab9c2b2e52e0049f9df55c04f1d0_prof);

        
        $__internal_8aa8e6b57de4c4f368d58db21f6b122eac0ccdaf4d0cd513beb386d5a086dfec->leave($__internal_8aa8e6b57de4c4f368d58db21f6b122eac0ccdaf4d0cd513beb386d5a086dfec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
