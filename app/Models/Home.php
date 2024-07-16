<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'designation','image', 'description','status'];


    public static function saveOrUpdateHome($request, $id = null)
    {
        Home::updateOrCreate(['id' => $id], [
            'name'        => $request->name,
            'designation' => $request->designation,
            'image'       =>fileUpload($request->file('image'), 'home', isset($id) ? static::find($id)->image : ''),
            'description'        => $request->description,
            'status'      => $request->status == 'on' ? 1 : 0,
        ]);
    }
}
