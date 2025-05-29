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

/* partials/js/videoButton.js.twig */
class __TwigTemplate_e97a8ba6f66e6b42e2905cdb4542e857 extends Template
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
        if (array_key_exists("youtube_url", $context)) {
            // line 2
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["youtube_url"] ?? null), "autoload", [], "any", false, false, false, 2) == "yes")) {
                // line 3
                yield "        \$(\"#youtubeVideoModal\").modal(\"hide\");

        \$(\".closeVideoBtnModal\").click(function (e) {
            e.preventDefault();
            \$(\"#youtubeVideoModal\").modal('hide');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", \"\");
        });

        \$(\".playVideoButton i\").click(function () {
            \$(\"#youtubeVideoModal\").modal('toggle');
            \$(\".hs-responsive-embed-youtube iframe\").attr(\"src\", 'https://www.youtube.com/embed/' + \$(\"#youtubeVideoModal #youtube_url\").val());
        });
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
        return "partials/js/videoButton.js.twig";
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
        return array (  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/js/videoButton.js.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/partials/js/videoButton.js.twig");
    }
}
