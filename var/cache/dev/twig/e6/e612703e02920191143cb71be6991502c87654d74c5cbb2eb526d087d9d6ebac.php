<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_10b3a57abad7405f3e2b1a41f1e2def2d06a54d7b398ded0fe772a232d10e99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b3a57abad7405f3e2b1a41f1e2def2d06a54d7b398ded0fe772a232d10e99f->enter($__internal_10b3a57abad7405f3e2b1a41f1e2def2d06a54d7b398ded0fe772a232d10e99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f5ef3df6aaf3a90b68f68bfd46fa1058dd3366d342c36d13f2a95bcfeeeb7234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ef3df6aaf3a90b68f68bfd46fa1058dd3366d342c36d13f2a95bcfeeeb7234->enter($__internal_f5ef3df6aaf3a90b68f68bfd46fa1058dd3366d342c36d13f2a95bcfeeeb7234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_10b3a57abad7405f3e2b1a41f1e2def2d06a54d7b398ded0fe772a232d10e99f->leave($__internal_10b3a57abad7405f3e2b1a41f1e2def2d06a54d7b398ded0fe772a232d10e99f_prof);

        
        $__internal_f5ef3df6aaf3a90b68f68bfd46fa1058dd3366d342c36d13f2a95bcfeeeb7234->leave($__internal_f5ef3df6aaf3a90b68f68bfd46fa1058dd3366d342c36d13f2a95bcfeeeb7234_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
