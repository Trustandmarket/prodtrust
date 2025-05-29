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

/* marketing/details_promo.html.twig */
class __TwigTemplate_f1a0bb9dcdb030dd962ed2285dbdfbaa extends Template
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
        return "generalLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("generalLayout.html.twig", "marketing/details_promo.html.twig", 1);
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
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
<meta name=\"title\" content=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "titre", [], "any", false, false, false, 5), "html", null, true);
        yield "\">
<meta name=\"description\" content=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        yield "\">
<link rel=\"canonical\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "slug", [], "any", false, false, false, 7)])), "html", null, true);
        yield "\">
<link rel=\"shortlink\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "slug", [], "any", false, false, false, 8)])), "html", null, true);
        yield "\">
<meta property=\"og:title\" content=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
<meta property=\"og:description\" content=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "meta_description", [], "any", false, false, false, 10), "html", null, true);
        yield "\">

<meta property=\"og:image\" content=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "articles", [], "any", false, false, false, 12), 0, [], "any", false, false, false, 12), "guid", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
<meta property=\"og:type\" content=\"website\">
<meta property=\"og:url\" content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "slug", [], "any", false, false, false, 14)])), "html", null, true);
        yield "\">
<meta property=\"og:locale\" content=\"fr\" />
<meta property=\"og:locale:alternate\" content=\"en\" />

";
        // line 19
        yield "<meta name=\"twitter:card\" content=\"summary_large_image\">
<meta name=\"twitter:creator\" content=\"Kbr Global\">
<meta name=\"twitter:site\" content=\"@trustandmarket\">
<meta name=\"twitter:title\" content=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "titre", [], "any", false, false, false, 22), "html", null, true);
        yield "\">
<meta name=\"twitter:description\" content=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "meta_description", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
<meta name=\"twitter:image\" content=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "articles", [], "any", false, false, false, 24), 0, [], "any", false, false, false, 24), "guid", [], "any", false, false, false, 24), "html", null, true);
        yield "\">
<meta name=\"twitter:image:alt\" content=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "articles", [], "any", false, false, false, 25), 0, [], "any", false, false, false, 25), "guid", [], "any", false, false, false, 25), "html", null, true);
        yield "\">
";
        // line 27
        yield "
<script type=\"application/ld+json\">
\t{   
\t\t\"@context\": \"https://schema.org\", 
\t\t\"@type\": \"Article\",
\t\t\"headline\": \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "titre", [], "any", false, false, false, 32), "html", null, true);
        yield "\",
\t\t\"alternativeHeadline\": \"Operation speciale Trust&Market\",
\t\t\"image\": \"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "articles", [], "any", false, false, false, 34), 0, [], "any", false, false, false, 34), "guid", [], "any", false, false, false, 34), "html", null, true);
        yield "\",
\t\t\"author\": \"Kalide Brassier\", 
\t\t\"award\": \"\",
\t\t\"editor\": \"Kbr Global\", 
\t\t\"genre\": \"Event\", 
\t\t\"keywords\": \"\", 
\t\t\"wordcount\": \"1120\",
\t\t\"publisher\": {
\t\t\t\"@type\": \"Organization\",
\t\t\t\"name\": \"Google\",
\t\t\t\"logo\": {
\t\t\t\"@type\": \"ImageObject\",
\t\t\t\"url\": \"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\"
\t\t\t}
\t\t},
\t\t\"url\": \"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "slug", [], "any", false, false, false, 49)])), "html", null, true);
        yield "\",
\t\t\"mainEntityOfPage\": {
\t\t\t\"@type\": \"WebPage\",
\t\t\t\"@id\": \"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "slug", [], "any", false, false, false, 52)])), "html", null, true);
        yield "\"
\t\t},
\t\t\"datePublished\": \"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "post_date", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\"dateCreated\": \"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "post_date", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\"dateModified\": \"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "post_date", [], "any", false, false, false, 56), "d/m/Y"), "html", null, true);
        yield "\",
\t\t\"description\": \"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "meta_description", [], "any", false, false, false, 57), "html", null, true);
        yield "\",
\t\t\"sameAs\": [
\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t]
\t}
</script>

";
        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust &amp; Market | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("titre-promo-com", [], "marketing"), "html", null, true);
        yield " | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "titre", [], "any", false, false, false, 70), "html", null, true);
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 73
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
<!-- Gijgo datepicker css -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css\"
\tintegrity=\"sha512-oCuecFHHGu/Y4zKF8IoSoj5hQq1dLNIiUCwN08ChNW1VoMcjIIirAJT2JmKlYde6DeLN6JRSgntz6EDYDdFhCg==\"
\tcrossorigin=\"anonymous\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />
<!-- Your custom styles (optional) -->
<link rel=\"stylesheet\" href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\">
<link href=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/single-post.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

