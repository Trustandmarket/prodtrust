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

/* annonces/listeResultat.html.twig */
class __TwigTemplate_53a39676d46b05397b2ee6ff64062a68 extends Template
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
        // line 2
        $context["page_sub_name"] = "Annonces";
        // line 3
        if ((array_key_exists("nom_commercial", $context) && ($context["nom_commercial"] ?? null))) {
            $context["page_sub_name"] = ($context["nom_commercial"] ?? null);
        } else {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                // line 5
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 5) == ($context["type_prestation"] ?? null))) {
                    // line 6
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 6), "locale", [], "any", false, false, false, 6) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 6) != ""))) {
                        // line 7
                        $context["page_sub_name"] = CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 7);
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 8
$context["prestation"], "name", [], "any", false, false, false, 8) != "")) {
                        $context["page_sub_name"] = CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 8);
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 1
        $this->parent = $this->loadTemplate("otherLayout.html.twig", "annonces/listeResultat.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <link rel=\"icon\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <meta name=\"title\" content=\"Trust &amp; Market | ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_sub_name"] ?? null), "html", null, true);
        yield "\">
    <meta name=\"description\"
          content=\"";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 27) == ($context["type_prestation"] ?? null))) {
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "locale", [], "any", false, false, false, 27) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 27) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 27), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 27), "html", null, true);
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " - ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sous_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 27) == ($context["services_proposes"] ?? null))) {
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "locale", [], "any", false, false, false, 27) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 27) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 27), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 27), "html", null, true);
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "\">
    <link rel=\"canonical\"
          href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => ($context["type_prestation"] ?? null), "services_proposes" => ($context["services_proposes"] ?? null), "code_postal_ville" => ($context["code_postal_ville"] ?? null), "noPage" => ($context["noPage"] ?? null)])), "html", null, true);
        yield "\">
    <link rel=\"shortlink\"
          href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => ($context["type_prestation"] ?? null), "services_proposes" => ($context["services_proposes"] ?? null), "code_postal_ville" => ($context["code_postal_ville"] ?? null), "noPage" => ($context["noPage"] ?? null)])), "html", null, true);
        yield "\">
    ";
        // line 33
        yield "    <meta property=\"og:title\" content=\"Trust &amp; Market |\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_sub_name"] ?? null), "html", null, true);
        yield "\">
    <meta property=\"og:description\" content=\"";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "toutes-annonces"]);
        yield "\">
    <meta property=\"og:image\" content=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\">
    <meta propery=\"og:type\" content=\"website\">
    ";
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust &amp; Market | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_sub_name"] ?? null), "html", null, true);
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mon-profil.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">
    <style>
        .pagination .page-item.active .page-link {
            background-color: #f17b30;
        }

        .card-footer {
            text-align: end;
        }

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

        .keyword_search {
            width: 100%;
            background-color: #ffffff;
            position: relative;
            border-radius: 4rem;
            padding: 10px;
            margin-top: 2rem;
            border: 1px solid #262626;
        }

        .keyword_search .search__box {
            width: 85%;
            background: none;
            resize: none;
            color: #000;
            font-size: 13px;
            border-radius: 2rem;
            outline: none;
            border: none;
            position: relative;
            transition: all .75s ease-in;
            cursor: pointer;
            margin-top: 0px !important;
            text-align: left !important;
            text-align-last: left !important;
            touch-action: manipulation;
        }

        .keyword_search .search__icon {
            cursor: pointer;
            position: absolute;
            color: #ff7e10;
            padding: 0.7rem;
            border-radius: 50%;
            background-color: #262626;
            top: 3px;
        }

        .keyword_search .show {
            width: 85%;
            border: 1px solid #ff7e10;
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

        .overlay .btnh1-display {
            position: absolute;
            top: 10%;
            left: 92%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            font-size: 16px;
            border: none;
            cursor: pointer;
            z-index: 1;
        }

        @media only screen and (max-width: 768px) {
            #custom-filter {
                padding-right: 15px !important;
                padding-left: 15px !important;
            }

        }

        .autocompleteResult {
            background: white;
            position: absolute;
            z-index: 1;
            height: 200px;
            overflow-y: auto;
            overflow-x: clip;
            width: 90%;
            border: 1px solid gray;
            border-radius: 8px;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .resultIndex a {
            width: 100%;
            height: 100%;
            display: block;
            margin: 0;
            padding: 0;
        }

        .resultIndex {
            border-bottom: 1px solid gray;
            cursor: pointer;
            padding: 10px;
        }

        .resultIndex:hover {
            background: #000;
            color: #fff;
        }

        .imgSearchResult {
            height: 2.5rem;
            width: 2.5rem;
            border-radius: 50%;
            margin-right: 1rem;
            object-fit: cover;
        }
        .breadcrumb-h1, .breadcrumb-h2, .breadcrumb-h3 {
            font-size: inherit;  /* Keeps the font size the same as the surrounding text */
            margin: 0;  /* Removes any extra margins that come with heading tags */
            font-weight: inherit;  /* Keeps the font weight the same as the surrounding text */
            display: inline;  /* Ensures the headings behave like inline text */
        }


    </style>
";
        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 254
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 257
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 259
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 260
        yield "    <!--Main Layout-->
    <main class=\"\">
        <div class=\"container\">
            <div class=\"mt-5\">
                <div class=\"row\">
                    <div class=\"col-md-3 py-4 mb-4 custom-filter\" id=\"custom-filter\">
                        <h3>";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.titre", [], "liste_annonces");
        yield "</h3>
                        <div class=\"container\">
                            <form action=\"\" id=\"filtreForm\">
                                <select name=\"type_prestation\" id=\"type_prestation2\"
                                        class=\"browser-default custom-select mr-2 mb-2\">
                                    <option value=\"\">";
        // line 271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.prestation", [], "liste_annonces");
        yield "</option>
                                    ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 273
            yield "                                        <option ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 273) == ($context["type_prestation"] ?? null))) {
                yield "selected='selected'";
            }
            // line 274
            yield "                                                value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 274), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 274), "locale", [], "any", false, false, false, 274) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 274) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 274), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 274), "html", null, true);
            }
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        yield "                                </select>
                                <select name=\"services_proposes\" id=\"services_proposes2\"
                                        class=\"browser-default custom-select mr-2 mb-2\">
                                    <option value=\"\">";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.service", [], "liste_annonces");
        yield "</option>
                                    ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sous_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
            // line 281
            yield "                                        <option ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 281) == ($context["type_prestation"] ?? null))) {
                yield "selected='selected'";
            }
            // line 282
            yield "                                                value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 282), "html", null, true);
            yield "\">";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 282), "locale", [], "any", false, false, false, 282) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 282) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 282), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 282), "html", null, true);
            }
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        yield "                                </select>
                                <input type=\"text\"
                                       value=\"";
        // line 286
        if ((($context["code_postal_ville"] ?? null) != "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_postal_ville"] ?? null), "html", null, true);
        }
        yield "\"
                                       class=\"form-control\" name=\"code_postal_ville\" id=\"code_postal_ville2\"
                                       placeholder=\"Code postal et/ou Ville\">
                                <input hidden value=\"";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["noPage"] ?? null), "html", null, true);
        yield "\" id=\"noPage\" class=\"noPage\" name=\"noPage\"/>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <button class=\"btn btn-lg btn-primary waves-effect waves-light col-md-12 search-normal-btn\"
                                                type=\"sumbit\">";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.soumettre", [], "liste_annonces");
        yield "</button>
                                        <button class=\"btn btn-lg btn-primary waves-effect waves-light col-md-12 search-icon-btn\"
                                                type=\"sumbit\">
                                            <i class=\"fas fa-search\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class=\"autocomplete_keyword_search\">
                            <div class=\"keyword_search\">
                                <input type=\"text\" id=\"box\" placeholder=\"Recherche par mots-clés...\"
                                       class=\"search__box\"/>
                                <i class=\"fas fa-search search__icon\" id=\"icon\" onclick=\"toggleShow()\"></i>
                            </div>
                            <div class=\"autocompleteResult\">

                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-9\" id=\"listeAnnonces\">
                        ";
        // line 315
        if ((array_key_exists("p_empty_search_text", $context) && ($context["p_empty_search_text"] ?? null))) {
            // line 316
            yield "                            ";
            if ((array_key_exists("nom_commercial", $context) && ($context["nom_commercial"] ?? null))) {
                // line 317
                yield "                                ";
                $context["p_empty_search_text"] = CoreExtension::getAttribute($this->env, $this->source, ($context["p_empty_search_text"] ?? null), "postContent", [], "any", false, false, false, 317);
                // line 318
                yield "                                ";
                $context["replaced_p_empty_search_text"] = Twig\Extension\CoreExtension::replace(($context["p_empty_search_text"] ?? null), ["nom_commercial" => ($context["nom_commercial"] ?? null)]);
                // line 319
                yield "                                <div class=\"filter-text mr-2\"
                                     style=\"margin-top: -2rem;margin-bottom: 2rem;\">";
                // line 320
                yield ($context["replaced_p_empty_search_text"] ?? null);
                yield "</div>
                            ";
            } else {
                // line 322
                yield "                                <div class=\"filter-text mr-2\"
                                     style=\"margin-top: -2rem;margin-bottom: 2rem;\">";
                // line 323
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["p_empty_search_text"] ?? null), "postContent", [], "any", false, false, false, 323);
                yield "</div>
                            ";
            }
            // line 325
            yield "                        ";
        }
        // line 326
        yield "                        <!-- list des prestations -->
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <!-- First breadcrumb gets <h1> -->
                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
        yield "\">
                                        <h1 class=\"breadcrumb-h1\">";
        // line 332
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.annonce", [], "liste_annonces");
        yield "</h1>
                                    </a>
                                </li>

                                <!-- If type_prestation exists, it gets <h2> -->
                                ";
        // line 337
        if ((($context["type_prestation"] ?? null) != "")) {
            // line 338
            yield "                                    <li class=\"breadcrumb-item ";
            if ((($context["services_proposes"] ?? null) == "")) {
                yield "active";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["services_proposes"] ?? null), "html", null, true);
            }
            yield "\" aria-current=\"page\">
                                        <a href=\"";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => ($context["type_prestation"] ?? null), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
            yield "\">
                                            ";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                // line 341
                yield "                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 341) == ($context["type_prestation"] ?? null))) {
                    // line 342
                    yield "                                                    <h2 class=\"breadcrumb-h2\">
                                                        ";
                    // line 343
                    if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 343), "locale", [], "any", false, false, false, 343) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 343) != ""))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 343), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 343), "html", null, true);
                    }
                    // line 344
                    yield "                                                    </h2>
                                                ";
                }
                // line 346
                yield "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 347
            yield "                                        </a>
                                    </li>

                                    <!-- If services_proposes exists, it gets <h3> -->
                                    ";
            // line 351
            if ((($context["services_proposes"] ?? null) != "")) {
                // line 352
                yield "                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                            <a href=\"#\">
                                                ";
                // line 354
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["sous_categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["prestation"]) {
                    // line 355
                    yield "                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "slug", [], "any", false, false, false, 355) == ($context["services_proposes"] ?? null))) {
                        // line 356
                        yield "                                                        <h3 class=\"breadcrumb-h3\">
                                                            ";
                        // line 357
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 357), "locale", [], "any", false, false, false, 357) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 357) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "content", [], "any", false, false, false, 357), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["prestation"], "name", [], "any", false, false, false, 357), "html", null, true);
                        }
                        // line 358
                        yield "                                                        </h3>
                                                    ";
                    }
                    // line 360
                    yield "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['prestation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 361
                yield "                                            </a>
                                        </li>
                                    ";
            }
            // line 364
            yield "                                ";
        } elseif ((array_key_exists("nom_commercial", $context) && ($context["nom_commercial"] ?? null))) {
            // line 365
            yield "                                    <!-- If no type_prestation, nom_commercial gets <h2> -->
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"#\"><h2 class=\"breadcrumb-h2\">";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nom_commercial"] ?? null), "html", null, true);
            yield "</h2></a>
                                    </li>
                                ";
        }
        // line 370
        yield "                            </ol>


                        </nav>
                        <div class=\"row mb-12\">
                            ";
        // line 375
        yield from $this->loadTemplate("annonces/partialDynamicPagination.html.twig", "annonces/listeResultat.html.twig", 375)->unwrap()->yield($context);
        // line 376
        yield "                            <div class=\"col-md-8 text-right\">
                                <form action=\"\" class=\"form-inline float-right\">
                                    <h6 class=\"filter-text mr-2\">";
        // line 378
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.titre", [], "liste_annonces");
        yield "</h6>
                                    <select name=\"prix\" id=\"triPrix\" class=\"browser-default custom-select mr-2 mb-2\">
                                        <option value=\"all\">";
        // line 380
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.prix", [], "liste_annonces");
        yield "</option>
                                        <option value=\"0\">";
        // line 381
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.croissant", [], "liste_annonces");
        yield "</option>
                                        <option value=\"1\">";
        // line 382
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.decroissant", [], "liste_annonces");
        yield "</option>
                                    </select>&nbsp;
                                    <select name=\"date-dajout\" id=\"triDate\"
                                            class=\"browser-default custom-select mr-2 mb-2\">
                                        <option value=\"all\">";
        // line 386
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.date-ajout", [], "liste_annonces");
        yield "</option>
                                        <option value=\"1\">";
        // line 387
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.recent", [], "liste_annonces");
        yield "
                                            &gt;
                                            ";
        // line 389
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.ancien", [], "liste_annonces");
        yield "</option>
                                        <option value=\"0\">";
        // line 390
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.ancien", [], "liste_annonces");
        yield "
                                            &lt;
                                            ";
        // line 392
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.recent", [], "liste_annonces");
        yield "</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class=\"mt-3 row isotope owl-theme\">
                            ";
        // line 398
        if ( !(null === ($context["listeAnnonces"] ?? null))) {
            // line 399
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["listeAnnonces"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                // line 400
                yield "                                    <div class=\"col-lg-4 col-md-6 col-sm-6 mb-5 clearfix isotope-grid\">
                                        <!-- Card -->
                                        <div class=\"card\">
                                            <!-- Card image -->
                                            ";
                // line 404
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 404))) {
                    // line 405
                    yield "                                                <div class=\"view overlay isotope-item\"
                                                     style=\"height:160px; border-bottom: 4px solid #f17b30\">
                                                    <img loading=\"lazy\" class=\"card-img-top lazy\" width=\"100%\"
                                                         src=\"";
                    // line 408
                    if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 408))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 408), 0, [], "any", false, false, false, 408), "guid", [], "any", false, false, false, 408), ["www." => ""]), "html", null, true);
                    } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 408))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 408), 0, [], "any", false, false, false, 408), "guid", [], "any", false, false, false, 408), ["www." => ""]), "html", null, true);
                    } else {
                        yield "https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg";
                    }
                    yield "\"
                                                         alt=\"Card image cap\">
                                                    <div class=\"btnh1-display\">
                                                        <button class=\"btn-wish btnh1\" data-id=\"";
                    // line 411
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 411), "html", null, true);
                    yield "\">
                                                            ";
                    // line 412
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 412), ($context["text_wishlist"] ?? null))) {
                        yield "<i style=\"color: red;\"
                                                                                                 class=\"fas fa-heart\"></i> ";
                    } else {
                        // line 414
                        yield "                                                                <i class=\"far fa-heart\"></i> ";
                    }
                    yield "</button>
                                                    </div>
                                                    <a href=\"";
                    // line 416
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 416) != "")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 416)]), "html", null, true);
                    }
                    yield "\">
                                                        <div class=\"mask rgba-white-slight\"></div>
                                                    </a>
                                                </div>
                                            ";
                }
                // line 421
                yield "                                            <!-- Card content -->
                                            <div class=\"card-body\">
                                                <!-- Title -->
                                                <h4 class=\"card-title fs-18\">
                                                    ";
                // line 425
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 425), "locale", [], "any", false, false, false, 425) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 425) != ""))) {
                    // line 426
                    yield "                                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 426), "html", null, true);
                    yield "
                                                    ";
                } else {
                    // line 428
                    yield "                                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre", [], "any", false, false, false, 428), "html", null, true);
                    yield "
                                                    ";
                }
                // line 430
                yield "                                                </h4>
                                                <!-- Category -->
                                                <h5 class=\"card-sub-title fs-15\">
                                                    <a href=\"";
                // line 433
                if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 433)) == "produits")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "produits", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                    yield " ";
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 433), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                    yield " ";
                }
                yield "\">
                                                        ";
                // line 434
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 434), "locale", [], "any", false, false, false, 434) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 434) != ""))) {
                    // line 435
                    yield "                                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 435), "html", null, true);
                    yield "
                                                        ";
                } else {
                    // line 437
                    yield "                                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 437), "html", null, true);
                    yield "
                                                        ";
                }
                // line 439
                yield "                                                    </a>
                                                </h5>
                                                <!-- Sub Category -->
                                                <h5 class=\"card-sub-category fs-18\">
                                                    <a href=\"";
                // line 443
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 443), "services_proposes" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorieSlug", [], "any", false, false, false, 443), "code_postal_ville" => ""]), "html", null, true);
                yield "\">
                                                        ";
                // line 444
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 444), "locale", [], "any", false, false, false, 444) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 444) != ""))) {
                    // line 445
                    yield "                                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 445), "html", null, true);
                    yield "
                                                        ";
                } else {
                    // line 447
                    yield "                                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie", [], "any", false, false, false, 447), "html", null, true);
                    yield "
                                                        ";
                }
                // line 449
                yield "                                                    </a>
                                                </h5>
                                                <!-- Price -->
                                                <p class=\"annonce-price fs-24 mb-0\">
                                                    <span data-stars=\"";
                // line 453
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 453), 0), "html", null, true);
                yield "\"
                                                          class=\"number\">";
                // line 454
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 454), "html", null, true);
                yield "</span>
                                                    ";
                // line 455
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 455) != null)) {
                    // line 456
                    yield "                                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 456), "html", null, true);
                } else {
                    yield "€
                                                    ";
                }
                // line 458
                yield "                                                </p>
                                            </div>
                                            <div class=\"card-footer bg-transparent\">
                                                <a target=\"_blank\" href=\"";
                // line 461
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 461), "id_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_author", [], "any", false, false, false, 461)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 461), "html", null, true);
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
            // line 467
            yield "                            ";
        }
        // line 468
        yield "                        </div>
                        ";
        // line 469
        yield from $this->loadTemplate("annonces/partialDynamicPagination.html.twig", "annonces/listeResultat.html.twig", 469)->unwrap()->yield($context);
        // line 470
        yield "                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--Main Layout-->

    ";
        // line 477
        yield from $this->loadTemplate("partials/project.html.twig", "annonces/listeResultat.html.twig", 477)->unwrap()->yield($context);
        // line 478
        yield "    ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "annonces/listeResultat.html.twig", 478)->unwrap()->yield($context);
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
        yield "    ";
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
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 491
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
    <!-- RateIt Js -->
    <script type=\"text/javascript\" src=\"";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/rateit/jquery.rateit.min.js"), "html", null, true);
        yield "\"></script>

    <script>
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) { // console.log(el);
                }
            });

            function toggleShow() {
                var el = document.getElementById(\"box\");
                el.classList.toggle(\"show\");
            }

            \$(document).click(function (event) {
                var \$target = \$(event.target);
                if (!\$target.closest('.autocompleteResult').length && \$('.autocompleteResult').is(\":visible\")) {
                    ";
        // line 524
        yield "                    \$('.autocompleteResult').css('display', 'none');
                }
            });

            \$('.search__box').on('keyup', function (e) {
                const value = \$(this).val();
                \$('.autocompleteResult').empty();
                \$('.autocompleteResult').css('display', 'flex');
                \$('.autocompleteResult').html(`En cours...`);
                const data = new FormData();
                data.append(\"term\", value);
                \$.ajax({
                    url: \"";
        // line 536
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        yield "\",
                    type: \"POST\",
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (data) {
                        //console.log(data);
                        \$('.autocompleteResult').empty();
                        \$('.autocompleteResult').css('display', 'block');
                        if (data.length > 0) {
                            data.forEach(
                                element => {
                                    \$('.autocompleteResult').append(`
\t\t\t\t\t\t\t<div class=\"resultIndex\">
\t\t\t\t\t\t\t\t<a href=\"/fr/annonces/details/\${element.slug}\"><img src=\"\${element.image}\" class=\"imgSearchResult\">\${element.name}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t`)
                                });
                        } else {
                            \$('.autocompleteResult').css('display', 'none');
                        }
                    },
                    error: function (error) {
                        \$('.autocompleteResult').empty();
                        \$('.autocompleteResult').css('display', 'none');
                    }
                })
            })
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


// Set card title and card-body equal height
            let maxHeightbody = 0;
// card body
            \$(\".card-body\").each(function () {
                if (\$(this).height() > maxHeightbody) {
                    maxHeightbody = \$(this).height();
                }
            });
            \$(\".card-body\").height(maxHeightbody);
// Modification des données newsletter de l'utilisateur
            \$('#triPrix').on('change', function (e) {
                if (\$('#triPrix').val() == 0) {
//console.log(\$('#triPrix').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                dsb = parseInt(\$(b).find('.number').eq(0).text());
                            return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                        }));
                    });
                } else { // console.log(\$('#triPrix').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                dsb = parseInt(\$(b).find('.number').eq(0).text());
                            return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                        }));
                    });
                }

            });

            \$('#triDate').on('change', function (e) {

                if (\$('#triDate').val() == 0) { // console.log(\$('#triDate').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                            return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                        }));
                    });
                } else { // console.log(\$('#triDate').val());
                    \$('.isotope').each(function () {
                        \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                            let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                            return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                        }));
                    });
                }
            });

