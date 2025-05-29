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

/* profile/annonces.html.twig */
class __TwigTemplate_776cc3933cfa35e3df02edffab22a174 extends Template
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
            'annonce' => [$this, 'block_annonce'],
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
        return "profileTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("profileTemplate.html.twig", "profile/annonces.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png"), "html", null, true);
        yield "\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png"), "html", null, true);
        yield "\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png"), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\"/>
    <meta name=\"robots\" content=\"noindex\">

";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    Trust &amp; Market | Profil Annonces
";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_annonce(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    active
";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/img-picker/image-picker.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-moderation.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">

    <link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery.paginate.css"), "html", null, true);
        yield "\">
    <!-- file input fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\">
    <link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/font/file-input-font/font/font-fileuploader.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- file input styles -->
    <link href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/file-input-css/jquery.fileuploader.min.css"), "html", null, true);
        yield "\" media=\"all\" rel=\"stylesheet\">

    <style>
        .image_picker_image {
            width: 100px;
            height: 100px
        }

        .tox-statusbar__branding {
            display: none;
        }

        .btn-bg-primary {
            color: #fff;
            background: #f17b30 !important;
        }

        .btn-bg-primary:hover {
            color: #fff;
            background: #f4b279 !important;
        }

        .sub-msg {
            color: #212529;
            font-size: 11px;
        }

        span.fs-16 {
            font-family: 'Palanquin Dark', sans-serif;
            font-weight: 300;
        }

        @media (max-width: 575.98px) {
            main, .container {
                margin-top: 70px;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            main, .container {
                margin-top: 100px;
            }
        }
    </style>
";
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 94
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 95
        yield "    ";
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
        yield "    <div class=\"flex-fill container\">
        <main class=\"\">
            <div class=\"container\">
                <div class=\"mt-2 pt-4\">
                    <!-- Modif des infos -->
                    <div id=\"modifInfo\">
                        ";
        // line 105
        yield from $this->loadTemplate("menuProfile.html.twig", "profile/annonces.html.twig", 105)->unwrap()->yield($context);
        // line 106
        yield "                        <div class=\"row\">
                            <div hidden class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                                <strong></strong>
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            ";
        // line 113
        yield from $this->loadTemplate("annonces/sousMenuAnnonces.html.twig", "profile/annonces.html.twig", 113)->unwrap()->yield($context);
        // line 114
        yield "                            <div class=\"col-md-8 mb-2\">

                                <!--Accordion wrapper Pour les reservations en Cours-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx1\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne1\" data-parent=\"#accordionEx1\"
                                               href=\"#collapseOne1\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne1\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-en-cours"), "html", null, true);
        yield "
                                                ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reservationsEnCoursCount"] ?? null), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne1\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne1\" data-parent=\"#accordionEx1\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 149
        if ((($context["reservationsEnCoursCount"] ?? null) > 0)) {
            // line 150
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsEnCours\">
                                                                ";
            // line 152
            yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_cours.html.twig", "profile/annonces.html.twig", 152)->unwrap()->yield($context);
            // line 153
            yield "                                                            </div>
                                                        ";
        }
        // line 155
        yield "                                                    </div>
                                                    <div id=\"paginateReservationsEnCours\" class=\"col-md-12\">
                                                        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reservationsEnCours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 158
            yield "                                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 158) == "devis")) {
                // line 159
                yield "                                                                <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                    <div class=\"col-md-4 annonce-img\"
                                                                         style=\"background: url('";
                // line 161
                if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 161)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 161), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/empty_devis.jpg"), "html", null, true);
                }
                yield "')\"></div>
                                                                    <div class=\"col-md-8 py-2 annonce-detail\">
                                                                        <h4>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 165), "html", null, true);
                yield "</h4>
                                                                        <h4>";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                yield "
                                                                            :";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 167), "html", null, true);
                yield "</h4>
                                                                        ";
                // line 169
                yield "                                                                        <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prenom_prestataire", [], "any", false, false, false, 171), "html", null, true);
                yield "
                                                                            ";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom_prestataire", [], "any", false, false, false, 172), "html", null, true);
                yield "</h4>
                                                                        ";
                // line 174
                yield "                                                                        ";
                // line 175
                yield "                                                                        <div class=\"pt-4\">
                                                                            <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                                 aria-label=\"Toolbar with button groups\">
                                                                                <div class=\"btn-group mr-2\" role=\"group\"
                                                                                     aria-label=\"First group\">
                                                                                    <a class=\"btn btn btn-bg-primary btn-s annulerCommande\"
                                                                                       href=\"";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_cancelledReservationAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 181), "state" => "edition"]), "html", null, true);
                yield "\">
                                                                                        ";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annuler"), "html", null, true);
                yield "
                                                                                    </a>
                                                                                </div>
                                                                                <div class=\"btn-group ml-4 \"
                                                                                     role=\"group\"
                                                                                     aria-label=\"Thirth group\"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 192
