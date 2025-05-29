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

/* profile/js/brouillonDevisAnnonce.html.twig */
class __TwigTemplate_2ee5aa0222d0288456567c78bb6234e1 extends Template
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
    \$('.brouillon').on('click', function (e) {
        \$('#state').val('brouillon');
        if (\$('#nom').val() == '') {
            \$('#nom').val('--');
        }
        if (\$('#description').val() == '') {
            \$('#description').val('--');
        }

        let \$form = \$('#msform');
        let formdata = (window.FormData) ? new FormData(\$form[0]) : null;
        let data = (formdata !== null) ? formdata : \$form.serialize();

        \$('#state').val('brouillon');
        \$.ajax({
            url: \$form.attr('action'),
            type: \$form.attr('method'),
            processData: false,
            contentType: false,
            data: data,
            success: function (response) {

                if (response > 0) {
                    toastr.clear();
                    \$('#body').hide();
                    \$('#succes').show();
                    \$('html,body').scrollTop(0);
                    \$('#send').removeClass('running');
                    toastr.clear();
                    toastr.success('Sauvegarde effectué avec succes');
                    if (\$(\"#nom_prenom_email\").length) {
                        if (\$('#nom_prenom_email').val().trim() != \"\") {
                            window.setTimeout(function () {
                                window.location = \"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "devis-en-brouillon"]);
        yield "\";
                            }, 1000);
                        }
                    } else {
                        window.setTimeout(function () {
                            window.location = \"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_annoncesTag", ["tag" => "annonces-en-brouillon"]);
        yield "\";
                        }, 1000);
                    }
                }
            },
            error: function (response) {
                toastr.clear();
                \$('#send').removeClass('running');
                if (\$(\"#nom_prenom_email\").length) {
                    if (\$('#nom_prenom_email').val != \"\") {
                        toastr.error('Erreur lors de la Sauvegarde du devis');
                    }
                } else {
                    toastr.error('Erreur lors de la Sauvegarde de l\\'annonce');
                }
            }
        });
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/js/brouillonDevisAnnonce.html.twig";
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
        return array (  86 => 40,  78 => 35,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/js/brouillonDevisAnnonce.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profile/js/brouillonDevisAnnonce.html.twig");
    }
}
