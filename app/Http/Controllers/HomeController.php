<?php

namespace App\Http\Controllers;

use App\Models\AdminAuth;
use App\Models\InstructorAuth;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;



class HomeController extends Controller
{


    protected $redirectTo = '/home';


    //  View Routes

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('auth.login');
    }


    public function registration()
    {
        return view('auth.registration');
    }


    public function Admin_register()
    {

        return view('auth.Admin_register');
    }

    public function admin_login()
    {

        return view('auth.admin_login');
    }

    public function Profile_data()
    {

        return view('layouts.profileData');
    }

    public function ins_reg_view(){

        return view('auth.Instructor_register');

    }

    public function ins_log_view(){

        return view('auth.Instructor_login');

    }


    //  View Routes




    // user Authentication

    //custom login
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        session()->flush();
        Auth::logout();

        return Redirect('login');
    }

    // user Authentication



    //admins Auth
    public function admin_registration(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'position' => 'required',
            'password' => 'required'
        ]);

        $data = $request->all();
        $check = $this->Admin_create($data);

        return redirect("admin_login")->withSuccess('You have signed-in');
    }


    public function Admin_create(array $data)
    {

        return AdminAuth::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'position' => $data['position'],
            'password' => Hash::make($data['password'])
        ]);
    }




    public function admin_logins(Request $request)
    {

        $request->validate([


            'email' => 'required',
            'password' => 'required'

        ]);

        $admin_credentials = $request->only('email', 'password');

        if (Auth::attempt($admin_credentials)) {

            return redirect()->intended('home')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function instructor_register(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = $request->all();
        $check = $this->instructor_create($data);

        return redirect("home")->withSuccess('You have signed-in');
    }

    public function instructor_create(array $data)
    {

        InstructorAuth::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password'])

        ]);
    }
}
