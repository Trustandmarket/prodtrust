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

/* partials/project.html.twig */
class __TwigTemplate_e30e342a66f87348edfcfd610de1d016 extends Template
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
        bottom: 150px;
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

    .p-pop-up1 {
        margin-bottom: 2rem;
    }

    .p-pop-titre1,
    .p-pop-titre2 {
        font-family: \"Palanquin Dark\";
    }

    .p-pop-content1 {
        background: #53b4a6;
        color: white;
        padding: 10px;
        text-decoration: none;
        font-family: \"Source Sans Pro\";
    }

    .p-pop-content2 {
        background: black;
        color: white;
        padding: 10px;
        text-decoration: none;
        font-family: \"Source Sans Pro\";
    }

    @media only screen and (max-width: 500px) {
        #dialoguons {
            width: 70%;
        }
    }

    @media only screen and (min-width: 501px) {
        #dialoguons {
            width: 40%;
        }
    }

    @media only screen and (min-width: 769) and (max-width: 1024px) {
        #dialoguons {
            width: 30%;
        }
    }

    @media only screen and (min-width: 1025px) {
        #dialoguons {
            width: 19%;
        }
    }
    
</style>
<div>
    ";
        // line 109
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/project.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  120 => 109,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/project.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/partials/project.html.twig");
    }
}
