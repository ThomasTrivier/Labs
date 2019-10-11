<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function edit(){
        $about = About::find(1);
        return view('editAbout', compact('about'));
    }

    public function update(){
        $about = About::find(1);

        $about->title_left = request()->input('title_left');
        $about->span = request()->input('span');
        $about->title_right = request()->input('title_right');
        $about->text_left = request()->input('text_left');
        $about->text_right = request()->input('text_right');
        $about->button_text = request()->input('button_text');
        $about->video_url = request()->input('video_url');

        $about->save();
        return redirect()->route('home');
    }
}
