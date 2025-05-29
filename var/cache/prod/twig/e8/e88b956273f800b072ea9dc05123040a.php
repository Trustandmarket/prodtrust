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

/* blog/index.html.twig */
class __TwigTemplate_88eb1cdda8ed8a35967d9bf939f4771f extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "generalLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("generalLayout.html.twig", "blog/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "\t";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
\t<meta name=\"title\" content=\"";
        // line 4
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "blog"]);
        yield "\">
\t<meta name=\"description\" content=\"";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "blog"]);
        yield "\">
\t<link rel=\"canonical\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index")), "html", null, true);
        yield "\">
\t<link rel=\"shortlink\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index")), "html", null, true);
        yield "\">
\t";
        // line 9
        yield "\t<meta property=\"og:title\" content=\"blog\">
\t<meta property=\"og:description\" content=\"";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "blog"]);
        yield "\">

\t<meta property=\"og:image\" content=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index")), "html", null, true);
        yield "\">
\t<meta property=\"og:locale\" content=\"fr\"/>
\t<meta property=\"og:locale:alternate\" content=\"en\"/>
\t";
        // line 18
        yield "
\t";
        // line 20
        yield "\t<meta name=\"twitter:card\" content=\"summary\">
\t<meta name=\"twitter:site\" content=\"@trustandmarket\">
\t<meta name=\"twitter:title\" content=\"";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "blog"]);
        yield "\">
\t<meta name=\"twitter:description\" content=\"";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "blog"]);
        yield "\">
\t<meta name=\"twitter:image\" content=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
\t<meta name=\"twitter:image:alt\" content=\"";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "blog"]);
        yield "\">
\t";
        // line 27
        yield "
\t<style>
\t\t.blog_list .card {
\t\t\tmin-height: 100%;
\t\t}
\t\t.blog_list .card img {
\t\t\theight: 200px;
\t\t\twidth: 100%;
\t\t\tobject-fit: cover;
\t\t}
\t</style>

\t";
        // line 40
        yield "    <script type=\"application/ld+json\">
        {
        \"@context\": \"https://schema.org\",
        \"@type\": \"BreadcrumbList\",
        \"itemListElement\": [
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 46
            yield "        {
            \"@type\": \"ListItem\",
            \"position\":\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48), "html", null, true);
            yield "\",
            \"item\": {
            \"@id\": \"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "post_name", [], "any", false, false, false, 50)])), "html", null, true);
            yield "\",
            \"name\": \"";
            // line 51
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 51), "locale", [], "any", false, false, false, 51) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title_en", [], "any", false, false, false, 51) != CoreExtension::getAttribute($this->env, $this->source, $context["article"], "post_title", [], "any", false, false, false, 51))) && (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title_en", [], "any", false, false, false, 51) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title_en", [], "any", false, false, false, 51), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "post_title", [], "any", false, false, false, 51)), "html", null, true);
            }
            yield "\",
            \"image\": \"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imagePost", [], "any", false, false, false, 52), "html", null, true);
            yield "\"
            }
        }
        ";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 55) != true)) {
                yield ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "\t\t]
\t\t
\t}
    </script>
\t";
        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust &amp; Market |";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "blog"]);
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "\t";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
\t<!-- Your custom styles (optional) -->
\t<link rel=\"stylesheet\" href=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\">
\t<link href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-blog.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "\t";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "∑
\t<div id=\"imageHolder\" class=\"view intro-2\">
\t\t<div class=\"full-bg-img\">
\t\t\t<div class=\"mask rgba-purple-light flex-center\">
\t\t\t\t<div class=\"container text-left align-items-end white-text wow fadeInUp\">
\t\t\t\t\t<h2 class=\"page-title\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.titre"), "html", null, true);
        yield "T&M</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        yield from [];
    }

    // line 87
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 88
        yield "\t<!--Main Layout-->
