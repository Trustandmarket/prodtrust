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

/* menuProfile.html.twig */
class __TwigTemplate_f3002c4d94aec4dadc82afae3775cfc0 extends Template
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
        yield "<div class=\"row\">
    <div class=\"col-12\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_dashboard");
        yield "\">Compte</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_name"] ?? null), "html", null, true);
        yield "</li>
                <li>
                    ";
        // line 9
        if (array_key_exists("infos_bulle", $context)) {
            // line 10
            yield "                        <span class=\"nav-link popover_infos px-2 py-0\" data-html=\"true\" data-container=\"body\"
                              data-toggle=\"popover\"
                              data-placement=\"right\" data-content=\"\">
            <i style=\"color: #f17c30;\" class=\"fas fa-question-circle fa-lg\"></i>
        </span>
                    ";
        }
        // line 15
        yield "</li>
            </ol>
        </nav>
    </div>
    <div class=\"col-12\">
        <h1 class=\"d-flex justify-content-center justify-content-md-start justify-content-sm-center\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page_name"] ?? null), "html", null, true);
        yield "</h1>
        <hr class=\"divider bg-dark mt-0 pt-0\"/>
    </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "menuProfile.html.twig";
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
        return array (  75 => 20,  68 => 15,  60 => 10,  58 => 9,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "menuProfile.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/menuProfile.html.twig");
    }
}
