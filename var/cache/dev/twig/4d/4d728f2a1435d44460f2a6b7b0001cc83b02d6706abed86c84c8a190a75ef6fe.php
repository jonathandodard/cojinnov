<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_f2d9e63ad191313ec7dd7388275cb0da9a0bc03de98b57f633dc911c0e113400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d9e63ad191313ec7dd7388275cb0da9a0bc03de98b57f633dc911c0e113400->enter($__internal_f2d9e63ad191313ec7dd7388275cb0da9a0bc03de98b57f633dc911c0e113400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_583f61be1ae19283728bf7a6dd735aca4f72ad5c499cf13102f7665417f97417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583f61be1ae19283728bf7a6dd735aca4f72ad5c499cf13102f7665417f97417->enter($__internal_583f61be1ae19283728bf7a6dd735aca4f72ad5c499cf13102f7665417f97417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f2d9e63ad191313ec7dd7388275cb0da9a0bc03de98b57f633dc911c0e113400->leave($__internal_f2d9e63ad191313ec7dd7388275cb0da9a0bc03de98b57f633dc911c0e113400_prof);

        
        $__internal_583f61be1ae19283728bf7a6dd735aca4f72ad5c499cf13102f7665417f97417->leave($__internal_583f61be1ae19283728bf7a6dd735aca4f72ad5c499cf13102f7665417f97417_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
