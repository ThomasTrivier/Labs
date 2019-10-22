<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('teams', compact('teams'));
    }

    public function leader(){
        $members = Team::all();

        foreach ($members as $member) {
            $member->leader = 'Non';
            $member->save();
        }

        $teamLeader = Team::find(request('leader'));
        $teamLeader->leader = 'Oui';
        $teamLeader->save();

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createTeam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $member = new Team;

        request()->validate([
            'photo_path'      => 'required|file|image',
            'member_name'     => 'required|string',
            'member_function' => 'required|string',
        ]);

        if ($req->hasFile('photo_path')) {
            $file = $req->file("photo_path");
            $fileName = $file->store(env('TEAM_PHOTO_DIR'));
            $member->photo_path = $fileName;
        }

        $member->member_name = request('member_name');
        $member->member_function = request('member_function');

        $member->save();
        return redirect()->route('teams.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Team::find($id);
        return view('editTeam', compact('member'));
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
        $member = Team::find($id);

        request()->validate([
            'member_name'     => 'required|string',
            'member_function' => 'required|string',
        ]);

        if ($req->hasFile('photo_path')) {
            $file = $req->file("photo_path");
            $fileName = $file->store(env('TEAM_PHOTO_DIR'));
            $member->photo_path = $fileName;
        }

        $member->member_name = request('member_name');
        $member->member_function = request('member_function');

        $member->save();
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Team::find($id);
        $photo = $member->photo_path;
        $res = $member->delete();

        if ($res) {
            if ($photo && Storage::disk('public')->has("photo")) {
                Storage::disk('public')->delete("photo");
            }
        }
        return redirect()-> back();
    }
}
