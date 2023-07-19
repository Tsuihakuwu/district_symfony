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

/* catalogue/index.html.twig */
class __TwigTemplate_5d4232800d5c89af0fc2b96e188ba319 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/index.html.twig", 1);
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

        echo "Index
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
        echo "\t<main class=\"mt-4\">

\t\t<div class=\"mx-3 mt-5 mb-4 p-3 rounded mnb\">
\t\t\t<form action=\"#\" method=\"GET\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<input type=\"text\" name=\"search\" id=\"search\" placeholder=\"Votre recherche\" class=\"mx-3\">
\t\t\t\t\t<input type=\"submit\" value=\"Rechercher\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<h1 class=\"d-none d-md-flex justify-content-center mt-2\">Catégories</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"justify-content-around row d-none d-md-flex\">

\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topsix"]) || array_key_exists("topsix", $context) ? $context["topsix"] : (function () { throw new RuntimeError('Variable "topsix" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 23
            echo "\t\t\t\t<div class=\"card mb-3 mx-3 border-0 p-0 shd text-white col-3\">
\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_platwithcat", ["categorie_id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t<h5 class=\"card-header\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "libelle", [], "any", false, false, false, 25), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<div class=\"imgof\">
\t\t\t\t\t\t\t<img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 27, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["cat"], "image", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" class=\"card-img-bottom\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "image", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
\t\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t</div>

\t\t<h3 class=\"d-none d-md-flex justify-content-center\">Nos plats les plus populaires</h3>
\t\t<div class=\"d-none d-md-flex justify-content-around flex-wrap mt-3\">

