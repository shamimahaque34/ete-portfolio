<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialIcon extends Model
{
    use HasFactory;

    protected $fillable = ['name','link','status'];


    public static function saveOrUpdateSocialIcon($request, $id = null)
    {
        SocialIcon::updateOrCreate(['id' => $id], [
            'name'        => $request->name,
            'link'        => $request->link,
            'status'      => $request->status == 'on' ? 1 : 0,
        ]);
    }
}
