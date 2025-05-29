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

/* profile/index.html.twig */
class __TwigTemplate_6c8a376ded52811be55da04348b62474 extends Template
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
        return "profileTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("profileTemplate.html.twig", "profile/index.html.twig", 1);
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
        yield "\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
    <meta name=\"robots\" content=\"noindex\">


";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "    Trust &amp; Market | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.titre-page"), "html", null, true);
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-profile.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- Custom css for input tag -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tagsinput/tagify.css")), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/phone/css/intlTelInput.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Crop css -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css\" integrity=\"sha512-cyzxRvewl+FOKTtpBzYjW6x6IAYUCZy3sGP40hn+DQkqeluGRCax7qztK2ImL64SA+C7kVWdLI6wvdlStawhyw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    <!-- owl carousel css -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">
    <style>
        user-info-text {
            font-size: 14px;
            font-family: 'Source Sans Pro', \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            word-break: break-word;
            color: black;
        }

        .mimic-label {
            font-family: Roboto, sans-serif;
            font-weight: 300;
            color: #757575;
        }
        .image_area {
            position: relative;
        }

        img {
            display: block;
            max-width: 100%;
        }

        .preview {
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
            float: right;
        }

        .modal-lg{
            max-width: 1000px !important;
        }

        .overlay {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.5);
            overflow: hidden;
            height: 0;
            transition: .5s ease;
            width: 100%;
        }

        .image_area:hover .overlay {
            height: 50%;
            cursor: pointer;
        }

        .text {
            color: #333;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .modal-title{
            font-family: \"Source Sans Pro\", \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            text-align: center;
        }

        .modal-content{
            border-radius: 5px;
        }

        .modal-body{
            width: 95%;
            margin: auto;
        }

        .modal-footer{
            display: block;
        }

        .modal-footer .btn-warning{
            float: left;
            background-color: #262626 !important;
        }

        .modal-footer .btn-primary{
            float: right;
        }
        strong {
             font-weight: bold;
        }
        .cropper-container{
            width: 100%;
        }

        #topBtn {
            /*bottom: 0px !important;*/
        }

        /* Extra small devices (portrait phones, less than 576px) */
        @media (max-width: 575.98px) {
            main, .container {
                margin-top: 70px;
            }

            .preview {
                overflow: hidden;
                width: 200px;
                height: 200px;
                border: 1px solid red;
                margin: auto;
                float: none;
            }

            .image-bloc{
                margin-top: 25px;
            }
        }

        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            main, .container {
                margin-top: 100px;
            }

            .modal-content{
                border-radius: 5px;
            }

            .modal-body{
                width: 95%;
                margin: auto;
            }

            .modal-footer{
                display: block;
            }

            .modal-footer .cancel{
                float: left;
                font-size: large;
            }

            .modal-footer .approve{
                float: right;
                font-size: large;
            }

            .image-bloc{
                margin-top: 25px;
            }

            .preview {
                overflow: hidden;
                width: 200px;
                height: 200px;
                border: 1px solid red;
                margin: auto;
                float: none;
            }
        }
    </style>
