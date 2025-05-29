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

/* chat/messages-content.html.twig */
class __TwigTemplate_60536b8ff74816f38435576f8e8dccd1 extends Template
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
        $context["date"] = null;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 3
            yield "  ";
            if ((($context["date"] ?? null) != $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getSentDate", [], "any", false, false, false, 3), "d/m/Y"))) {
                // line 4
                yield "    ";
                $context["date"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getSentDate", [], "any", false, false, false, 4), "d/m/Y");
                // line 5
                yield "    <!-- Date of day chatting -->
    <div class=\"col-md-12 text-center my-3 today-date\">
      <p> ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date"] ?? null), "html", null, true);
                yield " </p>
    </div>
  ";
            }
            // line 10
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getSender", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10) == CoreExtension::getAttribute($this->env, $this->source, ($context["destinateur"] ?? null), "id", [], "any", false, false, false, 10))) {
                // line 11
                yield "    <!-- From message -->
    <div class=\"offset-md-4 col-md-8 receiver\">
      <div class=\"row receiver-msg mb-2 float-right\">
        <div class=\"col-left pl-2 rounded m-2 p-2\">
          <p class=\"text-msg\">";
                // line 15
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getContent", [], "any", false, false, false, 15), "html", null, true));
                yield "</p>
        </div>
        <div class=\"col-right\">
          <img src=\"";
                // line 18
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["destinateur"] ?? null), "avatar", [], "any", false, false, false, 18)) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinateur"] ?? null), "avatar", [], "any", false, false, false, 18)), "html", null, true);
                } else {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
                    yield " ";
                }
                yield "\" class=\"img-fluid rounded-circle avatar-message\" alt=\"\">
        </div>
      </div>
    </div>
  ";
            } else {
                // line 23
                yield "    <!-- I'm receiver -->
    <div class='col-md-8 sending'>
      <div class='row sender-msg mb-2'>
        <div class='col-left'>
          <img src=\"";
                // line 27
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 27)) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 27)), "html", null, true);
                } else {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
                    yield " ";
                }
                yield "\" class='img-fluid rounded-circle avatar-message' alt=''>
        </div>
        <div class='col-right pl-2 rounded m-2 p-3'>
          <p class='text-msg'>";
                // line 30
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "getContent", [], "any", false, false, false, 30), "html", null, true));
                yield "</p>
        </div>
      </div>
    </div>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "<input type=\"hidden\" name=\"destinataire-img\" id=\"destinataire-img\" value=\"";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 36)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["destinataire"] ?? null), "avatar", [], "any", false, false, false, 36)), "html", null, true);
        } else {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/profile/avatar-profile.png"), "html", null, true);
            yield " ";
        }
        yield "\">";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chat/messages-content.html.twig";
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
        return array (  125 => 36,  113 => 30,  100 => 27,  94 => 23,  79 => 18,  73 => 15,  67 => 11,  64 => 10,  58 => 7,  54 => 5,  51 => 4,  48 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "chat/messages-content.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/chat/messages-content.html.twig");
    }
}
