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

/* detail/index.html.twig */
class __TwigTemplate_af50609468cd977ac1d60272dba7119c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detail/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detail/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "detail/index.html.twig", 1);
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

        // line 4
        echo "\tTimbres
";
        
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
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/detail.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t<main>
\t\t<h1 class=\"tamps__title\">Timbre</h1>
\t\t<div class=\"filtered-stamps\">
\t\t\t<div class=\"stamp-list\">
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allStampsWithSameTitle"]) || array_key_exists("allStampsWithSameTitle", $context) ? $context["allStampsWithSameTitle"] : (function () { throw new RuntimeError('Variable "allStampsWithSameTitle" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stamp"]) {
            // line 18
            echo "\t\t\t\t\t<div class=\"stamp\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 20
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["stamp"], "getDateDebutTirage", [], "method", false, false, false, 20))) {
                // line 21
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "getJourneTirage", [], "method", false, false, false, 21), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "getDateDebutTirage", [], "method", false, false, false, 22), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 24
                echo "\t\t\t\t\t\t\t\tDate de début de tirage non spécifiée
\t\t\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t";
            // line 27
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["stamp"], "getRemarque", [], "method", false, false, false, 27))) {
                // line 28
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "getRemarque", [], "method", false, false, false, 28), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t\t\tAucune remarque disponible
\t\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"stamp__hidden\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "getTitre", [], "method", false, false, false, 36), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "getTxtFaciale", [], "method", false, false, false, 39), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "getNumTirage", [], "method", false, false, false, 42), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "getNumero", [], "method", false, false, false, 45), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stamp"], "getPresse", [], "method", false, false, false, 48), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stampImages"]) || array_key_exists("stampImages", $context) ? $context["stampImages"] : (function () { throw new RuntimeError('Variable "stampImages" does not exist.', 51, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["stamp"], "getId", [], "method", false, false, false, 51), [], "array", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 52
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/stamps/" . twig_get_attribute($this->env, $this->source, $context["image"], "getImage", [], "method", false, false, false, 52))), "html", null, true);
                echo "\" alt=\"Image du timbre\">
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stamp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 60, $this->source); })()), 'form_start');
        echo "
\t\t\t<h7 class=\"forum__txt\">Forum</h7>
\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 62, $this->source); })()), 'widget');
        echo "
\t\t\t<button class=\"button__form\" type=\"submit\">Envoyer</button>
\t\t\t";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
\t\t</div>

\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 68
            echo "\t\t\t<li class='forum__response'>
\t\t\t\t<p class='nbr__comment'>Commentaire numéro : ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 70), "Y-m-d H:i:s"), "+2 hours"), "Y-m-d H:i:s"), "html", null, true);
            echo "
\t\t\t\t\t|
\t\t\t\t\t";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 72), "html", null, true);
            echo "</p>
\t\t\t\t<p></p>
\t\t\t\t<p>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "Title", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 75), "html", null, true);
            echo "</p>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 78,  266 => 75,  262 => 74,  257 => 72,  252 => 70,  248 => 69,  245 => 68,  241 => 67,  235 => 64,  230 => 62,  225 => 60,  219 => 56,  212 => 54,  203 => 52,  199 => 51,  193 => 48,  187 => 45,  181 => 42,  175 => 39,  169 => 36,  163 => 32,  159 => 30,  153 => 28,  151 => 27,  148 => 26,  144 => 24,  139 => 22,  134 => 21,  132 => 20,  128 => 18,  124 => 17,  118 => 13,  108 => 12,  96 => 9,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tTimbres
{% endblock %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/base.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/detail.css') }}\"/>
{% endblock %}

{% block body %}
\t<main>
\t\t<h1 class=\"tamps__title\">Timbre</h1>
\t\t<div class=\"filtered-stamps\">
\t\t\t<div class=\"stamp-list\">
\t\t\t\t{% for stamp in allStampsWithSameTitle %}
\t\t\t\t\t<div class=\"stamp\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{% if stamp.getDateDebutTirage() is not null %}
\t\t\t\t\t\t\t\t{{ stamp.getJourneTirage() }}
\t\t\t\t\t\t\t\t{{ stamp.getDateDebutTirage()|date('Y-m-d') }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\tDate de début de tirage non spécifiée
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t|
\t\t\t\t\t\t\t{% if stamp.getRemarque() is not empty %}
\t\t\t\t\t\t\t\t{{ stamp.getRemarque() }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\tAucune remarque disponible
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"stamp__hidden\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{stamp.getTitre() }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{stamp.getTxtFaciale() }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{stamp.getNumTirage() }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{stamp.getNumero() }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t{{stamp.getPresse() }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% for image in stampImages[stamp.getId()] %}
\t\t\t\t\t\t\t<img src=\"{{ asset('/images/stamps/' ~ image.getImage()) }}\" alt=\"Image du timbre\">
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t{{ form_start(commentForm) }}
\t\t\t<h7 class=\"forum__txt\">Forum</h7>
\t\t\t{{ form_widget(commentForm) }}
\t\t\t<button class=\"button__form\" type=\"submit\">Envoyer</button>
\t\t\t{{ form_end(commentForm) }}
\t\t</div>

\t\t{% for comment in comments %}
\t\t\t<li class='forum__response'>
\t\t\t\t<p class='nbr__comment'>Commentaire numéro : {{ comment.id }}</p>
\t\t\t\t<p>{{ comment.date|date('Y-m-d H:i:s')|date_modify('+2 hours')|date('Y-m-d H:i:s') }}
\t\t\t\t\t|
\t\t\t\t\t{{ comment.user }}</p>
\t\t\t\t<p></p>
\t\t\t\t<p>{{ comment.Title }}</p>
\t\t\t\t<p>{{ comment.content }}</p>
\t\t\t</li>
\t\t{% endfor %}
\t</main>
{% endblock %}
", "detail/index.html.twig", "/Applications/MAMP/htdocs/Pro/sococodami/templates/detail/index.html.twig");
    }
}
