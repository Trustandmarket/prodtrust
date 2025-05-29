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

/* annonces/details.html.twig */
class __TwigTemplate_aa49f043f3a889d277850e84e62fb1ed extends Template
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
        return "otherLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("otherLayout.html.twig", "annonces/details.html.twig", 1);
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
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <link rel=\"icon\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\" sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\" sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
    <meta name=\"title\" content=\"";
        // line 10
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 10) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 10), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_title", [], "any", false, false, false, 10), "html", null, true);
        }
        yield "\">
    <meta name=\"description\" content=\"";
        // line 11
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 11), "locale", [], "any", false, false, false, 11) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 11) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 11)), "truncate", [160, "...", false], "method", false, false, false, 11), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_content", [], "any", false, false, false, 11)), "truncate", [160, "...", false], "method", false, false, false, 11), "html", null, true);
        }
        yield "\">
    <meta name=\"keywords\" content=\"";
        // line 12
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "locale", [], "any", false, false, false, 12) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorie_parent_en", [], "any", false, false, false, 12) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorie_parent_en", [], "any", false, false, false, 12), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParent", [], "any", false, false, false, 12), "html", null, true);
        }
        yield "\">

    <link rel=\"canonical\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_name", [], "any", false, false, false, 14)])), "html", null, true);
        yield "\">
    <link rel=\"shortlink\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_name", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\">
    <meta property=\"og:title\" content=\"";
        // line 16
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 16), "locale", [], "any", false, false, false, 16) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 16) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 16), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_title", [], "any", false, false, false, 16), "html", null, true);
        }
        yield "\">
    <meta property=\"og:description\" content=\"";
        // line 17
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 17), "locale", [], "any", false, false, false, 17) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 17) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 17)), "truncate", [160, "...", false], "method", false, false, false, 17), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_content", [], "any", false, false, false, 17)), "truncate", [160, "...", false], "method", false, false, false, 17), "html", null, true);
        }
        yield "\">
    <meta property=\"og:image\" content=\"";
        // line 18
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 18))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 18), 0, [], "any", false, false, false, 18), "guid", [], "any", false, false, false, 18), "html", null, true);
        } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "images_secondaires", [], "any", false, false, false, 18))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "images_secondaires", [], "any", false, false, false, 18), 0, [], "any", false, false, false, 18), "guid", [], "any", false, false, false, 18), "html", null, true);
        }
        yield "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_name", [], "any", false, false, false, 20)])), "html", null, true);
        yield "\">
    <meta property=\"og:locale\" content=\"fr\"/>
    <meta property=\"og:locale:alternate\" content=\"en\"/>

    ";
        // line 25
        yield "    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:creator\" content=\"Kbr Global\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\" content=\"";
        // line 28
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "locale", [], "any", false, false, false, 28) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 28) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 28), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_title", [], "any", false, false, false, 28), "html", null, true);
        }
        yield "\">
    <meta name=\"twitter:description\" content=\"";
        // line 29
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "locale", [], "any", false, false, false, 29) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 29) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 29)), "truncate", [160, "...", false], "method", false, false, false, 29), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_content", [], "any", false, false, false, 29)), "truncate", [160, "...", false], "method", false, false, false, 29), "html", null, true);
        }
        yield "\">
    <meta name=\"twitter:image\" content=\"";
        // line 30
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 30))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 30), 0, [], "any", false, false, false, 30), "guid", [], "any", false, false, false, 30), "html", null, true);
        } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "images_secondaires", [], "any", false, false, false, 30))) {
            yield "detailsAnnonce.images_secondaires.0.guid";
        }
        yield "\">
    <meta name=\"twitter:image:alt\" content=\"";
        // line 31
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 31))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 31), 0, [], "any", false, false, false, 31), "guid", [], "any", false, false, false, 31), "html", null, true);
        } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "images_secondaires", [], "any", false, false, false, 31))) {
            yield "detailsAnnonce.images_secondaires.0.guid";
        }
        yield "\">
    ";
        // line 33
        yield "
    ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentType", [], "any", false, false, false, 34) == "product_cat")) {
            // line 35
            yield "        <script type=\"application/ld+json\">
\t\t\t{
\t\t\t\t\"@context\": \"https://schema.org\",
\t\t\t\t\"@type\": \"product\",
\t\t\t\t\"brand\": \"Acme\",
\t\t\t\t\"logo\": \"http://www.example.com/logo.png\",
\t\t\t\t\"name\": \"";
            // line 41
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 41), "locale", [], "any", false, false, false, 41) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 41) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 41), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_title", [], "any", false, false, false, 41), "html", null, true);
            }
            yield "\",
\t\t\t\t\"image\": \"";
            // line 42
            if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 42))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 42), 0, [], "any", false, false, false, 42), "guid", [], "any", false, false, false, 42), "html", null, true);
            } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "images_secondaires", [], "any", false, false, false, 42))) {
                yield "detailsAnnonce.images_secondaires.0.guid";
            }
            yield "\",
\t\t\t\t\"description\": \"";
            // line 43
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 43), "locale", [], "any", false, false, false, 43) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 43) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 43)), "truncate", [160, "...", false], "method", false, false, false, 43), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_content", [], "any", false, false, false, 43)), "truncate", [160, "...", false], "method", false, false, false, 43), "html", null, true);
            }
            yield "\",
\t\t\t\t\"offers\": {
\t\t\t\t\t\"@type\": \"Offer\",
\t\t\t\t\t\"priceCurrency\": \"";
            // line 46
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 46))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 46), "metaValue", [], "any", false, false, false, 46), "html", null, true);
            } else {
                yield "€";
            }
            yield "\",
\t\t\t\t\t\"price\": \"";
            // line 47
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 47))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 47), "html", null, true);
            } else {
                yield "0";
            }
            yield "\",
\t\t\t\t\t\"availability\": \"http://schema.org/InStock\",
\t\t\t\t\t\"seller\": {
\t\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\t\"name\": \"Trust&Market\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}



        </script>
    ";
        } else {
            // line 60
            yield "        <script type=\"application/ld+json\">
\t\t{
\t\t\t\"@context\": \"http://schema.org/\",
\t\t\t\"@type\": \"Service\",
\t\t\t\"name\": \"";
            // line 64
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "locale", [], "any", false, false, false, 64) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 64) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 64), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_title", [], "any", false, false, false, 64), "html", null, true);
            }
            yield "\",
\t\t\t\"description\": \"";
            // line 65
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 65), "locale", [], "any", false, false, false, 65) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 65) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 65)), "truncate", [160, "...", false], "method", false, false, false, 65), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_content", [], "any", false, false, false, 65)), "truncate", [160, "...", false], "method", false, false, false, 65), "html", null, true);
            }
            yield "\",
\t\t\t\"provider\": {
\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\"name\": \"Trust&Market\"
\t\t\t},
\t\t\t\"image\": \"";
            // line 70
            if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 70))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 70), 0, [], "any", false, false, false, 70), "guid", [], "any", false, false, false, 70), "html", null, true);
            } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "images_secondaires", [], "any", false, false, false, 70))) {
                yield "detailsAnnonce.images_secondaires.0.guid";
            }
            yield "\",
