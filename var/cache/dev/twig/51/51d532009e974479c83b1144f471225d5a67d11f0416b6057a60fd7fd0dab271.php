<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4a7468f5004d0d8cf46b74a63e979b7f6906f972d922972832697044fda1c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a7468f5004d0d8cf46b74a63e979b7f6906f972d922972832697044fda1c1e->enter($__internal_f4a7468f5004d0d8cf46b74a63e979b7f6906f972d922972832697044fda1c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_2f99303de8cc8837cfa490002089fb9705cb69a75fe4bc95f7dded6c5f54b079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f99303de8cc8837cfa490002089fb9705cb69a75fe4bc95f7dded6c5f54b079->enter($__internal_2f99303de8cc8837cfa490002089fb9705cb69a75fe4bc95f7dded6c5f54b079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f4a7468f5004d0d8cf46b74a63e979b7f6906f972d922972832697044fda1c1e->leave($__internal_f4a7468f5004d0d8cf46b74a63e979b7f6906f972d922972832697044fda1c1e_prof);

        
        $__internal_2f99303de8cc8837cfa490002089fb9705cb69a75fe4bc95f7dded6c5f54b079->leave($__internal_2f99303de8cc8837cfa490002089fb9705cb69a75fe4bc95f7dded6c5f54b079_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8525d51c56f3613376122a7bbc28a31d2471504a954d134cd840ccb1847e688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8525d51c56f3613376122a7bbc28a31d2471504a954d134cd840ccb1847e688->enter($__internal_d8525d51c56f3613376122a7bbc28a31d2471504a954d134cd840ccb1847e688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bae7b7102cd95f595746d3da26a00955dc69c18f5ee512d208a34a2a855aa7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae7b7102cd95f595746d3da26a00955dc69c18f5ee512d208a34a2a855aa7c9->enter($__internal_bae7b7102cd95f595746d3da26a00955dc69c18f5ee512d208a34a2a855aa7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bae7b7102cd95f595746d3da26a00955dc69c18f5ee512d208a34a2a855aa7c9->leave($__internal_bae7b7102cd95f595746d3da26a00955dc69c18f5ee512d208a34a2a855aa7c9_prof);

        
        $__internal_d8525d51c56f3613376122a7bbc28a31d2471504a954d134cd840ccb1847e688->leave($__internal_d8525d51c56f3613376122a7bbc28a31d2471504a954d134cd840ccb1847e688_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b91b1e21606f94705637b4df885392d9a04fc296429a9d3d127b072adfb4f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b91b1e21606f94705637b4df885392d9a04fc296429a9d3d127b072adfb4f14->enter($__internal_1b91b1e21606f94705637b4df885392d9a04fc296429a9d3d127b072adfb4f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1fad00c07f21104568afeb7d77bede73753e178fc9e62a835823c85c92a2e425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fad00c07f21104568afeb7d77bede73753e178fc9e62a835823c85c92a2e425->enter($__internal_1fad00c07f21104568afeb7d77bede73753e178fc9e62a835823c85c92a2e425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1fad00c07f21104568afeb7d77bede73753e178fc9e62a835823c85c92a2e425->leave($__internal_1fad00c07f21104568afeb7d77bede73753e178fc9e62a835823c85c92a2e425_prof);

        
        $__internal_1b91b1e21606f94705637b4df885392d9a04fc296429a9d3d127b072adfb4f14->leave($__internal_1b91b1e21606f94705637b4df885392d9a04fc296429a9d3d127b072adfb4f14_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f9c238e135f063c89ef76b0d8476ea2cb2f67dd45164cb9c202e47de84bea03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9c238e135f063c89ef76b0d8476ea2cb2f67dd45164cb9c202e47de84bea03->enter($__internal_0f9c238e135f063c89ef76b0d8476ea2cb2f67dd45164cb9c202e47de84bea03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e23557e9d8d99ab317574f4db5fd83e71aa074d7e6d475964c8ac6726f810ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23557e9d8d99ab317574f4db5fd83e71aa074d7e6d475964c8ac6726f810ef9->enter($__internal_e23557e9d8d99ab317574f4db5fd83e71aa074d7e6d475964c8ac6726f810ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e23557e9d8d99ab317574f4db5fd83e71aa074d7e6d475964c8ac6726f810ef9->leave($__internal_e23557e9d8d99ab317574f4db5fd83e71aa074d7e6d475964c8ac6726f810ef9_prof);

        
        $__internal_0f9c238e135f063c89ef76b0d8476ea2cb2f67dd45164cb9c202e47de84bea03->leave($__internal_0f9c238e135f063c89ef76b0d8476ea2cb2f67dd45164cb9c202e47de84bea03_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
