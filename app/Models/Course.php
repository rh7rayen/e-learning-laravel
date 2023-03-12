<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','description','dificulties','cat_id','formateur_id','image'];

    public function files()
    {
        return $this->hasMany(File::class,'cours_id');
    }
    public function panier2() {
        return $this->hasMany(Panier::class,'panier_id');
    }
    public function notification() {
        return $this->hasMany(Notification::class,'coure_id');
    }
}
