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

/* profile/sous_categorie.html.twig */
class __TwigTemplate_ef6289e7ef82ea77cc9313e4c7e8b845 extends Template
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
        if ((($context["option"] ?? null) == 0)) {
            // line 2
            yield "<div class=\"annonces-input-data\" style=\"display:block;\">
\t \t<h2 class=\"fs-title\">";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.type-de-prestations"), "html", null, true);
            yield "*</h2>
\t\t<h3 class=\"fs-subtitle\">";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profil-utilisateur.formulaire-creer-annonce.contrainte-de-choix"), "html", null, true);
            yield "</h3>
\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categorie"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 6
                yield "

\t<div class=\"custom-control custom-radio mb-2\">
\t    <input type=\"radio\" class=\"custom-control-input souscategorie\" id=\"cat";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 9), "html", null, true);
                yield "\"  name=\"souscategorie\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 9), "html", null, true);
                yield "\" required>
\t    <label class=\"custom-control-label\" for=\"cat";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 10), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 10) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 10), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 10), "html", null, true);
                }
                yield "</label>
\t</div>

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 15
        yield "</div>
";
        // line 16
        if ((($context["option"] ?? null) == 1)) {
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categorie"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 18
                yield "<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "termTaxonomyId", [], "any", false, false, false, 18), "html", null, true);
                yield "\">";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 18), "locale", [], "any", false, false, false, 18) == "en") && (CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 18) != ""))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 18), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 18), "html", null, true);
                }
                yield "</option>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/sous_categorie.html.twig";
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
        return array (  96 => 18,  92 => 17,  90 => 16,  87 => 15,  70 => 10,  64 => 9,  59 => 6,  55 => 5,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/sous_categorie.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profile/sous_categorie.html.twig");
    }
}
