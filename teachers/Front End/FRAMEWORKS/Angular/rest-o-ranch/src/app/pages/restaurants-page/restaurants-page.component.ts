import { Component } from '@angular/core';
import { RestaurantsService } from 'src/app/services/restaurants.service';

@Component({
  selector: 'app-restaurants-page',
  templateUrl: './restaurants-page.component.html',
  styleUrls: ['./restaurants-page.component.css'],
})
export class RestaurantsPageComponent {
  favoriteRestaurant: any = null;
  /* Data List */
  restaurantsList: any = [];

  constructor(private rs: RestaurantsService) {}

  ngOnInit() {
    this.rs.getRestaurants().subscribe((res) => {
      console.log(res);
      this.restaurantsList = res;
    });
  }

  favorite(rest: any) {
    this.favoriteRestaurant = rest;
  }

  unfavorite() {
    this.favoriteRestaurant = null;
  }
}
