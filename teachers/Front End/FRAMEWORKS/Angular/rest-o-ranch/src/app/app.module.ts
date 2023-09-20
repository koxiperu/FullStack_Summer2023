import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MenuComponent } from './components/menu/menu.component';
import { HomePageComponent } from './pages/home-page/home-page.component';
import { RestaurantsPageComponent } from './pages/restaurants-page/restaurants-page.component';
import { AboutUsPageComponent } from './pages/about-us-page/about-us-page.component';
import { HttpClientModule } from '@angular/common/http';
import { NewRestaurantComponent } from './pages/new-restaurant/new-restaurant.component';
import { FormsModule } from '@angular/forms';

@NgModule({
  declarations: [
    AppComponent,
    MenuComponent,
    HomePageComponent,
    RestaurantsPageComponent,
    AboutUsPageComponent,
    NewRestaurantComponent,
  ],
  imports: [BrowserModule, AppRoutingModule, HttpClientModule, FormsModule],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule {}
