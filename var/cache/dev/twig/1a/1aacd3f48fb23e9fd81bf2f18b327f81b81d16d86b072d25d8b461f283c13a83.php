<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_8268104e08ab897753e17f315b89a055df13eccf6633e5dc73f4da5a61f7a405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8268104e08ab897753e17f315b89a055df13eccf6633e5dc73f4da5a61f7a405->enter($__internal_8268104e08ab897753e17f315b89a055df13eccf6633e5dc73f4da5a61f7a405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2ce154f7bb9562c655a242fa00ed9d697da6d2c76cb4c23d927df7b8bb8a05b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce154f7bb9562c655a242fa00ed9d697da6d2c76cb4c23d927df7b8bb8a05b2->enter($__internal_2ce154f7bb9562c655a242fa00ed9d697da6d2c76cb4c23d927df7b8bb8a05b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8268104e08ab897753e17f315b89a055df13eccf6633e5dc73f4da5a61f7a405->leave($__internal_8268104e08ab897753e17f315b89a055df13eccf6633e5dc73f4da5a61f7a405_prof);

        
        $__internal_2ce154f7bb9562c655a242fa00ed9d697da6d2c76cb4c23d927df7b8bb8a05b2->leave($__internal_2ce154f7bb9562c655a242fa00ed9d697da6d2c76cb4c23d927df7b8bb8a05b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