<link href=\"https://www.jqueryscript.net/css/jquerysctipttop.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lc_lightbox.css"), "html", null, true);
        yield "\" />
<style>
\t.ml-6 {
\t\tmargin-left: 5rem !important;
\t}

\t.timer {
\t\tfont-size: 12px;
\t\tcolor: #90949c;
\t\tfont-family: cursive;
\t}

\t@media only screen and (min-width: 768px) {
\t\t.fixage {
\t\t\tposition: fixed;
\t\t\tright: 0px;
\t\t}
\t}

\t@media only screen and (min-width: 768px) and (max-width: 1199px) {
\t\t.carteArticle {
\t\t\theight: 23rem;
\t\t\toverflow-y: auto;
\t\t}
\t}

\t.liArticle {
\t\tmargin: 5px !important;
\t\tborder-radius: 5px;
\t}

\t@media only screen and (min-width: 1500px) {
\t\t.fixage {
\t\t\twidth: 30%;
\t\t}
\t}

\t.grand-titre {
\t\ttext-align: center;
\t}

\t@media only screen and (max-width: 768px) {
\t\t.list_category_annonce {
\t\t\tflex-direction: column;
\t\t\twidth: 100%;
\t\t\tmax-width: 100%;
\t\t\tbox-sizing: content-box;
\t\t}

\t\t.category_annonce {
\t\t\twidth: auto;
\t\t\tmargin-left: 0%;
\t\t}
\t}

\t.list_category_annonce {
\t\tflex-wrap: wrap;
\t\tdisplay: flex;
\t\tjustify-content: space-around;
\t}

\t.carousel-cards {
\t\tflex-wrap: wrap;
\t\tdisplay: flex;
\t\tjustify-content: space-around;
\t\tposition: relative;
\t}

\t.carousel-card {
\t\twidth: auto;
\t\t/* margin-right: 2%; */
\t\tborder-radius: 15px;
\t\theight: 16rem;
\t\tbackground-repeat: no-repeat;
\t\tbackground-size: cover;
\t\tdisplay: flex;
\t\tjustify-content: space-between;
\t\talign-items: end;
\t\tmargin-bottom: 1rem;
\t\tcursor: pointer;
\t\tbox-shadow: inset 0 0 0 2000px rgb(6 48 66 / 35%);
\t\tbackground-size: cover;
\t}

\t.left-align-text {
\t\tposition: relative;
\t\tleft: 15px;
\t\tbottom: 0px;
\t\tcolor: white;
\t\ttext-transform: uppercase;
\t}

\t.right-align-text {
\t\tposition: relative;
\t\tright: 15px;
\t\tbottom: 0px;
\t\tcolor: white;
\t\ttext-transform: uppercase;
\t}

\t.detail_marketing {
\t\ttext-align: justify;
\t\tmargin-top: 1rem;
\t\tmargin-bottom: 2rem;
\t\tfont-family: 'Open Sans', sans-serif;
\t}
\t.category_annonce {
\t\twidth: auto;
\t\t/* margin-left: 1%; */
\t\tdisplay: flex;
\t\tjustify-content: center;
\t\talign-items: center;
\t\tborder: 2px solid black;
\t\tborder-radius: 10px;
\t\tpadding: 10px;
\t\tmargin-bottom: 1rem;
\t\tcursor: pointer;
\t\tcolor: black;
\t\ttext-transform: uppercase;
\t\tfont-family: 'Open Sans', sans-serif;
\t\ttext-align: center;
\t}
\t.category_annonce_ahref:hover {
\t\ttext-decoration: inherit;
\t}
\t.category_annonce_ahref:hover>div {
\t\tbackground: #262626;
\t\tcolor: white;
\t\ttext-decoration: inherit;
\t}
\t.lcl_fade_oc.lcl_pre_show #lcl_overlay,
\t.lcl_fade_oc.lcl_pre_show #lcl_window,
\t.lcl_fade_oc.lcl_is_closing #lcl_overlay,
\t.lcl_fade_oc.lcl_is_closing #lcl_window {
\t\topacity: 0 !important;
\t}
\t.lcl_fade_oc.lcl_is_closing #lcl_overlay {
\t\t-webkit-transition-delay: .15s !important;
\t\ttransition-delay: .15s !important;
\t}
\t.active-slide {
\t\tdisplay: flex !important;
\t}
\t.slide {
\t\tdisplay: none;
\t}
\t.slider-dots {
\t\tlist-style: none;
\t\tdisplay: inline-block;
\t\tpadding-left: 0;
\t\tmargin-bottom: 0;
\t}
\t.slider-dots li {
\t\tcolor: #bbbcbc;
\t\tdisplay: inline;
\t\tfont-size: 40px;
\t\tmargin-right: 5px;
\t}
\t.slider-dots li.active-dot {
\t\tcolor: #363636;
\t}
\tstrong{
\t\tfont-weight: bold;
\t}
</style>
";
        yield from [];
    }

    // line 251
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 252
        yield "\t";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 255
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 256
        yield "<div id=\"imageHolder\" class=\"view intro-2\">
