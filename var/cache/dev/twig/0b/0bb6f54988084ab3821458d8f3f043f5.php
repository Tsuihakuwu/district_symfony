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

/* cgu/index.html.twig */
class __TwigTemplate_8d9c3367f8fdb226ac1dbad4033e41b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgu/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cgu/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cgu/index.html.twig", 1);
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

        echo "Conditions Générales d'Utilisation
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
\t\t<div class=\"mnb rounded p-5\">
\t\t\t<h1>Politique de confidentialité</h1>
\t\t\t<p>Chez The District, notre mission est d’aider les restaurateurs à augmenter leur chiffre d’affaires, en proposant leurs plats à la vente à emporter, ou en livraison, par l’intermédiaire d’un service de click and collect personnalisé et intuitif. Si nous nous engageons à créer ainsi une grande communauté alimentaire, nous nous devons de protéger la vie privée des membres de cette communauté The District. Cette protection inclut la protection des données personnelles de tous les visiteurs et utilisateurs du site internet, ainsi que des autres extensions (application mobile, espace restaurateur, espace client).</p>
\t\t\t<p>La présente Politique de Confidentialité explique comment The District collecte et utilise vos données personnelles. En utilisant les services de The District, vous consentez à ce que The District utilise vos données personnelles de la manière décrite dans la présente Politique de Confidentialité.</p>
\t\t\t<p>Soyez assuré que The District s’est engagé à collecter et utiliser vos données personnelles de manière responsable, sécurisée et en toute transparence. Si vous avez le moindre doute, ou une question, contactez-nous à matthias@thedistrict.fr.</p>

\t\t\t<h3>Informations que nous collectons sur vous, et les raisons de cette collecte</h3>

\t\t\t<p>Si vous souhaitez obtenir de plus amples informations sur une section particulière, vous pouvez nous contacter.</p>
\t\t\t<p>Lorsque vous rejoignez The District, nous collectons les informations d’enregistrement, afin que nous puissions :</p>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tCréer votre compte, et que votre Restaurant apparaisse sur notre plateforme en ligne.</li>
\t\t\t\t<li>
\t\t\t\t\tVous identifier lorsque vous vous connectez à votre espace personnalisé Restaurateur.</li>
\t\t\t\t<li>
\t\t\t\t\tVous payer des montants dûs relatifs à l’ensemble de vos commandes.</li>
\t\t\t\t<li>
\t\t\t\t\tVous tenir informé des modifications et/ou mises à jour de nos services.</li>
\t\t\t\t<li>
\t\t\t\t\tVérifier que vous avez les licences et certifications appropriées pour gérer votre Restaurant.</li>
\t\t\t\t<li>
\t\t\t\t\tVous faire bénéficier au mieux du système de géolocalisation.</li>
\t\t\t</ul>

\t\t\t<p>Vous fournir des informations lorsque des transactions sont réalisés en ligne sur votre Restaurant :</p>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tTraitement des commandes et facturation</li>
\t\t\t\t<li>
\t\t\t\t\tDemandes client</li>
\t\t\t\t<li>Actualisation des statuts des commandes</li>
\t\t\t\t<li>Résoudre des problèmes pouvant survenir</li>
\t\t\t\t<li>Etudier, analyser, développer et améliorer nos services</li>
\t\t\t\t<li>Prévenir de toute fraude et autres actes qui pourraient enfreindre la loi, et vous protéger.</li>
\t\t\t</ul>
\t\t\t<p>
\t\t\t\tCommentaires, axes d’amélioration, et autres informations essentielles</p>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tRépondre à vos questions, vos demandes, vos besoins</li>
\t\t\t\t<li>Etudier, analyser, développer et améliorer nos services</li>
\t\t\t\t<li>Informations sur votre activité sur le site The District.</li>
\t\t\t</ul>
\t\t\t<p>Vous êtes informés que nous utilisons des cookies et technologies similaires afin de mesurer et analyser l’efficacité de nos services, personnaliser et optimiser notre communication, vous fournir des services géolocalisés.</p>

