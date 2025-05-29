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

/* annonces/liste_resultat_content.html.twig */
class __TwigTemplate_9a8aa0fb76510f27881a6da8049269fc extends Template
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
        yield "<!-- list des profil -->
<!-- list des prestations -->

";
        // line 4
        if (($context["p_empty_search_text"] ?? null)) {
            // line 5
            yield "    <div class=\"filter-text mr-2\"
         style=\"margin-top: -2rem;margin-bottom: 3rem;\">";
            // line 6
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["p_empty_search_text"] ?? null), "postContent", [], "any", false, false, false, 6);
            yield "</div>
";
        }
        // line 8
        yield "<nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
        <!-- First breadcrumb gets <h1> -->
        <li class=\"breadcrumb-item\">
            <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        yield "\">
                <h1 class=\"breadcrumb-h1\">";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.annonce", [], "liste_annonces");
        yield "</h1>
            </a>
        </li>

        <!-- If type_prestation exists, it gets <h2> -->
        ";
        // line 18
        if ((($context["type_prestation"] ?? null) != "")) {
            // line 19
            yield "            <li class=\"breadcrumb-item\" aria-current=\"page\">
                <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => ($context["type_prestation"] ?? null), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "\">
                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                // line 22
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 22) == ($context["type_prestation"] ?? null))) {
                    // line 23
                    yield "                            <h2 class=\"breadcrumb-h2\">
                                ";
                    // line 24
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "locale", [], "any", false, false, false, 24) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 24) != ""))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 24), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 24), "html", null, true);
                    }
                    // line 25
                    yield "                            </h2>
                        ";
                }
                // line 27
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "                </a>
            </li>
        ";
        }
        // line 31
        yield "
        <!-- If services_proposes exists, it gets <h3> -->
        ";
        // line 33
        if ((($context["services_proposes"] ?? null) != "")) {
            // line 34
            yield "            <li class=\"breadcrumb-item active\" aria-current=\"page\">
                <a href=\"#\">
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sous_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                // line 37
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 37) == ($context["services_proposes"] ?? null))) {
                    // line 38
                    yield "                            <h3 class=\"breadcrumb-h3\">
                                ";
                    // line 39
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 39), "locale", [], "any", false, false, false, 39) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 39) != ""))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 39), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 39), "html", null, true);
                    }
                    // line 40
                    yield "                            </h3>
                        ";
                }
                // line 42
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "                </a>
            </li>
        ";
        }
        // line 46
        yield "    </ol>

</nav>
<div class=\"row mb-4\">
    ";
        // line 50
        yield from $this->loadTemplate("annonces/partialDynamicPagination.html.twig", "annonces/liste_resultat_content.html.twig", 50)->unwrap()->yield($context);
        // line 51
        yield "    <div class=\"col-md-8 text-right\">
        <form action=\"\" class=\"form-inline float-right\">
            <h6 class=\"filter-text mr-2\">";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.titre", [], "liste_annonces");
        yield "</h6>
            <select name=\"prix\" id=\"triPrix\" class=\"browser-default custom-select mr-2 mb-2\">
                <option value=\"all\">";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.prix", [], "liste_annonces");
        yield "</option>
                <option value=\"0\">";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.croissant", [], "liste_annonces");
        yield "</option>
                <option value=\"1\">";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.decroissant", [], "liste_annonces");
        yield "</option>
            </select>&nbsp;
            <select name=\"date-dajout\" id=\"triDate\" class=\"browser-default custom-select mr-2 mb-2\">
                <option value=\"all\">";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.date-ajout", [], "liste_annonces");
        yield "</option>
                <option value=\"1\">";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.recent", [], "liste_annonces");
        yield "
                    &gt; ";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.ancien", [], "liste_annonces");
        yield "</option>
                <option value=\"0\">";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.ancien", [], "liste_annonces");
        yield "
                    &lt; ";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.recent", [], "liste_annonces");
        yield "</option>
            </select>
        </form>
    </div>
