import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root',
})
export class RestaurantsService {
  constructor(private http: HttpClient) {}

  getRestaurants() {
    // https://restaurants-api-0623.onrender.com/docs for documentation
    return this.http.get(
      'https://restaurants-api-0623.onrender.com/restaurants'
    );
  }

  newRestaurant(rest: any) {
    return this.http.post(
      'https://restaurants-api-0623.onrender.com/restaurants',
      rest
    );
  }
}

/* To have fun

- Show the 3 most liked restaurants on the home page
- Show the testimonials on the home page (see the api documentation for the url)
- Create a form to add a new testimonial

*/
