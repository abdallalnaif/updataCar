<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // roles
         Role::create(['name' => 'الآدمن']);
         Role::create(['name' => 'محاسب']);
         Role::create(['name' => 'مورد']);
         Role::create(['name' => 'مستثمر']);
         Role::create(['name' => 'موظف']);
         Role::create(['name' => 'زبون']);
         Role::create(['name' => 'اعلامي']);

    }
}
