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

/* plat/index.html.twig */
class __TwigTemplate_1ffaa67b48db7a78ad5709680ba7eead extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plat/index.html.twig", 1);
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

        echo "Tout nos plats
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
        echo "

\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "\t\t<div class=\"alert alert-success text-center\">
\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t<main>
\t\t<h1 class=\"d-flex justify-content-center mt-3\">Tout nos plats</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 19
            echo "\t\t\t<div class=\"d-flex justify-content-around flex-wrap mt-3\">
\t\t\t\t<div class=\"card mb-3 border-0 shd text-white\" style=\"max-width:45%;\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-6 imgof\">
\t\t\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 23, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" class=\"img-fluid rounded-start\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "image", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body h-100 col-md-6 align-items-center\">
\t\t\t\t\t\t\t<h5 class=\"card-title d-flex justify-content-center\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "libelle", [], "any", false, false, false, 26), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t<p class=\"card-text text-justify\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prix", [], "any", false, false, false, 32), "html", null, true);
            echo "€
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, ("/panier/add/" . twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 36)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-light btn-sm text-black mb-3 mt-3\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "plat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 50,  152 => 36,  145 => 32,  138 => 28,  133 => 26,  125 => 23,  119 => 19,  115 => 18,  109 => 14,  100 => 11,  97 => 10,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tout nos plats
{% endblock %}

{% block body %}


\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success text-center\">
\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}

\t<main>
\t\t<h1 class=\"d-flex justify-content-center mt-3\">Tout nos plats</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t{% for plat in plats %}
\t\t\t<div class=\"d-flex justify-content-around flex-wrap mt-3\">
\t\t\t\t<div class=\"card mb-3 border-0 shd text-white\" style=\"max-width:45%;\">
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t<div class=\"col-md-6 imgof\">
\t\t\t\t\t\t\t<img src=\"{{asset(image_dir ~ plat.image)}}\" class=\"img-fluid rounded-start\" alt=\"{{plat.image}}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body h-100 col-md-6 align-items-center\">
\t\t\t\t\t\t\t<h5 class=\"card-title d-flex justify-content-center\">{{plat.libelle}}</h5>
\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t<p class=\"card-text text-justify\">{{plat.description}}</p>
\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t{{plat.prix}}€
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<a href=\"{{ '/panier/add/' ~ plat.id }}\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-light btn-sm text-black mb-3 mt-3\">
\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
\t\t\t\t\t\t\t\t\t\t\t<path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t</main>

{% endblock %}
", "plat/index.html.twig", "/home/stagiaire/Bureau/the_district_symfony/templates/plat/index.html.twig");
    }
}
