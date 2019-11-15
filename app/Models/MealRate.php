<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealRate extends Model
{
    public function role_types(){
        return $this->hasMany('App\Models\RoleType', 'role_type_id');
    }
}
