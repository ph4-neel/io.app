<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

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


    public function Error_Page()
    {

    }

    public function Register(Request $request)
    {

        $valiDateData = $request->validate([

            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'types' => 'required',
            'password' => 'required'
        ]);


        $Users = User::create($valiDateData);

        auth()->login($Users);

        return view('Pages.Homepage');
    }


    public function Login()
    {

        $valiDateData = request()->validate([

            'email' => 'required',
            'password' => 'required'
        ]);
    }

    public function Logout()
    {
        auth()->logout();
        return view('Pages.Homepage');

    }
}
