<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_345d85804417261b27b660021c36f5cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        <header>
                <nav class=\"nav-mobile-main\">
                    <img class=\"logo\" src=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_soco_2.gif"), "html", null, true);
        echo ">
                    <div class=\"modal-nav-mobile\">
                        <ul>
                            <li><a href=\"/\">Accueil</a></li>
                            <li><a id=\"active-redirect\" href=\"\">A propos de nous</a></li>
                            <li><a href=\"/news\">Actualités</a></li>
                            ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "                                <li><a id=\"active-redirect\" href=\"/stamps\">Espaces timbres</a></li>
                                <li><a href=\"/forum\">Forum</a></li>
                            ";
        }
        // line 27
        echo "                            <li><a href=\"/login\">Espace privé</a></li>

                            ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "                                <li><a href=\"/add/news\">Ajoutez des actualités</a></li>
                                <li><a href=\"/add/stamps\">Ajoutez des timbres</a></li>
                            ";
        }
        // line 33
        echo "                        </ul>
                    </div>
                    <div class=\"nav-mobile\">
                        <div class=\"row-nav-mobile\"></div>
                        <div class=\"row-nav-mobile\"></div>
                        <div class=\"row-nav-mobile\"></div>
                    </div>
                </nav>

                <nav class=\"nav-laptop\">
                    <img class=\"logo\" src=";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_soco_2.gif"), "html", null, true);
        echo ">
                    <ul>
                        <li><a href=\"/\">Accueil</a></li>
                        <li><a href=\"/about\">A propos de nous</a></li>
                        <li><a href=\"/news\">Actualités</a></li>
                        <li><a href=\"/login\">Espace privé</a></li>
                        ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "                            <li><a href=\"/stamps\">Espaces timbres</a></li>
                            <li><a href=\"/forum\">Forum</a></li>
                        ";
        }
        // line 53
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 54
            echo "                            <li><a href=\"/add/news\">Ajoutez des actualités</a></li>
                            <li><a href=\"/add/stamps\">Ajoutez des timbres</a></li>
                        ";
        }
        // line 57
        echo "                    </ul>
                </nav>
            </header>

        ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "
        <footer>
            <h2>SO.CO.CO.DA.MI.</h2>
            <p>©2023. All Rights Reserved.</p>
        </footer>
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0\" nonce=\"KlwkQWQM\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/base.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 62,  226 => 61,  216 => 12,  206 => 11,  193 => 8,  183 => 7,  164 => 6,  150 => 70,  142 => 64,  140 => 61,  134 => 57,  129 => 54,  126 => 53,  121 => 50,  119 => 49,  110 => 43,  98 => 33,  93 => 30,  91 => 29,  87 => 27,  82 => 24,  80 => 23,  71 => 17,  65 => 13,  63 => 11,  60 => 10,  58 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/base.css') }}\" />
        {% endblock %}

        {% block javascripts %}
        {% endblock %}
    </head>
    <body>
        <header>
                <nav class=\"nav-mobile-main\">
                    <img class=\"logo\" src={{ asset('images/logo_soco_2.gif') }}>
                    <div class=\"modal-nav-mobile\">
                        <ul>
                            <li><a href=\"/\">Accueil</a></li>
                            <li><a id=\"active-redirect\" href=\"\">A propos de nous</a></li>
                            <li><a href=\"/news\">Actualités</a></li>
                            {% if app.user %}
                                <li><a id=\"active-redirect\" href=\"/stamps\">Espaces timbres</a></li>
                                <li><a href=\"/forum\">Forum</a></li>
                            {% endif %}
                            <li><a href=\"/login\">Espace privé</a></li>

                            {% if is_granted('ROLE_ADMIN') %}
                                <li><a href=\"/add/news\">Ajoutez des actualités</a></li>
                                <li><a href=\"/add/stamps\">Ajoutez des timbres</a></li>
                            {% endif %}
                        </ul>
                    </div>
                    <div class=\"nav-mobile\">
                        <div class=\"row-nav-mobile\"></div>
                        <div class=\"row-nav-mobile\"></div>
                        <div class=\"row-nav-mobile\"></div>
                    </div>
                </nav>

                <nav class=\"nav-laptop\">
                    <img class=\"logo\" src={{ asset('images/logo_soco_2.gif') }}>
                    <ul>
                        <li><a href=\"/\">Accueil</a></li>
                        <li><a href=\"/about\">A propos de nous</a></li>
                        <li><a href=\"/news\">Actualités</a></li>
                        <li><a href=\"/login\">Espace privé</a></li>
                        {% if app.user %}
                            <li><a href=\"/stamps\">Espaces timbres</a></li>
                            <li><a href=\"/forum\">Forum</a></li>
                        {% endif %}
                        {% if is_granted('ROLE_ADMIN') %}
                            <li><a href=\"/add/news\">Ajoutez des actualités</a></li>
                            <li><a href=\"/add/stamps\">Ajoutez des timbres</a></li>
                        {% endif %}
                    </ul>
                </nav>
            </header>

        {% block body %}

        {% endblock %}

        <footer>
            <h2>SO.CO.CO.DA.MI.</h2>
            <p>©2023. All Rights Reserved.</p>
        </footer>
        <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0\" nonce=\"KlwkQWQM\"></script>
        <script src=\"{{ asset('js/base.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Pro/sococodami/templates/base.html.twig");
    }
}
