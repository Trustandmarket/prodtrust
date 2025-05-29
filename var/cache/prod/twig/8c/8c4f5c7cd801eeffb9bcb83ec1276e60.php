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

/* Tools/CountryRegister.html.twig */
class __TwigTemplate_9410b3ef27b67c448ed36fbbb3ddf66d extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "locale", [], "any", false, false, false, 1) == "fr")) {
            // line 2
            yield "\t<option value=\"AF\">Afghanistan</option>
\t<option value=\"ZA\">Afrique du sud</option>
\t<option value=\"AX\">Åland, îles</option>
\t<option value=\"AL\">Albanie</option>
\t<option value=\"DZ\">Algérie</option>
\t<option value=\"DE\">Allemagne</option>
\t<option value=\"AD\">Andorre</option>
\t<option value=\"AO\">Angola</option>
\t<option value=\"AI\">Anguilla</option>
\t<option value=\"AQ\">Antarctique</option>
\t<option value=\"AG\">Antigua et barbuda</option>
\t<option value=\"SA\">Arabie saoudite</option>
\t<option value=\"AR\">Argentine</option>
\t<option value=\"AM\">Arménie</option>
\t<option value=\"AW\">Aruba</option>
\t<option value=\"AU\">Australie</option>
\t<option value=\"AT\">Autriche</option>
\t<option value=\"AZ\">Azerbaïdjan</option>
\t<option value=\"BS\">Bahamas</option>
\t<option value=\"BH\">Bahreïn</option>
\t<option value=\"BD\">Bangladesh</option>
\t<option value=\"BB\">Barbade</option>
\t<option value=\"BY\">Bélarus</option>
\t<option value=\"BE\">Belgique</option>
\t<option value=\"BZ\">Belize</option>
\t<option value=\"BJ\">Bénin</option>
\t<option value=\"BM\">Bermudes</option>
\t<option value=\"BT\">Bhoutan</option>
\t<option value=\"BO\">Bolivie, l'état plurinational de</option>
\t<option value=\"BQ\">Bonaire, saint eustache et saba</option>
\t<option value=\"BA\">Bosnie herzégovine</option>
\t<option value=\"BW\">Botswana</option>
\t<option value=\"BV\">Bouvet, île</option>
\t<option value=\"BR\">Brésil</option>
\t<option value=\"BN\">Brunei darussalam</option>
\t<option value=\"BG\">Bulgarie</option>
\t<option value=\"BF\">Burkina faso</option>
\t<option value=\"BI\">Burundi</option>
\t<option value=\"KY\">Caïmans, îles</option>
\t<option value=\"KH\">Cambodge</option>
\t<option value=\"CA\">Canada</option>
\t<option value=\"CM\">Cameroun</option>
\t<option value=\"CV\">Cap vert</option>
\t<option value=\"CF\">Centrafricaine, république</option>
\t<option value=\"CL\">Chili</option>
\t<option value=\"CN\">Chine</option>
\t<option value=\"CX\">Christmas, île</option>
\t<option value=\"CY\">Chypre</option>
\t<option value=\"CC\">Cocos (keeling), îles</option>
\t<option value=\"CO\">Colombie</option>
\t<option value=\"KM\">Comores</option>
\t<option value=\"CG\">Congo</option>
\t<option value=\"CD\">Congo, la république démocratique du</option>
\t<option value=\"CK\">Cook, îles</option>
\t<option value=\"KR\">Corée, république de</option>
\t<option value=\"KP\">Corée, république populaire démocratique de</option>
\t<option value=\"CR\">Costa rica</option>
\t<option value=\"CI\">Côte d'ivoire</option>
\t<option value=\"HR\">Croatie</option>
\t<option value=\"CU\">Cuba</option>
\t<option value=\"CW\">Curaçao</option>
\t<option value=\"DK\">Danemark</option>
\t<option value=\"DJ\">Djibouti</option>
\t<option value=\"DO\">Dominicaine, république</option>
\t<option value=\"DM\">Dominique</option>
\t<option value=\"EG\">Égypte</option>
\t<option value=\"SV\">El salvador</option>
\t<option value=\"AE\">Émirats arabes unis</option>
\t<option value=\"EC\">Équateur</option>
\t<option value=\"ER\">Érythrée</option>
\t<option value=\"ES\">Espagne</option>
\t<option value=\"EE\">Estonie</option>
\t<option value=\"US\">États unis</option>
\t<option value=\"ET\">Éthiopie</option>
\t<option value=\"FK\">Falkland, îles (malvinas)</option>
\t<option value=\"FO\">Féroé, îles</option>
\t<option value=\"FJ\">Fidji</option>
\t<option value=\"FI\">Finlande</option>
\t<option value=\"FR\">France</option>

\t<option value=\"GA\">Gabon</option>
\t<option value=\"GM\">Gambie</option>
\t<option value=\"GE\">Géorgie</option>
\t<option value=\"GS\">Géorgie du sud et les îles sandwich du sud</option>
\t<option value=\"GH\">Ghana</option>
\t<option value=\"GI\">Gibraltar</option>
\t<option value=\"GR\">Grèce</option>
\t<option value=\"GD\">Grenade</option>
\t<option value=\"GL\">Groenland</option>
\t<option value=\"GP\">Guadeloupe</option>
\t<option value=\"GU\">Guam</option>
\t<option value=\"GT\">Guatemala</option>
\t<option value=\"GG\">Guernesey</option>
\t<option value=\"GN\">Guinée</option>
\t<option value=\"GW\">Guinée bissau</option>
\t<option value=\"GQ\">Guinée équatoriale</option>
\t<option value=\"GY\">Guyana</option>
\t<option value=\"GF\">Guyane française</option>
\t<option value=\"HT\">Haïti</option>
\t<option value=\"HM\">Heard et îles macdonald, île</option>
\t<option value=\"HN\">Honduras</option>
\t<option value=\"HK\">Hong kong</option>
\t<option value=\"HU\">Hongrie</option>
\t<option value=\"IM\">Île de man</option>
\t<option value=\"UM\">Îles mineures éloignées des états unis</option>
\t<option value=\"VG\">Îles vierges britanniques</option>
\t<option value=\"VI\">Îles vierges des états unis</option>
\t<option value=\"IN\">Inde</option>
\t<option value=\"ID\">Indonésie</option>
\t<option value=\"IR\">Iran, république islamique d'</option>
\t<option value=\"IQ\">Iraq</option>
\t<option value=\"IE\">Irlande</option>
\t<option value=\"IS\">Islande</option>
\t<option value=\"IL\">Israël</option>
\t<option value=\"IT\">Italie</option>
\t<option value=\"JM\">Jamaïque</option>
\t<option value=\"JP\">Japon</option>
\t<option value=\"JE\">Jersey</option>
\t<option value=\"JO\">Jordanie</option>
\t<option value=\"KZ\">Kazakhstan</option>
\t<option value=\"KE\">Kenya</option>
\t<option value=\"KG\">Kirghizistan</option>
\t<option value=\"KI\">Kiribati</option>
\t<option value=\"KW\">Koweït</option>
\t<option value=\"LA\">Lao, république démocratique populaire</option>
\t<option value=\"LS\">Lesotho</option>
\t<option value=\"LV\">Lettonie</option>
\t<option value=\"LB\">Liban</option>
\t<option value=\"LR\">Libéria</option>
\t<option value=\"LY\">Libye</option>
\t<option value=\"LI\">Liechtenstein</option>
\t<option value=\"LT\">Lituanie</option>
\t<option value=\"LU\">Luxembourg</option>
\t<option value=\"MO\">Macao</option>
\t<option value=\"MK\">Macédoine, l'ex république yougoslave de</option>
\t<option value=\"MG\">Madagascar</option>
\t<option value=\"MY\">Malaisie</option>
\t<option value=\"MW\">Malawi</option>
\t<option value=\"MV\">Maldives</option>
\t<option value=\"ML\">Mali</option>
\t<option value=\"MT\">Malte</option>
\t<option value=\"MP\">Mariannes du nord, îles</option>
\t<option value=\"MA\">Maroc</option>
\t<option value=\"MH\">Marshall, îles</option>
\t<option value=\"MQ\">Martinique</option>
\t<option value=\"MU\">Maurice</option>
\t<option value=\"MR\">Mauritanie</option>
\t<option value=\"YT\">Mayotte</option>
\t<option value=\"MX\">Mexique</option>
\t<option value=\"FM\">Micronésie, états fédérés de</option>
\t<option value=\"MD\">Moldova, république de</option>
\t<option value=\"MC\">Monaco</option>
\t<option value=\"MN\">Mongolie</option>
\t<option value=\"ME\">Monténégro</option>
\t<option value=\"MS\">Montserrat</option>
\t<option value=\"MZ\">Mozambique</option>
\t<option value=\"MM\">Myanmar</option>
\t<option value=\"NA\">Namibie</option>
\t<option value=\"NR\">Nauru</option>
\t<option value=\"NP\">Népal</option>
\t<option value=\"NI\">Nicaragua</option>
\t<option value=\"NE\">Niger</option>
\t<option value=\"NG\">Nigéria</option>
\t<option value=\"NU\">Niué</option>
\t<option value=\"NF\">Norfolk, île</option>
\t<option value=\"NO\">Norvège</option>
\t<option value=\"NC\">Nouvelle calédonie</option>
\t<option value=\"NZ\">Nouvelle zélande</option>
\t<option value=\"IO\">Océan indien, territoire britannique de l'</option>
\t<option value=\"OM\">Oman</option>
\t<option value=\"UG\">Ouganda</option>
\t<option value=\"UZ\">Ouzbékistan</option>
\t<option value=\"PK\">Pakistan</option>
\t<option value=\"PW\">Palaos</option>
\t<option value=\"PS\">Palestinien occupé, territoire</option>
\t<option value=\"PA\">Panama</option>
\t<option value=\"PG\">Papouasie nouvelle guinée</option>
\t<option value=\"PY\">Paraguay</option>
\t<option value=\"NL\">Pays bas</option>
\t<option value=\"PE\">Pérou</option>
\t<option value=\"PH\">Philippines</option>
\t<option value=\"PN\">Pitcairn</option>
\t<option value=\"PL\">Pologne</option>
\t<option value=\"PF\">Polynésie française</option>
\t<option value=\"PR\">Porto rico</option>
\t<option value=\"PT\">Portugal</option>
\t<option value=\"QA\">Qatar</option>
\t<option value=\"RE\">Réunion</option>
\t<option value=\"RO\">Roumanie</option>
\t<option value=\"GB\">Royaume uni</option>
\t<option value=\"RU\">Russie, fédération de</option>
\t<option value=\"RW\">Rwanda</option>
\t<option value=\"EH\">Sahara occidental</option>
\t<option value=\"BL\">Saint barthélemy</option>
\t<option value=\"SH\">Sainte hélène, ascension et tristan da cunha</option>
\t<option value=\"LC\">Sainte lucie</option>
\t<option value=\"KN\">Saint kitts et nevis</option>
\t<option value=\"SM\">Saint marin</option>
\t<option value=\"MF\">Saint martin(partie française)</option>
\t<option value=\"SX\">Saint martin (partie néerlandaise)</option>
\t<option value=\"PM\">Saint pierre et miquelon</option>
\t<option value=\"VA\">Saint siège (état de la cité du vatican)</option>
\t<option value=\"VC\">Saint vincent et les grenadines</option>
\t<option value=\"SB\">Salomon, îles</option>
\t<option value=\"WS\">Samoa</option>
\t<option value=\"AS\">Samoa américaines</option>
\t<option value=\"ST\">Sao tomé et principe</option>
\t<option value=\"SN\">Sénégal</option>
\t<option value=\"RS\">Serbie</option>
\t<option value=\"SC\">Seychelles</option>
\t<option value=\"SL\">Sierra leone</option>
\t<option value=\"SG\">Singapour</option>
\t<option value=\"SK\">Slovaquie</option>
\t<option value=\"SI\">Slovénie</option>
\t<option value=\"SO\">Somalie</option>
\t<option value=\"SD\">Soudan</option>
\t<option value=\"SS\">Soudan du sud</option>
\t<option value=\"LK\">Sri lanka</option>
\t<option value=\"SE\">Suède</option>
\t<option value=\"CH\">Suisse</option>
\t<option value=\"SR\">Suriname</option>
\t<option value=\"SJ\">Svalbard et île jan mayen</option>
\t<option value=\"SZ\">Swaziland</option>
\t<option value=\"SY\">Syrienne, république arabe</option>
\t<option value=\"TJ\">Tadjikistan</option>
\t<option value=\"TW\">Taïwan, province de chine</option>
\t<option value=\"TZ\">Tanzanie, république unie de</option>
\t<option value=\"TD\">Tchad</option>
\t<option value=\"CZ\">Tchèque, république</option>
\t<option value=\"TF\">Terres australes françaises</option>
\t<option value=\"TH\">Thaïlande</option>
\t<option value=\"TL\">Timor leste</option>
\t<option value=\"TG\">Togo</option>
\t<option value=\"TK\">Tokelau</option>
\t<option value=\"TO\">Tonga</option>
\t<option value=\"TT\">Trinité et tobago</option>
\t<option value=\"TN\">Tunisie</option>
\t<option value=\"TM\">Turkménistan</option>
\t<option value=\"TC\">Turks et caïcos, îles</option>
\t<option value=\"TR\">Turquie</option>
\t<option value=\"TV\">Tuvalu</option>
\t<option value=\"UA\">Ukraine</option>
\t<option value=\"UY\">Uruguay</option>
\t<option value=\"VU\">Vanuatu</option>
\t<option value=\"VE\">Venezuela, république bolivarienne du</option>
\t<option value=\"VN\">Viet nam</option>
\t<option value=\"WF\">Wallis et futuna</option>
\t<option value=\"YE\">Yémen</option>
\t<option value=\"ZM\">Zambie</option>
\t<option value=\"ZW\">Zimbabwe​​​​​</option>
";
        } else {
            // line 253
            yield "\t<option value=\"AF\">Afghanistan</option>
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
\t<option value=\"FR\">French</option>
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
        return "Tools/CountryRegister.html.twig";
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
        return array (  297 => 253,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "Tools/CountryRegister.html.twig", "/var/www/vhosts/trustandmarket.com/httpdocs/templates/Tools/CountryRegister.html.twig");
    }
}
