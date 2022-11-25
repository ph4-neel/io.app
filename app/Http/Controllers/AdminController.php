<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function Admin_Login()
    {

        return view('Auth.Admin_login');
    }

    public function Super_Admin()
    {
        return view('superadmin.admin');
    }

    public function Login(Request $request)
    {
        $email = $request['email'];

        $Users = Admin::where('email', '=', $email)->get();
        $Data = compact('Users');



        if (blank($Users)) {


            return view('Auth.Admin_login');
        } else {

            return redirect('/Super_admin');
        }
    }

    public function Save_Skills(Request $request)
    {


        $skill = new Skill();
        $skill->type = $request['type'];
        $skill->title = $request['title'];
        $skill->path = $request->file('image')->store('uploads');
        $skill->benefits = $request['benefits'];
        $skill->description = $request['description'];
        $skill->faq = $request['faq'];


        $result = $skill->save();

        if ($result) {
            return redirect('/test');
        }
    }

    public function getSkills()
    {
        $skills = Skill::find();

        $data = compact('skills');

    }


}
