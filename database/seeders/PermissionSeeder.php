<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // country table
         Permission::create(['name' => 'Index-Country']);
         Permission::create(['name' => 'Create-Country']);
         Permission::create(['name' => 'Edit-Country']);
         Permission::create(['name' => 'Delete-Country']);
         // City table
         Permission::create(['name' => 'Index-City']);
         Permission::create(['name' => 'Create-City']);
         Permission::create(['name' => 'Edit-City']);
         Permission::create(['name' => 'Delete-City']);
         // AnotherExpense table
         Permission::create(['name' => 'Index-AnotherExpense']);
         Permission::create(['name' => 'Create-AnotherExpense']);
         Permission::create(['name' => 'Edit-AnotherExpense']);
         Permission::create(['name' => 'Delete-AnotherExpense']);
         // Asset table
         Permission::create(['name' => 'Index-Asset']);
         Permission::create(['name' => 'Create-Asset']);
         Permission::create(['name' => 'Edit-Asset']);
         Permission::create(['name' => 'Delete-Asset']);
         // Attachement table
         Permission::create(['name' => 'Index-Attachement']);
         Permission::create(['name' => 'Create-Attachement']);
         Permission::create(['name' => 'Edit-Attachement']);
         Permission::create(['name' => 'Delete-Attachement']);
         // Car table
         Permission::create(['name' => 'Index-Car']);
         Permission::create(['name' => 'Create-Car']);
         Permission::create(['name' => 'Edit-Car']);
         Permission::create(['name' => 'Delete-Car']);
         // CatchReceipt table
         Permission::create(['name' => 'Index-CatchReceipt']);
         Permission::create(['name' => 'Create-CatchReceipt']);
         Permission::create(['name' => 'Edit-CatchReceipt']);
         Permission::create(['name' => 'Delete-CatchReceipt']);
         // Irregularity table
         Permission::create(['name' => 'Index-Irregularity']);
         Permission::create(['name' => 'Create-Irregularity']);
         Permission::create(['name' => 'Edit-Irregularity']);
         Permission::create(['name' => 'Delete-Irregularity']);
          // User table
          Permission::create(['name' => 'Index-User']);
          Permission::create(['name' => 'Create-User']);
          Permission::create(['name' => 'Edit-User']);
          Permission::create(['name' => 'Delete-User']);

    }
}
