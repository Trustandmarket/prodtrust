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

/* footer.html.twig */
class __TwigTemplate_c1ea8b492bc50a0055aa16fbe1e53657 extends Template
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
        yield from $this->loadTemplate("partials/top_button.html.twig", "footer.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "<div>
\t<div class=\"new-footer\">
\t\t<div class=\"col-md-12 responsive-footer-links\">
\t\t\t<p class=\"footer-links\">
\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["footer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 7
            yield "\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 7) == 7453)) {
                // line 8
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "locale", [], "any", false, false, false, 8) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 8) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 8), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 8), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 9
$context["n"], "id", [], "any", false, false, false, 9) == 4683)) {
                // line 10
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_envoyez_commentaires");
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 10) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 10), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 10), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t";
            } else {
                // line 12
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_navigation", ["navigation" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postName", [], "any", false, false, false, 12)]), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "locale", [], "any", false, false, false, 12) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 12) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 12), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 12), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t";
            }
            // line 14
            yield "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['n'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "\t\t\t\t<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.pied-de-page.subscribe-newsletter"), "html", null, true);
        yield "</a>
\t\t\t</p>
\t\t</div>\t
\t\t<div class=\"col-md-12 inline-footer\">
\t\t\t<div class=\"copyright-links\">
\t\t\t\t<p>&copy;&nbsp;Trust &amp; Market ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "<span class=\"comma-to-display\">,</span></p>
\t\t\t\t<p class=\"footer-links footer-links-desktop\">
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["footer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 23
            yield "\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 23) == 7453)) {
                // line 24
                yield "\t\t\t\t\t\t\t<a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "locale", [], "any", false, false, false, 24) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 24) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 24), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 24), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 25
$context["n"], "id", [], "any", false, false, false, 25) == 4683)) {
                // line 26
                yield "\t\t\t\t\t\t\t<a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_envoyez_commentaires");
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "locale", [], "any", false, false, false, 26) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 26) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 26), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 26), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t\t";
            } else {
                // line 28
                yield "\t\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site_navigation", ["navigation" => CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postName", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "locale", [], "any", false, false, false, 28) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 28) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postExcerpt", [], "any", false, false, false, 28), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["n"], "postTitle", [], "any", false, false, false, 28), "html", null, true);
                }
                yield "</a>
\t\t\t\t\t\t";
            }
            // line 30
            yield "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['n'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "\t\t\t\t\t<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_newsletter");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.pied-de-page.subscribe-newsletter"), "html", null, true);
        yield "</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"logos-footer\">
\t\t\t\t<ul class=\"footer-ul-social-icons text-right\">
\t\t\t\t\t<li class=\"mr-4\">
\t\t\t\t\t\t<a href=\"https://www.stripe.com\" target=\"_blank\">
\t\t\t\t\t\t\t<img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/stripe-logo.png"), "html", null, true);
        yield "\" width=\"50\" height=\"25\" alt=\"stripe-payment-logo\" class=\"stripe-with-powered\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/trustandmarket/\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://twitter.com/trustandmarket\">
\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.instagram.com/trustandmarket/\">
\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<input value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 60), "getLocale", [], "method", false, false, false, 60), "html", null, true);
        yield "\" hidden id=\"page_lang\"/>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "footer.html.twig";
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
        return array (  204 => 60,  179 => 38,  166 => 31,  160 => 30,  148 => 28,  136 => 26,  134 => 25,  123 => 24,  120 => 23,  116 => 22,  111 => 20,  100 => 15,  94 => 14,  82 => 12,  70 => 10,  68 => 9,  57 => 8,  54 => 7,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "footer.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/footer.html.twig");
    }
}
