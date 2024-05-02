<?php

namespace Database\Seeders;

use App\Models\Province;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = array(
            array(
                'code' => '0128',
                'name' => 'ILOCOS NORTE',
                'region_code' => '01'
            ),
            array(
                'code' => '0129',
                'name' => 'ILOCOS SUR',
                'region_code' => '01'
            ),
            array(
                'code' => '0133',
                'name' => 'LA UNION',
                'region_code' => '01'
            ),
            array(
                'code' => '0155',
                'name' => 'PANGASINAN',
                'region_code' => '01'
            ),
            array(
                'code' => '0209',
                'name' => 'BATANES',
                'region_code' => '02'
            ),
            array(
                'code' => '0215',
                'name' => 'CAGAYAN',
                'region_code' => '02'
            ),
            array(
                'code' => '0231',
                'name' => 'ISABELA',
                'region_code' => '02'
            ),
            array(
                'code' => '0250',
                'name' => 'NUEVA VIZCAYA',
                'region_code' => '02'
            ),
            array(
                'code' => '0257',
                'name' => 'QUIRINO',
                'region_code' => '02'
            ),
            array(
                'code' => '0308',
                'name' => 'BATAAN',
                'region_code' => '03'
            ),
            array(
                'code' => '0314',
                'name' => 'BULACAN',
                'region_code' => '03'
            ),
            array(
                'code' => '0349',
                'name' => 'NUEVA ECIJA',
                'region_code' => '03'
            ),
            array(
                'code' => '0354',
                'name' => 'PAMPANGA',
                'region_code' => '03'
            ),
            array(
                'code' => '0369',
                'name' => 'TARLAC',
                'region_code' => '03'
            ),
            array(
                'code' => '0371',
                'name' => 'ZAMBALES',
                'region_code' => '03'
            ),
            array(
                'code' => '0377',
                'name' => 'AURORA',
                'region_code' => '03'
            ),
            array(
                'code' => '0410',
                'name' => 'BATANGAS',
                'region_code' => '04'
            ),
            array(
                'code' => '0421',
                'name' => 'CAVITE',
                'region_code' => '04'
            ),
            array(
                'code' => '0434',
                'name' => 'LAGUNA',
                'region_code' => '04'
            ),
            array(
                'code' => '0456',
                'name' => 'QUEZON',
                'region_code' => '04'
            ),
            array(
                'code' => '0458',
                'name' => 'RIZAL',
                'region_code' => '04'
            ),
            array(
                'code' => '0505',
                'name' => 'ALBAY',
                'region_code' => '05'
            ),
            array(
                'code' => '0516',
                'name' => 'CAMARINES NORTE',
                'region_code' => '05'
            ),
            array(
                'code' => '0517',
                'name' => 'CAMARINES SUR',
                'region_code' => '05'
            ),
            array(
                'code' => '0520',
                'name' => 'CATANDUANES',
                'region_code' => '05'
            ),
            array(
                'code' => '0541',
                'name' => 'MASBATE',
                'region_code' => '05'
            ),
            array(
                'code' => '0562',
                'name' => 'SORSOGON',
                'region_code' => '05'
            ),
            array(
                'code' => '0604',
                'name' => 'AKLAN',
                'region_code' => '06'
            ),
            array(
                'code' => '0606',
                'name' => 'ANTIQUE',
                'region_code' => '06'
            ),
            array(
                'code' => '0619',
                'name' => 'CAPIZ',
                'region_code' => '06'
            ),
            array(
                'code' => '0630',
                'name' => 'ILOILO',
                'region_code' => '06'
            ),
            array(
                'code' => '0679',
                'name' => 'GUIMARAS',
                'region_code' => '06'
            ),
            array(
                'code' => '0712',
                'name' => 'BOHOL',
                'region_code' => '07'
            ),
            array(
                'code' => '0722',
                'name' => 'CEBU',
                'region_code' => '07'
            ),
            array(
                'code' => '0761',
                'name' => 'SIQUIJOR',
                'region_code' => '07'
            ),
            array(
                'code' => '0826',
                'name' => 'EASTERN SAMAR',
                'region_code' => '08'
            ),
            array(
                'code' => '0837',
                'name' => 'LEYTE',
                'region_code' => '08'
            ),
            array(
                'code' => '0848',
                'name' => 'NORTHERN SAMAR',
                'region_code' => '08'
            ),
            array(
                'code' => '0860',
                'name' => 'SAMAR (WESTERN SAMAR)',
                'region_code' => '08'
            ),
            array(
                'code' => '0864',
                'name' => 'SOUTHERN LEYTE',
                'region_code' => '08'
            ),
            array(
                'code' => '0878',
                'name' => 'BILIRAN',
                'region_code' => '08'
            ),
            array(
                'code' => '0972',
                'name' => 'ZAMBOANGA DEL NORTE',
                'region_code' => '09'
            ),
            array(
                'code' => '0973',
                'name' => 'ZAMBOANGA DEL SUR',
                'region_code' => '09'
            ),
            array(
                'code' => '0983',
                'name' => 'ZAMBOANGA SIBUGAY',
                'region_code' => '09'
            ),
            array(
                'code' => '0997',
                'name' => 'CITY OF ISABELA',
                'region_code' => '09'
            ),
            array(
                'code' => '1013',
                'name' => 'BUKIDNON',
                'region_code' => '10'
            ),
            array(
                'code' => '1018',
                'name' => 'CAMIGUIN',
                'region_code' => '10'
            ),
            array(
                'code' => '1035',
                'name' => 'LANAO DEL NORTE',
                'region_code' => '10'
            ),
            array(
                'code' => '1042',
                'name' => 'MISAMIS OCCIDENTAL',
                'region_code' => '10'
            ),
            array(
                'code' => '1043',
                'name' => 'MISAMIS ORIENTAL',
                'region_code' => '10'
            ),
            array(
                'code' => '1123',
                'name' => 'DAVAO DEL NORTE',
                'region_code' => '11'
            ),
            array(
                'code' => '1124',
                'name' => 'DAVAO DEL SUR',
                'region_code' => '11'
            ),
            array(
                'code' => '1125',
                'name' => 'DAVAO ORIENTAL',
                'region_code' => '11'
            ),
            array(
                'code' => '1182',
                'name' => 'COMPOSTELA VALLEY',
                'region_code' => '11'
            ),
            array(
                'code' => '1186',
                'name' => 'DAVAO OCCIDENTAL',
                'region_code' => '11'
            ),
            array(
                'code' => '1247',
                'name' => 'COTABATO (NORTH COTABATO)',
                'region_code' => '12'
            ),
            array(
                'code' => '1263',
                'name' => 'SOUTH COTABATO',
                'region_code' => '12'
            ),
            array(
                'code' => '1265',
                'name' => 'SULTAN KUDARAT',
                'region_code' => '12'
            ),
            array(
                'code' => '1280',
                'name' => 'SARANGANI',
                'region_code' => '12'
            ),
            array(
                'code' => '1298',
                'name' => 'COTABATO CITY',
                'region_code' => '12'
            ),
            array(
                'code' => '1339',
                'name' => 'NCR, CITY OF MANILA, FIRST DISTRICT',
                'region_code' => '13'
            ),
            array(
                'code' => '1374',
                'name' => 'NCR, SECOND DISTRICT',
                'region_code' => '13'
            ),
            array(
                'code' => '1375',
                'name' => 'NCR, THIRD DISTRICT',
                'region_code' => '13'
            ),
            array(
                'code' => '1376',
                'name' => 'NCR, FOURTH DISTRICT',
                'region_code' => '13'
            ),
            array(
                'code' => '1401',
                'name' => 'ABRA',
                'region_code' => '14'
            ),
            array(
                'code' => '1411',
                'name' => 'BENGUET',
                'region_code' => '14'
            ),
            array(
                'code' => '1427',
                'name' => 'IFUGAO',
                'region_code' => '14'
            ),
            array(
                'code' => '1432',
                'name' => 'KALINGA',
                'region_code' => '14'
            ),
            array(
                'code' => '1444',
                'name' => 'MOUNTAIN PROVINCE',
                'region_code' => '14'
            ),
            array(
                'code' => '1481',
                'name' => 'APAYAO',
                'region_code' => '14'
            ),
            array(
                'code' => '1507',
                'name' => 'BASILAN',
                'region_code' => '15'
            ),
            array(
                'code' => '1536',
                'name' => 'LANAO DEL SUR',
                'region_code' => '15'
            ),
            array(
                'code' => '1538',
                'name' => 'MAGUINDANAO',
                'region_code' => '15'
            ),
            array(
                'code' => '1566',
                'name' => 'SULU',
                'region_code' => '15'
            ),
            array(
                'code' => '1570',
                'name' => 'TAWI-TAWI',
                'region_code' => '15'
            ),
            array(
                'code' => '1602',
                'name' => 'AGUSAN DEL NORTE',
                'region_code' => '16'
            ),
            array(
                'code' => '1603',
                'name' => 'AGUSAN DEL SUR',
                'region_code' => '16'
            ),
            array(
                'code' => '1667',
                'name' => 'SURIGAO DEL NORTE',
                'region_code' => '16'
            ),
            array(
                'code' => '1668',
                'name' => 'SURIGAO DEL SUR',
                'region_code' => '16'
            ),
            array(
                'code' => '1685',
                'name' => 'DINAGAT ISLANDS',
                'region_code' => '16'
            ),
            array(
                'code' => '1740',
                'name' => 'MARINDUQUE',
                'region_code' => '17'
            ),
            array(
                'code' => '1751',
                'name' => 'OCCIDENTAL MINDORO',
                'region_code' => '17'
            ),
            array(
                'code' => '1752',
                'name' => 'ORIENTAL MINDORO',
                'region_code' => '17'
            ),
            array(
                'code' => '1753',
                'name' => 'PALAWAN',
                'region_code' => '17'
            ),
            array(
                'code' => '1759',
                'name' => 'ROMBLON',
                'region_code' => '17'
            ),
            array(
                'code' => '1845',
                'name' => 'NEGROS OCCIDENTAL',
                'region_code' => '18'
            ),
            array(
                'code' => '1846',
                'name' => 'NEGROS ORIENTAL',
                'region_code' => '18'
            )
        );

        Province::insert($provinces);
    }
}
