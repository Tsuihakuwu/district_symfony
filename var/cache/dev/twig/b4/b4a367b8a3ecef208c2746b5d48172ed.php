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

/* commande/index.html.twig */
class __TwigTemplate_49c6cb55856af072d44c006a74fd2962 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/index.html.twig", 1);
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

        echo "Votre commande
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
\t<main>
\t\t<h1 class=\"d-flex justify-content-center mt-2\">Merci de votre commande !</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"mt-3 mb-5 p-3 justify-content-around rounded mnb row\">
\t\t\t<h3 class=\"d-flex justify-content-center mt-3\">Récapitulatif de votre commande :</h3>
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 14
            echo "\t\t\t\t<div class=\"col-md-4 mt-3\">
\t\t\t\t\t<div class=\"card border-0 shd text-white\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-7 imgof\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, ((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 18, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Plat", [], "array", false, false, false, 18), "image", [], "any", false, false, false, 18)), "html", null, true);
            echo "\" class=\"img-fluid rounded-start\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Plat", [], "array", false, false, false, 18), "image", [], "any", false, false, false, 18), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body col-md-5 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Plat", [], "array", false, false, false, 21), "libelle", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-3 mb-3\">
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "Plat", [], "array", false, false, false, 23), "prix", [], "any", false, false, false, 23), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">Quantité:
\t\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "quantite", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            <hr class=\"w-100 mx-auto mt-4 mb-3 d-flex\">
\t\t\t<div class=\"text-center\">Total de votre commande:
\t\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["totalprix"]) || array_key_exists("totalprix", $context) ? $context["totalprix"] : (function () { throw new RuntimeError('Variable "totalprix" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "€</div>
\t\t\t<hr class=\"w-100 mx-auto mt-3 mb-3 d-flex\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\" class=\"btn btn-light mt-4\">Retour accueil</a>
\t\t\t</div>
\t\t</div>
\t</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "commande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 37,  142 => 34,  138 => 32,  126 => 26,  120 => 23,  115 => 21,  107 => 18,  101 => 14,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre commande
{% endblock %}

{% block body %}

\t<main>
\t\t<h1 class=\"d-flex justify-content-center mt-2\">Merci de votre commande !</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"mt-3 mb-5 p-3 justify-content-around rounded mnb row\">
\t\t\t<h3 class=\"d-flex justify-content-center mt-3\">Récapitulatif de votre commande :</h3>
\t\t\t{% for plat in panier %}
\t\t\t\t<div class=\"col-md-4 mt-3\">
\t\t\t\t\t<div class=\"card border-0 shd text-white\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-7 imgof\">
\t\t\t\t\t\t\t\t<img src=\"{{ image_dir ~ plat['Plat'].image }}\" class=\"img-fluid rounded-start\" alt=\"{{ plat['Plat'].image }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body col-md-5 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">{{ plat['Plat'].libelle }}</h5>
\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-3 mb-3\">
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">{{ plat['Plat'].prix }}€</p>
\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">Quantité:
\t\t\t\t\t\t\t\t\t{{ plat.quantite }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
            <hr class=\"w-100 mx-auto mt-4 mb-3 d-flex\">
\t\t\t<div class=\"text-center\">Total de votre commande:
\t\t\t\t{{ totalprix }}€</div>
\t\t\t<hr class=\"w-100 mx-auto mt-3 mb-3 d-flex\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<a href=\"{{ path('app_accueil') }}\" class=\"btn btn-light mt-4\">Retour accueil</a>
\t\t\t</div>
\t\t</div>
\t</main>

{% endblock %}
", "commande/index.html.twig", "/home/stagiaire/Bureau/the_district_symfony/templates/commande/index.html.twig");
    }
}