\t<main class=\"mt-5\">
\t\t<div class=\"container\"><pre>
\t\t</pre>
\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link ";
        // line 94
        if ((($context["categorie"] ?? null) == null)) {
            yield "active";
        }
        yield "\" id=\"tous-tab\" data-toggle=\"tab\" href=\"#tous\" role=\"tab\" aria-controls=\"tous\" aria-selected=\"";
        if ( !array_key_exists("categorie", $context)) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.menu.liste-articles"), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link ";
        // line 97
        if ((($context["categorie"] ?? null) == "musique")) {
            yield "active";
        }
        yield "\" id=\"musique-tab\" data-toggle=\"tab\" href=\"#musique\" role=\"tab\" aria-controls=\"musique\" aria-selected=\"";
        if ((($context["categorie"] ?? null) == "musique")) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.menu.musique"), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link ";
        // line 100
        if ((($context["categorie"] ?? null) == "photographie")) {
            yield "active";
        }
        yield "\" id=\"photographie-tab\" data-toggle=\"tab\" href=\"#photographie\" role=\"tab\" aria-controls=\"Photographie\" aria-selected=\"";
        if ((($context["categorie"] ?? null) == "photographie")) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.menu.photographie"), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link ";
        // line 103
        if ((($context["categorie"] ?? null) == "video")) {
            yield "active";
        }
        yield "\" id=\"video-tab\" data-toggle=\"tab\" href=\"#video\" role=\"tab\" aria-controls=\"video\" aria-selected=\"";
        if ((($context["categorie"] ?? null) == "video")) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.menu.video"), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link ";
        // line 106
        if ((($context["categorie"] ?? null) == "experiences")) {
            yield "active";
        }
        yield "\" id=\"experience-tab\" data-toggle=\"tab\" href=\"#experience\" role=\"tab\" aria-controls=\"experience\" aria-selected=\"";
        if ((($context["categorie"] ?? null) == "experiences")) {
            yield "true";
        } else {
            yield "false";
        }
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("blog.menu.experiences"), "html", null, true);
        yield "</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content blog_list\" id=\"myTabContent\">
\t\t\t\t<div class=\"tab-pane fade ";
        // line 110
        if ((($context["categorie"] ?? null) == null)) {
            yield "show active";
        }
        yield " mt-5\" id=\"tous\" role=\"tabpanel\" aria-labelledby=\"tous-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 113
            yield "\t\t\t\t\t\t";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 113), "locale", [], "any", false, false, false, 113) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["i"], "title_en", [], "any", false, false, false, 113) != CoreExtension::getAttribute($this->env, $this->source, $context["i"], "post_title", [], "any", false, false, false, 113))) && (CoreExtension::getAttribute($this->env, $this->source, $context["i"], "title_en", [], "any", false, false, false, 113) != ""))) {
                // line 114
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "imagePost", [], "any", false, false, false, 119), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 119), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "post_name", [], "any", false, false, false, 120)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">";
                // line 127
                yield CoreExtension::getAttribute($this->env, $this->source, $context["i"], "title_en", [], "any", false, false, false, 127);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t";
                // line 129
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 131
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 135
($context["app"] ?? null), "request", [], "any", false, false, false, 135), "locale", [], "any", false, false, false, 135) == "fr")) {
                // line 136
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "imagePost", [], "any", false, false, false, 141), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["i"], "title", [], "any", false, false, false, 141), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["i"], "post_name", [], "any", false, false, false, 142)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">";
                // line 149
                yield CoreExtension::getAttribute($this->env, $this->source, $context["i"], "post_title", [], "any", false, false, false, 149);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t";
                // line 151
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 153
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 158
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 ";
        // line 161
        if ((($context["categorie"] ?? null) == "musique")) {
            yield "show active";
        }
        yield "\" id=\"musique\" role=\"tabpanel\" aria-labelledby=\"musique-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dataMusique"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 164
            yield "\t\t\t\t\t\t";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 164), "locale", [], "any", false, false, false, 164) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 164) != CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 164))) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 164) != ""))) {
                // line 165
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 170), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 170), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 171)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 179
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 179);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 183
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 185
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 189
($context["app"] ?? null), "request", [], "any", false, false, false, 189), "locale", [], "any", false, false, false, 189) == "fr")) {
                // line 190
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 195), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 195), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 196)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 204
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 204);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 208
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 210
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 215
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 ";
        // line 218
        if ((($context["categorie"] ?? null) == "photographie")) {
            yield "show active";
        }
        yield "\" id=\"photographie\" role=\"tabpanel\" aria-labelledby=\"photographie-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dataPhotographie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 221
            yield "\t\t\t\t\t\t\t";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 221), "locale", [], "any", false, false, false, 221) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 221) != CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 221))) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 221) != ""))) {
                // line 222
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 228), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 228), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 229)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 238
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 238);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 242
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 244
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 248
($context["app"] ?? null), "request", [], "any", false, false, false, 248), "locale", [], "any", false, false, false, 248) == "fr")) {
                // line 249
                yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 256), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 256), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 257)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 266
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 266);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 270
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 272
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 277
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 ";
        // line 280
        if ((($context["categorie"] ?? null) == "video")) {
            yield "show active";
        }
        yield "\" id=\"video\" role=\"tabpanel\" aria-labelledby=\"video-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dataVideo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 283
            yield "\t\t\t\t\t\t\t";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 283), "locale", [], "any", false, false, false, 283) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 283) != CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 283))) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 283) != ""))) {
                // line 284
                yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 291), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 291), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 292
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 292)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 300
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 300);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 304
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 306
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 310
($context["app"] ?? null), "request", [], "any", false, false, false, 310), "locale", [], "any", false, false, false, 310) == "fr")) {
                // line 311
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 317), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 317), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 318)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 326
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 326);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 330
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 332
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 337
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane fade mt-5 ";
        // line 340
        if ((($context["categorie"] ?? null) == "experiences")) {
            yield "show active";
        }
        yield "\" id=\"experience\" role=\"tabpanel\" aria-labelledby=\"experience-tab\">
