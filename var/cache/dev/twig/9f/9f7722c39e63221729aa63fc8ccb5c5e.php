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

/* email/recap_com.html.twig */
class __TwigTemplate_4c0d9b67333ed170b1e01a3851cf22f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/recap_com.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/recap_com.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>Réinitialisation Mot de passe</title>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t\t<style>
\t\t\t.mnb {
\t\t\t\tbox-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.75);
\t\t\t\t-webkit-box-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.75);
\t\t\t\t-moz-box-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.75);
\t\t\t\tbackground-color: #440320e1;
\t\t\t\tcolor: aliceblue;
\t\t\t\tmargin: 1rem;
\t\t\t}
\t\t\t.logo_rt {
\t\t\t\ttransform: rotate(-17deg);
\t\t\t\tfilter: drop-shadow(6px 8px 10px #000);
\t\t\t\twidth: 337px;
\t\t\t}
\t\t\t.center {
\t\t\t\tmargin-left: auto;
\t\t\t\tmargin-right: auto;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"text-center rounded p-3 mnb\">
\t\t\t<h1 class='h3 text-center'>Récapitulatif de votre commande</h1>
\t\t\t<p>Bonjour
\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33)), "html", null, true);
        echo "
\t\t\t\tet merci de votre commande !</p>
\t\t\t<p>Voici un récapitulatif :</p>
\t\t\t
\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 38
            echo "\t\t\t\t<div class=\"col-md-4 mt-3 mb-3 center\">
\t\t\t\t\t<div class=\"border-0 text-white\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 42, $this->source); })()), "image", [0 => ("@image_directory/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "plat", [], "array", false, false, false, 42), "image", [], "any", false, false, false, 42))], "method", false, false, false, 42), "html", null, true);
            echo "\" class=\"img-fluid rounded\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "plat", [], "array", false, false, false, 42), "image", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body col-md-5 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title text-center\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "plat", [], "array", false, false, false, 45), "libelle", [], "any", false, false, false, 45), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-3 mb-3\">
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plat"], "plat", [], "array", false, false, false, 47), "prix", [], "any", false, false, false, 47), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t<hr class=\"w-50 mx-auto mt-0 mb-3\">
\t\t\t\t\t\t\t\t<p class=\"card-text text-center\">Quantité:
\t\t\t\t\t\t\t\t\t";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "quantite", [], "any", false, false, false, 50), "html", null, true);
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
        // line 56
        echo "
\t\t\t<p>Votre adresse de livraison :</p>
\t\t\t<p>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "nom", [], "any", false, false, false, 58), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "prenom", [], "any", false, false, false, 58), "html", null, true);
        echo "
\t\t\t<br>
\t\t\t";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "adresse", [], "any", false, false, false, 60), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "cp", [], "any", false, false, false, 60), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "ville", [], "any", false, false, false, 60), "html", null, true);
        echo "
\t\t\t</p>

\t\t\t<p>En esperant vous revoir bientot sur notre site !</p>
\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 64, $this->source); })()), "image", [0 => "@image_directory/logo_transparent_sm.webp"], "method", false, false, false, 64), "html", null, true);
        echo "\" alt=\"logo_the_district\" class=\"logo_rt\">

\t\t</div>
\t</body>
</html>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css($___internal_parse_0_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "email/recap_com.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 1,  148 => 64,  137 => 60,  130 => 58,  126 => 56,  114 => 50,  108 => 47,  103 => 45,  95 => 42,  89 => 38,  85 => 37,  78 => 33,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply inline_css %}
<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title>Réinitialisation Mot de passe</title>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t\t<style>
\t\t\t.mnb {
\t\t\t\tbox-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.75);
\t\t\t\t-webkit-box-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.75);
\t\t\t\t-moz-box-shadow: 5px 5px 10px 0 rgba(0, 0, 0, 0.75);
\t\t\t\tbackground-color: #440320e1;
\t\t\t\tcolor: aliceblue;
\t\t\t\tmargin: 1rem;
\t\t\t}
\t\t\t.logo_rt {
\t\t\t\ttransform: rotate(-17deg);
\t\t\t\tfilter: drop-shadow(6px 8px 10px #000);
\t\t\t\twidth: 337px;
\t\t\t}
\t\t\t.center {
\t\t\t\tmargin-left: auto;
\t\t\t\tmargin-right: auto;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"text-center rounded p-3 mnb\">
\t\t\t<h1 class='h3 text-center'>Récapitulatif de votre commande</h1>
\t\t\t<p>Bonjour
\t\t\t\t{{ user.nom ~ \" \" ~ user.prenom }}
\t\t\t\tet merci de votre commande !</p>
\t\t\t<p>Voici un récapitulatif :</p>
\t\t\t
\t\t\t{% for plat in panier %}
\t\t\t\t<div class=\"col-md-4 mt-3 mb-3 center\">
\t\t\t\t\t<div class=\"border-0 text-white\">
\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t<img src=\"{{ email.image('@image_directory/' ~ plat[\"plat\"].image) }}\" class=\"img-fluid rounded\" alt=\"{{ plat['plat'].image }}\">
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

\t\t\t<p>Votre adresse de livraison :</p>
\t\t\t<p>{{ user.nom }} {{ user.prenom }}
\t\t\t<br>
\t\t\t{{ user.adresse }} {{ user.cp }} {{ user.ville }}
\t\t\t</p>

\t\t\t<p>En esperant vous revoir bientot sur notre site !</p>
\t\t\t<img src=\"{{ email.image('@image_directory/logo_transparent_sm.webp') }}\" alt=\"logo_the_district\" class=\"logo_rt\">

\t\t</div>
\t</body>
</html>
{% endapply %}", "email/recap_com.html.twig", "/home/stagiaire/Bureau/the_district_symfony/templates/email/recap_com.html.twig");
    }
}
