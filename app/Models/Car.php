<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function investor(){
        return $this->belongsTo(Investor::class);
    }

}
