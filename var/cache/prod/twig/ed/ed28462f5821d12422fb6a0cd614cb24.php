<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* annonces/partialDynamicPagination.html.twig */
class __TwigTemplate_3201a37cfba6b04b39cda7b921a3a421 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "                                ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["listeAnnonces"] ?? null)) > 0)) {
            // line 2
            yield "\t\t\t\t\t\t\t\t<div class=\"col-md-4\" id=\"dynamicPagination>
\t\t\t\t\t\t\t\t\t<nav aria-label=\"...\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 6
            if ((array_key_exists("nom_commercial", $context) && ($context["nom_commercial"] ?? null))) {
                // line 7
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link ";
                if ((($context["noPage"] ?? null) == 1)) {
                    yield "disabled";
                }
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" =>                 // line 8
($context["nom_commercial"] ?? null), "id_commercial" => ($context["id_commercial"] ?? null), "noPage" => (                // line 9
($context["noPage"] ?? null) - 1)]), "html", null, true);
                yield "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   tabindex=\"-1\">";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.precedent", [], "liste_annonces"), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 12
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link ";
                if ((($context["noPage"] ?? null) == 1)) {
                    yield "disabled";
                }
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" =>                 // line 13
($context["type_prestation"] ?? null), "services_proposes" =>                 // line 14
($context["services_proposes"] ?? null), "code_postal_ville" =>                 // line 15
($context["code_postal_ville"] ?? null), "noPage" => (                // line 16
($context["noPage"] ?? null) - 1)]), "html", null, true);
                yield "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   tabindex=\"-1\">";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.precedent", [], "liste_annonces"), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 19
            yield "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 20
            if ((($context["noPage"] ?? null) > 1)) {
                // line 21
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 22
                if ((array_key_exists("nom_commercial", $context) && ($context["nom_commercial"] ?? null))) {
                    // line 23
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" =>                     // line 24
($context["nom_commercial"] ?? null), "id_commercial" => ($context["id_commercial"] ?? null), "noPage" => 1]), "html", null, true);
                    // line 25
                    yield "\">1<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 27
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" =>                     // line 28
($context["type_prestation"] ?? null), "services_proposes" =>                     // line 29
($context["services_proposes"] ?? null), "code_postal_ville" =>                     // line 30
($context["code_postal_ville"] ?? null), "noPage" => 1]), "html", null, true);
                    // line 31
                    yield "\">1<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 33
                yield "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 35
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["noPage"] ?? null) > 2)) {
                // line 36
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 40
            yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item active\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 41
            if ((array_key_exists("nom_commercial", $context) && ($context["nom_commercial"] ?? null))) {
                // line 42
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" =>                 // line 43
($context["nom_commercial"] ?? null), "id_commercial" => ($context["id_commercial"] ?? null), "noPage" =>                 // line 44
($context["noPage"] ?? null)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["noPage"] ?? null), "html", null, true);
                yield "<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 46
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" =>                 // line 47
($context["type_prestation"] ?? null), "services_proposes" =>                 // line 48
($context["services_proposes"] ?? null), "code_postal_ville" =>                 // line 49
($context["code_postal_ville"] ?? null), "noPage" =>                 // line 50
($context["noPage"] ?? null)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["noPage"] ?? null), "html", null, true);
                yield "<span class=\"sr-only\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 53
            yield "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 54
            if (((($context["pages"] ?? null) - ($context["noPage"] ?? null)) > 1)) {
                // line 55
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 59
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($context["pages"] ?? null) - ($context["noPage"] ?? null)) > 0)) {
                // line 60
                yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 61
                if ((array_key_exists("nom_commercial", $context) && ($context["nom_commercial"] ?? null))) {
                    // line 62
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" =>                     // line 63
($context["nom_commercial"] ?? null), "id_commercial" => ($context["id_commercial"] ?? null), "noPage" =>                     // line 64
($context["pages"] ?? null)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pages"] ?? null), "html", null, true);
                    yield "<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 66
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" =>                     // line 67
($context["type_prestation"] ?? null), "services_proposes" =>                     // line 68
($context["services_proposes"] ?? null), "code_postal_ville" =>                     // line 69
($context["code_postal_ville"] ?? null), "noPage" =>                     // line 70
($context["pages"] ?? null)]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pages"] ?? null), "html", null, true);
                    yield "<span class=\"sr-only\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 73
                yield "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 76
            yield "\t\t\t\t\t\t\t\t\t\t\t<li class=\"page-item ";
            if ((($context["noPage"] ?? null) == ($context["pages"] ?? null))) {
                yield "disabled";
            }
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 77
            if ((array_key_exists("nom_commercial", $context) && ($context["nom_commercial"] ?? null))) {
                // line 78
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" =>                 // line 79
($context["nom_commercial"] ?? null), "id_commercial" => ($context["id_commercial"] ?? null), "noPage" => (                // line 80
($context["noPage"] ?? null) + 1)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.suivant", [], "liste_annonces"), "html", null, true);
                yield "<span class=\"sr-only\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 82
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" =>                 // line 83
($context["type_prestation"] ?? null), "services_proposes" =>                 // line 84
($context["services_proposes"] ?? null), "code_postal_ville" =>                 // line 85
($context["code_postal_ville"] ?? null), "noPage" => (                // line 86
($context["noPage"] ?? null) + 1)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.suivant", [], "liste_annonces"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 89
            yield "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t";
        }
        // line 94
        yield "\t\t\t\t\t\t\t\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces/partialDynamicPagination.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  242 => 94,  235 => 89,  227 => 86,  226 => 85,  225 => 84,  224 => 83,  222 => 82,  215 => 80,  214 => 79,  212 => 78,  210 => 77,  203 => 76,  198 => 73,  190 => 70,  189 => 69,  188 => 68,  187 => 67,  185 => 66,  178 => 64,  177 => 63,  175 => 62,  173 => 61,  170 => 60,  167 => 59,  161 => 55,  159 => 54,  156 => 53,  148 => 50,  147 => 49,  146 => 48,  145 => 47,  143 => 46,  136 => 44,  135 => 43,  133 => 42,  131 => 41,  128 => 40,  122 => 36,  119 => 35,  115 => 33,  111 => 31,  109 => 30,  108 => 29,  107 => 28,  105 => 27,  101 => 25,  99 => 24,  97 => 23,  95 => 22,  92 => 21,  90 => 20,  87 => 19,  82 => 17,  78 => 16,  77 => 15,  76 => 14,  75 => 13,  69 => 12,  64 => 10,  60 => 9,  59 => 8,  53 => 7,  51 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "annonces/partialDynamicPagination.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/annonces/partialDynamicPagination.html.twig");
    }
}
