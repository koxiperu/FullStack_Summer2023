import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class RestaurantsService {
  constructor(private http:HttpClient) { }

  getRestaurants() { //https://restaurants-api-0623.onrender.com/docs
    return this.http.get("https://restaurants-api-0623.onrender.com/restaurants");
    
  };

 restaurantsToShow(rest:any){
  return this.http.post("https://restaurants-api-0623.onrender.com/restaurants",rest);
 } 
 
 getTestimonials(){
  return this.http.get("https://restaurants-api-0623.onrender.com/testimonials");
 }

//  testimonialsToShow(){
//   return this.http.get("")
//  }
}


