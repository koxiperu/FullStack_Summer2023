<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

//this new controller will handle the views, instead of relying on the route to do it
//in the future we will always do this since it's the controllers job
class ListingController extends Controller
{ //show all listings
    public function index(){
        // 2 ways of getting the tag value
        // 1) dd(request()->search);
        //2) dd(request('search'));
        return view('listings.index',[
            // 'heading'=>'Latest listings', //we can pass data to the view like this
            'listings'=> Listing::latest()->filter(request(['tag','search']))->paginate(10), // simplePaginate also works. 
            //instead of all() they ordered by date decs 
            //get()
            //paginate()
        ]);
    }

    //show a single listing
    public function show(Listing $list){
        return view('listings.show', [
            'listing'=>$list
        ]);
    }

    public function create(){
        return view('listings.create');
    }
    
    //store listing in DB
    public function store(Request $request){
        $formFields = $request->validate([   //result stored in $message - its convention
            //here we will add what rules we want for our fields
            'title'=>'required',
            //if you have more than one rule you can add []
            'company'=>['required', Rule::unique('listings', 'company')],
            //regarding -> Rule::unique ('listings' - the name of the table we using,
            //'company') - name of the field we want to be unique)
            'location'=>'required',
            'website'=>'required',
            'email'=>['required', 'email'],
            'tags'=>'required',
            'description'=>'required'
        ]);
        //make sure the image is here before saving it
        if($request->hasFile('logo')){
            //let'sbreak this down together
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
            //$formFields['logo'] >> this will add a logo key to our array of data from the form
            //$request -> file('') >> retrieve the image file that has been uploaded (could be any file really)
            //store('logos', 'public')>> the file will be stored in public/logos/ instead of just public
        }
        $formFields['user_id']=auth()->id();
        Listing::create($formFields);
        //if one of this failed, it will show the error
        //when completed go to homepage
        return redirect('/')->with('message','Listing create successfully');
    }

    public function edit(Listing $listing){
        return view('listings.edit', ['listing'=>$listing]);
    }
    public function update(Request $request, Listing $listing){
        $formFields = $request->validate([   
            'title'=>'required',
            'company'=>'required',
            'location'=>'required',
            'website'=>'required',
            'email'=>['required', 'email'],
            'tags'=>'required',
            'description'=>'required'
        ]);
        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        };
        $listing->update($formFields);
        return redirect('listings/'.$listing->id)->with('message', 'Listing updated successfully'); 
        //back() - to previous page that was opened
        //view('listings.show', ['listing'=>$listing]);
        //redirect('listings/'.listing->id)
    }
    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');;
    }
    //manage listings
    public function manage(){
        return view('listings.manage',['listings'=>auth()->user()->listings()->get()]);
        //'listings' will contain all listings created by the logged user
        //the relationship between two models make this possible
    }
}