\t\t\t\"offers\": {
\t\t\t\t\"@type\": \"Offer\",
\t\t\t\t\"priceCurrency\": \"";
            // line 73
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 73))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 73), "metaValue", [], "any", false, false, false, 73), "html", null, true);
            } else {
                yield "€";
            }
            yield "\",
\t\t\t\t\"price\": \"";
            // line 74
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 74))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 74), "html", null, true);
            } else {
                yield "0";
            }
            yield "\",
\t\t\t\t\"seller\": {
\t\t\t\t\t\"@type\": \"Organization\",
\t\t\t\t\t\"name\": \"Trust&Market\"
\t\t\t\t}
\t\t\t}
\t\t}



        </script>
    ";
        }
        // line 86
        yield "

";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust &amp; Market | ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 90), "locale", [], "any", false, false, false, 90) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 90) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 90)), "truncate", [45, true], "method", false, false, false, 90), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_title", [], "any", false, false, false, 90)), "truncate", [45, true], "method", false, false, false, 90), "html", null, true);
        }
        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <link href=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/home.min.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/voir-annonce.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\"
          integrity=\"sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

    <!-- <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css\"> -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css\"
          integrity=\"sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==\"
          crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
    <!-- Bootstrap toggle switch -->
    <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>


    <style>

        @media only screen and (max-width: 500px) {
            #dialoguons {
                width: 70%;
            }
        }

        @media only screen and (min-width: 501px) {
            #dialoguons {
                width: 40%;
            }
        }

        @media only screen and (min-width: 769) and (max-width: 1024px) {
            #dialoguons {
                width: 30%;
            }
        }

        @media only screen and (min-width: 1025px) {
            #dialoguons {
                width: 19%;
            }
        }

        @media only screen and (max-width: 800px) {
            .datepicker table {
                width: 100%;
            }

            .datepicker-inline {
                width: 100%;
            }

            .datepicker-days table {
                width: 100%;
            }

            .mode3 {
                margin-bottom: 3rem;
            }
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: \"|\";
        }

        .breadcrumb {
            background-color: white;
        }

        .breadcrumb a {
            color: #000000;
        }

        .p-pop-up1 {
            margin-bottom: 2rem;
        }

        .p-pop-titre1,
        .p-pop-titre2 {
            font-family: \"Palanquin Dark\";
        }

        .p-pop-content1 {
            background: #53b4a6;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-family: \"Source Sans Pro\";
        }

        .p-pop-content2 {
            background: black;
            color: white;
            padding: 10px;
            text-decoration: none;
            font-family: \"Source Sans Pro\";
        }

        .button_profil_sendmsg {
            width: 100%;
            display: flex;
            justify-content: end;
            align-items: center;
            margin: 0.5rem;
            padding: 0;
        }

        .prestation-link {
            text-align: center;
        }

        ul.slick-dots {
            position: absolute;
            bottom: -25px;
            display: block;
            width: 100%;
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;
            cursor: pointer;
        }

        .slick-dots li button {
            border-radius: 50%;
            font-size: 0;
            line-height: 0;
            display: block;
            width: 10px;
            height: 10px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:before {
            font-family: 'slick';
            font-size: 35px;
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 10px;
            height: 10px;
            content: '•';
            text-align: center;
            opacity: .25;
            color: black;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            color: black;
        }

        .btn-wish {
            background: transparent;
            border: none;
            /* margin: 87px; */
            /* font-size: 88px; */
            outline: none;
            color: grey;
        }

        .btnh1-display {
            display: flex;
            justify-content: end;
        }

        .btn i:hover {
            cursor: pointer;
        }

        button:focus {
            outline: none;
        }

        .item .btnh1-display {
            position: absolute;
            top: 10%;
            left: 95%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            font-size: 16px;
            border: none;
            cursor: pointer;
            z-index: 1;
        }

        .bloc-nom-commercial{
            display: flex;
            justify-content: space-between;
        }

    </style>
";
        yield from [];
    }

    // line 315
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 316
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 318
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 319
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 320
        yield "
    <!--Main Layout-->
    <main class=\"\">
        <div class=\"container\">
            <div class=\"mt-3\">
                ";
        // line 325
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["notice"], "method", false, false, false, 325));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 326
            yield "                    <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                        <strong>";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong>
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        yield "                <!-- Vu du profil -->
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb px-0\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 336
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a></li>
                        <li class=\"breadcrumb-item\">
                            <a target=\"_blank\"
                               href=\"";
        // line 339
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParent", [], "any", false, false, false, 339)) == "produits")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentSlug", [], "any", false, false, false, 339), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentSlug", [], "any", false, false, false, 340), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 341
        yield "\">";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 341), "locale", [], "any", false, false, false, 341) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorie_parent_en", [], "any", false, false, false, 341) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorie_parent_en", [], "any", false, false, false, 341), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParent", [], "any", false, false, false, 341), "html", null, true);
        }
        yield "</a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <a target=\"_blank\"
                               href=\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentSlug", [], "any", false, false, false, 345), "services_proposes" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "sousCategorieSlug", [], "any", false, false, false, 345), "code_postal_ville" => ""]), "html", null, true);
        yield "\">";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 345), "locale", [], "any", false, false, false, 345) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorie_en", [], "any", false, false, false, 345) != ""))) {
            // line 346
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorie_en", [], "any", false, false, false, 346), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "sousCategorie", [], "any", false, false, false, 346), "html", null, true);
        }
        yield "</a>
                        </li>
                    </ol>
                </nav>
                <div id=\"lectureInfo\" class=\"row\">
                    <div class=\"col-md-3 desktop-form\">
                        <div>
                            <h5 class=\"border-bottom pb-3\">
                                ";
        // line 354
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 354))) {
            // line 355
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 355), "html", null, true);
            yield "
                                ";
        } else {
            // line 357
            yield "                                    0
                                ";
        }
        // line 359
        yield "                                ";
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 359))) {
            // line 360
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 360), "metaValue", [], "any", false, false, false, 360), "html", null, true);
        } else {
            yield "€
                                ";
        }
        // line 362
        yield "                            </h5>
                            <h6 class=\"mt-4 mb-2\" ";
        // line 363
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentType", [], "any", false, false, false, 363) != "product_cat")) {
            yield " hidden ";
        }
        yield ">
                                <i class=\"fas fa-calendar\"></i>
                                ";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.disponibilites"), "html", null, true);
        yield "
                            </h6>
                            <p class=\"fs-14\" ";
        // line 367
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentType", [], "any", false, false, false, 367) != "product_cat")) {
            yield " hidden ";
        }
        yield ">
                                Sélectionner les dates de prestations souhaitées pour finaliser votre reservation.
                                <span class=\"calendar_infos\" data-html=\"true\" data-container=\"body\"
                                      data-toggle=\"popover2\" data-placement=\"top\" data-content=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"color:rgb(0, 82, 204);\"
                                                   class=\"fas fa-question-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
                            </p>
                            <form action=\"\">
                                <div class=\"multipleDatePicker md-form\" ";
        // line 376
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentType", [], "any", false, false, false, 376) != "product_cat")) {
            // line 377
            yield "hidden";
        }
        yield " value='' type='text'>
                                    <input type='hidden' class='DateField' value=''>
                                </div>
                                ";
        // line 380
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentType", [], "any", false, false, false, 380) != "product_cat")) {
            // line 381
            yield "                                    <div class=\"form-group\">
                                        <div class=\"form-group\">
                                            <label for=\"product_quantity\">";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.quantite"), "html", null, true);
            yield "</label>
                                            <select class=\"form-control\" id=\"product_quantity\" name=\"product_quantity\">
                                                <option selected>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                    </div>
                                ";
        }
        // line 399
        yield "                                <div class=\"col-md-12 md-form\">
                                    <p id=\"price\" ";
        // line 400
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentType", [], "any", false, false, false, 400) != "product_cat")) {
            yield " hidden ";
        }
        yield ">
                                        ";
        // line 401
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["datep"] ?? null)) > 0)) {
            // line 402
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["datep"] ?? null)), "html", null, true);
            yield "x";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 402), "html", null, true);
            yield "=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["datep"] ?? null)) * CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 402)), "html", null, true);
            yield "
                                            ";
            // line 403
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 403))) {
                // line 404
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 404), "metaValue", [], "any", false, false, false, 404), "html", null, true);
            } else {
                yield "€
                                            ";
            }
            // line 406
            yield "                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentType", [], "any", false, false, false, 406) != "product_cat")) {
            // line 407
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 407), "html", null, true);
            yield "
                                            ";
            // line 408
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 408))) {
                // line 409
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 409), "metaValue", [], "any", false, false, false, 409), "html", null, true);
            } else {
                yield "€
                                            ";
            }
            // line 411
            yield "                                        ";
        }
        // line 412
        yield "                                    </p>
                                    <button id=\"enregDates\" ";
        // line 413
        if (((($context["rupture"] ?? null) == 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentType", [], "any", false, false, false, 413) != "product_cat"))) {
            // line 414
            yield "disabled";
        }
        yield " class=\"btn btn-md btn-primary text-center\"
                                            type=\"submit\">
                                        ";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.ajouter-panier"), "html", null, true);
        yield "
                                    </button>
                                    ";
        // line 418
        if (((($context["rupture"] ?? null) == 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentType", [], "any", false, false, false, 418) != "product_cat"))) {
            // line 419
            yield "                                        <span id=\"rupture\" class=\"btn btn-md btn-warning text-center\">
\t\t\t\t\t\t\t\t\t";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.rupture"), "html", null, true);
            yield "</span>
                                    ";
        }
        // line 422
        yield "                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"col-md-9\">
                        <h1 class=\"pb-3 border-bottom\" style=\"text-transform: uppercase; font-size: 1.7rem\">
                            ";
        // line 428
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 428), "locale", [], "any", false, false, false, 428) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 428) != ""))) {
            // line 429
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "titre_en", [], "any", false, false, false, 429), "html", null, true);
        } else {
            // line 430
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_title", [], "any", false, false, false, 430), "html", null, true);
        }
        // line 431
        yield "                        </h1>

                        <div class=\"row\">
                            <!-- Carousel slider for portfolio -->
                            <div id=\"monPortfolio\" class=\"col-md-12 my-2\">
                                <div class=\"owl-carousel owl-theme\">
                                    ";
        // line 437
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 437))) {
            // line 438
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 438));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 439
                yield "                                            <div class=\"item\" data-merge=\"2\">
                                                <div class=\"portfolio-bg lazy\"
                                                     data-src=\"";
                // line 441
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "guid", [], "any", false, false, false, 441), ["www." => ""]), "html", null, true);
                yield "\"></div>
                                                <div class=\"btnh1-display\">
                                                    <button class=\"btn-wish btnh1\" data-id=\"";
                // line 443
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "id", [], "any", false, false, false, 443), "html", null, true);
                yield "\">
                                                        ";
                // line 444
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "id", [], "any", false, false, false, 444), ($context["text_wishlist"] ?? null))) {
                    yield "<i
                                                                style=\"color: red;\" class=\"fas fa-heart\"></i> ";
                } else {
                    // line 446
                    yield "                                                            <i class=\"wish-heart far fa-heart\"></i> ";
                }
                yield "</button>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 450
            yield "                                    ";
        }
        // line 451
        yield "                                    ";
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "images_secondaires", [], "any", false, false, false, 451))) {
            // line 452
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "images_secondaires", [], "any", false, false, false, 452));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 453
                yield "                                            <div class=\"item\" data-merge=\"2\">
                                                <div class=\"portfolio-bg lazy\"
                                                     data-src=\"";
                // line 455
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "guid", [], "any", false, false, false, 455), ["www." => ""]), "html", null, true);
                yield "\"></div>
                                                <div class=\"btnh1-display\">
                                                    <button class=\"btn-wish btnh1\" data-id=\"";
                // line 457
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "id", [], "any", false, false, false, 457), "html", null, true);
                yield "\">
                                                        ";
                // line 458
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "id", [], "any", false, false, false, 458), ($context["text_wishlist"] ?? null))) {
                    yield "<i
                                                                style=\"color: red;\" class=\"fas fa-heart\"></i> ";
                } else {
                    // line 460
                    yield "                                                            <i class=\"far fa-heart\"></i> ";
                }
                yield "</button>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 464
            yield "                                    ";
        }
        // line 465
        yield "                                </div>

                                <h2 class=\"mt-4 mb-2\" style=\"font-size: 1.5rem\">
                                    ";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.caracteristiques"), "html", null, true);
        yield "
                                </h2>
                                <div class=\"container\">
                                    <div class=\"row py-2 px-2 xtic-box\">
                                        <div class=\"col-md-6\">
                                            <p class=\"x-info ref fs-14\">
                                                <strong>Ref: ";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "id", [], "any", false, false, false, 474), "html", null, true);
        yield "</strong>
                                            </p>
                                            <p>
                                                <a class=\"x-info fs-18\"
                                                   href=\"";
        // line 478
        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParent", [], "any", false, false, false, 478)) == "produits")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentSlug", [], "any", false, false, false, 478), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentSlug", [], "any", false, false, false, 479), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 480
        yield "\"><strong>";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 480), "locale", [], "any", false, false, false, 480) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorie_parent_en", [], "any", false, false, false, 480) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorie_parent_en", [], "any", false, false, false, 480), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParent", [], "any", false, false, false, 480), "html", null, true);
        }
        yield "</strong>
                                                </a>
                                            </p>
                                            <p>
                                                <a class=\"x-info fs-18\"
                                                   href=\"";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentSlug", [], "any", false, false, false, 485), "services_proposes" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "sousCategorieSlug", [], "any", false, false, false, 485), "code_postal_ville" => ""]), "html", null, true);
        yield "\">
                                                    <strong>";
        // line 486
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 486), "locale", [], "any", false, false, false, 486) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorie_en", [], "any", false, false, false, 486) != ""))) {
            // line 488
            yield "                                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorie_en", [], "any", false, false, false, 488), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "sousCategorie", [], "any", false, false, false, 488), "html", null, true);
        }
        yield "</strong>
                                                </a>
                                            </p>
                                            <p class=\"x-info fs-14\">
                                                <strong>
                                                    <i class=\"fas fa-map-marker\"></i>
                                                    ";
        // line 494
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "codePostal", [], "any", false, false, false, 494))) {
            // line 495
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "codePostal", [], "any", false, false, false, 495), "html", null, true);
            yield "
                                                    ";
        }
        // line 497
        yield "                                                    ";
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "ville", [], "any", false, false, false, 497))) {
            // line 498
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "ville", [], "any", false, false, false, 498), "html", null, true);
            yield "
                                                    ";
        }
        // line 500
        yield "                                                    ";
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "pays", [], "any", false, false, false, 500))) {
            // line 501
            yield "                                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "pays", [], "any", false, false, false, 501)), "html", null, true);
            yield "
                                                    ";
        }
        // line 503
        yield "                                                </strong>
                                            </p>
                                            <p class=\"x-info fs-14\">
                                                ";
        // line 506
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParent", [], "any", false, false, false, 506) == "product_cat")) {
            // line 507
            yield "                                                    <strong>
                                                        <i class=\"fas fa-calendar\"></i>
                                                        (";
            // line 509
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "calendrier", [], "any", false, false, false, 509)), "html", null, true);
            yield "
                                                        -
                                                        ";
            // line 511
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "calendrier", [], "any", false, false, false, 511)), "html", null, true);
            yield "
                                                        )
                                                        ";
            // line 513
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "calendrier", [], "any", false, false, false, 513)), "html", null, true);
            yield "
                                                        ";
            // line 514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.dates-disponibles"), "html", null, true);
            yield "
                                                    </strong>
                                                ";
        }
        // line 517
        yield "                                            </p>
                                        </div>
                                        <div class=\"col-md-6 text-right\">
                                            <div class=\"row bloc-nom-commercial\">
                                                <div class=\"content\">
                                                    <!-- Your content goes here -->
                                                </div>
                                                <img class=\"img-fluid rounded-circle float-right\" width=\"100% \\9\"
                                                     src=\"";
        // line 525
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "avatar", [], "any", false, false, false, 525) != null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "avatar", [], "any", false, false, false, 525)), ["www." => ""]), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
        }
        yield "\"
                                                     alt=\"";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "first_name", [], "any", false, false, false, 526), "html", null, true);
        yield "\">
                                            </div>
                                            <p><a class=\"x-info fs-18 mt-2\" href=\"";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "nom_commercial", [], "any", false, false, false, 528), "id_commercial" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_author", [], "any", false, false, false, 528)]), "html", null, true);
        yield "\"><strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "nom_commercial", [], "any", false, false, false, 528), "html", null, true);
        yield "</strong></a></p>

                                            ";
        // line 533
        yield "                                            <p class=\"x-info ref fs-14\">
                                                ";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.publie-le"), "html", null, true);
        yield "
                                                ";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_date", [], "any", false, false, false, 535), "html", null, true);
        yield "
                                                ";
        // line 536
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.maj-le"), "html", null, true);
        yield "
                                                ";
        // line 537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_modified", [], "any", false, false, false, 537), "html", null, true);
        yield "
                                            </p>
                                        </div>
                                        <div class=\"row\" style=\"width: 100%;\">
                                            <div class=\"col-md-12 my-1 pull-right button_profil_sendmsg\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"popover_infos\" data-html=\"true\" data-container=\"body\"
                                                  data-toggle=\"popover\" data-placement=\"top\" data-content=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<i style=\"color:rgb(0, 82, 204);\"
                                                   class=\"fas fa-question-circle fa-lg\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <a target=\"_blank\"
                                                   href=\"";
        // line 548
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_author", [], "any", false, false, false, 548))]), "html", null, true);
        yield "\"
                                                   class=\"btn btn-sm btn-primary\">
                                                    ";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.details-profil"), "html", null, true);
        yield "</a>
                                                <a target=\"_blank\"
                                                   href=\"";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_chat", ["destinataire" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_author", [], "any", false, false, false, 552)]), "html", null, true);
        yield "\"
                                                   class=\"btn btn-sm btn-primary\">
                                                    ";
        // line 554
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.envoyer-message"), "html", null, true);
        yield "</a>
                                                ";
        // line 555
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 555)) {
            // line 556
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 556), "id", [], "any", false, false, false, 556) == CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_author", [], "any", false, false, false, 556))) {
                // line 557
                yield "                                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_deleteAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "id", [], "any", false, false, false, 557)]), "html", null, true);
                yield "\"
                                                           tabindex=\"0\"
                                                           class=\"btn btn-sm btn-primary deleteAnnounce\">";
                // line 559
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.supprimer-annonce"), "html", null, true);
                yield "</a>
                                                    ";
            }
            // line 561
            yield "                                                ";
        }
        // line 562
        yield "                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 mt-4\">
                                    <div class=\"mobile-form\">

                                    </div>
                                    ";
        // line 576
        yield "                                    <div class=\"\">
                                        ";
        // line 577
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 577), "locale", [], "any", false, false, false, 577) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 577) != ""))) {
            // line 578
            yield "                                            ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "content_en", [], "any", false, false, false, 578);
        } else {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_content", [], "any", false, false, false, 578);
            yield "
                                        ";
        }
        // line 580
        yield "                                    </div>
                                </div>
                                <!-- Videos -->
                                ";
        // line 583
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "livraison", [], "any", false, false, false, 583) == "oui") && (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentSlug", [], "any", false, false, false, 583) == "produits"))) {
            // line 584
            yield "                                    <div id=\"mesVideos\" class=\"col-md-12 mt-4\">
                                        <h2 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem\">Modes de livraison</h2>
                                        <div class=\"row modes\">
                                            <div class=\"col-md-6 mode mode1\" style=\"display: flex;margin-bottom: 3rem;\">
                                                <img src=\"";
            // line 588
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/livraison-standard.svg"), "html", null, true);
            yield "\" alt=\"\"
                                                     style=\"width: 100px;height: 60px;\">
                                                <div class=\"description_mode\" style=\"margin-left: 1rem;\">
                                                    <h5>";
            // line 591
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.titre-livraison-standard"), "html", null, true);
            yield "</h5>
                                                    <p>";
            // line 592
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.contenu-livraison-standard"), "html", null, true);
            yield "</p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 mode mode2\" style=\"display: flex;margin-bottom: 3rem;\">
                                                <img src=\"";
            // line 596
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/livraison-prioritaire.svg"), "html", null, true);
            yield "\" alt=\"\"
                                                     style=\"width: 100px;height: 60px;\">
                                                <div class=\"description_mode\" style=\"margin-left: 1rem;\">
                                                    <h5>";
            // line 599
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.titre-livraison-prioritaire"), "html", null, true);
            yield "</h5>
                                                    <p>";
            // line 600
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.contenu-livraison-prioritaire"), "html", null, true);
            yield "</p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 mode mode3\" style=\"display: flex;\">
                                                <img src=\"";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/livraison-express.svg"), "html", null, true);
            yield "\" alt=\"\"
                                                     style=\"width: 100px;height: 60px;\">
                                                <div class=\"description_mode\" style=\"margin-left: 1rem;\">
                                                    <h5>";
            // line 607
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.titre-livraison-express"), "html", null, true);
            yield "</h5>
                                                    <p>";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.contenu-livraison-express"), "html", null, true);
            yield "</p>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 mode mode4\">
                                                <p style=\"margin-bottom: 0.5rem;\"><span
                                                            style=\"font-weight: bold;font-size: 0.8rem;\">";
            // line 613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.titre-infos"), "html", null, true);
            yield "</span>
                                                    <span>01 85 42 14 91</span></p>
                                                <a target=\"_blank\"
                                                   href=\"";
            // line 616
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => "aide", "id" => "modes-de-livraison"]), "html", null, true);
            yield "\"
                                                   style=\"color: black;text-decoration: underline;\">";
            // line 617
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("details-annonces.contenu-infos"), "html", null, true);
            yield "</a>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 622
        yield "
                                <!-- Videos -->
                                <!-- Videos -->
                                <div id=\"mesVideos\" class=\"col-md-12 mt-4\">
                                    <h2 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem\">
                                        ";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.videos"), "html", null, true);
        yield "</h2>
                                    <div class=\"owl-carousel owl-theme\">
                                        ";
        // line 629
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "videos", [], "any", false, false, false, 629));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 630
            yield "                                            <div class=\"item-video\" data-merge=\"3\">
                                                <a class=\"owl-video\"
                                                   href=\"https://www.youtube.com/embed/";
            // line 632
            if (($context["a"] != " ")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["a"], "html", null, true);
            }
            yield "\"></a>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 635
        yield "                                    </div>
                                </div>
                                <!-- Videos -->
                                <div class=\"col-md-12 mt-4\">
                                    <h2 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem\">";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "commentaires", [], "any", false, false, false, 639)), "html", null, true);
        yield "
                                        ";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.commentaires"), "html", null, true);
        yield "
                                    </h2>
                                    <div class=\"container\">
                                        ";
        // line 644
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "commentaires", [], "any", false, false, false, 644));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 645
            yield "                                            <div class=\"row xtic-box py-2 rounded mb-2\">
                                                <div class=\"col-md-2 pt-2 text-center\">
                                                    <center>
                                                        <img class=\"img-fluid rounded-circle\" width=\"100% \\9\"
                                                             src=\"";
            // line 649
            if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "avatar", [], "any", false, false, false, 649)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "avatar", [], "any", false, false, false, 649)), "html", null, true);
            } else {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
            }
            yield "\"
                                                             alt=\"";
            // line 650
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "comment_author", [], "any", false, false, false, 650), "html", null, true);
            yield "\">
                                                    </center>
                                                    <p class=\"x-info ref-comment fs-14\">
                                                        <strong>
                                                            <a href=\"#\" target=\"_blank\">";
            // line 654
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "comment_author", [], "any", false, false, false, 654), "html", null, true);
            yield "</a>
                                                        </strong>
                                                    </p>
                                                </div>
                                                <div class=\"col-md-10\">
                                                    <p class=\"x-info ref-comment fs-14\">
                                                        ";
            // line 660
            yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "comment_content", [], "any", false, false, false, 660);
            yield "<br>
                                                        ";
            // line 661
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "comment_date", [], "any", false, false, false, 661), "d-m-Y h:i"), "html", null, true);
            yield "
                                                    </p>
                                                </div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 666
        yield "                                    </div>
                                    <div class=\"col-md-12 mt-4\" style=\"padding: 0;\">
                                        <h3 class=\"py-4 mb-4 border-bottom\" style=\"font-size: 1.5rem;\">
                                            ";
        // line 669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.ajouter-commentaire"), "html", null, true);
        yield "</h3>
                                        <form action=\"";
        // line 670
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_addAnnounceComment");
        yield "\"
                                              id=\"addAnnounceComment\"
                                              method=\"post\">
                                            <input hidden name=\"postId\" value=\"";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "id", [], "any", false, false, false, 673), "html", null, true);
        yield "\"/>
                                            <textarea id=\"comment-text\" name=\"comment-box\" class=\"comment-box form-control\" rows=\"10\"></textarea>
                                            <button class=\"btn btn-md btn-primary addComment ";
        // line 675
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 675)) {
            yield "disabled";
        }
        yield "\"
                                                    id=\"enregPasse\" type=\"submit\" style=\"margin: 0;margin-top: 3em;\">
                                                ";
        // line 677
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces-details.publier"), "html", null, true);
        yield "
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Vu du profil -->
                    </div>
                    <div class=\"col-md-12\">
                        <h3 style=\"margin-top: 2rem;\">Explorez notre univers</h3>
                        <p class=\"x-info fs-14\">Complétez l'offre ou contactez-nous si besoin</p>
                        <div class=\"col-md-12\" style=\"padding: 0;\">
                            <div id=\"news-slider\" class=\"\">
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-photograph overlay lazy carroussel_image\"
                                             data-src=\"";
        // line 694
        if (($context["bloc1"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc1"] ?? null), "optionValue", [], "any", false, false, false, 694), "|||")) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-photo.jpg"), "html", null, true);
        }
        yield "\">
                                            <a href=\"";
        // line 695
        if (($context["bloc1"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 695) == (($_v1 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc1"] ?? null), "optionValue", [], "any", false, false, false, 695), "|||")) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null))) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 695), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
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
                                               class=\"prestation-link lazyload\">";
        // line 696
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.photographe"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-musicien overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 703
        if (($context["bloc2"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc2"] ?? null), "optionValue", [], "any", false, false, false, 703), "|||")) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-musicien.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 704
        if (($context["bloc2"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 704) == (($_v3 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc2"] ?? null), "optionValue", [], "any", false, false, false, 704), "|||")) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 704), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "musiciens", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.musicien"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-prod-musicale overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 712
        if (($context["bloc3"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc3"] ?? null), "optionValue", [], "any", false, false, false, 712), "|||")) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-production-musicale.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 713
        if (($context["bloc3"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 713) == (($_v5 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc3"] ?? null), "optionValue", [], "any", false, false, false, 713), "|||")) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 713), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-denregistrement", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 714
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-enregistrement"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-grp-d-musiq overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 721
        if (($context["bloc4"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc4"] ?? null), "optionValue", [], "any", false, false, false, 721), "|||")) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-group-music.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 722
        if (($context["bloc4"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 722) == (($_v7 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc4"] ?? null), "optionValue", [], "any", false, false, false, 722), "|||")) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 722), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "groupes-de-musique", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 723
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.groupe-de-musique"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <div class=\"box-prestation box-chorale overlay lazy carroussel_image\"
                                         style=\"background-image: url(";
        // line 729
        if (($context["bloc5"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc5"] ?? null), "optionValue", [], "any", false, false, false, 729), "|||")) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-chorale.jpg"), "html", null, true);
        }
        yield ");\">
                                        <a href=\"";
        // line 730
        if (($context["bloc5"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 730) == (($_v9 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc5"] ?? null), "optionValue", [], "any", false, false, false, 730), "|||")) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 730), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "chorale-gospel", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                           class=\"prestation-link lazyload\">";
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.chorale"), "html", null, true);
        yield "</a>
                                    </div>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-stud-photo overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 737
        if (($context["bloc6"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc6"] ?? null), "optionValue", [], "any", false, false, false, 737), "|||")) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-stud-photo.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 738
        if (($context["bloc6"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 738) == (($_v11 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc6"] ?? null), "optionValue", [], "any", false, false, false, 738), "|||")) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 738), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-photo", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-photo"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-realisation-vid overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 746
        if (($context["bloc7"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc7"] ?? null), "optionValue", [], "any", false, false, false, 746), "|||")) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-realisation-vid.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 747
        if (($context["bloc7"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 747) == (($_v13 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc7"] ?? null), "optionValue", [], "any", false, false, false, 747), "|||")) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 747), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "realisation-video", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link\">";
        // line 748
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.realisation-video"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-evenementiels overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 755
        if (($context["bloc8"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc8"] ?? null), "optionValue", [], "any", false, false, false, 755), "|||")) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-evenementiels.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 756
        if (($context["bloc8"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 756) == (($_v15 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc8"] ?? null), "optionValue", [], "any", false, false, false, 756), "|||")) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 756), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "evenementiels", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link\">";
        // line 757
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.evenementiel"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"post-slide\">
                                    <a class=\"hover-orange\" href=\"#\">
                                        <div class=\"box-prestation box-stud-vid overlay lazy carroussel_image\"
                                             style=\"background-image: url(";
        // line 764
        if (($context["bloc9"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v16 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc9"] ?? null), "optionValue", [], "any", false, false, false, 764), "|||")) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[1] ?? null) : null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/home-prestations-studio-video.jpg"), "html", null, true);
        }
        yield ");\">
                                            <a href=\"";
        // line 765
        if (($context["bloc9"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                yield " ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termTaxonomyId", [], "any", false, false, false, 765) == (($_v17 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["bloc9"] ?? null), "optionValue", [], "any", false, false, false, 765), "|||")) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[0] ?? null) : null))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 765), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                }
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "studio-video", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        }
        yield "\"
                                               class=\"prestation-link lazyload\">";
        // line 766
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.bouton.studio-video"), "html", null, true);
        yield "</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 774
        yield from $this->loadTemplate("partials/project.html.twig", "annonces/details.html.twig", 774)->unwrap()->yield($context);
        // line 775
        yield "                ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "annonces/details.html.twig", 775)->unwrap()->yield($context);
        // line 776
        yield "    </main>
    <!--Main Layout-->
";
        yield from [];
    }

    // line 779
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 780
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 782
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 783
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 784
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 786
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    ";
        // line 790
        yield "    <script src=\"//cdn.ckeditor.com/4.13.0/standard/ckeditor.js\"></script>
    <script type=\"text/javascript\" src='";
        // line 791
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
    <script src=\"";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"
            integrity=\"sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==\"
            crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- <script src=\"https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js\" defer></script> -->
    <!-- Bootstrap Toggle switch -->
    <script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>

    <script>
        \$(document).ready(function () {

            if (\$(window).width() < 768) {
                \$('.desktop-form div').appendTo('.mobile-form');
            }
            window.onresize = function (event) {
                if (\$(window).width() < 768) {
                    \$('.desktop-form div').appendTo('.mobile-form');
                } else if (\$(window).width() > 768) {
                    \$('.mobile-form div').appendTo('.desktop-form');
                }
            };

            \$(function () {
                let infos_bulle = `";
        // line 824
        if ((array_key_exists("infos_bulle", $context) && ($context["infos_bulle"] ?? null))) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["infos_bulle"] ?? null), "optionValue", [], "any", false, false, false, 824);
        }
        yield "`;
                \$('.popover_infos').data('content', infos_bulle);
                \$('[data-toggle=\"popover\"]').popover();


                let calendar_infos = `";
        // line 829
        if ((array_key_exists("calendar_infos", $context) && ($context["calendar_infos"] ?? null))) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["calendar_infos"] ?? null), "optionValue", [], "any", false, false, false, 829);
        }
        yield "`;
                \$('.calendar_infos').data('content', calendar_infos);
                \$('[data-toggle=\"popover2\"]').popover();
            })

            tinymce.init({
                selector: 'textarea#comment-text',
                height: 350,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor'
                ],

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,
                language: 'fr_FR'
            });

            var docWidth = document.documentElement.offsetWidth;
            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });
            // Lazy Loading initializer
            \$(function () {
                \$('.lazy').lazy();
            });
            // multiple datepicker setup


            // little function to return available dates to calender
            let dateDipo = [];
            let dates = \"\";
            let exist = ";
        // line 865
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["datep"] ?? null)), "html", null, true);
        yield "; // si l'annonce courante est deja dans le panier
            let prix = 0;
            let devise = ";
        // line 867
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 867))) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "devise", [], "any", false, false, false, 867), "metaValue", [], "any", false, false, false, 867), "html", null, true);
            yield "\"";
        } else {
            yield " '€'";
        }
        yield ";
            ";
        // line 868
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["date"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d1"]) {
            yield "dateDipo[dateDipo.length] = '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["d1"], "html", null, true);
            yield "'; ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['d1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 869
        yield "            let nombreJour = \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["datep"] ?? null)), "html", null, true);
        yield "\";

            \$(\".multipleDatePicker\").datepicker({
                multidate: true,
                format: 'dd-mm-yyyy',
                startDate: '";
        // line 874
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["d"] ?? null), "d-m-Y", false), "html", null, true);
        yield "',
                endDate: '";
        // line 875
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(($context["d"] ?? null), "+1 year"), "d-m-Y", false), "html", null, true);
        yield "',
                beforeShowDay: function (d) {
                    let dat = formatDate(d);
                    console.log(dat);
                    let rep = false;
                    if (dateDipo.includes(dat)) {
                        rep = {
                            true: true,
                            tooltip: 'Disponible',
                            classes: 'jr-dispo'
                        };
                    }
                    return rep;
                }
            }).on('changeDate', function (e) {
                let dateTime = \$(\".multipleDatePicker\").datepicker(\"getDates\");
                nombreJour = dateTime.length;
                let p2 = '";
        // line 892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 892), "html", null, true);
        yield "';
                let p3 = p2.match(/[0-9,.]*/);
                if (p3 !== null) {
                    var amount2 = parseFloat(p3[0].replace(/,/g, '')); // replace , thousands separator
                }
                prix = nombreJour * amount2;
                if (nombreJour > 0) {
                    \$('#price').html(nombreJour + \"x\" + '";
        // line 899
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 899), "html", null, true);
        yield "' + '=' + prix + ' ' + devise);
                } else {
                    \$('#price').html('');
                }
            });

            function padTo2Digits(num) {
                return num.toString().padStart(2, '0');
            }

            function formatDate(date) {
                return [
                    padTo2Digits(date.getDate()),
                    padTo2Digits(date.getMonth() + 1),
                    date.getFullYear(),
                ].join('-');
            }

            \$('.multipleDatePicker').datepicker('update', ";
        // line 917
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["datep"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["d"], "html", null, true);
            yield "', ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['d'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ");
            function arrayRemove(arr, value) {
                return arr.filter(function (ele) {
                    return ele != value;
                });
            }

            // start portfolio/video slider
            // Portfolio owlcarousel
            \$('#monPortfolio .owl-carousel').owlCarousel({
                items: 1,
                nav: true,
                lazyLoad: true,
                loop: false,
                rewind: true,
                margin: 10,
                merge: true
            });
            // Video owlcarousel
            \$('#mesVideos .owl-carousel').owlCarousel({
                items: 1,
                merge: true,
                loop: true,
                margin: 10,
                nav: true,
                video: true,
                lazyLoad: false,
                center: true
            });


            \$('#news-slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 3,
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: \"unslick\"
                    // instead of a settings object
                ]
            });
            // \$(\"#news-slider\").owlCarousel({
            // \titems: 3,
            // \titemsDesktop: [
            // \t\t1199, 3
            // \t],
            // \titemsDesktopSmall: [
            // \t\t980, 2
            // \t],
            // \titemsMobile: [
            // \t\t600, 1
            // \t],
            // \tnavigation: true,
            // \tnavigationText: [
            // \t\t\"\", \"\"
            // \t],
            // \tpagination: true,
            // \tautoPlay: true
            // });


            \$(document).on('click', '#enregDates', function (e) {// On empeche le navigateur de soumettre le formulaire
                e.preventDefault();
                let d = \$(\".multipleDatePicker\").datepicker(\"getDates\");
                let alldates = [];
                for (let i = 0; i < d.length; i++) {
                    let dateTime = new Date(d[i]);
                    let date = formatDate(dateTime);
                    alldates[alldates.length] = date;
                }
                dates += alldates.join('|');

                let adresse = \"";
        // line 1016
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "ville", [], "any", false, false, false, 1016))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "ville", [], "any", false, false, false, 1016), "html", null, true);
        }
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "etat", [], "any", false, false, false, 1016))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "etat", [], "any", false, false, false, 1016), "html", null, true);
        }
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "pays", [], "any", false, false, false, 1016))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "pays", [], "any", false, false, false, 1016)), "html", null, true);
        }
        yield "\";
                let image = '";
        // line 1017
        if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 1017))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "gallery", [], "any", false, false, false, 1017), 0, [], "any", false, false, false, 1017), "guid", [], "any", false, false, false, 1017), "html", null, true);
        } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "images_secondaires", [], "any", false, false, false, 1017))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "images_secondaires", [], "any", false, false, false, 1017), 0, [], "any", false, false, false, 1017), "guid", [], "any", false, false, false, 1017), "html", null, true);
        }
        yield "';
                let email = '";
        // line 1018
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "email", [], "any", false, false, false, 1018), "html", null, true);
        yield "';
                let p = '";
        // line 1019
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "prix", [], "any", false, false, false, 1019), "html", null, true);
        yield "';
                let categorieParent = \"";
        // line 1020
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentType", [], "any", false, false, false, 1020), "html", null, true);
        yield "\";
                let match = p.match(/[0-9,.]*/);
                let nombreJour = 0;
                let amount = 0;
                if (match !== null) {
                    amount = parseFloat(match[0].replace(/,/g, '')); // replace , thousands separator
                }
                if (categorieParent != 'product_cat') {
                    nombreJour = \$('#product_quantity').val();
                } else {
                    nombreJour = d.length;
                }

                let livraison = '";
        // line 1033
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "livraison", [], "any", false, false, false, 1033), "html", null, true);
        yield "';
                let url1 = \"";
        // line 1034
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_panier");
        yield "\" + '?id=' + '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "id", [], "any", false, false, false, 1034), "html", null, true);
        yield "' +
                    '&prixu=' + amount + '&userId=' + '";
        // line 1035
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_author", [], "any", false, false, false, 1035), "html", null, true);
        yield "' +
                    '&qte=' + nombreJour + '&dates=' + dates +
                    '&libelle=' + '";
        // line 1037
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_title", [], "any", false, false, false, 1037), "html", null, true);
        yield "' + '&image=' + image + '&adresse=' + adresse +
                    '&email=' + email + '&devise=' + devise + '&name=' + '";
        // line 1038
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_name", [], "any", false, false, false, 1038), "html", null, true);
        yield "' +
                    '&categorie=' + '";
        // line 1039
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "categorieParentSlug", [], "any", false, false, false, 1039), "html", null, true);
        yield "' + '&sousCategorie=' + '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "sousCategorieSlug", [], "any", false, false, false, 1039), "html", null, true);
        yield "' +
                    '&livraison=' + livraison + '&etat=' + '";
        // line 1040
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["etat"] ?? null), "html", null, true);
        yield "';


                if (nombreJour > 0) {
                    toastr.info('Ajout au panier en cours...');
                    \$.ajax({
                        url: url1,
                        type: 'get',
                        success: function (response) {
                            toastr.clear();
                            toastr.success('Annonce ajoutée au panier!');
                            if (exist == 0) {
                                \$('#panier').html(";
        // line 1052
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 1052), "get", ["taille"], "method", false, false, false, 1052), "html", null, true);
        yield " +1);
                            }
                            window.location = \"";
        // line 1054
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsAnnonce"] ?? null), "post_name", [], "any", false, false, false, 1054)]), "html", null, true);
        yield "\";
                        },
                        error: function (response) {
                            toastr.clear();
                            toastr.error('Erreur lors de l\\'ajout');
                        }
                    });
                } else {
                    toastr.info('Veuillez selectionner une date disponible');
                }
            });

            // Hambuger menu icon
            \$('.animated-button-icon').on('click', function () {
                \$('.animated-icon2').toggleClass('open');
            });
            // first thing turn Hide Menu Search bar
            \$(\"#searchMenu\").hide();
            // toggle menu search bar on/off
            \$(\"#searchMenuShowHide\").click(function () {
                \$(\"#searchMenu\").toggle(\"slide\");
            });
            // For comments add

            \$('#addAnnounceComment').on('submit', function (e) {
                e.preventDefault();

                // Get the content from TinyMCE editor
                let temp = tinymce.activeEditor.getContent();

                // Check if the content is empty
                if (temp.trim() === \"\") {  // Check if the content is empty or only contains whitespace
                    toastr.warning(\"";
        // line 1086
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vous devez remplir un commentaire!"), "html", null, true);
        yield "\");  // Display an error message
                    return false;  // Prevent form submission
                }

                // If not empty, proceed with form submission
                toastr.info(\"";
        // line 1091
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.requete-en-cours"), "html", null, true);
        yield "\");

                \$('#comment-text').val(temp);
                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize() + '&comment-box=' + temp;

                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (response) {
                        if (response != 0) {
                            toastr.clear();
                            toastr.success(\"";
        // line 1107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                            window.location = \"\";
                        } else if (response == 0) {
                            \$('#enregPasse').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 1112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                        }
                    },
                    error: function (response) {
                        \$('#enregPasse').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 1118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                    }
                });

                return false;
            });


            \$(document).on('click', '.deleteAnnounce', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                let t = \$(this);
                let urlPath = \$(this).attr('href');
                swal({
                    title: t.text(),
                    text: \"";
        // line 1132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.sure"), "html", null, true);
        yield "\",
                    type: \"info\",
                    showCancelButton: true,
                    confirmButtonClass: \"btn-danger\",
                    confirmButtonText: \"Oui\",
                    cancelButtonText: \"Annuler\",
                    closeOnConfirm: false,
                    closeOnCancel: false,
                    showLoaderOnConfirm: true
                }, function (isConfirm) {

                    if (isConfirm) {
                        \$.ajax({
                            url: urlPath,
                            type: 'GET',
                            success: function (reponse) {
                                if (reponse > 0) {
                                    swal(\"Action effectuée avec succès.\", \"\", \"success\");
                                    window.location = \"";
        // line 1150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_profile");
        yield "\";
                                } else {
                                    swal(\"erreur de suppression\", \"\", \"error\");
                                }
                            },
                            error: function (reponse) {
                                swal(\"erreur de suppression\", \"\", \"error\");
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
                return false;
            });

            // First Like Button
            \$(document).on('click', '.btnh1', function () {
                let element = \$(this);
                //Enregistrer dans la wishlist
                let url = \"";
        // line 1170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_add_remove_to_user_wishlist", ["_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1170), "get", ["_locale"], "method", false, false, false, 1170)]), "html", null, true);
        yield "\";
                \$.ajax({
                    url: url,
                    method: \"get\",
                    data: {
                        annonce_id: \$(this).attr('data-id')
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.color == 'red') {
                            element.children().removeClass(\"far\");
                            element.children().addClass(\"fas\");
                            element.children().css('color', 'red');
                        } else if (response.color == 'black') {
                            element.children().removeClass(\"fas\");
                            element.children().addClass(\"far\");
                            element.children().css('color', 'grey');
                        } else if (response.status == 401) {
                            window.location = \"";
        // line 1188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\";
                        }
                    },
                    error: function (response) {
                        console.log(response);
                    }
                });
            });

        });

        toastr.options = {
            \"closeButton\": true,
            \"debug\": false,
            \"newestOnTop\": false,
            \"progressBar\": true,
            \"positionClass\": \"toast-top-center\",
            \"preventDuplicates\": false,
            \"onclick\": null,
            \"showDuration\": \"200\",
            \"hideDuration\": \"800\",
            \"timeOut\": \"3000\",
            \"extendedTimeOut\": \"800\",
            \"showEasing\": \"swing\",
            \"hideEasing\": \"linear\",
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        };
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces/details.html.twig";
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
        return array (  2376 => 1188,  2355 => 1170,  2332 => 1150,  2311 => 1132,  2294 => 1118,  2285 => 1112,  2277 => 1107,  2258 => 1091,  2250 => 1086,  2215 => 1054,  2210 => 1052,  2195 => 1040,  2189 => 1039,  2185 => 1038,  2181 => 1037,  2176 => 1035,  2170 => 1034,  2166 => 1033,  2150 => 1020,  2146 => 1019,  2142 => 1018,  2134 => 1017,  2122 => 1016,  2011 => 917,  1990 => 899,  1980 => 892,  1960 => 875,  1956 => 874,  1947 => 869,  1936 => 868,  1926 => 867,  1921 => 865,  1880 => 829,  1870 => 824,  1835 => 792,  1831 => 791,  1828 => 790,  1822 => 786,  1817 => 784,  1812 => 783,  1805 => 782,  1797 => 780,  1790 => 779,  1783 => 776,  1780 => 775,  1778 => 774,  1767 => 766,  1748 => 765,  1740 => 764,  1730 => 757,  1711 => 756,  1703 => 755,  1693 => 748,  1674 => 747,  1666 => 746,  1656 => 739,  1637 => 738,  1629 => 737,  1620 => 731,  1601 => 730,  1593 => 729,  1584 => 723,  1565 => 722,  1557 => 721,  1547 => 714,  1528 => 713,  1520 => 712,  1510 => 705,  1491 => 704,  1483 => 703,  1473 => 696,  1453 => 695,  1445 => 694,  1425 => 677,  1418 => 675,  1413 => 673,  1407 => 670,  1403 => 669,  1398 => 666,  1387 => 661,  1383 => 660,  1374 => 654,  1367 => 650,  1358 => 649,  1352 => 645,  1347 => 644,  1341 => 640,  1337 => 639,  1331 => 635,  1320 => 632,  1316 => 630,  1312 => 629,  1307 => 627,  1300 => 622,  1292 => 617,  1288 => 616,  1282 => 613,  1274 => 608,  1270 => 607,  1264 => 604,  1257 => 600,  1253 => 599,  1247 => 596,  1240 => 592,  1236 => 591,  1230 => 588,  1224 => 584,  1222 => 583,  1217 => 580,  1209 => 578,  1207 => 577,  1204 => 576,  1194 => 562,  1191 => 561,  1186 => 559,  1180 => 557,  1177 => 556,  1175 => 555,  1171 => 554,  1166 => 552,  1161 => 550,  1156 => 548,  1142 => 537,  1138 => 536,  1134 => 535,  1130 => 534,  1127 => 533,  1120 => 528,  1115 => 526,  1107 => 525,  1097 => 517,  1091 => 514,  1087 => 513,  1082 => 511,  1077 => 509,  1073 => 507,  1071 => 506,  1066 => 503,  1060 => 501,  1057 => 500,  1051 => 498,  1048 => 497,  1042 => 495,  1040 => 494,  1027 => 488,  1025 => 486,  1021 => 485,  1008 => 480,  1003 => 479,  997 => 478,  990 => 474,  981 => 468,  976 => 465,  973 => 464,  962 => 460,  957 => 458,  953 => 457,  948 => 455,  944 => 453,  939 => 452,  936 => 451,  933 => 450,  922 => 446,  917 => 444,  913 => 443,  908 => 441,  904 => 439,  899 => 438,  897 => 437,  889 => 431,  885 => 430,  881 => 429,  879 => 428,  871 => 422,  866 => 420,  863 => 419,  861 => 418,  856 => 416,  850 => 414,  848 => 413,  845 => 412,  842 => 411,  835 => 409,  833 => 408,  828 => 407,  825 => 406,  818 => 404,  816 => 403,  807 => 402,  805 => 401,  799 => 400,  796 => 399,  777 => 383,  773 => 381,  771 => 380,  764 => 377,  762 => 376,  748 => 367,  743 => 365,  736 => 363,  733 => 362,  726 => 360,  723 => 359,  719 => 357,  713 => 355,  711 => 354,  696 => 346,  692 => 345,  680 => 341,  675 => 340,  669 => 339,  663 => 336,  658 => 333,  646 => 327,  643 => 326,  639 => 325,  632 => 320,  625 => 319,  615 => 318,  607 => 316,  600 => 315,  386 => 105,  382 => 104,  378 => 103,  373 => 101,  369 => 100,  365 => 99,  361 => 98,  356 => 96,  349 => 93,  342 => 92,  326 => 90,  319 => 86,  300 => 74,  292 => 73,  282 => 70,  270 => 65,  262 => 64,  256 => 60,  236 => 47,  228 => 46,  218 => 43,  210 => 42,  202 => 41,  194 => 35,  192 => 34,  189 => 33,  181 => 31,  173 => 30,  165 => 29,  157 => 28,  152 => 25,  145 => 20,  136 => 18,  128 => 17,  120 => 16,  116 => 15,  112 => 14,  103 => 12,  95 => 11,  87 => 10,  83 => 9,  79 => 8,  75 => 7,  71 => 6,  65 => 4,  58 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "annonces/details.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/annonces/details.html.twig");
    }
}
