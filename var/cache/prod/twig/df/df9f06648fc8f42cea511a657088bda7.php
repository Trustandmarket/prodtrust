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

/* cssTemplates/chat.css.twig */
class __TwigTemplate_bbb9c16edee60149a193f8211bad950f extends Template
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
\t.chat-menu a {
\t\tborder-radius: 50%;
\t\tbackground: #212529;

\t\twidth: 100%;
\t}
\t
\t.chat-menu i.new-message{
      color: #febb33;
      -webkit-animation: ring 2s ease infinite;
      animation: ring 2s ease infinite;
      transform-origin-x: 50%;
      transform-origin-y: 0px;
      transform-origin-z: initial;
    }

\t@-webkit-keyframes ring {
\t\t0% {
\t\t\t-webkit-transform: rotate(-15deg);
\t\t\ttransform: rotate(-15deg);
\t\t}

\t\t2% {
\t\t\t-webkit-transform: rotate(15deg);
\t\t\ttransform: rotate(15deg);
\t\t}

\t\t4% {
\t\t\t-webkit-transform: rotate(-18deg);
\t\t\ttransform: rotate(-18deg);
\t\t}

\t\t6% {
\t\t\t-webkit-transform: rotate(18deg);
\t\t\ttransform: rotate(18deg);
\t\t}

\t\t8% {
\t\t\t-webkit-transform: rotate(-22deg);
\t\t\ttransform: rotate(-22deg);
\t\t}

\t\t10% {
\t\t\t-webkit-transform: rotate(22deg);
\t\t\ttransform: rotate(22deg);
\t\t}

\t\t12% {
\t\t\t-webkit-transform: rotate(-18deg);
\t\t\ttransform: rotate(-18deg);
\t\t}

\t\t14% {
\t\t\t-webkit-transform: rotate(18deg);
\t\t\ttransform: rotate(18deg);
\t\t}

\t\t16% {
\t\t\t-webkit-transform: rotate(-12deg);
\t\t\ttransform: rotate(-12deg);
\t\t}

\t\t18% {
\t\t\t-webkit-transform: rotate(12deg);
\t\t\ttransform: rotate(12deg);
\t\t}

\t\t20% {
\t\t\t-webkit-transform: rotate(0deg);
\t\t\ttransform: rotate(0deg);
\t\t}
\t}

\t@keyframes ring {
\t\t0% {
\t\t\t-webkit-transform: rotate(-15deg);
\t\t\t-ms-transform: rotate(-15deg);
\t\t\ttransform: rotate(-15deg);
\t\t}

\t\t2% {
\t\t\t-webkit-transform: rotate(15deg);
\t\t\t-ms-transform: rotate(15deg);
\t\t\ttransform: rotate(15deg);
\t\t}

\t\t4% {
\t\t\t-webkit-transform: rotate(-18deg);
\t\t\t-ms-transform: rotate(-18deg);
\t\t\ttransform: rotate(-18deg);
\t\t}

\t\t6% {
\t\t\t-webkit-transform: rotate(18deg);
\t\t\t-ms-transform: rotate(18deg);
\t\t\ttransform: rotate(18deg);
\t\t}

\t\t8% {
\t\t\t-webkit-transform: rotate(-22deg);
\t\t\t-ms-transform: rotate(-22deg);
\t\t\ttransform: rotate(-22deg);
\t\t}

\t\t10% {
\t\t\t-webkit-transform: rotate(22deg);
\t\t\t-ms-transform: rotate(22deg);
\t\t\ttransform: rotate(22deg);
\t\t}

\t\t12% {
\t\t\t-webkit-transform: rotate(-18deg);
\t\t\t-ms-transform: rotate(-18deg);
\t\t\ttransform: rotate(-18deg);
\t\t}

\t\t14% {
\t\t\t-webkit-transform: rotate(18deg);
\t\t\t-ms-transform: rotate(18deg);
\t\t\ttransform: rotate(18deg);
\t\t}

\t\t16% {
\t\t\t-webkit-transform: rotate(-12deg);
\t\t\t-ms-transform: rotate(-12deg);
\t\t\ttransform: rotate(-12deg);
\t\t}

\t\t18% {
\t\t\t-webkit-transform: rotate(12deg);
\t\t\t-ms-transform: rotate(12deg);
\t\t\ttransform: rotate(12deg);
\t\t}

\t\t20% {
\t\t\t-webkit-transform: rotate(0deg);
\t\t\t-ms-transform: rotate(0deg);
\t\t\ttransform: rotate(0deg);
\t\t}
\t}
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cssTemplates/chat.css.twig";
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
        return new Source("", "cssTemplates/chat.css.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/cssTemplates/chat.css.twig");
    }
}
