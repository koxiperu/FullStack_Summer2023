import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomePageComponent } from './pages/home-page/home-page.component';
import { RestaurantPageComponent } from './pages/restaurant-page/restaurant-page.component';
import { AboutUsPageComponent } from './pages/about-us-page/about-us-page.component';
import { NewRestaurantComponent } from './pages/new-restaurant/new-restaurant.component';


const routes: Routes = [
  {
    path:"",
    redirectTo:"home",
    pathMatch:"full"
  },
  {
    path:"home",
    component:HomePageComponent
  },
  {
    path:"restaurants",
    component:RestaurantPageComponent
  },
  {
    path:"about-us",
    component:AboutUsPageComponent
  },
  {
    path:"new-restaurant",
    component:NewRestaurantComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