$context["a"], "pinged", [], "any", false, false, false, 192) == "product")) {
                // line 193
                yield "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 193));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 194
                    yield "                                                                    ";
                    if ($context["s"]) {
                        // line 195
                        yield "                                                                        <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                            <div class=\"col-md-4 annonce-img\"
                                                                                 style=\"background: url('";
                        // line 197
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", true, true, false, 197) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 197)) > 0)) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 197) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 197), 0, [], "any", false, false, false, 197), "guid", [], "any", false, false, false, 197), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", false, false, false, 197), 0, [], "any", false, false, false, 197), "guid", [], "any", false, false, false, 197), "html", null, true);
                        }
                        yield "')\"></div>
                                                                            <div class=\"col-md-8 py-2 annonce-detail\">
                                                                                <h3>";
                        // line 199
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "first_name", [], "any", false, false, false, 199), "html", null, true);
                        yield "
                                                                                    ";
                        // line 200
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "last_name", [], "any", false, false, false, 200), "html", null, true);
                        yield "</h3>
                                                                                <p class=\"fs-14\">";
                        // line 201
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 201), "html", null, true);
                        yield "</p>
                                                                                <h3>";
                        // line 202
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_parent", [], "any", false, false, false, 202), "html", null, true);
                        yield " €</h3>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 205
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "pays", [], "any", false, false, false, 205)), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 206
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "etat", [], "any", false, false, false, 206), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 207
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "ville", [], "any", false, false, false, 207), "html", null, true);
                        yield "</span>
                                                                                <br>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 211
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 211), "html", null, true);
                        yield "</span>
                                                                                <div class=\"pt-4\">
                                                                                    <div class=\"btn-toolbar\"
                                                                                         role=\"toolbar\"
                                                                                         aria-label=\"Toolbar with button groups\">
                                                                                        <div class=\"btn-group mr-2\"
                                                                                             role=\"group\"
                                                                                             aria-label=\"First group\">
                                                                                            <a class=\"btn btn-bg-primary btn-sm\"
                                                                                               target=\"_blank\"
                                                                                               href=\"";
                        // line 221
                        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "slug", [], "any", false, false, false, 221)) > 8)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "slug", [], "any", false, false, false, 221)]), "html", null, true);
                        }
                        yield "\">
                                                                                                ";
                        // line 222
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.voir_annonce"), "html", null, true);
                        yield "
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class=\"btn-group mr-2\"
                                                                                             role=\"group\"
                                                                                             aria-label=\"Second group\">
                                                                                            <a href=\"";
                        // line 228
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_cancelledReservationAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 228)]), "html", null, true);
                        yield "\"
                                                                                               class=\"btn btn-bg-primary btn-sm editer annulerCommande\">
                                                                                                ";
                        // line 230
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annuler"), "html", null, true);
                        yield "
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    ";
                    }
                    // line 238
                    yield "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 239
                yield "                                                            ";
            }
            // line 240
            yield "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les reservation-devis-en-attente-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx2\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne2\" data-parent=\"#accordionEx2\"
                                               href=\"#collapseOne2\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne2\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservation-devis-en-attente"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reservationsDevisEnAttenteCount"] ?? null), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne2\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne2\" data-parent=\"#accordionEx2\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 282
        if ((($context["reservationsDevisEnAttenteCount"] ?? null) > 0)) {
            // line 283
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsDevisEnAttente\">
                                                                ";
            // line 285
            yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_devis_attente.html.twig", "profile/annonces.html.twig", 285)->unwrap()->yield($context);
            // line 286
            yield "                                                            </div>
                                                        ";
        }
        // line 288
        yield "                                                    </div>
                                                    <div id=\"paginateReservationsDevisEnAttente\" class=\"col-md-12\">
                                                        ";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reservationsDevisEnAttente"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 291
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 293
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 293)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 293)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 293) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 293), 0, [], "any", false, false, false, 293), "guid", [], "any", false, false, false, 293), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 293)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 293), 0, [], "any", false, false, false, 293))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 293), 0, [], "any", false, false, false, 293), "guid", [], "any", false, false, false, 293), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h4>";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 297), "html", null, true);
            yield "</h4>
                                                                    <h4>";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dates_devis", [], "any", false, false, false, 300), "html", null, true);
            yield "</h4>
                                                                    ";
            // line 302
            yield "                                                                    <div class=\"col-md-12 row\">
                                                                        <div class=\"col-md-8 pl-0\">
                                                                            <h4>";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
            yield "
                                                                                :
                                                                                ";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prenom_prestataire", [], "any", false, false, false, 306), "html", null, true);
            yield "
                                                                                ";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom_prestataire", [], "any", false, false, false, 307), "html", null, true);
            yield "</h4>
                                                                        </div>
                                                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 312), "html", null, true);
            yield "
                                                                        ";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 313), "html", null, true);
            yield "</span>
                                                                        </div>
                                                                    </div>
                                                                    <br>

                                                                    ";
            // line 319
            yield "                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn btn-bg-primary btn-s annuler-devis\"
                                                                                   href=\"";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_annulerDevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 325), "state" => "edition"]), "html", null, true);
            yield "\">
                                                                                    ";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annuler"), "html", null, true);
            yield "
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_detailsDevis", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 331)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-details-button btn-s\">";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.voir-accepter"), "html", null, true);
            yield "</a>
                                                                            </div>
                                                                            <div class=\"btn-group ml-4 \" role=\"group\"
                                                                                 aria-label=\"Thirth group\"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les reservations terminees-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx3\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne3\" data-parent=\"#accordionEx3\"
                                               href=\"#collapseOne3\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne3\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-terminees"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reservationsTermineesCount"] ?? null), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id=\"collapseOne3\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne3\" data-parent=\"#accordionEx3\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 382
        if ((($context["reservationsTermineesCount"] ?? null) > 0)) {
            // line 383
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsTerminees\">
                                                                ";
            // line 385
            yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_terminees.html.twig", "profile/annonces.html.twig", 385)->unwrap()->yield($context);
            // line 386
            yield "                                                            </div>
                                                        ";
        }
        // line 388
        yield "                                                    </div>

                                                    <div id=\"paginateReservationsTerminees\" class=\"col-md-12\">
                                                        ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reservationsTerminees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 392
            yield "                                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 392) == "devis")) {
                // line 393
                yield "                                                                <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                    <div class=\"col-md-4 annonce-img\"
                                                                         style=\"background: url('";
                // line 395
                if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 395)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 395), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/empty_devis.jpg"), "html", null, true);
                }
                yield "')\"></div>
                                                                    <div class=\"col-md-8 py-2 annonce-detail\">
                                                                        <h4>";
                // line 397
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 399), "html", null, true);
                yield "</h4>
                                                                        <h4>";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                yield "
                                                                            :";
                // line 401
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 401), "html", null, true);
                yield "</h4>
                                                                        ";
                // line 403
                yield "                                                                        <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 405
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prenom_prestataire", [], "any", false, false, false, 405), "html", null, true);
                yield "
                                                                            ";
                // line 406
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "nom_prestataire", [], "any", false, false, false, 406), "html", null, true);
                yield "</h4>
                                                                    </div>
                                                                </div>
                                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 409
