<?php
/**
 * DebitCardsAPI\Countries.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 02.04.2021
 * Time: 4:48
 *
 * Version: 0.0.2
 */

namespace DebitCardsAPI;


class Countries
{
    protected const COUNTRIES = array(
        ["id"=>"AF", "code"=>"AF", "name" => "AFGHANISTAN"],
        ["id"=>"AX", "code"=>"AX", "name" => "ÅLAND ISLANDS"],
        ["id"=>"AL", "code"=>"AL", "name" => "ALBANIA"],
        ["id"=>"DZ", "code"=>"DZ", "name" => "ALGERIA"],
        ["id"=>"AS", "code"=>"AS", "name" => "AMERICAN SAMOA"],
        ["id"=>"AD", "code"=>"AD", "name" => "ANDORRA"],
        ["id"=>"AO", "code"=>"AO", "name" => "ANGOLA"],
        ["id"=>"AI", "code"=>"AI", "name" => "ANGUILLA"],
        ["id"=>"AQ", "code"=>"AQ", "name" => "ANTARCTICA"],
        ["id"=>"AG", "code"=>"AG", "name" => "ANTIGUA AND BARBUDA"],
        ["id"=>"AR", "code"=>"AR", "name" => "ARGENTINA"],
        ["id"=>"AM", "code"=>"AM", "name" => "ARMENIA"],
        ["id"=>"AW", "code"=>"AW", "name" => "ARUBA"],
        ["id"=>"AU", "code"=>"AU", "name" => "AUSTRALIA"],
        ["id"=>"AT", "code"=>"AT", "name" => "AUSTRIA"],
        ["id"=>"AZ", "code"=>"AZ", "name" => "AZERBAIJAN"],
        ["id"=>"BS", "code"=>"BS", "name" => "BAHAMAS"],
        ["id"=>"BH", "code"=>"BH", "name" => "BAHRAIN"],
        ["id"=>"BD", "code"=>"BD", "name" => "BANGLADESH"],
        ["id"=>"BB", "code"=>"BB", "name" => "BARBADOS"],
        ["id"=>"BY", "code"=>"BY", "name" => "BELARUS"],
        ["id"=>"BE", "code"=>"BE", "name" => "BELGIUM"],
        ["id"=>"BZ", "code"=>"BZ", "name" => "BELIZE"],
        ["id"=>"BJ", "code"=>"BJ", "name" => "BENIN"],
        ["id"=>"BM", "code"=>"BM", "name" => "BERMUDA"],
        ["id"=>"BT", "code"=>"BT", "name" => "BHUTAN"],
        ["id"=>"BO", "code"=>"BO", "name" => "BOLIVIA, PLURINATIONAL STATE OF"],
        ["id"=>"BQ", "code"=>"BQ", "name" => "BONAIRE, SINT EUSTATIUS AND SABA"],
        ["id"=>"BA", "code"=>"BA", "name" => "BOSNIA AND HERZEGOVINA"],
        ["id"=>"BW", "code"=>"BW", "name" => "BOTSWANA"],
        ["id"=>"BV", "code"=>"BV", "name" => "BOUVET ISLAND"],
        ["id"=>"BR", "code"=>"BR", "name" => "BRAZIL"],
        ["id"=>"IO", "code"=>"IO", "name" => "BRITISH INDIAN OCEAN TERRITORY"],
        ["id"=>"BN", "code"=>"BN", "name" => "BRUNEI DARUSSALAM"],
        ["id"=>"BG", "code"=>"BG", "name" => "BULGARIA"],
        ["id"=>"BF", "code"=>"BF", "name" => "BURKINA FASO"],
        ["id"=>"BI", "code"=>"BI", "name" => "BURUNDI"],
        ["id"=>"KH", "code"=>"KH", "name" => "CAMBODIA"],
        ["id"=>"CM", "code"=>"CM", "name" => "CAMEROON"],
        ["id"=>"CA", "code"=>"CA", "name" => "CANADA"],
        ["id"=>"CV", "code"=>"CV", "name" => "CAPE VERDE"],
        ["id"=>"KY", "code"=>"KY", "name" => "CAYMAN ISLANDS"],
        ["id"=>"CF", "code"=>"CF", "name" => "CENTRAL AFRICAN REPUBLIC"],
        ["id"=>"TD", "code"=>"TD", "name" => "CHAD"],
        ["id"=>"CL", "code"=>"CL", "name" => "CHILE"],
        ["id"=>"CN", "code"=>"CN", "name" => "CHINA"],
        ["id"=>"CX", "code"=>"CX", "name" => "CHRISTMAS ISLAND"],
        ["id"=>"CC", "code"=>"CC", "name" => "COCOS (KEELING) ISLANDS"],
        ["id"=>"CO", "code"=>"CO", "name" => "COLOMBIA"],
        ["id"=>"KM", "code"=>"KM", "name" => "COMOROS"],
        ["id"=>"CG", "code"=>"CG", "name" => "CONGO"],
        ["id"=>"CD", "code"=>"CD", "name" => "CONGO, THE DEMOCRATIC REPUBLIC OF THE"],
        ["id"=>"CK", "code"=>"CK", "name" => "COOK ISLANDS"],
        ["id"=>"CR", "code"=>"CR", "name" => "COSTA RICA"],
        ["id"=>"CI", "code"=>"CI", "name" => "CÔTE D'IVOIRE"],
        ["id"=>"HR", "code"=>"HR", "name" => "CROATIA"],
        ["id"=>"CU", "code"=>"CU", "name" => "CUBA"],
        ["id"=>"CW", "code"=>"CW", "name" => "CURAÇAO"],
        ["id"=>"CY", "code"=>"CY", "name" => "CYPRUS"],
        ["id"=>"CZ", "code"=>"CZ", "name" => "CZECH REPUBLIC"],
        ["id"=>"DK", "code"=>"DK", "name" => "DENMARK"],
        ["id"=>"DJ", "code"=>"DJ", "name" => "DJIBOUTI"],
        ["id"=>"DM", "code"=>"DM", "name" => "DOMINICA"],
        ["id"=>"DO", "code"=>"DO", "name" => "DOMINICAN REPUBLIC"],
        ["id"=>"EC", "code"=>"EC", "name" => "ECUADOR"],
        ["id"=>"EG", "code"=>"EG", "name" => "EGYPT"],
        ["id"=>"SV", "code"=>"SV", "name" => "EL SALVADOR"],
        ["id"=>"GQ", "code"=>"GQ", "name" => "EQUATORIAL GUINEA"],
        ["id"=>"ER", "code"=>"ER", "name" => "ERITREA"],
        ["id"=>"EE", "code"=>"EE", "name" => "ESTONIA"],
        ["id"=>"ET", "code"=>"ET", "name" => "ETHIOPIA"],
        ["id"=>"FK", "code"=>"FK", "name" => "FALKLAND ISLANDS (MALVINAS)"],
        ["id"=>"FO", "code"=>"FO", "name" => "FAROE ISLANDS"],
        ["id"=>"FJ", "code"=>"FJ", "name" => "FIJI"],
        ["id"=>"FI", "code"=>"FI", "name" => "FINLAND"],
        ["id"=>"FR", "code"=>"FR", "name" => "FRANCE"],
        ["id"=>"GF", "code"=>"GF", "name" => "FRENCH GUIANA"],
        ["id"=>"PF", "code"=>"PF", "name" => "FRENCH POLYNESIA"],
        ["id"=>"TF", "code"=>"TF", "name" => "FRENCH SOUTHERN TERRITORIES"],
        ["id"=>"GA", "code"=>"GA", "name" => "GABON"],
        ["id"=>"GM", "code"=>"GM", "name" => "GAMBIA"],
        ["id"=>"GE", "code"=>"GE", "name" => "GEORGIA"],
        ["id"=>"DE", "code"=>"DE", "name" => "GERMANY"],
        ["id"=>"GH", "code"=>"GH", "name" => "GHANA"],
        ["id"=>"GI", "code"=>"GI", "name" => "GIBRALTAR"],
        ["id"=>"GR", "code"=>"GR", "name" => "GREECE"],
        ["id"=>"GL", "code"=>"GL", "name" => "GREENLAND"],
        ["id"=>"GD", "code"=>"GD", "name" => "GRENADA"],
        ["id"=>"GP", "code"=>"GP", "name" => "GUADELOUPE"],
        ["id"=>"GU", "code"=>"GU", "name" => "GUAM"],
        ["id"=>"GT", "code"=>"GT", "name" => "GUATEMALA"],
        ["id"=>"GG", "code"=>"GG", "name" => "GUERNSEY"],
        ["id"=>"GN", "code"=>"GN", "name" => "GUINEA"],
        ["id"=>"GW", "code"=>"GW", "name" => "GUINEA-BISSAU"],
        ["id"=>"GY", "code"=>"GY", "name" => "GUYANA"],
        ["id"=>"HT", "code"=>"HT", "name" => "HAITI"],
        ["id"=>"HM", "code"=>"HM", "name" => "HEARD ISLAND AND MCDONALD ISLANDS"],
        ["id"=>"VA", "code"=>"VA", "name" => "HOLY SEE (VATICAN CITY STATE)"],
        ["id"=>"HN", "code"=>"HN", "name" => "HONDURAS"],
        ["id"=>"HK", "code"=>"HK", "name" => "HONG KONG"],
        ["id"=>"HU", "code"=>"HU", "name" => "HUNGARY"],
        ["id"=>"IS", "code"=>"IS", "name" => "ICELAND"],
        ["id"=>"IN", "code"=>"IN", "name" => "INDIA"],
        ["id"=>"ID", "code"=>"ID", "name" => "INDONESIA"],
        ["id"=>"IR", "code"=>"IR", "name" => "IRAN, ISLAMIC REPUBLIC OF"],
        ["id"=>"IQ", "code"=>"IQ", "name" => "IRAQ"],
        ["id"=>"IE", "code"=>"IE", "name" => "IRELAND"],
        ["id"=>"IM", "code"=>"IM", "name" => "ISLE OF MAN"],
        ["id"=>"IL", "code"=>"IL", "name" => "ISRAEL"],
        ["id"=>"IT", "code"=>"IT", "name" => "ITALY"],
        ["id"=>"JM", "code"=>"JM", "name" => "JAMAICA"],
        ["id"=>"JP", "code"=>"JP", "name" => "JAPAN"],
        ["id"=>"JE", "code"=>"JE", "name" => "JERSEY"],
        ["id"=>"JO", "code"=>"JO", "name" => "JORDAN"],
        ["id"=>"KZ", "code"=>"KZ", "name" => "KAZAKHSTAN"],
        ["id"=>"KE", "code"=>"KE", "name" => "KENYA"],
        ["id"=>"KI", "code"=>"KI", "name" => "KIRIBATI"],
        ["id"=>"KP", "code"=>"KP", "name" => "KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF"],
        ["id"=>"KR", "code"=>"KR", "name" => "KOREA, REPUBLIC OF"],
        ["id"=>"KW", "code"=>"KW", "name" => "KUWAIT"],
        ["id"=>"KG", "code"=>"KG", "name" => "KYRGYZSTAN"],
        ["id"=>"LA", "code"=>"LA", "name" => "LAO PEOPLE'S DEMOCRATIC REPUBLIC"],
        ["id"=>"LV", "code"=>"LV", "name" => "LATVIA"],
        ["id"=>"LB", "code"=>"LB", "name" => "LEBANON"],
        ["id"=>"LS", "code"=>"LS", "name" => "LESOTHO"],
        ["id"=>"LR", "code"=>"LR", "name" => "LIBERIA"],
        ["id"=>"LY", "code"=>"LY", "name" => "LIBYA"],
        ["id"=>"LI", "code"=>"LI", "name" => "LIECHTENSTEIN"],
        ["id"=>"LT", "code"=>"LT", "name" => "LITHUANIA"],
        ["id"=>"LU", "code"=>"LU", "name" => "LUXEMBOURG"],
        ["id"=>"MO", "code"=>"MO", "name" => "MACAO"],
        ["id"=>"MK", "code"=>"MK", "name" => "MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF"],
        ["id"=>"MG", "code"=>"MG", "name" => "MADAGASCAR"],
        ["id"=>"MW", "code"=>"MW", "name" => "MALAWI"],
        ["id"=>"MY", "code"=>"MY", "name" => "MALAYSIA"],
        ["id"=>"MV", "code"=>"MV", "name" => "MALDIVES"],
        ["id"=>"ML", "code"=>"ML", "name" => "MALI"],
        ["id"=>"MT", "code"=>"MT", "name" => "MALTA"],
        ["id"=>"MH", "code"=>"MH", "name" => "MARSHALL ISLANDS"],
        ["id"=>"MQ", "code"=>"MQ", "name" => "MARTINIQUE"],
        ["id"=>"MR", "code"=>"MR", "name" => "MAURITANIA"],
        ["id"=>"MU", "code"=>"MU", "name" => "MAURITIUS"],
        ["id"=>"YT", "code"=>"YT", "name" => "MAYOTTE"],
        ["id"=>"MX", "code"=>"MX", "name" => "MEXICO"],
        ["id"=>"FM", "code"=>"FM", "name" => "MICRONESIA, FEDERATED STATES OF"],
        ["id"=>"MD", "code"=>"MD", "name" => "MOLDOVA, REPUBLIC OF"],
        ["id"=>"MC", "code"=>"MC", "name" => "MONACO"],
        ["id"=>"MN", "code"=>"MN", "name" => "MONGOLIA"],
        ["id"=>"ME", "code"=>"ME", "name" => "MONTENEGRO"],
        ["id"=>"MS", "code"=>"MS", "name" => "MONTSERRAT"],
        ["id"=>"MA", "code"=>"MA", "name" => "MOROCCO"],
        ["id"=>"MZ", "code"=>"MZ", "name" => "MOZAMBIQUE"],
        ["id"=>"MM", "code"=>"MM", "name" => "MYANMAR"],
        ["id"=>"NA", "code"=>"NA", "name" => "NAMIBIA"],
        ["id"=>"NR", "code"=>"NR", "name" => "NAURU"],
        ["id"=>"NP", "code"=>"NP", "name" => "NEPAL"],
        ["id"=>"NL", "code"=>"NL", "name" => "NETHERLANDS"],
        ["id"=>"NC", "code"=>"NC", "name" => "NEW CALEDONIA"],
        ["id"=>"NZ", "code"=>"NZ", "name" => "NEW ZEALAND"],
        ["id"=>"NI", "code"=>"NI", "name" => "NICARAGUA"],
        ["id"=>"NE", "code"=>"NE", "name" => "NIGER"],
        ["id"=>"NG", "code"=>"NG", "name" => "NIGERIA"],
        ["id"=>"NU", "code"=>"NU", "name" => "NIUE"],
        ["id"=>"NF", "code"=>"NF", "name" => "NORFOLK ISLAND"],
        ["id"=>"MP", "code"=>"MP", "name" => "NORTHERN MARIANA ISLANDS"],
        ["id"=>"NO", "code"=>"NO", "name" => "NORWAY"],
        ["id"=>"OM", "code"=>"OM", "name" => "OMAN"],
        ["id"=>"PK", "code"=>"PK", "name" => "PAKISTAN"],
        ["id"=>"PW", "code"=>"PW", "name" => "PALAU"],
        ["id"=>"PS", "code"=>"PS", "name" => "PALESTINE, STATE OF"],
        ["id"=>"PA", "code"=>"PA", "name" => "PANAMA"],
        ["id"=>"PG", "code"=>"PG", "name" => "PAPUA NEW GUINEA"],
        ["id"=>"PY", "code"=>"PY", "name" => "PARAGUAY"],
        ["id"=>"PE", "code"=>"PE", "name" => "PERU"],
        ["id"=>"PH", "code"=>"PH", "name" => "PHILIPPINES"],
        ["id"=>"PN", "code"=>"PN", "name" => "PITCAIRN"],
        ["id"=>"PL", "code"=>"PL", "name" => "POLAND"],
        ["id"=>"PT", "code"=>"PT", "name" => "PORTUGAL"],
        ["id"=>"PR", "code"=>"PR", "name" => "PUERTO RICO"],
        ["id"=>"QA", "code"=>"QA", "name" => "QATAR"],
        ["id"=>"RE", "code"=>"RE", "name" => "RÉUNION"],
        ["id"=>"RO", "code"=>"RO", "name" => "ROMANIA"],
        ["id"=>"RU", "code"=>"RU", "name" => "RUSSIAN FEDERATION"],
        ["id"=>"RW", "code"=>"RW", "name" => "RWANDA"],
        ["id"=>"BL", "code"=>"BL", "name" => "SAINT BARTHÉLEMY"],
        ["id"=>"SH", "code"=>"SH", "name" => "SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA"],
        ["id"=>"KN", "code"=>"KN", "name" => "SAINT KITTS AND NEVIS"],
        ["id"=>"LC", "code"=>"LC", "name" => "SAINT LUCIA"],
        ["id"=>"MF", "code"=>"MF", "name" => "SAINT MARTIN (FRENCH PART)"],
        ["id"=>"PM", "code"=>"PM", "name" => "SAINT PIERRE AND MIQUELON"],
        ["id"=>"VC", "code"=>"VC", "name" => "SAINT VINCENT AND THE GRENADINES"],
        ["id"=>"WS", "code"=>"WS", "name" => "SAMOA"],
        ["id"=>"SM", "code"=>"SM", "name" => "SAN MARINO"],
        ["id"=>"ST", "code"=>"ST", "name" => "SAO TOME AND PRINCIPE"],
        ["id"=>"SA", "code"=>"SA", "name" => "SAUDI ARABIA"],
        ["id"=>"SN", "code"=>"SN", "name" => "SENEGAL"],
        ["id"=>"RS", "code"=>"RS", "name" => "SERBIA"],
        ["id"=>"SC", "code"=>"SC", "name" => "SEYCHELLES"],
        ["id"=>"SL", "code"=>"SL", "name" => "SIERRA LEONE"],
        ["id"=>"SG", "code"=>"SG", "name" => "SINGAPORE"],
        ["id"=>"SX", "code"=>"SX", "name" => "SINT MAARTEN (DUTCH PART)"],
        ["id"=>"SK", "code"=>"SK", "name" => "SLOVAKIA"],
        ["id"=>"SI", "code"=>"SI", "name" => "SLOVENIA"],
        ["id"=>"SB", "code"=>"SB", "name" => "SOLOMON ISLANDS"],
        ["id"=>"SO", "code"=>"SO", "name" => "SOMALIA"],
        ["id"=>"ZA", "code"=>"ZA", "name" => "SOUTH AFRICA"],
        ["id"=>"GS", "code"=>"GS", "name" => "SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS"],
        ["id"=>"SS", "code"=>"SS", "name" => "SOUTH SUDAN"],
        ["id"=>"ES", "code"=>"ES", "name" => "SPAIN"],
        ["id"=>"LK", "code"=>"LK", "name" => "SRI LANKA"],
        ["id"=>"SD", "code"=>"SD", "name" => "SUDAN"],
        ["id"=>"SR", "code"=>"SR", "name" => "SURINAME"],
        ["id"=>"SJ", "code"=>"SJ", "name" => "SVALBARD AND JAN MAYEN"],
        ["id"=>"SZ", "code"=>"SZ", "name" => "SWAZILAND"],
        ["id"=>"SE", "code"=>"SE", "name" => "SWEDEN"],
        ["id"=>"CH", "code"=>"CH", "name" => "SWITZERLAND"],
        ["id"=>"SY", "code"=>"SY", "name" => "SYRIAN ARAB REPUBLIC"],
        ["id"=>"TW", "code"=>"TW", "name" => "TAIWAN, PROVINCE OF CHINA"],
        ["id"=>"TJ", "code"=>"TJ", "name" => "TAJIKISTAN"],
        ["id"=>"TZ", "code"=>"TZ", "name" => "TANZANIA, UNITED REPUBLIC OF"],
        ["id"=>"TH", "code"=>"TH", "name" => "THAILAND"],
        ["id"=>"TL", "code"=>"TL", "name" => "TIMOR-LESTE"],
        ["id"=>"TG", "code"=>"TG", "name" => "TOGO"],
        ["id"=>"TK", "code"=>"TK", "name" => "TOKELAU"],
        ["id"=>"TO", "code"=>"TO", "name" => "TONGA"],
        ["id"=>"TT", "code"=>"TT", "name" => "TRINIDAD AND TOBAGO"],
        ["id"=>"TN", "code"=>"TN", "name" => "TUNISIA"],
        ["id"=>"TR", "code"=>"TR", "name" => "TURKEY"],
        ["id"=>"TM", "code"=>"TM", "name" => "TURKMENISTAN"],
        ["id"=>"TC", "code"=>"TC", "name" => "TURKS AND CAICOS ISLANDS"],
        ["id"=>"TV", "code"=>"TV", "name" => "TUVALU"],
        ["id"=>"UG", "code"=>"UG", "name" => "UGANDA"],
        ["id"=>"UA", "code"=>"UA", "name" => "UKRAINE"],
        ["id"=>"AE", "code"=>"AE", "name" => "UNITED ARAB EMIRATES"],
        ["id"=>"GB", "code"=>"GB", "name" => "UNITED KINGDOM"],
        ["id"=>"US", "code"=>"US", "name" => "UNITED STATES"],
        ["id"=>"UM", "code"=>"UM", "name" => "UNITED STATES MINOR OUTLYING ISLANDS"],
        ["id"=>"UY", "code"=>"UY", "name" => "URUGUAY"],
        ["id"=>"UZ", "code"=>"UZ", "name" => "UZBEKISTAN"],
        ["id"=>"VU", "code"=>"VU", "name" => "VANUATU"],
        ["id"=>"VE", "code"=>"VE", "name" => "VENEZUELA, BOLIVARIAN REPUBLIC OF"],
        ["id"=>"VN", "code"=>"VN", "name" => "VIETNAM"],
        ["id"=>"VG", "code"=>"VG", "name" => "VIRGIN ISLANDS, BRITISH"],
        ["id"=>"VI", "code"=>"VI", "name" => "VIRGIN ISLANDS, U.S."],
        ["id"=>"WF", "code"=>"WF", "name" => "WALLIS AND FUTUNA"],
        ["id"=>"EH", "code"=>"EH", "name" => "WESTERN SAHARA"],
        ["id"=>"YE", "code"=>"YE", "name" => "YEMEN"],
        ["id"=>"ZM", "code"=>"ZM", "name" => "ZAMBIA"],
        ["id"=>"ZW", "code"=>"ZW", "name" => "ZIMBABWE"]
    );

    protected $params;

    private $debit_cards;

    /**
     * Cards constructor.
     * @param $cards
     */
    public function __construct($cards) {
        $this->debit_cards = $cards;
        $this->init_params();
    }

    private function init_params() {
        $this->params = [
            "id" => null,
            "code" => null,
            "name" => null
        ];
    }

    /**
     * @param null $id
     * @return string[]|\string[][]|null
     */
    public function get($id = null): ?array
    {
        if ($id) {
            return $this->get_country_by_id($id);
        }
        return self::COUNTRIES;
    }

    /**
     * @param $id
     * @return string[]|null
     */
    public function get_country_by_id($id): ?array
    {
        foreach (self::COUNTRIES as $key=>$value) {
            if ($value["id"] === $id) {
                $this->params = self::COUNTRIES[$key];
            }
        }

        return $this->params;
    }
}