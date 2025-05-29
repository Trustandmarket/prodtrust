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

/* profile/creerAnnonces.html.twig */
class __TwigTemplate_9878a45ec1d4d7ffb13711a7848d8b77 extends Template
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
        $this->parent = $this->loadTemplate("profileTemplate.html.twig", "profile/creerAnnonces.html.twig", 1);
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

  <link rel=\"icon\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\"
  sizes=\"32x32\" />
  <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\"
  sizes=\"192x192\" />
  <link rel=\"apple-touch-icon-precomposed\"
  href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\" />
  <meta name=\"msapplication-TileImage\"
  content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\" />
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
        yield "Trust &amp; Market | Profil Annonces";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_annonce(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " active";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
<!-- Gijgo datepicker css -->
<link rel=\"stylesheet\" href=\" ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">

<link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/img-picker/image-picker.css"), "html", null, true);
        yield "\">
<link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-annonces.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">

<link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.css"), "html", null, true);
        yield "\">

<!-- file input fonts -->
<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700\" rel=\"stylesheet\">
<link href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/font/file-input-font/font/font-fileuploader.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<!-- file input styles -->
<link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/file-input-css/jquery.fileuploader.min.css"), "html", null, true);
        yield "\" media=\"all\" rel=\"stylesheet\">
  <script type=\"text/javascript\" src='";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
<style>
  .image_picker_image {
    width: 100px;
    height: 100px
  }

  .tox-statusbar__branding {
    display: none;
  }

  .fletter-caps {
    text-transform: lowercase;
  }

  .position-brouillon {
    position: fixed-top;
  }

  .fletter-caps::first-letter {
    text-transform: capitalize;
  }

  .btn-primary {
    background-color: #eb6918 !important;
    color: #fff;
    font-size: 0.8rem !important;
  }

  .btn-primary:not([disabled]):not(.disabled):active {
    background-color: #eb6918 !important;
  }

  /* preload*/
  .lds-ring {
    height: 10px;
    margin-top: 10px;
    z-index: 999;
  }

  .lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 10px;
    height: 10px;
    margin-right: 40px;
    margin: 6px;
    border: 6px solid #717373;
    border-radius: 50%;
    animation: lds-ring 0.4s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    border-color: #717373 transparent transparent transparent;
  }

  .lds-ring div:nth-child(1) {
    animation-delay: -0.45s;
  }

  .lds-ring div:nth-child(2) {
    animation-delay: -0.3s;
  }

  .lds-ring div:nth-child(3) {
    animation-delay: -0.15s;
  }

  @keyframes lds-ring {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
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

    // line 134
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 135
        yield "  ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 139
        yield "  ";
        yield from $this->yieldParentBlock("navigation", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 143
        yield "<div class=\"flex-fill container\">
  <main class=\"\">
    <div class=\"container mt-2 pt-4\">
      ";
        // line 146
        yield from $this->loadTemplate("menuProfile.html.twig", "profile/creerAnnonces.html.twig", 146)->unwrap()->yield($context);
        // line 147
        yield "      <div class=\"mt-2\">
        <!-- Modif des infos -->
        <div id=\"modifInfo\">
          <div class=\"row\">
            <div hidden class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong>Holy guacamole!</strong> You should check in on some of those fields below.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>

            ";
        // line 158
        yield from $this->loadTemplate("annonces/sousMenuAnnonces.html.twig", "profile/creerAnnonces.html.twig", 158)->unwrap()->yield($context);
        // line 159
        yield "
            <div class=\"col-md-8 mb-2\">
              <!-- multistep form -->
              <form id=\"msform\" action=\"";
        // line 162
        if ((((array_key_exists("nom_prenom_email", $context) && array_key_exists("nom_prenom_email", $context)) && array_key_exists("client", $context)) && (($context["client"] ?? null) != ""))) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_ajouter_devis");
            yield "
                ";
        } elseif (((        // line 163
array_key_exists("editedData", $context) && array_key_exists("state", $context)) && (($context["state"] ?? null) == "edition"))) {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_editer_annonce");
            yield "
                ";
        } else {
            // line 164
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_ajouter_annonce");
        }
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
                <!-- progressbar -->
                <ul id=\"progressbar\">
                  <li class=\"active\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-prestations"), "html", null, true);
        yield "</li>
                  <li>";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-adresse"), "html", null, true);
        yield "</li>
                  <li>";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-service"), "html", null, true);
        yield "</li>
                  <li>";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-photos-videos"), "html", null, true);
        yield "</li>
                  <li>";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-prix"), "html", null, true);
        yield "</li>
                  <li>";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.onglet-conditions"), "html", null, true);
        yield "</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-6 text-left\">
                      <h2 class=\"fs-title\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.type-de-prestations"), "html", null, true);
        yield "*
                      </h2>
                      <h3 class=\"fs-subtitle\">
                        ";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.contrainte-de-choix"), "html", null, true);
        yield "</h3>
                      <!-- Default unchecked -->
                      ";
        // line 184
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 185
            yield "                      ";
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 185)) == "produits")) {
                // line 186
                yield "                        <div class=\"custom-control custom-radio mb-2\">
                          <input type=\"radio\" ";
                // line 187
                if (((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "post_type", [], "any", false, false, false, 187) != "devis")) && (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 187) == CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "categorieParent", [], "any", false, false, false, 187)))) {
                    yield "checked";
                }
                // line 188
                yield "                            myUrl=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_liste_sous_categorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 188)]), "html", null, true);
                yield "\"
                            class=\"custom-control-input categorie\" id=\"cat";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 189), "html", null, true);
                yield "\" name=\"categorieParent\"
                            value=\"";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 190), "html", null, true);
                yield "\" ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 190), "getAbonnements", [], "method", false, false, false, 190)) == 0)) {
                    yield "disabled";
                } elseif ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 190), "getAbonnements", [], "method", false, false, false, 190)) > 0) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 191
