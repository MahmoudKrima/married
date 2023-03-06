<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class originalyCountry extends Model
{
    use HasFactory;

    public function perfonalinfo(){
        return $this->belongsTo(Personalinfo::class);
    }
}
