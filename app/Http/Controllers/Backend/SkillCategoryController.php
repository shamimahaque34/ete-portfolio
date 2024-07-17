<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SkillCategory;
use Illuminate\Http\Request;

class SkillCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.skill-category.manage',[
            'skillCategories'=>SkillCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.skill-category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SkillCategory::saveOrUpdateskillCategory($request);
        return redirect()->route('skill-categories.index')->with('success','Skill Category Create Successfully');
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
        return view('backend.skill-category.form',[
            'skillCategory' => SkillCategory::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        SkillCategory::saveOrUpdateskillCategory($request,$id);
        return redirect()->route('skill-categories.index')->with('success','Skill Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skillCategory = SkillCategory::where('id',$id)->first();
        if ($skillCategory)
        {
            $skillCategory->delete();
        }
        return redirect()->route('skill-categories.index')->with('success','Skill Category Delete Successfully');
    }
}
