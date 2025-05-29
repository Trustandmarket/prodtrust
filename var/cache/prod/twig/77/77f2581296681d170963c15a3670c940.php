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

/* annonces/detailsProfil.html.twig */
class __TwigTemplate_75d011456fce5f5867b897f169186a30 extends Template
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
        $this->parent = $this->loadTemplate("otherLayout.html.twig", "annonces/detailsProfil.html.twig", 1);
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
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust &amp; Market | Détails du Profil";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">

    <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mon-profil.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">
    <link href=\"http://rawgit.com/gjunge/rateit.js/master/scripts/rateit.css\" rel=\"stylesheet\" type=\"text/css\">

    <style>
        html {
            scroll-behavior: smooth;
        }

        .col-md-12 h5 {
            font-style: normal;
        }

        hr {
            margin-top: 0.1rem;
            margin-bottom: 0.1rem;
        }

        h2.user-info {
            font-family: 'Source Sans Pro', \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            word-break: break-word;
            line-height: 1rem;
        }

        h2.bloc-title {
            font-size: larger !important;
        }

        h5.user-info {
            font-family: 'Source Sans Pro', \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            word-break: break-word;
            /* line-height: 1rem; */
        }
        .card-footer {
            text-align: end;
        }
        .pagination .page-item.active .page-link {
            background-color: #f17b30;
        }

        .img-fluid {
            height: auto;
            width: auto;
            border-radius: 5%;
        }

        @media only screen and (max-width: 768px) {
            .profile-data-container {
                margin: auto 1rem;
            }

            #lectureInfo {
                display: flex;
                flex-flow: column;
                align-items: center;
            }

            .img-fluid {
                height: auto;
                width: auto;
                border-radius: 5%;
            }
        }

        @media only screen and(min-width: 768px) and (max-width: 992px) {
            .med-flex {
                display: flex;
                flex-flow: row;
                align-items: center;
            }

            .profile-data-container {
                margin: auto 0rem;
            }
        }

        @media only screen and (min-width: 992px) {
            .profile-data-container {
                margin: auto 8rem;
            }
        }
    </style>
