<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipalities = [
            [
                'name' =>  'Kathmandu',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Pokhara',
                'district_name' =>  'Kaski',
                'link' =>  'https => //en.wikipedia.org/wiki/Kaski_district_name',
            ],
            [
                'name' =>  'Lalitpur',
                'district_name' =>  'Lalitpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Lalitpur_district_name,_Nepal',
            ],
            [
                'name' =>  'Bharatpur',
                'district_name' =>  'Chitwan',
                'link' =>  'https => //en.wikipedia.org/wiki/Chitwan_district_name',
            ],
            [
                'name' =>  'Biratnagar',
                'district_name' =>  'Morang',
                'link' =>  'https => //en.wikipedia.org/wiki/Morang_district_name',
            ],
            [
                'name' =>  'Birganj',
                'district_name' =>  'Parsa',
                'link' =>  'https => //en.wikipedia.org/wiki/Parsa_district_name',
            ],
            [
                'name' =>  'Ghorahi',
                'district_name' =>  'Dang',
                'link' =>  'https => //en.wikipedia.org/wiki/Dang_Deukhuri_district_name',
            ],
            [
                'name' =>  'Hetauda',
                'district_name' =>  'Makawanpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Makwanpur_district_name',
            ],
            [
                'name' =>  'Dhangadhi',
                'district_name' =>  'Kailali',
                'link' =>  'https => //en.wikipedia.org/wiki/Kailali_district_name',
            ],
            [
                'name' =>  'Tulsipur',
                'district_name' =>  'Dang',
                'link' =>  'https => //en.wikipedia.org/wiki/Dang_Deukhuri_district_name',
            ],
            [
                'name' =>  'Itahari',
                'district_name' =>  'Sunsari',
                'link' =>  'https => //en.wikipedia.org/wiki/Sunsari_district_name',
            ],
            [
                'name' =>  'Nepalgunj',
                'district_name' =>  'Banke',
                'link' =>  'https => //en.wikipedia.org/wiki/Banke_district_name',
            ],
            [
                'name' =>  'Butwal',
                'district_name' =>  'Rupandehi',
                'link' =>  'https => //en.wikipedia.org/wiki/Rupandehi_district_name',
            ],
            [
                'name' =>  'Dharan',
                'district_name' =>  'Sunsari',
                'link' =>  'https => //en.wikipedia.org/wiki/Sunsari_district_name',
            ],
            [
                'name' =>  'Kalaiya',
                'district_name' =>  'Bara',
                'link' =>  'https => //en.wikipedia.org/wiki/Bara_district_name',
            ],
            [
                'name' =>  'Jitpur Simara',
                'district_name' =>  'Bara',
                'link' =>  'https => //en.wikipedia.org/wiki/Bara_district_name',
            ],
            [
                'name' =>  'Birtamod',
                'district_name' =>  'Jhapa',
                'link' =>  'https => //en.wikipedia.org/wiki/Jhapa_district_name',
            ],
            [
                'name' =>  'Damak',
                'district_name' =>  'Jhapa',
                'link' =>  'https => //en.wikipedia.org/wiki/Jhapa_district_name',
            ],
            [
                'name' =>  'Budhanilkantha',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Gokarneshwar',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Bhimdatta',
                'district_name' =>  'Kanchanpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Kanchanpur_district_name',
            ],
            [
                'name' =>  'Birendranagar',
                'district_name' =>  'Surkhet',
                'link' =>  'https => //en.wikipedia.org/wiki/Surkhet_district_name',
            ],
            [
                'name' =>  'Tilottama',
                'district_name' =>  'Rupandehi',
                'link' =>  'https => //en.wikipedia.org/wiki/Rupandehi_district_name',
            ],
            [
                'name' =>  'Tokha',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Tikapur',
                'district_name' =>  'Kailali',
                'link' =>  'https => //en.wikipedia.org/wiki/Kailali_district_name',
            ],
            [
                'name' =>  'Lahan',
                'district_name' =>  'Siraha',
                'link' =>  'https => //en.wikipedia.org/wiki/Siraha_district_name',
            ],
            [
                'name' =>  'Triyuga',
                'district_name' =>  'Udayapur',
                'link' =>  'https => //en.wikipedia.org/wiki/Udayapur_district_name',
            ],
            [
                'name' =>  'Chandragiri',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Madhyapur Thimi',
                'district_name' =>  'Bhaktapur',
                'link' =>  'https => //en.wikipedia.org/wiki/Bhaktapur_district_name',
            ],
            [
                'name' =>  'Siraha',
                'district_name' =>  'Siraha',
                'link' =>  'https => //en.wikipedia.org/wiki/Siraha_district_name',
            ],
            [
                'name' =>  'Bhaktapur',
                'district_name' =>  'Bhaktapur',
                'link' =>  'https => //en.wikipedia.org/wiki/Bhaktapur_district_name',
            ],
            [
                'name' =>  'Tarakeshwar',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Sundar Haraincha',
                'district_name' =>  'Morang',
                'link' =>  'https => //en.wikipedia.org/wiki/Morang_district_name',
            ],
            [
                'name' =>  'Suryabinayak',
                'district_name' =>  'Bhaktapur',
                'link' =>  'https => //en.wikipedia.org/wiki/Bhaktapur_district_name',
            ],
            [
                'name' =>  'Godawari',
                'district_name' =>  'Lalitpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Lalitpur_district_name,_Nepal',
            ],
            [
                'name' =>  'Barahachhetra',
                'district_name' =>  'Sunsari',
                'link' =>  'https => //en.wikipedia.org/wiki/Sunsari_district_name',
            ],
            [
                'name' =>  'Kapilvastu',
                'district_name' =>  'Kapilvastu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kapilvastu_district_name',
            ],
            [
                'name' =>  'Lamki Chuha',
                'district_name' =>  'Kailali',
                'link' =>  'https => //en.wikipedia.org/wiki/Kailali_district_name',
            ],
            [
                'name' =>  'Ghodaghodi',
                'district_name' =>  'Kailali',
                'link' =>  'https => //en.wikipedia.org/wiki/Kailali_district_name',
            ],
            [
                'name' =>  'Banganga',
                'district_name' =>  'Kapilvastu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kapilvastu_district_name',
            ],
            [
                'name' =>  'Lumbini Sanskritik',
                'district_name' =>  'Rupandehi',
                'link' =>  'https => //en.wikipedia.org/wiki/Rupandehi_district_name',
            ],
            [
                'name' =>  'Chandrapur',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Kohalpur',
                'district_name' =>  'Banke',
                'link' =>  'https => //en.wikipedia.org/wiki/Banke_district_name',
            ],
            [
                'name' =>  'Vyas',
                'district_name' =>  'tanahu',
                'link' =>  'https => //en.wikipedia.org/wiki/tanahun_district_name',
            ],
            [
                'name' =>  'Ratnanagar',
                'district_name' =>  'Chitwan',
                'link' =>  'https => //en.wikipedia.org/wiki/Chitwan_district_name',
            ],
            [
                'name' =>  'Barahathwa',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Rajbiraj',
                'district_name' =>  'Saptari',
                'link' =>  'https => //en.wikipedia.org/wiki/Saptari_district_name',
            ],
            [
                'name' =>  'Barbardiya',
                'district_name' =>  'Bardiya',
                'link' =>  'https => //en.wikipedia.org/wiki/Bardiya_district_name',
            ],
            [
                'name' =>  'Shivaraj',
                'district_name' =>  'Kapilvastu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kapilvastu_district_name',
            ],
            [
                'name' =>  'Gulariya',
                'district_name' =>  'Bardiya',
                'link' =>  'https => //en.wikipedia.org/wiki/Bardiya_district_name',
            ],
            [
                'name' =>  'Gaushala',
                'district_name' =>  'Mahottari',
                'link' =>  'https => //en.wikipedia.org/wiki/Mahottari_district_name',
            ],
            [
                'name' =>  'Bardibas',
                'district_name' =>  'Mahottari',
                'link' =>  'https => //en.wikipedia.org/wiki/Mahottari_district_name',
            ],
            [
                'name' =>  'Belbari',
                'district_name' =>  'Morang',
                'link' =>  'https => //en.wikipedia.org/wiki/Morang_district_name',
            ],
            [
                'name' =>  'Kirtipur',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Bhadrapur',
                'district_name' =>  'Jhapa',
                'link' =>  'https => //en.wikipedia.org/wiki/Jhapa_district_name',
            ],
            [
                'name' =>  'Nagarjun',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Dudhauli',
                'district_name' =>  'Sindhuli',
                'link' =>  'https => //en.wikipedia.org/wiki/Sindhuli_district_name',
            ],
            [
                'name' =>  'Kamalamai',
                'district_name' =>  'Sindhuli',
                'link' =>  'https => //en.wikipedia.org/wiki/Sindhuli_district_name',
            ],
            [
                'name' =>  'Buddhabhumi',
                'district_name' =>  'Kapilvastu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kapilvastu_district_name',
            ],
            [
                'name' =>  'Shivasatakshi',
                'district_name' =>  'Jhapa',
                'link' =>  'https => //en.wikipedia.org/wiki/Jhapa_district_name',
            ],
            [
                'name' =>  'Inaruwa',
                'district_name' =>  'Sunsari',
                'link' =>  'https => //en.wikipedia.org/wiki/Sunsari_district_name',
            ],
            [
                'name' =>  'Siddharthanagar',
                'district_name' =>  'Rupandehi',
                'link' =>  'https => //en.wikipedia.org/wiki/Rupandehi_district_name',
            ],
            [
                'name' =>  'Pathari-Shanischare',
                'district_name' =>  'Morang',
                'link' =>  'https => //en.wikipedia.org/wiki/Morang_district_name',
            ],
            [
                'name' =>  'Kawasoti',
                'district_name' =>  'Nawalpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Nawalpur_district_name',
            ],
            [
                'name' =>  'Krishnanagar',
                'district_name' =>  'Kapilvastu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kapilvastu_district_name',
            ],
            [
                'name' =>  'Mahalaxmi',
                'district_name' =>  'Lalitpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Lalitpur_district_name,_Nepal',
            ],
            [
                'name' =>  'Kageshwari-Manohara',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Arjundhara',
                'district_name' =>  'Jhapa',
                'link' =>  'https => //en.wikipedia.org/wiki/Jhapa_district_name',
            ],
            [
                'name' =>  'Ishwarpur',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Rajapur',
                'district_name' =>  'Bardiya',
                'link' =>  'https => //en.wikipedia.org/wiki/Bardiya_district_name',
            ],
            [
                'name' =>  'Ramgram',
                'district_name' =>  'Parasi',
                'link' =>  'https => //en.wikipedia.org/wiki/Parasi_district_name',
            ],
            [
                'name' =>  'Lalbandi',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Gaindakot',
                'district_name' =>  'Nawalpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Nawalpur_district_name',
            ],
            [
                'name' =>  'Jaleshwar',
                'district_name' =>  'Mahottari',
                'link' =>  'https => //en.wikipedia.org/wiki/Mahottari_district_name',
            ],
            [
                'name' =>  'Nilkantha',
                'district_name' =>  'Dhading',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhading_district_name',
            ],
            [
                'name' =>  'Baglung',
                'district_name' =>  'Baglung',
                'link' =>  'https => //en.wikipedia.org/wiki/Baglung_district_name',
            ],
            [
                'name' =>  'Rapti',
                'district_name' =>  'Chitwan',
                'link' =>  'https => //en.wikipedia.org/wiki/Chitwan_district_name',
            ],
            [
                'name' =>  'Suryodaya',
                'district_name' =>  'Ilam',
                'link' =>  'https => //en.wikipedia.org/wiki/Ilam_district_name',
            ],
            [
                'name' =>  'Krishnapur',
                'district_name' =>  'Kanchanpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Kanchanpur_district_name',
            ],
            [
                'name' =>  'Duhabi',
                'district_name' =>  'Sunsari',
                'link' =>  'https => //en.wikipedia.org/wiki/Sunsari_district_name',
            ],
            [
                'name' =>  'Katari',
                'district_name' =>  'Udayapur',
                'link' =>  'https => //en.wikipedia.org/wiki/Udayapur_district_name',
            ],
            [
                'name' =>  'Khairhani',
                'district_name' =>  'Chitwan',
                'link' =>  'https => //en.wikipedia.org/wiki/Chitwan_district_name',
            ],
            [
                'name' =>  'Bansgadhi',
                'district_name' =>  'Bardiya',
                'link' =>  'https => //en.wikipedia.org/wiki/Bardiya_district_name',
            ],
            [
                'name' =>  'Sainamaina',
                'district_name' =>  'Rupandehi',
                'link' =>  'https => //en.wikipedia.org/wiki/Rupandehi_district_name',
            ],
            [
                'name' =>  'Banepa',
                'district_name' =>  'Kavrepalanchok',
                'link' =>  'https => //en.wikipedia.org/wiki/Kavrepalanchok_district_name',
            ],
            [
                'name' =>  'Changunarayan',
                'district_name' =>  'Bhaktapur',
                'link' =>  'https => //en.wikipedia.org/wiki/Bhaktapur_district_name',
            ],
            [
                'name' =>  'Sunwal',
                'district_name' =>  'Parasi',
                'link' =>  'https => //en.wikipedia.org/wiki/Parasi_district_name',
            ],
            [
                'name' =>  'Bardghat',
                'district_name' =>  'Parasi',
                'link' =>  'https => //en.wikipedia.org/wiki/Parasi_district_name',
            ],
            [
                'name' =>  'Ratuwamai',
                'district_name' =>  'Morang',
                'link' =>  'https => //en.wikipedia.org/wiki/Morang_district_name',
            ],
            [
                'name' =>  'Gauriganga',
                'district_name' =>  'Kailali',
                'link' =>  'https => //en.wikipedia.org/wiki/Kailali_district_name',
            ],
            [
                'name' =>  'Maharajganj',
                'district_name' =>  'Kapilvastu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kapilvastu_district_name',
            ],
            [
                'name' =>  'Urlabari',
                'district_name' =>  'Morang',
                'link' =>  'https => //en.wikipedia.org/wiki/Morang_district_name',
            ],
            [
                'name' =>  'Mahagadhimai',
                'district_name' =>  'Bara',
                'link' =>  'https => //en.wikipedia.org/wiki/Bara_district_name',
            ],
            [
                'name' =>  'Bidur',
                'district_name' =>  'Nuwakot',
                'link' =>  'https => //en.wikipedia.org/wiki/Nuwakot_district_name',
            ],
            [
                'name' =>  'Madhyabindu',
                'district_name' =>  'Nawalpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Nawalpur_district_name',
            ],
            [
                'name' =>  'Punarbas',
                'district_name' =>  'Kanchanpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Kanchanpur_district_name',
            ],
            [
                'name' =>  'Belauri',
                'district_name' =>  'Kanchanpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Kanchanpur_district_name',
            ],
            [
                'name' =>  'Devdaha',
                'district_name' =>  'Rupandehi',
                'link' =>  'https => //en.wikipedia.org/wiki/Rupandehi_district_name',
            ],
            [
                'name' =>  'Gauradaha',
                'district_name' =>  'Jhapa',
                'link' =>  'https => //en.wikipedia.org/wiki/Jhapa_district_name',
            ],
            [
                'name' =>  'Rangeli',
                'district_name' =>  'Morang',
                'link' =>  'https => //en.wikipedia.org/wiki/Morang_district_name',
            ],
            [
                'name' =>  'Bhajani',
                'district_name' =>  'Kailali',
                'link' =>  'https => //en.wikipedia.org/wiki/Kailali_district_name',
            ],
            [
                'name' =>  'Ramdhuni',
                'district_name' =>  'Sunsari',
                'link' =>  'https => //en.wikipedia.org/wiki/Sunsari_district_name',
            ],
            [
                'name' =>  'Waling',
                'district_name' =>  'Syangja',
                'link' =>  'https => //en.wikipedia.org/wiki/Syangja_district_name',
            ],
            [
                'name' =>  'Golbazar',
                'district_name' =>  'Siraha',
                'link' =>  'https => //en.wikipedia.org/wiki/Siraha_district_name',
            ],
            [
                'name' =>  'Sunawarshi',
                'district_name' =>  'Morang',
                'link' =>  'https => //en.wikipedia.org/wiki/Morang_district_name',
            ],
            [
                'name' =>  'Garuda',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Tansen',
                'district_name' =>  'Palpa',
                'link' =>  'https => //en.wikipedia.org/wiki/Palpa_district_name',
            ],
            [
                'name' =>  'Mirchaiya',
                'district_name' =>  'Siraha',
                'link' =>  'https => //en.wikipedia.org/wiki/Siraha_district_name',
            ],
            [
                'name' =>  'Simraungadh',
                'district_name' =>  'Bara',
                'link' =>  'https => //en.wikipedia.org/wiki/Bara_district_name',
            ],
            [
                'name' =>  'Manara Shiswa',
                'district_name' =>  'Mahottari',
                'link' =>  'https => //en.wikipedia.org/wiki/Mahottari_district_name',
            ],
            [
                'name' =>  'Bedkot',
                'district_name' =>  'Kanchanpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Kanchanpur_district_name',
            ],
            [
                'name' =>  'Kalyanpur',
                'district_name' =>  'Siraha',
                'link' =>  'https => //en.wikipedia.org/wiki/Siraha_district_name',
            ],
            [
                'name' =>  'Gorkha',
                'district_name' =>  'Gorkha',
                'link' =>  'https => //en.wikipedia.org/wiki/Gorkha_district_name',
            ],
            [
                'name' =>  'Phidim',
                'district_name' =>  'Panchthar',
                'link' =>  'https => //en.wikipedia.org/wiki/Panchthar_district_name',
            ],
            [
                'name' =>  'Chaudandigadhi',
                'district_name' =>  'Udayapur',
                'link' =>  'https => //en.wikipedia.org/wiki/Udayapur_district_name',
            ],
            [
                'name' =>  'Ilam',
                'district_name' =>  'Ilam',
                'link' =>  'https => //en.wikipedia.org/wiki/Ilam_district_name',
            ],
            [
                'name' =>  'Shuklagandaki',
                'district_name' =>  'tanahu',
                'link' =>  'https => //en.wikipedia.org/wiki/tanahun_district_name',
            ],
            [
                'name' =>  'Godaita',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Lamahi',
                'district_name' =>  'Dang',
                'link' =>  'https => //en.wikipedia.org/wiki/Dang_Deukhuri_district_name',
            ],
            [
                'name' =>  'Dhangadimai',
                'district_name' =>  'Siraha',
                'link' =>  'https => //en.wikipedia.org/wiki/Siraha_district_name',
            ],
            [
                'name' =>  'Rupakot Majhuwagadhi',
                'district_name' =>  'Khotang',
                'link' =>  'https => //en.wikipedia.org/wiki/Khotang_district_name',
            ],
            [
                'name' =>  'Shuklaphanta',
                'district_name' =>  'Kanchanpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Kanchanpur_district_name',
            ],
            [
                'name' =>  'Bhangaha',
                'district_name' =>  'Mahottari',
                'link' =>  'https => //en.wikipedia.org/wiki/Mahottari_district_name',
            ],
            [
                'name' =>  'Paunauti',
                'district_name' =>  'Kavrepalanchok',
                'link' =>  'https => //en.wikipedia.org/wiki/Kavrepalanchok_district_name',
            ],
            [
                'name' =>  'Gujara',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Malangwa',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Chautara Sangachokgadhi',
                'district_name' =>  'Sindhupalchok',
                'link' =>  'https => //en.wikipedia.org/wiki/Sindhupalchowk_district_name',
            ],
            [
                'name' =>  'Madhuwan',
                'district_name' =>  'Bardiya',
                'link' =>  'https => //en.wikipedia.org/wiki/Bardiya_district_name',
            ],
            [
                'name' =>  'Sabaila',
                'district_name' =>  'Dhanusha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhanusa_district_name',
            ],
            [
                'name' =>  'Bhanu',
                'district_name' =>  'tanahu',
                'link' =>  'https => //en.wikipedia.org/wiki/tanahun_district_name',
            ],
            [
                'name' =>  'Hanumannagar Kankalini',
                'district_name' =>  'Saptari',
                'link' =>  'https => //en.wikipedia.org/wiki/Saptari_district_name',
            ],
            [
                'name' =>  'Dhanushadham',
                'district_name' =>  'Dhanusha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhanusa_district_name',
            ],
            [
                'name' =>  'Manthali',
                'district_name' =>  'Ramechhap',
                'link' =>  'https => //en.wikipedia.org/wiki/Ramechhap_district_name',
            ],
            [
                'name' =>  'Khadak',
                'district_name' =>  'Saptari',
                'link' =>  'https => //en.wikipedia.org/wiki/Saptari_district_name',
            ],
            [
                'name' =>  'Melamchi',
                'district_name' =>  'Sindhupalchok',
                'link' =>  'https => //en.wikipedia.org/wiki/Sindhupalchok_district_name',
            ],
            [
                'name' =>  'Balara',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Mithila Bihari',
                'district_name' =>  'Dhanusha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhanusa_district_name',
            ],
            [
                'name' =>  'Putalibazar',
                'district_name' =>  'Syangja',
                'link' =>  'https => //en.wikipedia.org/wiki/Syangja_district_name',
            ],
            [
                'name' =>  'Dakneshwari',
                'district_name' =>  'Saptari',
                'link' =>  'https => //en.wikipedia.org/wiki/Saptari_district_name',
            ],
            [
                'name' =>  'Thakurbaba',
                'district_name' =>  'Bardiya',
                'link' =>  'https => //en.wikipedia.org/wiki/Bardiya_district_name',
            ],
            [
                'name' =>  'Surunga',
                'district_name' =>  'Jhapa',
                'link' =>  'https => //en.wikipedia.org/wiki/Jhapa_district_name',
            ],
            [
                'name' =>  'Hariwan',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Gurbhakot',
                'district_name' =>  'Surkhet',
                'link' =>  'https => //en.wikipedia.org/wiki/Surkhet_district_name',
            ],
            [
                'name' =>  'Sitganga',
                'district_name' =>  'Arghakhanchi',
                'link' =>  'https => //en.wikipedia.org/wiki/Arghakhanchi_district_name',
            ],
            [
                'name' =>  'Bodebarsain',
                'district_name' =>  'Saptari',
                'link' =>  'https => //en.wikipedia.org/wiki/Saptari_district_name',
            ],
            [
                'name' =>  'Kolhabi',
                'district_name' =>  'Bara',
                'link' =>  'https => //en.wikipedia.org/wiki/Bara_district_name',
            ],
            [
                'name' =>  'Shahidnagar',
                'district_name' =>  'Dhanusha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhanusa_district_name',
            ],
            [
                'name' =>  'Brindaban',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Devchuli',
                'district_name' =>  'Nawalpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Nawalpur_district_name',
            ],
            [
                'name' =>  'Chhireshwarnath',
                'district_name' =>  'Dhanusha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhanusa_district_name',
            ],
            [
                'name' =>  'Belaka',
                'district_name' =>  'Udayapur',
                'link' =>  'https => //en.wikipedia.org/wiki/Udayapur_district_name',
            ],
            [
                'name' =>  'Balawa',
                'district_name' =>  'Mahottari',
                'link' =>  'https => //en.wikipedia.org/wiki/Mahottari_district_name',
            ],
            [
                'name' =>  'Kabilasi',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Kalika',
                'district_name' =>  'Chitwan',
                'link' =>  'https => //en.wikipedia.org/wiki/Chitwan_district_name',
            ],
            [
                'name' =>  'Thaha',
                'district_name' =>  'Makawanpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Makwanpur_district_name',
            ],
            [
                'name' =>  'Dullu',
                'district_name' =>  'Dailekh',
                'link' =>  'https => //en.wikipedia.org/wiki/Dailekh_district_name',
            ],
            [
                'name' =>  'Ishnath',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Bheriganga',
                'district_name' =>  'Surkhet',
                'link' =>  'https => //en.wikipedia.org/wiki/Surkhet_district_name',
            ],
            [
                'name' =>  'Sandhikharka',
                'district_name' =>  'Arghakhanchi',
                'link' =>  'https => //en.wikipedia.org/wiki/Arghakhanchi_district_name',
            ],
            [
                'name' =>  'Rajpur',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Gadhimai',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Bagmati',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Kankai',
                'district_name' =>  'Jhapa',
                'link' =>  'https => //en.wikipedia.org/wiki/Jhapa_district_name',
            ],
            [
                'name' =>  'Belkotgadhi',
                'district_name' =>  'Nuwakot',
                'link' =>  'https => //en.wikipedia.org/wiki/Nuwakot_district_name',
            ],
            [
                'name' =>  'Bahudarmai',
                'district_name' =>  'Parsa',
                'link' =>  'https => //en.wikipedia.org/wiki/Parsa_district_name',
            ],
            [
                'name' =>  'Kushma',
                'district_name' =>  'Parbat',
                'link' =>  'https => //en.wikipedia.org/wiki/Parbat_district_name',
            ],
            [
                'name' =>  'Loharpatti',
                'district_name' =>  'Mahottari',
                'link' =>  'https => //en.wikipedia.org/wiki/Mahottari_district_name',
            ],
            [
                'name' =>  'Besisahar',
                'district_name' =>  'Lamjung',
                'link' =>  'https => //en.wikipedia.org/wiki/Lamjung_district_name',
            ],
            [
                'name' =>  'Mahakali Kanchanpur',
                'district_name' =>  'Kanchanpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Kanchanpur_district_name',
            ],
            [
                'name' =>  'Purchaudi',
                'district_name' =>  'Baitadi',
                'link' =>  'https => //en.wikipedia.org/wiki/Baitadi_district_name',
            ],
            [
                'name' =>  'Hansapur',
                'district_name' =>  'Dhanusha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhanusa_district_name',
            ],
            [
                'name' =>  'Kamala',
                'district_name' =>  'Dhanusha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhanusa_district_name',
            ],
            [
                'name' =>  'Pyuthan',
                'district_name' =>  'Pyuthan',
                'link' =>  'https => //en.wikipedia.org/wiki/Pyuthan_district_name',
            ],
            [
                'name' =>  'Katahariya',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Palungtar',
                'district_name' =>  'Gorkha',
                'link' =>  'https => //en.wikipedia.org/wiki/Gorkha_district_name',
            ],
            [
                'name' =>  'Parsagadhi',
                'district_name' =>  'Parsa',
                'link' =>  'https => //en.wikipedia.org/wiki/Parsa_district_name',
            ],
            [
                'name' =>  'Shambhunath',
                'district_name' =>  'Saptari',
                'link' =>  'https => //en.wikipedia.org/wiki/Saptari_district_name',
            ],
            [
                'name' =>  'Panchkhal',
                'district_name' =>  'Kavrepalanchok',
                'link' =>  'https => //en.wikipedia.org/wiki/Kavrepalanchok_district_name',
            ],
            [
                'name' =>  'Madi',
                'district_name' =>  'Chitwan',
                'link' =>  'https => //en.wikipedia.org/wiki/Chitwan_district_name',
            ],
            [
                'name' =>  'Sukhipur',
                'district_name' =>  'Siraha',
                'link' =>  'https => //en.wikipedia.org/wiki/Siraha_district_name',
            ],
            [
                'name' =>  'Paroha',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Haripur',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Ganeshman Charanath',
                'district_name' =>  'Dhanusha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhanusa_district_name',
            ],
            [
                'name' =>  'Galyang',
                'district_name' =>  'Syangja',
                'link' =>  'https => //en.wikipedia.org/wiki/Syangja_district_name',
            ],
            [
                'name' =>  'Dhankuta',
                'district_name' =>  'Dhankuta',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhankuta_district_name',
            ],
            [
                'name' =>  'Phatuwa Bijayapur',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Baudhimai',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Bangad Kupinde',
                'district_name' =>  'Salyan',
                'link' =>  'https => //en.wikipedia.org/wiki/Salyan_district_name,_Nepal',
            ],
            [
                'name' =>  'Haripurwa',
                'district_name' =>  'Sarlahi',
                'link' =>  'https => //en.wikipedia.org/wiki/Sarlahi_district_name',
            ],
            [
                'name' =>  'Rampur',
                'district_name' =>  'Palpa',
                'link' =>  'https => //en.wikipedia.org/wiki/Palpa_district_name',
            ],
            [
                'name' =>  'Chhedagad',
                'district_name' =>  'Jajarkot',
                'link' =>  'https => //en.wikipedia.org/wiki/Jajarkot_district_name',
            ],
            [
                'name' =>  'Kanchanrup',
                'district_name' =>  'Saptari',
                'link' =>  'https => //en.wikipedia.org/wiki/Saptari_district_name',
            ],
            [
                'name' =>  'Parshuram',
                'district_name' =>  'Dadeldhura',
                'link' =>  'https => //en.wikipedia.org/wiki/Dadeldhura_district_name',
            ],
            [
                'name' =>  'Nagarain',
                'district_name' =>  'Dhanusha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhanusa_district_name',
            ],
            [
                'name' =>  'Dasharathchand',
                'district_name' =>  'Baitadi',
                'link' =>  'https => //en.wikipedia.org/wiki/Baitadi_district_name',
            ],
            [
                'name' =>  'Nijgadh',
                'district_name' =>  'Bara',
                'link' =>  'https => //en.wikipedia.org/wiki/Bara_district_name',
            ],
            [
                'name' =>  'Madhav Narayan',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Gaur',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Pacharauta',
                'district_name' =>  'Bara',
                'link' =>  'https => //en.wikipedia.org/wiki/Bara_district_name',
            ],
            [
                'name' =>  'Bagchaur',
                'district_name' =>  'Salyan',
                'link' =>  'https => //en.wikipedia.org/wiki/Salyan_district_name,_Nepal',
            ],
            [
                'name' =>  'Sanphebagar',
                'district_name' =>  'Achham',
                'link' =>  'https => //en.wikipedia.org/wiki/Achham_district_name',
            ],
            [
                'name' =>  'Shaarda',
                'district_name' =>  'Salyan',
                'link' =>  'https => //en.wikipedia.org/wiki/Salyan_district_name,_Nepal',
            ],
            [
                'name' =>  'Aathabiskot',
                'district_name' =>  'Western Rukum',
                'link' =>  'https => //en.wikipedia.org/wiki/West_Rukum_district_name',
            ],
            [
                'name' =>  'Bheri',
                'district_name' =>  'Jajarkot',
                'link' =>  'https => //en.wikipedia.org/wiki/Jajarkot_district_name',
            ],
            [
                'name' =>  'Beni',
                'district_name' =>  'Myagdi',
                'link' =>  'https => //en.wikipedia.org/wiki/Myagdi_district_name',
            ],
            [
                'name' =>  'Bungal',
                'district_name' =>  'Bajhang',
                'link' =>  'https => //en.wikipedia.org/wiki/Bajhang_district_name',
            ],
            [
                'name' =>  'Galkot',
                'district_name' =>  'Baglung',
                'link' =>  'https => //en.wikipedia.org/wiki/Baglung_district_name',
            ],
            [
                'name' =>  'Dipayal Silgadhi',
                'district_name' =>  'Doti',
                'link' =>  'https => //en.wikipedia.org/wiki/Doti_district_name',
            ],
            [
                'name' =>  'Deumai',
                'district_name' =>  'Ilam',
                'link' =>  'https => //en.wikipedia.org/wiki/Ilam_district_name',
            ],
            [
                'name' =>  'Pokhariya',
                'district_name' =>  'Parsa',
                'link' =>  'https => //en.wikipedia.org/wiki/Parsa_district_name',
            ],
            [
                'name' =>  'Musikot',
                'district_name' =>  'Gulmi',
                'link' =>  'https => //en.wikipedia.org/wiki/Gulmi_district_name',
            ],
            [
                'name' =>  'Rolpa',
                'district_name' =>  'Rolpa',
                'link' =>  'https => //en.wikipedia.org/wiki/Rolpa_district_name',
            ],
            [
                'name' =>  'Mandandeupur',
                'district_name' =>  'Kavrepalanchok',
                'link' =>  'https => //en.wikipedia.org/wiki/Kavrepalanchok_district_name',
            ],
            [
                'name' =>  'Bhumikasthan',
                'district_name' =>  'Arghakhanchi',
                'link' =>  'https => //en.wikipedia.org/wiki/Arghakhanchi_district_name',
            ],
            [
                'name' =>  'Mai',
                'district_name' =>  'Ilam',
                'link' =>  'https => //en.wikipedia.org/wiki/Ilam_district_name',
            ],
            [
                'name' =>  'Resunga',
                'district_name' =>  'Gulmi',
                'link' =>  'https => //en.wikipedia.org/wiki/Gulmi_district_name',
            ],
            [
                'name' =>  'Mangalsen',
                'district_name' =>  'Achham',
                'link' =>  'https => //en.wikipedia.org/wiki/Achham_district_name',
            ],
            [
                'name' =>  'Bideha',
                'district_name' =>  'Dhanusha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhanusa_district_name',
            ],
            [
                'name' =>  'Panchapuri',
                'district_name' =>  'Surkhet',
                'link' =>  'https => //en.wikipedia.org/wiki/Surkhet_district_name',
            ],
            [
                'name' =>  'Dhulikhel',
                'district_name' =>  'Kavrepalanchok',
                'link' =>  'https => //en.wikipedia.org/wiki/Kavrepalanchok_district_name',
            ],
            [
                'name' =>  'Dewahi Gonahi',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Letang Bhogateni',
                'district_name' =>  'Morang',
                'link' =>  'https => //en.wikipedia.org/wiki/Morang_district_name',
            ],
            [
                'name' =>  'Shikhar',
                'district_name' =>  'Doti',
                'link' =>  'https => //en.wikipedia.org/wiki/Doti_district_name',
            ],
            [
                'name' =>  'Aurahi',
                'district_name' =>  'Mahottari',
                'link' =>  'https => //en.wikipedia.org/wiki/Mahottari_district_name',
            ],
            [
                'name' =>  'Shadanand',
                'district_name' =>  'Bhojpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Bhojpur_district_name,_Nepal',
            ],
            [
                'name' =>  'Bhimeshwar',
                'district_name' =>  'Dolakha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dolakha_district_name',
            ],
            [
                'name' =>  'Jaimini',
                'district_name' =>  'Baglung',
                'link' =>  'https => //en.wikipedia.org/wiki/Baglung_district_name',
            ],
            [
                'name' =>  'Bhimad',
                'district_name' =>  'tanahu',
                'link' =>  'https => //en.wikipedia.org/wiki/tanahun_district_name',
            ],
            [
                'name' =>  'Rajdevi',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Khandbari',
                'district_name' =>  'Sankhuwasabha',
                'link' =>  'https => //en.wikipedia.org/wiki/Sankhuwasabha_district_name',
            ],
            [
                'name' =>  'Dhunibeshi',
                'district_name' =>  'Dhading',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhading_district_name',
            ],
            [
                'name' =>  'Matihani',
                'district_name' =>  'Mahottari',
                'link' =>  'https => //en.wikipedia.org/wiki/Mahottari_district_name',
            ],
            [
                'name' =>  'Karjanha',
                'district_name' =>  'Siraha',
                'link' =>  'https => //en.wikipedia.org/wiki/Siraha_district_name',
            ],
            [
                'name' =>  'Swargadwari',
                'district_name' =>  'Pyuthan',
                'link' =>  'https => //en.wikipedia.org/wiki/Pyuthan_district_name',
            ],
            [
                'name' =>  'Patan',
                'district_name' =>  'Baitadi',
                'link' =>  'https => //en.wikipedia.org/wiki/Baitadi_district_name',
            ],
            [
                'name' =>  'Lekbeshi',
                'district_name' =>  'Surkhet',
                'link' =>  'https => //en.wikipedia.org/wiki/Surkhet_district_name',
            ],
            [
                'name' =>  'Ramgopalpur',
                'district_name' =>  'Mahottari',
                'link' =>  'https => //en.wikipedia.org/wiki/Mahottari_district_name',
            ],
            [
                'name' =>  'Halesi Tuwachung',
                'district_name' =>  'Khotang',
                'link' =>  'https => //en.wikipedia.org/wiki/Khotang_district_name',
            ],
            [
                'name' =>  'Namobuddha',
                'district_name' =>  'Kavrepalanchok',
                'link' =>  'https => //en.wikipedia.org/wiki/Kavrepalanchok_district_name',
            ],
            [
                'name' =>  'Aathabis',
                'district_name' =>  'Dailekh',
                'link' =>  'https => //en.wikipedia.org/wiki/Dailekh_district_name',
            ],
            [
                'name' =>  'Ramechhap',
                'district_name' =>  'Ramechhap',
                'link' =>  'https => //en.wikipedia.org/wiki/Ramechhap_district_name',
            ],
            [
                'name' =>  'Siddhicharan',
                'district_name' =>  'Okhaldhunga',
                'link' =>  'https => //en.wikipedia.org/wiki/Okhaldhunga_district_name',
            ],
            [
                'name' =>  'Panchadewal Binayak',
                'district_name' =>  'Achham',
                'link' =>  'https => //en.wikipedia.org/wiki/Achham_district_name',
            ],
            [
                'name' =>  'Chaurjahari',
                'district_name' =>  'Western Rukum',
                'link' =>  'https => //en.wikipedia.org/wiki/West_Rukum_district_name',
            ],
            [
                'name' =>  'Chainpur',
                'district_name' =>  'Sankhuwasabha',
                'link' =>  'https => //en.wikipedia.org/wiki/Sankhuwasabha_district_name',
            ],
            [
                'name' =>  'Bhojpur',
                'district_name' =>  'Bhojpur',
                'link' =>  'https => //en.wikipedia.org/wiki/Bhojpur_district_name,_Nepal',
            ],
            [
                'name' =>  'Narayan',
                'district_name' =>  'Dailekh',
                'link' =>  'https => //en.wikipedia.org/wiki/Dailekh_district_name',
            ],
            [
                'name' =>  'Sundarbazar',
                'district_name' =>  'Lamjung',
                'link' =>  'https => //en.wikipedia.org/wiki/Lamjung_district_name',
            ],
            [
                'name' =>  'Barhabise',
                'district_name' =>  'Sindhupalchok',
                'link' =>  'https => //en.wikipedia.org/wiki/Sindhupalchok_district_name',
            ],
            [
                'name' =>  'Maulapur',
                'district_name' =>  'Rautahat',
                'link' =>  'https => //en.wikipedia.org/wiki/Rautahat_district_name',
            ],
            [
                'name' =>  'Taplejung(Phungling)',
                'district_name' =>  'Taplejung',
                'link' =>  'https => //en.wikipedia.org/wiki/Taplejung_district_name',
            ],
            [
                'name' =>  'Dhorpatan',
                'district_name' =>  'Baglung',
                'link' =>  'https => //en.wikipedia.org/wiki/Baglung_district_name',
            ],
            [
                'name' =>  'Chamunda Bindrasaini',
                'district_name' =>  'Dailekh',
                'link' =>  'https => //en.wikipedia.org/wiki/Dailekh_district_name',
            ],
            [
                'name' =>  'Chapakot',
                'district_name' =>  'Syangja',
                'link' =>  'https => //en.wikipedia.org/wiki/Syangja_district_name',
            ],
            [
                'name' =>  'Nalgad',
                'district_name' =>  'Jajarkot',
                'link' =>  'https => //en.wikipedia.org/wiki/Jajarkot_district_name',
            ],
            [
                'name' =>  'Bhirkot',
                'district_name' =>  'Syangja',
                'link' =>  'https => //en.wikipedia.org/wiki/Syangja_district_name',
            ],
            [
                'name' =>  'Shankharapur',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Phalewas',
                'district_name' =>  'Parbat',
                'link' =>  'https => //en.wikipedia.org/wiki/Parbat_district_name',
            ],
            [
                'name' =>  'Dakshinkali',
                'district_name' =>  'Kathmandu',
                'link' =>  'https => //en.wikipedia.org/wiki/Kathmandu_district_name',
            ],
            [
                'name' =>  'Kamalbazar',
                'district_name' =>  'Achham',
                'link' =>  'https => //en.wikipedia.org/wiki/Achham_district_name',
            ],
            [
                'name' =>  'Madhya Nepal',
                'district_name' =>  'Lamjung',
                'link' =>  'https => //en.wikipedia.org/wiki/Lamjung_district_name',
            ],
            [
                'name' =>  'Melauli',
                'district_name' =>  'Baitadi',
                'link' =>  'https => //en.wikipedia.org/wiki/Baitadi_district_name',
            ],
            [
                'name' =>  'Jaya Prithvi',
                'district_name' =>  'Bajhang',
                'link' =>  'https => //en.wikipedia.org/wiki/Bajhang_district_name',
            ],
            [
                'name' =>  'Pakhribas',
                'district_name' =>  'Dhankuta',
                'link' =>  'https => //en.wikipedia.org/wiki/Dhankuta_district_name',
            ],
            [
                'name' =>  'Budhiganga',
                'district_name' =>  'Bajura',
                'link' =>  'https => //en.wikipedia.org/wiki/Bajura_district_name',
            ],
            [
                'name' =>  'Amargadhi',
                'district_name' =>  'Dadeldhura',
                'link' =>  'https => //en.wikipedia.org/wiki/Dadeldhura_district_name',
            ],
            [
                'name' =>  'Mahakali',
                'district_name' =>  'Darchula',
                'link' =>  'https => //en.wikipedia.org/wiki/Darchula_district_name',
            ],
            [
                'name' =>  'Solu Dudhkunda',
                'district_name' =>  'Solukhumbu',
                'link' =>  'https => //en.wikipedia.org/wiki/Solukhumbu_district_name',
            ],
            [
                'name' =>  'Khandachakra',
                'district_name' =>  'Kalikot',
                'link' =>  'https => //en.wikipedia.org/wiki/Kalikot_district_name',
            ],
            [
                'name' =>  'Chhayanath Rara',
                'district_name' =>  'Mugu',
                'link' =>  'https => //en.wikipedia.org/wiki/Mugu_district_name',
            ],
            [
                'name' =>  'Myanglung',
                'district_name' =>  'Terhathum',
                'link' =>  'https => //en.wikipedia.org/wiki/Terhathum_district_name',
            ],
            [
                'name' =>  'Chandannath',
                'district_name' =>  'Jumla',
                'link' =>  'https => //en.wikipedia.org/wiki/Jumla_district_name',
            ],
            [
                'name' =>  'Rainas',
                'district_name' =>  'Lamjung',
                'link' =>  'https => //en.wikipedia.org/wiki/Lamjung_district_name',
            ],
            [
                'name' =>  'Dharmadevi',
                'district_name' =>  'Sankhuwasabha',
                'link' =>  'https => //en.wikipedia.org/wiki/Sankhuwasabha_district_name',
            ],
            [
                'name' =>  'Panchkhapan',
                'district_name' =>  'Sankhuwasabha',
                'link' =>  'https => //en.wikipedia.org/wiki/Sankhuwasabha_district_name',
            ],
            [
                'name' =>  'Laligurans',
                'district_name' =>  'Terhathum',
                'link' =>  'https => //en.wikipedia.org/wiki/Terhathum_district_name',
            ],
            [
                'name' =>  'Raskot',
                'district_name' =>  'Kalikot',
                'link' =>  'https => //en.wikipedia.org/wiki/Kalikot_district_name',
            ],
            [
                'name' =>  'Tilagupha',
                'district_name' =>  'Kalikot',
                'link' =>  'https => //en.wikipedia.org/wiki/Kalikot_district_name',
            ],
            [
                'name' =>  'Jiri',
                'district_name' =>  'Dolakha',
                'link' =>  'https => //en.wikipedia.org/wiki/Dolakha_district_name',
            ],
            [
                'name' =>  'Madi Sankhuwasabha',
                'district_name' =>  'Sankhuwasabha',
                'link' =>  'https => //en.wikipedia.org/wiki/Sankhuwasabha_district_name',
            ],
            [
                'name' =>  'Tripura Sundari',
                'district_name' =>  'Dolpa',
                'link' =>  'https => //en.wikipedia.org/wiki/Dolpa_district_name',
            ],
            [
                'name' =>  'Thuli Bheri',
                'district_name' =>  'Dolpa',
                'link' =>  'https => //en.wikipedia.org/wiki/Dolpa_district_name',
            ],
        ];

        DB::table('municipalities')->insert($municipalities);
    }
}
