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

/* profile/parameters.html.twig */
class __TwigTemplate_c2e936f33d83cf7350a84087b5ada1eb extends Template
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
        $this->parent = $this->loadTemplate("profileTemplate.html.twig", "profile/parameters.html.twig", 1);
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
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <meta name=\"robots\" content=\"noindex\">

";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    Trust &amp; Market | Paramètres
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading-btn.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/css/loading.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-parametres.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
    <style>
        .image_picker_image {
            width: 100px;
            height: 100px
        }

        .tox-statusbar__branding {
            display: none;
        }

        .param-li {
            min-height: 90px;
            background: none;
        }

        .btn-bg-primary {
            color: #fff;
            background: #f17b30 !important;
        }
        #exportBtn{
            background-color: #008799;
        }
        .btn-bg-primary:hover {
            color: #fff;
            background: #f4b279 !important;
        }

        .table_bg_primary {
            background: #f17b30;
        }

        .grey_table {
            background: #ededed;
        }

        .table_head_font,
        .table_tr_font {
            font-family: 'Source Sans Pro', sans-serif;
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

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 74
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 75
        yield "    <div class=\"flex-fill container\">
    <main class=\"\">
        <div class=\"container mt-2 pt-4\">
            ";
        // line 78
        yield from $this->loadTemplate("menuProfile.html.twig", "profile/parameters.html.twig", 78)->unwrap()->yield($context);
        // line 79
        yield "            <div class=\"mt-2\">
                <!-- Modif des infos -->
                <div id=\"modifInfo\">
                    <div class=\"row\">
                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["notice"], "method", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 84
            yield "                            <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                                <strong>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</strong>
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "
                        <div class=\"col-md-4 mb-2\">
                            <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\"
                                 aria-orientation=\"vertical\">
                                <a class=\"nav-link active\" id=\"v-pills-notification-tab\" data-toggle=\"pill\"
                                   href=\"#v-pills-notification\" role=\"tab\" aria-controls=\"v-pills-notification\"
                                   aria-selected=\"true\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.menu-notifications"), "html", null, true);
        yield "</a>
                                <a class=\"nav-link\" id=\"v-pills-transactions-tab\" data-toggle=\"pill\"
                                   href=\"#v-pills-transactions\" role=\"tab\" aria-controls=\"v-pills-transactions\"
                                   aria-selected=\"false\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.menu-historique-de-transactions"), "html", null, true);
        yield "</a>
                                <a class=\"nav-link\" id=\"v-pills-passe-tab\" data-toggle=\"pill\" href=\"#v-pills-passe\"
                                   role=\"tab\" aria-controls=\"v-pills-passe\"
                                   aria-selected=\"false\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.menu-mot-de-passe"), "html", null, true);
        yield "</a>

                                ";
        // line 105
        if ((CoreExtension::inFilter("ROLE_AUTO_ENTREPRENEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 105), "roles", [], "any", false, false, false, 105)) || CoreExtension::inFilter("ROLE_SOCIETE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 105), "roles", [], "any", false, false, false, 105)))) {
            // line 106
            yield "                                    <a class=\"nav-link\" id=\"v-pills-calendrier-tab\" data-toggle=\"pill\"
                                       href=\"#v-pills-calendrier\" role=\"tab\" aria-controls=\"v-pills-calendrier\"
                                       aria-selected=\"false\">Calendrier</a>
                                ";
        }
        // line 110
        yield "                            </div>
                        </div>
                        <div class=\"col-md-8 mb-2\">
                            <div class=\"tab-content\" id=\"v-pills-tabContent\">
                                <div class=\"tab-pane fade show active\" id=\"v-pills-notification\" role=\"tabpanel\"
                                     aria-labelledby=\"v-pills-notification-tab\">
                                    <h4>";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.formulaire-notifications-titre"), "html", null, true);
        yield "</h4>
                                    <div class=\"row\">
                                        <p class=\"col-12 custome-text\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.formulaire-notifications-description"), "html", null, true);
        yield "</p>
                                    </div>
                                    <form class=\"row px-3 custome-text\" id=\"userNewsletterData\"
                                          action=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_userNotificationData");
        yield "\" method=\"post\">
                                        <div class=\"col-md-6\">
                                            <!-- Default unchecked -->
                                            <div class=\"custom-control custom-checkbox p-2\">
                                                <input type=\"checkbox\" ";
        // line 125
        if ( !(null === ($context["reservationServiceClient"] ?? null))) {
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["reservationServiceClient"] ?? null), "metaValue", [], "any", false, false, false, 125) == 1)) {
                yield " checked ";
            }
            yield " ";
        }
        // line 126
        yield "                                                       class=\"custom-control-input\" id=\"rServicesClient\"
                                                       name=\"reservationServiceClient\">
                                                <label class=\"custom-control-label\"
                                                       for=\"rServicesClient\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-notifications.reservation-de-service-client"), "html", null, true);
        yield "</label>
                                            </div>

                                            <!-- Default unchecked -->
                                            <div class=\"custom-control custom-checkbox p-2\">
                                                <input type=\"checkbox\" ";
        // line 134
        if ( !(null === ($context["reservationServiceAnnonceur"] ?? null))) {
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["reservationServiceAnnonceur"] ?? null), "metaValue", [], "any", false, false, false, 134) == 1)) {
                yield " checked ";
            }
            yield " ";
        }
        // line 135
        yield "                                                       class=\"custom-control-input\" id=\"rServicesFournisseur\"
                                                       name=\"reservationServiceAnnonceur\">
                                                <label class=\"custom-control-label\"
                                                       for=\"rServicesFournisseur\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-notifications.reservation-de-service-annonceur"), "html", null, true);
        yield "</label>
                                            </div>

                                            <!-- Default unchecked -->
                                            <div class=\"custom-control custom-checkbox p-2\">
                                                <input type=\"checkbox\" ";
        // line 143
        if ( !(null === ($context["annulationReservation"] ?? null))) {
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["annulationReservation"] ?? null), "metaValue", [], "any", false, false, false, 143) == 1)) {
                yield " checked ";
            }
            yield " ";
        }
        // line 144
        yield "                                                       class=\"custom-control-input\" id=\"rAnnulation\"
                                                       name=\"annulationReservation\">
                                                <label class=\"custom-control-label\"
                                                       for=\"rAnnulation\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-notifications.annulation-de-reservation"), "html", null, true);
        yield "</label>
                                            </div>

                                            <!-- Default unchecked -->
                                            <div class=\"custom-control custom-checkbox p-2\">
                                                <input type=\"checkbox\" ";
        // line 152
        if ( !(null === ($context["annonceBrouillon"] ?? null))) {
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["annonceBrouillon"] ?? null), "metaValue", [], "any", false, false, false, 152) == 1)) {
                yield " checked ";
            }
            yield " ";
        }
        // line 153
        yield "                                                       class=\"custom-control-input\" id=\"annonceBrouillon\"
                                                       name=\"annonceBrouillon\">
                                                <label class=\"custom-control-label\"
                                                       for=\"annonceBrouillon\">";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-notifications.annonce-en-brouillon"), "html", null, true);
        yield "</label>
                                            </div>
                                        </div>
                                        <div
                                                class=\"col-md-6\">
                                            <!-- Default unchecked -->
                                            <div class=\"custom-control custom-checkbox p-2\">
                                                <input type=\"checkbox\" ";
        // line 163
        if ( !(null === ($context["annonceModeration"] ?? null))) {
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["annonceModeration"] ?? null), "metaValue", [], "any", false, false, false, 163) == 1)) {
                yield " checked ";
            }
            yield " ";
        }
        // line 164
        yield "                                                       class=\"custom-control-input\" id=\"annonceModeration\"
                                                       name=\"annonceModeration\">
                                                <label class=\"custom-control-label\"
                                                       for=\"annonceModeration\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-notifications.annonce-en-moderation"), "html", null, true);
        yield "</label>
                                            </div>

                                            <!-- Default unchecked -->
                                            <div class=\"custom-control custom-checkbox p-2\">
                                                <input type=\"checkbox\" ";
        // line 172
        if ( !(null === ($context["annonceRejete"] ?? null))) {
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["annonceRejete"] ?? null), "metaValue", [], "any", false, false, false, 172) == 1)) {
                yield " checked ";
            }
            yield " ";
        }
        // line 173
        yield "                                                       class=\"custom-control-input\" id=\"annonceRejete\"
                                                       name=\"annonceRejete\">
                                                <label class=\"custom-control-label\"
                                                       for=\"annonceRejete\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-notifications.annonce-rejete"), "html", null, true);
        yield "</label>
                                            </div>

                                            <!-- Default unchecked -->
                                            <div class=\"custom-control custom-checkbox p-2\">
                                                <input type=\"checkbox\" ";
        // line 181
        if ( !(null === ($context["annoncePublie"] ?? null))) {
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["annoncePublie"] ?? null), "metaValue", [], "any", false, false, false, 181) == 1)) {
                yield " checked ";
            }
            yield " ";
        }
        // line 182
        yield "                                                       class=\"custom-control-input\" id=\"annoncePubliee\"
                                                       name=\"annoncePublie\">
                                                <label class=\"custom-control-label\"
                                                       for=\"annoncePubliee\">";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-notifications.annonce-publiee"), "html", null, true);
        yield "</label>
                                            </div>

                                            <!-- Default unchecked -->
                                            <div class=\"custom-control custom-checkbox p-2\">
                                                <input type=\"checkbox\" ";
        // line 190
        if ( !(null === ($context["adhesionNewsletter"] ?? null))) {
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["adhesionNewsletter"] ?? null), "metaValue", [], "any", false, false, false, 190) == 1)) {
                yield " checked ";
            }
            yield " ";
        }
        // line 191
        yield "                                                       class=\"custom-control-input\" id=\"adhesionNewsletter\"
                                                       name=\"adhesionNewsletter\">
                                                <label class=\"custom-control-label\"
                                                       for=\"adhesionNewsletter\">";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-notifications.newsletter"), "html", null, true);
        yield "</label>
                                            </div>
                                        </div>
                                        <div class=\"col-md-12 md-form\">
                                            <button id=\"enregNotifs\" class=\"btn btn-md btn-success float-right\"
                                                    type=\"submit\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.bouton-enregistrer"), "html", null, true);
        yield "</button>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"tab-pane fade\" id=\"v-pills-transactions\" role=\"tabpanel\"
                                     aria-labelledby=\"v-pills-transactions-tab\">
                                    <h4>
                                        ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.formulaire-transactions-versees"), "html", null, true);
        yield "
                                        (<span id=\"transactionVersees\">";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["transactionsVersees"] ?? null)), "html", null, true);
        yield "</span>)</h4>
                                    <div class=\"row\">
                                        <div class=\"col-md-12\" id=\"table1\" style=\"overflow-x:scroll\">

                                            <table class=\"table\">
                                                <thead class=\"grey lighten-2\">
                                                <tr>
                                                    <th scope=\"col\"
                                                        class=\"font-weight-bold border-right border-white table_head_font\">";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.date"), "html", null, true);
        yield "</th>
                                                    <th scope=\"col\"
                                                        class=\"font-weight-bold border-right border-white table_head_font\">";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.type"), "html", null, true);
        yield "</th>
                                                    <th scope=\"col\"
                                                        class=\"font-weight-bold border-right border-white table_head_font\">";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.nom-prestation"), "html", null, true);
        yield "</th>
                                                    <th scope=\"col\"
                                                        class=\"font-weight-bold border-right border-white table_head_font\">";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.etat"), "html", null, true);
        yield "</th>
                                                    <th scope=\"col\"
                                                        class=\"font-weight-bold border-right border-white table_head_font\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.montant"), "html", null, true);
        yield "</th>
                                                    <th scope=\"col\"
                                                        class=\"font-weight-bold border-right border-white white-text table_bg_primary table_head_font\">";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.versement"), "html", null, true);
        yield "</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["transactionsVersees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 230
            yield "                                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 230) == "product")) {
                // line 231
                yield "                                                        <tr>
                                                            <th scope=\"row\"
                                                                class=\"border-right border-white grey_table table_tr_font\">
                                                                ";
                // line 234
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 234));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 235
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "dates", [], "any", false, false, false, 235), "html", null, true);
                    yield "
                                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 237
                yield "                                                            </th>

                                                            <td class=\"border-right border-white grey_table table_tr_font\">
                                                                ";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paiement.reservation.type-de-paiement"), "html", null, true);
                yield "
                                                                ";
                // line 241
                if (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "livraison", [], "any", false, false, false, 241)) {
                    yield " &
                                                                    ";
                    // line 242
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 242), "locale", [], "any", false, false, false, 242) == "fr")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "livraison", [], "any", false, false, false, 242), "postTitle", [], "any", false, false, false, 242), "html", null, true);
                    } else {
                        // line 243
                        yield "                                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "livraison", [], "any", false, false, false, 243), "postExcerpt", [], "any", false, false, false, 243), "html", null, true);
                    }
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "livraison", [], "any", false, false, false, 243), "guid", [], "any", false, false, false, 243), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 243), 0, [], "any", false, false, false, 243), "devise", [], "any", false, false, false, 243), "html", null, true);
                    yield "
                                                                ";
                }
                // line 245
                yield "                                                            </td>
                                                            <td class=\"border-right border-white grey_table table_tr_font text-uppercase\">
                                                                <ul class=\"list-group\">
                                                                    ";
                // line 248
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 248));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 249
                    yield "                                                                        <li class=\"list-group-item param-li\">";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "categorie", [], "any", true, true, false, 249)) {
                        // line 250
                        yield "                                                                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "categorie", [], "any", false, false, false, 250), "html", null, true);
                        yield "
                                                                            ";
                    }
                    // line 252
                    yield "                                                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "categorie", [], "any", true, true, false, 252) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "categorie", [], "any", false, false, false, 252) != ""))) {
                        yield "||";
                    }
                    // line 253
                    yield "                                                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["s"], "sousCategorie", [], "any", true, true, false, 253) && (CoreExtension::getAttribute($this->env, $this->source, $context["s"], "sousCategorie", [], "any", false, false, false, 253) != ""))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "sousCategorie", [], "any", false, false, false, 253), "html", null, true);
                        yield " ||";
                    }
                    // line 254
                    yield "                                                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "libelle", [], "any", false, false, false, 254), "html", null, true);
                    yield "*";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "qte", [], "any", false, false, false, 254), "html", null, true);
                    yield "</li>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 256
                yield "                                                                </ul>
                                                            </td>
                                                            <td class=\"border-right border-white grey_table table_tr_font\">
                                                                ";
                // line 259
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 259) == "wc-in-progress")) {
                    // line 260
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.in-progress"), "html", null, true);
                    yield "
                                                                ";
                }
                // line 262
                yield "                                                                ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 262) == "wc-cancelled") || (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 262) == "wc-failed"))) {
                    // line 263
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.cancel"), "html", null, true);
                    yield "
                                                                ";
                }
                // line 265
                yield "                                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 265) == "wc-completed")) {
                    // line 266
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.success"), "html", null, true);
                    yield "
                                                                ";
                }
                // line 268
                yield "                                                            </td>
                                                            <td class=\"border-right font-weight-bold border-white grey_table table_tr_font\">
                                                                <ul class=\"list-group\">
                                                                    ";
                // line 271
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 271));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 272
                    yield "                                                                        <li class=\"list-group-item param-li\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "prixu", [], "any", false, false, false, 272), "html", null, true);
                    yield "
                                                                            ";
                    // line 273
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "devise", [], "any", false, false, false, 273), "html", null, true);
                    yield "</li>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 275
                yield "                                                                </ul>
                                                            </td>
                                                            <td class=\"font-weight-bold white-text table_bg_primary table_tr_font\">
                                                                ";
                // line 278
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prix_total", [], "any", false, false, false, 278), "html", null, true);
                yield "
                                                                ";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 279), 0, [], "any", false, false, false, 279), "devise", [], "any", false, false, false, 279), "html", null, true);
                yield "
                                                            </td>
                                                        </tr>
                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 282
