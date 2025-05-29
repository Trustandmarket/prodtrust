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

/* header-new-design.html.twig */
class __TwigTemplate_195b4189d81c281f9c817a449b9fc65a extends Template
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
    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: initial !important;
    }

    .image-header {
        width: 35px;
        height: 35px;
        object-fit: cover;
    }

    .navbar {
        box-shadow: none !important;
    }

    .searchDiv {
        width: 461px;
        background: white;
        padding: 1.8px 4px;
        border-radius: 30px;
    }

    .searchDiv .homeFilterFormButton {
        font-size: 11px;
    }

    .searchDiv .form-control {
        font-size: 11px;
    }

    .customRow {
        display: flex;
        align-items: center;
    }

    .form-field {
        width: 25%;
        /* font-family: 'Palanquin Dark',sans-serif; */
        padding-right: 10px;
        padding-left: 10px;
        position: relative;
        display: flex;
        align-items: center;
    }

    /* .form-field>label{
\t\t\t\t\tposition: absolute;
\t\t\t\t} */

    .form-field select,
    .form-field select:focus,
    .form-field select:focus-visible,
    .form-field .code_postal_ville,
    .form-field .code_postal_ville:focus,
    .form-field .code_postal_ville:focus-visible {
        border: transparent !important;
        box-shadow: none !important;
        -moz-appearance: none;
        /* Firefox */
        -webkit-appearance: none;
        /* Safari and Chrome */
        appearance: none;
        background: none;
        padding: 0px;
    }

    .form-field .code_postal_ville::-webkit-input-placeholder {
        color: #000;
    }

    /* .type_prestation_search>button{
\t\t\t\t\tdisplay: none !important;
\t\t\t\t} */

    /* .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn){
\t\t\t\t\tmargin: 0 !important;
\t\t\t\t\tpadding: 0 !important;
\t\t\t\t\theight: 0 !important;
\t\t\t\t\twidth: 0 !important;
\t\t\t\t} */

    .barre_verticale {
        width: 1px;
        height: 30px;
        background-color: gray;
    }

    .customRow .bootstrap-select {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .customRow .bootstrap-select>.dropdown-toggle.bs-placeholder,
    .customRow .bootstrap-select>.dropdown-toggle.bs-placeholder:active,
    .customRow .bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
    .customRow .bootstrap-select>.dropdown-toggle.bs-placeholder:hover,
    .customRow .bootstrap-select>.dropdown-toggle {
        color: #000;
        background: transparent !important;
        margin: 0;
        padding: 0;
        box-shadow: none;
        border: 0px;
        font-family: 'Palanquin Dark', sans-serif !important;
        font-size: 11px;
        font-weight: 400;
        line-height: 1.5;
        text-transform: none;
        outline: none !important;
    }

    .customRow .bootstrap-select .dropdown-menu {
        top: 1.3rem !important;
        border-radius: 15px;
    }

    .customRow .bootstrap-select .dropdown-menu li a span.text,
    .customRow .bootstrap-select .dropdown-menu li {
        font-family: 'Source Sans Pro', sans-serif !important;
        font-size: 12px !important;
    }

    .customRow .bootstrap-select .dropdown-menu li:hover {
        background-color: #f7f7f7;
    }

    .customRow .bootstrap-select .dropdown-toggle .filter-option-inner-inner::-webkit-scrollbar {
        width: 0;
        /* Remove scrollbar space */
        background: transparent;
        /* Optional: just make scrollbar invisible */
    }

    .customRow .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
        overflow: auto;
        text-overflow: clip;
        white-space: initial;
    }

    .customRow .dropdown-toggle::after {
        display: none;
    }

    a.link-card-actu {
        display: block;
        text-decoration: none;
        width: 329px;
        margin-top: 2rem;
        max-width: 100%;
        background-color: black;
        border-radius: 15px;
        border: 1px solid #f17c30;
        min-height: 5rem;
        padding: 15px;
        color: white;
        margin-bottom: 3rem;
        box-sizing: content-box;
    }

    @media only screen and (max-width: 768px) {
        .homeLayout header {
            height: auto !important;
        }

        .mobile_filter {
            display: block !important;
        }

        #imageHolder {
            height: 100% !important;
        }

        .searchDiv {
            border: 1px solid black;
            width: 100%;
            display: none;
        }

        .titre_filter h1 {
            display: none;
        }

        .titre_filter {
            width: 90% !important;
            margin-top: 0px !important;
            place-items: center;
        }

        .block_conjoint {
            margin-top: 0rem;
        }

        .block_conjoint .block_lien .col-md-12 {
            min-height: 197px !important;
            margin-bottom: 1rem;
            width: 100% !important;
        }

        .logoButtonHeader {
            width: 100%;
            justify-content: space-between;
            align-items: center;
        }

        .block_conjoint .block_lien a {
            text-align: left !important;
        }

        .block_conjoint .block_lien p {
            margin-top: 5rem !important;
        }

        .block_conjoint .block_lien a:hover {
            text-decoration: none;
        }

        .block_conjoint h3 {
            font-size: 25px;
        }

        .form-field {
            padding-bottom: 15px;
            padding-top: 15px;
            border-right: transparent;
            /* border-bottom: 1px solid black; */
        }

        #custom-filter {
            border: 0px solid #f17c30;
            background: transparent;
            padding: 0px;
        }

        .searchDiv .homeFilterFormButton {
            margin-top: 5px !important;
            margin: 5px !important;
            font-size: 6px !important;
        }

        .searchDiv .form-field {
            padding-bottom: 0;
            padding-top: 0;
        }

        #custom-filter input[type=text] {
            margin-top: 0;
        }

        a.link-card-actu {
            width: 100% !important;
            margin-left: 0rem;
            box-sizing: inherit !important;
        }
    }

    @media only screen and (max-width: 767px) {
        a.link-card-actu {
            margin-top: 2rem !important;
        }
    }

    @media only screen and (max-width: 490px) {

        a.link-card-actu {
            margin-top: 0rem !important;
            margin-bottom: 0rem !important;
        }
    }

    @media only screen and (min-width: 769px) and (max-width: 922px) {
        .searchDiv {
            width: 90%;
        }
    }

    @media only screen and (min-width: 1300px) {
        .searchDiv {
            position: relative;
            left: 4rem;
        }
    }

    .navbar-collapse {
        flex-grow: 0;
    }

    .search-title-mob {
        text-align: center;
    }

    .titre_filter {
        width: 37%;
        place-items: center;
    }

    .block_conjoint {
        margin-top: 2rem;
    }

    .block_conjoint .block_lien .col-md-12 {
        background-color: white;
        border: 1px solid #FF7E10;
        padding: 10px;
        min-height: 275px;
        border-radius: 7px;
    }

    .block_conjoint .block_lien a {
        text-align: center;
        color: #000;
        font-family: 'Palanquin', sans-serif;
    }

    .block_conjoint .block_lien a:hover {
        text-decoration: none;
    }

    .searchDiv .dropdown-menu.inner.show {
        position: relative !important;
        top: 0px !important;
    }

    .searchDiv .dropdown-menu {
        left: 0px !important;
    }

    .block_lien h3 {
        font-weight: bold;
    }
</style>
<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar pr-5 pl-5\"
    style=\"display: flex;justify-content: space-between;\">
    <div style=\"display: flex;\" class=\"logoButtonHeader\">
        <a class=\"navbar-brand\" href=\"/";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 338), "getLocale", [], "method", false, false, false, 338), "html", null, true);
        yield "\">
            <img src=\"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->prerender($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_tm.svg")), "html", null, true);
        yield "\" width=\"40\" height=\"40\" alt=\"logo\">
        </a>
        ";
        // line 341
        yield from $this->loadTemplate("headerMenuSite.html.twig", "header-new-design.html.twig", 341)->unwrap()->yield($context);
        // line 342
        yield "    </div>
    ";
        // line 343
        yield from $this->loadTemplate("headerMenuSite.html.twig", "header-new-design.html.twig", 343)->unwrap()->yield($context);
        // line 344
        yield "    <!-- Collapsible content -->
</nav>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "header-new-design.html.twig";
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
        return array (  397 => 344,  395 => 343,  392 => 342,  390 => 341,  385 => 339,  381 => 338,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "header-new-design.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/header-new-design.html.twig");
    }
}
