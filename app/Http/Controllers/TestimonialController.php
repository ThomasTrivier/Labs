<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all()->sortBy('id');
        return view('testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createTestimonial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $testimonial = new Testimonial;

        request()->validate([
            'photo_path'      => 'required|file|image',
            'comment'         => 'required|string',
            'client_name'     => 'required|string',
            'client_function' => 'required|string',
        ]);

        if ($req->hasFile('photo_path')) {
            $file = $req->file("photo_path");
            $fileName = $file->store(env('CLIENT_PHOTO_DIR'));
            $testimonial->photo_path = $fileName;
        }

        $testimonial->comment = request('comment');
        $testimonial->client_name = request('client_name');
        $testimonial->client_function = request('client_function');

        $testimonial->save();
        return redirect()->route('testimonials.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('editTestimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $testimonial = Testimonial::find($id);

        request()->validate([
            'comment'         => 'required|string',
            'client_name'     => 'required|string',
            'client_function' => 'required|string',
        ]);

        if ($req->hasFile('photo_path')) {
            $file = $req->file("photo_path");
            $fileName = $file->store(env('CLIENT_PHOTO_DIR'));
            $testimonial->photo_path = $fileName;
        }

        $testimonial->comment = request('comment');
        $testimonial->client_name = request('client_name');
        $testimonial->client_function = request('client_function');

        $testimonial->save();
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $photo = $testimonial->photo_path;
        $res = $testimonial->delete();

        if ($res) {
            if ($photo && Storage::disk('public')->has("photo")) {
                Storage::disk('public')->delete("photo");
            }
        }
        return redirect()-> back();
    }
}
