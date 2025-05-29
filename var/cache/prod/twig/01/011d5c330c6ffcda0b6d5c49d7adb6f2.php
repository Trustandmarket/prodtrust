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

/* chat/destinataire-details.html.twig */
class __TwigTemplate_8a9f946a3fb11059a939fe536beee31e extends Template
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
        yield "<div class=\"row user-details p-2 pl-3 pr-3\">
  <div class=\"col-left\">
    <img src=\"";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 3)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 3)), "html", null, true);
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
            yield " ";
        }
        yield "\" class=\"img-fluid rounded-circle avatar-detail\" alt=\"\">
  </div>
  <div class=\"col-right pl-2\">
    <h6>
      <span class=\"username\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "first_name", [], "any", false, false, false, 7), "html", null, true);
        yield "
        ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "last_name", [], "any", false, false, false, 8), "html", null, true);
        yield "</span>
    </h6>
    <p class=\"brief\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
    <p class=\"ratings\">
      <i class=\"fa fa-star lightblue\"></i>
      <i class=\"fa fa-star lightblue\"></i>
      <i class=\"fa fa-star lightblue\"></i>
      <i class=\"fa fa-star lightblue\"></i>
      <i class=\"fa fa-star lightblue\"></i>
      <strong>
        <a target=\"_blank\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_detailsProfessionnel", ["id" => ("infos-profil-" . CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "id", [], "any", false, false, false, 18))]), "html", null, true);
        yield "\">";
        // line 19
        yield "          ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.profil-vendeur.voir-avis"), "html", null, true);
        yield "</a><br>
        <span class=\"mission-counter\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "annonces_publiees", [], "any", false, false, false, 20), "html", null, true);
        yield "
          ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.annonces"), "html", null, true);
        yield "</span>
      </strong>
    </p>
  </div>
</div>
<!-- Next section -->
";
        // line 55
        yield "<!-- Envoyer un devis -->
<div class=\"row mt-5\">
  <div class=\"col-md-12\">
<a ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 58), "roles", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            yield " ";
            if (((($context["r"] == "ROLE_SUPER_ADMIN") || ($context["r"] == "ROLE_AUTO_ENTREPRENEUR")) || ($context["r"] == "ROLE_SOCIETE"))) {
                yield " href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_creerAnnonces");
                yield "\" target=\" _blank\" ";
            }
            yield " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " class=\"btn btn-primary btn-block send-quote\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("chat.envoyer-un-devis"), "html", null, true);
        yield "</a>









  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chat/destinataire-details.html.twig";
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
        return array (  106 => 58,  101 => 55,  92 => 21,  88 => 20,  83 => 19,  80 => 18,  69 => 10,  64 => 8,  60 => 7,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "chat/destinataire-details.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/chat/destinataire-details.html.twig");
    }
}
