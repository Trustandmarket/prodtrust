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

/* @EasyAdmin/crud/paginator.html.twig */
class __TwigTemplate_7a4def9e0525eaba786eb0a8db34c29d extends Template
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
        // line 4
        yield "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        if (((array_key_exists("render_detailed_pagination", $context)) ? (($context["render_detailed_pagination"] ?? null)) : (true))) {
            // line 8
            yield "            ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "numResults", [], "any", false, false, false, 8))], "EasyAdminBundle");
            yield "
        ";
        }
        // line 10
        yield "    </div>

    <nav class=\"pager list-pagination-paginator ";
        // line 12
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 12)) ? ("first-page") : (""));
        yield " ";
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 12)) ? ("last-page") : (""));
        yield "\">
        <ul class=\"pagination\">
            <li class=\"page-item ";
        // line 14
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 14)) ? ("disabled") : (""));
        yield "\">
                <a class=\"page-link\" href=\"";
        // line 15
        (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 15)) ? (yield "#") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "previousPage", [], "any", false, false, false, 15)], "method", false, false, false, 15), "html", null, true)));
        yield "\">
                    <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
        yield "</span>
                </a>
            </li>

            ";
        // line 20
        if (((array_key_exists("render_detailed_pagination", $context)) ? (($context["render_detailed_pagination"] ?? null)) : (true))) {
            // line 21
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "pageRange", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                yield "                    <li class=\"page-item ";
                yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 22))) ? ("active") : (""));
                yield " ";
                yield (((null === $context["page"])) ? ("disabled") : (""));
                yield "\">
                        ";
                // line 23
                if ((null === $context["page"])) {
                    // line 24
                    yield "                            <span class=\"page-link\">&hellip;</span>
                        ";
                } else {
                    // line 26
                    yield "                            <a class=\"page-link\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [$context["page"]], "method", false, false, false, 26), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                        ";
                }
                // line 28
                yield "                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "            ";
        } else {
            // line 31
            yield "                <li class=\"page-item active ";
            yield (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 31))) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "currentPage", [], "any", false, false, false, 32), "html", null, true);
            yield "</a>
                </li>
            ";
        }
        // line 35
        yield "
            <li class=\"page-item ";
        // line 36
        yield (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 36)) ? ("disabled") : (""));
        yield "\">
                <a class=\"page-link\" href=\"";
        // line 37
        (( !CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 37)) ? (yield "#") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, ($context["paginator"] ?? null), "nextPage", [], "any", false, false, false, 37)], "method", false, false, false, 37), "html", null, true)));
        yield "\">
                    <span class=\"btn-label\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
        yield "</span> <i class=\"fa fa-angle-right mx-1\"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/paginator.html.twig";
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
        return array (  143 => 38,  139 => 37,  135 => 36,  132 => 35,  124 => 32,  119 => 31,  116 => 30,  109 => 28,  101 => 26,  97 => 24,  95 => 23,  88 => 22,  83 => 21,  81 => 20,  74 => 16,  70 => 15,  66 => 14,  59 => 12,  55 => 10,  49 => 8,  47 => 7,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/paginator.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/paginator.html.twig");
    }
}
