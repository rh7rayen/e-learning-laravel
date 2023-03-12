<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiment extends Model
{
    protected $guarded=[];
    public function Paiment() {
        return $this->hasMany(Paiment::class,'user_id');
    }
}
