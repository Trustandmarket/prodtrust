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

/* base.html.twig */
class __TwigTemplate_8413a40a58c7eb7f7654b03ed8ef99fb extends Template
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
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  ";
        // line 6
        yield "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 10
        yield "    <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        yield "\">
    <title>";
        // line 11
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">

 ";
        // line 16
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 119
        yield "\t";
        // line 120
        yield "    ";
        yield from $this->loadTemplate("scriptautomatisationBrevo.html.twig", "base.html.twig", 120)->unwrap()->yield($context);
        // line 121
        yield "    ";
        yield from $this->loadTemplate("scriptchatBrevo.html.twig", "base.html.twig", 121)->unwrap()->yield($context);
        // line 122
        yield "</head>
<body class=\"\">
    ";
        // line 124
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 126
        yield "  <!-- jQuery -->
  <script src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.4.1.min.js"), "html", null, true);
        yield "\"></script>
  <!-- jQuery plugin for datepicker -->
 ";
        // line 130
        yield " <script type=\"text/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/gijgo-js/gijgo.min.2.js"), "html", null, true);
        yield "\"></script>
  <!-- Bootstrap Js -->
  <script src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>

  <!-- Datepicker config -->
  <script>
      \$(document).ready(function(){
          \$('#inputNaissance').datepicker({
              uiLibrary: 'bootstrap4',
              size: 'large',
              showRightIcon: false,
              iconsLibrary: 'fontawesome'
          });

          \$(\"div[role='wrapper']\").append(\"<label for='inputNaissance'>Date de naissance</label><div class='valid-feedback'>OK!</div><div class='invalid-feedback'>Ce champ contient une erreur!</div>\");
      });
  </script>
  ";
        // line 147
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 149
        yield "</body>
</html>
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connexion.titre"), "html", null, true);
        yield " | Trust & Market ";
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    <!-- Font awesome and date picker -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\" rel=\"stylesheet\"> -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/gijgo.min.css"), "html", null, true);
        yield "\">
    <!-- Font awesome and date picker -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/gijgo-css/style.css"), "html", null, true);
        yield "\">

        <style>
      body{
        background: url(";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/john-raptis.png")), "html", null, true);
        yield ") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      .white-t{
        color: #fff;
      }
      .float-r {
        float: right;
      }
      .cgu{
          color:#ddd;
          font-size: 12.5px;
      }

      .special-link{
        text-decoration: underline;
        color: #fff;
      }
      .special-link:hover{
        text-decoration: underline;
        color: #f17c30;
      }

      .special-below-link{
        color:#fff;
      }
      .special-below-link:hover{
        text-decoration: none;
        color:#f17c30;
      }

      .registration-button{
        background: #f17c30;
        border: none;
        font-size:15px;
      }
      .registration-button:hover{
        color:#f17c30;
        background: #fff;
        border: none;
      }

      .input-custom{
        background-color: rgba(0, 0, 0, 0.15);
        color:#ddd;
      }
      .input-custom:focus{
        background-color: rgba(0, 0, 0, 0.15);
        border-color: #fff;
        color: #fff;
      }

    select option {
        margin: 40px;
        background: rgba(0, 0, 0, 0.3);
        color: #fff;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
    }

      .inputNaissance::placeholder{
          color: #ddd;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      @media only screen and (max-width: 768px) {
        /* For mobile phones: */
        body{
            background-size: auto;
        }
      }
    </style>
        <!-- Custom styles for this template -->
    <link href=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/floating-labels.css")), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        yield from [];
    }

    // line 124
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 125
        yield "    ";
        yield from [];
    }

    // line 147
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 148
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  296 => 148,  289 => 147,  284 => 125,  277 => 124,  269 => 116,  178 => 28,  171 => 24,  164 => 20,  159 => 17,  152 => 16,  139 => 11,  129 => 9,  122 => 149,  120 => 147,  102 => 132,  96 => 130,  91 => 127,  88 => 126,  86 => 124,  82 => 122,  79 => 121,  76 => 120,  74 => 119,  72 => 16,  64 => 11,  59 => 10,  57 => 9,  52 => 6,  47 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/base.html.twig");
    }
}
