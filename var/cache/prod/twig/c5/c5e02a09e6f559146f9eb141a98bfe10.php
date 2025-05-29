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

/* home/index.html.twig */
class __TwigTemplate_d2784057aa6549124c9f34e2b86d7802 extends Template
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

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "homeLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("homeLayout.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "\t";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

\t<link rel=\"icon\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\" sizes=\"32x32\"/>
\t<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
\t<meta name=\"msapplication-TileImage\" content=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
\t<meta name=\"title\" content=\"";
        // line 9
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "home"]);
        yield "\">
\t<meta name=\"description\" content=\"";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "home"]);
        yield "\">
\t<link rel=\"canonical\" href=\"https://www.trustandmarket.com/";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 11), "getLocale", [], "method", false, false, false, 11), "html", null, true);
        yield "\">
\t";
        // line 13
        yield "\t<meta property=\"og:site_name\" content=\"Trust&Market\">
\t<meta property=\"og:title\" content=\"";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "home"]);
        yield "\">
\t<meta property=\"og:description\" content=\"";
        // line 15
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "home"]);
        yield "\">
\t<meta property=\"og:image\" content=\"";
        // line 16
        if (($context["bloc10"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bloc10"] ?? null), "optionValue", [], "any", false, false, false, 16), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/cover.jpg")), "html", null, true);
        }
        yield "\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home")), "html", null, true);
        yield "\">
\t";
        // line 20
        yield "
\t";
        // line 22
        yield "\t<meta name=\"twitter:card\" content=\"summary_large_image\"> <meta name=\"twitter:creator\" content=\"Kbr Global\">
\t<meta name=\"twitter:site\" content=\"@trustandmarket\">
\t<meta name=\"twitter:title\" content=\"";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "home"]);
        yield "\">
\t<meta name=\"twitter:description\" content=\"";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "home"]);
        yield "\">
\t<meta name=\"twitter:image\" content=\"";
        // line 26
        if (($context["bloc1"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc1"] ?? null), "optionValue", [], "any", false, false, false, 26), "|||")) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-photo.jpg"), "html", null, true);
        }
        yield "\">
\t<meta name=\"twitter:image:alt\" content=\"";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "home"]);
        yield "\">
\t";
        // line 29
        yield "
\t";
        // line 31
        yield "\t<script type=\"application/ld+json\">
\t\t{
\t\t\t\"@context\": \"https://schema.org\",
\t\t\t\"@type\": \"Organization\",
\t\t\t\"name\": \"Trust & Market\",
\t\t\t\"legalName\" : \"SAS KBR GLOBAL\",
\t\t\t\"url\": \"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home")), "html", null, true);
        yield "\",
\t\t\t\"image\":\"";
        // line 38
        if (($context["bloc10"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bloc10"] ?? null), "optionValue", [], "any", false, false, false, 38), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/cover.jpg"), "html", null, true);
        }
        yield "\",
\t\t\t\"telephone\": \"+33 1 85 42 14 91\",
\t\t\t\"email\": \"contact@kbr-global.com\",
\t\t\t\"logo\" : \"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\",
\t\t\t\"foundingDate\": \"2017\",
\t\t\t\"founders\": [{
\t\t\t\t\"@type\": \"Person\",
\t\t\t\t\"name\": \"Kalide Brassier\"
\t\t\t}],
\t\t\t\"address\": {
\t\t\t\t\"@type\": \"PostalAddress\",
\t\t\t\t\"addressLocality\": \"CHELLES\",
\t\t\t\t\"postalCode\": \"77500\",
\t\t\t\t\"streetAddress\": \"1 Rue Rejane Ruel\",
\t\t\t\t\"addressCountry\": \"FR\"
\t\t\t},
\t\t\t\"sameAs\": [
\t\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t\t]
\t\t}
\t</script>

\t";
        // line 65
        yield "\t<link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css\"/>
";
        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 69
        yield "\t";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield "
\t|
\t";
        // line 71
        if ( !(null === ($context["meta_page"] ?? null))) {
            // line 72
            yield "\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["meta_page"] ?? null), "postTitle", [], "any", false, false, false, 72), "html", null, true);
            yield "
\t\t";
        } else {
            // line 73
            yield "Trust &amp; Market |
\t\t";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.titre"), "html", null, true);
            yield "
