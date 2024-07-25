<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\Contact;
use App\Models\SocialIcon;


class ApiController extends Controller
{
     private $infos;
     private $services;
     private $portfolios;
     private $socialIcons;

    private $categories;
    private $subCategories;
    private $result;
    private $resultSub;

    private $contacts;
   

    public function getAllPublishedCategory()
    {
        $this->categories = SkillCategory::where('status',1)->get();
        foreach($this->categories as $key=>$category)
        {
            $this->subCategories = Skill::where('skill_category_id',$category->id)->get();
            if($this->subCategories)
            {
                foreach($this->subCategories as $key1=>$subCategory)
                {
                    $this->resultSub[$key1]['id'] = $subCategory->id;
                    $this->resultSub[$key1]['name'] = $subCategory->name;
                }
            }

            $this->result[$key]['id'] = $category->id;
            $this->result[$key]['name'] = $category->name;
            $this->result[$key]['sub_category'] = $this->resultSub;
            $this->resultSub = [];
        }

        return response()->json($this->result);
    }


    public function getServiceInfo(){

        $this->services = Service::where('status',1)->get();

        return response()->json($this->services);

    }


    public function getTestimonialInfo(){

        $this->infos = Home::where('status',1)->get();
         foreach($this->infos as $info)
        {
            $info->image =asset($info->image);
        }

        return response()->json($this->infos);

    }

    public function getPortfolioInfo(){

        $this->portfolios = Portfolio::where('status',1)->get();

        return response()->json($this->portfolios);

    }

     public function getContactInfo(){

        $this->contacts = Contact::where('status',1)->get();

        return response()->json($this->contacts);

    }

    public function getSocialIconInfo(){

        $this->socialIcons = SocialIcon::where('status',1)->get();

        return response()->json($this->socialIcons);

    }
}
