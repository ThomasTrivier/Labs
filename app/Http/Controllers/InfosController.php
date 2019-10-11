<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class InfosController extends Controller
{
    public function edit(){
        $infos = Info::find(1);
        return view('editInfos', compact('infos'));
    }

    public function update(){
        $infos = Info::find(1);

        $infos->title = request()->input('title');
        $infos->description = request()->input('description');
        $infos->building_name = request()->input('building_name');
        $infos->adress_part_1 = request()->input('adress_part_1');
        $infos->adress_part_2 = request()->input('adress_part_2');
        $infos->tel = request()->input('tel');
        $infos->email = request()->input('email');

        $infos->save();
        return redirect()->route('home');
    }
}
