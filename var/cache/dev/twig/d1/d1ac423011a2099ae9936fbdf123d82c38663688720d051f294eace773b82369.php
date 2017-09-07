<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_dd053ad6fb3235f2a0669efec166b09fbe0db28d7822151c8c70700e294503a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Security/login_content.html.twig", 1);
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
        $__internal_18305f45240f882e4e799fe491cad67c57875ff26e41f4dc4b7acbd3fbfda710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18305f45240f882e4e799fe491cad67c57875ff26e41f4dc4b7acbd3fbfda710->enter($__internal_18305f45240f882e4e799fe491cad67c57875ff26e41f4dc4b7acbd3fbfda710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_860728182e686071ba2f6c5d7ffbb6063881922e513398233409d9e84f79c84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860728182e686071ba2f6c5d7ffbb6063881922e513398233409d9e84f79c84f->enter($__internal_860728182e686071ba2f6c5d7ffbb6063881922e513398233409d9e84f79c84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18305f45240f882e4e799fe491cad67c57875ff26e41f4dc4b7acbd3fbfda710->leave($__internal_18305f45240f882e4e799fe491cad67c57875ff26e41f4dc4b7acbd3fbfda710_prof);

        
        $__internal_860728182e686071ba2f6c5d7ffbb6063881922e513398233409d9e84f79c84f->leave($__internal_860728182e686071ba2f6c5d7ffbb6063881922e513398233409d9e84f79c84f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_262b742c634a810b2a3bd79ace1ffcf3bdd87dfc5a8049e92b461fb8bd159a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262b742c634a810b2a3bd79ace1ffcf3bdd87dfc5a8049e92b461fb8bd159a81->enter($__internal_262b742c634a810b2a3bd79ace1ffcf3bdd87dfc5a8049e92b461fb8bd159a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c2a6114b34efac85707ce9837d5a9059d88e1b3c3ca02ae95b83374b52e3b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c2a6114b34efac85707ce9837d5a9059d88e1b3c3ca02ae95b83374b52e3b47->enter($__internal_1c2a6114b34efac85707ce9837d5a9059d88e1b3c3ca02ae95b83374b52e3b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <div class=\"row container block-login-form z-depth-2\" style=\"width: 30%\">
        <img class=\"block-login-img\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo_cojinnov.png"), "html", null, true);
        echo "\">
        <form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 11
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 12
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 14
        echo "
            <div class=\"row block-login-content\" style=\"margin-left: auto; margin-right: auto;\">
                <label for=\"username\">nom d'utilisateur</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                <label for=\"password\">mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>
            ";
        // line 23
        echo "                ";
        // line 24
        echo "                ";
        // line 25
        echo "            ";
        // line 26
        echo "            <div class=\"row center-align\">
                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Submit
                    <i class=\"material-icons right\">send</i>
                </button>
            </div>
            ";
        // line 32
        echo "        </form>
    </div>
";
        
        $__internal_1c2a6114b34efac85707ce9837d5a9059d88e1b3c3ca02ae95b83374b52e3b47->leave($__internal_1c2a6114b34efac85707ce9837d5a9059d88e1b3c3ca02ae95b83374b52e3b47_prof);

        
        $__internal_262b742c634a810b2a3bd79ace1ffcf3bdd87dfc5a8049e92b461fb8bd159a81->leave($__internal_262b742c634a810b2a3bd79ace1ffcf3bdd87dfc5a8049e92b461fb8bd159a81_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  99 => 26,  97 => 25,  95 => 24,  93 => 23,  85 => 17,  80 => 14,  74 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 7,  54 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <div class=\"row container block-login-form z-depth-2\" style=\"width: 30%\">
        <img class=\"block-login-img\" src=\"{{ asset('img/logo_cojinnov.png') }}\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}

            <div class=\"row block-login-content\" style=\"margin-left: auto; margin-right: auto;\">
                <label for=\"username\">nom d'utilisateur</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

                <label for=\"password\">mot de passe</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>
            {#<div class=\"row center-align\">#}
                {#<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />#}
                {#<label for=\"remember_me\"></label>#}
            {#</div>#}
            <div class=\"row center-align\">
                <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Submit
                    <i class=\"material-icons right\">send</i>
                </button>
            </div>
            {#<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />#}
        </form>
    </div>
{% endblock %}
", "@FOSUser/Security/login_content.html.twig", "/home/jonathan/Documents/Projets/cojinnov/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
