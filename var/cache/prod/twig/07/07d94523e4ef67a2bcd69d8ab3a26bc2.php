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

/* country.html.twig */
class __TwigTemplate_2ad3fccbef72be6e7dd622de5b8cda80 extends Template
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
        yield " ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "get", ["_locale"], "method", false, false, false, 1) == "fr")) {
            // line 2
            yield " <option value=\"FR\" selected>France</option>

                                  <option value=\"AF\">Afghanistan</option>
                                  <option value=\"ZA\">Afrique du sud</option>
                                  <option value=\"AX\">Åland, îles</option>
                                  <option value=\"AL\">Albanie</option>
                                  <option value=\"DZ\">Algérie</option>
                                  <option value=\"DE\">Allemagne</option>
                                  <option value=\"AD\">Andorre</option>
                                  <option value=\"AO\">Angola</option>
                                  <option value=\"AI\">Anguilla</option>
                                  <option value=\"AQ\">Antarctique</option>
                                  <option value=\"AG\">Antigua et barbuda</option>
                                  <option value=\"SA\">Arabie saoudite</option>
                                  <option value=\"AR\">Argentine</option>
                                  <option value=\"AM\">Arménie</option>
                                  <option value=\"AW\">Aruba</option>
                                  <option value=\"AU\">Australie</option>
                                  <option value=\"AT\">Autriche</option>
                                  <option value=\"AZ\">Azerbaïdjan</option>
                                  <option value=\"BS\">Bahamas</option>
                                  <option value=\"BH\">Bahreïn</option>
                                  <option value=\"BD\">Bangladesh</option>
                                  <option value=\"BB\">Barbade</option>
                                  <option value=\"BY\">Bélarus</option>
                                  <option value=\"BE\">Belgique</option>
                                  <option value=\"BZ\">Belize</option>
                                  <option value=\"BJ\">Bénin</option>
                                  <option value=\"BM\">Bermudes</option>
                                  <option value=\"BT\">Bhoutan</option>
                                  <option value=\"BO\">Bolivie, l'état plurinational de</option>
                                  <option value=\"BQ\">Bonaire, saint eustache et saba</option>
                                  <option value=\"BA\">Bosnie herzégovine</option>
                                  <option value=\"BW\">Botswana</option>
                                  <option value=\"BV\">Bouvet, île</option>
                                  <option value=\"BR\">Brésil</option>
                                  <option value=\"BN\">Brunei darussalam</option>
                                  <option value=\"BG\">Bulgarie</option>
                                  <option value=\"BF\">Burkina faso</option>
                                  <option value=\"BI\">Burundi</option>
                                  <option value=\"KY\">Caïmans, îles</option>
                                  <option value=\"KH\">Cambodge</option>
                                  <option value=\"CA\">Canada</option>
                                  <option value=\"CM\">Cameroun</option>
                                  <option value=\"CV\">Cap vert</option>
                                  <option value=\"CF\">Centrafricaine, république</option>
                                  <option value=\"CL\">Chili</option>
                                  <option value=\"CN\">Chine</option>
                                  <option value=\"CX\">Christmas, île</option>
                                  <option value=\"CY\">Chypre</option>
                                  <option value=\"CC\">Cocos (keeling), îles</option>
                                  <option value=\"CO\">Colombie</option>
                                  <option value=\"KM\">Comores</option>
                                  <option value=\"CG\">Congo</option>
                                  <option value=\"CD\">Congo, la république démocratique du</option>
                                  <option value=\"CK\">Cook, îles</option>
                                  <option value=\"KR\">Corée, république de</option>
                                  <option value=\"KP\">Corée, république populaire démocratique de</option>
                                  <option value=\"CR\">Costa rica</option>
                                  <option value=\"CI\">Côte d'ivoire</option>
                                  <option value=\"HR\">Croatie</option>
                                  <option value=\"CU\">Cuba</option>
                                  <option value=\"CW\">Curaçao</option>
                                  <option value=\"DK\">Danemark</option>
                                  <option value=\"DJ\">Djibouti</option>
                                  <option value=\"DO\">Dominicaine, république</option>
                                  <option value=\"DM\">Dominique</option>
                                  <option value=\"EG\">Égypte</option>
                                  <option value=\"SV\">El salvador</option>
                                  <option value=\"AE\">Émirats arabes unis</option>
                                  <option value=\"EC\">Équateur</option>
                                  <option value=\"ER\">Érythrée</option>
                                  <option value=\"ES\">Espagne</option>
                                  <option value=\"EE\">Estonie</option>
                                  <option value=\"US\">États unis</option>
                                  <option value=\"ET\">Éthiopie</option>
                                  <option value=\"FK\">Falkland, îles (malvinas)</option>
                                  <option value=\"FO\">Féroé, îles</option>
                                  <option value=\"FJ\">Fidji</option>
                                  <option value=\"FI\">Finlande</option>
                                  <option value=\"GA\">Gabon</option>
                                  <option value=\"GM\">Gambie</option>
                                  <option value=\"GE\">Géorgie</option>
                                  <option value=\"GS\">Géorgie du sud et les îles sandwich du sud</option>
                                  <option value=\"GH\">Ghana</option>
                                  <option value=\"GI\">Gibraltar</option>
                                  <option value=\"GR\">Grèce</option>
                                  <option value=\"GD\">Grenade</option>
                                  <option value=\"GL\">Groenland</option>
                                  <option value=\"GP\">Guadeloupe</option>
                                  <option value=\"GU\">Guam</option>
                                  <option value=\"GT\">Guatemala</option>
                                  <option value=\"GG\">Guernesey</option>
                                  <option value=\"GN\">Guinée</option>
                                  <option value=\"GW\">Guinée bissau</option>
                                  <option value=\"GQ\">Guinée équatoriale</option>
                                  <option value=\"GY\">Guyana</option>
                                  <option value=\"GF\">Guyane française</option>
                                  <option value=\"HT\">Haïti</option>
                                  <option value=\"HM\">Heard et îles macdonald, île</option>
                                  <option value=\"HN\">Honduras</option>
                                  <option value=\"HK\">Hong kong</option>
                                  <option value=\"HU\">Hongrie</option>
                                  <option value=\"IM\">Île de man</option>
                                  <option value=\"UM\">Îles mineures éloignées des états unis</option>
                                  <option value=\"VG\">Îles vierges britanniques</option>
                                  <option value=\"VI\">Îles vierges des états unis</option>
                                  <option value=\"IN\">Inde</option>
                                  <option value=\"ID\">Indonésie</option>
                                  <option value=\"IR\">Iran, république islamique d'</option>
                                  <option value=\"IQ\">Iraq</option>
                                  <option value=\"IE\">Irlande</option>
                                  <option value=\"IS\">Islande</option>
                                  <option value=\"IL\">Israël</option>
                                  <option value=\"IT\">Italie</option>
                                  <option value=\"JM\">Jamaïque</option>
                                  <option value=\"JP\">Japon</option>
                                  <option value=\"JE\">Jersey</option>
                                  <option value=\"JO\">Jordanie</option>
                                  <option value=\"KZ\">Kazakhstan</option>
                                  <option value=\"KE\">Kenya</option>
                                  <option value=\"KG\">Kirghizistan</option>
                                  <option value=\"KI\">Kiribati</option>
                                  <option value=\"KW\">Koweït</option>
                                  <option value=\"LA\">Lao, république démocratique populaire</option>
                                  <option value=\"LS\">Lesotho</option>
                                  <option value=\"LV\">Lettonie</option>
                                  <option value=\"LB\">Liban</option>
                                  <option value=\"LR\">Libéria</option>
                                  <option value=\"LY\">Libye</option>
                                  <option value=\"LI\">Liechtenstein</option>
                                  <option value=\"LT\">Lituanie</option>
                                  <option value=\"LU\">Luxembourg</option>
                                  <option value=\"MO\">Macao</option>
                                  <option value=\"MK\">Macédoine, l'ex république yougoslave de</option>
                                  <option value=\"MG\">Madagascar</option>
                                  <option value=\"MY\">Malaisie</option>
                                  <option value=\"MW\">Malawi</option>
                                  <option value=\"MV\">Maldives</option>
                                  <option value=\"ML\">Mali</option>
                                  <option value=\"MT\">Malte</option>
                                  <option value=\"MP\">Mariannes du nord, îles</option>
                                  <option value=\"MA\">Maroc</option>
                                  <option value=\"MH\">Marshall, îles</option>
                                  <option value=\"MQ\">Martinique</option>
                                  <option value=\"MU\">Maurice</option>
                                  <option value=\"MR\">Mauritanie</option>
                                  <option value=\"YT\">Mayotte</option>
                                  <option value=\"MX\">Mexique</option>
                                  <option value=\"FM\">Micronésie, états fédérés de</option>
                                  <option value=\"MD\">Moldova, république de</option>
                                  <option value=\"MC\">Monaco</option>
                                  <option value=\"MN\">Mongolie</option>
                                  <option value=\"ME\">Monténégro</option>
                                  <option value=\"MS\">Montserrat</option>
                                  <option value=\"MZ\">Mozambique</option>
                                  <option value=\"MM\">Myanmar</option>
                                  <option value=\"NA\">Namibie</option>
                                  <option value=\"NR\">Nauru</option>
                                  <option value=\"NP\">Népal</option>
                                  <option value=\"NI\">Nicaragua</option>
                                  <option value=\"NE\">Niger</option>
                                  <option value=\"NG\">Nigéria</option>
                                  <option value=\"NU\">Niué</option>
                                  <option value=\"NF\">Norfolk, île</option>
                                  <option value=\"NO\">Norvège</option>
                                  <option value=\"NC\">Nouvelle calédonie</option>
                                  <option value=\"NZ\">Nouvelle zélande</option>
                                  <option value=\"IO\">Océan indien, territoire britannique de l'</option>
                                  <option value=\"OM\">Oman</option>
                                  <option value=\"UG\">Ouganda</option>
                                  <option value=\"UZ\">Ouzbékistan</option>
                                  <option value=\"PK\">Pakistan</option>
                                  <option value=\"PW\">Palaos</option>
                                  <option value=\"PS\">Palestinien occupé, territoire</option>
                                  <option value=\"PA\">Panama</option>
                                  <option value=\"PG\">Papouasie nouvelle guinée</option>
                                  <option value=\"PY\">Paraguay</option>
                                  <option value=\"NL\">Pays bas</option>
                                  <option value=\"PE\">Pérou</option>
                                  <option value=\"PH\">Philippines</option>
                                  <option value=\"PN\">Pitcairn</option>
                                  <option value=\"PL\">Pologne</option>
                                  <option value=\"PF\">Polynésie française</option>
                                  <option value=\"PR\">Porto rico</option>
                                  <option value=\"PT\">Portugal</option>
                                  <option value=\"QA\">Qatar</option>
                                  <option value=\"RE\">Réunion</option>
                                  <option value=\"RO\">Roumanie</option>
                                  <option value=\"GB\">Royaume uni</option>
                                  <option value=\"RU\">Russie, fédération de</option>
                                  <option value=\"RW\">Rwanda</option>
                                  <option value=\"EH\">Sahara occidental</option>
                                  <option value=\"BL\">Saint barthélemy</option>
                                  <option value=\"SH\">Sainte hélène, ascension et tristan da cunha</option>
                                  <option value=\"LC\">Sainte lucie</option>
                                  <option value=\"KN\">Saint kitts et nevis</option>
                                  <option value=\"SM\">Saint marin</option>
                                  <option value=\"MF\">Saint martin(partie française)</option>
                                  <option value=\"SX\">Saint martin (partie néerlandaise)</option>
                                  <option value=\"PM\">Saint pierre et miquelon</option>
                                  <option value=\"VA\">Saint siège (état de la cité du vatican)</option>
                                  <option value=\"VC\">Saint vincent et les grenadines</option>
                                  <option value=\"SB\">Salomon, îles</option>
                                  <option value=\"WS\">Samoa</option>
                                  <option value=\"AS\">Samoa américaines</option>
                                  <option value=\"ST\">Sao tomé et principe</option>
                                  <option value=\"SN\">Sénégal</option>
                                  <option value=\"RS\">Serbie</option>
                                  <option value=\"SC\">Seychelles</option>
                                  <option value=\"SL\">Sierra leone</option>
                                  <option value=\"SG\">Singapour</option>
                                  <option value=\"SK\">Slovaquie</option>
                                  <option value=\"SI\">Slovénie</option>
                                  <option value=\"SO\">Somalie</option>
                                  <option value=\"SD\">Soudan</option>
                                  <option value=\"SS\">Soudan du sud</option>
                                  <option value=\"LK\">Sri lanka</option>
                                  <option value=\"SE\">Suède</option>
                                  <option value=\"CH\">Suisse</option>
                                  <option value=\"SR\">Suriname</option>
                                  <option value=\"SJ\">Svalbard et île jan mayen</option>
                                  <option value=\"SZ\">Swaziland</option>
                                  <option value=\"SY\">Syrienne, république arabe</option>
                                  <option value=\"TJ\">Tadjikistan</option>
                                  <option value=\"TW\">Taïwan, province de chine</option>
                                  <option value=\"TZ\">Tanzanie, république unie de</option>
                                  <option value=\"TD\">Tchad</option>
                                  <option value=\"CZ\">Tchèque, république</option>
                                  <option value=\"TF\">Terres australes françaises</option>
                                  <option value=\"TH\">Thaïlande</option>
                                  <option value=\"TL\">Timor leste</option>
                                  <option value=\"TG\">Togo</option>
                                  <option value=\"TK\">Tokelau</option>
                                  <option value=\"TO\">Tonga</option>
                                  <option value=\"TT\">Trinité et tobago</option>
                                  <option value=\"TN\">Tunisie</option>
                                  <option value=\"TM\">Turkménistan</option>
                                  <option value=\"TC\">Turks et caïcos, îles</option>
                                  <option value=\"TR\">Turquie</option>
                                  <option value=\"TV\">Tuvalu</option>
                                  <option value=\"UA\">Ukraine</option>
                                  <option value=\"UY\">Uruguay</option>
                                  <option value=\"VU\">Vanuatu</option>
                                  <option value=\"VE\">Venezuela, république bolivarienne du</option>
                                  <option value=\"VN\">Viet nam</option>
                                  <option value=\"WF\">Wallis et futuna</option>
                                  <option value=\"YE\">Yémen</option>
                                  <option value=\"ZM\">Zambie</option>
                                  <option value=\"ZW\">Zimbabwe​​​​​</option>
                                  ";
        } else {
            // line 253
            yield "                                  <option value=\"FR\" selected>French</option>

                                  <option value=\"AF\">Afghanistan</option>
                                \t<option value=\"AX\">Åland Islands</option>
                                \t<option value=\"AL\">Albania</option>
                                \t<option value=\"DZ\">Algeria</option>
                                \t<option value=\"AS\">American Samoa</option>
                                \t<option value=\"AD\">Andorra</option>
                                \t<option value=\"AO\">Angola</option>
                                \t<option value=\"AI\">Anguilla</option>
                                \t<option value=\"AQ\">Antarctica</option>
                                \t<option value=\"AG\">Antigua and Barbuda</option>
                                \t<option value=\"AR\">Argentina</option>
                                \t<option value=\"AM\">Armenia</option>
                                \t<option value=\"AW\">Aruba</option>
                                \t<option value=\"AU\">Australia</option>
                                \t<option value=\"AT\">Austria</option>
                                \t<option value=\"AZ\">Azerbaijan</option>
                                \t<option value=\"BS\">Bahamas</option>
                                \t<option value=\"BH\">Bahrain</option>
                                \t<option value=\"BD\">Bangladesh</option>
                                \t<option value=\"BB\">Barbados</option>
                                \t<option value=\"BY\">Belarus</option>
                                \t<option value=\"BE\">Belgium</option>
                                \t<option value=\"BZ\">Belize</option>
                                \t<option value=\"BJ\">Benin</option>
                                \t<option value=\"BM\">Bermuda</option>
                                \t<option value=\"BT\">Bhutan</option>
                                \t<option value=\"BO\">Bolivia, Plurinational State of</option>
                                \t<option value=\"BQ\">Bonaire, Sint Eustatius and Saba</option>
                                \t<option value=\"BA\">Bosnia and Herzegovina</option>
                                \t<option value=\"BW\">Botswana</option>
                                \t<option value=\"BV\">Bouvet Island</option>
                                \t<option value=\"BR\">Brazil</option>
                                \t<option value=\"IO\">British Indian Ocean Territory</option>
                                \t<option value=\"BN\">Brunei Darussalam</option>
                                \t<option value=\"BG\">Bulgaria</option>
                                \t<option value=\"BF\">Burkina Faso</option>
                                \t<option value=\"BI\">Burundi</option>
                                \t<option value=\"KH\">Cambodia</option>
                                \t<option value=\"CM\">Cameroon</option>
                                \t<option value=\"CA\">Canada</option>
                                \t<option value=\"CV\">Cape Verde</option>
                                \t<option value=\"KY\">Cayman Islands</option>
                                \t<option value=\"CF\">Central African Republic</option>
                                \t<option value=\"TD\">Chad</option>
                                \t<option value=\"CL\">Chile</option>
                                \t<option value=\"CN\">China</option>
                                \t<option value=\"CX\">Christmas Island</option>
                                \t<option value=\"CC\">Cocos (Keeling) Islands</option>
                                \t<option value=\"CO\">Colombia</option>
                                \t<option value=\"KM\">Comoros</option>
                                \t<option value=\"CG\">Congo</option>
                                \t<option value=\"CD\">Congo, the Democratic Republic of the</option>
                                \t<option value=\"CK\">Cook Islands</option>
                                \t<option value=\"CR\">Costa Rica</option>
                                \t<option value=\"CI\">Côte d'Ivoire</option>
                                \t<option value=\"HR\">Croatia</option>
                                \t<option value=\"CU\">Cuba</option>
                                \t<option value=\"CW\">Curaçao</option>
                                \t<option value=\"CY\">Cyprus</option>
                                \t<option value=\"CZ\">Czech Republic</option>
                                \t<option value=\"DK\">Denmark</option>
                                \t<option value=\"DJ\">Djibouti</option>
                                \t<option value=\"DM\">Dominica</option>
                                \t<option value=\"DO\">Dominican Republic</option>
                                \t<option value=\"EC\">Ecuador</option>
                                \t<option value=\"EG\">Egypt</option>
                                \t<option value=\"SV\">El Salvador</option>
                                \t<option value=\"GQ\">Equatorial Guinea</option>
                                \t<option value=\"ER\">Eritrea</option>
                                \t<option value=\"EE\">Estonia</option>
                                \t<option value=\"ET\">Ethiopia</option>
                                \t<option value=\"FK\">Falkland Islands (Malvinas)</option>
                                \t<option value=\"FO\">Faroe Islands</option>
                                \t<option value=\"FJ\">Fiji</option>
                                \t<option value=\"FI\">Finland</option>
                                \t<option value=\"GF\">French Guiana</option>
                                \t<option value=\"PF\">French Polynesia</option>
                                \t<option value=\"TF\">French Southern Territories</option>
                                \t<option value=\"GA\">Gabon</option>
                                \t<option value=\"GM\">Gambia</option>
                                \t<option value=\"GE\">Georgia</option>
                                \t<option value=\"DE\">Germany</option>
                                \t<option value=\"GH\">Ghana</option>
                                \t<option value=\"GI\">Gibraltar</option>
                                \t<option value=\"GR\">Greece</option>
                                \t<option value=\"GL\">Greenland</option>
                                \t<option value=\"GD\">Grenada</option>
                                \t<option value=\"GP\">Guadeloupe</option>
                                \t<option value=\"GU\">Guam</option>
                                \t<option value=\"GT\">Guatemala</option>
                                \t<option value=\"GG\">Guernsey</option>
                                \t<option value=\"GN\">Guinea</option>
                                \t<option value=\"GW\">Guinea-Bissau</option>
                                \t<option value=\"GY\">Guyana</option>
                                \t<option value=\"HT\">Haiti</option>
                                \t<option value=\"HM\">Heard Island and McDonald Islands</option>
                                \t<option value=\"VA\">Holy See (Vatican City State)</option>
                                \t<option value=\"HN\">Honduras</option>
                                \t<option value=\"HK\">Hong Kong</option>
                                \t<option value=\"HU\">Hungary</option>
                                \t<option value=\"IS\">Iceland</option>
                                \t<option value=\"IN\">India</option>
                                \t<option value=\"ID\">Indonesia</option>
                                \t<option value=\"IR\">Iran, Islamic Republic of</option>
                                \t<option value=\"IQ\">Iraq</option>
                                \t<option value=\"IE\">Ireland</option>
                                \t<option value=\"IM\">Isle of Man</option>
                                \t<option value=\"IL\">Israel</option>
                                \t<option value=\"IT\">Italy</option>
                                \t<option value=\"JM\">Jamaica</option>
                                \t<option value=\"JP\">Japan</option>
                                \t<option value=\"JE\">Jersey</option>
                                \t<option value=\"JO\">Jordan</option>
                                \t<option value=\"KZ\">Kazakhstan</option>
                                \t<option value=\"KE\">Kenya</option>
                                \t<option value=\"KI\">Kiribati</option>
                                \t<option value=\"KP\">Korea, Democratic People's Republic of</option>
                                \t<option value=\"KR\">Korea, Republic of</option>
                                \t<option value=\"KW\">Kuwait</option>
                                \t<option value=\"KG\">Kyrgyzstan</option>
                                \t<option value=\"LA\">Lao People's Democratic Republic</option>
                                \t<option value=\"LV\">Latvia</option>
                                \t<option value=\"LB\">Lebanon</option>
                                \t<option value=\"LS\">Lesotho</option>
                                \t<option value=\"LR\">Liberia</option>
                                \t<option value=\"LY\">Libya</option>
                                \t<option value=\"LI\">Liechtenstein</option>
                                \t<option value=\"LT\">Lithuania</option>
                                \t<option value=\"LU\">Luxembourg</option>
                                \t<option value=\"MO\">Macao</option>
                                \t<option value=\"MK\">Macedonia, the former Yugoslav Republic of</option>
                                \t<option value=\"MG\">Madagascar</option>
                                \t<option value=\"MW\">Malawi</option>
                                \t<option value=\"MY\">Malaysia</option>
                                \t<option value=\"MV\">Maldives</option>
                                \t<option value=\"ML\">Mali</option>
                                \t<option value=\"MT\">Malta</option>
                                \t<option value=\"MH\">Marshall Islands</option>
                                \t<option value=\"MQ\">Martinique</option>
                                \t<option value=\"MR\">Mauritania</option>
                                \t<option value=\"MU\">Mauritius</option>
                                \t<option value=\"YT\">Mayotte</option>
                                \t<option value=\"MX\">Mexico</option>
                                \t<option value=\"FM\">Micronesia, Federated States of</option>
                                \t<option value=\"MD\">Moldova, Republic of</option>
                                \t<option value=\"MC\">Monaco</option>
                                \t<option value=\"MN\">Mongolia</option>
                                \t<option value=\"ME\">Montenegro</option>
                                \t<option value=\"MS\">Montserrat</option>
                                \t<option value=\"MA\">Morocco</option>
                                \t<option value=\"MZ\">Mozambique</option>
                                \t<option value=\"MM\">Myanmar</option>
                                \t<option value=\"NA\">Namibia</option>
                                \t<option value=\"NR\">Nauru</option>
                                \t<option value=\"NP\">Nepal</option>
                                \t<option value=\"NL\">Netherlands</option>
                                \t<option value=\"NC\">New Caledonia</option>
                                \t<option value=\"NZ\">New Zealand</option>
                                \t<option value=\"NI\">Nicaragua</option>
                                \t<option value=\"NE\">Niger</option>
                                \t<option value=\"NG\">Nigeria</option>
                                \t<option value=\"NU\">Niue</option>
                                \t<option value=\"NF\">Norfolk Island</option>
                                \t<option value=\"MP\">Northern Mariana Islands</option>
                                \t<option value=\"NO\">Norway</option>
                                \t<option value=\"OM\">Oman</option>
                                \t<option value=\"PK\">Pakistan</option>
                                \t<option value=\"PW\">Palau</option>
                                \t<option value=\"PS\">Palestinian Territory, Occupied</option>
                                \t<option value=\"PA\">Panama</option>
                                \t<option value=\"PG\">Papua New Guinea</option>
                                \t<option value=\"PY\">Paraguay</option>
                                \t<option value=\"PE\">Peru</option>
                                \t<option value=\"PH\">Philippines</option>
                                \t<option value=\"PN\">Pitcairn</option>
                                \t<option value=\"PL\">Poland</option>
                                \t<option value=\"PT\">Portugal</option>
                                \t<option value=\"PR\">Puerto Rico</option>
                                \t<option value=\"QA\">Qatar</option>
                                \t<option value=\"RE\">Réunion</option>
                                \t<option value=\"RO\">Romania</option>
                                \t<option value=\"RU\">Russian Federation</option>
                                \t<option value=\"RW\">Rwanda</option>
                                \t<option value=\"BL\">Saint Barthélemy</option>
                                \t<option value=\"SH\">Saint Helena, Ascension and Tristan da Cunha</option>
                                \t<option value=\"KN\">Saint Kitts and Nevis</option>
                                \t<option value=\"LC\">Saint Lucia</option>
                                \t<option value=\"MF\">Saint Martin (French part)</option>
                                \t<option value=\"PM\">Saint Pierre and Miquelon</option>
                                \t<option value=\"VC\">Saint Vincent and the Grenadines</option>
                                \t<option value=\"WS\">Samoa</option>
                                \t<option value=\"SM\">San Marino</option>
                                \t<option value=\"ST\">Sao Tome and Principe</option>
                                \t<option value=\"SA\">Saudi Arabia</option>
                                \t<option value=\"SN\">Senegal</option>
                                \t<option value=\"RS\">Serbia</option>
                                \t<option value=\"SC\">Seychelles</option>
                                \t<option value=\"SL\">Sierra Leone</option>
                                \t<option value=\"SG\">Singapore</option>
                                \t<option value=\"SX\">Sint Maarten (Dutch part)</option>
                                \t<option value=\"SK\">Slovakia</option>
                                \t<option value=\"SI\">Slovenia</option>
                                \t<option value=\"SB\">Solomon Islands</option>
                                \t<option value=\"SO\">Somalia</option>
                                \t<option value=\"ZA\">South Africa</option>
                                \t<option value=\"GS\">South Georgia and the South Sandwich Islands</option>
                                \t<option value=\"SS\">South Sudan</option>
                                \t<option value=\"ES\">Spain</option>
                                \t<option value=\"LK\">Sri Lanka</option>
                                \t<option value=\"SD\">Sudan</option>
                                \t<option value=\"SR\">Suriname</option>
                                \t<option value=\"SJ\">Svalbard and Jan Mayen</option>
                                \t<option value=\"SZ\">Swaziland</option>
                                \t<option value=\"SE\">Sweden</option>
                                \t<option value=\"CH\">Switzerland</option>
                                \t<option value=\"SY\">Syrian Arab Republic</option>
                                \t<option value=\"TW\">Taiwan, Province of China</option>
                                \t<option value=\"TJ\">Tajikistan</option>
                                \t<option value=\"TZ\">Tanzania, United Republic of</option>
                                \t<option value=\"TH\">Thailand</option>
                                \t<option value=\"TL\">Timor-Leste</option>
                                \t<option value=\"TG\">Togo</option>
                                \t<option value=\"TK\">Tokelau</option>
                                \t<option value=\"TO\">Tonga</option>
                                \t<option value=\"TT\">Trinidad and Tobago</option>
                                \t<option value=\"TN\">Tunisia</option>
                                \t<option value=\"TR\">Turkey</option>
                                \t<option value=\"TM\">Turkmenistan</option>
                                \t<option value=\"TC\">Turks and Caicos Islands</option>
                                \t<option value=\"TV\">Tuvalu</option>
                                \t<option value=\"UG\">Uganda</option>
                                \t<option value=\"UA\">Ukraine</option>
                                \t<option value=\"AE\">United Arab Emirates</option>
                                \t<option value=\"GB\">United Kingdom</option>
                                \t<option value=\"US\">United States</option>
                                \t<option value=\"UM\">United States Minor Outlying Islands</option>
                                \t<option value=\"UY\">Uruguay</option>
                                \t<option value=\"UZ\">Uzbekistan</option>
                                \t<option value=\"VU\">Vanuatu</option>
                                \t<option value=\"VE\">Venezuela, Bolivarian Republic of</option>
                                \t<option value=\"VN\">Viet Nam</option>
                                \t<option value=\"VG\">Virgin Islands, British</option>
                                \t<option value=\"VI\">Virgin Islands, U.S.</option>
                                \t<option value=\"WF\">Wallis and Futuna</option>
                                \t<option value=\"EH\">Western Sahara</option>
                                \t<option value=\"YE\">Yemen</option>
                                \t<option value=\"ZM\">Zambia</option>
                                \t<option value=\"ZW\">Zimbabwe</option>
                                  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "country.html.twig";
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
        return array (  298 => 253,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "country.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/country.html.twig");
    }
}