// Tri des pro
            \$('#relevance').on('change', function (e) {
                var relevanceData = \$('#relevance').val();
                switch (relevanceData) {
                    case '1':
                        break;
                    case '2':
                    case '3':
                        \$('.isotope-pro').each(function () {
                            \$(this).html(\$(this).find('.isotope-grid-pro').sort(function (a, b) {
                                let dsa = parseInt(\$(a).find('.tri-date-pro').eq(0).text()),
                                    dsb = parseInt(\$(b).find('.tri-date-pro').eq(0).text());
                                return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                            }));
                        });
                        break;
                    case '4':
// console.log(\$('#relevance').val());
                        \$('.isotope-pro').each(function () {
                            \$(this).html(\$(this).find('.isotope-grid-pro').sort(function (a, b) {
                                let dsa = parseInt(\$(a).find('.prix-indicatif').eq(0).text()),
                                    dsb = parseInt(\$(b).find('.prix-indicatif').eq(0).text());
                                return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                            }));
                        });
                        break;
                    case '5':
// console.log(\$('#relevance').val());
                        \$('.isotope-pro').each(function () {
                            \$(this).html(\$(this).find('.isotope-grid-pro').sort(function (a, b) {
                                let dsa = parseInt(\$(a).find('.prix-indicatif').eq(0).text()),
                                    dsb = parseInt(\$(b).find('.prix-indicatif').eq(0).text());
                                return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                            }));
                        });
                        break;
                    default:
                }
            });

