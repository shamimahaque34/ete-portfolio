<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialIcon;

class SocialIconController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.social-icon.manage',[
            'socialIcons'=>SocialIcon::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.social-icon.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         socialIcon::saveOrUpdateSocialIcon($request);
        return redirect()->route('social-icons.index')->with('success','Social Icon Create Successfully');
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
         return view('backend.social-icon.form',[
            'socialIcon' => SocialIcon::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        socialIcon::saveOrUpdateSocialIcon($request,$id);
        return redirect()->route('social-icons.index')->with('success','Social Icon Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $socialIcon = SocialIcon::where('id',$id)->first();
        if ($socialIcon)
        {
            $socialIcon->delete();
        }
        return redirect()->route('social-icons.index')->with('success','Social Icon Delete Successfully');
    }
}
