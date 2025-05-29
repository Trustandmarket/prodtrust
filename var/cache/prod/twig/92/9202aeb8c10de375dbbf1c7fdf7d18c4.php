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

/* marketing/details_leads_gen.html.twig */
class __TwigTemplate_0e7d9ee5249f074c525d6c602c0a317d extends Template
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
        $this->parent = $this->loadTemplate("generalLayout.html.twig", "marketing/details_leads_gen.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_leads_gen", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "slug", [], "any", false, false, false, 7)])), "html", null, true);
        yield "\">
<link rel=\"shortlink\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_leads_gen", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "slug", [], "any", false, false, false, 8)])), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_leads_gen", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "slug", [], "any", false, false, false, 14)])), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_leads_gen", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "slug", [], "any", false, false, false, 49)])), "html", null, true);
        yield "\",
\t\t\"mainEntityOfPage\": {
\t\t\t\"@type\": \"WebPage\",
\t\t\t\"@id\": \"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_leads_gen", ["slug" => CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "slug", [], "any", false, false, false, 52)])), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("titre-lead-gen", [], "marketing"), "html", null, true);
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
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.13/combined/css/gijgo.min.css\" integrity=\"sha512-oCuecFHHGu/Y4zKF8IoSoj5hQq1dLNIiUCwN08ChNW1VoMcjIIirAJT2JmKlYde6DeLN6JRSgntz6EDYDdFhCg==\"crossorigin=\"anonymous\" />

<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css\">
<!-- Your custom styles (optional) -->
<link rel=\"stylesheet\" href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\">
<link href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/single-post.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

<link href=\"https://www.jqueryscript.net/css/jquerysctipttop.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lc_lightbox.css"), "html", null, true);
        yield "\" />
<style>
\t\t\t.detail_marketing2 {
\t\t\t\tdisplay: flex;
\t\t\t\ttext-align: justify;
\t\t\t\tmargin-top: 1rem;
\t\t\t\tmargin-bottom: 2rem;
\t\t\t\tmargin-left: 0rem;
\t\t\t\tmargin-right: 0rem;
\t\t\t\tfont-family: 'Open Sans', sans-serif;
\t\t\t}
\t\t
\t\t\t.div_separated {
\t\t\t\twidth: 50%;
\t\t\t\tpadding: 15px 60px;
\t\t\t\tflex: 1;
\t\t\t}


\t\t\t.div_border_left {
\t\t\t\tborder-left: 1.5px solid gray;
\t\t\t\tborder-color: #FF7E10;
\t\t\t}

\t\t\t.div_border_right {
\t\t\t\tborder-right: 1.5px solid gray;
\t\t\t\tborder-color: #FF7E10;
\t\t\t}

\t\t\t.formulaire{
\t\t\t\tpadding: 0px 15px;
\t\t\t}

\t\t\t.input_form{
\t\t\t\tmargin-top: 1rem;
\t\t\t\tposition: relative;
\t\t\t}