\t\t\t<p>Nous traitons des informations que vous nous fournissez volontairement, ainsi que des informations que nous collectons de manière automatique, ou que nous pouvons obtenir de sources tierces. La collecte et le traitement de ces informations servent à améliorer quotidiennement nos services, faciliter son utilisation et sa performance.</p>
\t\t\t<h3>2. Partage des données</h3>

\t\t\t<p>Nous nous assurons toujours d’avoir mis en place la sécurité maximale, et le cas échéant les garanties contractuelles appropriées pour protéger vos données personnelles avant de les partager. Nous pouvons partager vos données personnelles avec les destinataires suivants :</p>
\t\t\t<ul>
\t\t\t\t<li>Les clients : ils passent commande, dans le cadre de nos services, auprès de votre Restaurant.</li>
\t\t\t\t<li>
\t\t\t\t\tLes tiers communicants : tous les tiers qui supportent nos services, comme nos partenaires marketing, nos partenaires de livraison, et toutes sociétés avec lesquelles nous sommes en partenariat pour améliorer nos services.</li>
\t\t\t\t<li>
\t\t\t\t\tLes organismes d’application de la loi : agence gouvernementale, organismes réglementaires, tribunaux ou autre tiers compétents, nous obligeant à divulguer des informations en vertu de la législation et des réglementations applicables.</li>
\t\t\t</ul>
\t\t\t<h3>3. Traitement des données</h3>

\t\t\t<p>Nous collections et utilisons vos données personnelles pour la raison principale suivante : s’assurer que les clients commandent en ligne et achètent des produits dans votre Restaurant via notre plateforme de click and collect. Nous pouvons aussi traiter vos données personnelles de manière à servir nos intérêts commerciaux légitimes.</p>
\t\t\t<h3>4. Sécurité des données</h3>

\t\t\t<p>Chez The District, nous accordons une grande importance à la sécurité et la protection de vos données personnelles, notamment contre tout accès non autorisé, tout traitement illégal, destruction, perte. Notre équipe technique met en oeuvre des mesures afin de garantir la sécurité de vos informations.</p>
\t\t\t<h3>5. Conservation des données</h3>

\t\t\t<p>Chez The District, nous conservons l’ensemble de vos données le temps nécessaire pour satisfaire aux finalités décrites dans cette Politique de Confidentialité. Par exemple, toute la période durant laquelle votre Restaurant est référencé et présent sur notre plateforme. Dans le cadre de la tenue de nos dossiers, et le respect de nos obligations légales, nous pouvons être à-même de conserver certains éléments de vos données personnelles pour une période ultérieure à votre désactivation et suppression de compte.</p>
\t\t\t<h3>6. Droits relatifs à la protection de vos données</h3>

\t\t\t<p>Vous êtes en droit de nous contacter afin de nous demander de supprimer vos données personnelles ou de limiter leur traitement. Pour se faire, vous pouvez nous contacter sur : alex@The District.fr.</p>
\t\t\t<h3>7. Liens vers d’autres sites</h3>

\t\t\t<p>Chez The District, nous sommes et serons amenés à réaliser des partenariats stratégiques, des liens d’affiliation avec des annonceurs et autres partenaires de différents secteurs. Nos sites web et espaces personnels peuvent donc contenir des liens vers des sites tiers. Si vous suivez ces liens, sachez que The District n’est pas responsable de ces sites, qui ont leurs propres Politiques de confidentialité, et mènent leurs propres politiques commerciales.</p>
\t\t\t<h3>8. Mise à jour de cette Politique de Confidentialité</h3>

\t\t\t<p>Nous pouvons, à tout moment et sans que vous en soyez préalablement informé, mettre à jour cette Politique de Confidentialité, pour plusieurs raisons : modifications légales, techniques, commerciales par exemple. Nous vous encourageons donc à consulter régulièrement cette page afin de vous tenir informé de sa mise à jour, des dernières informations sur notre Politique de Confidentialité.</p>
\t\t\t<h3>9. Coordonnées pour nous contacter</h3>

\t\t\t<p>Pour toute question, demande d’informations supplémentaires, ou préoccupation concernant notre Politique de Confidentialité ou nos services, vous pouvez nous contacter sur : matthias@thedistrict.fr.</p>
\t\t</div>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cgu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Conditions Générales d'Utilisation
{% endblock %}

