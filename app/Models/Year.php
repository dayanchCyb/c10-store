<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
