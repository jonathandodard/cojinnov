<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_f387b6282c4561394fe4978ca5a08f982f686055ef8ab5be6b1bd20b23bbdd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f387b6282c4561394fe4978ca5a08f982f686055ef8ab5be6b1bd20b23bbdd1f->enter($__internal_f387b6282c4561394fe4978ca5a08f982f686055ef8ab5be6b1bd20b23bbdd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4dd2a61867d1474f719cbbdaa74c3fde562ea7e68c8fe111d3fd1e87a8a01878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd2a61867d1474f719cbbdaa74c3fde562ea7e68c8fe111d3fd1e87a8a01878->enter($__internal_4dd2a61867d1474f719cbbdaa74c3fde562ea7e68c8fe111d3fd1e87a8a01878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f387b6282c4561394fe4978ca5a08f982f686055ef8ab5be6b1bd20b23bbdd1f->leave($__internal_f387b6282c4561394fe4978ca5a08f982f686055ef8ab5be6b1bd20b23bbdd1f_prof);

        
        $__internal_4dd2a61867d1474f719cbbdaa74c3fde562ea7e68c8fe111d3fd1e87a8a01878->leave($__internal_4dd2a61867d1474f719cbbdaa74c3fde562ea7e68c8fe111d3fd1e87a8a01878_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
