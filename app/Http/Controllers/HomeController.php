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

    public function data(){

        return view('admin.data_entry');
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

    public function soft()
    {

        return view('layouts.entry_soft');
    }

    public function soft_list()
    {

        return view('admin.soft_skills');
    }

    public function api_view(){

        return view('api.api');
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
        $skills->features = $request['features'];
        $skills->image_path = $request['image_path'];
        $skills->tags = $request['tags'];
        $skills->details = $request['details'];

        $result=$skills->save();

        if($result){
            return view('layouts.analytics');
        }
    }


    public function getAll_Skills()
    {

        $skills = Skills::all();

        $data = compact('skills');

        return view('layouts.entry_soft')->with($data);
    }

    public function get_Skills_List()
    {

        $skills = Skills::all();

        $data = compact('skills');

        return view('admin.soft_skills')->with($data);
    }


    public function getId($id)
    {




        $skills = Skills::find($id);

        $data = compact('skills');

        return view('skill_detail')->with($data);


    }

    //skill controller=========================================================================>
}
