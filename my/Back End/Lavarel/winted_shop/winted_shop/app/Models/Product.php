<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'description',
    //     'price',
    //     'quantity',
    //     'tags',
    // ];

    public function scopeFilter($query, array $filters){
        if ($filters['tag']??false){
            $query->where('tags', 'like', '%'.$filters['tag'].'%');
        }
        if ($filters[0]??false){
            $query->where('category_id', '=', $filters[0]);
        }
        if ($filters['search']??false) {
            $keywords = explode(' ',$filters['search']);
            foreach ($keywords as $kw){
            $query->where('tags','like', '%'.$kw.'%')->orWhere('name','like', '%'.$kw.'%')->orWhere('description','like', '%'.$kw.'%')->orWhere('quantity','like', '%'.$kw.'%')->orWhere('price','like', '%'.$kw.'%');
            }
    }
}
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