\t<div class=\"full-bg-img\">
\t\t<div class=\"mask rgba-purple-light flex-center\">
\t\t\t<div class=\"container text-left align-items-end white-text wow fadeInUp\">
\t\t\t\t<h2 class=\"page-title\"></h2>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        yield from [];
    }

    // line 267
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 268
        yield "<!--Main layout-->
<main class=\"mt-5 pt-5\">
\t<div class=\"container\">
\t\t<h3 hidden class=\"h3-responsive grand-titre\">";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "titre", [], "any", false, false, false, 271), "html", null, true);
        yield "</h3>
\t\t<p class=\"detail_marketing\">
\t\t\t";
        // line 273
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "chapeau", [], "any", false, false, false, 273);
        yield "
\t\t</p>
\t\t<section>
\t\t\t<div style=\"width: 100%;display: flex;justify-content: center;\">
\t\t\t\t<ul class=\"slider-dots\">
\t\t\t\t\t";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["page_slide"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 279
            yield "\t\t\t\t\t\t<li class=\"dot ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 279) == 1)) {
                yield "active-dot";
            }
            yield "\">•</li>
\t\t\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        // line 283
        $context["x"] = 0;
        // line 284
        yield "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "articles", [], "any", false, false, false, 284));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 285
            yield "\t\t\t\t";
            $context["x"] = (($context["x"] ?? null) + 1);
            // line 286
            yield "\t\t\t\t";
            if ((($context["x"] ?? null) == 1)) {
                yield "<div class=\"row slide ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 286) == 1)) {
                    yield "active-slide";
                }
                yield "\">";
            }
            // line 287
            yield "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"carousel-card col-md-12\"
\t\t\t\t\t\tstyle=\"background-image: url(";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 289), "html", null, true);
            yield ");\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "postTitle", [], "any", false, false, false, 289), "html", null, true);
            yield "\"
\t\t\t\t\t\tattr-src=\"";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 290), "html", null, true);
            yield "\"
\t\t\t\t\t\tdata-lcl-author=\"Trust&Market\"
\t\t\t\t\t\tdata-lcl-thumb=\"";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 292), "html", null, true);
            yield "\">
\t\t\t\t\t\t<p class=\"left-align-text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"right-align-text\">
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 300
            if ((($context["x"] ?? null) == 4)) {
                // line 301
                yield "\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 302
                $context["x"] = 0;
                yield " 
\t\t\t\t";
            }
            // line 304
            yield "\t\t\t";
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        yield "\t\t</section>
\t\t<p class=\"detail_marketing\">
\t\t\t";
        // line 307
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "description", [], "any", false, false, false, 307);
        yield "
\t\t</p>
\t\t<div class=\"row\">
\t\t";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "categorie", [], "any", false, false, false, 310));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 311
            yield "\t\t\t<a target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 311), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "\" class=\"col-md-3 category_annonce_ahref\">
\t\t\t\t<div class=\"category_annonce col-md-12\">
\t\t\t\t\t";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 313), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        yield "\t\t</div>
\t</div>
</main>
<!--Main layout-->
";
        yield from [];
    }

    // line 324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 325
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        yield from [];
    }

    // line 329
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 330
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
<!-- Full background slider jQuery plugin -->
<script type=\"text/javascript\" src=\"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.js\"></script>
<script src=\"";
        // line 335
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lc_lightbox.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<!-- SKINS -->
<link rel=\"stylesheet\" href=\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lc_lightbox_skins_dark.css"), "html", null, true);
        yield "\" />
