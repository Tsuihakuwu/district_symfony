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
\t\t<h1 class=\"d-flex justify-content-center mt-2\">Merci de votre commande
\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["nom_client"]) || array_key_exists("nom_client", $context) ? $context["nom_client"] : (function () { throw new RuntimeError('Variable "nom_client" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "
\t\t\t!</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"mt-3 mb-5 p-3 justify-content-around rounded mnb row\">
\t\t\t<h3 class=\"d-flex justify-content-center mt-3\">Récapitulatif de votre commande :</h3>
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 16
            echo "\t\t\t\t<div class=\"col-md-4 mt-3\">
\t\t\t\t\t<div class=\"card border-0 shd text-white\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-7 imgof\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, ((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 20, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "plat", [], "array", false, false, false, 20), "image", [], "any", false, false, false, 20)), "html", null, true);
            echo "\" class=\"img-fluid rounded-start\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "plat", [], "array", false, false, false, 20), "image", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body col-md-5 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "plat", [], "array", false, false, false, 23), "libelle", [], "any", false, false, false, 23), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-3 mb-3\">
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "plat", [], "array", false, false, false, 25), "prix", [], "any", false, false, false, 25), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">Quantité:
\t\t\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "quantite", [], "any", false, false, false, 28), "html", null, true);
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
        // line 34
        echo "\t\t\t<hr class=\"w-100 mx-auto mt-4 mb-3 d-flex\">
\t\t\t<div class=\"text-center mb-3\">Total de votre commande:<br>
\t\t\t\t<strong>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["totalprix"]) || array_key_exists("totalprix", $context) ? $context["totalprix"] : (function () { throw new RuntimeError('Variable "totalprix" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "€</strong>
\t\t\t</div>
\t\t\t<div class=\"text-center mb-3\">Votre adresse de livraison:<br>
\t\t\t\t<strong>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["adresse_client"]) || array_key_exists("adresse_client", $context) ? $context["adresse_client"] : (function () { throw new RuntimeError('Variable "adresse_client" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "</strong>
\t\t\t</div>
\t\t\t<div class=\"text-center\">Un mail de confirmation de votre commande vous à été envoyé à l'adresse suivante :<br>
\t\t\t\t<strong>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["mail_client"]) || array_key_exists("mail_client", $context) ? $context["mail_client"] : (function () { throw new RuntimeError('Variable "mail_client" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "</strong>
\t\t\t</div>
\t\t\t<hr class=\"w-100 mx-auto mt-3 mb-3 d-flex\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<a href=\"";
        // line 46
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
        return array (  166 => 46,  159 => 42,  153 => 39,  147 => 36,  143 => 34,  131 => 28,  125 => 25,  120 => 23,  112 => 20,  106 => 16,  102 => 15,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre commande
{% endblock %}

{% block body %}

\t<main>
\t\t<h1 class=\"d-flex justify-content-center mt-2\">Merci de votre commande
\t\t\t{{ nom_client }}
\t\t\t!</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"mt-3 mb-5 p-3 justify-content-around rounded mnb row\">
\t\t\t<h3 class=\"d-flex justify-content-center mt-3\">Récapitulatif de votre commande :</h3>
\t\t\t{% for plat in panier %}
\t\t\t\t<div class=\"col-md-4 mt-3\">
\t\t\t\t\t<div class=\"card border-0 shd text-white\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-7 imgof\">
\t\t\t\t\t\t\t\t<img src=\"{{ image_dir ~ plat['plat'].image }}\" class=\"img-fluid rounded-start\" alt=\"{{ plat['plat'].image }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body col-md-5 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">{{ plat['plat'].libelle }}</h5>
\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-3 mb-3\">
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">{{ plat['plat'].prix }}€</p>
\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">Quantité:
\t\t\t\t\t\t\t\t\t{{ plat.quantite }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t<hr class=\"w-100 mx-auto mt-4 mb-3 d-flex\">
\t\t\t<div class=\"text-center mb-3\">Total de votre commande:<br>
\t\t\t\t<strong>{{ totalprix }}€</strong>
\t\t\t</div>
\t\t\t<div class=\"text-center mb-3\">Votre adresse de livraison:<br>
\t\t\t\t<strong>{{ adresse_client }}</strong>
\t\t\t</div>
\t\t\t<div class=\"text-center\">Un mail de confirmation de votre commande vous à été envoyé à l'adresse suivante :<br>
\t\t\t\t<strong>{{ mail_client }}</strong>
\t\t\t</div>
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
