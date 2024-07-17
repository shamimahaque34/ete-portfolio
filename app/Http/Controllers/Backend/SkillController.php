<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.skill.manage',[
            'skillCategories' =>SkillCategory::all(),
            'skills' =>Skill::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.skill.form',[
            'skillCategories' =>SkillCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Skill::saveOrUpdateskill($request);
        return redirect()->route('skills.index')->with('success','Skill Create Successfully');
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
        return view('backend.skill.form',[
            'skillCategories' =>SkillCategory::all(),
            'skill' => Skill::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Skill::saveOrUpdateskill($request,$id);
        return redirect()->route('skills.index')->with('success','Skill Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::where('id',$id)->first();
        if ($skill)
        {
            $skill->delete();
        }
        return redirect()->route('skills.index')->with('success','Skill Delete Successfully');
    }
}