</div>
<div class=\"row isotope owl-theme\">
    ";
        // line 70
        if ( !(null === ($context["listeAnnonces"] ?? null))) {
            // line 71
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["listeAnnonces"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                // line 72
                yield "            <div class=\"col-md-4 mb-5 clearfix isotope-grid\">
                <!-- Card -->
                <div class=\"card\">
                    <!-- Card image -->
                    ";
                // line 76
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 76))) {
                    // line 77
                    yield "                        <div class=\"view overlay isotope-item\" style=\"height:160px; border-bottom: 4px solid #f17b30\">
                            <img loading=\"lazy\" class=\"card-img-top\" width=\"100%\"
                                 src=\"";
                    // line 79
                    if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 79))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 79), 0, [], "any", false, false, false, 79), "guid", [], "any", false, false, false, 79), ["www." => ""]), "html", null, true);
                    } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 79))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 79), 0, [], "any", false, false, false, 79), "guid", [], "any", false, false, false, 79), ["www." => ""]), "html", null, true);
                    } else {
                        yield "https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg";
                    }
                    yield "\"
                                 alt=\"Card image cap\">
                            <div class=\"btnh1-display\">
                                <button class=\"btn-wish btnh1\" data-id=\"";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 82), "html", null, true);
                    yield "\">
                                    ";
                    // line 83
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 83), ($context["text_wishlist"] ?? null))) {
                        yield "<i style=\"color: red;\"
                                                                         class=\"fas fa-heart\"></i> ";
                    } else {
                        // line 85
                        yield "                                        <i class=\"far fa-heart\"></i> ";
                    }
                    yield "</button>
                            </div>
                            <a href=\"";
                    // line 87
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 87) != "")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 87)]), "html", null, true);
                    }
                    yield "\">
                                <div class=\"mask rgba-white-slight\"></div>
                            </a>
                        </div>
                    ";
                }
                // line 92
                yield "                    <!-- Card content -->
                    <div class=\"card-body\">
                        <!-- Title -->
                        <h4 class=\"card-title fs-18\">";
                // line 95
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 95), "locale", [], "any", false, false, false, 95) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 95) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 95), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre", [], "any", false, false, false, 95), "html", null, true);
                }
                yield "</h4>
                        <!-- Category -->
                        <h5 class=\"card-sub-title fs-15\"><a
                                    href=\"";
                // line 98
                if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 98)) == "produits")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "produits", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 99), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 100
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 100), "locale", [], "any", false, false, false, 100) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 100) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 100), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 100), "html", null, true);
                }
                yield "</a>
                        </h5>
                        <!-- Sub Category -->
                        <h5 class=\"card-sub-category fs-18\">
                            <a href=\"";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 104), "services_proposes" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorieSlug", [], "any", false, false, false, 104), "code_postal_ville" => ""]), "html", null, true);
                yield "\"> ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 104), "locale", [], "any", false, false, false, 104) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 104) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 104), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie", [], "any", false, false, false, 104), "html", null, true);
                }
                yield "</a>
                        </h5>
                        <!-- Price -->
                        <p class=\"annonce-price fs-24\"><span data-stars=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 107), 0), "html", null, true);
                yield "\" class=\"number\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 107), "html", null, true);
                yield "</span> ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 107) != null)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 107), "html", null, true);
                } else {
                    yield "€";
                }
                // line 108
                yield "                        </p>
                    </div>
                    <div class=\"card-footer bg-transparent\">
                        <a target=\"_blank\" href=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 111), "id_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_author", [], "any", false, false, false, 111)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 111), "html", null, true);
                yield "</a>
                    </div>
                </div>
                <!-- Card -->
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['liste'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "    ";
        }
        // line 118
        yield "</div>
";
        // line 119
        yield from $this->loadTemplate("annonces/partialDynamicPagination.html.twig", "annonces/liste_resultat_content.html.twig", 119)->unwrap()->yield($context);
        // line 120
        yield "<!-- list des prestations -->";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces/liste_resultat_content.html.twig";
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
        return array (  355 => 120,  353 => 119,  350 => 118,  347 => 117,  333 => 111,  328 => 108,  318 => 107,  306 => 104,  294 => 100,  289 => 99,  283 => 98,  273 => 95,  268 => 92,  258 => 87,  252 => 85,  247 => 83,  243 => 82,  231 => 79,  227 => 77,  225 => 76,  219 => 72,  214 => 71,  212 => 70,  203 => 64,  199 => 63,  195 => 62,  191 => 61,  187 => 60,  181 => 57,  177 => 56,  173 => 55,  168 => 53,  164 => 51,  162 => 50,  156 => 46,  151 => 43,  145 => 42,  141 => 40,  135 => 39,  132 => 38,  129 => 37,  125 => 36,  121 => 34,  119 => 33,  115 => 31,  110 => 28,  104 => 27,  100 => 25,  94 => 24,  91 => 23,  88 => 22,  84 => 21,  80 => 20,  77 => 19,  75 => 18,  67 => 13,  63 => 12,  57 => 8,  52 => 6,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "annonces/liste_resultat_content.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/annonces/liste_resultat_content.html.twig");
    }
}
