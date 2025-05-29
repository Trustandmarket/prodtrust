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

/* partials/videoButton.html.twig */
class __TwigTemplate_5315ba51908fd0cb0843547a7a6d4e60 extends Template
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
        yield "<style>
    .playVideoButton {
        display: block;
        position: fixed;
        width: 100px;
        height: 100px;
        bottom: 60px;
        right: 20px;
        z-index: 9999999999;
        cursor: pointer;
        font-size: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #f17c30;
    }

    .playVideoButton i {
        font-size: 60px;
    }

    #topBtn {
        bottom: 60px;
    }
</style>
<div>
    ";
        // line 27
        if (array_key_exists("youtube_url", $context)) {
            // line 28
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["youtube_url"] ?? null), "autoload", [], "any", false, false, false, 28) == "yes")) {
                // line 29
                yield "            <p class=\"playVideoButton\">
                <i class=\"fas fa-play\"></i>
            </p>";
            }
            // line 32
            yield "    ";
        }
        // line 33
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/videoButton.html.twig";
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
        return array (  83 => 33,  80 => 32,  75 => 29,  72 => 28,  70 => 27,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/videoButton.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/partials/videoButton.html.twig");
    }
}
