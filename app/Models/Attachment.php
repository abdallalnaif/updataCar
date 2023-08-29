<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    public function actor(){
        return $this->morphTo();
    }

    // public function actors(){
    //     return $this->morphToMany();
    // }

}
