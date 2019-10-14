<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\SectionInfo;
use App\Service;
use App\Project;
use App\Info;

class ServicesController extends Controller
{
    public function index(){
        $nav = Navbar::find(1);
        $sectionIntel = SectionInfo::find(1);
        // $servicesRandom = Service::all();
        $services = Service::paginate(9);
        $projects = Project::all()->random(3);
        $infos = Info::find(1);
        return view('services', compact('nav','sectionIntel','services','projects','infos'));
    }
}
