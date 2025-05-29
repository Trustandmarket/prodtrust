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

/* experience/envoyez_commentaires.html.twig */
class __TwigTemplate_32598b71d12264cd8012e82ad928be1d extends Template
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
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "descriptiveContent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("descriptiveContent.html.twig", "experience/envoyez_commentaires.html.twig", 1);
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
    <meta name=\"title\" content=\"";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <meta name=\"description\" content=\"";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <link rel=\"canonical\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_envoyez_commentaires")), "html", null, true);
        yield "\">

    ";
        // line 10
        yield "    <meta property=\"og:title\" content=\"";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <meta property=\"og:description\"
          content=\"";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <meta property=\"og:image\"
          content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_envoyez_commentaires")), "html", null, true);
        yield "\">
    ";
        // line 18
        yield "
    ";
        // line 20
        yield "    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\" content=\"";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <meta name=\"twitter:description\"
          content=\"";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "retours-experience"]);
        yield "\">
    <meta name=\"twitter:image\"
          content=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
    <meta name=\"twitter:image:alt\" content=\"";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield "\">
    ";
        // line 29
        yield "
    ";
        // line 31
        yield "    <script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"WebPage\",
\t\t\"name\": \"";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield "\",
\t\t\"description\": \"";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "retours-experience"]);
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
        // line 49
        yield "    <script src=\"https://www.google.com/recaptcha/enterprise.js\" async defer></script>
";
        yield from [];
    }

    // line 51
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust &amp; Market |";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "retours-experience"]);
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- Your custom styles (optional) -->
    <link href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
    <link href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">


    <link href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-feedback.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css\"
          integrity=\"sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==\"
          crossorigin=\"anonymous\"/>

    <style>
        .chat-menu a {
            border-radius: 50%;
            background-color: transparent;
            width: 100%;
        }

        #g-recaptcha-response {
            display: block !important;
            position: absolute;
            margin: -78px 0 0 0 !important;
            width: 302px !important;
            height: 55px !important;
            z-index: -999999;
            opacity: 0;
        }
    </style>


";
        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "    <div id=\"imageHolder\" class=\"view intro-2\">
        <div class=\"full-bg-img\">
            <div class=\"mask rgba-purple-light flex-center\">
                <div class=\"container text-left align-items-end white-text wow fadeInUp\">
                    <h2 class=\"page-title\">
                        AIDE
                    </h2>
                </div>
            </div>
        </div>
    </div>

";
        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 109
        yield "    <!--Main Layout-->
    <main class=\"text-center mt-5\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <ul class=\"list-group text-left\">
                        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sous_menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m1"]) {
            // line 117
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "id", [], "any", false, false, false, 117) != 3742)) {
                // line 118
                yield "                                <li class=\"list-group-item list-group-flush \">
                                    <a class=\"prestation-list-item\"
                                       href=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => "aide", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postName", [], "any", false, false, false, 120)]), "html", null, true);
                yield "\">
                                        ";
                // line 121
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 121), "locale", [], "any", false, false, false, 121) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postExcerpt", [], "any", false, false, false, 121) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postExcerpt", [], "any", false, false, false, 121), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postTitle", [], "any", false, false, false, 121), "html", null, true);
                }
                // line 122
                yield "                                    </a>
                                </li>
                            ";
            }
            // line 125
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "                        <li class=\"list-group-item current-menu-item\">
                            <a class=\"prestation-list-item\" href=\"#\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.titre-menu"), "html", null, true);
        yield "</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-9 text-left\">
                    <h4>";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.titre-bloc"), "html", null, true);
        yield "</h4>
                    ";
        // line 133
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 133)) {
            // line 134
            yield "                        <p class=\"sub-head\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.sous-titre-bloc"), "html", null, true);
            yield "
                        <strong style=\"font-weight: 800\">Trust &amp; Market</strong>.
                    ";
        } else {
            // line 137
            yield "                        <p class=\"not-logged-msg\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.condition"), "html", null, true);
            yield "</p>
                    ";
        }
        // line 139
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 139)) {
            // line 140
            yield "                        <div class=\"feedback-div\">
                            <form method=\"POST\" class=\"form\" id=\"sendCommentEmail\"
                                  action=\"";
            // line 142
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_sendFeedbacks");
            yield "\">
                                <div class=\"feedback-box p-4\">
                                    <h5 style=\"font-size: 1.2rem; color: #333\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.label-menu-deroulant"), "html", null, true);
            yield "
                                        *</h5>
                                    <select required name=\"sujet\" id=\"remarkObject\"
                                            class=\"browser-default custom-select col-8 form-control rounded\">
                                        <option value=\"\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.choisir"), "html", null, true);
            yield "</option>
                                        <option value=\"Compte utilisateur\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.compte"), "html", null, true);
            yield "</option>
                                        <option value=\"Réservation/paiement\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.reservation"), "html", null, true);
            yield "</option>
                                        <option value=\"Annulation/Remboursement\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.annulation"), "html", null, true);
            yield "</option>
                                        <option value=\"Versement\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.versement"), "html", null, true);
            yield "</option>
                                        <option value=\"Design et Ergonomie\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.design"), "html", null, true);
            yield "</option>
                                        <option value=\"Technologique\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.technologie"), "html", null, true);
            yield "</option>
                                        <option value=\"Expériences utilisateurs\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.experience"), "html", null, true);
            yield "</option>
                                        <option value=\"Services aux utilisateurs\">";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.service"), "html", null, true);
            yield "</option>
                                        <option value=\"Bugs application\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.bug"), "html", null, true);
            yield "</option>
                                        <option value=\"Divers\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.menu-deroulant.divers"), "html", null, true);
            yield "</option>
                                    </select>

                                    <h5 class=\"mt-3\" style=\"font-size: 1.2rem; color:#333\">";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.texte"), "html", null, true);
            yield "
                                        *</h5>
                                    <textarea name=\"votre-message\" id=\"remarkMessage\" cols=\"80\" rows=\"10\"
                                              class=\"form-control mb-3\" placeholder=\"...\" required=\"\"></textarea>


                                    <div class=\"g-recaptcha\" data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\"
                                         data-action=\"TRUST_FEEDBACKS\"></div>
                                </div>

                                <div class=\"row below-form px-4\">
                                    ";
            // line 173
            yield "                                    <div class=\"col-md-6 text-right\">
                                        <input type=\"submit\" id=\"contacterNousButton\"
                                               value=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("feedback.envoyer"), "html", null, true);
            yield "\"
                                               class=\"btn btn-orange btn-md btn-primary rounded text-capitalize\">
                                    </div>
                                </div>
                            </form>
                        </div>
                    ";
        } else {
            // line 182
            yield "                        <a class=\"nav-link\"
                           href=\"";
            // line 183
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.menu.lien-inscription-connexion"), "html", null, true);
            yield "
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    ";
        }
        // line 187
        yield "                </div>
            </div>
        </div>
        ";
        // line 190
        yield from $this->loadTemplate("partials/project.html.twig", "experience/envoyez_commentaires.html.twig", 190)->unwrap()->yield($context);
        // line 191
        yield "        ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "experience/envoyez_commentaires.html.twig", 191)->unwrap()->yield($context);
        // line 192
        yield "    </main>
    <!--Main Layout-->

