<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\About;
use App\SectionInfo;
use App\Testimonial;
use App\Service;
use App\Team;
use App\Info;

class WelcomeController extends Controller
{
    public function index(){
        $nav = Navbar::find(1);
        $about = About::find(1);
        $sectionIntel = SectionInfo::find(1);
        $testimonials = Testimonial::all();
        $services = Service::all();
        $teams = Team::all();
        $infos = Info::find(1);
        return view('welcome', compact('nav','about','sectionIntel','testimonials','services','teams','infos'));
    }
}
