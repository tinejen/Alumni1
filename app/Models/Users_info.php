<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_infos extends Model
{
    use HasFactory;
    protected $table = "users_infos";
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
