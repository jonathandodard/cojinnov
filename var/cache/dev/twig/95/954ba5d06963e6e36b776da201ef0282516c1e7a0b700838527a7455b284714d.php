<?php

/* AppBundle:orderCustomer:index.html.twig */
class __TwigTemplate_a449ffb322ee310846f03817b98d07788b48ef843ae8a5e16ad9cd160b1ba18b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:orderCustomer:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e26689112ffa3fce628c115a40637c2bd16fdab14122a22d0220e692a0837354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e26689112ffa3fce628c115a40637c2bd16fdab14122a22d0220e692a0837354->enter($__internal_e26689112ffa3fce628c115a40637c2bd16fdab14122a22d0220e692a0837354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:orderCustomer:index.html.twig"));

        $__internal_ab7c693cd039e45da32c1aa775b8e742e46ec458922435c365f1b7c0d494216b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7c693cd039e45da32c1aa775b8e742e46ec458922435c365f1b7c0d494216b->enter($__internal_ab7c693cd039e45da32c1aa775b8e742e46ec458922435c365f1b7c0d494216b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:orderCustomer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e26689112ffa3fce628c115a40637c2bd16fdab14122a22d0220e692a0837354->leave($__internal_e26689112ffa3fce628c115a40637c2bd16fdab14122a22d0220e692a0837354_prof);

        
        $__internal_ab7c693cd039e45da32c1aa775b8e742e46ec458922435c365f1b7c0d494216b->leave($__internal_ab7c693cd039e45da32c1aa775b8e742e46ec458922435c365f1b7c0d494216b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_af1563da29859b4816e84325271ebe27a6389b62f85e4f32a43d4506e579b76a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1563da29859b4816e84325271ebe27a6389b62f85e4f32a43d4506e579b76a->enter($__internal_af1563da29859b4816e84325271ebe27a6389b62f85e4f32a43d4506e579b76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a965e0fbb5bc67f63a3f164ca1c27bd5bd6f172897b3f3290855b79dea53302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a965e0fbb5bc67f63a3f164ca1c27bd5bd6f172897b3f3290855b79dea53302->enter($__internal_8a965e0fbb5bc67f63a3f164ca1c27bd5bd6f172897b3f3290855b79dea53302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <nav>
        <div class=\"nav-wrapper\">
            <div class=\"col s12\">
                <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"breadcrumb\">Home</a>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orderCustomer_index");
        echo "\" class=\"breadcrumb\">Liste Commande</a>
            </div>
        </div>
    </nav>
    <table class=\"responsive-table striped\">
        <thead>
        <tr>
            <th class=\"center\">numéro de commande</th>
            <th class=\"center\">client</th>
            <th class=\"center\">date</th>
            <th class=\"center\">prix HT</th>
            <th class=\"center\">prix TTC</th>
        </tr>
        </thead>
        <tbody class=\"co-js-search\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orderCustomers"] ?? $this->getContext($context, "orderCustomers")));
        foreach ($context['_seq'] as $context["_key"] => $context["orderCustomer"]) {
            // line 23
            echo "            <tr>
                <td class=\"center\"><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orderCustomer_index_by_orderCustomer", array("id" => $this->getAttribute($context["orderCustomer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderCustomer"], "id", array()), "html", null, true);
            echo "</a></td>
                <td class=\"center\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["orderCustomer"], "customer", array()), "numberAccount", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["orderCustomer"], "createdAt", array()), "d/m/Y", "Europe/Paris"), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderCustomer"], "totalHT", array()), "html", null, true);
            echo "€</td>
                <td class=\"center\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["orderCustomer"], "totalTTC", array()), "html", null, true);
            echo "€</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderCustomer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
";
        
        $__internal_8a965e0fbb5bc67f63a3f164ca1c27bd5bd6f172897b3f3290855b79dea53302->leave($__internal_8a965e0fbb5bc67f63a3f164ca1c27bd5bd6f172897b3f3290855b79dea53302_prof);

        
        $__internal_af1563da29859b4816e84325271ebe27a6389b62f85e4f32a43d4506e579b76a->leave($__internal_af1563da29859b4816e84325271ebe27a6389b62f85e4f32a43d4506e579b76a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:orderCustomer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  83 => 24,  80 => 23,  76 => 22,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
    <nav>
        <div class=\"nav-wrapper\">
            <div class=\"col s12\">
                <a href=\"{{ path('home') }}\" class=\"breadcrumb\">Home</a>
                <a href=\"{{ path('orderCustomer_index') }}\" class=\"breadcrumb\">Liste Commande</a>
            </div>
        </div>
    </nav>
    <table class=\"responsive-table striped\">
        <thead>
        <tr>
            <th class=\"center\">numéro de commande</th>
            <th class=\"center\">client</th>
            <th class=\"center\">date</th>
            <th class=\"center\">prix HT</th>
            <th class=\"center\">prix TTC</th>
        </tr>
        </thead>
        <tbody class=\"co-js-search\">
        {% for orderCustomer in orderCustomers %}
            <tr>
                <td class=\"center\"><a href=\"{{ path('orderCustomer_index_by_orderCustomer', {'id' : orderCustomer.id}) }}\">{{ orderCustomer.id }}</a></td>
                <td class=\"center\">{{ orderCustomer.customer.numberAccount }}</td>
                <td class=\"center\">{{ orderCustomer.createdAt|date(\"d/m/Y\", \"Europe/Paris\") }}</td>
                <td class=\"center\">{{ orderCustomer.totalHT }}€</td>
                <td class=\"center\">{{ orderCustomer.totalTTC }}€</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "AppBundle:orderCustomer:index.html.twig", "/home/jonathan/Documents/Projets/cojinnov/src/AppBundle/Resources/views/orderCustomer/index.html.twig");
    }
}
