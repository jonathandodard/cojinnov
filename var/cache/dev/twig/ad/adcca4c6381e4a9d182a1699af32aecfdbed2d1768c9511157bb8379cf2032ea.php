<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_bc2cdca76adcc9b9b0c1301bef534f6690b127633456cb19e8602ab0b61ff3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2cdca76adcc9b9b0c1301bef534f6690b127633456cb19e8602ab0b61ff3a1->enter($__internal_bc2cdca76adcc9b9b0c1301bef534f6690b127633456cb19e8602ab0b61ff3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_306411978bf62d1ff992b11d3dc9a989cc49fd794cdc9f16253c8599fa1a940c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306411978bf62d1ff992b11d3dc9a989cc49fd794cdc9f16253c8599fa1a940c->enter($__internal_306411978bf62d1ff992b11d3dc9a989cc49fd794cdc9f16253c8599fa1a940c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bc2cdca76adcc9b9b0c1301bef534f6690b127633456cb19e8602ab0b61ff3a1->leave($__internal_bc2cdca76adcc9b9b0c1301bef534f6690b127633456cb19e8602ab0b61ff3a1_prof);

        
        $__internal_306411978bf62d1ff992b11d3dc9a989cc49fd794cdc9f16253c8599fa1a940c->leave($__internal_306411978bf62d1ff992b11d3dc9a989cc49fd794cdc9f16253c8599fa1a940c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
