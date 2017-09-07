<?php

/* AppBundle:product:index.html.twig */
class __TwigTemplate_e636587513dc3b48b33cabd9777842ddf4c35e1880290bd22302deee8be7c7fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:product:index.html.twig", 1);
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
        $__internal_f1efeb93fa292c745ed133db5952b5f765d06b73fc0efe4e669e439563c78782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1efeb93fa292c745ed133db5952b5f765d06b73fc0efe4e669e439563c78782->enter($__internal_f1efeb93fa292c745ed133db5952b5f765d06b73fc0efe4e669e439563c78782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:index.html.twig"));

        $__internal_944c6b256cc24310bf2ce33e769b3207c923ad1655750bf6f7494d427a27e550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944c6b256cc24310bf2ce33e769b3207c923ad1655750bf6f7494d427a27e550->enter($__internal_944c6b256cc24310bf2ce33e769b3207c923ad1655750bf6f7494d427a27e550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1efeb93fa292c745ed133db5952b5f765d06b73fc0efe4e669e439563c78782->leave($__internal_f1efeb93fa292c745ed133db5952b5f765d06b73fc0efe4e669e439563c78782_prof);

        
        $__internal_944c6b256cc24310bf2ce33e769b3207c923ad1655750bf6f7494d427a27e550->leave($__internal_944c6b256cc24310bf2ce33e769b3207c923ad1655750bf6f7494d427a27e550_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f921e914e1c9ea858f668503347d3119561573de4fbcea5bc2f099dd3a67278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f921e914e1c9ea858f668503347d3119561573de4fbcea5bc2f099dd3a67278->enter($__internal_5f921e914e1c9ea858f668503347d3119561573de4fbcea5bc2f099dd3a67278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb985fcac9e855cf645381f775717583c5478348a949cbd7e58c386f5c32dc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb985fcac9e855cf645381f775717583c5478348a949cbd7e58c386f5c32dc24->enter($__internal_bb985fcac9e855cf645381f775717583c5478348a949cbd7e58c386f5c32dc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            </div>
        </div>
    </nav>
    <div class=\"center-align search-content\">
        <input placeholder=\"recherche\" class=\"search\" type=\"text\" style=\"width: 50%\" data-url=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_search");
        echo "\" data-type=\"product\"><i class=\"material-icons search-icon\">search</i>
    </div>
    <table class=\"responsive-table striped\">
        <thead>
        <tr>
            <th class=\"center\">type</th>
            <th class=\"center\">reference</th>
            <th class=\"center\">nom commerciale</th>
            <th class=\"center\">categorie</th>
            <th class=\"center\">condition</th>
            <th class=\"center\">durée</th>
            <th class=\"center\">pcb</th>
            <th class=\"center\">prix unité</th>
            <th class=\"center\">tg</th>
            <th class=\"center\">ts</th>
            <th class=\"center\">tb</th>
            <th class=\"center\">taOne</th>
            <th class=\"center\">taTwo</th>
            <th class=\"center\">ppdia</th>
        </tr>
        </thead>
        <tbody class=\"co-js-search\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "            <tr>
                <td class=\"center\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "type", array()), "html", null, true);
            echo "</td>
                <td class=\"center\"><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index_by_product", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", array()), "html", null, true);
            echo "</a></td>
                <td class=\"center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "category", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "conditionProduct", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "duration", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "pcb", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "saleUnit", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "tg", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "ts", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "tb", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "taOne", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "taTwo", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "ppdia", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_update", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">update</a>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_delete", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </tbody>
    </table>
    <ul class=\"pagination center-align\">
        <li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_left</i></a></li>
        <li class=\"active\"><a href=\"#!\">1</a></li>
        <li class=\"waves-effect\"><a href=\"#!\">2</a></li>
        <li class=\"waves-effect\"><a href=\"#!\">3</a></li>
        <li class=\"waves-effect\"><a href=\"#!\">4</a></li>
        <li class=\"waves-effect\"><a href=\"#!\">5</a></li>
        <li class=\"waves-effect\"><a href=\"#!\"><i class=\"material-icons\">chevron_right</i></a></li>
    </ul>
";
        
        $__internal_bb985fcac9e855cf645381f775717583c5478348a949cbd7e58c386f5c32dc24->leave($__internal_bb985fcac9e855cf645381f775717583c5478348a949cbd7e58c386f5c32dc24_prof);

        
        $__internal_5f921e914e1c9ea858f668503347d3119561573de4fbcea5bc2f099dd3a67278->leave($__internal_5f921e914e1c9ea858f668503347d3119561573de4fbcea5bc2f099dd3a67278_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 56,  161 => 52,  157 => 51,  152 => 49,  148 => 48,  144 => 47,  140 => 46,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  102 => 37,  98 => 36,  95 => 35,  91 => 34,  66 => 12,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
            </div>
        </div>
    </nav>
    <div class=\"center-align search-content\">
        <input placeholder=\"recherche\" class=\"search\" type=\"text\" style=\"width: 50%\" data-url=\"{{ path('product_search') }}\" data-type=\"product\"><i class=\"material-icons search-icon\">search</i>
    </div>
    <table class=\"responsive-table striped\">
        <thead>
        <tr>
            <th class=\"center\">type</th>
            <th class=\"center\">reference</th>
            <th class=\"center\">nom commerciale</th>
            <th class=\"center\">categorie</th>
            <th class=\"center\">condition</th>
            <th class=\"center\">durée</th>
            <th class=\"center\">pcb</th>
            <th class=\"center\">prix unité</th>
            <th class=\"center\">tg</th>
            <th class=\"center\">ts</th>
            <th class=\"center\">tb</th>
            <th class=\"center\">taOne</th>
            <th class=\"center\">taTwo</th>
            <th class=\"center\">ppdia</th>
        </tr>
        </thead>
        <tbody class=\"co-js-search\">
        {% for product in products %}
            <tr>
                <td class=\"center\">{{ product.type }}</td>
                <td class=\"center\"><a href=\"{{ path('product_index_by_product', {'id': product.id}) }}\">{{ product.reference }}</a></td>
                <td class=\"center\">{{ product.name }}</td>
                <td class=\"center\">{{ product.category }}</td>
                <td class=\"center\">{{ product.conditionProduct }}</td>
                <td class=\"center\">{{ product.duration }}</td>
                <td class=\"center\">{{ product.pcb }}</td>
                <td class=\"center\">{{ product.saleUnit }}</td>
                <td class=\"center\">{{ product.tg }}</td>
                <td class=\"center\">{{ product.ts }}</td>
                <td class=\"center\">{{ product.tb }}</td>
                <td class=\"center\">{{ product.taOne }}</td>
                <td class=\"center\">{{ product.taTwo }}</td>
                <td class=\"center\">{{ product.ppdia }}</td>
                <td class=\"center\">
                    <a href=\"{{ path('product_update', {'id': product.id })  }}\">update</a>
                    <a href=\"{{ path('product_delete', {'id': product.id })  }}\">delete</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul class=\"pagination center-align\">
        <li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_left</i></a></li>
        <li class=\"active\"><a href=\"#!\">1</a></li>
        <li class=\"waves-effect\"><a href=\"#!\">2</a></li>
        <li class=\"waves-effect\"><a href=\"#!\">3</a></li>
        <li class=\"waves-effect\"><a href=\"#!\">4</a></li>
        <li class=\"waves-effect\"><a href=\"#!\">5</a></li>
        <li class=\"waves-effect\"><a href=\"#!\"><i class=\"material-icons\">chevron_right</i></a></li>
    </ul>
{% endblock %}", "AppBundle:product:index.html.twig", "/home/jonathan/Documents/Projets/cojinnov/src/AppBundle/Resources/views/product/index.html.twig");
    }
}
