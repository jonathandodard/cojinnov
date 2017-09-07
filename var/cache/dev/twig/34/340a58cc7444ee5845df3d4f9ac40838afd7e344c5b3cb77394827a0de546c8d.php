<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_f8868b5acffce4013bfb33afad4ed05a173977385fdc281540c640b4db45fa05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8868b5acffce4013bfb33afad4ed05a173977385fdc281540c640b4db45fa05->enter($__internal_f8868b5acffce4013bfb33afad4ed05a173977385fdc281540c640b4db45fa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_80e5c88ac1a0d5899304e7b577839b9e062c99e486cdc991bec9e8a2a007a3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e5c88ac1a0d5899304e7b577839b9e062c99e486cdc991bec9e8a2a007a3db->enter($__internal_80e5c88ac1a0d5899304e7b577839b9e062c99e486cdc991bec9e8a2a007a3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f8868b5acffce4013bfb33afad4ed05a173977385fdc281540c640b4db45fa05->leave($__internal_f8868b5acffce4013bfb33afad4ed05a173977385fdc281540c640b4db45fa05_prof);

        
        $__internal_80e5c88ac1a0d5899304e7b577839b9e062c99e486cdc991bec9e8a2a007a3db->leave($__internal_80e5c88ac1a0d5899304e7b577839b9e062c99e486cdc991bec9e8a2a007a3db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
