<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.Dashboard');
    }
    public function getlogout(){
        Auth::logout();
        return redirect()->route('user.sign_in');
    }
}
