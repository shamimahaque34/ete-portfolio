<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name','status'];


    public static function saveOrUpdateSkillCategory($request, $id = null)
    {
        SkillCategory::updateOrCreate(['id' => $id], [
            'name'        => $request->name,
            'status'      => $request->status == 'on' ? 1 : 0,
        ]);
    }
}