\t\t\t\t\t<div class=\"container row\">
\t\t\t\t\t\t";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dataExperience"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 343
            yield "\t\t\t\t\t\t\t";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 343), "locale", [], "any", false, false, false, 343) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 343) != CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 343))) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 343) != ""))) {
                // line 344
                yield "\t\t\t\t\t\t\t<div class=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 349
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 349), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 349), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 350
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 350)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 358
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title_en", [], "any", false, false, false, 358);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 362
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 364
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 368
($context["app"] ?? null), "request", [], "any", false, false, false, 368), "locale", [], "any", false, false, false, 368) == "fr")) {
                // line 369
                yield "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-md-4 mb-4 clearfix\">
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<!-- Card image -->
\t\t\t\t\t\t\t\t\t<div class=\"view overlay\">
\t\t\t\t\t\t\t\t\t\t<img class=\"card-img-top lazy\" width=\"262.5\" height=\"200\" data-src=\"";
                // line 375
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "imagePost", [], "any", false, false, false, 375), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 375), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 376
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_details_postBlog", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_name", [], "any", false, false, false, 376)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card content -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 384
                yield CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 384);
                yield "
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t";
                // line 388
                yield "\t\t\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t\t\t";
                // line 390
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 395
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 396
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
\t<!--Main Layout-->

\t";
        // line 403
        yield from $this->loadTemplate("partials/videoButton.html.twig", "blog/index.html.twig", 403)->unwrap()->yield($context);
        // line 404
        yield "\t";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "blog/index.html.twig", 404)->unwrap()->yield($context);
        yield from [];
    }

    // line 407
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 408
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

\t<!-- Full background slider jQuery plugin -->
\t<script type=\"text/javascript\" src=\"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
\t<!-- Lazy load -->
\t<!-- cdnjs for lazy load -->
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>