$context["a"], "pinged", [], "any", false, false, false, 282) == "devis")) {
                // line 283
                yield "                                                        <tr>
                                                            <th scope=\"row\"
                                                                class=\"border-right border-white grey_table table_tr_font\">
                                                                ";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 286), "dates_horaires", [], "any", false, false, false, 286), "html", null, true);
                yield "
                                                            </th>

                                                            <td class=\"border-right border-white grey_table table_tr_font\">";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paiement.reservation.type-de-paiement"), "html", null, true);
                yield "</td>
                                                            <td class=\"border-right border-white grey_table table_tr_font text-uppercase\">
                                                                ";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 291), "html", null, true);
                yield "
                                                            </td>
                                                            <td class=\"border-right border-white grey_table table_tr_font\">
                                                                ";
                // line 294
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 294) == "wc-in-progress")) {
                    // line 295
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.in-progress"), "html", null, true);
                    yield "
                                                                ";
                }
                // line 297
                yield "                                                                ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 297) == "wc-cancelled") || (CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 297) == "wc-failed"))) {
                    // line 298
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paiement.reservation.paiement-attente"), "html", null, true);
                    yield "
                                                                ";
                }
                // line 300
                yield "                                                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 300) == "wc-completed")) {
                    // line 301
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.success"), "html", null, true);
                    yield "
                                                                ";
                }
                // line 303
                yield "                                                            </td>
                                                            <td class=\"border-right font-weight-bold border-white grey_table table_tr_font\">
                                                                ";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 305), "prix_devis", [], "any", false, false, false, 305), "html", null, true);
                yield "
                                                                ";
                // line 306
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 306), "devise", [], "any", false, false, false, 306) == "")) {
                    // line 307
                    yield "                                                                    &euro;
                                                                ";
                } else {
                    // line 309
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 309), "devise", [], "any", false, false, false, 309), "html", null, true);
                    yield "
                                                                ";
                }
                // line 311
                yield "                                                            </td>
                                                            <td class=\"font-weight-bold white-text table_bg_primary table_tr_font\">
                                                                ";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 313), "prix_devis", [], "any", false, false, false, 313), "html", null, true);
                yield "
                                                                ";
                // line 314
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 314), "devise", [], "any", false, false, false, 314) == "")) {
                    // line 315
                    yield "                                                                    &euro;
                                                                ";
                } else {
                    // line 317
                    yield "                                                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 317), "devise", [], "any", false, false, false, 317), "html", null, true);
                    yield "
                                                                ";
                }
                // line 319
                yield "                                                            </td>
                                                        </tr>

                                                    ";
            }
            // line 323
            yield "
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        yield "                                                </tbody>
                                            </table>
                                            <div id=\"index_native\"></div>
                                        </div>
                                    </div>
                                    ";
        // line 330
        if ((CoreExtension::inFilter("ROLE_AUTO_ENTREPRENEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 330), "roles", [], "any", false, false, false, 330)) || CoreExtension::inFilter("ROLE_SOCIETE", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 330), "roles", [], "any", false, false, false, 330)))) {
            // line 331
            yield "                                        <h4>
                                            ";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.formulaire-transactions-recus"), "html", null, true);
            yield "
                                            (<span id=\"transactionRecues\">";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["transactionsRecues"] ?? null)), "html", null, true);
            yield "</span>)</h4>

                                        <div class=\"row\">
                                            <div class=\"col-md-12\" style=\"overflow-x:scroll\" id=\"table2\">
                                                <table class=\"table\" id=\"data-table-2\">
                                                    <thead class=\"grey lighten-2\">
                                                    <tr>
                                                        <th scope=\"col\" class=\"font-weight-bold border-right border-white table_head_font\">";
            // line 340
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.date"), "html", null, true);
            yield "</th>
                                                        <th scope=\"col\" class=\"font-weight-bold border-right border-white table_head_font\">";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.type"), "html", null, true);
            yield "</th>
                                                        <th scope=\"col\" class=\"font-weight-bold border-right border-white table_head_font\">";
            // line 342
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.nom-prestation"), "html", null, true);
            yield "</th>
                                                        <th scope=\"col\" class=\"font-weight-bold border-right border-white table_head_font\">";
            // line 343
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.etat"), "html", null, true);
            yield "</th>
                                                        <th scope=\"col\" class=\"font-weight-bold border-right border-white table_head_font\">";
            // line 344
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.montant"), "html", null, true);
            yield "</th>
                                                        <th scope=\"col\" class=\"font-weight-bold border-right border-white white-text table_bg_primary table_head_font\">";
            // line 345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-transaction.versement"), "html", null, true);
            yield "</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    ";
            // line 349
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["transactionsRecues"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 350
                yield "                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "pinged", [], "any", false, false, false, 350) == "product")) {
                    // line 351
                    yield "                                                            <tr>
                                                                <td scope=\"row\" class=\"border-right border-white grey_table table_tr_font\">";
                    // line 352
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_date", [], "any", false, false, false, 352), "d-m-Y"), "html", null, true);
                    yield "</td>
                                                                <td class=\"border-right border-white grey_table table_tr_font\">";
                    // line 353
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paiement.reservation.type-de-paiement"), "html", null, true);
                    yield "</td>
                                                                <td class=\"border-right border-white grey_table table_tr_font text-uppercase\"><ul class=\"list-group\">";
                    // line 354
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 354));
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        yield "<li class=\"list-group-item param-li\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "libelle", [], "any", false, false, false, 354), "html", null, true);
                        yield "* ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "qte", [], "any", false, false, false, 354), "html", null, true);
                        yield "</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield "</ul></td>
                                                                <td class=\"border-right border-white grey_table table_tr_font\">
                                                                    ";
                    // line 356
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 356) == "wc-in-progress")) {
                        // line 357
                        yield "                                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.in-progress"), "html", null, true);
                        yield "
                                                                    ";
                    }
                    // line 359
                    yield "                                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 359) == "wc-cancelled")) {
                        // line 360
                        yield "                                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.cancel"), "html", null, true);
                        yield "
                                                                    ";
                    }
                    // line 362
                    yield "                                                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 362) == "wc-completed")) {
                        // line 363
                        yield "                                                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.success"), "html", null, true);
                        yield "
                                                                    ";
                    }
                    // line 365
                    yield "                                                                </td>
                                                                <td class=\"border-right font-weight-bold border-white grey_table table_tr_font\"><ul class=\"list-group\">";
                    // line 366
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 366));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 366) > 1)) {
                            yield " | ";
                        }
                        yield "<li class=\"list-group-item param-li\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "prixu", [], "any", false, false, false, 366), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "devise", [], "any", false, false, false, 366), "html", null, true);
                        yield "</li>";
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
                    unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield "</ul></td>
                                                                <td class=\"font-weight-bold white-text table_bg_primary table_tr_font\">";
                    // line 367
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "prix_total", [], "any", false, false, false, 367), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 367), 0, [], "any", false, false, false, 367), "devise", [], "any", false, false, false, 367), "html", null, true);
                    yield "</td>
                                                            </tr>
                                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 369
