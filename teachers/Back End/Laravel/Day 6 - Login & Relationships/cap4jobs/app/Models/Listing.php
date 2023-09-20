<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'company',
    //     'location',
    //     'email',
    //     'description',
    //     'tags',
    //     'website'
    // ];

    public function scopeFilter($query, array $filters){
        // $query : an instance of the Eloquent query builder
        // we need it because we will add custom conditions to our query

        // array $filters : all the filters to add in the query

        // $filters['tag'] represents the value we got from the ListingController
        if ($filters['tag'] ?? false) // this is called a "null coalescing operator"
        {
            // let's prepare our SQL query
            $query->where('tags', 'like', '%' . $filters['tag'] . '%');
            // where() will build the SQL query for us, but we need to give some arguments
            // 'tags' is the name of the column to use
            // 'like' is the operation to use
            // '%' . $filters['tag'] . '%' is the criteria for the "like" operation
        }

        if ($filters['search'] ?? false) {
            // make an array with the list of keywords
            $keywords = explode(' ', $filters['search']);

            // orWhere() is used to chain WHERE conditions in one query
            // SELECT * FROM listings WHERE [code] OR WHERE [code] ...
            // this means we will be looking for the searched word in tags, title and description all at once
            foreach($keywords as $keyword){
            $query->orWhere('title', 'like', '%' . $keyword . '%')->orWhere('tags', 'like', '%' . $keyword . '%')->orWhere('description', 'like', '%' . $keyword . '%')->orWhere('location', 'like', '%' . $keyword . '%')->orWhere('company', 'like', '%' . $keyword . '%');
            }
        }
    }

    // relationship to User model
    public function user(){
        // now for Laravel, our Listing belong to a single User
        return $this->belongsTo(User::class, 'user_id');
    }
}