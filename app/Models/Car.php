<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }


    public function color()
    {
        return $this->belongsTo(Color::class);
    }


    public function year()
    {
        return $this->belongsTo(Year::class);
    }


    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
