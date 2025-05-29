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

/* registration/register.html.twig */
class __TwigTemplate_9c0ab14dd12ebbe5d30b0f60fa7d6d1f extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "creer-un-compte"]);
        yield "\">
    <meta name=\"description\" content=\"";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "creer-un-compte"]);
        yield "\"/>
    <link rel=\"canonical\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register")), "html", null, true);
        yield "\">
    <link rel=\"shortlink\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register")), "html", null, true);
        yield "\">

    ";
        // line 11
        yield "    <meta property=\"og:title\" content=\"";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "creer-un-compte"]);
        yield "\">
    <meta property=\"og:description\"
          content=\"";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "creer-un-compte"]);
        yield "\">
    <meta property=\"og:image\" content=\"";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "register_image"]);
        yield "\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:url\" content=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register")), "html", null, true);
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "creer-un-compte"]);
        yield "\">
    <meta name=\"twitter:description\"
          content=\"";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "creer-un-compte"]);
        yield "\">
    <meta name=\"twitter:image\" content=\"";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "register_image"]);
        yield "\">
    <meta name=\"twitter:image:alt\" content=\"";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "register"]);
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "creer-un-compte"]);
        yield "\",
\t\t\"description\": \"";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "creer-un-compte"]);
        yield "\",
\t\t\"publisher\": {
\t\t\t\"@type\": \"RegisterPage\",
\t\t\t\"name\": \"Trust&Market\"
   \t\t }
\t}

    </script>
    ";
        // line 44
        yield "
    <script src=\"https://www.google.com/recaptcha/enterprise.js\" async defer></script>
";
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust & Market | ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "creer-un-compte"]);
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <meta name=\"description\" content=\"";
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "register"]);
        yield "\">
    <style>
        body {
        ";
        // line 56
        if ((Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "register_image"]) != "
")) {
            yield " background: url(";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "register_image"]);
            yield ") no-repeat center center fixed;
        ";
        } else {
            // line 57
            yield " background: url(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/john-raptis.png")), "html", null, true);
            yield ") no-repeat center center fixed;
        ";
        }
        // line 58
        yield " -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
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

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start', ["attr" => ["class" => "form-signin"]]);
        yield "

    <div class=\"text-center mb-4\">
        <a href='/'>
            <img class=\"mb-4\" src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_tm.svg")), "html", null, true);
        yield "\" alt=\"logo\" width=\"72\" height=\"72\">
        </a>
        <h1 class=\"h3 mb-3 font-weight-normal white-t\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.titre"), "html", null, true);
        yield "</h1>
    </div>

    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 86), "flashbag", [], "any", false, false, false, 86), "get", ["register_recaptcha_error"], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 87
            yield "        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "    <div class=\"form-label-group\">
        ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "first_name", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control input-custom", "type" => "text", "id" => "inputPrenom", "name" => "first_name", "required" => "required", "autofocus" => "autofocus"]]);
        yield "
        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "first_name", [], "any", false, false, false, 91), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.nom")) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "first_name", [], "any", false, false, false, 92), 'errors');
        yield "
    </div>

    <div class=\"form-label-group\">
        ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "last_name", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control input-custom", "type" => "text", "id" => "inputNom", "name" => "last_name", "required" => "required"]]);
        yield "
        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "last_name", [], "any", false, false, false, 97), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.prenom")) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "last_name", [], "any", false, false, false, 98), 'errors');
        yield "
    </div>

    <div class=\"form-label-group\">
        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email_canonical", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control input-custom", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.email"), "value" => ""]]);
        yield "
        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email_canonical", [], "any", false, false, false, 103), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.email")) ? [] : ["label" => $_label_]));
        yield "

        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email_canonical", [], "any", false, false, false, 105), 'errors');
        yield "
    </div>

    <div class=\"form-label-group\">
        <select id=\"inputUtilisateur\" name=\"role_user\" class=\"form-control input-custom\" required>
            <option value=\"\" selected>";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.categorie-utilisateur"), "html", null, true);
        yield "</option>
            <option value=\"ROLE_ABONNE\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.abonne"), "html", null, true);
        yield "</option>
            <option value=\"ROLE_AUTO_ENTREPRENEUR\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.auto-entrepreneur"), "html", null, true);
        yield "</option>
            <option value=\"ROLE_SOCIETE\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.societe"), "html", null, true);
        yield "</option>
        </select>
    </div>

    <div class=\"form-label-group\">
        ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "dateNaissance", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control input-custom", "style" => "background-color: transparent;", "type" => "text", "id" => "dateNaissance", "name" => "dateNaissance", "required" => "required", "autocomplete" => "off", "readonly" => "readonly"]]);
        yield "
        ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "dateNaissance", [], "any", false, false, false, 119), 'errors');
        yield "
    </div>

    <div class=\"form-label-group\">
        <select id=\"nationalite\" name=\"nationalite\" class=\"form-control input-custom\" required>
            <option value=\"\" selected>Nationalite...</option>
            ";
        // line 125
        yield from $this->loadTemplate("Tools/CountryRegister.html.twig", "registration/register.html.twig", 125)->unwrap()->yield($context);
        // line 126
        yield "        </select>
    </div>

    <div class=\"form-label-group\">
        <select id=\"residence\" name=\"residence\" class=\"form-control input-custom\" required>
            <option value=\"\" selected>Pays de residence...</option>
            ";
        // line 132
        yield from $this->loadTemplate("Tools/CountryRegister.html.twig", "registration/register.html.twig", 132)->unwrap()->yield($context);
        yield "</select>
    </div>

    <div class=\"form-label-group\">
        ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 136), "first", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control input-custom", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.passe"), "type" => "password", "id" => "inputPassword", "value" => ""]]);
        yield "
        ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 137), "first", [], "any", false, false, false, 137), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.passe")) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 138), "first", [], "any", false, false, false, 138), 'errors');
        yield "
    </div>

    <div class=\"form-label-group\">
        ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 142), "second", [], "any", false, false, false, 142), 'widget', ["attr" => ["class" => "form-control input-custom", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.confirmation"), "type" => "password", "id" => "inputPassword2", "value" => ""]]);
        yield "
        ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 143), "second", [], "any", false, false, false, 143), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.confirmation")) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 144), "second", [], "any", false, false, false, 144), 'errors');
        yield "
    </div>

    <div class=\"g-recaptcha\" data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\" data-action=\"TRUST_REGISTER\"></div>
    <br/>

    <div class=\"checkbox mb-3 cgu\">
        <label>
            <input type=\"checkbox\" required name=\"agreeTerms\"
                   id=\"agreeTerms\">&nbsp;";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.condition-utilisation"), "html", null, true);
        yield "
            <a class=\"special-below-link\" style=\"text-decoration: underline\" target=\"_blank\"
               href=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_navigation", ["idPage" => "nos-conditions", "id" => "conditions-generales-dutilisation"]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.accepter-condition"), "html", null, true);
        yield "</a>
        </label>
        <label>
            <input type=\"checkbox\" name=\"_email_newsletter\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.newsletter"), "html", null, true);
        yield "
    </div>

    <div class=\"text-center\">
        <button class=\"btn btn-lg btn-primary btn-md registration-button\" type=\"submit\">";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.titre"), "html", null, true);
        yield "
        </button>
    </div>

    <p class=\"mt-3 mb-3 text-muted text-center\">
        <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"special-below-link\">&larr;&nbsp;<span
                    class=\"special-link\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accueil"), "html", null, true);
        yield "</span>
        </a>&nbsp;|&nbsp;<a class=\"special-below-link\" href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
            <span class=\"special-link\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.connecte"), "html", null, true);
        yield "</span>&nbsp;&rarr;</a>
        <br><a href=\"/fr/register\" class=\"special-below-link\"><img src=\"/assets/img/fr.svg\" alt=\"Langue francaise\" height='12'>Fr</a>
        <!-- |<a href=\"/fr/register\" class=\"special-below-link\"><img src=\"/assets/img/gb.svg\" alt=\"Langue Anglaise\" height='12'>En</a> -->
    </p>

    ";
        // line 175
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        yield "

