<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_6ae61c778cf2b1bdb2423242291028ac9744f7bd3a754b2a0c42c512728e12ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae61c778cf2b1bdb2423242291028ac9744f7bd3a754b2a0c42c512728e12ae->enter($__internal_6ae61c778cf2b1bdb2423242291028ac9744f7bd3a754b2a0c42c512728e12ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e394041c4d74a19c1bf7a60442571c87c0aa639d0b926884e881b95be03eb244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e394041c4d74a19c1bf7a60442571c87c0aa639d0b926884e881b95be03eb244->enter($__internal_e394041c4d74a19c1bf7a60442571c87c0aa639d0b926884e881b95be03eb244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6ae61c778cf2b1bdb2423242291028ac9744f7bd3a754b2a0c42c512728e12ae->leave($__internal_6ae61c778cf2b1bdb2423242291028ac9744f7bd3a754b2a0c42c512728e12ae_prof);

        
        $__internal_e394041c4d74a19c1bf7a60442571c87c0aa639d0b926884e881b95be03eb244->leave($__internal_e394041c4d74a19c1bf7a60442571c87c0aa639d0b926884e881b95be03eb244_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
