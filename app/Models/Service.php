<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['service_icon','title','description','status'];


    public static function saveOrUpdateService($request, $id = null)
    {
        Service::updateOrCreate(['id' => $id], [
            'service_icon' => $request->service_icon,
            'title'        =>$request->title,
            'description'  => $request->description,
            'status'       => $request->status == 'on' ? 1 : 0,
        ]);
    }
}
