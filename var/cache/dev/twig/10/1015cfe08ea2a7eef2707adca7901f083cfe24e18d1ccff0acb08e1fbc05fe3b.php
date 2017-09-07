<?php

/* AppBundle:customer:index.html.twig */
class __TwigTemplate_6247288611497b7fd4e345e05c8acbe0b9c6f91b1850e6df4eba5d5b035ba456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:customer:index.html.twig", 1);
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
        $__internal_d88c50152dac37bc2f779b15546ed223f75f46d3bc48d36fd6b54c21c8b17dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88c50152dac37bc2f779b15546ed223f75f46d3bc48d36fd6b54c21c8b17dc4->enter($__internal_d88c50152dac37bc2f779b15546ed223f75f46d3bc48d36fd6b54c21c8b17dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:customer:index.html.twig"));

        $__internal_3527c03b4c6dc2129860cb8b8df087a6f2320e7ae74323333bd9fdaf4c8ed788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3527c03b4c6dc2129860cb8b8df087a6f2320e7ae74323333bd9fdaf4c8ed788->enter($__internal_3527c03b4c6dc2129860cb8b8df087a6f2320e7ae74323333bd9fdaf4c8ed788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:customer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d88c50152dac37bc2f779b15546ed223f75f46d3bc48d36fd6b54c21c8b17dc4->leave($__internal_d88c50152dac37bc2f779b15546ed223f75f46d3bc48d36fd6b54c21c8b17dc4_prof);

        
        $__internal_3527c03b4c6dc2129860cb8b8df087a6f2320e7ae74323333bd9fdaf4c8ed788->leave($__internal_3527c03b4c6dc2129860cb8b8df087a6f2320e7ae74323333bd9fdaf4c8ed788_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a11875699051d361f4fa7226b28cc458b745ff2b6efff0d35cae3d4339ce12a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11875699051d361f4fa7226b28cc458b745ff2b6efff0d35cae3d4339ce12a8->enter($__internal_a11875699051d361f4fa7226b28cc458b745ff2b6efff0d35cae3d4339ce12a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_46ac25f62b58be7c3354e6e0115ba528c1a53e2de0be46e20eae16b34e6d504a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ac25f62b58be7c3354e6e0115ba528c1a53e2de0be46e20eae16b34e6d504a->enter($__internal_46ac25f62b58be7c3354e6e0115ba528c1a53e2de0be46e20eae16b34e6d504a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_index");
        echo "\" class=\"breadcrumb\">Liste clients</a>
            </div>
        </div>
    </nav>
    <div class=\"center-align search-content\">
        <input placeholder=\"recherche\" class=\"search\" type=\"text\" style=\"width: 50%\" data-url=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_search");
        echo "\" data-type=\"customer\"><i class=\"material-icons search-icon\">search</i>
    </div>
    <a class=\"waves-effect waves-light btn-large float-l\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_create");
        echo "\"><i class=\"material-icons left\">person_add</i>creation client</a>
    ";
        // line 16
        echo "    <table class=\"responsive-table striped\">
        <thead>
        <tr>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='numberAccount' >N° Compte</th>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='entitled' >Intitulé</th>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='ranking' >Classement</th>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='nameRepresentative' >Nom Représentant</th>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='name' >Contact</th>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='email' >E-mail</th>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='address' >Adresse</th>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='additionalAddress' >Complément Adresse</th>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='zipCode' >Code Postal</th>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='city' >Ville</th>
            <th class=\"center co-js-sort\" data-url=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_sort");
        echo "\" data-sort='phoneNumber' >Téléphone</th>
            <th class=\"center\"></th>
        </tr>
        </thead>
        <tbody class=\"co-js-search\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? $this->getContext($context, "customers")));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 35
            echo "            <tr class=\"co-js-remove-sort\">
                <td class=\"center\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_index_by_costumer", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "numberAccount", array()), "html", null, true);
            echo "</a></td>
                <td class=\"center\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "entitled", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "ranking", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "nameRepresentative", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "name", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "email", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "address", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "additionalAddress", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "zipCode", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "city", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer"], "phoneNumber", array()), "html", null, true);
            echo "</td>
                <td class=\"center\">
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_update", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">edit</i></a>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_delete", array("id" => $this->getAttribute($context["customer"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons left\">delete</i></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        
        $__internal_46ac25f62b58be7c3354e6e0115ba528c1a53e2de0be46e20eae16b34e6d504a->leave($__internal_46ac25f62b58be7c3354e6e0115ba528c1a53e2de0be46e20eae16b34e6d504a_prof);

        
        $__internal_a11875699051d361f4fa7226b28cc458b745ff2b6efff0d35cae3d4339ce12a8->leave($__internal_a11875699051d361f4fa7226b28cc458b745ff2b6efff0d35cae3d4339ce12a8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:customer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 53,  186 => 49,  182 => 48,  177 => 46,  173 => 45,  169 => 44,  165 => 43,  161 => 42,  157 => 41,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  135 => 36,  132 => 35,  128 => 34,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  75 => 16,  71 => 14,  66 => 12,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
                <a href=\"{{ path('customer_index') }}\" class=\"breadcrumb\">Liste clients</a>
            </div>
        </div>
    </nav>
    <div class=\"center-align search-content\">
        <input placeholder=\"recherche\" class=\"search\" type=\"text\" style=\"width: 50%\" data-url=\"{{ path('customer_search') }}\" data-type=\"customer\"><i class=\"material-icons search-icon\">search</i>
    </div>
    <a class=\"waves-effect waves-light btn-large float-l\" href=\"{{ path('customer_create') }}\"><i class=\"material-icons left\">person_add</i>creation client</a>
    {#<a class=\"waves-effect waves-light btn-large float-r\" href=\"{{ path('customer_index') }}\"><i class=\"material-icons left\">cloud</i>supprimer selection</a>#}
    <table class=\"responsive-table striped\">
        <thead>
        <tr>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='numberAccount' >N° Compte</th>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='entitled' >Intitulé</th>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='ranking' >Classement</th>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='nameRepresentative' >Nom Représentant</th>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='name' >Contact</th>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='email' >E-mail</th>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='address' >Adresse</th>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='additionalAddress' >Complément Adresse</th>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='zipCode' >Code Postal</th>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='city' >Ville</th>
            <th class=\"center co-js-sort\" data-url=\"{{ path(\"customer_sort\") }}\" data-sort='phoneNumber' >Téléphone</th>
            <th class=\"center\"></th>
        </tr>
        </thead>
        <tbody class=\"co-js-search\">
        {% for customer in customers %}
            <tr class=\"co-js-remove-sort\">
                <td class=\"center\"><a href=\"{{ path('customer_index_by_costumer', {'id': customer.id}) }}\">{{ customer.numberAccount }}</a></td>
                <td class=\"center\">{{ customer.entitled }}</td>
                <td class=\"center\">{{ customer.ranking }}</td>
                <td class=\"center\">{{ customer.nameRepresentative }}</td>
                <td class=\"center\">{{ customer.name }}</td>
                <td class=\"center\">{{ customer.email }}</td>
                <td class=\"center\">{{ customer.address }}</td>
                <td class=\"center\">{{ customer.additionalAddress }}</td>
                <td class=\"center\">{{ customer.zipCode }}</td>
                <td class=\"center\">{{ customer.city }}</td>
                <td class=\"center\">{{ customer.phoneNumber }}</td>
                <td class=\"center\">
                    <a href=\"{{ path('customer_update', {'id': customer.id })  }}\"><i class=\"material-icons left\">edit</i></a>
                    <a href=\"{{ path('customer_delete', {'id': customer.id })  }}\"><i class=\"material-icons left\">delete</i></a>
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
{% endblock %}", "AppBundle:customer:index.html.twig", "/home/jonathan/Documents/Projets/cojinnov/src/AppBundle/Resources/views/customer/index.html.twig");
    }
}
