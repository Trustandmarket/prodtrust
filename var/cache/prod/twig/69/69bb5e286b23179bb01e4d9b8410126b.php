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

/* newsletter/result.html.twig */
class __TwigTemplate_fa2cd2a5a385c10db218079a030a541d extends Template
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
        $this->parent = $this->loadTemplate("otherLayout.html.twig", "newsletter/result.html.twig", 1);
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
    <meta name=\"title\" content=\"Trust &amp; Market | ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "enregistrement-newsletter"]);
        yield "\">
    <meta name=\"description\"
          content=\"";
        // line 15
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "enregistrement-newsletter"]);
        yield "\">
    <link rel=\"canonical\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter")), "html", null, true);
        yield "\">
    <link rel=\"shortlink\" href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter");
        yield "\">
    ";
        // line 19
        yield "    <meta property=\"og:title\" content=\"Trust &amp; Market |\t";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "enregistrement-newsletter"]);
        yield "\">
    <meta property=\"og:description\"
          content=\"";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "enregistrement-newsletter"]);
        yield "\">
    <meta property=\"og:image\"
          content=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\">
    <meta propery=\"og:type\" content=\"website\">
    ";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "    Trust &amp; Market | ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "enregistrement-newsletter"]);
        yield "
";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\" ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <!-- Custom css for camroll -->
    <link href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/camroll/camroll_slider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/mon-profil.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 43
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

        .page-title {
            font-family: 'Palanquin Dark';
            font-weight: bold;
        }

        .newsletter-form {
            width: 50%;
        }

        .description-response {
            font-family: 'Source Sans Pro';
        }

        .vertical-center {
            margin-top: 7.5rem;
        }

        /* For Desktop View */
        @media screen and (min-width: 1024px) {
            #dialoguons {
                width: 19%;
            }

            .newsletter-form {
                width: 50%;
            }
        }

        /* For Tablet View */
        @media screen and (min-device-width: 768px)
        and (max-device-width: 1024px) {
            #dialoguons {
                width: 30%;
            }

            .newsletter-form {
                width: 70%;
            }

            .playVideoButton {
                width: 70px !important;
                height: 70px !important;
            }
        }

        /* For Mobile Portrait View */
        @media screen and (max-device-width: 480px)
        and (orientation: portrait) {
            #dialoguons {
                width: 70%;
            }

            .newsletter-form {
                width: 90%;
            }

            .playVideoButton {
                width: 50px !important;
                height: 50px !important;
            }

            .vertical-center {
                margin-top: 4rem;
            }
        }

        /* For Mobile Landscape View */
        @media screen and (max-device-width: 640px)
        and (orientation: landscape) {
            #dialoguons {
                width: 40%;
            }

            .newsletter-form {
                width: 85%;
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

            .newsletter-form {
                width: 85%;
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

            .newsletter-form {
                width: 70%;
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

            .newsletter-form {
                width: 90%;
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

            .newsletter-form {
                width: 70%;
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

    // line 210
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 211
        yield "    ";
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "
";
        yield from [];
    }

    // line 214
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 216
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 217
        yield "    <!--Main Layout-->
    <main class=\"\">
        <div class=\"container\">
            <div class=\"vertical-center\">
                <div class=\"d-flex justify-content-center py-4\"><i class=\"far fa-check-circle fa-5x\"
                                                                   style=\"color: #6bc115;\"></i></div>
                <h1 class=\"text-center page-title p-2\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.titre-page-reponse"), "html", null, true);
        yield "</h1>
                <p class=\"row d-flex justify-content-center m-auto description-response px-2 py-4\">Continuez votre
                    experience sur TRUST&MARKET. Créez
                    votre profil et découvrez notre univers.</p>

                <div class=\"row d-flex justify-content-center m-auto p-2\">
                    <a href=\"";
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        yield "\">
                        <button type=\"button\" class=\"btn btn-success btn-round\"
                                style=\"background-color: #008779 !important;\">ACCUEIL
                        </button>
                    </a>
                    <a href=\"";
        // line 234
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                        <button type=\"button\" class=\"btn btn-primary btn-round\">S'INSCRIRE</button>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <!--Main Layout-->

    ";
        // line 243
        yield from $this->loadTemplate("partials/project.html.twig", "newsletter/result.html.twig", 243)->unwrap()->yield($context);
        // line 244
        yield "    ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "newsletter/result.html.twig", 244)->unwrap()->yield($context);
        yield from [];
    }

    // line 248
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 249
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        yield from [];
    }

    // line 253
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 254
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js")), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for camroll slider -->
    <script type=\"text/javascript\" src=\"";
        // line 259
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


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "newsletter/result.html.twig";
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
        return array (  463 => 259,  458 => 257,  453 => 255,  448 => 254,  441 => 253,  432 => 249,  425 => 248,  419 => 244,  417 => 243,  405 => 234,  397 => 229,  388 => 223,  380 => 217,  373 => 216,  363 => 214,  355 => 211,  348 => 210,  177 => 43,  173 => 42,  169 => 41,  165 => 40,  160 => 38,  155 => 36,  148 => 33,  141 => 32,  133 => 29,  126 => 28,  118 => 23,  113 => 21,  107 => 19,  103 => 17,  99 => 16,  95 => 15,  90 => 13,  86 => 12,  81 => 10,  75 => 7,  70 => 5,  65 => 4,  58 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "newsletter/result.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/newsletter/result.html.twig");
    }
}
