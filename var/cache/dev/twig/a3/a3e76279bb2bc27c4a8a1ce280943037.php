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

/* news/index.html.twig */
class __TwigTemplate_d6156ca7ad2e0c9c265a285af7698721 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "news/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Actualités";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/news.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <main>
        <h1 class=\"news__title\">Actualités</h1>

        <div class=\"news__container\">
            ";
        // line 15
        if ( !twig_test_empty((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
                // line 17
                echo "                    <article class=\"news__item\">
                        <li class=\"item__list\">
                            ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["actualite"], "image", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                                <img class=\"image__news\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/news/" . twig_get_attribute($this->env, $this->source, $context["actualite"], "image", [], "any", false, false, false, 20))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "title", [], "any", false, false, false, 20), "html", null, true);
                    echo "\">
                            ";
                }
                // line 22
                echo "                            <h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</h2>
                            <p>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "content", [], "any", false, false, false, 23), "html", null, true);
                echo "</p>
                            <p>Date: ";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "date", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true);
                echo "</p>
                            ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["actualite"], "link", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "                                <a href=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "link", [], "any", false, false, false, 26), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "link", [], "any", false, false, false, 26), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 28
                echo "                        </li>
                    </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            ";
        } else {
            // line 32
            echo "                <p>Aucune actualité disponible.</p>
            ";
        }
        // line 34
        echo "            <div class=\"fb-page\" data-href=\"https://www.facebook.com/Sococodami/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/Sococodami/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/Sococodami/\">Sococodami</a></blockquote></div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "news/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 34,  177 => 32,  174 => 31,  166 => 28,  158 => 26,  156 => 25,  152 => 24,  148 => 23,  143 => 22,  135 => 20,  133 => 19,  129 => 17,  124 => 16,  122 => 15,  116 => 11,  106 => 10,  94 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Actualités{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/base.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/news.css') }}\" />
{% endblock %}

{% block body %}
    <main>
        <h1 class=\"news__title\">Actualités</h1>

        <div class=\"news__container\">
            {% if actualites is not empty %}
                {% for actualite in actualites %}
                    <article class=\"news__item\">
                        <li class=\"item__list\">
                            {% if actualite.image %}
                                <img class=\"image__news\" src=\"{{ asset('/images/news/' ~ actualite.image) }}\" alt=\"{{ actualite.title }}\">
                            {% endif %}
                            <h2>{{ actualite.title }}</h2>
                            <p>{{ actualite.content }}</p>
                            <p>Date: {{ actualite.date|date('Y-m-d H:i:s') }}</p>
                            {% if actualite.link %}
                                <a href={{ actualite.link }}>{{ actualite.link }}</a>
                            {% endif %}
                        </li>
                    </article>
                {% endfor %}
            {% else %}
                <p>Aucune actualité disponible.</p>
            {% endif %}
            <div class=\"fb-page\" data-href=\"https://www.facebook.com/Sococodami/\" data-tabs=\"timeline\" data-width=\"\" data-height=\"\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/Sococodami/\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/Sococodami/\">Sococodami</a></blockquote></div>
        </div>
    </main>
{% endblock %}
", "news/index.html.twig", "/Applications/MAMP/htdocs/Pro/sococodami/templates/news/index.html.twig");
    }
}