";
        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 124
        yield "    <!--Main Layout-->
    <main class=\"mt-3 pt-5\">
        <div class=\"container\">
            <div class=\"profile-data-container\">
                <!-- Vu du profil -->
                <div id=\"lectureInfo\" class=\"row\">
                    <div class=\"row med-flex col-12\">
                        <div class=\"col-md-4 pb-2\">
                            <img class=\"img-fluid\" width=\"100% \\9\"
                                 src=\"";
        // line 133
        if (($context["avatar"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar"] ?? null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
        }
        yield "\"
                                 alt=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "first_name", [], "any", false, false, false, 134), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "last_name", [], "any", false, false, false, 134), "html", null, true);
        yield "\"/>
                        </div>
                        <div class=\"col-md-8\">
                            <div class=\"row ml-0\">
                                <h1 class=\"\"
                                    style=\"margin-bottom: 0.2rem;\">";
        // line 139
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "nom_commercial", [], "any", false, false, false, 139) == "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "first_name", [], "any", false, false, false, 139), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "nom_commercial", [], "any", false, false, false, 139), "html", null, true);
        }
        yield " </h1>
                                ";
        // line 140
        if ((array_key_exists("statut_kyc", $context) && ($context["statut_kyc"] ?? null))) {
            yield "<img title=\"Profil fournisseur validé\" style=\"width: 50px; height: auto;\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/svg/check-mark-3280.svg")), "html", null, true);
            yield "\"/>
                                ";
        } elseif ((        // line 141
array_key_exists("statut_kyc", $context) &&  !($context["statut_kyc"] ?? null))) {
            yield "<img
                                    title=\"Profil fournisseur non validé\" style=\"width: 50px; height: auto;\"
                                    src=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/svg/yellow-check-mark-circular-tick-16216.svg")), "html", null, true);
            yield "\"/>";
        }
        // line 144
        yield "                            </div>
                            ";
        // line 145
        if (($context["principal_activity"] ?? null)) {
            yield "<h2 class=\"mt-1\" style=\"margin-bottom: 0px;font-size:large;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["principal_activity"] ?? null), "description", [], "any", false, false, false, 145), "html", null, true);
            yield "</h2>";
        }
        // line 146
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "experience", [], "any", true, true, false, 146)) {
            // line 147
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "experience", [], "any", false, false, false, 147), "html", null, true);
            yield "
                                <h5 class=\"user-info\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.experience"), "html", null, true);
            yield " :
                                    <strong>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.annee"), "html", null, true);
            yield "</strong>
                                </h5>
                            ";
        } else {
            // line 152
            yield "                            ";
        }
        // line 153
        yield "
                            <div class=\"pt-1 mt-4 row\">
                                <a href=\"#\" style=\"color:#fff;background-color:black;\"
                                   class=\"btn btn-md ml-0 col-md-4\">";
        // line 156
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserUniqueData", [], "any", false, false, false, 156)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["departements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 157
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserUniqueData", [], "any", false, false, false, 157), "getDepartement", [], "any", false, false, false, 157) && (CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 157) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserUniqueData", [], "any", false, false, false, 157), "getDepartement", [], "any", false, false, false, 157), "id", [], "any", false, false, false, 157)))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "departement", [], "any", false, false, false, 157), "html", null, true);
                }
                // line 158
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dep'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield "</a>
                                <a target=\"_blank\" href=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_chat", ["destinataire" => CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "id", [], "any", false, false, false, 159)]), "html", null, true);
        yield "\"
                                   class=\"btn btn-md btn-primary ml-0 col-md-4\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.message"), "html", null, true);
        yield "</a>
                                <button data-toggle=\"modal\" data-target=\".modal-skills\"
                                        style=\"color:#fff;background-color:#53b4a6;\" class=\"btn btn-md ml-0 col-md-4\">
                                    Mes compétences
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class=\"row col-12 mt-3\">
                        <div class=\"col-md-12\">
                            <div class=\"row\">
                                <div
                                        class=\"col-md-12 mt-4\">
                                    <!-- <h5>";
        // line 175
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "first_name", [], "any", false, false, false, 175);
        yield " en quelques mots</h5> -->
                                    <h2 class=\"no-oblique bloc-title\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.description"), "html", null, true);
        yield "</h2>
                                    <hr>
                                    <div class=\"p-2\">
                                        <div>
                                            ";
        // line 180
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "description", [], "any", false, false, false, 180);
        yield "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-md-12 my-2\">
                                    <h2 class=\"bloc-title\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.reference"), "html", null, true);
        yield "</h2>
                                    <hr>
                                    <div class=\"p-2\">
                                        <div>
                                            ";
        // line 190
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "reference", [], "any", false, false, false, 190);
        yield "</div>
                                    </div>
                                </div>
                                <div id=\"monPortfolio\" class=\"col-md-12 my-2\">
                                    <h2 class=\"bloc-title\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.portfolio"), "html", null, true);
        yield "</h2>
                                    <hr class=\"mb-2\">
                                    <div class=\"owl-carousel owl-theme\">
                                        ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "portfolio", [], "any", false, false, false, 197), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 198
            yield "                                            <div class=\"item\" data-merge=\"2\">
                                                <div class=\"portfolio-bg lazy\" data-src=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["s"], "html", null, true);
            yield "\"></div>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "                                    </div>
                                </div>
                                <div id=\"mesVideos\" class=\"col-md-12 my-2\">
                                    <h2 class=\"bloc-title\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.mon-profil.videos"), "html", null, true);
        yield "</h2>
                                    <hr class=\"mb-2\">
                                    <div class=\"owl-carousel owl-theme\">
                                        ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "videos", [], "any", false, false, false, 208), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 209
            yield "                                            <div class=\"item-video\" data-merge=\"3\">
                                                <a class=\"owl-video\"
                                                   href=\"https://www.youtube.com/embed/";
            // line 211
            if (($context["v"] != null)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
            }
            yield "\"></a>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        yield "                                    </div>
                                </div>
                                <div id=\"mesAnnonces\" class=\"col-md-12 my-4\">
                                    <h2 class=\"py-4 mb-2 bloc-title\">Mon univers de prestations</h2>
                                    <hr class=\"mb-3\">
                                    <div class=\"owl-theme col-md-12 row\">
                                        ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "annonces", [], "any", false, false, false, 220));
        foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
            // line 221
            yield "                                            <div class=\"col-lg-4 col-md-6 col-sm-6 mb-5 clearfix isotope-grid\">
                                                <!-- Card -->
                                                <div class=\"card\">
                                                    <!-- Card image -->
                                                    ";
            // line 225
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 225))) {
                // line 226
                yield "                                                        <div class=\"view overlay isotope-item\"
                                                             style=\"height:160px; border-bottom: 4px solid #f17b30\">
                                                            <img loading=\"lazy\" class=\"card-img-top lazy\" width=\"100%\"
                                                                 src=\"";
                // line 229
                if (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 229))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "gallery", [], "any", false, false, false, 229), 0, [], "any", false, false, false, 229), "guid", [], "any", false, false, false, 229), ["www." => ""]), "html", null, true);
                } elseif (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 229))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "images_secondaires", [], "any", false, false, false, 229), 0, [], "any", false, false, false, 229), "guid", [], "any", false, false, false, 229), ["www." => ""]), "html", null, true);
                } else {
                    yield "https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg";
                }
                yield "\"
                                                                 alt=\"Card image cap\">
                                                            ";
                // line 237
                yield "                                                            <a href=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 237) != "")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_name", [], "any", false, false, false, 237)]), "html", null, true);
                }
                yield "\">
                                                                <div class=\"mask rgba-white-slight\"></div>
                                                            </a>
                                                        </div>
                                                    ";
            }
            // line 242
            yield "                                                    <!-- Card content -->
                                                    <div class=\"card-body\">
                                                        <!-- Title -->
                                                        <h4 class=\"card-title fs-18\">
                                                            ";
            // line 246
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 246), "locale", [], "any", false, false, false, 246) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 246) != ""))) {
                // line 247
                yield "                                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre_en", [], "any", false, false, false, 247), "html", null, true);
                yield "
                                                            ";
            } else {
                // line 249
                yield "                                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "titre", [], "any", false, false, false, 249), "html", null, true);
                yield "
                                                            ";
            }
            // line 251
            yield "                                                        </h4>
                                                        <!-- Category -->
                                                        <h5 class=\"card-sub-title fs-15\">
                                                            <a href=\"";
            // line 254
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 254)) == "produits")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "produits", "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                yield " ";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 254), "services_proposes" => "", "code_postal_ville" => ""]), "html", null, true);
                yield " ";
            }
            yield "\">
                                                                ";
            // line 255
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 255), "locale", [], "any", false, false, false, 255) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 255) != ""))) {
                // line 256
                yield "                                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent_en", [], "any", false, false, false, 256), "html", null, true);
                yield "
                                                                ";
            } else {
                // line 258
                yield "                                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParent", [], "any", false, false, false, 258), "html", null, true);
                yield "
                                                                ";
            }
            // line 260
            yield "                                                            </a>
                                                        </h5>
                                                        <!-- Sub Category -->
                                                        <h5 class=\"card-sub-category fs-18\">
                                                            <a href=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "categorieParentSlug", [], "any", false, false, false, 264), "services_proposes" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorieSlug", [], "any", false, false, false, 264), "code_postal_ville" => ""]), "html", null, true);
            yield "\">
                                                                ";
            // line 265
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 265), "locale", [], "any", false, false, false, 265) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 265) != ""))) {
                // line 266
                yield "                                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie_en", [], "any", false, false, false, 266), "html", null, true);
                yield "
                                                                ";
            } else {
                // line 268
                yield "                                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "sousCategorie", [], "any", false, false, false, 268), "html", null, true);
                yield "
                                                                ";
            }
            // line 270
            yield "                                                            </a>
                                                        </h5>
                                                        <!-- Price -->
                                                        <p class=\"annonce-price fs-24 mb-0\">
                                                    <span data-stars=\"";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 274), 0), "html", null, true);
            yield "\"
                                                          class=\"number\">";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "price", [], "any", false, false, false, 275), "html", null, true);
            yield "</span>
                                                            ";
            // line 276
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 276) != null)) {
                // line 277
                yield "                                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "devise", [], "any", false, false, false, 277), "html", null, true);
            } else {
                yield "€
                                                            ";
            }
            // line 279
            yield "                                                        </p>
                                                    </div>
                                                    <div class=\"card-footer bg-transparent\">
                                                        <a target=\"_blank\"
                                                           href=\"";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnoncesCommercial", ["nom_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 283), "id_commercial" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "post_author", [], "any", false, false, false, 283)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "nom_commercial", [], "any", false, false, false, 283), "html", null, true);
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
        // line 289
        yield "                                        ";
        // line 322
        yield "                                    </div>
                                    ";
        // line 323
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "annonces", [], "any", false, false, false, 323)) > 0)) {
            // line 324
            yield "                                        <nav aria-label=\"...\">
                                            <ul class=\"pagination justify-content-center\">
                                                <li class=\"page-item ";
            // line 326
            if ((($context["noPage"] ?? null) == 1)) {
                yield "disabled";
            }
            yield "\">
                                                    <a class=\"page-link\"
                                                       href=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "id", [], "any", false, false, false, 328)), "noPage" => (            // line 329
($context["noPage"] ?? null) - 1)]), "html", null, true);
            yield "\"
                                                       tabindex=\"-1\">";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.precedent", [], "liste_annonces"), "html", null, true);
            yield "</a>
                                                </li>

                                                ";
            // line 333
            if ((($context["noPage"] ?? null) > 1)) {
                // line 334
                yield "                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\"
                                                           href=\"";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source,                 // line 337
($context["detailsPro"] ?? null), "id", [], "any", false, false, false, 337)), "noPage" => 1]), "html", null, true);
                yield "\">1<span
                                                                    class=\"sr-only\"></span></a>
                                                    </li>
                                                ";
            }
            // line 341
            yield "                                                ";
            if ((($context["noPage"] ?? null) > 2)) {
                // line 342
                yield "                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\" href=\"\">...<span
                                                                    class=\"sr-only\"></span></a>
                                                    </li>
                                                ";
            }
            // line 347
            yield "                                                <li class=\"page-item active\">
                                                    <a class=\"page-link\" href=\"";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source,             // line 349
