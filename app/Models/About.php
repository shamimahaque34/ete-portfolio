<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['cv','status'];


    public static function saveOrUpdateAbout($request, $id = null)
    {
        About::updateOrCreate(['id' => $id], [
            'cv'       =>fileUpload($request->file('cv'), 'about', isset($id) ? static::find($id)->cv : ''),
            'status'      => $request->status == 'on' ? 1 : 0,
        ]);
    }
}
