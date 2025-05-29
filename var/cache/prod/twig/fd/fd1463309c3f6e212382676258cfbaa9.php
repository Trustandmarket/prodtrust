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

/* annonces/panier.html.twig */
class __TwigTemplate_f0cde86b5af1b67800c84b603a73c58a extends Template
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
            'pageTitle' => [$this, 'block_pageTitle'],
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
        $this->parent = $this->loadTemplate("otherLayout.html.twig", "annonces/panier.html.twig", 1);
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
        yield "    <link rel=\"icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png")), "html", null, true);
        yield "\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png")), "html", null, true);
        yield "\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
    <meta name=\"description\" content=\"";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "panier"]);
        yield "\">

";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust &amp; Market | ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "panier"]);
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- Material Design Bootstrap -->
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mdb.min.css")), "html", null, true);
        yield " \" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <!-- Your custom styles (optional) -->
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/cart.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">

    <style>
        .container-panier {
            min-height: padding: 10vh !important;
        }

        .panierResponsive {
            margin-bottom: 20%;
        }

        .addServ {
            position: relative;
            top: -2.1rem;
            right: 15rem;
            background-color: #54b4a6;
        }

        .addProd {
            position: relative;
            top: -4.2rem;
            right: 30rem;
            background-color: #54b4a6;
        }

        .disabled-link {
            color: gray;
            text-decoration: none;
            cursor: not-allowed;
        }
        @media only screen and (min-width: 2500px) {
            .panierResponsive {
                margin-bottom: 21%;
            }
        }

        @media only screen and (min-width: 1200px) {
            .addServ {
                right: 19rem !important;
            }

            .addProd {
                right: 38rem !important;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 900px) {
            .addServ {
                top: -3.1rem !important;
                right: 12rem !important;
                background-color: #54b4a6 !important;
                padding: 17px !important;
            }


            .addProd {
                top: -6.4rem !important;
                right: 24rem !important;
                background-color: #54b4a6 !important;
                padding: 17px !important;
            }
        }

        @media only screen and (max-width: 767px) {
            .addServ {
                top: 0.8rem !important;
                right: 0rem !important;
                background-color: #54b4a6 !important;
                padding: 10px !important;
                margin-bottom: 0.8rem !important;
            }

            .addProd {
                top: 0.8rem !important;
                right: 0rem !important;
                background-color: #54b4a6 !important;
                padding: 10px !important;
            }
        }
    </style>

";
        yield from [];
    }

    // line 112
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 113
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 117
        yield "    ";
        yield from $this->yieldParentBlock("navigation", $context, $blocks);
        yield "
    ";
        // line 118
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 122
        yield "    <!--Main Layout-->
    <div class=\"flex-fill container panierResponsive\">

        <main class=\"p-5\">
            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["notice"], "method", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 127
            yield "                <div class=\"col-md-12 alert alert-warning alert-dismissible fade show\" role=\"alert\">
                    <strong>";
            // line 128
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
        // line 134
        yield "
            <div class=\"row title-area\">
                <div class=\"col-md-6\">
                    <h2>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.titre"), "html", null, true);
        yield "</h2>
                </div>
                <div class=\"offset-md-2 col-md-4\">
                    <p class=\"fs-14\">";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.message");
        yield "</p>
                </div>
            </div>
            <div class=\"row mt-2\">
                <!-- For large screens -->
                <div class=\"table-responsive large-screens\">
                    <table class=\"table\">
                        <thead class=\"primary-bg white-text\">
                        <tr>
                            <th scope=\"col\" class=\"text-center fs-18 th-sm\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.tableau.annonces"), "html", null, true);
        yield "</th>
                            <th scope=\"col\" class=\"text-center fs-18 th-sm\">";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.tableau.vendu-par"), "html", null, true);
        yield "</th>
                            <th scope=\"col\" class=\"text-center fs-18 th-sm\">";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.tableau.prix/u"), "html", null, true);
        yield "</th>
                            <th scope=\"col\" class=\"text-center fs-18 th-sm\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.tableau.quantite"), "html", null, true);
        yield "</th>
                            <th scope=\"col\" class=\"text-center fs-18 th-sm\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.tableau.total"), "html", null, true);
        yield "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 158
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["panier"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 159
            yield "
                            <tr>
                                <td class=\"td-announce align-middle custom-bg border-right border-top border-white\">
                                    <div class=\"row\">
                                        <div class=\"col-md-4\">
                                            <p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"-ref\">Ref:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 166), "html", null, true);
            yield "</span>
                                            </p>
                                            <a href=\"#\">
                                                <img src=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 169), "html", null, true);
            yield "\" alt=\"\" style=\"width:100%\">
                                            </a>
                                        </div>
                                        <div class=\"col-md-8 text\">
                                            ";
            // line 173
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 173) == "ops_speciale_article")) {
                // line 174
                yield "                                                <p class=\"fs-14\">
                                                    <span class=\"ref-element\"
                                                          style=\"color: #ee7c32;\">";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "sousCategorie", [], "any", false, false, false, 176), "html", null, true);
                yield "</span><br>
                                                    <span class=\"ref-element\">";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "libelle", [], "any", false, false, false, 177), "html", null, true);
                yield "</span><br>
                                                    <span class=\"ref-element\">@trustandmarket</span>
                                                </p>
                                            ";
            } else {
                // line 181
                yield "                                                <p class=\"fs-14\">
                                                    <span class=\"ref-element\">";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "libelle", [], "any", false, false, false, 182), "html", null, true);
                yield "</span><br>
                                                    <span class=\"location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker primary-colour\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "adresse", [], "any", false, false, false, 185), "html", null, true);
                yield "</span>
                                                </p>
                                            ";
            }
            // line 188
            yield "                                        </div>
                                    </div>
                                </td>
                                <td class=\"align-middle custom-bg border-right border-top border-white\">
                                    ";
            // line 192
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 192) == "ops_speciale_article")) {
                // line 193
                yield "                                        <p class=\"text-center\"><span style=\"color: #ee7c32;\">Trust&Market</span><br>
                                            KBR GLOBAL<br>
                                            serviceclients@kbr-global.com</p>
                                    ";
            } else {
                // line 197
                yield "                                        <p class=\"text-center\">
                                            ";
                // line 198
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "donnees_vendeur", [], "any", false, false, false, 198));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 199
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                    yield "<br>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                yield "                                        </p>
                                    ";
            }
            // line 203
            yield "                                </td>
                                <td class=\"align-middle custom-bg border-right border-top border-white\">
                                    <p class=\"text-center primary-colour\">";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "prixu", [], "any", false, false, false, 205), "html", null, true);
            yield "
                                        ";
            // line 206
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "devise", [], "any", false, false, false, 206) != "")) {
                // line 207
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "devise", [], "any", false, false, false, 207), "html", null, true);
            } else {
                yield "€
                                        ";
            }
            // line 209
            yield "                                    </p>
                                </td>
                                <td class=\"align-middle custom-bg border-right border-top border-white\">
                                    <p class=\"text-center fs-14\">
                                        <span class=\"primary-colour\">X";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "qte", [], "any", false, false, false, 213), "html", null, true);
            yield ":</span>
                                        <br>";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "dates", [], "any", false, false, false, 214), "html", null, true);
            yield "</p>
                                </td>
                                <td class=\"total-p align-middle border-top border-white\">
                                    <p class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"white-text fs-18\">";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "qte", [], "any", false, false, false, 218) * CoreExtension::getAttribute($this->env, $this->source, $context["p"], "prixu", [], "any", false, false, false, 218)), "html", null, true);
            yield "
                                                ";
            // line 219
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "devise", [], "any", false, false, false, 219) != "")) {
                // line 220
                yield "                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "devise", [], "any", false, false, false, 220), "html", null, true);
            } else {
                yield "€
                                                ";
            }
            // line 222
            yield "\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </p>
                                    <div class=\"d-flex text-center\">
                                        <div class=\"col-md-6 px-1\">
                                            <a href=\"";
            // line 226
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 226) == "ops_speciale_article")) {
                yield "#";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 226), "etat" => "edition"]), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 227
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.tableau.bouton-editer"), "html", null, true);
            yield "\">
                                                <i class=\"fas fa-edit white-text fs-20\"></i>
                                            </a>
                                        </div>
                                        <div class=\"col-md-6 px-1\">
                                            <a href=\"";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_deleteitem", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 232)]), "html", null, true);
            yield "\"
                                               title=\"";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.tableau.bouton-supprimer"), "html", null, true);
            yield "\" class=\"delete\">
                                                <i class=\"fas fa-trash-alt white-text fs-20\"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        yield "                        </tbody>
                    </table>
                </div>
                <!-- For small screens -->
                <div class=\"table-responsive mobile-screens\">
                    <table class=\"table\">
                        <tbody>
                        ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["panier"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 250
            yield "                            <tr>
                                <td id=\"mobileTable\"
                                    class=\"td-announce align-middle custom-bg border-right border-top border-white\">
                                    ";
            // line 253
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 253) == "ops_speciale_article")) {
                // line 254
                yield "                                        <div class=\"col-md-12\">
                                            <span class=\"ref-element fs-16\"
                                                  style=\"color: #ee7c32;\">";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "sousCategorie", [], "any", false, false, false, 256), "html", null, true);
                yield "</span>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <span class=\"ref-element fs-16\">";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "libelle", [], "any", false, false, false, 259), "html", null, true);
                yield "</span>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <span class=\"ref-element fs-16\">@trustandmarket</span>
                                        </div>
                                    ";
            } else {
                // line 265
                yield "                                        <div class=\"col-md-12\">
                                            <span class=\"ref-element fs-16\">";
                // line 266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "libelle", [], "any", false, false, false, 266), "html", null, true);
                yield "</span>
                                        </div>
                                        <div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker primary-colour\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 271
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "adresse", [], "any", false, false, false, 271), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        </div>
                                    ";
            }
            // line 275
            yield "                                    <div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Ref:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 278), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t</span>&nbsp;
                                        <span class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>Prix/u:</strong>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 282
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "prixu", [], "any", false, false, false, 282), "html", null, true);
            yield "
                                            ";
            // line 283
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "devise", [], "any", false, false, false, 283) != "")) {
                // line 284
                yield "                                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "devise", [], "any", false, false, false, 284), "html", null, true);
            } else {
                yield "€
                                            ";
            }
            // line 286
            yield "\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                    <div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.tableau.vendu-par"), "html", null, true);
            yield ": </strong>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        ";
            // line 292
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 292) == "ops_speciale_article")) {
                // line 293
                yield "                                            <span class=\"location\">
\t\t\t\t\t\t\t\t\t\t\t\tTrust&Market<br>
\t\t\t\t\t\t\t\t\t\t\t\tKBR GLOBAL<br>
\t\t\t\t\t\t\t\t\t\t\t\tserviceclients@kbr-global.com
\t\t\t\t\t\t\t\t\t\t\t</span>
                                        ";
            } else {
                // line 299
                yield "                                            <span class=\"location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 300
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "donnees_vendeur", [], "any", false, false, false, 300));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 301
                    yield "                                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                    yield "<br>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 303
                yield "\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                        ";
            }
            // line 305
            yield "                                    </div>
                                    <div class=\"d-flex pt-2\">
                                        <div class=\"col-md-4\">
                                            <a href=\"#\">
                                                <img src=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 309), "html", null, true);
            yield "\" alt=\"\" style=\"width:100%\">
                                            </a>
                                        </div>
                                        <div class=\"col-md-8 text\">
                                            <p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>Qté - Dates</strong>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span><br>
                                                <span class=\"fs-12\">X";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "qte", [], "any", false, false, false, 317), "html", null, true);
            yield ":
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "dates", [], "any", false, false, false, 318), "html", null, true);
            yield "</span>
                                            <h6>Total:
                                                <span>";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "qte", [], "any", false, false, false, 320) * CoreExtension::getAttribute($this->env, $this->source, $context["p"], "prixu", [], "any", false, false, false, 320)), "html", null, true);
            yield "
                                                    ";
            // line 321
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "devise", [], "any", false, false, false, 321) != "")) {
                // line 322
                yield "                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "devise", [], "any", false, false, false, 322), "html", null, true);
            } else {
                yield "€
                                                    ";
            }
            // line 324
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </h6>
                                            <div class=\"row pl-3\">
                                                <div class=\"d-flex flex-row-reverse col-12\">
                                                    <div>
                                                        <a href=\"";
            // line 329
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_deleteitem");
            yield "\" title=\"Supprimer\"
                                                           class=\"delete\">
                                                            <i class=\"fas fa-trash-alt primary-colour fs-20\"></i>
                                                        </a>
                                                    </div>&nbsp;&nbsp;
                                                    <div>
                                                        <a href=\"";
            // line 335
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "categorie", [], "any", false, false, false, 335) != "ops_speciale_article")) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_detailsAnnonce", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 335), "etat" => "edition"]), "html", null, true);
            } else {
                yield "#";
            }
            yield "\"
                                                           title=\"Modifier\">
                                                            <i class=\"fas fa-edit primary-colour fs-20\"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        yield "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"row gross-total-area mt-6\">
                <div class=\"offset-md-8 col-md-4\">
                    <div class=\"table-responsive\">
                        <table class=\"table\">
                            <tbody>
                            <tr>
                                <th scope=\"row\" class=\"align-middle border-top-0 fs-14\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<h2>";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.recapitulatif-tableau.total"), "html", null, true);
        yield "</h2>
