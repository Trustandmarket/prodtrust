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

/* descriptiveContent.html.twig */
class __TwigTemplate_f01ceb7dc2845edcdd4bb00738a4bbd4 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        yield "\">
<head>
    ";
        // line 4
        yield from $this->loadTemplate("tag-google.html.twig", "descriptiveContent.html.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "    ";
        yield from $this->loadTemplate("hotjar.html.twig", "descriptiveContent.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/logo_tm.svg"), "html", null, true);
        yield "\"/>
    <link rel=\"icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_new.svg")), "html", null, true);
        yield "\" sizes=\"32x32\"/>
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_tm.svg"), "html", null, true);
        yield "\"/>
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/topBtn.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">
    ";
        // line 21
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 26
        yield "
    <title> ";
        // line 27
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " </title>

    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 143
        yield "
    ";
        // line 144
        yield from $this->loadTemplate("pixelFacebook.html.twig", "descriptiveContent.html.twig", 144)->unwrap()->yield($context);
        // line 145
        yield "    ";
        yield from $this->loadTemplate("scriptautomatisationBrevo.html.twig", "descriptiveContent.html.twig", 145)->unwrap()->yield($context);
        // line 146
        yield "    ";
        yield from $this->loadTemplate("scriptchatBrevo.html.twig", "descriptiveContent.html.twig", 146)->unwrap()->yield($context);
        // line 147
        yield "</head>
<body style=\"width: 100%\">
";
        // line 149
        yield from $this->loadTemplate("facebook-support.html.twig", "descriptiveContent.html.twig", 149)->unwrap()->yield($context);
        // line 150
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 169
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 173
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 176
        yield "
";
        // line 177
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "        <!-- No Index for dev -->
        ";
        // line 23
        yield from $this->loadTemplate("Seo/Meta/noindex.html.twig", "descriptiveContent.html.twig", 23)->unwrap()->yield($context);
        // line 24
        yield "        <!-- No Index for dev -->
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
        yield "Trust &amp; Market";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
        <!-- Your custom styles (optional) -->
        <link href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
        ";
        // line 37
        yield from $this->loadTemplate("cssTemplates/chat.css.twig", "descriptiveContent.html.twig", 37)->unwrap()->yield($context);
        // line 38
        yield "        <style>
            #yourproject-iconed-link {
                display: block;
                position: fixed;
                width: 100px;
                height: 100px;
                background: url(\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/project-icon.png"), "html", null, true);
        yield "\") no-repeat center center transparent;
                bottom: 80px;
                right: 20px;
                z-index: 9999999999;
                background-size: cover;
                cursor: pointer;
                font-size: 0;
            }

            .view {
                height: 100%;
                background: url(";
        // line 55
        if (array_key_exists("contenu", $context)) {
            // line 56
            yield "\t\t\t";
            if (CoreExtension::inFilter("wp-content", CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "guid", [], "any", false, false, false, 56))) {
                // line 57
                yield "\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "guid", [], "any", false, false, false, 57), "html", null, true);
                yield "
\t\t\t";
            } else {
                // line 59
                yield "\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/a-propos/a-propos-header.jpg"), "html", null, true);
                yield "
\t\t\t";
            }
            // line 61
            yield "\t\t\t";
        }
        yield ") no-repeat left top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            /* .view {
                height: 100%;
                background: url(../img/a-propos/a-propos-header.jpg) no-repeat left top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            } */

            .image-header {
                width: 35px;
                height: 35px;
                object-fit: cover;
            }

            #dialoguons {
                bottom: 85px;
                right: 10%;
                position: fixed;
                z-index: 9999999999;
                background: white;
                border: 1px solid black;
                width: 19%;
                display: none;
            }

            @media only screen and (max-width: 500px) {
                #dialoguons {
                    width: 70%;
                }
            }

            @media only screen and (min-width: 501px) {
                #dialoguons {
                    width: 40%;
                }
            }

            @media only screen and (min-width: 769) and (max-width: 1024px) {
                #dialoguons {
                    width: 30%;
                }
            }

            @media only screen and (min-width: 1025px) {
                #dialoguons {
                    width: 19%;
                }
            }

            .p-pop-up1 {
                margin-bottom: 2rem;
            }

            .p-pop-titre1, .p-pop-titre2 {
                font-family: \"Palanquin Dark\";
            }

            .p-pop-content1 {
                background: #53b4a6;
                color: white;
                padding: 10px;
                text-decoration: none;
                font-family: \"Source Sans Pro\";
            }

            .p-pop-content2 {
                background: black;
                color: white;
                padding: 10px;
                text-decoration: none;
                font-family: \"Source Sans Pro\";
            }
        </style>
    ";
        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 151
        yield "    <!--Main Navigation-->
    <header style=\"\">
        ";
        // line 153
        yield from $this->loadTemplate("header-new-design.html.twig", "descriptiveContent.html.twig", 153)->unwrap()->yield($context);
        // line 154
        yield "        <div id=\"imageHolder\" class=\"view intro-2\">
            <div class=\"full-bg-img\">
                <div class=\"mask rgba-purple-light flex-center\">
                    <div class=\"container text-left align-items-end white-text wow fadeInUp\">
                        <h2 class=\"page-title\" style=\"color: #fff;\">
                            ";
        // line 159
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 162
        yield "                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
