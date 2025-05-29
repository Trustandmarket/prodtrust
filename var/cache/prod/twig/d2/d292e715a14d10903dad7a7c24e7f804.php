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

/* partials/otherPagesVideoModal.html.twig */
class __TwigTemplate_f97f1dbec36099cc3c9e51880fb52a5d extends Template
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
        yield "<!-- Modal -->
";
        // line 2
        if (array_key_exists("youtube_url", $context)) {
            // line 3
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["youtube_url"] ?? null), "autoload", [], "any", false, false, false, 3) == "yes")) {
                // line 4
                yield "        <div class=\"modal fade\" id=\"youtubeVideoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"youtubeVideoModalTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
                <div class=\"modal-content\" style=\"background-color: transparent;box-shadow: none;\">
                    <div class=\"modal-body\">
                        <span aria-hidden=\"true\" class=\"closeVideoBtnModal\">&times;</span>
                        <div class=\"hs-responsive-embed-youtube\">
                            <iframe class=\"rounded\" src=\"\" frameborder=\"0\" allowfullscreen=\"\"></iframe>
                        </div>
                        <input hidden value=\"";
                // line 12
                if (($context["youtube_url"] ?? null)) {
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["youtube_url"] ?? null), "autoload", [], "any", false, false, false, 12) == "yes")) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["youtube_url"] ?? null), "optionValue", [], "any", false, false, false, 12), "html", null, true);
                    }
                }
                yield "\" id=\"youtube_url\"/>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/otherPagesVideoModal.html.twig";
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
        return array (  60 => 12,  50 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/otherPagesVideoModal.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/partials/otherPagesVideoModal.html.twig");
    }
}