$context["a"], "pinged", [], "any", false, false, false, 409) == "product")) {
                // line 410
                yield "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 410));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 411
                    yield "                                                                    ";
                    if ($context["s"]) {
                        // line 412
                        yield "                                                                        <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                            <div class=\"col-md-4 annonce-img\"
                                                                                 style=\"background: url('";
                        // line 414
                        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 414)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", true, true, false, 414)) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 414) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 414), 0, [], "any", false, false, false, 414), "guid", [], "any", false, false, false, 414), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", false, false, false, 414), 0, [], "any", false, false, false, 414), "guid", [], "any", false, false, false, 414), "html", null, true);
                        }
                        yield "')\"></div>
                                                                            <div class=\"col-md-8 py-2 annonce-detail\">
                                                                                <h3>";
                        // line 416
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "first_name", [], "any", false, false, false, 416), "html", null, true);
                        yield "
                                                                                    ";
                        // line 417
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "last_name", [], "any", false, false, false, 417), "html", null, true);
                        yield "</h3>
                                                                                <p class=\"fs-14\">";
                        // line 418
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 418), "html", null, true);
                        yield "</p>
                                                                                <h3>";
                        // line 419
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_parent", [], "any", false, false, false, 419), "html", null, true);
                        yield "
                                                                                    ";
                        // line 420
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "devise", [], "any", false, false, false, 420), "metaValue", [], "any", false, false, false, 420), "html", null, true);
                        yield "</h3>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 423
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "pays", [], "any", false, false, false, 423)), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 424
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "etat", [], "any", false, false, false, 424), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 425
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "ville", [], "any", false, false, false, 425), "html", null, true);
                        yield "</span>
                                                                                <br>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 429
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 429), "html", null, true);
                        yield "</span>
                                                                            </div>
                                                                        </div>
                                                                    ";
                    }
                    // line 433
                    yield "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 434
                yield "                                                            ";
            }
            // line 435
            yield "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 436
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les reservations annules-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx4\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne4\" data-parent=\"#accordionEx4\"
                                               href=\"#collapseOne4\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne4\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.reservations-annulees"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reservationsAnnuleesCount"] ?? null), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne4\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne4\" data-parent=\"#accordionEx4\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">

                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 478
        if ((($context["reservationsAnnuleesCount"] ?? null) > 0)) {
            // line 479
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationReservationsAnnulees\">
                                                                ";
            // line 481
            yield from $this->loadTemplate("profile/partials/pagination_bloc_reservations_annulees.html.twig", "profile/annonces.html.twig", 481)->unwrap()->yield($context);
            // line 482
            yield "                                                            </div>
                                                        ";
        }
        // line 484
        yield "                                                    </div>

                                                    <div id=\"paginateReservationsAnnulees\" class=\"col-md-12\">
                                                        ";
        // line 487
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reservationsAnnulees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 488
            yield "                                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 488) == "devis")) {
                // line 489
                yield "                                                                <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                    <div class=\"col-md-4 annonce-img\"
                                                                         style=\"background: url('";
                // line 491
                if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 491)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "affiche", [], "any", false, false, false, 491), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/empty_devis.jpg"), "html", null, true);
                }
                yield "')\"></div>
                                                                    <div class=\"col-md-8 py-2 annonce-detail\">

                                                                        <h4>";
                // line 494
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 496
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 496), "html", null, true);
                yield "</h4>

                                                                        <h4>";
                // line 498
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
                yield "
                                                                            :";
                // line 499
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 499), "html", null, true);
                yield "</h4>
                                                                        ";
                // line 501
                yield "                                                                        <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
                yield "
                                                                            :
                                                                            ";
                // line 503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_mime_type", [], "any", false, false, false, 503), "html", null, true);
                yield "</h4>
                                                                    </div>
                                                                </div>

                                                            ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 507
