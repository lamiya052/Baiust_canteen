<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\MealOrder;
use App\Models\MealRate;
use Carbon\Carbon;
use Auth;
class AdminMealOrderController extends Controller
{

    public function index()
    {
        $meal_orders = MealOrder::all();
//        if(request()->get('from_date')){
//            $from_date = request()->get('from_date');
//            $to_date  = request()->get('to_date');
//        }else{
//            $from_date = Carbon::now()->startOfMonth();
//            $to_date = Carbon::now()->endOfMonth();
//        }
//        $meal_orders = MealOrder::where('created_at', '=>',$from_date)
//            ->where('created_at', '=>',$to_date)->where('user_id',Auth::user()->id)
//            ->orderBy('created_at','asc')
//            ->get();
        return view('admin.meal_order.index',compact('meal_orders'));
    }
    public function create(){
        $meal_rates = MealRate::all();
        return view('admin.meal_order.create',compact('meal_rates'));
    }

}
