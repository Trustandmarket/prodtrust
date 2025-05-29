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

/* experience/index.html.twig */
class __TwigTemplate_12ba6671d4375bcab95b1f0f566ba46a extends Template
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
        $this->parent = $this->loadTemplate("descriptiveContent.html.twig", "experience/index.html.twig", 1);
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "nous-contacter"]);
        yield "\">
    <meta name=\"description\" content=\"";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "nous-contacter"]);
        yield "\">
    <link rel=\"canonical\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_index")), "html", null, true);
        yield "\">

    ";
        // line 10
        yield "    <meta property=\"og:title\" content=\"";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "nous-contacter"]);
        yield "\">
    <meta property=\"og:description\" content=\"";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "nous-contacter"]);
        yield "\">
    <meta property=\"og:image\"
          content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_index")), "html", null, true);
        yield "\">
    ";
        // line 17
        yield "
    ";
        // line 19
        yield "    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:site\" content=\"@trustandmarket\">
    <meta name=\"twitter:title\" content=\"";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "nous-contacter"]);
        yield "\">
    <meta name=\"twitter:description\"
          content=\"";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "nous-contacter"]);
        yield "\">
    <meta name=\"twitter:image\"
          content=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\">
    <meta name=\"twitter:image:alt\" content=\"";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "nous-contacter"]);
        yield "\">
    ";
        // line 28
        yield "
    ";
        // line 30
        yield "    <script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"WebPage\",
\t\t\"name\": \"";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "nous-contacter"]);
        yield "\",
\t\t\"description\": \"";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "nous-contacter"]);
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "nous-contacter"]);
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <!-- Your custom styles (optional) -->
    <link rel=\"stylesheet\" href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-apropos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <style>
        #g-recaptcha-response {
            display: block !important;
            position: absolute;
            margin: -78px 0 0 0 !important;
            width: 302px !important;
            height: 55px !important;
            z-index: -999999;
            opacity: 0;
        }

        .g-recaptcha, .desc-proj{
            margin-left: 14px;
        }
        /* Solid border */
        hr.solid {
        border-top: 2px solid #bbb;
        }
    </style>
";
        yield from [];
    }

    // line 83
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 84
        yield "    <div id=\"imageHolder\" class=\"view intro-2\">
        <div class=\"full-bg-img\">
            <div class=\"mask rgba-purple-light flex-center\">
                <div class=\"container text-left align-items-end white-text wow fadeInUp\">
                    <h2 class=\"page-title\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nous-contacter.titre"), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
    </div>

