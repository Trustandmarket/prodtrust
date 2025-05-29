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

/* admin/Annonces/Annonces/Fields/status.html.twig */
class __TwigTemplate_167a863d2987aa25554a4738a5e38b5c extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 1) == "moderation")) {
            // line 2
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.moderation"), "html", null, true);
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 3
($context["field"] ?? null), "value", [], "any", false, false, false, 3) == "trash")) {
            // line 4
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.trash"), "html", null, true);
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["field"] ?? null), "value", [], "any", false, false, false, 5) == "draft")) {
            // line 6
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.draft"), "html", null, true);
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["field"] ?? null), "value", [], "any", false, false, false, 7) == "publish")) {
            // line 8
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.publish"), "html", null, true);
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["field"] ?? null), "value", [], "any", false, false, false, 9) == "pending")) {
            // line 10
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.pending"), "html", null, true);
            yield "
";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["field"] ?? null), "value", [], "any", false, false, false, 11) == "in-progress")) {
            // line 12
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.annonce.in-progress"), "html", null, true);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/Annonces/Annonces/Fields/status.html.twig";
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
        return array (  79 => 12,  77 => 11,  72 => 10,  70 => 9,  65 => 8,  63 => 7,  58 => 6,  56 => 5,  51 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/Annonces/Annonces/Fields/status.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/admin/Annonces/Annonces/Fields/status.html.twig");
    }
}
