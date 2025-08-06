<?php

namespace App\Http\Controllers;

use id;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //Show all listings
    public function index(Request $request)
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(6),
        ]);
    }

    //Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing,
        ]);
    }

    //Show Create form
    public function create(){
        return view('listings.create');
    }

    //Store listing data
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        
        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);


        //FLASH MESSAGE

        return redirect('/')->with('message', 'Job created successfully!');
    }


    //Show Edit form
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }


        //Update listing data
    public function update(Request $request, Listing $listing){

        //make sure logged in user is owner
        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
    

        $listing->update($formFields);


        //FLASH MESSAGE

        return back()->with('message', 'Job updated successfully!');
    }

    //Delete Listing   
    public function destroy(Listing $listing) {

        if($listing->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/')->with('message', 'Job deleted successfully');
    }

    //manage listings
    public function manage(){
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }

}
