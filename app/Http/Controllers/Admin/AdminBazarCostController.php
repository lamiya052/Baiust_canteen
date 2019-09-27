<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\BazarCost;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;


class AdminBazarCostController extends Controller
{
   public function index()
   {
       $bazar_costs = Bazarcost::all();
       return view('admin.bazar_cost.index',compact('bazar_costs'));
   }

   public function create()
   {
       $users = User::all();
       return view('admin.bazar_cost.create',compact('users'));
   }


    public function store()
    {
        $bazar_cost = new BazarCost();
        $bazar_cost->daily_cost = $request->daily_cost;
        $bazar_cost->cost_details = $request->cost_details;
        $bazar_cost->save();


    }

    public function update()
    {

    }
}
