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

/* scriptautomatisationBrevo.html.twig */
class __TwigTemplate_91a48886f83413967e2f02598654a16d extends Template
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
        yield "<!-- Brevo automatisation {literal} -->
";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 2) == "prod")) {
            // line 3
            yield "    <script src=\"https://cdn.brevo.com/js/sdk-loader.js\" async></script>
    <script>
        // Version: 2.0
        window.Brevo = window.Brevo || [];
        Brevo.push([
            \"init\",
            {
            client_key: \"xm9yyt6ib4f6j92a9jxioufg\",
            // Optional: Add other initialization options, see documentation
            }
        ]);
    </script>    
";
        }
        // line 16
        yield "<!-- /Brevo automatisation {/literal} -->";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "scriptautomatisationBrevo.html.twig";
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
        return array (  62 => 16,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "scriptautomatisationBrevo.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/scriptautomatisationBrevo.html.twig");
    }
}
