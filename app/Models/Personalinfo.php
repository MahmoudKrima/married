<?php

namespace App\Models;

use App\Models\city;
use App\Models\Nationality;
use App\Models\originalyCountry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personalinfo extends Model
{
    use HasFactory;
    protected $fillable = ['age','liveIN','nationality','originalyCountry','city','userID'];


    public function users(){
        return $this->hasMany(User::class);
    }

    public function citym(){
        return $this->hasOne(city::class,'id','city');
    }

    public function national(){
        return $this->hasOne(Nationality::class,'id','nationality');
    }

    public function original_Country(){
        return $this->hasOne(originalyCountry::class,'id','originalyCountry');
    }
}
