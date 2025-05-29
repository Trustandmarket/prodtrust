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

/* souscription/index.html.twig */
class __TwigTemplate_3fe87b37313ddceaf07d3e4bcbe5ffdd extends Template
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
        $this->parent = $this->loadTemplate("otherLayout.html.twig", "souscription/index.html.twig", 1);
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
    <meta name=\"title\"
          content=\"Trust &amp; Market | ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "offre-souscription"]);
        yield "\">
    <meta name=\"description\"
          content=\"";
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "offre-souscription"]);
        yield "\">
    <link rel=\"canonical\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_souscription")), "html", null, true);
        yield "\">
    <link rel=\"shortlink\" href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_souscription");
        yield "\">
    ";
        // line 20
        yield "    <meta property=\"og:title\" content=\"Trust &amp; Market |\t";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "offre-souscription"]);
        yield "\">
    <meta property=\"og:description\" content=\"";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "offre-souscription"]);
        yield "\">
    <meta property=\"og:image\" content=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\">
    <meta propery=\"og:type\" content=\"website\">
    ";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "    Trust &amp; Market | ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "offre-souscription"]);
        yield "
";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mon-profil.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.min.css\" rel=\"stylesheet\">
    <style>

        .pagination .page-item.active .page-link {
            background-color: #f17b30;
        }

        .card-deck {
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
        }

        .card {
            border-color: #ff7e10 !important;
            border-radius: 25px;
            text-align: center;
            margin: 10px;
            padding-bottom: 0.5rem;
        }

        .card[class*=border] {
            border: 2px solid #9e9e9e;
            box-shadow: none;
        }

        .card-title {
            text-decoration-line: underline;
        }

        .card-footer {
            background-color: transparent;
            border: none;
        }

        .card-footer, .btn-primary {
            border-radius: 25px !important;
            background: #008779 !important;
        }

        .container {
            position: relative;
        }

        .vertical-center {
            margin-top: 4rem;

        }

        .descriptif-border {
            border: 1px solid;
        }

        .img-fluid {
            margin: auto;
            width: 2rem;
        }

        /* For Desktop View */
        @media screen and (min-width: 1024px) {
            #dialoguons {
                width: 19%;
            }
        }

        /* For Tablet View */
        @media screen and (min-device-width: 768px)
        and (max-device-width: 1024px) {
            #dialoguons {
                width: 30%;
            }

            .playVideoButton {
                width: 70px !important;
                height: 70px !important;
            }

            .vertical-center {
                margin-top: 5rem;
            }
        }

        /* For Mobile Portrait View */
        @media screen and (max-device-width: 480px)
        and (orientation: portrait) {
            #dialoguons {
                width: 70%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }

            .vertical-center {
                margin-top: 4rem;
            }

            h1 {
                font-size: xx-large;
            }
        }

        /* For Mobile Landscape View */
        @media screen and (max-device-width: 640px)
        and (orientation: landscape) {
            #dialoguons {
                width: 40%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For Mobile Phones Portrait or Landscape View */
        @media screen
        and (max-device-width: 640px) {
            #dialoguons {
                width: 40%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For iPhone 4 Portrait or Landscape View */
        @media screen and (min-device-width: 320px)
        and (-webkit-min-device-pixel-ratio: 2) {
            #dialoguons {
                width: 60%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For iPhone 5 Portrait or Landscape View */
        @media (device-height: 568px)
        and (device-width: 320px)
        and (-webkit-min-device-pixel-ratio: 2) {
            #dialoguons {
                width: 70%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }

        /* For iPhone 6 and 6 plus Portrait or Landscape View */
        @media (min-device-height: 667px)
        and (min-device-width: 375px)
        and (-webkit-min-device-pixel-ratio: 3) {
            #dialoguons {
                width: 60%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }
        }
    </style>
";
        yield from [];
    }

    // line 219
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 220
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 223
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 225
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 226
        yield "    <!--Main Layout-->
    <main class=\"\">
        <div class=\"container\">
            <div class=\"vertical-center\">
                <h1 class=\"col-md-8 d-flex justify-content-center text-center mx-auto page-title mb-3\">NOS OFFRES
                    PROFESSIONNELLES</h1>
                <div class=\"row justify-content-center mt-1\">
                    ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["offres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 234
            yield "                        <div class=\"col-sm-6 col-md-4 mt-3 card-deck\">
                            <div class=\"card border-success\">
                                <div class=\"card-body\">
                                    <h2 class=\"card-title\">";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 237), "html", null, true);
            yield "</h2>
                                    <span class=\"card-subtitle\"><b>";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "tarif", [], "any", false, false, false, 238), "EUR"), "html", null, true);
            yield "</b> /mois</span>
                                    <p class=\"card-text\">";
            // line 239
            yield CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "enteteDescriptif", [], "any", false, false, false, 239);
            yield "</p>
                                    <hr class=\"descriptif-border\">
                                    <p class=\"card-text\">";
            // line 241
            yield CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "descriptif", [], "any", false, false, false, 241);
            yield "</p>
                                </div>
                                <form method=\"post\" action=\"\" id=\"1abonnement_update\">
                                    <input hidden name=\"tag\" id=\"tag\" value=\"\">
                                    <input hidden name=\"offreId\" id=\"offreId\" value=\"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 245), "html", null, true);
            yield "\">
                                    <input hidden name=\"offreTarif\" id=\"offreTarif\" value=\"";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "tarif", [], "any", false, false, false, 246), "html", null, true);
            yield "\">
                                    <input hidden name=\"url\" id=\"url\"
                                           value=\"";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_souscription_offre_payante_get", ["forfait" => CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 248)]), "html", null, true);
            yield "\">
                                    <input hidden name=\"ancienneOffreTarif\" id=\"ancienneOffreTarif\"
                                           value=\"";
            // line 250
            if ((($context["abonnement"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["abonnement"] ?? null)), "isAbonnementActif", [], "any", false, false, false, 250))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["abonnement"] ?? null)), "getOffre", [], "any", false, false, false, 250), "tarif", [], "any", false, false, false, 250), "html", null, true);
            } else {
                yield "0";
            }
            yield "\">
                                    <button type=\"submit\" class=\"btn card-footer btn-primary payment-button\"
                                            ";
            // line 252
            if (((($context["abonnement"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["abonnement"] ?? null)), "isAbonnementActif", [], "any", false, false, false, 252)) && (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["abonnement"] ?? null)), "offre", [], "any", false, false, false, 252) == $context["offre"]))) {
                yield "disabled";
            }
            yield ">
                                        ";
            // line 253
            if (((($context["abonnement"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["abonnement"] ?? null)), "isAbonnementActif", [], "any", false, false, false, 253)) && (CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["abonnement"] ?? null)), "offre", [], "any", false, false, false, 253) == $context["offre"]))) {
                yield "Votre offre actuelle";
            } else {
                yield "Choisir cette offre";
            }
            // line 254
            yield "                                    </button>
                                </form>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        yield "                </div>
                <div class=\"row mt-4\">
                    <div class=\"col-md-4\">
                        <img src=\"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/circular-arrow.svg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Image 1\">
                        <div class=\"text-center\">
                            <p>Souscription<br>
                                30 jours d'essai gratuit</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <img src=\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pigeon-bird-icon.svg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Image 2\">
                        <div class=\"text-center\">
                            <p>Pas d'engagement<br>
                                Vous arretez quand vous voulez.</p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <img src=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/lock.svg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Image 3\">
                        <div class=\"text-center\">
                            <p>Experience de paiement<br>
                                securise</p>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-12 mt-4 text-center\">
                    <a target=\"_blank\"
                       href=\"";
        // line 286
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketing_details_promo_com", ["slug" => "details-des-fonctionnalites-des-abonnements"]);
        yield "\"
                       class=\"text-dark\"><h3><u>Details sur les fonctionnalites</u></h3></a>
                </div>
            </div>

        </div>
    </main>
    <!--Main Layout-->

    ";
        // line 295
        yield from $this->loadTemplate("partials/project.html.twig", "souscription/index.html.twig", 295)->unwrap()->yield($context);
        // line 296
        yield "    ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "souscription/index.html.twig", 296)->unwrap()->yield($context);
        yield from [];
    }

    // line 300
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 301
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        yield from [];
    }

    // line 305
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 306
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.all.min.js\"></script>
    <script>
        \$(document).ready(function () {

            document.querySelectorAll('.payment-button').forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault(); // Prevent form submission
                    toastr.warning(\"Le paiement en ligne sera disponible bientôt.\");
                });
            });

            \$(document).on('submit', '#abonnement_update', function (e) {
                e.preventDefault();
                ";
        // line 321
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 322
            yield "                let formData = {};
                \$(this).find(\"input, select, textarea\").each(function (index, element) {
                    let inputName = \$(this).attr(\"name\");
                    let inputValue = \$(this).val();
                    // Handle checkboxes and radio buttons separately
                    if (\$(this).attr(\"type\") === \"checkbox\" || \$(this).attr(\"type\") === \"radio\") {
                        if (\$(this).is(\":checked\")) {
                            formData[inputName] = inputValue;
                        }
                    } else {
                        formData[inputName] = inputValue;
                    }
                });
                if (formData.ancienneOffreTarif > formData.offreTarif) {
                    formData.tag = 'DOWNGRADE';
                } else if (formData.ancienneOffreTarif < formData.offreTarif) {
                    formData.tag = 'UPGRADE';
                }
                console.log(formData);

                if (formData.ancienneOffreTarif > formData.offreTarif && formData.offreTarif == 0) {
                    Swal.fire({
                        title: \"Revenir a une offre GRATUIT\",
                        text: \"Vous avez choisi de revenir à l'offre gratuite. Pour valider votre choix,\" +
                            \" cliquez sur le bouton CONFIRMER ci-dessous. Votre abonnement basculera automatiquement à \" +
                            \"l'échéance mensuelle de l'offre en cours.\",
                        cancelButtonText: \"Annuler\",
                        confirmButtonText: \"Confirmer\",
                        showCancelButton: true,
                        reverseButtons: true,
                        focusConfirm: false,
                        confirmButtonColor: '#008779',
                        cancelButtonColor: '#262626',
                    }).then((result) => {
                        if (result.value) {
                            \$.ajax({
                                url: \"";
            // line 358
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_update_downgrade");
            yield "\",
                                type: 'POST',
                                processData: true,
                                dataType: 'json',
                                contentType: 'application/json',
                                data: JSON.stringify(formData),
                                success: function (response) {
                                    if (response.status == 200) {
                                        console.log(response);
                                        toastr.success(\"Mise a jour de l'abonnement effectué avec succès.\");
                                        window.location = '";
            // line 368
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement");
            yield "';
                                    } else {
                                        swal.fire(\"Erreur!\", \"Un probleme est survenu\", response.status);
                                    }
                                },
                                error: function (response) {
                                    swal.fire(\"Erreur!\", \"Un probleme est survenu\", response.status);
                                }
                            });
                        }
                    })
                } else if (formData.offreTarif > 0) {
                    \$.ajax({
                        url: \"";
            // line 381
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_pricing_data");
            yield "\",
                        type: 'POST',
                        processData: true,
                        dataType: 'json',
                        contentType: 'application/json',
                        data: JSON.stringify(formData),
                        success: function (response) {
                            if (response.status == 200) {
                                console.log(response);
                                if (response.result.totalHt >= 0) {
                                    console.log(response.result.totalHt);
                                    window.location = formData.url;
                                } else if (response.result.totalHt < 0) {
                                    Swal.fire({
                                        title: \"CHANGEMENT D'OFFRE\",
                                        text: \"Vous avez souhaité changer d'offre. Vous ne pouvez pas le faire dans l'immédiat. Veuillez réessayer d'ici quelques jours.\",
                                        confirmButtonText: \"FERMER\",
                                        showCancelButton: false,
                                        reverseButtons: true,
                                        focusConfirm: false,
                                        showLoaderOnConfirm: true,
                                        confirmButtonColor: '#008779',
                                    }).then(() => {
                                        window.location = \"";
            // line 404
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement");
            yield "\";
                                    });
                                }
                            } else {
                                swal.fire(\"Erreur!\", \"Un probleme est survenu\", response.status);
                            }
                        },
                        error: function (response) {
                            swal.fire(\"Erreur!\", \"Un probleme est survenu\", response.status);
                        }
                    });
                }

                ";
        } else {
            // line 418
            yield "                //alert(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 418), "headers", [], "any", false, false, false, 418), "get", ["referer"], "method", false, false, false, 418), "html", null, true);
            yield ");
                    window.location = \"";
            // line 419
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\";
                ";
        }
        // line 421
        yield "            });
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
        return "souscription/index.html.twig";
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
        return array (  694 => 421,  689 => 419,  684 => 418,  667 => 404,  641 => 381,  625 => 368,  612 => 358,  574 => 322,  572 => 321,  555 => 307,  550 => 306,  543 => 305,  534 => 301,  527 => 300,  521 => 296,  519 => 295,  507 => 286,  494 => 276,  484 => 269,  474 => 262,  469 => 259,  459 => 254,  453 => 253,  447 => 252,  438 => 250,  433 => 248,  428 => 246,  424 => 245,  417 => 241,  412 => 239,  408 => 238,  404 => 237,  399 => 234,  395 => 233,  386 => 226,  379 => 225,  369 => 223,  361 => 220,  354 => 219,  172 => 41,  168 => 40,  164 => 39,  159 => 37,  154 => 35,  147 => 32,  140 => 31,  132 => 28,  125 => 27,  117 => 22,  113 => 21,  108 => 20,  104 => 18,  100 => 17,  96 => 16,  91 => 14,  86 => 12,  81 => 10,  75 => 7,  70 => 5,  65 => 4,  58 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "souscription/index.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/souscription/index.html.twig");
    }
}