($context["detailsPro"] ?? null), "id", [], "any", false, false, false, 349)), "noPage" => ($context["noPage"] ?? null)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["noPage"] ?? null), "html", null, true);
            yield "
                                                        <span class=\"sr-only\"></span>
                                                    </a>
                                                </li>
                                                ";
            // line 353
            if (((($context["pages"] ?? null) - ($context["noPage"] ?? null)) > 1)) {
                // line 354
                yield "                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\" href=\"\">...<span
                                                                    class=\"sr-only\"></span></a>
                                                    </li>
                                                    </li>
                                                ";
            }
            // line 360
            yield "                                                ";
            if (((($context["pages"] ?? null) - ($context["noPage"] ?? null)) > 0)) {
                // line 361
                yield "                                                    <li class=\"page-item\">
                                                        <a class=\"page-link\"
                                                           href=\"";
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source,                 // line 364
($context["detailsPro"] ?? null), "id", [], "any", false, false, false, 364)), "noPage" => ($context["pages"] ?? null)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pages"] ?? null), "html", null, true);
                yield "
                                                            <span class=\"sr-only\"></span>
                                                        </a>
                                                    </li>
                                                ";
            }
            // line 369
            yield "                                                <li class=\"page-item ";
            if ((($context["noPage"] ?? null) == ($context["pages"] ?? null))) {
                yield "disabled";
            }
            yield "\">
                                                    <a class=\"page-link\"
                                                       href=\"";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "id", [], "any", false, false, false, 371)), "noPage" => (            // line 372
($context["noPage"] ?? null) + 1)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filtres.suivant", [], "liste_annonces"), "html", null, true);
            yield "</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    ";
        }
        // line 377
        yield "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vu du profil -->
            </div>
        </div>
        <div class=\"modal fade modal-skills\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\"
             aria-hidden=\"true\">
            <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\" style=\"background-color:#008779;border-radius: 15px;padding: 1rem;\">
                    <h5 class=\"modal-title\" style=\"color: #fff;font-size: larger;\" id=\"exampleModalLongTitle\">MES
                        DOMAINES D'EXPERTISES</h5>
                    ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["detailsPro"] ?? null), "competence", [], "any", false, false, false, 391));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 392
            yield "                        <span style=\"text-align:left !important;\"
                              class=\"text-center competence-item pb-2\">";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 395
        yield "                </div>
            </div>
        </div>
        ";
        // line 398
        yield from $this->loadTemplate("partials/videoButton.html.twig", "annonces/detailsProfil.html.twig", 398)->unwrap()->yield($context);
        // line 399
        yield "        ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "annonces/detailsProfil.html.twig", 399)->unwrap()->yield($context);
        // line 400
        yield "    </main>
    <!--Main Layout-->

