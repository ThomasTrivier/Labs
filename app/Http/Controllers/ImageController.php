<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Image;

class ImageController extends Controller
{
    public function index(){
        $images = Image::all()->except(1);
        $logo = Image::find(1);
        return view('images', compact('images','logo'));
    }

    public function editLogo(Request $req){
        $logo = Image::find(1);
        
        if ($req->hasFile('media_path')) {
            $file = $req->file("media_path");
            $fileName = $file->store(env('SITE_LOGO_DIR'));
            $logo->media_path = $fileName;
        }

        $logo->save();
        return redirect()->back();
    }

    public function create(){
        return view('createCarousel');
    }

    public function store(Request $req){
        $image = new Image;

        request()->validate([
            'media_path' => 'required|file|image',
        ]);

        if ($req->hasFile('media_path')) {
            $file = $req->file("media_path");
            $fileName = $file->store(env('IMG_CAROUSEL_DIR'));
            $image->media_path = $fileName;
        }

        $image->placement = "carousel";

        $image->save();
        return redirect('admin/medias');
    }

    public function edit($id){
        $image = Image::find($id);
        return view('editCarousel', compact('image'));
    }

    public function update(Request $req, $id){
        $image = Image::find($id);

        // request()->validate([
        //     'media_path' => 'image',
        // ]);

        if ($req->hasFile('media_path')) {
            $file = $req->file("media_path");
            $fileName = $file->store(env('IMG_CAROUSEL_DIR'));
            $image->media_path = $fileName;
        }

        $image->save();
        return redirect('admin/medias');
    }

    public function delete($id){
        $image = Image::find($id);
        $carousel = $image->media_path;
        $res = $image->delete();

        if ($res) {
            if ($carousel && Storage::disk('public')->has("carousel")) {
                Storage::disk('public')->delete("carousel");
            }
        }
        return redirect()-> back();
    }
}
