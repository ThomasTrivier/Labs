<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;

class NavbarController extends Controller
{
    public function edit(){
        $nav = Navbar::find(1);
        return view('editNavbar', compact('nav'));
    }

    public function update(Request $req){
        $nav = Navbar::find(1);

        request()->validate([
            'nav1' => 'required|string',
            'nav2' => 'required|string',
            'nav3' => 'required|string',
            'nav4' => 'required|string',
        ]);

        $nav->nav1 = request()->input('nav1');
        $nav->nav2 = request()->input('nav2');
        $nav->nav3 = request()->input('nav3');
        $nav->nav4 = request()->input('nav4');

        $nav->save();
        return redirect()->route('home');
    }
}
