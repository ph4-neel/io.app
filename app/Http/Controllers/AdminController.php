<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function Admin_Login()
    {

        return view('Auth.Admin_login');
    }

    public function Login(Request $request)
    {
        $email = $request['email'];

        $Users = Admin::where('email', '=', $email)->get();
        $Data = compact('Users');



        if (blank($Users)) {


            return view('Auth.Admin_login');

        } else {

            return view('Admin.Index');
        }


    }
}
