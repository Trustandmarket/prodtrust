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

/* partials/js/top_button.html.twig */
class __TwigTemplate_261e8000a4b071edeca5ac2bfc56062a extends Template
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
        yield "<script>\$(document).ready(function(){

    \$(window).scroll(function(){
        if(\$(this).scrollTop() > 40 && \$(window).width() > 767){
            \$('#topBtn').fadeIn();
        }else{
            \$('#topBtn').fadeOut();
        }
    });

    \$(\"#topBtn\").click(function(){
        \$('html ,body').animate({scrollTop: 0}, 800);
    });
});

</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/js/top_button.html.twig";
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
        return new Source("", "partials/js/top_button.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/partials/js/top_button.html.twig");
    }
}
