<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Service;


class ApiController extends Controller
{
     private $infos;
     private $services;

    public function getServiceInfo(){

        $this->services = Service::where('status',1)->get();

        return response()->json($this->services);

    }


    public function getTestimonialInfo(){

        $this->infos = Home::where('status',1)->get();

        return response()->json($this->infos);

    }
}