($context["app"] ?? null), "user", [], "any", false, false, false, 191), "getAbonnements", [], "method", false, false, false, 191)), "isAbonnementActif", [], "method", false, false, false, 191)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 191), "getAbonnements", [], "method", false, false, false, 191)), "getOffre", [], "method", false, false, false, 191), "isReferencement", [], "method", false, false, false, 191))) {
                } else {
                    yield "disabled";
                }
                yield "/>
                          <label class=\"custom-control-label\" for=\"cat";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 192), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 192), "locale", [], "any", false, false, false, 192) == "en") && (CoreExtension::getAttribute($this->env, $this->source,                 // line 193
$context["c"], "content", [], "any", false, false, false, 193) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 193), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 193), "html", null, true);
                }
                yield "</label>
                        </div>
                      ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 195
$context["c"], "name", [], "any", false, false, false, 195)) == "packs production")) {
                // line 196
                yield "                        <div class=\"custom-control custom-radio mb-2\">
                          <input type=\"radio\" ";
                // line 197
                if (((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "post_type", [], "any", false, false, false, 197) != "devis")) && (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 197) == CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "categorieParent", [], "any", false, false, false, 197)))) {
                    yield "checked";
                }
                // line 198
                yield "                            myUrl=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_liste_sous_categorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 198)]), "html", null, true);
                yield "\"
                            class=\"custom-control-input categorie\" id=\"cat";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 199), "html", null, true);
                yield "\" name=\"categorieParent\"
                            value=\"";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 200), "html", null, true);
                yield "\" ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 200), "getAbonnements", [], "method", false, false, false, 200)) == 0)) {
                    yield "disabled";
                } elseif ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 200), "getAbonnements", [], "method", false, false, false, 200)) > 0) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 201
($context["app"] ?? null), "user", [], "any", false, false, false, 201), "getAbonnements", [], "method", false, false, false, 201)), "isAbonnementActif", [], "method", false, false, false, 201)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 201), "getAbonnements", [], "method", false, false, false, 201)), "getOffre", [], "method", false, false, false, 201), "isPacksProduction", [], "method", false, false, false, 201))) {
                } else {
                    yield "disabled";
                }
                yield "/>
                          <label class=\"custom-control-label\" for=\"cat";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 202), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 202), "locale", [], "any", false, false, false, 202) == "en") && (CoreExtension::getAttribute($this->env, $this->source,                 // line 203
$context["c"], "content", [], "any", false, false, false, 203) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 203), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 203), "html", null, true);
                }
                yield "</label>
                        </div>
                      ";
            } else {
                // line 206
                yield "                      <div class=\"custom-control custom-radio mb-2\">
                        <input type=\"radio\" ";
                // line 207
                if (((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "post_type", [], "any", false, false, false, 207) != "devis")) && (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 207) == CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "categorieParent", [], "any", false, false, false, 207)))) {
                    yield "checked";
                }
                // line 208
                yield "                          myUrl=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_liste_sous_categorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 208)]), "html", null, true);
                yield "\"
                          class=\"custom-control-input categorie\" id=\"cat";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 209), "html", null, true);
                yield "\" name=\"categorieParent\"
                          value=\"";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 210), "html", null, true);
                yield "\"/>
                        <label class=\"custom-control-label\" for=\"cat";
                // line 211
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 211), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 211), "locale", [], "any", false, false, false, 211) == "en") && (CoreExtension::getAttribute($this->env, $this->source,                 // line 212
$context["c"], "content", [], "any", false, false, false, 212) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 212), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 212), "html", null, true);
                }
                yield "</label>
                      </div>
                      ";
            }
            // line 215
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "                      ";
        // line 217
        yield "                      <div class=\"custom-control custom-radio mb-2\">
                        <input type=\"radio\" ";
        // line 218
        if ((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "post_type", [], "any", false, false, false, 218) == "devis"))) {
            yield "checked";
        }
        // line 219
        yield " myUrl=\"\" class=\"custom-control-input categorie\" id=\"cat0\" name=\"categorieParent\" value=\"devis\"
                                ";
        // line 220
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 220), "getAbonnements", [], "method", false, false, false, 220)) == 0)) {
            yield "disabled";
        } elseif ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 220), "getAbonnements", [], "method", false, false, false, 220)) > 0) && CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 221
