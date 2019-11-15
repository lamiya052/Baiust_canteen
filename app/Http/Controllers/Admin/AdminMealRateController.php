<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\BazarCost;
use App\Models\MealRate;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class AdminMealRateController extends Controller
{
    public function index()
    {
        $menus = MealRate::all();
        return view('admin.menu.index',compact('menus'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.menu.create',compact('users'));
    }

    public function store(Request $request)
    {
        $menu = new MealRate();
        $menu->meal_rate_name= $request->meal_rate_name;
        $menu->breakfast_menu= $request->breakfast_menu;
        $menu->breakfast_rate= $request->breakfast_rate;
        $menu->lunch_menu= $request->lunch_menu;
        $menu->lunch_rate= $request->lunch_rate;
        $menu->dinner_menu= $request->dinner_menu;
        $menu->dinner_rate= $request->dinner_rate;
        $menu->save();
        return redirect(route('admin.menu.index'));


    }

    public function edit($id)
    {
        $menu = MealRate::find($id);
        return view('admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $menu = MealRate::find($id);
        $menu->meal_rate_name = $request->meal_rate_name;
        $menu->breakfast_menu = $request->breakfast_menu;
        $menu->breakfast_rate = $request->breakfast_rate;
        $menu->lunch_menu = $request->lunch_menu;
        $menu->lunch_rate = $request->lunch_rate;
        $menu->dinner_menu = $request->dinner_menu;
        $menu->dinner_rate = $request->dinner_rate;
        $menu->update();
        return redirect(route('admin.menu.index'));
    }
}
