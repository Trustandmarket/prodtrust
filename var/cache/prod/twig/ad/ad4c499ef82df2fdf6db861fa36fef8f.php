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

/* profileTemplate.html.twig */
class __TwigTemplate_042b0702f5ee4daa83264d987d4b876b extends Template
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
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "generalLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("generalLayout.html.twig", "profileTemplate.html.twig", 1);
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
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png")), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png")), "html", null, true);
        yield "\"/>
    ";
        // line 9
        yield from $this->loadTemplate("Seo/Meta/noindex.html.twig", "profileTemplate.html.twig", 9)->unwrap()->yield($context);
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust &amp; Market";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "
    <!-- Gijgo datepicker css -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css")), "html", null, true);
        yield "\">
    ";
        // line 17
        yield "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.css\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("toastr/toastr.min.css"), "html", null, true);
        yield "\">
    <!-- Your custom styles (optional) -->
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custome.css"), "html", null, true);
        yield " \" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">

    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">
    ";
        // line 27
        yield from $this->loadTemplate("cssTemplates/chat.css.twig", "profileTemplate.html.twig", 27)->unwrap()->yield($context);
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "    <header>
        ";
        // line 33
        yield from $this->loadTemplate("header-new-design.html.twig", "profileTemplate.html.twig", 33)->unwrap()->yield($context);
        // line 34
        yield "        ";
        yield from $this->loadTemplate("partials/otherPagesVideoModal.html.twig", "profileTemplate.html.twig", 34)->unwrap()->yield($context);
        // line 35
        yield "    </header>
";
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "
    ";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "        ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
    ";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "        ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
        <!-- cdnjs for lazy load -->
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js\"></script>
        <script type=\"text/javascript\"
                src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js\"
                integrity=\"sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==\"
                crossorigin=\"anonymous\"></script>
        ";
        // line 59
        yield "        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js\"
                integrity=\"sha512-mh+AjlD3nxImTUGisMpHXW03gE6F4WdQyvuFRkjecwuWLwD2yCijw4tKA3NsEFpA1C3neiKhGXPSIGSfCYPMlQ==\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://www.google.com/recaptcha/api.js?render=6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
        <script>
            \$(\".closeBtnModal\").click(function (e) {
                e.preventDefault();
                \$(\"#newsletterModal\").modal('toggle');
            });
            ";
        // line 69
        yield from $this->loadTemplate("partials/js/videoButton.js.twig", "profileTemplate.html.twig", 69)->unwrap()->yield($context);
        // line 70
        yield "
            \$('.searchSelectPicker').selectpicker();
            \$(document).on(\"click\", \".homeFilterFormButton\", function (event) {
                event.preventDefault();
                let oldTexte = \$(this).text()
                \$(this).text(\"En cours...\")
                let whichForm = \$(this).attr('attr-form')
                let typePrestation = \$('.' + whichForm).find('select[name=\"type_prestation\"]').val()
                console.log(typePrestation);
                if (typePrestation == \"\") {
                    \$(this).text(oldTexte)
                    toastr.error('Veuillez sélectionner un type de prestation pour lancer la recherche.');
                } else {
                    \$(this).text(oldTexte)
                    \$('.' + whichForm).submit();
                }
            });

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

            });
        </script>
        <script>
            grecaptcha.ready(function () {
                grecaptcha.execute('6LcNudwZAAAAAOo22kCqBlPfeSQHVV05TTIWy2I2', {action: 'homepage'}).then(function (token) {
                    document.getElementById(\"recaptchaResponse\").value = token;
                });
            });
        </script>
        ";
        // line 134
        yield from $this->loadTemplate("partials/js/searchForm.html.twig", "profileTemplate.html.twig", 134)->unwrap()->yield($context);
        // line 135
        yield "        ";
        yield from $this->loadTemplate("ws/script.html.twig", "profileTemplate.html.twig", 135)->unwrap()->yield($context);
        // line 136
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profileTemplate.html.twig";
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
        return array (  297 => 136,  294 => 135,  292 => 134,  226 => 70,  224 => 69,  212 => 59,  197 => 47,  190 => 46,  182 => 43,  175 => 42,  169 => 39,  162 => 38,  156 => 35,  153 => 34,  151 => 33,  148 => 32,  141 => 31,  136 => 27,  132 => 26,  128 => 25,  122 => 22,  117 => 20,  112 => 17,  108 => 15,  102 => 13,  95 => 12,  84 => 11,  79 => 9,  75 => 8,  70 => 6,  64 => 4,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profileTemplate.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profileTemplate.html.twig");
    }
}
