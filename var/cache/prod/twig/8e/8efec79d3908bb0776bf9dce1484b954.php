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

/* chat/index.html.twig */
class __TwigTemplate_b864ba9a2e21e61d06e60676c0e8d0f8 extends Template
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
        $this->parent = $this->loadTemplate("otherLayout.html.twig", "chat/index.html.twig", 1);
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
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-32x32.png"), "html", null, true);
        yield "\"
          sizes=\"32x32\"/>
    <link rel=\"icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-192x192.png"), "html", null, true);
        yield "\"
          sizes=\"192x192\"/>
    <link rel=\"apple-touch-icon-precomposed\"
          href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-180x180.png"), "html", null, true);
        yield "\"/>
    <meta name=\"msapplication-TileImage\"
          content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon/cropped-cropped-logo-trust-and-market-270x270.png"), "html", null, true);
        yield "\"/>

";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "    Trust &amp; Market | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.titre-de-page"), "html", null, true);
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "    ";
        yield from $this->yieldParentBlock("style", $context, $blocks);
        yield "

    <!-- Font Awesome -->
    <link
            rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- Your custom styles (optional) -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/chat/custome.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/chat/messages.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <style type=\"text/css\">/* Absolute Center Spinner */
        .loading {
            position: fixed;
            z-index: 999;
            height: 2em;
            width: 2em;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        /* Transparent Overlay */
        .loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(rgba(20, 20, 20, .8), rgba(0, 0, 0, 0.8));
            background: -webkit-radial-gradient(rgba(20, 20, 20, .8), rgba(0, 0, 0, .8));
        }

        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
            /* hide \"loading...\" text */
            font: 0 / 0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .loading:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 1em;
            height: 1em;
            margin-top: -0.5em;
            -webkit-animation: spinner 150ms infinite linear;
            -moz-animation: spinner 150ms infinite linear;
            -ms-animation: spinner 150ms infinite linear;
            -o-animation: spinner 150ms infinite linear;
            animation: spinner 150ms infinite linear;
            border-radius: 0.5em;
            -webkit-box-shadow: rgba(255, 255, 255, 0.75) 1.5em 0 0 0, rgba(255, 255, 255, 0.75) 1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) 0 1.5em 0 0, rgba(255, 255, 255, 0.75) -1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) -1.5em 0 0 0, rgba(255, 255, 255, 0.75) -1.1em -1.1em 0 0, rgba(255, 255, 255, 0.75) 0 -1.5em 0 0, rgba(255, 255, 255, 0.75) 1.1em -1.1em 0 0;
            box-shadow: rgba(255, 255, 255, 0.75) 1.5em 0 0 0, rgba(255, 255, 255, 0.75) 1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) 0 1.5em 0 0, rgba(255, 255, 255, 0.75) -1.1em 1.1em 0 0, rgba(255, 255, 255, 0.75) -1.5em 0 0 0, rgba(255, 255, 255, 0.75) -1.1em -1.1em 0 0, rgba(255, 255, 255, 0.75) 0 -1.5em 0 0, rgba(255, 255, 255, 0.75) 1.1em -1.1em 0 0;
        }

        /* Animation */

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .typing {
            display: block;
            width: 60px;
            height: 40px;
            background-color: #BDBDBD;
            margin-left: 20px;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle {
            display: block;
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background-color: #757575;
            margin: 3px;
        }


        .circle.scaling {
            animation: typing 1000ms ease-in-out infinite;
            animation-delay: 3600ms;
        }

        .circle:nth-child(1) {
            animation-delay: 0;
        }

        .circle:nth-child(2) {
            animation-delay: 333ms;
        }

        .circle:nth-child(3) {
            animation-delay: 666ms;
        }

        @keyframes typing {
            0% {
                transform: scale(1);
            }
            33% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.4);
            }
            100% {
                transform: scale(1);
            }
        }

        .chat-content {
            width: 100%;
        }

        .nochannel-message {
            position: relative;
            top: 50%;
            text-align: left;
        }

        .no-message {
            text-align: center;
            position: relative;
            top: 10em;
        }
    </style>

";
        yield from [];
    }

    // line 226
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 227
        yield "
    ";
        // line 228
        yield from $this->yieldParentBlock("header", $context, $blocks);
        yield "

