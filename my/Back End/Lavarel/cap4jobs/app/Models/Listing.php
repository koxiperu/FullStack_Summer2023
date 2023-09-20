<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'location',
        'email',
        'website',
        'tags',
        'description'
    ];

    public function scopeFilter($query, array $filters){
        //$query : reference of the Eloquent query builder
        //we need it bacause we will add custom conditions to our query

        //array $filters : all the filters to add in the query
        if ($filters['tag']??false) //this is null coalescing operator
        {
            //let'S prepare pur SQL query
            $query->where('tags','like', '%'.$filters['tag'].'%');
            //$filters['tag'] represents the value we got from the ListingController 
            //where() will build the SQL query. but we need to give some arguments
            //'tags' is name of column
            //'like' operation to use 
            //'%'.$filters.'%' is criteria for the 'like'-operation
        }
        if ($filters['search']??false)
        {//make an array of keywords to search for
            $keywords = explode(' ',$filters['search']);
            foreach ($keywords as $kw){
            $query->where('tags','like', '%'.$kw.'%')->orWhere('title','like', '%'.$kw.'%')->orWhere('company','like', '%'.$kw.'%')->orWhere('location','like', '%'.$kw.'%')->orWhere('description','like', '%'.$kw.'%');
            //orWhere is used to merge all the Where condition in one query
            //SELECT * FROM listings WHERE [code] or WHERE [code]
            //this means we will be looking for the searched word in tags, title and description all at once.   
            }     
        }
    }
    //relationship to User model
    public function user(){
        //now for Laravel, our listing belongs to a single user
        return $this->belongsTo(User::class, 'user_id');
    }
}
