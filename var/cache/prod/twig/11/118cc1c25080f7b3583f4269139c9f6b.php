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

/* homeLayout.html.twig */
class __TwigTemplate_802ad78e9ddfaa5f5c6411a202402a7f extends Template
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
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "getLocale", [], "method", false, false, false, 3), "html", null, true);
        yield "\">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    ";
        // line 6
        yield from $this->loadTemplate("tag-google.html.twig", "homeLayout.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    ";
        yield from $this->loadTemplate("hotjar.html.twig", "homeLayout.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <!-- No Index for dev -->
    ";
        // line 12
        yield from $this->loadTemplate("Seo/Meta/noindex.html.twig", "homeLayout.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "    <!-- No Index for dev -->
    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 15
        yield "    <title>";
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    ";
        // line 16
        yield from $this->unwrap()->yieldBlock('style', $context, $blocks);
        // line 44
        yield "    ";
        yield from $this->loadTemplate("pixelFacebook.html.twig", "homeLayout.html.twig", 44)->unwrap()->yield($context);
        // line 45
        yield "    ";
        yield from $this->loadTemplate("scriptautomatisationBrevo.html.twig", "homeLayout.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "    ";
        yield from $this->loadTemplate("scriptchatBrevo.html.twig", "homeLayout.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "</head>
<body class=\"homeLayout\">
";
        // line 49
        yield from $this->loadTemplate("facebook-support.html.twig", "homeLayout.html.twig", 49)->unwrap()->yield($context);
        // line 50
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 54
        yield "
    ";
        // line 55
        yield from $this->unwrap()->yieldBlock('navigation', $context, $blocks);
        // line 117
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 121
        yield "
";
        // line 122
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 125
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 417
        yield "</body>
</html>
";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust &amp; Market";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <!-- Bootstrap core CSS -->
        <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">
        <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/result.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">

        ";
        // line 30
        yield from $this->loadTemplate("cssTemplates/mediaHomeQuery.css.twig", "homeLayout.html.twig", 30)->unwrap()->yield($context);
        // line 31
        yield "        ";
        yield from $this->loadTemplate("cssTemplates/chat.css.twig", "homeLayout.html.twig", 31)->unwrap()->yield($context);
        // line 32
        yield "
        <style>
            @media only screen and (max-width: 768px) {
                .homeLayout main.py-5 {
                    padding-top: 0rem !important;
                    position: relative;
                    top: -3rem;
                }
            }
        </style>

    ";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "<header style=\"height: 100%;\">
    ";
        // line 52
        yield from $this->loadTemplate("header-new-design.html.twig", "homeLayout.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "    ";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "
    <div id=\"imageHolder\"
         class=\"view intro-2\" ";
        // line 58
        yield ">
        <div class=\"full-bg-img\" style=\"height: 100%;\">
            <div id=\"background-img\"
                 style=\"background-image: url('";
        // line 61
        if (($context["bloc10"] ?? null)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["bloc10"] ?? null), "optionValue", [], "any", false, false, false, 61), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/prestations/cover.jpg"), "html", null, true);
        }
        yield "');align-items: center;height: 100%;display: flex;position:relative;justify-content: start;flex-direction: column;\"
                 class=\"mask rgba-purple-light flex-center fullBackground pt-5 searchFilterDiv\">
                <div class=\"col-md-3 col-lg-3 col-xl-3 col-12 custom-filter ml-4 mt-5 mobile_filter\" id=\"custom-filter\" style=\"display:none;width: 360px;max-width: 100%;\">
                    <div class=\"bloc_blanc\">
                        <div class=\"container\" style=\"padding: 0px;\">
                            <div class=\"search-title-mob\">";
        // line 66
        if ((array_key_exists("slogan_homepage", $context) && ($context["slogan_homepage"] ?? null))) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["slogan_homepage"] ?? null), "getOptionValue", [], "any", false, false, false, 66);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.texte.slogan"), "html", null, true);
        }
        yield "</div>
                        </div>
                    </div>
                </div>
                <div class=\"titre_filter\" style=\"margin-bottom: 1rem;margin-top: 4rem; color: white\">
                    <h1 class=\"titreFromTitreFilter\" style=\"text-align: center;font-family: 'Palanquin Dark',sans-serif !important;font-size: 2rem;\">";
        // line 71
        if ((array_key_exists("slogan_homepage", $context) && (Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, ($context["slogan_homepage"] ?? null), "getOptionValue", [], "any", false, false, false, 71)) != ""))) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["slogan_homepage"] ?? null), "getOptionValue", [], "any", false, false, false, 71);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.texte.slogan"), "html", null, true);
        }
        yield "</h1>
                ";
        // line 72
        if (($context["actualite"] ?? null)) {
            // line 73
            yield "                    <a target=\"_blank\" class=\"link-card-actu\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["actualite"] ?? null), "guid", [], "any", false, false, false, 73), "html", null, true);
            yield "\">
                        <div>
                            ";
            // line 75
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["actualite"] ?? null), "postTitle", [], "any", false, false, false, 75);
            yield "
                            ";
            // line 76
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["actualite"] ?? null), "postContent", [], "any", false, false, false, 76);
            yield "
                        </div>
                    </a>
                ";
        }
        // line 80
        yield "
                <div class=\"container text-center white-text wow fadeInUp\">
                    <div class=\"row\">
                        <div class=\"m-auto col-md-9 col-xs-12\"></form>
                        </div>
                        <div id=\"sectionAvancer\" class=\"col-md-12 d-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- Modal -->
    ";
        // line 93
        if (array_key_exists("youtube_url", $context)) {
            // line 94
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["youtube_url"] ?? null), "autoload", [], "any", false, false, false, 94) == "yes")) {
                // line 95
                yield "            <div class=\"modal fade\" id=\"youtubeVideoModal\" tabindex=\"-1\" role=\"dialog\"
                 aria-labelledby=\"youtubeVideoModalTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                    <div class=\"modal-content\" style=\"background-color: transparent;box-shadow: none;\">
                        <div class=\"modal-body\">
                            <span aria-hidden=\"true\" class=\"closeVideoBtnModal\">&times;</span>
                            <div class=\"hs-responsive-embed-youtube\">
                                <iframe class=\"rounded\" src=\"\" frameborder=\"0\" allowfullscreen=\"\"
                                        allow=\"autoplay\"></iframe>
                            </div>
                            <input hidden
                                   value=\"";
                // line 106
                if (($context["youtube_url"] ?? null)) {
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["youtube_url"] ?? null), "autoload", [], "any", false, false, false, 106) == "yes")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["youtube_url"] ?? null), "optionValue", [], "any", false, false, false, 106), "html", null, true);
                    }
                }
                yield "\"
                                   id=\"youtube_url\"/>
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            // line 113
            yield "    ";
        }
        // line 114
        yield "
    <!--Main Navigation-->