// Lazy Loading initializer
            \$(function () {
                \$('.lazy').lazy();
            });

            // like user profile
            \$('.like-btn').on('click', function () {
                \$(this).toggleClass('userhas-like');
            });

            \$('#filtreForm').on('submit', function (e) {
                e.preventDefault();
                if (\$.trim(\$('#type_prestation2').val()) == \"\") {
                    toastr.error('Le type de prestation est obligatoire');
                    return;
                }

                let url = \"";
        // line 686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_filtre_recherche_xhr", ["_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 686), "get", ["_locale"], "method", false, false, false, 686)]), "html", null, true);
        yield "\";
                let type_prestation = \$('#type_prestation2').val();
                let sous_categorie = \$('#services_proposes2').val();
                let code_postal_ville = \$('#code_postal_ville2').val();
                let noPage = \$('#noPage').val();
                let page = \"resultat\";

                \$.ajax({
                    url: url,
                    method: \"post\",
                    data: {
                        type_prestation: type_prestation,
                        services_proposes: sous_categorie,
                        code_postal_ville: code_postal_ville,
                        noPage: noPage,
                        page: page
                    },
                    success: function (data) {
//console.log(data.html);
                        if (data.html) {
                            \$('#listeAnnonces').html(data.html);
                        }
                        let maxHeightTitle = 0;
                        let maxHeightbody = 0;
                        \$(\".card-body\").each(function () {
                            if (\$(this).height() > maxHeightbody) {
                                maxHeightbody = \$(this).height();
                            }
                        });
                        \$(\".card-body\").height(maxHeightbody);
                        \$('#triPrix').on('change', function (e) {
                            if (\$('#triPrix').val() == 0) {
//console.log(\$('#triPrix').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.number').eq(0).text());
                                        return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                                    }));
                                });
                            } else { // console.log(\$('#triPrix').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.number').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.number').eq(0).text());
                                        return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                                    }));
                                });
                            }

                        });

                        \$('#triDate').on('change', function (e) {

                            if (\$('#triDate').val() == 0) { // console.log(\$('#triDate').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                                        return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                                    }));
                                });
                            } else { // console.log(\$('#triDate').val());
                                \$('.isotope').each(function () {
                                    \$(this).html(\$(this).find('.isotope-grid').sort(function (a, b) {
                                        let dsa = parseInt(\$(a).find('.tri-dates').eq(0).text()),
                                            dsb = parseInt(\$(b).find('.tri-dates').eq(0).text());
                                        return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                                    }));
                                });
                            }
                        });