";
        yield from [];
    }

    // line 209
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 210
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 212
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 213
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 214
        yield "    <div class=\"flex-fill container\">
        <main class=\"\">
            <div class=\"container mt-2 pt-4\">
                ";
        // line 217
        yield from $this->loadTemplate("menuProfile.html.twig", "profile/index.html.twig", 217)->unwrap()->yield($context);
        // line 218
        yield "                <div class=\"mb-3\">
                    ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["noticeErrorDate"], "method", false, false, false, 219));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 220
            yield "                        <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                            <span>";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["notice"], "method", false, false, false, 227));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 228
            yield "                        <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                            <span>";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        yield "                </div>
                <div class=\"mt-3\">
                    <!-- Lecture des infos -->
                    <div id=\"lectureInfo\" class=\"row\">
                        <div class=\"col-md-3 mb-2\">
                            <img class=\"img-fluid m-auto preview-avatar\" width=\"100% \\9\"
                                 src=\"";
        // line 241
        if (($context["avatar"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar"] ?? null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
        }
        yield "\" alt=\"\">
                        </div>
                        <div class=\"col-md-4\">
                            <p class=\"user-info-text\">";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.nom"), "html", null, true);
        yield ":
                                <span>";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_name"] ?? null), "html", null, true);
        yield "</span>
                            </p>
                            ";
        // line 248
        yield "                            <p class=\"user-info-text\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.prenom"), "html", null, true);
        yield ":
                                <span>";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["first_name"] ?? null), "html", null, true);
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.sexe"), "html", null, true);
        yield ":
                                <span>";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["sexe"] ?? null)), "html", null, true);
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.date-de-naissance"), "html", null, true);
        yield "
                                :
                                <span>";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bdaytime"] ?? null), "html", null, true);
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.lieu-de-naissance"), "html", null, true);
        yield "
                                :
                                <span>";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(($context["birth_place"] ?? null)), "html", null, true);
        yield "</span>
                            </p>
                        </div>
                        <div class=\"col-md-4\">
                            <p class=\"user-info-text\">";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.adresse-email"), "html", null, true);
        yield ":
                                <span>";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 265), "getEmailCanonical", [], "any", false, false, false, 265), "html", null, true);
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.telephone"), "html", null, true);
        yield ":
                                <span>";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["telephone"] ?? null), "html", null, true);
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.activite"), "html", null, true);
        yield ":
                                <span>";
        // line 271
        if (($context["principal_activity"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["principal_activity"] ?? null), "description", [], "any", false, false, false, 271), "html", null, true);
        }
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.competence"), "html", null, true);
        yield "
                                (";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["competence"] ?? null)), "html", null, true);
        yield ") :
                                <span>";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["competence"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            yield "<a href=\"#\" class=\"badge badge-info mr-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["c"], "html", null, true);
            yield "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.nom_commercial"), "html", null, true);
        yield ":
                                <span>";
        // line 278
        if ((($context["nom_commercial"] ?? null) == "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["first_name"] ?? null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nom_commercial"] ?? null), "html", null, true);
        }
        yield "</span>
                            </p>
                            <p class=\"user-info-text\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.departement"), "html", null, true);
        yield ":
                                <span>";
        // line 281
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserUniqueData", [], "any", false, false, false, 281)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["departements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dep"]) {
                // line 282
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserUniqueData", [], "any", false, false, false, 282), "getDepartement", [], "any", false, false, false, 282) && (CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "id", [], "any", false, false, false, 282) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserUniqueData", [], "any", false, false, false, 282), "getDepartement", [], "any", false, false, false, 282), "id", [], "any", false, false, false, 282)))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dep"], "departement", [], "any", false, false, false, 282), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dep'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield "</span>
                            </p>
                        </div>
                        <div class=\"col-md-12 mt-4\">
                            <!--Accordion wrapper-->
                            <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx\" role=\"tablist\"
                                 aria-multiselectable=\"true\">
                                <!-- Accordion card -->
                                <div class=\"card\">
                                    <!-- Card header -->
                                    <div class=\"card-header\" role=\"tab\">
                                        <a data-toggle=\"collapse\" id=\"headingOne1\" data-parent=\"#accordionEx\"
                                           href=\"#collapseOne1\" aria-expanded=\"true\"
                                           aria-controls=\"collapseOne1\">
                                            <h5 class=\"mb-0\">
                                                <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                   id=\"accordion_address\">";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.adresses"), "html", null, true);
        yield "</i>
                                            </h5>
                                        </a>
                                    </div>

                                    <!-- Card body -->
                                    <div id=\"collapseOne1\" class=\"collapse md-12\" role=\"tabpanel\"
                                         aria-labelledby=\"headingOne1\" data-parent=\"#accordionEx\">
                                        <div class=\"card-body\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <h3 class=\"col-md-12\">";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.domicile"), "html", null, true);
        yield "</h3>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["numeroNomRue_domicile"] ?? null), "html", null, true);
        yield "\">
                                                        <label>";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["codePostal_domicile"] ?? null), "html", null, true);
        yield "\">
                                                        <label>";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ville_domicile"] ?? null), "html", null, true);
        yield "\">
                                                        <label for=\"ville\">";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-ville"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\" class=\"form-control\" value=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["region_domicile"] ?? null), "html", null, true);
        yield "\">
                                                        <label for=\"region\">";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.region"), "html", null, true);
        yield "</label>
                                                    </div>

                                                    <div class=\"md-form\">
                                                        <span>";
        // line 331
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-pays"), "html", null, true);
        yield "</span>
                                                        <select disabled class=\"browser-default custom-select\">
                                                            <option value=\"";
        // line 333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pays_domicile"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(($context["pays_domicile"] ?? null)), "html", null, true);
        yield "</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class=\"vl\"></div>

                                                <div class=\"col-md-6\">
                                                    <h3 class=\"col-md-12\">";
        // line 341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.livraison"), "html", null, true);
        yield "</h3>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\" class=\"form-control\" value=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["numeroNomRue_livraison"] ?? null), "html", null, true);
        yield "\">
                                                        <label>";
        // line 344
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["codePostal_livraison"] ?? null), "html", null, true);
        yield "\">
                                                        <label>";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\"
                                                               class=\"form-control\" value=\"";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ville_livraison"] ?? null), "html", null, true);
        yield "\">
                                                        <label>";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-ville"), "html", null, true);
        yield "</label>
                                                    </div>

                                                    <div class=\"md-form\">
                                                        <input disabled type=\"text\" class=\"form-control\" value=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["region_livraison"] ?? null), "html", null, true);
        yield "\">
                                                        <label for=\"region\">";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.region"), "html", null, true);
        yield "</label>
                                                    </div>
                                                    <div class=\"md-form\">
                                                        <span>";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-pays"), "html", null, true);
        yield "</span>
                                                        <select disabled class=\"browser-default custom-select\">
                                                            <option value=\"";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pays_livraison"] ?? null), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(($context["pays_livraison"] ?? null)), "html", null, true);
        yield "</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                            </div>
                            <!-- Accordion wrapper -->
                        </div>
                        <div class=\"col-md-12 mt-4\">
                            <h5>";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.description"), "html", null, true);
        yield "</h5>
                            <div class=\"p-2\">
                                <div class=\"text-box border border-dark p-2\" style=\"min-height:200px;\">
                                    ";
        // line 380
        yield ($context["description"] ?? null);
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-12 mt-2\">
                            <h5>";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.reference"), "html", null, true);
        yield "</h5>
                            <div class=\"p-2\">
                                <div class=\"text-box border border-dark p-2\" style=\"min-height:200px;\">
                                    ";
        // line 388
        yield ($context["reference"] ?? null);
        yield "
                                </div>
                            </div>
                        </div>
                        <div id=\"monPortfolio\" class=\"col-md-12 my-2\">
                            <h5 class=\"py-4 mb-2\">Portfolio (";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["portfolio"] ?? null)), "html", null, true);
        yield ")</h5>
                            <div class=\"owl-carousel owl-theme\">
                                ";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["portfolio"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 396
            yield "                                    <div class=\"item\">
                                        <div class=\"portfolio-bg lazy\" data-src=\"";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 397), "html", null, true);
            yield "\"></div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        yield "                            </div>
                        </div>

                        <!-- Videos -->
                        <div id=\"mesVideos\" class=\"col-md-12 my-2\">
                            <h5 class=\"py-4 mb-2\">";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.video"), "html", null, true);
        yield "
                                (";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["video"] ?? null)), "html", null, true);
        yield ")</h5>
                            <div class=\"owl-carousel owl-theme\">
                                ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["imgid"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 409
            yield "                                    ";
            if (($context["v"] != "")) {
                // line 410
                yield "                                        <div class=\"item-video\" data-merge=\"3\">
                                            <a class=\"owl-video\" href=\"https://www.youtube.com/embed/";
                // line 411
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                yield "\"></a>
                                        </div>
                                    ";
            }
            // line 414
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        yield "                            </div>
                        </div>
                        <!-- End of videos -->
                        <div class=\" col-md-12 text-right\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <a id=\"voirProfile\" target=\"_blank\" href=\"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . ($context["id"] ?? null))]), "html", null, true);
        yield "\" class=\"btn btn-md btn-dark float-left\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.voir-profil"), "html", null, true);
        yield "</a>
                                </div>
                                <div class=\"col-md-6\">
                                    <button id=\"modifierProfile\" class=\"btn btn-md btn-primary float-right\">";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.bouton-modifier"), "html", null, true);
        yield "</button>
                                </div>
                                ";
        // line 429
        yield "                            </div>
                        </div>
                    </div>
                    <!-- Fin de lecture -->

                    <!-- Modif des infos -->
                    <div id=\"modifInfo\">
                        <form class=\"row\" action=\"";
        // line 436
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_updateProfile");
        yield "\" method=\"post\" id=\"updateProfile\"
                              enctype=\"multipart/form-data\">
                            <div class=\"col-md-4 mb-2\">
                                <div id=\"blah\">
                                    <img class=\"img-fluid m-auto avatar-preview\" id=\"avatar-preview\" width=\"100% \\9\" src=\"";
        // line 440
        if (($context["avatar"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar"] ?? null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
            yield " ";
        }
        yield "\">
                                </div>
                                <div class=\"custom-file\">
                                    <label class=\"custom-file-label\" for=\"imageUpload\">
                                        <small>";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.ajouter-photo-profil"), "html", null, true);
        yield "</small>
                                    </label>
                                    <input type=\"file\" class=\"custom-file-input is-valid\" id=\"imageUpload\" name=\"avatar\"
                                           lang=\"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 447), "getLocale", [], "method", false, false, false, 447), "html", null, true);
        yield "\" accept=\"image/png,image/jpeg\">
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"last_name\" required name=\"last_name\" class=\"form-control\"
                                           value=\"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_name"] ?? null), "html", null, true);
        yield "\">
                                    <label for=\"last_name\">";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.nom"), "html", null, true);
        yield "*</label>
                                </div>
                                <input type=\"text\" hidden value=\"\" id=\"crop_image\" name=\"crop_image\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"first_name\" required name=\"first_name\" class=\"form-control\"
                                           value=\"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["first_name"] ?? null), "html", null, true);
        yield "\">
                                    <label for=\"prenom\">";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.prenom"), "html", null, true);
        yield " *</label>
                                </div>
                                <div class=\"md-form\">
                                    <select id=\"sexe\" name=\"sexe\" required class=\"browser-default custom-select\">
                                        <option value=\"homme\" ";
        // line 464
        if ((($context["sexe"] ?? null) && (($context["sexe"] ?? null) == "homme"))) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homme"), "html", null, true);
        yield "</option>
                                        <option value=\"femme\" ";
        // line 465
        if ((($context["sexe"] ?? null) && (($context["sexe"] ?? null) == "femme"))) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.femme"), "html", null, true);
        yield "</option>
                                        <option value=\"autre\" ";
        // line 466
        if ((($context["sexe"] ?? null) && (($context["sexe"] ?? null) == "autre"))) {
            yield " selected ";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.autre"), "html", null, true);
        yield "</option>
                                    </select>
                                </div>
                                <div class=\"md-form\">
                                    <input autocomplete=\"disabled\" type=\"text\" id=\"bdaytime\"
                                           style=\"font-size:14px; margin-top:20px\" required name=\"bdaytime\"
                                           class=\"form-control form-control-md inputNaissance\"
                                           value=\"";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(($context["bdaytime"] ?? null)), "html", null, true);
        yield "\">
                                    <label for=\"bdaytime\">";
        // line 474
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.date-de-naissance"), "html", null, true);
        yield " *</label>
                                </div>
                                <div class=\"md-form\">
                                    <span class=\"mimic-label\">";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.lieu-de-naissance"), "html", null, true);
        yield "</span>
                                    <select id=\"birth_place\" name=\"birth_place\" required
                                            class=\"browser-default custom-select\">
                                        <option value=\"";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["birth_place"] ?? null), "html", null, true);
        yield "\">";
        if ((($context["birth_place"] ?? null) != "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(($context["birth_place"] ?? null)), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.lieu-de-naissance"), "html", null, true);
            yield " *";
        }
        // line 481
        yield "                                        </option>
                                        ";
        // line 482
        yield from $this->loadTemplate("countryRegister.html.twig", "profile/index.html.twig", 482)->unwrap()->yield($context);
        // line 483
        yield "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"telephone\" name=\"telephone\" class=\"form-control\"
                                           value=\"";
        // line 489
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["telephone"] ?? null), "html", null, true);
        yield "\">
                                    <label class=\"active\" for=\"tel\">";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.telephone"), "html", null, true);
        yield "</label>
                                </div>
                                <div class=\"md-form\">
                                    <input type=\"email\" id=\"email\" required name=\"email\" class=\"form-control\"
                                           value=\"";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 494), "getEmailCanonical", [], "any", false, false, false, 494), "html", null, true);
        yield "\">
                                    <label for=\"email\">";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.adresse-email"), "html", null, true);
        yield "
                                        *</label></label>
                                </div>
                                <div class=\"md-form\">
                                    <span class=\"mimic-label\">";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.activite"), "html", null, true);
        yield "</span>
                                    <select class='browser-default custom-select' id=\"activite\" name=\"activite\">
                                        <option value=\"\">";
        // line 501
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.activite"), "html", null, true);
        yield "</option>
                                        ";
        // line 502
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["activities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 503
            yield "                                            <option ";
            if (($context["principal_activity"] ?? null)) {
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termId", [], "any", false, false, false, 503) == CoreExtension::getAttribute($this->env, $this->source, ($context["principal_activity"] ?? null), "termId", [], "any", false, false, false, 503))) {
                    yield "selected";
                }
                // line 504
                yield "                                                    ";
            }
            // line 505
            yield "                                                    value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "termId", [], "any", false, false, false, 505), "html", null, true);
            yield "\">";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 505), "locale", [], "any", false, false, false, 505) == "en")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 505), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 505), "html", null, true);
            }
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 507
        yield "                                    </select>
                                </div>
                                <div class=\"md-form\">
                                    <label for=\"competencesModif\"></label>
                                    <h6>";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.competence"), "html", null, true);
        yield "</h6>
                                    <input type=\"text\" placeholder=\"Compétences séparées d'une virgule\"
                                           id=\"competencesModif\" class=\"form-control\" name=\"competence1\"
                                           value=\"";
        // line 514
        if ( !(null === ($context["competences"] ?? null))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["competences"] ?? null), "metaValue", [], "any", false, false, false, 514), "html", null, true);
            yield " ";
        }
        yield "\"
                                           data-role=\"tagsinput\">
                                </div>
                                <div class=\"md-form\">
                                    <input type=\"text\" id=\"nom_commercial\" name=\"nom_commercial\" class=\"form-control\"
                                           value=\"";
        // line 519
        if ((($context["nom_commercial"] ?? null) == "")) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["first_name"] ?? null), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nom_commercial"] ?? null), "html", null, true);
        }
        yield "\">
                                    <label for=\"nom_commercial\">";
        // line 520
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.nom_commercial"), "html", null, true);
        yield "</label>
                                </div>


                                <div class=\"md-form\">
                                    <span class=\"mimic-label\">";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.departement"), "html", null, true);
        yield "</span>
                                    <select class='browser-default custom-select' id=\"departement\" name=\"departement\">
                                        <option value=\"\"></option>
                                        ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["departements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 529
            yield "                                            <option ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserUniqueData", [], "any", false, false, false, 529)) {
                // line 530
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserUniqueData", [], "any", false, false, false, 530), "getDepartement", [], "any", false, false, false, 530) && (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 530) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUserUniqueData", [], "any", false, false, false, 530), "getDepartement", [], "any", false, false, false, 530), "id", [], "any", false, false, false, 530)))) {
                    yield "selected";
                }
            }
            // line 531
            yield "                                                    value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 531), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "departement", [], "any", false, false, false, 531), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        yield "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-4\">
                                <!--Accordion wrapper-->
                                <div class=\"accordion md-accordion  mb-5\" id=\"accordionEx2\" role=\"tablist\"
                                     aria-multiselectable=\"true\">
                                    <!-- Accordion card -->
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header\" role=\"tab\">
                                            <a data-toggle=\"collapse\" id=\"headingOne2\" data-parent=\"#accordionEx2\"
                                               href=\"#collapseOne2\" aria-expanded=\"true\"
                                               aria-controls=\"collapseOne1\">
                                                <h5 class=\"mb-0\">
                                                    <i class=\"fas fa-plus\" style=\"font-size: 22px; color: black;\"
                                                       id=\"accordion_address2\">";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.adresses"), "html", null, true);
        yield "</i>
                                                </h5>
                                            </a>
                                        </div>

                                        <!-- Card body -->
                                        <div id=\"collapseOne2\" class=\"collapse md-12\" role=\"tabpanel\"
                                             aria-labelledby=\"headingOne2\" data-parent=\"#accordionEx2\">
                                            <div class=\"card-body\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <h3 class=\"col-md-12\">";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.domicile"), "html", null, true);
        yield "</h3>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"numeroNomRue_domicile\"
                                                                   name=\"numeroNomRue_domicile\"
                                                                   class=\"form-control\" value=\"";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["numeroNomRue_domicile"] ?? null), "html", null, true);
        yield "\">
                                                            <label for=\"numeroNomRue_domicile\">";
        // line 565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue"), "html", null, true);
        yield "</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"codePostal_domicile\"
                                                                   name=\"codePostal_domicile\"
                                                                   class=\"form-control\" value=\"";
        // line 570
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["codePostal_domicile"] ?? null), "html", null, true);
        yield "\">
                                                            <label for=\"codePostal_domicile\">";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal"), "html", null, true);
        yield "</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"ville_domicile\" name=\"ville_domicile\"
                                                                   class=\"form-control\" value=\"";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ville_domicile"] ?? null), "html", null, true);
        yield "\">
                                                            <label for=\"ville_domicile\">";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-ville"), "html", null, true);
        yield "</label>
                                                        </div>


                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"region_domicile\" name=\"region_domicile\" class=\"form-control\" value=\"";
        // line 581
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["region_domicile"] ?? null), "html", null, true);
        yield "\">
                                                            <label for=\"region_domicile\">";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.region"), "html", null, true);
        yield "</label>
                                                        </div>

                                                        <div class=\"md-form\">
                                                            <span>";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-pays"), "html", null, true);
        yield "</span>
                                                            <select id=\"pays_domicile\" name=\"pays_domicile\"
                                                                    class=\"browser-default custom-select\">
                                                                ";
        // line 589
        if ((($context["pays_domicile"] ?? null) != "")) {
            // line 590
            yield "                                                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pays_domicile"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(($context["pays_domicile"] ?? null)), "html", null, true);
            yield "</option>
                                                                    ";
            // line 591
            yield from $this->loadTemplate("countryRegister.html.twig", "profile/index.html.twig", 591)->unwrap()->yield($context);
            // line 592
            yield "                                                                ";
        } else {
            // line 593
            yield "                                                                    ";
            yield from $this->loadTemplate("countryDefault.html.twig", "profile/index.html.twig", 593)->unwrap()->yield($context);
            // line 594
            yield "                                                                ";
        }
        // line 595
        yield "                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class=\"vl\"></div>

                                                    <div class=\"col-md-6\">
                                                        <h3 class=\"col-md-12\">";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.livraison"), "html", null, true);
        yield "</h3>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"numeroNomRue_livraison\"
                                                                   name=\"numeroNomRue_livraison\" class=\"form-control\"
                                                                   value=\"";
        // line 606
        if ( !(null === ($context["numeroNomRue_livraison"] ?? null))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["numeroNomRue_livraison"] ?? null), "html", null, true);
        }
        yield "\">
                                                            <label for=\"numeroNomRue_livraison\">";
        // line 607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-numero-rue"), "html", null, true);
        yield "</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"codePostal_livraison\"
                                                                   name=\"codePostal_livraison\" class=\"form-control\"
                                                                   value=\"";
        // line 612
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["codePostal_livraison"] ?? null), "html", null, true);
        yield "\">
                                                            <label for=\"codePostal_livraison\">";
        // line 613
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-code-postal"), "html", null, true);
        yield "</label>
                                                        </div>
                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"ville_livraison\"
                                                                   name=\"ville_livraison\" class=\"form-control\"
                                                                   value=\"";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ville_livraison"] ?? null), "html", null, true);
        yield "\">
                                                            <label for=\"ville_livraison\">";
        // line 619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-ville"), "html", null, true);
        yield "</label>
                                                        </div>

                                                        <div class=\"md-form\">
                                                            <input type=\"text\" id=\"region_livraison\" name=\"region_livraison\" class=\"form-control\" value=\"";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["region_livraison"] ?? null), "html", null, true);
        yield "\">
                                                            <label for=\"region_livraison\">";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.region"), "html", null, true);
        yield "</label>
                                                        </div>

                                                        <div class=\"md-form\">
                                                            <span>";
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.fournisseurs.formulaire-details-facture-pays"), "html", null, true);
        yield "</span>
                                                            <select id=\"pays_livraison\" name=\"pays_livraison\"
                                                                    class=\"browser-default custom-select\">
                                                                ";
        // line 631
        if ((($context["pays_livraison"] ?? null) != "")) {
            // line 632
            yield "                                                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pays_livraison"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(($context["pays_livraison"] ?? null)), "html", null, true);
            yield "</option>
                                                                    ";
            // line 633
            yield from $this->loadTemplate("countryRegister.html.twig", "profile/index.html.twig", 633)->unwrap()->yield($context);
            // line 634
            yield "                                                                ";
        } else {
            // line 635
            yield "                                                                    ";
            yield from $this->loadTemplate("countryDefault.html.twig", "profile/index.html.twig", 635)->unwrap()->yield($context);
            // line 636
            yield "                                                                ";
        }
        // line 637
        yield "                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Accordion card -->
                                </div>
                                <!-- Accordion wrapper -->
                            </div>
                            <div class=\"col-md-12 mt-4\">
                                <h5>";
        // line 649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.description"), "html", null, true);
        yield "</h5>
                                <div class=\"form-group\">
                                <textarea class=\"form-control border-dark\" id=\"description\" name=\"description\"
                                          rows=\"7\">";
        // line 652
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        yield "</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-2\">
                                <h5>";
        // line 656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.reference"), "html", null, true);
        yield "</h5>
                                <div class=\"form-group\">
                                <textarea class=\"form-control border-dark\" id=\"reference\" name=\"reference\" rows=\"7\">";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reference"] ?? null), "html", null, true);
        yield "</textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12 mt-2\">
                                <h5>Portfolio</h5>
                                <div class=\"form-group\">
                                    <div class=\"p-2\">
                                        <div class=\"border border-dark p-2\">
                                            <div class=\"row\">
                                                <div class=\"col-md-12 d-flex justify-content-center\">
                                                    <ul class=\"portfolio-ul\">
                                                        ";
        // line 669
        if (($context["portfolio"] ?? null)) {
            // line 670
            yield "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["portfolio"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 671
                yield "                                                                <li style=\"background-image: url(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 671), "html", null, true);
                yield ");\"
                                                                    class=\"aimg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 674
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_portfolio", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 674)]), "html", null, true);
                yield "\"
                                                                   class=\"delete_port ld-over-inverse\"
                                                                   style=\"color:#fff\">Supprimer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ld ld-ring ld-spin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                </li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 682
            yield "                                                        ";
        }
        // line 683
        yield "                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <h6 class=\"control-label col-md-3\">";
        // line 687
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add-portfolio"), "html", null, true);
        yield "</h6>
                                                <div class=\"col-md-8\">
                                                    <div class=\"row\">
                                                        <div id=\"coba\" class=\"row\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-12 mt-2\">
                                <h5>";
        // line 700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-profil.video"), "html", null, true);
        yield "</h5>
                                <div class=\"p-2\">
                                    <div class=\"border border-dark p-2\">
                                        <div class=\"row\">
                                            <div class=\"col-md-12 d-flex justify-content-center\">
                                                <ul class=\"videos-ul\">
                                                    ";
        // line 706
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["imgid"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 707
            yield "                                                        ";
            if (($context["v"] != "")) {
                // line 708
                yield "                                                            <li style=\"background-image: url('https://img.youtube.com/vi/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                yield "/0.jpg');\"
                                                                class=\"aimg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 711
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_video", ["id" => $context["v"]]), "html", null, true);
                yield "\"
                                                               class=\"delete_port ld-over-inverse\" style=\"color:#fff\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ld ld-ring ld-spin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            </li>
                                                        ";
            }
            // line 719
            yield "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 720
        yield "                                                </ul>
                                            </div>
                                        </div>
                                        <div id=\"newVideos\" class=\"row mt-3\">
                                            <div class=\"col-md-3\">
                                                <h6>";
        // line 725
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add-youtube-link"), "html", null, true);
        yield "</h6>
                                            </div>
                                            <div class=\"col-md-9\">
                                                <div id=\"newVideosRow\" class=\"row\">
                                                    <div class=\"col-md-4\">
                                                        <div class=\"md-form\">
                                                            <input type=\"text\"
                                                                   pattern=\"^(http(s)?:\\/\\/)?((w){3}.)?youtu(be|.be)?(\\.com)?\\/.+\"
                                                                   class=\"form-control border p-2\" name=\"new_vid[]\"
                                                                   placeholder=\"Add new YouTube video link\">
                                                        </div>
                                                        <a id=\"addScnt\" href=\"#\"
                                                           class=\"btn btn-md btn-warning\">";
        // line 737
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add"), "html", null, true);
        yield "</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"offset-md-6 col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <button id=\"send\" type=\"submit\"
                                                class=\"btn btn-md btn-success ld-over-inverse \">";
        // line 749
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-modification-profil.bouton-modifier"), "html", null, true);
        yield "
                                            <i class=\"ld ld-ring ld-spin\"></i>
                                        </button>
                                    </div>
                                    <div class=\"col\">
                                        <button id=\"annulerModif\" type=\"button\" class=\"btn btn-md btn-warning\">";
        // line 754
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-modification-profil.bouton-annuler"), "html", null, true);
        yield "</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Fin des modifs -->
                    <!-- Crop modal -->
                    <div class=\"modal fade\" id=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\">Redimensionner votre image et enregistrer</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">×</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"img-container px-3\">
                                        <div class=\"row\">
                                            <div class=\"col-md-8\" style=\"margin: inherit;\">
                                                <img src=\"\" id=\"sample_image\" />
                                            </div>
                                            <div class=\"col-md-4 image-bloc\">
                                                <div class=\"preview\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-warning cancel\" data-dismiss=\"modal\"><b>Annuler</b></button>
                                    <button type=\"button\" id=\"crop\" class=\"btn btn-primary approve\"><b>Enregistrer</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Crop modal -->
                </div>
            </div>

            ";
        // line 794
        yield from $this->loadTemplate("partials/project.html.twig", "profile/index.html.twig", 794)->unwrap()->yield($context);
        // line 795
        yield "            ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profile/index.html.twig", 795)->unwrap()->yield($context);
        // line 796
        yield "        </main>
    </div>
