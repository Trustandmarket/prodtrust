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

/* chat/destinataire-details-haut.html.twig */
class __TwigTemplate_ec216dccae8aa2c71a5384f8f243f267 extends Template
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
        yield "<div class=\"col-md-7 text-right\">
  <img src=\"";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 2)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 2)), "html", null, true);
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
            yield " ";
        }
        yield "\" class=\"img-fluid rounded-circle header-chat-img\" alt=\"\">&nbsp;&nbsp;<span class=\"header-chat-name\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "first_name", [], "any", false, false, false, 2), "html", null, true);
        yield "
    ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "last_name", [], "any", false, false, false, 3), "html", null, true);
        yield "</span>
</div>
<div class=\"col-md-5 text-right\">
  <a href=\"#\" class=\"lightblue\">
    <i class=\"fa fa-download fs-18\" aria-hidden=\"true\"></i>
  </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"#\" class=\"lightblue\">
    <i class=\"fa fa-question-circle fs-19\" aria-hidden=\"true\"></i>
  </a>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chat/destinataire-details-haut.html.twig";
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
        return array (  58 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "chat/destinataire-details-haut.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/chat/destinataire-details-haut.html.twig");
    }
}