($context["app"] ?? null), "user", [], "any", false, false, false, 221), "getAbonnements", [], "method", false, false, false, 221)), "isAbonnementActif", [], "method", false, false, false, 221)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 221), "getAbonnements", [], "method", false, false, false, 221)), "getOffre", [], "method", false, false, false, 221), "isCreerDevis", [], "method", false, false, false, 221))) {
        } else {
            yield "disabled";
        }
        yield "/>
                        <label class=\"custom-control-label\" for=\"cat0\">";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.creer-un-devis"), "html", null, true);
        yield "</label>
                        ";
        // line 224
        yield "                      </div>
                    </div>
                    ";
        // line 227
        yield "                    <div id=\"prestProposee\" class=\"col-md-6 text-left\">
                      <div id=\"sous_categorie\">
                        <div id=\"sous_categorie_sous\">
                          ";
        // line 230
        if (array_key_exists("editedData", $context)) {
            yield " ";
            // line 231
            yield "                          <h2 class=\"fs-title\">
                            ";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.type-de-prestations"), "html", null, true);
            yield "*</h2>
                          <h3 class=\"fs-subtitle\">
                            ";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.contrainte-de-choix"), "html", null, true);
            yield "</h3>
                          <div class=\"custom-control custom-radio mb-2\">
                            ";
            // line 237
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "post_type", [], "any", false, false, false, 237) != "devis")) {
                // line 238
                yield "                            <input type=\"radio\" checked myUrl=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_liste_sous_categorie", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "IdSousCategorie", [], "any", false, false, false, 238)]), "html", null, true);
                yield "\"
                              class=\"custom-control-input categorie\" id=\"cat";
                // line 239
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "IdSousCategorie", [], "any", false, false, false, 239), "html", null, true);
                yield "\"
                              name=\"categorie\" value=\"";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "IdSousCategorie", [], "any", false, false, false, 240), "html", null, true);
                yield "\" required>
                            <label class=\"custom-control-label\" for=\"cat";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "IdSousCategorie", [], "any", false, false, false, 241), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "sousCategorie", [], "any", false, false, false, 241), "html", null, true);
                yield "</label>
                            ";
            }
            // line 243
            yield "                            ";
            // line 244
            yield "                          </div>
                          ";
        }
        // line 246
        yield "                        </div>

                        <div class=\"devis-input-data\" id=\"devis-input-data\"
                          style=\"";
        // line 249
        if (( !array_key_exists("nom_prenom_email", $context) || (($context["nom_prenom_email"] ?? null) == ""))) {
            yield "display:none;";
        } else {
        }
        yield "\">
                          <h2 class=\"fs-title\">
                            ";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-trouver-client"), "html", null, true);
        yield "</h2>
                          <div class=\"\" style=\"position: relative;margin-top:0.5rem;margin-bottom: 1.5rem;\">
                            <input autocomplete=\"off\" type=\"text\" id=\"nom_prenom\" name=\"nom_prenom\"
                              class=\"form-control search_devis\"
                              value=\"";
        // line 255
        if ((array_key_exists("nom_prenom_email", $context) && (($context["nom_prenom_email"] ?? null) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nom_prenom_email"] ?? null), "html", null, true);
            yield " ";
        }
        yield "\"
                              placeholder=\"Chercher par nom prénom ou son email\" />
                            <div class=\"lds-ring\" style=\"display:none;height:0px;margin-top:0px;\">
                              <div></div>
                              <div></div>
                              <div></div>
                              <div></div>
                            </div>
                            <input hidden=\"hidden\" type=\"text\" value=\"";
        // line 263
        if ((array_key_exists("client", $context) && (($context["client"] ?? null) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["client"] ?? null), "html", null, true);
            yield " ";
        }
        yield "\"
                              name=\"idClient\" id=\"idClient\">
                          </div>
                          <h2 class=\"fs-title\">
                            ";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.dates-horaires-prestations"), "html", null, true);
        yield "</h2>
                          <div style=\"position: relative;margin-top:0.5rem;margin-bottom: 1.5rem;\">
                            <input required=\"required\" type=\"text\"
                              value=\"";
        // line 270
        if ((array_key_exists("dates_horaires", $context) && (($context["dates_horaires"] ?? null) != ""))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dates_horaires"] ?? null), "html", null, true);
            yield " ";
        } else {
        }
        yield "\"
                              id=\"dates_horaires\" name=\"dates_horaires\" class=\"form-control\">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <input type=\"button\" ";
        // line 277
        if (array_key_exists("editedData", $context)) {
        } else {
            yield "disabled";
        }
        yield " name=\"previous\"
                    class=\"next action-button prestations\"
                    value=\"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-suivant"), "html", null, true);
        yield "\" />
                </fieldset>
                <fieldset>
                  <h3 class=\"fs-subtitle text-left\">
                    ";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.presence-reseau-sociaux"), "html", null, true);
        yield "</h3>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-6 text-left\">
                      <h2 class=\"fs-title\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-pays"), "html", null, true);
        yield "*</h2>
                      <select class=\"browser-default custom-select\" name=\"pays\" required>
                        ";
        // line 288
        if ((array_key_exists("editedDataPays", $context) && (($context["editedDataPays"] ?? null) != ""))) {
            // line 289
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["editedDataPays"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(($context["editedDataPays"] ?? null)), "html", null, true);
            yield "</option>
                        ";
        }
        // line 291
        yield "                        ";
        yield from $this->loadTemplate("country.html.twig", "profile/creerAnnonces.html.twig", 291)->unwrap()->yield($context);
        // line 292
        yield "                      </select>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"addressePostale\" ";
        // line 294
        if ((array_key_exists("editedDataAdressePostale", $context) && (        // line 295
($context["editedDataAdressePostale"] ?? null) != ""))) {
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["editedDataAdressePostale"] ?? null), "html", null, true);
            yield "\" ";
        } else {
            yield " value=\"\" ";
        }
        // line 296
        yield " name=\"adresse_postale\" class=\"form-control\"
                          placeholder=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-adresse"), "html", null, true);
        yield "*\" />
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"precisions\" name=\"precision\" class=\"form-control\" ";
        // line 300
        if ((        // line 301
array_key_exists("editedDataPrecision", $context) && (($context["editedDataPrecision"] ?? null) != ""))) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["editedDataPrecision"] ?? null), "html", null, true);
            yield "\"
                          ";
        } else {
            // line 302
            yield "value=\"\" ";
        }
        // line 303
        yield "                          placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-localisation"), "html", null, true);
        yield "\">
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"codePostale\" ";
        // line 306
        if ((array_key_exists("editedDataCodePostale", $context) && (        // line 307
($context["editedDataCodePostale"] ?? null) != ""))) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["editedDataCodePostale"] ?? null), "html", null, true);
            yield "\" ";
        } else {
            yield " value=\"\" ";
        }
        // line 308
        yield "                          name=\"code_postal\" class=\"form-control\"
                          placeholder=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-code-postal"), "html", null, true);
        yield "*\" />
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" id=\"ville\" ";
        // line 312
        if ((array_key_exists("editedDataVille", $context) && (($context["editedDataVille"] ?? null) != ""))) {
            // line 313
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["editedDataVille"] ?? null), "html", null, true);
            yield "\" ";
        } else {
            yield " value=\"\" ";
        }
        yield " name=\"ville\"
                          class=\"form-control\"
                          placeholder=\"";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.champs-ville"), "html", null, true);
        yield "*\" />
                      </div>
                    </div>
                    <div class=\"col-md-6 text-left\">
                      <h2 class=\"fs-title\">";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.equipements"), "html", null, true);
        yield "</h2>
                      <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" ";
        // line 321
        if ((array_key_exists("editedDataWifi", $context) && (($context["editedDataWifi"] ?? null) != ""))) {
            yield "checked";
        }
        // line 322
        yield " id=\"wifi\" name=\"wifi\" class=\"form-control custom-control-input\">
                        <label class=\"custom-control-label\"
                          for=\"wifi\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.case-a-cocher-wi-fi"), "html", null, true);
        yield "</label>
                      </div>
                      <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" ";
        // line 327
        if ((array_key_exists("editedDataCafe", $context) && (($context["editedDataCafe"] ?? null) != ""))) {
            yield "checked";
        }
        // line 328
        yield " id=\"cafeThe\" name=\"cafe\" class=\"form-control custom-control-input\">
                        <label class=\"custom-control-label\"
                          for=\"cafeThe\">";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.case-a-cocher-cafe"), "html", null, true);
        yield "</label>
                      </div>
                      <div class=\"custom-control custom-checkbox\">
                        <input type=\"checkbox\" ";
        // line 333
        if ((array_key_exists("editedDataBureau", $context) && (($context["editedDataBureau"] ?? null) != ""))) {
            yield "checked";
        }
        // line 334
        yield " id=\"bureauEspace\" name=\"bureau\" class=\"form-control custom-control-input\">
                        <label class=\"custom-control-label\"
                          for=\"bureauEspace\">";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.case-a-cocher-bureau"), "html", null, true);
        yield "</label>
                      </div>
                      <div class=\"md-form\">
                        <input type=\"text\" ";
        // line 339
        if ((array_key_exists("editedDataCafe", $context) && (($context["editedDataCafe"] ?? null) != ""))) {
            // line 340
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["editedDataCafe"] ?? null), "html", null, true);
            yield "\" ";
        } else {
            yield " value=\"\" ";
        }
        yield " class=\"form-control\"
                          name=\"autre_equipement\"
                          placeholder=\"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.autres"), "html", null, true);
        yield "\">
                      </div>
                    </div>
                  </div>
                  <input type=\"button\" name=\"previous\" class=\"previous action-button\"
                    value=\"";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-precedent"), "html", null, true);
        yield "\" />
                  <input type=\"button\" ";
        // line 348
        if ((((((((array_key_exists("editedDataPays", $context) && (($context["editedDataPays"] ?? null) != "")) &&         // line 349
array_key_exists("editedDataAdressePostale", $context)) && (($context["editedDataAdressePostale"] ?? null) != "")) && array_key_exists("editedDataCodePostale", $context)) && (        // line 350
($context["editedDataCodePostale"] ?? null) != "")) && array_key_exists("editedDataVille", $context)) && (($context["editedDataVille"] ?? null) != ""))) {
        } else {
            // line 351
            yield "disabled";
        }
        yield " name=\"suivant\" class=\"next action-button adresse\"
                    value=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-suivant"), "html", null, true);
        yield "\" />
                </fieldset>
                <fieldset class=\"mb-4\">
                  <h2 class=\"fs-title text-left\">
                    ";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-3.entete-nom-service"), "html", null, true);
        yield "*</h2>
                  <div class=\"md-form\">
                    <input type=\"text\" id=\"nom\" class=\"form-control\" ";
        // line 358
        if ((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source,         // line 359
($context["editedData"] ?? null), "post_title", [], "any", false, false, false, 359) != ""))) {
            yield "value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "post_title", [], "any", false, false, false, 359), "html", null, true);
            yield "\" ";
        } else {
            yield "value=\"\" ";
        }
        // line 360
        yield "                      name=\"titre\"
                      placeholder=\"";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-3.champs-titre-service"), "html", null, true);
        yield "\" />
                  </div>
                  <h2 class=\"fs-title text-left\">
                    ";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-3.entete-description-service"), "html", null, true);
        yield "*</h2>
                  <!-- <h3 class=\"fs-subtitle\">Brève description de vos techniques, votre matériel, vos compétences...</h3> -->
                  <div class=\"form-group text-left\">
                    <label
                      for=\"briefDesc\">";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-3.champs-description-service"), "html", null, true);
        yield "</label>
                    <textarea class=\"form-control\" name=\"description\" id=\"description\" rows=\"5\">";
        // line 369
        if ((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "post_content", [], "any", false, false, false, 369) != ""))) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "post_content", [], "any", false, false, false, 369);
        } else {
        }
        yield "</textarea>
                  </div>

                  <input type=\"button\" name=\"previous\" class=\"previous action-button\"  value=\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-precedent"), "html", null, true);
        yield "\" />
                  <input type=\"button\" ";
        // line 373
        if (((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "post_title", [], "any", false, false, false, 373) != "")) && (CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "post_content", [], "any", false, false, false, 373) != ""))) {
        } else {
            yield "disabled";
        }
        yield " name=\"next\" class=\"next action-button nom\"
                    value=\"";
        // line 374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-suivant"), "html", null, true);
        yield "\" />
                </fieldset>
                <fieldset>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-12\">
                      <h2 class=\"fs-title text-left\">
                        ";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-4.entete-portfolio"), "html", null, true);
        yield "</h2>
                      <h3 class=\"fs-subtitle text-left\">
                        ";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-4.contrainte-ajout-portfolio"), "html", null, true);
        yield "</h3>
                      <select id=\"photos\" class=\"image-picker show-html\" name=\"portfolio[]\" data-limit=\"\"
                        multiple=\"multiple\">
                        <option selected value=\"\" hidden></option>
                        ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["portfolio"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 387
            yield "                        <option ";
            if ((array_key_exists("editedData", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "gallery", [], "any", false, false, false, 387))) {
                yield " ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source,                 // line 388
($context["editedData"] ?? null), "gallery", [], "any", false, false, false, 388));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    yield " ";
                    if (($context["v"] && (CoreExtension::getAttribute($this->env, $this->source, $context["v"], "guid", [], "any", false, false, false, 388) == CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 388)))) {
                        yield "selected ";
                    }
                    yield " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 389
            yield "                          data-img-src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 389), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 389), "html", null, true);
            yield "\"></option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 391
        yield "                      </select>
                    </div>
                    <div class=\"col-md-12\">
                      <h2 class=\"fs-title text-left\">
                      ";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-4.telecharger-image"), "html", null, true);
        yield "</h2>
                      ";
        // line 396
        if ((array_key_exists("imagesSecondaires", $context) && Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["imagesSecondaires"] ?? null)))) {
            // line 397
            yield "                        <div class=\"row mb-2\">
                        ";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["imagesSecondaires"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 399
                yield "                          ";
                if ($context["p"]) {
                    // line 400
                    yield "                          <div class=\"card col-md-3 m-1 card_images\">
                            <img class=\"card-img-top\" src=\"";
                    // line 401
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "guid", [], "any", false, false, false, 401), "html", null, true);
                    yield "\" alt=\"Card image cap\">
                            <div class=\"card-body\">
                              <p><a href=\"";
                    // line 403
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_delete_images_secondaires", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 403), "postId" => CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "id", [], "any", false, false, false, 403)]), "html", null, true);
                    yield "\" class=\"delete_port ld-over-inverse\">Supprimer<i class=\"ld ld-ring ld-spin\"></i></a></p>
                            </div>
                          </div>
                          ";
                }
                // line 407
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            yield "                      </div>
                      ";
        }
        // line 410
        yield "                      <div id=\"coba\" class=\"row\"></div>
                    </div>

                    <div class=\"col-md-12 mt-4\">
                      <h2 class=\"fs-title text-left\">
                        ";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-4.entete-video"), "html", null, true);
        yield "</h2>
                      <h3 class=\"fs-subtitle text-left\">
                        ";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-4.contrainte-ajout-video"), "html", null, true);
        yield "</h3>
                      <select id=\"videos\" class=\"image-picker show-html\" name=\"videos[]\" data-limit=\"\"
                        multiple=\"multiple\">
                        ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["imgid"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 421
            yield "                          <option ";
            if ((array_key_exists("editedData", $context) && (CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "videos", [], "any", false, false, false, 421) != null))) {
                yield " ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source,                 // line 422
($context["editedData"] ?? null), "videos", [], "any", false, false, false, 422));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    yield " ";
                    if (($context["a"] == $context["v"])) {
                        yield "selected ";
                    }
                    yield " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield " ";
            }
            // line 423
            yield "                            data-img-src=\"https://img.youtube.com/vi/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
            yield "/0.jpg\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
            yield "\">
                          </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        yield "                      </select>
                    </div>
                  </div>
                  <input type=\"button\" name=\"previous\" class=\"previous action-button\" value=\"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-precedent"), "html", null, true);
        yield "\" />
                  <input type=\"button\" ";
        // line 430
        if ((array_key_exists("editedData", $context) && (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "gallery", [], "any", false, false, false, 430)) != null))) {
        } elseif ((array_key_exists("imagesSecondaires", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["imagesSecondaires"] ?? null)) > 0))) {
        } else {
            yield "disabled";
        }
        yield " name=\"next\" class=\"next action-button portfolio\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-suivant"), "html", null, true);
        yield "\" />
                </fieldset>

                <fieldset>
                  <div class=\"row mb-4\">
                    <div class=\"col-md-12 text-left\">
                      <h2 class=\"fs-title\">
                        ";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-5.entete-prix-prestation"), "html", null, true);
        yield "*</h2>
                      <h3 class=\"fs-subtitle text-left\">
                        ";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-5.description-prix-prestation"), "html", null, true);
        yield "</h3>
                      <div class=\"md-form\">
                        <select name=\"devise\" id=\"devise\" class=\"form-control\">
                          ";
        // line 442
        if ((array_key_exists("editedDataDevise", $context) && (($context["editedDataDevise"] ?? null) != ""))) {
            // line 443
            yield "                          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["editedDataDevise"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["editedDataDevise"] ?? null), "html", null, true);
            yield "</option>
                          ";
        } else {
        }
        // line 445
        yield "                          ";
        yield from $this->loadTemplate("profile/deviseList.html.twig", "profile/creerAnnonces.html.twig", 445)->unwrap()->yield($context);
        // line 446
        yield "                        </select>
                      </div>
                      <h3 class=\"fs-subtitle text-left\">
                        ";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-5.entete-prix-ttc"), "html", null, true);
        yield "</h3>
                      <div class=\"md-form\">
                        <input type=\"text\" data-type=\"currency\" ";
        // line 451
        if ((array_key_exists("editedDataPrix", $context) && (($context["editedDataPrix"] ?? null) != ""))) {
            // line 452
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["editedDataPrix"] ?? null), "html", null, true);
            yield "\" ";
        } else {
            yield " value=\"0\" ";
        }
        yield " id=\"prix\" name=\"prix\"
                          class=\"form-control prix-prestation\" placeholder=\"\" />
                      </div>
                    </div>
                  </div>
                  <input type=\"button\" name=\"previous\" class=\"previous action-button\"
                    value=\"";
        // line 458
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-precedent"), "html", null, true);
        yield "\" />
                  <input type=\"button\" ";
        // line 459
        if ((array_key_exists("editedDataPrix", $context) && (($context["editedDataPrix"] ?? null) != ""))) {
        } else {
            yield "disabled";
        }
        // line 460
        yield " name=\"previous\" class=\"next action-button devise\"
                    value=\"";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-suivant"), "html", null, true);
        yield "\" />
                </fieldset>
                <fieldset>
                  <div id=\"body\">
                    <h2 class=\"fs-title text-left mb-4\">
                      ";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-6.entete-legislation-et-conditions-utilisation"), "html", null, true);
        yield "
                    </h2>
                    <p class=\"text-left\">";
        // line 468
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-6.texte"), "html", null, true);
        yield "</p>
                    <input type=\"button\" name=\"previous\" class=\"previous action-button\"
                      value=\"";
        // line 470
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.bouton-precedent"), "html", null, true);
        yield "\" />
                    <input type=\"submit\" id=\"send\" class=\"submit action-button\"
                      value=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce-6.bouton-accepter"), "html", null, true);
        yield "\" />
                  </div>
                  <div id=\"succes\" style=\"display:none\">
                    <div hiddden class=\"col-md-12 alert alert-success alert-dismissible fade show\" role=\"alert\">
                      <strong>Felicitation!</strong> Votre annonce à été publier avec succès
                      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                      </button>
                    </div>
                  </div>
                </fieldset>

                ";
        // line 484
        if (array_key_exists("editedData", $context)) {
            // line 485
            yield "                <input id=\"state\" name=\"state\" hidden value=\"";
            if ((($context["state"] ?? null) == "edition")) {
                yield "edition";
            } elseif ((            // line 486
($context["state"] ?? null) == "creation")) {
                yield "creation";
            } elseif ((($context["state"] ?? null) == "brouillon")) {
                yield "brouillon";
            }
            yield "\"
                  class=\"state\" />
                <input id=\"idPostEdited\" name=\"idPostEdited\" hidden value=\"";
            // line 488
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "id", [], "any", false, false, false, 488), "html", null, true);
            yield "\" class=\"state\" />
                ";
        } else {
            // line 490
            yield "                <input id=\"state\" name=\"state\" hidden value=\"creation\" class=\"state\" />";
        }
        // line 491
        yield "              </form>

              <div class=\"text-left \">
                <button ";
        // line 494
        if (array_key_exists("editedData", $context)) {
        } else {
            yield "disabled";
        }
        // line 495
        yield "                  class=\"position-brouillon m-0 pl-3 pr-3 btn btn-md btn-primary fletter-caps brouillon\">Sauvegarder en
                  brouillon, publier plus tard</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin des modifs -->
      </div>
    </div>
    ";
        // line 504
        yield from $this->loadTemplate("partials/project.html.twig", "profile/creerAnnonces.html.twig", 504)->unwrap()->yield($context);
        // line 505
        yield "    ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profile/creerAnnonces.html.twig", 505)->unwrap()->yield($context);
        // line 506
        yield "  </main>
  ";
        // line 509
        yield "