\t\t\t.title_form{
\t\t\t\tbackground: repeating-linear-gradient(to left top, #040a14, #00040a);
\t\t\t\tpadding:10px;
\t\t\t\tborder-radius: 5px;
\t\t\t}

\t\t\t.title_form h5{
\t\t\t\ttext-align: center;
\t\t\t\tcolor:white;
\t\t\t}

\t\t\t.button_form button{
\t\t\t\tbackground: repeating-linear-gradient(to left top, #FF7E10, #f07d3aa8);
\t\t\t\tborder: 0;
\t\t\t\tpadding: 7px;
\t\t\t\twidth: 100%;
\t\t\t\tcolor: white;
\t\t\t\tmargin-top:1rem;
\t\t\t\tborder-radius: 5px;
\t\t\t}

\t\t\t.input_form :is(input,select,textarea){
\t\t\t\twidth: 100%;
\t\t\t\tborder-radius: 3px;
\t\t\t\tborder: 2px solid #e3e1e1;
\t\t\t\tpadding: 10px;
\t\t\t\tcolor: #797979;
\t\t\t}
\t\t\t.date_input{
\t\t\t\tpadding-right: 50px;
\t\t\t}
\t\t\t.date_icon{
\t\t\t\tcolor: #797979;
\t\t\t\tposition: absolute;
\t\t\t\tright: 2px;
\t\t\t\tpadding: 16px;
\t\t\t\tborder-left: 1.5px solid #79797959;
\t\t\t\tcursor:pointer;
\t\t\t}
\t\t\t#ui-datepicker-div{
\t\t\t\twidth: 20% !important;
\t\t\t}

\t.ml-6 {
\t\tmargin-left: 5rem !important;
\t}

\t.timer {
\t\tfont-size: 12px;
\t\tcolor: #90949c;
\t\tfont-family: cursive;
\t}

\t
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


\t@media only screen and (min-width: 768px) {
\t\t.fixage {
\t\t\tposition: fixed;
\t\t\tright: 0px;
\t\t}
\t\t.div_separated.div_right {
\t\t\tborder-left: 1px solid #FF7E10;
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

\t\t
\t\t.detail_marketing2 {
\t\t\tflex-direction: column;
\t\t\twidth: 100%;
\t\t}
\t\t
\t\t.div_separated {
\t\t\twidth: 100%;
\t\t}

\t\t.div_border_left {
\t\t\tborder-top: 1.5px solid gray;
\t\t\tborder-left: none;
\t\t\tborder-color: #FF7E10;
\t\t}

\t\t.div_border_right {
\t\t\tborder: none;
\t\t}

\t\t#ui-datepicker-div {
\t\t\twidth: 55% !important;
\t\t}
\t}
</style>
";
        yield from [];
    }

    // line 355
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 356
        yield "\t";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 359
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 360
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

    // line 371
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 372
        yield "<!--Main layout-->
<main class=\"mt-5 pt-5\">
\t<div class=\"container\">
\t\t<h3 hidden class=\"h3-responsive grand-titre\">";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "titre", [], "any", false, false, false, 375), "html", null, true);
        yield "</h3>
\t\t<p class=\"detail_marketing\">
\t\t\t";
        // line 377
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "chapeau", [], "any", false, false, false, 377);
        yield "
\t\t</p>
\t\t<section>
\t\t\t<div style=\"width: 100%;display: flex;justify-content: center;\">
\t\t\t\t<ul class=\"slider-dots\">
\t\t\t\t\t";
        // line 382
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
            // line 383
            yield "\t\t\t\t\t\t<li class=\"dot ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 383) == 1)) {
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
        // line 385
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        // line 387
        $context["x"] = 0;
        // line 388
        yield "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "articles", [], "any", false, false, false, 388));
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
            // line 389
            yield "\t\t\t\t";
            $context["x"] = (($context["x"] ?? null) + 1);
            // line 390
            yield "\t\t\t\t";
            if ((($context["x"] ?? null) == 1)) {
                yield "<div class=\"row slide ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 390) == 1)) {
                    yield "active-slide";
                }
                yield "\">";
            }
            // line 391
            yield "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"carousel-card col-md-12\"
\t\t\t\t\t\tstyle=\"background-image: url(";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 393), "html", null, true);
            yield ");\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "postTitle", [], "any", false, false, false, 393), "html", null, true);
            yield "\"
\t\t\t\t\t\tattr-src=\"";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 394), "html", null, true);
            yield "\"
\t\t\t\t\t\tdata-lcl-author=\"Trust&Market\"
\t\t\t\t\t\tdata-lcl-thumb=\"";
            // line 396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "guid", [], "any", false, false, false, 396), "html", null, true);
            yield "\">
\t\t\t\t\t\t<p class=\"left-align-text\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"right-align-text\">
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 404
            if ((($context["x"] ?? null) == 4)) {
                // line 405
                yield "\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 406
                $context["x"] = 0;
                yield " 
\t\t\t\t";
            }
            // line 408
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
        // line 409
        yield "\t\t</section>
\t\t<div class=\"detail_marketing2\">
\t\t\t<div class=\"div_separated div_border_right div_left\">
\t\t\t\t";
        // line 412
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "description", [], "any", false, false, false, 412);
        yield "
