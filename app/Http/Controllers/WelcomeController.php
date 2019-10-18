<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\Image;
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
        $logo = Image::find(1);
        $images = Image::all()->except(1);
        $servicesTop = Service::all()->random(3);
        $about = About::find(1);
        $sectionIntel = SectionInfo::find(1);
        $testimonials = Testimonial::all();
        $services = Service::paginate(9);
        $leader = Team::where('leader','Oui')->get();
        $member1 = Team::where('leader','Non')->get()->random(1);
        $member2 = Team::where('leader','Non')->get()->random(1);
        if (Team::all()->count() > 2) {
            while ($member1[0]->id === $member2[0]->id) {
                $member2 = Team::where('leader','Non')->get()->random(1);
            }
        }
        $infos = Info::find(1);
        return view('welcome', compact('nav','logo','images','servicesTop','about','sectionIntel','testimonials','services','leader','member1','member2','infos'));
    }
}
