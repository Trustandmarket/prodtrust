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

/* profile/deviseList.html.twig */
class __TwigTemplate_113b591750ab484d88745842508e9ef9 extends Template
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
        yield "<option value=\"EUR\">EURO</option>
                                <option value=\"USD\">United States Dollars</option>
                                <option value=\"XAF\">XAF</option>
                                <option value=\"GBP\">United Kingdom Pounds</option>
                                <option value=\"DZD\">Algeria Dinars</option>
                                <option value=\"ARP\">Argentina Pesos</option>
                                <option value=\"AUD\">Australia Dollars</option>
                                <option value=\"ATS\">Austria Schillings</option>
                                <option value=\"BSD\">Bahamas Dollars</option>
                                <option value=\"BBD\">Barbados Dollars</option>
                                <option value=\"BEF\">Belgium Francs</option>
                                <option value=\"BMD\">Bermuda Dollars</option>
                                <option value=\"BRR\">Brazil Real</option>
                                <option value=\"BGL\">Bulgaria Lev</option>
                                <option value=\"CAD\">Canada Dollars</option>
                                <option value=\"CLP\">Chile Pesos</option>
                                <option value=\"CNY\">China Yuan Renmimbi</option>
                                <option value=\"CYP\">Cyprus Pounds</option>
                                <option value=\"CSK\">Czech Republic Koruna</option>
                                <option value=\"DKK\">Denmark Kroner</option>
                                <option value=\"NLG\">Dutch Guilders</option>
                                <option value=\"XCD\">Eastern Caribbean Dollars</option>
                                <option value=\"EGP\">Egypt Pounds</option>
                                <option value=\"FJD\">Fiji Dollars</option>
                                <option value=\"FIM\">Finland Markka</option>
                                <option value=\"FRF\">France Francs</option>
                                <option value=\"DEM\">Germany Deutsche Marks</option>
                                <option value=\"XAU\">Gold Ounces</option>
                                <option value=\"GRD\">Greece Drachmas</option>
                                <option value=\"HKD\">Hong Kong Dollars</option>
                                <option value=\"HUF\">Hungary Forint</option>
                                <option value=\"ISK\">Iceland Krona</option>
                                <option value=\"INR\">India Rupees</option>
                                <option value=\"IDR\">Indonesia Rupiah</option>
                                <option value=\"IEP\">Ireland Punt</option>
                                <option value=\"ILS\">Israel New Shekels</option>
                                <option value=\"ITL\">Italy Lira</option>
                                <option value=\"JMD\">Jamaica Dollars</option>
                                <option value=\"JPY\">Japan Yen</option>
                                <option value=\"JOD\">Jordan Dinar</option>
                                <option value=\"KRW\">Korea (South) Won</option>
                                <option value=\"LBP\">Lebanon Pounds</option>
                                <option value=\"LUF\">Luxembourg Francs</option>
                                <option value=\"MYR\">Malaysia Ringgit</option>
                                <option value=\"MXP\">Mexico Pesos</option>
                                <option value=\"NLG\">Netherlands Guilders</option>
                                <option value=\"NZD\">New Zealand Dollars</option>
                                <option value=\"NOK\">Norway Kroner</option>
                                <option value=\"PKR\">Pakistan Rupees</option>
                                <option value=\"XPD\">Palladium Ounces</option>
                                <option value=\"PHP\">Philippines Pesos</option>
                                <option value=\"XPT\">Platinum Ounces</option>
                                <option value=\"PLZ\">Poland Zloty</option>
                                <option value=\"PTE\">Portugal Escudo</option>
                                <option value=\"ROL\">Romania Leu</option>
                                <option value=\"RUR\">Russia Rubles</option>
                                <option value=\"SAR\">Saudi Arabia Riyal</option>
                                <option value=\"XAG\">Silver Ounces</option>
                                <option value=\"SGD\">Singapore Dollars</option>
                                <option value=\"SKK\">Slovakia Koruna</option>
                                <option value=\"ZAR\">South Africa Rand</option>
                                <option value=\"KRW\">South Korea Won</option>
                                <option value=\"ESP\">Spain Pesetas</option>
                                <option value=\"XDR\">Special Drawing Right (IMF)</option>
                                <option value=\"SDD\">Sudan Dinar</option>
                                <option value=\"SEK\">Sweden Krona</option>
                                <option value=\"CHF\">Switzerland Francs</option>
                                <option value=\"TWD\">Taiwan Dollars</option>
                                <option value=\"THB\">Thailand Baht</option>
                                <option value=\"TTD\">Trinidad and Tobago Dollars</option>
                                <option value=\"TRL\">Turkey Lira</option>
                                <option value=\"VEB\">Venezuela Bolivar</option>
                                <option value=\"ZMK\">Zambia Kwacha</option>
                                <option value=\"EUR\">Euro</option>
                                <option value=\"XCD\">Eastern Caribbean Dollars</option>
                                <option value=\"XDR\">Special Drawing Right (IMF)</option>
                                <option value=\"XAG\">Silver Ounces</option>
                                <option value=\"XAU\">Gold Ounces</option>
                                <option value=\"XPD\">Palladium Ounces</option>
                                <option value=\"XPT\">Platinum Ounces</option>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/deviseList.html.twig";
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
        return new Source("", "profile/deviseList.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/profile/deviseList.html.twig");
    }
}