$context["a"], "pinged", [], "any", false, false, false, 507) == "product") && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 507))) {
                // line 508
                yield "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "annonces", [], "any", false, false, false, 508));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 509
                    yield "                                                                    ";
                    if ($context["s"]) {
                        // line 510
                        yield "                                                                        <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                            <div class=\"col-md-4 annonce-img\"
                                                                                 style=\"background: url('";
                        // line 512
                        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 512)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", true, true, false, 512)) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 512) != ""))) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "gallery", [], "any", false, false, false, 512), 0, [], "any", false, false, false, 512), "guid", [], "any", false, false, false, 512), "html", null, true);
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "images_secondaires", [], "any", false, false, false, 512), 0, [], "any", false, false, false, 512), "guid", [], "any", false, false, false, 512), "html", null, true);
                        }
                        yield "')\"></div>
                                                                            <div class=\"col-md-8 py-2 annonce-detail\">
                                                                                <h3>";
                        // line 514
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "first_name", [], "any", false, false, false, 514), "html", null, true);
                        yield "
                                                                                    ";
                        // line 515
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "last_name", [], "any", false, false, false, 515), "html", null, true);
                        yield "</h3>
                                                                                <p class=\"fs-14\">";
                        // line 516
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "post_title", [], "any", false, false, false, 516), "html", null, true);
                        yield "</p>
                                                                                <h3>";
                        // line 517
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_parent", [], "any", false, false, false, 517), "html", null, true);
                        yield "
                                                                                    ";
                        // line 518
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["s"], "devise", [], "any", false, false, false, 518), "metaValue", [], "any", false, false, false, 518), "html", null, true);
                        yield "</h3>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 521
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "pays", [], "any", false, false, false, 521)), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 522
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "etat", [], "any", false, false, false, 522), "html", null, true);
                        yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 523
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "ville", [], "any", false, false, false, 523), "html", null, true);
                        yield "</span>
                                                                                <br>
                                                                                <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 527
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "date_evenement", [], "any", false, false, false, 527), "html", null, true);
                        yield "</span>
                                                                            </div>
                                                                        </div>
                                                                    ";
                    }
                    // line 531
                    yield "                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 532
                yield "                                                            ";
            }
            // line 533
            yield "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 534
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces en brouillon -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx5\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne5\" data-parent=\"#accordionEx5\"
                                               href=\"#collapseOne5\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne5\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-en-brouillon"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["annoncesBrouillonCount"] ?? null), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne5\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne5\" data-parent=\"#accordionEx5\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 576
        if ((($context["annoncesBrouillonCount"] ?? null) > 0)) {
            // line 577
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnonceBrouillon\">
                                                                ";
            // line 579
            yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_brouillon.html.twig", "profile/annonces.html.twig", 579)->unwrap()->yield($context);
            // line 580
            yield "                                                            </div>
                                                        ";
        }
        // line 582
        yield "                                                    </div>
                                                    <div id=\"paginateAnnoncesEnBrouillon\" class=\"col-md-12\">
                                                        ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["annoncesBrouillon"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 585
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 587
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 587) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 587)) > 0)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 587) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 587), 0, [], "any", false, false, false, 587), "guid", [], "any", false, false, false, 587), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 587)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 587), 0, [], "any", false, false, false, 587))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 587), 0, [], "any", false, false, false, 587), "guid", [], "any", false, false, false, 587), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>";
            // line 589
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 589), "html", null, true);
            yield "
                                                                        ";
            // line 590
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 590), "html", null, true);
            yield "</h3>
                                                                    <p class=\"fs-14\">
                                                                        ";
            // line 592
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 592), "locale", [], "any", false, false, false, 592) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 592) != ""))) {
                // line 593
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 593), "html", null, true);
                yield "
                                                                        ";
            } else {
                // line 595
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 595), "html", null, true);
                yield "
                                                                        ";
            }
            // line 597
            yield "                                                                    </p>
                                                                    <h3>";
            // line 598
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 598), "html", null, true);
            yield "
                                                                        ";
            // line 599
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 599), "html", null, true);
            yield "</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 602
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 602)), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 603), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 604
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 604), "html", null, true);
            yield "</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 608
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 608)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 610
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 610)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 611
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 611)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 619)]), "html", null, true);
            yield "\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 625
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 625)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 636
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces en moderation -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx6\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne6\" data-parent=\"#accordionEx6\"
                                               href=\"#collapseOne6\" aria-expanded=\"true\" aria-controls=\"collapseOne6\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                           id=\"accordion_address2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-en-moderation"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 659
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["annoncesModerationCount"] ?? null), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 665
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Card body -->
                                        <div id=\"collapseOne6\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne6\" data-parent=\"#accordionEx6\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 676
        if ((($context["annoncesModerationCount"] ?? null) > 0)) {
            // line 677
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnonceModeration\">
                                                                ";
            // line 679
            yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_moderation.html.twig", "profile/annonces.html.twig", 679)->unwrap()->yield($context);
            // line 680
            yield "                                                            </div>
                                                        ";
        }
        // line 682
        yield "                                                    </div>
                                                    <div id=\"paginateAnnoncesEnModeration\" class=\"col-md-12\">
                                                        ";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["annoncesModeration"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 685
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 687
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 687) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 687)) > 0)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 687) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 687), 0, [], "any", false, false, false, 687), "guid", [], "any", false, false, false, 687), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 687)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 687), 0, [], "any", false, false, false, 687))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 687), 0, [], "any", false, false, false, 687), "guid", [], "any", false, false, false, 687), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>";
            // line 689
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 689), "html", null, true);
            yield "
                                                                        ";
            // line 690
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 690), "html", null, true);
            yield "</h3>
                                                                    <p class=\"fs-14\">
                                                                        ";
            // line 692
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 692), "locale", [], "any", false, false, false, 692) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 692) != ""))) {
                // line 693
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 693), "html", null, true);
                yield "
                                                                        ";
            } else {
                // line 695
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 695), "html", null, true);
                yield "
                                                                        ";
            }
            // line 697
            yield "                                                                    </p>
                                                                    <h3>";
            // line 698
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 698), "html", null, true);
            yield "
                                                                        ";
            // line 699
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 699), "html", null, true);
            yield "</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 702
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 702)), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 703
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 703), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 704
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 704), "html", null, true);
            yield "</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 708
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 708)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 710
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 710)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 711
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 711)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 716
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion card -->
                                    </div>
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces en rejetees -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx7\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne7\" data-parent=\"#accordionEx7\"
                                               href=\"#collapseOne7\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne7\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-rejetees"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 739
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["annoncesRejeteesCount"] ?? null), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne7\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne7\" data-parent=\"#accordionEx7\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 757
        if ((($context["annoncesRejeteesCount"] ?? null) > 0)) {
            // line 758
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnonceRejetees\">
                                                                ";
            // line 760
            yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_rejetees.html.twig", "profile/annonces.html.twig", 760)->unwrap()->yield($context);
            // line 761
            yield "                                                            </div>
                                                        ";
        }
        // line 763
        yield "                                                    </div>
                                                    <div id=\"paginateAnnoncesRejetees\" class=\"col-md-12\">
                                                        ";
        // line 765
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["annoncesRejetees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 766
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 768
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 768)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 768)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 768) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 768), 0, [], "any", false, false, false, 768), "guid", [], "any", false, false, false, 768), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 768)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 768), 0, [], "any", false, false, false, 768))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 768), 0, [], "any", false, false, false, 768), "guid", [], "any", false, false, false, 768), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>";
            // line 770
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 770), "html", null, true);
            yield "
                                                                        ";
            // line 771
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 771), "html", null, true);
            yield "</h3>
                                                                    <p class=\"fs-14\">
                                                                        ";
            // line 773
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 773), "locale", [], "any", false, false, false, 773) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 773) != ""))) {
                // line 774
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 774), "html", null, true);
                yield "
                                                                        ";
            } else {
                // line 776
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 776), "html", null, true);
                yield "
                                                                        ";
            }
            // line 778
            yield "                                                                    </p>
                                                                    <h3>";
            // line 779
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 779), "html", null, true);
            yield "
                                                                        ";
            // line 780
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 780), "html", null, true);
            yield "</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 783
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 783)), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 784), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 785
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 785), "html", null, true);
            yield "</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 789
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 789)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 791
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 791)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 792
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 792)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>

                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"";
            // line 801
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 801)]), "html", null, true);
            yield "\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 807
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 807)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 817
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les annonces publiees -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx8\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne8\" data-parent=\"#accordionEx8\"
                                               href=\"#collapseOne8\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne8\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.annonces-publiees"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 841
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["annoncesPublieesCount"] ?? null), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 847
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne8\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne8\" data-parent=\"#accordionEx8\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 859
        if ((($context["annoncesPublieesCount"] ?? null) > 0)) {
            // line 860
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationAnnoncesPubliees\">
                                                                ";
            // line 862
            yield from $this->loadTemplate("profile/partials/pagination_bloc_annonces_publiees.html.twig", "profile/annonces.html.twig", 862)->unwrap()->yield($context);
            // line 863
            yield "                                                            </div>
                                                        ";
        }
        // line 865
        yield "                                                    </div>

                                                    <div id=\"paginateAnnoncesPubliees\" class=\"col-md-12\">
                                                        ";
        // line 868
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["annoncesPubliees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 869
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 871
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 871)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 871)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 871) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 871), 0, [], "any", false, false, false, 871), "guid", [], "any", false, false, false, 871), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 871)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 871), 0, [], "any", false, false, false, 871))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 871), 0, [], "any", false, false, false, 871), "guid", [], "any", false, false, false, 871), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h3>";
            // line 873
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 873), "html", null, true);
            yield "
                                                                        ";
            // line 874
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 874), "html", null, true);
            yield "</h3>
                                                                    <p class=\"fs-14\">
                                                                        ";
            // line 876
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 876), "locale", [], "any", false, false, false, 876) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 876) != ""))) {
                // line 877
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre_en", [], "any", false, false, false, 877), "html", null, true);
                yield "
                                                                        ";
            } else {
                // line 879
                yield "                                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 879), "html", null, true);
                yield "
                                                                        ";
            }
            // line 881
            yield "                                                                    </p>
                                                                    <h3>";
            // line 882
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 882), "html", null, true);
            yield "
                                                                        ";
            // line 883
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 883), "html", null, true);
            yield "</h3>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 886
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pays", [], "any", false, false, false, 886)), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 887
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 887), "html", null, true);
            yield ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 888
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "ville", [], "any", false, false, false, 888), "html", null, true);
            yield "</span>
                                                                    <br>
                                                                    <span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 892
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 892)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 894
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 894)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
            // line 895
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "calendrier", [], "any", false, false, false, 895)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdates dispo.)</span>
                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"";
            // line 903
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 903), "state" => "edition"]), "html", null, true);
            yield "\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 909
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 909)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>

                                                                            <div class=\"btn-group mt-2\" role=\"group\"
                                                                                 aria-label=\"Thirth group\">
                                                                                ";
            // line 917
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 917)) > 8)) {
                // line 918
                yield "                                                                                    <a href=\"";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 918)) > 8)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 918)]), "html", null, true);
                }
                yield "\"
                                                                                       class=\"btn btn-bg-primary btn-sm \">
                                                                                        <i class=\"fas fa-eye\"></i>
                                                                                        ";
                // line 921
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.voir_annonce"), "html", null, true);
                yield "
                                                                                    </a>
                                                                                ";
            }
            // line 924
            yield "                                                                            </div>

                                                                            <div ";
            // line 926
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "categorieParentType", [], "any", false, false, false, 926) == "product_cat")) {
                yield "hidden";
            } else {
                yield "fa-minus";
            }
            // line 927
            yield "                                                                                 class=\"btn-group mt-2 ml-2\"
                                                                                 role=\"group\" aria-label=\"Thirth group\">
                                                                                <a id=\"mise_en_rupture\"
                                                                                   href=\"";
            // line 930
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 930)) > 8)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_rupture", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 930)]), "html", null, true);
            }
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm \">
                                                                                    <i class=\"fas ";
            // line 932
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "rupture", [], "any", false, false, false, 932) == 0)) {
                yield "fa-plus";
            } else {
                yield "fa-minus";
            }
            yield "\"></i>
                                                                                    ";
            // line 933
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "rupture", [], "any", false, false, false, 933) == 0)) {
                // line 934
                yield "                                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.produit_disponible"), "html", null, true);
                yield "
                                                                                    ";
            } else {
                // line 936
                yield "                                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.rupture"), "html", null, true);
                yield "
                                                                                    ";
            }
            // line 938
            yield "                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 945
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les devis en attente -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx9\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne9\" data-parent=\"#accordionEx9\"
                                               href=\"#collapseOne9\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne9\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 967
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-attente"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 968
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["devisEnAttenteCount"] ?? null), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 974
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne9\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne9\" data-parent=\"#accordionEx9\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 986
        if ((($context["devisEnAttenteCount"] ?? null) > 0)) {
            // line 987
            yield "                                                            <div class=\"col-md-12\" id=\"dynamicPaginationDevisEnAttente\">
                                                                ";
            // line 988
            yield from $this->loadTemplate("profile/partials/pagination_bloc_devis_attente.html.twig", "profile/annonces.html.twig", 988)->unwrap()->yield($context);
            // line 989
            yield "                                                            </div>
                                                        ";
        }
        // line 991
        yield "                                                    </div>
                                                    <div id=\"paginateDevisEnAttente\" class=\"col-md-12\">
                                                        ";
        // line 993
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["devisEnAttente"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 994
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 996
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 996)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 996)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 996) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 996), 0, [], "any", false, false, false, 996), "guid", [], "any", false, false, false, 996), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 996)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 996), 0, [], "any", false, false, false, 996))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 996), 0, [], "any", false, false, false, 996), "guid", [], "any", false, false, false, 996), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h4>";
            // line 998
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 1000
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 1000), "html", null, true);
            yield "</h4>
                                                                    <h4>";
            // line 1001
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 1003
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dates_devis", [], "any", false, false, false, 1003), "html", null, true);
            yield "</h4>
                                                                    ";
            // line 1005
            yield "                                                                    <div class=\"col-md-12 row\">
                                                                        <div class=\"col-md-8 pl-0\">
                                                                            <h4>";
            // line 1007
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
            yield "
                                                                                :
                                                                                ";
            // line 1009
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 1009), "html", null, true);
            yield "
                                                                                ";
            // line 1010
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 1010), "html", null, true);
            yield "</h4>
                                                                        </div>
                                                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1015
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 1015), "html", null, true);
            yield "
                                                                        ";
            // line 1016
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 1016), "html", null, true);
            yield "</span>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"";
            // line 1026
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 1026), "state" => "edition"]), "html", null, true);
            yield "\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 1032
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 1032)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>

                                                                            <div class=\"btn-group ml-4 \" role=\"group\"
                                                                                 aria-label=\"Thirth group\"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1045
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->

                                <!--Accordion wrapper Pour les devis en brouillon -->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx10\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne10\" data-parent=\"#accordionEx10\"
                                               href=\"#collapseOne10\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne10\">
                                                <div class=\"row col-md-12\">
                                                    <div class=\"col-md-5\">
                                                        <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"underline fs-16\">";
        // line 1067
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-en-brouillon"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t(";
        // line 1068
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["devisEnBrouillonCount"] ?? null), "html", null, true);
        yield ")</span>
                                                        </i>
                                                    </div>
                                                    <div class=\"col-md-7\">
                                                        <p class=\"fs-12 sub-msg\">
                                                            ";
        // line 1073
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.message-en-attente"), "html", null, true);
        yield "</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne10\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne10\" data-parent=\"#accordionEx10\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-12 row\">
                                                        ";
        // line 1085
        if ((($context["devisEnBrouillonCount"] ?? null) > 0)) {
            // line 1086
            yield "                                                            <div class=\"col-md-12\"
                                                                 id=\"dynamicPaginationDevisEnBrouillon\">
                                                                ";
            // line 1088
            yield from $this->loadTemplate("profile/partials/pagination_bloc_devis_brouillon.html.twig", "profile/annonces.html.twig", 1088)->unwrap()->yield($context);
            // line 1089
            yield "                                                            </div>
                                                        ";
        }
        // line 1091
        yield "                                                    </div>
                                                    <div id=\"paginateDevisEnBrouillon\" class=\"col-md-12\">
                                                        ";
        // line 1093
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["devisEnBrouillon"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 1094
            yield "                                                            <div class=\"row mt-3\" style=\"min-height: 200px\">
                                                                <div class=\"col-md-4 annonce-img\"
                                                                     style=\"background: url('";
            // line 1096
            if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 1096)) > 0) && CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", true, true, false, 1096)) && (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 1096) != ""))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "gallery", [], "any", false, false, false, 1096), 0, [], "any", false, false, false, 1096), "guid", [], "any", false, false, false, 1096), "html", null, true);
            } elseif (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 1096)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 1096), 0, [], "any", false, false, false, 1096))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "images_secondaires", [], "any", false, false, false, 1096), 0, [], "any", false, false, false, 1096), "guid", [], "any", false, false, false, 1096), "html", null, true);
            }
            yield "')\"></div>
                                                                <div class=\"col-md-8 py-2 annonce-detail\">
                                                                    <h4>";
            // line 1098
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-service"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 1100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "titre", [], "any", false, false, false, 1100), "html", null, true);
            yield "</h4>
                                                                    <h4>";
            // line 1101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-date"), "html", null, true);
            yield "
                                                                        :
                                                                        ";
            // line 1103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "dates_devis", [], "any", false, false, false, 1103), "html", null, true);
            yield "</h4>
                                                                    ";
            // line 1105
            yield "                                                                    <div class=\"col-md-12 row\">
                                                                        <div class=\"col-md-8 pl-0\">
                                                                            <h4>";
            // line 1107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.annonces.devis-prestataire"), "html", null, true);
            yield "
                                                                                :
                                                                                ";
            // line 1109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "first_name", [], "any", false, false, false, 1109), "html", null, true);
            yield "
                                                                                ";
            // line 1110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "last_name", [], "any", false, false, false, 1110), "html", null, true);
            yield "</h4>
                                                                        </div>
                                                                        <div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"texte-gris text-bold fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-money-bill\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 1115), "html", null, true);
            yield "
                                                                        ";
            // line 1116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "devise", [], "any", false, false, false, 1116), "html", null, true);
            yield "</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class=\"pt-4\">
                                                                        <div class=\"btn-toolbar\" role=\"toolbar\"
                                                                             aria-label=\"Toolbar with button groups\">
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"First group\">
                                                                                <a class=\"btn btn-bg-primary btn-sm editer\"
                                                                                   href=\"";
            // line 1126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_EditDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 1126), "state" => "edition"]), "html", null, true);
            yield "\">
                                                                                    <i class=\"fas fa-edit\"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class=\"btn-group mr-2\" role=\"group\"
                                                                                 aria-label=\"Second group\">
                                                                                <a href=\"";
            // line 1132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_deleteDraftAnnounce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 1132)]), "html", null, true);
            yield "\"
                                                                                   class=\"btn btn-bg-primary btn-sm editer supprimer\">
                                                                                    <i class=\"fas fa-trash-alt\"></i>
                                                                                </a>
                                                                            </div>

                                                                            <div class=\"btn-group ml-4 \" role=\"group\"
                                                                                 aria-label=\"Thirth group\"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1145
        yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin des modifs -->
                </div>
            </div>
            ";
        // line 1158
        yield from $this->loadTemplate("partials/project.html.twig", "profile/annonces.html.twig", 1158)->unwrap()->yield($context);
        // line 1159
        yield "            ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profile/annonces.html.twig", 1159)->unwrap()->yield($context);
        // line 1160
        yield "        </main>
    </div>
