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

/* partials/js/cookie.js.twig */
class __TwigTemplate_35551c24d7cca8764c3b046ea69ea8de extends Template
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
        yield "<script>
    window.axeptioSettings = {
    clientId: \"64920a1858487cabef508342\",
};

    (function(d, s) {
    var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
    e.async = true; e.src = \"//static.axept.io/sdk.js\";
    t.parentNode.insertBefore(e, t);
})(document, \"script\");
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/js/cookie.js.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/js/cookie.js.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/partials/js/cookie.js.twig");
    }
}
