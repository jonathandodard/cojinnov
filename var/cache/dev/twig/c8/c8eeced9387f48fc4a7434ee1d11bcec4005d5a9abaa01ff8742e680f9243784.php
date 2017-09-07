<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_a60eb6343b9d68192a12c0fa66f7d9394b9249dbf16a883b42265f8da35ed6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60eb6343b9d68192a12c0fa66f7d9394b9249dbf16a883b42265f8da35ed6b8->enter($__internal_a60eb6343b9d68192a12c0fa66f7d9394b9249dbf16a883b42265f8da35ed6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3639cda46de64b7b7b91c11868ca7a0ee9c826a0f5389d6d37301a1cb3b957da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3639cda46de64b7b7b91c11868ca7a0ee9c826a0f5389d6d37301a1cb3b957da->enter($__internal_3639cda46de64b7b7b91c11868ca7a0ee9c826a0f5389d6d37301a1cb3b957da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a60eb6343b9d68192a12c0fa66f7d9394b9249dbf16a883b42265f8da35ed6b8->leave($__internal_a60eb6343b9d68192a12c0fa66f7d9394b9249dbf16a883b42265f8da35ed6b8_prof);

        
        $__internal_3639cda46de64b7b7b91c11868ca7a0ee9c826a0f5389d6d37301a1cb3b957da->leave($__internal_3639cda46de64b7b7b91c11868ca7a0ee9c826a0f5389d6d37301a1cb3b957da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