// Tri des pro
                    },
                    error: function (xhr) {
                        console.error(xhr);
                    }
                });
            });

            \$('#type_prestation2').on('change', function () {
                let lang = \$('#page_lang').val();
                let id = \$(this).val();
                let url = \"";
        // line 769
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_get_sous_categories_xhr", ["_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 769), "get", ["_locale"], "method", false, false, false, 769)]), "html", null, true);
        yield "\";

                \$.ajax({
                    url: url,
                    method: \"get\",
                    data: {
                        type_prestation: id
                    },
                    success: function (data) {
                        \$('#services_proposes2').empty();
                        \$('#services_proposes2').append(\"<option value='all' disabled='disabled' selected='selected'> ";
        // line 779
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.formulaire-champs.services-proposes"), "html", null, true);
        yield "</option>\");

                        if (data.sous_categories) {
                            data.sous_categories.forEach(function (e) {
                                if (lang == 'fr') {
                                    \$('#services_proposes2').append(\"<option value='\" + e.slug + \"'>\" + e.name + \"</option>\");
                                } else {
                                    \$('#services_proposes2').append(\"<option value='\" + e.slug + \"'>\" + e.content + \"</option>\");
                                }
                            });
                        }
                    },
                    error: function (xhr) {
                        console.error(xhr);
                    }
                });
            });

            // First Like Button
            \$(document).on('click', '.btnh1', function () {
                let element = \$(this);
                //Enregistrer dans la wishlist
                let url = \"";
        // line 801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_add_remove_to_user_wishlist", ["_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 801), "get", ["_locale"], "method", false, false, false, 801)]), "html", null, true);
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
        // line 819
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\";
                        }
                    },
                    error: function (response) {
                        console.log(response);
                    }
                });
            });
            /*document.addEventListener('gesturestart', function (e) {
                e.preventDefault();
            });*/
        });
    </script>


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces/listeResultat.html.twig";
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
        return array (  1377 => 819,  1356 => 801,  1331 => 779,  1318 => 769,  1232 => 686,  1079 => 536,  1065 => 524,  1043 => 504,  1029 => 493,  1024 => 491,  1019 => 489,  1014 => 488,  1007 => 487,  998 => 483,  991 => 482,  985 => 478,  983 => 477,  974 => 470,  972 => 469,  969 => 468,  966 => 467,  952 => 461,  947 => 458,  940 => 456,  938 => 455,  934 => 454,  930 => 453,  924 => 449,  918 => 447,  912 => 445,  910 => 444,  906 => 443,  900 => 439,  894 => 437,  888 => 435,  886 => 434,  876 => 433,  871 => 430,  865 => 428,  859 => 426,  857 => 425,  851 => 421,  841 => 416,  835 => 414,  830 => 412,  826 => 411,  814 => 408,  809 => 405,  807 => 404,  801 => 400,  796 => 399,  794 => 398,  785 => 392,  780 => 390,  776 => 389,  771 => 387,  767 => 386,  760 => 382,  756 => 381,  752 => 380,  747 => 378,  743 => 376,  741 => 375,  734 => 370,  728 => 367,  724 => 365,  721 => 364,  716 => 361,  710 => 360,  706 => 358,  700 => 357,  697 => 356,  694 => 355,  690 => 354,  686 => 352,  684 => 351,  678 => 347,  672 => 346,  668 => 344,  662 => 343,  659 => 342,  656 => 341,  652 => 340,  648 => 339,  640 => 338,  638 => 337,  630 => 332,  626 => 331,  619 => 326,  616 => 325,  611 => 323,  608 => 322,  603 => 320,  600 => 319,  597 => 318,  594 => 317,  591 => 316,  589 => 315,  564 => 293,  557 => 289,  549 => 286,  545 => 284,  530 => 282,  525 => 281,  521 => 280,  517 => 279,  512 => 276,  497 => 274,  492 => 273,  488 => 272,  484 => 271,  476 => 266,  468 => 260,  461 => 259,  451 => 257,  443 => 254,  436 => 253,  230 => 51,  226 => 50,  222 => 49,  218 => 48,  213 => 46,  208 => 44,  202 => 42,  195 => 41,  183 => 40,  175 => 35,  171 => 34,  166 => 33,  162 => 31,  157 => 29,  124 => 27,  119 => 25,  113 => 22,  108 => 20,  102 => 17,  97 => 15,  92 => 14,  85 => 13,  80 => 1,  70 => 8,  68 => 7,  66 => 6,  64 => 5,  60 => 4,  56 => 3,  54 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "annonces/listeResultat.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/annonces/listeResultat.html.twig");
    }
}
