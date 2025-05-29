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

/* profile/partials/pagination_bloc_reservations_annulees.html.twig */
class __TwigTemplate_bef0861bfbceb736b6a0a8da2d73e0f6 extends Template
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
        yield "<nav aria-label=\" ...\">
\t\t<ul class=\"pagination\">
\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link ";
        // line 4
        if ((($context["noPage"] ?? null) == 1)) {
            yield "disabled";
        }
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_listeAnnoncesPagine", ["noPage" => (($context["noPage"] ?? null) - 1), "nombreDeLignes" =>         // line 5
($context["reservationsAnnuleesCount"] ?? null), "tag" => "wc-cancelled"]), "html", null, true);
        yield "\" tabindex=\"-1\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.precedent", [], "liste_annonces"), "html", null, true);
        yield "</a>
\t\t\t</li>
\t\t\t";
        // line 7
        if ((($context["noPage"] ?? null) > 1)) {
            // line 8
            yield "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_listeAnnoncesPagine", ["noPage" => 1, "nombreDeLignes" =>             // line 10
($context["reservationsAnnuleesCount"] ?? null), "tag" => "wc-cancelled"]), "html", null, true);
            yield "\">1<span class=\"sr-only\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 14
        yield "\t\t\t";
        if ((($context["noPage"] ?? null) > 2)) {
            // line 15
            yield "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 20
        yield "\t\t\t<li class=\"page-item active\">
\t\t\t\t<a class=\"page-link\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_listeAnnoncesPagine", ["noPage" => ($context["noPage"] ?? null), "nombreDeLignes" =>         // line 22
($context["reservationsAnnuleesCount"] ?? null), "tag" => "wc-cancelled"]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["noPage"] ?? null), "html", null, true);
        yield "<span class=\"sr-only\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 25
        if (((($context["pages_reservations_cancelled"] ?? null) - ($context["noPage"] ?? null)) > 1)) {
            // line 26
            yield "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"\">...<span class=\"sr-only\"></span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</li>
\t\t";
        }
        // line 32
        yield "\t\t";
        if (((($context["pages_reservations_cancelled"] ?? null) - ($context["noPage"] ?? null)) > 0)) {
            // line 33
            yield "\t\t\t<li class=\"page-item\">
\t\t\t\t<a class=\"page-link\" href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_listeAnnoncesPagine", ["noPage" => ($context["pages_reservations_cancelled"] ?? null), "nombreDeLignes" =>             // line 35
($context["reservationsAnnuleesCount"] ?? null), "tag" => "wc-cancelled"]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pages_reservations_cancelled"] ?? null), "html", null, true);
            yield "<span class=\"sr-only\"></span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 39
        yield "\t\t<li class=\"page-item ";
        if ((($context["noPage"] ?? null) == ($context["pages_reservations_cancelled"] ?? null))) {
            yield "disabled";
        }
        yield "\">
\t\t\t<a class=\"page-link\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_listeAnnoncesPagine", ["noPage" => (($context["noPage"] ?? null) + 1), "nombreDeLignes" =>         // line 41
($context["reservationsAnnuleesCount"] ?? null), "tag" => "wc-cancelled"]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.suivant", [], "liste_annonces"), "html", null, true);
        yield "
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/partials/pagination_bloc_reservations_annulees.html.twig";
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
        return array (  128 => 41,  127 => 40,  120 => 39,  111 => 35,  110 => 34,  107 => 33,  104 => 32,  96 => 26,  94 => 25,  86 => 22,  85 => 21,  82 => 20,  75 => 15,  72 => 14,  65 => 10,  64 => 9,  61 => 8,  59 => 7,  52 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/partials/pagination_bloc_reservations_annulees.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profile/partials/pagination_bloc_reservations_annulees.html.twig");
    }
}
