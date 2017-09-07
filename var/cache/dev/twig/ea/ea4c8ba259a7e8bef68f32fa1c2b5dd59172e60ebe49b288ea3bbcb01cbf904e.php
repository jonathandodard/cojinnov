<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_d814b365e163dde764b546411ab3609658b0fb9e9f4113ad7d9652ae542f69f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d814b365e163dde764b546411ab3609658b0fb9e9f4113ad7d9652ae542f69f9->enter($__internal_d814b365e163dde764b546411ab3609658b0fb9e9f4113ad7d9652ae542f69f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_fe3c08a2416f90d7041bc36ad751235f6f737d508b5dfdd04e8fe129a65ab9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3c08a2416f90d7041bc36ad751235f6f737d508b5dfdd04e8fe129a65ab9f8->enter($__internal_fe3c08a2416f90d7041bc36ad751235f6f737d508b5dfdd04e8fe129a65ab9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d814b365e163dde764b546411ab3609658b0fb9e9f4113ad7d9652ae542f69f9->leave($__internal_d814b365e163dde764b546411ab3609658b0fb9e9f4113ad7d9652ae542f69f9_prof);

        
        $__internal_fe3c08a2416f90d7041bc36ad751235f6f737d508b5dfdd04e8fe129a65ab9f8->leave($__internal_fe3c08a2416f90d7041bc36ad751235f6f737d508b5dfdd04e8fe129a65ab9f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
