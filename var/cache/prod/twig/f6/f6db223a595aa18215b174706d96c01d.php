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

/* home/content.html.twig */
class __TwigTemplate_877d167f0895930c94f1c8122c6aee0c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "descriptiveContent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("descriptiveContent.html.twig", "home/content.html.twig", 1);
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
\t<link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png"), "html", null, true);
        yield "\"/>
\t<meta name=\"msapplication-TileImage\" content=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\"/>
\t<meta name=\"title\" content=\"";
        // line 7
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 7), "locale", [], "any", false, false, false, 7) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 7) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 7), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostTitle", [], "any", false, false, false, 7), "html", null, true);
        }
        yield "\">
\t<meta name=\"description\" content=\"";
        // line 8
        if ( !(null === ($context["meta_desc"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["meta_desc"] ?? null), "getMetaValue", [], "any", false, false, false, 8), "html", null, true);
        }
        yield "\">
\t<link rel=\"canonical\" href=\"";
        // line 9
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostName", [], "any", false, false, false, 9) == "a-propos") || (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostName", [], "any", false, false, false, 9) == "le-centre-daide-trust-market")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostName", [], "any", false, false, false, 9) == "nos-conditions"))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_navigation", ["navigation" => CoreExtension::getAttribute($this->env, $this->source, ($context["idPage"] ?? null), "getPostName", [], "any", false, false, false, 9)])), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => CoreExtension::getAttribute($this->env, $this->source, ($context["idPage"] ?? null), "getPostName", [], "any", false, false, false, 9), "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostName", [], "any", false, false, false, 9)])), "html", null, true);
        }
        yield "\">
\t";
        // line 11
        yield "\t<meta property=\"og:title\" content=\"";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 11), "locale", [], "any", false, false, false, 11) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 11) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 11), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostTitle", [], "any", false, false, false, 11), "html", null, true);
        }
        yield "\">
\t<meta property=\"og:description\" content=\"";
        // line 12
        if ( !(null === ($context["meta_desc"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["meta_desc"] ?? null), "getMetaValue", [], "any", false, false, false, 12), "html", null, true);
        }
        yield "\">
\t<meta property=\"og:image\" content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"";
        // line 15
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostName", [], "any", false, false, false, 15) == "a-propos") || (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostName", [], "any", false, false, false, 15) == "le-centre-daide-trust-market")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostName", [], "any", false, false, false, 15) == "nos-conditions"))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_navigation", ["navigation" => CoreExtension::getAttribute($this->env, $this->source, ($context["idPage"] ?? null), "getPostName", [], "any", false, false, false, 15)])), "html", null, true);
            yield "
\t";
        } else {
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => CoreExtension::getAttribute($this->env, $this->source, ($context["idPage"] ?? null), "getPostName", [], "any", false, false, false, 16), "id" => CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostName", [], "any", false, false, false, 16)])), "html", null, true);
        }
        yield "\">
\t";
        // line 18
        yield "
\t";
        // line 20
        yield "\t<meta name=\"twitter:card\" content=\"summary\">
\t<meta name=\"twitter:site\" content=\"@trustandmarket\">
\t<meta name=\"twitter:title\" content=\"";
        // line 22
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "locale", [], "any", false, false, false, 22) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 22) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 22), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostTitle", [], "any", false, false, false, 22), "html", null, true);
        }
        yield "\">
\t<meta name=\"twitter:description\" content=\"";
        // line 23
        if ( !(null === ($context["meta_desc"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["meta_desc"] ?? null), "getMetaValue", [], "any", false, false, false, 23), "html", null, true);
        }
        yield "\">
\t<meta name=\"twitter:image\" content=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
\t<meta name=\"twitter:image:alt\" content=\"";
        // line 25
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "locale", [], "any", false, false, false, 25) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 25) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 25), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostTitle", [], "any", false, false, false, 25), "html", null, true);
        }
        yield "\">
\t";
        // line 27
        yield "
\t";
        // line 29
        yield "\t<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"WebPage\",
