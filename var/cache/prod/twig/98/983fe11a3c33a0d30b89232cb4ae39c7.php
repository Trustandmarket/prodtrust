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

/* annonces/sousMenuAnnonces.html.twig */
class __TwigTemplate_a739ec4b5f363821dc9172e1bf2414cd extends Template
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
        yield "<div class=\"col-md-4 mb-2\">
\t<ul class=\"list-group text-left px-1\">
\t\t<li class=\"list-group-item\">
\t\t\t<a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annonces");
        yield "\" class=\"prestation-list-item list-grp-head\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-titre"), "html", null, true);
        yield "</a>
\t\t\t<ul class=\"list-group list-group-flush text-left\">
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"";
        // line 7
        if ((($context["reservationsDevisEnAttenteCount"] ?? null) != 0)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "reservation-devis-en-attente"]);
        }
        yield "\">
\t\t\t\t\t\t";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-attente"), "html", null, true);
        yield "
\t\t\t\t\t\t<span class=\"rsv-en-annulees\">(";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reservationsDevisEnAttenteCount"] ?? null), "html", null, true);
        yield ")</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"";
        // line 14
        if ((($context["reservationsEnCoursCount"] ?? null) != 0)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "reservations-en-cours"]);
        }
        yield "\">
\t\t\t\t\t\t";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-en-cours"), "html", null, true);
        yield "
\t\t\t\t\t\t<span class=\"rsv-en-cours\">(";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reservationsEnCoursCount"] ?? null), "html", null, true);
        yield ")</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"";
        // line 20
        if ((($context["reservationsTermineesCount"] ?? null) != 0)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "reservations-terminees"]);
        }
        yield "\">
\t\t\t\t\t\t";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-terminees"), "html", null, true);
        yield "
\t\t\t\t\t\t<span class=\"rsv-en-term\">(";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reservationsTermineesCount"] ?? null), "html", null, true);
        yield ")</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"rsv-list-item\" href=\"";
        // line 26
        if ((($context["reservationsAnnuleesCount"] ?? null) != 0)) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "reservations-annulees"]);
        }
        yield "\">
\t\t\t\t\t\t";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-annulees"), "html", null, true);
        yield "
\t\t\t\t\t\t<span class=\"rsv-en-annulees\">(";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reservationsAnnuleesCount"] ?? null), "html", null, true);
        yield ")</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33), "roles", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 34
            yield "\t\t\t";
            if ((($context["r"] == "ROLE_AUTO_ENTREPRENEUR") || ($context["r"] == "ROLE_SOCIETE"))) {
                // line 35
                yield "\t\t\t\t<li class=\"list-group-item  current-menu-item\">
\t\t\t\t\t<a class=\"list-grp-head\" href=\"";
                // line 36
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annonces");
                yield "\">
\t\t\t\t\t\t";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-titre"), "html", null, true);
                yield "</a>
\t\t\t\t\t<ul class=\"list-group list-group-flush text-left\">
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 40
                if ((($context["annoncesBrouillonCount"] ?? null) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "annonces-en-brouillon"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-en-brouillon"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-brll\">(";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["annoncesBrouillonCount"] ?? null), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 47
                if ((($context["annoncesModerationCount"] ?? null) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "annonces-en-moderation"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-en-moderation"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-mod\">(";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["annoncesModerationCount"] ?? null), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 54
                if ((($context["annoncesRejeteesCount"] ?? null) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "annonces-rejetees"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-rejetees"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-rej\">(";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["annoncesRejeteesCount"] ?? null), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 61
                if ((($context["annoncesPublieesCount"] ?? null) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "annonces-publiees"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-publiees"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-pub\">(";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["annoncesPublieesCount"] ?? null), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 68
                if ((($context["devisEnAttenteCount"] ?? null) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "devis-en-attente"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-attente"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-pub\">(";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["devisEnAttenteCount"] ?? null), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t<a class=\"annonce-list-item\" href=\"";
                // line 75
                if ((($context["devisEnBrouillonCount"] ?? null) != 0)) {
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "devis-en-brouillon"]);
                }
                yield "\">
\t\t\t\t\t\t\t\t";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-brouillon"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t<span class=\"ann-pub\">(";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["devisEnBrouillonCount"] ?? null), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t<a class=\"prestation-list-item list-grp-head ";
                // line 83
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 83), "getAbonnements", [], "method", false, false, false, 83)) == 0)) {
                } elseif ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 83), "getAbonnements", [], "method", false, false, false, 83)) > 0) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 84
($context["app"] ?? null), "user", [], "any", false, false, false, 84), "getAbonnements", [], "method", false, false, false, 84)), "isAbonnementActif", [], "method", false, false, false, 84)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 85
($context["app"] ?? null), "user", [], "any", false, false, false, 85), "getAbonnements", [], "method", false, false, false, 85)), "getOffre", [], "method", false, false, false, 85), "isCreerAnnonce", [], "method", false, false, false, 85))) {
                } else {
                    yield "disabled";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_creerAnnonces");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-publier"), "html", null, true);
                yield "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</li>
\t\t";
            }
            // line 90
            yield "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "</ul></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces/sousMenuAnnonces.html.twig";
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
        return array (  278 => 91,  272 => 90,  257 => 85,  256 => 84,  254 => 83,  245 => 77,  241 => 76,  235 => 75,  227 => 70,  223 => 69,  217 => 68,  209 => 63,  205 => 62,  199 => 61,  191 => 56,  187 => 55,  181 => 54,  173 => 49,  169 => 48,  163 => 47,  155 => 42,  151 => 41,  145 => 40,  139 => 37,  135 => 36,  132 => 35,  129 => 34,  125 => 33,  117 => 28,  113 => 27,  107 => 26,  100 => 22,  96 => 21,  90 => 20,  83 => 16,  79 => 15,  73 => 14,  65 => 9,  61 => 8,  55 => 7,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "annonces/sousMenuAnnonces.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/annonces/sousMenuAnnonces.html.twig");
    }
}
