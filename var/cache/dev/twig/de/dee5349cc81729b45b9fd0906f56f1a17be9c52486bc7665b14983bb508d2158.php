<?php

/* AppBundle:orderCustomer:indexByOrderCustomer.html.twig */
class __TwigTemplate_0d6d9c8655a5854e7ae484f154944830b95b914b8c5109c310251c9b8659fdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:orderCustomer:indexByOrderCustomer.html.twig", 1);
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
        $__internal_6c315a7ce659f37f088ada976c434359f1461762572b80d646b76c8c847de75f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c315a7ce659f37f088ada976c434359f1461762572b80d646b76c8c847de75f->enter($__internal_6c315a7ce659f37f088ada976c434359f1461762572b80d646b76c8c847de75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:orderCustomer:indexByOrderCustomer.html.twig"));

        $__internal_3c08c691b43d4636d1d87266ac53b63737a9e87d81e4a1b1d8fe863fdbd8d669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c08c691b43d4636d1d87266ac53b63737a9e87d81e4a1b1d8fe863fdbd8d669->enter($__internal_3c08c691b43d4636d1d87266ac53b63737a9e87d81e4a1b1d8fe863fdbd8d669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:orderCustomer:indexByOrderCustomer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c315a7ce659f37f088ada976c434359f1461762572b80d646b76c8c847de75f->leave($__internal_6c315a7ce659f37f088ada976c434359f1461762572b80d646b76c8c847de75f_prof);

        
        $__internal_3c08c691b43d4636d1d87266ac53b63737a9e87d81e4a1b1d8fe863fdbd8d669->leave($__internal_3c08c691b43d4636d1d87266ac53b63737a9e87d81e4a1b1d8fe863fdbd8d669_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_308da78084663ef928ce1da7673a3a4f83e58cfb71fefc3863eaafaa020e77f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308da78084663ef928ce1da7673a3a4f83e58cfb71fefc3863eaafaa020e77f6->enter($__internal_308da78084663ef928ce1da7673a3a4f83e58cfb71fefc3863eaafaa020e77f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1365d88a0ca38e40c74419a4c65859de486586213d216aca4eb0c47de349ce10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1365d88a0ca38e40c74419a4c65859de486586213d216aca4eb0c47de349ce10->enter($__internal_1365d88a0ca38e40c74419a4c65859de486586213d216aca4eb0c47de349ce10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\" class=\"breadcrumb\">Liste commandes</a>
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orderCustomer_index_by_orderCustomer", array("id" => $this->getAttribute(($context["orderCustomer"] ?? $this->getContext($context, "orderCustomer")), "id", array()))), "html", null, true);
        echo "\" class=\"breadcrumb\">Commande : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCustomer"] ?? $this->getContext($context, "orderCustomer")), "id", array()), "html", null, true);
        echo "</a>
                <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_index_by_costumer", array("id" => $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()))), "html", null, true);
        echo "\" class=\"mgr-L-10\">(client: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "name", array()), "html", null, true);
        echo ")</a>
            </div>
        </div>
    </nav>
    <div class=\"row form-orderCustomer-row\">
        <div class=\"col s6\">
            <img src=\"\">
        </div>
        <div class=\"col s6 form-orderCustomer-col\">
            <div><p>Bon de commande N°</p><p>2017</p></div>
            <label>Société :</label>
                <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "ranking", array()), "html", null, true);
        echo "</p>
            <label>Facturation :</label>
                <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "</p>
            <label>livraison :</label>
                <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "</p>
            <label>Tél :</label>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "phoneNumber", array()), "html", null, true);
        echo "</p>
            <label>Fax :</label>
                <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"row form-orderCustomer-row\">
        <div class=\"col s6 form-orderCustomer-col\">
            <label>Représentant :</label>
                <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "</p>
            <label>Mode de Règlement :</label>
                <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "</p>
            <label>date livraison :</label>
                <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "</p>
            <label>Commentaire :</label>
                <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col s6 form-orderCustomer-col\">
            <label>Siret :</label>
                <p>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "</p>
            <label>N° Intracom :</label>
                <p>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <table class=\"responsive-table striped mgr-B-100\">
        <thead>
            <tr>
                <th class=\"center\">Reference</th>
                <th class=\"center\">Nom commercial</th>
                <th class=\"center\">Prix unitaire</th>
                <th class=\"center\">Quantité</th>
                <th class=\"center\">Prix totale HT</th>
                <th class=\"center\">Prix totale TCC</th>
            </tr>
        </thead>
        <tbody class=\"co-js-search\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ProductsOrder"] ?? $this->getContext($context, "ProductsOrder")));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductOrder"]) {
            // line 62
            echo "                <tr class=\"co-js-search-result\">
                    <td class=\"center co-js-ref\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductOrder"], "Product", array()), "reference", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ProductOrder"], "Product", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductOrder"], "price", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductOrder"], "quantity", array()), "html", null, true);
            echo "</td>
                    <td class=\"center price-product-ht\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductOrder"], "priceHT", array()), "html", null, true);
            echo "</td>
                    <td class=\"center price-product-ttc\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["ProductOrder"], "priceTTC", array()), "html", null, true);
            echo "</td>
                    <td class=\"center\">
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductOrder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>
    <div class=\"row index-orderCustomer-footer\">
        <div class=\"col s4\">
            <label>Tva</label>
            <p>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCustomer"] ?? $this->getContext($context, "orderCustomer")), "tva", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col s4\">
            <label>Prix Hors Taxe</label>
            <p>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCustomer"] ?? $this->getContext($context, "orderCustomer")), "totalHT", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col s4\">
            <label>Prix Tout Taxe Compris</label>
            <p>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCustomer"] ?? $this->getContext($context, "orderCustomer")), "totalTTC", array()), "html", null, true);
        echo "</p>
        </div>
    </div>

