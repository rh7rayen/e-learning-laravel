<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $guarded=[];
    public function panier() {
        return $this->belongsTo(User::class,'panier_id');
    }
    public function panier2() {
        return $this->belongsTo(Course::class,'panier_id');
    }
}
