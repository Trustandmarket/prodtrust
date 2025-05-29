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

/* profile/js/creerDevisAnnonce.html.twig */
class __TwigTemplate_843b4a4f490b7ed3b7a77b1b8fad59aa extends Template
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
    \$('#msform').on('submit', function (e) {
        e.preventDefault();
        \$('#prix').val(\$('#prix').val());
        \$('#send').addClass('running');
        let temp = tinymce.activeEditor.getContent();
        \$('#description').val(temp);
        let \$form = \$(this);
        let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
        console.log(temp)
        let data = (formdata !== null) ? formdata : \$form.serialize() + '&description=' + temp;
        console.log(data);
        \$.ajax({
            url: \$form.attr('action'),
            type: \$form.attr('method'),
            processData: false,
            contentType: false,
            data: data,
            success: function (response) {
                console.log(response);
                if (response > 0) {
                    toastr.clear();
                    \$('#body').hide();
                    \$('#succes').show();
                    \$('html,body').scrollTop(0);
                    \$('#send').removeClass('running');
                    window.setTimeout(function () {
                        window.location = \"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annonces");
        yield "\";
                    }, 1000);
                } else if (response == 0) {
                    toastr.clear();
                    \$('#send').removeClass('running');
                    if (\$(\"#nom_prenom_email\").length) {
                        if (\$('#nom_prenom_email').val().trim() != \"\") {
                            toastr.error('Erreur lors de l\\'edition du devis...');
                        }
                    } else {
                        toastr.error('Erreur lors de la creation de l\\'annonce');
                    }
                }
            },
            error: function (response) {
                toastr.clear();
                \$('#send').removeClass('running');
                if (\$(\"#nom_prenom_email\").length) {
                    if (\$('#nom_prenom_email').val().trim() != \"\") {
                        toastr.error('Erreur lors de l\\'edition du devis...');
                    }
                } else {
                    toastr.error('Erreur lors de la creation de l\\'annonce');
                }
            }
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
        return "profile/js/creerDevisAnnonce.html.twig";
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
        return array (  71 => 28,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/js/creerDevisAnnonce.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profile/js/creerDevisAnnonce.html.twig");
    }
}