";
        yield from [];
    }

    // line 232
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 233
        yield "    ";
        yield from $this->yieldParentBlock("navigation", $context, $blocks);
        yield "
    ";
        // line 234
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

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 239
        yield "    <div class=\"loading\" style=\"display: none;\">Loading&#8230;</div>
    <main class=\"py-5\">
        <div class=\"row pr-2 pl-2\" style=\"width:100%;margin-left: 0px;margin-right: 0px;\">
            <div class=\"col-md-3 py-5\">
                <h4 class=\"\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.sous-titre-bloc-conversations"), "html", null, true);
        yield "</h4>
                <div class=\"side-chat-container\">
                    <!-- first discussion side chat -->
                    ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["channels"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 247
            yield "\t\t\t\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destinataire", [], "any", false, false, false, 247)) {
                // line 248
                yield "\t\t\t\t\t\t\t<div class=\"row side-chat p-2 pl-3 pr-3 mt-2 online ";
                if (($context["item"] && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 248), "getName", [], "any", false, false, false, 248) == CoreExtension::getAttribute($this->env, $this->source, ($context["channel"] ?? null), "getName", [], "any", false, false, false, 248)))) {
                    yield " active-chat";
                }
                yield "\"
\t\t\t\t\t\t\t\t data-url=\"";
                // line 249
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_chat", ["channel" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 249), "getName", [], "any", false, false, false, 249)]), "html", null, true);
                yield "\"
\t\t\t\t\t\t\t\t data-channel=\"";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 250), "getName", [], "any", false, false, false, 250), "html", null, true);
                yield "\"
\t\t\t\t\t\t\t\t data-timestamp=\"";
                // line 251
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 251)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 251), "getSentDate", [], "any", false, false, false, 251), "getTimestamp", [], "any", false, false, false, 251), "html", null, true);
                }
                yield "\"
\t\t\t\t\t\t\t\t id=\"channel";
                // line 252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 252), "getName", [], "any", false, false, false, 252), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t<div class=\"col-left align-center\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 254
                if (($context["item"] && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destinataire", [], "any", false, false, false, 254), "avatar", [], "any", false, false, false, 254))) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destinataire", [], "any", false, false, false, 254), "avatar", [], "any", false, false, false, 254)), "html", null, true);
                } else {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
                    yield " ";
                }
                yield "\"
