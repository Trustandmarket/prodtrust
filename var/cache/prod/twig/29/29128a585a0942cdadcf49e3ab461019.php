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

/* security/login.html.twig */
class __TwigTemplate_06ac99ed548aca40da82f1378d3f7c15 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 2);
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
\t<meta name=\"title\" content=\"";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "login"]);
        yield "\">
\t<meta name=\"description\" content=\"";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "login"]);
        yield "\"/>
\t<link rel=\"canonical\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login")), "html", null, true);
        yield "\">
\t
\t";
        // line 10
        yield "\t<meta property=\"og:title\" content=\"";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "login"]);
        yield "\">
\t<meta property=\"og:description\" content=\"";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "login"]);
        yield "\">
\t<meta property=\"og:image\" content=\"";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "login_image"]);
        yield "\">
\t<meta property=\"og:type\" content=\"website\">
\t<meta property=\"og:url\" content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login")), "html", null, true);
        yield "\">
\t";
        // line 16
        yield "
\t";
        // line 18
        yield "\t<meta name=\"twitter:card\" content=\"summary\">
\t<meta name=\"twitter:site\" content=\"@trustandmarket\">
\t<meta name=\"twitter:title\" content=\"";
        // line 20
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "login"]);
        yield "\">
\t<meta name=\"twitter:description\" content=\"";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "login"]);
        yield "\">
\t<meta name=\"twitter:image\" content=\"";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "login_image"]);
        yield "\">
\t<meta name=\"twitter:image:alt\" content=\"";
        // line 23
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "login"]);
        yield "\">
\t";
        // line 25
        yield "
\t";
        // line 27
        yield "\t<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"WebPage\",
\t\t\"sameAs\": [
\t\t\t\"https://www.facebook.com/trustandmarket\",
\t\t\t\"https://twitter.com/trustandmarket\",
\t\t\t\"https://www.instagram.com/trustandmarket/\",
\t\t\t\"https://www.linkedin.com/company/trustandmarket\",
\t\t\t\"https://www.youtube.com/channel/UC-jLvu82KNM6DnFOp2Nvk_A\"
\t\t]
\t}
\t</script>
\t";
        // line 41
        yield "
\t<script src=\"https://www.google.com/recaptcha/enterprise.js\" async defer></script>
";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust & Market | ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "login"]);
        yield " ";
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "\t";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
\t<style>
    ";
        // line 51
        yield "    \tbody{ 
\t\t\t";
        // line 52
        if ((Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "login_image"]) != "
")) {
            yield "background: url(";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "login_image"]);
            yield ") no-repeat center center fixed;";
        } else {
            yield "background: url(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/john-raptis.png")), "html", null, true);
            yield ") no-repeat center center fixed;";
        }
        // line 53
        yield "\t\t\t\t-webkit-background-size: cover;
\t\t\t\t-moz-background-size: cover;
\t\t\t\t-o-background-size: cover;
\t\t\t\tbackground-size: cover;
\t  \t}

\t#g-recaptcha-response {
\t\tdisplay: block !important;
\t\tposition: absolute;
\t\tmargin: -78px 0 0 0 !important;
\t\twidth: 302px !important;
\t\theight: 55px !important;
\t\tz-index: -999999;
\t\topacity: 0;
\t}
\t</style>
";
        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 72
        yield "
\t<form class=\"form-signin\" action=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 74), "flashbag", [], "any", false, false, false, 74), "get", ["info"], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 75
            yield "            <div class=\"alert alert-success\" style=\"color: white; background-color: #008779;\">
                ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "\t\t";
        if (($context["error"] ?? null)) {
            // line 80
            yield "\t\t\t<div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 80), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 80), "security"), "html", null, true);
            yield "</div>
\t\t";
        }
        // line 82
        yield "
\t\t";
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 83)) {
            // line 84
            yield "\t\t\t<div class=\"mb-3\">
\t\t\t\t<h4 class=\"mb-3 font-weight-light white-t\" style=\"font-size: 15px;\">Vous etes connecté ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 85), "displayName", [], "any", false, false, false, 85), "html", null, true);
            yield ", <a class=\"special-link\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a></h4>
\t\t\t</div>
\t\t";
        }
        // line 88
        yield "\t\t
\t\t<div class=\"text-center mb-4\">
\t\t\t<a href='/'>
\t\t\t\t<img class=\"mb-4\" src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_tm.svg")), "html", null, true);
        yield "\" alt=\"logo\" width=\"72\" height=\"72\">
\t\t\t</a>
\t\t\t<h1 class=\"h3 mb-3 font-weight-normal white-t\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.titre"), "html", null, true);
        yield "</h1>
\t\t</div>

\t\t<div class=\"form-label-group\">
\t\t\t<input name=\"email_canonical\" type=\"email\" id=\"_username\" class=\"form-control input-custom\" placeholder=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.email"), "html", null, true);
        yield "\" required autofocus>
\t\t\t<label for=\"_username\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.email"), "html", null, true);
        yield "</label>
\t\t\t<div class=\"valid-feedback\"></div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("inscription.erreur.email"), "html", null, true);
        yield "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-label-group\">
\t\t\t<input name=\"password\" type=\"password\" id=\"inputPassword\" class=\"form-control input-custom\" placeholder=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.newsletter"), "html", null, true);
        yield "\" required>
\t\t\t<label for=\"inputPassword\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.passe"), "html", null, true);
        yield "</label>
