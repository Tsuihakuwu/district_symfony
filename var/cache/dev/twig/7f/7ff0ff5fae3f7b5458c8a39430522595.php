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
class __TwigTemplate_cf2e241e3d6cf03042de85395229f720 extends Template
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

        echo "Mon profil
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
\t\t<h1 class=\"d-flex justify-content-center mt-3\">Vos informations</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"mnb rounded p-4 d-flex justify-content-center\">
        <div class=\"w-25\">
\t\t\t<form method=\"POST\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_update");
        echo "\" class=\"profile-form\">
    <div class=\"form-group text-center\">
        <label for=\"email\">Adresse Mail:</label>
        <input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
        echo "\" class=\"form-control\" required>
    </div>
    <hr class=\"w-75 mx-auto mt-4 mb-3\">
    <div class=\"form-group text-center\">
        <label for=\"nom\">Nom:</label>
        <input type=\"text\" id=\"nom\" name=\"nom\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"prenom\">Prénom:</label>
        <input type=\"text\" id=\"prenom\" name=\"prenom\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "html", null, true);
        echo "\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"telephone\">Téléphone:</label>
        <input type=\"tel\" id=\"telephone\" name=\"telephone\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 29, $this->source); })()), "telephone", [], "any", false, false, false, 29), "html", null, true);
        echo "\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"adresse\">Adresse:</label>
        <input type=\"text\" id=\"adresse\" name=\"adresse\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), "html", null, true);
        echo "\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"cp\">Code Postal:</label>
        <input type=\"text\" id=\"cp\" name=\"cp\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 37, $this->source); })()), "cp", [], "any", false, false, false, 37), "html", null, true);
        echo "\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"ville\">Ville:</label>
        <input type=\"text\" id=\"ville\" name=\"ville\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 41, $this->source); })()), "ville", [], "any", false, false, false, 41), "html", null, true);
        echo "\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"commandes\">Nombre de commandes:</label>
        <input type=\"text\" id=\"commandes\" name=\"commandes\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["informations"]) || array_key_exists("informations", $context) ? $context["informations"] : (function () { throw new RuntimeError('Variable "informations" does not exist.', 45, $this->source); })()), "commandes", [], "any", false, false, false, 45)), "html", null, true);
        echo "\" class=\"form-control\" disabled>
    </div>

<div class=\"text-center mt-4\">
    <button type=\"submit\" class=\"btn btn-primary \">Enregistrer les modifications</button>
    </div>
</form>
</div>
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
        return array (  153 => 45,  146 => 41,  139 => 37,  132 => 33,  125 => 29,  118 => 25,  111 => 21,  103 => 16,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon profil
{% endblock %}

{% block body %}

\t<main>
\t\t<h1 class=\"d-flex justify-content-center mt-3\">Vos informations</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"mnb rounded p-4 d-flex justify-content-center\">
        <div class=\"w-25\">
\t\t\t<form method=\"POST\" action=\"{{ path('app_profile_update') }}\" class=\"profile-form\">
    <div class=\"form-group text-center\">
        <label for=\"email\">Adresse Mail:</label>
        <input type=\"email\" id=\"email\" name=\"email\" value=\"{{ informations.email }}\" class=\"form-control\" required>
    </div>
    <hr class=\"w-75 mx-auto mt-4 mb-3\">
    <div class=\"form-group text-center\">
        <label for=\"nom\">Nom:</label>
        <input type=\"text\" id=\"nom\" name=\"nom\" value=\"{{ informations.nom }}\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"prenom\">Prénom:</label>
        <input type=\"text\" id=\"prenom\" name=\"prenom\" value=\"{{ informations.prenom }}\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"telephone\">Téléphone:</label>
        <input type=\"tel\" id=\"telephone\" name=\"telephone\" value=\"{{ informations.telephone }}\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"adresse\">Adresse:</label>
        <input type=\"text\" id=\"adresse\" name=\"adresse\" value=\"{{ informations.adresse }}\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"cp\">Code Postal:</label>
        <input type=\"text\" id=\"cp\" name=\"cp\" value=\"{{ informations.cp }}\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"ville\">Ville:</label>
        <input type=\"text\" id=\"ville\" name=\"ville\" value=\"{{ informations.ville }}\" class=\"form-control\" required>
    </div>
    <div class=\"form-group text-center\">
        <label for=\"commandes\">Nombre de commandes:</label>
        <input type=\"text\" id=\"commandes\" name=\"commandes\" value=\"{{ informations.commandes|length }}\" class=\"form-control\" disabled>
    </div>

<div class=\"text-center mt-4\">
    <button type=\"submit\" class=\"btn btn-primary \">Enregistrer les modifications</button>
    </div>
</form>
</div>
\t\t</div>
\t</main>

{% endblock %}
", "profil/index.html.twig", "/home/stagiaire/Bureau/the_district_symfony/templates/profil/index.html.twig");
    }
}
