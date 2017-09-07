<?php

/* AppBundle:page:home.html.twig */
class __TwigTemplate_f40e0dc4bfb80d3d952cdd257e0f38f66caa0d16fdc562140e62fe88b23559c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:page:home.html.twig", 1);
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
        $__internal_b5a4afc3442fdd51002f461ab8cf0a14bf5cdb67bfdd670a7bfc3bbfd07de433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a4afc3442fdd51002f461ab8cf0a14bf5cdb67bfdd670a7bfc3bbfd07de433->enter($__internal_b5a4afc3442fdd51002f461ab8cf0a14bf5cdb67bfdd670a7bfc3bbfd07de433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:home.html.twig"));

        $__internal_20d967df79d669decee8ffbeac29758c14ddf4b5b856e5f3686d8a85b6ec61d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d967df79d669decee8ffbeac29758c14ddf4b5b856e5f3686d8a85b6ec61d1->enter($__internal_20d967df79d669decee8ffbeac29758c14ddf4b5b856e5f3686d8a85b6ec61d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:page:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5a4afc3442fdd51002f461ab8cf0a14bf5cdb67bfdd670a7bfc3bbfd07de433->leave($__internal_b5a4afc3442fdd51002f461ab8cf0a14bf5cdb67bfdd670a7bfc3bbfd07de433_prof);

        
        $__internal_20d967df79d669decee8ffbeac29758c14ddf4b5b856e5f3686d8a85b6ec61d1->leave($__internal_20d967df79d669decee8ffbeac29758c14ddf4b5b856e5f3686d8a85b6ec61d1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f084dffab16a32140851b8a341d0ec0be200f34904ab15cb1fb1d25cd8c57b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f084dffab16a32140851b8a341d0ec0be200f34904ab15cb1fb1d25cd8c57b67->enter($__internal_f084dffab16a32140851b8a341d0ec0be200f34904ab15cb1fb1d25cd8c57b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_815489b311a7e5affdc524dbc3168a9e99a9473ef9a987be6413a8845141f31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815489b311a7e5affdc524dbc3168a9e99a9473ef9a987be6413a8845141f31f->enter($__internal_815489b311a7e5affdc524dbc3168a9e99a9473ef9a987be6413a8845141f31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row mgr-B-15 pad-0\">
        <a class=\"button-home-link z-depth-2\" href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_index");
        echo "\">
            <div class=\"col s4\">
                <div class=\"button-home center-align\">
                    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/customers.png"), "html", null, true);
        echo "\">
                    <p class=\"center-align mgr-B-0\">Clients</p>
                </div>
            </div>
        </a>
        <a class=\"button-home-link z-depth-2\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">
            <div class=\"col s4\">
                <div class=\"button-home center-align\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/products.png"), "html", null, true);
        echo "\">
                    <p class=\"center-align mgr-B-0\">Produits</p>
                </div>
            </div>
        </a>
        <a class=\"button-home-link z-depth-2\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orderCustomer_index");
        echo "\">
            <div class=\"col s4\">
                <div class=\"button-home center-align\">
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/orders.png"), "html", null, true);
        echo "\">
                    <p class=\"center-align mgr-B-0\">Commandes</p>
                </div>
            </div>
        </a>
    </div>
    ";
        // line 30
        echo "    <div class=\"row  mgr-0 pad-0\">
        <div class=\"col s6\">
            <div class=\"card-panel pad-T-0\">
                <span class=\"blue-text text-darken-2 f-s-30\">Objectifs</span>
                <ul>
                    <li>
                        <p>objectif 1</p>
                        <div class=\"progress\" style=\"background-color: #b5ccca;\">
                            <div class=\"determinate\" style=\"width: 10%; background-color: #3a629e;\"></div>
                        </div>
                    </li>
                    <li>
                        <p>objectif 1</p>
                        <div class=\"progress\" style=\"background-color: #b5ccca;\">
                            <div class=\"determinate\" style=\"width: 50%; background-color: #3a629e;\"></div>
                        </div>
                    </li>
                    <li>
                        <p>objectif 1</p>
                        <div class=\"progress\" style=\"background-color: #b5ccca;\">
                            <div class=\"determinate\" style=\"width: 70%; background-color: #3a629e;\"></div>
                        </div>
                    </li>
                    <li>
                        <p>objectif 1</p>
                        <div class=\"progress\" style=\"background-color: #b5ccca;\">
                            <div class=\"determinate\" style=\"width: 90%; background-color: #3a629e;\"></div>
                        </div>
                    </li>
                    <li class=\"goal-ok\">
                        <p>objectif 1</p>
                        <div class=\"progress\" style=\"background-color: #b5ccca;\">
                            <div class=\"determinate\" style=\"width: 100%; background-color: #3a629e;\"></div>
                        </div>
                    </li>
                </ul>
                <a href=\"#\">Voir plus ...</a>
            </div>
        </div>
        <div class=\"col s6\">
            <div class=\"card-panel pad-T-0\">
                <span class=\"blue-text text-darken-2 f-s-30\">Stastiques Commandes</span>
                <div class=\"row\">
                    <a class=\"button-home-statistical-link z-depth-2\" href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_index");
        echo "\">
                        <div class=\"col s12\">
                            <div class=\"button-home-statistical center-align\">
                                <p class=\"center-align\">Moyenne / Jour</p>
                                <div>
                                    155€/jour
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class=\"button-home-statistical-link z-depth-2\" href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">
                        <div class=\"col s12\">
                            <div class=\"button-home-statistical center-align\">
                                <p class=\"center-align\">Moyenne / Mois</p>
                                <div>
                                    155€/jour
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class=\"button-home-statistical-link z-depth-2\" href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orderCustomer_index");
        echo "\">
                        <div class=\"col s12\">
                            <div class=\"button-home-statistical center-align\">
                                <p class=\"center-align\">Moyenne / Année</p>
                                <div>
                                    155€/jour
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_815489b311a7e5affdc524dbc3168a9e99a9473ef9a987be6413a8845141f31f->leave($__internal_815489b311a7e5affdc524dbc3168a9e99a9473ef9a987be6413a8845141f31f_prof);

        
        $__internal_f084dffab16a32140851b8a341d0ec0be200f34904ab15cb1fb1d25cd8c57b67->leave($__internal_f084dffab16a32140851b8a341d0ec0be200f34904ab15cb1fb1d25cd8c57b67_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:page:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 93,  153 => 83,  140 => 73,  95 => 30,  86 => 23,  80 => 20,  72 => 15,  66 => 12,  58 => 7,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"row mgr-B-15 pad-0\">
        <a class=\"button-home-link z-depth-2\" href=\"{{ path('customer_index') }}\">
            <div class=\"col s4\">
                <div class=\"button-home center-align\">
                    <img src=\"{{ asset('img/customers.png') }}\">
                    <p class=\"center-align mgr-B-0\">Clients</p>
                </div>
            </div>
        </a>
        <a class=\"button-home-link z-depth-2\" href=\"{{ path('product_index') }}\">
            <div class=\"col s4\">
                <div class=\"button-home center-align\">
                    <img src=\"{{ asset('img/products.png') }}\">
                    <p class=\"center-align mgr-B-0\">Produits</p>
                </div>
            </div>
        </a>
        <a class=\"button-home-link z-depth-2\" href=\"{{ path('orderCustomer_index') }}\">
            <div class=\"col s4\">
                <div class=\"button-home center-align\">
                    <img src=\"{{ asset('img/orders.png') }}\">
                    <p class=\"center-align mgr-B-0\">Commandes</p>
                </div>
            </div>
        </a>
    </div>
    {# div Objectifs #}
    <div class=\"row  mgr-0 pad-0\">
        <div class=\"col s6\">
            <div class=\"card-panel pad-T-0\">
                <span class=\"blue-text text-darken-2 f-s-30\">Objectifs</span>
                <ul>
                    <li>
                        <p>objectif 1</p>
                        <div class=\"progress\" style=\"background-color: #b5ccca;\">
                            <div class=\"determinate\" style=\"width: 10%; background-color: #3a629e;\"></div>
                        </div>
                    </li>
                    <li>
                        <p>objectif 1</p>
                        <div class=\"progress\" style=\"background-color: #b5ccca;\">
                            <div class=\"determinate\" style=\"width: 50%; background-color: #3a629e;\"></div>
                        </div>
                    </li>
                    <li>
                        <p>objectif 1</p>
                        <div class=\"progress\" style=\"background-color: #b5ccca;\">
                            <div class=\"determinate\" style=\"width: 70%; background-color: #3a629e;\"></div>
                        </div>
                    </li>
                    <li>
                        <p>objectif 1</p>
                        <div class=\"progress\" style=\"background-color: #b5ccca;\">
                            <div class=\"determinate\" style=\"width: 90%; background-color: #3a629e;\"></div>
                        </div>
                    </li>
                    <li class=\"goal-ok\">
                        <p>objectif 1</p>
                        <div class=\"progress\" style=\"background-color: #b5ccca;\">
                            <div class=\"determinate\" style=\"width: 100%; background-color: #3a629e;\"></div>
                        </div>
                    </li>
                </ul>
                <a href=\"#\">Voir plus ...</a>
            </div>
        </div>
        <div class=\"col s6\">
            <div class=\"card-panel pad-T-0\">
                <span class=\"blue-text text-darken-2 f-s-30\">Stastiques Commandes</span>
                <div class=\"row\">
                    <a class=\"button-home-statistical-link z-depth-2\" href=\"{{ path('customer_index') }}\">
                        <div class=\"col s12\">
                            <div class=\"button-home-statistical center-align\">
                                <p class=\"center-align\">Moyenne / Jour</p>
                                <div>
                                    155€/jour
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class=\"button-home-statistical-link z-depth-2\" href=\"{{ path('product_index') }}\">
                        <div class=\"col s12\">
                            <div class=\"button-home-statistical center-align\">
                                <p class=\"center-align\">Moyenne / Mois</p>
                                <div>
                                    155€/jour
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class=\"button-home-statistical-link z-depth-2\" href=\"{{ path('orderCustomer_index') }}\">
                        <div class=\"col s12\">
                            <div class=\"button-home-statistical center-align\">
                                <p class=\"center-align\">Moyenne / Année</p>
                                <div>
                                    155€/jour
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "AppBundle:page:home.html.twig", "/home/jonathan/Documents/Projets/cojinnov/src/AppBundle/Resources/views/page/home.html.twig");
    }
}
