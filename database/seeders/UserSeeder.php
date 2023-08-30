<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = new User();

        $users-> email = 'admin2@admin.com';
        $users-> password = Hash::make('123456');
        $users-> first_name = 'محمد';
        $users-> last_name = 'عادل';
        $users-> identity = '123456789';
        $users-> mobile = '0599123456';
        $users-> address = 'عمارة القدس';
        $users-> birth_date = '2000-01-01';
        $users-> gender = 'Male';
        $users-> status = 'Active';
        $users-> city_id = '1';
        $users->save();

        $attachments = new Attachment();
        $attachments->url ='AdminLTELogo.png';
        $attachments->type = 'Image';
        $attachments->actor()->associate($users);
        $attachments->save();
    }
}