\t<script>
\t\$(document).ready(function () { // Lazy Loading initializer
\t\$(function () {
\t\t\$('.lazy').lazy();
\t});

\t\t";
        // line 423
        yield from $this->loadTemplate("partials/js/videoButton.js.twig", "blog/index.html.twig", 423)->unwrap()->yield($context);
        // line 424
        yield "\tvar docWidth = document.documentElement.offsetWidth;

\t[].forEach.call(document.querySelectorAll('*'), function (el) {
\tif (el.offsetWidth > docWidth) {
\tconsole.log(el);
\t}
\t});
\t// Hambuger menu icon
\t\$('.animated-button-icon').on('click', function () {
\t\$('.animated-icon2').toggleClass('open');
\t});

\t// Recherche avancer
\t\$(\"#recherche-avancer\").click(function () {
\t\$(\"#sectionAvancer\").toggleClass('d-none');
\t});

\t// first thing turn Hide Menu Search bar
\t\$(\"#searchMenu\").hide();
\t// toggle menu search bar on/off
\t\$(\"#searchMenuShowHide\").click(function () {
\t\$(\"#searchMenu\").toggle(\"slide\");
\t});

\t// Set card title and card-body equal height
\tlet maxHeightTitle = 0;
\tlet maxHeightbody = 0;

\t\$(\".card-title\").each(function () {
\tif (\$(this).height() > maxHeightTitle) {
\tmaxHeightTitle = \$(this).height();
\t}
\t});

\t\$(\".card-title\").height(maxHeightTitle);
\t// card body
\t\$(\".card-body\").each(function () {
\tif (\$(this).height() > maxHeightbody) {
\tmaxHeightbody = \$(this).height();
\t}
\t});
\t\t\$(\".card-body\").height(maxHeightbody);
\t});
\t</script>

";
        yield from [];
    }

    // line 471
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 472
        yield "
\t";
        // line 473
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blog/index.html.twig";
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
        return array (  1025 => 473,  1022 => 472,  1015 => 471,  965 => 424,  963 => 423,  948 => 411,  941 => 408,  934 => 407,  928 => 404,  926 => 403,  917 => 396,  911 => 395,  904 => 390,  901 => 388,  895 => 384,  884 => 376,  878 => 375,  870 => 369,  868 => 368,  862 => 364,  859 => 362,  853 => 358,  842 => 350,  836 => 349,  829 => 344,  826 => 343,  822 => 342,  815 => 340,  811 => 338,  805 => 337,  798 => 332,  795 => 330,  789 => 326,  778 => 318,  772 => 317,  764 => 311,  762 => 310,  756 => 306,  753 => 304,  747 => 300,  736 => 292,  730 => 291,  721 => 284,  718 => 283,  714 => 282,  707 => 280,  703 => 278,  697 => 277,  690 => 272,  687 => 270,  681 => 266,  669 => 257,  663 => 256,  654 => 249,  652 => 248,  646 => 244,  643 => 242,  637 => 238,  625 => 229,  619 => 228,  611 => 222,  608 => 221,  604 => 220,  597 => 218,  593 => 216,  587 => 215,  580 => 210,  577 => 208,  571 => 204,  560 => 196,  554 => 195,  547 => 190,  545 => 189,  539 => 185,  536 => 183,  530 => 179,  519 => 171,  513 => 170,  506 => 165,  503 => 164,  499 => 163,  492 => 161,  488 => 159,  482 => 158,  475 => 153,  472 => 151,  468 => 149,  458 => 142,  452 => 141,  445 => 136,  443 => 135,  437 => 131,  434 => 129,  430 => 127,  420 => 120,  414 => 119,  407 => 114,  404 => 113,  400 => 112,  393 => 110,  376 => 106,  360 => 103,  344 => 100,  328 => 97,  312 => 94,  304 => 88,  297 => 87,  286 => 81,  273 => 76,  265 => 74,  258 => 73,  251 => 69,  247 => 68,  243 => 67,  237 => 65,  230 => 64,  218 => 63,  209 => 56,  193 => 55,  187 => 52,  179 => 51,  175 => 50,  170 => 48,  166 => 46,  149 => 45,  142 => 40,  128 => 27,  124 => 25,  120 => 24,  116 => 23,  112 => 22,  108 => 20,  105 => 18,  99 => 14,  94 => 12,  89 => 10,  86 => 9,  82 => 7,  78 => 6,  74 => 5,  70 => 4,  65 => 3,  58 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "blog/index.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/blog/index.html.twig");
    }
}