\t\t\t\t\t\t\t\t\t\t</span>
                                </th>
                                <td class=\"text-right border-top-0 mt-final\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-16\">
\t\t\t\t\t\t\t\t\t\t";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prixTotal"] ?? null), "html", null, true);
        yield "
                                            ";
        // line 366
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["panier"] ?? null)) > 0)) {
            // line 367
            yield "                                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["panier"] ?? null), 0, [], "any", false, false, false, 367), "devise", [], "any", false, false, false, 367) != "")) {
                // line 368
                yield "                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["panier"] ?? null), 0, [], "any", false, false, false, 368), "devise", [], "any", false, false, false, 368), "html", null, true);
            } else {
                yield "€
                                                ";
            }
            // line 370
            yield "                                            ";
        } else {
            // line 371
            yield "                                                €
                                            ";
        }
        // line 373
        yield "\t\t\t\t\t\t\t\t\t\t</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope=\"row\" class=\"align-middle fs-14\"></th>
                                <td class=\"text-right\"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=\"col-md-12\">
                        <a ";
        // line 384
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["panier"] ?? null)) != 0)) {
            yield "href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_payment");
            yield "\"";
        }
        yield " id=\"disabled-link\"
                           class=\"disabled-link btn btn-sm btn-block primary-bg white-text commander rounded\">";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.recapitulatif-tableau.bouton-commande"), "html", null, true);
        yield "
                        </a>
                        <a href=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "photographe", "services_proposes" => "", "code_postal_ville" => "", "noPage" => 1]), "html", null, true);
        yield "\"
                           class=\"btn btn-sm btn-block primary-bg white-text commander rounded addServ\">";
        // line 388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.recapitulatif-tableau.addServ"), "html", null, true);
        yield "
                        </a>
                        <a href=\"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_listeAnnonces", ["type_prestation" => "produits", "services_proposes" => "", "code_postal_ville" => "", "noPage" => 1]), "html", null, true);
        yield "\"
                           class=\"btn btn-sm btn-block primary-bg white-text commander rounded addProd\">";
        // line 391
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("panier.recapitulatif-tableau.ajouter_produits"), "html", null, true);
        yield "
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>


    <!--Main Layout-->