\t\t\t\t\t\t\t\t\t\t class=\"logo-left\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-right pl-2\">
\t\t\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t\t<span class=\"username\">";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destinataire", [], "any", false, false, false, 259), "first_name", [], "any", false, false, false, 259), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destinataire", [], "any", false, false, false, 260), "last_name", [], "any", false, false, false, 260), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"date\">";
                // line 261
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 261)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 261), "getSentDate", [], "any", false, false, false, 261), "d/m/Y à H:i:s"), "html", null, true);
                }
                yield "</span>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<p class=\"brief\">";
                // line 263
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 263)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 263), "getContent", [], "any", false, false, false, 263)), "truncate", [45, "...", false], "method", false, false, false, 263), "html", null, true);
                }
                yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 267
            yield "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 268
            yield "                        <div class=\"nochannel-message\">Aucun interlocuteur pour le moment</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        yield "                </div>
            </div>
            <div class=\"col-md-9 py-4 all-messages\">
                ";
        // line 274
        yield "                <div class=\"row py-2 border-bottom border-left destinataire-details-haut\">
                    ";
        // line 275
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["destinataire"] ?? null))) {
            // line 276
            yield "                        <div class=\"col-md-7 text-right\">
                            <img src=\"";
            // line 277
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 277)) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 277)), "html", null, true);
            } else {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
                yield " ";
            }
            yield "\"
                                 class=\"img-fluid rounded-circle header-chat-img\" alt=\"\">&nbsp;&nbsp;<span
                                    class=\"header-chat-name\">";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "first_name", [], "any", false, false, false, 279), "html", null, true);
            yield "
                                ";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "last_name", [], "any", false, false, false, 280), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"col-md-5 text-right\">
                            <a href=\"#\" class=\"lightblue\">
                                <i class=\"fa fa-download fs-18\" aria-hidden=\"true\"></i>
                            </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\" class=\"lightblue\">
                                <i class=\"fa fa-question-circle fs-19\" aria-hidden=\"true\"></i>
                            </a>
                        </div>
                    ";
        }
        // line 290
        yield "                </div>
                <div class=\"row\">
                    <div class=\"col-md-8\" id=\"messages-content\">
                        <div class=\"row chat-box border-left border-bottom border-right p-3 mb-3\"
                             id=\"";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["channel"] ?? null), "getName", [], "any", false, false, false, 294), "html", null, true);
        yield "\"
                             data-destinataire-img=\"";
        // line 295
        if (( !(null === ($context["destinataire"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["destinataire"] ?? null)))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 295)), "html", null, true);
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
            yield " ";
        }
        yield "\">
                            <div class=\"chat-content\">
                                ";
        // line 297
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["destinataire"] ?? null))) {
            // line 298
            yield "                                    ";
            $context["date"] = null;
            // line 299
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 300
                yield "                                        ";
                if ((($context["date"] ?? null) != $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getSentDate", [], "any", false, false, false, 300), "d/m/Y"))) {
                    // line 301
                    yield "                                            ";
                    $context["date"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getSentDate", [], "any", false, false, false, 301), "d/m/Y");
                    // line 302
                    yield "                                            <!-- Date of day chatting -->
                                            <div class=\"col-md-12 text-center my-3 today-date\">
                                                <p> ";
                    // line 304
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date"] ?? null), "html", null, true);
                    yield " </p>
                                            </div>
                                        ";
                }
                // line 307
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getSender", [], "any", false, false, false, 307), "id", [], "any", false, false, false, 307) == CoreExtension::getAttribute($this->env, $this->source, ($context["destinateur"] ?? null), "id", [], "any", false, false, false, 307))) {
                    // line 308
                    yield "                                            <!-- From message -->
                                            <div class=\"offset-md-4 col-md-8 receiver\">
                                                <div class=\"row receiver-msg mb-2 float-right\">
                                                    <div class=\"col-left pl-2 rounded m-2 p-2\">
                                                        <p class=\"text-msg\">";
                    // line 312
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getContent", [], "any", false, false, false, 312), "html", null, true));
                    yield "</p>
                                                    </div>
                                                    <div class=\"col-right\">
                                                        <img src=\"";
                    // line 315
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["destinateur"] ?? null), "avatar", [], "any", false, false, false, 315)) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinateur"] ?? null), "avatar", [], "any", false, false, false, 315)), "html", null, true);
                    } else {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
                        yield " ";
                    }
                    yield "\"
                                                             class=\"img-fluid rounded-circle avatar-message\" alt=\"\">
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                } else {
                    // line 321
                    yield "                                            <!-- I'm receiver -->
                                            <div class='col-md-8 sending'>
                                                <div class='row sender-msg mb-2'>
                                                    <div class='col-left'>
                                                        <img src=\"";
                    // line 325
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 325)) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 325)), "html", null, true);
                    } else {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
                        yield " ";
                    }
                    yield "\"
                                                             class='img-fluid rounded-circle avatar-message' alt=''>
                                                    </div>
                                                    <div class='col-right pl-2 rounded m-2 p-3'>
                                                        <p class='text-msg'>";
                    // line 329
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getContent", [], "any", false, false, false, 329), "html", null, true));
                    yield "</p>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                }
                // line 334
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            yield "                                    <input type=\"hidden\" name=\"destinataire-img\" id=\"destinataire-img\"
                                           value=\"";
            // line 336
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 336)) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 336)), "html", null, true);
            } else {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
                yield " ";
            }
            yield "\">
                                ";
        } else {
            // line 338
            yield "                                    <div class=\"no-message\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.message-accueil");
            yield "
                                        ";
            // line 339
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.descriptif");
            yield "
                                    </div>
                                ";
        }
        // line 342
        yield "                            </div>
                            <div class='typing' style=\"visibility: hidden;\">
                                <span class='circle scaling'></span>
                                <span class='circle scaling'></span>
                                <span class='circle scaling'></span>
                            </div>
                        </div>
                        <!-- Text area for chat -->

                        <div class=\"row mychat-textarea\" ";
        // line 351
        if ( !(!Twig\Extension\CoreExtension::testEmpty(($context["destinataire"] ?? null)))) {
            yield " style=\"display:none;\" ";
        }
        yield ">
                            <div id=\"msgForm\" class=\"col-md-12 text-right\">
                                <textarea required=\"required\" name=\"chatTxtBox\" id=\"chatTxtBox\"
                                          class=\"form-control form-control-lg border-dark font-weight-light chatTxtBox\"></textarea>
                                <button type=\"submit\" id=\"form-submit\" class=\"btn btn-md btn-primary send-msg\">Envoyer
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 destinataire-details\">
                        <div class=\"row user-details p-2 pl-3 pr-3\">
                            ";
        // line 362
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["destinataire"] ?? null))) {
            // line 363
            yield "                                <div class=\"col-left\">
                                    <img src=\"";
            // line 364
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 364)) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 364)), "html", null, true);
            } else {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
                yield " ";
            }
            yield "\"
                                         class=\"img-fluid rounded-circle avatar-detail\" alt=\"\">
                                </div>
                                <div class=\"col-right pl-2\">
                                    <h6>