";
        yield from [];
    }

    // line 159
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 160
        yield "                                ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 160), "locale", [], "any", false, false, false, 160) == "en") && (CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 160) != ""))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "postExcerpt", [], "any", false, false, false, 160)), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["contenu"] ?? null), "getPostTitle", [], "any", false, false, false, 160)), "html", null, true);
        }
        // line 161
        yield "                            ";
        yield from [];
    }

    // line 169
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 170
        yield "    ";
        yield from $this->loadTemplate("partials/project.html.twig", "descriptiveContent.html.twig", 170)->unwrap()->yield($context);
        // line 171
        yield "    ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "descriptiveContent.html.twig", 171)->unwrap()->yield($context);
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
        yield from $this->loadTemplate("footer.html.twig", "descriptiveContent.html.twig", 174)->unwrap()->yield($context);
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
        yield "    <!-- JQuery -->
    ";
        // line 180
        yield "    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
    <!-- Bootstrap tooltips -->
    ";
        // line 183
        yield "    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"
            async></script>
    <!-- Bootstrap core JavaScript -->
    ";
        // line 187
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    ";
        // line 191
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js\"></script>
    <!-- Lazy load -->
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\" async></script>
    <script src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\" async></script>
    <script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
    ";
        // line 203
        yield from $this->loadTemplate("partials/js/top_button.html.twig", "descriptiveContent.html.twig", 203)->unwrap()->yield($context);
        // line 204
        yield "
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>

    ";
        // line 208
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 208) == "prod")) {
            // line 209
            yield "    ";
            yield from $this->loadTemplate("partials/js/cookie.js.twig", "descriptiveContent.html.twig", 209)->unwrap()->yield($context);
            // line 210
            yield "    ";
        }
        // line 211
        yield "    <script>
        \$(document).on(\"click\", \".linkContent\", function (e) {
            \$('.floatingMenu').fadeToggle();
        });

        ";
        // line 216
        yield from $this->loadTemplate("partials/js/videoButton.js.twig", "descriptiveContent.html.twig", 216)->unwrap()->yield($context);
        // line 217
        yield "
        \$(\".closeBtnModal\").click(function (e) {
            e.preventDefault();
            \$(\"#newsletterModal\").modal('toggle');
        });

        \$(document).click(function (event) {
            var target = \$(event.target);
            if (!target.closest('.linkContent').length && \$('.linkContent').is(':visible')) {
                \$('.floatingMenu').fadeOut();
            }
        });

        \$('.searchSelectPicker').selectpicker();

        \$(document).on(\"click\", \".homeFilterFormButton\", function (event) {
            event.preventDefault();
            var oldTexte = \$(this).text()
            \$(this).text(\"En cours...\")
            var whichForm = \$(this).attr('attr-form')
            var typePrestation = \$('.' + whichForm).find('select[name=\"type_prestation\"]').val()
            console.log(typePrestation);
            if (typePrestation == \"\") {
                \$(this).text(oldTexte)
                toastr.error('Veuillez sélectionner un type de prestation pour lancer la recherche.');
            } else {
                \$(this).text(oldTexte)
                \$('.' + whichForm).submit();
            }
        });

        grecaptcha.ready(function () {
            grecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2', {action: 'homepage'}).then(function (token) {
                document.getElementById(\"recaptchaResponse\").value = token;
            });
        });
        // Script to create user for newsletter

        \$('#newsletterForm').on('submit', function (e) {
            e.preventDefault();
            console.log(\$('#recaptchaResponse').val());


            if (\$('#recaptchaResponse').val()) {

                toastr.info('";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.attente"), "html", null, true);
        yield "');
                var \$form = \$(this);
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    success: function (reponse) {

                        if (reponse == 1) {
                            toastr.clear();
                            \$('#body').hide();
                            \$('#succes').show();
                            \$('html,body').scrollTop(0);
                            \$('#send').removeClass('running');
                            toastr.success('";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.succes"), "html", null, true);
        yield "');
                            \$('#newsletterModal').modal('toggle');
                        } else if (reponse == 0) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.email_occupe"), "html", null, true);
        yield "');
                        }
                    },
                    error: function (reponse) {
                        toastr.clear();
                        \$('#send').removeClass('running');
                        toastr.error('";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.echec"), "html", null, true);
        yield "');
                    }
                });
                return false;

            } else {
                toastr.warning('robot');
            }
        });
    </script>
    <script>
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });

            \$(\"#yourproject-iconed-link, #fermeur\").click(function (e) {
                e.preventDefault();
                \$(\"#dialoguons\").fadeToggle(\"slow\", \"linear\");
            });