$context["a"], "pinged", [], "any", false, false, false, 369) == "devis")) {
                    // line 370
                    yield "                                                            <tr>
                                                                ";
                    // line 372
                    yield "                                                                <td scope=\"row\" class=\"border-right border-white grey_table table_tr_font\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 372), "dates_horaires", [], "any", false, false, false, 372), "html", null, true);
                    yield "</td>
                                                                <td class=\"border-right border-white grey_table table_tr_font\">";
                    // line 373
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paiement.reservation.type-de-paiement"), "html", null, true);
                    yield "</td>
                                                                <td class=\"border-right border-white grey_table table_tr_font text-uppercase\">";
                    // line 374
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_title", [], "any", false, false, false, 374), "html", null, true);
                    yield "</td>
                                                                <td class=\"border-right border-white grey_table table_tr_font\">";
                    // line 375
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 375) == "wc-in-progress")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.in-progress"), "html", null, true);
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 375) == "wc-cancelled")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.cancel"), "html", null, true);
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_status", [], "any", false, false, false, 375) == "wc-completed")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.success"), "html", null, true);
                    }
                    yield "</td>
                                                                <td class=\"border-right font-weight-bold border-white grey_table table_tr_font\">";
                    // line 376
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 376), "prix_devis", [], "any", false, false, false, 376), "html", null, true);
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 376), "devise", [], "any", false, false, false, 376) == "")) {
                        yield "&euro;";
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 376), "devise", [], "any", false, false, false, 376), "html", null, true);
                    }
                    yield "</td>
                                                                <td class=\"font-weight-bold white-text table_bg_primary table_tr_font\">";
                    // line 377
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 377), "prix_devis", [], "any", false, false, false, 377), "html", null, true);
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 377), "devise", [], "any", false, false, false, 377) == "")) {
                        yield "&euro;";
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["a"], "post_content", [], "any", false, false, false, 377), "devise", [], "any", false, false, false, 377), "html", null, true);
                    }
                    yield "</td>
                                                            </tr>
                                                        ";
                }
                // line 380
                yield "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['a'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 381
            yield "                                                    </tbody>
                                                    </tbody>
                                                </table>
                                                <div class=\"row\">
                                                    <div id=\"index_native2\"></div>
                                                </div>

                                            </div>
                                        </div>

                                        <h4>
                                            ";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.formulaire-revenus-generes"), "html", null, true);
            yield "
                                        </h4>
                                        <div class=\"row\">
                                            <p class=\"col-12 custome-text\">
                                                ";
            // line 396
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.formulaire-messages-revenus-generes"), "html", null, true);
            yield "
                                                :
                                                <br>
                                                <span id=\"revenueGeneres\" class=\"mt-3\">";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["revenueGeneres"] ?? null), "html", null, true);
            yield "
                                                    ";
            // line 400
            if (array_key_exists("transactionRecues", $context)) {
                // line 401
                yield "                                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transactionRecues"] ?? null), "post_content", [], "any", false, false, false, 401), "devise", [], "any", false, false, false, 401) != "")) {
                    // line 402
                    yield "                                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["transactionRecues"] ?? null), "post_content", [], "any", false, false, false, 402), "devise", [], "any", false, false, false, 402), "html", null, true);
                } else {
                    yield "€
                                                        ";
                }
                // line 404
                yield "                                                    ";
            }
            // line 405
            yield "\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </p>
                                        </div>

                                        <div class=\"d-flex justify-content-center\">
                                            <button id=\"exportBtn\" class=\"btn btn-round\"><i class=\"fa fa-download\"></i> Exporter vos ventes</button>
                                        </div>
                                    ";
        }
        // line 413
        yield "                                </div>
                                <div class=\"tab-pane fade\" id=\"v-pills-passe\" role=\"tabpanel\"
                                     aria-labelledby=\"v-pills-passe-tab\">
                                    <h4>";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.formulaire-mot-de-passe-titre"), "html", null, true);
        yield "</h4>
                                    <div class=\"row\">
                                        <div class=\"col-8 custome-text\">
                                            <form action=\"";
        // line 419
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_updateUserPassword");
        yield "\"
                                                  id=\"updateUserPassword\" method=\"post\">
                                                <div class=\"md-form\">
                                                    <input type=\"password\" id=\"passeActuel\" name=\"oldUserPassword\"
                                                           class=\"form-control\" required>
                                                    <label for=\"passeActuel\">";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-mot-de-passe.mot-de-passe-actuel"), "html", null, true);
        yield "
                                                        *</label>
                                                </div>
                                                <div class=\"md-form\">
                                                    <input type=\"password\" id=\"nouveauPasse\" name=\"newUserPassword\"
                                                           class=\"form-control\" required>
                                                    <label for=\"nouveauPasse\">";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-mot-de-passe.nouveau-mot-de-passe"), "html", null, true);
        yield "
                                                        *</label>
                                                    <div id=\"progress-container\"></div>
                                                </div>
                                                <div class=\"md-form\">
                                                    <input type=\"password\" id=\"confirmerNouveauPasse\"
                                                           name=\"newUserPasswordRetype\" class=\"form-control\" required>
                                                    <label for=\"confirmerNouveauPasse\">";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres-mot-de-passe.confirmer-mot-de-passe-actuel"), "html", null, true);
        yield "
                                                        *</label>
                                                </div>
                                                <p class=\"text-justify\">
                                                    ";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.formulaire-mot-de-passe-messages-astuce"), "html", null, true);
        yield "
                                                </p>
                                                <div class=\"col-md-12 md-form\">
                                                    <button id=\"enregPasse\" class=\"btn btn-md btn-success float-right\"
                                                            type=\"submit\">";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.bouton-enregistrer"), "html", null, true);
        yield "</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"tab-pane fade\" id=\"v-pills-calendrier\" role=\"tabpanel\"
                                     aria-labelledby=\"v-pills-calendrier-tab\">
                                    <h4>";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.calendrier.titre"), "html", null, true);
        yield "</h4>
                                    <div class=\"row\">
                                        <p class=\"col-12 custome-text\">";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.calendrier.conseil"), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-12 custome-text\">
                                            <form action=\"";
        // line 460
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_calendrier_ajouter_date");
        yield "\" id=\"saveDate\"
                                                  method=\"post\">
                                                <div class=\"multipleDatePicker md-form date\" value='' type='text'>
                                                    <input type='hidden' name=\"date\" class='DateField' value=''
                                                           id=\"date\">
                                                </div>
                                                <button id=\"send\" type=\"button\"
                                                        class=\"btn btn-md btn-success ld-over-inverse \">";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.parametres.bouton-enregistrer"), "html", null, true);
        yield "
                                                    <i class=\"ld ld-ring ld-spin\"></i>
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin des modifs -->
            </div>
        </div>
        ";
        // line 482
        yield from $this->loadTemplate("partials/project.html.twig", "profile/parameters.html.twig", 482)->unwrap()->yield($context);
        // line 483
        yield "        ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profile/parameters.html.twig", 483)->unwrap()->yield($context);
        // line 484
        yield "    </main>
    </div>";
        yield from [];
    }

    // line 485
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 486
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 487
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>

    <!-- jQuery plugin for password meter -->
    <script src=\"";
        // line 491
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/password-meter/password-score.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/password-meter/password-score-options.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 493
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/password-meter/bootstrap-strength-meter.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <script src=\"";
        // line 495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/paginator.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 496
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/table-to-csv.min.js"), "html", null, true);
        yield "\"></script>


    <script>
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
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

