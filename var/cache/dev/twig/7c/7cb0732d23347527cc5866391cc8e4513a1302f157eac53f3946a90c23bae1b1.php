<?php

/* AppBundle:customer:form.html.twig */
class __TwigTemplate_a2e3192daeab4b98d8a4058dcd3543d721f337a858a1f8232ff3cac5f39253dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:customer:form.html.twig", 1);
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
        $__internal_7630872b4323aa554a20c65a5553dd5ecf0a5fe328edb4dc6241f7a0d76ba29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7630872b4323aa554a20c65a5553dd5ecf0a5fe328edb4dc6241f7a0d76ba29f->enter($__internal_7630872b4323aa554a20c65a5553dd5ecf0a5fe328edb4dc6241f7a0d76ba29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:customer:form.html.twig"));

        $__internal_ade8057e266b022650afaf0f71032ada3b0d2e1075927b5b3744eb7222b15a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade8057e266b022650afaf0f71032ada3b0d2e1075927b5b3744eb7222b15a7d->enter($__internal_ade8057e266b022650afaf0f71032ada3b0d2e1075927b5b3744eb7222b15a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:customer:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7630872b4323aa554a20c65a5553dd5ecf0a5fe328edb4dc6241f7a0d76ba29f->leave($__internal_7630872b4323aa554a20c65a5553dd5ecf0a5fe328edb4dc6241f7a0d76ba29f_prof);

        
        $__internal_ade8057e266b022650afaf0f71032ada3b0d2e1075927b5b3744eb7222b15a7d->leave($__internal_ade8057e266b022650afaf0f71032ada3b0d2e1075927b5b3744eb7222b15a7d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf359c50b983645965e287da8dc48702d8a39f500487f8a24b55a9ac489730f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf359c50b983645965e287da8dc48702d8a39f500487f8a24b55a9ac489730f5->enter($__internal_cf359c50b983645965e287da8dc48702d8a39f500487f8a24b55a9ac489730f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a7f370658c7f4866dafdc8f973ba7d283b50c6055450684bac1e74d0ea60483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7f370658c7f4866dafdc8f973ba7d283b50c6055450684bac1e74d0ea60483->enter($__internal_2a7f370658c7f4866dafdc8f973ba7d283b50c6055450684bac1e74d0ea60483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<nav>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_create");
        echo "\" class=\"breadcrumb\">creation client</a>
        </div>
    </div>
</nav>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"row mgr-T-15 \">
        <div class=\"col s6 center-align form-orderCustomer-img\">
            <img width=\"44%\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/office.png"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col s6 form-orderCustomer-input\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numberAccount", array()), 'row', array("label" => "N° Compte", "attr" => array("style" => "margin-bottom:15px")));
        // line 25
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "entitled", array()), 'row', array("label" => "Intitulé", "attr" => array("style" => "margin-bottom:15px")));
        // line 30
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ranking", array()), 'row', array("label" => "Classement", "attr" => array("style" => "margin-bottom:15px")));
        // line 35
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nameRepresentative", array()), 'row', array("label" => "Nom du représentant", "attr" => array("style" => "margin-bottom:15px")));
        // line 40
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "price", array()), 'row', array("label" => "Catégorie Tarifaire", "attr" => array("style" => "margin-bottom:15px")));
        // line 45
        echo "
        </div>
        <div class=\"col s12\">
            <div class=\"col s6\">
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("label" => "Nom", "attr" => array("style" => "margin-bottom:15px")));
        // line 53
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'row', array("label" => "Adresse", "attr" => array("style" => "margin-bottom:15px")));
        // line 58
        echo "
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'row', array("label" => "Ville", "attr" => array("style" => "margin-bottom:15px")));
        // line 63
        echo "
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "phoneNumber", array()), 'row', array("label" => "Numéro de téléphone", "attr" => array("style" => "margin-bottom:15px")));
        // line 68
        echo "
            </div>
            <div class=\"col s6\">
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("label" => "Email", "attr" => array("style" => "margin-bottom:15px")));
        // line 74
        echo "
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "additionalAddress", array()), 'row', array("label" => "Complement d'adresse", "attr" => array("style" => "margin-bottom:15px")));
        // line 79
        echo "
                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zipCode", array()), 'row', array("label" => "Code postale", "attr" => array("style" => "margin-bottom:15px")));
        // line 84
        echo "
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("style" => "display:none")));
        // line 88
        echo "
                <div class=\"center-align form-save-customer\">
                    <button id=\"appbundle_customer_save\" class=\" col s12 btn waves-effect waves-light\" type=\"submit\" name=\"appbundle_customer[save]\">Submit
                        <i class=\"material-icons right\">send</i>
                    </button>
                </div>
                ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_2a7f370658c7f4866dafdc8f973ba7d283b50c6055450684bac1e74d0ea60483->leave($__internal_2a7f370658c7f4866dafdc8f973ba7d283b50c6055450684bac1e74d0ea60483_prof);

        
        $__internal_cf359c50b983645965e287da8dc48702d8a39f500487f8a24b55a9ac489730f5->leave($__internal_cf359c50b983645965e287da8dc48702d8a39f500487f8a24b55a9ac489730f5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:customer:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 94,  154 => 88,  152 => 85,  149 => 84,  147 => 80,  144 => 79,  142 => 75,  139 => 74,  137 => 71,  132 => 68,  130 => 64,  127 => 63,  125 => 59,  122 => 58,  120 => 54,  117 => 53,  115 => 49,  109 => 45,  107 => 41,  104 => 40,  102 => 36,  99 => 35,  97 => 31,  94 => 30,  92 => 26,  89 => 25,  87 => 21,  81 => 18,  74 => 14,  69 => 12,  62 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
            <a href=\"{{ path('customer_create') }}\" class=\"breadcrumb\">creation client</a>
        </div>
    </div>
</nav>
    {{ form_start(form) }}

    {{ form_errors(form) }}

    <div class=\"row mgr-T-15 \">
        <div class=\"col s6 center-align form-orderCustomer-img\">
            <img width=\"44%\" src=\"{{ asset('img/office.png') }}\">
        </div>
        <div class=\"col s6 form-orderCustomer-input\">
            {{ form_row(form.numberAccount, {
                'label': 'N° Compte',
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.entitled, {
                'label': 'Intitulé',
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.ranking, {
                'label': 'Classement',
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.nameRepresentative, {
                'label': 'Nom du représentant',
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.price, {
                'label': \"Catégorie Tarifaire\",
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
        </div>
        <div class=\"col s12\">
            <div class=\"col s6\">
                {{ form_row(form.name, {
                    'label': 'Nom',
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                {{ form_row(form.address, {
                    'label': 'Adresse',
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                {{ form_row(form.city, {
                    'label': \"Ville\",
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                {{ form_row(form.phoneNumber, {
                    'label': \"Numéro de téléphone\",
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
            </div>
            <div class=\"col s6\">
                {{ form_row(form.email, { 'label': 'Email',
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                {{ form_row(form.additionalAddress, {
                    'label': \"Complement d'adresse\",
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                {{ form_row(form.zipCode , {
                    'label': \"Code postale\",
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                {{ form_row(form.save, {
                    'attr': {'style': 'display:none'}
                })
                }}
                <div class=\"center-align form-save-customer\">
                    <button id=\"appbundle_customer_save\" class=\" col s12 btn waves-effect waves-light\" type=\"submit\" name=\"appbundle_customer[save]\">Submit
                        <i class=\"material-icons right\">send</i>
                    </button>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

{% endblock %}
", "AppBundle:customer:form.html.twig", "/home/jonathan/Documents/Projets/cojinnov/src/AppBundle/Resources/views/customer/form.html.twig");
    }
}
