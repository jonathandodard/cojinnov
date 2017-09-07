<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_22657dd6c7de2ba02619fe8627fdb2a1129db62fc0a703ac11931f005f8051ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22657dd6c7de2ba02619fe8627fdb2a1129db62fc0a703ac11931f005f8051ba->enter($__internal_22657dd6c7de2ba02619fe8627fdb2a1129db62fc0a703ac11931f005f8051ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_efaaa0897b559e55433705593c7d47bf11e6d012e707f0e0bcd8fd4607960995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaaa0897b559e55433705593c7d47bf11e6d012e707f0e0bcd8fd4607960995->enter($__internal_efaaa0897b559e55433705593c7d47bf11e6d012e707f0e0bcd8fd4607960995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_22657dd6c7de2ba02619fe8627fdb2a1129db62fc0a703ac11931f005f8051ba->leave($__internal_22657dd6c7de2ba02619fe8627fdb2a1129db62fc0a703ac11931f005f8051ba_prof);

        
        $__internal_efaaa0897b559e55433705593c7d47bf11e6d012e707f0e0bcd8fd4607960995->leave($__internal_efaaa0897b559e55433705593c7d47bf11e6d012e707f0e0bcd8fd4607960995_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
