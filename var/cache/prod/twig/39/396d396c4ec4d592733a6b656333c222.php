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

/* partials/js/searchForm.html.twig */
class __TwigTemplate_20ade42c7d32b89a4110c6fc93c3059d extends Template
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
        yield "<script type=\"text/javascript\">
\$(document).ready(function () { 
\t\$('.type_prestation1,.type_prestation2').on('change', function () {
\t\tvar lang = \$('#page_lang').val();
\t\tvar id = \$(this).val();
\t\tvar url = \"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonces_get_sous_categories_xhr", ["_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 6), "locale", [], "any", false, false, false, 6)]), "html", null, true);
        yield "\";
\t\tif (id != \"\") {
\t\t\t\$.ajax({
\t\t\t\turl: url,
\t\t\t\tmethod: \"get\",
\t\t\t\tdata: {
\t\t\t\ttype_prestation: id
\t\t\t},
\t\t\tsuccess: function (data) {
\t\t\t\t\$('select.services_proposes').empty();
\t\t\t\t\$('select.services_proposes').append(\"<option value='all' disabled='disabled' selected='selected'>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.formulaire-champs.services-proposes"), "html", null, true);
        yield "</option>\");
\t\t\t\t\$('select.searchSelectPicker').selectpicker('refresh');
\t\t\t\tconsole.log(data.sous_categories);
\t\t\t\tif (data.sous_categories) {
\t\t\t\t\tdata.sous_categories.forEach(function (e) {
\t\t\t\t\t\tif(lang=='fr'){
\t\t\t\t\t\t\t\$('select.services_proposes').append(\"<option value='\" + e.slug + \"'>\" + e.name + \"</option>\");
\t\t\t\t\t\t}else{
\t\t\t\t\t\t\t\$('select.services_proposes').append(\"<option value='\" + e.slug + \"'>\" + e.content + \"</option>\");
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\t\$('select.searchSelectPicker').selectpicker('refresh');

\t\t\t},
\t\t\t\terror: function (xhr) {console.error(xhr);}
\t\t\t});
\t\t}
\t});
});
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/js/searchForm.html.twig";
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
        return array (  62 => 16,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "partials/js/searchForm.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/partials/js/searchForm.html.twig");
    }
}
