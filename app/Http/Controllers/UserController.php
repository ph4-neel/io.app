<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    //User register And Login===========================================>

    public function User_Register_View()
    {

        return view('Auth.User_Register');
    }


    public function User_Login_View()
    {
        return view('Auth.User_Login');
    }

    

    public function Error_Page()

    {
        return view('Pages.error');
    }

    


    public function User_DashBoard()
    {
        return view('Pages.User_Dash_Board');
    }


    public function Register(Request $request)
    {

        $valiDateData = $request->validate([

            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'types' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'country'=>'required',
            'address' => 'required',
            'password' => 'required'
        ]);

        $valiDateData['password'] = bcrypt($valiDateData['password']);

        $Users = User::create($valiDateData);

        auth()->login($Users);

        return redirect('/');
    }


    public function Login(Request $request)
    {

        $valiDateData = $request->validate([

            'email' => 'required|email',
            'password' => 'required',
        ]);

        // return $valiDateData;

        if(Auth::attempt($valiDateData)){

            return redirect('/');
        }

        else{

            echo "hello";
        }
    }



    public function Logout()
    {
        auth()->logout();
        return view('Pages.Homepage');
    }
}
