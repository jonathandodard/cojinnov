<?php

/* AppBundle:customer:indexByCustomer.html.twig */
class __TwigTemplate_74ca2c2af9ae5668dd34796e218d4605940e639d702aa67ae20d64d53c6684fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:customer:indexByCustomer.html.twig", 1);
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
        $__internal_07b3606ddf8ae08c96aa3f36e4802da2eb2d7e174555618f2af4b8d2aa04e221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b3606ddf8ae08c96aa3f36e4802da2eb2d7e174555618f2af4b8d2aa04e221->enter($__internal_07b3606ddf8ae08c96aa3f36e4802da2eb2d7e174555618f2af4b8d2aa04e221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:customer:indexByCustomer.html.twig"));

        $__internal_33cddc9ad4f0e8ba0128ffe7d7437cb3dfe55f0dd82032ec0c68769a317549c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cddc9ad4f0e8ba0128ffe7d7437cb3dfe55f0dd82032ec0c68769a317549c5->enter($__internal_33cddc9ad4f0e8ba0128ffe7d7437cb3dfe55f0dd82032ec0c68769a317549c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:customer:indexByCustomer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07b3606ddf8ae08c96aa3f36e4802da2eb2d7e174555618f2af4b8d2aa04e221->leave($__internal_07b3606ddf8ae08c96aa3f36e4802da2eb2d7e174555618f2af4b8d2aa04e221_prof);

        
        $__internal_33cddc9ad4f0e8ba0128ffe7d7437cb3dfe55f0dd82032ec0c68769a317549c5->leave($__internal_33cddc9ad4f0e8ba0128ffe7d7437cb3dfe55f0dd82032ec0c68769a317549c5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b4fde244e2ebaea0ebd58a6c5aa6db084297cca881f09b5dd92d5158529b149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4fde244e2ebaea0ebd58a6c5aa6db084297cca881f09b5dd92d5158529b149->enter($__internal_0b4fde244e2ebaea0ebd58a6c5aa6db084297cca881f09b5dd92d5158529b149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13870d871787dbb000e61d77f9f657f8487e047960359575398b36d6f731623c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13870d871787dbb000e61d77f9f657f8487e047960359575398b36d6f731623c->enter($__internal_13870d871787dbb000e61d77f9f657f8487e047960359575398b36d6f731623c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_index_by_costumer", array("id" => $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()))), "html", null, true);
        echo "\" class=\"breadcrumb\">client : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "name", array()), "html", null, true);
        echo "</a>
            </div>
        </div>
    </nav>
    <div class=\"row z-depth-2 mgr-T-15\">
        <div class=\"col s4 center-align\">
            <img class=\"imgCustomer\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/man.png"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col s8\">
            <div class=\"row show-by-client-row\">
                <div class=\"col s4\">
                    <label>N° Compte Client</label>
                    <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "numberAccount", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col s4\">
                    <label>Intitulé Client</label>
                    <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "entitled", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col s4\">
                    <label>Intitulé Client</label>
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "ranking", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"row show-by-client-row\">
                <div class=\"col s12\">
                    <label>Tarif</label>
                    <p>tarif</p>
                </div>
            </div>
            <div class=\"row show-by-client-row\">
                <div class=\"col s12\">
                    <label>Contact</label>
                    <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "name", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"row show-by-client-row\">
                <div class=\"col s6\">
                    <label>Adresse</label>
                    <p>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "address", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col s6\">
                    <label>Adresse complement</label>
                    <p>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "additionalAddress", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"row show-by-client-row\">
                <div class=\"col s6\">
                    <label>Code Postal</label>
                    <p>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "city", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col s6\">
                    <label>Ville</label>
                    <p>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "zipCode", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"row show-by-client-row\">
                <div class=\"col s6\">
                    <label>Téléphone</label>
                    <p>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "phoneNumber", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col s6\">
                    <label>E-mail</label>
                    <p>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>

        <div class=\"row\">
            <div class=\"row\">
                <div class=\"col s12\">
                    <a class=\"waves-effect waves-light btn-large float-l\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orderCustomer_create", array("id" => $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()))), "html", null, true);
        echo "\"><i class=\"material-icons left\">euro_symbol</i>creation commande</a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"card-panel pad-T-0\">
                    <span class=\"blue-text text-darken-2 f-s-30\"> Commandes</span>
                    <div class=\"row\">
                        <div class=\"col s12\">
                            ";
        // line 87
        if (($context["orders"] ?? $this->getContext($context, "orders"))) {
            // line 88
            echo "                                <div class=\"row\">
                                    <table class=\"responsive-table striped\">
                                        <thead>
                                        <tr>
                                            <th class=\"center\">numéro de commande</th>
                                            <th class=\"center\">date</th>
                                            <th class=\"center\">prix HT</th>
                                            <th class=\"center\">prix TTC</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"co-js-search\">
                                        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? $this->getContext($context, "orders")));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 100
                echo "                                            <tr>
                                                <td class=\"center\"><a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orderCustomer_index_by_orderCustomer", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
                echo "</a></td>
                                                <td class=\"center\">20/05/2017</td>
                                                <td class=\"center\">";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalHT", array()), "html", null, true);
                echo "€</td>
                                                <td class=\"center\">";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "totalTTC", array()), "html", null, true);
                echo "€</td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                                        </tbody>
                                    </table>
                                </div>
                            ";
        } else {
            // line 111
            echo "                                <div class=\"center-align\">
                                    <span class=\"blue-text text-darken-2 f-s-25\">Vous n'avez de commande enregister avec ce client</span>
                                </div>
                            ";
        }
        // line 115
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
";
        
        $__internal_13870d871787dbb000e61d77f9f657f8487e047960359575398b36d6f731623c->leave($__internal_13870d871787dbb000e61d77f9f657f8487e047960359575398b36d6f731623c_prof);

        
        $__internal_0b4fde244e2ebaea0ebd58a6c5aa6db084297cca881f09b5dd92d5158529b149->leave($__internal_0b4fde244e2ebaea0ebd58a6c5aa6db084297cca881f09b5dd92d5158529b149_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:customer:indexByCustomer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 115,  230 => 111,  224 => 107,  215 => 104,  211 => 103,  204 => 101,  201 => 100,  197 => 99,  184 => 88,  182 => 87,  171 => 79,  159 => 70,  152 => 66,  143 => 60,  136 => 56,  127 => 50,  120 => 46,  111 => 40,  96 => 28,  89 => 24,  82 => 20,  73 => 14,  62 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
                <a href=\"{{ path('customer_index_by_costumer', {'id' : customer.id}) }}\" class=\"breadcrumb\">client : {{ customer.name }}</a>
            </div>
        </div>
    </nav>
    <div class=\"row z-depth-2 mgr-T-15\">
        <div class=\"col s4 center-align\">
            <img class=\"imgCustomer\" src=\"{{ asset('img/man.png') }}\">
        </div>
        <div class=\"col s8\">
            <div class=\"row show-by-client-row\">
                <div class=\"col s4\">
                    <label>N° Compte Client</label>
                    <p>{{ customer.numberAccount }}</p>
                </div>
                <div class=\"col s4\">
                    <label>Intitulé Client</label>
                    <p>{{ customer.entitled }}</p>
                </div>
                <div class=\"col s4\">
                    <label>Intitulé Client</label>
                    <p>{{ customer.ranking }}</p>
                </div>
            </div>
            <div class=\"row show-by-client-row\">
                <div class=\"col s12\">
                    <label>Tarif</label>
                    <p>tarif</p>
                </div>
            </div>
            <div class=\"row show-by-client-row\">
                <div class=\"col s12\">
                    <label>Contact</label>
                    <p>{{ customer.name }}</p>
                </div>
            </div>
            <div class=\"row show-by-client-row\">
                <div class=\"col s6\">
                    <label>Adresse</label>
                    <p>{{ customer.address }}</p>
                </div>
                <div class=\"col s6\">
                    <label>Adresse complement</label>
                    <p>{{ customer.additionalAddress }}</p>
                </div>
            </div>
            <div class=\"row show-by-client-row\">
                <div class=\"col s6\">
                    <label>Code Postal</label>
                    <p>{{ customer.city }}</p>
                </div>
                <div class=\"col s6\">
                    <label>Ville</label>
                    <p>{{ customer.zipCode }}</p>
                </div>
            </div>
            <div class=\"row show-by-client-row\">
                <div class=\"col s6\">
                    <label>Téléphone</label>
                    <p>{{ customer.phoneNumber }}</p>
                </div>
                <div class=\"col s6\">
                    <label>E-mail</label>
                    <p>{{ customer.email }}</p>
                </div>
            </div>
        </div>
    </div>

        <div class=\"row\">
            <div class=\"row\">
                <div class=\"col s12\">
                    <a class=\"waves-effect waves-light btn-large float-l\" href=\"{{ path('orderCustomer_create', {'id' : customer.id }) }}\"><i class=\"material-icons left\">euro_symbol</i>creation commande</a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"card-panel pad-T-0\">
                    <span class=\"blue-text text-darken-2 f-s-30\"> Commandes</span>
                    <div class=\"row\">
                        <div class=\"col s12\">
                            {% if orders %}
                                <div class=\"row\">
                                    <table class=\"responsive-table striped\">
                                        <thead>
                                        <tr>
                                            <th class=\"center\">numéro de commande</th>
                                            <th class=\"center\">date</th>
                                            <th class=\"center\">prix HT</th>
                                            <th class=\"center\">prix TTC</th>
                                        </tr>
                                        </thead>
                                        <tbody class=\"co-js-search\">
                                        {% for order in orders %}
                                            <tr>
                                                <td class=\"center\"><a href=\"{{ path('orderCustomer_index_by_orderCustomer', {'id' : order.id }) }}\">{{ order.id }}</a></td>
                                                <td class=\"center\">20/05/2017</td>
                                                <td class=\"center\">{{ order.totalHT }}€</td>
                                                <td class=\"center\">{{ order.totalTTC }}€</td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            {% else %}
                                <div class=\"center-align\">
                                    <span class=\"blue-text text-darken-2 f-s-25\">Vous n'avez de commande enregister avec ce client</span>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "AppBundle:customer:indexByCustomer.html.twig", "/home/jonathan/Documents/Projets/cojinnov/src/AppBundle/Resources/views/customer/indexByCustomer.html.twig");
    }
}
