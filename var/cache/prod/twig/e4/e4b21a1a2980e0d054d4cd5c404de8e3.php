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

/* admin/user/stripe_form.html.twig */
class __TwigTemplate_8744f89b2ad3f529959e45fd853ab2dc extends Template
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

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'main' => [$this, 'block_main'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@!EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "admin/user/stripe_form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    Ajouter Stripe ID
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "    <div class=\"content\">
        <div class=\"animated fadeIn\">
            <div class=\"row\">
                <div class=\"col-lg-6 mx-auto\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"box-title\">Supprimer Compte Stripe</h4>
                        </div>
                        <div class=\"modal-body\">
                            <form id=\"stripe-form\">
                                <div class=\"form-group\">
                                    <label for=\"stripe_id\">Stripe ID</label>
                                    <input class=\"form-control\" type=\"text\" name=\"stripe_id\" id=\"stripe_id\" required/>
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"submit\" id=\"submit-btn\" class=\"btn btn-danger\">
                                        Supprimer
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div id=\"success-message\" class=\"alert alert-success mt-3\" style=\"display: none;\">
                            Stripe ID supprime avec succès !
                        </div>
                        <div id=\"error-message\" class=\"alert alert-danger mt-3\" style=\"display: none;\">
                            Une erreur s'est produite.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$(\"#stripe-form\").submit(function (e) {
                e.preventDefault();

                let stripeId = \$(\"#stripe_id\").val();
                if (!stripeId) {
                    alert(\"Veuillez entrer un Stripe ID.\");
                    return;
                }

                \$.ajax({
                    url: \"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete_stripe_id");
        yield "\", // Route in Symfony
                    type: \"POST\",
                    data: { stripe_id: stripeId },
                    success: function (response) {
                        console.log(response);
                        \$(\"#success-message\").show();
                        \$(\"#error-message\").hide();
                        \$(\"#stripe_id\").val('');
                    },
                    error: function (response) {
                        \$(\"#error-message\").show();
                        \$(\"#success-message\").hide();
                    }
                });
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
        return "admin/user/stripe_form.html.twig";
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
        return array (  132 => 56,  117 => 43,  110 => 42,  73 => 8,  66 => 7,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/user/stripe_form.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/admin/user/stripe_form.html.twig");
    }
}
