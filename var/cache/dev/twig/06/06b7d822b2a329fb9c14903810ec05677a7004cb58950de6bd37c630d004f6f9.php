<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_46a61dfdb1f1f10291938d6de7ae8079b8eaaa2a4cc6b10a0d9d62efe3a57a31 extends Twig_Template
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
        $__internal_7b1d9cb1d9da12de92eaf1a6f2f237bb99b36308fbc18b77bf2dcd4a4edc05fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1d9cb1d9da12de92eaf1a6f2f237bb99b36308fbc18b77bf2dcd4a4edc05fc->enter($__internal_7b1d9cb1d9da12de92eaf1a6f2f237bb99b36308fbc18b77bf2dcd4a4edc05fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_1be65956921d123d0071868a68c3a5f09a25898a341f3feefc9efb6b8da75f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be65956921d123d0071868a68c3a5f09a25898a341f3feefc9efb6b8da75f48->enter($__internal_1be65956921d123d0071868a68c3a5f09a25898a341f3feefc9efb6b8da75f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7b1d9cb1d9da12de92eaf1a6f2f237bb99b36308fbc18b77bf2dcd4a4edc05fc->leave($__internal_7b1d9cb1d9da12de92eaf1a6f2f237bb99b36308fbc18b77bf2dcd4a4edc05fc_prof);

        
        $__internal_1be65956921d123d0071868a68c3a5f09a25898a341f3feefc9efb6b8da75f48->leave($__internal_1be65956921d123d0071868a68c3a5f09a25898a341f3feefc9efb6b8da75f48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
