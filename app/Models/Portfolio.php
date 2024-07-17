<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'website_link','status'];


    public static function saveOrUpdatePortfolio($request, $id = null)
    {
        Portfolio::updateOrCreate(['id' => $id], [
            'image'        =>fileUpload($request->file('image'), 'portfolio', isset($id) ? static::find($id)->image : ''),
            'website_link' => $request->website_link,
            'status'       => $request->status == 'on' ? 1 : 0,
        ]);
    }
}
