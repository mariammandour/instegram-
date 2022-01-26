<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function create()
    {
        return view('User.login');
    }

    public function store(Request $request)
    {

        $data =    $this->validate($request, [
            "name"     => "required",
            "email"    => "required|email",
            "password" => "required|min:6|max:10",
            "phone" => "required",
            "address" => "required",
            "gender" => "required"

        ]);

        $data['password'] = bcrypt($data['password']);

        $op =   Users::create($data);

        if ($op) {
            $Message = "register done";
        } else {
            $Message = "Error Try Again";
        }

        session()->flash('Message', $Message);

        return redirect(url('/login'));
    }

    public function dologin(Request $request)
    {
        // code .....
        $data =    $this->validate($request, [
            "email"    => "required|email",
            "password" => "required|min:6|max:10",
        ]);



        if (auth()->attempt($data)) {

            return redirect(url('/index'));
        } else {

            $message = "Error in Email || password try Again";
            session()->flash('Message', $message);
            return redirect(url('/login'));
        }
    }
    public function logout(){
        // code  .....
        auth()->logout();
        return redirect(url('/login'));
    }
}
