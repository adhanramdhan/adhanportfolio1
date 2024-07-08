<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Imgproject;
use App\Models\Ctgproject;
use App\Models\Whatido;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $imgproject = Imgproject::first();
        $ctgproject = Ctgproject::get();
        $portfolio = Portfolio::get();
        $whatido = Whatido::get();
        $about = About::get();
        $skill = Skill::get();
        $education = Education::get();
        $experience = Experience::get();
        $profile = Profile::get()->last();
        return view('home.index', compact('profile', 'experience', 'education', 'setting' , 'about' , 'skill' , 'portfolio' , 'imgproject' , 'ctgproject' , 'whatido'));
    }
}