\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mp_plat"]) || array_key_exists("mp_plat", $context) ? $context["mp_plat"] : (function () { throw new RuntimeError('Variable "mp_plat" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plats"]) {
            // line 40
            echo "
\t\t\t\t<div class=\"card mb-3 border-0 shd text-white\">
\t\t\t\t\t<h5 class=\"card-header d-flex justify-content-between\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plats"], "libelle", [], "any", false, false, false, 44), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plats"], "prix", [], "any", false, false, false, 48), "html", null, true);
            echo "€
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</h5>
\t\t\t\t\t<div class=\"imgof\">
\t\t\t\t\t\t<img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["image_dir"]) || array_key_exists("image_dir", $context) ? $context["image_dir"] : (function () { throw new RuntimeError('Variable "image_dir" does not exist.', 53, $this->source); })()) . twig_get_attribute($this->env, $this->source, $context["plats"], "image", [], "any", false, false, false, 53))), "html", null, true);
            echo "\" class=\"card-img-bottom\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plats"], "image", [], "any", false, false, false, 53), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"";
            // line 56
            echo twig_escape_filter($this->env, ("/panier/add/" . twig_get_attribute($this->env, $this->source, $context["plats"], "id", [], "any", false, false, false, 56)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-light btn-sm text-black mb-3 mt-3\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t<path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "

\t\t\t<hr class=\"w-75 mx-auto mt-0 mb-1\">
\t\t</div>

\t\t";
        // line 160
        echo "\t</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 160,  195 => 68,  177 => 56,  169 => 53,  161 => 48,  154 => 44,  148 => 40,  144 => 39,  135 => 32,  122 => 27,  117 => 25,  113 => 24,  110 => 23,  106 => 22,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index
{% endblock %}

{% block body %}
\t<main class=\"mt-4\">

\t\t<div class=\"mx-3 mt-5 mb-4 p-3 rounded mnb\">
\t\t\t<form action=\"#\" method=\"GET\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<input type=\"text\" name=\"search\" id=\"search\" placeholder=\"Votre recherche\" class=\"mx-3\">
\t\t\t\t\t<input type=\"submit\" value=\"Rechercher\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>

\t\t<h1 class=\"d-none d-md-flex justify-content-center mt-2\">Catégories</h1>
\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t<div class=\"justify-content-around row d-none d-md-flex\">

\t\t\t{% for cat in topsix %}
\t\t\t\t<div class=\"card mb-3 mx-3 border-0 p-0 shd text-white col-3\">
\t\t\t\t\t<a href=\"{{ path('app_platwithcat', {'categorie_id':cat.id}) }}\">
\t\t\t\t\t\t<h5 class=\"card-header\">{{cat.libelle}}</h5>
\t\t\t\t\t\t<div class=\"imgof\">
\t\t\t\t\t\t\t<img src=\"{{asset(image_dir ~ cat.image)}}\" class=\"card-img-bottom\" alt=\"{{cat.image}}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t\t<hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t</div>

\t\t<h3 class=\"d-none d-md-flex justify-content-center\">Nos plats les plus populaires</h3>
\t\t<div class=\"d-none d-md-flex justify-content-around flex-wrap mt-3\">

\t\t\t{% for plats in mp_plat %}

\t\t\t\t<div class=\"card mb-3 border-0 shd text-white\">
\t\t\t\t\t<h5 class=\"card-header d-flex justify-content-between\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{{plats.libelle}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t{{plats.prix}}€
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</h5>
\t\t\t\t\t<div class=\"imgof\">
\t\t\t\t\t\t<img src=\"{{asset(image_dir ~ plats.image)}}\" class=\"card-img-bottom\" alt=\"{{plats.image}}\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t<a href=\"{{ '/panier/add/' ~ plats.id }}\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-light btn-sm text-black mb-3 mt-3\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t<path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\"/>
\t\t\t\t\t\t\t\t\t<path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t{% endfor %}


\t\t\t<hr class=\"w-75 mx-auto mt-0 mb-1\">
\t\t</div>

\t\t{# 
\t\t\t\t
\t\t\t\t        <h3 class=\"d-flex d-md-none justify-content-center\">Tout nos plats</h3>
\t\t\t\t        <div class=\"d-flex d-md-none justify-content-around flex-wrap mt-3\">
\t\t\t\t
\t\t\t\t            <?php foreach (\$tab3 as \$plat_all) : ?>
\t\t\t\t
\t\t\t\t                <div class=\"card mb-3 border-0 shd text-white\">
\t\t\t\t                    <h5 class=\"card-header\"><?= \$plat_all->libelle ?></h5>
\t\t\t\t                    <div class=\"imgof\">
\t\t\t\t                        <img src=\"asset/img/food/<?= \$plat_all->image ?>\" class=\"card-img-bottom\" alt=\"<?= \$plat_all->image ?>\">
\t\t\t\t                    </div>
\t\t\t\t                    <div class=\"d-flex justify-content-center my-2\">
\t\t\t\t                        <p class=\"card-text\">
\t\t\t\t                            <?= \$plat_all->prix ?>€
\t\t\t\t                        </p>
\t\t\t\t                    </div>
\t\t\t\t                    <div class=\"d-flex align-items-center\">
\t\t\t\t                        <button type=\"button\" class=\"btn-light btn-sm text-black mb-3\">
\t\t\t\t                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-cart-plus\" viewBox=\"0 0 16 16\">
\t\t\t\t                                <path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\" />
\t\t\t\t                                <path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\" />
\t\t\t\t                            </svg>
\t\t\t\t                        </button>
\t\t\t\t                    </div>
\t\t\t\t                </div>
\t\t\t\t
\t\t\t\t            <?php endforeach; ?>
\t\t\t\t
\t\t\t\t        </div>
\t\t\t\t
\t\t\t\t    <?php else :
\t\t\t\t        \$search = \$_GET['search'];
\t\t\t\t        include('dao.php');
\t\t\t\t        \$result_cat = search_cat(\$search);
\t\t\t\t        \$result_plat = search_plat(\$search);
\t\t\t\t    ?>
\t\t\t\t
\t\t\t\t        <h2 class=\"d-none d-md-flex justify-content-center mt-2\">Résultats catégorie</h2>
\t\t\t\t        <hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t\t\t        <div class=\"justify-content-around d-none d-md-flex\">
\t\t\t\t            <?php if (empty(\$result_cat)) : ?>
\t\t\t\t                <h5>Aucun résultat dans les catégories !</h5>
\t\t\t\t            <?php else : ?>
\t\t\t\t                <?php foreach (\$result_cat as \$search_cat) : ?>
\t\t\t\t                    <div class=\"card mb-3 mx-3 border-0 p-0 shd text-white col-3\">
\t\t\t\t                        <a href=\"/?page=detail&c_id=<?= \$search_cat->id_categorie ?>\">
\t\t\t\t                            <h5 class=\"card-header\"><?= \$search_cat->libelle ?></h5>
\t\t\t\t                            <div class=\"imgof\">
\t\t\t\t                                <img src=\"asset/img/category/<?= \$search_cat->image ?>\" class=\"card-img-bottom\" alt=\"<?= \$search_cat->image ?>\">
\t\t\t\t                            </div>
\t\t\t\t                        </a>
\t\t\t\t                    </div>
\t\t\t\t                <?php endforeach; ?>
\t\t\t\t            <?php endif ?>
\t\t\t\t        </div>
\t\t\t\t
\t\t\t\t        <h2 class=\"d-none d-md-flex justify-content-center mt-2\">Résultats plats</h2>
\t\t\t\t        <hr class=\"w-75 mx-auto mt-0 mb-3\">
\t\t\t\t        <div class=\"d-none d-md-flex justify-content-around flex-wrap mt-3\">
\t\t\t\t            <?php if (empty(\$result_plat)) : ?>
\t\t\t\t                <h5>Aucun résultat dans les plats !</h5>
\t\t\t\t            <?php else : ?>
\t\t\t\t                <?php foreach (\$result_plat as \$search_plat) : ?>
\t\t\t\t                    <div class=\"card mb-3 border-0 shd text-white\">
\t\t\t\t                        <h5 class=\"card-header d-flex justify-content-between\">
\t\t\t\t                            <div>
\t\t\t\t                                <?= \$search_plat->libelle ?>
\t\t\t\t                            </div>
\t\t\t\t                            <div class=\"d-flex\">
\t\t\t\t                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-cart-plus mx-3\" viewBox=\"0 0 16 16\">
\t\t\t\t                                    <path d=\"M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z\" />
\t\t\t\t                                    <path d=\"M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\" />
\t\t\t\t                                </svg>
\t\t\t\t                                <p class=\"card-text\">
\t\t\t\t                                    <?= \$search_plat->prix ?>€
\t\t\t\t                                </p>
\t\t\t\t                            </div>
\t\t\t\t                        </h5>
\t\t\t\t                        <div class=\"imgof\">
\t\t\t\t                            <img src=\"asset/img/food/<?= \$search_plat->image ?>\" class=\"card-img-bottom\" alt=\"<?= \$search_plat->image ?>\">
\t\t\t\t                        </div>
\t\t\t\t                    </div>
\t\t\t\t                <?php endforeach; ?>
\t\t\t\t            <?php endif ?>
\t\t\t\t        </div>
\t\t\t\t    <?php endif ?>#}
\t</main>

{% endblock %}
", "catalogue/index.html.twig", "/home/stagiaire/Bureau/the_district_symfony/templates/catalogue/index.html.twig");
    }
}
