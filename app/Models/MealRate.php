<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealRate extends Model
{
    public function meal_order(){
        return $this->belongsTo('App\Models\MealOrder');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function role_type(){
        return $this->belongsTo('App\Models\RoleType');
    }
}
