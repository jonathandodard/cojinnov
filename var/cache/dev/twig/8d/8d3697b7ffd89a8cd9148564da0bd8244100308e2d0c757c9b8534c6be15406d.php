<?php

/* AppBundle:product:indexByProduct.html.twig */
class __TwigTemplate_df27185d0373a3332fde59904155fe9ab74a0d7f128026ca0e70425b22746d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:product:indexByProduct.html.twig", 1);
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
        $__internal_4d22ce9ac964562e425bba2f5d0f99cc6224fc2f84993d48937570206efe16ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d22ce9ac964562e425bba2f5d0f99cc6224fc2f84993d48937570206efe16ed->enter($__internal_4d22ce9ac964562e425bba2f5d0f99cc6224fc2f84993d48937570206efe16ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:indexByProduct.html.twig"));

        $__internal_5189fb5324d1b522932c8072d9fb6721c9e42e1fd3dcf8105ad66ee770d17a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5189fb5324d1b522932c8072d9fb6721c9e42e1fd3dcf8105ad66ee770d17a7b->enter($__internal_5189fb5324d1b522932c8072d9fb6721c9e42e1fd3dcf8105ad66ee770d17a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:indexByProduct.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d22ce9ac964562e425bba2f5d0f99cc6224fc2f84993d48937570206efe16ed->leave($__internal_4d22ce9ac964562e425bba2f5d0f99cc6224fc2f84993d48937570206efe16ed_prof);

        
        $__internal_5189fb5324d1b522932c8072d9fb6721c9e42e1fd3dcf8105ad66ee770d17a7b->leave($__internal_5189fb5324d1b522932c8072d9fb6721c9e42e1fd3dcf8105ad66ee770d17a7b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f903bc8b38bb2b3c593f50f26ff415a0c5cf173ed475cea0b7ceb5331587fa43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f903bc8b38bb2b3c593f50f26ff415a0c5cf173ed475cea0b7ceb5331587fa43->enter($__internal_f903bc8b38bb2b3c593f50f26ff415a0c5cf173ed475cea0b7ceb5331587fa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9afd4ba264b158735d05e057af8c928367311423a69b89e4969af20fb128a98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afd4ba264b158735d05e057af8c928367311423a69b89e4969af20fb128a98e->enter($__internal_9afd4ba264b158735d05e057af8c928367311423a69b89e4969af20fb128a98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\" class=\"breadcrumb\">Liste produits</a>
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index_by_product", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\" class=\"breadcrumb\">produit : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "reference", array()), "html", null, true);
        echo "</a>
            </div>
        </div>
    </nav>
    <div class=\"row mgr-T-15 \">
        <div class=\"col s6 center-align form-orderCustomer-img\">
            <img width=\"44%\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/office.png"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col s6\">
            <div class=\"col s6\">
                <label>type</label>
                <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "type", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col s6\">
                <label>reference</label>
                <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "reference", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col s6\">
                <label>nom</label>
                <p>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col s6\">
                <label>catégorie</label>
                <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "category", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col s6\">
                <label>condition produit</label>
                <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "conditionProduct", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col s6\">
                <label>durée</label>
                <p>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "duration", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col s6\">
                <label>pcb</label>
                <p>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "pcb", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col s6\">
                <label>prix unitaire</label>
                <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "saleUnit", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"col s12\">
            <label>prix par classe</label>
            <table class=\"responsive-table striped\">
                <thead>
                <tr>
                    <th class=\"center\">tg</th>
                    <th class=\"center\">ts</th>
                    <th class=\"center\">tb</th>
                    <th class=\"center\">taOne</th>
                    <th class=\"center\">taTwo</th>
                    <th class=\"center\">ppdia</th>
                </tr>
                </thead>
                <tbody class=\"co-js-search\">
                    <tr>
                        <td class=\"center\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "tg", array()), "html", null, true);
        echo "</td>
                        <td class=\"center\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "ts", array()), "html", null, true);
        echo "</td>
                        <td class=\"center\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "tb", array()), "html", null, true);
        echo "</td>
                        <td class=\"center\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "taOne", array()), "html", null, true);
        echo "</td>
                        <td class=\"center\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "taTwo", array()), "html", null, true);
        echo "</td>
                        <td class=\"center\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "ppdia", array()), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_9afd4ba264b158735d05e057af8c928367311423a69b89e4969af20fb128a98e->leave($__internal_9afd4ba264b158735d05e057af8c928367311423a69b89e4969af20fb128a98e_prof);

        
        $__internal_f903bc8b38bb2b3c593f50f26ff415a0c5cf173ed475cea0b7ceb5331587fa43->leave($__internal_f903bc8b38bb2b3c593f50f26ff415a0c5cf173ed475cea0b7ceb5331587fa43_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:product:indexByProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 70,  167 => 69,  163 => 68,  159 => 67,  155 => 66,  151 => 65,  130 => 47,  123 => 43,  116 => 39,  109 => 35,  102 => 31,  95 => 27,  88 => 23,  81 => 19,  73 => 14,  62 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
                <a href=\"{{ path('product_index') }}\" class=\"breadcrumb\">Liste produits</a>
                <a href=\"{{ path('product_index_by_product', {'id': product.id}) }}\" class=\"breadcrumb\">produit : {{ product.reference }}</a>
            </div>
        </div>
    </nav>
    <div class=\"row mgr-T-15 \">
        <div class=\"col s6 center-align form-orderCustomer-img\">
            <img width=\"44%\" src=\"{{ asset('img/office.png') }}\">
        </div>
        <div class=\"col s6\">
            <div class=\"col s6\">
                <label>type</label>
                <p>{{ product.type }}</p>
            </div>
            <div class=\"col s6\">
                <label>reference</label>
                <p>{{ product.reference }}</p>
            </div>
            <div class=\"col s6\">
                <label>nom</label>
                <p>{{ product.name }}</p>
            </div>
            <div class=\"col s6\">
                <label>catégorie</label>
                <p>{{ product.category }}</p>
            </div>
            <div class=\"col s6\">
                <label>condition produit</label>
                <p>{{ product.conditionProduct }}</p>
            </div>
            <div class=\"col s6\">
                <label>durée</label>
                <p>{{ product.duration }}</p>
            </div>
            <div class=\"col s6\">
                <label>pcb</label>
                <p>{{ product.pcb }}</p>
            </div>
            <div class=\"col s6\">
                <label>prix unitaire</label>
                <p>{{ product.saleUnit }}</p>
            </div>
        </div>
        <div class=\"col s12\">
            <label>prix par classe</label>
            <table class=\"responsive-table striped\">
                <thead>
                <tr>
                    <th class=\"center\">tg</th>
                    <th class=\"center\">ts</th>
                    <th class=\"center\">tb</th>
                    <th class=\"center\">taOne</th>
                    <th class=\"center\">taTwo</th>
                    <th class=\"center\">ppdia</th>
                </tr>
                </thead>
                <tbody class=\"co-js-search\">
                    <tr>
                        <td class=\"center\">{{ product.tg }}</td>
                        <td class=\"center\">{{ product.ts }}</td>
                        <td class=\"center\">{{ product.tb }}</td>
                        <td class=\"center\">{{ product.taOne }}</td>
                        <td class=\"center\">{{ product.taTwo }}</td>
                        <td class=\"center\">{{ product.ppdia }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "AppBundle:product:indexByProduct.html.twig", "/home/jonathan/Documents/Projets/cojinnov/src/AppBundle/Resources/views/product/indexByProduct.html.twig");
    }
}
