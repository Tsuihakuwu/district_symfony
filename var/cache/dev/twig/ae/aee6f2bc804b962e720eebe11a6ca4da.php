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

/* @image_directory/favicon.png */
class __TwigTemplate_83bf1aff95dac22a987727cc6ab6227a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@image_directory/favicon.png"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@image_directory/favicon.png"));

        // line 1
        echo "�PNG

\000\000\000
IHDR\000\000\000 \000\000\000 \000\000\000�Tg�\000\000\000gAMA\000\000���a\000\000\000sRGB\000���\000\000\000*PLTE�G���Bo�}��Qy�/b�_���۝Qڡ��n����NԒ��E\000\000\000�IDAT(�c`T��-��ϴDI)KI E�I�5I�k�GFB��&���1A�@.�Spwyyy!D Q�Pp��͹sgN
�\t\"�&\000X�)����x\000P \\PpCǙ܂��@� %�\000�P&WV%%U\$�s4 {N���%I�5�)j\tJxp��l�\000\000���#�@�\000\000\000\000IEND�B`�";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@image_directory/favicon.png";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("�PNG

\000\000\000IHDR\000\000\000 \000\000\000 \000\000\000�Tg�\000\000\000gAMA\000\000���a\000\000\000sRGB\000���\000\000\000*PLTE�G���Bo�}��Qy�/b�_���۝Qڡ��n����NԒ��E\000\000\000�IDAT(�c`T��-��ϴDI)KI E�I�5I�k�GFB��&���1A�@.�Spwyyy!D Q�Pp��͹sgN
�\t\"�&\000X�)����x\000P \\PpCǙ܂��@� %�\000�P&WV%%U\$�s4 {N���%I�5�)j\tJxp��l�\000\000���#�@�\000\000\000\000IEND�B`�", "@image_directory/favicon.png", "/home/stagiaire/Bureau/the_district_symfony/public/img/favicon.png");
    }
}