// Configure password Meter
            \$('#nouveauPasse').strengthMeter('progressBar', {
                container: \$('#progress-container'),
                base: 80,
                hierarchy: {
                    '0': 'progress-bar-striped progress-bar-animated bg-danger',
                    '25': 'progress-bar-striped progress-bar-animated bg-warning',
                    '50': 'progress-bar-striped progress-bar-animated bg-success'
                },
                passwordScore: {
                    options: [],
                    append: true
                }
            });

// Modification des données newsletter de l'utilisateur

            \$('#userReferencementData').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();

                \$('#annoncePubliee').addClass('running');
                toastr.info(\"";
        // line 540
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

                        if (response != 0) {
                            toastr.clear();
                            toastr.success(\"";
        // line 556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                            window.location = \"\";
                        } else if (response == 0) {
                            \$('#annoncePubliee').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");

                        }
                    },
                    error: function (response) {
                        \$('#annoncePubliee').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 568
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                    }
                });

                return false;

            });

//Demande de referencement produit
            \$('#userNewsletterData').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();

                \$('#annoncePubliee').addClass('running');
                toastr.info(\"";
        // line 581
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
                        if (response != 0) {

                            toastr.clear();
                            toastr.success(\"";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                            window.location = \"\";
                        } else if (response == 0) {
                            \$('#annoncePubliee').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                        }
                    },
                    error: function (response) {
                        \$('#annoncePubliee').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                    }
                });
                return false;
            });

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
                \"timeOut\": \"12000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }


