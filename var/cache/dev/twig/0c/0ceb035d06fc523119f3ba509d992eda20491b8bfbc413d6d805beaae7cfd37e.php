<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_db126c2a86a96d7ab35af9a0b737fbe07903c7408947019fb618bfaebaf18abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db126c2a86a96d7ab35af9a0b737fbe07903c7408947019fb618bfaebaf18abc->enter($__internal_db126c2a86a96d7ab35af9a0b737fbe07903c7408947019fb618bfaebaf18abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_512ced86520a2d60d07c99f31865d24393ee9cf06d19dba9d0c13f8233a65350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512ced86520a2d60d07c99f31865d24393ee9cf06d19dba9d0c13f8233a65350->enter($__internal_512ced86520a2d60d07c99f31865d24393ee9cf06d19dba9d0c13f8233a65350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_db126c2a86a96d7ab35af9a0b737fbe07903c7408947019fb618bfaebaf18abc->leave($__internal_db126c2a86a96d7ab35af9a0b737fbe07903c7408947019fb618bfaebaf18abc_prof);

        
        $__internal_512ced86520a2d60d07c99f31865d24393ee9cf06d19dba9d0c13f8233a65350->leave($__internal_512ced86520a2d60d07c99f31865d24393ee9cf06d19dba9d0c13f8233a65350_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