\t\t\t</div>
\t\t\t<div class=\"div_separated div_border_left div_right\">
\t\t\t\t<div class=\"title_form\">
\t\t\t\t\t<h5 class=\"title_font_form\">Envoyez-nous votre besoin</h5>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 418
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_leads_gen_send_email");
        yield "\" method=\"post\" id='submitForm'>
\t\t\t\t\t<div class=\"formulaire\">
\t\t\t\t\t\t<div class=\"form-group input_form\">
\t\t\t\t\t\t\t<input hidden value='";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "titre", [], "any", false, false, false, 421), "html", null, true);
        yield "' name='titre'>
\t\t\t\t\t\t\t<input required type=\"text\" name=\"prenom\" id=\"\" placeholder=\"Prénom\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group input_form\">
\t\t\t\t\t\t\t<input required type=\"text\" name=\"nom\" id=\"\" placeholder=\"Nom\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group input_form\">
\t\t\t\t\t\t\t<input required type=\"email\" name=\"email\" id=\"\" placeholder=\"Email\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group input_form\">
\t\t\t\t\t\t\t<input required type=\"text\" name=\"code_postal\" id=\"\" placeholder=\"Code postal\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group input_form\">
\t\t\t\t\t\t\t<input type=\"tel\" name=\"numero_telephone\" id=\"numero_telephone\" placeholder=\"Téléphone Ex: +33678787878\" class=\"numero_telephone\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group input_form\">
\t\t\t\t\t\t\t<select required name=\"type_evenement\" id=\"type_evenement\">
\t\t\t\t\t\t\t\t<option value=\"\">Votre évenement ou besoin</option>
\t\t\t\t\t\t\t\t<option value=\"Mariage\">Mariage</option>
\t\t\t\t\t\t\t\t<option value=\"Concert\">Concert</option>
\t\t\t\t\t\t\t\t<option value=\"Salon\">Salon</option>
\t\t\t\t\t\t\t\t<option value=\"Séminaire\">Séminaire</option>
\t\t\t\t\t\t\t\t<option value=\"Exposition\">Exposition</option>
\t\t\t\t\t\t\t\t<option value=\"Vernissage\">Vernissage</option>
\t\t\t\t\t\t\t\t<option value=\"Autres\">Autres</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group input_form\">
\t\t\t\t\t\t\t<input required type=\"text\" name=\"date_evenement\" id=\"date_evenement\" placeholder=\"Date\" class=\"date_input\">
\t\t\t\t\t\t\t<i class=\"date_icon fa fa-calendar\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group input_form\">
\t\t\t\t\t\t\t<input required type=\"number\" name=\"nombre_invites\" id=\"nombre_invites\" placeholder=\"Nombre de personnes\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group input_form\">
\t\t\t\t\t\t\t<textarea required name=\"message\" id=\"\" cols=\"30\" rows=\"6\" placeholder=\"Demandez une doc, un tarif, une dispo ou un rendez-vous, c'est à vous ...\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"button_form\">
\t\t\t\t\t<button type=\"submit\">
\t\t\t\t\t\tEnvoyer
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t";
        // line 468
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["ops"] ?? null), "categorie", [], "any", false, false, false, 468));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 469
            yield "\t\t\t<a target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 469), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "\" class=\"col-md-3 category_annonce_ahref\">
\t\t\t\t<div class=\"category_annonce col-md-12\">
\t\t\t\t\t";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 471), "html", null, true);
            yield "
\t\t\t\t</div>
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 475
        yield "\t\t</div>
\t</div>
</main>
<!--Main layout-->
";
        yield from [];
    }

    // line 482
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 483
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        yield from [];
    }

    // line 487
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 488
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://code.jquery.com/ui/1.13.2/jquery-ui.js\"></script>
<script src=\"";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
<!-- Full background slider jQuery plugin -->
<script type=\"text/javascript\" src=\"";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.js\"></script>
<script src=\"";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lc_lightbox.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
<!-- SKINS -->
<link rel=\"stylesheet\" href=\"";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lc_lightbox_skins_dark.css"), "html", null, true);
        yield "\" />