// End Banking Form
// multiple datepicker
            \$(\".multipleDatePicker\").datepicker({
                multidate: true,
                format: 'dd-mm-yyyy',
                startDate: '";
        // line 638
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["d"] ?? null), "d-m-Y", false), "html", null, true);
        yield "',
                endDate: '";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(($context["d"] ?? null), "+1 year"), "d-m-Y", false), "html", null, true);
        yield "',
                language: '";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 640), "getLocale", [], "method", false, false, false, 640), "html", null, true);
        yield "'
            });
            console.log('";
        // line 642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["userAvailabilityDates"] ?? null), ","), "html", null, true);
        yield "');
            \$('.multipleDatePicker').datepicker('update', \"";
        // line 643
        yield Twig\Extension\CoreExtension::join(($context["userAvailabilityDates"] ?? null), "\",\"");
        yield "\");

            \$('#send').on('click', function (e) {
                let d = \$(\".multipleDatePicker\").datepicker(\"getFormattedDate\");
                \$('#date').val(d);
                \$('#saveDate').submit();
            });

            \$('#saveDate').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();
                \$('#send').addClass('running');
                toastr.info(\"";
        // line 654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");

                let \$form = \$(this);
                let formData = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formData !== null) ? formData : \$form.serialize();

                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (response) {
                        if (response != 0) {
                            toastr.clear();
                            toastr.success(\"";
        // line 669
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                            \$('#send').removeClass('running');
                        } else {
                            \$('#send').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 674
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                        }
                    },
                    error: function (response) {
                        \$('#send').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 680
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                    }
                });
                return false;
            });
