<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messanger extends Model
{
    protected $guarded=[];
    public function sender()
    {
        return $this->belongsTo('App\User');
    }

    public function receiver()
    {
        return $this->belongsTo('App\User', 'receiver_id', 'id');
       
    }
}