";
        yield from [];
    }

    // line 799
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 800
        yield "        ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "<!-- Modal for supprimer -->
        <div class=\"modal fade right\" id=\"deleteTarget\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteTarget\"
             aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"row\">
                        <div class=\"col-md-6 px-0\" style=\"background-size: cover\">
                            <img src=\"";
        // line 807
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/modal/img-log.png"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\"
                                 style=\"width: fit-content\">
                        </div>
                        <div class=\"col-md-6 px-0 right-section-modal\">
                            <div class=\"modal-header border-bottom-0\">
                                <h5 class=\"modal-title\"
                                    id=\"exampleModalPreviewLabel\">";
        // line 813
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.effacer-compte"), "html", null, true);
        yield "</h5>
                            </div>
                            <div class=\"modal-body\"
                                 style='padding-left: 1rem;padding-right: 1rem; padding-top: 0rem; padding-bottom: 0rem;'>
                                <div class=\"effacer-definitivement\">
                                    <div>
                                        <input type=\"checkbox\" id=\"horns\" name=\"horns\"/>
                                    </div>
                                    <div>
                                        <label for=\"horns\">";
        // line 822
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.liens.effacer-compte-donnees"), "html", null, true);
        yield "</label>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer border-top-0 pb-0\">
                                <div class=\"btn-group btn-group-lg\" role=\"group\" aria-label=\"Basic example\">
                                    <button type=\"button\" class=\"btn btn-lg firstletter-capital logout-no\"
                                            data-dismiss=\"modal\">";
        // line 829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.non"), "html", null, true);
        yield "</button>
                                    <button type=\"button\"
                                            class=\"btn btn-lg btn-primary firstletter-capital logout-yes delete_port2\">";
        // line 831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.oui"), "html", null, true);
        yield "</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Modal -->
        <input id=\"hornsUrlDelete\" hidden value=\"";
        // line 839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_profil", ["id" => ($context["id"] ?? null)]), "html", null, true);
        yield "\"/>
        <input id=\"hornsUrlDeleteAll\" hidden value=\"";
        // line 840
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_profil_all", ["id" => ($context["id"] ?? null)]), "html", null, true);
        yield "\"/>
    ";
        yield from [];
    }

    // line 843
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 844
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 846
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/camroll/camroll_slider.js"), "html", null, true);
        yield "\">
    </script><!-- jQuery plugin for spartan image picker -->
    <script type=\"text/javascript\"
            src=\"";
        // line 849
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/spartan-image-picker/spartan-multi-image-picker-min.js"), "html", null, true);
        yield "\">
    </script><!-- jQuery plugin for input tags -->
    <script src=\"";
        // line 851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tagsinput/jQuery.tagify.min.js")), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 852
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script><!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 853
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 854
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/phone/js/intlTelInput.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 855
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Tinymce editor -->
    <script type=\"text/javascript\" src='";
        // line 857
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
    <!-- owl carousel -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>

    <!-- Crop cdn -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js\" integrity=\"sha512-6lplKUSl86rUVprDIjiW8DuOniNX8UDoRATqZSds/7t6zCQZfaCe3e5zcGaQwxa8Kpn5RTM9Fvl3X2lLV4grPQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <script>
        function getUnique(array) {
            var uniqueArray = [];
            // Loop through array values
            for (i = 0; i < array.length; i++) {
                if (uniqueArray.indexOf(array[i]) === -1) {
                    uniqueArray.push(array[i]);
                }
            }
            return uniqueArray;
        }

        function validateEmail(email) {
            var re = /^(([^<>()[\\]\\\\.,;:\\s@\\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\\"]+)*)|(\\\".+\\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
            return re.test(email);
        }

        function validatePhoneNumber(phone) {
            var re = /^(\\+|00)[0-9]{1,3}[0-9 ]{4,20}(?:x.+)?\$/;
            return re.test(phone);
        }

        // pattern=\"^(6|2)[. ]{0,1}[0-9 .]{8,13}(?:x.+)?\$\"

        //Accordeon1 and 2

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
        //End Accordeon1
        \$(document).ready(function () {
            let docWidth = document.documentElement.offsetWidth;
            tinymce.init({
                selector: 'textarea#description',
                height: 250,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
                ],

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,";
        // line 929
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 929), "locale", [], "any", false, false, false, 929) == "fr")) {
            // line 930
            yield "                language: 'fr_FR',";
        }
        // line 931
        yield "            });
            tinymce.init({
                selector: 'textarea#reference',
                height: 250,
                plugins: [
                    'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker', 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking', 'save table contextmenu directionality emoticons template paste textcolor'
                ],

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
                browser_spellcheck: true,
                contextmenu: false,";
        // line 941
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 941), "locale", [], "any", false, false, false, 941) == "fr")) {
            // line 942
            yield "                language: 'fr_FR',";
        }
        // line 943
        yield "            });

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                }
            });


            \$(function () {
                \$('.lazy').lazy();
            });

            \$(\"[for=tel]\").addClass(\"active\");
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
                center: true,
                /* responsive:{
                              480:{
                                  items:2
                              },
                              600:{
                                  items:2
                              }
                          }*/
            });


