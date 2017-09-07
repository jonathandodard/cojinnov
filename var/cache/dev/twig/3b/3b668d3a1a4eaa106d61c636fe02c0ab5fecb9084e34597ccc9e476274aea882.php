<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_121b6f0b217f5803a2074a5762192ecacd7d0ee3af9a596d0a1a8adbd6df6861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121b6f0b217f5803a2074a5762192ecacd7d0ee3af9a596d0a1a8adbd6df6861->enter($__internal_121b6f0b217f5803a2074a5762192ecacd7d0ee3af9a596d0a1a8adbd6df6861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_606f532e4550537a73e08cfed05eee052a3e2bcbdda8803b09b0649993668e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606f532e4550537a73e08cfed05eee052a3e2bcbdda8803b09b0649993668e44->enter($__internal_606f532e4550537a73e08cfed05eee052a3e2bcbdda8803b09b0649993668e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_121b6f0b217f5803a2074a5762192ecacd7d0ee3af9a596d0a1a8adbd6df6861->leave($__internal_121b6f0b217f5803a2074a5762192ecacd7d0ee3af9a596d0a1a8adbd6df6861_prof);

        
        $__internal_606f532e4550537a73e08cfed05eee052a3e2bcbdda8803b09b0649993668e44->leave($__internal_606f532e4550537a73e08cfed05eee052a3e2bcbdda8803b09b0649993668e44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
