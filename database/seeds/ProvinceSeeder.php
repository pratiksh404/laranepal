<?php


use App\Model\Province;
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
        $provinces = [
            [
                "province_name" => 'Province No. 1',
                "capital" => 'Biratnagar',
                "no_of_districts"  => 14,
                "area" => 25905
            ],
            [
                "province_name" => 'Province No. 2',
                "capital" => 'Janakpur',
                "no_of_districts"  => 8,
                "area" => 9661
            ],
            [
                "province_name" => 'Province No. 3',
                "capital" => 'Hetauda',
                "no_of_districts"  => 13,
                "area" => 20300
            ],
            [
                "province_name" => 'Province No. 4',
                "capital" => 'Pokhara',
                "no_of_districts"  => 11,
                "area" => 21504
            ],
            [
                "province_name" => 'Province No. 5',
                "capital" => 'Butwal',
                "no_of_districts"  => 12,
                "area" => 22288
            ],
            [
                "province_name" => 'Province No. 6',
                "capital" => '	Godawari',
                "no_of_districts"  => 10,
                "area" => 27984
            ],
            [
                "province_name" => 'Province No. 7',
                "capital" => 'Kathmandu',
                "no_of_districts"  => 9,
                "area" => 19915
            ],
        ];

        foreach ($provinces as $province) {
            Province::create($province);
        }
    }
}