\t";
        }
        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 79
        yield "\t";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

\t<!-- Your custom styles (optional) -->
\t<link href=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css\">
\t<link href=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/home.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 90
        yield "\t";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 94
        yield "\t";
        yield from $this->yieldParentBlock("navigation", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 99
        yield "\t<main class=\"text-center\">
\t\t<div class=\"container\" style=\"max-width: 60rem;display: none;\">
\t\t\t<div class=\"row\"></div>
\t\t</div>
\t\t<div class=\"container\" style=\"max-width: 60rem;padding: 1rem;\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 toi\">
\t\t\t\t\t<div class=\"com-preview\">
\t\t\t\t\t\t<div class=\"com-preview-media-container\">
\t\t\t\t\t\t\t<a class=\"com-preview-media__image\" href=\"";
        // line 108
        if (($context["bloc12"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 108) == (($_v1 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc12"] ?? null), "optionValue", [], "any", false, false, false, 108), "|||")) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null))) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 108), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "photographe", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
\t\t\t\t\t\t\t   style=\"background-image:url(";
        // line 109
        if (($context["bloc12"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc12"] ?? null), "optionValue", [], "any", false, false, false, 109), "|||")) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[1] ?? null) : null), "html", null, true);
        } else {
            yield "https://unsplash.it/800/600?image=696";
        }
        yield ");box-shadow: inset 0 0 0 2000px rgba(6, 48, 66, 0.35);\"></a>
\t\t\t\t\t\t\t<h3 class=\"com-preview-media__text\">
\t\t\t\t\t\t\t\t";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.decouvrez_musique"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h3 style=\"margin-top: 2rem;\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.decouvrez_les_services"), "html", null, true);
        yield "</h3>
\t\t\t\t<div class=\"col-md-12\" style=\"padding: 0;\">
\t\t\t\t\t<div id=\"news-slider\" class=\"owl-carousel\">
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-photograph overlay lazy carroussel_image\" data-src=\"";
        // line 122
        if (($context["bloc1"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc1"] ?? null), "optionValue", [], "any", false, false, false, 122), "|||")) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-photo.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 123
        if (($context["bloc1"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 123) == (($_v4 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc1"] ?? null), "optionValue", [], "any", false, false, false, 123), "|||")) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[0] ?? null) : null))) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 123), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "photographe", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.photographe"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-musicien overlay lazy carroussel_image\" data-src=\"";
        // line 129
        if (($context["bloc2"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc2"] ?? null), "optionValue", [], "any", false, false, false, 129), "|||")) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-musicien.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 130
        if (($context["bloc2"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 130) == (($_v6 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc2"] ?? null), "optionValue", [], "any", false, false, false, 130), "|||")) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 130), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "musiciens", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.musicien"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-prod-musicale overlay lazy carroussel_image\" data-src=\"";
        // line 136
        if (($context["bloc3"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc3"] ?? null), "optionValue", [], "any", false, false, false, 136), "|||")) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-production-musicale.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 137
        if (($context["bloc3"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 137) == (($_v8 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc3"] ?? null), "optionValue", [], "any", false, false, false, 137), "|||")) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 137), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-denregistrement", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-enregistrement"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-grp-d-musiq overlay lazy carroussel_image\" data-src=\"";
        // line 143
        if (($context["bloc4"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc4"] ?? null), "optionValue", [], "any", false, false, false, 143), "|||")) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-group-music.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 144
        if (($context["bloc4"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 144) == (($_v10 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc4"] ?? null), "optionValue", [], "any", false, false, false, 144), "|||")) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 144), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "groupes-de-musique", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.groupe-de-musique"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<div class=\"box-prestation box-chorale overlay lazy carroussel_image\" data-src=\"";
        // line 149
        if (($context["bloc5"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v11 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc5"] ?? null), "optionValue", [], "any", false, false, false, 149), "|||")) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-chorale.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 150
        if (($context["bloc5"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 150) == (($_v12 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc5"] ?? null), "optionValue", [], "any", false, false, false, 150), "|||")) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 150), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "chorale-gospel", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.chorale"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-stud-photo overlay lazy carroussel_image\" data-src=\"";
        // line 155
        if (($context["bloc6"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v13 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc6"] ?? null), "optionValue", [], "any", false, false, false, 155), "|||")) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-stud-photo.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 156
        if (($context["bloc6"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 156) == (($_v14 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc6"] ?? null), "optionValue", [], "any", false, false, false, 156), "|||")) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 156), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-photo", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-photo"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-realisation-vid overlay lazy carroussel_image\" data-src=\"";
        // line 162
        if (($context["bloc7"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v15 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc7"] ?? null), "optionValue", [], "any", false, false, false, 162), "|||")) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-realisation-vid.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 163
        if (($context["bloc7"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 163) == (($_v16 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc7"] ?? null), "optionValue", [], "any", false, false, false, 163), "|||")) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 163), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "realisation-video", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.realisation-video"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-evenementiels overlay lazy carroussel_image\" data-src=\"";
        // line 169
        if (($context["bloc8"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v17 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc8"] ?? null), "optionValue", [], "any", false, false, false, 169), "|||")) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-evenementiels.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 170
        if (($context["bloc8"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 170) == (($_v18 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc8"] ?? null), "optionValue", [], "any", false, false, false, 170), "|||")) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 170), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "evenementiels", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.evenementiel"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"post-slide\">
\t\t\t\t\t\t\t<a class=\"hover-orange\" href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"box-prestation box-stud-vid overlay lazy carroussel_image\" data-src=\"";
        // line 176
        if (($context["bloc9"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v19 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc9"] ?? null), "optionValue", [], "any", false, false, false, 176), "|||")) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-studio-video.jpg"), "html", null, true);
        }
        yield "\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 177
        if (($context["bloc9"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 177) == (($_v20 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc9"] ?? null), "optionValue", [], "any", false, false, false, 177), "|||")) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 177), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-video", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\" class=\"prestation-link lazyload\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-video"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h3>";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.decouvrez_les_produits"), "html", null, true);
        yield "</h3>
\t\t\t\t<div class=\"col-md-12 toi\">
\t\t\t\t\t<div class=\"com-preview\">
\t\t\t\t\t\t<div class=\"com-preview-media-container\">
\t\t\t\t\t\t\t<a class=\"com-preview-media__image\" href=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "produits", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        yield "\" style=\"background-image:url(";
        if (($context["bloc11"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bloc11"] ?? null), "optionValue", [], "any", false, false, false, 188), "html", null, true);
        } else {
            yield "https://unsplash.it/800/600?image=696";
        }
        yield ");box-shadow: inset 0 0 0 2000px rgba(6, 48, 66, 0.35);\"></a>
\t\t\t\t\t\t\t<h3 class=\"com-preview-media__text\">
\t\t\t\t\t\t\t\t";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.produits_offres"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h3 class=\"mt-4\">";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.derniers_articles"), "html", null, true);
        yield "</h3>
\t\t\t\t<div class=\"cartearticles row\">
\t\t\t\t\t";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["blog"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 199
            yield "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<a href=\"";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "post_name", [], "any", false, false, false, 200)])), "html", null, true);
            yield "\" style=\"text-decoration: none;\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"img-cover\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imagePost", [], "any", false, false, false, 203), "html", null, true);
            yield "\" class=\"lazy\" alt=\"article-cover\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t\t\t<h4 style=\"text-overflow: ellipsis;font-size: 1.25rem;\">";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "post_title", [], "any", false, false, false, 206), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>

\t<div class=\"siteorigin-widget-tinymce textwidget\">
\t\t<div id=\"video-popup-light\" style=\"display: none;\">
\t\t\t<a class=\"boxclose\" id=\"video-popup-close\"></a>
\t\t\t<iframe src=\"\" width=\"100%\" height=\"100%\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe>
\t\t</div>

\t\t<div id=\"video-popup-fade\" style=\"display: none;\"></div>

\t\t";
        // line 226
        yield "\t</div>
\t";
        // line 227
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 230
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 231
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 235
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

\t<!-- Full background slider jQuery plugin -->
\t<script src=\"https://code.jquery.com/ui/1.10.2/jquery-ui.min.js\" integrity=\"sha256-FgiaQnQazF/QCrF9qSvpRY6PACn9ZF8VnlgqfqD1LsE=\" crossorigin=\"anonymous\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js")), "html", null, true);
        yield "\" defer></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js\" defer></script>
\t<script>
\t\t/* \tconst clickC = document.querySelector(\".desc\");
\tclickC.addEventListener(\"click\", function () {
\t\tconst r = Math.round(Math.random() * 255 + 0);
\t\tconst g = Math.round(Math.random() * 255 + 0);
\t\tconst b = Math.round(Math.random() * 255 + 0);
\t\tdocument.body.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
\t}); */

\$(document).ready(function () {
\$(\"#news-slider\").owlCarousel({
items: 3,
itemsDesktop: [
1199, 3
],
itemsDesktopSmall: [
980, 2
],
itemsMobile: [
600, 1
],
navigation: true,
navigationText: [
\"\", \"\"
],
pagination: true,
autoPlay: true
});
});
\$(\"#yourproject-iconed-link, #fermeur\").click(function (e) {
\te.preventDefault();
\t\$(\"#dialoguons\").fadeToggle(\"slow\", \"linear\");
});

\$(\".closeBtnModal\").click(function (e) {
\te.preventDefault();
\t\$(\"#newsletterModal\").modal('toggle');
});


setTimeout(function () {
\tvar f = document.querySelectorAll('iframe')[0];
\tlet url = \$(\"#youtube_url\").val();
\tconsole.log(url);
\tf.src = 'https://www.youtube.com/embed/' + url;
\tconsole.log('FB loaded after 2s');
}, 100);

\$(document).ready(function () {
var docWidth = document.documentElement.offsetWidth;

[].forEach.call(document.querySelectorAll('*'), function (el) {
if (el.offsetWidth > docWidth) {
console.log(el);
}
});

// Hambuger menu icon
\$('.animated-button-icon').on('click', function () {
\$('.animated-icon2').toggleClass('open');
});

// Recherche avancer
\$(\"#recherche-avancer\").click(function () {
\$(\"#sectionAvancer\").toggleClass('d-none');
});

// first thing turn Hide Menu Search bar
\$(\"#frLang\").hide();
// toggle language for English
\$(\"#enLang\").click(function () {
\$(\"#dropdownLang\").html(\"<span class='flag-icon flag-icon-us'> </span>  EN\");
\$(\"#enLang\").hide();
\$(\"#frLang\").toggle(\"slide\");
});
// toggle language for French
\$(\"#frLang\").click(function () {
\$(\"#dropdownLang\").html(\"<span class='flag-icon flag-icon-fr'> </span>  FR\");
\$(\"#frLang\").hide();
\$(\"#enLang\").toggle(\"slide\");
});

});

\t</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  784 => 239,  776 => 235,  769 => 234,  761 => 231,  754 => 230,  747 => 227,  744 => 226,  729 => 212,  717 => 206,  711 => 203,  705 => 200,  702 => 199,  698 => 198,  693 => 196,  684 => 190,  673 => 188,  666 => 184,  639 => 177,  631 => 176,  605 => 170,  597 => 169,  571 => 163,  563 => 162,  537 => 156,  529 => 155,  504 => 150,  496 => 149,  471 => 144,  463 => 143,  437 => 137,  429 => 136,  403 => 130,  395 => 129,  368 => 123,  360 => 122,  352 => 117,  343 => 111,  334 => 109,  314 => 108,  303 => 99,  296 => 98,  288 => 94,  281 => 93,  273 => 90,  266 => 89,  259 => 86,  253 => 83,  249 => 82,  242 => 79,  235 => 78,  227 => 74,  224 => 73,  218 => 72,  216 => 71,  210 => 69,  203 => 68,  197 => 65,  171 => 41,  161 => 38,  157 => 37,  149 => 31,  146 => 29,  142 => 27,  134 => 26,  130 => 25,  126 => 24,  122 => 22,  119 => 20,  115 => 18,  106 => 16,  102 => 15,  98 => 14,  95 => 13,  91 => 11,  87 => 10,  83 => 9,  79 => 8,  75 => 7,  71 => 6,  65 => 4,  58 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/home/index.html.twig");
    }
}
