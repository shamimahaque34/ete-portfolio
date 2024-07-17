<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.portfolio.manage',[
            'portfolios'=>Portfolio::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.portfolio.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Portfolio::saveOrUpdateportfolio($request);
        return redirect()->route('portfolios.index')->with('success','Portfolio Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.portfolio.form',[
            'portfolio' => Portfolio::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Portfolio::saveOrUpdateportfolio($request,$id);
        return redirect()->route('portfolios.index')->with('success','Portfolio Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::where('id',$id)->first();
        if ($portfolio)
        {
            if (file_exists($portfolio->image)){
                unlink($portfolio->image);
            }
            $portfolio->delete();
        }
        return redirect()->route('portfolios.index')->with('success','Portfolio Delete Successfully');
    }
}