\t\t\"name\": \"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostName", [], "any", false, false, false, 33), "html", null, true);
        yield "\",
\t\t\"description\": \"";
        // line 34
        if ( !(null === ($context["meta_desc"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["meta_desc"] ?? null), "getMetaValue", [], "any", false, false, false, 34), "html", null, true);
        }
        yield "\"
\t}
\t</script>
\t";
        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " | ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 39), "locale", [], "any", false, false, false, 39) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 39) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 39), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostTitle", [], "any", false, false, false, 39), "html", null, true);
        }
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "\t";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
\t<!-- Your custom styles (optional) -->
\t<link href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
\t<style>
\t\t.chat-menu a {
\t\t\tborder-radius: 50%;
\t\t\tbackground-color: transparent;
\t\t\twidth: 100%;
\t\t}
\t\t.breadcrumb {
\t\t\tbackground-color: white;
\t\t}

\t\t.breadcrumb a {
\t\t\tcolor: #000000;
\t\t}
\t\t
\t\t.breadcrumb a:hover {
\t\t\tcolor: #f17c30;
\t\t}
\t</style>
\t<link href=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-aide.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "\t";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 71
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
\t<main class=\"text-center mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ol class=\"breadcrumb pl-0\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Accueil</a></li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a target=\"_blank\" href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_navigation", ["navigation" => CoreExtension::getAttribute($this->env, $this->source, ($context["idPage"] ?? null), "getPostName", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["idPage"] ?? null), "getPostName", [], "any", false, false, false, 79)), ["-" => " "]), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</nav>
\t\t\t\t\t<ul class=\"list-group text-left\">
\t\t\t\t\t\t";
        // line 83
        if ((($context["tsm"] ?? null) == ($context["tsmp"] ?? null))) {
            // line 84
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sous_menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 85
                yield "\t\t\t\t\t\t\t\t";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 85))) > 0)) {
                    // line 86
                    yield "\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-flush ";
                    if (((($context["id"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 86)) && (($context["navigation"] ?? null) != "nos-conditions"))) {
                        yield " current-menu-item ";
                    }
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                 \">
\t\t\t\t\t\t\t\t\t\t";
                    // line 87
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 87) == 480)) {
                        // line 88
                        yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_index");
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 89
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 89), "locale", [], "any", false, false, false, 89) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 89) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 89), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 89), "html", null, true);
                        }
                        // line 90
                        yield "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 91
$context["m"], "id", [], "any", false, false, false, 91) == 3742)) {
                        // line 92
                        yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_envoyez_commentaires");
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 93
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 93), "locale", [], "any", false, false, false, 93) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 93) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 93), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 93), "html", null, true);
                        }
                        // line 94
                        yield "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 96
                        yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => CoreExtension::getAttribute($this->env, $this->source, ($context["idPage"] ?? null), "postName", [], "any", false, false, false, 96), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postName", [], "any", false, false, false, 96)]), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 97
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 97), "locale", [], "any", false, false, false, 97) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 97) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 97), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 97), "html", null, true);
                        }
                        // line 98
                        yield "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 100
                    yield "\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                // line 102
                yield "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "\t\t\t\t\t\t";
        } else {
            // line 104
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sous_menu_parent"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 105
                yield "\t\t\t\t\t\t\t\t<li class=\"list-group-item  ";
                if (((($context["id"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 105)) && (($context["navigation"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postName", [], "any", false, false, false, 105)))) {
                    yield " current-menu-item ";
                }
                yield "\">
\t\t\t\t\t\t\t\t\t";
                // line 106
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 106) != "")) {
                    // line 107
                    yield "\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuParent"] ?? null), "postName", [], "any", false, false, false, 107), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postName", [], "any", false, false, false, 107)]), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 108
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 108), "locale", [], "any", false, false, false, 108) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 108) != ""))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postExcerpt", [], "any", false, false, false, 108), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "postTitle", [], "any", false, false, false, 108), "html", null, true);
                    }
                    yield "</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 110
                yield "\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush text-left\">
