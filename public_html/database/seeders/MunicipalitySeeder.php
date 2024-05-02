<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities_and_municipalities = array(
            array(
                'code' => '012801',
                'name' => 'ADAMS',
                'province_code' => '0128'
            ),
            array(
                'code' => '012802',
                'name' => 'BACARRA',
                'province_code' => '0128'
            ),
            array(
                'code' => '012803',
                'name' => 'BADOC',
                'province_code' => '0128'
            ),
            array(
                'code' => '012804',
                'name' => 'BANGUI',
                'province_code' => '0128'
            ),
            array(
                'code' => '012805',
                'name' => 'CITY OF BATAC',
                'province_code' => '0128'
            ),
            array(
                'code' => '012806',
                'name' => 'BURGOS',
                'province_code' => '0128'
            ),
            array(
                'code' => '012807',
                'name' => 'CARASI',
                'province_code' => '0128'
            ),
            array(
                'code' => '012808',
                'name' => 'CURRIMAO',
                'province_code' => '0128'
            ),
            array(
                'code' => '012809',
                'name' => 'DINGRAS',
                'province_code' => '0128'
            ),
            array(
                'code' => '012810',
                'name' => 'DUMALNEG',
                'province_code' => '0128'
            ),
            array(
                'code' => '012811',
                'name' => 'BANNA (ESPIRITU)',
                'province_code' => '0128'
            ),
            array(
                'code' => '012812',
                'name' => 'LAOAG CITY',
                'province_code' => '0128'
            ),
            array(
                'code' => '012813',
                'name' => 'MARCOS',
                'province_code' => '0128'
            ),
            array(
                'code' => '012814',
                'name' => 'NUEVA ERA',
                'province_code' => '0128'
            ),
            array(
                'code' => '012815',
                'name' => 'PAGUDPUD',
                'province_code' => '0128'
            ),
            array(
                'code' => '012816',
                'name' => 'PAOAY',
                'province_code' => '0128'
            ),
            array(
                'code' => '012817',
                'name' => 'PASUQUIN',
                'province_code' => '0128'
            ),
            array(
                'code' => '012818',
                'name' => 'PIDDIG',
                'province_code' => '0128'
            ),
            array(
                'code' => '012819',
                'name' => 'PINILI',
                'province_code' => '0128'
            ),
            array(
                'code' => '012820',
                'name' => 'SAN NICOLAS',
                'province_code' => '0128'
            ),
            array(
                'code' => '012821',
                'name' => 'SARRAT',
                'province_code' => '0128'
            ),
            array(
                'code' => '012822',
                'name' => 'SOLSONA',
                'province_code' => '0128'
            ),
            array(
                'code' => '012823',
                'name' => 'VINTAR',
                'province_code' => '0128'
            ),
            array(
                'code' => '012901',
                'name' => 'ALILEM',
                'province_code' => '0129'
            ),
            array(
                'code' => '012902',
                'name' => 'BANAYOYO',
                'province_code' => '0129'
            ),
            array(
                'code' => '012903',
                'name' => 'BANTAY',
                'province_code' => '0129'
            ),
            array(
                'code' => '012904',
                'name' => 'BURGOS',
                'province_code' => '0129'
            ),
            array(
                'code' => '012905',
                'name' => 'CABUGAO',
                'province_code' => '0129'
            ),
            array(
                'code' => '012906',
                'name' => 'CITY OF CANDON',
                'province_code' => '0129'
            ),
            array(
                'code' => '012907',
                'name' => 'CAOAYAN',
                'province_code' => '0129'
            ),
            array(
                'code' => '012908',
                'name' => 'CERVANTES',
                'province_code' => '0129'
            ),
            array(
                'code' => '012909',
                'name' => 'GALIMUYOD',
                'province_code' => '0129'
            ),
            array(
                'code' => '012910',
                'name' => 'GREGORIO DEL PILAR (CONCEPCION)',
                'province_code' => '0129'
            ),
            array(
                'code' => '012911',
                'name' => 'LIDLIDDA',
                'province_code' => '0129'
            ),
            array(
                'code' => '012912',
                'name' => 'MAGSINGAL',
                'province_code' => '0129'
            ),
            array(
                'code' => '012913',
                'name' => 'NAGBUKEL',
                'province_code' => '0129'
            ),
            array(
                'code' => '012914',
                'name' => 'NARVACAN',
                'province_code' => '0129'
            ),
            array(
                'code' => '012915',
                'name' => 'QUIRINO (ANGKAKI)',
                'province_code' => '0129'
            ),
            array(
                'code' => '012916',
                'name' => 'SALCEDO (BAUGEN)',
                'province_code' => '0129'
            ),
            array(
                'code' => '012917',
                'name' => 'SAN EMILIO',
                'province_code' => '0129'
            ),
            array(
                'code' => '012918',
                'name' => 'SAN ESTEBAN',
                'province_code' => '0129'
            ),
            array(
                'code' => '012919',
                'name' => 'SAN ILDEFONSO',
                'province_code' => '0129'
            ),
            array(
                'code' => '012920',
                'name' => 'SAN JUAN (LAPOG)',
                'province_code' => '0129'
            ),
            array(
                'code' => '012921',
                'name' => 'SAN VICENTE',
                'province_code' => '0129'
            ),
            array(
                'code' => '012922',
                'name' => 'SANTA',
                'province_code' => '0129'
            ),
            array(
                'code' => '012923',
                'name' => 'SANTA CATALINA',
                'province_code' => '0129'
            ),
            array(
                'code' => '012924',
                'name' => 'SANTA CRUZ',
                'province_code' => '0129'
            ),
            array(
                'code' => '012925',
                'name' => 'SANTA LUCIA',
                'province_code' => '0129'
            ),
            array(
                'code' => '012926',
                'name' => 'SANTA MARIA',
                'province_code' => '0129'
            ),
            array(
                'code' => '012927',
                'name' => 'SANTIAGO',
                'province_code' => '0129'
            ),
            array(
                'code' => '012928',
                'name' => 'SANTO DOMINGO',
                'province_code' => '0129'
            ),
            array(
                'code' => '012929',
                'name' => 'SIGAY',
                'province_code' => '0129'
            ),
            array(
                'code' => '012930',
                'name' => 'SINAIT',
                'province_code' => '0129'
            ),
            array(
                'code' => '012931',
                'name' => 'SUGPON',
                'province_code' => '0129'
            ),
            array(
                'code' => '012932',
                'name' => 'SUYO',
                'province_code' => '0129'
            ),
            array(
                'code' => '012933',
                'name' => 'TAGUDIN',
                'province_code' => '0129'
            ),
            array(
                'code' => '012934',
                'name' => 'CITY OF VIGAN',
                'province_code' => '0129'
            ),
            array(
                'code' => '013301',
                'name' => 'AGOO',
                'province_code' => '0133'
            ),
            array(
                'code' => '013302',
                'name' => 'ARINGAY',
                'province_code' => '0133'
            ),
            array(
                'code' => '013303',
                'name' => 'BACNOTAN',
                'province_code' => '0133'
            ),
            array(
                'code' => '013304',
                'name' => 'BAGULIN',
                'province_code' => '0133'
            ),
            array(
                'code' => '013305',
                'name' => 'BALAOAN',
                'province_code' => '0133'
            ),
            array(
                'code' => '013306',
                'name' => 'BANGAR',
                'province_code' => '0133'
            ),
            array(
                'code' => '013307',
                'name' => 'BAUANG',
                'province_code' => '0133'
            ),
            array(
                'code' => '013308',
                'name' => 'BURGOS',
                'province_code' => '0133'
            ),
            array(
                'code' => '013309',
                'name' => 'CABA',
                'province_code' => '0133'
            ),
            array(
                'code' => '013310',
                'name' => 'LUNA',
                'province_code' => '0133'
            ),
            array(
                'code' => '013311',
                'name' => 'NAGUILIAN',
                'province_code' => '0133'
            ),
            array(
                'code' => '013312',
                'name' => 'PUGO',
                'province_code' => '0133'
            ),
            array(
                'code' => '013313',
                'name' => 'ROSARIO',
                'province_code' => '0133'
            ),
            array(
                'code' => '013314',
                'name' => 'CITY OF SAN FERNANDO',
                'province_code' => '0133'
            ),
            array(
                'code' => '013315',
                'name' => 'SAN GABRIEL',
                'province_code' => '0133'
            ),
            array(
                'code' => '013316',
                'name' => 'SAN JUAN',
                'province_code' => '0133'
            ),
            array(
                'code' => '013317',
                'name' => 'SANTO TOMAS',
                'province_code' => '0133'
            ),
            array(
                'code' => '013318',
                'name' => 'SANTOL',
                'province_code' => '0133'
            ),
            array(
                'code' => '013319',
                'name' => 'SUDIPEN',
                'province_code' => '0133'
            ),
            array(
                'code' => '013320',
                'name' => 'TUBAO',
                'province_code' => '0133'
            ),
            array(
                'code' => '015501',
                'name' => 'AGNO',
                'province_code' => '0155'
            ),
            array(
                'code' => '015502',
                'name' => 'AGUILAR',
                'province_code' => '0155'
            ),
            array(
                'code' => '015503',
                'name' => 'CITY OF ALAMINOS',
                'province_code' => '0155'
            ),
            array(
                'code' => '015504',
                'name' => 'ALCALA',
                'province_code' => '0155'
            ),
            array(
                'code' => '015505',
                'name' => 'ANDA',
                'province_code' => '0155'
            ),
            array(
                'code' => '015506',
                'name' => 'ASINGAN',
                'province_code' => '0155'
            ),
            array(
                'code' => '015507',
                'name' => 'BALUNGAO',
                'province_code' => '0155'
            ),
            array(
                'code' => '015508',
                'name' => 'BANI',
                'province_code' => '0155'
            ),
            array(
                'code' => '015509',
                'name' => 'BASISTA',
                'province_code' => '0155'
            ),
            array(
                'code' => '015510',
                'name' => 'BAUTISTA',
                'province_code' => '0155'
            ),
            array(
                'code' => '015511',
                'name' => 'BAYAMBANG',
                'province_code' => '0155'
            ),
            array(
                'code' => '015512',
                'name' => 'BINALONAN',
                'province_code' => '0155'
            ),
            array(
                'code' => '015513',
                'name' => 'BINMALEY',
                'province_code' => '0155'
            ),
            array(
                'code' => '015514',
                'name' => 'BOLINAO',
                'province_code' => '0155'
            ),
            array(
                'code' => '015515',
                'name' => 'BUGALLON',
                'province_code' => '0155'
            ),
            array(
                'code' => '015516',
                'name' => 'BURGOS',
                'province_code' => '0155'
            ),
            array(
                'code' => '015517',
                'name' => 'CALASIAO',
                'province_code' => '0155'
            ),
            array(
                'code' => '015518',
                'name' => 'DAGUPAN CITY',
                'province_code' => '0155'
            ),
            array(
                'code' => '015519',
                'name' => 'DASOL',
                'province_code' => '0155'
            ),
            array(
                'code' => '015520',
                'name' => 'INFANTA',
                'province_code' => '0155'
            ),
            array(
                'code' => '015521',
                'name' => 'LABRADOR',
                'province_code' => '0155'
            ),
            array(
                'code' => '015522',
                'name' => 'LINGAYEN',
                'province_code' => '0155'
            ),
            array(
                'code' => '015523',
                'name' => 'MABINI',
                'province_code' => '0155'
            ),
            array(
                'code' => '015524',
                'name' => 'MALASIQUI',
                'province_code' => '0155'
            ),
            array(
                'code' => '015525',
                'name' => 'MANAOAG',
                'province_code' => '0155'
            ),
            array(
                'code' => '015526',
                'name' => 'MANGALDAN',
                'province_code' => '0155'
            ),
            array(
                'code' => '015527',
                'name' => 'MANGATAREM',
                'province_code' => '0155'
            ),
            array(
                'code' => '015528',
                'name' => 'MAPANDAN',
                'province_code' => '0155'
            ),
            array(
                'code' => '015529',
                'name' => 'NATIVIDAD',
                'province_code' => '0155'
            ),
            array(
                'code' => '015530',
                'name' => 'POZORRUBIO',
                'province_code' => '0155'
            ),
            array(
                'code' => '015531',
                'name' => 'ROSALES',
                'province_code' => '0155'
            ),
            array(
                'code' => '015532',
                'name' => 'SAN CARLOS CITY',
                'province_code' => '0155'
            ),
            array(
                'code' => '015533',
                'name' => 'SAN FABIAN',
                'province_code' => '0155'
            ),
            array(
                'code' => '015534',
                'name' => 'SAN JACINTO',
                'province_code' => '0155'
            ),
            array(
                'code' => '015535',
                'name' => 'SAN MANUEL',
                'province_code' => '0155'
            ),
            array(
                'code' => '015536',
                'name' => 'SAN NICOLAS',
                'province_code' => '0155'
            ),
            array(
                'code' => '015537',
                'name' => 'SAN QUINTIN',
                'province_code' => '0155'
            ),
            array(
                'code' => '015538',
                'name' => 'SANTA BARBARA',
                'province_code' => '0155'
            ),
            array(
                'code' => '015539',
                'name' => 'SANTA MARIA',
                'province_code' => '0155'
            ),
            array(
                'code' => '015540',
                'name' => 'SANTO TOMAS',
                'province_code' => '0155'
            ),
            array(
                'code' => '015541',
                'name' => 'SISON',
                'province_code' => '0155'
            ),
            array(
                'code' => '015542',
                'name' => 'SUAL',
                'province_code' => '0155'
            ),
            array(
                'code' => '015543',
                'name' => 'TAYUG',
                'province_code' => '0155'
            ),
            array(
                'code' => '015544',
                'name' => 'UMINGAN',
                'province_code' => '0155'
            ),
            array(
                'code' => '015545',
                'name' => 'URBIZTONDO',
                'province_code' => '0155'
            ),
            array(
                'code' => '015546',
                'name' => 'CITY OF URDANETA',
                'province_code' => '0155'
            ),
            array(
                'code' => '015547',
                'name' => 'VILLASIS',
                'province_code' => '0155'
            ),
            array(
                'code' => '015548',
                'name' => 'LAOAC',
                'province_code' => '0155'
            ),
            array(
                'code' => '020901',
                'name' => 'BASCO',
                'province_code' => '0209'
            ),
            array(
                'code' => '020902',
                'name' => 'ITBAYAT',
                'province_code' => '0209'
            ),
            array(
                'code' => '020903',
                'name' => 'IVANA',
                'province_code' => '0209'
            ),
            array(
                'code' => '020904',
                'name' => 'MAHATAO',
                'province_code' => '0209'
            ),
            array(
                'code' => '020905',
                'name' => 'SABTANG',
                'province_code' => '0209'
            ),
            array(
                'code' => '020906',
                'name' => 'UYUGAN',
                'province_code' => '0209'
            ),
            array(
                'code' => '021501',
                'name' => 'ABULUG',
                'province_code' => '0215'
            ),
            array(
                'code' => '021502',
                'name' => 'ALCALA',
                'province_code' => '0215'
            ),
            array(
                'code' => '021503',
                'name' => 'ALLACAPAN',
                'province_code' => '0215'
            ),
            array(
                'code' => '021504',
                'name' => 'AMULUNG',
                'province_code' => '0215'
            ),
            array(
                'code' => '021505',
                'name' => 'APARRI',
                'province_code' => '0215'
            ),
            array(
                'code' => '021506',
                'name' => 'BAGGAO',
                'province_code' => '0215'
            ),
            array(
                'code' => '021507',
                'name' => 'BALLESTEROS',
                'province_code' => '0215'
            ),
            array(
                'code' => '021508',
                'name' => 'BUGUEY',
                'province_code' => '0215'
            ),
            array(
                'code' => '021509',
                'name' => 'CALAYAN',
                'province_code' => '0215'
            ),
            array(
                'code' => '021510',
                'name' => 'CAMALANIUGAN',
                'province_code' => '0215'
            ),
            array(
                'code' => '021511',
                'name' => 'CLAVERIA',
                'province_code' => '0215'
            ),
            array(
                'code' => '021512',
                'name' => 'ENRILE',
                'province_code' => '0215'
            ),
            array(
                'code' => '021513',
                'name' => 'GATTARAN',
                'province_code' => '0215'
            ),
            array(
                'code' => '021514',
                'name' => 'GONZAGA',
                'province_code' => '0215'
            ),
            array(
                'code' => '021515',
                'name' => 'IGUIG',
                'province_code' => '0215'
            ),
            array(
                'code' => '021516',
                'name' => 'LAL-LO',
                'province_code' => '0215'
            ),
            array(
                'code' => '021517',
                'name' => 'LASAM',
                'province_code' => '0215'
            ),
            array(
                'code' => '021518',
                'name' => 'PAMPLONA',
                'province_code' => '0215'
            ),
            array(
                'code' => '021519',
                'name' => 'PEÑABLANCA',
                'province_code' => '0215'
            ),
            array(
                'code' => '021520',
                'name' => 'PIAT',
                'province_code' => '0215'
            ),
            array(
                'code' => '021521',
                'name' => 'RIZAL',
                'province_code' => '0215'
            ),
            array(
                'code' => '021522',
                'name' => 'SANCHEZ-MIRA',
                'province_code' => '0215'
            ),
            array(
                'code' => '021523',
                'name' => 'SANTA ANA',
                'province_code' => '0215'
            ),
            array(
                'code' => '021524',
                'name' => 'SANTA PRAXEDES',
                'province_code' => '0215'
            ),
            array(
                'code' => '021525',
                'name' => 'SANTA TERESITA',
                'province_code' => '0215'
            ),
            array(
                'code' => '021526',
                'name' => 'SANTO NIÑO (FAIRE)',
                'province_code' => '0215'
            ),
            array(
                'code' => '021527',
                'name' => 'SOLANA',
                'province_code' => '0215'
            ),
            array(
                'code' => '021528',
                'name' => 'TUAO',
                'province_code' => '0215'
            ),
            array(
                'code' => '021529',
                'name' => 'TUGUEGARAO CITY',
                'province_code' => '0215'
            ),
            array(
                'code' => '023101',
                'name' => 'ALICIA',
                'province_code' => '0231'
            ),
            array(
                'code' => '023102',
                'name' => 'ANGADANAN',
                'province_code' => '0231'
            ),
            array(
                'code' => '023103',
                'name' => 'AURORA',
                'province_code' => '0231'
            ),
            array(
                'code' => '023104',
                'name' => 'BENITO SOLIVEN',
                'province_code' => '0231'
            ),
            array(
                'code' => '023105',
                'name' => 'BURGOS',
                'province_code' => '0231'
            ),
            array(
                'code' => '023106',
                'name' => 'CABAGAN',
                'province_code' => '0231'
            ),
            array(
                'code' => '023107',
                'name' => 'CABATUAN',
                'province_code' => '0231'
            ),
            array(
                'code' => '023108',
                'name' => 'CITY OF CAUAYAN',
                'province_code' => '0231'
            ),
            array(
                'code' => '023109',
                'name' => 'CORDON',
                'province_code' => '0231'
            ),
            array(
                'code' => '023110',
                'name' => 'DINAPIGUE',
                'province_code' => '0231'
            ),
            array(
                'code' => '023111',
                'name' => 'DIVILACAN',
                'province_code' => '0231'
            ),
            array(
                'code' => '023112',
                'name' => 'ECHAGUE',
                'province_code' => '0231'
            ),
            array(
                'code' => '023113',
                'name' => 'GAMU',
                'province_code' => '0231'
            ),
            array(
                'code' => '023114',
                'name' => 'ILAGAN CITY',
                'province_code' => '0231'
            ),
            array(
                'code' => '023115',
                'name' => 'JONES',
                'province_code' => '0231'
            ),
            array(
                'code' => '023116',
                'name' => 'LUNA',
                'province_code' => '0231'
            ),
            array(
                'code' => '023117',
                'name' => 'MACONACON',
                'province_code' => '0231'
            ),
            array(
                'code' => '023118',
                'name' => 'DELFIN ALBANO (MAGSAYSAY)',
                'province_code' => '0231'
            ),
            array(
                'code' => '023119',
                'name' => 'MALLIG',
                'province_code' => '0231'
            ),
            array(
                'code' => '023120',
                'name' => 'NAGUILIAN',
                'province_code' => '0231'
            ),
            array(
                'code' => '023121',
                'name' => 'PALANAN',
                'province_code' => '0231'
            ),
            array(
                'code' => '023122',
                'name' => 'QUEZON',
                'province_code' => '0231'
            ),
            array(
                'code' => '023123',
                'name' => 'QUIRINO',
                'province_code' => '0231'
            ),
            array(
                'code' => '023124',
                'name' => 'RAMON',
                'province_code' => '0231'
            ),
            array(
                'code' => '023125',
                'name' => 'REINA MERCEDES',
                'province_code' => '0231'
            ),
            array(
                'code' => '023126',
                'name' => 'ROXAS',
                'province_code' => '0231'
            ),
            array(
                'code' => '023127',
                'name' => 'SAN AGUSTIN',
                'province_code' => '0231'
            ),
            array(
                'code' => '023128',
                'name' => 'SAN GUILLERMO',
                'province_code' => '0231'
            ),
            array(
                'code' => '023129',
                'name' => 'SAN ISIDRO',
                'province_code' => '0231'
            ),
            array(
                'code' => '023130',
                'name' => 'SAN MANUEL',
                'province_code' => '0231'
            ),
            array(
                'code' => '023131',
                'name' => 'SAN MARIANO',
                'province_code' => '0231'
            ),
            array(
                'code' => '023132',
                'name' => 'SAN MATEO',
                'province_code' => '0231'
            ),
            array(
                'code' => '023133',
                'name' => 'SAN PABLO',
                'province_code' => '0231'
            ),
            array(
                'code' => '023134',
                'name' => 'SANTA MARIA',
                'province_code' => '0231'
            ),
            array(
                'code' => '023135',
                'name' => 'CITY OF SANTIAGO',
                'province_code' => '0231'
            ),
            array(
                'code' => '023136',
                'name' => 'SANTO TOMAS',
                'province_code' => '0231'
            ),
            array(
                'code' => '023137',
                'name' => 'TUMAUINI',
                'province_code' => '0231'
            ),
            array(
                'code' => '025001',
                'name' => 'AMBAGUIO',
                'province_code' => '0250'
            ),
            array(
                'code' => '025002',
                'name' => 'ARITAO',
                'province_code' => '0250'
            ),
            array(
                'code' => '025003',
                'name' => 'BAGABAG',
                'province_code' => '0250'
            ),
            array(
                'code' => '025004',
                'name' => 'BAMBANG',
                'province_code' => '0250'
            ),
            array(
                'code' => '025005',
                'name' => 'BAYOMBONG',
                'province_code' => '0250'
            ),
            array(
                'code' => '025006',
                'name' => 'DIADI',
                'province_code' => '0250'
            ),
            array(
                'code' => '025007',
                'name' => 'DUPAX DEL NORTE',
                'province_code' => '0250'
            ),
            array(
                'code' => '025008',
                'name' => 'DUPAX DEL SUR',
                'province_code' => '0250'
            ),
            array(
                'code' => '025009',
                'name' => 'KASIBU',
                'province_code' => '0250'
            ),
            array(
                'code' => '025010',
                'name' => 'KAYAPA',
                'province_code' => '0250'
            ),
            array(
                'code' => '025011',
                'name' => 'QUEZON',
                'province_code' => '0250'
            ),
            array(
                'code' => '025012',
                'name' => 'SANTA FE',
                'province_code' => '0250'
            ),
            array(
                'code' => '025013',
                'name' => 'SOLANO',
                'province_code' => '0250'
            ),
            array(
                'code' => '025014',
                'name' => 'VILLAVERDE',
                'province_code' => '0250'
            ),
            array(
                'code' => '025015',
                'name' => 'ALFONSO CASTANEDA',
                'province_code' => '0250'
            ),
            array(
                'code' => '025701',
                'name' => 'AGLIPAY',
                'province_code' => '0257'
            ),
            array(
                'code' => '025702',
                'name' => 'CABARROGUIS',
                'province_code' => '0257'
            ),
            array(
                'code' => '025703',
                'name' => 'DIFFUN',
                'province_code' => '0257'
            ),
            array(
                'code' => '025704',
                'name' => 'MADDELA',
                'province_code' => '0257'
            ),
            array(
                'code' => '025705',
                'name' => 'SAGUDAY',
                'province_code' => '0257'
            ),
            array(
                'code' => '025706',
                'name' => 'NAGTIPUNAN',
                'province_code' => '0257'
            ),
            array(
                'code' => '030801',
                'name' => 'ABUCAY',
                'province_code' => '0308'
            ),
            array(
                'code' => '030802',
                'name' => 'BAGAC',
                'province_code' => '0308'
            ),
            array(
                'code' => '030803',
                'name' => 'CITY OF BALANGA',
                'province_code' => '0308'
            ),
            array(
                'code' => '030804',
                'name' => 'DINALUPIHAN',
                'province_code' => '0308'
            ),
            array(
                'code' => '030805',
                'name' => 'HERMOSA',
                'province_code' => '0308'
            ),
            array(
                'code' => '030806',
                'name' => 'LIMAY',
                'province_code' => '0308'
            ),
            array(
                'code' => '030807',
                'name' => 'MARIVELES',
                'province_code' => '0308'
            ),
            array(
                'code' => '030808',
                'name' => 'MORONG',
                'province_code' => '0308'
            ),
            array(
                'code' => '030809',
                'name' => 'ORANI',
                'province_code' => '0308'
            ),
            array(
                'code' => '030810',
                'name' => 'ORION',
                'province_code' => '0308'
            ),
            array(
                'code' => '030811',
                'name' => 'PILAR',
                'province_code' => '0308'
            ),
            array(
                'code' => '030812',
                'name' => 'SAMAL',
                'province_code' => '0308'
            ),
            array(
                'code' => '031401',
                'name' => 'ANGAT',
                'province_code' => '0314'
            ),
            array(
                'code' => '031402',
                'name' => 'BALAGTAS (BIGAA)',
                'province_code' => '0314'
            ),
            array(
                'code' => '031403',
                'name' => 'BALIUAG',
                'province_code' => '0314'
            ),
            array(
                'code' => '031404',
                'name' => 'BOCAUE',
                'province_code' => '0314'
            ),
            array(
                'code' => '031405',
                'name' => 'BULACAN',
                'province_code' => '0314'
            ),
            array(
                'code' => '031406',
                'name' => 'BUSTOS',
                'province_code' => '0314'
            ),
            array(
                'code' => '031407',
                'name' => 'CALUMPIT',
                'province_code' => '0314'
            ),
            array(
                'code' => '031408',
                'name' => 'GUIGUINTO',
                'province_code' => '0314'
            ),
            array(
                'code' => '031409',
                'name' => 'HAGONOY',
                'province_code' => '0314'
            ),
            array(
                'code' => '031410',
                'name' => 'CITY OF MALOLOS',
                'province_code' => '0314'
            ),
            array(
                'code' => '031411',
                'name' => 'MARILAO',
                'province_code' => '0314'
            ),
            array(
                'code' => '031412',
                'name' => 'CITY OF MEYCAUAYAN',
                'province_code' => '0314'
            ),
            array(
                'code' => '031413',
                'name' => 'NORZAGARAY',
                'province_code' => '0314'
            ),
            array(
                'code' => '031414',
                'name' => 'OBANDO',
                'province_code' => '0314'
            ),
            array(
                'code' => '031415',
                'name' => 'PANDI',
                'province_code' => '0314'
            ),
            array(
                'code' => '031416',
                'name' => 'PAOMBONG',
                'province_code' => '0314'
            ),
            array(
                'code' => '031417',
                'name' => 'PLARIDEL',
                'province_code' => '0314'
            ),
            array(
                'code' => '031418',
                'name' => 'PULILAN',
                'province_code' => '0314'
            ),
            array(
                'code' => '031419',
                'name' => 'SAN ILDEFONSO',
                'province_code' => '0314'
            ),
            array(
                'code' => '031420',
                'name' => 'CITY OF SAN JOSE DEL MONTE',
                'province_code' => '0314'
            ),
            array(
                'code' => '031421',
                'name' => 'SAN MIGUEL',
                'province_code' => '0314'
            ),
            array(
                'code' => '031422',
                'name' => 'SAN RAFAEL',
                'province_code' => '0314'
            ),
            array(
                'code' => '031423',
                'name' => 'SANTA MARIA',
                'province_code' => '0314'
            ),
            array(
                'code' => '031424',
                'name' => 'DOÑA REMEDIOS TRINIDAD',
                'province_code' => '0314'
            ),
            array(
                'code' => '034901',
                'name' => 'ALIAGA',
                'province_code' => '0349'
            ),
            array(
                'code' => '034902',
                'name' => 'BONGABON',
                'province_code' => '0349'
            ),
            array(
                'code' => '034903',
                'name' => 'CABANATUAN CITY',
                'province_code' => '0349'
            ),
            array(
                'code' => '034904',
                'name' => 'CABIAO',
                'province_code' => '0349'
            ),
            array(
                'code' => '034905',
                'name' => 'CARRANGLAN',
                'province_code' => '0349'
            ),
            array(
                'code' => '034906',
                'name' => 'CUYAPO',
                'province_code' => '0349'
            ),
            array(
                'code' => '034907',
                'name' => 'GABALDON (BITULOK & SABANI)',
                'province_code' => '0349'
            ),
            array(
                'code' => '034908',
                'name' => 'CITY OF GAPAN',
                'province_code' => '0349'
            ),
            array(
                'code' => '034909',
                'name' => 'GENERAL MAMERTO NATIVIDAD',
                'province_code' => '0349'
            ),
            array(
                'code' => '034910',
                'name' => 'GENERAL TINIO (PAPAYA)',
                'province_code' => '0349'
            ),
            array(
                'code' => '034911',
                'name' => 'GUIMBA',
                'province_code' => '0349'
            ),
            array(
                'code' => '034912',
                'name' => 'JAEN',
                'province_code' => '0349'
            ),
            array(
                'code' => '034913',
                'name' => 'LAUR',
                'province_code' => '0349'
            ),
            array(
                'code' => '034914',
                'name' => 'LICAB',
                'province_code' => '0349'
            ),
            array(
                'code' => '034915',
                'name' => 'LLANERA',
                'province_code' => '0349'
            ),
            array(
                'code' => '034916',
                'name' => 'LUPAO',
                'province_code' => '0349'
            ),
            array(
                'code' => '034917',
                'name' => 'SCIENCE CITY OF MUÑOZ',
                'province_code' => '0349'
            ),
            array(
                'code' => '034918',
                'name' => 'NAMPICUAN',
                'province_code' => '0349'
            ),
            array(
                'code' => '034919',
                'name' => 'PALAYAN CITY',
                'province_code' => '0349'
            ),
            array(
                'code' => '034920',
                'name' => 'PANTABANGAN',
                'province_code' => '0349'
            ),
            array(
                'code' => '034921',
                'name' => 'PEÑARANDA',
                'province_code' => '0349'
            ),
            array(
                'code' => '034922',
                'name' => 'QUEZON',
                'province_code' => '0349'
            ),
            array(
                'code' => '034923',
                'name' => 'RIZAL',
                'province_code' => '0349'
            ),
            array(
                'code' => '034924',
                'name' => 'SAN ANTONIO',
                'province_code' => '0349'
            ),
            array(
                'code' => '034925',
                'name' => 'SAN ISIDRO',
                'province_code' => '0349'
            ),
            array(
                'code' => '034926',
                'name' => 'SAN JOSE CITY',
                'province_code' => '0349'
            ),
            array(
                'code' => '034927',
                'name' => 'SAN LEONARDO',
                'province_code' => '0349'
            ),
            array(
                'code' => '034928',
                'name' => 'SANTA ROSA',
                'province_code' => '0349'
            ),
            array(
                'code' => '034929',
                'name' => 'SANTO DOMINGO',
                'province_code' => '0349'
            ),
            array(
                'code' => '034930',
                'name' => 'TALAVERA',
                'province_code' => '0349'
            ),
            array(
                'code' => '034931',
                'name' => 'TALUGTUG',
                'province_code' => '0349'
            ),
            array(
                'code' => '034932',
                'name' => 'ZARAGOZA',
                'province_code' => '0349'
            ),
            array(
                'code' => '035401',
                'name' => 'ANGELES CITY',
                'province_code' => '0354'
            ),
            array(
                'code' => '035402',
                'name' => 'APALIT',
                'province_code' => '0354'
            ),
            array(
                'code' => '035403',
                'name' => 'ARAYAT',
                'province_code' => '0354'
            ),
            array(
                'code' => '035404',
                'name' => 'BACOLOR',
                'province_code' => '0354'
            ),
            array(
                'code' => '035405',
                'name' => 'CANDABA',
                'province_code' => '0354'
            ),
            array(
                'code' => '035406',
                'name' => 'FLORIDABLANCA',
                'province_code' => '0354'
            ),
            array(
                'code' => '035407',
                'name' => 'GUAGUA',
                'province_code' => '0354'
            ),
            array(
                'code' => '035408',
                'name' => 'LUBAO',
                'province_code' => '0354'
            ),
            array(
                'code' => '035409',
                'name' => 'MABALACAT CITY',
                'province_code' => '0354'
            ),
            array(
                'code' => '035410',
                'name' => 'MACABEBE',
                'province_code' => '0354'
            ),
            array(
                'code' => '035411',
                'name' => 'MAGALANG',
                'province_code' => '0354'
            ),
            array(
                'code' => '035412',
                'name' => 'MASANTOL',
                'province_code' => '0354'
            ),
            array(
                'code' => '035413',
                'name' => 'MEXICO',
                'province_code' => '0354'
            ),
            array(
                'code' => '035414',
                'name' => 'MINALIN',
                'province_code' => '0354'
            ),
            array(
                'code' => '035415',
                'name' => 'PORAC',
                'province_code' => '0354'
            ),
            array(
                'code' => '035416',
                'name' => 'CITY OF SAN FERNANDO',
                'province_code' => '0354'
            ),
            array(
                'code' => '035417',
                'name' => 'SAN LUIS',
                'province_code' => '0354'
            ),
            array(
                'code' => '035418',
                'name' => 'SAN SIMON',
                'province_code' => '0354'
            ),
            array(
                'code' => '035419',
                'name' => 'SANTA ANA',
                'province_code' => '0354'
            ),
            array(
                'code' => '035420',
                'name' => 'SANTA RITA',
                'province_code' => '0354'
            ),
            array(
                'code' => '035421',
                'name' => 'SANTO TOMAS',
                'province_code' => '0354'
            ),
            array(
                'code' => '035422',
                'name' => 'SASMUAN (Sexmoan)',
                'province_code' => '0354'
            ),
            array(
                'code' => '036901',
                'name' => 'ANAO',
                'province_code' => '0369'
            ),
            array(
                'code' => '036902',
                'name' => 'BAMBAN',
                'province_code' => '0369'
            ),
            array(
                'code' => '036903',
                'name' => 'CAMILING',
                'province_code' => '0369'
            ),
            array(
                'code' => '036904',
                'name' => 'CAPAS',
                'province_code' => '0369'
            ),
            array(
                'code' => '036905',
                'name' => 'CONCEPCION',
                'province_code' => '0369'
            ),
            array(
                'code' => '036906',
                'name' => 'GERONA',
                'province_code' => '0369'
            ),
            array(
                'code' => '036907',
                'name' => 'LA PAZ',
                'province_code' => '0369'
            ),
            array(
                'code' => '036908',
                'name' => 'MAYANTOC',
                'province_code' => '0369'
            ),
            array(
                'code' => '036909',
                'name' => 'MONCADA',
                'province_code' => '0369'
            ),
            array(
                'code' => '036910',
                'name' => 'PANIQUI',
                'province_code' => '0369'
            ),
            array(
                'code' => '036911',
                'name' => 'PURA',
                'province_code' => '0369'
            ),
            array(
                'code' => '036912',
                'name' => 'RAMOS',
                'province_code' => '0369'
            ),
            array(
                'code' => '036913',
                'name' => 'SAN CLEMENTE',
                'province_code' => '0369'
            ),
            array(
                'code' => '036914',
                'name' => 'SAN MANUEL',
                'province_code' => '0369'
            ),
            array(
                'code' => '036915',
                'name' => 'SANTA IGNACIA',
                'province_code' => '0369'
            ),
            array(
                'code' => '036916',
                'name' => 'CITY OF TARLAC',
                'province_code' => '0369'
            ),
            array(
                'code' => '036917',
                'name' => 'VICTORIA',
                'province_code' => '0369'
            ),
            array(
                'code' => '036918',
                'name' => 'SAN JOSE',
                'province_code' => '0369'
            ),
            array(
                'code' => '037101',
                'name' => 'BOTOLAN',
                'province_code' => '0371'
            ),
            array(
                'code' => '037102',
                'name' => 'CABANGAN',
                'province_code' => '0371'
            ),
            array(
                'code' => '037103',
                'name' => 'CANDELARIA',
                'province_code' => '0371'
            ),
            array(
                'code' => '037104',
                'name' => 'CASTILLEJOS',
                'province_code' => '0371'
            ),
            array(
                'code' => '037105',
                'name' => 'IBA',
                'province_code' => '0371'
            ),
            array(
                'code' => '037106',
                'name' => 'MASINLOC',
                'province_code' => '0371'
            ),
            array(
                'code' => '037107',
                'name' => 'OLONGAPO CITY',
                'province_code' => '0371'
            ),
            array(
                'code' => '037108',
                'name' => 'PALAUIG',
                'province_code' => '0371'
            ),
            array(
                'code' => '037109',
                'name' => 'SAN ANTONIO',
                'province_code' => '0371'
            ),
            array(
                'code' => '037110',
                'name' => 'SAN FELIPE',
                'province_code' => '0371'
            ),
            array(
                'code' => '037111',
                'name' => 'SAN MARCELINO',
                'province_code' => '0371'
            ),
            array(
                'code' => '037112',
                'name' => 'SAN NARCISO',
                'province_code' => '0371'
            ),
            array(
                'code' => '037113',
                'name' => 'SANTA CRUZ',
                'province_code' => '0371'
            ),
            array(
                'code' => '037114',
                'name' => 'SUBIC',
                'province_code' => '0371'
            ),
            array(
                'code' => '037701',
                'name' => 'BALER',
                'province_code' => '0377'
            ),
            array(
                'code' => '037702',
                'name' => 'CASIGURAN',
                'province_code' => '0377'
            ),
            array(
                'code' => '037703',
                'name' => 'DILASAG',
                'province_code' => '0377'
            ),
            array(
                'code' => '037704',
                'name' => 'DINALUNGAN',
                'province_code' => '0377'
            ),
            array(
                'code' => '037705',
                'name' => 'DINGALAN',
                'province_code' => '0377'
            ),
            array(
                'code' => '037706',
                'name' => 'DIPACULAO',
                'province_code' => '0377'
            ),
            array(
                'code' => '037707',
                'name' => 'MARIA AURORA',
                'province_code' => '0377'
            ),
            array(
                'code' => '037708',
                'name' => 'SAN LUIS',
                'province_code' => '0377'
            ),
            array(
                'code' => '041001',
                'name' => 'AGONCILLO',
                'province_code' => '0410'
            ),
            array(
                'code' => '041002',
                'name' => 'ALITAGTAG',
                'province_code' => '0410'
            ),
            array(
                'code' => '041003',
                'name' => 'BALAYAN',
                'province_code' => '0410'
            ),
            array(
                'code' => '041004',
                'name' => 'BALETE',
                'province_code' => '0410'
            ),
            array(
                'code' => '041005',
                'name' => 'BATANGAS CITY',
                'province_code' => '0410'
            ),
            array(
                'code' => '041006',
                'name' => 'BAUAN',
                'province_code' => '0410'
            ),
            array(
                'code' => '041007',
                'name' => 'CALACA',
                'province_code' => '0410'
            ),
            array(
                'code' => '041008',
                'name' => 'CALATAGAN',
                'province_code' => '0410'
            ),
            array(
                'code' => '041009',
                'name' => 'CUENCA',
                'province_code' => '0410'
            ),
            array(
                'code' => '041010',
                'name' => 'IBAAN',
                'province_code' => '0410'
            ),
            array(
                'code' => '041011',
                'name' => 'LAUREL',
                'province_code' => '0410'
            ),
            array(
                'code' => '041012',
                'name' => 'LEMERY',
                'province_code' => '0410'
            ),
            array(
                'code' => '041013',
                'name' => 'LIAN',
                'province_code' => '0410'
            ),
            array(
                'code' => '041014',
                'name' => 'LIPA CITY',
                'province_code' => '0410'
            ),
            array(
                'code' => '041015',
                'name' => 'LOBO',
                'province_code' => '0410'
            ),
            array(
                'code' => '041016',
                'name' => 'MABINI',
                'province_code' => '0410'
            ),
            array(
                'code' => '041017',
                'name' => 'MALVAR',
                'province_code' => '0410'
            ),
            array(
                'code' => '041018',
                'name' => 'MATAASNAKAHOY',
                'province_code' => '0410'
            ),
            array(
                'code' => '041019',
                'name' => 'NASUGBU',
                'province_code' => '0410'
            ),
            array(
                'code' => '041020',
                'name' => 'PADRE GARCIA',
                'province_code' => '0410'
            ),
            array(
                'code' => '041021',
                'name' => 'ROSARIO',
                'province_code' => '0410'
            ),
            array(
                'code' => '041022',
                'name' => 'SAN JOSE',
                'province_code' => '0410'
            ),
            array(
                'code' => '041023',
                'name' => 'SAN JUAN',
                'province_code' => '0410'
            ),
            array(
                'code' => '041024',
                'name' => 'SAN LUIS',
                'province_code' => '0410'
            ),
            array(
                'code' => '041025',
                'name' => 'SAN NICOLAS',
                'province_code' => '0410'
            ),
            array(
                'code' => '041026',
                'name' => 'SAN PASCUAL',
                'province_code' => '0410'
            ),
            array(
                'code' => '041027',
                'name' => 'SANTA TERESITA',
                'province_code' => '0410'
            ),
            array(
                'code' => '041028',
                'name' => 'SANTO TOMAS',
                'province_code' => '0410'
            ),
            array(
                'code' => '041029',
                'name' => 'TAAL',
                'province_code' => '0410'
            ),
            array(
                'code' => '041030',
                'name' => 'TALISAY',
                'province_code' => '0410'
            ),
            array(
                'code' => '041031',
                'name' => 'CITY OF TANAUAN',
                'province_code' => '0410'
            ),
            array(
                'code' => '041032',
                'name' => 'TAYSAN',
                'province_code' => '0410'
            ),
            array(
                'code' => '041033',
                'name' => 'TINGLOY',
                'province_code' => '0410'
            ),
            array(
                'code' => '041034',
                'name' => 'TUY',
                'province_code' => '0410'
            ),
            array(
                'code' => '042101',
                'name' => 'ALFONSO',
                'province_code' => '0421'
            ),
            array(
                'code' => '042102',
                'name' => 'AMADEO',
                'province_code' => '0421'
            ),
            array(
                'code' => '042103',
                'name' => 'BACOOR CITY',
                'province_code' => '0421'
            ),
            array(
                'code' => '042104',
                'name' => 'CARMONA',
                'province_code' => '0421'
            ),
            array(
                'code' => '042105',
                'name' => 'CAVITE CITY',
                'province_code' => '0421'
            ),
            array(
                'code' => '042106',
                'name' => 'CITY OF DASMARIÑAS',
                'province_code' => '0421'
            ),
            array(
                'code' => '042107',
                'name' => 'GENERAL EMILIO AGUINALDO',
                'province_code' => '0421'
            ),
            array(
                'code' => '042108',
                'name' => 'CITY OF GENERAL TRIAS',
                'province_code' => '0421'
            ),
            array(
                'code' => '042109',
                'name' => 'IMUS CITY',
                'province_code' => '0421'
            ),
            array(
                'code' => '042110',
                'name' => 'INDANG',
                'province_code' => '0421'
            ),
            array(
                'code' => '042111',
                'name' => 'KAWIT',
                'province_code' => '0421'
            ),
            array(
                'code' => '042112',
                'name' => 'MAGALLANES',
                'province_code' => '0421'
            ),
            array(
                'code' => '042113',
                'name' => 'MARAGONDON',
                'province_code' => '0421'
            ),
            array(
                'code' => '042114',
                'name' => 'MENDEZ (MENDEZ-NUÑEZ)',
                'province_code' => '0421'
            ),
            array(
                'code' => '042115',
                'name' => 'NAIC',
                'province_code' => '0421'
            ),
            array(
                'code' => '042116',
                'name' => 'NOVELETA',
                'province_code' => '0421'
            ),
            array(
                'code' => '042117',
                'name' => 'ROSARIO',
                'province_code' => '0421'
            ),
            array(
                'code' => '042118',
                'name' => 'SILANG',
                'province_code' => '0421'
            ),
            array(
                'code' => '042119',
                'name' => 'TAGAYTAY CITY',
                'province_code' => '0421'
            ),
            array(
                'code' => '042120',
                'name' => 'TANZA',
                'province_code' => '0421'
            ),
            array(
                'code' => '042121',
                'name' => 'TERNATE',
                'province_code' => '0421'
            ),
            array(
                'code' => '042122',
                'name' => 'TRECE MARTIRES CITY',
                'province_code' => '0421'
            ),
            array(
                'code' => '042123',
                'name' => 'GEN. MARIANO ALVAREZ',
                'province_code' => '0421'
            ),
            array(
                'code' => '043401',
                'name' => 'ALAMINOS',
                'province_code' => '0434'
            ),
            array(
                'code' => '043402',
                'name' => 'BAY',
                'province_code' => '0434'
            ),
            array(
                'code' => '043403',
                // 'name' => 'CITY OF BIÑAN',
                'name' => 'BINAN CITY',
                'province_code' => '0434'
            ),
            array(
                'code' => '043404',
                'name' => 'CABUYAO CITY',
                'province_code' => '0434'
            ),
            array(
                'code' => '043405',
                // 'name' => 'CITY OF CALAMBA',
                'name' => 'CALAMBA CITY',
                'province_code' => '0434'
            ),
            array(
                'code' => '043406',
                'name' => 'CALAUAN',
                'province_code' => '0434'
            ),
            array(
                'code' => '043407',
                'name' => 'CAVINTI',
                'province_code' => '0434'
            ),
            array(
                'code' => '043408',
                'name' => 'FAMY',
                'province_code' => '0434'
            ),
            array(
                'code' => '043409',
                'name' => 'KALAYAAN',
                'province_code' => '0434'
            ),
            array(
                'code' => '043410',
                'name' => 'LILIW',
                'province_code' => '0434'
            ),
            array(
                'code' => '043411',
                // 'name' => 'LOS BAÑOS',
                'name' => 'LOS BANOS',
                'province_code' => '0434'
            ),
            array(
                'code' => '043412',
                'name' => 'LUISIANA',
                'province_code' => '0434'
            ),
            array(
                'code' => '043413',
                'name' => 'LUMBAN',
                'province_code' => '0434'
            ),
            array(
                'code' => '043414',
                'name' => 'MABITAC',
                'province_code' => '0434'
            ),
            array(
                'code' => '043415',
                'name' => 'MAGDALENA',
                'province_code' => '0434'
            ),
            array(
                'code' => '043416',
                'name' => 'MAJAYJAY',
                'province_code' => '0434'
            ),
            array(
                'code' => '043417',
                'name' => 'NAGCARLAN',
                'province_code' => '0434'
            ),
            array(
                'code' => '043418',
                'name' => 'PAETE',
                'province_code' => '0434'
            ),
            array(
                'code' => '043419',
                'name' => 'PAGSANJAN',
                'province_code' => '0434'
            ),
            array(
                'code' => '043420',
                'name' => 'PAKIL',
                'province_code' => '0434'
            ),
            array(
                'code' => '043421',
                'name' => 'PANGIL',
                'province_code' => '0434'
            ),
            array(
                'code' => '043422',
                'name' => 'PILA',
                'province_code' => '0434'
            ),
            array(
                'code' => '043423',
                'name' => 'RIZAL',
                'province_code' => '0434'
            ),
            array(
                'code' => '043424',
                'name' => 'SAN PABLO CITY',
                'province_code' => '0434'
            ),
            array(
                'code' => '043425',
                // 'name' => 'CITY OF SAN PEDRO',
                'name' => 'SAN PEDRO CITY',
                'province_code' => '0434'
            ),
            array(
                'code' => '043426',
                'name' => 'SANTA CRUZ',
                'province_code' => '0434'
            ),
            array(
                'code' => '043427',
                'name' => 'SANTA MARIA',
                'province_code' => '0434'
            ),
            array(
                'code' => '043428',
                // 'name' => 'CITY OF SANTA ROSA',
                'name' => 'SANTA ROSA CITY',
                'province_code' => '0434'
            ),
            array(
                'code' => '043429',
                'name' => 'SINILOAN',
                'province_code' => '0434'
            ),
            array(
                'code' => '043430',
                'name' => 'VICTORIA',
                'province_code' => '0434'
            ),
            array(
                'code' => '045601',
                'name' => 'AGDANGAN',
                'province_code' => '0456'
            ),
            array(
                'code' => '045602',
                'name' => 'ALABAT',
                'province_code' => '0456'
            ),
            array(
                'code' => '045603',
                'name' => 'ATIMONAN',
                'province_code' => '0456'
            ),
            array(
                'code' => '045605',
                'name' => 'BUENAVISTA',
                'province_code' => '0456'
            ),
            array(
                'code' => '045606',
                'name' => 'BURDEOS',
                'province_code' => '0456'
            ),
            array(
                'code' => '045607',
                'name' => 'CALAUAG',
                'province_code' => '0456'
            ),
            array(
                'code' => '045608',
                'name' => 'CANDELARIA',
                'province_code' => '0456'
            ),
            array(
                'code' => '045610',
                'name' => 'CATANAUAN',
                'province_code' => '0456'
            ),
            array(
                'code' => '045615',
                'name' => 'DOLORES',
                'province_code' => '0456'
            ),
            array(
                'code' => '045616',
                'name' => 'GENERAL LUNA',
                'province_code' => '0456'
            ),
            array(
                'code' => '045617',
                'name' => 'GENERAL NAKAR',
                'province_code' => '0456'
            ),
            array(
                'code' => '045618',
                'name' => 'GUINAYANGAN',
                'province_code' => '0456'
            ),
            array(
                'code' => '045619',
                'name' => 'GUMACA',
                'province_code' => '0456'
            ),
            array(
                'code' => '045620',
                'name' => 'INFANTA',
                'province_code' => '0456'
            ),
            array(
                'code' => '045621',
                'name' => 'JOMALIG',
                'province_code' => '0456'
            ),
            array(
                'code' => '045622',
                'name' => 'LOPEZ',
                'province_code' => '0456'
            ),
            array(
                'code' => '045623',
                'name' => 'LUCBAN',
                'province_code' => '0456'
            ),
            array(
                'code' => '045624',
                'name' => 'LUCENA CITY',
                'province_code' => '0456'
            ),
            array(
                'code' => '045625',
                'name' => 'MACALELON',
                'province_code' => '0456'
            ),
            array(
                'code' => '045627',
                'name' => 'MAUBAN',
                'province_code' => '0456'
            ),
            array(
                'code' => '045628',
                'name' => 'MULANAY',
                'province_code' => '0456'
            ),
            array(
                'code' => '045629',
                'name' => 'PADRE BURGOS',
                'province_code' => '0456'
            ),
            array(
                'code' => '045630',
                'name' => 'PAGBILAO',
                'province_code' => '0456'
            ),
            array(
                'code' => '045631',
                'name' => 'PANUKULAN',
                'province_code' => '0456'
            ),
            array(
                'code' => '045632',
                'name' => 'PATNANUNGAN',
                'province_code' => '0456'
            ),
            array(
                'code' => '045633',
                'name' => 'PEREZ',
                'province_code' => '0456'
            ),
            array(
                'code' => '045634',
                'name' => 'PITOGO',
                'province_code' => '0456'
            ),
            array(
                'code' => '045635',
                'name' => 'PLARIDEL',
                'province_code' => '0456'
            ),
            array(
                'code' => '045636',
                'name' => 'POLILLO',
                'province_code' => '0456'
            ),
            array(
                'code' => '045637',
                'name' => 'QUEZON',
                'province_code' => '0456'
            ),
            array(
                'code' => '045638',
                'name' => 'REAL',
                'province_code' => '0456'
            ),
            array(
                'code' => '045639',
                'name' => 'SAMPALOC',
                'province_code' => '0456'
            ),
            array(
                'code' => '045640',
                'name' => 'SAN ANDRES',
                'province_code' => '0456'
            ),
            array(
                'code' => '045641',
                'name' => 'SAN ANTONIO',
                'province_code' => '0456'
            ),
            array(
                'code' => '045642',
                'name' => 'SAN FRANCISCO (AURORA)',
                'province_code' => '0456'
            ),
            array(
                'code' => '045644',
                'name' => 'SAN NARCISO',
                'province_code' => '0456'
            ),
            array(
                'code' => '045645',
                'name' => 'SARIAYA',
                'province_code' => '0456'
            ),
            array(
                'code' => '045646',
                'name' => 'TAGKAWAYAN',
                'province_code' => '0456'
            ),
            array(
                'code' => '045647',
                'name' => 'CITY OF TAYABAS',
                'province_code' => '0456'
            ),
            array(
                'code' => '045648',
                'name' => 'TIAONG',
                'province_code' => '0456'
            ),
            array(
                'code' => '045649',
                'name' => 'UNISAN',
                'province_code' => '0456'
            ),
            array(
                'code' => '045801',
                'name' => 'ANGONO',
                'province_code' => '0458'
            ),
            array(
                'code' => '045802',
                'name' => 'CITY OF ANTIPOLO',
                'province_code' => '0458'
            ),
            array(
                'code' => '045803',
                'name' => 'BARAS',
                'province_code' => '0458'
            ),
            array(
                'code' => '045804',
                'name' => 'BINANGONAN',
                'province_code' => '0458'
            ),
            array(
                'code' => '045805',
                'name' => 'CAINTA',
                'province_code' => '0458'
            ),
            array(
                'code' => '045806',
                'name' => 'CARDONA',
                'province_code' => '0458'
            ),
            array(
                'code' => '045807',
                'name' => 'JALA-JALA',
                'province_code' => '0458'
            ),
            array(
                'code' => '045808',
                'name' => 'RODRIGUEZ (MONTALBAN)',
                'province_code' => '0458'
            ),
            array(
                'code' => '045809',
                'name' => 'MORONG',
                'province_code' => '0458'
            ),
            array(
                'code' => '045810',
                'name' => 'PILILLA',
                'province_code' => '0458'
            ),
            array(
                'code' => '045811',
                'name' => 'SAN MATEO',
                'province_code' => '0458'
            ),
            array(
                'code' => '045812',
                'name' => 'TANAY',
                'province_code' => '0458'
            ),
            array(
                'code' => '045813',
                'name' => 'TAYTAY',
                'province_code' => '0458'
            ),
            array(
                'code' => '045814',
                'name' => 'TERESA',
                'province_code' => '0458'
            ),
            array(
                'code' => '050501',
                'name' => 'BACACAY',
                'province_code' => '0505'
            ),
            array(
                'code' => '050502',
                'name' => 'CAMALIG',
                'province_code' => '0505'
            ),
            array(
                'code' => '050503',
                'name' => 'DARAGA (LOCSIN)',
                'province_code' => '0505'
            ),
            array(
                'code' => '050504',
                'name' => 'GUINOBATAN',
                'province_code' => '0505'
            ),
            array(
                'code' => '050505',
                'name' => 'JOVELLAR',
                'province_code' => '0505'
            ),
            array(
                'code' => '050506',
                'name' => 'LEGAZPI CITY',
                'province_code' => '0505'
            ),
            array(
                'code' => '050507',
                'name' => 'LIBON',
                'province_code' => '0505'
            ),
            array(
                'code' => '050508',
                'name' => 'CITY OF LIGAO',
                'province_code' => '0505'
            ),
            array(
                'code' => '050509',
                'name' => 'MALILIPOT',
                'province_code' => '0505'
            ),
            array(
                'code' => '050510',
                'name' => 'MALINAO',
                'province_code' => '0505'
            ),
            array(
                'code' => '050511',
                'name' => 'MANITO',
                'province_code' => '0505'
            ),
            array(
                'code' => '050512',
                'name' => 'OAS',
                'province_code' => '0505'
            ),
            array(
                'code' => '050513',
                'name' => 'PIO DURAN',
                'province_code' => '0505'
            ),
            array(
                'code' => '050514',
                'name' => 'POLANGUI',
                'province_code' => '0505'
            ),
            array(
                'code' => '050515',
                'name' => 'RAPU-RAPU',
                'province_code' => '0505'
            ),
            array(
                'code' => '050516',
                'name' => 'SANTO DOMINGO (LIBOG)',
                'province_code' => '0505'
            ),
            array(
                'code' => '050517',
                'name' => 'CITY OF TABACO',
                'province_code' => '0505'
            ),
            array(
                'code' => '050518',
                'name' => 'TIWI',
                'province_code' => '0505'
            ),
            array(
                'code' => '051601',
                'name' => 'BASUD',
                'province_code' => '0516'
            ),
            array(
                'code' => '051602',
                'name' => 'CAPALONGA',
                'province_code' => '0516'
            ),
            array(
                'code' => '051603',
                'name' => 'DAET',
                'province_code' => '0516'
            ),
            array(
                'code' => '051604',
                'name' => 'SAN LORENZO RUIZ (IMELDA)',
                'province_code' => '0516'
            ),
            array(
                'code' => '051605',
                'name' => 'JOSE PANGANIBAN',
                'province_code' => '0516'
            ),
            array(
                'code' => '051606',
                'name' => 'LABO',
                'province_code' => '0516'
            ),
            array(
                'code' => '051607',
                'name' => 'MERCEDES',
                'province_code' => '0516'
            ),
            array(
                'code' => '051608',
                'name' => 'PARACALE',
                'province_code' => '0516'
            ),
            array(
                'code' => '051609',
                'name' => 'SAN VICENTE',
                'province_code' => '0516'
            ),
            array(
                'code' => '051610',
                'name' => 'SANTA ELENA',
                'province_code' => '0516'
            ),
            array(
                'code' => '051611',
                'name' => 'TALISAY',
                'province_code' => '0516'
            ),
            array(
                'code' => '051612',
                'name' => 'VINZONS',
                'province_code' => '0516'
            ),
            array(
                'code' => '051701',
                'name' => 'BAAO',
                'province_code' => '0517'
            ),
            array(
                'code' => '051702',
                'name' => 'BALATAN',
                'province_code' => '0517'
            ),
            array(
                'code' => '051703',
                'name' => 'BATO',
                'province_code' => '0517'
            ),
            array(
                'code' => '051704',
                'name' => 'BOMBON',
                'province_code' => '0517'
            ),
            array(
                'code' => '051705',
                'name' => 'BUHI',
                'province_code' => '0517'
            ),
            array(
                'code' => '051706',
                'name' => 'BULA',
                'province_code' => '0517'
            ),
            array(
                'code' => '051707',
                'name' => 'CABUSAO',
                'province_code' => '0517'
            ),
            array(
                'code' => '051708',
                'name' => 'CALABANGA',
                'province_code' => '0517'
            ),
            array(
                'code' => '051709',
                'name' => 'CAMALIGAN',
                'province_code' => '0517'
            ),
            array(
                'code' => '051710',
                'name' => 'CANAMAN',
                'province_code' => '0517'
            ),
            array(
                'code' => '051711',
                'name' => 'CARAMOAN',
                'province_code' => '0517'
            ),
            array(
                'code' => '051712',
                'name' => 'DEL GALLEGO',
                'province_code' => '0517'
            ),
            array(
                'code' => '051713',
                'name' => 'GAINZA',
                'province_code' => '0517'
            ),
            array(
                'code' => '051714',
                'name' => 'GARCHITORENA',
                'province_code' => '0517'
            ),
            array(
                'code' => '051715',
                'name' => 'GOA',
                'province_code' => '0517'
            ),
            array(
                'code' => '051716',
                'name' => 'IRIGA CITY',
                'province_code' => '0517'
            ),
            array(
                'code' => '051717',
                'name' => 'LAGONOY',
                'province_code' => '0517'
            ),
            array(
                'code' => '051718',
                'name' => 'LIBMANAN',
                'province_code' => '0517'
            ),
            array(
                'code' => '051719',
                'name' => 'LUPI',
                'province_code' => '0517'
            ),
            array(
                'code' => '051720',
                'name' => 'MAGARAO',
                'province_code' => '0517'
            ),
            array(
                'code' => '051721',
                'name' => 'MILAOR',
                'province_code' => '0517'
            ),
            array(
                'code' => '051722',
                'name' => 'MINALABAC',
                'province_code' => '0517'
            ),
            array(
                'code' => '051723',
                'name' => 'NABUA',
                'province_code' => '0517'
            ),
            array(
                'code' => '051724',
                'name' => 'NAGA CITY',
                'province_code' => '0517'
            ),
            array(
                'code' => '051725',
                'name' => 'OCAMPO',
                'province_code' => '0517'
            ),
            array(
                'code' => '051726',
                'name' => 'PAMPLONA',
                'province_code' => '0517'
            ),
            array(
                'code' => '051727',
                'name' => 'PASACAO',
                'province_code' => '0517'
            ),
            array(
                'code' => '051728',
                'name' => 'PILI',
                'province_code' => '0517'
            ),
            array(
                'code' => '051729',
                'name' => 'PRESENTACION (PARUBCAN)',
                'province_code' => '0517'
            ),
            array(
                'code' => '051730',
                'name' => 'RAGAY',
                'province_code' => '0517'
            ),
            array(
                'code' => '051731',
                'name' => 'SAGÑAY',
                'province_code' => '0517'
            ),
            array(
                'code' => '051732',
                'name' => 'SAN FERNANDO',
                'province_code' => '0517'
            ),
            array(
                'code' => '051733',
                'name' => 'SAN JOSE',
                'province_code' => '0517'
            ),
            array(
                'code' => '051734',
                'name' => 'SIPOCOT',
                'province_code' => '0517'
            ),
            array(
                'code' => '051735',
                'name' => 'SIRUMA',
                'province_code' => '0517'
            ),
            array(
                'code' => '051736',
                'name' => 'TIGAON',
                'province_code' => '0517'
            ),
            array(
                'code' => '051737',
                'name' => 'TINAMBAC',
                'province_code' => '0517'
            ),
            array(
                'code' => '052001',
                'name' => 'BAGAMANOC',
                'province_code' => '0520'
            ),
            array(
                'code' => '052002',
                'name' => 'BARAS',
                'province_code' => '0520'
            ),
            array(
                'code' => '052003',
                'name' => 'BATO',
                'province_code' => '0520'
            ),
            array(
                'code' => '052004',
                'name' => 'CARAMORAN',
                'province_code' => '0520'
            ),
            array(
                'code' => '052005',
                'name' => 'GIGMOTO',
                'province_code' => '0520'
            ),
            array(
                'code' => '052006',
                'name' => 'PANDAN',
                'province_code' => '0520'
            ),
            array(
                'code' => '052007',
                'name' => 'PANGANIBAN (PAYO)',
                'province_code' => '0520'
            ),
            array(
                'code' => '052008',
                'name' => 'SAN ANDRES (CALOLBON)',
                'province_code' => '0520'
            ),
            array(
                'code' => '052009',
                'name' => 'SAN MIGUEL',
                'province_code' => '0520'
            ),
            array(
                'code' => '052010',
                'name' => 'VIGA',
                'province_code' => '0520'
            ),
            array(
                'code' => '052011',
                'name' => 'VIRAC',
                'province_code' => '0520'
            ),
            array(
                'code' => '054101',
                'name' => 'AROROY',
                'province_code' => '0541'
            ),
            array(
                'code' => '054102',
                'name' => 'BALENO',
                'province_code' => '0541'
            ),
            array(
                'code' => '054103',
                'name' => 'BALUD',
                'province_code' => '0541'
            ),
            array(
                'code' => '054104',
                'name' => 'BATUAN',
                'province_code' => '0541'
            ),
            array(
                'code' => '054105',
                'name' => 'CATAINGAN',
                'province_code' => '0541'
            ),
            array(
                'code' => '054106',
                'name' => 'CAWAYAN',
                'province_code' => '0541'
            ),
            array(
                'code' => '054107',
                'name' => 'CLAVERIA',
                'province_code' => '0541'
            ),
            array(
                'code' => '054108',
                'name' => 'DIMASALANG',
                'province_code' => '0541'
            ),
            array(
                'code' => '054109',
                'name' => 'ESPERANZA',
                'province_code' => '0541'
            ),
            array(
                'code' => '054110',
                'name' => 'MANDAON',
                'province_code' => '0541'
            ),
            array(
                'code' => '054111',
                'name' => 'CITY OF MASBATE',
                'province_code' => '0541'
            ),
            array(
                'code' => '054112',
                'name' => 'MILAGROS',
                'province_code' => '0541'
            ),
            array(
                'code' => '054113',
                'name' => 'MOBO',
                'province_code' => '0541'
            ),
            array(
                'code' => '054114',
                'name' => 'MONREAL',
                'province_code' => '0541'
            ),
            array(
                'code' => '054115',
                'name' => 'PALANAS',
                'province_code' => '0541'
            ),
            array(
                'code' => '054116',
                'name' => 'PIO V. CORPUZ (LIMBUHAN)',
                'province_code' => '0541'
            ),
            array(
                'code' => '054117',
                'name' => 'PLACER',
                'province_code' => '0541'
            ),
            array(
                'code' => '054118',
                'name' => 'SAN FERNANDO',
                'province_code' => '0541'
            ),
            array(
                'code' => '054119',
                'name' => 'SAN JACINTO',
                'province_code' => '0541'
            ),
            array(
                'code' => '054120',
                'name' => 'SAN PASCUAL',
                'province_code' => '0541'
            ),
            array(
                'code' => '054121',
                'name' => 'USON',
                'province_code' => '0541'
            ),
            array(
                'code' => '056202',
                'name' => 'BARCELONA',
                'province_code' => '0562'
            ),
            array(
                'code' => '056203',
                'name' => 'BULAN',
                'province_code' => '0562'
            ),
            array(
                'code' => '056204',
                'name' => 'BULUSAN',
                'province_code' => '0562'
            ),
            array(
                'code' => '056205',
                'name' => 'CASIGURAN',
                'province_code' => '0562'
            ),
            array(
                'code' => '056206',
                'name' => 'CASTILLA',
                'province_code' => '0562'
            ),
            array(
                'code' => '056207',
                'name' => 'DONSOL',
                'province_code' => '0562'
            ),
            array(
                'code' => '056208',
                'name' => 'GUBAT',
                'province_code' => '0562'
            ),
            array(
                'code' => '056209',
                'name' => 'IROSIN',
                'province_code' => '0562'
            ),
            array(
                'code' => '056210',
                'name' => 'JUBAN',
                'province_code' => '0562'
            ),
            array(
                'code' => '056211',
                'name' => 'MAGALLANES',
                'province_code' => '0562'
            ),
            array(
                'code' => '056212',
                'name' => 'MATNOG',
                'province_code' => '0562'
            ),
            array(
                'code' => '056213',
                'name' => 'PILAR',
                'province_code' => '0562'
            ),
            array(
                'code' => '056214',
                'name' => 'PRIETO DIAZ',
                'province_code' => '0562'
            ),
            array(
                'code' => '056215',
                'name' => 'SANTA MAGDALENA',
                'province_code' => '0562'
            ),
            array(
                'code' => '056216',
                'name' => 'CITY OF SORSOGON',
                'province_code' => '0562'
            ),
            array(
                'code' => '060401',
                'name' => 'ALTAVAS',
                'province_code' => '0604'
            ),
            array(
                'code' => '060402',
                'name' => 'BALETE',
                'province_code' => '0604'
            ),
            array(
                'code' => '060403',
                'name' => 'BANGA',
                'province_code' => '0604'
            ),
            array(
                'code' => '060404',
                'name' => 'BATAN',
                'province_code' => '0604'
            ),
            array(
                'code' => '060405',
                'name' => 'BURUANGA',
                'province_code' => '0604'
            ),
            array(
                'code' => '060406',
                'name' => 'IBAJAY',
                'province_code' => '0604'
            ),
            array(
                'code' => '060407',
                'name' => 'KALIBO',
                'province_code' => '0604'
            ),
            array(
                'code' => '060408',
                'name' => 'LEZO',
                'province_code' => '0604'
            ),
            array(
                'code' => '060409',
                'name' => 'LIBACAO',
                'province_code' => '0604'
            ),
            array(
                'code' => '060410',
                'name' => 'MADALAG',
                'province_code' => '0604'
            ),
            array(
                'code' => '060411',
                'name' => 'MAKATO',
                'province_code' => '0604'
            ),
            array(
                'code' => '060412',
                'name' => 'MALAY',
                'province_code' => '0604'
            ),
            array(
                'code' => '060413',
                'name' => 'MALINAO',
                'province_code' => '0604'
            ),
            array(
                'code' => '060414',
                'name' => 'NABAS',
                'province_code' => '0604'
            ),
            array(
                'code' => '060415',
                'name' => 'NEW WASHINGTON',
                'province_code' => '0604'
            ),
            array(
                'code' => '060416',
                'name' => 'NUMANCIA',
                'province_code' => '0604'
            ),
            array(
                'code' => '060417',
                'name' => 'TANGALAN',
                'province_code' => '0604'
            ),
            array(
                'code' => '060601',
                'name' => 'ANINI-Y',
                'province_code' => '0606'
            ),
            array(
                'code' => '060602',
                'name' => 'BARBAZA',
                'province_code' => '0606'
            ),
            array(
                'code' => '060603',
                'name' => 'BELISON',
                'province_code' => '0606'
            ),
            array(
                'code' => '060604',
                'name' => 'BUGASONG',
                'province_code' => '0606'
            ),
            array(
                'code' => '060605',
                'name' => 'CALUYA',
                'province_code' => '0606'
            ),
            array(
                'code' => '060606',
                'name' => 'CULASI',
                'province_code' => '0606'
            ),
            array(
                'code' => '060607',
                'name' => 'TOBIAS FORNIER (DAO)',
                'province_code' => '0606'
            ),
            array(
                'code' => '060608',
                'name' => 'HAMTIC',
                'province_code' => '0606'
            ),
            array(
                'code' => '060609',
                'name' => 'LAUA-AN',
                'province_code' => '0606'
            ),
            array(
                'code' => '060610',
                'name' => 'LIBERTAD',
                'province_code' => '0606'
            ),
            array(
                'code' => '060611',
                'name' => 'PANDAN',
                'province_code' => '0606'
            ),
            array(
                'code' => '060612',
                'name' => 'PATNONGON',
                'province_code' => '0606'
            ),
            array(
                'code' => '060613',
                'name' => 'SAN JOSE',
                'province_code' => '0606'
            ),
            array(
                'code' => '060614',
                'name' => 'SAN REMIGIO',
                'province_code' => '0606'
            ),
            array(
                'code' => '060615',
                'name' => 'SEBASTE',
                'province_code' => '0606'
            ),
            array(
                'code' => '060616',
                'name' => 'SIBALOM',
                'province_code' => '0606'
            ),
            array(
                'code' => '060617',
                'name' => 'TIBIAO',
                'province_code' => '0606'
            ),
            array(
                'code' => '060618',
                'name' => 'VALDERRAMA',
                'province_code' => '0606'
            ),
            array(
                'code' => '061901',
                'name' => 'CUARTERO',
                'province_code' => '0619'
            ),
            array(
                'code' => '061902',
                'name' => 'DAO',
                'province_code' => '0619'
            ),
            array(
                'code' => '061903',
                'name' => 'DUMALAG',
                'province_code' => '0619'
            ),
            array(
                'code' => '061904',
                'name' => 'DUMARAO',
                'province_code' => '0619'
            ),
            array(
                'code' => '061905',
                'name' => 'IVISAN',
                'province_code' => '0619'
            ),
            array(
                'code' => '061906',
                'name' => 'JAMINDAN',
                'province_code' => '0619'
            ),
            array(
                'code' => '061907',
                'name' => 'MA-AYON',
                'province_code' => '0619'
            ),
            array(
                'code' => '061908',
                'name' => 'MAMBUSAO',
                'province_code' => '0619'
            ),
            array(
                'code' => '061909',
                'name' => 'PANAY',
                'province_code' => '0619'
            ),
            array(
                'code' => '061910',
                'name' => 'PANITAN',
                'province_code' => '0619'
            ),
            array(
                'code' => '061911',
                'name' => 'PILAR',
                'province_code' => '0619'
            ),
            array(
                'code' => '061912',
                'name' => 'PONTEVEDRA',
                'province_code' => '0619'
            ),
            array(
                'code' => '061913',
                'name' => 'PRESIDENT ROXAS',
                'province_code' => '0619'
            ),
            array(
                'code' => '061914',
                'name' => 'ROXAS CITY',
                'province_code' => '0619'
            ),
            array(
                'code' => '061915',
                'name' => 'SAPI-AN',
                'province_code' => '0619'
            ),
            array(
                'code' => '061916',
                'name' => 'SIGMA',
                'province_code' => '0619'
            ),
            array(
                'code' => '061917',
                'name' => 'TAPAZ',
                'province_code' => '0619'
            ),
            array(
                'code' => '063001',
                'name' => 'AJUY',
                'province_code' => '0630'
            ),
            array(
                'code' => '063002',
                'name' => 'ALIMODIAN',
                'province_code' => '0630'
            ),
            array(
                'code' => '063003',
                'name' => 'ANILAO',
                'province_code' => '0630'
            ),
            array(
                'code' => '063004',
                'name' => 'BADIANGAN',
                'province_code' => '0630'
            ),
            array(
                'code' => '063005',
                'name' => 'BALASAN',
                'province_code' => '0630'
            ),
            array(
                'code' => '063006',
                'name' => 'BANATE',
                'province_code' => '0630'
            ),
            array(
                'code' => '063007',
                'name' => 'BAROTAC NUEVO',
                'province_code' => '0630'
            ),
            array(
                'code' => '063008',
                'name' => 'BAROTAC VIEJO',
                'province_code' => '0630'
            ),
            array(
                'code' => '063009',
                'name' => 'BATAD',
                'province_code' => '0630'
            ),
            array(
                'code' => '063010',
                'name' => 'BINGAWAN',
                'province_code' => '0630'
            ),
            array(
                'code' => '063012',
                'name' => 'CABATUAN',
                'province_code' => '0630'
            ),
            array(
                'code' => '063013',
                'name' => 'CALINOG',
                'province_code' => '0630'
            ),
            array(
                'code' => '063014',
                'name' => 'CARLES',
                'province_code' => '0630'
            ),
            array(
                'code' => '063015',
                'name' => 'CONCEPCION',
                'province_code' => '0630'
            ),
            array(
                'code' => '063016',
                'name' => 'DINGLE',
                'province_code' => '0630'
            ),
            array(
                'code' => '063017',
                'name' => 'DUEÑAS',
                'province_code' => '0630'
            ),
            array(
                'code' => '063018',
                'name' => 'DUMANGAS',
                'province_code' => '0630'
            ),
            array(
                'code' => '063019',
                'name' => 'ESTANCIA',
                'province_code' => '0630'
            ),
            array(
                'code' => '063020',
                'name' => 'GUIMBAL',
                'province_code' => '0630'
            ),
            array(
                'code' => '063021',
                'name' => 'IGBARAS',
                'province_code' => '0630'
            ),
            array(
                'code' => '063022',
                'name' => 'ILOILO CITY',
                'province_code' => '0630'
            ),
            array(
                'code' => '063023',
                'name' => 'JANIUAY',
                'province_code' => '0630'
            ),
            array(
                'code' => '063025',
                'name' => 'LAMBUNAO',
                'province_code' => '0630'
            ),
            array(
                'code' => '063026',
                'name' => 'LEGANES',
                'province_code' => '0630'
            ),
            array(
                'code' => '063027',
                'name' => 'LEMERY',
                'province_code' => '0630'
            ),
            array(
                'code' => '063028',
                'name' => 'LEON',
                'province_code' => '0630'
            ),
            array(
                'code' => '063029',
                'name' => 'MAASIN',
                'province_code' => '0630'
            ),
            array(
                'code' => '063030',
                'name' => 'MIAGAO',
                'province_code' => '0630'
            ),
            array(
                'code' => '063031',
                'name' => 'MINA',
                'province_code' => '0630'
            ),
            array(
                'code' => '063032',
                'name' => 'NEW LUCENA',
                'province_code' => '0630'
            ),
            array(
                'code' => '063034',
                'name' => 'OTON',
                'province_code' => '0630'
            ),
            array(
                'code' => '063035',
                'name' => 'CITY OF PASSI',
                'province_code' => '0630'
            ),
            array(
                'code' => '063036',
                'name' => 'PAVIA',
                'province_code' => '0630'
            ),
            array(
                'code' => '063037',
                'name' => 'POTOTAN',
                'province_code' => '0630'
            ),
            array(
                'code' => '063038',
                'name' => 'SAN DIONISIO',
                'province_code' => '0630'
            ),
            array(
                'code' => '063039',
                'name' => 'SAN ENRIQUE',
                'province_code' => '0630'
            ),
            array(
                'code' => '063040',
                'name' => 'SAN JOAQUIN',
                'province_code' => '0630'
            ),
            array(
                'code' => '063041',
                'name' => 'SAN MIGUEL',
                'province_code' => '0630'
            ),
            array(
                'code' => '063042',
                'name' => 'SAN RAFAEL',
                'province_code' => '0630'
            ),
            array(
                'code' => '063043',
                'name' => 'SANTA BARBARA',
                'province_code' => '0630'
            ),
            array(
                'code' => '063044',
                'name' => 'SARA',
                'province_code' => '0630'
            ),
            array(
                'code' => '063045',
                'name' => 'TIGBAUAN',
                'province_code' => '0630'
            ),
            array(
                'code' => '063046',
                'name' => 'TUBUNGAN',
                'province_code' => '0630'
            ),
            array(
                'code' => '063047',
                'name' => 'ZARRAGA',
                'province_code' => '0630'
            ),
            array(
                'code' => '067901',
                'name' => 'BUENAVISTA',
                'province_code' => '0679'
            ),
            array(
                'code' => '067902',
                'name' => 'JORDAN',
                'province_code' => '0679'
            ),
            array(
                'code' => '067903',
                'name' => 'NUEVA VALENCIA',
                'province_code' => '0679'
            ),
            array(
                'code' => '067904',
                'name' => 'SAN LORENZO',
                'province_code' => '0679'
            ),
            array(
                'code' => '067905',
                'name' => 'SIBUNAG',
                'province_code' => '0679'
            ),
            array(
                'code' => '071201',
                'name' => 'ALBURQUERQUE',
                'province_code' => '0712'
            ),
            array(
                'code' => '071202',
                'name' => 'ALICIA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071203',
                'name' => 'ANDA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071204',
                'name' => 'ANTEQUERA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071205',
                'name' => 'BACLAYON',
                'province_code' => '0712'
            ),
            array(
                'code' => '071206',
                'name' => 'BALILIHAN',
                'province_code' => '0712'
            ),
            array(
                'code' => '071207',
                'name' => 'BATUAN',
                'province_code' => '0712'
            ),
            array(
                'code' => '071208',
                'name' => 'BILAR',
                'province_code' => '0712'
            ),
            array(
                'code' => '071209',
                'name' => 'BUENAVISTA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071210',
                'name' => 'CALAPE',
                'province_code' => '0712'
            ),
            array(
                'code' => '071211',
                'name' => 'CANDIJAY',
                'province_code' => '0712'
            ),
            array(
                'code' => '071212',
                'name' => 'CARMEN',
                'province_code' => '0712'
            ),
            array(
                'code' => '071213',
                'name' => 'CATIGBIAN',
                'province_code' => '0712'
            ),
            array(
                'code' => '071214',
                'name' => 'CLARIN',
                'province_code' => '0712'
            ),
            array(
                'code' => '071215',
                'name' => 'CORELLA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071216',
                'name' => 'CORTES',
                'province_code' => '0712'
            ),
            array(
                'code' => '071217',
                'name' => 'DAGOHOY',
                'province_code' => '0712'
            ),
            array(
                'code' => '071218',
                'name' => 'DANAO',
                'province_code' => '0712'
            ),
            array(
                'code' => '071219',
                'name' => 'DAUIS',
                'province_code' => '0712'
            ),
            array(
                'code' => '071220',
                'name' => 'DIMIAO',
                'province_code' => '0712'
            ),
            array(
                'code' => '071221',
                'name' => 'DUERO',
                'province_code' => '0712'
            ),
            array(
                'code' => '071222',
                'name' => 'GARCIA HERNANDEZ',
                'province_code' => '0712'
            ),
            array(
                'code' => '071223',
                'name' => 'GUINDULMAN',
                'province_code' => '0712'
            ),
            array(
                'code' => '071224',
                'name' => 'INABANGA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071225',
                'name' => 'JAGNA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071226',
                'name' => 'JETAFE',
                'province_code' => '0712'
            ),
            array(
                'code' => '071227',
                'name' => 'LILA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071228',
                'name' => 'LOAY',
                'province_code' => '0712'
            ),
            array(
                'code' => '071229',
                'name' => 'LOBOC',
                'province_code' => '0712'
            ),
            array(
                'code' => '071230',
                'name' => 'LOON',
                'province_code' => '0712'
            ),
            array(
                'code' => '071231',
                'name' => 'MABINI',
                'province_code' => '0712'
            ),
            array(
                'code' => '071232',
                'name' => 'MARIBOJOC',
                'province_code' => '0712'
            ),
            array(
                'code' => '071233',
                'name' => 'PANGLAO',
                'province_code' => '0712'
            ),
            array(
                'code' => '071234',
                'name' => 'PILAR',
                'province_code' => '0712'
            ),
            array(
                'code' => '071235',
                'name' => 'PRES. CARLOS P. GARCIA (PITOGO)',
                'province_code' => '0712'
            ),
            array(
                'code' => '071236',
                'name' => 'SAGBAYAN (BORJA)',
                'province_code' => '0712'
            ),
            array(
                'code' => '071237',
                'name' => 'SAN ISIDRO',
                'province_code' => '0712'
            ),
            array(
                'code' => '071238',
                'name' => 'SAN MIGUEL',
                'province_code' => '0712'
            ),
            array(
                'code' => '071239',
                'name' => 'SEVILLA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071240',
                'name' => 'SIERRA BULLONES',
                'province_code' => '0712'
            ),
            array(
                'code' => '071241',
                'name' => 'SIKATUNA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071242',
                'name' => 'TAGBILARAN CITY',
                'province_code' => '0712'
            ),
            array(
                'code' => '071243',
                'name' => 'TALIBON',
                'province_code' => '0712'
            ),
            array(
                'code' => '071244',
                'name' => 'TRINIDAD',
                'province_code' => '0712'
            ),
            array(
                'code' => '071245',
                'name' => 'TUBIGON',
                'province_code' => '0712'
            ),
            array(
                'code' => '071246',
                'name' => 'UBAY',
                'province_code' => '0712'
            ),
            array(
                'code' => '071247',
                'name' => 'VALENCIA',
                'province_code' => '0712'
            ),
            array(
                'code' => '071248',
                'name' => 'BIEN UNIDO',
                'province_code' => '0712'
            ),
            array(
                'code' => '072201',
                'name' => 'ALCANTARA',
                'province_code' => '0722'
            ),
            array(
                'code' => '072202',
                'name' => 'ALCOY',
                'province_code' => '0722'
            ),
            array(
                'code' => '072203',
                'name' => 'ALEGRIA',
                'province_code' => '0722'
            ),
            array(
                'code' => '072204',
                'name' => 'ALOGUINSAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072205',
                'name' => 'ARGAO',
                'province_code' => '0722'
            ),
            array(
                'code' => '072206',
                'name' => 'ASTURIAS',
                'province_code' => '0722'
            ),
            array(
                'code' => '072207',
                'name' => 'BADIAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072208',
                'name' => 'BALAMBAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072209',
                'name' => 'BANTAYAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072210',
                'name' => 'BARILI',
                'province_code' => '0722'
            ),
            array(
                'code' => '072211',
                'name' => 'CITY OF BOGO',
                'province_code' => '0722'
            ),
            array(
                'code' => '072212',
                'name' => 'BOLJOON',
                'province_code' => '0722'
            ),
            array(
                'code' => '072213',
                'name' => 'BORBON',
                'province_code' => '0722'
            ),
            array(
                'code' => '072214',
                'name' => 'CITY OF CARCAR',
                'province_code' => '0722'
            ),
            array(
                'code' => '072215',
                'name' => 'CARMEN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072216',
                'name' => 'CATMON',
                'province_code' => '0722'
            ),
            array(
                'code' => '072217',
                'name' => 'CEBU CITY',
                'province_code' => '0722'
            ),
            array(
                'code' => '072218',
                'name' => 'COMPOSTELA',
                'province_code' => '0722'
            ),
            array(
                'code' => '072219',
                'name' => 'CONSOLACION',
                'province_code' => '0722'
            ),
            array(
                'code' => '072220',
                'name' => 'CORDOVA',
                'province_code' => '0722'
            ),
            array(
                'code' => '072221',
                'name' => 'DAANBANTAYAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072222',
                'name' => 'DALAGUETE',
                'province_code' => '0722'
            ),
            array(
                'code' => '072223',
                'name' => 'DANAO CITY',
                'province_code' => '0722'
            ),
            array(
                'code' => '072224',
                'name' => 'DUMANJUG',
                'province_code' => '0722'
            ),
            array(
                'code' => '072225',
                'name' => 'GINATILAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072226',
                'name' => 'LAPU-LAPU CITY (OPON)',
                'province_code' => '0722'
            ),
            array(
                'code' => '072227',
                'name' => 'LILOAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072228',
                'name' => 'MADRIDEJOS',
                'province_code' => '0722'
            ),
            array(
                'code' => '072229',
                'name' => 'MALABUYOC',
                'province_code' => '0722'
            ),
            array(
                'code' => '072230',
                'name' => 'MANDAUE CITY',
                'province_code' => '0722'
            ),
            array(
                'code' => '072231',
                'name' => 'MEDELLIN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072232',
                'name' => 'MINGLANILLA',
                'province_code' => '0722'
            ),
            array(
                'code' => '072233',
                'name' => 'MOALBOAL',
                'province_code' => '0722'
            ),
            array(
                'code' => '072234',
                'name' => 'CITY OF NAGA',
                'province_code' => '0722'
            ),
            array(
                'code' => '072235',
                'name' => 'OSLOB',
                'province_code' => '0722'
            ),
            array(
                'code' => '072236',
                'name' => 'PILAR',
                'province_code' => '0722'
            ),
            array(
                'code' => '072237',
                'name' => 'PINAMUNGAHAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072238',
                'name' => 'PORO',
                'province_code' => '0722'
            ),
            array(
                'code' => '072239',
                'name' => 'RONDA',
                'province_code' => '0722'
            ),
            array(
                'code' => '072240',
                'name' => 'SAMBOAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072241',
                'name' => 'SAN FERNANDO',
                'province_code' => '0722'
            ),
            array(
                'code' => '072242',
                'name' => 'SAN FRANCISCO',
                'province_code' => '0722'
            ),
            array(
                'code' => '072243',
                'name' => 'SAN REMIGIO',
                'province_code' => '0722'
            ),
            array(
                'code' => '072244',
                'name' => 'SANTA FE',
                'province_code' => '0722'
            ),
            array(
                'code' => '072245',
                'name' => 'SANTANDER',
                'province_code' => '0722'
            ),
            array(
                'code' => '072246',
                'name' => 'SIBONGA',
                'province_code' => '0722'
            ),
            array(
                'code' => '072247',
                'name' => 'SOGOD',
                'province_code' => '0722'
            ),
            array(
                'code' => '072248',
                'name' => 'TABOGON',
                'province_code' => '0722'
            ),
            array(
                'code' => '072249',
                'name' => 'TABUELAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072250',
                'name' => 'CITY OF TALISAY',
                'province_code' => '0722'
            ),
            array(
                'code' => '072251',
                'name' => 'TOLEDO CITY',
                'province_code' => '0722'
            ),
            array(
                'code' => '072252',
                'name' => 'TUBURAN',
                'province_code' => '0722'
            ),
            array(
                'code' => '072253',
                'name' => 'TUDELA',
                'province_code' => '0722'
            ),
            array(
                'code' => '076101',
                'name' => 'ENRIQUE VILLANUEVA',
                'province_code' => '0761'
            ),
            array(
                'code' => '076102',
                'name' => 'LARENA',
                'province_code' => '0761'
            ),
            array(
                'code' => '076103',
                'name' => 'LAZI',
                'province_code' => '0761'
            ),
            array(
                'code' => '076104',
                'name' => 'MARIA',
                'province_code' => '0761'
            ),
            array(
                'code' => '076105',
                'name' => 'SAN JUAN',
                'province_code' => '0761'
            ),
            array(
                'code' => '076106',
                'name' => 'SIQUIJOR',
                'province_code' => '0761'
            ),
            array(
                'code' => '082601',
                'name' => 'ARTECHE',
                'province_code' => '0826'
            ),
            array(
                'code' => '082602',
                'name' => 'BALANGIGA',
                'province_code' => '0826'
            ),
            array(
                'code' => '082603',
                'name' => 'BALANGKAYAN',
                'province_code' => '0826'
            ),
            array(
                'code' => '082604',
                'name' => 'CITY OF BORONGAN',
                'province_code' => '0826'
            ),
            array(
                'code' => '082605',
                'name' => 'CAN-AVID',
                'province_code' => '0826'
            ),
            array(
                'code' => '082606',
                'name' => 'DOLORES',
                'province_code' => '0826'
            ),
            array(
                'code' => '082607',
                'name' => 'GENERAL MACARTHUR',
                'province_code' => '0826'
            ),
            array(
                'code' => '082608',
                'name' => 'GIPORLOS',
                'province_code' => '0826'
            ),
            array(
                'code' => '082609',
                'name' => 'GUIUAN',
                'province_code' => '0826'
            ),
            array(
                'code' => '082610',
                'name' => 'HERNANI',
                'province_code' => '0826'
            ),
            array(
                'code' => '082611',
                'name' => 'JIPAPAD',
                'province_code' => '0826'
            ),
            array(
                'code' => '082612',
                'name' => 'LAWAAN',
                'province_code' => '0826'
            ),
            array(
                'code' => '082613',
                'name' => 'LLORENTE',
                'province_code' => '0826'
            ),
            array(
                'code' => '082614',
                'name' => 'MASLOG',
                'province_code' => '0826'
            ),
            array(
                'code' => '082615',
                'name' => 'MAYDOLONG',
                'province_code' => '0826'
            ),
            array(
                'code' => '082616',
                'name' => 'MERCEDES',
                'province_code' => '0826'
            ),
            array(
                'code' => '082617',
                'name' => 'ORAS',
                'province_code' => '0826'
            ),
            array(
                'code' => '082618',
                'name' => 'QUINAPONDAN',
                'province_code' => '0826'
            ),
            array(
                'code' => '082619',
                'name' => 'SALCEDO',
                'province_code' => '0826'
            ),
            array(
                'code' => '082620',
                'name' => 'SAN JULIAN',
                'province_code' => '0826'
            ),
            array(
                'code' => '082621',
                'name' => 'SAN POLICARPO',
                'province_code' => '0826'
            ),
            array(
                'code' => '082622',
                'name' => 'SULAT',
                'province_code' => '0826'
            ),
            array(
                'code' => '082623',
                'name' => 'TAFT',
                'province_code' => '0826'
            ),
            array(
                'code' => '083701',
                'name' => 'ABUYOG',
                'province_code' => '0837'
            ),
            array(
                'code' => '083702',
                'name' => 'ALANGALANG',
                'province_code' => '0837'
            ),
            array(
                'code' => '083703',
                'name' => 'ALBUERA',
                'province_code' => '0837'
            ),
            array(
                'code' => '083705',
                'name' => 'BABATNGON',
                'province_code' => '0837'
            ),
            array(
                'code' => '083706',
                'name' => 'BARUGO',
                'province_code' => '0837'
            ),
            array(
                'code' => '083707',
                'name' => 'BATO',
                'province_code' => '0837'
            ),
            array(
                'code' => '083708',
                'name' => 'CITY OF BAYBAY',
                'province_code' => '0837'
            ),
            array(
                'code' => '083710',
                'name' => 'BURAUEN',
                'province_code' => '0837'
            ),
            array(
                'code' => '083713',
                'name' => 'CALUBIAN',
                'province_code' => '0837'
            ),
            array(
                'code' => '083714',
                'name' => 'CAPOOCAN',
                'province_code' => '0837'
            ),
            array(
                'code' => '083715',
                'name' => 'CARIGARA',
                'province_code' => '0837'
            ),
            array(
                'code' => '083717',
                'name' => 'DAGAMI',
                'province_code' => '0837'
            ),
            array(
                'code' => '083718',
                'name' => 'DULAG',
                'province_code' => '0837'
            ),
            array(
                'code' => '083719',
                'name' => 'HILONGOS',
                'province_code' => '0837'
            ),
            array(
                'code' => '083720',
                'name' => 'HINDANG',
                'province_code' => '0837'
            ),
            array(
                'code' => '083721',
                'name' => 'INOPACAN',
                'province_code' => '0837'
            ),
            array(
                'code' => '083722',
                'name' => 'ISABEL',
                'province_code' => '0837'
            ),
            array(
                'code' => '083723',
                'name' => 'JARO',
                'province_code' => '0837'
            ),
            array(
                'code' => '083724',
                'name' => 'JAVIER (BUGHO)',
                'province_code' => '0837'
            ),
            array(
                'code' => '083725',
                'name' => 'JULITA',
                'province_code' => '0837'
            ),
            array(
                'code' => '083726',
                'name' => 'KANANGA',
                'province_code' => '0837'
            ),
            array(
                'code' => '083728',
                'name' => 'LA PAZ',
                'province_code' => '0837'
            ),
            array(
                'code' => '083729',
                'name' => 'LEYTE',
                'province_code' => '0837'
            ),
            array(
                'code' => '083730',
                'name' => 'MACARTHUR',
                'province_code' => '0837'
            ),
            array(
                'code' => '083731',
                'name' => 'MAHAPLAG',
                'province_code' => '0837'
            ),
            array(
                'code' => '083733',
                'name' => 'MATAG-OB',
                'province_code' => '0837'
            ),
            array(
                'code' => '083734',
                'name' => 'MATALOM',
                'province_code' => '0837'
            ),
            array(
                'code' => '083735',
                'name' => 'MAYORGA',
                'province_code' => '0837'
            ),
            array(
                'code' => '083736',
                'name' => 'MERIDA',
                'province_code' => '0837'
            ),
            array(
                'code' => '083738',
                'name' => 'ORMOC CITY',
                'province_code' => '0837'
            ),
            array(
                'code' => '083739',
                'name' => 'PALO',
                'province_code' => '0837'
            ),
            array(
                'code' => '083740',
                'name' => 'PALOMPON',
                'province_code' => '0837'
            ),
            array(
                'code' => '083741',
                'name' => 'PASTRANA',
                'province_code' => '0837'
            ),
            array(
                'code' => '083742',
                'name' => 'SAN ISIDRO',
                'province_code' => '0837'
            ),
            array(
                'code' => '083743',
                'name' => 'SAN MIGUEL',
                'province_code' => '0837'
            ),
            array(
                'code' => '083744',
                'name' => 'SANTA FE',
                'province_code' => '0837'
            ),
            array(
                'code' => '083745',
                'name' => 'TABANGO',
                'province_code' => '0837'
            ),
            array(
                'code' => '083746',
                'name' => 'TABONTABON',
                'province_code' => '0837'
            ),
            array(
                'code' => '083747',
                'name' => 'TACLOBAN CITY',
                'province_code' => '0837'
            ),
            array(
                'code' => '083748',
                'name' => 'TANAUAN',
                'province_code' => '0837'
            ),
            array(
                'code' => '083749',
                'name' => 'TOLOSA',
                'province_code' => '0837'
            ),
            array(
                'code' => '083750',
                'name' => 'TUNGA',
                'province_code' => '0837'
            ),
            array(
                'code' => '083751',
                'name' => 'VILLABA',
                'province_code' => '0837'
            ),
            array(
                'code' => '084801',
                'name' => 'ALLEN',
                'province_code' => '0848'
            ),
            array(
                'code' => '084802',
                'name' => 'BIRI',
                'province_code' => '0848'
            ),
            array(
                'code' => '084803',
                'name' => 'BOBON',
                'province_code' => '0848'
            ),
            array(
                'code' => '084804',
                'name' => 'CAPUL',
                'province_code' => '0848'
            ),
            array(
                'code' => '084805',
                'name' => 'CATARMAN',
                'province_code' => '0848'
            ),
            array(
                'code' => '084806',
                'name' => 'CATUBIG',
                'province_code' => '0848'
            ),
            array(
                'code' => '084807',
                'name' => 'GAMAY',
                'province_code' => '0848'
            ),
            array(
                'code' => '084808',
                'name' => 'LAOANG',
                'province_code' => '0848'
            ),
            array(
                'code' => '084809',
                'name' => 'LAPINIG',
                'province_code' => '0848'
            ),
            array(
                'code' => '084810',
                'name' => 'LAS NAVAS',
                'province_code' => '0848'
            ),
            array(
                'code' => '084811',
                'name' => 'LAVEZARES',
                'province_code' => '0848'
            ),
            array(
                'code' => '084812',
                'name' => 'MAPANAS',
                'province_code' => '0848'
            ),
            array(
                'code' => '084813',
                'name' => 'MONDRAGON',
                'province_code' => '0848'
            ),
            array(
                'code' => '084814',
                'name' => 'PALAPAG',
                'province_code' => '0848'
            ),
            array(
                'code' => '084815',
                'name' => 'PAMBUJAN',
                'province_code' => '0848'
            ),
            array(
                'code' => '084816',
                'name' => 'ROSARIO',
                'province_code' => '0848'
            ),
            array(
                'code' => '084817',
                'name' => 'SAN ANTONIO',
                'province_code' => '0848'
            ),
            array(
                'code' => '084818',
                'name' => 'SAN ISIDRO',
                'province_code' => '0848'
            ),
            array(
                'code' => '084819',
                'name' => 'SAN JOSE',
                'province_code' => '0848'
            ),
            array(
                'code' => '084820',
                'name' => 'SAN ROQUE',
                'province_code' => '0848'
            ),
            array(
                'code' => '084821',
                'name' => 'SAN VICENTE',
                'province_code' => '0848'
            ),
            array(
                'code' => '084822',
                'name' => 'SILVINO LOBOS',
                'province_code' => '0848'
            ),
            array(
                'code' => '084823',
                'name' => 'VICTORIA',
                'province_code' => '0848'
            ),
            array(
                'code' => '084824',
                'name' => 'LOPE DE VEGA',
                'province_code' => '0848'
            ),
            array(
                'code' => '086001',
                'name' => 'ALMAGRO',
                'province_code' => '0860'
            ),
            array(
                'code' => '086002',
                'name' => 'BASEY',
                'province_code' => '0860'
            ),
            array(
                'code' => '086003',
                'name' => 'CALBAYOG CITY',
                'province_code' => '0860'
            ),
            array(
                'code' => '086004',
                'name' => 'CALBIGA',
                'province_code' => '0860'
            ),
            array(
                'code' => '086005',
                'name' => 'CITY OF CATBALOGAN',
                'province_code' => '0860'
            ),
            array(
                'code' => '086006',
                'name' => 'DARAM',
                'province_code' => '0860'
            ),
            array(
                'code' => '086007',
                'name' => 'GANDARA',
                'province_code' => '0860'
            ),
            array(
                'code' => '086008',
                'name' => 'HINABANGAN',
                'province_code' => '0860'
            ),
            array(
                'code' => '086009',
                'name' => 'JIABONG',
                'province_code' => '0860'
            ),
            array(
                'code' => '086010',
                'name' => 'MARABUT',
                'province_code' => '0860'
            ),
            array(
                'code' => '086011',
                'name' => 'MATUGUINAO',
                'province_code' => '0860'
            ),
            array(
                'code' => '086012',
                'name' => 'MOTIONG',
                'province_code' => '0860'
            ),
            array(
                'code' => '086013',
                'name' => 'PINABACDAO',
                'province_code' => '0860'
            ),
            array(
                'code' => '086014',
                'name' => 'SAN JOSE DE BUAN',
                'province_code' => '0860'
            ),
            array(
                'code' => '086015',
                'name' => 'SAN SEBASTIAN',
                'province_code' => '0860'
            ),
            array(
                'code' => '086016',
                'name' => 'SANTA MARGARITA',
                'province_code' => '0860'
            ),
            array(
                'code' => '086017',
                'name' => 'SANTA RITA',
                'province_code' => '0860'
            ),
            array(
                'code' => '086018',
                'name' => 'SANTO NIÑO',
                'province_code' => '0860'
            ),
            array(
                'code' => '086019',
                'name' => 'TALALORA',
                'province_code' => '0860'
            ),
            array(
                'code' => '086020',
                'name' => 'TARANGNAN',
                'province_code' => '0860'
            ),
            array(
                'code' => '086021',
                'name' => 'VILLAREAL',
                'province_code' => '0860'
            ),
            array(
                'code' => '086022',
                'name' => 'PARANAS (WRIGHT)',
                'province_code' => '0860'
            ),
            array(
                'code' => '086023',
                'name' => 'ZUMARRAGA',
                'province_code' => '0860'
            ),
            array(
                'code' => '086024',
                'name' => 'TAGAPUL-AN',
                'province_code' => '0860'
            ),
            array(
                'code' => '086025',
                'name' => 'SAN JORGE',
                'province_code' => '0860'
            ),
            array(
                'code' => '086026',
                'name' => 'PAGSANGHAN',
                'province_code' => '0860'
            ),
            array(
                'code' => '086401',
                'name' => 'ANAHAWAN',
                'province_code' => '0864'
            ),
            array(
                'code' => '086402',
                'name' => 'BONTOC',
                'province_code' => '0864'
            ),
            array(
                'code' => '086403',
                'name' => 'HINUNANGAN',
                'province_code' => '0864'
            ),
            array(
                'code' => '086404',
                'name' => 'HINUNDAYAN',
                'province_code' => '0864'
            ),
            array(
                'code' => '086405',
                'name' => 'LIBAGON',
                'province_code' => '0864'
            ),
            array(
                'code' => '086406',
                'name' => 'LILOAN',
                'province_code' => '0864'
            ),
            array(
                'code' => '086407',
                'name' => 'CITY OF MAASIN',
                'province_code' => '0864'
            ),
            array(
                'code' => '086408',
                'name' => 'MACROHON',
                'province_code' => '0864'
            ),
            array(
                'code' => '086409',
                'name' => 'MALITBOG',
                'province_code' => '0864'
            ),
            array(
                'code' => '086410',
                'name' => 'PADRE BURGOS',
                'province_code' => '0864'
            ),
            array(
                'code' => '086411',
                'name' => 'PINTUYAN',
                'province_code' => '0864'
            ),
            array(
                'code' => '086412',
                'name' => 'SAINT BERNARD',
                'province_code' => '0864'
            ),
            array(
                'code' => '086413',
                'name' => 'SAN FRANCISCO',
                'province_code' => '0864'
            ),
            array(
                'code' => '086414',
                'name' => 'SAN JUAN (CABALIAN)',
                'province_code' => '0864'
            ),
            array(
                'code' => '086415',
                'name' => 'SAN RICARDO',
                'province_code' => '0864'
            ),
            array(
                'code' => '086416',
                'name' => 'SILAGO',
                'province_code' => '0864'
            ),
            array(
                'code' => '086417',
                'name' => 'SOGOD',
                'province_code' => '0864'
            ),
            array(
                'code' => '086418',
                'name' => 'TOMAS OPPUS',
                'province_code' => '0864'
            ),
            array(
                'code' => '086419',
                'name' => 'LIMASAWA',
                'province_code' => '0864'
            ),
            array(
                'code' => '087801',
                'name' => 'ALMERIA',
                'province_code' => '0878'
            ),
            array(
                'code' => '087802',
                'name' => 'BILIRAN',
                'province_code' => '0878'
            ),
            array(
                'code' => '087803',
                'name' => 'CABUCGAYAN',
                'province_code' => '0878'
            ),
            array(
                'code' => '087804',
                'name' => 'CAIBIRAN',
                'province_code' => '0878'
            ),
            array(
                'code' => '087805',
                'name' => 'CULABA',
                'province_code' => '0878'
            ),
            array(
                'code' => '087806',
                'name' => 'KAWAYAN',
                'province_code' => '0878'
            ),
            array(
                'code' => '087807',
                'name' => 'MARIPIPI',
                'province_code' => '0878'
            ),
            array(
                'code' => '087808',
                'name' => 'NAVAL',
                'province_code' => '0878'
            ),
            array(
                'code' => '097201',
                'name' => 'DAPITAN CITY',
                'province_code' => '0972'
            ),
            array(
                'code' => '097202',
                'name' => 'DIPOLOG CITY',
                'province_code' => '0972'
            ),
            array(
                'code' => '097203',
                'name' => 'KATIPUNAN',
                'province_code' => '0972'
            ),
            array(
                'code' => '097204',
                'name' => 'LA LIBERTAD',
                'province_code' => '0972'
            ),
            array(
                'code' => '097205',
                'name' => 'LABASON',
                'province_code' => '0972'
            ),
            array(
                'code' => '097206',
                'name' => 'LILOY',
                'province_code' => '0972'
            ),
            array(
                'code' => '097207',
                'name' => 'MANUKAN',
                'province_code' => '0972'
            ),
            array(
                'code' => '097208',
                'name' => 'MUTIA',
                'province_code' => '0972'
            ),
            array(
                'code' => '097209',
                'name' => 'PIÑAN (NEW PIÑAN)',
                'province_code' => '0972'
            ),
            array(
                'code' => '097210',
                'name' => 'POLANCO',
                'province_code' => '0972'
            ),
            array(
                'code' => '097211',
                'name' => 'PRES. MANUEL A. ROXAS',
                'province_code' => '0972'
            ),
            array(
                'code' => '097212',
                'name' => 'RIZAL',
                'province_code' => '0972'
            ),
            array(
                'code' => '097213',
                'name' => 'SALUG',
                'province_code' => '0972'
            ),
            array(
                'code' => '097214',
                'name' => 'SERGIO OSMEÑA SR.',
                'province_code' => '0972'
            ),
            array(
                'code' => '097215',
                'name' => 'SIAYAN',
                'province_code' => '0972'
            ),
            array(
                'code' => '097216',
                'name' => 'SIBUCO',
                'province_code' => '0972'
            ),
            array(
                'code' => '097217',
                'name' => 'SIBUTAD',
                'province_code' => '0972'
            ),
            array(
                'code' => '097218',
                'name' => 'SINDANGAN',
                'province_code' => '0972'
            ),
            array(
                'code' => '097219',
                'name' => 'SIOCON',
                'province_code' => '0972'
            ),
            array(
                'code' => '097220',
                'name' => 'SIRAWAI',
                'province_code' => '0972'
            ),
            array(
                'code' => '097221',
                'name' => 'TAMPILISAN',
                'province_code' => '0972'
            ),
            array(
                'code' => '097222',
                'name' => 'JOSE DALMAN (PONOT)',
                'province_code' => '0972'
            ),
            array(
                'code' => '097223',
                'name' => 'GUTALAC',
                'province_code' => '0972'
            ),
            array(
                'code' => '097224',
                'name' => 'BALIGUIAN',
                'province_code' => '0972'
            ),
            array(
                'code' => '097225',
                'name' => 'GODOD',
                'province_code' => '0972'
            ),
            array(
                'code' => '097226',
                'name' => 'BACUNGAN (Leon T. Postigo)',
                'province_code' => '0972'
            ),
            array(
                'code' => '097227',
                'name' => 'KALAWIT',
                'province_code' => '0972'
            ),
            array(
                'code' => '097302',
                'name' => 'AURORA',
                'province_code' => '0973'
            ),
            array(
                'code' => '097303',
                'name' => 'BAYOG',
                'province_code' => '0973'
            ),
            array(
                'code' => '097305',
                'name' => 'DIMATALING',
                'province_code' => '0973'
            ),
            array(
                'code' => '097306',
                'name' => 'DINAS',
                'province_code' => '0973'
            ),
            array(
                'code' => '097307',
                'name' => 'DUMALINAO',
                'province_code' => '0973'
            ),
            array(
                'code' => '097308',
                'name' => 'DUMINGAG',
                'province_code' => '0973'
            ),
            array(
                'code' => '097311',
                'name' => 'KUMALARANG',
                'province_code' => '0973'
            ),
            array(
                'code' => '097312',
                'name' => 'LABANGAN',
                'province_code' => '0973'
            ),
            array(
                'code' => '097313',
                'name' => 'LAPUYAN',
                'province_code' => '0973'
            ),
            array(
                'code' => '097315',
                'name' => 'MAHAYAG',
                'province_code' => '0973'
            ),
            array(
                'code' => '097317',
                'name' => 'MARGOSATUBIG',
                'province_code' => '0973'
            ),
            array(
                'code' => '097318',
                'name' => 'MIDSALIP',
                'province_code' => '0973'
            ),
            array(
                'code' => '097319',
                'name' => 'MOLAVE',
                'province_code' => '0973'
            ),
            array(
                'code' => '097322',
                'name' => 'PAGADIAN CITY',
                'province_code' => '0973'
            ),
            array(
                'code' => '097323',
                'name' => 'RAMON MAGSAYSAY (LIARGO)',
                'province_code' => '0973'
            ),
            array(
                'code' => '097324',
                'name' => 'SAN MIGUEL',
                'province_code' => '0973'
            ),
            array(
                'code' => '097325',
                'name' => 'SAN PABLO',
                'province_code' => '0973'
            ),
            array(
                'code' => '097327',
                'name' => 'TABINA',
                'province_code' => '0973'
            ),
            array(
                'code' => '097328',
                'name' => 'TAMBULIG',
                'province_code' => '0973'
            ),
            array(
                'code' => '097330',
                'name' => 'TUKURAN',
                'province_code' => '0973'
            ),
            array(
                'code' => '097332',
                'name' => 'ZAMBOANGA CITY',
                'province_code' => '0973'
            ),
            array(
                'code' => '097333',
                'name' => 'LAKEWOOD',
                'province_code' => '0973'
            ),
            array(
                'code' => '097337',
                'name' => 'JOSEFINA',
                'province_code' => '0973'
            ),
            array(
                'code' => '097338',
                'name' => 'PITOGO',
                'province_code' => '0973'
            ),
            array(
                'code' => '097340',
                'name' => 'SOMINOT (DON MARIANO MARCOS)',
                'province_code' => '0973'
            ),
            array(
                'code' => '097341',
                'name' => 'VINCENZO A. SAGUN',
                'province_code' => '0973'
            ),
            array(
                'code' => '097343',
                'name' => 'GUIPOS',
                'province_code' => '0973'
            ),
            array(
                'code' => '097344',
                'name' => 'TIGBAO',
                'province_code' => '0973'
            ),
            array(
                'code' => '098301',
                'name' => 'ALICIA',
                'province_code' => '0983'
            ),
            array(
                'code' => '098302',
                'name' => 'BUUG',
                'province_code' => '0983'
            ),
            array(
                'code' => '098303',
                'name' => 'DIPLAHAN',
                'province_code' => '0983'
            ),
            array(
                'code' => '098304',
                'name' => 'IMELDA',
                'province_code' => '0983'
            ),
            array(
                'code' => '098305',
                'name' => 'IPIL',
                'province_code' => '0983'
            ),
            array(
                'code' => '098306',
                'name' => 'KABASALAN',
                'province_code' => '0983'
            ),
            array(
                'code' => '098307',
                'name' => 'MABUHAY',
                'province_code' => '0983'
            ),
            array(
                'code' => '098308',
                'name' => 'MALANGAS',
                'province_code' => '0983'
            ),
            array(
                'code' => '098309',
                'name' => 'NAGA',
                'province_code' => '0983'
            ),
            array(
                'code' => '098310',
                'name' => 'OLUTANGA',
                'province_code' => '0983'
            ),
            array(
                'code' => '098311',
                'name' => 'PAYAO',
                'province_code' => '0983'
            ),
            array(
                'code' => '098312',
                'name' => 'ROSELLER LIM',
                'province_code' => '0983'
            ),
            array(
                'code' => '098313',
                'name' => 'SIAY',
                'province_code' => '0983'
            ),
            array(
                'code' => '098314',
                'name' => 'TALUSAN',
                'province_code' => '0983'
            ),
            array(
                'code' => '098315',
                'name' => 'TITAY',
                'province_code' => '0983'
            ),
            array(
                'code' => '098316',
                'name' => 'TUNGAWAN',
                'province_code' => '0983'
            ),
            array(
                'code' => '099701',
                'name' => 'CITY OF ISABELA',
                'province_code' => '0997'
            ),
            array(
                'code' => '101301',
                'name' => 'BAUNGON',
                'province_code' => '1013'
            ),
            array(
                'code' => '101302',
                'name' => 'DAMULOG',
                'province_code' => '1013'
            ),
            array(
                'code' => '101303',
                'name' => 'DANGCAGAN',
                'province_code' => '1013'
            ),
            array(
                'code' => '101304',
                'name' => 'DON CARLOS',
                'province_code' => '1013'
            ),
            array(
                'code' => '101305',
                'name' => 'IMPASUG-ONG',
                'province_code' => '1013'
            ),
            array(
                'code' => '101306',
                'name' => 'KADINGILAN',
                'province_code' => '1013'
            ),
            array(
                'code' => '101307',
                'name' => 'KALILANGAN',
                'province_code' => '1013'
            ),
            array(
                'code' => '101308',
                'name' => 'KIBAWE',
                'province_code' => '1013'
            ),
            array(
                'code' => '101309',
                'name' => 'KITAOTAO',
                'province_code' => '1013'
            ),
            array(
                'code' => '101310',
                'name' => 'LANTAPAN',
                'province_code' => '1013'
            ),
            array(
                'code' => '101311',
                'name' => 'LIBONA',
                'province_code' => '1013'
            ),
            array(
                'code' => '101312',
                'name' => 'CITY OF MALAYBALAY',
                'province_code' => '1013'
            ),
            array(
                'code' => '101313',
                'name' => 'MALITBOG',
                'province_code' => '1013'
            ),
            array(
                'code' => '101314',
                'name' => 'MANOLO FORTICH',
                'province_code' => '1013'
            ),
            array(
                'code' => '101315',
                'name' => 'MARAMAG',
                'province_code' => '1013'
            ),
            array(
                'code' => '101316',
                'name' => 'PANGANTUCAN',
                'province_code' => '1013'
            ),
            array(
                'code' => '101317',
                'name' => 'QUEZON',
                'province_code' => '1013'
            ),
            array(
                'code' => '101318',
                'name' => 'SAN FERNANDO',
                'province_code' => '1013'
            ),
            array(
                'code' => '101319',
                'name' => 'SUMILAO',
                'province_code' => '1013'
            ),
            array(
                'code' => '101320',
                'name' => 'TALAKAG',
                'province_code' => '1013'
            ),
            array(
                'code' => '101321',
                'name' => 'CITY OF VALENCIA',
                'province_code' => '1013'
            ),
            array(
                'code' => '101322',
                'name' => 'CABANGLASAN',
                'province_code' => '1013'
            ),
            array(
                'code' => '101801',
                'name' => 'CATARMAN',
                'province_code' => '1018'
            ),
            array(
                'code' => '101802',
                'name' => 'GUINSILIBAN',
                'province_code' => '1018'
            ),
            array(
                'code' => '101803',
                'name' => 'MAHINOG',
                'province_code' => '1018'
            ),
            array(
                'code' => '101804',
                'name' => 'MAMBAJAO',
                'province_code' => '1018'
            ),
            array(
                'code' => '101805',
                'name' => 'SAGAY',
                'province_code' => '1018'
            ),
            array(
                'code' => '103501',
                'name' => 'BACOLOD',
                'province_code' => '1035'
            ),
            array(
                'code' => '103502',
                'name' => 'BALOI',
                'province_code' => '1035'
            ),
            array(
                'code' => '103503',
                'name' => 'BAROY',
                'province_code' => '1035'
            ),
            array(
                'code' => '103504',
                'name' => 'ILIGAN CITY',
                'province_code' => '1035'
            ),
            array(
                'code' => '103505',
                'name' => 'KAPATAGAN',
                'province_code' => '1035'
            ),
            array(
                'code' => '103506',
                'name' => 'SULTAN NAGA DIMAPORO (KAROMATAN)',
                'province_code' => '1035'
            ),
            array(
                'code' => '103507',
                'name' => 'KAUSWAGAN',
                'province_code' => '1035'
            ),
            array(
                'code' => '103508',
                'name' => 'KOLAMBUGAN',
                'province_code' => '1035'
            ),
            array(
                'code' => '103509',
                'name' => 'LALA',
                'province_code' => '1035'
            ),
            array(
                'code' => '103510',
                'name' => 'LINAMON',
                'province_code' => '1035'
            ),
            array(
                'code' => '103511',
                'name' => 'MAGSAYSAY',
                'province_code' => '1035'
            ),
            array(
                'code' => '103512',
                'name' => 'MAIGO',
                'province_code' => '1035'
            ),
            array(
                'code' => '103513',
                'name' => 'MATUNGAO',
                'province_code' => '1035'
            ),
            array(
                'code' => '103514',
                'name' => 'MUNAI',
                'province_code' => '1035'
            ),
            array(
                'code' => '103515',
                'name' => 'NUNUNGAN',
                'province_code' => '1035'
            ),
            array(
                'code' => '103516',
                'name' => 'PANTAO RAGAT',
                'province_code' => '1035'
            ),
            array(
                'code' => '103517',
                'name' => 'POONA PIAGAPO',
                'province_code' => '1035'
            ),
            array(
                'code' => '103518',
                'name' => 'SALVADOR',
                'province_code' => '1035'
            ),
            array(
                'code' => '103519',
                'name' => 'SAPAD',
                'province_code' => '1035'
            ),
            array(
                'code' => '103520',
                'name' => 'TAGOLOAN',
                'province_code' => '1035'
            ),
            array(
                'code' => '103521',
                'name' => 'TANGCAL',
                'province_code' => '1035'
            ),
            array(
                'code' => '103522',
                'name' => 'TUBOD',
                'province_code' => '1035'
            ),
            array(
                'code' => '103523',
                'name' => 'PANTAR',
                'province_code' => '1035'
            ),
            array(
                'code' => '104201',
                'name' => 'ALORAN',
                'province_code' => '1042'
            ),
            array(
                'code' => '104202',
                'name' => 'BALIANGAO',
                'province_code' => '1042'
            ),
            array(
                'code' => '104203',
                'name' => 'BONIFACIO',
                'province_code' => '1042'
            ),
            array(
                'code' => '104204',
                'name' => 'CALAMBA',
                'province_code' => '1042'
            ),
            array(
                'code' => '104205',
                'name' => 'CLARIN',
                'province_code' => '1042'
            ),
            array(
                'code' => '104206',
                'name' => 'CONCEPCION',
                'province_code' => '1042'
            ),
            array(
                'code' => '104207',
                'name' => 'JIMENEZ',
                'province_code' => '1042'
            ),
            array(
                'code' => '104208',
                'name' => 'LOPEZ JAENA',
                'province_code' => '1042'
            ),
            array(
                'code' => '104209',
                'name' => 'OROQUIETA CITY',
                'province_code' => '1042'
            ),
            array(
                'code' => '104210',
                'name' => 'CITY OF OZAMIZ',
                'province_code' => '1042'
            ),
            array(
                'code' => '104211',
                'name' => 'PANAON',
                'province_code' => '1042'
            ),
            array(
                'code' => '104212',
                'name' => 'PLARIDEL',
                'province_code' => '1042'
            ),
            array(
                'code' => '104213',
                'name' => 'SAPANG DALAGA',
                'province_code' => '1042'
            ),
            array(
                'code' => '104214',
                'name' => 'SINACABAN',
                'province_code' => '1042'
            ),
            array(
                'code' => '104215',
                'name' => 'TANGUB CITY',
                'province_code' => '1042'
            ),
            array(
                'code' => '104216',
                'name' => 'TUDELA',
                'province_code' => '1042'
            ),
            array(
                'code' => '104217',
                'name' => 'DON VICTORIANO CHIONGBIAN  (DON MARIANO MARCOS)',
                'province_code' => '1042'
            ),
            array(
                'code' => '104301',
                'name' => 'ALUBIJID',
                'province_code' => '1043'
            ),
            array(
                'code' => '104302',
                'name' => 'BALINGASAG',
                'province_code' => '1043'
            ),
            array(
                'code' => '104303',
                'name' => 'BALINGOAN',
                'province_code' => '1043'
            ),
            array(
                'code' => '104304',
                'name' => 'BINUANGAN',
                'province_code' => '1043'
            ),
            array(
                'code' => '104305',
                'name' => 'CAGAYAN DE ORO CITY',
                'province_code' => '1043'
            ),
            array(
                'code' => '104306',
                'name' => 'CLAVERIA',
                'province_code' => '1043'
            ),
            array(
                'code' => '104307',
                'name' => 'CITY OF EL SALVADOR',
                'province_code' => '1043'
            ),
            array(
                'code' => '104308',
                'name' => 'GINGOOG CITY',
                'province_code' => '1043'
            ),
            array(
                'code' => '104309',
                'name' => 'GITAGUM',
                'province_code' => '1043'
            ),
            array(
                'code' => '104310',
                'name' => 'INITAO',
                'province_code' => '1043'
            ),
            array(
                'code' => '104311',
                'name' => 'JASAAN',
                'province_code' => '1043'
            ),
            array(
                'code' => '104312',
                'name' => 'KINOGUITAN',
                'province_code' => '1043'
            ),
            array(
                'code' => '104313',
                'name' => 'LAGONGLONG',
                'province_code' => '1043'
            ),
            array(
                'code' => '104314',
                'name' => 'LAGUINDINGAN',
                'province_code' => '1043'
            ),
            array(
                'code' => '104315',
                'name' => 'LIBERTAD',
                'province_code' => '1043'
            ),
            array(
                'code' => '104316',
                'name' => 'LUGAIT',
                'province_code' => '1043'
            ),
            array(
                'code' => '104317',
                'name' => 'MAGSAYSAY (LINUGOS)',
                'province_code' => '1043'
            ),
            array(
                'code' => '104318',
                'name' => 'MANTICAO',
                'province_code' => '1043'
            ),
            array(
                'code' => '104319',
                'name' => 'MEDINA',
                'province_code' => '1043'
            ),
            array(
                'code' => '104320',
                'name' => 'NAAWAN',
                'province_code' => '1043'
            ),
            array(
                'code' => '104321',
                'name' => 'OPOL',
                'province_code' => '1043'
            ),
            array(
                'code' => '104322',
                'name' => 'SALAY',
                'province_code' => '1043'
            ),
            array(
                'code' => '104323',
                'name' => 'SUGBONGCOGON',
                'province_code' => '1043'
            ),
            array(
                'code' => '104324',
                'name' => 'TAGOLOAN',
                'province_code' => '1043'
            ),
            array(
                'code' => '104325',
                'name' => 'TALISAYAN',
                'province_code' => '1043'
            ),
            array(
                'code' => '104326',
                'name' => 'VILLANUEVA',
                'province_code' => '1043'
            ),
            array(
                'code' => '112301',
                'name' => 'ASUNCION (SAUG)',
                'province_code' => '1123'
            ),
            array(
                'code' => '112303',
                'name' => 'CARMEN',
                'province_code' => '1123'
            ),
            array(
                'code' => '112305',
                'name' => 'KAPALONG',
                'province_code' => '1123'
            ),
            array(
                'code' => '112314',
                'name' => 'NEW CORELLA',
                'province_code' => '1123'
            ),
            array(
                'code' => '112315',
                'name' => 'CITY OF PANABO',
                'province_code' => '1123'
            ),
            array(
                'code' => '112317',
                'name' => 'ISLAND GARDEN CITY OF SAMAL',
                'province_code' => '1123'
            ),
            array(
                'code' => '112318',
                'name' => 'SANTO TOMAS',
                'province_code' => '1123'
            ),
            array(
                'code' => '112319',
                'name' => 'CITY OF TAGUM',
                'province_code' => '1123'
            ),
            array(
                'code' => '112322',
                'name' => 'TALAINGOD',
                'province_code' => '1123'
            ),
            array(
                'code' => '112323',
                'name' => 'BRAULIO E. DUJALI',
                'province_code' => '1123'
            ),
            array(
                'code' => '112324',
                'name' => 'SAN ISIDRO',
                'province_code' => '1123'
            ),
            array(
                'code' => '112401',
                'name' => 'BANSALAN',
                'province_code' => '1124'
            ),
            array(
                'code' => '112402',
                'name' => 'DAVAO CITY',
                'province_code' => '1124'
            ),
            array(
                'code' => '112403',
                'name' => 'CITY OF DIGOS',
                'province_code' => '1124'
            ),
            array(
                'code' => '112404',
                'name' => 'HAGONOY',
                'province_code' => '1124'
            ),
            array(
                'code' => '112406',
                'name' => 'KIBLAWAN',
                'province_code' => '1124'
            ),
            array(
                'code' => '112407',
                'name' => 'MAGSAYSAY',
                'province_code' => '1124'
            ),
            array(
                'code' => '112408',
                'name' => 'MALALAG',
                'province_code' => '1124'
            ),
            array(
                'code' => '112410',
                'name' => 'MATANAO',
                'province_code' => '1124'
            ),
            array(
                'code' => '112411',
                'name' => 'PADADA',
                'province_code' => '1124'
            ),
            array(
                'code' => '112412',
                'name' => 'SANTA CRUZ',
                'province_code' => '1124'
            ),
            array(
                'code' => '112414',
                'name' => 'SULOP',
                'province_code' => '1124'
            ),
            array(
                'code' => '112501',
                'name' => 'BAGANGA',
                'province_code' => '1125'
            ),
            array(
                'code' => '112502',
                'name' => 'BANAYBANAY',
                'province_code' => '1125'
            ),
            array(
                'code' => '112503',
                'name' => 'BOSTON',
                'province_code' => '1125'
            ),
            array(
                'code' => '112504',
                'name' => 'CARAGA',
                'province_code' => '1125'
            ),
            array(
                'code' => '112505',
                'name' => 'CATEEL',
                'province_code' => '1125'
            ),
            array(
                'code' => '112506',
                'name' => 'GOVERNOR GENEROSO',
                'province_code' => '1125'
            ),
            array(
                'code' => '112507',
                'name' => 'LUPON',
                'province_code' => '1125'
            ),
            array(
                'code' => '112508',
                'name' => 'MANAY',
                'province_code' => '1125'
            ),
            array(
                'code' => '112509',
                'name' => 'CITY OF MATI',
                'province_code' => '1125'
            ),
            array(
                'code' => '112510',
                'name' => 'SAN ISIDRO',
                'province_code' => '1125'
            ),
            array(
                'code' => '112511',
                'name' => 'TARRAGONA',
                'province_code' => '1125'
            ),
            array(
                'code' => '118201',
                'name' => 'COMPOSTELA',
                'province_code' => '1182'
            ),
            array(
                'code' => '118202',
                'name' => 'LAAK (SAN VICENTE)',
                'province_code' => '1182'
            ),
            array(
                'code' => '118203',
                'name' => 'MABINI (DOÑA ALICIA)',
                'province_code' => '1182'
            ),
            array(
                'code' => '118204',
                'name' => 'MACO',
                'province_code' => '1182'
            ),
            array(
                'code' => '118205',
                'name' => 'MARAGUSAN (SAN MARIANO)',
                'province_code' => '1182'
            ),
            array(
                'code' => '118206',
                'name' => 'MAWAB',
                'province_code' => '1182'
            ),
            array(
                'code' => '118207',
                'name' => 'MONKAYO',
                'province_code' => '1182'
            ),
            array(
                'code' => '118208',
                'name' => 'MONTEVISTA',
                'province_code' => '1182'
            ),
            array(
                'code' => '118209',
                'name' => 'NABUNTURAN',
                'province_code' => '1182'
            ),
            array(
                'code' => '118210',
                'name' => 'NEW BATAAN',
                'province_code' => '1182'
            ),
            array(
                'code' => '118211',
                'name' => 'PANTUKAN',
                'province_code' => '1182'
            ),
            array(
                'code' => '118601',
                'name' => 'DON MARCELINO',
                'province_code' => '1186'
            ),
            array(
                'code' => '118602',
                'name' => 'JOSE ABAD SANTOS (TRINIDAD)',
                'province_code' => '1186'
            ),
            array(
                'code' => '118603',
                'name' => 'MALITA',
                'province_code' => '1186'
            ),
            array(
                'code' => '118604',
                'name' => 'SANTA MARIA',
                'province_code' => '1186'
            ),
            array(
                'code' => '118605',
                'name' => 'SARANGANI',
                'province_code' => '1186'
            ),
            array(
                'code' => '124701',
                'name' => 'ALAMADA',
                'province_code' => '1247'
            ),
            array(
                'code' => '124702',
                'name' => 'CARMEN',
                'province_code' => '1247'
            ),
            array(
                'code' => '124703',
                'name' => 'KABACAN',
                'province_code' => '1247'
            ),
            array(
                'code' => '124704',
                'name' => 'CITY OF KIDAPAWAN',
                'province_code' => '1247'
            ),
            array(
                'code' => '124705',
                'name' => 'LIBUNGAN',
                'province_code' => '1247'
            ),
            array(
                'code' => '124706',
                'name' => 'MAGPET',
                'province_code' => '1247'
            ),
            array(
                'code' => '124707',
                'name' => 'MAKILALA',
                'province_code' => '1247'
            ),
            array(
                'code' => '124708',
                'name' => 'MATALAM',
                'province_code' => '1247'
            ),
            array(
                'code' => '124709',
                'name' => 'MIDSAYAP',
                'province_code' => '1247'
            ),
            array(
                'code' => '124710',
                'name' => 'M\'LANG',
                'province_code' => '1247'
            ),
            array(
                'code' => '124711',
                'name' => 'PIGKAWAYAN',
                'province_code' => '1247'
            ),
            array(
                'code' => '124712',
                'name' => 'PIKIT',
                'province_code' => '1247'
            ),
            array(
                'code' => '124713',
                'name' => 'PRESIDENT ROXAS',
                'province_code' => '1247'
            ),
            array(
                'code' => '124714',
                'name' => 'TULUNAN',
                'province_code' => '1247'
            ),
            array(
                'code' => '124715',
                'name' => 'ANTIPAS',
                'province_code' => '1247'
            ),
            array(
                'code' => '124716',
                'name' => 'BANISILAN',
                'province_code' => '1247'
            ),
            array(
                'code' => '124717',
                'name' => 'ALEOSAN',
                'province_code' => '1247'
            ),
            array(
                'code' => '124718',
                'name' => 'ARAKAN',
                'province_code' => '1247'
            ),
            array(
                'code' => '126302',
                'name' => 'BANGA',
                'province_code' => '1263'
            ),
            array(
                'code' => '126303',
                'name' => 'GENERAL SANTOS CITY (DADIANGAS)',
                'province_code' => '1263'
            ),
            array(
                'code' => '126306',
                'name' => 'CITY OF KORONADAL',
                'province_code' => '1263'
            ),
            array(
                'code' => '126311',
                'name' => 'NORALA',
                'province_code' => '1263'
            ),
            array(
                'code' => '126312',
                'name' => 'POLOMOLOK',
                'province_code' => '1263'
            ),
            array(
                'code' => '126313',
                'name' => 'SURALLAH',
                'province_code' => '1263'
            ),
            array(
                'code' => '126314',
                'name' => 'TAMPAKAN',
                'province_code' => '1263'
            ),
            array(
                'code' => '126315',
                'name' => 'TANTANGAN',
                'province_code' => '1263'
            ),
            array(
                'code' => '126316',
                'name' => 'T\'BOLI',
                'province_code' => '1263'
            ),
            array(
                'code' => '126317',
                'name' => 'TUPI',
                'province_code' => '1263'
            ),
            array(
                'code' => '126318',
                'name' => 'SANTO NIÑO',
                'province_code' => '1263'
            ),
            array(
                'code' => '126319',
                'name' => 'LAKE SEBU',
                'province_code' => '1263'
            ),
            array(
                'code' => '126501',
                'name' => 'BAGUMBAYAN',
                'province_code' => '1265'
            ),
            array(
                'code' => '126502',
                'name' => 'COLUMBIO',
                'province_code' => '1265'
            ),
            array(
                'code' => '126503',
                'name' => 'ESPERANZA',
                'province_code' => '1265'
            ),
            array(
                'code' => '126504',
                'name' => 'ISULAN',
                'province_code' => '1265'
            ),
            array(
                'code' => '126505',
                'name' => 'KALAMANSIG',
                'province_code' => '1265'
            ),
            array(
                'code' => '126506',
                'name' => 'LEBAK',
                'province_code' => '1265'
            ),
            array(
                'code' => '126507',
                'name' => 'LUTAYAN',
                'province_code' => '1265'
            ),
            array(
                'code' => '126508',
                'name' => 'LAMBAYONG (MARIANO MARCOS)',
                'province_code' => '1265'
            ),
            array(
                'code' => '126509',
                'name' => 'PALIMBANG',
                'province_code' => '1265'
            ),
            array(
                'code' => '126510',
                'name' => 'PRESIDENT QUIRINO',
                'province_code' => '1265'
            ),
            array(
                'code' => '126511',
                'name' => 'CITY OF TACURONG',
                'province_code' => '1265'
            ),
            array(
                'code' => '126512',
                'name' => 'SEN. NINOY AQUINO',
                'province_code' => '1265'
            ),
            array(
                'code' => '128001',
                'name' => 'ALABEL',
                'province_code' => '1280'
            ),
            array(
                'code' => '128002',
                'name' => 'GLAN',
                'province_code' => '1280'
            ),
            array(
                'code' => '128003',
                'name' => 'KIAMBA',
                'province_code' => '1280'
            ),
            array(
                'code' => '128004',
                'name' => 'MAASIM',
                'province_code' => '1280'
            ),
            array(
                'code' => '128005',
                'name' => 'MAITUM',
                'province_code' => '1280'
            ),
            array(
                'code' => '128006',
                'name' => 'MALAPATAN',
                'province_code' => '1280'
            ),
            array(
                'code' => '128007',
                'name' => 'MALUNGON',
                'province_code' => '1280'
            ),
            array(
                'code' => '129804',
                'name' => 'COTABATO CITY',
                'province_code' => '1298'
            ),
            array(
                'code' => '133901',
                'name' => 'TONDO I / II',
                'province_code' => '1339'
            ),
            array(
                'code' => '133902',
                'name' => 'BINONDO',
                'province_code' => '1339'
            ),
            array(
                'code' => '133903',
                'name' => 'QUIAPO',
                'province_code' => '1339'
            ),
            array(
                'code' => '133904',
                'name' => 'SAN NICOLAS',
                'province_code' => '1339'
            ),
            array(
                'code' => '133905',
                'name' => 'SANTA CRUZ',
                'province_code' => '1339'
            ),
            array(
                'code' => '133906',
                'name' => 'SAMPALOC',
                'province_code' => '1339'
            ),
            array(
                'code' => '133907',
                'name' => 'SAN MIGUEL',
                'province_code' => '1339'
            ),
            array(
                'code' => '133908',
                'name' => 'ERMITA',
                'province_code' => '1339'
            ),
            array(
                'code' => '133909',
                'name' => 'INTRAMUROS',
                'province_code' => '1339'
            ),
            array(
                'code' => '133910',
                'name' => 'MALATE',
                'province_code' => '1339'
            ),
            array(
                'code' => '133911',
                'name' => 'PACO',
                'province_code' => '1339'
            ),
            array(
                'code' => '133912',
                'name' => 'PANDACAN',
                'province_code' => '1339'
            ),
            array(
                'code' => '133913',
                'name' => 'PORT AREA',
                'province_code' => '1339'
            ),
            array(
                'code' => '133914',
                'name' => 'SANTA ANA',
                'province_code' => '1339'
            ),
            array(
                'code' => '137401',
                'name' => 'CITY OF MANDALUYONG',
                'province_code' => '1374'
            ),
            array(
                'code' => '137402',
                'name' => 'CITY OF MARIKINA',
                'province_code' => '1374'
            ),
            array(
                'code' => '137403',
                'name' => 'CITY OF PASIG',
                'province_code' => '1374'
            ),
            array(
                'code' => '137404',
                'name' => 'QUEZON CITY',
                'province_code' => '1374'
            ),
            array(
                'code' => '137405',
                'name' => 'CITY OF SAN JUAN',
                'province_code' => '1374'
            ),
            array(
                'code' => '137501',
                'name' => 'CALOOCAN CITY',
                'province_code' => '1375'
            ),
            array(
                'code' => '137502',
                'name' => 'CITY OF MALABON',
                'province_code' => '1375'
            ),
            array(
                'code' => '137503',
                'name' => 'CITY OF NAVOTAS',
                'province_code' => '1375'
            ),
            array(
                'code' => '137504',
                'name' => 'CITY OF VALENZUELA',
                'province_code' => '1375'
            ),
            array(
                'code' => '137601',
                'name' => 'CITY OF LAS PIÑAS',
                'province_code' => '1376'
            ),
            array(
                'code' => '137602',
                'name' => 'CITY OF MAKATI',
                'province_code' => '1376'
            ),
            array(
                'code' => '137603',
                'name' => 'CITY OF MUNTINLUPA',
                'province_code' => '1376'
            ),
            array(
                'code' => '137604',
                'name' => 'CITY OF PARAÑAQUE',
                'province_code' => '1376'
            ),
            array(
                'code' => '137605',
                'name' => 'PASAY CITY',
                'province_code' => '1376'
            ),
            array(
                'code' => '137606',
                'name' => 'PATEROS',
                'province_code' => '1376'
            ),
            array(
                'code' => '137607',
                'name' => 'TAGUIG CITY',
                'province_code' => '1376'
            ),
            array(
                'code' => '140101',
                'name' => 'BANGUED',
                'province_code' => '1401'
            ),
            array(
                'code' => '140102',
                'name' => 'BOLINEY',
                'province_code' => '1401'
            ),
            array(
                'code' => '140103',
                'name' => 'BUCAY',
                'province_code' => '1401'
            ),
            array(
                'code' => '140104',
                'name' => 'BUCLOC',
                'province_code' => '1401'
            ),
            array(
                'code' => '140105',
                'name' => 'DAGUIOMAN',
                'province_code' => '1401'
            ),
            array(
                'code' => '140106',
                'name' => 'DANGLAS',
                'province_code' => '1401'
            ),
            array(
                'code' => '140107',
                'name' => 'DOLORES',
                'province_code' => '1401'
            ),
            array(
                'code' => '140108',
                'name' => 'LA PAZ',
                'province_code' => '1401'
            ),
            array(
                'code' => '140109',
                'name' => 'LACUB',
                'province_code' => '1401'
            ),
            array(
                'code' => '140110',
                'name' => 'LAGANGILANG',
                'province_code' => '1401'
            ),
            array(
                'code' => '140111',
                'name' => 'LAGAYAN',
                'province_code' => '1401'
            ),
            array(
                'code' => '140112',
                'name' => 'LANGIDEN',
                'province_code' => '1401'
            ),
            array(
                'code' => '140113',
                'name' => 'LICUAN-BAAY (LICUAN)',
                'province_code' => '1401'
            ),
            array(
                'code' => '140114',
                'name' => 'LUBA',
                'province_code' => '1401'
            ),
            array(
                'code' => '140115',
                'name' => 'MALIBCONG',
                'province_code' => '1401'
            ),
            array(
                'code' => '140116',
                'name' => 'MANABO',
                'province_code' => '1401'
            ),
            array(
                'code' => '140117',
                'name' => 'PEÑARRUBIA',
                'province_code' => '1401'
            ),
            array(
                'code' => '140118',
                'name' => 'PIDIGAN',
                'province_code' => '1401'
            ),
            array(
                'code' => '140119',
                'name' => 'PILAR',
                'province_code' => '1401'
            ),
            array(
                'code' => '140120',
                'name' => 'SALLAPADAN',
                'province_code' => '1401'
            ),
            array(
                'code' => '140121',
                'name' => 'SAN ISIDRO',
                'province_code' => '1401'
            ),
            array(
                'code' => '140122',
                'name' => 'SAN JUAN',
                'province_code' => '1401'
            ),
            array(
                'code' => '140123',
                'name' => 'SAN QUINTIN',
                'province_code' => '1401'
            ),
            array(
                'code' => '140124',
                'name' => 'TAYUM',
                'province_code' => '1401'
            ),
            array(
                'code' => '140125',
                'name' => 'TINEG',
                'province_code' => '1401'
            ),
            array(
                'code' => '140126',
                'name' => 'TUBO',
                'province_code' => '1401'
            ),
            array(
                'code' => '140127',
                'name' => 'VILLAVICIOSA',
                'province_code' => '1401'
            ),
            array(
                'code' => '141101',
                'name' => 'ATOK',
                'province_code' => '1411'
            ),
            array(
                'code' => '141102',
                'name' => 'BAGUIO CITY',
                'province_code' => '1411'
            ),
            array(
                'code' => '141103',
                'name' => 'BAKUN',
                'province_code' => '1411'
            ),
            array(
                'code' => '141104',
                'name' => 'BOKOD',
                'province_code' => '1411'
            ),
            array(
                'code' => '141105',
                'name' => 'BUGUIAS',
                'province_code' => '1411'
            ),
            array(
                'code' => '141106',
                'name' => 'ITOGON',
                'province_code' => '1411'
            ),
            array(
                'code' => '141107',
                'name' => 'KABAYAN',
                'province_code' => '1411'
            ),
            array(
                'code' => '141108',
                'name' => 'KAPANGAN',
                'province_code' => '1411'
            ),
            array(
                'code' => '141109',
                'name' => 'KIBUNGAN',
                'province_code' => '1411'
            ),
            array(
                'code' => '141110',
                'name' => 'LA TRINIDAD',
                'province_code' => '1411'
            ),
            array(
                'code' => '141111',
                'name' => 'MANKAYAN',
                'province_code' => '1411'
            ),
            array(
                'code' => '141112',
                'name' => 'SABLAN',
                'province_code' => '1411'
            ),
            array(
                'code' => '141113',
                'name' => 'TUBA',
                'province_code' => '1411'
            ),
            array(
                'code' => '141114',
                'name' => 'TUBLAY',
                'province_code' => '1411'
            ),
            array(
                'code' => '142701',
                'name' => 'BANAUE',
                'province_code' => '1427'
            ),
            array(
                'code' => '142702',
                'name' => 'HUNGDUAN',
                'province_code' => '1427'
            ),
            array(
                'code' => '142703',
                'name' => 'KIANGAN',
                'province_code' => '1427'
            ),
            array(
                'code' => '142704',
                'name' => 'LAGAWE',
                'province_code' => '1427'
            ),
            array(
                'code' => '142705',
                'name' => 'LAMUT',
                'province_code' => '1427'
            ),
            array(
                'code' => '142706',
                'name' => 'MAYOYAO',
                'province_code' => '1427'
            ),
            array(
                'code' => '142707',
                'name' => 'ALFONSO LISTA (POTIA)',
                'province_code' => '1427'
            ),
            array(
                'code' => '142708',
                'name' => 'AGUINALDO',
                'province_code' => '1427'
            ),
            array(
                'code' => '142709',
                'name' => 'HINGYON',
                'province_code' => '1427'
            ),
            array(
                'code' => '142710',
                'name' => 'TINOC',
                'province_code' => '1427'
            ),
            array(
                'code' => '142711',
                'name' => 'ASIPULO',
                'province_code' => '1427'
            ),
            array(
                'code' => '143201',
                'name' => 'BALBALAN',
                'province_code' => '1432'
            ),
            array(
                'code' => '143206',
                'name' => 'LUBUAGAN',
                'province_code' => '1432'
            ),
            array(
                'code' => '143208',
                'name' => 'PASIL',
                'province_code' => '1432'
            ),
            array(
                'code' => '143209',
                'name' => 'PINUKPUK',
                'province_code' => '1432'
            ),
            array(
                'code' => '143211',
                'name' => 'RIZAL (LIWAN)',
                'province_code' => '1432'
            ),
            array(
                'code' => '143213',
                'name' => 'CITY OF TABUK',
                'province_code' => '1432'
            ),
            array(
                'code' => '143214',
                'name' => 'TANUDAN',
                'province_code' => '1432'
            ),
            array(
                'code' => '143215',
                'name' => 'TINGLAYAN',
                'province_code' => '1432'
            ),
            array(
                'code' => '144401',
                'name' => 'BARLIG',
                'province_code' => '1444'
            ),
            array(
                'code' => '144402',
                'name' => 'BAUKO',
                'province_code' => '1444'
            ),
            array(
                'code' => '144403',
                'name' => 'BESAO',
                'province_code' => '1444'
            ),
            array(
                'code' => '144404',
                'name' => 'BONTOC',
                'province_code' => '1444'
            ),
            array(
                'code' => '144405',
                'name' => 'NATONIN',
                'province_code' => '1444'
            ),
            array(
                'code' => '144406',
                'name' => 'PARACELIS',
                'province_code' => '1444'
            ),
            array(
                'code' => '144407',
                'name' => 'SABANGAN',
                'province_code' => '1444'
            ),
            array(
                'code' => '144408',
                'name' => 'SADANGA',
                'province_code' => '1444'
            ),
            array(
                'code' => '144409',
                'name' => 'SAGADA',
                'province_code' => '1444'
            ),
            array(
                'code' => '144410',
                'name' => 'TADIAN',
                'province_code' => '1444'
            ),
            array(
                'code' => '148101',
                'name' => 'CALANASAN (BAYAG)',
                'province_code' => '1481'
            ),
            array(
                'code' => '148102',
                'name' => 'CONNER',
                'province_code' => '1481'
            ),
            array(
                'code' => '148103',
                'name' => 'FLORA',
                'province_code' => '1481'
            ),
            array(
                'code' => '148104',
                'name' => 'KABUGAO',
                'province_code' => '1481'
            ),
            array(
                'code' => '148105',
                'name' => 'LUNA',
                'province_code' => '1481'
            ),
            array(
                'code' => '148106',
                'name' => 'PUDTOL',
                'province_code' => '1481'
            ),
            array(
                'code' => '148107',
                'name' => 'SANTA MARCELA',
                'province_code' => '1481'
            ),
            array(
                'code' => '150702',
                'name' => 'CITY OF LAMITAN',
                'province_code' => '1507'
            ),
            array(
                'code' => '150703',
                'name' => 'LANTAWAN',
                'province_code' => '1507'
            ),
            array(
                'code' => '150704',
                'name' => 'MALUSO',
                'province_code' => '1507'
            ),
            array(
                'code' => '150705',
                'name' => 'SUMISIP',
                'province_code' => '1507'
            ),
            array(
                'code' => '150706',
                'name' => 'TIPO-TIPO',
                'province_code' => '1507'
            ),
            array(
                'code' => '150707',
                'name' => 'TUBURAN',
                'province_code' => '1507'
            ),
            array(
                'code' => '150708',
                'name' => 'AKBAR',
                'province_code' => '1507'
            ),
            array(
                'code' => '150709',
                'name' => 'AL-BARKA',
                'province_code' => '1507'
            ),
            array(
                'code' => '150710',
                'name' => 'HADJI MOHAMMAD AJUL',
                'province_code' => '1507'
            ),
            array(
                'code' => '150711',
                'name' => 'UNGKAYA PUKAN',
                'province_code' => '1507'
            ),
            array(
                'code' => '150712',
                'name' => 'HADJI MUHTAMAD',
                'province_code' => '1507'
            ),
            array(
                'code' => '150713',
                'name' => 'TABUAN-LASA',
                'province_code' => '1507'
            ),
            array(
                'code' => '153601',
                'name' => 'BACOLOD-KALAWI (BACOLOD GRANDE)',
                'province_code' => '1536'
            ),
            array(
                'code' => '153602',
                'name' => 'BALABAGAN',
                'province_code' => '1536'
            ),
            array(
                'code' => '153603',
                'name' => 'BALINDONG (WATU)',
                'province_code' => '1536'
            ),
            array(
                'code' => '153604',
                'name' => 'BAYANG',
                'province_code' => '1536'
            ),
            array(
                'code' => '153605',
                'name' => 'BINIDAYAN',
                'province_code' => '1536'
            ),
            array(
                'code' => '153606',
                'name' => 'BUBONG',
                'province_code' => '1536'
            ),
            array(
                'code' => '153607',
                'name' => 'BUTIG',
                'province_code' => '1536'
            ),
            array(
                'code' => '153609',
                'name' => 'GANASSI',
                'province_code' => '1536'
            ),
            array(
                'code' => '153610',
                'name' => 'KAPAI',
                'province_code' => '1536'
            ),
            array(
                'code' => '153611',
                'name' => 'LUMBA-BAYABAO (MAGUING)',
                'province_code' => '1536'
            ),
            array(
                'code' => '153612',
                'name' => 'LUMBATAN',
                'province_code' => '1536'
            ),
            array(
                'code' => '153613',
                'name' => 'MADALUM',
                'province_code' => '1536'
            ),
            array(
                'code' => '153614',
                'name' => 'MADAMBA',
                'province_code' => '1536'
            ),
            array(
                'code' => '153615',
                'name' => 'MALABANG',
                'province_code' => '1536'
            ),
            array(
                'code' => '153616',
                'name' => 'MARANTAO',
                'province_code' => '1536'
            ),
            array(
                'code' => '153617',
                'name' => 'MARAWI CITY',
                'province_code' => '1536'
            ),
            array(
                'code' => '153618',
                'name' => 'MASIU',
                'province_code' => '1536'
            ),
            array(
                'code' => '153619',
                'name' => 'MULONDO',
                'province_code' => '1536'
            ),
            array(
                'code' => '153620',
                'name' => 'PAGAYAWAN (TATARIKAN)',
                'province_code' => '1536'
            ),
            array(
                'code' => '153621',
                'name' => 'PIAGAPO',
                'province_code' => '1536'
            ),
            array(
                'code' => '153622',
                'name' => 'POONA BAYABAO (GATA)',
                'province_code' => '1536'
            ),
            array(
                'code' => '153623',
                'name' => 'PUALAS',
                'province_code' => '1536'
            ),
            array(
                'code' => '153624',
                'name' => 'DITSAAN-RAMAIN',
                'province_code' => '1536'
            ),
            array(
                'code' => '153625',
                'name' => 'SAGUIARAN',
                'province_code' => '1536'
            ),
            array(
                'code' => '153626',
                'name' => 'TAMPARAN',
                'province_code' => '1536'
            ),
            array(
                'code' => '153627',
                'name' => 'TARAKA',
                'province_code' => '1536'
            ),
            array(
                'code' => '153628',
                'name' => 'TUBARAN',
                'province_code' => '1536'
            ),
            array(
                'code' => '153629',
                'name' => 'TUGAYA',
                'province_code' => '1536'
            ),
            array(
                'code' => '153630',
                'name' => 'WAO',
                'province_code' => '1536'
            ),
            array(
                'code' => '153631',
                'name' => 'MAROGONG',
                'province_code' => '1536'
            ),
            array(
                'code' => '153632',
                'name' => 'CALANOGAS',
                'province_code' => '1536'
            ),
            array(
                'code' => '153633',
                'name' => 'BUADIPOSO-BUNTONG',
                'province_code' => '1536'
            ),
            array(
                'code' => '153634',
                'name' => 'MAGUING',
                'province_code' => '1536'
            ),
            array(
                'code' => '153635',
                'name' => 'PICONG (SULTAN GUMANDER)',
                'province_code' => '1536'
            ),
            array(
                'code' => '153636',
                'name' => 'LUMBAYANAGUE',
                'province_code' => '1536'
            ),
            array(
                'code' => '153637',
                'name' => 'BUMBARAN',
                'province_code' => '1536'
            ),
            array(
                'code' => '153638',
                'name' => 'TAGOLOAN II',
                'province_code' => '1536'
            ),
            array(
                'code' => '153639',
                'name' => 'KAPATAGAN',
                'province_code' => '1536'
            ),
            array(
                'code' => '153640',
                'name' => 'SULTAN DUMALONDONG',
                'province_code' => '1536'
            ),
            array(
                'code' => '153641',
                'name' => 'LUMBACA-UNAYAN',
                'province_code' => '1536'
            ),
            array(
                'code' => '153801',
                'name' => 'AMPATUAN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153802',
                'name' => 'BULDON',
                'province_code' => '1538'
            ),
            array(
                'code' => '153803',
                'name' => 'BULUAN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153805',
                'name' => 'DATU PAGLAS',
                'province_code' => '1538'
            ),
            array(
                'code' => '153806',
                'name' => 'DATU PIANG',
                'province_code' => '1538'
            ),
            array(
                'code' => '153807',
                'name' => 'DATU ODIN SINSUAT (DINAIG)',
                'province_code' => '1538'
            ),
            array(
                'code' => '153808',
                'name' => 'SHARIFF AGUAK (MAGANOY)',
                'province_code' => '1538'
            ),
            array(
                'code' => '153809',
                'name' => 'MATANOG',
                'province_code' => '1538'
            ),
            array(
                'code' => '153810',
                'name' => 'PAGALUNGAN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153811',
                'name' => 'PARANG',
                'province_code' => '1538'
            ),
            array(
                'code' => '153812',
                'name' => 'SULTAN KUDARAT (NULING)',
                'province_code' => '1538'
            ),
            array(
                'code' => '153813',
                'name' => 'SULTAN SA BARONGIS (LAMBAYONG)',
                'province_code' => '1538'
            ),
            array(
                'code' => '153814',
                'name' => 'KABUNTALAN (TUMBAO)',
                'province_code' => '1538'
            ),
            array(
                'code' => '153815',
                'name' => 'UPI',
                'province_code' => '1538'
            ),
            array(
                'code' => '153816',
                'name' => 'TALAYAN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153817',
                'name' => 'SOUTH UPI',
                'province_code' => '1538'
            ),
            array(
                'code' => '153818',
                'name' => 'BARIRA',
                'province_code' => '1538'
            ),
            array(
                'code' => '153819',
                'name' => 'GEN. S. K. PENDATUN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153820',
                'name' => 'MAMASAPANO',
                'province_code' => '1538'
            ),
            array(
                'code' => '153821',
                'name' => 'TALITAY',
                'province_code' => '1538'
            ),
            array(
                'code' => '153822',
                'name' => 'PAGAGAWAN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153823',
                'name' => 'PAGLAT',
                'province_code' => '1538'
            ),
            array(
                'code' => '153824',
                'name' => 'SULTAN MASTURA',
                'province_code' => '1538'
            ),
            array(
                'code' => '153825',
                'name' => 'GUINDULUNGAN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153826',
                'name' => 'DATU SAUDI-AMPATUAN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153827',
                'name' => 'DATU UNSAY',
                'province_code' => '1538'
            ),
            array(
                'code' => '153828',
                'name' => 'DATU ABDULLAH SANGKI',
                'province_code' => '1538'
            ),
            array(
                'code' => '153829',
                'name' => 'RAJAH BUAYAN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153830',
                'name' => 'DATU BLAH T. SINSUAT',
                'province_code' => '1538'
            ),
            array(
                'code' => '153831',
                'name' => 'DATU ANGGAL MIDTIMBANG',
                'province_code' => '1538'
            ),
            array(
                'code' => '153832',
                'name' => 'MANGUDADATU',
                'province_code' => '1538'
            ),
            array(
                'code' => '153833',
                'name' => 'PANDAG',
                'province_code' => '1538'
            ),
            array(
                'code' => '153834',
                'name' => 'NORTHERN KABUNTALAN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153835',
                'name' => 'DATU HOFFER AMPATUAN',
                'province_code' => '1538'
            ),
            array(
                'code' => '153836',
                'name' => 'DATU SALIBO',
                'province_code' => '1538'
            ),
            array(
                'code' => '153837',
                'name' => 'SHARIFF SAYDONA MUSTAPHA',
                'province_code' => '1538'
            ),
            array(
                'code' => '156601',
                'name' => 'INDANAN',
                'province_code' => '1566'
            ),
            array(
                'code' => '156602',
                'name' => 'JOLO',
                'province_code' => '1566'
            ),
            array(
                'code' => '156603',
                'name' => 'KALINGALAN CALUANG',
                'province_code' => '1566'
            ),
            array(
                'code' => '156604',
                'name' => 'LUUK',
                'province_code' => '1566'
            ),
            array(
                'code' => '156605',
                'name' => 'MAIMBUNG',
                'province_code' => '1566'
            ),
            array(
                'code' => '156606',
                'name' => 'HADJI PANGLIMA TAHIL (MARUNGGAS)',
                'province_code' => '1566'
            ),
            array(
                'code' => '156607',
                'name' => 'OLD PANAMAO',
                'province_code' => '1566'
            ),
            array(
                'code' => '156608',
                'name' => 'PANGUTARAN',
                'province_code' => '1566'
            ),
            array(
                'code' => '156609',
                'name' => 'PARANG',
                'province_code' => '1566'
            ),
            array(
                'code' => '156610',
                'name' => 'PATA',
                'province_code' => '1566'
            ),
            array(
                'code' => '156611',
                'name' => 'PATIKUL',
                'province_code' => '1566'
            ),
            array(
                'code' => '156612',
                'name' => 'SIASI',
                'province_code' => '1566'
            ),
            array(
                'code' => '156613',
                'name' => 'TALIPAO',
                'province_code' => '1566'
            ),
            array(
                'code' => '156614',
                'name' => 'TAPUL',
                'province_code' => '1566'
            ),
            array(
                'code' => '156615',
                'name' => 'TONGKIL',
                'province_code' => '1566'
            ),
            array(
                'code' => '156616',
                'name' => 'PANGLIMA ESTINO (NEW PANAMAO)',
                'province_code' => '1566'
            ),
            array(
                'code' => '156617',
                'name' => 'LUGUS',
                'province_code' => '1566'
            ),
            array(
                'code' => '156618',
                'name' => 'PANDAMI',
                'province_code' => '1566'
            ),
            array(
                'code' => '156619',
                'name' => 'OMAR',
                'province_code' => '1566'
            ),
            array(
                'code' => '157001',
                'name' => 'PANGLIMA SUGALA (BALIMBING)',
                'province_code' => '1570'
            ),
            array(
                'code' => '157002',
                'name' => 'BONGAO',
                'province_code' => '1570'
            ),
            array(
                'code' => '157003',
                'name' => 'MAPUN (CAGAYAN DE TAWI-TAWI)',
                'province_code' => '1570'
            ),
            array(
                'code' => '157004',
                'name' => 'SIMUNUL',
                'province_code' => '1570'
            ),
            array(
                'code' => '157005',
                'name' => 'SITANGKAI',
                'province_code' => '1570'
            ),
            array(
                'code' => '157006',
                'name' => 'SOUTH UBIAN',
                'province_code' => '1570'
            ),
            array(
                'code' => '157007',
                'name' => 'TANDUBAS',
                'province_code' => '1570'
            ),
            array(
                'code' => '157008',
                'name' => 'TURTLE ISLANDS',
                'province_code' => '1570'
            ),
            array(
                'code' => '157009',
                'name' => 'LANGUYAN',
                'province_code' => '1570'
            ),
            array(
                'code' => '157010',
                'name' => 'SAPA-SAPA',
                'province_code' => '1570'
            ),
            array(
                'code' => '157011',
                'name' => 'SIBUTU',
                'province_code' => '1570'
            ),
            array(
                'code' => '160201',
                'name' => 'BUENAVISTA',
                'province_code' => '1602'
            ),
            array(
                'code' => '160202',
                'name' => 'BUTUAN CITY',
                'province_code' => '1602'
            ),
            array(
                'code' => '160203',
                'name' => 'CITY OF CABADBARAN',
                'province_code' => '1602'
            ),
            array(
                'code' => '160204',
                'name' => 'CARMEN',
                'province_code' => '1602'
            ),
            array(
                'code' => '160205',
                'name' => 'JABONGA',
                'province_code' => '1602'
            ),
            array(
                'code' => '160206',
                'name' => 'KITCHARAO',
                'province_code' => '1602'
            ),
            array(
                'code' => '160207',
                'name' => 'LAS NIEVES',
                'province_code' => '1602'
            ),
            array(
                'code' => '160208',
                'name' => 'MAGALLANES',
                'province_code' => '1602'
            ),
            array(
                'code' => '160209',
                'name' => 'NASIPIT',
                'province_code' => '1602'
            ),
            array(
                'code' => '160210',
                'name' => 'SANTIAGO',
                'province_code' => '1602'
            ),
            array(
                'code' => '160211',
                'name' => 'TUBAY',
                'province_code' => '1602'
            ),
            array(
                'code' => '160212',
                'name' => 'REMEDIOS T. ROMUALDEZ',
                'province_code' => '1602'
            ),
            array(
                'code' => '160301',
                'name' => 'CITY OF BAYUGAN',
                'province_code' => '1603'
            ),
            array(
                'code' => '160302',
                'name' => 'BUNAWAN',
                'province_code' => '1603'
            ),
            array(
                'code' => '160303',
                'name' => 'ESPERANZA',
                'province_code' => '1603'
            ),
            array(
                'code' => '160304',
                'name' => 'LA PAZ',
                'province_code' => '1603'
            ),
            array(
                'code' => '160305',
                'name' => 'LORETO',
                'province_code' => '1603'
            ),
            array(
                'code' => '160306',
                'name' => 'PROSPERIDAD',
                'province_code' => '1603'
            ),
            array(
                'code' => '160307',
                'name' => 'ROSARIO',
                'province_code' => '1603'
            ),
            array(
                'code' => '160308',
                'name' => 'SAN FRANCISCO',
                'province_code' => '1603'
            ),
            array(
                'code' => '160309',
                'name' => 'SAN LUIS',
                'province_code' => '1603'
            ),
            array(
                'code' => '160310',
                'name' => 'SANTA JOSEFA',
                'province_code' => '1603'
            ),
            array(
                'code' => '160311',
                'name' => 'TALACOGON',
                'province_code' => '1603'
            ),
            array(
                'code' => '160312',
                'name' => 'TRENTO',
                'province_code' => '1603'
            ),
            array(
                'code' => '160313',
                'name' => 'VERUELA',
                'province_code' => '1603'
            ),
            array(
                'code' => '160314',
                'name' => 'SIBAGAT',
                'province_code' => '1603'
            ),
            array(
                'code' => '166701',
                'name' => 'ALEGRIA',
                'province_code' => '1667'
            ),
            array(
                'code' => '166702',
                'name' => 'BACUAG',
                'province_code' => '1667'
            ),
            array(
                'code' => '166704',
                'name' => 'BURGOS',
                'province_code' => '1667'
            ),
            array(
                'code' => '166706',
                'name' => 'CLAVER',
                'province_code' => '1667'
            ),
            array(
                'code' => '166707',
                'name' => 'DAPA',
                'province_code' => '1667'
            ),
            array(
                'code' => '166708',
                'name' => 'DEL CARMEN',
                'province_code' => '1667'
            ),
            array(
                'code' => '166710',
                'name' => 'GENERAL LUNA',
                'province_code' => '1667'
            ),
            array(
                'code' => '166711',
                'name' => 'GIGAQUIT',
                'province_code' => '1667'
            ),
            array(
                'code' => '166714',
                'name' => 'MAINIT',
                'province_code' => '1667'
            ),
            array(
                'code' => '166715',
                'name' => 'MALIMONO',
                'province_code' => '1667'
            ),
            array(
                'code' => '166716',
                'name' => 'PILAR',
                'province_code' => '1667'
            ),
            array(
                'code' => '166717',
                'name' => 'PLACER',
                'province_code' => '1667'
            ),
            array(
                'code' => '166718',
                'name' => 'SAN BENITO',
                'province_code' => '1667'
            ),
            array(
                'code' => '166719',
                'name' => 'SAN FRANCISCO (ANAO-AON)',
                'province_code' => '1667'
            ),
            array(
                'code' => '166720',
                'name' => 'SAN ISIDRO',
                'province_code' => '1667'
            ),
            array(
                'code' => '166721',
                'name' => 'SANTA MONICA (SAPAO)',
                'province_code' => '1667'
            ),
            array(
                'code' => '166722',
                'name' => 'SISON',
                'province_code' => '1667'
            ),
            array(
                'code' => '166723',
                'name' => 'SOCORRO',
                'province_code' => '1667'
            ),
            array(
                'code' => '166724',
                'name' => 'SURIGAO CITY',
                'province_code' => '1667'
            ),
            array(
                'code' => '166725',
                'name' => 'TAGANA-AN',
                'province_code' => '1667'
            ),
            array(
                'code' => '166727',
                'name' => 'TUBOD',
                'province_code' => '1667'
            ),
            array(
                'code' => '166801',
                'name' => 'BAROBO',
                'province_code' => '1668'
            ),
            array(
                'code' => '166802',
                'name' => 'BAYABAS',
                'province_code' => '1668'
            ),
            array(
                'code' => '166803',
                'name' => 'CITY OF BISLIG',
                'province_code' => '1668'
            ),
            array(
                'code' => '166804',
                'name' => 'CAGWAIT',
                'province_code' => '1668'
            ),
            array(
                'code' => '166805',
                'name' => 'CANTILAN',
                'province_code' => '1668'
            ),
            array(
                'code' => '166806',
                'name' => 'CARMEN',
                'province_code' => '1668'
            ),
            array(
                'code' => '166807',
                'name' => 'CARRASCAL',
                'province_code' => '1668'
            ),
            array(
                'code' => '166808',
                'name' => 'CORTES',
                'province_code' => '1668'
            ),
            array(
                'code' => '166809',
                'name' => 'HINATUAN',
                'province_code' => '1668'
            ),
            array(
                'code' => '166810',
                'name' => 'LANUZA',
                'province_code' => '1668'
            ),
            array(
                'code' => '166811',
                'name' => 'LIANGA',
                'province_code' => '1668'
            ),
            array(
                'code' => '166812',
                'name' => 'LINGIG',
                'province_code' => '1668'
            ),
            array(
                'code' => '166813',
                'name' => 'MADRID',
                'province_code' => '1668'
            ),
            array(
                'code' => '166814',
                'name' => 'MARIHATAG',
                'province_code' => '1668'
            ),
            array(
                'code' => '166815',
                'name' => 'SAN AGUSTIN',
                'province_code' => '1668'
            ),
            array(
                'code' => '166816',
                'name' => 'SAN MIGUEL',
                'province_code' => '1668'
            ),
            array(
                'code' => '166817',
                'name' => 'TAGBINA',
                'province_code' => '1668'
            ),
            array(
                'code' => '166818',
                'name' => 'TAGO',
                'province_code' => '1668'
            ),
            array(
                'code' => '166819',
                'name' => 'CITY OF TANDAG',
                'province_code' => '1668'
            ),
            array(
                'code' => '168501',
                'name' => 'BASILISA (RIZAL)',
                'province_code' => '1685'
            ),
            array(
                'code' => '168502',
                'name' => 'CAGDIANAO',
                'province_code' => '1685'
            ),
            array(
                'code' => '168503',
                'name' => 'DINAGAT',
                'province_code' => '1685'
            ),
            array(
                'code' => '168504',
                'name' => 'LIBJO (ALBOR)',
                'province_code' => '1685'
            ),
            array(
                'code' => '168505',
                'name' => 'LORETO',
                'province_code' => '1685'
            ),
            array(
                'code' => '168506',
                'name' => 'SAN JOSE',
                'province_code' => '1685'
            ),
            array(
                'code' => '168507',
                'name' => 'TUBAJON',
                'province_code' => '1685'
            ),
            array(
                'code' => '174001',
                'name' => 'BOAC',
                'province_code' => '1740'
            ),
            array(
                'code' => '174002',
                'name' => 'BUENAVISTA',
                'province_code' => '1740'
            ),
            array(
                'code' => '174003',
                'name' => 'GASAN',
                'province_code' => '1740'
            ),
            array(
                'code' => '174004',
                'name' => 'MOGPOG',
                'province_code' => '1740'
            ),
            array(
                'code' => '174005',
                'name' => 'SANTA CRUZ',
                'province_code' => '1740'
            ),
            array(
                'code' => '174006',
                'name' => 'TORRIJOS',
                'province_code' => '1740'
            ),
            array(
                'code' => '175101',
                'name' => 'ABRA DE ILOG',
                'province_code' => '1751'
            ),
            array(
                'code' => '175102',
                'name' => 'CALINTAAN',
                'province_code' => '1751'
            ),
            array(
                'code' => '175103',
                'name' => 'LOOC',
                'province_code' => '1751'
            ),
            array(
                'code' => '175104',
                'name' => 'LUBANG',
                'province_code' => '1751'
            ),
            array(
                'code' => '175105',
                'name' => 'MAGSAYSAY',
                'province_code' => '1751'
            ),
            array(
                'code' => '175106',
                'name' => 'MAMBURAO',
                'province_code' => '1751'
            ),
            array(
                'code' => '175107',
                'name' => 'PALUAN',
                'province_code' => '1751'
            ),
            array(
                'code' => '175108',
                'name' => 'RIZAL',
                'province_code' => '1751'
            ),
            array(
                'code' => '175109',
                'name' => 'SABLAYAN',
                'province_code' => '1751'
            ),
            array(
                'code' => '175110',
                'name' => 'SAN JOSE',
                'province_code' => '1751'
            ),
            array(
                'code' => '175111',
                'name' => 'SANTA CRUZ',
                'province_code' => '1751'
            ),
            array(
                'code' => '175201',
                'name' => 'BACO',
                'province_code' => '1752'
            ),
            array(
                'code' => '175202',
                'name' => 'BANSUD',
                'province_code' => '1752'
            ),
            array(
                'code' => '175203',
                'name' => 'BONGABONG',
                'province_code' => '1752'
            ),
            array(
                'code' => '175204',
                'name' => 'BULALACAO (SAN PEDRO)',
                'province_code' => '1752'
            ),
            array(
                'code' => '175205',
                'name' => 'CITY OF CALAPAN',
                'province_code' => '1752'
            ),
            array(
                'code' => '175206',
                'name' => 'GLORIA',
                'province_code' => '1752'
            ),
            array(
                'code' => '175207',
                'name' => 'MANSALAY',
                'province_code' => '1752'
            ),
            array(
                'code' => '175208',
                'name' => 'NAUJAN',
                'province_code' => '1752'
            ),
            array(
                'code' => '175209',
                'name' => 'PINAMALAYAN',
                'province_code' => '1752'
            ),
            array(
                'code' => '175210',
                'name' => 'POLA',
                'province_code' => '1752'
            ),
            array(
                'code' => '175211',
                'name' => 'PUERTO GALERA',
                'province_code' => '1752'
            ),
            array(
                'code' => '175212',
                'name' => 'ROXAS',
                'province_code' => '1752'
            ),
            array(
                'code' => '175213',
                'name' => 'SAN TEODORO',
                'province_code' => '1752'
            ),
            array(
                'code' => '175214',
                'name' => 'SOCORRO',
                'province_code' => '1752'
            ),
            array(
                'code' => '175215',
                'name' => 'VICTORIA',
                'province_code' => '1752'
            ),
            array(
                'code' => '175301',
                'name' => 'ABORLAN',
                'province_code' => '1753'
            ),
            array(
                'code' => '175302',
                'name' => 'AGUTAYA',
                'province_code' => '1753'
            ),
            array(
                'code' => '175303',
                'name' => 'ARACELI',
                'province_code' => '1753'
            ),
            array(
                'code' => '175304',
                'name' => 'BALABAC',
                'province_code' => '1753'
            ),
            array(
                'code' => '175305',
                'name' => 'BATARAZA',
                'province_code' => '1753'
            ),
            array(
                'code' => '175306',
                'name' => 'BROOKE\'S POINT',
                'province_code' => '1753'
            ),
            array(
                'code' => '175307',
                'name' => 'BUSUANGA',
                'province_code' => '1753'
            ),
            array(
                'code' => '175308',
                'name' => 'CAGAYANCILLO',
                'province_code' => '1753'
            ),
            array(
                'code' => '175309',
                'name' => 'CORON',
                'province_code' => '1753'
            ),
            array(
                'code' => '175310',
                'name' => 'CUYO',
                'province_code' => '1753'
            ),
            array(
                'code' => '175311',
                'name' => 'DUMARAN',
                'province_code' => '1753'
            ),
            array(
                'code' => '175312',
                'name' => 'EL NIDO (BACUIT)',
                'province_code' => '1753'
            ),
            array(
                'code' => '175313',
                'name' => 'LINAPACAN',
                'province_code' => '1753'
            ),
            array(
                'code' => '175314',
                'name' => 'MAGSAYSAY',
                'province_code' => '1753'
            ),
            array(
                'code' => '175315',
                'name' => 'NARRA',
                'province_code' => '1753'
            ),
            array(
                'code' => '175316',
                'name' => 'PUERTO PRINCESA CITY',
                'province_code' => '1753'
            ),
            array(
                'code' => '175317',
                'name' => 'QUEZON',
                'province_code' => '1753'
            ),
            array(
                'code' => '175318',
                'name' => 'ROXAS',
                'province_code' => '1753'
            ),
            array(
                'code' => '175319',
                'name' => 'SAN VICENTE',
                'province_code' => '1753'
            ),
            array(
                'code' => '175320',
                'name' => 'TAYTAY',
                'province_code' => '1753'
            ),
            array(
                'code' => '175321',
                'name' => 'KALAYAAN',
                'province_code' => '1753'
            ),
            array(
                'code' => '175322',
                'name' => 'CULION',
                'province_code' => '1753'
            ),
            array(
                'code' => '175323',
                'name' => 'RIZAL (MARCOS)',
                'province_code' => '1753'
            ),
            array(
                'code' => '175324',
                'name' => 'SOFRONIO ESPAÑOLA',
                'province_code' => '1753'
            ),
            array(
                'code' => '175901',
                'name' => 'ALCANTARA',
                'province_code' => '1759'
            ),
            array(
                'code' => '175902',
                'name' => 'BANTON',
                'province_code' => '1759'
            ),
            array(
                'code' => '175903',
                'name' => 'CAJIDIOCAN',
                'province_code' => '1759'
            ),
            array(
                'code' => '175904',
                'name' => 'CALATRAVA',
                'province_code' => '1759'
            ),
            array(
                'code' => '175905',
                'name' => 'CONCEPCION',
                'province_code' => '1759'
            ),
            array(
                'code' => '175906',
                'name' => 'CORCUERA',
                'province_code' => '1759'
            ),
            array(
                'code' => '175907',
                'name' => 'LOOC',
                'province_code' => '1759'
            ),
            array(
                'code' => '175908',
                'name' => 'MAGDIWANG',
                'province_code' => '1759'
            ),
            array(
                'code' => '175909',
                'name' => 'ODIONGAN',
                'province_code' => '1759'
            ),
            array(
                'code' => '175910',
                'name' => 'ROMBLON',
                'province_code' => '1759'
            ),
            array(
                'code' => '175911',
                'name' => 'SAN AGUSTIN',
                'province_code' => '1759'
            ),
            array(
                'code' => '175912',
                'name' => 'SAN ANDRES',
                'province_code' => '1759'
            ),
            array(
                'code' => '175913',
                'name' => 'SAN FERNANDO',
                'province_code' => '1759'
            ),
            array(
                'code' => '175914',
                'name' => 'SAN JOSE',
                'province_code' => '1759'
            ),
            array(
                'code' => '175915',
                'name' => 'SANTA FE',
                'province_code' => '1759'
            ),
            array(
                'code' => '175916',
                'name' => 'FERROL',
                'province_code' => '1759'
            ),
            array(
                'code' => '175917',
                'name' => 'SANTA MARIA (IMELDA)',
                'province_code' => '1759'
            ),
            array(
                'code' => '184501',
                'name' => 'BACOLOD CITY',
                'province_code' => '1845'
            ),
            array(
                'code' => '184502',
                'name' => 'BAGO CITY',
                'province_code' => '1845'
            ),
            array(
                'code' => '184503',
                'name' => 'BINALBAGAN',
                'province_code' => '1845'
            ),
            array(
                'code' => '184504',
                'name' => 'CADIZ CITY',
                'province_code' => '1845'
            ),
            array(
                'code' => '184505',
                'name' => 'CALATRAVA',
                'province_code' => '1845'
            ),
            array(
                'code' => '184506',
                'name' => 'CANDONI',
                'province_code' => '1845'
            ),
            array(
                'code' => '184507',
                'name' => 'CAUAYAN',
                'province_code' => '1845'
            ),
            array(
                'code' => '184508',
                'name' => 'ENRIQUE B. MAGALONA (SARAVIA)',
                'province_code' => '1845'
            ),
            array(
                'code' => '184509',
                'name' => 'CITY OF ESCALANTE',
                'province_code' => '1845'
            ),
            array(
                'code' => '184510',
                'name' => 'CITY OF HIMAMAYLAN',
                'province_code' => '1845'
            ),
            array(
                'code' => '184511',
                'name' => 'HINIGARAN',
                'province_code' => '1845'
            ),
            array(
                'code' => '184512',
                'name' => 'HINOBA-AN (ASIA)',
                'province_code' => '1845'
            ),
            array(
                'code' => '184513',
                'name' => 'ILOG',
                'province_code' => '1845'
            ),
            array(
                'code' => '184514',
                'name' => 'ISABELA',
                'province_code' => '1845'
            ),
            array(
                'code' => '184515',
                'name' => 'CITY OF KABANKALAN',
                'province_code' => '1845'
            ),
            array(
                'code' => '184516',
                'name' => 'LA CARLOTA CITY',
                'province_code' => '1845'
            ),
            array(
                'code' => '184517',
                'name' => 'LA CASTELLANA',
                'province_code' => '1845'
            ),
            array(
                'code' => '184518',
                'name' => 'MANAPLA',
                'province_code' => '1845'
            ),
            array(
                'code' => '184519',
                'name' => 'MOISES PADILLA (MAGALLON)',
                'province_code' => '1845'
            ),
            array(
                'code' => '184520',
                'name' => 'MURCIA',
                'province_code' => '1845'
            ),
            array(
                'code' => '184521',
                'name' => 'PONTEVEDRA',
                'province_code' => '1845'
            ),
            array(
                'code' => '184522',
                'name' => 'PULUPANDAN',
                'province_code' => '1845'
            ),
            array(
                'code' => '184523',
                'name' => 'SAGAY CITY',
                'province_code' => '1845'
            ),
            array(
                'code' => '184524',
                'name' => 'SAN CARLOS CITY',
                'province_code' => '1845'
            ),
            array(
                'code' => '184525',
                'name' => 'SAN ENRIQUE',
                'province_code' => '1845'
            ),
            array(
                'code' => '184526',
                'name' => 'SILAY CITY',
                'province_code' => '1845'
            ),
            array(
                'code' => '184527',
                'name' => 'CITY OF SIPALAY',
                'province_code' => '1845'
            ),
            array(
                'code' => '184528',
                'name' => 'CITY OF TALISAY',
                'province_code' => '1845'
            ),
            array(
                'code' => '184529',
                'name' => 'TOBOSO',
                'province_code' => '1845'
            ),
            array(
                'code' => '184530',
                'name' => 'VALLADOLID',
                'province_code' => '1845'
            ),
            array(
                'code' => '184531',
                'name' => 'CITY OF VICTORIAS',
                'province_code' => '1845'
            ),
            array(
                'code' => '184532',
                'name' => 'SALVADOR BENEDICTO',
                'province_code' => '1845'
            ),
            array(
                'code' => '184601',
                'name' => 'AMLAN (AYUQUITAN)',
                'province_code' => '1846'
            ),
            array(
                'code' => '184602',
                'name' => 'AYUNGON',
                'province_code' => '1846'
            ),
            array(
                'code' => '184603',
                'name' => 'BACONG',
                'province_code' => '1846'
            ),
            array(
                'code' => '184604',
                'name' => 'BAIS CITY',
                'province_code' => '1846'
            ),
            array(
                'code' => '184605',
                'name' => 'BASAY',
                'province_code' => '1846'
            ),
            array(
                'code' => '184606',
                'name' => 'CITY OF BAYAWAN (TULONG)',
                'province_code' => '1846'
            ),
            array(
                'code' => '184607',
                'name' => 'BINDOY (PAYABON)',
                'province_code' => '1846'
            ),
            array(
                'code' => '184608',
                'name' => 'CANLAON CITY',
                'province_code' => '1846'
            ),
            array(
                'code' => '184609',
                'name' => 'DAUIN',
                'province_code' => '1846'
            ),
            array(
                'code' => '184610',
                'name' => 'DUMAGUETE CITY',
                'province_code' => '1846'
            ),
            array(
                'code' => '184611',
                'name' => 'CITY OF GUIHULNGAN',
                'province_code' => '1846'
            ),
            array(
                'code' => '184612',
                'name' => 'JIMALALUD',
                'province_code' => '1846'
            ),
            array(
                'code' => '184613',
                'name' => 'LA LIBERTAD',
                'province_code' => '1846'
            ),
            array(
                'code' => '184614',
                'name' => 'MABINAY',
                'province_code' => '1846'
            ),
            array(
                'code' => '184615',
                'name' => 'MANJUYOD',
                'province_code' => '1846'
            ),
            array(
                'code' => '184616',
                'name' => 'PAMPLONA',
                'province_code' => '1846'
            ),
            array(
                'code' => '184617',
                'name' => 'SAN JOSE',
                'province_code' => '1846'
            ),
            array(
                'code' => '184618',
                'name' => 'SANTA CATALINA',
                'province_code' => '1846'
            ),
            array(
                'code' => '184619',
                'name' => 'SIATON',
                'province_code' => '1846'
            ),
            array(
                'code' => '184620',
                'name' => 'SIBULAN',
                'province_code' => '1846'
            ),
            array(
                'code' => '184621',
                'name' => 'CITY OF TANJAY',
                'province_code' => '1846'
            ),
            array(
                'code' => '184622',
                'name' => 'TAYASAN',
                'province_code' => '1846'
            ),
            array(
                'code' => '184623',
                'name' => 'VALENCIA (LUZURRIAGA)',
                'province_code' => '1846'
            ),
            array(
                'code' => '184624',
                'name' => 'VALLEHERMOSO',
                'province_code' => '1846'
            ),
            array(
                'code' => '184625',
                'name' => 'ZAMBOANGUITA',
                'province_code' => '1846'
            )
        );

        DB::table('tbl_municipalities')->insert($cities_and_municipalities);
    }
}
