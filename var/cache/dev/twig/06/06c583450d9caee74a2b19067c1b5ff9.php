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

/* base.html.twig */
class __TwigTemplate_3456141ef1316b3cf43a3cb7704156d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "\t\t<link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap\" rel=\"stylesheet\">

\t\t<title>
\t\t\tThe District -
\t\t\t";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        // line 20
        echo "\t\t</title>

\t</head>

\t<body>

\t\t<pre>
    \t";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context);
        echo "
\t</pre>

\t\t<div class=\"wraper\">
\t\t\t<img class=\"bg\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg3.jpg"), "html", null, true);
        echo "\" alt=\"background_district_burger\">
\t\t\t<div class=\"content d-flex flex-column h-100\">

\t\t\t\t<header>
\t\t\t\t\t<nav class=\"navbar navbar-expand-md rounded p-0 mnb\">
\t\t\t\t\t\t<div id=\"menu_container\" class=\"container-fluid\">
\t\t\t\t\t\t\t<a class=\"navbar-brand col-4 col-md-2 mx-4 my-3\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 38, $this->source); })()) . "logo_transparent_sm.webp")), "html", null, true);
        echo "\" alt=\"responsive_logo_the_district\" class=\"img-fluid logo_rt\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<button class=\"navbar-toggler mx-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" class=\"bi\" fill=\"currentColor\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse d-flex justify-content-between\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie");
        echo "\">Catégorie</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat");
        echo "\">Plats</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">Mon profil</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4 mb-4 mb-md-0 d-flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        echo "\">Panier</a>
\t\t\t\t\t\t\t\t\t\t";
        // line 68
        if (array_key_exists("panier", $context)) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"align-items-center-row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            if ((array_key_exists("total_qtt", $context) && ((isset($context["total_qtt"]) || array_key_exists("total_qtt", $context) ? $context["total_qtt"] : (function () { throw new RuntimeError('Variable "total_qtt" does not exist.', 70, $this->source); })()) > 0))) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>(";
                // line 75
                echo twig_escape_filter($this->env, (isset($context["total_qtt"]) || array_key_exists("total_qtt", $context) ? $context["total_qtt"] : (function () { throw new RuntimeError('Variable "total_qtt" does not exist.', 75, $this->source); })()), "html", null, true);
                echo ")</b>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        // line 81
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81)) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t";
            // line 83
            echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\tConnecté en tant que :
\t\t\t\t\t\t\t\t\t\t<b>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "userIdentifier", [], "any", false, false, false, 85), "html", null, true);
            echo "</b>,
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 89
            echo "\t\t\t\t\t\t\t\t\t";
            // line 90
            echo "\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</header>

\t\t\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 102
            echo "\t\t\t\t\t<div class=\"alert alert-success text-center\">
\t\t\t\t\t\t";
            // line 103
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 107
            echo "\t\t\t\t\t<div class=\"alert alert-danger text-center\">
\t\t\t\t\t\t";
            // line 108
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "

\t\t\t\t";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "
\t\t\t\t<footer class=\"footer mt-auto rounded mnb\">
\t\t\t\t\t<ul class=\"justify-content-center row mb-0 mt-2 px-0\">
\t\t\t\t\t\t<div class=\"col-7 col-md-4 row justify-content-center\">
\t\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0 col-2 col-md-1 mx-3 p-2\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-fluid\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 119, $this->source); })()) . "facebook-svgrepo-com.svg")), "html", null, true);
        echo "\" alt=\"socials_facebook\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0 col-2 col-md-1 mx-3 p-2\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-fluid \" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 122, $this->source); })()) . "twitter-154-svgrepo-com.svg")), "html", null, true);
        echo "\" alt=\"socials_instagram\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0 col-2 col-md-1 mx-3 p-2\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-fluid\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 125, $this->source); })()) . "instagram-167-svgrepo-com.svg")), "html", null, true);
        echo "\" alt=\"socials_twitter\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0 col-2 col-md-1 mx-3 p-2\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-fluid\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 128, $this->source); })()) . "onlyfans-svgrepo-com.svg")), "html", null, true);
        echo "\" alt=\"socials_onlyfans\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"d-flex justify-content-center mx-0 px-0\">
\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0\">
\t\t\t\t\t\t\t<a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu");
        echo "\">Politique de confidentialité</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0\">
\t\t\t\t\t\t\t<a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ml");
        echo "\">Mentions légales</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        // line 149
        echo "\t</body>
