import { Component } from '@angular/core';
import { faStar } from '@fortawesome/free-solid-svg-icons';
import { RestaurantsService } from 'src/app/services/restaurants.service';

@Component({
  selector: 'app-restaurant-page',
  templateUrl: './restaurant-page.component.html',
  styleUrls: ['./restaurant-page.component.css'],
})
export class RestaurantPageComponent {
  //data list
  restaurantsList:any = [];

  constructor(private rs:RestaurantsService){} //restaurantService
  ngOnInit(){ //when the page loaded
    this.rs.getRestaurants().subscribe((res)=>{
      this.restaurantsList=res;
    })
  }
  
  max = -1;
  min = 0;
  first:string="";
  second:string="";
  third:string="";
  
   checkItem = 1;
   restToShow: any = null;
   favoriteRestaurant: any = null;
   likesArr:any=[];
   arrLoved:any=[];
   
   favorize(rest: any) {
     rest.likes += 1;
     if (rest.likes >= this.max) {
       this.max = rest.likes;
       this.favoriteRestaurant = rest;
     }
     this.isEq(rest);    
   }

   unfavorize(rest: any) {
     let likesArr = [];
     for (let i = 0; i < this.restaurantsList.length; i++) {
       likesArr[i] = this.restaurantsList[i].likes;
     }
     rest.likes = rest.likes - 1;
     if (rest.likes > this.max) {
       this.favoriteRestaurant = rest;
       this.max = rest.likes;
     } else {
       this.max = 0;
       for (let i = 0; i < this.restaurantsList.length; i++) {
         if (this.restaurantsList[i].likes >= this.max) {
           this.favoriteRestaurant = this.restaurantsList[i];
           this.max = this.restaurantsList[i].likes;
         }
       }
     }
     this.isEq(rest);
   }
   faStar = faStar;

   showFav() {
     this.restToShow = this.favoriteRestaurant;
     if (this.restToShow==null){
     this.max=-1; 
     for (let i=0;i<this.restaurantsList.length;i++) {
      if (this.restaurantsList[i].likes>this.max) {
        this.max=this.restaurantsList[i].likes;
        this.restToShow = this.restaurantsList[i];
      };
     };
     }

   };

   isEq(rest:any){
     let countLikes = 0;
     for (let i = 0; i < this.restaurantsList.length; i++) {
       this.likesArr[i] = this.restaurantsList[i].likes;       
       if (rest.likes==this.likesArr[i]) {
         countLikes+=1;
       };      
     };
     
     if (countLikes>1){
           return true;
         }else{
           return false;
         }
   }

  
}
