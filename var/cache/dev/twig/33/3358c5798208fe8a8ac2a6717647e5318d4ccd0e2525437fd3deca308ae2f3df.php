<?php

/* header.html.twig */
class __TwigTemplate_c58432d7b1368f491393243f02f351e61abe4cb6e26f186c73497a36a35aa734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccb8cfcffeb50f6bf2005bab16ddc44deb28ed105a30ad026785749034245c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb8cfcffeb50f6bf2005bab16ddc44deb28ed105a30ad026785749034245c79->enter($__internal_ccb8cfcffeb50f6bf2005bab16ddc44deb28ed105a30ad026785749034245c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_fc284431e8db0b0db9e96390345c3ebeaa30cde6be21acf9d9deb68af079dd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc284431e8db0b0db9e96390345c3ebeaa30cde6be21acf9d9deb68af079dd83->enter($__internal_fc284431e8db0b0db9e96390345c3ebeaa30cde6be21acf9d9deb68af079dd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header class=\"all-header\">
    <nav>
        <div class=\"nav-wrapper\">

            <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"brand-logo\"><img class=\"all-header-img float-l\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo_cojinnov.png"), "html", null, true);
        echo "\"></a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 8
            echo "                    <li><a><i class=\"material-icons left all-header-user-icon\">perm_identity</i>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 10
        echo "                <li><a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\" style=\"display: block !important;\"><i class=\"material-icons\">menu</i></a></li>
            </ul>
            <ul id=\"slide-out\" class=\"side-nav\" style=\"background-color: #f2f2f2; color: #7991c1\">
                <li><img width=\"100%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo_cojinnov.png"), "html", null, true);
        echo "\"></li>
                <li><div class=\"divider\"></div></li>
                <li><a href=\"#!user\"><i class=\"material-icons all-header-user-icon\" style=\"color: #7991c1\">perm_identity</i>Compte</a></li>
                <li><a href=\"#!\"><i class=\"material-icons\" style=\"color: #7991c1\">done_all</i>Objectifs</a></li>
                <li><a href=\"#!\"><i class=\"material-icons\" style=\"color: #7991c1\">settings</i>Parametres</a></li>
                <li><div class=\"divider\"></div></li>
                <li><a href=\"/logout\"><i class=\"material-icons\" style=\"color: #7991c1\">power_settings_new</i>déconnection</a></li>
            </ul>
        </div>
    </nav>
</header>";
        
        $__internal_ccb8cfcffeb50f6bf2005bab16ddc44deb28ed105a30ad026785749034245c79->leave($__internal_ccb8cfcffeb50f6bf2005bab16ddc44deb28ed105a30ad026785749034245c79_prof);

        
        $__internal_fc284431e8db0b0db9e96390345c3ebeaa30cde6be21acf9d9deb68af079dd83->leave($__internal_fc284431e8db0b0db9e96390345c3ebeaa30cde6be21acf9d9deb68af079dd83_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  46 => 10,  40 => 8,  38 => 7,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"all-header\">
    <nav>
        <div class=\"nav-wrapper\">

            <a href=\"{{ path('home') }}\" class=\"brand-logo\"><img class=\"all-header-img float-l\" src=\"{{ asset('img/logo_cojinnov.png') }}\"></a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                {% if app.user.username is defined  %}
                    <li><a><i class=\"material-icons left all-header-user-icon\">perm_identity</i>{{ app.user.username }}</a></li>
                {% endif %}
                <li><a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\" style=\"display: block !important;\"><i class=\"material-icons\">menu</i></a></li>
            </ul>
            <ul id=\"slide-out\" class=\"side-nav\" style=\"background-color: #f2f2f2; color: #7991c1\">
                <li><img width=\"100%\" src=\"{{ asset('img/logo_cojinnov.png') }}\"></li>
                <li><div class=\"divider\"></div></li>
                <li><a href=\"#!user\"><i class=\"material-icons all-header-user-icon\" style=\"color: #7991c1\">perm_identity</i>Compte</a></li>
                <li><a href=\"#!\"><i class=\"material-icons\" style=\"color: #7991c1\">done_all</i>Objectifs</a></li>
                <li><a href=\"#!\"><i class=\"material-icons\" style=\"color: #7991c1\">settings</i>Parametres</a></li>
                <li><div class=\"divider\"></div></li>
                <li><a href=\"/logout\"><i class=\"material-icons\" style=\"color: #7991c1\">power_settings_new</i>déconnection</a></li>
            </ul>
        </div>
    </nav>
</header>", "header.html.twig", "/home/jonathan/Documents/Projets/cojinnov/app/Resources/views/header.html.twig");
    }
}
