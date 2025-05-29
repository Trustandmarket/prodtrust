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

/* reset_password/request.html.twig */
class __TwigTemplate_d6c42f2593e2e554543b9ba5d21e579c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 1);
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
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/description.html.twig", ["code" => "request"]);
        yield "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        yield "\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <script src=\"https://www.google.com/recaptcha/enterprise.js\" async defer></script>

";
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Trust & Market | ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/title.html.twig", ["code" => "request"]);
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "    <style>
        body {
        ";
        // line 20
        if ((Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "requete_reinitialiser_mot_de_passe_image"]) != "
")) {
            yield " background: url(";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "Seo/Meta/security_image.html.twig", ["code" => "requete_reinitialiser_mot_de_passe_image"]);
            yield ") no-repeat center center fixed;
        ";
        } else {
            // line 21
            yield " background: url(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/john-raptis.png")), "html", null, true);
            yield ") no-repeat center center fixed;
        ";
        }
        // line 22
        yield " -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .white-t {
            color: #fff;
        }

        .float-r {
            float: right;
        }

        .special-link {
            text-decoration: underline;
            color: #fff;
        }

        .special-link:hover {
            text-decoration: underline;
            color: #f17c30;
        }

        .special-below-link {
            color: #fff;
        }

        .special-below-link:hover {
            text-decoration: none;
            color: #f17c30;
        }

        .forgot-button {
            background: #f17c30;
            border: none;
            font-size: 15px;
        }

        .forgot-button:hover {
            color: #f17c30;
            background: #fff;
            border: none;
        }

        .input-custom {
            background-color: rgba(0, 0, 0, 0.15);
            color: #ddd;
        }

        .input-custom:focus {
            background-color: rgba(0, 0, 0, 0.15);
            border-color: #fff;
            color: #fff;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
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

        form {
            margin-left: auto;
            margin-right: auto;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/floating-labels.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

";
        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 114
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_start');
        yield "
    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 115), "flashbag", [], "any", false, false, false, 115), "get", ["success"], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 116
            yield "        <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
            <strong></strong>
            ";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 124), "flashbag", [], "any", false, false, false, 124), "get", ["error"], "method", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 125
            yield "        ";
            if (($context["flashMessage"] == 111)) {
                // line 126
                yield "            <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\">
                <strong></strong>
                ";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email-changer-mot-de-passe.email-inexistant"), "html", null, true);
                yield "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        ";
            }
            // line 134
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "
    <div class=\"text-center mb-4\">
        <a href='/'>
            <img class=\"mb-4\" src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_tm.svg")), "html", null, true);
        yield "\" alt=\"logo\" width=\"72\" height=\"72\">
        </a>
        <h1 class=\"h3 mb-3 font-weight-normal white-t\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("passe-oublier.titre"), "html", null, true);
        yield "</h1>
        <p class=\"white-t\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("passe-oublier.description"), "html", null, true);
        yield "</p>
    </div>

    <div class=\"form-label-group\">
        ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["requestForm"] ?? null), "email_canonical", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control input-custom", "type" => "text", "id" => "email_canonical", "name" => "email_canonical", "required" => "required"]]);
        yield "
        ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["requestForm"] ?? null), "email_canonical", [], "any", false, false, false, 147), 'label', (CoreExtension::testEmpty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.email")) ? [] : ["label" => $_label_]));
        yield "
        ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["requestForm"] ?? null), "email_canonical", [], "any", false, false, false, 148), 'errors');
        yield "
    </div>

    <div class=\"g-recaptcha\" data-sitekey=\"6Ld5EEUpAAAAAOcwEkhPcx1fjKi0BUggL3jqUpPJ\"
         data-action=\"TRUST_RESET_PASSWORD\"></div>
    <br/>
    <div class=\"mb-3 text-center\">
        <button class=\"btn btn-lg btn-primary btn-md forgot-button\"
                type=\"submit\">";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("passe-oublier.valider"), "html", null, true);
        yield "</button>
    </div>

    <p class=\"mt-5 mb-3 text-muted text-center\">
        <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"special-below-link\">&larr;&nbsp;<span
                    class=\"special-link\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.titre"), "html", null, true);
        yield "</span>
        </a>
        <br><a href=\"/fr/request\" class=\"special-below-link\">
            <img src=\"/assets/img/fr.svg\" alt=\"Langue francaise\" height='12'>
            Fr</a>
        <!-- |
        <a href=\"/fr/request\" class=\"special-below-link\">
            <img src=\"/assets/img/gb.svg\" alt=\"Langue anglaise\" height='12'>
            En</a> -->
    </p>
    ";
        // line 171
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_end');
        yield "
";
        yield from [];
    }

    // line 174
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 175
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- jQuery -->
    <script src=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.4.1.min.js"), "html", null, true);
        yield "\"></script>
    <!-- jQuery plugin for datepicker -->
    <script src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
    <!-- Bootstrap Js -->
    <script src=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script type=\"text/javascript\">
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
        return "reset_password/request.html.twig";
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
        return array (  376 => 181,  371 => 179,  366 => 177,  360 => 175,  353 => 174,  346 => 171,  333 => 161,  329 => 160,  322 => 156,  311 => 148,  307 => 147,  303 => 146,  296 => 142,  292 => 141,  287 => 139,  282 => 136,  275 => 134,  266 => 128,  262 => 126,  259 => 125,  254 => 124,  242 => 118,  238 => 116,  234 => 115,  229 => 114,  222 => 113,  214 => 109,  125 => 22,  119 => 21,  111 => 20,  107 => 18,  100 => 17,  88 => 15,  79 => 10,  74 => 8,  69 => 6,  62 => 3,  55 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reset_password/request.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/reset_password/request.html.twig");
    }
}
