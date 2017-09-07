<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_9e57dcec5c5770cd9b53ed6fbd3107370b8407b73073c26f54bbb610fe0f4c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e57dcec5c5770cd9b53ed6fbd3107370b8407b73073c26f54bbb610fe0f4c0e->enter($__internal_9e57dcec5c5770cd9b53ed6fbd3107370b8407b73073c26f54bbb610fe0f4c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ecfcc2a382f59e5af60496f5a2899d79a2b090393189120cf9c5424cdc9946eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfcc2a382f59e5af60496f5a2899d79a2b090393189120cf9c5424cdc9946eb->enter($__internal_ecfcc2a382f59e5af60496f5a2899d79a2b090393189120cf9c5424cdc9946eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9e57dcec5c5770cd9b53ed6fbd3107370b8407b73073c26f54bbb610fe0f4c0e->leave($__internal_9e57dcec5c5770cd9b53ed6fbd3107370b8407b73073c26f54bbb610fe0f4c0e_prof);

        
        $__internal_ecfcc2a382f59e5af60496f5a2899d79a2b090393189120cf9c5424cdc9946eb->leave($__internal_ecfcc2a382f59e5af60496f5a2899d79a2b090393189120cf9c5424cdc9946eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
