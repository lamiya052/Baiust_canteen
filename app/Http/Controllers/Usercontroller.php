<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function beforeGetRegister(){
        $user_types = UserType::all();
        return view('auth.register',compact('user_types'));

    }

    public function postRegister(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|required_with:password',
        ]);
        if ($validator->fails()) {
            $validation_array = $validator->errors()->toArray();
            $validation_message = '';

            if(isset($validation_array['full_name'][0])){
                $validation_message = $validation_message . $validation_array['full_name'][0]. PHP_EOL;
            }

            if(isset($validation_array['role_type_id'][0])){
                $validation_message = $validation_message . $validation_array['role_type_id'][0]. PHP_EOL;
            }

            if(isset($validation_array['email'][0])){
                $validation_message = $validation_message . $validation_array['email'][0]. PHP_EOL;
            }

            if(isset($validation_array['password'][0])){
                $validation_message = $validation_message . $validation_array['password'][0]. PHP_EOL;
            }

            if(isset($validation_array['password_confirmation'][0])){
                $validation_message = $validation_message . $validation_array['password_confirmation'][0];
            }

            $flash_message = $validation_message;
            $flash_status = 'error';
            $redirect_url = redirect()->back();
            $data_status = false;
        }else {
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


        }

    }
}