</html></body></html></body></html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 145,  383 => 144,  365 => 113,  347 => 19,  335 => 10,  332 => 9,  322 => 8,  311 => 149,  309 => 144,  299 => 137,  293 => 134,  284 => 128,  278 => 125,  272 => 122,  266 => 119,  259 => 114,  257 => 113,  253 => 111,  244 => 108,  241 => 107,  236 => 106,  227 => 103,  224 => 102,  220 => 101,  213 => 96,  206 => 92,  202 => 90,  200 => 89,  194 => 86,  190 => 85,  186 => 83,  184 => 82,  182 => 81,  178 => 79,  174 => 77,  169 => 75,  163 => 71,  161 => 70,  158 => 69,  156 => 68,  152 => 67,  149 => 66,  143 => 63,  140 => 62,  138 => 61,  133 => 59,  127 => 56,  121 => 53,  115 => 50,  100 => 38,  96 => 37,  87 => 31,  80 => 27,  71 => 20,  69 => 19,  58 => 12,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t{% block stylesheets %}
\t\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
\t\t{% endblock %}
\t\t<link rel=\"icon\" href=\"{{ asset('img/favicon.png') }}\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap\" rel=\"stylesheet\">

\t\t<title>
\t\t\tThe District -
\t\t\t{% block title %}{% endblock %}
\t\t</title>

\t</head>

\t<body>

\t\t<pre>
    \t{{ dump() }}
\t</pre>

\t\t<div class=\"wraper\">
\t\t\t<img class=\"bg\" src=\"{{asset('img/bg3.jpg')}}\" alt=\"background_district_burger\">
\t\t\t<div class=\"content d-flex flex-column h-100\">

\t\t\t\t<header>
\t\t\t\t\t<nav class=\"navbar navbar-expand-md rounded p-0 mnb\">
\t\t\t\t\t\t<div id=\"menu_container\" class=\"container-fluid\">
\t\t\t\t\t\t\t<a class=\"navbar-brand col-4 col-md-2 mx-4 my-3\" href=\"{{ path('app_accueil') }}\">
\t\t\t\t\t\t\t\t<img src=\"{{asset(image_dir ~ 'logo_transparent_sm.webp')}}\" alt=\"responsive_logo_the_district\" class=\"img-fluid logo_rt\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<button class=\"navbar-toggler mx-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" class=\"bi\" fill=\"currentColor\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse d-flex justify-content-between\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{ path('app_accueil') }}\">Accueil</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{ path('app_categorie') }}\">Catégorie</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{ path('app_plat') }}\">Plats</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('app_contact')}}\">Contact</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4 mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('app_profil')}}\">Mon profil</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<li class=\"nav-item mx-4 mb-4 mb-md-0 d-flex\">
\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('app_panier')}}\">Panier</a>
\t\t\t\t\t\t\t\t\t\t{% if panier is defined %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"align-items-center-row\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if total_qtt is defined and total_qtt > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>({{ total_qtt }})</b>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t{# User is authenticated #}
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\tConnecté en tant que :
\t\t\t\t\t\t\t\t\t\t<b>{{ app.user.userIdentifier }}</b>,
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{# User is not authenticated #}
\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-white\" href=\"{{path('app_login')}}\">Connexion</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</header>

\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t<div class=\"alert alert-success text-center\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t{% for message in app.flashes('error') %}
\t\t\t\t\t<div class=\"alert alert-danger text-center\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}


\t\t\t\t{% block body %}{% endblock %}

\t\t\t\t<footer class=\"footer mt-auto rounded mnb\">
\t\t\t\t\t<ul class=\"justify-content-center row mb-0 mt-2 px-0\">
\t\t\t\t\t\t<div class=\"col-7 col-md-4 row justify-content-center\">
\t\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0 col-2 col-md-1 mx-3 p-2\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-fluid\" src=\"{{asset(image_dir ~ 'facebook-svgrepo-com.svg')}}\" alt=\"socials_facebook\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0 col-2 col-md-1 mx-3 p-2\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-fluid \" src=\"{{asset(image_dir ~ 'twitter-154-svgrepo-com.svg')}}\" alt=\"socials_instagram\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0 col-2 col-md-1 mx-3 p-2\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-fluid\" src=\"{{asset(image_dir ~ 'instagram-167-svgrepo-com.svg')}}\" alt=\"socials_twitter\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0 col-2 col-md-1 mx-3 p-2\">
\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-fluid\" src=\"{{asset(image_dir ~ 'onlyfans-svgrepo-com.svg')}}\" alt=\"socials_onlyfans\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</div>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"d-flex justify-content-center mx-0 px-0\">
\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0\">
\t\t\t\t\t\t\t<a href=\"{{path('app_cgu')}}\">Politique de confidentialité</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-group-item bg-transparent border-0\">
\t\t\t\t\t\t\t<a href=\"{{path('app_ml')}}\">Mentions légales</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</footer>
\t\t\t</div>
\t\t</div>

\t\t{% block javascripts %}
\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}
\t</body>
</html></body></html></body></html>{# EX LIEN <a class=\"nav-link\" href=\"{{ path('app_profil') }}\">Profil</a> #}
", "base.html.twig", "/home/stagiaire/Bureau/the_district_symfony/templates/base.html.twig");
    }
}