";
        yield from [];
    }

    // line 406
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 407
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        yield from [];
    }

    // line 411
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 412
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script src=\"";
        // line 414
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>

    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 419
        yield "    <script src=\"//cdn.ckeditor.com/4.13.0/standard/ckeditor.js\"></script>
    <script src=\"";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <!-- jQuery plugin for input tags -->
    <script src=\"";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tagsinput/jQuery.tagify.min.js"), "html", null, true);
        yield "\"></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
    <!-- RateIt Js -->
    <script type=\"text/javascript\" src=\"";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/rateit/jquery.rateit.min.js"), "html", null, true);
        yield "\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>


    <script>
        \$(document).ready(function () {
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
//Smooth scroll
            if (\"";
        // line 450
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["noPage"] ?? null), "html", null, true);
        yield "\" > 1) {
                window.location = \"#mesAnnonces\";
            }
//End
// Portfolio owlcarousel
            \$('#monPortfolio .owl-carousel').owlCarousel({
                items: 1,
                nav: true,
                lazyLoad: true,
                loop: true,
                margin: 10
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

// Annonces owlcarousel
            \$('#mesAnnonces .owl-carousel').owlCarousel({loop: false, margin: 10, nav: true});
// input tags
            \$('#competencesModif').tagify();
// list images from portfolio and video
            \$('.portfolio-ul').on('click', 'li span:first-child', function () {
                \$(this).parent().fadeOut(300, function () {
                    \$(this).remove();
                });
            });
            \$('.videos-ul').on('click', 'li span:first-child', function () {
                \$(this).parent().fadeOut(300, function () {
                    \$(this).remove();
                });
            });

// add/remove new video in the update section
            var scntDiv = \$('#newVideosRow');
            var i = \$('#newVideosRow .col-md-4').length + 1;

            \$('#addScnt').on('click', function () {
                \$('<div class=\"col-md-4\"><div class=\"md-form\"> <input type=\"text\" class=\"form-control border p-2\" name=\"new_vid_' + i + '\" placeholder=\"Add new YouTube video link\"><div class=\"valid-feedback\">OK!</div><div class=\"invalid-feedback\">Ce champ contient une erreur!</div></div> <a class=\"btn btn-md btn-danger\" id=\"retirerSec\">Rétirer</a></div>').appendTo(scntDiv);
                i++;
                return false;
            });

            \$('#newVideosRow').on('click', '#retirerSec', function () { // console.log(\"Am here\");
                if (i > 2) {
                    \$(this).parents('.col-md-4').remove();
                    i--;
                }
                return false;
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

// first thing turn Hide \"Update section\" input field
// \$(\"#lectureInfo\").hide();
            \$(\"#modifInfo\").hide();

// toggle on/off using \"Mofier mon profile\"
            \$(\"#modifierProfile\").click(function () {
                \$(\"#lectureInfo\").toggle(\"slide\");
                \$(\"#modifInfo\").toggle(\"slide\");
            });
// toggle on/off using \"Annuler les modification\"
            \$(\"#annulerModif\").click(function () {
                \$(\"#modifInfo\").toggle(\"slide\");
                \$(\"#lectureInfo\").toggle(\"slide\");
            });

            \$('#date').datepicker({
                uiLibrary: 'bootstrap4',
                size: 'large',
                showRightIcon: false,
                iconsLibrary: 'fontawesome'
            });

            \$(\"div[role='wrapper']\").append(\"<label for='date'>Date de naissance</label><div class='valid-feedback'>OK!</div><div class='invalid-feedback'>Ce champ contient une erreur!</div>\");


// Set card title and card-body equal height
            let maxHeightTitle = 0;
            let maxHeightbody = 0;
// card body
            \$(\".card-body\").each(function () {
                if (\$(this).height() > maxHeightbody) {
                    maxHeightbody = \$(this).height();
                }
            });
            \$(\".card-body\").height(maxHeightbody);

        });
    </script>

    <script>

        function switchButtons(button, oppositeButton) {
            button.disabled = false;
            button.style.display = 'none';
            oppositeButton.style.display = 'block';
        }

    </script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "annonces/detailsProfil.html.twig";
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
        return array (  889 => 450,  864 => 428,  857 => 424,  850 => 420,  847 => 419,  843 => 417,  837 => 414,  831 => 412,  824 => 411,  815 => 407,  808 => 406,  800 => 400,  797 => 399,  795 => 398,  790 => 395,  782 => 393,  779 => 392,  775 => 391,  759 => 377,  749 => 372,  748 => 371,  740 => 369,  730 => 364,  729 => 363,  725 => 361,  722 => 360,  714 => 354,  712 => 353,  703 => 349,  702 => 348,  699 => 347,  692 => 342,  689 => 341,  682 => 337,  681 => 336,  677 => 334,  675 => 333,  669 => 330,  665 => 329,  664 => 328,  657 => 326,  653 => 324,  651 => 323,  648 => 322,  646 => 289,  632 => 283,  626 => 279,  619 => 277,  617 => 276,  613 => 275,  609 => 274,  603 => 270,  597 => 268,  591 => 266,  589 => 265,  585 => 264,  579 => 260,  573 => 258,  567 => 256,  565 => 255,  555 => 254,  550 => 251,  544 => 249,  538 => 247,  536 => 246,  530 => 242,  519 => 237,  508 => 229,  503 => 226,  501 => 225,  495 => 221,  491 => 220,  483 => 214,  472 => 211,  468 => 209,  464 => 208,  458 => 205,  453 => 202,  444 => 199,  441 => 198,  437 => 197,  431 => 194,  424 => 190,  417 => 186,  408 => 180,  401 => 176,  397 => 175,  379 => 160,  375 => 159,  366 => 158,  361 => 157,  356 => 156,  351 => 153,  348 => 152,  342 => 149,  338 => 148,  333 => 147,  330 => 146,  324 => 145,  321 => 144,  317 => 143,  312 => 141,  306 => 140,  298 => 139,  288 => 134,  280 => 133,  269 => 124,  262 => 123,  252 => 122,  244 => 119,  237 => 118,  144 => 29,  140 => 28,  136 => 27,  131 => 25,  127 => 24,  123 => 23,  118 => 21,  111 => 18,  104 => 17,  93 => 15,  86 => 12,  81 => 10,  75 => 7,  70 => 5,  65 => 4,  58 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "annonces/detailsProfil.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/annonces/detailsProfil.html.twig");
    }
}