{% block body %}
\t<main>
\t\t<div class=\"mnb rounded p-5\">
\t\t\t<h1>Politique de confidentialité</h1>
\t\t\t<p>Chez The District, notre mission est d’aider les restaurateurs à augmenter leur chiffre d’affaires, en proposant leurs plats à la vente à emporter, ou en livraison, par l’intermédiaire d’un service de click and collect personnalisé et intuitif. Si nous nous engageons à créer ainsi une grande communauté alimentaire, nous nous devons de protéger la vie privée des membres de cette communauté The District. Cette protection inclut la protection des données personnelles de tous les visiteurs et utilisateurs du site internet, ainsi que des autres extensions (application mobile, espace restaurateur, espace client).</p>
\t\t\t<p>La présente Politique de Confidentialité explique comment The District collecte et utilise vos données personnelles. En utilisant les services de The District, vous consentez à ce que The District utilise vos données personnelles de la manière décrite dans la présente Politique de Confidentialité.</p>
\t\t\t<p>Soyez assuré que The District s’est engagé à collecter et utiliser vos données personnelles de manière responsable, sécurisée et en toute transparence. Si vous avez le moindre doute, ou une question, contactez-nous à matthias@thedistrict.fr.</p>

\t\t\t<h3>Informations que nous collectons sur vous, et les raisons de cette collecte</h3>

\t\t\t<p>Si vous souhaitez obtenir de plus amples informations sur une section particulière, vous pouvez nous contacter.</p>
\t\t\t<p>Lorsque vous rejoignez The District, nous collectons les informations d’enregistrement, afin que nous puissions :</p>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tCréer votre compte, et que votre Restaurant apparaisse sur notre plateforme en ligne.</li>
\t\t\t\t<li>
\t\t\t\t\tVous identifier lorsque vous vous connectez à votre espace personnalisé Restaurateur.</li>
\t\t\t\t<li>
\t\t\t\t\tVous payer des montants dûs relatifs à l’ensemble de vos commandes.</li>
\t\t\t\t<li>
\t\t\t\t\tVous tenir informé des modifications et/ou mises à jour de nos services.</li>
\t\t\t\t<li>
\t\t\t\t\tVérifier que vous avez les licences et certifications appropriées pour gérer votre Restaurant.</li>
\t\t\t\t<li>
\t\t\t\t\tVous faire bénéficier au mieux du système de géolocalisation.</li>
\t\t\t</ul>

\t\t\t<p>Vous fournir des informations lorsque des transactions sont réalisés en ligne sur votre Restaurant :</p>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tTraitement des commandes et facturation</li>
\t\t\t\t<li>
\t\t\t\t\tDemandes client</li>
\t\t\t\t<li>Actualisation des statuts des commandes</li>
\t\t\t\t<li>Résoudre des problèmes pouvant survenir</li>
\t\t\t\t<li>Etudier, analyser, développer et améliorer nos services</li>
\t\t\t\t<li>Prévenir de toute fraude et autres actes qui pourraient enfreindre la loi, et vous protéger.</li>
\t\t\t</ul>
\t\t\t<p>
\t\t\t\tCommentaires, axes d’amélioration, et autres informations essentielles</p>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\tRépondre à vos questions, vos demandes, vos besoins</li>
\t\t\t\t<li>Etudier, analyser, développer et améliorer nos services</li>
\t\t\t\t<li>Informations sur votre activité sur le site The District.</li>
\t\t\t</ul>
\t\t\t<p>Vous êtes informés que nous utilisons des cookies et technologies similaires afin de mesurer et analyser l’efficacité de nos services, personnaliser et optimiser notre communication, vous fournir des services géolocalisés.</p>

\t\t\t<p>Nous traitons des informations que vous nous fournissez volontairement, ainsi que des informations que nous collectons de manière automatique, ou que nous pouvons obtenir de sources tierces. La collecte et le traitement de ces informations servent à améliorer quotidiennement nos services, faciliter son utilisation et sa performance.</p>
\t\t\t<h3>2. Partage des données</h3>