";
        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 179
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- jQuery plugin for spartan image picker -->

    <script>
        \$(document).ready(function () {
            \$(\"#registration_form_dateNaissance\").datepicker({
                uiLibrary: 'bootstrap4',
                size: 'large',
                showRightIcon: false,
                iconsLibrary: 'fontawesome',
                editable: true,
                format: 'mm/dd/yyyy'
            });
            \$(\"div[role='wrapper']\").append(\"<label for='registration_form_dateNaissance'>Date de naissance</label>\");

            function validateDateNaisance(val) {
                let re = /^\\d{2}\\/\\d{2}\\/\\d{4}\$/;
                return re.test(val);
            }

        });

        ";
        // line 205
        yield "
        window.addEventListener('load', () => {
            const \$recaptcha = document.querySelector('#g-recaptcha-response');
            if (\$recaptcha) {
                \$recaptcha.setAttribute('required', 'required');
            }
        })
    </script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
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
        return array (  490 => 205,  464 => 179,  457 => 178,  449 => 175,  441 => 170,  437 => 169,  433 => 168,  429 => 167,  421 => 162,  414 => 158,  406 => 155,  401 => 153,  389 => 144,  385 => 143,  381 => 142,  374 => 138,  370 => 137,  366 => 136,  359 => 132,  351 => 126,  349 => 125,  340 => 119,  336 => 118,  328 => 113,  324 => 112,  320 => 111,  316 => 110,  308 => 105,  303 => 103,  299 => 102,  292 => 98,  288 => 97,  284 => 96,  277 => 92,  273 => 91,  269 => 90,  266 => 89,  257 => 87,  253 => 86,  247 => 83,  242 => 81,  234 => 77,  227 => 76,  206 => 58,  200 => 57,  192 => 56,  186 => 53,  182 => 52,  177 => 51,  170 => 50,  158 => 48,  151 => 44,  140 => 35,  136 => 34,  130 => 30,  127 => 28,  123 => 26,  119 => 25,  115 => 24,  110 => 22,  106 => 20,  103 => 18,  99 => 16,  94 => 14,  90 => 13,  84 => 11,  79 => 8,  75 => 7,  71 => 6,  67 => 5,  62 => 4,  55 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "registration/register.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/registration/register.html.twig");
    }
}
