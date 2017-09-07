<?php

/* ::base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_813ddf3e65194b112aecab4537fd50f5c645ca95a3f4f7781232a81af1013eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_813ddf3e65194b112aecab4537fd50f5c645ca95a3f4f7781232a81af1013eda->enter($__internal_813ddf3e65194b112aecab4537fd50f5c645ca95a3f4f7781232a81af1013eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a654f61fd3242efcf0a746315051b74e170e7320eaaa1a0b602b913cef38885b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a654f61fd3242efcf0a746315051b74e170e7320eaaa1a0b602b913cef38885b->enter($__internal_a654f61fd3242efcf0a746315051b74e170e7320eaaa1a0b602b913cef38885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->loadTemplate("header.html.twig", "::base.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>";
        
        $__internal_813ddf3e65194b112aecab4537fd50f5c645ca95a3f4f7781232a81af1013eda->leave($__internal_813ddf3e65194b112aecab4537fd50f5c645ca95a3f4f7781232a81af1013eda_prof);

        
        $__internal_a654f61fd3242efcf0a746315051b74e170e7320eaaa1a0b602b913cef38885b->leave($__internal_a654f61fd3242efcf0a746315051b74e170e7320eaaa1a0b602b913cef38885b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06e078ffae660e80c8b306309834999cdfa7809631a751689ded63932e7380b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e078ffae660e80c8b306309834999cdfa7809631a751689ded63932e7380b4->enter($__internal_06e078ffae660e80c8b306309834999cdfa7809631a751689ded63932e7380b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3cba992fd003f78f2f4cd2c9b99ce6bccae8ba403f18409fd9245a20a7e3ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3cba992fd003f78f2f4cd2c9b99ce6bccae8ba403f18409fd9245a20a7e3ad9->enter($__internal_a3cba992fd003f78f2f4cd2c9b99ce6bccae8ba403f18409fd9245a20a7e3ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a3cba992fd003f78f2f4cd2c9b99ce6bccae8ba403f18409fd9245a20a7e3ad9->leave($__internal_a3cba992fd003f78f2f4cd2c9b99ce6bccae8ba403f18409fd9245a20a7e3ad9_prof);

        
        $__internal_06e078ffae660e80c8b306309834999cdfa7809631a751689ded63932e7380b4->leave($__internal_06e078ffae660e80c8b306309834999cdfa7809631a751689ded63932e7380b4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9669af56e77197bd6f271095c0cdac5a87fd06d4f34be01e06e6742d72acddf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9669af56e77197bd6f271095c0cdac5a87fd06d4f34be01e06e6742d72acddf2->enter($__internal_9669af56e77197bd6f271095c0cdac5a87fd06d4f34be01e06e6742d72acddf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4ede42a149a90cde4a75c8dea5a2b2201a4dfc4a4022c0c6e7d8918cd143835a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ede42a149a90cde4a75c8dea5a2b2201a4dfc4a4022c0c6e7d8918cd143835a->enter($__internal_4ede42a149a90cde4a75c8dea5a2b2201a4dfc4a4022c0c6e7d8918cd143835a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/master.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_4ede42a149a90cde4a75c8dea5a2b2201a4dfc4a4022c0c6e7d8918cd143835a->leave($__internal_4ede42a149a90cde4a75c8dea5a2b2201a4dfc4a4022c0c6e7d8918cd143835a_prof);

        
        $__internal_9669af56e77197bd6f271095c0cdac5a87fd06d4f34be01e06e6742d72acddf2->leave($__internal_9669af56e77197bd6f271095c0cdac5a87fd06d4f34be01e06e6742d72acddf2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c70b89aa8e2d7ed074ded092c099c231a66e7ab3a3cd03df16d8860c479a1d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70b89aa8e2d7ed074ded092c099c231a66e7ab3a3cd03df16d8860c479a1d08->enter($__internal_c70b89aa8e2d7ed074ded092c099c231a66e7ab3a3cd03df16d8860c479a1d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_274d42c1dd31dfbfd759731fa530793f2b75c075fd345378f89c9998734e4581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274d42c1dd31dfbfd759731fa530793f2b75c075fd345378f89c9998734e4581->enter($__internal_274d42c1dd31dfbfd759731fa530793f2b75c075fd345378f89c9998734e4581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_274d42c1dd31dfbfd759731fa530793f2b75c075fd345378f89c9998734e4581->leave($__internal_274d42c1dd31dfbfd759731fa530793f2b75c075fd345378f89c9998734e4581_prof);

        
        $__internal_c70b89aa8e2d7ed074ded092c099c231a66e7ab3a3cd03df16d8860c479a1d08->leave($__internal_c70b89aa8e2d7ed074ded092c099c231a66e7ab3a3cd03df16d8860c479a1d08_prof);

    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a26618a3e461eea40ca3514be7589593b7992de3254e7fff4d6804839e6c118a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26618a3e461eea40ca3514be7589593b7992de3254e7fff4d6804839e6c118a->enter($__internal_a26618a3e461eea40ca3514be7589593b7992de3254e7fff4d6804839e6c118a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a75d546cbe9b915257461f50cfe37279cc8379cd6b5bf901369953c4818cf21b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75d546cbe9b915257461f50cfe37279cc8379cd6b5bf901369953c4818cf21b->enter($__internal_a75d546cbe9b915257461f50cfe37279cc8379cd6b5bf901369953c4818cf21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 17
        echo "        ";
        
        $__internal_a75d546cbe9b915257461f50cfe37279cc8379cd6b5bf901369953c4818cf21b->leave($__internal_a75d546cbe9b915257461f50cfe37279cc8379cd6b5bf901369953c4818cf21b_prof);

        
        $__internal_a26618a3e461eea40ca3514be7589593b7992de3254e7fff4d6804839e6c118a->leave($__internal_a26618a3e461eea40ca3514be7589593b7992de3254e7fff4d6804839e6c118a_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec766f1310fbaadd6d4f6083c4a092908142632842cb9ae24cd7214d691201e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec766f1310fbaadd6d4f6083c4a092908142632842cb9ae24cd7214d691201e5->enter($__internal_ec766f1310fbaadd6d4f6083c4a092908142632842cb9ae24cd7214d691201e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_76f3593c08c0887f3095c52281230f145e660b530d7b52ce01c7fb91590e33df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f3593c08c0887f3095c52281230f145e660b530d7b52ce01c7fb91590e33df->enter($__internal_76f3593c08c0887f3095c52281230f145e660b530d7b52ce01c7fb91590e33df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/mains.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/showList.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sort.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_76f3593c08c0887f3095c52281230f145e660b530d7b52ce01c7fb91590e33df->leave($__internal_76f3593c08c0887f3095c52281230f145e660b530d7b52ce01c7fb91590e33df_prof);

        
        $__internal_ec766f1310fbaadd6d4f6083c4a092908142632842cb9ae24cd7214d691201e5->leave($__internal_ec766f1310fbaadd6d4f6083c4a092908142632842cb9ae24cd7214d691201e5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 24,  177 => 23,  173 => 22,  169 => 21,  165 => 20,  162 => 19,  153 => 18,  143 => 17,  134 => 16,  117 => 15,  105 => 9,  101 => 8,  98 => 7,  89 => 6,  71 => 5,  60 => 26,  57 => 18,  54 => 16,  51 => 15,  49 => 14,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\" media=\"screen,projection\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('css/master.css') }}\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% include ('header.html.twig') %}
        {% block body %}{% endblock %}
        {% block footer %}
        {% endblock %}
        {% block javascripts %}
            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/materialize.min.js') }}\"></script>
            <script src=\"{{ asset('js/mains.js') }}\"></script>
            <script src=\"{{ asset('js/showList.js') }}\"></script>
            <script src=\"{{ asset('js/search.js') }}\"></script>
            <script src=\"{{ asset('js/sort.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "::base.html.twig", "/home/jonathan/Documents/Projets/cojinnov/app/Resources/views/base.html.twig");
    }
}
