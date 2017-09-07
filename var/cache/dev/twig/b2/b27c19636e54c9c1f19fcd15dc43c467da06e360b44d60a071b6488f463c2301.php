<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_7f4c01af6bebd1d97f6f99007fbf7940dbef309734b32de896ff396fb90f3b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4c01af6bebd1d97f6f99007fbf7940dbef309734b32de896ff396fb90f3b4d->enter($__internal_7f4c01af6bebd1d97f6f99007fbf7940dbef309734b32de896ff396fb90f3b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ae5ae022557b4ebb4e7a6427ed05b214518853e558b05b5f7bf69e3bb0c8ce03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5ae022557b4ebb4e7a6427ed05b214518853e558b05b5f7bf69e3bb0c8ce03->enter($__internal_ae5ae022557b4ebb4e7a6427ed05b214518853e558b05b5f7bf69e3bb0c8ce03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7f4c01af6bebd1d97f6f99007fbf7940dbef309734b32de896ff396fb90f3b4d->leave($__internal_7f4c01af6bebd1d97f6f99007fbf7940dbef309734b32de896ff396fb90f3b4d_prof);

        
        $__internal_ae5ae022557b4ebb4e7a6427ed05b214518853e558b05b5f7bf69e3bb0c8ce03->leave($__internal_ae5ae022557b4ebb4e7a6427ed05b214518853e558b05b5f7bf69e3bb0c8ce03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