";
        yield from [];
    }

    // line 197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 198
        yield "        ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    ";
        yield from [];
    }

    // line 202
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 203
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

        <!-- jQuery plugin for datepicker -->
        <script src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
        <script src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
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

// Recherche avancer
                \$(\"#recherche-avancer\").click(function () {
                    \$(\"#sectionAvancer\").toggleClass('d-none');
                });

// first thing turn Hide Menu Search bar
                \$(\"#searchMenu\").hide();
// toggle menu search bar on/off
                \$(\"#searchMenuShowHide\").click(function () {
                    \$(\"#searchMenu\").toggle(\"slide\");
                });

// first thing turn Hide \"Autre besoin\" input field
                \$(\"#autresBesoins\").hide();
// toggle menu search bar on/off
                \$(\"#autres\").click(function () {
                    \$(\"#autresBesoins\").toggle(\"slide\");
                });


// For comments add

                \$('#sendCommentEmail').on('submit', function (e) { // On emp�che le navigateur de soumettre le formulaire
                    e.preventDefault();

                    \$('#contacterNousButton').addClass('running');
                    toastr.info(\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.requete-en-cours"), "html", null, true);
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
                        console.log(response)
                            if (response == 1) {
                                toastr.clear();
                                toastr.success('";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.succes"), "html", null, true);
        yield "');
                                window.location = \"\";
                            } else if (response == 0) {
                                \$('#contacterNousButton').removeClass('running');
                                toastr.clear();
                                toastr.error('";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.erreur"), "html", null, true);
        yield "');
                            }
                        },
                        error: function (response) {
                            \$('#contacterNousButton').removeClass('running');
                            toastr.clear();
                            toastr.error('";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.erreur"), "html", null, true);
        yield "');
                        }
                    });
                    return false;

                });

            });
            window.addEventListener('load', () => {
                const \$recaptcha = document.querySelector('#g-recaptcha-response');
                if (\$recaptcha) {
                    \$recaptcha.setAttribute('required', 'required');
                }
            })

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
        </script>

    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "experience/envoyez_commentaires.html.twig";
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
        return array (  581 => 280,  572 => 274,  564 => 269,  544 => 252,  499 => 210,  492 => 206,  485 => 203,  478 => 202,  469 => 198,  462 => 197,  454 => 192,  451 => 191,  449 => 190,  444 => 187,  435 => 183,  432 => 182,  422 => 175,  418 => 173,  404 => 161,  398 => 158,  394 => 157,  390 => 156,  386 => 155,  382 => 154,  378 => 153,  374 => 152,  370 => 151,  366 => 150,  362 => 149,  358 => 148,  351 => 144,  346 => 142,  342 => 140,  339 => 139,  333 => 137,  326 => 134,  324 => 133,  320 => 132,  312 => 127,  309 => 126,  303 => 125,  298 => 122,  292 => 121,  288 => 120,  284 => 118,  281 => 117,  277 => 116,  268 => 109,  261 => 108,  244 => 93,  237 => 92,  207 => 65,  201 => 62,  197 => 61,  193 => 60,  187 => 57,  180 => 54,  173 => 53,  161 => 51,  155 => 49,  140 => 36,  136 => 35,  130 => 31,  127 => 29,  123 => 27,  119 => 26,  114 => 24,  109 => 22,  105 => 20,  102 => 18,  98 => 16,  93 => 14,  88 => 12,  82 => 10,  77 => 7,  73 => 6,  69 => 5,  64 => 4,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "experience/envoyez_commentaires.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/experience/envoyez_commentaires.html.twig");
    }
}
