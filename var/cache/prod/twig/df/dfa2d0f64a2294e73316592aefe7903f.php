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

/* @EasyAdmin/crud/includes/_batch_action_modal.html.twig */
class __TwigTemplate_69a00bbb4840d1edfcaaca0a8634d510 extends Template
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
        yield "<div id=\"modal-batch-action\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4 id=\"batch-action-confirmation-title\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.title", array(), "EasyAdminBundle"), "html", null, true);
        yield "</h4>
                <p>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.content", array(), "EasyAdminBundle"), "html", null, true);
        yield "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-secondary\">
                    <span class=\"btn-label\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.cancel", array(), "EasyAdminBundle"), "html", null, true);
        yield "</span>
                </button>
                <button type=\"button\" data-bs-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-batch-action-button\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    <span class=\"btn-label\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_action_modal.action", array(), "EasyAdminBundle"), "html", null, true);
        yield "</span>
                </button>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/includes/_batch_action_modal.html.twig";
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
        return array (  66 => 14,  59 => 10,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/includes/_batch_action_modal.html.twig");
    }
}
