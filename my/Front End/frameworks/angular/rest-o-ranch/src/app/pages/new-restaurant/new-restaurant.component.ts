import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { RestaurantsService } from 'src/app/services/restaurants.service';

@Component({
  selector: 'app-new-restaurant',
  templateUrl: './new-restaurant.component.html',
  styleUrls: ['./new-restaurant.component.css']
})
export class NewRestaurantComponent {
restName="";
restLikes=0;
restOpen=false;

constructor(private rs: RestaurantsService, private router: Router){}

addNewRestaurant(){
  const rest={
    name: this.restName,
    likes: this.restLikes,
    currentlyOpen: this.restOpen
  };
this.rs.restaurantsToShow(rest).subscribe((res)=>{
  this.router.navigate(["/restaurants"]);
})
}
}