";
        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 97
        yield "    <!--Main Layout-->
    <div class=\"flex-fill container\" style=\"margin-top: 3rem;\">
        <main class=\"\">

            <div class=\"container\">

                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <ul class=\"list-group text-left\">
                            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sous_menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m1"]) {
            // line 107
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "id", [], "any", false, false, false, 107) != 480)) {
                // line 108
                yield "                                    <li class=\"list-group-item list-group-flush \">
                                        <a class=\"prestation-list-item\"
                                           href=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => "a-propos", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postName", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\">
                                            ";
                // line 111
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 111), "locale", [], "any", false, false, false, 111) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postExcerpt", [], "any", false, false, false, 111) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postExcerpt", [], "any", false, false, false, 111), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["m1"], "postTitle", [], "any", false, false, false, 111), "html", null, true);
                }
                // line 112
                yield "                                        </a>
                                    </li>
                                ";
            }
            // line 115
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        yield "                            <li class=\"list-group-item current-menu-item\">
                                <a class=\"prestation-list-item\" href=\"#\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nous-contacter.titre"), "html", null, true);
        yield "</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"col-md-9 text-left\">
                    <h2>PRENEZ RDV AVEC UN EXPERT </h2>
                    <iframe frameborder=\"0\" width=\"100%\" height=\"720\" src=\"https://meet.brevo.com/trustandmarket/borderless?l=calendrier-trust-\"></iframe>
                        <hr class=\"solid my-4\">
                        <!-- Default horizontal form -->
                        <form class=\"mt-1\" id=\"sendCommentEmail\" action=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_sendComment");
        yield "\" method=\"POST\">
                            <h2 class=\"desc-proj\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nous-contacter.titre-formulaire"), "html", null, true);
        yield "</h2>
                            <div class=\"form-group\">
                                <label for=\"\" class=\"col-sm-2 col-form-label\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nous-contacter.nom"), "html", null, true);
        yield "*</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"nom\" name=\"nom\" placeholder=\"\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"\" class=\"col-sm-2 col-form-label\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nous-contacter.email"), "html", null, true);
        yield "
                                    *</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required
                                           placeholder=\"\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label for=\"\"
                                       class=\"col-sm-2 col-form-label\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nous-contacter.message"), "html", null, true);
        yield "</label>
                                <div class=\"col-sm-10\">
                                    <textarea class=\"form-control\" id=\"message\" cols=\"30\" rows=\"10\" name=\"message\"
                                              required></textarea>
                                </div>
                            </div>
                            <div class=\"g-recaptcha\" margin=\"0 auto\"
                                 data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\"
                                 data-action=\"TRUST_CONTACT_US\"></div>
                            <br/>
                            <div class=\"form-group\">
                                <div class=\"col-sm-10\">
                                    <button id=\"contacterNousButton\" type=\"submit\"
                                            class=\"btn btn-primary btn-md\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("nous-contacter.envoyer"), "html", null, true);
        yield "</button>
                                </div>
                            </div>
                        </form>
                        <!-- Default horizontal form -->
                    </div>
                </div>
            </div>
            ";
        // line 167
        yield from $this->loadTemplate("assistance.html.twig", "experience/index.html.twig", 167)->unwrap()->yield($context);
        // line 168
        yield "        </main>
    </div>
    <!--Main Layout-->
";
        yield from [];
    }

    // line 173
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 174
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 178
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
    <script src=\"";
        // line 183
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
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.requete-en-cours"), "html", null, true);
        yield "\");
                let \$form = \$(this);
                let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                let data = (formdata !== null) ? formdata : \$form.serialize();
                console.log(data);
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
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.succes"), "html", null, true);
        yield "\");
                            window.location = \"\";
                        } else if (response == 0) {
                            \$('#contacterNousButton').removeClass('running');
                            toastr.clear();
                            toastr.error(\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.erreur"), "html", null, true);
        yield "\");
                        }
                    },
                    error: function (reponse) {
                        \$('#contacterNousButton').removeClass('running');
                        toastr.clear();
                        toastr.error(\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("systeme.email.erreur"), "html", null, true);
        yield "\");
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
        return "experience/index.html.twig";
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
        return array (  495 => 246,  486 => 240,  478 => 235,  461 => 221,  420 => 183,  414 => 180,  408 => 178,  401 => 177,  393 => 174,  386 => 173,  378 => 168,  376 => 167,  365 => 159,  349 => 146,  336 => 136,  326 => 129,  321 => 127,  317 => 126,  305 => 117,  302 => 116,  296 => 115,  291 => 112,  285 => 111,  281 => 110,  277 => 108,  274 => 107,  270 => 106,  259 => 97,  252 => 96,  240 => 88,  234 => 84,  227 => 83,  201 => 61,  197 => 60,  193 => 59,  187 => 56,  180 => 53,  173 => 52,  161 => 51,  155 => 49,  139 => 35,  135 => 34,  129 => 30,  126 => 28,  122 => 26,  118 => 25,  113 => 23,  108 => 21,  104 => 19,  101 => 17,  97 => 15,  92 => 13,  87 => 11,  82 => 10,  77 => 7,  73 => 6,  69 => 5,  64 => 4,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "experience/index.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/experience/index.html.twig");
    }
}
