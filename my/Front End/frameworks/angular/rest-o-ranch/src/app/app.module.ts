import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MenuComponent } from './components/menu/menu.component';
import { HomePageComponent } from './pages/home-page/home-page.component';
import { RestaurantPageComponent } from './pages/restaurant-page/restaurant-page.component';
import { AboutUsPageComponent } from './pages/about-us-page/about-us-page.component';
import { FontAwesomeModule, FaIconLibrary } from '@fortawesome/angular-fontawesome';
import {HttpClientModule} from "@angular/common/http";
import { NewRestaurantComponent } from './pages/new-restaurant/new-restaurant.component';
import { FormsModule } from '@angular/forms';

@NgModule({
  declarations: [
    AppComponent,
    MenuComponent,
    HomePageComponent,
    RestaurantPageComponent,
    AboutUsPageComponent,
    NewRestaurantComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FontAwesomeModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule {}
