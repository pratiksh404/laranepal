<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $province_1 = [
            [
                'province_id' => 1,
                'name' => 'Bhojpur',
                'headquater' => 'Bhojpur',
                'area' => 1507,
            ],
            [
                'province_id' => 1,
                'name' => 'Dhankuta',
                'headquater' => 'Dhankuta',
                'area' => 892,
            ],
            [
                'province_id' => 1,
                'name' => 'Ilam',
                'headquater' => 'Ilam',
                'area' => 1703,
            ],
            [
                'province_id' => 1,
                'name' => 'Jhapa',
                'headquater' => 'Bhadrapur',
                'area' => 1606,
            ],
            [
                'province_id' => 1,
                'name' => 'Khotang',
                'headquater' => 'Diktel',
                'area' => 1591,
            ],
            [
                'province_id' => 1,
                'name' => 'Morang',
                'headquater' => 'Biratnagar',
                'area' => 1855,
            ],
            [
                'province_id' => 1,
                'name' => 'Okhaldhunga',
                'headquater' => 'Siddhicharan',
                'area' => 1074,
            ],
            [
                'province_id' => 1,
                'name' => 'Panchthar',
                'headquater' => 'Phidim',
                'area' => 1241,
            ],
            [
                'province_id' => 1,
                'name' => 'Sankhuwasabha',
                'headquater' => 'Khandbari',
                'area' => 3480,
            ],
            [
                'province_id' => 1,
                'name' => 'Solukhumbu',
                'headquater' => 'Salleri',
                'area' => 3312,
            ],
            [
                'province_id' => 1,
                'name' => 'Sunsari',
                'headquater' => 'Inaruwa',
                'area' => 1257,
            ],
            [
                'province_id' => 1,
                'name' => 'Taplejung',
                'headquater' => 'Taplejung',
                'area' => 3646,
            ],
            [
                'province_id' => 1,
                'name' => 'Terhathum',
                'headquater' => 'Myanglung',
                'area' => 679,
            ],
            [
                'province_id' => 1,
                'name' => 'Udayapur',
                'headquater' => 'Gaighat',
                'area' => 2063,
            ],
        ];

        $province_2 = [
            [
                'province_id' => 2,
                'name' => 'Parsa',
                'headquater' => 'Birganj',
                'area' => 1353,
            ],
            [
                'province_id' => 2,
                'name' => 'Bara',
                'headquater' => 'Kataiya',
                'area' => 1190,
            ],
            [
                'province_id' => 2,
                'name' => 'Rautahat',
                'headquater' => 'Gaur',
                'area' => 1126,
            ],
            [
                'province_id' => 2,
                'name' => 'Sarlahi',
                'headquater' => 'Malangwa',
                'area' => 1259,
            ],
            [
                'province_id' => 2,
                'name' => 'Dhanusha',
                'headquater' => 'Janakpur',
                'area' => 1180,
            ],
            [
                'province_id' => 2,
                'name' => 'Siraha',
                'headquater' => 'Siraha',
                'area' => 1188,
            ],
            [
                'province_id' => 2,
                'name' => 'Mahottari',
                'headquater' => 'Jaleshwar',
                'area' => 1002,
            ],
            [
                'province_id' => 2,
                'name' => 'Saptari',
                'headquater' => 'Rajbiraj',
                'area' => 1363,
            ],
        ];

        $province_3 = [
            [
                'province_id' => 3,
                'name' => 'Sindhuli',
                'headquater' => 'Kamalamai',
                'area' => 2491,
            ],
            [
                'province_id' => 3,
                'name' => 'Ramechhap',
                'headquater' => 'Manthali',
                'area' => 1546,
            ],
            [
                'province_id' => 3,
                'name' => 'Dolakha',
                'headquater' => 'Bhimeshwar',
                'area' => 2191,
            ],
            [
                'province_id' => 3,
                'name' => 'Bhaktapur',
                'headquater' => 'Bhaktapur',
                'area' => 1359,
            ],
            [
                'province_id' => 3,
                'name' => 'Dhading',
                'headquater' => 'Nilkantha',
                'area' => 1926,
            ],
            [
                'province_id' => 3,
                'name' => 'Kathmandu',
                'headquater' => 'Kathmandu',
                'area' => 395,
            ],
            [
                'province_id' => 3,
                'name' => 'Kavrepalanchok',
                'headquater' => 'Dhulikhel',
                'area' => 1003,
            ],
            [
                'province_id' => 3,
                'name' => 'Lalitpur',
                'headquater' => 'Lalitpur',
                'area' => 385,
            ],
            [
                'province_id' => 3,
                'name' => 'Nuwakot',
                'headquater' => 'Bidur',
                'area' => 1121,
            ],
            [
                'province_id' => 3,
                'name' => 'Rasuwa',
                'headquater' => 'Dhunche',
                'area' => 1544,
            ],
            [
                'province_id' => 3,
                'name' => 'Sindhupalchok',
                'headquater' => 'Chautara',
                'area' => 2542,
            ],
            [
                'province_id' => 3,
                'name' => 'Chitwan',
                'headquater' => 'Bharatpur',
                'area' => 2218,
            ],
            [
                'province_id' => 3,
                'name' => 'Makawanpur',
                'headquater' => 'Hetauda',
                'area' => 2426,
            ],
        ];

        $province_4 = [
            [
                'province_id' => 4,
                'name' => 'Baglung',
                'headquater' => 'Baglung',
                'area' => 1784,
            ],
            [
                'province_id' => 4,
                'name' => 'Gorkha',
                'headquater' => 'Gorkha',
                'area' => 3610,
            ],
            [
                'province_id' => 4,
                'name' => 'Kaski',
                'headquater' => 'Pokhara',
                'area' => 2017,
            ],
            [
                'province_id' => 4,
                'name' => 'Lamjung',
                'headquater' => 'Besisahar',
                'area' => 1692,
            ],
            [
                'province_id' => 4,
                'name' => 'Manang',
                'headquater' => 'Chame',
                'area' => 2246,
            ],
            [
                'province_id' => 4,
                'name' => 'Mustang',
                'headquater' => 'Jomsom',
                'area' => 3573,
            ],
            [
                'province_id' => 4,
                'name' => 'Myagdi',
                'headquater' => 'Beni',
                'area' => 2297,
            ],
            [
                'province_id' => 4,
                'name' => 'Nawalpur',
                'headquater' => 'Kawasoti',
                'area' => 1043,
            ],
            [
                'province_id' => 4,
                'name' => 'Parbat',
                'headquater' => 'Kusma',
                'area' => 494,
            ],
            [
                'province_id' => 4,
                'name' => 'Syangja',
                'headquater' => 'Putalibazar',
                'area' => 1164,
            ],
            [
                'province_id' => 4,
                'name' => 'Tanahu',
                'headquater' => 'Damauli',
                'area' => 1546,
            ],
        ];

        $province_5 = [
            [
                'province_id' => 5,
                'name' => 'Kapilvastu',
                'headquater' => 'Taulihawa',
                'area' => 1738,
            ],
            [
                'province_id' => 5,
                'name' => 'Parasi',
                'headquater' => 'Ramgram',
                'area' => 635,
            ],
            [
                'province_id' => 5,
                'name' => 'Rupandehi',
                'headquater' => 'Siddarthanagar',
                'area' => 1360,
            ],
            [
                'province_id' => 5,
                'name' => 'Arghakhanchi',
                'headquater' => 'Sandhikharka',
                'area' => 1193,
            ],
            [
                'province_id' => 5,
                'name' => 'Gulmi',
                'headquater' => 'Tamghas',
                'area' => 1149,
            ],
            [
                'province_id' => 5,
                'name' => 'Palpa',
                'headquater' => 'Tansen',
                'area' => 1373,
            ],
            [
                'province_id' => 5,
                'name' => 'Dang',
                'headquater' => 'Ghorahi',
                'area' => 2955,
            ],
            [
                'province_id' => 5,
                'name' => 'Pyuthan',
                'headquater' => 'Pyuthan',
                'area' => 1309,
            ],
            [
                'province_id' => 5,
                'name' => 'Rolpa',
                'headquater' => 'Liwang',
                'area' => 1879,
            ],
            [
                'province_id' => 5,
                'name' => 'Eastern Rukum',
                'headquater' => 'Rumukot',
                'area' => 1161,
            ],
            [
                'province_id' => 5,
                'name' => 'Banke',
                'headquater' => 'Nepalgunj',
                'area' => 2337,
            ],
            [
                'province_id' => 5,
                'name' => 'Bardiya',
                'headquater' => 'Gulariya',
                'area' => 2337,
            ],
        ];

        $province_6 = [
            [
                'province_id' => 6,
                'name' => 'Western Rukum',
                'headquater' => 'Musikot',
                'area' => 1213,
            ],
            [
                'province_id' => 6,
                'name' => 'Salyan',
                'headquater' => 'Salyan',
                'area' => 1462,
            ],
            [
                'province_id' => 6,
                'name' => 'Dolpa',
                'headquater' => 'Dunai',
                'area' => 7889,
            ],
            [
                'province_id' => 6,
                'name' => 'Humla',
                'headquater' => 'Simikot',
                'area' => 5655,
            ],
            [
                'province_id' => 6,
                'name' => 'Jumla',
                'headquater' => 'Chandannath',
                'area' => 2531,
            ],
            [
                'province_id' => 6,
                'name' => 'Kalikot',
                'headquater' => 'Manma',
                'area' => 1741,
            ],
            [
                'province_id' => 6,
                'name' => 'Mugu',
                'headquater' => 'Gamgadhi',
                'area' => 3535,
            ],
            [
                'province_id' => 6,
                'name' => 'Surkhet',
                'headquater' => 'Birendranagar',
                'area' => 2461,
            ],
            [
                'province_id' => 6,
                'name' => 'Dailekh',
                'headquater' => 'Narayan',
                'area' => 1502,
            ],
            [
                'province_id' => 6,
                'name' => 'Jajarkot',
                'headquater' => 'Khalanga',
                'area' => 2230,
            ],
        ];

        $province_7 = [
            [
                'province_id' => 7,
                'name' => 'Kailali',
                'headquater' => 'Dhangadi',
                'area' => 3235,
            ],
            [
                'province_id' => 7,
                'name' => 'Achham',
                'headquater' => 'Mangalsen',
                'area' => 1680,
            ],
            [
                'province_id' => 7,
                'name' => 'Doti',
                'headquater' => 'Dipayal Silgadhi',
                'area' => 2025,
            ],
            [
                'province_id' => 7,
                'name' => 'Bajhang',
                'headquater' => 'Jayaprithvi',
                'area' => 3422,
            ],
            [
                'province_id' => 7,
                'name' => 'Bajura',
                'headquater' => 'Martadi',
                'area' => 2188,
            ],
            [
                'province_id' => 7,
                'name' => 'Kanchanpur',
                'headquater' => 'Bhimdatta',
                'area' => 1610,
            ],
            [
                'province_id' => 7,
                'name' => 'Dadeldhura',
                'headquater' => 'Amargadhi',
                'area' => 1538,
            ],
            [
                'province_id' => 7,
                'name' => 'Baitadi',
                'headquater' => 'Dasharathchand',
                'area' => 1519,
            ],
            [
                'province_id' => 7,
                'name' => 'Darchula',
                'headquater' => 'Darchula',
                'area' => 2322,
            ],
        ];

        $districts = array_merge(
            $province_1,
            $province_2,
            $province_3,
            $province_4,
            $province_5,
            $province_6,
            $province_7,
        );

        DB::table('districts')->insert($districts);
    }
}
