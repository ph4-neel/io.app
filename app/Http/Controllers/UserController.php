<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //User register And Login===========================================>

    public function User_Register_View()
    {

        return view('Auth.User_Register');
    }

    public function User_DashBoard()
    {
        return view('Pages.User_Dash_Board');
    }


    public function Register()
    {

        $valiDateData = request()->validate([

            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);


        User::create($valiDateData);

        return redirect('/');
    }


    public function Login()
    {

        $valiDateData = request()->validate([

            'email' => 'required',
            'password' => 'required'
        ]);
    }
}
