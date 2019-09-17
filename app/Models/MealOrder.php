<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealOrder extends Model
{
    public function meal_rate(){
        return $this->belongsTo('App\Models\MealRate');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
