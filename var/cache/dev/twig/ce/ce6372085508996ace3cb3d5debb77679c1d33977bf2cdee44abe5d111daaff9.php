<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_e78df8c0db129143d49704f41505a5c2e62162f3142e38a59c6a8eb144e4133b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78df8c0db129143d49704f41505a5c2e62162f3142e38a59c6a8eb144e4133b->enter($__internal_e78df8c0db129143d49704f41505a5c2e62162f3142e38a59c6a8eb144e4133b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4a292b49c58fa3fd4edc4d8552b0b760cb298775e57c6c3ffefad5d846fecade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a292b49c58fa3fd4edc4d8552b0b760cb298775e57c6c3ffefad5d846fecade->enter($__internal_4a292b49c58fa3fd4edc4d8552b0b760cb298775e57c6c3ffefad5d846fecade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e78df8c0db129143d49704f41505a5c2e62162f3142e38a59c6a8eb144e4133b->leave($__internal_e78df8c0db129143d49704f41505a5c2e62162f3142e38a59c6a8eb144e4133b_prof);

        
        $__internal_4a292b49c58fa3fd4edc4d8552b0b760cb298775e57c6c3ffefad5d846fecade->leave($__internal_4a292b49c58fa3fd4edc4d8552b0b760cb298775e57c6c3ffefad5d846fecade_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
