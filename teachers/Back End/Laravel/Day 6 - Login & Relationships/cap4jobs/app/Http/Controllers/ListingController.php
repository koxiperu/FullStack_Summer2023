<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

// this new controller will handle the views, instead of relying on the route to do it
// in the future, we will always do this, since it's the controller's job
class ListingController extends Controller
{
    // show all listings
    public function index(){
        // 2 ways of getting the tag value
        // dd(request()->tag);
        // dd(request('tag'));
        return view('listings.index', [
            // We need to call filter() before get() to add the extra condition to the query
            // when the query is ready, get() will trigger the call to the DB
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6),
            // Listing::latest() gets all listings and sorts by creation date (most recent first)
            // Listing::all() did not sort the results at all, making it inconsistent
            // when displaying all the listings
        ]);
    }

    // show a single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // show listing creation form
    public function create() {
        return view('listings.create');
    }

    // store listing in DB
    public function store(Request $request){
                // now for validation, there is very minimal code we need to write:
                    $formFields = $request->validate([
                        // here we will add what rules we want for our fields
                        'title' => 'required',
                        // if you have more then one rule, you can add an []
                        'company' => 'required', // Rule::unique('listings', 'company'),
                        // regarding -> Rule::unique('  listings' = the name of the table we are using,
                        // 'company') =   name of the field we want to be unique
                        'location' => 'required',
                        'website' => 'required',
                        'email' => ['required', 'email'],
                        'tags' => 'required',
                        'description' => 'required'
                    ]);

                    // make sure the image is here before saving it
                    if($request->hasFile('logo')){
                        // let's break this down together
                        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
                        // $formFields['logo'] >> this will add a 'logo' key to our array of data from the form
                        // $request->file('logo') >> retrieve the image file that has been uploaded (could be any file really)
                        // store('logos', 'public') > the file will be stored in 
                        // public/logos/ instead of just public/
                    }

                    // this will add the logged in user id to the new listing
                    $formFields['user_id'] = auth()->id();
                    
                    Listing::create($formFields);

                    // if one of this failed, it will show the error
                    // when cmpleted go to homepage
                    return redirect('/')->with('message', 'Listing created successfully');
    }

    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // update() changes the data in the table for us
        $listing->update($formFields);

        return redirect('/listings/'.$listing->id)->with('message', 'Listing updated successfully');
    }

    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    // Manage listings
    public function manage(){
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
        // 'listings' will contain all listings created by the logged in user
        // the relationship between the two models makes this possible
    }
}
