<?php

/* AppBundle:orderCustomer:form.html.twig */
class __TwigTemplate_b5b566e1d539490445ae14c73786be2630c199300f2a401708a9110e21befd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:orderCustomer:form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb59cc1abd8de7f1bb263bb6031afcab57363bc616bef1334d017307e03451ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb59cc1abd8de7f1bb263bb6031afcab57363bc616bef1334d017307e03451ad->enter($__internal_fb59cc1abd8de7f1bb263bb6031afcab57363bc616bef1334d017307e03451ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:orderCustomer:form.html.twig"));

        $__internal_1850ec46aba501708fac614ef6c75bc6626416c9d6396eedaca1f3733c973f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1850ec46aba501708fac614ef6c75bc6626416c9d6396eedaca1f3733c973f56->enter($__internal_1850ec46aba501708fac614ef6c75bc6626416c9d6396eedaca1f3733c973f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:orderCustomer:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb59cc1abd8de7f1bb263bb6031afcab57363bc616bef1334d017307e03451ad->leave($__internal_fb59cc1abd8de7f1bb263bb6031afcab57363bc616bef1334d017307e03451ad_prof);

        
        $__internal_1850ec46aba501708fac614ef6c75bc6626416c9d6396eedaca1f3733c973f56->leave($__internal_1850ec46aba501708fac614ef6c75bc6626416c9d6396eedaca1f3733c973f56_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_610ac6bbdb91a36d4206fa05beb139669606e7c9d90fe57fbca51a6a67d45bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610ac6bbdb91a36d4206fa05beb139669606e7c9d90fe57fbca51a6a67d45bb5->enter($__internal_610ac6bbdb91a36d4206fa05beb139669606e7c9d90fe57fbca51a6a67d45bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da3b262aa2d8272578effe02b07f0663ab3693cf498489577b6f4ccbd3bf31c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3b262aa2d8272578effe02b07f0663ab3693cf498489577b6f4ccbd3bf31c7->enter($__internal_da3b262aa2d8272578effe02b07f0663ab3693cf498489577b6f4ccbd3bf31c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\" class=\"breadcrumb\">Liste client</a>
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("customer_index_by_costumer", array("id" => $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()))), "html", null, true);
        echo "\" class=\"breadcrumb\">Client : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "name", array()), "html", null, true);
        echo "</a>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_create");
        echo "\" class=\"breadcrumb\">creation commande</a>
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
                <th class=\"center\">Action</th>
            </tr>
        </thead>
        <tbody class=\"co-js-search\">
            <tr>
                <td class=\"center\"><input type=\"text\" class=\"search-order\" data-url=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_search");
        echo "\" data-url-insert =";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_insert_product");
        echo "></td>
                <td class=\"center\"><input type=\"text\" ></td>
                <td class=\"center\"><input type=\"text\" ></td>
                <td class=\"center\"><input type=\"text\" ></td>
                <td class=\"center\"><input type=\"text\" ></td>
                <td class=\"center\"><input type=\"text\" ></td>
                <td class=\"center\"></td>
            </tr>
        </tbody>
    </table>
    <input class=\"customer-id\" type=\"hidden\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()), "html", null, true);
        echo "\">

    <!-- Modal Structure -->
    <div id=\"modalPrice\" class=\"modal\">
        <div class=\"modal-content\">
        <h4>Definition du prix</h4>
            <input type=\"number\" class=\"co-js-price-modal\">
        </div>
    </div>
    <div id=\"modalQuantity\" class=\"modal\">
        <div class=\"modal-content\">
            <h4>Definir quantité</h4>
            <input type=\"number\" class=\"co-js-quantity-modal\">
        </div>
    </div>
    <div id=\"modalTva\" class=\"modal\">
        <div class=\"modal-content\">
            <h4>Definir TVA</h4>
            <input type=\"number\" class=\"co-js-tva-modal\" value=\"20\">
        </div>
    </div>
    <div id=\"modalDoublon\" class=\"modal\">
        <div class=\"modal-content center\">
            <h4>vous avez deja enregister ce produit</h4>
        </div>
    </div>
    <div id=\"modalReferenceNotExist\" class=\"modal\">
        <div class=\"modal-content center\">
            <h4>la reference n'existe pas</h4>
        </div>
    </div>
    <div id=\"updatePrice\" class=\"modal\">
        <div class=\"modal-content\">
            <h4>Redefinir prix</h4>
            <input type=\"number\" class=\"co-js-update-price-modal\">
        </div>
    </div>
    <div id=\"updateQuantity\" class=\"modal\">
        <div class=\"modal-content\">
        <h4>Redefinir le quantité</h4>
            <input type=\"number\" class=\"co-js-update-quantity-modal\">
        </div>
    </div>
    ";
        // line 116
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row form-orderCustomer-footer\">
        <div class=\"col s3\">
            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tva", array()), 'row', array("label" => "TVA", "attr" => array("style" => "margin-bottom:5px;")));
        // line 123
        echo "
        </div>
        <div class=\"col s3\">
            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "totalHT", array()), 'row', array("label" => "Total hors taxe", "attr" => array("style" => "margin-bottom:5px")));
        // line 130
        echo "
        </div>
        <div class=\"col s3\">
            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "totalTTC", array()), 'row', array("label" => "Total Toutes taxe compris", "attr" => array("style" => "margin-bottom:5px")));
        // line 137
        echo "
        </div>
        <div class=\"col s3\" style=\"padding-top: 33px; !important;\">
            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("style" => "display:none")));
        // line 143
        echo "
            <button id=\"appbundle_customer_save\" class=\" col s12 btn waves-effect waves-light\" type=\"submit\" name=\"appbundle_customer[save]\">Submit
                <i class=\"material-icons right\">send</i>
            </button>
        </div>
    </div>
    ";
        // line 149
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_da3b262aa2d8272578effe02b07f0663ab3693cf498489577b6f4ccbd3bf31c7->leave($__internal_da3b262aa2d8272578effe02b07f0663ab3693cf498489577b6f4ccbd3bf31c7_prof);

        
        $__internal_610ac6bbdb91a36d4206fa05beb139669606e7c9d90fe57fbca51a6a67d45bb5->leave($__internal_610ac6bbdb91a36d4206fa05beb139669606e7c9d90fe57fbca51a6a67d45bb5_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07f1b191604f6433f68cf01c34ba705fe91129cf37920dc03f7fd73cfe80f230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f1b191604f6433f68cf01c34ba705fe91129cf37920dc03f7fd73cfe80f230->enter($__internal_07f1b191604f6433f68cf01c34ba705fe91129cf37920dc03f7fd73cfe80f230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d05ec3f51c46f5ba76ddb17a10dd4dafe68ecedb90167cd8f02c1c50fcd9cb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05ec3f51c46f5ba76ddb17a10dd4dafe68ecedb90167cd8f02c1c50fcd9cb46->enter($__internal_d05ec3f51c46f5ba76ddb17a10dd4dafe68ecedb90167cd8f02c1c50fcd9cb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/formOrder.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modal.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d05ec3f51c46f5ba76ddb17a10dd4dafe68ecedb90167cd8f02c1c50fcd9cb46->leave($__internal_d05ec3f51c46f5ba76ddb17a10dd4dafe68ecedb90167cd8f02c1c50fcd9cb46_prof);

        
        $__internal_07f1b191604f6433f68cf01c34ba705fe91129cf37920dc03f7fd73cfe80f230->leave($__internal_07f1b191604f6433f68cf01c34ba705fe91129cf37920dc03f7fd73cfe80f230_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:orderCustomer:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 155,  285 => 154,  281 => 153,  278 => 152,  269 => 151,  257 => 149,  249 => 143,  247 => 140,  242 => 137,  240 => 133,  235 => 130,  233 => 126,  228 => 123,  226 => 119,  220 => 116,  174 => 73,  159 => 63,  139 => 46,  134 => 44,  127 => 40,  122 => 38,  117 => 36,  112 => 34,  103 => 28,  98 => 26,  93 => 24,  88 => 22,  83 => 20,  69 => 9,  63 => 8,  59 => 7,  55 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
                <a href=\"{{ path('customer_index') }}\" class=\"breadcrumb\">Liste client</a>
                <a href=\"{{ path('customer_index_by_costumer', {'id' : customer.id } ) }}\" class=\"breadcrumb\">Client : {{ customer.name }}</a>
                <a href=\"{{ path('product_create') }}\" class=\"breadcrumb\">creation commande</a>
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
                <th class=\"center\">Action</th>
            </tr>
        </thead>
        <tbody class=\"co-js-search\">
            <tr>
                <td class=\"center\"><input type=\"text\" class=\"search-order\" data-url=\"{{ path('product_search') }}\" data-url-insert ={{ path('order_insert_product') }}></td>
                <td class=\"center\"><input type=\"text\" ></td>
                <td class=\"center\"><input type=\"text\" ></td>
                <td class=\"center\"><input type=\"text\" ></td>
                <td class=\"center\"><input type=\"text\" ></td>
                <td class=\"center\"><input type=\"text\" ></td>
                <td class=\"center\"></td>
            </tr>
        </tbody>
    </table>
    <input class=\"customer-id\" type=\"hidden\" value=\"{{ customer.id }}\">

    <!-- Modal Structure -->
    <div id=\"modalPrice\" class=\"modal\">
        <div class=\"modal-content\">
        <h4>Definition du prix</h4>
            <input type=\"number\" class=\"co-js-price-modal\">
        </div>
    </div>
    <div id=\"modalQuantity\" class=\"modal\">
        <div class=\"modal-content\">
            <h4>Definir quantité</h4>
            <input type=\"number\" class=\"co-js-quantity-modal\">
        </div>
    </div>
    <div id=\"modalTva\" class=\"modal\">
        <div class=\"modal-content\">
            <h4>Definir TVA</h4>
            <input type=\"number\" class=\"co-js-tva-modal\" value=\"20\">
        </div>
    </div>
    <div id=\"modalDoublon\" class=\"modal\">
        <div class=\"modal-content center\">
            <h4>vous avez deja enregister ce produit</h4>
        </div>
    </div>
    <div id=\"modalReferenceNotExist\" class=\"modal\">
        <div class=\"modal-content center\">
            <h4>la reference n'existe pas</h4>
        </div>
    </div>
    <div id=\"updatePrice\" class=\"modal\">
        <div class=\"modal-content\">
            <h4>Redefinir prix</h4>
            <input type=\"number\" class=\"co-js-update-price-modal\">
        </div>
    </div>
    <div id=\"updateQuantity\" class=\"modal\">
        <div class=\"modal-content\">
        <h4>Redefinir le quantité</h4>
            <input type=\"number\" class=\"co-js-update-quantity-modal\">
        </div>
    </div>
    {{ form_start(form) }}
    <div class=\"row form-orderCustomer-footer\">
        <div class=\"col s3\">
            {{ form_row(form.tva, {
                'label': 'TVA',
                'attr': {'style': 'margin-bottom:5px;'}
                })
            }}
        </div>
        <div class=\"col s3\">
            {{ form_row(form.totalHT, {
                'label': 'Total hors taxe',
                'attr': {'style': 'margin-bottom:5px'}
                })
            }}
        </div>
        <div class=\"col s3\">
            {{ form_row(form.totalTTC, {
                'label': 'Total Toutes taxe compris',
                'attr': {'style': 'margin-bottom:5px'}
                })
            }}
        </div>
        <div class=\"col s3\" style=\"padding-top: 33px; !important;\">
            {{ form_row(form.save, {
                'attr': {'style': 'display:none'}
            })
            }}
            <button id=\"appbundle_customer_save\" class=\" col s12 btn waves-effect waves-light\" type=\"submit\" name=\"appbundle_customer[save]\">Submit
                <i class=\"material-icons right\">send</i>
            </button>
        </div>
    </div>
    {{ form_end(form) }}
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/materialize.min.js') }}\"></script>
    <script src=\"{{ asset('js/formOrder.js') }}\"></script>
    <script src=\"{{ asset('js/modal.js') }}\"></script>
{% endblock %}", "AppBundle:orderCustomer:form.html.twig", "/home/jonathan/Documents/Projets/cojinnov/src/AppBundle/Resources/views/orderCustomer/form.html.twig");
    }
}