";
        yield from [];
    }

    // line 1165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1166
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        yield from [];
    }

    // line 1170
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1171
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 1174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/img-picker/image-picker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 1178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.paginate.js"), "html", null, true);
        yield "\"></script>

    <script>
        var docWidth = document.documentElement.offsetWidth;
        [].forEach.call(document.querySelectorAll('*'), function (el) {
            if (el.offsetWidth > docWidth) {
                console.log(el);
            }
        });

        \$(function () {
            let text = `";
        // line 1189
        if (($context["infos_bulle"] ?? null)) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["infos_bulle"] ?? null), "optionValue", [], "any", false, false, false, 1189);
        }
        yield "`;
            \$('.popover_infos').data('content', text);
            \$('[data-toggle=\"popover\"]').popover();
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

        // Initialize the object
        \$(\"#photos\").imagepicker();
        \$(\"#videos\").imagepicker();
        // Retrieve the picker
        \$(\"#photos\").data('picker');
        \$(\"#videos\").data('picker');

        \$('.date').datepicker({multidate: true, format: 'dd-mm-yyyy'});

        \$('#headingOne1').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne2').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne3').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne4').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne5').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne6').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne7').click(function () {
            let accordion = \$(this).find('i');

            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne8').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne9').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#headingOne10').click(function () {
            let accordion = \$(this).find('i');
            if (accordion.attr(\"class\").split(/\\s+/).includes('fa-plus')) {
                accordion.removeClass('fa-plus');
                accordion.addClass('fa-minus');
            } else {
                accordion.removeClass('fa-minus');
                accordion.addClass('fa-plus');
            }
        });

        \$('#accordionEx1').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateReservationsEnCours').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsEnCours').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx2').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateReservationsDevisEnAttente').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsDevisEnAttente').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx3').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateReservationsTerminees').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsTerminees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx4').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data);
                    if (data.html) {
                        \$('#paginateReservationsAnnulees').html(data.html);
                    }
                    \$('#dynamicPaginationReservationsAnnulees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx5').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateAnnoncesEnBrouillon').html(data.html);
                    }
                    \$('#dynamicPaginationAnnonceBrouillon').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx6').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data);
                    if (data.html) {
                        \$('#paginateAnnoncesEnModeration').html(data.html);
                    }
                    \$('#dynamicPaginationAnnonceModeration').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx7').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateAnnoncesRejetees').html(data.html);
                    }
                    \$('#dynamicPaginationAnnonceRejetees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx8').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data);
                    if (data.html) {
                        \$('#paginateAnnoncesPubliees').html(data.html);
                    }
                    \$('#dynamicPaginationAnnoncesPubliees').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx9').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    console.log(data.pagination);
                    if (data.html) {
                        \$('#paginateDevisEnAttente').html(data.html);
                    }
                    \$('#dynamicPaginationDevisEnAttente').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });

        \$('#accordionEx10').on('click', '.page-item', function (e) {
            e.preventDefault();
            var url = \$(this).children().attr('href');
            \$.ajax({
                url: url,
                method: \"get\",
                success: function (data) {
                    if (data.html) {
                        \$('#paginateDevisEnBrouillon').html(data.html);
                    }
                    \$('#dynamicPaginationDevisEnBrouillon').html(data.pagination);
                },
                error: function (xhr) {
                    console.error(xhr);
                }
            });
        });


        // jQuery time
        var current_fs,
            _fs,
            previous_fs; // fieldsets
        var left,
            opacity,
            scale; // fieldset properties which we will animate
        var animating; // flag to prevent quick multi-click glitches

        \$(\".next\").click(function () {
            if (animating)
                return false;

            animating = true;
            current_fs = \$(this).parent();
            next_fs = \$(this).parent().next();
// activate next step on progressbar using the index of next_fs
            \$(\"#progressbar li\").eq(\$(\"fieldset\").index(next_fs)).addClass(\"active\");
// show the next fieldset
            next_fs.show();
// hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
// as the opacity of current_fs reduces to 0 - stored in \"now\"
// 1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
// 2. bring next_fs from the right(50%)
                    left = (now * 50) + \"%\";
// 3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'absolute'
                    });
                    next_fs.css({'left': left, 'opacity': opacity});
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
// this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        \$(\".previous\").click(function () {
            if (animating)
                return false;

            animating = true;
            current_fs = \$(this).parent();
            previous_fs = \$(this).parent().prev();