<!-- ASSETS -->
<script\tsrc=\"";
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/alloy_finger.min.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>
";
        // line 501
        yield "<script>
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

\t\t
\t\t\$('.date_input').datepicker({
\t\t\tdateFormat: 'dd-M-yy',
\t\t\tminDate: 1,
\t\t\tcloseText: 'Fermer',
\t\t\tprevText: 'Précédent',
\t\t\tnextText: 'Suivant',
\t\t\tcurrentText: 'Aujourd\\'hui',
\t\t\tmonthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
\t\t\tmonthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
\t\t\tdayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
\t\t\tdayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
\t\t\tdayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
\t\t\tweekHeader: 'Sem.'
\t\t},);
\t\t
\t\t\$('.date_icon').on('click', function() {
\t\t\t\$('.date_input').focus();
\t\t})

\t\t\$(\"#numero_telephone\").keyup(function () {
\t\t\tlet phone = \$(\"#numero_telephone\").val().replace(/\\s|[a-zA-Z]/g, \"\");
\t\t\t\$(\"#numero_telephone\").val(phone);
\t\t});
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

\t\$('#submitForm').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
\t\te.preventDefault();
\t\tif(\$('.numero_telephone').val().match(/^(?:(?:\\+|00)33|0)\\s*[1-9](?:[\\s.-]*\\d{2}){4}\$/gmi)){
\t\ttoastr.info('";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.requete-en-cours"), "html", null, true);
        yield "');
\t\tvar \$form = \$(this);
\t\t\tvar formdata = (window.FormData) ? new FormData(\$form[0]) : null;
\t\t\tvar data = (formdata !== null) ? formdata : \$form.serialize();

\t\t\$.ajax({
\t\t\turl: \$form.attr('action'),
\t\t\ttype: \$form.attr('method'),
\t\t\tcontentType: false,
\t\t\tprocessData: false,
\t\t\tdata: data,
\t\t\tsuccess: function (reponse) {
\t\t\twindow.location = \"\";
\t\t\tif (reponse != 0) {
\t\t\t\ttoastr.clear();
\t\t\t\ttoastr.success('";
        // line 641
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "');
\t\t\t} else if (reponse == 0) {
\t\t\t\ttoastr.clear();
\t\t\t\ttoastr.error('";
        // line 644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "');
\t\t\t}

\t\t\t},
\t\t\terror: function (reponse) {
\t\t\t\ttoastr.clear();
\t\t\t\ttoastr.error('";
        // line 650
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "');
\t\t\t}
\t\t});
\t\t}else{
\t\t\ttoastr.warning('Entrez un numéro de téléphone valide');
\t\t}
\t\treturn false;
\t});
</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketing/details_leads_gen.html.twig";
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
        return array (  1009 => 650,  1000 => 644,  994 => 641,  976 => 626,  849 => 501,  845 => 498,  840 => 496,  835 => 494,  830 => 492,  825 => 490,  820 => 488,  813 => 487,  805 => 483,  798 => 482,  789 => 475,  779 => 471,  773 => 469,  769 => 468,  719 => 421,  713 => 418,  704 => 412,  699 => 409,  685 => 408,  680 => 406,  677 => 405,  675 => 404,  664 => 396,  659 => 394,  653 => 393,  649 => 391,  640 => 390,  637 => 389,  619 => 388,  617 => 387,  613 => 385,  594 => 383,  577 => 382,  569 => 377,  564 => 375,  559 => 372,  552 => 371,  538 => 360,  531 => 359,  523 => 356,  516 => 355,  240 => 83,  234 => 80,  230 => 79,  221 => 73,  214 => 72,  200 => 70,  183 => 57,  179 => 56,  175 => 55,  171 => 54,  166 => 52,  160 => 49,  154 => 46,  139 => 34,  134 => 32,  127 => 27,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  106 => 19,  99 => 14,  94 => 12,  89 => 10,  85 => 9,  81 => 8,  77 => 7,  73 => 6,  69 => 5,  65 => 4,  58 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketing/details_leads_gen.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/marketing/details_leads_gen.html.twig");
    }
}
