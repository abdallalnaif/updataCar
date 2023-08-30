<?php

namespace Database\Seeders;

use App\Models\Attachment;
use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = new Car();

        $cars-> type = 'BMW';
        $cars-> license = '0-123-45';
        $cars-> status = 'Good';
        $cars->  rental_price = '100';
        $cars->  gear_type= 'auto';
        $cars->  user_id = '1';

        $cars->save();

        $attachments = new Attachment();
        $attachments->url ='AdminCar.png';
        $attachments->type = 'Image';
        $attachments->actor()->associate($cars);
        $attachments->save();


    }
}
