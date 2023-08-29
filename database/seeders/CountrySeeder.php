<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Country::create(['name' => 'فلسطين','abbr' => 'PSE','code' => '97']);
        Country::create(['name' => 'مصر','abbr' => 'EGY','code' => '20']);
        Country::create(['name' => 'سوريا','abbr' => 'SYR','code' => '963']);
        Country::create(['name' => 'لبنان','abbr' => 'LBN','code' => '961']);
        Country::create(['name' => 'الأردن','abbr' => 'JOR','code' => '962']);

    }
}
