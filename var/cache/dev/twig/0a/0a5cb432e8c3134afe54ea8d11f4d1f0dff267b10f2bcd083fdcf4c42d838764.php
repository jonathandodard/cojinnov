<?php

/* AppBundle:product:form.html.twig */
class __TwigTemplate_7a5735acd4f3aff1bbabd721b25edb658e190943665262f70cf2e7c1b1dcef7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:product:form.html.twig", 1);
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
        $__internal_a5da1a4baf71d8fcd9d21d0ba2a8584768a99146a7ebbbbbe95b3884a5b2d5cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5da1a4baf71d8fcd9d21d0ba2a8584768a99146a7ebbbbbe95b3884a5b2d5cf->enter($__internal_a5da1a4baf71d8fcd9d21d0ba2a8584768a99146a7ebbbbbe95b3884a5b2d5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:form.html.twig"));

        $__internal_acb8002d40ddf269c0d47bfa42931a0af5e89806020f27aa85c64da845d5cdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb8002d40ddf269c0d47bfa42931a0af5e89806020f27aa85c64da845d5cdcb->enter($__internal_acb8002d40ddf269c0d47bfa42931a0af5e89806020f27aa85c64da845d5cdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5da1a4baf71d8fcd9d21d0ba2a8584768a99146a7ebbbbbe95b3884a5b2d5cf->leave($__internal_a5da1a4baf71d8fcd9d21d0ba2a8584768a99146a7ebbbbbe95b3884a5b2d5cf_prof);

        
        $__internal_acb8002d40ddf269c0d47bfa42931a0af5e89806020f27aa85c64da845d5cdcb->leave($__internal_acb8002d40ddf269c0d47bfa42931a0af5e89806020f27aa85c64da845d5cdcb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_537425075d9d26d7b937119dac1e49bd9114e3c5b025615826d4577f119570cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537425075d9d26d7b937119dac1e49bd9114e3c5b025615826d4577f119570cf->enter($__internal_537425075d9d26d7b937119dac1e49bd9114e3c5b025615826d4577f119570cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1a585daa93f004ad324ce42d9eb935e15152e7713ed03cc72e542788f106c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a585daa93f004ad324ce42d9eb935e15152e7713ed03cc72e542788f106c42->enter($__internal_c1a585daa93f004ad324ce42d9eb935e15152e7713ed03cc72e542788f106c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\" class=\"breadcrumb\">Liste produits</a>
            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_create");
        echo "\" class=\"breadcrumb\">creation produit</a>
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row', array("label" => "Type", "attr" => array("style" => "margin-bottom:15px")));
        // line 25
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reference", array()), 'row', array("label" => "Reference", "attr" => array("style" => "margin-bottom:15px")));
        // line 30
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row', array("label" => "Nom", "attr" => array("style" => "margin-bottom:15px")));
        // line 35
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "category", array()), 'row', array("label" => "Categorie", "attr" => array("style" => "margin-bottom:15px")));
        // line 40
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "conditionProduct", array()), 'row', array("label" => "condition produit", "attr" => array("style" => "margin-bottom:15px")));
        // line 45
        echo "
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duration", array()), 'row', array("label" => "Durée", "attr" => array("style" => "margin-bottom:15px")));
        // line 50
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pcb", array()), 'row', array("label" => "PCB", "attr" => array("style" => "margin-bottom:15px")));
        // line 55
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "saleUnit", array()), 'row', array("label" => "Prix unitaire", "attr" => array("style" => "margin-bottom:15px")));
        // line 60
        echo "
        </div>
        <div class=\"col s12\">
            <div class=\"col s6\">
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tg", array()), 'row', array("label" => "TG", "attr" => array("style" => "margin-bottom:15px")));
        // line 68
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ts", array()), 'row', array("label" => "TS", "attr" => array("style" => "margin-bottom:15px")));
        // line 73
        echo "
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tb", array()), 'row', array("label" => "TB", "attr" => array("style" => "margin-bottom:15px")));
        // line 78
        echo "
            </div>
            <div class=\"col s6\">
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taTwo", array()), 'row', array("label" => "TA TWO", "attr" => array("style" => "margin-bottom:15px")));
        // line 86
        echo "
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "taOne", array()), 'row', array("label" => "TA ONE", "attr" => array("style" => "margin-bottom:15px")));
        // line 91
        echo "
                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ppdia", array()), 'row', array("label" => "PPDIA", "attr" => array("style" => "margin-bottom:15px")));
        // line 96
        echo "
                <div class=\"center-align\">
                    ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c1a585daa93f004ad324ce42d9eb935e15152e7713ed03cc72e542788f106c42->leave($__internal_c1a585daa93f004ad324ce42d9eb935e15152e7713ed03cc72e542788f106c42_prof);

        
        $__internal_537425075d9d26d7b937119dac1e49bd9114e3c5b025615826d4577f119570cf->leave($__internal_537425075d9d26d7b937119dac1e49bd9114e3c5b025615826d4577f119570cf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:product:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 98,  159 => 96,  157 => 92,  154 => 91,  152 => 87,  149 => 86,  147 => 81,  142 => 78,  140 => 74,  137 => 73,  135 => 69,  132 => 68,  130 => 64,  124 => 60,  122 => 56,  119 => 55,  117 => 51,  114 => 50,  112 => 46,  109 => 45,  107 => 41,  104 => 40,  102 => 36,  99 => 35,  97 => 31,  94 => 30,  92 => 26,  89 => 25,  87 => 21,  81 => 18,  74 => 14,  69 => 12,  62 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
            <a href=\"{{ path('product_create') }}\" class=\"breadcrumb\">creation produit</a>
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
            {{ form_row(form.type, {
                'label': 'Type',
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.reference, {
                'label': 'Reference',
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.name, {
                'label': 'Nom',
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.category, {
                'label': 'Categorie',
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.conditionProduct, {
                'label': \"condition produit\",
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.duration, {
                'label': \"Durée\",
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.pcb, {
                'label': \"PCB\",
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
            {{ form_row(form.saleUnit, {
                'label': \"Prix unitaire\",
                'attr': {'style': 'margin-bottom:15px'}
                })
            }}
        </div>
        <div class=\"col s12\">
            <div class=\"col s6\">
                {{ form_row(form.tg, {
                    'label': 'TG',
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                {{ form_row(form.ts, {
                    'label': 'TS',
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                {{ form_row(form.tb, {
                    'label': \"TB\",
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
            </div>
            <div class=\"col s6\">
                {{ form_row(form.taTwo,
                {
                    'label': 'TA TWO',
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                {{ form_row(form.taOne, {
                    'label': \"TA ONE\",
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                {{ form_row(form.ppdia, {
                    'label': \"PPDIA\",
                    'attr': {'style': 'margin-bottom:15px'}
                    })
                }}
                <div class=\"center-align\">
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "AppBundle:product:form.html.twig", "/home/jonathan/Documents/Projets/cojinnov/src/AppBundle/Resources/views/product/form.html.twig");
    }
}