\t\t\t\t\t\t\t\t\t\t";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["sous_menu"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["m1"]) {
                    // line 112
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postParent", [], "any", false, false, false, 112) == CoreExtension::getAttribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 112))) {
                        // line 113
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-flush  ";
                        if ((($context["navigation"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postName", [], "any", false, false, false, 113))) {
                            yield " current-menu-item ";
                        }
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"prestation-list-item\" href=\"";
                        // line 114
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => CoreExtension::getAttribute($this->env, $this->source, ($context["menuParent"] ?? null), "postName", [], "any", false, false, false, 114), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postName", [], "any", false, false, false, 114)]), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 115
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 115), "locale", [], "any", false, false, false, 115) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postExcerpt", [], "any", false, false, false, 115) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postExcerpt", [], "any", false, false, false, 115), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postTitle", [], "any", false, false, false, 115), "html", null, true);
                        }
                        // line 116
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 119
                    yield "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['m1'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                yield "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "\t\t\t\t\t\t";
        }
        // line 124
        yield "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9 text-left\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 130
        yield "\t\t\t\t\t\t\t";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 130), "locale", [], "any", false, false, false, 130) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postContentFiltered", [], "any", false, false, false, 130) != ""))) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postContentFiltered", [], "any", false, false, false, 130);
        } else {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postContent", [], "any", false, false, false, 130);
        }
        // line 131
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
";
        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 139
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
\t<!-- Full background slider jQuery plugin -->
\t<script type=\"text/javascript\" src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
\t<script>
\$(document).ready(function () {
var docWidth = document.documentElement.offsetWidth;

[].forEach.call(document.querySelectorAll('*'), function (el) {
if (el.offsetWidth > docWidth) {
console.log(el);
}
});

let url_background = \"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "guid", [], "any", false, false, false, 152), "html", null, true);
        yield "\"
if (url_background.includes('wp-content')) {
\t\$('#imageHolder').css(\"background-image\", url_background); 
}

// Hambuger menu icon
\$('.animated-button-icon').on('click', function () {
\$('.animated-icon2').toggleClass('open');
});

// Recherche avancer
\$(\"#recherche-avancer\").click(function () {
\$(\"#sectionAvancer\").toggleClass('d-none');
});

// first thing turn Hide Menu Search bar
\$(\"#searchMenu\").hide();
// toggle menu search bar on/off
\$(\"#searchMenuShowHide\").click(function () {
\$(\"#searchMenu\").toggle(\"slide\");
});
});

// Style Menu and SubMenu
\t</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/content.html.twig";
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
        return array (  516 => 152,  502 => 141,  496 => 139,  489 => 138,  478 => 131,  471 => 130,  464 => 124,  461 => 123,  453 => 120,  447 => 119,  442 => 116,  436 => 115,  432 => 114,  425 => 113,  422 => 112,  418 => 111,  415 => 110,  406 => 108,  401 => 107,  399 => 106,  392 => 105,  387 => 104,  384 => 103,  378 => 102,  374 => 100,  370 => 98,  364 => 97,  359 => 96,  355 => 94,  349 => 93,  344 => 92,  342 => 91,  339 => 90,  333 => 89,  328 => 88,  326 => 87,  319 => 86,  316 => 85,  311 => 84,  309 => 83,  300 => 79,  296 => 78,  286 => 71,  279 => 70,  269 => 69,  261 => 67,  254 => 66,  247 => 64,  225 => 45,  221 => 44,  217 => 43,  211 => 41,  204 => 40,  187 => 39,  176 => 34,  172 => 33,  166 => 29,  163 => 27,  155 => 25,  151 => 24,  145 => 23,  137 => 22,  133 => 20,  130 => 18,  125 => 16,  119 => 15,  114 => 13,  108 => 12,  99 => 11,  91 => 9,  85 => 8,  77 => 7,  73 => 6,  69 => 5,  64 => 4,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/content.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/home/content.html.twig");
    }
}
