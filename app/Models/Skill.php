<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name','skill_category_id','status'];


    public static function saveOrUpdateSkill($request, $id = null)
    {
        Skill::updateOrCreate(['id' => $id], [
            'skill_category_id' => $request->skill_category_id,
            'name'              => $request->name,
            'status'            => $request->status == 'on' ? 1 : 0,
        ]);
    }
}
