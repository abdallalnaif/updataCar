<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 - فلسطين
        City::create(['name' => 'الشمال','street' => 'جباليا','country_id' => '1']);
        City::create(['name' => 'غزة','street' => 'الرمال','country_id' => '1']);
        City::create(['name' => 'الوسطى','street' => 'النصيرات','country_id' => '1']);
        City::create(['name' => 'خانيونس','street' => 'بني سهيلة','country_id' => '1']);
        City::create(['name' => 'رفح','street' => 'حي البرازيل','country_id' => '1']);

        // 2 - مصر
        City::create(['name' => 'القاهرة','street' => 'شارع1','country_id' => '2']);
        City::create(['name' => 'الاسكندرية','street' => 'شارع2','country_id' => '2']);
        City::create(['name' => 'الاسماعيلية','street' => 'شارع3','country_id' => '2']);
        City::create(['name' => 'المنصورة','street' => 'شارع4','country_id' => '2']);
        City::create(['name' => 'بورسعيد','street' => 'شارع5','country_id' => '2']);

        // 3 - سوريا
        City::create(['name' => 'حمص','street' => 'شارع1','country_id' => '3']);
        City::create(['name' => 'دمشق','street' => 'شارع2','country_id' => '3']);

        //  4 - لبنان
        City::create(['name' => 'بيروت','street' => 'شارع1','country_id' => '4']);

        // 5 - الاردن
        City::create(['name' => 'عمان','street' => 'شارع1','country_id' => '5']);
        City::create(['name' => 'اربد','street' => 'شارع1','country_id' => '5']);
    }
}