\t\t\t<p>Nous nous assurons toujours d’avoir mis en place la sécurité maximale, et le cas échéant les garanties contractuelles appropriées pour protéger vos données personnelles avant de les partager. Nous pouvons partager vos données personnelles avec les destinataires suivants :</p>
\t\t\t<ul>
\t\t\t\t<li>Les clients : ils passent commande, dans le cadre de nos services, auprès de votre Restaurant.</li>
\t\t\t\t<li>
\t\t\t\t\tLes tiers communicants : tous les tiers qui supportent nos services, comme nos partenaires marketing, nos partenaires de livraison, et toutes sociétés avec lesquelles nous sommes en partenariat pour améliorer nos services.</li>
\t\t\t\t<li>
\t\t\t\t\tLes organismes d’application de la loi : agence gouvernementale, organismes réglementaires, tribunaux ou autre tiers compétents, nous obligeant à divulguer des informations en vertu de la législation et des réglementations applicables.</li>
\t\t\t</ul>
\t\t\t<h3>3. Traitement des données</h3>

\t\t\t<p>Nous collections et utilisons vos données personnelles pour la raison principale suivante : s’assurer que les clients commandent en ligne et achètent des produits dans votre Restaurant via notre plateforme de click and collect. Nous pouvons aussi traiter vos données personnelles de manière à servir nos intérêts commerciaux légitimes.</p>
\t\t\t<h3>4. Sécurité des données</h3>

\t\t\t<p>Chez The District, nous accordons une grande importance à la sécurité et la protection de vos données personnelles, notamment contre tout accès non autorisé, tout traitement illégal, destruction, perte. Notre équipe technique met en oeuvre des mesures afin de garantir la sécurité de vos informations.</p>
\t\t\t<h3>5. Conservation des données</h3>

\t\t\t<p>Chez The District, nous conservons l’ensemble de vos données le temps nécessaire pour satisfaire aux finalités décrites dans cette Politique de Confidentialité. Par exemple, toute la période durant laquelle votre Restaurant est référencé et présent sur notre plateforme. Dans le cadre de la tenue de nos dossiers, et le respect de nos obligations légales, nous pouvons être à-même de conserver certains éléments de vos données personnelles pour une période ultérieure à votre désactivation et suppression de compte.</p>
\t\t\t<h3>6. Droits relatifs à la protection de vos données</h3>

\t\t\t<p>Vous êtes en droit de nous contacter afin de nous demander de supprimer vos données personnelles ou de limiter leur traitement. Pour se faire, vous pouvez nous contacter sur : alex@The District.fr.</p>
\t\t\t<h3>7. Liens vers d’autres sites</h3>

\t\t\t<p>Chez The District, nous sommes et serons amenés à réaliser des partenariats stratégiques, des liens d’affiliation avec des annonceurs et autres partenaires de différents secteurs. Nos sites web et espaces personnels peuvent donc contenir des liens vers des sites tiers. Si vous suivez ces liens, sachez que The District n’est pas responsable de ces sites, qui ont leurs propres Politiques de confidentialité, et mènent leurs propres politiques commerciales.</p>
\t\t\t<h3>8. Mise à jour de cette Politique de Confidentialité</h3>

\t\t\t<p>Nous pouvons, à tout moment et sans que vous en soyez préalablement informé, mettre à jour cette Politique de Confidentialité, pour plusieurs raisons : modifications légales, techniques, commerciales par exemple. Nous vous encourageons donc à consulter régulièrement cette page afin de vous tenir informé de sa mise à jour, des dernières informations sur notre Politique de Confidentialité.</p>
\t\t\t<h3>9. Coordonnées pour nous contacter</h3>

\t\t\t<p>Pour toute question, demande d’informations supplémentaires, ou préoccupation concernant notre Politique de Confidentialité ou nos services, vous pouvez nous contacter sur : matthias@thedistrict.fr.</p>
\t\t</div>
\t</main>
{% endblock %}
", "cgu/index.html.twig", "/home/stagiaire/Bureau/the_district_symfony/templates/cgu/index.html.twig");
    }
}
