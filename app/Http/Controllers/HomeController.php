<?php

namespace App\Http\Controllers;

use App\Models\AdminAuth;
use App\Models\ClientData;
use App\Models\Instructor;
use App\Models\Instructor_profile;
use App\Models\Skills;
use App\Models\SocialAuth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\AdminAuth as AuthAdminAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{



    protected $redirectTo = '/home';


    //  View Routes================================================================================>


    public function home_view()
    {

        return view('home');
    }

    public function analytics_view()
    {

        return view('layouts.analytics');
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


    //  View Routes===========================================================>






    // Admin Authentication=====================================================>

    //custom login
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required:',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('analytics')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admin_auths',
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("admin_login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return AdminAuth::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("admin_login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        session()->flush();
        Auth::logout();

        return Redirect('login');
    }

    // user Authentication=====================================================================>



    //skill controller=========================================================================>

    public function Skill_post(Request $request)
    {


        $skills = new Skills();
        $skills->title = $request['title'];
        $skills->description = $request['description'];
        $skills->benefits = $request['benefits'];
        $skills->image_path = $request['image_path'];
        $skills->features = $request['features'];
        $skills->details = $request['details'];

        $skills->save();
    }


    public function getAll_Skills()
    {

        $skills=Skills::all();

        $data=compact('skills');

        return view('skills');
    }


    public function getSkills_id(Request $id)
    {


        $student = Skills::find($id);


    }


     //skill controller=========================================================================>
}
