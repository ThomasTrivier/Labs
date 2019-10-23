<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->sortBy('id');
        $auth = User::find(Auth::id());
        return view('users', compact('users','auth'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auth = User::find(Auth::id());
        $user = User::find($id);

        if ($auth->role == 'admin' || $auth->id == $user->id) {
            return view('editUser', compact('user','auth'));
        } else if ($auth->id !== $user->id) {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $user = User::find($id);

        request()->validate([
            'name'  => 'required|string',
            'email' => 'required|email:rfc,dns',
        ]);

        if ($req->hasFile('photo_path')) {
            $file = $req->file("photo_path");
            $fileName = $file->store(env('USER_PHOTO_DIR'));
            $user->photo_path = $fileName;
        }

        $user->name = request('name');
        $user->role = request('role');
        $user->description = request('description');
        $user->email = request('email');
        if (request('password')) {
            $user->password = bcrypt(request('password'));
        }

        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $photo = $user->photo_path;
        $res = $user->delete();

        if ($res) {
            if ($photo && Storage::disk('public')->has("photo")) {
                Storage::disk('public')->delete("photo");
            }
        }
        return back();
    }
}