// \$('#date').datepicker({
//       uiLibrary: 'bootstrap4',
//       size: 'large',
//       showRightIcon: false,
//       iconsLibrary: 'fontawesome'
// });

// Validations Password

// Validate fields for Billing
// First Name
            \$(\"#confirmerNouveauPasse\").change(function () {
                if (\$(\"#confirmerNouveauPasse\").val() == \$(\"#nouveauPasse\").val()) {
                    \$(\"#confirmerNouveauPasse\").removeClass(\"is-invalid\");
                    \$(\"#confirmerNouveauPasse\").addClass(\"is-valid\");
                } else {
                    \$(\"#confirmerNouveauPasse\").removeClass(\"is-valid\");
                    \$(\"#confirmerNouveauPasse\").addClass(\"is-invalid\");
                }
            });

// End validation

// Modification des données mot de passe de l'utilisateur

            \$('#updateUserPassword').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                e.preventDefault();

                \$('#enregPasse').addClass('running');
                toastr.info(\"";
        // line 714
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.requete-en-cours"), "html", null, true);
        yield "\");

                var \$form = \$(this);
                var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                var data = (formdata !== null) ? formdata : \$form.serialize();

                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    contentType: false,
                    processData: false,
                    data: data,
                    success: function (response) {

                        if (response != 0) {

                            toastr.clear();
                            toastr.success(\"";
        // line 731
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.succes"), "html", null, true);
        yield "\");
                            window.location = \"\";
                        } else if (response == 0) {
                            \$('#enregPasse').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 736
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                        }

                    },
                    error: function (response) {
                        \$('#enregPasse').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 743
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.requetes.erreur"), "html", null, true);
        yield "\");
                    }
                });
                return false;
            });
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
                \"timeOut\": \"12000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }
// Get all table cells
            const tableCells = document.querySelectorAll(\"td, th\"); // Selects both data cells (<td>) and header cells (<th>)

// Loop through each cell and trim its text content
            tableCells.forEach(cell => {cell.textContent = cell.textContent.trim();});
            paginator({
                table: document.getElementById(\"table1\").getElementsByTagName(\"table\")[0],
                box: document.getElementById(\"index_native\"),
                rows_per_page: 5,
                active_class: \"color_page\"
            });

            paginator({
                table: document.getElementById(\"table2\").getElementsByTagName(\"table\")[0],
                box: document.getElementById(\"index_native2\"),
                rows_per_page: 5,
                active_class: \"color_page\"
            });
            //Export code

            const tableToCSV = new TableToCSV(\"#data-table-2\", {
                filename: \"payment-report.csv\",
                delimiter: \";\", //delimiter (optional) default value \",\"
                ignoreColumns: [0], //column index (optional)
            });
            document.querySelector(\"#exportBtn\").addEventListener(\"click\", (e) => {
                console.log(tableToCSV.toString());
                tableToCSV.download();
            });

        });
    </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/parameters.html.twig";
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
        return array (  1534 => 743,  1524 => 736,  1516 => 731,  1496 => 714,  1459 => 680,  1450 => 674,  1442 => 669,  1424 => 654,  1410 => 643,  1406 => 642,  1401 => 640,  1397 => 639,  1393 => 638,  1360 => 608,  1351 => 602,  1343 => 597,  1324 => 581,  1308 => 568,  1298 => 561,  1290 => 556,  1271 => 540,  1224 => 496,  1220 => 495,  1215 => 493,  1211 => 492,  1207 => 491,  1201 => 488,  1196 => 487,  1184 => 486,  1177 => 485,  1171 => 484,  1168 => 483,  1166 => 482,  1148 => 467,  1138 => 460,  1131 => 456,  1126 => 454,  1114 => 445,  1107 => 441,  1100 => 437,  1090 => 430,  1081 => 424,  1073 => 419,  1067 => 416,  1062 => 413,  1052 => 405,  1049 => 404,  1042 => 402,  1039 => 401,  1037 => 400,  1033 => 399,  1027 => 396,  1020 => 392,  1007 => 381,  1001 => 380,  990 => 377,  981 => 376,  969 => 375,  965 => 374,  961 => 373,  956 => 372,  953 => 370,  951 => 369,  944 => 367,  905 => 366,  902 => 365,  896 => 363,  893 => 362,  887 => 360,  884 => 359,  878 => 357,  876 => 356,  860 => 354,  856 => 353,  852 => 352,  849 => 351,  846 => 350,  842 => 349,  835 => 345,  831 => 344,  827 => 343,  823 => 342,  819 => 341,  815 => 340,  805 => 333,  801 => 332,  798 => 331,  796 => 330,  789 => 325,  782 => 323,  776 => 319,  770 => 317,  766 => 315,  764 => 314,  760 => 313,  756 => 311,  750 => 309,  746 => 307,  744 => 306,  740 => 305,  736 => 303,  730 => 301,  727 => 300,  721 => 298,  718 => 297,  712 => 295,  710 => 294,  704 => 291,  699 => 289,  693 => 286,  688 => 283,  686 => 282,  680 => 279,  676 => 278,  671 => 275,  663 => 273,  658 => 272,  654 => 271,  649 => 268,  643 => 266,  640 => 265,  634 => 263,  631 => 262,  625 => 260,  623 => 259,  618 => 256,  607 => 254,  601 => 253,  596 => 252,  590 => 250,  587 => 249,  583 => 248,  578 => 245,  567 => 243,  563 => 242,  559 => 241,  555 => 240,  550 => 237,  541 => 235,  537 => 234,  532 => 231,  529 => 230,  525 => 229,  518 => 225,  513 => 223,  508 => 221,  503 => 219,  498 => 217,  493 => 215,  482 => 207,  478 => 206,  468 => 199,  460 => 194,  455 => 191,  447 => 190,  439 => 185,  434 => 182,  426 => 181,  418 => 176,  413 => 173,  405 => 172,  397 => 167,  392 => 164,  384 => 163,  374 => 156,  369 => 153,  361 => 152,  353 => 147,  348 => 144,  340 => 143,  332 => 138,  327 => 135,  319 => 134,  311 => 129,  306 => 126,  298 => 125,  291 => 121,  285 => 118,  280 => 116,  272 => 110,  266 => 106,  264 => 105,  259 => 103,  253 => 100,  247 => 97,  239 => 91,  227 => 85,  224 => 84,  220 => 83,  214 => 79,  212 => 78,  207 => 75,  200 => 74,  190 => 73,  130 => 19,  123 => 18,  116 => 16,  112 => 15,  108 => 14,  104 => 13,  100 => 12,  95 => 11,  88 => 10,  82 => 8,  75 => 7,  65 => 3,  58 => 2,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/parameters.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profile/parameters.html.twig");
    }
}
