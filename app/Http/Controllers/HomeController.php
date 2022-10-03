<?php

namespace App\Http\Controllers;

use App\Models\AdminAuth;
use App\Models\ClientData;
use App\Models\Instructor;
use App\Models\Instructor_profile;
use App\Models\SocialAuth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{



    protected $redirectTo = '/home';


    //  View Routes================================================================================>

    public function test(){

        return Instructor_profile::with('GetProfile')->get();
    }
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

    public function ins_reg_view()
    {

        return view('auth.Instructor_register');
    }

    public function ins_log_view()
    {

        return view('auth.Instructor_login');
    }

    //  View Routes===========================================================>




    // user Authentication=====================================================>

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
        return ClientData::create([
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

    // user Authentication=====================================================================>



    //admins Auth==============================================================================>
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

    //Admin auth============================================================================>



    //Instructor auth============================================================================>
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

        Instructor::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password'])

        ]);
    }

    //Instructor auth============================================================================>


    //facebook auth=============================================================================>
    public function facebook_redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebook_callback()
    {
        $user=Socialite::driver('facebook')->user();
        $this->create_user($user,'facebook');
        return redirect()->route('home');
    }


    public function create_user($data,$provider){

        $user=SocialAuth::where('email',$data->email)->first();

        if($user){

            $user->update([
                'provider'=>$provider,
                'provider_id'=>$data->id,
            ]);
        }

        else{

            SocialAuth::create([
                'name'=>$data->name,
                'email'=>$data->email,
                'provider'=>$provider
            ]);


        }

        Auth::login($user);

    }
     //facebook auth=============================================================================>



     //Profile data=============================================================================>
    public function Instructor_profile(Request $request){

        $request->validate([

            'position' => 'required',
            'introduction' => 'required',
            'experience' => 'required',
            'expertise' => 'required'
        ]);

        $data = $request->all();
        $check = $this->instructor_create($data);

        return redirect("home")->withSuccess('data is stored');


    }

    public function profile_create(Array $data)
    {


        Instructor_profile::create([

            'position' => $data['position'],
            'introduction' => $data['introduction'],
            'experience' => $data['experience'],
            'expertise' =>$data['expertise']

        ]);

    }

    //Profile data=============================================================================>

}
