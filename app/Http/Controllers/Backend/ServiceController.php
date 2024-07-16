<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.service.manage',[
            'services'=>Service::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Service::saveOrUpdateservice($request);
        return redirect()->route('servicees.index')->with('success','service Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.service.form',[
            'service' => Service::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Service::saveOrUpdateservice($request,$id);
        return redirect()->route('servicees.index')->with('success','service Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::where('id',$id)->first();
        if ($service)
        {
            if (file_exists($service->logo)){
                unlink($service->logo);
            }
            $service->delete();
        }
        return redirect()->route('servicees.index')->with('success','service Delete Successfully');
    }
}
