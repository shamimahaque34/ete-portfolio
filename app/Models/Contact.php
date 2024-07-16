<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['phone', 'email','address', 'social_link','status'];


    public static function saveOrUpdateContact($request, $id = null)
    {
        Contact::updateOrCreate(['id' => $id], [
            'phone'       => $request->phone,
            'email'       => $request->email,
            'address'     => $request->address,
            'social_link' => $request->social_link,
            'status'      => $request->status == 'on' ? 1 : 0,
        ]);
    }
}