";
        
        $__internal_1365d88a0ca38e40c74419a4c65859de486586213d216aca4eb0c47de349ce10->leave($__internal_1365d88a0ca38e40c74419a4c65859de486586213d216aca4eb0c47de349ce10_prof);

        
        $__internal_308da78084663ef928ce1da7673a3a4f83e58cfb71fefc3863eaafaa020e77f6->leave($__internal_308da78084663ef928ce1da7673a3a4f83e58cfb71fefc3863eaafaa020e77f6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:orderCustomer:indexByOrderCustomer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 85,  209 => 81,  202 => 77,  195 => 72,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 63,  162 => 62,  158 => 61,  140 => 46,  135 => 44,  128 => 40,  123 => 38,  118 => 36,  113 => 34,  104 => 28,  99 => 26,  94 => 24,  89 => 22,  84 => 20,  68 => 9,  62 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
                <a href=\"{{ path('orderCustomer_index') }}\" class=\"breadcrumb\">Liste commandes</a>
                <a href=\"{{ path('orderCustomer_index_by_orderCustomer', {'id': orderCustomer.id }) }}\" class=\"breadcrumb\">Commande : {{ orderCustomer.id }}</a>
                <a href=\"{{ path('customer_index_by_costumer', {'id': customer.id }) }}\" class=\"mgr-L-10\">(client: {{ customer.name }})</a>
            </div>
        </div>
    </nav>
    <div class=\"row form-orderCustomer-row\">
        <div class=\"col s6\">
            <img src=\"\">
        </div>
        <div class=\"col s6 form-orderCustomer-col\">
            <div><p>Bon de commande N°</p><p>2017</p></div>
            <label>Société :</label>
                <p>{{ customer.ranking }}</p>
            <label>Facturation :</label>
                <p>{{ customer.id }}</p>
            <label>livraison :</label>
                <p>{{ customer.id }}</p>
            <label>Tél :</label>
                <p>{{ customer.phoneNumber }}</p>
            <label>Fax :</label>
                <p>{{ customer.id }}</p>
        </div>
    </div>
    <div class=\"row form-orderCustomer-row\">
        <div class=\"col s6 form-orderCustomer-col\">
            <label>Représentant :</label>
                <p>{{ customer.id }}</p>
            <label>Mode de Règlement :</label>
                <p>{{ customer.id }}</p>
            <label>date livraison :</label>
                <p>{{ customer.id }}</p>
            <label>Commentaire :</label>
                <p>{{ customer.id }}</p>
        </div>
        <div class=\"col s6 form-orderCustomer-col\">
            <label>Siret :</label>
                <p>{{ customer.id }}</p>
            <label>N° Intracom :</label>
                <p>{{ customer.id }}</p>
        </div>
    </div>
    <table class=\"responsive-table striped mgr-B-100\">
        <thead>
            <tr>
                <th class=\"center\">Reference</th>
                <th class=\"center\">Nom commercial</th>
                <th class=\"center\">Prix unitaire</th>
                <th class=\"center\">Quantité</th>
                <th class=\"center\">Prix totale HT</th>
                <th class=\"center\">Prix totale TCC</th>
            </tr>
        </thead>
        <tbody class=\"co-js-search\">
            {% for ProductOrder in ProductsOrder %}
                <tr class=\"co-js-search-result\">
                    <td class=\"center co-js-ref\">{{ ProductOrder.Product.reference }}</td>
                    <td class=\"center\">{{ ProductOrder.Product.name }}</td>
                    <td class=\"center\">{{ ProductOrder.price }}</td>
                    <td class=\"center\">{{ ProductOrder.quantity }}</td>
                    <td class=\"center price-product-ht\">{{ ProductOrder.priceHT }}</td>
                    <td class=\"center price-product-ttc\">{{ ProductOrder.priceTTC }}</td>
                    <td class=\"center\">
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div class=\"row index-orderCustomer-footer\">
        <div class=\"col s4\">
            <label>Tva</label>
            <p>{{ orderCustomer.tva }}</p>
        </div>
        <div class=\"col s4\">
            <label>Prix Hors Taxe</label>
            <p>{{ orderCustomer.totalHT }}</p>
        </div>
        <div class=\"col s4\">
            <label>Prix Tout Taxe Compris</label>
            <p>{{ orderCustomer.totalTTC }}</p>
        </div>
    </div>

{% endblock %}
", "AppBundle:orderCustomer:indexByOrderCustomer.html.twig", "/home/jonathan/Documents/Projets/cojinnov/src/AppBundle/Resources/views/orderCustomer/indexByOrderCustomer.html.twig");
    }
}
