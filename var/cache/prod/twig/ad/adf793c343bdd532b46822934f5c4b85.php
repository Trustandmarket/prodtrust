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

/* ws/script.html.twig */
class __TwigTemplate_33e95218084c340f0ed157d029a31338 extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1)) {
            // line 2
            yield "<script async>
    \$(document).ready(function(){
        var refresHaveINewMessagesId = setInterval(function(){ haveINewMessages(); }, 10000);
        var haveINewMessages = function(){
            \$.ajax({
                url : \"";
            // line 7
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_i_have_new_messages_xhr");
            yield "\",
                method : \"get\",
                dataType : \"json\",
                success : function(data){
                    if(data.statut== 'yes'){
                        \$('.chat-menu i').addClass('new-message');
                    }
                    else{
                        \$('.chat-menu i').removeClass('new-message');
                    }
                },
                error : function(XMLHttpRequest, textStatus, errorThrown){
                    if(textStatus == 'timeout') {
                        console.error(\"Vous n'êtes pas connectés\");
                    }
                    else{
                        console.error(\"Une erreur s'est produite avec le serveur\");
                    }
                }
            });
        }
        
    });

</script>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ws/script.html.twig";
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
        return array (  51 => 7,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "ws/script.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/ws/script.html.twig");
    }
}
