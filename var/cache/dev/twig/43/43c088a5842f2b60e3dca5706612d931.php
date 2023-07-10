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

/* panier/index.html.twig */
class __TwigTemplate_7a87158dfedbb5df88c133d38bf02efb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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

        echo "Votre panier
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<main>
\t\t<h1 class=\"d-flex justify-content-center mt-2\">Votre commande</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"mt-3 mb-5 p-3 justify-content-around rounded mnb row\">
\t\t\t";
        // line 11
        if ((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                // line 13
                echo "\t\t\t\t\t<div class=\"col-md-4 mt-3\">
\t\t\t\t\t\t<div class=\"card border-0 shd text-white\">
\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-7 imgof\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 17
                echo twig_escape_filter($this->env, ((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 17, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Plat", [], "array", false, false, false, 17), "image", [], "any", false, false, false, 17)), "html", null, true);
                echo "\" class=\"img-fluid rounded-start\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Plat", [], "array", false, false, false, 17), "image", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body col-md-5 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Plat", [], "array", false, false, false, 20), "libelle", [], "any", false, false, false, 20), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-3 mb-3\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Plat", [], "array", false, false, false, 22), "prix", [], "any", false, false, false, 22), "html", null, true);
                echo "€</p>
\t\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">Quantité:
\t\t\t\t\t\t\t\t\t\t";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "quantite", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, ("/panier/delete/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Plat", [], "array", false, false, false, 28), "id", [], "any", false, false, false, 28)), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t<div class=\"text-center\">Le panier est vide !</div>
\t\t\t";
        }
        // line 43
        echo "\t\t\t<hr class=\"w-100 mx-auto mt-4 mb-3 d-flex\">
\t\t\t<div class=\"text-center\">Total de votre commande:
\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["totalprix"]) || array_key_exists("totalprix", $context) ? $context["totalprix"] : (function () { throw new RuntimeError('Variable "totalprix" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "€</div>
\t\t\t<hr class=\"w-100 mx-auto mt-3 mb-3 d-flex\">
\t\t\t";
        // line 47
        if ((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 47, $this->source); })())) {
            // line 48
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
                // line 49
                echo "\t\t\t\t\t";
                // line 50
                echo "\t\t\t\t\t<div class=\"text-center mb-3\">
\t\t\t\t\t\t<a href=\"";
                // line 51
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande");
                echo "\" class=\"btn btn-primary mx-3\">Commander</a>
\t\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t";
                // line 55
                echo "\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<p>Afin de pouvoir passer commander <a class=\"nav-link text-primary\" href=\"";
                // line 56
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\">connectez-vous !</a></p>
\t\t\t\t\t<p>Pas encore de compte ? <a class=\"nav-link text-primary\" href=\"";
                // line 57
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\">Je m'inscris !</a></p>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_vider");
            echo "\" class=\"btn btn-danger mx-3\">Vider le panier</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 64
        echo "\t\t</div>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 64,  201 => 61,  198 => 60,  192 => 57,  188 => 56,  185 => 55,  183 => 54,  177 => 51,  174 => 50,  172 => 49,  169 => 48,  167 => 47,  162 => 45,  158 => 43,  154 => 41,  151 => 40,  133 => 28,  127 => 25,  121 => 22,  116 => 20,  108 => 17,  102 => 13,  97 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre panier
{% endblock %}

{% block body %}
\t<main>
\t\t<h1 class=\"d-flex justify-content-center mt-2\">Votre commande</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"mt-3 mb-5 p-3 justify-content-around rounded mnb row\">
\t\t\t{% if panier %}
\t\t\t\t{% for plat in panier %}
\t\t\t\t\t<div class=\"col-md-4 mt-3\">
\t\t\t\t\t\t<div class=\"card border-0 shd text-white\">
\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-7 imgof\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ image_dir ~ plat['Plat'].image }}\" class=\"img-fluid rounded-start\" alt=\"{{ plat['Plat'].image }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body col-md-5 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">{{ plat['Plat'].libelle }}</h5>
\t\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-3 mb-3\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">{{ plat['Plat'].prix }}€</p>
\t\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">Quantité:
\t\t\t\t\t\t\t\t\t\t{{ plat.quantite }}</p>
\t\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ '/panier/delete/' ~ plat['Plat'].id }}\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<div class=\"text-center\">Le panier est vide !</div>
\t\t\t{% endif %}
\t\t\t<hr class=\"w-100 mx-auto mt-4 mb-3 d-flex\">
\t\t\t<div class=\"text-center\">Total de votre commande:
\t\t\t\t{{ totalprix }}€</div>
\t\t\t<hr class=\"w-100 mx-auto mt-3 mb-3 d-flex\">
\t\t\t{% if panier %}
\t\t\t\t{% if app.user %}
\t\t\t\t\t{# User is authenticated #}
\t\t\t\t\t<div class=\"text-center mb-3\">
\t\t\t\t\t\t<a href=\"{{ path('app_commande') }}\" class=\"btn btn-primary mx-3\">Commander</a>
\t\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t{# User is not authenticated #}
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<p>Afin de pouvoir passer commander <a class=\"nav-link text-primary\" href=\"{{path('app_login')}}\">connectez-vous !</a></p>
\t\t\t\t\t<p>Pas encore de compte ? <a class=\"nav-link text-primary\" href=\"{{path('app_login')}}\">Je m'inscris !</a></p>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<a href=\"{{ path('app_panier_vider') }}\" class=\"btn btn-danger mx-3\">Vider le panier</a>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</main>
{% endblock %}
", "panier/index.html.twig", "/home/stagiaire/Bureau/the_district_symfony/templates/panier/index.html.twig");
    }
}
