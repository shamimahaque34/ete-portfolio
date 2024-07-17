<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.contact.manage',[
            'contacts'=>Contact::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contact.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::saveOrUpdatecontact($request);
        return redirect()->route('contacts.index')->with('success','Contact Create Successfully');
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
        return view('backend.contact.form',[
            'contact' => Contact::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Contact::saveOrUpdatecontact($request,$id);
        return redirect()->route('contacts.index')->with('success','Contact Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::where('id',$id)->first();
        if ($contact)
        {
            $contact->delete();
        }
        return redirect()->route('contacts.index')->with('success','Contact Delete Successfully');
    }
}
