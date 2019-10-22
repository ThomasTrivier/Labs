<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServicePanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('servicePanel', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;

        request()->validate([
            'service_icon'  => 'required',
            'service_title' => 'required|string',
            'description'   => 'required|string',
        ]);

        $service->service_icon = request('service_icon');
        $service->service_title = request('service_title');
        $service->description = request('description');

        $service->save();
        return redirect()->route('services.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('editService', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $service = Service::find($id);

        request()->validate([
            'service_icon'  => 'required',
            'service_title' => 'required|string',
            'description'   => 'required|string',
        ]);

        $service->service_icon = request('service_icon');
        $service->service_title = request('service_title');
        $service->description = request('description');

        $service->save();
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::where('id',$id)->delete();
        return redirect()->back();
    }
}