// add/remove new video in the update section
            let scntDiv = \$('#newVideosRow');
            let i = \$('#newVideosRow .col-md-4').length + 1;

            \$('#addScnt').on('click', function () {
                \$('<div class=\"col-md-4\"><div class=\"md-form\"> <input type=\"url\" class=\"form-control border p-2\" name=\"new_vid[]\" placeholder=\"";
        // line 990
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.add-youtube-link"), "html", null, true);
        yield "\"><div class=\"valid-feedback\">OK!</div><div class=\"invalid-feedback\">Ce champ contient une erreur!</div></div> <a class=\"btn btn-md btn-danger\" id=\"retirerSec\">         ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.supprimer"), "html", null, true);
        yield "</a></div>').appendTo(scntDiv);
                i++;
            });

            \$('#newVideosRow').on('click', '#retirerSec', function () {
                \$(this).parents('.col-md-4').remove();
                i--;
            });

// add new portfolio images
            \$(\"#coba\").spartanMultiImagePicker({
                fieldName: 'file[]',
                status: false,
                loaderIcon: '<i class=\"fas fa-sync fa-spin\"></i>',
                maxFileSize: '1048576',
                url: \$(\"#containerForPortfolio\").attr(\"addPortfolioUrl\"),
                additionalParam: {
                    name: 'portfolios[]'
                },
                onSizeErr: function (index, file) {
                    toastr.clear();
                    toastr.warning(\"";
        // line 1011
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.taille_fichier"), "html", null, true);
        yield "\");
                },
                onRemoveRow: function (index) {
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

// first thing turn Hide \"Update section\" input field
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

            \$(\"div[role='wrapper']\").append(\"<div class='valid-feedback'>OK!</div><div class='invalid-feedback'>Ce champ contient une erreur!</div>\");


// Validate fields
// Date format
            \$('.inputNaissance').datepicker({
                uiLibrary: 'bootstrap4',
                size: 'large',
                showRightIcon: false,
                iconsLibrary: 'fontawesome',
                format: 'mm/dd/yyyy',
                label: false
            });
// First Name
            \$(\"#first_name\").change(function () {
                let first_name = \$(\"#first_name\").val();
                if (isNaN(first_name)) {
                    \$(\"#first_name\").removeClass(\"is-invalid\");
                    \$(\"#first_name\").addClass(\"is-valid\");
                } else {
                    \$(\"#first_name\").removeClass(\"is-valid\");
                    \$(\"#first_name\").addClass(\"is-invalid\");
                }
            });

// Last Name
            \$(\"#last_name\").change(function () {
                let last_name = \$(\"#last_name\").val();
                if (isNaN(last_name)) {
                    \$(\"#last_name\").removeClass(\"is-invalid\");
                    \$(\"#last_name\").addClass(\"is-valid\");
                } else {
                    \$(\"#last_name\").removeClass(\"is-valid\");
                    \$(\"#last_name\").addClass(\"is-invalid\");
                }
            });

            \$(\"#sexe\").change(function () {
                let sexe = \$(\"#sexe\").val();
                if (isNaN(sexe)) {
                    \$(\"#sexe\").removeClass(\"is-invalid\");
                    \$(\"#sexe\").addClass(\"is-valid\");
                } else {
                    \$(\"#sexe\").removeClass(\"is-valid\");
                    \$(\"#sexe\").addClass(\"is-invalid\");
                }
            });


            \$(\"#email\").keyup(function () {
                let email = \$(\"#email\").val();
                if (validateEmail(email)) {
                    \$(\"#email\").removeClass(\"is-invalid\");
                    \$(\"#email\").addClass(\"is-valid\");
                } else {
                    \$(\"#email\").removeClass(\"is-valid\");
                    \$(\"#email\").addClass(\"is-invalid\");
                }
            });

            \$(\"#telephone\").keyup(function () {
                let phone = \$(\"#telephone\").val().replace(/\\s|[a-zA-Z]/g, \"\");
                \$(\"#telephone\").val(phone);
                if (validatePhoneNumber(phone)) {
                    \$(\"#telephone\").removeClass(\"is-invalid\");
                    \$(\"#telephone\").addClass(\"is-valid\");
                } else {
                    \$(\"#telephone\").removeClass(\"is-valid\");
                    \$(\"#telephone\").addClass(\"is-invalid\");
                }
            });

            \$(\"#bdaytime\").change(function () {
                let bdaytime = \$(\"#bdaytime\").val().replace(/\\s|[a-zA-Z]/g, \"\");
                \$(\"#bdaytime\").val(bdaytime);
                if (bdaytime != '') {
                    \$(\"#bdaytime\").removeClass(\"is-invalid\");
                    \$(\"#bdaytime\").addClass(\"is-valid\");
                } else {
                    \$(\"#bdaytime\").removeClass(\"is-valid\");
                    \$(\"#bdaytime\").addClass(\"is-invalid\");
                }
            });

            \$(\"#birth_place\").change(function () {
                let birth_place = \$(\"#birth_place\").val();
                if (isNaN(birth_place)) {
                    \$(\"#birth_place\").removeClass(\"is-invalid\");
                    \$(\"#birth_place\").addClass(\"is-valid\");
                } else {
                    \$(\"#birth_place\").removeClass(\"is-valid\");
                    \$(\"#birth_place\").addClass(\"is-invalid\");
                }
            });

            \$(\"#raison_sociale\").keyup(function () {
                let nom = \$(\"#raison_sociale\").val();
                if (isNaN(nom)) {
                    \$(\"#raison_sociale\").removeClass(\"is-invalid\");
                    \$(\"#raison_sociale\").addClass(\"is-valid\");
                } else {
                    \$(\"#raison_sociale\").removeClass(\"is-valid\");
                    \$(\"#raison_sociale\").addClass(\"is-invalid\");
                }
            });

            \$(\"#siret\").keyup(function () {
                let nom = \$(\"#siret\").val();
                if (isNaN(nom)) {
                    \$(\"#siret\").removeClass(\"is-invalid\");
                    \$(\"#siret\").addClass(\"is-valid\");
                } else {
                    \$(\"#siret\").removeClass(\"is-valid\");
                    \$(\"#siret\").addClass(\"is-invalid\");
                }
            });

            \$(\"#tva\").change(function () {
                let nom = \$(\"#tva\").val();
                if (isNaN(nom)) {
                    \$(\"#tva\").removeClass(\"is-invalid\");
                    \$(\"#tva\").addClass(\"is-valid\");
                } else {
                    \$(\"#tva\").removeClass(\"is-valid\");
                    \$(\"#tva\").addClass(\"is-invalid\");
                }
            });
//Code postal livraison et domicile
            \$(\"#codePostal_livraison\").keyup(function () {
                let codePostal_livraison = \$(\"#codePostal_livraison\").val().replace(/\\s/g, \"\");
                \$(\"#codePostal_livraison\").val(codePostal_livraison);
                if (codePostal_livraison != '') {
                    \$(\"#codePostal_livraison\").removeClass(\"is-invalid\");
                    \$(\"#codePostal_livraison\").addClass(\"is-valid\");
                } else {
                    \$(\"#codePostal_livraison\").removeClass(\"is-valid\");
                    \$(\"#codePostal_livraison\").addClass(\"is-invalid\");
                }
            });

            \$(\"#codePostal_domicile\").keyup(function () {
                let codePostal_domicile = \$(\"#codePostal_domicile\").val().replace(/\\s/g, \"\");
                \$(\"#codePostal_domicile\").val(codePostal_domicile);
                if (codePostal_domicile != '') {
                    \$(\"#codePostal_domicile\").removeClass(\"is-invalid\");
                    \$(\"#codePostal_domicile\").addClass(\"is-valid\");
                    \$(\"#codePostal_livraison\").val(codePostal_domicile);
                    \$(\"[for=codePostal_livraison]\").addClass(\"active\");
                } else {
                    \$(\"#codePostal_domicile\").removeClass(\"is-valid\");
                    \$(\"#codePostal_domicile\").addClass(\"is-invalid\");
                }
            });

            \$(\"#ville_domicile\").keyup(function () {
                \$(\"#ville_livraison\").val(\$(\"#ville_domicile\").val());
                \$(\"[for=ville_livraison]\").addClass(\"active\");
            });

            \$(\"#region_domicile\").keyup(function () {
                \$(\"#region_livraison\").val(\$(\"#region_domicile\").val());
                \$(\"[for=region_livraison]\").addClass(\"active\");
            });

            \$(\"#numeroNomRue_domicile\").keyup(function () {
                \$(\"#numeroNomRue_livraison\").val(\$(\"#numeroNomRue_domicile\").val());
                \$(\"[for=numeroNomRue_livraison]\").addClass(\"active\");
            });

            \$(\"#numeroNomRue_domicile\").keyup(function () {
                \$(\"#numeroNomRue_livraison\").val(\$(\"#numeroNomRue_domicile\").val());
                \$(\"[for=numeroNomRue_livraison]\").addClass(\"active\");
            });

            let \$modal = \$('#modal');
            let image = document.getElementById('sample_image');
            let crop_image = \"\";
            let cropper;

            document.getElementById('imageUpload').addEventListener('change', function (event) {
                let fileInput = event.target;
                let file = fileInput.files[0];
                let files = event.target.files;
                let message_size = '';
                if (fileInput.files.length !== 0 && file.size > 1048576) {
                    fileInput.value = \"\";
                    message_size = \"";
        // line 1234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.taille_fichier_avatar"), "html", null, true);
        yield "\";
                    toastr.warning(message_size);
                }else if(fileInput.files.length !== 0 && file.size < 1048576){
                    //Handle crop
                    let done = function(url){
                        image.src = url;
                        \$modal.modal('show');
                    };
                    const reader = new FileReader();
                    reader.onload = function(event)
                    {
                        done(reader.result);
                    };
                    reader.readAsDataURL(files[0]);
                }
            });

            \$modal.on('shown.bs.modal', function() {
                let cropper = new Cropper(image, {
                    aspectRatio: 1,
                    viewMode: 3,
                    preview:'.preview'
                });
            }).on('hidden.bs.modal', function(){
                cropper.destroy();
                cropper = null;
                \$('#imageUpload').val('');
            });

            \$('#crop').click(function(){
                canvas = cropper.getCroppedCanvas({
                    width:400,
                    height:400
                });

                canvas.toBlob(function(blob){
                    url = URL.createObjectURL(blob);
                    let reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function(){
                        let base64data = reader.result;

                        \$('#blah').html('<img class=\"img-fluid m-auto avatar-preview\" id=\"avatar-preview\" style=\"max-height:400px\" width=\"100%\" src=\"' + url  + '\" >');
                        crop_image = base64data;
                        \$modal.modal('hide');
                    };
                });
            });

            // input tags
            \$('#competencesModif').tagify();

            \$('#updateProfile').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                \$('#crop_image').val(crop_image);
                \$('#telephone').val(\$('#telephone').val().replace(/\\s/g, ''));

                \$('#send').addClass('running');
                toastr.info(\"";
        // line 1292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.requete-en-cours"), "html", null, true);
        yield "\");

                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize();
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (response) {
                        console.log(response);
                        if (response.result == 1) {
                            toastr.clear();
                            toastr.success(\"";
        // line 1307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                            window.location = \"\";
                        }
                        if (response.result == 2) {
                            toastr.clear();
                            toastr.error('noticeErrorDate', 'La date de naissance n\\'est pas conforme au format attentu; Veuillez mettre a jour votre profil.');
                            window.location = \"\";
                        } else if (response.result == 0) {
                            \$('#send').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 1317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                        }
                    },
                    error: function (response) {
                        //console.log(response);
                        \$('#send').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 1324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.error"), "html", null, true);
        yield "\");
                    }
                });
                return false;
            });

            \$(document).on('click', '.delete_port', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                let t = \$(this);
                let urlPath = \$(this).attr('href');
                swal({
                    title: \"Suppression de l'objet\",
                    text: \"Attention l'objet sera Supprimé et n'apparaitra plus sur le site\",
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
                            success: function (response) {
                                if (response == 1) {
                                    swal(\"suppression terminée\", \"\", \"success\");
                                    t.parents('li').hide();
                                } else {
                                    swal(\"erreur de suppression\", \"\", \"error\");
                                }
                            },
                            error: function (response) {
                                swal(\"erreur de suppression\", \"\", \"error\");
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
            });

            \$(document).on('click', '.delete_port2', function (e) {
                let urlPath = '';
                e.preventDefault();
                toastr.info(\"";
        // line 1371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.en-cours"), "html", null, true);
        yield "\");
                if (\$('#horns:checkbox:checked').length > 0) {
                    urlPath = \$(\"#hornsUrlDeleteAll\").val();
                } else {
                    urlPath = \$(\"#hornsUrlDelete\").val();
                }
                \$.ajax({
                    url: urlPath,
                    type: 'POST',
                    success: function (response) {
                        if (response > 0) {
                            toastr.clear();
                            toastr.success(\"";
        // line 1383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.succes"), "html", null, true);
        yield "\");
                            window.setTimeout(function () {
                                window.location = \"";
        // line 1385
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\";
                            }, 200);
                        }
                    },
                    error: function (response) {
                        toastr.clear();
                        toastr.error(\"";
        // line 1391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.compte.error"), "html", null, true);
        yield "\");
                    }
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
                \"showDuration\": \"1600\",
                \"closeDuration\": \"1600\",
                \"timeOut\": \"2000\",
                \"extendedTimeOut\": \"2200\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

            let input = document.querySelector(\"#telephone\");
            window.intlTelInput(input, {
                autoHideDialCode: true,
                initialCountry: \"fr\",
                nationalMode: false,
                formatOnDisplay: false,
                // separateDialCode: true,
                utilsScript: \"/assets/phone/js/utils.js\"
            });

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
        return "profile/index.html.twig";
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
        return array (  2252 => 1391,  2243 => 1385,  2238 => 1383,  2223 => 1371,  2173 => 1324,  2163 => 1317,  2150 => 1307,  2132 => 1292,  2071 => 1234,  1845 => 1011,  1819 => 990,  1770 => 943,  1767 => 942,  1765 => 941,  1753 => 931,  1750 => 930,  1748 => 929,  1673 => 857,  1668 => 855,  1664 => 854,  1660 => 853,  1656 => 852,  1652 => 851,  1647 => 849,  1641 => 846,  1635 => 844,  1628 => 843,  1621 => 840,  1617 => 839,  1606 => 831,  1601 => 829,  1591 => 822,  1579 => 813,  1570 => 807,  1559 => 800,  1552 => 799,  1545 => 796,  1542 => 795,  1540 => 794,  1497 => 754,  1489 => 749,  1474 => 737,  1459 => 725,  1452 => 720,  1446 => 719,  1435 => 711,  1428 => 708,  1425 => 707,  1421 => 706,  1412 => 700,  1396 => 687,  1390 => 683,  1387 => 682,  1373 => 674,  1366 => 671,  1361 => 670,  1359 => 669,  1345 => 658,  1340 => 656,  1333 => 652,  1327 => 649,  1313 => 637,  1310 => 636,  1307 => 635,  1304 => 634,  1302 => 633,  1295 => 632,  1293 => 631,  1287 => 628,  1280 => 624,  1276 => 623,  1269 => 619,  1265 => 618,  1257 => 613,  1253 => 612,  1245 => 607,  1239 => 606,  1232 => 602,  1223 => 595,  1220 => 594,  1217 => 593,  1214 => 592,  1212 => 591,  1205 => 590,  1203 => 589,  1197 => 586,  1190 => 582,  1186 => 581,  1178 => 576,  1174 => 575,  1167 => 571,  1163 => 570,  1155 => 565,  1151 => 564,  1144 => 560,  1130 => 549,  1112 => 533,  1101 => 531,  1095 => 530,  1092 => 529,  1088 => 528,  1082 => 525,  1074 => 520,  1066 => 519,  1054 => 514,  1048 => 511,  1042 => 507,  1027 => 505,  1024 => 504,  1018 => 503,  1014 => 502,  1010 => 501,  1005 => 499,  998 => 495,  994 => 494,  987 => 490,  983 => 489,  975 => 483,  973 => 482,  970 => 481,  961 => 480,  955 => 477,  949 => 474,  945 => 473,  931 => 466,  923 => 465,  915 => 464,  908 => 460,  904 => 459,  896 => 454,  892 => 453,  883 => 447,  877 => 444,  865 => 440,  858 => 436,  849 => 429,  844 => 424,  836 => 421,  828 => 415,  822 => 414,  816 => 411,  813 => 410,  810 => 409,  806 => 408,  801 => 406,  797 => 405,  790 => 400,  781 => 397,  778 => 396,  774 => 395,  769 => 393,  761 => 388,  755 => 385,  747 => 380,  741 => 377,  723 => 364,  718 => 362,  712 => 359,  708 => 358,  701 => 354,  697 => 353,  690 => 349,  686 => 348,  679 => 344,  675 => 343,  670 => 341,  657 => 333,  652 => 331,  645 => 327,  641 => 326,  635 => 323,  631 => 322,  624 => 318,  620 => 317,  613 => 313,  609 => 312,  603 => 309,  589 => 298,  562 => 282,  557 => 281,  553 => 280,  544 => 278,  540 => 277,  526 => 275,  522 => 274,  518 => 273,  511 => 271,  507 => 270,  502 => 268,  498 => 267,  493 => 265,  489 => 264,  482 => 260,  477 => 258,  472 => 256,  467 => 254,  462 => 252,  458 => 251,  453 => 249,  448 => 248,  443 => 245,  439 => 244,  429 => 241,  421 => 235,  409 => 229,  406 => 228,  401 => 227,  389 => 221,  386 => 220,  382 => 219,  379 => 218,  377 => 217,  372 => 214,  365 => 213,  355 => 212,  347 => 210,  340 => 209,  162 => 36,  156 => 33,  152 => 32,  148 => 31,  144 => 30,  140 => 29,  136 => 28,  131 => 26,  127 => 25,  123 => 24,  118 => 23,  111 => 22,  105 => 21,  98 => 20,  88 => 14,  82 => 11,  76 => 8,  71 => 6,  65 => 4,  58 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/index.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profile/index.html.twig");
    }
}
