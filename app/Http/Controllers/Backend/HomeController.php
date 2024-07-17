<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.home.manage',[
            'homes'=>Home::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Home::saveOrUpdateHome($request);
        return redirect()->route('homes.index')->with('success','Home Create Successfully');
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
        return view('backend.home.form',[
            'home' => Home::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Home::saveOrUpdateHome($request,$id);
        return redirect()->route('homes.index')->with('success','Home Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $home = Home::where('id',$id)->first();
        if ($home)
        {
            if (file_exists($home->image)){
                unlink($home->image);
            }
            $home->delete();
        }
        return redirect()->route('homes.index')->with('success','Home Delete Successfully');
    }
}