";
        yield from [];
    }

    // line 403
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 404
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 407
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 408
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- jQuery plugin for date picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js\"></script>
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>

    <script src=\"";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>


    <script>
        \$(document).ready(function () {
            let docWidth = document.documentElement.offsetWidth;
            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });
            document.getElementById('disabled-link').addEventListener('click', function (e) {
                e.preventDefault(); // Prevents navigation
                toastr.warning(\"Le paiement en ligne sera disponible bientôt!\");
            });

            // Lazy Loading initializer
            \$(function () {
                \$('.lazy').lazy();
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
            // Tooltips Initialization
            \$('[data-toggle=\"tooltip\"]').tooltip()

            toastr.options = {
                \"closeButton\": true,
                \"debug\": false,
                \"newestOnTop\": false,
                \"progressBar\": true,
                \"positionClass\": \"toast-top-center\",
                \"preventDuplicates\": false,
                \"onclick\": null,
                \"showDuration\": \"2000\",
                \"closeDuration\": \"2000\",
                \"timeOut\": \"2200\",
                \"extendedTimeOut\": \"2400\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }
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
        return "annonces/panier.html.twig";
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
        return array (  881 => 419,  877 => 418,  873 => 417,  860 => 408,  853 => 407,  845 => 404,  838 => 403,  822 => 391,  818 => 390,  813 => 388,  809 => 387,  804 => 385,  796 => 384,  783 => 373,  779 => 371,  776 => 370,  769 => 368,  766 => 367,  764 => 366,  760 => 365,  752 => 360,  738 => 348,  715 => 335,  706 => 329,  699 => 324,  692 => 322,  690 => 321,  686 => 320,  681 => 318,  677 => 317,  666 => 309,  660 => 305,  656 => 303,  647 => 301,  643 => 300,  640 => 299,  632 => 293,  630 => 292,  625 => 290,  619 => 286,  612 => 284,  610 => 283,  606 => 282,  599 => 278,  594 => 275,  587 => 271,  579 => 266,  576 => 265,  567 => 259,  561 => 256,  557 => 254,  555 => 253,  550 => 250,  546 => 249,  537 => 242,  522 => 233,  518 => 232,  509 => 227,  501 => 226,  495 => 222,  488 => 220,  486 => 219,  482 => 218,  475 => 214,  471 => 213,  465 => 209,  458 => 207,  456 => 206,  452 => 205,  448 => 203,  444 => 201,  435 => 199,  431 => 198,  428 => 197,  422 => 193,  420 => 192,  414 => 188,  408 => 185,  402 => 182,  399 => 181,  392 => 177,  388 => 176,  384 => 174,  382 => 173,  375 => 169,  369 => 166,  360 => 159,  355 => 158,  348 => 153,  344 => 152,  340 => 151,  336 => 150,  332 => 149,  320 => 140,  314 => 137,  309 => 134,  297 => 128,  294 => 127,  290 => 126,  284 => 122,  277 => 121,  263 => 118,  258 => 117,  251 => 116,  243 => 113,  236 => 112,  149 => 29,  144 => 27,  140 => 26,  136 => 25,  131 => 23,  127 => 22,  122 => 20,  114 => 16,  107 => 15,  95 => 14,  87 => 11,  83 => 10,  78 => 8,  72 => 5,  66 => 3,  59 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "annonces/panier.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/annonces/panier.html.twig");
    }
}
