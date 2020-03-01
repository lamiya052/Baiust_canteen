<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserType;
use App\Models\Department;
use App\User;
use Validator;
use Session;
class UserController extends Controller
{
    public function beforeGetRegister(){
        $user_types = UserType::all();
        $departments = Department::all();
        return view('auth.register',compact('user_types','departments'));


    }

    public function postRegister(Request $request)
    {
            $user = new User();
            $user->role_type_id = 2;
            $user->user_type_id = $request->user_type_id;
            $user->department_id = $request->department_id;
            $user->full_name = $request->full_name;

            if ($request->full_name){
                $username = strtolower(str_replace(' ', '_', $request->full_name));
            }
            $user_check = User::where('username', $username)->first();

            if(!empty($user_check)){
                $username = $username.rand(1,100);
            }


            $user->username = $username;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user['user_type_id'] = $request->user_type_id;
            $user['department_id'] = $request->department_id;


            $user->save();

            $flash_status = 'success';
            $flash_message = 'User successfully registered.';
            $redirect_url = redirect()->route('admin.index');
            $data_status = true;



        if(isset($user)){
            Auth::login($user);
        }
        Session::flash($flash_status, $flash_message);
        return $redirect_url;

    }

    public function getLogin(){
        if(empty(Auth::user())){
            return view('auth.login');
        }else {
            return redirect()->route('admin.index');
        }
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $flash_status = 'success';
            $data_status = true;
            $flash_message = 'Signed in successfully.';
            return redirect()->route('admin.index');

        } else {
            $flash_status = 'error';
            $data_status = false;
            $flash_message = 'Email or password is incorrect';
            return redirect()->route('user.sign_in');
        }


    }

}