\t\t\t\t\t\t\t\t\t\t<span class=\"username\">";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "first_name", [], "any", false, false, false, 369), "html", null, true);
            yield "
                                            ";
            // line 370
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "last_name", [], "any", false, false, false, 370), "html", null, true);
            yield "</span>
                                    </h6>
                                    <p class=\"brief\">";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "titre", [], "any", false, false, false, 372), "html", null, true);
            yield "</p>
                                    <p class=\"ratings\">
                                        <i class=\"fa fa-star lightblue\"></i>
                                        <i class=\"fa fa-star lightblue\"></i>
                                        <i class=\"fa fa-star lightblue\"></i>
                                        <i class=\"fa fa-star lightblue\"></i>
                                        <i class=\"fa fa-star lightblue\"></i>
                                        <strong>
                                            <a target=\"_blank\"
                                               href=\"";
            // line 381
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "id", [], "any", false, false, false, 381))]), "html", null, true);
            yield "\">";
            // line 382
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.profil-vendeur.voir-avis"), "html", null, true);
            yield "</a><br>
                                            <span class=\"mission-counter\">";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "annonces_publiees", [], "any", false, false, false, 383), "html", null, true);
            yield "
                                                ";
            // line 384
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.annonces"), "html", null, true);
            yield "</span>
                                        </strong>
                                    </p>
                                </div>
                            ";
        }
        // line 389
        yield "                        </div>
                        ";
        // line 390
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["destinataire"] ?? null))) {
            // line 391
            yield "                            <!-- Envoyer un devis -->
                            <div class=\"row mt-5\">
                                <div class=\"col-md-12\">
                                    <a href=\"#\"
                                       class=\"btn btn-primary btn-block send-quote\">";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.envoyer-un-devis"), "html", null, true);
            yield "</a>
                                </div>
                            </div>
                        ";
        }
        // line 399
        yield "                    </div>
                </div>
            </div>
        </div>
    </main>


";
        yield from [];
    }

    // line 408
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 409
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

