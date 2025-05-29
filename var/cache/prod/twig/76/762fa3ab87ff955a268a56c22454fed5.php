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

/* profile/js/rechercheSousCategories.html.twig */
class __TwigTemplate_ecb3b3576023c6674702bb32030e693d extends Template
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
\$(document).on('change', '.categorie', function (e) {
// On empeche le navigateur de soumettre le formulaire
  e.preventDefault();
  \$('.prestations').attr('disabled',\"disabled\");
  \$('.prestations').attr('name', \"previous\");
  // var url1='/profile/sous_categorie/";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 7), "get", ["_locale"], "method", false, false, false, 7), "html", null, true);
        yield "?id='+\$(this).val();
  //console.log(\$(this).val());
  var url1 = \$(this).attr('myUrl');
  console.log(url1);
  if(url1 != \"\"){
    toastr.info(\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home.formulaire-champs.recherche-sous-categories"), "html", null, true);
        yield "\");
    \$.ajax({
      url: url1,
      type: 'get',
      success: function (reponse) {
        toastr.clear();
        \$(\"#devis-input-data\").css('display', 'none');
        \$('#sous_categorie_sous').html(reponse);
        //\$(\"#msform\").attr('action',\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_ajouter_annonce");
        yield "\")
      },
      error: function (reponse) {
        toastr.clear();
      }
    });
  }
  if( url1 == \"\" ){
    /*console.log('test');*/
    \$(\"#sous_categorie_sous\").html('');
    \$(\"#devis-input-data\").css('display', 'block');
    \$(\"#msform\").attr('action',\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("devis_ajouter_devis");
        yield "\");
  }else{
    \$(\"#msform\").attr('action',\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_ajouter_annonce");
        yield "\");
  }
});
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/js/rechercheSousCategories.html.twig";
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
        return array (  88 => 33,  83 => 31,  69 => 20,  58 => 12,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profile/js/rechercheSousCategories.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profile/js/rechercheSousCategories.html.twig");
    }
}