// de-activate current step on progressbar
            \$(\"#progressbar li\").eq(\$(\"fieldset\").index(current_fs)).removeClass(\"active\");
// show the previous fieldset
            previous_fs.show();
// hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
// as the opacity of current_fs reduces to 0 - stored in \"now\"
// 1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
// 2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + \"%\";
// 3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
// this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        \$(document).on('change', '.souscategorie', function (e) {
            \$('.prestations').attr('name', \"next\");
            \$('.prestations').removeAttr('disabled');
        });
        \$(document).on('blur', '#addressePostale, #codePostale, #ville', function (e) {
            if (\$('#addressePostale').val() != '' && \$('#codePostale').val() != '' && \$('#ville').val() != '') {
                \$('.adresse').attr('name', \"next\");
                \$('.adresse').removeAttr('disabled');
            } else {
                \$('.adresse').attr('disabled', \"disabled\");
                \$('.adresse').attr('name', \"previous\");
            }

        });

        \$(document).on('blur', '#nom', function (e) {
            if (\$('#nom').val() != '') {
                \$('.nom').attr('name', \"next\");
                \$('.nom').removeAttr('disabled');
            } else {
                \$('.nom').attr('disabled', \"disabled\");
                \$('.nom').attr('name', \"previous\");
            }

        });

        \$(document).on('change', '#photos', function (e) {
            if (\$('#photos').val() != '') {
                \$('.portfolio').attr('name', \"next\");
                \$('.portfolio').removeAttr('disabled');
            } else {
                \$('.portfolio').attr('disabled', \"disabled\");
                \$('.portfolio').attr('name', \"previous\");
            }

        });
        \$(document).on('blur', '#prix', function (e) {
            if (\$('#devise').val() != '' && \$('#prix').val() != '') {
                \$('.devise').attr('name', \"next\");
                \$('.devise').removeAttr('disabled');
            } else {
                \$('.devise').attr('disabled', \"disabled\");
                \$('.devise').attr('name', \"previous\");
            }

        });


        \$(document).on('click', '.annuler-devis', function (e) { // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            var t = \$(this);
            var urlPath = \$(this).attr('href');
            swal({
                title: \"Annulation de la reservation\",
                text: \"";
        // line 1656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("commande.annuler.confirmer_annulation"), "html", null, true);
        yield "\",

                type: \"info\",
                showCancelButton: true,
                confirmButtonClass: \"btn-danger\",
                confirmButtonText: \"Annuler Reservation\",
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
                            if (reponse == 1) {

                                swal(\"";
        // line 1676
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("commande.annuler.succes"), "html", null, true);
        yield "\", \"\", \"success\");

                                window.setTimeout(function () {
                                    window.location = \"\";
                                }, 1000);
                                t.parents('li').hide();
                            } else {

                                swal(\"commande.annuler.erreur'|trans}}\", \"\", \"error\");


                            }
                        },
                        error: function (reponse) {
                            swal(\"";
        // line 1690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("commande.annuler.erreur"), "html", null, true);
        yield "\", \"\", \"error\");


                        }

                    });

                } else {
                    swal.close();
                }
            });
            return false;
        });

        // Supprimer annonce

        \$(document).on('click', '.supprimer', function (e) { // On emp�che le navigateur de soumettre le formulaire
            e.preventDefault();
            var t = \$(this);
            var urlPath = \$(this).attr('href');
            swal({
                title: \"Suppression de l'objet\",
                text: \"Attention l'objet sera Supprimeé et n'apparaitra plus sur le site\",
                type: \"info\",
                showCancelButton: true,
                confirmButtonClass: \"btn-danger\",
                confirmButtonText: \"Supprimer\",
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
                            console.log(reponse);
                            if (reponse == 1) {
                                swal(\"suppression terminée\", \"\", \"success\");
                                window.setTimeout(function () {
                                    window.location = \"\";
                                }, 1000);
                                t.parents('li').hide();
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
        // Supprimer annonce
        toastr.options = {
            \"closeButton\": true,
            \"debug\": false,
            \"newestOnTop\": false,
            \"progressBar\": true,
            \"positionClass\": \"toast-top-center\",
            \"preventDuplicates\": false,
            \"onclick\": null,
            \"showDuration\": \"300\",
            \"hideDuration\": \"1000\",
            \"timeOut\": \"30000\",
            \"extendedTimeOut\": \"1000\",
            \"showEasing\": \"swing\",
            \"hideEasing\": \"linear\",
            \"showMethod\": \"fadeIn\",
            \"hideMethod\": \"fadeOut\"
        };
    </script>
    ";
        // line 1768
        yield from $this->loadTemplate("profile/js/annulerCommande.js.twig", "profile/annonces.html.twig", 1768)->unwrap()->yield($context);
        // line 1769
        yield "    ";
        yield from $this->loadTemplate("profile/js/brouillonDevisAnnonce.html.twig", "profile/annonces.html.twig", 1769)->unwrap()->yield($context);
        // line 1770
        yield "    ";
        yield from $this->loadTemplate("profile/js/creerDevisAnnonce.html.twig", "profile/annonces.html.twig", 1770)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/annonces.html.twig";
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
        return array (  2923 => 1770,  2920 => 1769,  2918 => 1768,  2837 => 1690,  2820 => 1676,  2797 => 1656,  2325 => 1189,  2311 => 1178,  2307 => 1177,  2303 => 1176,  2299 => 1175,  2295 => 1174,  2288 => 1171,  2281 => 1170,  2272 => 1166,  2265 => 1165,  2258 => 1160,  2255 => 1159,  2253 => 1158,  2238 => 1145,  2219 => 1132,  2210 => 1126,  2197 => 1116,  2193 => 1115,  2185 => 1110,  2181 => 1109,  2176 => 1107,  2172 => 1105,  2168 => 1103,  2163 => 1101,  2159 => 1100,  2154 => 1098,  2145 => 1096,  2141 => 1094,  2137 => 1093,  2133 => 1091,  2129 => 1089,  2127 => 1088,  2123 => 1086,  2121 => 1085,  2106 => 1073,  2098 => 1068,  2094 => 1067,  2070 => 1045,  2051 => 1032,  2042 => 1026,  2029 => 1016,  2025 => 1015,  2017 => 1010,  2013 => 1009,  2008 => 1007,  2004 => 1005,  2000 => 1003,  1995 => 1001,  1991 => 1000,  1986 => 998,  1977 => 996,  1973 => 994,  1969 => 993,  1965 => 991,  1961 => 989,  1959 => 988,  1956 => 987,  1954 => 986,  1939 => 974,  1930 => 968,  1926 => 967,  1902 => 945,  1890 => 938,  1884 => 936,  1878 => 934,  1876 => 933,  1868 => 932,  1861 => 930,  1856 => 927,  1850 => 926,  1846 => 924,  1840 => 921,  1831 => 918,  1829 => 917,  1818 => 909,  1809 => 903,  1798 => 895,  1794 => 894,  1789 => 892,  1782 => 888,  1778 => 887,  1774 => 886,  1768 => 883,  1764 => 882,  1761 => 881,  1755 => 879,  1749 => 877,  1747 => 876,  1742 => 874,  1738 => 873,  1729 => 871,  1725 => 869,  1721 => 868,  1716 => 865,  1712 => 863,  1710 => 862,  1706 => 860,  1704 => 859,  1689 => 847,  1680 => 841,  1676 => 840,  1651 => 817,  1635 => 807,  1626 => 801,  1614 => 792,  1610 => 791,  1605 => 789,  1598 => 785,  1594 => 784,  1590 => 783,  1584 => 780,  1580 => 779,  1577 => 778,  1571 => 776,  1565 => 774,  1563 => 773,  1558 => 771,  1554 => 770,  1545 => 768,  1541 => 766,  1537 => 765,  1533 => 763,  1529 => 761,  1527 => 760,  1523 => 758,  1521 => 757,  1506 => 745,  1497 => 739,  1493 => 738,  1469 => 716,  1458 => 711,  1454 => 710,  1449 => 708,  1442 => 704,  1438 => 703,  1434 => 702,  1428 => 699,  1424 => 698,  1421 => 697,  1415 => 695,  1409 => 693,  1407 => 692,  1402 => 690,  1398 => 689,  1389 => 687,  1385 => 685,  1381 => 684,  1377 => 682,  1373 => 680,  1371 => 679,  1367 => 677,  1365 => 676,  1351 => 665,  1342 => 659,  1338 => 658,  1314 => 636,  1297 => 625,  1288 => 619,  1277 => 611,  1273 => 610,  1268 => 608,  1261 => 604,  1257 => 603,  1253 => 602,  1247 => 599,  1243 => 598,  1240 => 597,  1234 => 595,  1228 => 593,  1226 => 592,  1221 => 590,  1217 => 589,  1208 => 587,  1204 => 585,  1200 => 584,  1196 => 582,  1192 => 580,  1190 => 579,  1186 => 577,  1184 => 576,  1169 => 564,  1160 => 558,  1156 => 557,  1131 => 534,  1125 => 533,  1122 => 532,  1116 => 531,  1109 => 527,  1102 => 523,  1098 => 522,  1094 => 521,  1088 => 518,  1084 => 517,  1080 => 516,  1076 => 515,  1072 => 514,  1063 => 512,  1059 => 510,  1056 => 509,  1051 => 508,  1049 => 507,  1042 => 503,  1036 => 501,  1032 => 499,  1028 => 498,  1023 => 496,  1018 => 494,  1008 => 491,  1004 => 489,  1001 => 488,  997 => 487,  992 => 484,  988 => 482,  986 => 481,  982 => 479,  980 => 478,  964 => 465,  955 => 459,  951 => 458,  927 => 436,  921 => 435,  918 => 434,  912 => 433,  905 => 429,  898 => 425,  894 => 424,  890 => 423,  884 => 420,  880 => 419,  876 => 418,  872 => 417,  868 => 416,  859 => 414,  855 => 412,  852 => 411,  847 => 410,  845 => 409,  839 => 406,  835 => 405,  829 => 403,  825 => 401,  821 => 400,  817 => 399,  812 => 397,  803 => 395,  799 => 393,  796 => 392,  792 => 391,  787 => 388,  783 => 386,  781 => 385,  777 => 383,  775 => 382,  761 => 371,  752 => 365,  748 => 364,  723 => 341,  708 => 332,  704 => 331,  696 => 326,  692 => 325,  684 => 319,  676 => 313,  672 => 312,  664 => 307,  660 => 306,  655 => 304,  651 => 302,  647 => 300,  642 => 298,  638 => 297,  633 => 295,  624 => 293,  620 => 291,  616 => 290,  612 => 288,  608 => 286,  606 => 285,  602 => 283,  600 => 282,  585 => 270,  576 => 264,  572 => 263,  548 => 241,  542 => 240,  539 => 239,  533 => 238,  522 => 230,  517 => 228,  508 => 222,  502 => 221,  489 => 211,  482 => 207,  478 => 206,  474 => 205,  468 => 202,  464 => 201,  460 => 200,  456 => 199,  447 => 197,  443 => 195,  440 => 194,  435 => 193,  433 => 192,  420 => 182,  416 => 181,  408 => 175,  406 => 174,  402 => 172,  398 => 171,  392 => 169,  388 => 167,  384 => 166,  380 => 165,  375 => 163,  366 => 161,  362 => 159,  359 => 158,  355 => 157,  351 => 155,  347 => 153,  345 => 152,  341 => 150,  339 => 149,  324 => 137,  315 => 131,  311 => 130,  293 => 114,  291 => 113,  282 => 106,  280 => 105,  272 => 99,  265 => 98,  257 => 95,  250 => 94,  242 => 91,  235 => 90,  185 => 43,  180 => 41,  174 => 38,  170 => 37,  166 => 36,  162 => 35,  157 => 33,  153 => 32,  149 => 31,  145 => 30,  141 => 29,  137 => 28,  130 => 25,  123 => 24,  117 => 22,  110 => 21,  104 => 19,  97 => 18,  88 => 13,  83 => 11,  77 => 8,  72 => 6,  66 => 4,  59 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/annonces.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profile/annonces.html.twig");
    }
}