<!-- ASSETS -->
<script\tsrc=\"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alloy_finger.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<script>
\t\$(document).ready(function (e) {

\t\t// live handler
\t\tlc_lightbox('.carousel-card', {
\t\t\twrap_class: 'lcl_fade_oc',
\t\t\tgallery: true,
\t\t\tthumb_attr: 'data-lcl-thumb',
\t\t\tskin: 'dark',
\t\t\tradius: 0,
\t\t\tpadding: 0,
\t\t\tborder_w: 0,
\t\t\tsrc_attr: 'attr-src',
\t\t\tmax_width: '93%',
\t\t\tmax_height: '93%',
\t\t\tshow_author: false,
\t\t\tshow_title :true,
\t\t\tshow_descr :true,
\t\t\tthumbs_nav :true,
\t\t\ttn_hidden :0,
\t\t\ttxt_hidden :0,
\t\t});

\t\tmain();
\t});
\tvar slideSpeed = 10000;

\tvar main = function () {
\t\t//Carousel
\t\tsetInterval(function () { timedDelay() }, slideSpeed);
\t\t//arrow-next
\t\t\$('.arrow-next').click(function (e) {
\t\t\te.preventDefault();

\t\t\tvar currentSlide = \$('.active-slide');
\t\t\tvar nextSlide = currentSlide.next();

\t\t\tvar currentDot = \$('.active-dot');
\t\t\tvar nextDot = currentDot.next();

\t\t\tif (nextSlide.length === 0) {
\t\t\t\tnextSlide = \$('.slide').first();
\t\t\t\tnextDot = \$('.dot').first();
\t\t\t}

\t\t\tcurrentSlide.fadeOut(600, function () {
\t\t\t\t\$(this).removeClass('active-slide');
\t\t\t\tnextSlide.fadeIn(600).addClass('active-slide');

\t\t\t\tcurrentDot.removeClass('active-dot');
\t\t\t\tnextDot.addClass('active-dot');
\t\t\t});
\t\t});
\t\t//arrow-prev
\t\t\$('.arrow-prev').click(function (e) {
\t\t\te.preventDefault();

\t\t\tvar currentSlide = \$('.active-slide');
\t\t\tvar prevSlide = currentSlide.prev();

\t\t\tvar currentDot = \$('.active-dot');
\t\t\tvar prevDot = currentDot.prev();

\t\t\tif (prevSlide.length === 0) {
\t\t\t\tprevSlide = \$('.slide').last();
\t\t\t\tprevDot = \$('.dot').last();
\t\t\t}

\t\t\tcurrentSlide.fadeOut(600, function () {
\t\t\t\t\$(this).removeClass('active-slide');
\t\t\t\tprevSlide.fadeIn(600).addClass('active-slide');

\t\t\t\tcurrentDot.removeClass('active-dot');
\t\t\t\tprevDot.addClass('active-dot');
\t\t\t});
\t\t});
\t};

\t//timedDelay function
\tfunction timedDelay() {
\t\tvar currentSlide = \$('.active-slide');
\t\tvar nextTimedSlide = currentSlide.next();
\t\tvar currentDot = \$('.active-dot');
\t\tvar nextDot = currentDot.next();
\t\t\tif (nextTimedSlide.length === 0) {
\t\t\t\tnextTimedSlide = \$('.slide').first();
\t\t\t\tnextDot = \$('.dot').first();
\t\t\t}
\t\t\tcurrentSlide.fadeOut(600, function () {
\t\t\t\t\$(this).removeClass('active-slide');
\t\t\t\tnextTimedSlide.fadeIn(600).addClass('active-slide');

\t\t\t\tcurrentDot.removeClass('active-dot');
\t\t\t\tnextDot.addClass('active-dot');
\t\t\t});
\t}
</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketing/details_promo.html.twig";
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
        return array (  680 => 339,  675 => 337,  670 => 335,  665 => 333,  660 => 331,  656 => 330,  649 => 329,  641 => 325,  634 => 324,  625 => 317,  615 => 313,  609 => 311,  605 => 310,  599 => 307,  595 => 305,  581 => 304,  576 => 302,  573 => 301,  571 => 300,  560 => 292,  555 => 290,  549 => 289,  545 => 287,  536 => 286,  533 => 285,  515 => 284,  513 => 283,  509 => 281,  490 => 279,  473 => 278,  465 => 273,  460 => 271,  455 => 268,  448 => 267,  434 => 256,  427 => 255,  419 => 252,  412 => 251,  241 => 84,  235 => 81,  231 => 80,  221 => 73,  214 => 72,  200 => 70,  183 => 57,  179 => 56,  175 => 55,  171 => 54,  166 => 52,  160 => 49,  154 => 46,  139 => 34,  134 => 32,  127 => 27,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  106 => 19,  99 => 14,  94 => 12,  89 => 10,  85 => 9,  81 => 8,  77 => 7,  73 => 6,  69 => 5,  65 => 4,  58 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketing/details_promo.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/marketing/details_promo.html.twig");
    }
}