";
        yield from [];
    }

    // line 117
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 118
        yield "
    ";
        // line 119
        yield from $this->loadTemplate("partials/project.html.twig", "homeLayout.html.twig", 119)->unwrap()->yield($context);
        yield from [];
    }

    // line 122
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 123
        yield "    ";
        yield from $this->loadTemplate("footer.html.twig", "homeLayout.html.twig", 123)->unwrap()->yield($context);
        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 126
        yield "    <!-- JQuery -->
    ";
        // line 128
        yield "    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
            integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>
    <!-- Bootstrap tooltips -->
    ";
        // line 132
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
    <!-- Bootstrap core JavaScript -->
    ";
        // line 136
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js\"></script>
    <!-- MDB core JavaScript -->
    ";
        // line 140
        yield "    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js\"></script>
    <!-- Lazy load -->
    <!-- cdnjs for lazy load -->
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
    <script type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>

    <script src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fullclip.min.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 152
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/lazysizes.min.js"), "html", null, true);
        yield "\" async></script>
    <!-- Images End -->
    <script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
    ";
        // line 155
        yield from $this->loadTemplate("partials/js/top_button.html.twig", "homeLayout.html.twig", 155)->unwrap()->yield($context);
        // line 156
        yield "    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>

    ";
        // line 159
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 159) == "prod")) {
            // line 160
            yield "        ";
            yield from $this->loadTemplate("partials/js/cookie.js.twig", "homeLayout.html.twig", 160)->unwrap()->yield($context);
            // line 161
            yield "    ";
        }
        // line 162
        yield "
    <script>
        \$(document).on(\"click\", \".linkContent\", function (e) {
            \$('.floatingMenu').fadeToggle();
        })


        ";
        // line 169
        if (($context["youtube_url"] ?? null)) {
            // line 170
            yield "        \$(\"#youtubeVideoModal\").modal(\"show\");

        \$(\".closeVideoBtnModal\").click(function (e) {
            e.preventDefault();
            \$(\"#youtubeVideoModal\").modal('hide');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", \"\");
        });

        \$(\".playVideoButton i\").click(function () {
            \$(\"#youtubeVideoModal\").modal('toggle');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", 'https://www.youtube.com/embed/' + \$(\"#youtubeVideoModal #youtube_url\").val());
        });
        ";
        }
        // line 183
        yield "
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

        if (\$(window).width() <= 922) {
            \$('.block_conjoint').insertAfter('.search-title-mob')
            \$('.searchDiv').insertAfter('.block_conjoint')
            \$('.link-card-actu').insertAfter('searchDiv')
            //\$('.link-card-actu').insertAfter('searchFilterDiv')
        }

        window.onresize = function () {
            if (window.innerWidth <= 922) {
                \$('.block_conjoint').insertAfter('.search-title-mob')
                \$('.searchDiv').insertAfter('.block_conjoint')
                \$('.link-card-actu').insertAfter('.searchDiv')
                //\$('.link-card-actu').insertAfter('.searchFilterDiv')
            } else {
                \$('.block_conjoint').insertAfter('.titreFromTitreFilter')
                \$('.searchDiv').insertAfter('.logoButtonHeader')
                \$('.link-card-actu').insertAfter('.titre_filter')
            }
        }

        grecaptcha.ready(function () {
            grecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2', {action: 'homepage'}).then(function (token) {
                document.getElementById(\"recaptchaResponse\").value = token;
            });
        });
        // Script to create user for newsletter

        \$('#newsletterForm').on('submit', function (e) {
            e.preventDefault();
            if (\$('#recaptchaResponse').val()) {

                toastr.info(\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.attente"), "html", null, true);
        yield "\");
                let \$form = \$(this);
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    success: function (response) {
                        console.log(response);
                        if (response == 1) {
                            toastr.clear();
                            \$('#body').hide();
                            \$('#succes').show();
                            \$('html,body').scrollTop(0);
                            \$('#send').removeClass('running');
                            toastr.success('";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.succes"), "html", null, true);
        yield "');
                            \$('#newsletterModal').modal('toggle');
                        } else if (response == 2) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.email_occupe"), "html", null, true);
        yield "');
                        } else if (response == 0) {
                            toastr.clear();
                            \$('#send').removeClass('running');
                            toastr.warning('";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.robot"), "html", null, true);
        yield "');
                        }
                    },
                    error: function (response) {
                        toastr.clear();
                        \$('#send').removeClass('running');
                        toastr.error('";
        // line 268
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


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(document.querySelectorAll('*'), function (el) {
                if (el.offsetWidth > docWidth) {
                    console.log(el);
                }
            });

            /**
             * On click event on searchbar to add class active to advance search and click outside the box to close advance section
             */
            \$('#searchBar').on('click', function () {
                \$('.new-srch').addClass('active');
            });
            /****************************************/
            \$(document).mouseup(function (e) {
                if (\$(e.target).closest(\"#SearchBar-menu1 .input-group\").length === 0) {
                    \$('.new-srch').removeClass('active');
                }
            });

            /**
             * Manipulate data from data-id and data-name attributes in \"Types de prestation\"
             */
            \$('.prestation-i').on('click', function (e) {
                e.preventDefault();
                var pres_id = \$(this).attr('data-id');
                var pres_name = \$(this).attr('data-name');

                \$('.type-pres-span').html(pres_name);
                \$('.input-type-prestation').val(pres_id);

                var url1 = '";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 313), "get", ["_locale"], "method", false, false, false, 313), "html", null, true);
        yield "/home/sous_categorie1?id=' + pres_id;
                toastr.info(\"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.formulaire-champs.recherche-sous-categories"), "html", null, true);
        yield "\");
                \$.ajax({
                    url: url1,
                    type: 'get',
                    success: function (reponse) {
                        toastr.clear();
                        console.log(reponse);

                        \$('.besoin-fld-scroll-item').html(reponse);
                    },
                    error: function (reponse) {
                        toastr.clear();
                    }

                });

            });

            \$(document).on('click', '.besoins-i', function () {
                var pres_id = \$(this).attr('data-id');
                var pres_name = \$(this).attr('data-name');

                \$('.besoins-span-text').html(pres_name);
                \$('.input-type-besoins').val(pres_id);
                var b = \$('.input-type-besoins').val();
                console.log(pres_id + \" \" + pres_name + \" \" + b);
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

            \$(document).on('change', '.categorieParent', function (e) {

                e.preventDefault();
                var url1 = '";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 371), "get", ["_locale"], "method", false, false, false, 371), "html", null, true);
        yield "/home/sous_categorie?id=' + \$(this).val();
                toastr.info(\"";
        // line 372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.formulaire-champs.recherche-sous-categories"), "html", null, true);
        yield "\");

                \$.ajax({
                    url: url1,
                    type: 'get',
                    success: function (reponse) {
                        toastr.clear();
                        console.log(reponse);
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
        // line 414
        yield from $this->loadTemplate("partials/js/searchForm.html.twig", "homeLayout.html.twig", 414)->unwrap()->yield($context);
        // line 415
        yield "    ";
        yield from $this->loadTemplate("ws/script.html.twig", "homeLayout.html.twig", 415)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "homeLayout.html.twig";
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
        return array (  718 => 415,  716 => 414,  671 => 372,  667 => 371,  607 => 314,  603 => 313,  555 => 268,  546 => 262,  539 => 258,  531 => 253,  514 => 239,  456 => 183,  441 => 170,  439 => 169,  430 => 162,  427 => 161,  424 => 160,  422 => 159,  417 => 156,  415 => 155,  408 => 152,  404 => 150,  400 => 149,  389 => 140,  384 => 136,  379 => 132,  374 => 128,  371 => 126,  364 => 125,  358 => 123,  351 => 122,  346 => 119,  343 => 118,  336 => 117,  329 => 114,  326 => 113,  312 => 106,  299 => 95,  296 => 94,  294 => 93,  279 => 80,  272 => 76,  268 => 75,  262 => 73,  260 => 72,  252 => 71,  240 => 66,  228 => 61,  223 => 58,  219 => 56,  212 => 55,  207 => 53,  205 => 52,  202 => 51,  195 => 50,  179 => 32,  176 => 31,  174 => 30,  167 => 26,  163 => 25,  158 => 23,  150 => 17,  143 => 16,  132 => 15,  122 => 14,  115 => 417,  113 => 125,  111 => 122,  108 => 121,  106 => 117,  104 => 55,  101 => 54,  99 => 50,  97 => 49,  93 => 47,  90 => 46,  87 => 45,  84 => 44,  82 => 16,  77 => 15,  75 => 14,  72 => 13,  70 => 12,  64 => 8,  61 => 7,  59 => 6,  53 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "homeLayout.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/homeLayout.html.twig");
    }
}