\t\t</div>
\t\t";
        // line 109
        if (((($context["environnement"] ?? null) == "prod") || (($context["environnement"] ?? null) == "dev"))) {
            // line 110
            yield "\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\" data-action=\"TRUST_LOGIN\"></div>
\t\t";
        }
        // line 112
        yield "\t\t<br/>
\t\t<!-- Hide only on mobile -->
\t\t<div class=\"d-none d-sm-block checkbox mb-3 white-t\" style=\"font-size: 12.5px;\">
\t\t\t<label>
\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\" value=\"remember-me\">
\t\t\t\t";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.souvenir"), "html", null, true);
        yield "
\t\t\t</label>
\t\t\t<a class=\"float-r special-link\" href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.passe-oublier"), "html", null, true);
        yield "</a>
\t\t</div>
\t\t<!-- End hide only on mobile -->

\t\t<!-- View only on mobile -->
\t\t<div class=\"d-sm-none checkbox mb-3 white-t\" style=\"font-size: 12.5px;\">
\t\t\t<label>
\t\t\t\t<input type=\"checkbox\" name=\"_remember_me\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.souvenir"), "html", null, true);
        yield "
\t\t\t</label><br>
\t\t\t<a class=\"special-link\" href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.passe-oublier"), "html", null, true);
        yield "</a>
\t\t</div>
\t\t<!-- End view only on mobile -->

\t\t<div class=\"text-center\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
\t\t\t<button class=\"btn btn-lg btn-primary btn-md registration-button\" type=\"submit\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.titre"), "html", null, true);
        yield "</button>
\t\t</div>

\t\t<p class=\"mt-3 mb-3 text-muted text-center\">
\t\t\t<a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"special-below-link\">&larr;&nbsp;<span class=\"special-link\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.accueil"), "html", null, true);
        yield "</span>
\t\t\t</a>&nbsp;|&nbsp;<a class=\"special-below-link\" href=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register")), "html", null, true);
        yield "\">
\t\t\t\t<span class=\"special-link\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.creer-compte"), "html", null, true);
        yield "</span>&nbsp;&rarr;</a>
\t\t\t<br><a href=\"/fr/login\" class=\"special-below-link\">
\t\t\t\t<img src=\"/assets/img/fr.svg\" alt=\"Langue francaise\" height='12'>
\t\t\t\tFr</a>
\t\t\t<!-- |
\t\t\t<a href=\"/fr/login\" class=\"special-below-link\">
\t\t\t\t<img src=\"/assets/img/gb.svg\" alt=\"Langue anglaise\" height='12'>En
\t\t\t</a> 
\t\t\t-->
\t\t</p>
\t\t";
        // line 150
        if ((CoreExtension::inFilter("annonces/liste", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 150), "headers", [], "any", false, false, false, 150), "get", ["referer"], "method", false, false, false, 150)) || CoreExtension::inFilter("annonces/details", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 150), "headers", [], "any", false, false, false, 150), "get", ["referer"], "method", false, false, false, 150)))) {
            // line 151
            yield "\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 151), "headers", [], "any", false, false, false, 151), "get", ["referer"], "method", false, false, false, 151), "html", null, true);
            yield "\" />
\t\t";
        }
        // line 153
        yield "\t</form>

";
        yield from [];
    }

    // line 157
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 158
        yield "\t";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script type=\"text/javascript\">
function validateEmail(email) {
    let re = /^(([^<>()[\\]\\\\.,;:\\s@\\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\\"]+)*)|(\\\".+\\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\$/;
    return re.test(email);
}

\$(document).ready(function() {

    \$(\"#_username\").change(function() {
        let email = \$(\"#_username\").val();

        if (validateEmail(email)) {
            \$(\"#_username\").removeClass(\"is-invalid\");
            \$(\"#_username\").addClass(\"is-valid\");
        } else {
            \$(\"#_username\").removeClass(\"is-valid\");
            \$(\"#_username\").addClass(\"is-invalid\");
        }
    });
})

window.addEventListener('load', () => {
\tconst \$recaptcha = document.querySelector('#g-recaptcha-response');
\tif (\$recaptcha) {
\t\t\$recaptcha.setAttribute('required', 'required');
\t}
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
        return "security/login.html.twig";
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
        return array (  406 => 158,  399 => 157,  392 => 153,  386 => 151,  384 => 150,  371 => 140,  367 => 139,  361 => 138,  354 => 134,  350 => 133,  340 => 128,  335 => 126,  323 => 119,  318 => 117,  311 => 112,  307 => 110,  305 => 109,  300 => 107,  296 => 106,  288 => 101,  282 => 98,  278 => 97,  271 => 93,  266 => 91,  261 => 88,  253 => 85,  250 => 84,  248 => 83,  245 => 82,  239 => 80,  236 => 79,  227 => 76,  224 => 75,  220 => 74,  216 => 73,  213 => 72,  206 => 71,  185 => 53,  174 => 52,  171 => 51,  165 => 48,  158 => 47,  145 => 45,  138 => 41,  123 => 27,  120 => 25,  116 => 23,  112 => 22,  108 => 21,  104 => 20,  100 => 18,  97 => 16,  93 => 14,  88 => 12,  84 => 11,  79 => 10,  74 => 7,  70 => 6,  66 => 5,  62 => 4,  55 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/security/login.html.twig");
    }
}
