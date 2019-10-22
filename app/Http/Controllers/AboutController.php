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

    public function update(Request $req){
        $about = About::find(1);

        request()->validate([
            'title_left'  => 'required|string',
            'span'        => 'required|string',
            'title_right' => 'required|string',
            'text_left'   => 'required|string',
            'text_right'  => 'required|string',
            'button_text' => 'required|string',
            'preview'     => 'required|image',
            'video_url'   => 'required|url',
        ]);

        $about->title_left = request('title_left');
        $about->span = request('span');
        $about->title_right = request('title_right');
        $about->text_left = request('text_left');
        $about->text_right = request('text_right');
        $about->button_text = request('button_text');
        $about->video_url = request('video_url');

        if ($req->hasFile('preview')) {
            $file = $req->file("preview");
            $fileName = $file->store(env('VIDEO_PREVIEW_DIR'));
            $about->preview = $fileName;
        }

        $about->save();
        return redirect()->route('home');
    }
}