</div>
";
        yield from [];
    }

    // line 514
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 515
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        yield from [];
    }

    // line 519
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 520
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

<!-- jQuery plugin for datepicker -->
<script src=\"";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 524
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/img-picker/image-picker.min.js")), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
  <script type=\"text/javascript\" src='";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "'></script>
<!-- jQuery plugin for spartan image picker -->
<script type=\"text/javascript\" src=\"";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/spartan-image-picker/spartan-multi-image-picker-min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>

<script>
  var verify_images = 0;
  \$(document).ready(function () {

    tinymce.init({
      selector: 'textarea#description',
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

    [].forEach.call(
      document.querySelectorAll('*'),
      function (el) {
        if (el.offsetWidth > docWidth) {
          // console.log(el);
        }
      }
    );
    //Hambuger menu icon
    \$('.animated-button-icon').on('click', function () {
      \$('.animated-icon2').toggleClass('open');
    });
    //first thing turn Hide Menu Search bar
    \$(\"#searchMenu\").hide();
    //toggle menu search bar on/off
    \$(\"#searchMenuShowHide\").click(function () {
      \$(\"#searchMenu\").toggle(\"slide\");
    });

    // Initialize the object
    \$(\"#photos\").imagepicker();
    \$(\"#videos\").imagepicker();
    // Retrieve the picker
    \$(\"#photos\").data('picker');
    \$(\"#videos\").data('picker');

    //multiple datepicker
    \$('.date').datepicker({
      multidate: true,
      format: 'dd-mm-yyyy'
    });


    //jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    \$(\".next\").click(function () {
      ";
        // line 593
        if (((array_key_exists("imagesSecondaires", $context) && Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["imagesSecondaires"] ?? null))) || (array_key_exists("editedData", $context) && (Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["editedData"] ?? null), "gallery", [], "any", false, false, false, 593)) != null)))) {
            // line 594
            yield "        verify_images = ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["imagesSecondaires"] ?? null)), "html", null, true);
            yield ";
        \$('.portfolio').attr('name', \"next\");
        \$('.portfolio').removeAttr('disabled');
      ";
        }
        // line 598
        yield "      if (animating) return false;
      animating = true;

      current_fs = \$(this).parent();
      next_fs = \$(this).parent().next();

      //activate next step on progressbar using the index of next_fs
      \$(\"#progressbar li\").eq(\$(\"fieldset\").index(next_fs)).addClass(\"active\");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in \"now\"
          //1. scale current_fs down to 80%
          scale = 1 - (1 - now) * 0.2;
          //2. bring next_fs from the right(50%)
          left = (now * 50) + \"%\";
          //3. increase opacity of next_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({
            'transform': 'scale(' + scale + ')',
            'position': 'absolute'
          });
          next_fs.css({ 'left': left, 'opacity': opacity });
        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
    });

    \$(\".previous\").click(function () {
      if (animating) return false;
      animating = true;

      current_fs = \$(this).parent();
      previous_fs = \$(this).parent().prev();

      //de-activate current step on progressbar
      \$(\"#progressbar li\").eq(\$(\"fieldset\").index(current_fs)).removeClass(\"active\");

      //show the previous fieldset
      previous_fs.show();
      //hide the current fieldset with style
      current_fs.animate({ opacity: 0 }, {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in \"now\"
          //1. scale previous_fs from 80% to 100%
          scale = 0.8 + (1 - now) * 0.2;
          //2. take current_fs to the right(50%) - from 0%
          left = ((1 - now) * 50) + \"%\";
          //3. increase opacity of previous_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({ 'left': left });
          previous_fs.css({ 'transform': 'scale(' + scale + ')', 'opacity': opacity });
        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
    });
  });

  // add new portfolio images
  \$(\"#coba\").spartanMultiImagePicker({
    fieldName: 'files_annonce[]',
    status: false,
    loaderIcon: '<i class=\"fas fa-sync fa-spin\"></i>',
    maxFileSize: '1048576',
    //url: \$(\"#containerForPortfolio\").attr(\"addPortfolioUrl\"),
    additionalParam: {
      name: 'files_annonce[]'
    },
    onSizeErr: function (index, file) {
      toastr.clear();
      toastr.warning(\"";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.taille_fichier"), "html", null, true);
        yield "\");
    },
    onAddRow: function(index) {
      verify_images += 1;
      if (verify_images > 1) {
        \$('.portfolio').attr('name', \"next\");
        \$('.portfolio').removeAttr('disabled');
      } else {
        \$('.portfolio').attr('disabled', \"disabled\");
        \$('.portfolio').attr('name', \"previous\");
      }
    },
    onRemoveRow: function (index) {
      verify_images -= 1;
      if (verify_images > 1) {
        \$('.portfolio').attr('name', \"next\");
        \$('.portfolio').removeAttr('disabled');
      } else {
        \$('.portfolio').attr('disabled', \"disabled\");
        \$('.portfolio').attr('name', \"previous\");
      }
    }
  });

  \$(document).on('change', '.categorie', function (e) {
    //  console.log('categorie test');
    /* if ( \$(\".categorie\").val() == \"0\") {
        \$('#msform').attr('action', \"";
        // line 710
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_ajouter_devis");
        yield "\");
     }
     else{
        \$('#msform').attr('action', \" ";
        // line 713
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_ajouter_annonce");
        yield "\");
     }*/
  });

  \$(document).on('change', '.souscategorie', function (e) {
    \$('.prestations').attr('name', \"next\");
    \$('.prestations').removeAttr('disabled');
  });

  \$(document).on('change', '#nom_prenom', function (e) {
    if (\$(\"#nom_prenom\").val() != \"\") {
      \$('.prestations').removeAttr('disabled');
    }
    if (\$(\"#nom_prenom\").val() == \"\") {
      \$('.prestations').attr('disabled', 'disabled');
    }
  });

  \$(document).on('blur', '#addressePostale, #codePostale, #ville', function (e) {
    if (\$('#addressePostale').val() != '' && \$('#codePostale').val() != '' && \$('#ville').val() != '') {
      \$('.adresse').attr('name', \"next\");
      \$('.adresse').removeAttr('disabled');
      \$('.brouillon').removeAttr('disabled');
    } else {
      \$('.adresse').attr('disabled', \"disabled\");
      \$('.adresse').attr('name', \"previous\");
      \$('.brouillon').attr('disabled', \"disabled\");
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
    if (\$('#photos').val() != '' || \$(this).files.length + document.getElementsByClassName('card_images').length > 0) {
      \$('.portfolio').attr('name', \"next\");
      \$('.portfolio').removeAttr('disabled');
    } else {
      \$('.portfolio').attr('disabled', \"disabled\");
      \$('.portfolio').attr('name', \"previous\");
    }
  });

  \$(\"input[name^=files_annonce]\").change(function() {
    if(document.getElementsByClassName('card_images')){verify_images = \$(this).files.length + document.getElementsByClassName('card_images').length;
    }else{verify_images = \$(this).files.length;}
    console.log(document.getElementsByClassName('card_images').length);
  })

  \$(document).on('change', '.input[name^=files_annonce]', function (e) {
    if (\$('#photos').val() != '' || verify_images != 0) {
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

  //Format price
  \$(\"input[data-type='currency']\").on({
    keyup: function () {
      var myFloat = \$(\"#prix\").val().replace(/[^0-9\\.{1,2}]+/g, \"\");
      \$(\"#prix\").val(myFloat);

    },
    blur: function () {
      if (\$(this).val() == '') {
        \$(this).val(0);
      }
    },
    focus: function () {
      let s = \$(this).val();
      while (s.charAt(0) === '0') {
        s = s.substr(1);
        \$(this).val(s);
      }
    }
  });

  \$('#dates_horaires').daterangepicker({
    autoUpdateInput: true,
    locale: {
      cancelLabel: 'Clear'
    }
  }, function (start, end, label) {
    //   console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
  });

  
\$(document).on('click', '.delete_port', function (e) { // On emp�che le navigateur de soumettre le formulaire
e.preventDefault();
var t = \$(this);
var urlPath = \$(this).attr('href');
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
success: function (reponse) {
if (reponse == 1) {

  verify_images -= 1;
swal(\"suppression terminée\", \"\", \"success\");
t.closest('.card').hide();
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

</script>
";
        // line 871
        yield from $this->loadTemplate("profile/js/rechercheSousCategories.html.twig", "profile/creerAnnonces.html.twig", 871)->unwrap()->yield($context);
        // line 872
        yield from $this->loadTemplate("profile/js/creerDevisAnnonce.html.twig", "profile/creerAnnonces.html.twig", 872)->unwrap()->yield($context);
        // line 873
        yield from $this->loadTemplate("profile/js/brouillonDevisAnnonce.html.twig", "profile/creerAnnonces.html.twig", 873)->unwrap()->yield($context);
        // line 874
        yield "
<script>
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
        // line 895
        yield from $this->loadTemplate("profile/autocomplete.html.twig", "profile/creerAnnonces.html.twig", 895)->unwrap()->yield($context);
        // line 896
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/creerAnnonces.html.twig";
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
        return array (  1713 => 896,  1711 => 895,  1688 => 874,  1686 => 873,  1684 => 872,  1682 => 871,  1521 => 713,  1515 => 710,  1485 => 683,  1398 => 598,  1390 => 594,  1388 => 593,  1322 => 530,  1317 => 528,  1312 => 526,  1308 => 525,  1304 => 524,  1300 => 523,  1294 => 520,  1287 => 519,  1279 => 515,  1272 => 514,  1265 => 509,  1262 => 506,  1259 => 505,  1257 => 504,  1246 => 495,  1241 => 494,  1236 => 491,  1233 => 490,  1228 => 488,  1219 => 486,  1215 => 485,  1213 => 484,  1198 => 472,  1193 => 470,  1188 => 468,  1183 => 466,  1175 => 461,  1172 => 460,  1167 => 459,  1163 => 458,  1149 => 452,  1147 => 451,  1142 => 449,  1137 => 446,  1134 => 445,  1125 => 443,  1123 => 442,  1117 => 439,  1112 => 437,  1096 => 430,  1092 => 429,  1087 => 426,  1075 => 423,  1061 => 422,  1056 => 421,  1052 => 420,  1046 => 417,  1041 => 415,  1034 => 410,  1030 => 408,  1024 => 407,  1017 => 403,  1012 => 401,  1009 => 400,  1006 => 399,  1002 => 398,  999 => 397,  997 => 396,  993 => 395,  987 => 391,  976 => 389,  963 => 388,  958 => 387,  954 => 386,  947 => 382,  942 => 380,  933 => 374,  926 => 373,  922 => 372,  913 => 369,  909 => 368,  902 => 364,  896 => 361,  893 => 360,  885 => 359,  884 => 358,  879 => 356,  872 => 352,  867 => 351,  864 => 350,  863 => 349,  862 => 348,  858 => 347,  850 => 342,  840 => 340,  838 => 339,  832 => 336,  828 => 334,  824 => 333,  818 => 330,  814 => 328,  810 => 327,  804 => 324,  800 => 322,  796 => 321,  791 => 319,  784 => 315,  774 => 313,  772 => 312,  766 => 309,  763 => 308,  755 => 307,  754 => 306,  747 => 303,  744 => 302,  737 => 301,  736 => 300,  730 => 297,  727 => 296,  719 => 295,  718 => 294,  714 => 292,  711 => 291,  703 => 289,  701 => 288,  696 => 286,  690 => 283,  683 => 279,  675 => 277,  660 => 270,  654 => 267,  643 => 263,  628 => 255,  621 => 251,  613 => 249,  608 => 246,  604 => 244,  602 => 243,  595 => 241,  591 => 240,  587 => 239,  582 => 238,  579 => 237,  574 => 234,  569 => 232,  566 => 231,  563 => 230,  558 => 227,  554 => 224,  550 => 222,  543 => 221,  540 => 220,  537 => 219,  533 => 218,  530 => 217,  528 => 216,  522 => 215,  512 => 212,  509 => 211,  505 => 210,  501 => 209,  496 => 208,  492 => 207,  489 => 206,  479 => 203,  476 => 202,  469 => 201,  464 => 200,  460 => 199,  455 => 198,  451 => 197,  448 => 196,  446 => 195,  437 => 193,  434 => 192,  427 => 191,  422 => 190,  418 => 189,  413 => 188,  409 => 187,  406 => 186,  403 => 185,  398 => 184,  393 => 181,  387 => 178,  378 => 172,  374 => 171,  370 => 170,  366 => 169,  362 => 168,  358 => 167,  351 => 164,  345 => 163,  340 => 162,  335 => 159,  333 => 158,  320 => 147,  318 => 146,  313 => 143,  306 => 142,  298 => 139,  291 => 138,  283 => 135,  276 => 134,  181 => 42,  177 => 41,  172 => 39,  165 => 35,  161 => 34,  157 => 33,  152 => 31,  148 => 30,  144 => 29,  139 => 27,  135 => 26,  130 => 24,  125 => 22,  118 => 21,  107 => 20,  96 => 18,  87 => 13,  82 => 11,  76 => 8,  71 => 6,  66 => 4,  59 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/creerAnnonces.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profile/creerAnnonces.html.twig");
    }
}
