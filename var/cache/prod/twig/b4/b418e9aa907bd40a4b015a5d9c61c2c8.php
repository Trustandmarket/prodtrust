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

/* sitemap/index.html.twig */
class __TwigTemplate_e1c52d22d6619a805b96691926be1c02 extends Template
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
        yield "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["urls"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 4
            yield "\t\t\t<url>
\t\t\t\t<loc>";
            // line 5
            if ((Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 5), ["hostname" => ""]) == CoreExtension::getAttribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 5))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hostname"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 5), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 5), "html", null, true);
            }
            yield "</loc>
\t\t\t\t";
            // line 6
            if (CoreExtension::getAttribute($this->env, $this->source, $context["url"], "lastmod", [], "any", true, true, false, 6)) {
                yield "<lastmod>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "lastmod", [], "any", false, false, false, 6), "html", null, true);
                yield "</lastmod>";
            }
            // line 7
            yield "\t\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["url"], "changefreq", [], "any", true, true, false, 7)) {
                yield "<changefreq>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "changefreq", [], "any", false, false, false, 7), "html", null, true);
                yield "</changefreq>";
            }
            // line 8
            yield "\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", true, true, false, 8) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 8)))) {
                // line 9
                yield "\t\t\t\t\t<image:image><image:loc>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 9), "loc", [], "any", false, false, false, 9), "html", null, true);
                yield "</image:loc><image:title>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
                yield "</image:title></image:image>
\t\t\t\t";
            }
            // line 11
            yield "\t\t\t</url>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['url'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "</urlset>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sitemap/index.html.twig";
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
        return array (  93 => 13,  86 => 11,  78 => 9,  75 => 8,  68 => 7,  62 => 6,  53 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sitemap/index.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/sitemap/index.html.twig");
    }
}
