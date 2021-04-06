<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_users extends Model
{
    use HasFactory;
    public function getRole(){
        return $this->hasOne('App\Models\User');
    }
}