// Date fields
            \$('.date_debut').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'dd-mm-yyyy',
                showRightIcon: false,
                iconsLibrary: 'fontawesome'
            });

            \$('.date_fin').datepicker({
                uiLibrary: 'bootstrap4',
                showRightIcon: false,
                format: 'dd-mm-yyyy',
                iconsLibrary: 'fontawesome'
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
            \$(\"#frLang\").hide();
// toggle language for English
            \$(\"#enLang\").click(function () {
                \$(\"#dropdownLang\").html(\"<span class='flag-icon flag-icon-us'> </span>  EN\");
                \$(\"#enLang\").hide();
                \$(\"#frLang\").toggle(\"slide\");
            });
// toggle language for French
            \$(\"#frLang\").click(function () {
                \$(\"#dropdownLang\").html(\"<span class='flag-icon flag-icon-fr'> </span>  FR\");
                \$(\"#frLang\").hide();
                \$(\"#enLang\").toggle(\"slide\");
            });

// background image slider
            \$('.fullBackground').fullClip({
                images: ['img/home-slider/home-slider-o1.png', 'img/home-slider/home-slider-o2.png',
\t\t\t\t\t'img/home-slider/home-slider-o3.png', 'img/home-slider/home-slider-o4.png', 'img/home-slider/home-slider-o5.png',
                    'img/home-slider/home-slider-o6.png', 'img/home-slider/home-slider-o7.png',
                    'img/home-slider/home-slider-o8.png', 'img/home-slider/home-slider-o9.png',
                    'img/home-slider/home-slider-o11.png', 'img/home-slider/home-slider-o12.png'],
                transitionTime: 1000,
                wait: 3000
            });
            \$(document).on('change', '.categorieParent', function (e) { // On empeche le navigateur de soumettre le formulaire

                e.preventDefault();
                var url1 = '";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 365), "get", ["_locale"], "method", false, false, false, 365), "html", null, true);
        yield "/home/sous_categorie?id=' + \$(this).val();
                toastr.info('Recherche des sous catégories...');
                \$.ajax({
                    url: url1,
                    type: 'get',
                    success: function (reponse) {
                        toastr.clear();
                        \$('.sous_category').removeAttr('disabled');

                        \$('.sous_category').html(reponse);
                    },
                    error: function (reponse) {
                        toastr.clear();
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
                \"showDuration\": \"300\",
                \"hideDuration\": \"1000\",
                \"timeOut\": \"30000\",
                \"extendedTimeOut\": \"1000\",
                \"showEasing\": \"swing\",
                \"hideEasing\": \"linear\",
                \"showMethod\": \"fadeIn\",
                \"hideMethod\": \"fadeOut\"
            }

        });
    </script>
    ";
        // line 404
        yield from $this->loadTemplate("partials/js/searchForm.html.twig", "descriptiveContent.html.twig", 404)->unwrap()->yield($context);
        // line 405
        yield "    <!-- End Lazy load -->
    ";
        // line 406
        yield from $this->loadTemplate("ws/script.html.twig", "descriptiveContent.html.twig", 406)->unwrap()->yield($context);
        // line 407
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "descriptiveContent.html.twig";
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
        return array (  682 => 407,  680 => 406,  677 => 405,  675 => 404,  633 => 365,  552 => 287,  543 => 281,  535 => 276,  518 => 262,  471 => 217,  469 => 216,  462 => 211,  459 => 210,  456 => 209,  454 => 208,  448 => 204,  446 => 203,  441 => 201,  437 => 200,  426 => 191,  421 => 187,  416 => 183,  412 => 180,  409 => 178,  402 => 177,  396 => 174,  389 => 173,  383 => 171,  380 => 170,  373 => 169,  368 => 161,  361 => 160,  354 => 159,  343 => 162,  341 => 159,  334 => 154,  332 => 153,  328 => 151,  321 => 150,  233 => 61,  227 => 59,  221 => 57,  218 => 56,  216 => 55,  202 => 44,  194 => 38,  192 => 37,  188 => 36,  184 => 35,  180 => 34,  175 => 32,  171 => 30,  164 => 29,  153 => 27,  147 => 24,  145 => 23,  142 => 22,  135 => 21,  130 => 177,  127 => 176,  125 => 173,  123 => 169,  121 => 150,  119 => 149,  115 => 147,  112 => 146,  109 => 145,  107 => 144,  104 => 143,  102 => 29,  97 => 27,  94 => 26,  92 => 21,  86 => 18,  76 => 11,  72 => 10,  68 => 9,  63 => 6,  60 => 5,  58 => 4,  53 => 2,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "descriptiveContent.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/descriptiveContent.html.twig");
    }
}
