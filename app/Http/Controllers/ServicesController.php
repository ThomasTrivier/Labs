<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\Image;
use App\SectionInfo;
use App\Service;
use App\Project;
use App\Info;

class ServicesController extends Controller
{
    public function index(){
        $nav = Navbar::find(1);
        $logo = Image::find(1);
        $sectionIntel = SectionInfo::find(1);
        $random = Service::all()->take(-6)->reverse();
        $servicesRight = $random->take(-3);
        $servicesLeft = $random->take(3);
        $services = Service::paginate(9);
        $projects = Project::all()->random(3);
        $infos = Info::find(1);
        return view('services', compact('nav','logo','sectionIntel','servicesLeft','servicesRight','services','projects','infos'));
    }
}
