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

/* profil/index.html.twig */
class __TwigTemplate_ba6546679bd003721b165d0bd697f6b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
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

        echo "Mon profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<main>
\t\t<h1 class=\"d-flex justify-content-center mt-3\">Vos coordonnées</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"mnb rounded p-4 d-flex justify-content-center\">
\t\t\t<div class=\"w-25\">
\t\t\t\t<form method=\"POST\" action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_update");
        echo "\" class=\"profile-form\">
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"email\">Adresse Mail:</label>
\t\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<hr class=\"w-75 mx-auto mt-4 mb-3\">
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"nom\">Nom:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"nom\" name=\"nom\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"prenom\">Prénom:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"prenom\" name=\"prenom\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"telephone\">Téléphone:</label>
\t\t\t\t\t\t<input type=\"tel\" id=\"telephone\" name=\"telephone\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 28, $this->source); })()), "telephone", [], "any", false, false, false, 28), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"adresse\">Adresse:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"adresse\" name=\"adresse\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 32, $this->source); })()), "adresse", [], "any", false, false, false, 32), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"cp\">Code Postal:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"cp\" name=\"cp\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 36, $this->source); })()), "cp", [], "any", false, false, false, 36), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"ville\">Ville:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"ville\" name=\"ville\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 40, $this->source); })()), "ville", [], "any", false, false, false, 40), "html", null, true);
        echo "\" class=\"form-control\" required>
\t\t\t\t\t</div>
                    <hr class=\"w-75 mx-auto mt-4 mb-3\">
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"commandes\">Nombre de commandes:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"commandes\" name=\"commandes\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 45, $this->source); })()), "commandes", [], "any", false, false, false, 45)), "html", null, true);
        echo "\" class=\"form-control mb-3\" disabled>
                        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique");
        echo "\" class=\"text-primary\">Mon historique de commandes</a>
\t\t\t\t\t</div>
                    <hr class=\"w-75 mx-auto mt-4 mb-3\">
\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-light \">Enregistrer les modifications</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 46,  153 => 45,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  102 => 15,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon profil{% endblock %}

{% block body %}

\t<main>
\t\t<h1 class=\"d-flex justify-content-center mt-3\">Vos coordonnées</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"mnb rounded p-4 d-flex justify-content-center\">
\t\t\t<div class=\"w-25\">
\t\t\t\t<form method=\"POST\" action=\"{{ path('app_profil_update') }}\" class=\"profile-form\">
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"email\">Adresse Mail:</label>
\t\t\t\t\t\t<input type=\"email\" id=\"email\" name=\"email\" value=\"{{ informations.email }}\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<hr class=\"w-75 mx-auto mt-4 mb-3\">
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"nom\">Nom:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"nom\" name=\"nom\" value=\"{{ informations.nom }}\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"prenom\">Prénom:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"prenom\" name=\"prenom\" value=\"{{ informations.prenom }}\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"telephone\">Téléphone:</label>
\t\t\t\t\t\t<input type=\"tel\" id=\"telephone\" name=\"telephone\" value=\"{{ informations.telephone }}\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"adresse\">Adresse:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"adresse\" name=\"adresse\" value=\"{{ informations.adresse }}\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"cp\">Code Postal:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"cp\" name=\"cp\" value=\"{{ informations.cp }}\" class=\"form-control\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"ville\">Ville:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"ville\" name=\"ville\" value=\"{{ informations.ville }}\" class=\"form-control\" required>
\t\t\t\t\t</div>
                    <hr class=\"w-75 mx-auto mt-4 mb-3\">
\t\t\t\t\t<div class=\"form-group text-center\">
\t\t\t\t\t\t<label for=\"commandes\">Nombre de commandes:</label>
\t\t\t\t\t\t<input type=\"text\" id=\"commandes\" name=\"commandes\" value=\"{{ informations.commandes|length }}\" class=\"form-control mb-3\" disabled>
                        <a href=\"{{ path('app_historique') }}\" class=\"text-primary\">Mon historique de commandes</a>
\t\t\t\t\t</div>
                    <hr class=\"w-75 mx-auto mt-4 mb-3\">
\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-light \">Enregistrer les modifications</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</main>

{% endblock %}
", "profil/index.html.twig", "/home/stagiaire/Bureau/the_district_symfony/templates/profil/index.html.twig");
    }
}
