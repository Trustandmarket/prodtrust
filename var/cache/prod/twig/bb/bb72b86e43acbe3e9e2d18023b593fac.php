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

/* chat/side-chat-container.html.twig */
class __TwigTemplate_3e185c7b733bf5aba7732e2eae1059b5 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["channels"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            yield "    <div class=\"row side-chat p-2 pl-3 pr-3 mt-2 online ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 2), "getName", [], "any", false, false, false, 2) == ($context["channel"] ?? null))) {
                yield " active-chat";
            }
            yield "\" data-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_chat", ["channel" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 2), "getName", [], "any", false, false, false, 2)]), "html", null, true);
            yield "\" data-channel=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 2), "getName", [], "any", false, false, false, 2), "html", null, true);
            yield "\" data-timestamp=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 2), "getSentDate", [], "any", false, false, false, 2), "getTimestamp", [], "any", false, false, false, 2), "html", null, true);
            yield "\" id=\"channel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 2), "getName", [], "any", false, false, false, 2), "html", null, true);
            yield "\">
        <div class=\"col-left align-center\">
            <img src=\"";
            // line 4
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destinataire", [], "any", false, false, false, 4), "avatar", [], "any", false, false, false, 4)) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destinataire", [], "any", false, false, false, 4), "avatar", [], "any", false, false, false, 4)), "html", null, true);
            } else {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
                yield " ";
            }
            yield "\" class=\"logo-left\" alt=\"\">
        </div>
        <div class=\"col-right pl-2\">
            <h6>
                <span class=\"username\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destinataire", [], "any", false, false, false, 8), "first_name", [], "any", false, false, false, 8), "html", null, true);
            yield "
                    ";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "destinataire", [], "any", false, false, false, 9), "last_name", [], "any", false, false, false, 9), "html", null, true);
            yield "</span>
                <span class=\"date\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 10), "getSentDate", [], "any", false, false, false, 10), "d/m/Y à H:i:s"), "html", null, true);
            yield "</span>
            </h6>
            <p class=\"brief\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 12), "getContent", [], "any", false, false, false, 12)), "truncate", [25, "...", false], "method", false, false, false, 12), "html", null, true);
            yield "</p>
        </div>
    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            yield "    <div class=\"nochannel-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.barre-laterale.statut-interlocuteur"), "html", null, true);
            yield "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chat/side-chat-container.html.twig";
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
        return array (  99 => 16,  90 => 12,  85 => 10,  81 => 9,  77 => 8,  63 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "chat/side-chat-container.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/chat/side-chat-container.html.twig");
    }
}
