<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8cab5f5b850f80c33015092263328f716a32a10520a03217174641f2d287eebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df665184509c9c60b8072ff9b171f78cd22cc38de016dcf55f79f02acb2d92d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df665184509c9c60b8072ff9b171f78cd22cc38de016dcf55f79f02acb2d92d2->enter($__internal_df665184509c9c60b8072ff9b171f78cd22cc38de016dcf55f79f02acb2d92d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_9cc939a8517fdc96badbf80f53ccac894d6146ff2ad04250bc011acea9ff78ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc939a8517fdc96badbf80f53ccac894d6146ff2ad04250bc011acea9ff78ba->enter($__internal_9cc939a8517fdc96badbf80f53ccac894d6146ff2ad04250bc011acea9ff78ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 9
        echo "                ";
        // line 10
        echo "                ";
        // line 11
        echo "                    ";
        // line 12
        echo "                ";
        // line 13
        echo "            ";
        // line 14
        echo "                ";
        // line 15
        echo "            ";
        // line 16
        echo "        </div>

        ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        <div>
            ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "        </div>
    </body>
</html>
";
        
        $__internal_df665184509c9c60b8072ff9b171f78cd22cc38de016dcf55f79f02acb2d92d2->leave($__internal_df665184509c9c60b8072ff9b171f78cd22cc38de016dcf55f79f02acb2d92d2_prof);

        
        $__internal_9cc939a8517fdc96badbf80f53ccac894d6146ff2ad04250bc011acea9ff78ba->leave($__internal_9cc939a8517fdc96badbf80f53ccac894d6146ff2ad04250bc011acea9ff78ba_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f2fe638f35003461f02f9ddac4839899218a8a12ed27de7585f895240734b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f2fe638f35003461f02f9ddac4839899218a8a12ed27de7585f895240734b1b->enter($__internal_8f2fe638f35003461f02f9ddac4839899218a8a12ed27de7585f895240734b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_133530486d8503faa7d24f0e5a3a75b042652a0186680bfaf116c1487fe39555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133530486d8503faa7d24f0e5a3a75b042652a0186680bfaf116c1487fe39555->enter($__internal_133530486d8503faa7d24f0e5a3a75b042652a0186680bfaf116c1487fe39555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "            ";
        
        $__internal_133530486d8503faa7d24f0e5a3a75b042652a0186680bfaf116c1487fe39555->leave($__internal_133530486d8503faa7d24f0e5a3a75b042652a0186680bfaf116c1487fe39555_prof);

        
        $__internal_8f2fe638f35003461f02f9ddac4839899218a8a12ed27de7585f895240734b1b->leave($__internal_8f2fe638f35003461f02f9ddac4839899218a8a12ed27de7585f895240734b1b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  107 => 29,  94 => 31,  92 => 29,  88 => 27,  85 => 26,  79 => 25,  70 => 22,  65 => 21,  60 => 20,  55 => 19,  53 => 18,  49 => 16,  47 => 15,  45 => 14,  43 => 13,  41 => 12,  39 => 11,  37 => 10,  35 => 9,  26 => 1,);
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
    </head>
    <body>
        <div>
            {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
                {#{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
                {#<a href=\"{{ path('fos_user_security_logout') }}\">#}
                    {#{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}#}
                {#</a>#}
            {#{% else %}#}
                {#<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
            {#{% endif %}#}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
