<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_9b3eadd476fd5b5b48d4e16aae32915723a6c9e33aa90838e0658897c2e44353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3eadd476fd5b5b48d4e16aae32915723a6c9e33aa90838e0658897c2e44353->enter($__internal_9b3eadd476fd5b5b48d4e16aae32915723a6c9e33aa90838e0658897c2e44353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c77738dcda0fed9cdffa239993ae4283ca0b0dce07a383a7fe84091ff4873d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77738dcda0fed9cdffa239993ae4283ca0b0dce07a383a7fe84091ff4873d59->enter($__internal_c77738dcda0fed9cdffa239993ae4283ca0b0dce07a383a7fe84091ff4873d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9b3eadd476fd5b5b48d4e16aae32915723a6c9e33aa90838e0658897c2e44353->leave($__internal_9b3eadd476fd5b5b48d4e16aae32915723a6c9e33aa90838e0658897c2e44353_prof);

        
        $__internal_c77738dcda0fed9cdffa239993ae4283ca0b0dce07a383a7fe84091ff4873d59->leave($__internal_c77738dcda0fed9cdffa239993ae4283ca0b0dce07a383a7fe84091ff4873d59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