";
        yield from [];
    }

    // line 413
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 414
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script async>

        var format = function (date) {
            var fullDate = date
            var twoDigitDay = (fullDate.getDate() < 10) ? '0' + (fullDate.getDate() + 1) : (fullDate.getDate() + 1);
            var twoDigitMonth = (fullDate.getMonth() < 10) ? '0' + (fullDate.getMonth() + 1) : (fullDate.getMonth() + 1);
            var twoDigitHours = (fullDate.getHours() < 10) ? '0' + (fullDate.getHours() + 1) : (fullDate.getHours() + 1);
            var twoDigitMinutes = (fullDate.getMinutes() < 10) ? '0' + (fullDate.getMinutes() + 1) : (fullDate.getMinutes() + 1);
            var twoDigitSeconds = (fullDate.getSeconds() < 10) ? '0' + (fullDate.getSeconds() + 1) : (fullDate.getSeconds() + 1);

            return twoDigitDay + \"/\" + twoDigitMonth + \"/\" + fullDate.getFullYear() + ' à ' + twoDigitHours + ':' + twoDigitMinutes + ':' + twoDigitSeconds;
        }

        var trueDate = function () {
            fullDate = new Date();
            var twoDigitDay = (fullDate.getDate() < 10) ? '0' + (fullDate.getDate() + 1) : (fullDate.getDate() + 1);
            var twoDigitMonth = (fullDate.getMonth() < 10) ? '0' + (fullDate.getMonth() + 1) : (fullDate.getMonth() + 1);
            var twoDigitHours = (fullDate.getHours() < 10) ? '0' + (fullDate.getHours() + 1) : (fullDate.getHours() + 1);
            var twoDigitMinutes = (fullDate.getMinutes() < 10) ? '0' + (fullDate.getMinutes() + 1) : (fullDate.getMinutes() + 1);
            var twoDigitSeconds = (fullDate.getSeconds() < 10) ? '0' + (fullDate.getSeconds() + 1) : (fullDate.getSeconds() + 1);

            return fullDate.getFullYear() + \"-\" + twoDigitMonth + \"-\" + twoDigitDay + ' ' + twoDigitHours + ':' + twoDigitMinutes + ':' + twoDigitSeconds;
        }

        nl2br = function (str, is_xhtml) {
            if (typeof str === 'undefined' || str === null) {
                return '';
            }
            var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
            return (str + '').replace(/([^>\\r\\n]?)(\\r\\n|\\n\\r|\\r|\\n)/g, '\$1' + breakTag + '\$2');
        }

        function truncateString(str, num) {
            if (str.length <= num) {
                return str
            }
            return str.slice(0, num) + '...'
        }

        \$(document).ready(function () {
            let defaultChannel = \"";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["channel"] ?? null), "getName", [], "any", true, true, false, 456)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["channel"] ?? null), "getName", [], "any", false, false, false, 456), "")) : ("")), "html", null, true);
        yield "\";

            let botName = 'ChatBot';

            let userId = '";
        // line 460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getId", [], "any", false, false, false, 460), "html", null, true);
        yield "';

            let userName = '";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "getUsername", [], "any", false, false, false, 462), "html", null, true);
        yield "';

            // var wsUrl = '";
        // line 464
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ws_url"] ?? null), "html", null, true);
        yield "';

            // var ws = new WebSocket('ws://' + wsUrl);

            let clearInterval = 900; //0.9 seconds
            let clearTimerId;


            function addMessageToChannel(message) {

                var message = JSON.parse(message);

                if (message.action == 'message') {
                    if (message.user != userName) {
                        if (message.channel == defaultChannel) {
                            \$('.chat-content').append(\"<div class='col-md-8 sending'><div class='row sender-msg mb-2'><div class='col-left'><img src='\" + \$(\"#destinataire-img\").val() + \"' class='img-fluid rounded-circle' alt=''></div><div class='col-right pl-2 rounded m-2 p-3'><p class='text-msg'>\" + nl2br(message.message) + \"</p></div></div></div>\");

                            // Default scroll chat box to bottom
                            var height = 0;
                            \$('.chat-box div').each(function (i, value) {
                                height += parseInt(\$(this).height());
                            });
                            height += '';
                            \$('.chat-box').animate({scrollTop: height});
                            /*\$('.all-messages').animate({scrollTop: height});
                            \$('.all-messages').stop().animate({ scrollTop: \$('.all-messages').scrollHeight}, 1000);*/
                            //  \tws.send(JSON.stringify({
                            //   action: 'is_read',
                            //   user: userName,
                            //   userId: userId,
                            //   channel: message.channel
                            // }));
                        }
                    } else {
                        if (!message.connected) {
                            \$.ajax({
                                url: \"";
        // line 500
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_send_message_to_not_connected_user_xhr");
        yield "\",
                                method: \"get\",
                                dataType: 'json',
                                data: {channel: message.channel},
                                success: function (data) {
                                    console.info(\"success send messages to not connected\")
                                },
                                error: function (data) {
                                    console.error('error of sending email to not connected user');
                                }
                            });
                        }
                    }

                    \$('#channel' + message.channel).attr('data-timestamp', message.timestamp);
                    \$('#channel' + message.channel).find('.date').html(message.date);
                    \$('#channel' + message.channel).find('.brief').html(truncateString(message.message, 20));

                    \$('.side-chat-container .row.side-chat').sort(function (a, b) {
                        return \$(b).data('timestamp') - \$(a).data('timestamp');
                    }).appendTo('.side-chat-container');

                    //\$(\".side-chat-container\").html(
                    //  \$(\".side-chat-container\").find('.row').sort(function(a, b) {
                    //  let dsa = parseInt(\$(a).data('timestamp')),
                    //    dsb = parseInt(\$(b).data('timestamp'));
                    //    return (dsa < dsb ? -1 : (dsa > dsb) ? 1 : 0);
                    //  })
                    //);

                    //\$('.side-chat-container').each(function(){
                    //  \$(this).html(
                    //    \$(this).find('.row.side-chat').sort(function(a, b) {
                    //      let dsa = parseInt(\$(a).data('timestamp')),
                    //      dsb = parseInt(\$(b).data('timestamp'));
                    //      return (dsa > dsb ? -1 : (dsa < dsb) ? 1 : 0);
                    //    })
                    //  );
                    //});
                    //\$('.side-chat-container .row').sort(function(a,b) {
                    //  return \$(a).data('timestamp') < \$(b).data('timestamp');
                    //}).appendTo('.side-chat-container');

                }

                /*if(message.action == 'send_email'){
                    if(message.user == userName){
                        \$.ajax({
                        url : \"";
        // line 548
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_send_message_to_not_connected_user_xhr");
        yield "\",
\t            method : \"post\",
\t            dataType : 'json',
\t            data : { channel : message.channel },
\t            success : function(data){
\t              console.info(\"success send messages to not connected\")
\t            },
\t            error : function(data){
\t              console.error('error of sending email to not connected user');
\t            }
\t          });
        \t}
        }*/

                if (message.action == 'is_tiping') {
                    if (message.user != userName && message.channel == defaultChannel) {

                        \$('.typing').css(\"visibility\", \"visible\");
                        //restart timeout timer
                        clearTimeout(clearTimerId);
                        clearTimerId = setTimeout(function () {
                            //clear user is typing message
                            \$('.typing').css(\"visibility\", \"hidden\");
                        }, clearInterval);
                    }
                }
            }

            // function botMessageToGeneral(message) {
            // }

            // ws.onopen = function () {
            //   ws.send(JSON.stringify({
            //     action: 'subscribe',
            //     channel: userName,
            //     user: userName
            //   }));
            //   ";
        // line 585
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["channels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 586
            yield "            //   ws.send(JSON.stringify({
            //     action: 'subscribe',
            //     channel: \"";
            // line 588
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 588), "getName", [], "any", false, false, false, 588), "html", null, true);
            yield "\",
            //     user: userName
            //   }));
            //   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 592
        yield "
            //   // On notifie au serveur qu'on vient de lire le messsage
            //   ";
        // line 594
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["channel"] ?? null), "getName", [], "any", false, false, false, 594))) {
            // line 595
            yield "            //  ws.send(JSON.stringify({
            //    action: 'is_read',
            //    user: userName,
            //    userId: userId,
            //    channel: defaultChannel
            //  }));
            //  ";
        }
        // line 602
        yield "
            // };

            // ws.onmessage = function (event) {
            //   addMessageToChannel(event.data);
            // };

            // ws.onclose = function () {
            //   console.warn(\"";
        // line 610
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.serveur-ferme.erreur"), "html", null, true);
        yield "\");
            //   clearTimeout(clearTimerIdConnect);

            //   clearTimerIdConnect = setTimeout(function () {
            //     ws = new WebSocket('ws://' + wsUrl);
            //     connectToAllChannels();
            //   }, clearIntervalConnect);
            // };

            // var clearIntervalConnect = 10000; //10 seconds
            // var clearTimerIdConnect;

            // ws.onerror = function () {
            //   console.warn(\"";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.message-erreur.erreur"), "html", null, true);
        yield "\");

            //   clearTimeout(clearTimerIdConnect);

            //   clearTimerIdConnect = setTimeout(function () {
            //     ws = new WebSocket('ws://' + wsUrl);
            //     connectToAllChannels();
            //   }, clearIntervalConnect);

            // };

            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(
                document.querySelectorAll('*'),
                function (el) {
                    if (el.offsetWidth > docWidth) {
                        console.log(el);
                    }
                }
            );
            //Hambuger menu icon
            \$('.animated-button-icon').on('click', function () {
                \$('.animated-icon2').toggleClass('open');
            });
            //first thing turn Hide Menu Search bar
            \$(\"#searchMenu\").hide();
            //toggle menu search bar on/off
            \$(\"#searchMenuShowHide\").on('click', function () {
                \$(\"#searchMenu\").toggle(\"slide\");
            });

            //live chat side section
            \$('select#discussionsEnLigne').on('change', function () {
                var sessionS = \$(this).children(\"option:selected\").val();
                switch (sessionS) {
                    case 'online' :
                        \$('.online').show(); //show all active users
                        \$('.offline').hide(); //hide all active users
                        break;
                    case 'offline' :
                        \$('.offline').show(); //show all active users
                        \$('.online').hide(); //hide all active users
                        break;
                    case 'all' :
                        \$('.offline').show(); //show all active users
                        \$('.online').show(); //show all active users
                        break;
                }
            });

            // Default scroll chat box to bottom
            var height = 0;
            \$('.chat-box div').each(function (i, value) {
                height += parseInt(\$(this).height());
            });
            height += '';
            \$('.chat-box').animate({scrollTop: height});

            //Lets begin sending our message from the text form

            //First let's prevent form from submitting to action file
            /*\$(\"#msgForm\").on('submit',function() {
              return false; //to prevent redirection to action file
            });*/
            //Lets click on the submit button
            \$(document).on('click', '.send-msg', function () {
                var data = \$(\"#chatTxtBox\").val();

                // first verify if data ie empty then disable send button
                if (data.trim() == '') {
                    toastr.info(\"Text area can't be empty\");
                    return;
                }

                \$('.chat-content').append('<div class=\"offset-md-4 col-md-8 receiver\"> <div class=\"row receiver-msg mb-2 float-right\"> <div class=\"col-left pl-2 rounded m-2 p-2\"> <p class=\"text-msg\">' + nl2br(data) + '</p></div><div class=\"col-right\"> <img src=\"";
        // line 698
        if (( !(null === ($context["destinataire"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["destinataire"] ?? null)))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinateur"] ?? null), "avatar", [], "any", false, false, false, 698)), "html", null, true);
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
            yield " ";
        }
        yield "\" class=\"img-fluid rounded-circle\" alt=\"\"> </div></div></div>');

                clearInput();

                date = new Date();

                now = format(date);

                //\$('#channel'+defaultChannel).attr('data-timestamp',+date);
                //\$('#channel'+defaultChannel).find('.date').html(now);
                //\$('#channel'+defaultChannel).find('.brief').html(truncateString(data, 20));

                // Send it to WS
                //
                \$.ajax({
                    url: \"";
        // line 713
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_send_message");
        yield "\",
                    method: \"post\",
                    dataType: \"json\",
                    data: {channel: defaultChannel, message: data},
                    success: function (response) {
                        if (response.status == \"error\") {
                            toastr.error(response.message);
                        }
                        if (response.status == \"success\") {
                            console.info(response.message);
                        }
                    },
                    error: function (response) {
                        console.error(\"Une erreur s'est produite lors de l'envoie du message\");
                    }
                });

                // ws.send(JSON.stringify({
                //   action: 'message',
                //   user: userName,
                //   userId: userId,
                //   message: data,
                //   channel: defaultChannel,
                //   date:now,
                //   vraiedate: trueDate()
                // }));

                // Default scroll chat box to bottom
                var height = 0;
                \$('.chat-box div').each(function (i, value) {
                    height += parseInt(\$(this).height());
                });
                height += '';
                \$('.chat-box').animate({scrollTop: height});

                //\$('.chat-content').animate({scrollTop: height});
                //\$('.chat-content').stop().animate({ scrollTop: \$('.chat-content').scrollHeight}, 1000);
            });

            // \$('#chatTxtBox').on('keyup',function(){
            //   ws.send(JSON.stringify({
            //     action: 'is_tiping',
            //     user: userName,
            //     userId: userId,
            //     channel: defaultChannel
            //   }));
            // });

            timer = 0;

            // Clear chat text area
            function clearInput() {
                \$(\"#chatTxtBox\").val('');
            }

            \$(document).on('click', '.row.side-chat', function () {
                var channel = \$(this).attr('data-channel');
                var url = \$(this).attr('data-url');
                if (defaultChannel != channel) {
                    \$('.loading').show();
                    \$.ajax({
                        url: \"";
        // line 774
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_get_channel_messages");
        yield "\",
                        method: \"get\",
                        dataType: 'json',
                        data: {channel: channel},
                        success: function (data) {
                            \$('.mychat-textarea').show();
                            \$('.row.side-chat').removeClass('active-chat');
                            \$('#channel' + channel).addClass('active-chat');

                            \$(\".chat-content\").html(data.html.all_messages);
                            \$(\".destinataire-details\").html(data.html.destinataire_details);
                            \$(\".destinataire-details-haut\").html(data.html.destinataire_details_haut);

                            // Default scroll chat box to bottom
                            var height = 0;
                            \$('.chat-box div').each(function (i, value) {
                                height += parseInt(\$(this).height());
                            });
                            height += '';
                            \$('.chat-box').animate({scrollTop: height});

                            window.history.pushState(\"\", \"\", url);
                            defaultChannel = channel;
                            \$('.loading').hide();
                            //    ws.send(JSON.stringify({
                            //   action: 'is_read',
                            //   user: userName,
                            //   userId: userId,
                            //   channel: defaultChannel
                            // }));
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            \$('.loading').hide();
                            if (textStatus == 'timeout') {
                                console.error(\"Vous n'êtes pas connectés\");
                            } else {
                                console.error(\"Une erreur s'est produite avec le serveur\");
                            }
                        }
                    });
                }
            });

            var refreshConnectToAllChannelsId = setInterval(function () {
                connectToAllChannels();
            }, 4000);
            // Récupère la liste des chaines et remplace le contenu du sélecteur .site-chat-container
            var connectToAllChannels = function () {
                \$.ajax({
                    url: \"";
        // line 823
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_get_all_channels_xhr");
        yield "\",
                    dataType: \"json\",
                    method: \"get\",
                    data: {channel: defaultChannel},
                    success: function (result) {
                        if (result.error) {
                            if (result.error == \"not-connected\") {
                                console.error(\"";
        // line 830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.message-erreur.non-connecte"), "html", null, true);
        yield "\");
                            }
                        } else {

                            var channels = result.channels;
                            var html_channels = result.html_channels;

                            // ws.send(JSON.stringify({
                            //   action: 'subscribe',
                            //   channel: userName,
                            //   user: userName
                            // }));

                            // \$.each(channels,function(key,channel) {
                            //   ws.send(JSON.stringify({
                            //     action: 'subscribe',
                            //     channel: channel.name,
                            //     user: userName
                            //   }));
                            // });
                            if (html_channels.length > 0) {
                                \$('.side-chat-container').html(html_channels);
                            }

                        }
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        if (textStatus == 'timeout') {
                            console.error(\"Vous n'êtes pas connectés\");
                        } else {
                            console.error(\"Une erreur s'est produite avec le serveur\");
                        }
                    }
                });
            };

            var refreshGetAllMessagesOfDefaultChannelId = setInterval(function () {
                getAllMessagesOfDefaultChannel();
            }, 4000);
            var getAllMessagesOfDefaultChannel = function () {
                if (defaultChannel != \"\") {
                    \$.ajax({
                        url: \"";
        // line 872
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_get_channel_messages");
        yield "\",
                        method: \"get\",
                        dataType: 'json',
                        data: {channel: defaultChannel},
                        success: function (data) {
                            \$(\".chat-content\").html(data.html.all_messages);
                            \$(\".destinataire-details\").html(data.html.destinataire_details);
                            \$(\".destinataire-details-haut\").html(data.html.destinataire_details_haut);

                            // Default scroll chat box to bottom
                            var height = 0;
                            \$('.chat-box div').each(function (i, value) {
                                height += parseInt(\$(this).height());
                            });
                            height += '';
                            \$('.chat-box').animate({scrollTop: height});
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            \$('.loading').hide();
                            if (textStatus == 'timeout') {
                                console.error(\"Vous n'êtes pas connectés\");
                            } else {
                                console.error(\"Une erreur s'est produite avec le serveur\");
                            }
                        }
                    });
                }
            };

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
        return "chat/index.html.twig";
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
        return array (  1328 => 872,  1283 => 830,  1273 => 823,  1221 => 774,  1157 => 713,  1132 => 698,  1054 => 623,  1038 => 610,  1028 => 602,  1019 => 595,  1017 => 594,  1013 => 592,  1003 => 588,  999 => 586,  995 => 585,  955 => 548,  904 => 500,  865 => 464,  860 => 462,  855 => 460,  848 => 456,  802 => 414,  795 => 413,  786 => 409,  779 => 408,  767 => 399,  760 => 395,  754 => 391,  752 => 390,  749 => 389,  741 => 384,  737 => 383,  732 => 382,  729 => 381,  717 => 372,  712 => 370,  708 => 369,  693 => 364,  690 => 363,  688 => 362,  672 => 351,  661 => 342,  655 => 339,  650 => 338,  638 => 336,  635 => 335,  629 => 334,  621 => 329,  607 => 325,  601 => 321,  585 => 315,  579 => 312,  573 => 308,  570 => 307,  564 => 304,  560 => 302,  557 => 301,  554 => 300,  549 => 299,  546 => 298,  544 => 297,  532 => 295,  528 => 294,  522 => 290,  509 => 280,  505 => 279,  493 => 277,  490 => 276,  488 => 275,  485 => 274,  480 => 270,  473 => 268,  468 => 267,  459 => 263,  452 => 261,  448 => 260,  444 => 259,  429 => 254,  424 => 252,  418 => 251,  414 => 250,  410 => 249,  403 => 248,  400 => 247,  395 => 246,  389 => 243,  383 => 239,  376 => 238,  362 => 234,  357 => 233,  350 => 232,  342 => 228,  339 => 227,  332 => 226,  130 => 28,  126 => 27,  116 => 21,  109 => 20,  103 => 18,  96 => 17,  88 => 13,  83 => 11,  77 => 8,  72 => 6,  66 => 4,  59 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "chat/index.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/chat/index.html.twig");
    }
}
