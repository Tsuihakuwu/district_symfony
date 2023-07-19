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

/* registration/register.html.twig */
class __TwigTemplate_0ebbc9d21e9138d0e2a6550accebbc05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register
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
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 8
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
\t<h1 class=\"d-flex justify-content-center mt-2\">Inscription</h1>
\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t<div class=\"d-flex justify-content-center form-container mt-3 mb-5 p-3 rounded mnb\">

\t\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "

\t\t<h2 class=\"d-flex justify-content-center h4\">Vos identifiants</h2>

\t\t<div class=\"row text-center\">
\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'label', ["label" => "Votre Email :"]);
        echo "
\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "btn-light form-control mt-1"]]);
        echo "
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "plainPassword", [], "any", false, false, false, 26), 'label', ["label" => "Votre mot de passe :"]);
        echo "
\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "plainPassword", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "btn-light form-control mt-1"]]);
        echo "
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "plainPassword", [], "any", false, false, false, 28), 'errors');
        echo "
\t\t</div>

\t\t<h2 class=\"d-flex justify-content-center mt-3 h4\">Vos coordonnées</h2>

\t\t<div class=\"row text-center mt-1\">
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'label', ["label" => "Votre nom :"]);
        echo "
\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "btn-light form-control mt-1"]]);
        echo "
\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "prenom", [], "any", false, false, false, 40), 'label', ["label" => "Votre prénom :"]);
        echo "
\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "prenom", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "btn-light form-control mt-1"]]);
        echo "
\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "prenom", [], "any", false, false, false, 42), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "telephone", [], "any", false, false, false, 46), 'label', ["label" => "Votre téléphone :"]);
        echo "
\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "telephone", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "btn-light form-control mt-1"]]);
        echo "
\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "telephone", [], "any", false, false, false, 48), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "adresse", [], "any", false, false, false, 52), 'label', ["label" => "Votre adresse :"]);
        echo "
\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "adresse", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "btn-light form-control mt-1"]]);
        echo "
\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "adresse", [], "any", false, false, false, 54), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "cp", [], "any", false, false, false, 58), 'label', ["label" => "Votre code postal :"]);
        echo "
\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "cp", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "btn-light form-control mt-1"]]);
        echo "
\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "cp", [], "any", false, false, false, 60), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "ville", [], "any", false, false, false, 64), 'label', ["label" => "Votre ville :"]);
        echo "
\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "ville", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "btn-light form-control mt-1"]]);
        echo "
\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "ville", [], "any", false, false, false, 66), 'errors');
        echo "
\t\t</div>

\t\t<div class=\"text-center\">
\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "agreeTerms", [], "any", false, false, false, 70), 'label', ["label" => "J'accepte les conditions d'utilisation "]);
        echo "
\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "agreeTerms", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "mt-4 mb-4"]]);
        echo "
\t\t</div>

\t\t<div class=\"row text-center\">
\t\t\t<button type=\"submit\" class=\"btn btn-light\">Inscription</button>
\t\t</div>

\t\t";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 78,  244 => 71,  240 => 70,  233 => 66,  229 => 65,  225 => 64,  218 => 60,  214 => 59,  210 => 58,  203 => 54,  199 => 53,  195 => 52,  188 => 48,  184 => 47,  180 => 46,  173 => 42,  169 => 41,  165 => 40,  158 => 36,  154 => 35,  150 => 34,  141 => 28,  137 => 27,  133 => 26,  126 => 22,  122 => 21,  118 => 20,  110 => 15,  103 => 10,  94 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register
{% endblock %}

{% block body %}
\t{% for flash_error in app.flashes('verify_email_error') %}
\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
\t{% endfor %}

\t<h1 class=\"d-flex justify-content-center mt-2\">Inscription</h1>
\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t<div class=\"d-flex justify-content-center form-container mt-3 mb-5 p-3 rounded mnb\">

\t\t{{ form_start(registrationForm) }}

\t\t<h2 class=\"d-flex justify-content-center h4\">Vos identifiants</h2>

\t\t<div class=\"row text-center\">
\t\t\t{{ form_label(registrationForm.email, \"Votre Email :\") }}
\t\t\t{{ form_widget(registrationForm.email, {'attr': {'class': 'btn-light form-control mt-1'} }) }}
\t\t\t{{ form_errors(registrationForm.email) }}
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t{{ form_label(registrationForm.plainPassword, \"Votre mot de passe :\") }}
\t\t\t{{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'btn-light form-control mt-1'} }) }}
\t\t\t{{ form_errors(registrationForm.plainPassword) }}
\t\t</div>

\t\t<h2 class=\"d-flex justify-content-center mt-3 h4\">Vos coordonnées</h2>

\t\t<div class=\"row text-center mt-1\">
\t\t\t{{ form_label(registrationForm.nom, \"Votre nom :\") }}
\t\t\t{{ form_widget(registrationForm.nom, {'attr': {'class': 'btn-light form-control mt-1'} }) }}
\t\t\t{{ form_errors(registrationForm.nom) }}
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t{{ form_label(registrationForm.prenom, \"Votre prénom :\") }}
\t\t\t{{ form_widget(registrationForm.prenom, {'attr': {'class': 'btn-light form-control mt-1'} }) }}
\t\t\t{{ form_errors(registrationForm.prenom) }}
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t{{ form_label(registrationForm.telephone, \"Votre téléphone :\") }}
\t\t\t{{ form_widget(registrationForm.telephone, {'attr': {'class': 'btn-light form-control mt-1'} }) }}
\t\t\t{{ form_errors(registrationForm.telephone) }}
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t{{ form_label(registrationForm.adresse, \"Votre adresse :\") }}
\t\t\t{{ form_widget(registrationForm.adresse, {'attr': {'class': 'btn-light form-control mt-1'} }) }}
\t\t\t{{ form_errors(registrationForm.adresse) }}
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t{{ form_label(registrationForm.cp, \"Votre code postal :\") }}
\t\t\t{{ form_widget(registrationForm.cp, {'attr': {'class': 'btn-light form-control mt-1'} }) }}
\t\t\t{{ form_errors(registrationForm.cp) }}
\t\t</div>

\t\t<div class=\"row text-center mt-1\">
\t\t\t{{ form_label(registrationForm.ville, \"Votre ville :\") }}
\t\t\t{{ form_widget(registrationForm.ville, {'attr': {'class': 'btn-light form-control mt-1'} }) }}
\t\t\t{{ form_errors(registrationForm.ville) }}
\t\t</div>

\t\t<div class=\"text-center\">
\t\t\t{{ form_label(registrationForm.agreeTerms, \"J'accepte les conditions d'utilisation \") }}
\t\t\t{{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'mt-4 mb-4'} })  }}
\t\t</div>

\t\t<div class=\"row text-center\">
\t\t\t<button type=\"submit\" class=\"btn btn-light\">Inscription</button>
\t\t</div>

\t\t{{ form_end(registrationForm) }}
\t</div>

{% endblock %}
", "registration/register.html.twig", "/home/stagiaire/Bureau/the_district_symfony/templates/registration/register.html.twig");
    }
}
