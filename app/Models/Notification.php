<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $guarded=[];
    public function notification() {
        return $this->belongsTo(Notification::class,'coure_id');
    }
}

