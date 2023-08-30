<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function attachments(){
        return $this->morphMany(Attachment::class , 'actor' , 'actor_type' , 'actor_id' , 'id');
    }

}
