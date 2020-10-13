<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    use HasFactory;

    public function shareholder_name(){
        return $this->belongsTo('App\Models\User','shareholder_id');
    }
}
